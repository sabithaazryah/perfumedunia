<?php

namespace frontend\controllers;

use yii;
use common\models\Product;
use common\models\Cart;
use common\models\User;
use frontend\models\CartsignupForm;
use common\models\Settings;
use yii\base\Component;
use yii\db\MigrationInterface;
use yii\di\Instance;
use yii\db\Expression;
use common\models\OrderMaster;
use common\models\OrderDetails;
use common\models\CreateYourOwn;

class CartController extends \yii\web\Controller {

    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public function init() {
        date_default_timezone_set('Asia/Kolkata');
    }

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionBuynow() {
        if (yii::$app->request->isAjax) {
            /*             * ************* */
            $canonical_name = Yii::$app->request->post()['product'];
            $qty = Yii::$app->request->post()['qty'];
            $product = Product::find()->where(['canonical_name' => $canonical_name, 'status' => '1'])->one();
            if ($product->stock > 0) {
                $condition = Cart::usercheck();
                $user_id = isset(Yii::$app->user->identity->id) ? Yii::$app->user->identity->id : '';


                $cart = Cart::find()->where(['product_id' => $product->id])->andWhere($condition)->one();
                if (!empty($cart)) {
                    $quantity = $cart->quantity + $qty;
                    $stock = Cart::productStock($product->id);
                    $cart->quantity = $quantity;
                    if ($stock >= $quantity) {
                        $cart->save();
                    }
                } else {
                    Cart::add_to_cart($user_id, Yii::$app->session['temp_user'], $product->id, $qty);
                }
                Cart::cart_content();
            } else {
                echo '9';
                exit;
            }
        }
    }

    public function actionMycart() {
        if (isset(Yii::$app->user->identity->id)) {
            if (isset(Yii::$app->session['temp_user'])) {
                Cart::changecart(Yii::$app->session['temp_user']);
            }
        }
        $condition = Cart::usercheck();
        $cart_items = Cart::find()->where($condition)->all();
        if (!empty($cart_items)) {
            Cart::check_product();
            $subtotal = Cart::total($cart_items);
            $shippinng_limit = Settings::findOne(1)->value;
            $ship_charge = Settings::findOne(2)->value;
            $shipping = $shippinng_limit > $subtotal ? $ship_charge : '0';
//			$shipping = $shippinng_limit > $subtotal ? Cart::shipping_charge($cart_items) : '0';
            $grand_total = $shipping + $subtotal;
//            $grand_total = $this->net_amount($subtotal, $cart_items);
            return $this->render('cart', ['cart_items' => $cart_items, 'subtotal' => $subtotal, 'shipping' => $shipping, 'grand_total' => $grand_total, 'ship_charge' => $ship_charge]);
        } else {
            return $this->render('emptycart');
        }
    }

    public function actionCart_remove() {
        if (yii::$app->request->isAjax) {
            $id = Yii::$app->request->post()['id'];
            $condition = Cart::usercheck();
            $cart_items = Cart::find()->where($condition)->all();
            $cart = Cart::find()->where(['id' => yii::$app->EncryptDecrypt->Encrypt('decrypt', $id)])->andWhere($condition)->one();
            if ($cart) {
                $cart->delete();
            } else {
                echo json_encode(array('msg' => 'failed', 'reason' => 'Cannot find.'));
                exit;
            }
            $contents = Cart::find()->where($condition)->all();
            if (!empty($contents)) {
                if (count($cart_items) != Yii::$app->request->post()['count']) {
                    $this->redirect(array('cart/mycart'));
                } else {
                    Cart::check_cart($condition);
                    $subtotal = Cart::total($contents);
                    $shippinng_limit = Settings::findOne(2)->value;
                    $ship_charge = Settings::findOne(3)->value;
                    $shipping = $shippinng_limit > $subtotal ? $ship_charge : 0;
                    $grandtotal = $shipping + $subtotal;
//                    $content = Cart::cart_content();
//                    $grandtotal = $this->net_amount($subtotal, $contents);
                    echo json_encode(array('msg' => 'success', 'subtotal' => sprintf('%0.2f', $subtotal), 'grandtotal' => sprintf('%0.2f', $grandtotal), 'shipping' => sprintf('%0.2f', $shipping)));
                    exit;
                }
            } else {
                echo json_encode(array('msg' => 'failed', 'content'=>'empty'));
                exit;
//                $this->redirect(array('cart/mycart'));
//                return $this->redirect('mycart');
            }
        }
    }

