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
            url:'cart/'+rowId+'/'+qty,
            type:"put",
            dataType: "json",
            data:{"_token":token,"id":rowId,"qty":qty},
            success:function (data) {
                    $("#totalprice").html(data.price);
                    $('#cart-count').html(data.count);
                    $('#quantity').html(data.$qty);
                    $('#totalamout').html(data.total);
                    console.log(data);

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
                success:function(data) {
                    $('#cart-count').html(data.count);

                }
            });
    });
});
$(document).ready(function() {
    $(".form-order-detail .btn-add").click(function (e) {
        e.preventDefault();
        var qty=$(this).parent().parent().find(".qty").val();
        var token=$("input[name='_token']").val();
        var id = $(this).attr('id');
        $.ajax({
            url:'home/mua-hang/'+id+'/'+qty,
            type:"GET",
            data:{"_token":token,"id":id,"qty":qty},
            success:function (data) {
                console.log(data);
                $('#cart-count').html(data.count);
            }
        });
    });
});
$(document).ready(function() {
    $(".deleteeCart").click(function (e) {
        e.preventDefault();
        var token=$("input[name='_token']").val();
        var rowid = $(this).attr('id');
        $.ajax({
            url:'cart/'+rowid+'/delete',
            type:"put",
            data:{"_token":token,"rơwid":rowid},
            success:function (data) {

                $('#cart-count').html(data.count);
                $("#content"+rowid).remove();


            }

        });

    });
});
function writeMessage() {
    document.forms[0].mySecondInput.value = document.forms[0].myInput.value;
}