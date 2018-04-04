<?php
require ("lib/process_contact.php");
require ("inc/header.php");
?>

<div id="customer_form_con" class="card border-primary">
	<div class="card-header bg-primary">
    <h3 class="card-title mb-0">Contact Us</h3> <!-- TODO -->
	</div>
	<div class="card-body mb-0">
		<?php
			if($msg != '') {
				if($err) {
					$alert = '
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<h4 class="alert-heading">Error!</h4>
							<p class="mb-0">' . $msg . '</p>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    					<span aria-hidden="true">&times;</span>
	  					</button>
						</div>
					';
				} else {
					$alert = '
						<div class="alert alert-success alert-dismissible fade show" role="alert">
						<h4 class="alert-heading">Thanks for getting in touch, ' . $firstName . '!</h4>
						<p class="mb-0">' . $msg . '. We will get back with you as soon as possible!</p>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						</div>
					';
				}
				echo $alert;
			}
		?>
		<p class="mt-0">Fill out the fields in the form below and we will get back with you via email as soon as possible. Thank you for using Y-Knot Embroidery.</p> <!-- TODO -->
		<form id="customer_form_form" class="mb-0" action="contact.php" method="POST">
		  <fieldset>
		    <div class="form-group row">
		      <label for="customer_form_name" class="col-lg-2 col-form-label">Name</label>
		      <div class="col-lg-10">
		        <input id="customer_form_name" name="name" type="text" class="form-control" placeholder="Name">
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="customer_form_email" class="col-lg-2  col-form-label">Email</label>
		      <div class="col-lg-10">
		        <input id="customer_form_email" name="email" type="text" class="form-control" placeholder="Email">
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="textArea" class="col-lg-2 col-form-label">Message</label>
		      <div class="col-lg-10">
		        <textarea id="customer_form_message" name="message" class="form-control" rows="3"></textarea>
		      </div>
		    </div>
		    <div class="form-group row mb-0">
		      <div class="col-lg-10 offset-lg-2">
		        <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
		      </div>
		    </div>
		  </fieldset>
		</form>
	</div>
</div>

<?php
require ("inc/footer.php");
?>
