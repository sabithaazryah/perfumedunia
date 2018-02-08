<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Fregrance;
use common\models\CmsOthers;
use common\components\ProductLinksWidget;

$youtube_video = CmsOthers::find()->where(['id' => 7])->one();
if (isset($meta_title) && $meta_title != '')
        $this->title = $meta_title;
?>

<section id="wpo-mainbody" class=" wpo-mainbody">

        <!-- MAIN CONTENT -->
        <div id="wpo-content" class="wpo-content">
                <article id="post-1988" class="clearfix post-1988 page type-page status-publish hentry">
                        <section class=" box-element vc_custom_1499327612864 main_slider">
                                <div class="row">
                                        <div class="col-md-12">
                                                <div class="vc_col-sm-12 wpb_column vc_column_container vc_custom_1406840633541 plft0 prit0 pad0 margin-bottom-0">
                                                        <div class="wpb_wrapper">
                                                                <div class="wpb_revslider_element wpb_content_element slider2">
                                                                        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                                                                <!-- START REVOLUTION SLIDER 5.0.3 auto mode -->
                                                                                <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.3">
                                                                                        <ul>
                                                                                                <!-- SLIDE  -->
                                                                                                <?php
                                                                                                $i = 0;
                                                                                                foreach ($slider as $slide) {
                                                                                                        $i++;
                                                                                                        $rs = $i % 3;
                                                                                                        $random = $i % 3 == 1 ? 'slideup' : 'random';
                                                                                                        ?>
                                                                                                        <li data-index="rs-<?= $rs ?>" data-transition="<?= $random ?>" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="<?= yii::$app->homeUrl . 'uploads/cms/slider/' . $slide->id . '/small.' . $slide->img ?>" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                                                                                                                <!-- MAIN IMAGE -->
                                                                                                                <img src="<?= yii::$app->homeUrl . 'uploads/cms/slider/' . $slide->id . '/large.' . $slide->img ?>" alt="" width="1170" height="600" data-lazyload="http://venusdemo.com/fashion/fashion-theme/wp-content/uploads/2014/07/slide1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                                                                                                                <!-- LAYERS -->

                                                                                                                <div class="tp-caption tp-button   tp-resizeme rs-parallaxlevel-0" id="slide-2-layer-5 slider-btn" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['399','399','399','399']" data-width="auto" data-height="auto" data-whitespace="nowrap" data-transform_idle="" data-transform_in="y:50px;opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="1300" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; min-width: auto; min-height: auto; white-space: nowrap; max-width: auto; max-height: auto; font-size: 11px; line-height: 40px; font-weight: 700; color: rgba(102, 102, 102, 1.00);font-family:'Lato';padding:0px 20px 0px 20px;border-color:rgba(34, 34, 34, 1.00);border-radius:2px 2px 2px 2px; position: absolute !important; right: -510px !important; top: 45px !important; background: rgb(122, 189, 149);"><a href="<?= $slide->slider_link ?>">Discover Now</a>
                                                                                                                </div>
                                                                                                        </li>
                                                                                                <?php } ?>

                                                                                                <!-- SLIDE  -->

                                                                                        </ul>
                                                                                        <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(0, 0, 0, 0.15);"></div>
                                                                                </div>
                                                                                <script>
                                                                                        document.write("<style type=\"text/css\">.tp-caption.a_custom_style1,.a_custom_style1{color:#ffffff;font-size:14px;line-height:29px;font-family:\"Lato\";text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(255,255,255);border-style:none;text-transform:uppercase;letter-spacing:2px}.tp-caption.a_custom_style2,.a_custom_style2{color:#ffffff;font-size:40px;line-height:35px;font-weight:900;font-family:\"Lato\";text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(255,255,255);border-style:none;text-transform:uppercase}.tp-caption.a_custom_style3,.a_custom_style3{font-size:14px;line-height:20px;font-family:\"Noticia Text\",serif;color:#ffffff;text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(255,255,255);border-style:none;text-align:center}.tp-caption.tp-button,.tp-button{color:#666666;background-color:transparent;font-size:11px;line-height:40px;font-family:\"Lato\";font-weight:700;text-decoration:none;padding:0px 10px 0px 10px;border-radius:2px 2px 2px 2px;border-width:0px;border-color:rgb(34,34,34);border-style:solid;height:42px;cursor:pointer;letter-spacing:3px;text-transform:uppercase;transition:all 0.4s ease 0s}.tp-caption.tp-button:hover,.tp-button:hover{font-size:11px;line-height:40px;font-family:\"Lato\";font-weight:700;color:#ffffff;text-decoration:none;padding:0px 10px 0px 10px;background-color:rgba(102,102,102,1);border-radius:2px 2px 2px 2px;border-width:1px;border-color:rgb(102,102,102);border-style:solid;height:42px;cursor:pointer;letter-spacing:3px;text-transform:uppercase;transition:all 0.4s ease 0s;-webkit-transition:all 0.4s ease 0s}</style>");
                                                                                </script>
                                                                                <script type="text/javascript">
                                                                                        /******************************************
                                                                                         -	PREPARE PLACEHOLDER FOR SLIDER	-
                                                                                         ******************************************/

                                                                                        var setREVStartSize = function() {
                                                                                        try {
                                                                                        var e = new Object,
                                                                                                i = jQuery(window).width(),
                                                                                                t = 9999,
                                                                                                r = 0,
                                                                                                n = 0,
                                                                                                l = 0,
                                                                                                f = 0,
                                                                                                s = 0,
                                                                                                h = 0;
                                                                                        e.c = jQuery('#rev_slider_1_1');
                                                                                        e.responsiveLevels = [1240, 1024, 778, 480];
                                                                                        e.gridwidth = [1240, 1024, 778, 480];
                                                                                        e.gridheight = [600, 600, 500, 400];
                                                                                        e.sliderLayout = "auto";
                                                                                        if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                                                                                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                                                                                        }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                                                                                        var u = (e.c.width(), jQuery(window).height());
                                                                                        if (void 0 != e.fullScreenOffsetContainer) {
                                                                                        var c = e.fullScreenOffsetContainer.split(",");
                                                                                        jQuery.each(c, function(e, i) {
                                                                                        u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                                                                                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                                                                                        }
                                                                                        f = u
                                                                                        } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                                                                                        e.c.closest(".rev_slider_wrapper").css({
                                                                                        height: f
                                                                                        })
                                                                                        } catch (d) {
                                                                                        console.log("Failure at Presize of Slider:" + d)
                                                                                        }
                                                                                        };
                                                                                        setREVStartSize();
                                                                                        var tpj = jQuery;
                                                                                        var revapi1;
                                                                                        tpj(document).ready(function() {
                                                                                        if (tpj("#rev_slider_1_1").revolution == undefined) {
                                                                                        revslider_showDoubleJqueryError("#rev_slider_1_1");
                                                                                        } else {
                                                                                        revapi1 = tpj("#rev_slider_1_1").show().revolution({
                                                                                        sliderType: "standard",
                                                                                                jsFileLocation: "http://venusdemo.com/fashion/fashion-theme/wp-content/plugins/revslider/public/assets/js/",
                                                                                                sliderLayout: "auto",
                                                                                                dottedOverlay: "none",
                                                                                                delay: 9000,
                                                                                                navigation: {
                                                                                                keyboardNavigation: "off",
                                                                                                        keyboard_direction: "horizontal",
                                                                                                        mouseScrollNavigation: "off",
                                                                                                        onHoverStop: "on",
                                                                                                        touch: {
                                                                                                        touchenabled: "on",
                                                                                                                swipe_threshold: 75,
                                                                                                                swipe_min_touches: 50,
                                                                                                                swipe_direction: "horizontal",
                                                                                                                drag_block_vertical: false
                                                                                                        },
                                                                                                        arrows: {
                                                                                                        style: "hades",
                                                                                                                enable: true,
                                                                                                                hide_onmobile: false,
                                                                                                                hide_onleave: true,
                                                                                                                hide_delay: 200,
                                                                                                                hide_delay_mobile: 1200,
                                                                                                                tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div></div>',
                                                                                                                left: {
                                                                                                                h_align: "left",
                                                                                                                        v_align: "center",
                                                                                                                        h_offset: 0,
                                                                                                                        v_offset: 0
                                                                                                                },
                                                                                                                right: {
                                                                                                                h_align: "right",
                                                                                                                        v_align: "center",
                                                                                                                        h_offset: 0,
                                                                                                                        v_offset: 0
                                                                                                                }
                                                                                                        },
                                                                                                        bullets: {
                                                                                                        enable: true,
                                                                                                                hide_onmobile: true,
                                                                                                                hide_under: 600,
                                                                                                                style: "hephaistos",
                                                                                                                hide_onleave: true,
                                                                                                                hide_delay: 200,
                                                                                                                hide_delay_mobile: 1200,
                                                                                                                direction: "horizontal",
                                                                                                                h_align: "center",
                                                                                                                v_align: "bottom",
                                                                                                                h_offset: 0,
                                                                                                                v_offset: 30,
                                                                                                                space: 5,
                                                                                                                tmp: ''
                                                                                                        }
                                                                                                },
                                                                                                responsiveLevels: [1240, 1024, 778, 480],
                                                                                                gridwidth: [1240, 1024, 778, 480],
                                                                                                gridheight: [600, 600, 500, 400],
                                                                                                lazyType: "smart",
                                                                                                parallax: {
                                                                                                type: "mouse",
                                                                                                        origo: "slidercenter",
                                                                                                        speed: 2000,
                                                                                                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                                                                                                },
                                                                                                shadow: 0,
                                                                                                spinner: "off",
                                                                                                stopLoop: "off",
                                                                                                stopAfterLoops: - 1,
                                                                                                stopAtSlide: - 1,
                                                                                                shuffle: "off",
                                                                                                autoHeight: "off",
                                                                                                hideThumbsOnMobile: "off",
                                                                                                hideSliderAtLimit: 0,
                                                                                                hideCaptionAtLimit: 0,
                                                                                                hideAllCaptionAtLilmit: 0,
                                                                                                startWithSlide: 0,
                                                                                                debugMode: false,
                                                                                                fallbacks: {
                                                                                                simplifyAll: "off",
                                                                                                        nextSlideOnWindowFocus: "off",
                                                                                                        disableFocusListener: "off",
                                                                                                }
                                                                                        });
                                                                                        }
                                                                                        }); /*ready*/
                                                                                </script>
                                                                                <script>
                                                                                        document.write("<style type=\"text/css\">.hades.tparrows{cursor:pointer;background:#000;background:rgba(0,0,0,0.15);width:100px;height:100px;position:absolute;display:block;z-index:100}.hades.tparrows:before{font-family:\"revicons\";font-size:30px;color:#fff;display:block;line-height:100px;text-align:center; transition:background 0.3s,color 0.3s}.hades.tparrows.tp-leftarrow:before{content:\"\\e824\"}.hades.tparrows.tp-rightarrow:before{content:\"\\e825\"}.hades.tparrows:hover:before{color:#aaa;  background:#fff;  background:rgba(255,255,255,1)}.hades .tp-arr-allwrapper{position:absolute; left:100%; top:0px; background:#888;  width:100px;height:100px; -webkit-transition:all 0.3s; transition:all 0.3s; -ms-filter:\"progid:dximagetransform.microsoft.alpha(opacity=0)\"; filter:alpha(opacity=0); -moz-opacity:0.0; -khtml-opacity:0.0; opacity:0.0; -webkit-transform:rotatey(-90deg); transform:rotatey(-90deg); -webkit-transform-origin:0% 50%; transform-origin:0% 50%}.hades.tp-rightarrow .tp-arr-allwrapper{left:auto;  right:100%;  -webkit-transform-origin:100% 50%; transform-origin:100% 50%;  -webkit-transform:rotatey(90deg); transform:rotatey(90deg)}.hades:hover .tp-arr-allwrapper{-ms-filter:\"progid:dximagetransform.microsoft.alpha(opacity=100)\"; filter:alpha(opacity=100); -moz-opacity:1; -khtml-opacity:1; opacity:1;   -webkit-transform:rotatey(0deg); transform:rotatey(0deg)}.hades .tp-arr-iwrapper{}.hades .tp-arr-imgholder{background-size:cover; position:absolute; top:0px;left:0px; width:100%;height:100%}.hades .tp-arr-titleholder{}.hades .tp-arr-subtitleholder{}.hephaistos.tp-bullets{}.hephaistos.tp-bullets:before{content:\" \";position:absolute;width:100%;height:100%;background:transparent;padding:10px;margin-left:-10px;margin-top:-10px;box-sizing:content-box}.hephaistos .tp-bullet{width:12px;height:12px;position:absolute;background:#999;border:3px solid #f5f5f5;border-radius:50%;cursor:pointer;box-sizing:content-box; box-shadow:0px 0px 2px 1px rgba(130,130,130,0.3)}.hephaistos .tp-bullet:hover,.hephaistos .tp-bullet.selected{background:#fff;  border-color:#000}.hephaistos .tp-bullet-image{}.hephaistos .tp-bullet-title{}</style>");
                                                                                </script>
                                                                        </div>
                                                                        <!-- END REVOLUTION SLIDER -->
                                                                </div>

                                                        </div>
                                                </div>
                                        </div>

                                </div>
                        </section>

                        <?php if (!empty($featured_products)) { ?>
                                <section class=" box-element product-slider mtop70">
                                        <div class="container">
                                                <div class="row">
                                                        <div class="vc_col-sm-12 wpb_column vc_column_container">
                                                                <div class="wpb_wrapper">
                                                                        <div class="woocommerce">
                                                                                <div class="box-heading">
                                                                                        <span>Feautured Products</span>
                                                                                </div>
                                                                                <div class="box-content">
                                                                                        <div class="box-products slide" id="productcarouse-UsI9Q">
                                                                                                <div class="carousel-controls">
                                                                                                        <a class="carousel-control left" href="#productcarouse-UsI9Q" data-slide="prev">Prev</a>
                                                                                                        <a class="carousel-control right" href="#productcarouse-UsI9Q" data-slide="next">Next</a>
                                                                                                </div>
                                                                                                <div class="carousel-inner">
                                                                                                        <div class="item active">
                                                                                                                <div class="row">
                                                                                                                        <?php
                                                                                                                        $f = 0;
                                                                                                                        $count = count($featured_products);
                                                                                                                        foreach ($featured_products as $featured) {

                                                                                                                                $f++;
                                                                                                                                if ($f % 5 == 1) {
                                                                                                                                        $class = 1;
                                                                                                                                } else if ($f == $count) {
                                                                                                                                        $class = 0;
                                                                                                                                } else {
                                                                                                                                        $class = '';
                                                                                                                                }
                                                                                                                                ?>

                                                                                                                                <?= ProductLinksWidget::widget(['id' => $featured->id, 'first' => $class]) ?>
                                                                                                                                <?php
                                                                                                                                if ($f % 5 == 0) {
                                                                                                                                        if ($f != $count) {
                                                                                                                                                ?>
                                                                                                                                        </div>
                                                                                                                                </div>
                                                                                                                                <div class="item">

                                                                                                                                        <div class="row">
                                                                                                                                                <?php
                                                                                                                                        }
                                                                                                                                }
                                                                                                                        }
                                                                                                                        ?>

                                                                                                                </div>
                                                                                                        </div>

                                                                                                </div>
                                                                                        </div>
                                                                                </div>

                                                                        </div>

                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </section>
                        <?php } ?>

                        <?php
                        foreach ($home_datas as $home_data) {

                                if ($home_data->type == 2) {
                                        ?>

                                        <section>
                                                <!--<div class="container">-->
                                                <!--<div class="row">-->
                                                <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding la_fp_slide la_fp_child_section vc-has-modified" style="position: relative;">

                                                        <div class="wpb_column vc_column_container col-sm-12">
                                                                <div class="vc_column-inner ">
                                                                        <div class="wpb_wrapper">
                                                                                <div id="la_banner_box_5a372b28d2abb" class="wpb_content_element la-banner-box banner-type-2 margin-bottom-0 text-color-secondary banner__demo8" data-animation-class="" style="background: #fff;">
                                                                                        <div class="box-inner">
                                                                                                <div class=""><img width="640" height="440" src="<?= yii::$app->homeUrl . 'uploads/cms/home_management/' . $home_data->id . '/image1.' . $home_data->image_1 ?>" class="attachment-full size-full" alt="" srcset="<?= yii::$app->homeUrl . 'uploads/cms/home_management/' . $home_data->id . '/image1.' . $home_data->image_1 ?>"><span class="item--overlay"></span></div>
                                                                                                <a class="banner--link-overlay" href="" title=""></a>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>

                                                </div>
                                                <!--</div>-->
                                                <!--</div>-->
                                        </section>
                                        <?php
                                } else if ($home_data->type == 5) {


                                        $latest = explode(',', $home_data->product_id);
                                        ?>



                                        <section class=" box-element">
                                                <div class="container">
                                                        <div class="row">
                                                                <div class="vc_col-sm-12 wpb_column vc_column_container">
                                                                        <div class="wpb_wrapper">
                                                                                <div class="woocommerce">
                                                                                        <div class="box-heading">
                                                                                                <span><?= $home_data->tittle ?></span>
                                                                                        </div>
                                                                                        <div class="box-content">
                                                                                                <div class="box-products slide" id="category2">
                                                                                                        <div class="carousel-controls">
                                                                                                                <a class="carousel-control left" href="#category2" data-slide="prev">Prev</a>
                                                                                                                <a class="carousel-control right" href="#category2" data-slide="next">Next</a>
                                                                                                        </div>
                                                                                                        <div class="carousel-inner">
                                                                                                                <div class="item active">
                                                                                                                        <div class="row">
                                                                                                                                <!-- Product Item -->
                                                                                                                                <?php
                                                                                                                                $l = 0;
                                                                                                                                $count = count($latest);
                                                                                                                                foreach ($latest as $latest_arrive) {
                                                                                                                                        if ($latest_arrive != '') {

                                                                                                                                                $l++;
                                                                                                                                                if ($l % 5 == 1) {
                                                                                                                                                        $class = 1;
                                                                                                                                                } else if ($l == $count) {
                                                                                                                                                        $class = 0;
                                                                                                                                                } else {
                                                                                                                                                        $class = '';
                                                                                                                                                }
                                                                                                                                                ?>

                                                                                                                                                <?= ProductLinksWidget::widget(['id' => $latest_arrive, 'first' => $class]) ?>
                                                                                                                                                <?php
                                                                                                                                                if ($l % 5 == 0) {
                                                                                                                                                        if ($l != $count) {
                                                                                                                                                                ?>
                                                                                                                                                        </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="item">

                                                                                                                                                        <div class="row">
                                                                                                                                                                <?php
                                                                                                                                                        }
                                                                                                                                                }
                                                                                                                                        }
                                                                                                                                }
                                                                                                                                ?>

                                                                                                                        </div>
                                                                                                                </div>

                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>

                                                                                </div>

                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </section>
                                        <?php
                                } else if ($home_data->type == 1) {
                                        $todays_exclusive = explode(',', $home_data->product_id);
                                        ?>


                                        <section class=" box-element box-outer">
                                                <div class="container">
                                                        <div class="row">
                                                                <div class="vc_col-sm-12 wpb_column vc_column_container">
                                                                        <div class="wpb_wrapper">
                                                                                <div class="woocommerce">
                                                                                        <div class="box-heading">
                                                                                                <span><?= $home_data->tittle ?></span>
                                                                                        </div>
                                                                                        <div class="box-content">
                                                                                                <div class="box-products slide" id="category3">
                                                                                                        <div class="carousel-controls">
                                                                                                                <a class="carousel-control left" href="#category3" data-slide="prev">Prev</a>
                                                                                                                <a class="carousel-control right" href="#category3" data-slide="next">Next</a>
                                                                                                        </div>
                                                                                                        <div class="carousel-inner">
                                                                                                                <div class="item active">
                                                                                                                        <div class="row">
                                                                                                                                <!-- Product Item -->
                                                                                                                                <?php
                                                                                                                                $l = 0;
                                                                                                                                $count = count($todays_exclusive);
                                                                                                                                foreach ($todays_exclusive as $todays) {
                                                                                                                                        if ($todays != '') {
                                                                                                                                                $l++;
                                                                                                                                                if ($l % 5 == 1) {
                                                                                                                                                        $class = 1;
                                                                                                                                                } else if ($l == $count) {
                                                                                                                                                        $class = 0;
                                                                                                                                                } else {
                                                                                                                                                        $class = '';
                                                                                                                                                }
                                                                                                                                                ?>

                                                                                                                                                <?= ProductLinksWidget::widget(['id' => $todays, 'first' => $class]) ?>
                                                                                                                                                <?php
                                                                                                                                                if ($l % 5 == 0) {
                                                                                                                                                        if ($l != $count) {
                                                                                                                                                                ?>
                                                                                                                                                        </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="item">

                                                                                                                                                        <div class="row">
                                                                                                                                                                <?php
                                                                                                                                                        }
                                                                                                                                                }
                                                                                                                                        }
                                                                                                                                }
                                                                                                                                ?>


                                                                                                                        </div>
                                                                                                                </div>

                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>

                                                                                </div>

                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </section>
                                        <?php
                                } else if ($home_data->type == 3) {
                                        ?>

                                        <section class=" box-element box-outer pbtm40">
                                                <div class="container">
                                                        <div class="row">
                                                                <div class="vc_col-sm-6 col-sm-6 col-xs-12 wpb_column vc_column_container">
                                                                        <div class="wpb_wrapper">

                                                                                <div class="wpb_single_image wpb_content_element overlay-bottom vc_align_left">
                                                                                        <div class="wpb_wrapper">

                                                                                                <img width="575" height="260" src="<?= yii::$app->homeUrl . 'uploads/cms/home_management/' . $home_data->id . '/image1.' . $home_data->image_1 ?>" class=" vc_box_border_grey attachment-full" alt="img-fashion1" />
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>

                                                                <div class="vc_col-sm-6 col-sm-6 col-xs-12 wpb_column vc_column_container">
                                                                        <div class="wpb_wrapper">

                                                                                <div class="wpb_single_image wpb_content_element overlay-bottom vc_align_left">
                                                                                        <div class="wpb_wrapper">

                                                                                                <img width="575" height="260" src="<?= yii::$app->homeUrl . 'uploads/cms/home_management/' . $home_data->id . '/image2.' . $home_data->image_2 ?>" class=" vc_box_border_grey attachment-full" alt="banner_home_3" />
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </section>
                                        <?php
                                } else if ($home_data->type == 6) {

                                        $new = explode(',', $home_data->product_id);
                                        ?>

                                        <section class=" box-element box-outer">
                                                <div class="container">
                                                        <div class="row">
                                                                <div class="vc_col-sm-12 wpb_column vc_column_container">
                                                                        <div class="wpb_wrapper">
                                                                                <div class="woocommerce">
                                                                                        <div class="box-heading">
                                                                                                <span><?= $home_data->tittle ?></span>
                                                                                        </div>
                                                                                        <div class="box-content">
                                                                                                <div class="box-products slide" id="productcarouse-40Cza">
                                                                                                        <div class="carousel-controls">
                                                                                                                <a class="carousel-control left" href="#productcarouse-40Cza" data-slide="prev">Prev</a>
                                                                                                                <a class="carousel-control right" href="#productcarouse-40Cza" data-slide="next">Next</a>
                                                                                                        </div>
                                                                                                        <div class="carousel-inner">
                                                                                                                <div class="item active">
                                                                                                                        <div class="row">
                                                                                                                                <!-- Product Item -->
                                                                                                                                <!-- Product Item -->
                                                                                                                                <?php
                                                                                                                                $n = 0;
                                                                                                                                $count = count($new);
                                                                                                                                foreach ($new as $new_aariv) {
                                                                                                                                        if ($new_aariv != '') {
                                                                                                                                                $n++;
                                                                                                                                                if ($n % 5 == 1) {
                                                                                                                                                        $class = 1;
                                                                                                                                                } else if ($n == $count) {
                                                                                                                                                        $class = 0;
                                                                                                                                                } else {
                                                                                                                                                        $class = '';
                                                                                                                                                }
                                                                                                                                                ?>

                                                                                                                                                <?= ProductLinksWidget::widget(['id' => $new_aariv, 'first' => $class]) ?>
                                                                                                                                                <?php
                                                                                                                                                if ($n % 5 == 0) {
                                                                                                                                                        if ($n != $count) {
                                                                                                                                                                ?>
                                                                                                                                                        </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="item">

                                                                                                                                                        <div class="row">
                                                                                                                                                                <?php
                                                                                                                                                        }
                                                                                                                                                }
                                                                                                                                        }
                                                                                                                                }
                                                                                                                                ?>


                                                                                                                        </div>
                                                                                                                </div>



                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>

                                                                                </div>

                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </section>
                                <?php } else if ($home_data->type == 4) { ?>

                                        <section class=" box-element box-outer" style="border-bottom: none;">
                                                <div class="container">
                                                        <div class="row">
                                                                <div class="vc_col-sm-4 col-sm-6 col-xs-12 wpb_column vc_column_container">
                                                                        <div class="wpb_wrapper">

                                                                                <div class="wpb_single_image wpb_content_element overlay-bottom vc_align_left">
                                                                                        <div class="wpb_wrapper">

                                                                                                <img src="<?= yii::$app->homeUrl . 'uploads/cms/home_management/' . $home_data->id . '/image1.' . $home_data->image_1 ?>" class=" vc_box_border_grey attachment-full img-responsive" alt="img-fashion1" />
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>

                                                                <div class="vc_col-sm-4 col-sm-6 col-xs-12 wpb_column vc_column_container">
                                                                        <div class="wpb_wrapper">

                                                                                <div class="wpb_single_image wpb_content_element overlay-bottom vc_align_left">
                                                                                        <div class="wpb_wrapper">

                                                                                                <img src="<?= yii::$app->homeUrl . 'uploads/cms/home_management/' . $home_data->id . '/image2.' . $home_data->image_2 ?>" class=" vc_box_border_grey attachment-full img-responsive" alt="banner_home_3" />
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="vc_col-sm-4 col-sm-6 col-xs-12 wpb_column vc_column_container">
                                                                        <div class="wpb_wrapper">

                                                                                <div class="wpb_single_image wpb_content_element overlay-bottom vc_align_left">
                                                                                        <div class="wpb_wrapper">

                                                                                                <img src="<?= yii::$app->homeUrl . 'uploads/cms/home_management/' . $home_data->id . '/image3.' . $home_data->image_3 ?>" class=" vc_box_border_grey attachment-full img-responsive" alt="banner_home_3" />
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </section>

                                <?php } ?>
                        <?php } ?>
                        <section class=" box-element box-outer  vc_custom_1406840614788 margin-bottom-0 icon-section"  style="border-bottom: none;">
                                <div class="container">
                                        <div class="row">
                                                <div class="vc_col-sm-4 col-sm-4 col-xs-4 wpb_column vc_column_container">
                                                        <div class="wpb_wrapper">

                                                                <div class="wpb_text_column wpb_content_element ">
                                                                        <div class="wpb_wrapper">
                                                                                <div class="box-media"><i class="icon media1"> </i><span class="media-body"><span class="title-media">free shipping</span>on order over $150.00</span>
                                                                                </div>

                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="vc_col-sm-4 col-sm-4 col-xs-4 wpb_column vc_column_container">
                                                        <div class="wpb_wrapper">

                                                                <div class="wpb_text_column wpb_content_element ">
                                                                        <div class="wpb_wrapper">
                                                                                <div class="box-media"><i class="icon media2"> </i><span class="media-body"><span class="title-media">free return</span>free 90 days return</span>
                                                                                </div>

                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="vc_col-sm-4 col-sm-4 col-xs-4 wpb_column vc_column_container">
                                                        <div class="wpb_wrapper">

                                                                <div class="wpb_text_column wpb_content_element ">
                                                                        <div class="wpb_wrapper">
                                                                                <div class="box-media"><i class="icon media3"> </i><span class="media-body"><span class="title-media">member discount</span>free register</span>
                                                                                </div>

                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </section>
                        <!--            <section class=" box-element vc_custom_1406399203437" ><div class="container"><div class="row">
                                <div class="vc_col-sm-12 latest-blog wpb_column vc_column_container">
                                    <div class="wpb_wrapper">
                                        <div class="box widget-text-separator vc_separator wpb_content_element vc_separator_align_center vc_el_width_100 vc_sep_color_grey">
                                            <span class="vc_sep_holder vc_sep_holder_l hidden"><span class="vc_sep_line"></span></span>
                                            <h3 class="box-heading visual-title separator_align_center ">
                                                <span>Lastest News</span>
                                            </h3>
                                            <span class="vc_sep_holder vc_sep_holder_r hidden"><span class="vc_sep_line"></span></span>
                                        </div>

                                        <div class="grid-post">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6 col-xs-12 blog-col">
                                                    <div class="blog-lastest pavblock left">
                                                        <div class="group-blog">
                                                            <div class="blog-heading">
                                                                <div class="left pull-left">
                                                                    <div class="date">24 Oct 2014</div>
                                                                    <div class="blog-title">This is my country-Este es mi país</div>
                                                                </div>
                                                                <div class="images">
                                                                    <a href="index4df4.html?p=2396"><img src="wp-content/uploads/2014/04/img-blog4.jpg" class="attachment-blog-home-image wp-post-image" alt="img-blog4" /></a>
                                                                </div>
                                                            </div>
                                                            <div class="box-content">
                                                                <div class="summary">This is my country of Kazakhstan. It locate between Tajikistan, and Kyrgyzstan, and assholes Uzbekistan</div>
                                                                <a class="readmore btn-arrow-right" href="index4df4.html?p=2396">Read more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12 blog-col">
                                                    <div class="blog-lastest pavblock left">
                                                        <div class="group-blog">
                                                            <div class="blog-heading">
                                                                <div class="left pull-left">
                                                                    <div class="date">17 Apr 2014</div>
                                                                    <div class="blog-title">Video sample</div>
                                                                </div>
                                                                <div class="images">
                                                                    <a href="index4bd3.html?p=326"><img src="wp-content/uploads/2014/04/img-blog3.jpg" class="attachment-blog-home-image wp-post-image" alt="img-blog3" /></a>
                                                                </div>
                                                            </div>
                                                            <div class="box-content">
                                                                <div class="summary">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#8217;s standard ...</div>
                                                                <a class="readmore btn-arrow-right" href="index4bd3.html?p=326">Read more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12 blog-col">
                                                    <div class="blog-lastest pavblock left">
                                                        <div class="group-blog">
                                                            <div class="blog-heading">
                                                                <div class="left pull-left">
                                                                    <div class="date">01 Apr 2014</div>
                                                                    <div class="blog-title">The winter fashion show</div>
                                                                </div>
                                                                <div class="images">
                                                                    <a href="index5a6a.html?p=192"><img src="wp-content/uploads/2014/04/img-blog5.jpg" class="attachment-blog-home-image wp-post-image" alt="img-blog5" /></a>
                                                                </div>
                                                            </div>
                                                            <div class="box-content">
                                                                <div class="summary">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard ...</div>
                                                                <a class="readmore btn-arrow-right" href="index5a6a.html?p=192">Read more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12 blog-col">
                                                    <div class="blog-lastest pavblock left">
                                                        <div class="group-blog">
                                                            <div class="blog-heading">
                                                                <div class="left pull-left">
                                                                    <div class="date">01 Apr 2014</div>
                                                                    <div class="blog-title">This is my country</div>
                                                                </div>
                                                                <div class="images">
                                                                    <a href="index9e8b.html?p=188"><img src="wp-content/uploads/2014/04/img-blog4.jpg" class="attachment-blog-home-image wp-post-image" alt="img-blog4" /></a>
                                                                </div>
                                                            </div>
                                                            <div class="box-content">
                                                                <div class="summary">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard ...</div>
                                                                <a class="readmore btn-arrow-right" href="index9e8b.html?p=188">Read more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div></div></section>-->
                        <!--            <section class=" box-element group-product" ><div class="container"><div class="row">
                                <div class="vc_col-sm-3 col-sm-6 col-xs-12 wpb_column vc_column_container">
                                    <div class="wpb_wrapper">
                                        <div class="woocommerce">
                                            <div class="box-heading">
                                                <span>Top Rate</span>
                                            </div>

                                            <div class="product_list_widget">
                                                <div class="item-product-widget clearfix">
                                                    <div class="images pull-left">
                                                        <img src="wp-content/uploads/2014/08/product-3.jpg" class="attachment-shop_thumbnail wp-post-image" alt="product-3" />    </div>
                                                    <div class="product-meta">
                                                        <div class="title">
                                                            <a href="index016f.html?product=product-girl" title="Grouped Product &rarr; Product girl">
                                                                Grouped Product &rarr; Product girl            </a>
                                                        </div>

                                                        <span class="price"><span class="amount">&pound;80.00</span></span>

                                                    </div>
                                                </div>			<div class="item-product-widget clearfix">
                                                    <div class="images pull-left">
                                                        <img src="wp-content/uploads/2013/06/product5.jpg" class="attachment-shop_thumbnail wp-post-image" alt="product5" />    </div>
                                                    <div class="product-meta">
                                                        <div class="title">
                                                            <a href="index6d91.html?product=ninja-silhouette" title="Simple product">
                                                                Simple product            </a>
                                                        </div>

                                                        <span class="price"><span class="amount">&pound;20.00</span></span>
                                                        <div class="star-rating" title="Rated 5.00 out of 5"><span style="width:100%"><strong class="rating">5.00</strong> out of 5</span></div>
                                                    </div>
                                                </div>			<div class="item-product-widget clearfix">
                                                    <div class="images pull-left">
                                                        <img src="wp-content/uploads/2013/06/product1.jpg" class="attachment-shop_thumbnail wp-post-image" alt="product1" />    </div>
                                                    <div class="product-meta">
                                                        <div class="title">
                                                            <a href="index0353.html?product=patient-ninja" title="Patient Ninja">
                                                                Patient Ninja            </a>
                                                        </div>

                                                        <span class="price"><span class="amount">&pound;35.00</span></span>
                                                        <div class="star-rating" title="Rated 4.67 out of 5"><span style="width:93.4%"><strong class="rating">4.67</strong> out of 5</span></div>
                                                    </div>
                                                </div>	</div>
                                        </div>

                                    </div>
                                </div>

                                <div class="vc_col-sm-3 col-sm-6 col-xs-12 wpb_column vc_column_container">
                                    <div class="wpb_wrapper">
                                        <div class="woocommerce">
                                            <div class="box-heading">
                                                <span>On Sale</span>
                                            </div>

                                            <div class="product_list_widget">
                                                <div class="item-product-widget clearfix">
                                                    <div class="images pull-left">
                                                        <img src="wp-content/uploads/2013/06/product18.jpg" class="attachment-shop_thumbnail wp-post-image" alt="product18" />    </div>
                                                    <div class="product-meta">
                                                        <div class="title">
                                                            <a href="indexd1ee.html?product=flying-ninja" title="Out of stock">
                                                                Out of stock            </a>
                                                        </div>

                                                        <span class="price"><del><span class="amount">&pound;56.00</span></del> <ins><span class="amount">&pound;40.00</span></ins></span>

                                                    </div>
                                                </div>			<div class="item-product-widget clearfix">
                                                    <div class="images pull-left">
                                                        <img src="wp-content/uploads/2013/06/product9.jpg" class="attachment-shop_thumbnail wp-post-image" alt="product9" />    </div>
                                                    <div class="product-meta">
                                                        <div class="title">
                                                            <a href="index6e9b.html?product=premium-quality-2" title="Framed-Sleeve">
                                                                Framed-Sleeve            </a>
                                                        </div>

                                                        <span class="price"><del><span class="amount">&pound;15.00</span></del> <ins><span class="amount">&pound;12.00</span></ins></span>

                                                    </div>
                                                </div>			<div class="item-product-widget clearfix">
                                                    <div class="images pull-left">
                                                        <img src="wp-content/uploads/2013/06/product17.jpg" class="attachment-shop_thumbnail wp-post-image" alt="product17" />    </div>
                                                    <div class="product-meta">
                                                        <div class="title">
                                                            <a href="indexf07b.html?product=ship-your-idea-3" title="Ship Your Idea">
                                                                Ship Your Idea            </a>
                                                        </div>

                                                        <span class="price"><del><span class="amount">&pound;90.00</span></del> <ins><span class="amount">&pound;75.00</span></ins></span>

                                                    </div>
                                                </div>	</div>
                                        </div>

                                    </div>
                                </div>

                                <div class="vc_col-sm-3 col-sm-6 col-xs-12 wpb_column vc_column_container">
                                    <div class="wpb_wrapper">
                                        <div class="woocommerce">
                                            <div class="box-heading">
                                                <span>Recent Review</span>
                                            </div>

                                            <div class="product_list_widget">
                                                <div class="item-product-widget clearfix">
                                                    <div class="images pull-left">
                                                        <img src="wp-content/uploads/2013/06/product4.jpg" class="attachment-shop_thumbnail wp-post-image" alt="product4" />    </div>
                                                    <div class="product-meta">
                                                        <div class="title">
                                                            <a href="index3049.html?product=woo-ninja" title="Woo Mango">
                                                                Woo Mango            </a>
                                                        </div>

                                                        <span class="price"><span class="amount">&pound;20.00</span></span>

                                                    </div>
                                                </div>			<div class="item-product-widget clearfix">
                                                    <div class="images pull-left">
                                                        <img src="wp-content/uploads/2013/06/product7.jpg" class="attachment-shop_thumbnail wp-post-image" alt="product7" />    </div>
                                                    <div class="product-meta">
                                                        <div class="title">
                                                            <a href="indexc37d.html?product=premium-quality" title="Premium Quality">
                                                                Premium Quality            </a>
                                                        </div>

                                                        <span class="price"><span class="amount">&pound;20.00</span></span>

                                                    </div>
                                                </div>			<div class="item-product-widget clearfix">
                                                    <div class="images pull-left">
                                                        <img src="wp-content/uploads/2013/06/product3.jpg" class="attachment-shop_thumbnail wp-post-image" alt="product3" />    </div>
                                                    <div class="product-meta">
                                                        <div class="title">
                                                            <a href="index8834.html?product=happy-ninja" title="Happy Ninja">
                                                                Happy Ninja            </a>
                                                        </div>

                                                        <span class="price"><span class="amount">&pound;50.00</span></span>

                                                    </div>
                                                </div>	</div>
                                        </div>

                                    </div>
                                </div>

                                <div class="vc_col-sm-3 col-sm-6 col-xs-12 wpb_column vc_column_container">
                                    <div class="wpb_wrapper">
                                        <div class="woocommerce">
                                            <div class="box-heading">
                                                <span>Featured</span>
                                            </div>

                                            <div class="product_list_widget">
                                                <div class="item-product-widget clearfix">
                                                    <div class="images pull-left">
                                                        <img src="wp-content/uploads/2013/06/product16.jpg" class="attachment-shop_thumbnail wp-post-image" alt="product16" />    </div>
                                                    <div class="product-meta">
                                                        <div class="title">
                                                            <a href="index27bd.html?product=ninja-silhouette-2" title="Farlap Shirt ">
                                                                Farlap Shirt             </a>
                                                        </div>

                                                        <span class="price"><span class="amount">&pound;90.00</span></span>

                                                    </div>
                                                </div>			<div class="item-product-widget clearfix">
                                                    <div class="images pull-left">
                                                        <img src="wp-content/uploads/2013/06/product13.jpg" class="attachment-shop_thumbnail wp-post-image" alt="product13" />    </div>
                                                    <div class="product-meta">
                                                        <div class="title">
                                                            <a href="index33a9.html?product=woo-logo-2" title="Crossed Shirt ">
                                                                Crossed Shirt             </a>
                                                        </div>

                                                        <span class="price"><span class="amount">&pound;35.00</span></span>

                                                    </div>
                                                </div>			<div class="item-product-widget clearfix">
                                                    <div class="images pull-left">
                                                        <img src="wp-content/uploads/2013/06/product4.jpg" class="attachment-shop_thumbnail wp-post-image" alt="product4" />    </div>
                                                    <div class="product-meta">
                                                        <div class="title">
                                                            <a href="index3049.html?product=woo-ninja" title="Woo Mango">
                                                                Woo Mango            </a>
                                                        </div>

                                                        <span class="price"><span class="amount">&pound;20.00</span></span>

                                                    </div>
                                                </div>	</div>
                                        </div>

                                    </div>
                                </div>
                            </div></div></section>-->
                </article>
                <!-- #post -->
        </div>

</section>