    public function actionFindstock() {
        if (yii::$app->request->isAjax) {
            $cart_id = Yii::$app->request->post()['cartid'];
            $qty = Yii::$app->request->post()['quantity'];
            if (isset($cart_id)) {
                $cart = Cart::findOne(yii::$app->EncryptDecrypt->Encrypt('decrypt', $cart_id));
                if ($qty == 0 || $qty == "") {
                    $qty = 1;
                }
                $product = Product::find()->where(['id' => $cart->product_id, 'status' => '1'])->one();
                if (!empty($product)) {
                    $quantity = $qty > $product->stock ? $product->stock : $qty;
                    if ($product->offer_price == '0' || $product->offer_price == '') {
                        $price = $product->price;
                    } else {
                        $price = $product->offer_price;
                    }
                    $total = $price * $quantity;
                    echo json_encode(array('msg' => 'success', 'quantity' => $quantity, 'total' => sprintf('%0.2f', $total)));
                } else {
                    echo json_encode(array('msg' => 'error', 'quantity' => '', 'total' => sprintf('%0.2f', '0')));
                }
            }
        }
    }

    public function actionUpdatecart() {
        if (yii::$app->request->isAjax) {
            $cart_id = Yii::$app->request->post()['cartid'];
            $qty = Yii::$app->request->post()['quantity'];
            if (isset($cart_id)) {
                $cart = Cart::findone(yii::$app->EncryptDecrypt->Encrypt('decrypt', $cart_id));
                $product = Product::findOne($cart->product_id);
                if ($qty == 0 || $qty == "") {
                    $qty = 1;
                }
                $cart->quantity = $qty > $product->stock ? $product->stock : $qty;
                if ($cart->save()) {
                    $condition = Cart::usercheck();
                    Cart::check_cart($condition);
                    $cart_items = Cart::find()->where($condition)->all();
                    if (!empty($cart_items)) {
                        if (count($cart_items) != Yii::$app->request->post()['count']) {
                            $this->redirect(array('cart/mycart'));
                        }
                        $subtotal = Cart::total($cart_items);
                        $shippinng_limit = Settings::findOne(1)->value;
                        $ship_charge = Settings::findOne(2)->value;
                        $shipping = $shippinng_limit > $subtotal ? $ship_charge : 0;
                        $grandtotal = $shipping + $subtotal;
                        $cart_count = Cart::cart_count();
                    }
                    echo json_encode(array('msg' => 'success', 'subtotal' => sprintf('%0.2f', $subtotal), 'grandtotal' => sprintf('%0.2f', $grandtotal), 'shipping' => sprintf('%0.2f', $shipping), 'cart_count' => $cart_count));
                } else {
                    echo json_encode(array('msg' => 'error', 'content' => 'Cannot be Changed'));
                }
            }
        }
    }

    public function actionProceed() {
        if (isset(Yii::$app->user->identity->id)) {
            $cart = Cart::find()->where(['user_id' => Yii::$app->user->identity->id])->all();
            if (!empty($cart)) {
                $order_id = Cart::checkout();
//                $orders = Cart::addOrder($cart);
//                Cart::orderProducts($orders, $cart);
                Yii::$app->session['orderid'] = $order_id;
//                Cart::clearcart($cart);
               return $this->redirect(array('checkout/promotion'));
            }else{
              return $this->redirect(array('cart/mycart'));
            }
        } else {
            return $this->redirect(array('site/login'));
        }
    }

