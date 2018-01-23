<?php

namespace common\models;

use Yii;
use common\models\OrderMaster;

/**
 * This is the model class for table "cart".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $session_id
 * @property integer $product_id
 * @property integer $quantity
 * @property integer $options
 * @property string $date
 * @property integer $gift_option
 * @property double $rate
 */
class Cart extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'cart';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
//            [['user_id', 'product_id', 'quantity', 'options', 'date', 'gift_option', 'rate'], 'required'],
//            [['user_id', 'product_id', 'quantity', 'options', 'gift_option'], 'integer'],
//            [['date'], 'safe'],
//            [['rate'], 'number'],
//            [['session_id'], 'string', 'max' => 225],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'session_id' => 'Session ID',
            'product_id' => 'Product ID',
            'quantity' => 'Quantity',
            'options' => 'Options',
            'date' => 'Date',
            'gift_option' => 'Gift Option',
            'rate' => 'Rate',
            'item_type' => 'Item Type',
        ];
    }

    /*     * *************************** */

    public static function usercheck() {
        if (isset(Yii::$app->user->identity->id)) {
            $user_id = Yii::$app->user->identity->id;
            $condition = ['user_id' => $user_id];
        } else {
            if (!isset(Yii::$app->session['temp_user'])) {
                $milliseconds = round(microtime(true) * 1000);
                Yii::$app->session['temp_user'] = $milliseconds;
            }
            $sessonid = Yii::$app->session['temp_user'];
            $condition = ['session_id' => $sessonid];
        }
        return $condition;
    }

    public static function add_to_cart($user_id, $temp_session, $product_id, $qty) {
        $model = new cart;
        $model->user_id = $user_id;
        $model->session_id = $temp_session;
        $model->product_id = $product_id;
        $model->quantity = $qty;
        $model->date = date('Y-m-d H:i:s');
        if ($model->save()) {
            return TRUE;
        }
    }

    public static function cart_content() {
        $condition = Cart::usercheck();
        $cart_contents = Cart::find()->where($condition)->all();
        if (!empty($cart_contents)) {
            $cart_content = Cart::content($cart_contents);
            $cart_total = Cart::total($cart_contents);
            echo '<span class="dropdown-triangle-up"></span><a href="#" class="dd-close-btn"><i class="ti-close"></i></a><div class="dropdown-head">
<h4 class="pull-left">' . Cart::cart_count() . ' items in the shopping bag</h4></div><div class="dd-wrapper">
<div id="cart-product-group" class="dropdown-product-list">' . $cart_content .
            '<div class="text-center clear-all-btn"><span class="cart-block-subtotal">Cart Subtotal: $' . sprintf("%0.2f", $cart_total) . '</span></div></div>
  <div class="row no-gutter"><div class="col-xs-6">
  <a href="' . Yii::$app->homeUrl . 'cart/mycart" class="btn btn-md btn-third-col btn-w100">View Cart</a> </div><div class="col-xs-6">
  <a href="" class="btn btn-md btn-third-col btn-w100">Procced to Checkout</a></div></div></div>';
        } else {
            echo '<span class="dropdown-triangle-up"></span><a href="#" class="dd-close-btn"><i class="ti-close"></i></a><div class="dropdown-head">
<h4 class="pull-left">' . Cart::cart_count() . ' items in the shopping bag</h4></div><div class="dd-wrapper">
    <div class="dd-list-empty">There is no product in shoppings cart!</div></div>';
        }
    }

    public static function Content($cart_contents) {
        $content = '';
        $i = 0;
        foreach ($cart_contents as $cart_content) {
            $i++;
            $prod_details = Product::find()->where(['id' => $cart_content->product_id, 'status' => '1'])->one();
            if ($prod_details->offer_price == '0' || $prod_details->offer_price == '') {
                $price = $prod_details->price;
            } else {
                $price = $prod_details->offer_price;
            }
            $product_image = Yii::$app->basePath . '/../uploads/product/' . $prod_details->id . '/profile/' . $prod_details->canonical_name . '.' . $prod_details->profile;
            if (file_exists($product_image)) {
                $image = '<img src="' . Yii::$app->homeUrl . 'uploads/product/' . $prod_details->id . '/profile/' . $prod_details->canonical_name . '_thumb.' . $prod_details->profile . '" alt="' . $prod_details->canonical_name . '" />';
            } else {
                $image = '<img src="' . Yii::$app->homeUrl . 'uploads/product/profile_thumb.png" alt=""/>';
            }
            $product_name = $prod_details->product_name;
            if (strlen($product_name) > 25) {
                $str = substr($product_name, 0, 25) . '...';
            } else {
                $str = $product_name;
            }
            $content .= '<div class="dd-product-group" id="pr_' . $i . '"><div class="dd-product-box pull-left">
                  <a href="product-detail.php" title="' . $prod_details->canonical_name . '">' . $image . '</a></div>
                  <div class="dd-product-desc pull-left">
                  <a class="title">' . $prod_details->product_name . '</a>
                  <div class="qty">' . $cart_content->quantity . ' x <span class="active">$' . sprintf("%0.2f", $price) . '</span></div>
                  </div></div>';
//                      <a href="#" class="close-btn ddr"><i class="ti-close"></i></a>
        }
        return $content;
    }

    public static function total($cart) {
        $subtotal = '0';
        foreach ($cart as $cart_item) {
            $product = Product::find()->where(['id' => $cart_item->product_id, 'status' => '1'])->one();
//            $product = ProductVendor::findOne($cart_item->product_id);
            if ($product->offer_price == '0' || $product->offer_price == '') {
                $price = $product->price;
            } else {
                $price = $product->offer_price;
            }
            $subtotal += ($price * $cart_item->quantity);
        }
        return $subtotal;
    }

    public static function cart_count() {
        $condition = Cart::usercheck();
        $cart_items = Cart::find()->where($condition)->all();
        if (!empty($cart_items)) {
            return count($cart_items);
        } else {
            return '0';
        }
    }

    public static function changecart($tempuser) {
        if (isset($tempuser)) {
            $models = Cart::find()->where(['session_id' => Yii::$app->session['temp_user']])->all();
            foreach ($models as $msd) {
                $product_allready = Cart::find()->where(['user_id' => Yii::$app->user->identity->id, 'product_id' => $msd->product_id])
                        ->andWhere(['<>', 'session_id', Yii::$app->session['temp_user']])
                        ->orWhere(['session_id' => 'NULL'])
                        ->one();

                if ($product_allready) {
                    $product_allready->quantity = $product_allready->quantity + $msd->quantity;
                    $product_allready->save();
                    $msd->delete();
                    unset($product_allready);
                } else {
                    $msd->user_id = Yii::$app->user->identity->id;
                    $msd->save();
                }
            }
            unset(Yii::$app->session['temp_user']);
        }
    }

    public static function check_cart($condition) {
        $cart_items = Cart::find()->where($condition)->all();
        foreach ($cart_items as $cart) {
            $check_product = Product::find()->where(['id' => $cart->product_id, 'status' => '1'])->one();

            if (empty($check_product)) {
                Yii::$app->response->redirect(['cart/mycart'])->send();
                return;
            }
        }
    }

    public static function ProductStock($product_id) {
        $product = Product::find()->where(['id' => $product_id, 'status' => '1'])->one();
        return $product->stock;
    }

    public static function check_product() {
        $cart_items = Cart::find()->where(['user_id' => Yii::$app->user->identity->id])->all();
        foreach ($cart_items as $cart) {
            $check_product = Product::find()->where(['id' => $cart->product_id])->one();
            if (empty($check_product)) {
                $cart->delete();
//                $this->redirect('mycart');
            }
        }
    }

    public static function Checkout() {
        Cart::check_product();
        $cart = Cart::find()->where(['user_id' => Yii::$app->user->identity->id])->all();
        $orders = Cart::addOrder($cart);
        if (Cart::orderProducts($orders, $cart)) {
//            Cart::Addpromotions($orders);
            Cart::clearcart($cart);
            Cart::stock_clear($orders);
//                Yii::$app->response->redirect(['checkout/payment', 'id' => $orders['order_id']])->send();
            return $orders['order_id'];
        } else {
            Yii::$app->response->redirect(['cart/mycart'])->send();
            return false;
        }
    }

    public static function addOrder($cart) {
        $model = new OrderMaster;
        $serial_no = Settings::findOne(4)->value;
        $prefix = Settings::findOne(4)->prefix;
        $model->order_id = Cart::generateProductEan($prefix, $serial_no);
        $model->user_id = Yii::$app->user->identity->id;
        $total_amt = Cart::total($cart);
        $model->total_amount = $total_amt;
        $model->net_amount = Cart::net_amount($total_amt);
        $model->status = 1;
        $model->order_date = date('Y-m-d H:i:s');
        $model->doc = date('Y-m-d');

        if ($model->save()) {
            return ['master_id' => $model->id, 'order_id' => $model->order_id];
        }
//            else {
//                var_dump($model1->getErrors());
//                exit;
//            }
    }

    public static function orderProducts($orders, $carts) {
        foreach ($carts as $cart) {
            $prod_details = Product::findOne($cart->product_id);

            $model_prod = new OrderDetails;
            $model_prod->master_id = $orders['master_id'];
            $model_prod->order_id = $orders['order_id'];
            $model_prod->product_id = $cart->product_id;
            $model_prod->quantity = $cart->quantity;
            if ($prod_details->offer_price == '0' || $prod_details->offer_price == '') {
                $price = $prod_details->price;
            } else {
                $price = $prod_details->offer_price;
            }
            $model_prod->item_type = $cart->item_type;
            $model_prod->amount = $price;
            $model_prod->rate = ($cart->quantity) * ($price);
            $model_prod->status = '0';
            if ($model_prod->save()) {
//                    return TRUE;
            }
        }
        return TRUE;
    }

    public static function generateProductEan($prefix, $serial_no) {
        $orderid_exist = OrderMaster::find()->where(['order_id' => $prefix . $serial_no])->one();
        if (!empty($orderid_exist)) {
            return Cart::generateProductEan($prefix, $serial_no + 1);
        } else {
            Cart::Updateorderid($serial_no);
            return $prefix . $serial_no;
        }
    }

    public static function Updateorderid($id) {
        echo $id;
        $orderid = \common\models\Settings::findOne(4);
        $orderid->value = $id;
        $orderid->save();
        return;
    }

    public static function net_amount($total_amt) {
        $limit = Settings::findOne(1)->value;
        $net_amnt = $total_amt;
        if ($limit > $total_amt) {
            $extra = Settings::findOne(2)->value;
            $net_amnt = $extra + $total_amt;
        }
        return $net_amnt;
    }

    public static function orderbilling($bill_address) {
        $model1 = OrderMaster::find()->where(['order_id' => Yii::$app->session['orderid']])->one();
        $model1->bill_address_id = $bill_address;
        $model1->status = 2;
        $model1->save();
        if (isset(Yii::$app->request->post()['UserAddress']['check'])) {
            $model1->ship_address_id = $bill_address;
            $model1->status = 3;
            $model1->save();
            Yii::$app->response->redirect(['checkout/confirm-order'])->send();
        } else {
            Yii::$app->response->redirect(['checkout/shipping'])->send();
        }
    }

    public static function ordershipping($bill_address) {
        $model1 = OrderMaster::find()->where(['order_id' => Yii::$app->session['orderid']])->one();
        $model1->ship_address_id = $bill_address;
        $model1->status = 3;
        if ($model1->save()) {

            Yii::$app->response->redirect(['checkout/confirm-order'])->send();
        }
    }

    public static function clearcart($models) {
        foreach ($models as $model) {
            $model->delete();
        }
    }

    public static function stock_clear() {
        $order_details = OrderDetails::find()->where(['order_id' => $orders['order_id']])->all();
        foreach ($order_details as $order) {
            $product = Product::findOne($order->product_id);
//            $old_qty = $product->stock;
            $product->stock = $product->stock - $order->quantity;
            $product->save();
//            StockHistory::stockhistory($product->qty, '3', $product->id, '3', $old_qty);
        }
    }

    public static function date() {
        $date = date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . ' - 8 days'));
        return $date;
    }

}
