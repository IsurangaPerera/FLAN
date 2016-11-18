function loginAjax(){
	email = $("#email1").val();
	password = $("#password1").val();

	var w = wsseHeader(email, password);
	console.log(w);

	$.ajax({
		url: 'login/',
		headers: { 'x-wsse': w },
		success: function(urlFromController) {
        	window.location.href = urlFromController;
    	}
	});
}