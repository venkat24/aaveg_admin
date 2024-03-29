$(document).ready(function(){});

function login() {
	$('#loading').show();
	$('#login_button').prop("disabled",true);

	var admin_roll = $('#username').val();
	var admin_pass = $('#password').val();

	var route = '/admin/login';
	var method = 'POST';

	var request = $.ajax({
		url: SITE_BASE_URL + route,
		method: method,
		data: { 
			"username" : admin_roll,
			"password" : admin_pass
		}
	});

	request.done(function(data){
		$('#login_button').prop("disabled",false);
		if(data.response == "success") {
			location.href = SITE_BASE_URL + '/home';
		} else {
			alert('Sorry, Login failed.');
			console.log(data);
		}
	});
}