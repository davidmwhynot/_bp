<?php
require ("inc/header.php");
?>
<div class="container">
				<div id="internal_form_con" class="card">
					<div class="card-header bg-primary">Internal Form</div>
					<div class="card-body">
						<form id="internal_form_form">
						  <fieldset>
						    <div class="form-group row">
						      <label for="internal_form_date" class="col-lg-2 offset-lg-1 col-form-label">Date</label>
						      <div class="col-lg-3">
						        <input id="internal_form_date" type="date" class="form-control">
						      </div>
									<label for="internal_form_eventDate" class="col-lg-2 offset-lg-1 col-form-label">Event Date</label>
						      <div class="col-lg-3">
						        <input id="internal_form_eventDate" type="date" class="form-control">
						      </div>
						    </div>
						    <div class="form-group row">
						      <label for="internal_form_webstore" class="col-lg-2 offset-lg-1 col-form-label">Webstore Needed</label>
						      <div class="col-lg-3">
						        <input id="internal_form_webstore" type="text" class="form-control" placeholder="Webstore Needed">
						      </div>
									<label for="internal_form_quoteDueDate" class="col-lg-2 offset-lg-1 col-form-label">Quote Due Date</label>
						      <div class="col-lg-3">
						        <input id="internal_form_quoteDueDate" type="date" class="form-control">
						      </div>
						    </div>
						    <div class="form-group row">
						      <label for="internal_form_companyName" class="col-lg-2 offset-lg-1 col-form-label">Company Name</label>
						      <div class="col-lg-3">
						        <input id="internal_form_companyName" type="text" class="form-control" placeholder="Company Name">
						      </div>
						      <label for="internal_form_invoiceNum" class="col-lg-2 offset-lg-1 col-form-label">Invoice #</label>
						      <div class="col-lg-3">
						        <input id="internal_form_invoiceNum" type="text" class="form-control" placeholder="Invoice #">
						      </div>
						    </div>
						    <div class="form-group row">
						      <label for="internal_form_customerName" class="col-lg-2 offset-lg-1 col-form-label">Customer Name</label>
						      <div class="col-lg-3">
						        <input id="internal_form_customerName" type="text" class="form-control" placeholder="Customer Name">
						      </div>
						      <label for="internal_form_workOrderNum" class="col-lg-2 offset-lg-1 col-form-label">Work Order #</label>
						      <div class="col-lg-3">
						        <input id="internal_form_workOrderNum" type="text" class="form-control" placeholder="Work Order #">
						      </div>
						    </div>
								<div class="form-group row">
									<label for="internal_form_customerPhone" class="col-lg-2 offset-lg-1 col-form-label">Customer Phone</label>
						      <div class="col-lg-3">
						        <input id="internal_form_customerPhone" type="text" class="form-control" placeholder="Customer Phone">
						      </div>
									<label for="internal_form_customerWebsite" class="col-lg-2 offset-lg-1 col-form-label">Customer Website</label>
						      <div class="col-lg-3">
						        <input id="internal_form_customerWebsite" type="text" class="form-control" placeholder="Customer Website">
						      </div>
						    </div>
								<div class="form-group row">
									<label for="internal_form_customerEmail" class="col-lg-2 offset-lg-1 col-form-label">Customer Email</label>
									<div class="col-lg-3">
										<input id="internal_form_customerEmail" type="text" class="form-control" placeholder="Customer Email">
									</div>
									<label for="internal_form_customerAddress" class="col-lg-2 offset-lg-1 col-form-label">Customer Address</label>
						      <div class="col-lg-3">
						        <input id="internal_form_customerAddress" type="text" class="form-control" placeholder="Customer Address">
						      </div>
						    </div>
						    <div class="form-group row">
						      <label for="internal_form_dropboxPath" class="col-lg-2 offset-lg-1 col-form-label">Dropbox Path</label>
						      <div class="col-lg-3">
						        <input id="internal_form_dropboxPath" type="text" class="form-control" placeholder="Dropbox Path">
						      </div>
						      <label for="internal_form_logoSetupDate" class="col-lg-2 offset-lg-1 col-form-label">Logo Date Setup</label>
						      <div class="col-lg-3">
						        <input id="internal_form_logoSetupDate" type="date" class="form-control">
						      </div>
						    </div>
								<div class="form-group row">
									<label for="internal_form_embroidery" class="col-lg-2 offset-lg-1">Embroidery</label>
						      <fieldset class="col-lg-3">
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input id="internal_form_embroidery_yes" type="radio" class="form-check-input" name="internal_form_embroidery" value="option1" checked="">
												Yes
											</label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input id="internal_form_embroidery_no" type="radio" class="form-check-input" name="internal_form_embroidery" value="option2">
												No
											</label>
										</div>
						      </fieldset>

									<label for="internal_form_sentToBab" class="col-lg-2 offset-lg-1 col-form-label">Sent to Bab.</label>
									<div class="col-lg-3">
										<input id="internal_form_sentToBab" type="text" class="form-control" placeholder="Sent to Bab.">
									</div>
						    </div>
								<div class="form-group row">
									<label for="internal_form_screenprint" class="col-lg-2 offset-lg-1 col-form-label">Screenprint</label>
						      <fieldset class="col-lg-3">
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input id="internal_form_screenprint_yes" type="radio" class="form-check-input" name="internal_form_screenprint" value="option1" checked="">
												Yes
											</label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input id="internal_form_screenprint_no" type="radio" class="form-check-input" name="internal_form_screenprint" value="option2">
												No
											</label>
										</div>
						      </fieldset>

									<label for="internal_form_dateLogoReceived" class="col-lg-2 offset-lg-1 col-form-label">Date Logo Received</label>
									<div class="col-lg-3">
										<input id="internal_form_dateLogoReceived" type="date" class="form-control">
									</div>
						    </div>
								<div class="form-group row">
									<label for="internal_form_hpSub" class="col-lg-2 offset-lg-1">HP/Sub</label>
						      <fieldset class="col-lg-3">
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input id="internal_form_hpSub_yes" type="radio" class="form-check-input" name="internal_form_hpSub" value="option1" checked="">
												Yes
											</label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input id="internal_form_hpSub_no" type="radio" class="form-check-input" name="internal_form_hpSub" value="option2">
												No
											</label>
										</div>
						      </fieldset>

									<label for="internal_form_logoFormat" class="col-lg-2 offset-lg-1 col-form-label">Format of Logo</label>
									<div class="col-lg-3">
										<select id="internal_form_logoFormat" class="form-control">
											<option value="dst">.dst</option>
											<option value="emb">.emb</option>
											<option value="pdf">.pdf</option>
											<option value="eps">.eps</option>
											<option value="png">.png</option>
											<option value="emb">.emb</option>
											<option value="cdr">.cdr</option>
											<option value="ai">.ai</option>
											<option value="cst">.cst</option>
										</select>
									</div>
						    </div>

								<div class="form-group row">
									<label for="internal_form_threadColor" class="col-lg-2 offset-lg-1 col-form-label">Thread Color</label>
						      <div class="col-lg-3">
						        <input id="internal_form_threadColor" type="text" class="form-control" placeholder="Thread Color">
						      </div>
						      <label for="internal_form_dropboxCustomerInfo" class="col-lg-2 offset-lg-1 col-form-label">Dropbox Customer Info</label>
						      <div class="col-lg-3">
						        <input id="internal_form_dropboxCustomerInfo" type="text" class="form-control" placeholder="Dropbox Customer Info">
						      </div>
						    </div>

								<div class="form-group row">
									<label for="internal_form_inkColor" class="col-lg-2 offset-lg-1 col-form-label">Ink Color</label>
						      <div class="col-lg-3">
						        <input id="internal_form_inkColor" type="text" class="form-control" placeholder="Ink Color">
						      </div>
						      <label for="internal_form_notes" class="col-lg-2 offset-lg-1 col-form-label">Notes</label>
						      <div class="col-lg-3">
						        <textarea id="internal_form_notes" type="text" class="form-control" placeholder="Notes"></textarea>
						      </div>
						    </div>



								<!-- <div class="form-group row">
									<label for="internal_form_X" class="col-lg-2 offset-lg-1">X</label>
						      <fieldset class="col-lg-3">
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input id="internal_form_X_yes" type="radio" class="form-check-input" name="internal_form_X" value="option1" checked="">
												Yes
											</label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input id="internal_form_X_no" type="radio" class="form-check-input" name="internal_form_X" value="option2">
												No
											</label>
										</div>
						      </fieldset>

									<label for="internal_form_X" class="col-lg-2 offset-lg-1 col-form-label">X</label>
									<div class="col-lg-3">
										<select id="internal_form_X" class="form-control">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
									</div>
						    </div>


						    <div class="form-group row">
									<label for="internal_form_X" class="col-lg-2 offset-lg-1 col-form-label">X</label>
						      <div class="col-lg-3">
						        <input id="internal_form_X" type="text" class="form-control" placeholder="X">
						      </div>
						      <label for="internal_form_X" class="col-lg-2 offset-lg-1 col-form-label">X</label>
						      <div class="col-lg-3">
						        <input id="internal_form_X" type="text" class="form-control" placeholder="X">
						      </div>
						    </div> -->


						    <div class="form-group row">
						      <div class="col-lg-3 offset-lg-3">
										<button id="internal_form_X" class="btn btn-danger">Reset</button>
						        <button id="internal_form_X" class="btn btn-success">Submit</button>
						      </div>
						    </div>

						  </fieldset>
						</form>
					</div>
				</div>
			</div>

<?php
require ("inc/footer.php");
?>
