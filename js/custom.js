$(document).ready(function () {
        jQuery(".add-cart").click(function () {
                showLoader();
                jQuery('.alert-success').addClass('hide');
                var canname = $(this).attr('id');
                var qty = '1';
                jQuery.ajax({
                        type: "POST",
                        url: homeUrl + 'cart/buynow',
                        data: {product: canname, qty: qty}
                }).done(function (data) {
                        if (data == 9) {

                                $('.option_errors').html('<p>Invalid Product.Please try again</p>').show();
                        } else {
                                jQuery('.alert_' + canname).removeClass('hide');
                                jQuery('.shop-cart').html('').html(data);

                        }
                        hideLoader();
                });
        });
        jQuery('.loginCheckout').click(function () {
                var modal = document.getElementById('myModal');

                modal.style.display = "block";

        });
        jQuery('.close-alert').click(function () {
                jQuery('.alert-success').addClass('hide');
        });
        jQuery('body').on('click', '.remove_cart', function () {
                var answer = confirm("Are you sure want to remove?");
                if (answer)
                {
                        showLoader();
                        var $id = $(this).attr('data-product_id');
                        var $count = $('#cart_count').val();
                        jQuery('.error_' + $id).html('');
                        jQuery.ajax({
                                url: homeUrl + 'cart/cart_remove',
                                type: "post",
                                data: {id: $id, count: $count},
                                success: function (data) {
                                        var $data = JSON.parse(data);
                                        if ($data.msg === "success") {
                                                $('.tr_' + $id).remove();
                                                getcart();
                                                $('.cart_subtotal').html('AED ' + $data.subtotal);
                                                $('.shipping-cost').html('AED ' + $data.shipping);
                                                $('.grand_total').html('AED ' + $data.grandtotal);
                                                hideLoader();
                                        } else {
                                                window.location.href = homeUrl + "cart/mycart";
                                        }
                                }, error: function () {
                                        jQuery('.error_' + $id).html('Cannot Find');
                                }
                        });
                }
        });
        jQuery('.cart_quantity').on('change keyup', function () {
                showLoader();
                var quantity = this.value
                var $ids = $(this).attr('id');
                var ids = $ids.split('_');
                var id = ids['1'];
                var $count = $('#cart_count').val();
                if (quantity != '' && parseInt(quantity) > '0') {
                        findstock(id, quantity);
                        updatecart(id, quantity, $count);
                        PromotionQuantityChange();
                } else if (quantity != '') {
                        $('#quantity_' + id).val('1');
                }
        });
        jQuery(".add_to_wish_list").click(function () {
                var canname = $(this).attr('id');
                var div_id = $(this).parent().closest('div').attr('class').split(' ');

                addwishlist($(this), canname, $(this).closest(".gp_products_inner"));
        });

        $(".mobile").keypress(function (e) {
                //if the letter is not digit then display error and don't type anything
                var mobile = $(this).val();
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                        return false;
                } else if (mobile.length === 10) {
                        return false;
                }
        });

        jQuery('.apply-coupen').on('click', function (e) {
                e.preventDefault();
                var code = $('#coupon_code').val();
                var promotion_amount = $('#promotion-code-amount').val();
                jQuery.ajax({
                        url: homeUrl + 'cart/promotion-check',
                        type: "POST",
                        data: {code: code, promotion_amount: promotion_amount},
                        success: function (data) {
                                jQuery('.help-block').remove();
                                var res = $.parseJSON(data);
                                if (res.result['msg'] == 6) {
                                        jQuery("#coupon-code-error").append('<div class="help-block" style="color:red">In order to avail the benefits of this promotional code, please Login/Sign Up.</div>');
                                } else if (res.result['msg'] == 1) {
                                        jQuery("#coupon-code-error").append('<div class="help-block" style="color:red">Invalid Code! Please try another one.</div>');
                                } else if (res.result['msg'] == 2) {
                                        jQuery("#coupon-code-error").append('<div class="help-block" style="color:red">Code validity expired !</div>');
                                } else if (res.result['msg'] == 3) {
                                        jQuery("#coupon-code-error").append('<div class="help-block" style="color:red">Sorry!! You are already used this code!</div>');
                                } else if (res.result['msg'] == 4) {
                                        jQuery("#coupon-code-error").append('<div class="help-block" style="color:red">Invalid Code! Please try another one.</div>');
                                } else if (res.result['msg'] == 5) {
                                        jQuery("#coupon-code-error").append('<div class="help-block" style="color:red">This code is only when purchase items above AED  ' + res.result['amount'] + '</div>');
                                } else if (res.result['msg'] == 7) {
                                        jQuery('.help-block').hide();
                                        var codes = jQuery('#promotion-codes').val();
                                        if (codes && codes != '') {
                                                var promo_values = jQuery('#promotion-codes').val() + ',' + res.result['discount_id'];
                                        } else {
                                                var promo_values = res.result['discount_id'];
                                        }
                                        jQuery('#promotion-codes').val(promo_values);
                                        jQuery('#coupon_code').val('');
                                        jQuery('#promotion-code-amount').val(res.result['total_promotion_amount']);
                                        jQuery('#promotions-listing').append('<p id="disc_' + res.result['discount_id'] + '">Coupon code  ' + res.result['code'] + ' is added with ' + res.result['amount'] + 'AED <a class="promotion-remove" title="Remove" id="' + res.result['discount_id'] + '" type="' + res.result['temp_session'] + '">x</a></p>');
                                        jQuery('.cart-promotion').show();
                                        jQuery('.promotion_discount').text(res.result['total_promotion_amount']);
                                        jQuery('.grand_total').html('<span class="">AED </span>' + res.result['overall_grand_total']);
                                } else if (res.result['msg'] == 8) {
                                        jQuery("#coupon-code-error").append('<div class="help-block" style="color:red">Sorry!! You are already used this code!</div>');
                                } else if (res.result['msg'] == 9) {
                                        jQuery("#coupon-code-error").append('<div class="help-block" style="color:red">You can use only one coupon code</div>');
                                }


                        }
                });
        });

        jQuery(document).on('click', '.promotion-remove', function () {

                var id = jQuery(this).attr('id');
                var temp_id = jQuery(this).attr('type');
                var promo_codes = jQuery('#promotion-codes').val();
                jQuery.ajax({
                        url: homeUrl + 'cart/promotion-remove',
                        type: "POST",
                        data: {id: id, promo_codes: promo_codes, temp_id: temp_id},
                        success: function (data) {
                                var obj = jQuery.parseJSON(data);
                                jQuery('#disc_' + id).remove();
                                jQuery('#promotion-codes').val(obj.code);
                                jQuery('#promotion-code-amount').val(obj.total_promotion_amount);
                                if (obj.total_promotion_amount > 0) {
                                        jQuery('.cart-promotion').show();
                                        jQuery('.promotion_discount').text(obj.total_promotion_amount);
                                } else {
                                        jQuery('.cart-promotion').hide();
                                }
                                jQuery('.grand_total').html('<span class=""> AED </span>' + obj.overall_grand_total);
                        }
                });
        });



});
///////////     my order continue order  starts-> ////////////

