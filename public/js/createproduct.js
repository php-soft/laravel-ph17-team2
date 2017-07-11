$(document).ready(function(){
	$('#create').click(function() {
		var error = false;
		if($('#name').val() == "") {
			$('#name').next('.er').show();
			
			error = true;
		}

		if($('#price').val() == "") {
			$('#price').next('.er').show();
			error = true;
		}

		if($('#image').val() == "") {
			$('#image').next('.er').show();
			error = true;
		}

		if($('#alias').val() == "") {
			$('#alias').next('.er').show();
			error = true;
		}

		if(error == true) {
			return false;
		}
	});
});