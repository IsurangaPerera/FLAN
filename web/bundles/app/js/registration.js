var objectO = {
	"user" : []
}

function showRegistration() {
	$("#formLogin").prop("hidden", true);
	$("#formReg").prop("hidden", false);
}

function showLogin() {
	$("#formLogin").prop("hidden", false);
	$("#formReg").prop("hidden", true);
}

function doRegister() {
	$user_id = $("#email").val();
	$pass = $("#password").val();
	$conf = $("#password_confirmation").val();

	objectO.user.push({
		"user_name"	  : $user_id,
		"password"    : $pass
	});

	$.ajax({
		type: "POST",
		url: "register/",
		data: JSON.stringify(objectO),
		success: function( data, textStatus, jQxhr ){
			showLogin();
		},
		error: function( jqXhr, textStatus, errorThrown ){

		}
	});
}