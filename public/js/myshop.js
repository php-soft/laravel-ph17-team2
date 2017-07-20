$(document).ready(function() {
    $("#addButton").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        e.preventDefault(); 
        var id=$(this).parent().parent().find(".user_id").val();
        var formData = {
            name: $('#name').val(),
            address: $('#address').val(),
            description: $('#description').val(),
            logo: $('#logo').val(),
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#addButton').val();

        var type = "PUT"; //for creating new resource
        // var task_id = $('#task_id').val();;
        var my_url = "user/shop/"+id+"/index";
       

        // if (state == "update"){
        //     type = "PUT"; //for updating existing resource
        //     my_url += '/' + task_id;
        // }
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);

                var categoryAttribute ="<td class="text-center">"+data.name+"</td><td class="text-center">"+data.description+"</td><td class="text-center">"+data.address+"</td>"

                if (state == "addShop"){ //if user added a new record
                    $('#shop_list').append(categoryAttribute);
                } 
                // else{ //if user updated an existing record

                //     $("#category" + category_id).replaceWith( category );
                // }

                $('#shops').trigger("reset");

                $('#createShop').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});
