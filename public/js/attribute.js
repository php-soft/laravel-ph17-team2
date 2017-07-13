$(document).ready(function(){
	$('.delete-task').click(function(e){
        var categoryAttributeId = $(this).val();
        $.ajax({
            type: "DELETE",
            url: 'admin/attributes/' + categoryAttributeId + '/delete',
            success: function (data) {
                $("#categoryAttribute" + categoryAttributeId).remove();
            }
        });
    });
});