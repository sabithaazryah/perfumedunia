$(document).ready(function () {
    jQuery(".add-cart").click(function () {

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
//            hideLoader();
        });
    });
    jQuery('.close-alert').click(function () {
        jQuery('.alert-success').addClass('hide');
    });
    jQuery('body').on('click', '.remove_cart', function () {
        var answer = confirm("Are you sure want to remove?");
        if (answer)
        {
//            showLoader();
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
                        $('.cart_subtotal').html('Â£' + $data.subtotal);
                        $('.shipping-cost').html('Â£' + $data.shipping);
                        $('.grand_total').html('Â£' + $data.grandtotal);
//                        hideLoader();
                    }
                }, error: function () {
                    jQuery('.error_' + $id).html('Cannot Find');
                }
            });
        }
    });
});

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

