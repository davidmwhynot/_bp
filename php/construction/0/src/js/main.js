const emailSuccessAlert =
`
<div class="alert alert-success" role="alert">
	Thanks! We will let you know when we the site is ready!
</div>
`;

const emailFailAlert =
`
<div class="alert alert-danger" role="alert">
  Please enter a valid email address.
</div>
`;

const emailEmptyAlert =
`
<div class="alert alert-warning" role="alert">
  Please enter your email address.
</div>
`;

$(document).on('click', '#submit', function() {
	let emailVal = $('#email').val();
	if(emailVal == '') {
		$('.alert').remove();
		$('#alerts').append(emailEmptyAlert);
	} else if(!(validateEmail(emailVal))) {
		$('.alert').remove();
		$('#alerts').append(emailFailAlert);
	} else {
		$.ajax({
			type: 'POST',
			url: '../src/lib/process_email.php',
			dataType: 'json',
			data: {
				email: JSON.stringify(emailVal)
			},
			success: function(d) {
				$('.alert').remove();
				$('#alerts').append(emailSuccessAlert);
				console.log(d);
			},
			error: function(e) {
				console.log('error with ajax request:');
				console.log('data:');
				console.log(emailVal);
				console.log('error:');
				console.log(e);
			}
		});
	}
});

function validateEmail(email) {
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	if(!emailReg.test(email)) {
		return false;
	} else {
		return true;
	}
}
