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
