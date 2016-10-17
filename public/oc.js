$(document).ready(function(){
	$('.tooltipped').tooltip({delay: 50});
});

function initMat() {
	$('.collapsible').collapsible({
      accordion : false
    });
}

var currentRollNumber;

function select() {
	var roll_number = currentRollNumber;

	var route = '/oc/select';
	var method = 'POST';
	var remarks = $('#icon_prefix2').val();

	var request = $.ajax({
		url: route,
		method: method,
		data: {
			"roll_no" : roll_number,
			"remarks" : remarks
		}
	});
	request.done(function(data){
		var info = JSON.parse(data);
		if(info.status_code == 200) {
			currentRollNumber = roll_number;
			Materialize.toast('Candidate Selected!', 4000, 'rounded');
			status();
			initMat();
		} else {
			alert('Updation Failed');
		}
	});
}

function reject() {
	var roll_number = currentRollNumber;

	var route = '/oc/reject';
	var method = 'POST';
	var remarks = $('#icon_prefix2').val();

	var request = $.ajax({
		url: route,
		method: method,
		data: {
			"roll_no" : roll_number,
			"remarks" : remarks
		}
	});
	request.done(function(data){
		var info = JSON.parse(data);
		if(info.status_code == 200) {
			currentRollNumber = roll_number;
			Materialize.toast('Candidate Rejected!', 4000, 'rounded');
			status();
			initMat();
		} else {
			alert('Updation Failed');
		}
	});
}

function shortlist() {
	var roll_number = currentRollNumber;

	var route = '/oc/shortlist';
	var method = 'POST';
	var remarks = $('#icon_prefix2').val();
	var request = $.ajax({
		url: route,
		method: method,
		data: {
			"roll_no" : roll_number,
			"remarks" : remarks
		}
	});
	request.done(function(data){
		var info = JSON.parse(data);
		if(info.status_code == 200) {
			currentRollNumber = roll_number;
			Materialize.toast('Candidate Shortlisted!', 4000, 'rounded');
			status();
			initMat();
		} else {
			alert('Updation Failed');
		}
	});
}

$("#search").click(function(){
    $("#answers").empty();
});

function search() {
	var roll_number = $('#roll_no').val();

	var source = $("#display").html();
	var template = Handlebars.compile(source);

	var route = '/oc/getanswers';
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
		if(info.status_code == 200) {
			currentRollNumber = roll_number;
			var context = info;
			var html = template(context);
			$('body').append(html);
			initMat();
			status();
		} else {
			alert('Fetch Failed');
		}
	});
}

function status() {
	var roll_number = $('#roll_no').val();

	var route = '/common/getstatus';
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
		if(info.status_code == 200) {
			currentRollNumber = roll_number;
			$('#icon_prefix2').val(info.message.remarks);
		} else {
			alert('Fetch Failed');
		}
	});
}