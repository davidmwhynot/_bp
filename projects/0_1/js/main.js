$('#internal_login_submit').on('click', function(e) {
	console.log($(this).serializeArray());
	$.ajax({
		type: 'POST',
		dataType: 'json',
		url: 'lib/process_login.php',
		data: {
			loginData: JSON.stringify(['asf',0,123])
			// loginData: JSON.stringify($('#internal_login_form').serializeArray())
		},
		success: function(d) {
			console.log(d);
		},
		error: function(e) {
			console.log('login ajax error:');
			console.log(e);
		}
	});
	e.preventDefault();
});
