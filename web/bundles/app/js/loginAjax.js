function loginAjax(){
	email = $("#email1").val();
	password = $("#password1").val();

	var w = wsseHeader(email, password);

	$.ajax({
		url: 'login/'+email+'/',
		headers: { 'x-wsse': w },
		success: function(data) {
        	if(data == '331') {
        		$("#myModal").modal('hide');
        		$("#tright").prop("hidden", true);
        		$("#user_name").html('<i class="fa fa-desktop" aria-hidden="true"></i>' + email);
        		$("#tright2").prop("hidden", false);
        	}
    	}
	});
}