jQuery('body').on('click', '.remove_order', function () {
        var answer = confirm("Are you sure want to remove?");
        if (answer)
        {
                showLoader();
                var $id = $(this).attr('data-product_id');
                var $count = $('#cart_count').val();
                jQuery('.error_' + $id).html('');
                jQuery.ajax({
                        url: homeUrl + 'checkout/remove-order',
                        type: "post",
                        data: {id: $id, count: $count},
                        success: function (data) {
                                var $data = JSON.parse(data);
                                if ($data.msg === "success") {
                                        $('.tr_' + $id).remove();
                                        getcart();
                                        $('.cart_subtotal').html('AED ' + $data.subtotal);
                                        $('.shipping-cost').html('AED ' + $data.shipping);
                                        $('.grand_total').html('AED ' + $data.grandtotal);
                                        hideLoader();
                                } else {
                                        window.location.href = homeUrl + "checkout/continue?id=" + $data.order_id;
                                }
                        }, error: function () {
                                jQuery('.error_' + $id).html('Cannot Find');
                        }
                });
        }
});

jQuery('.ordqnty').on('change keyup', function () {
        showLoader();
        var quantity = this.value
        var $ids = $(this).attr('id');
        var ids = $ids.split('_');
        var id = ids['1'];
        var $count = $('#cart_count').val();
        if (quantity != '' && parseInt(quantity) > '0') {
                findorderstock(id, quantity);
                updatedetail(id, quantity, $count);
        } else if (quantity != '') {
                $('#quantity_' + id).val('1');
        }
});


//////////////////////  my order continue order  ends!  ///////////////



