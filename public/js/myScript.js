
$('#check-all').click(function () {
    $('.check-item').prop('checked', $(this).is(':checked'));
});
$('#btn-apply').click(function () {
    switch ($('#select-action').val()) {
        case '0':
            alert('Please choose an action before click "Apply".');
            break;
        case '1':
            processDelete();
            break;
        case '2':
            processAnother();
            break;
        default:
            alert('Invalid action.');
            break;
    }
})

function processDelete() {
    var arrayId = [];
    $('.check-item:checked').each(function (index, item) {
        arrayId.push(item.closest('.row').id.replace('row-item-', ''));
    });
    if (arrayId.length == 0) {
        alert('Please choose at least 1 item.');
        return;
    }
    if (confirm('Are you sure want to delete these products?')) {
        $.ajax({
            method: 'DELETE',
            url: '/admin/product/destroy-many',
            data: {
                '_token': $('meta[name="csrf-token"]').attr('content'),
                'ids': arrayId
            },
            success: function () {
                $('#messageSuccess').text('Action success!');
                $('#messageSuccess').removeClass('d-none');
                for (var i = 0; i < arrayId.length; i++) {
                    $('#row-item-' + arrayId[i]).remove();
                }
                if ($('.check-item').length == 0) {
                    setTimeout(function () {
                        window.location.reload(1);
                    }, 3 * 1000);
                }
            },
            error: function () {
                $('#messageError').removeClass('d-none');
                $('#messageError').text('Action fails! Please try again later!');
            }
        });
    }
}

function processAnother() {
    alert('Coming soon! Please try again later.');
}


$('form[name="category-form"] select[name="categoryId"]').change(function () {
    window.location.href = $('form[name="category-form"]').attr('action') + '?categoryId=' + $(this).val();
});