    public function actionGetcart() {
        if (yii::$app->request->isAjax) {
            Cart::cart_content();
        }
    }

    /*     * *********************End*********************************************** */

    public function actionCheckout() {
//        $this->redirect(['cart/proceed']);
        if (!isset(Yii::$app->user->identity->id)) {
            yii::$app->session['after_login'] = 'cart/proceed';
            $model = new CartsignupForm();
            if ($model->load(Yii::$app->request->post())) {
                $user = new User();
                $user->email = $model->email;
                $user->first_name = $model->first_name;
                $user->last_name = $model->last_name;
                $user->country = '1';
                $user->dob = '00-00-0000';
                $user->gender = '0';
                $user->country_code = Yii::$app->request->post()["CartsignupForm"]['country_code'];
                $user->mobile_no = $model->mobile_no;
                $user->email = $model->email;
                $user->password = '***guestpassword***';
                if ($user->save()) {
                    if (Yii::$app->getUser()->login($user)) {
                        $this->redirect(['cart/proceed']);
                    }
                } else {
//                    var_dump($user->getErrors());
//                    exit;
                    return $this->render('checkout', ['model' => $model, 'user' => $user]);
                }
            }
//            var_dump($model);exit;
            return $this->render('checkout', ['model' => $model]);
        } else {
            $this->redirect(['cart/proceed']);
        }
    }

    public function actionProceed1() {
//        Yii::$app->session['orderid']='';exit;
        if (isset(Yii::$app->user->identity->id)) {
            if (isset(Yii::$app->session['temp_user'])) {
                /* Change tempuser cart to login user */
                $this->changecart(Yii::$app->session['temp_user']);
            }
            $cart = Cart::find()->where(['user_id' => Yii::$app->user->identity->id])->all();
//			$check = OrderMaster::find()->where(['user_id' => Yii::$app->user->identity->id])->andWhere(['not in', 'status', [4, 5]])->one();
//			if (!empty($check)) {
//				Yii::$app->session['orderid'] = $check->order_id;
//			}
            if (!empty($cart)) {
//				if (Yii::$app->session['orderid'] == '') {
//                    exit('hallo');
                $orders = $this->addOrder($cart);
                $this->orderProducts($orders, $cart);
                Yii::$app->session['orderid'] = $orders['order_id'];
                $model1 = Cart::find()->where(['user_id' => Yii::$app->user->identity->id])->all();
                $this->clearcart($model1);
                $this->redirect(array('checkout/promotion'));
//				} else {
////                    exit('hai');
//					$orders = $this->addOrder1($cart);
//					$this->orderProducts($orders, $cart);
//					$this->redirect(array('checkout/checkout'));
//				}
            }
//                        else {
//                                $this->redirect(array('cart/mycart'));
//                        }
        } else if (Yii::$app->session['temp_user']) {
            yii::$app->session['after_login'] = 'cart/proceed';
            $this->redirect(array('site/login'));
        }
    }

    public function addOrder1($cart) {
        $model1 = OrderMaster::find()->where(['order_id' => Yii::$app->session['orderid']])->one();
        if (!empty($model1)) {
            $model1->user_id = Yii::$app->user->identity->id;
            $total_amt = $this->total($cart);
            $model1->total_amount = $total_amt;
            $model1->net_amount = $this->net_amount($total_amt);
            $model1->status = 1;
//            date_default_timezone_set('Asia/Kolkata');
            $model1->order_date = date('Y-m-d H:i:s');
            $model1->doc = date('Y-m-d');
            if ($model1->save()) {
                return ['master_id' => $model1->id, 'order_id' => $model1->order_id];
            }
        } else {
            $this->redirect(array('cart/mycart'));
        }
    }