/************************************************************************************************************/
function getcart() {

        jQuery.ajax({
                type: "POST",
                cache: 'false',
                async: false,
                url: homeUrl + 'cart/getcart',
                data: {}
        }).done(function (data) {
                jQuery('.shop-cart').html('').html(data);
//        hideLoader();
        });
}
function findstock(id, quantity) {
        jQuery.ajax({
                type: "POST",
                url: homeUrl + 'cart/findstock',
                data: {cartid: id, quantity: quantity},
                success: function (data) {
                        var $data = JSON.parse(data);
                        if ($data.msg === "success") {
                                $('#total_' + id).html('AED ' + $data.total);
                                $('#quantity_' + id).val($data.quantity);
                        } else {
                                location.reload();
                        }
//
                }
        });
}
function findorderstock(id, quantity) {
        jQuery.ajax({
                type: "POST",
                url: homeUrl + 'checkout/findstock',
                data: {cartid: id, quantity: quantity},
                success: function (data) {
                        var $data = JSON.parse(data);
                        if ($data.msg === "success") {
                                $('#total_' + id).html('AED ' + $data.total);
                                $('#quantity_' + id).val($data.quantity);
                        } else {
                                location.reload();
                        }
//
                }
        });
}
function updatecart(id, quantity, count) {
        jQuery.ajax({
                type: "POST",
                url: homeUrl + 'cart/updatecart',
                data: {cartid: id, quantity: quantity, count: count},
                success: function (data) {
                        var $data = JSON.parse(data);
                        if ($data.msg === "success") {
                                $("#cart_count").val($data.cart_count);
                                $('.cart_subtotal').html('AED ' + $data.subtotal);
                                if ($data.shipping === '0.00') {
                                        $('.free_shipping').removeClass('hide');
                                        $('.shipping_').addClass('hide');
                                } else {
                                        $('.free_shipping').addClass('hide');
                                        $('.shipping_').removeClass('hide');
                                }
                                $('.grand_total').html('AED ' + $data.grandtotal);
                                hideLoader();
                        }
                }
        });
}
function updatedetail(id, quantity, count) {
        jQuery.ajax({
                type: "POST",
                url: homeUrl + 'checkout/updatecart',
                data: {cartid: id, quantity: quantity, count: count},
                success: function (data) {
                        var $data = JSON.parse(data);
                        if ($data.msg === "success") {
                                $("#cart_count").val($data.cart_count);
                                $('.cart_subtotal').html('AED ' + $data.subtotal);
                                if ($data.shipping === '0.00') {
                                        $('.free_shipping').removeClass('hide');
                                        $('.shipping_').addClass('hide');
                                } else {
                                        $('.free_shipping').addClass('hide');
                                        $('.shipping_').removeClass('hide');
                                }
                                $('.grand_total').html('AED ' + $data.grandtotal);
                                hideLoader();
                        }
                }
        });
}
function addwishlist(button, id, closest_div) {

        jQuery.ajax({
                type: "POST",
                cache: 'false',
                async: false,
                url: homeUrl + 'ajax/savewishlist',
                data: {product_id: id}
        }).done(function (data) {
                if (data == 0) {
                        window.location.href = homeUrl + "site/login-signup";
                } else {
                        ShowWishlistPopup(button, id, data, closest_div);
                }
                hideLoader();
        });
}

function ShowWishlistPopup(button, id, flag, closest_div) {
        var offset = button.offset();

        if (flag == 2) {
                closest_div.prepend('<div class="wish-list-popup"><i class="fa fa-check" aria-hidden="true"></i>Already Added to Wishlist</div>');

        } else {
                console.log('adad');
                closest_div.prepend('<div class="wish-list-popup"><i class="fa fa-check" aria-hidden="true"></i>Added to Your Wishlist</div>').delay(500).remove(".wish-list-popup");

        }
        setTimeout(function () {
                $('.wish-list-popup').remove();
        }, 2000);
        jQuery('#wish-list-popup-' + id).fadeIn('fast').delay(1500).fadeOut('slow');
}


function PromotionQuantityChange() {
        var promo_codes = $('#promotion-codes').val();
        jQuery.ajax({
                url: homeUrl + 'cart/promotion-quantity-change',
                type: "POST",
                data: {promo_codes: promo_codes},
                success: function (data) {

                        var obj = jQuery.parseJSON(data);
                        jQuery('#promotions-listing').html('');

                        jQuery.each(obj.promotion, function (index, value) {
                                jQuery('#promotions-listing').append('<p id="disc_' + value.discount_id + '">Coupon code  ' + value.code + ' is added with ' + value.amount + ' AED <a class="promotion-remove" title="Remove" id="' + value.discount_id + '"  type="' + value.temp_session + '">x</a></p>');
                        });
                        jQuery('#promotion-codes').val(obj.code);
                        jQuery('#promotion-code-amount').val(obj.promotion_total_discount);
                        if (obj.promotion_total_discount > 0) {
                                jQuery('.cart-promotion').show();
                                jQuery('.promotion_discount').text(obj.promotion_total_discount);
                        } else {
                                jQuery('.cart-promotion').hide();
                        }
                        jQuery('.grand_total').html('<span class="woocommerce-Price-currencySymbol"> AED </span>' + obj.overall_grand_total);
                }
        });
}


function showLoader() {
        $('.page-loading-overlay').removeClass('loaded');
}
function hideLoader() {
        $('.page-loading-overlay').addClass('loaded');
}
/************************************************/

/*********************************************/

