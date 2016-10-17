$(document).ready(function(){
	$('.tooltipped').tooltip({delay: 50});
	load();
});

function initMat() {
	$('.collapsible').collapsible({
      accordion : false
    });
}

var currentRollNumber;

function load() {
	loadSelected();
	loadShortlisted();
	loadRejected();
}

function loadSelected() {
	var source = $("#selected-script").html();
	var template = Handlebars.compile(source);

	var route = SITE_BASE_URL + '/content/getselected';
	var method = 'POST';

	var request = $.ajax({
		url: route,
		method: method,
		data: {}
	});

	request.done(function(data){
		var info = JSON.parse(data);
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

function loadRejected() {
	var source = $("#rejected-script").html();
	var template = Handlebars.compile(source);

	var route = SITE_BASE_URL + '/content/getrejected';
	var method = 'POST';

	var request = $.ajax({
		url: route,
		method: method,
		data: {}
	});

	request.done(function(data){
		var info = JSON.parse(data);
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

function loadShortlisted() {
	var source = $("#shortlisted-script").html();
	var template = Handlebars.compile(source);

	var route = SITE_BASE_URL + '/content/getshortlisted';
	var method = 'POST';

	var request = $.ajax({
		url: route,
		method: method,
		data: {}
	});

	request.done(function(data){
		var info = JSON.parse(data);
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