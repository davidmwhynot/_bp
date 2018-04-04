<?php
require ("inc/header.php");
?>

<div id="internal_login_con" class="card border-primary">
	<div class="card-header bg-primary">
    <h3 class="card-title">Admin Login</h3> <!-- TODO -->
	</div>
	<div class="card-body">
		<form id="internal_login_form" class="form-horizontal">
		  <fieldset>
		    <div class="form-group row">
		      <label for="login_form_name" class="col-lg-2 col-form-label">Username</label>
		      <div class="col-lg-10">
		        <input id="login_form_name" name="login_form_name" type="text" class="form-control" placeholder="Name">
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="login_form_password" class="col-lg-2 col-form-label">Password</label>
		      <div class="col-lg-10">
		        <input id="login_form_password" name="login_form_password" type="password" class="form-control" placeholder="">
		      </div>
		    </div>
		    <div class="form-group row">
		      <div class="col-lg-10 col-lg-offset-2">
						<button id="internal_login_submit" href="internal_form.php" class="btn btn-primary">Login</button> <!-- TODO -->
		      </div>
		    </div>
		  </fieldset>
		</form>
	</div>
</div>

<?php
require ("inc/footer.php");
?>
