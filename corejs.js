$(document).ready(function () {
	lstparms();
});

function lstparms() {
	$.get("bin.php", {}, function (data, status) {
		$("#contentapi").html(data);
	});
}

function search() {
	var value = $('#country').val();
	$('#contentapi').html('<div class="d-flex align-items-center"><strong>Loading...</strong><div class="spinner-border ms-auto" role="status" aria-hidden="true"></div></div>');
	$.ajax({
		type: "POST",
		url: "bin.php",
		data: {
			data:"PARMS",
			location:value
		},
		cache: false,
		success: function(data) {
				$("#contentapi").html(data);
				return true;	   
		},
		error: function(data) {
			return false;
		},
	}); 
}