$(document).ready(function() {
    $("#addButton").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        e.preventDefault(); 
        var formData = {
            name: $('#name').val(),
            address: $('#address').val(),
            description: $('#description').val(),
            logo: $('#logo').val(),
            user_id: $('.user_id').val(),
        }

        var state = $('#addButton').val();
        var type = "PUT"; //for creating new resource

        var id=$(this).parent().parent().find(".user_id").val();
        var my_url = "user/shop/"+id+"/index";
       
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $('#shopshow').load(location.href + ' #shopshow')

                if (state == "addShop"){ //if user added a new record
                    $('#shop_list').append(createShopAjax);
                } 
                
                $('#shops').trigger("reset");
                $('#createShop').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});
