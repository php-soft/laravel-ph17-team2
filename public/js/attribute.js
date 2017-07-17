$(document).ready(function(){
    $('.delete-task').click(function(){
        var id = $(this).val();
        $.ajax({
            type: "DELETE",
            url: 'attributes/' + id + '/delete',
            data: {
                '_token': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: "JSON",
            success: function (data) {
                $("#categoryAttribute" + id).remove();
            }
        });
    });
});