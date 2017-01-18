function loginAjax(){

	email = $("#user_login789934").val();
	password = $("#user_pass789934").val();

	//var w = wsseHeader(email, password);

	$.ajax({
		url: 'login_ex/'+email+'/'+password,
		//headers: { 'x-wsse': w },
		success: function(data) {
        	if(data == '200') {
                $("#sign-in").modal('hide');
                window.location.href = "/dashboard";
        	}
    	},
        error: function(jqXhr) {
            console.log(jqXhr.status);
        }
	});
}

/*$(document).ready(function(){
	$.ajax({
		url: 'checksession/',
		success: function(data) {
        	if(data != '') {
        		$("#tright").prop("hidden", true);
        		$("#user_name").html('<i class="fa fa-desktop" aria-hidden="true"></i>' + data);
        		$("#tright2").prop("hidden", false);
        	}
    	}
	});
})*/
