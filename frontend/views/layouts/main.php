<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\CmsOthers;
use common\models\Category;
use common\models\LoginForm;
use common\models\User;

$cart_count = common\components\Cartcount::Count();
AppAsset::register($this);
$params = $parameters = \yii::$app->getRequest()->getQueryParams();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en-US">
    <!--<![endif]-->

    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<link rel="shortcut icon" href="<?= yii::$app->homeUrl; ?>../images/favicon.ico"  />
    <head>
        <title>Perfume Dunia</title>
        <script type="text/javascript">document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>

        <meta charset="UTF-8">

        <script>
            var homeUrl = '<?= Yii::$app->homeUrl; ?>'
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><!-- For SEO -->
        <meta name="description" content="">
        <meta name="keywords" content="">
        <!-- End SEO--> <link rel="pingback" href="xmlrpc.php">			<style>
            .wishlist_table .add_to_cart, a.add_to_wishlist.button.alt { border-radius: 16px; -moz-border-radius: 16px; -webkit-border-radius: 16px; }			</style>
        <script type="text/javascript">
            var yith_wcwl_plugin_ajax_web_url = 'wp-admin/admin-ajax.html';
        </script>

        <link rel="alternate" type="application/rss+xml" title="Fashion &amp; Style &raquo; Feed" href="indexd784.html?feed=rss2" />
        <link rel="alternate" type="application/rss+xml" title="Fashion &amp; Style &raquo; Comments Feed" href="indexa6da.html?feed=comments-rss2" />
        <link rel="alternate" type="application/rss+xml" title="Fashion &amp; Style &raquo; Home page 3 Comments Feed" href="index5c67.html?feed=rss2&amp;page_id=1988" />
        <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl": "http:\/\/s.w.org\/images\/core\/emoji\/72x72\/", "ext": ".png", "source": {"concatemoji": "http:\/\/venusdemo.com\/fashion\/fashion-theme\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.3.14"}};
            !function (a, b, c) {
                function d(a) {
                    var c = b.createElement("canvas"), d = c.getContext && c.getContext("2d");
                    return d && d.fillText ? (d.textBaseline = "top", d.font = "600 32px Arial", "flag" === a ? (d.fillText(String.fromCharCode(55356, 56812, 55356, 56807), 0, 0), c.toDataURL().length > 3e3) : (d.fillText(String.fromCharCode(55357, 56835), 0, 0), 0 !== d.getImageData(16, 16, 1, 1).data[0])) : !1
                }
                function e(a) {
                    var c = b.createElement("script");
                    c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
                }
                var f, g;
                c.supports = {simple: d("simple"), flag: d("flag")}, c.DOMReady = !1, c.readyCallback = function () {
                    c.DOMReady = !0
                }, c.supports.simple && c.supports.flag || (g = function () {
                    c.readyCallback()
                }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function () {
                    "complete" === b.readyState && c.readyCallback()
                })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
            }(window, document, window._wpemojiSettings);
        </script>
        <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <link rel='stylesheet' id='WCTZ_customize_css-css'  href='<?= Yii::$app->homeUrl ?>wp-content/plugins/wpo-customize/assets/css/customizeb41e.css?ver=4.3.14' type='text/css' media='all' />
        <link rel='stylesheet' id='WCTZ_colorpicker_css-css'  href='<?= Yii::$app->homeUrl ?>wp-content/plugins/wpo-customize/assets/css/colorpickerb41e.css?ver=4.3.14' type='text/css' media='all' />
        <link rel='stylesheet' id='contact-form-7-css'  href='<?= Yii::$app->homeUrl ?>wp-content/plugins/contact-form-7/includes/css/styles3a05.css?ver=4.2.2' type='text/css' media='all' />
        <link rel='stylesheet' id='rs-plugin-settings-css'  href='<?= Yii::$app->homeUrl ?>wp-content/plugins/revslider/public/assets/css/settingsaead.css?ver=5.0.3' type='text/css' media='all' />
        <style id='rs-plugin-settings-inline-css' type='text/css'>
            .tp-caption a{color:#fff;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out; text-transform:uppercase}.tp-caption a:hover{color:#ffa902}.tp-caption a{color:#ff7302;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out}.tp-caption a:hover{color:#ffa902}.tp-caption a{color:#ff7302;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out}.tp-caption a:hover{color:#ffa902}
        </style>
        <link rel='stylesheet' id='woocommerce-layout-css'  href='<?= Yii::$app->homeUrl ?>wp-content/plugins/woocommerce/assets/css/woocommerce-layoutfc3c.css?ver=2.4.4' type='text/css' media='all' />
        <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='<?= Yii::$app->homeUrl ?>wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreenfc3c.css?ver=2.4.4' type='text/css' media='only screen and (max-width: 768px)' />
        <link rel='stylesheet' id='wcqi-css-css'  href='<?= Yii::$app->homeUrl ?>wp-content/plugins/woocommerce-quantity-increment/assets/css/wc-quantity-incrementb41e.css?ver=4.3.14' type='text/css' media='all' />
        <link rel='stylesheet' id='jquery-colorbox-css'  href='<?= Yii::$app->homeUrl ?>wp-content/plugins/yith-woocommerce-compare/assets/css/colorboxb41e.css?ver=4.3.14' type='text/css' media='all' />
        <link rel='stylesheet' id='woocommerce_prettyPhoto_css-css'  href='<?= Yii::$app->homeUrl ?>wp-content/plugins/woocommerce/assets/css/prettyPhotob41e.css?ver=4.3.14' type='text/css' media='all' />
        <link rel='stylesheet' id='jquery-selectBox-css'  href='<?= Yii::$app->homeUrl ?>wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBoxb41e.css?ver=4.3.14' type='text/css' media='all' />
        <link rel='stylesheet' id='yith-wcwl-main-css'  href='<?= Yii::$app->homeUrl ?>wp-content/plugins/yith-woocommerce-wishlist/assets/css/styleb41e.css?ver=4.3.14' type='text/css' media='all' />
        <link rel='stylesheet' id='yith-wcwl-font-awesome-css'  href='<?= Yii::$app->homeUrl ?>wp-content/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.minb41e.css?ver=4.3.14' type='text/css' media='all' />
        <link rel='stylesheet' id='mailchimp-for-wp-checkbox-css'  href='<?= Yii::$app->homeUrl ?>wp-content/plugins/mailchimp-for-wp/assets/css/checkbox.min7e78.css?ver=2.3.8' type='text/css' media='all' />
        <link rel='stylesheet' id='theme-style-css'  href='<?= Yii::$app->homeUrl ?>wp-content/themes/fashion/styleb41e.css?ver=4.3.14' type='text/css' media='all' />
        <link rel='stylesheet' id='base-bootstrap-css'  href='<?= Yii::$app->homeUrl ?>wp-content/themes/fashion/css/bootstrapb41e.css?ver=4.3.14' type='text/css' media='all' />
        <link rel='stylesheet' id='base-fonticon-css'  href='<?= Yii::$app->homeUrl ?>wp-content/themes/fashion/css/font-awesome.minb41e.css?ver=4.3.14' type='text/css' media='all' />
        <link rel='stylesheet' id='base-template-css'  href='<?= Yii::$app->homeUrl ?>wp-content/themes/fashion/css/templateb41e.css?ver=4.3.14' type='text/css' media='all' />
        <link rel='stylesheet' id='base-animation-css'  href='<?= Yii::$app->homeUrl ?>wp-content/themes/fashion/framework/assets/css/animationb41e.css?ver=4.3.14' type='text/css' media='all' />
        <link rel='stylesheet' id='theme-Noticia-Text-font-css'  href='http://fonts.googleapis.com/css?family=Noticia+Text%3A400%2C700&amp;ver=4.3.14' type='text/css' media='all' />
        <link rel='stylesheet' id='yith-magnifier-css'  href='<?= Yii::$app->homeUrl ?>wp-content/plugins/yith-woocommerce-zoom-magnifier/assets/css/yith_magnifierb41e.css?ver=4.3.14' type='text/css' media='all' />
        <link rel='stylesheet' id='yith_wcmg_frontend-css'  href='<?= Yii::$app->homeUrl ?>wp-content/plugins/yith-woocommerce-zoom-magnifier/assets/css/frontendb41e.css?ver=4.3.14' type='text/css' media='all' />

        <link rel='stylesheet' id='js_composer_front-css'  href='<?= Yii::$app->homeUrl ?>wp-content/plugins/js_composer/assets/css/js_composer83b6.css?ver=4.6.2' type='text/css' media='all' />
        <link rel='stylesheet' id='woocommerce-general-css'  href='<?= Yii::$app->homeUrl ?>wp-content/plugins/woocommerce/assets/css/woocommercefc3c.css?ver=2.4.4' type='text/css' media='all' />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-includes/js/jquery/jqueryc1d8.js?ver=1.11.3'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var woocommerce_localize = {"cart_success": "Success: Your item has been added to cart!"};
            var wc_add_to_cart_params = {"ajax_url": "\/fashion\/fashion-theme\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/fashion\/fashion-theme\/?page_id=1988&wc-ajax=%%endpoint%%", "i18n_view_cart": "View Cart", "cart_url": "http:\/\/venusdemo.com\/fashion\/fashion-theme\/?page_id=8", "is_cart": "", "cart_redirect_after_add": "no"};
            /* ]]> */
        </script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/themes/fashion/js/add-to-cartb41e.js?ver=4.3.14'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.minaead.js?ver=5.0.3'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.minaead.js?ver=5.0.3'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/woocommerce-quantity-increment/assets/js/wc-quantity-increment.minb41e.js?ver=4.3.14'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart83b6.js?ver=4.6.2'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/themes/fashion/framework/assets/js/bootstrap.minb41e.js?ver=4.3.14'></script>
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
        <link rel='prev' title='Farlap Shirt' href='index27bd.html?product=ninja-silhouette-2' />
        <link rel='next' title='Ship Your Idea' href='indexf07b.html?product=ship-your-idea-3' />
        <meta name="generator" content="WordPress 4.3.14" />
        <meta name="generator" content="WooCommerce 2.4.4" />
        <link rel='canonical' href='index.php?page_id=1988' />
        <link rel='shortlink' href='index73f2.html?p=1988' />
        <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
        <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
        <script type="text/javascript">
            var ajaxurl = 'wp-admin/admin-ajax.html';
        </script>
        <!--[if lt IE 9]>
<![endif]-->
        <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1499327612864{margin-top: -18px !important;margin-bottom: 20px !important;}.vc_custom_1406840614788{padding-bottom: 20px !important;}.vc_custom_1406399203437{margin-top: -18px !important;}.vc_custom_1406840633541{margin-bottom: 20px !important;}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>


        <link href="<?= Yii::$app->homeUrl ?>css/themify-icons.css" rel="stylesheet">
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' type='text/css'/>
        <link rel='stylesheet' id='base-template-css'  href='<?= Yii::$app->homeUrl ?>css/style.css' type='text/css' media='all' />
        <link rel='stylesheet' id='base-template-css'  href='<?= Yii::$app->homeUrl ?>css/responsive.css' type='text/css' media='all' />
        <!--<link rel='stylesheet' id='theme-Noticia-Text-font-css'  href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css' type='text/css' media='all' />-->
        <!--<link href="css/style.css" rel="stylesheet" />-->
    </head>

    <body class="page page-id-1988 page-template page-template-template-visual page-template-template-visual-php main-menu-fixed wpo-animate-scroll wpb-js-composer js-comp-ver-4.6.2 vc_responsive  woocommerce-cart anyflexbox no-js">
        <!-- OFF-CANVAS MENU SIDEBAR -->
        <div id="wpo-off-canvas" class="wpo-off-canvas">
            <div class="wpo-off-canvas-body">
                <div class="wpo-off-canvas-header">
                    <!--<img class="img-responsive" src="images/logo.png"/>-->
                    <button type="button" class="close btn btn-close" data-dismiss="modal" aria-hidden="true">
                        <i class="fa fa-times"></i>
                    </button>
                </div>

                <nav  class="navbar navbar-offcanvas navbar-static" role="navigation">
                    <div class="navbar-collapse">
                        <ul id="main-menu-offcanvas" class="wpo-menu-top nav navbar-nav">
                            <li id="menu-item-384" class="dropdown menu-item-384 level-0"><a href="javascript:void(0)">Fragrances <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li id="menu-item-385" class="menu-item-385 level-1"><?= Html::a("Men's", ['/product/index'], ['class' => '']) ?></li>
                                    <li id="menu-item-385" class="menu-item-385 level-1"><?= Html::a("Women's", ['/product/index'], ['class' => '']) ?></li>
                                    <li id="menu-item-385" class="menu-item-385 level-1"><?= Html::a("Oriental", ['/product/index'], ['class' => '']) ?></li>
                                    <li id="menu-item-385" class="menu-item-385 level-1"><?= Html::a("Gift sets", ['/product/index'], ['class' => '']) ?></li>
                                    <li id="menu-item-385" class="menu-item-385 level-1"><?= Html::a("Bakhour", ['/product/index'], ['class' => '']) ?></li>
                                    <li id="menu-item-385" class="menu-item-385 level-1"><?= Html::a("Brands", ['/product/index'], ['class' => '']) ?></li>
                                </ul>
                            </li>
                            <li id="menu-item-370" class="menu-item-370 level-0"><?= Html::a("Watches", ['/product/index'], ['class' => '']) ?></li>
                            <li id="menu-item-1619" class="menu-item-1619 level-0"><?= Html::a("Jewellery", ['/product/index'], ['class' => '']) ?></li>
                            <li id="menu-item-1620" class="menu-item-1620 level-0"><?= Html::a("Eyewear", ['/product/index'], ['class' => '']) ?></li>
                            <li id="menu-item-1620" class="menu-item-1620 level-0"><?= Html::a("Bags", ['/product/index'], ['class' => '']) ?></li>

                            <li id="menu-item-388" class="dropdown menu-item-388 level-0"><a href="#">Accessories <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li id="menu-item-389" class="menu-item-389 level-1"><?= Html::a("Belts", ['/product/index'], ['class' => '']) ?></li>
                                    <li id="menu-item-390" class="menu-item-390 level-1"><?= Html::a("Wallets", ['/product/index'], ['class' => '']) ?></li>
                                    <li id="menu-item-391" class="menu-item-391 level-1"><?= Html::a("Card Holder", ['/product/index'], ['class' => '']) ?></li>
                                    <li id="menu-item-393" class="menu-item-393 level-1"><?= Html::a("Novelties", ['/product/index'], ['class' => '']) ?></li>
                                </ul>
                            </li>
                            <li id="menu-item-1620" class="menu-item-1620 level-0"><a href="#">Offers</a></li>
                            <!--<li id="menu-item-378" class="menu-item-378 level-0"><a href="#">Offers</a></li>-->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- //OFF-CANVAS MENU SIDEBAR -->
        <!-- START Wrapper -->
        <div class="wpo-wrapper">
            <header id="header">



                <section id="wpo-mainnav">
                    <div class="mainnav-wrap">
                        <div class="container">
                            <div class="navbar navbar-inverse">
                                <nav class="wpo-megamenu" role="navigation">
                                    <img style="text-align: center; margin: 0 auto;" class="img-responsive  visible-xs visible-sm" src="<?= Yii::$app->homeUrl ?>images/logo.png"/>
                                    <div class="navbar-header pull-left visible-xs visible-sm">
                                        <a href="javascript:;"
                                           data-target=".navbar-collapse"
                                           data-pos="left" data-effect="off-canvas-effect-1"
                                           data-nav="#wpo-off-canvas"
                                           class="navbar-toggle off-canvas-toggle ">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </a>

                                    </div><!-- //END #navbar-header -->
                                    <div class="visible-xs visible-sm search-mobile">
                                        <div class="wpo_search pull-right">

                                            <?= Html::beginForm(['/product/index'], 'get', ['id' => 'serach-formms']) ?>
                                            <input type="text" placeholder="Search..." class="search-keyword" name="keyword"/>
                                            <div class="search-keyword-dropdown"></div>

                                            <span class="button-search">
                                                <input type="submit" value="&nbsp;">
                                                <input type="hidden" name="post_type" value="product" />
                                            </span>
                                            <?= Html::endForm() ?>
                                        </div>
                                    </div>
                                    <div class="collapse navbar-collapse navbar-ex1-collapse">

                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <section id="Logo">
                                                <a class="logo" href="<?= Yii::$app->homeUrl ?>">
                                                    <img src="<?= Yii::$app->homeUrl ?>images/logo.png" alt="Perfume Dunia">
                                                </a>
                                            </section>
                                        </div>

                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                            <div class="pull-right hide-n-fix ptop10" style="position: absolute; right: 0px; width: 100%;">
                                                <div class="right0">
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" style="position: absolute; right: 100px;">
                                                        <div class="hidden-sm hidden-xs search-form">
                                                            <div class="wpo_search pull-right">
                                                                <?= Html::beginForm(['/product/index'], 'get', ['id' => 'serach-formm']) ?>
                                                                <input type="text" placeholder="Search..." class="search-keyword" name="keyword" autocomplete="off"  value="<?php
                                                                if (isset($_GET['keyword']) && $_GET['keyword'] != '') {
                                                                    echo $_GET['keyword'];
                                                                }
                                                                ?>"/>
                                                                <div class="search-keyword-dropdown"></div>
                                                                <span class="button-search">
                                                                    <input type="submit" value="&nbsp;">
                                                                    <!--<input type="hidden" name="post_type" value="product" />-->
                                                                </span>
                                                                <?= Html::endForm() ?>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-1 col-md-2 col-sm-2 col-xs-1 prit0" style="position: absolute; right: 20px; top: 12px;">
                                                        <div class="header-right">
                                                            <ul>
                                                                <li class="customer-links dropdown open"> <a class=""></a>
                                                                    <ul class="dropdown-menu dropdown-menu-right text-left cart-dropdown" role="menu" style="opacity: 1;">
                                                                        <span class="dropdown-triangle-up"></span>
                                                                        <?php if (!empty(Yii::$app->user->identity)) { ?>
                                                                            <li><a href="<?= Yii::$app->homeUrl . 'my-account' ?>">My account</a></li>
                                                                        <?php } ?>
                                                                        <li><a href="">My wishlist</a></li>
                                                                        <?php if (empty(Yii::$app->user->identity)) { ?>
                                                                            <li class="call-popup popup1" data-toggle="modal" data-target="#fsModal"><a href="">Log in</a></li>
                                                                            <?php
                                                                        } else {
                                                                            echo '<li class="last">'
                                                                            . Html::beginForm(['/site/logout'], 'post') . '<a>'
                                                                            . Html::submitButton(
                                                                                    'Logout', ['style' => 'background: white;height:0;border: none;']
                                                                            ) . '</a>'
                                                                            . Html::endForm()
                                                                            . '</li>';
                                                                            ?>
                                                                        <?php } ?>
                                                                    </ul>
                                                                </li>

                                                                <!--<li class="customer-links"> <a class=""></a></li>-->
                                                                <li id="cart"  class="cart dropdown open">  <a class="dropdown-toggle shp-ca" data-toggle="dropdown" ></a>
                                                                    <div class="dropdown-menu shop-cart dropdown-menu-right larger text-left cart-dropdown" role="menu" style="opacity: 1;">
                                                                        <?= common\components\CartDetailWidget::widget() ?>
                                                                    </div>
                                                                </li>
                                                                <!--<li id="cart">  <a class="cart-link dropdown-toggle" data-toggle="dropdown" ></a></li>-->
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <ul id="main-menu" class="nav navbar-nav megamenu">
                                                <li class="menu-item-1619 dropdown parent mega depth-0 " data-id="1619"    data-alignsub="fullwidth" data-level="1"><a href="#" class="dropdown-toggle" >Fragrances <b class="caret"></b></a>
                                                    <!--<div class="dropdown-menu mega-dropdown-menu dropdown_bg">-->
                                                    <div class="dropdown-menu dropdown_bg">
                                                        <div class="dropdown-menu-inner">
                                                            <div class="row">
                                                                <div class="mega-col col-md-12 " >
                                                                    <div class="mega-col-inner">
                                                                        <div id="wid-22" class="wpo-widget">
                                                                            <!--<h3 class="widget-title">Categories</h3>-->
                                                                            <div class="menu-shortcode-container">
                                                                                <ul id="menu-shortcode" class="megamenu-items">
                                                                                    <li id="menu-item-366" class="menu-item-366" data-id="366"    data-alignsub="left" data-level="2"><?= Html::a("Men's", ['/product/index'], ['class' => '']) ?></li>
                                                                                    <li id="menu-item-362" class="menu-item-362" data-id="362"    data-alignsub="left" data-level="2"><?= Html::a("Women's", ['/product/index'], ['class' => '']) ?></li>
                                                                                    <li id="menu-item-361" class="menu-item-361" data-id="361"    data-alignsub="left" data-level="2"><?= Html::a("Oriental", ['/product/index'], ['class' => '']) ?></li>
                                                                                    <li id="menu-item-361" class="menu-item-361" data-id="361"    data-alignsub="left" data-level="2"><?= Html::a("Gift sets", ['/product/index'], ['class' => '']) ?></li>
                                                                                    <li id="menu-item-361" class="menu-item-361" data-id="361"    data-alignsub="left" data-level="2"><?= Html::a("Bakhour", ['/product/index'], ['class' => '']) ?></li>
                                                                                    <li id="menu-item-361" class="menu-item-361" data-id="361"    data-alignsub="left" data-level="2"><?= Html::a("Brands", ['/product/index'], ['class' => '']) ?></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="menu-item-370 depth-0 aligned-left " data-id="370"    data-alignsub="left" data-level="1"><?= Html::a("Watches", ['/product/index'], ['class' => '']) ?></li>
                                                <li class="menu-item-1620 depth-0 aligned-left " data-id="1620"    data-alignsub="left" data-level="1"><?= Html::a("Jewellery", ['/product/index'], ['class' => '']) ?></li>
                                                <li class="menu-item-384 depth-0 aligned-left " data-id="384"    data-alignsub="left" data-level="1"><?= Html::a("Eyewear", ['/product/index'], ['class' => '']) ?></li>
                                                <li class="menu-item-388 depth-0 aligned-left " data-id="388"    data-alignsub="left" data-level="1"><?= Html::a("Bags", ['/product/index'], ['class' => '']) ?></li>
                                                <li class="menu-item-378 dropdown parent mega depth-0 aligned-left " data-id="378"    data-alignsub="left" data-level="1"><a href="#" class="dropdown-toggle" >Accessories <b class="caret"></b></a>
                                                    <div class="dropdown-menu"  >
                                                        <div class="dropdown-menu-inner">
                                                            <div class="row">
                                                                <div class="mega-col col-md-12 "  data-type="menu">
                                                                    <div class="mega-col-inner">
                                                                        <ul class="megamenu-items">
                                                                            <li class="menu-item-379 " data-id="379"    data-alignsub="left" data-level="2"><?= Html::a("Belts", ['/product/index'], ['class' => '']) ?></li>
                                                                            <li class="menu-item-380 " data-id="380"    data-alignsub="left" data-level="2"><?= Html::a("Wallets", ['/product/index'], ['class' => '']) ?></li>
                                                                            <li class="menu-item-381 " data-id="381"    data-alignsub="left" data-level="2"><?= Html::a("Card Holder", ['/product/index'], ['class' => '']) ?></li>
                                                                            <li class="menu-item-382 " data-id="382"    data-alignsub="left" data-level="2"><?= Html::a("Novelties", ['/product/index'], ['class' => '']) ?></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="menu-item-1948 depth-0 aligned-left " data-id="1948"    data-alignsub="left" data-level="1"><a href="#" class="dropdown-toggle" >Offers</a></li>
                                                <!--<li class="menu-item-402 " data-id="402"    data-alignsub="left" data-level="1"><a href="index3829.html?page_id=400">Contact</a></li>-->
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>


            </header>
            <body>


                <?php $this->beginBody() ?>


                <?= $content ?>
                <div class="page-loading-overlay loaded">
                    <div class="loader-2"></div>
                </div>
                <footer id="wpo-footer" class="wpo-footer">

                    <div><section class=" box-element mass-bottom vc_custom_1407828553408" ><div class="container"><div class="row">
                                    <div class="vc_col-sm-3 col-sm-4 col-xs-4 wpb_column vc_column_container">
                                        <div class="wpb_wrapper">

                                            <div class="wpb_single_image wpb_content_element overlay vc_align_left">
                                                <div class="wpb_wrapper">

                                                    <img class=" vc_box_border_grey " src="<?= Yii::$app->homeUrl ?>./images/logo.png" width="144" height="98" alt="logo_footer" title="logo_footer"" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vc_col-sm-6 col-sm-8 col-xs-8 wpb_column vc_column_container">
                                        <div class="wpb_wrapper">

                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <div class="box about">
                                                        <div class="box-heading">About The Shop</div>
                                                        <p>Sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vc_col-sm-3 col-sm-12 col-xs-12 wpb_column vc_column_container">
                                        <div class="wpb_wrapper">

                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <div class="network-social">
                                                        <div class="box-heading">Follow Us On Social</div>
                                                        <ul class="social">
                                                            <li><a class="facebook" href="#"><i class="fa fa-facebook stack"> </i></a></li>
                                                            <li><a class="twitter" href="#"><i class="fa fa-twitter stack"> </i></a></li>
                                                            <li><a class="google" href="#"><i class="fa fa-google-plus stack"> </i></a></li>
                                                            <li><a class="youtube" href="#"><i class="fa fa-youtube stack"> </i></a></li>
                                                            <li><a class="skype" href="#"><i class="fa fa-skype stack"> </i></a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div></div></section>
                        <section class=" box-element wpo-footer-center" ><div class="container"><div class="row">
                                    <!--					<div class="vc_col-sm-3 col-sm-6 wpb_column vc_column_container">
                                                                                    <div class="wpb_wrapper">

                                                                                            <div class="wpb_widgetised_column wpb_content_element">
                                                                                                    <div class="wpb_wrapper">
                                                                                                            <aside id="text-11" class="widget clearfix widget_text"><div class="box-heading"><span>OPENNING TIME</span></div>			<div class="textwidget"><div class="box-services">
                                                                                                                                    <p>Monday - Friday .................. 8.00 to 18.00</p>

                                                                                                                                    <p>Saturday ......................... 9.00 to 21.00</p>

                                                                                                                                    <p>Sunday ........................... 10.00 to 21.00</p>
                                                                                                                                    <span class="iconbox pull-left"><i class="fa fa-phone">&nbsp;</i></span>

                                                                                                                                    <div class="media-body"><span>Call us: <strong> 0123 456 789</strong></span></div>
                                                                                                                            </div></div>
                                                                                                            </aside>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                            </div>-->

                                    <div class="vc_col-sm-3 col-sm-6 wpb_column vc_column_container">
                                        <div class="wpb_wrapper">

                                            <div class="wpb_widgetised_column wpb_content_element">
                                                <div class="wpb_wrapper">
                                                    <aside id="nav_menu-8" class="widget clearfix widget_nav_menu"><div class="box-heading"><span>Customer service</span></div><div class="menu-customer-service-container"><ul id="menu-customer-service" class="menu"><li id="menu-item-1515" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1515"><a href="index3829.html?page_id=400">Contact</a></li>
                                                                <li id="menu-item-1516" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1516"><a href="#">Return</a></li>
                                                                <li id="menu-item-1517" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1517"><a href="#">Site  map</a></li>
                                                                <li id="menu-item-1518" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1518"><a href="#">Brand</a></li>
                                                                <li id="menu-item-1519" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1519"><a href="#">Gift Vouchers</a></li>
                                                            </ul></div></aside>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vc_col-sm-3 col-sm-6 wpb_column vc_column_container">
                                        <div class="wpb_wrapper">

                                            <div class="wpb_widgetised_column wpb_content_element">
                                                <div class="wpb_wrapper">
                                                    <aside id="nav_menu-9" class="widget clearfix widget_nav_menu"><div class="box-heading"><span>Information</span></div><div class="menu-information-container"><ul id="menu-information-1" class="menu"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1520"><a href="#">About Us</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1521"><a href="<?= yii::$app->homeUrl . 'delivery-information' ?>">Delivery Information</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1522"><a href="<?= yii::$app->homeUrl . 'privacy-policy' ?>">Privacy Policy</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1523"><a href="<?= yii::$app->homeUrl . 'terms-condition' ?>">Terms &#038; Conditions</a></li>
                                                            </ul></div></aside>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vc_col-sm-3 col-sm-6 wpb_column vc_column_container">
                                        <div class="wpb_wrapper">

                                            <div class="wpb_widgetised_column wpb_content_element">
                                                <div class="wpb_wrapper">
                                                    <aside id="nav_menu-3" class="widget clearfix widget_nav_menu"><div class="box-heading"><span>My account</span></div><div class="menu-my-account-container"><ul id="menu-my-account" class="menu"><li id="menu-item-1524" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1524"><a href="#">My Account</a></li>
                                                                <li id="menu-item-1525" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1525"><a href="#">Order History</a></li>
                                                                <li id="menu-item-1526" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1526"><a href="#">Wish List</a></li>
                                                                <li id="menu-item-1527" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1527"><a href="#">Newsletter</a></li>
                                                                <li id="menu-item-1528" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1528"><a href="#">Specials</a></li>
                                                            </ul></div></aside>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vc_col-sm-3 col-sm-6 wpb_column vc_column_container">
                                        <div class="wpb_wrapper">

                                            <div class="wpb_widgetised_column wpb_content_element">
                                                <div class="wpb_wrapper">
                                                    <aside id="text-10" class="widget clearfix widget_text"><div class="box-heading"><span>CONTACT</span></div>			<div class="textwidget"><address><strong>Warehouse &amp; Offices</strong><br>
                                                                12345 Street name, California, USA<br>
                                                                0123 456 789 / 0123 456 788</address>

                                                            <address><strong>Retail Store</strong><br>
                                                                54321 Street name, California, USA<br>
                                                                0123 456 789 / 0123 456 788</address></div>
                                                    </aside>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div></div></section></div>
                    <section class="wpo-copyright">
                        <div class="inner"><div class="container">
                                <div class="col-sm-12">
                                    <div class="copyright">
                                        Copyright 2018 Powered by <a href="http://azryah.com/" target="_blank">Azryah Network</a> All Rights Reserved.    					</div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="footer-newsletter bottom hidden-xs">
                        <!--		<div class="button-group">
                                                <div class="close">
                                                        <i class="fa fa-angle-left"></i>
                                                        <div id="newsletter-action" class="show-button" data-position="show">
                                                                <label class="checkbox-inline">
                                                                        <input type="radio" name="action" value="show"  checked='checked'>Always show				</label>
                                                                <label class="checkbox-inline">
                                                                        <input type="radio" name="action" value="hide" >Keep footer				</label>
                                                        </div>
                                                </div>
                                        </div>-->
                        <div class="container">
                            <div class="row">
                                <aside id="text-13" class="widget clearfix widget_text">			<div class="textwidget"><div class="col-sm-10 col-lg-offset-2 col-md-offset-2 ">
                                            <div class="newsletter-content">
                                                <div class="img pull-left">
                                                    <img src="<?= Yii::$app->homeUrl ?>wp-content/themes/fashion/images/avatar.png">
                                                </div>
                                                <div class="box form-newsletter pull-right">
                                                    <div class="box-left pull-left">
                                                        <div class="box-heading no-margin">
                                                            <strong>become a subscriber</strong>
                                                        </div>
                                                        <p class="description">& get 10% off your next order</p>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="inputNew" placeholder="Your email ..." value="" size="18" name="email">
                                                        <span class="input-group-btn">
                                                            <button type="submit" name="submitNewsletter" class="btn btn-custom">Subscribe<span class="fa-fw fa fa-long-arrow-right"></span></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div>
                                </aside>                </div>
                        </div>
                    </section>
                </footer>
        </div>


        <div class="modal fade" id="wpo_modal_quickview" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close btn btn-close" data-dismiss="modal" aria-hidden="true">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body"><span class="spinner"></span></div>
                </div>
            </div>
        </div>

        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/akismet/_inc/formc6bd.js?ver=3.1.5'></script>
        <link rel='stylesheet' id='js_composer_front-css'  href='<?= Yii::$app->homeUrl ?>wp-content/plugins/js_composer/assets/css/js_composer83b6.css?ver=4.6.2' type='text/css' media='all' />
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/wpo-customize/assets/js/colorpickerb41e.js?ver=4.3.14'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/wpo-customize/assets/js/customizeb41e.js?ver=4.3.14'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var _wpcf7 = {"loaderUrl": "http:\/\/venusdemo.com\/fashion\/fashion-theme\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif", "sending": "Sending ..."};
            /* ]]> */
        </script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/contact-form-7/includes/js/scripts3a05.js?ver=4.2.2'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/woocommerce/assets/js/frontend/cart.minfc3c.js?ver=2.4.4'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var woocommerce_params = {"ajax_url": "\/fashion\/fashion-theme\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/fashion\/fashion-theme\/?page_id=1988&wc-ajax=%%endpoint%%"};
            /* ]]> */
        </script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.minfc3c.js?ver=2.4.4'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min330a.js?ver=1.4.1'></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var wc_cart_fragments_params = {"ajax_url": "\/fashion\/fashion-theme\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/fashion\/fashion-theme\/?page_id=1988&wc-ajax=%%endpoint%%", "fragment_name": "wc_fragments"};
            /* ]]> */
        </script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.minfc3c.js?ver=2.4.4'></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var yith_woocompare = {"nonceadd": "7e51e7b3e6", "nonceremove": "6de08471ff", "nonceview": "3f4c35fd7b", "ajaxurl": "http:\/\/venusdemo.com\/fashion\/fashion-theme\/wp-admin\/admin-ajax.php", "actionadd": "yith-woocompare-add-product", "actionremove": "yith-woocompare-remove-product", "actionview": "yith-woocompare-view-table", "added_label": "Added", "table_title": "Product Comparison", "auto_open": "yes"};
            /* ]]> */
        </script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/yith-woocommerce-compare/assets/js/woocompare4c56.js?ver=2.0.2'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/yith-woocommerce-compare/assets/js/jquery.colorbox-min13ac.js?ver=1.4.21'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.minc6bd.js?ver=3.1.5'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.init.minfc3c.js?ver=2.4.4'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.minb41e.js?ver=4.3.14'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.minb41e.js?ver=4.3.14'></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var yith_wcwl_l10n = {"ajax_url": "http:\/\/venusdemo.com\/fashion\/fashion-theme\/wp-admin\/admin-ajax.php", "redirect_to_cart": "no", "multi_wishlist": "", "hide_add_button": "1", "is_user_logged_in": "", "ajax_loader_url": "http:\/\/venusdemo.com\/fashion\/fashion-theme\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader.gif", "remove_from_wishlist_after_add_to_cart": "yes", "labels": {"cookie_disabled": "We are sorry, but this feature is available only if cookies are enabled on your browser.", "added_to_cart_message": "<div class=\"woocommerce-message\">Product correctly added to cart<\/div>"}, "actions": {"add_to_wishlist_action": "add_to_wishlist", "remove_from_wishlist_action": "remove_from_wishlist", "move_to_another_wishlist_action": "move_to_another_wishlsit", "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem"}};
            /* ]]> */
        </script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwld5f7.js?ver=2.0'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/themes/fashion/framework/assets/js/woocommerceb41e.js?ver=4.3.14'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-includes/js/comment-reply.minb41e.js?ver=4.3.14'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/themes/fashion/js/jquery.noty.packaged.minb41e.js?ver=4.3.14'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/themes/fashion/js/mainb41e.js?ver=4.3.14'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/themes/fashion/framework/assets/js/wpo-pluginb41e.js?ver=4.3.14'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/themes/fashion/framework/assets/js/megamenub41e.js?ver=4.3.14'></script>

        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/yith-woocommerce-zoom-magnifier/assets/js/jquery.carouFredSel.minf731.js?ver=6.2.1'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/yith-woocommerce-zoom-magnifier/assets/js/yith_magnifier.mind279.js?ver=1.1.5'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>wp-content/plugins/yith-woocommerce-zoom-magnifier/assets/js/frontend.mind279.js?ver=1.1.5'></script>
        <script type='text/javascript' src='<?= Yii::$app->homeUrl ?>js/custom.js'></script>
        <!--<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/js_composer_front83b6.js?ver=4.6.2'></script>-->

        <script>
            $(document).ready(function () {
                jQuery(window).load(function () {
                    jQuery('#rev_slider_1_1_wrapper').css({'height': jQuery(this).height() - 30});
                });
            });
            $(document).ready(function () {
                jQuery(window).load(function () {
                    jQuery('#rev_slider_1_1').css({'height': jQuery(this).height() - 30});
                });
                jQuery(".call-popup").click(function () {
                    jQuery(".log-popup").addClass("activepop");
                });
                jQuery('.search-keyword').on('keyup', function (e) {
                    if (jQuery(this).val()[0] === " ") {


                    } else {

                        if (e.keyCode != 40 && e.keyCode != 38 && e.keyCode != 27) {
                            jQuery.ajax({
                                url: homeUrl + 'product/search-keyword',
                                type: "POST",
                                data: {keyword: $(this).val()},
                                success: function (data) {
                                    jQuery('.search-keyword-dropdown').html(data);
                                }
                            });
                        }
                    }
                });
                /********* selected li value to textbox **********/
                jQuery(document).on('click', '.search-dropdown li', function () {
                    jQuery('.search-dropdown').hide();
                    jQuery('.search-keyword').val($(this).attr('id'));
                    jQuery('form#serach-formm').submit();
                });

                /********************li navigation keys ***************/
                jQuery('.search-keyword').on('keydown', function (e) {

                    if (e.keyCode == 40) { //down

                        var selected = $(".search-selected");
                        jQuery('.search-dropdown li').removeClass('search-selected');
                        if (selected.next().length == 0) {
                            selected.siblings().first().addClass('search-selected');
                        } else {
                            selected.next().addClass('search-selected');
                        }
                    } else if (e.keyCode == 38) { //up

                        var selected = $(".search-selected");
                        jQuery('.search-dropdown li').removeClass('search-selected');
                        if (selected.prev().length == 0) {
                            selected.siblings().last().addClass('search-selected');
                        } else {
                            selected.prev().addClass('search-selected');
                        }
                    } else if (e.keyCode == 27) { //escape

                        jQuery('.search-dropdown').hide();
                        jQuery('.search-keyword').val('');

                    } else if (e.keyCode == 13) { //enter

                        var value = jQuery('.search-selected').attr('id');
                        jQuery('.search-dropdown').hide();
                        jQuery('.search-keyword').val(value);
                        jQuery('form#serach-formm').submit();
                        e.preventDefault();
                    }

                    $(".search-dropdown").scrollTop(0);//set to top
                    $(".search-dropdown").scrollTop($('.search-selected:first').offset().top - $(".search-dropdown").height())

                });

            });
            jQuery(window).resize(function () {
                if (jQuery(window).width() < 767)
                {
                    jQuery(".order-summery-collapse").removeClass("in").addClass("collapse");
                } else {
                    jQuery(".order-summery-collapse").removeClass("collapse").addClass("in");
                }
            });
            jQuery(window).load(function () {
                if (jQuery(window).width() < 767)
                {
                    jQuery(".order-summery-collapse").removeClass("in").addClass("collapse");
                } else {
                    jQuery(".order-summery-collapse").removeClass("collapse").addClass("in");
                }
            });

        </script>

        <div id="fsModal"
             class="modal animated bounceIn"
             tabindex="-1"
             role="dialog"
             aria-labelledby="myModalLabel"
             aria-hidden="true">

            <!-- dialog -->
            <div class="login-register-popup">
                <div class="login-form">
                    <h3><img style="margin: 0 auto;" class="img-responsive" src="<?= Yii::$app->homeUrl ?>images/logo.png"/></h3>
<!--                    <span>LOGIN YOUR ACCOUNT</span>
                    <a href="#" title=""><i class="fa fa-facebook"></i> Login With Facebook</a>-->
                    <div class="signup"><i>Login</i></div>
                    <?php
                    $modellogin = new LoginForm();
                    ?>
                    <?php $form_login = ActiveForm::begin(['action' => Yii::$app->homeUrl . 'site/login?go=' . Yii::$app->request->hostInfo . Yii::$app->request->url, 'id' => 'login-form', 'options' => ['class' => 'popup-form']]); ?>
                    <!--<form class="popup-form">-->
                    <input type="text" name="LoginForm[email]" placeholder="Email" required="required">
                    <input type="password" name="LoginForm[password]" placeholder="Password" required="required">
                    <?= Html::submitButton('LOGIN', ['class' => 'btn btn-warning', 'name' => 'login-button']) ?>
                    <!--</form>-->
                    <?php ActiveForm::end(); ?>

                    <a class="forget" href="<?= yii::$app->homeUrl; ?>forgot-password">Forgot your password?</a>
                </div><!-- Login Form -->
                <div class="register-form">
                    <h3>Don't have account?	Register Now</h3>
                    <?php
                    $modelregister = new User();
                    ?>
                    <?php $form_signin = ActiveForm::begin(['action' => Yii::$app->homeUrl . 'site/signup', 'id' => 'signup-form', 'options' => ['class' => 'popup-form']]); ?>
                    <!--<form class="popup-form">-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad0 firstname">
                        <input type="text" name="User[first_name]" placeholder="Firstname" required="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad0 lastname">
                        <input type="text" name="User[last_name]" placeholder="Lastname" required="">
                    </div>
                    <input type="email" name="User[email]" placeholder="Email" required=''>
                    <input type="text" name="User[mobile]" placeholder="Mobile" required="">
                    <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad0 firstname">-->
                        <input type="text" name="User[gender]" placeholder="Gender" required="">
                    <!--</div>-->
                    <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad0 lastname">-->
                        <input type="date" name="User[dob]" placeholder="DOB" required="">
                    <!--</div>-->
                    <input type="password" name="User[password]" placeholder="Password" required="" id='password'>
                    <input type="password" name="User[re-password]" placeholder="Re-Password" required="" id='repassword'>
                    <?= Html::submitButton('SIGN UP', ['class' => 'btn btn-warning']) ?>
                    <!--<button type="submit">SIGN UP</button>-->
                    <!--</form>-->
                    <?php ActiveForm::end(); ?>
                    <p class="note">* Denotes mandatory field.</p>
                    <p class="note">** At least one telephone number is required.</p>
                </div>
            </div>
            <!-- dialog -->

        </div>
        <!-- modal -->

    </body>

</html>


