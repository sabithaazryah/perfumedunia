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
                jQuery('.alert-success').removeClass('hide');
                jQuery('.shop-cart').html('').html(data);
//                removewishlist(list_id, canname);
//                getcartcount();
//                getcarttotal();
//                $(".shopping-cart").fadeToggle("fast");
//                $(".shopping-cart-items").html(data);
            }
            hideLoader();
        });
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
//                    }
                        $('.cart_subtotal').html('£' + $data.subtotal);
                        $('.shipping-cost').html('£' + $data.shipping);
                        $('.grand_total').html('£' + $data.grandtotal);
                        hideLoader();
                    }else{
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
        } else if (quantity != '') {
            $('#quantity_' + id).val('1');
        }
    });
    jQuery(".add_to_wish_list").click(function () {
        var canname = $(this).attr('id');
        var div_id = $(this).parent().closest('div').attr('class').split(' ');
        //$(this).closest(".gp_products_inner").prepend($('<div> new div </div>'));

        addwishlist($(this), canname, $(this).closest(".gp_products_inner"));
    });
});



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
                $('#total_' + id).html('£' + $data.total);
                $('#quantity_' + id).val($data.quantity);
//                hideLoader();
            } else {
                location.reload();
//                hideLoader();
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
                $('.cart_subtotal').html('£' + $data.subtotal);
                if ($data.shipping === '0.00') {
//                    console.log('ivde');
                    $('.free_shipping').removeClass('hide');
                    $('.shipping_').addClass('hide');
                } else {
//                    console.log('engane');
                    $('.free_shipping').addClass('hide');
                    $('.shipping_').removeClass('hide');
                }
                $('.grand_total').html('£' + $data.grandtotal);
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

//		$('#wish-list-popup-' + id).html('<i class="fa fa-check" aria-hidden="true"></i>Already Added to Wishlist');
    } else {
        console.log('adad');
        closest_div.prepend('<div class="wish-list-popup"><i class="fa fa-check" aria-hidden="true"></i>Added to Your Wishlist</div>').delay(500).remove(".wish-list-popup");
//		$('#wish-list-popup-' + id).html('<i class="fa fa-check" aria-hidden="true"></i>Added to Your Wishlist');

    }
    setTimeout(function () {
        $('.wish-list-popup').remove();
    }, 2000);
    jQuery('#wish-list-popup-' + id).fadeIn('fast').delay(1500).fadeOut('slow');
}

function showLoader() {
    $('.page-loading-overlay').removeClass('loaded');
}
function hideLoader() {
    $('.page-loading-overlay').addClass('loaded');
}

