$(document).ready(function() {
	$('#btn-add-m').click(function(){
        $('#btn-save').val("add");
        $('#frmTasks').trigger("reset");
        $('#myModal').modal('show');
    });

    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        e.preventDefault(); 

        var formData = {
            name: $('#name').val(),
            description: $('#description').val(),
            slug: $('#slug').val(),
            parent_id: $('#parent_id').val(),
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();

        var type = "POST"; //for creating new resource
        // var task_id = $('#task_id').val();;
        var my_url = "categories/mainCategories";

        // if (state == "update"){
        //     type = "PUT"; //for updating existing resource
        //     my_url += '/' + task_id;
        // }

        console.log(formData);

        $.ajax({

            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);

                var category = '<tr id="category' + data.id + '"><td>' + data.id + '</td><td><a>' + data.name + '</a></td><td>' + data.parent_id + '</td><td>' + data.slug + '</td>';
                category += '<td class="text-center"><a href="http://localhost/laravel-ph17-team2/public/admin/categories/' + data.id + '/edit"><button class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-pencil"></span>Edit</button></a>&nbsp;';
                category += '<button class="btn btn-sm btn-danger delete-c" value="' + data.id + '"><span class="glyphicon glyphicon-trash"></span>Delete</button></tr>';

                if (state == "add"){ //if user added a new record
                    $('#categories-list').append(category);
                } 
                // else{ //if user updated an existing record

                //     $("#category" + category_id).replaceWith( category );
                // }

                $('#frmTasks').trigger("reset");

                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

    $('.delete-c').click(function(){
        var id = $(this).val();
        $.ajax({
            type: "DELETE",
            url: 'categories/' + id + '/delete',
            data: {
                '_token': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: "JSON",
            success: function (data) {
                $("#category" + id).remove();
            }
        });
    });
});
