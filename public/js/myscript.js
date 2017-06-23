$(document).ready(function() {
    $(".order-status-actions .form-status").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        form.ajaxSubmit({
            success: function (data) {
                $(".order-status-actions .form-status .btn").attr('class', 'btn btn-primary');
                form.find('.btn').attr('class', 'btn btn-danger');
            }
        });
    })
});
$(document).ready(function() {
    $(".updateCart").click(function (e) {
        e.preventDefault();
        var rowId=$(this).attr('id');
        var qty=$(this).parent().parent().find(".qty").val();
        var token=$("input[name='_token']").val();
        $.ajax({
            url:'gio-hang/'+rowId+'/'+qty,
            type:"GET",
            data:{"_token":token,"id":rowId,"qty":qty},
            success:function (data) {

            }
        });
    });
});
$(document).ready(function(){
    $(".single-item-caption .fa-shopping-cart").click(function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        $.ajax(
            {
                url:'home/mua-hang/'+id,
                type:'GET',
                success:function(data){
                    if(data=="oke"){
                        alert("thêm thành công");
                    }
                }
            });
    });
});