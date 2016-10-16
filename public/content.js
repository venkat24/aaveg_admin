$(document).ready(function(){
});

function initMat() {
	$('.collapsible').collapsible({
      accordion : false
    });
}

function search() {
	var roll_number = $('#roll_no').val();
	var source = $("#display").html();
	var template = Handlebars.compile(source);

	var route = '/content/getanswers';
	var method = 'POST';

	var request = $.ajax({
		url: route,
		method: method,
		data: {
			"roll_no" : roll_number
		}
	});

	request.done(function(data){
		var info = JSON.parse(data);
		console.log(info);
		if(info.status_code == 200) {
			var context = info;
			var html = template(context);
			$('body').append(html);
			initMat();
		} else {
			alert('Fetch Failed');
		}
	});
}