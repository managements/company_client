$(function () {
   // select form
    $('body').on('click','#bc',function (e) {
        e.preventDefault();
        var $form = $('#form-bc').attr('action');
        var $token = $('input[name="_token"]').val();
        var $product = $('#bc-product').val();
        if($product.length !== 0){
            $('#target-list-product').show();
            $.ajax({
                method: "POST",
                url: $form,
                data: {'product' : $product,"_token":$token},
                beforeSend: function() {
                    $('#target-list-product').html('<div class="col-xs-12 text-center"><i class="fa fa-spin fa-2x fa-spinner"></i></div>')
                },
                success: function (data) {
                    $('#target-list-product').html(data)
                }
            })
        }else{
            $('#target-list-product').hide();
        }

    });
    $('body').on('click','.bc-add',function (e) {
       $('#qt-product-'+ $(this).attr('id')).val($('#qt').val());
       $('#form-'+ $(this).attr('id')).submit();
    });
});