    public function addOrder($cart) {
        $model1 = new OrderMaster;
        if (isset(Yii::$app->user->identity->id)) {
            $serial_no = Settings::findOne(4)->value;
            $prefix = Settings::findOne(4)->prefix;
            $model1->order_id = $this->generateProductEan($prefix . $serial_no);
            $model1->user_id = Yii::$app->user->identity->id;
            $total_amt = $this->total($cart);
            $model1->total_amount = $total_amt;
            $model1->net_amount = $this->net_amount($total_amt);
            $model1->status = 1;
//            date_default_timezone_set('Asia/Kolkata');
            $model1->order_date = date('Y-m-d H:i:s');
            $model1->doc = date('Y-m-d');

            if ($model1->save()) {
                $this->Updateorderid($model1->order_id);
                return ['master_id' => $model1->id, 'order_id' => $model1->order_id];
            }
//            else {
//                var_dump($model1->getErrors());
//                exit;
//            }
        } else if (Yii::$app->session['temp_user']) {
            yii::$app->session['after_login'] = 'cart/proceed';
            $this->redirect(array('site/login'));
        }
    }

    public function orderProducts($orders, $carts) {
        foreach ($carts as $cart) {
            if ($cart->item_type == 1) {
                $prod_details = CreateYourOwn::findOne($cart->product_id);
            } else {
                $prod_details = Product::findOne($cart->product_id);
            }
            $check = OrderDetails::find()->where(['order_id' => $orders['order_id'], 'product_id' => $cart->product_id, 'item_type' => $cart->item_type])->one();
            if (!empty($check)) {
                $check->quantity = $cart->quantity;
                if ($cart->item_type == 1) {
                    $price = $prod_details->tot_amount;
                } else {
                    if ($prod_details->offer_price == '0' || $prod_details->offer_price == '') {
                        $price = $prod_details->price;
                    } else {
                        $price = $prod_details->offer_price;
                    }
                }
                $check->amount = $price;
                $check->rate = ($cart->quantity) * ($price);
                $check->status = '0';
                $check->save();
            } else {
                $model_prod = new OrderDetails;
                $model_prod->master_id = $orders['master_id'];
                $model_prod->order_id = $orders['order_id'];
                $model_prod->product_id = $cart->product_id;
                $model_prod->quantity = $cart->quantity;
                if ($cart->item_type == 1) {
                    $price = $prod_details->tot_amount;
                    $model_prod->item_type = 1;
                } else {
                    if ($prod_details->offer_price == '0' || $prod_details->offer_price == '') {
                        $price = $prod_details->price;
                    } else {
                        $price = $prod_details->offer_price;
                    }
                }
                $model_prod->item_type = $cart->item_type;
                $model_prod->amount = $price;
                $model_prod->rate = ($cart->quantity) * ($price);
                $model_prod->status = '0';
                if ($model_prod->save()) {
//                    return TRUE;
                }
//                 else {
//                var_dump($model_prod->getErrors());
//                exit;
//            }
            }
        }
    }

    public function generateProductEan($serial_no) {
        $orderid_exist = OrderMaster::find()->where(['order_id' => $serial_no])->one();
        if (!empty($orderid_exist)) {
            return $this->generateProductEan($serial_no + 1);
        } else {
            return $serial_no;
        }
    }

    public function Updateorderid($id) {
        $orderid = \common\models\Settings::findOne(4);
        $orderid->value = $id;
        $orderid->save();
        return;
    }

    function changecart($temp) {
        $models = Cart::find()->where(['session_id' => Yii::$app->session['temp_user']])->all();
        foreach ($models as $msd) {
            $msd->user_id = Yii::$app->user->identity->id;
            $msd->save();
        }
    }

    function clearcart($models) {
        foreach ($models as $model) {
            $model->delete();
        }
    }

    function date() {
//        $date = date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s')));
        $date = date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . ' - 45 days'));
        return $date;
    }

    public function actionRemoveWishlist() {
        if (yii::$app->request->isAjax) {
            $id = Yii::$app->request->post()['wish_list_id'];
            $model = \common\models\WishList::findOne($id);
            $model->delete();
            echo 1;
            exit;
        }
    }

}
