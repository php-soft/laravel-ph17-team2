$(document).ready(function(){
    $('#btn-add-a').click(function(){
        $('#btn-save-a').val("add");
        $('#frmAttr').trigger("reset");
        $('#myAttr').modal('show');
    });

    $('.edit-a').click(function(){
        var id = $(this).val();

        $.get('attributes/' + id , function (data) {
            //success data
            console.log(data);
            $('#name').val(data.name);
            $('#task_id').val(data.id);
            $('#btn-save-a').val("update");
            $('#myAttr').modal('show');
        }) 
        
    });

    $("#btn-save-a").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        e.preventDefault(); 

        var formData = {
            name: $('#name').val(),
            category_id: $('#category_id').val(),
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save-a').val();

        var type = "POST"; //for creating new resource
        var task_id = $('#task_id').val();
        var my_url = "attributes";

        if (state == "update"){
            type = "POST"; //for updating existing resource
            my_url += '/' + task_id;
        }

        console.log(formData);

        $.ajax({

            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);

                var categoryAttribute = '<tr id="categoryAttribute' + data.id + '"><td>' + data.id + '</td><td><a>' + data.categoryName + '</a></td><td>' + data.category_id + '</td><td>' + data.name + '</td>';
                categoryAttribute += '<td class="text-center"><button class="btn btn-sm btn-primary edit-a" value="'+data.id+'""><span class="glyphicon glyphicon-pencil"></span>Edit</button>&nbsp;';
                categoryAttribute += '<button class="btn btn-sm btn-danger delete-a" value="'+data.id+'"><span class="glyphicon glyphicon-trash"></span>Delete</button></tr>';

                if (state == "add"){ //if user added a new record
                    $('#categoryAttribute-list').append(categoryAttribute);
                } 
                else{ //if user updated an existing record

                    $("#categoryAttribute" + data.id).replaceWith( categoryAttribute );
                }

                $('#frmAttr').trigger("reset");

                $('#myAttr').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

    $('.delete-a').click(function(){
        var id = $(this).val();
        $.ajax({
            type: "DELETE",
            url: 'attributes/' + id + '/delete',
            data: {
                '_token': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: "JSON",
            success: function (data) {
                console.log(data);
                $("#categoryAttribute" + id).remove();
            }
        });
    });
});