$('.red_button').click(function () {
    var product_id = $(this).attr('id').replace('add-cart-', '');
    var quantity = 1;
    $.ajax({
        url: '/api-them-gio-hang',
        method: 'post',
        data: {
            id: product_id,
            quantity: quantity,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (resp) {
            var new_count = resp.shopping_cart.count;
            if (new_count == undefined) {
                $('#header-icons-noti').text(1);
            } else {
                $('#header-icons-noti').text(new_count);
            }

            // $('#header-cart-wrapitem').html(new_content);
            // $('#header-cart-total').text(new_total_money);
            swal('Thao tác thành công!', 'Sản phẩm đã được thêm vào giỏ hàng!', 'success');
        },
        error: function (error) {
            swal('Thao tác thất bại', JSON.parse(error.responseText).msg);
        }
    });
});

Number.prototype.numberFormat = function(decimals, dec_point, thousands_sep) {
    dec_point = typeof dec_point !== 'undefined' ? dec_point : '.';
    thousands_sep = typeof thousands_sep !== 'undefined' ? thousands_sep : ',';

    var parts = this.toFixed(decimals).split('.');
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_sep);

    return parts.join(dec_point);
}


$('.btn-num-product-down').on('click', function (e) {
    e.preventDefault();
    var numProduct = Number($(this).next().val());
    if (numProduct > 1) {
        numProduct = numProduct - 1;
        $(this).next().val(numProduct);
    }
    var discountPrice = $(this).closest('.quantity_selector').find('input[name="discountPrice"]').val();
    var totalPrice = Number(discountPrice) * numProduct;
    $(this).closest('.table-row').find('.column-5').text(totalPrice.numberFormat(0));



});

$('.btn-num-product-up').on('click', function (e) {
    e.preventDefault();
    var numProduct = Number($(this).prev().val());
    numProduct += 1;
    $(this).prev().val(numProduct);
    var discountPrice = $(this).closest('.quantity_selector').find('input[name="discountPrice"]').val();
    var totalPrice = Number(discountPrice) * numProduct;
    $(this).closest('.table-row').find('.column-5').text(totalPrice.numberFormat(0));
});
