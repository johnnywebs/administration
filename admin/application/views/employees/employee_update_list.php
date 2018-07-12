<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-themecolor">Employee Records</h3>
	</div>
	<div class="col-md-7 align-self-center">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
			<li class="breadcrumb-item">Employees</li>
			<li class="breadcrumb-item">Employee List</li>
			<li class="breadcrumb-item active">Update Employee</li>
		</ol>
	</div>
	<!--<div class="">
		<button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
	</div>-->
</div>
<div class="container-fluid">
	<div class="row" id="validation">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Update Employee Record</h4>
					<h6 class="card-subtitle"></h6>
					<form action="<?php echo base_url("employees/crud/update/emplist"); ?>" method="post" novalidate>
						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label for="wfirstName"> First Name : <span class="danger">*</span> </label>
									<div class="controls">
										<input type="text" class="form-control required" id="wfirstName" required data-validation-required-message="This field is required"  name="emp_first" value="<?php echo $emp_first; ?>"> 
									</div>
									<input type="hidden" name="admin_id" value="1"> 
									<input type="hidden" name="rowid" value="<?php echo $rowid; ?>"> 
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label for="wlastName"> Last Name : <span class="danger">*</span> </label>
									<div class="controls">
										<input type="text" class="form-control required" id="wlastName" required data-validation-required-message="This field is required"  name="emp_last" value="<?php echo $emp_last; ?>"> 
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="wMiddleIni"> Middle Initial : <span class="danger">*</span> </label>
									<div class="controls">
										<input type="text" class="form-control required" id="wmiddleIni" required data-validation-required-message="This field is required"  name="emp_mi" value="<?php echo $emp_mi; ?>"> 
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="bdate"> Birthdate : <span class="danger">*</span> </label>
									<div class="controls">
										<input type="text" class="form-control required" id="bdate" required data-validation-required-message="This field is required"  name="birthdate" value="<?php echo $birthdate; ?>">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="email"> Email : <span class="danger">*</span> </label>
									<div class="controls">
										<input type="text" class="form-control required" id="email" required data-validation-required-message="This field is required"  name="email" value="<?php echo $email; ?>">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="mobtel"> Mobile # : <span class="danger">*</span> </label>
									<div class="controls">
										<input type="text" class="form-control required" id="mobtel" required data-validation-required-message="This field is required"  name="mobile_no" value="<?php echo $mobile_no; ?>">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="marital"> Civil Status : <span class="danger">*</span> </label>
									<div class="controls">
										<select class="form-control required" id="marital" name="marital_status" required data-validation-required-message="This field is required" >
											<?php if($marital_status <> "") { $xxx = "selected"; } else { $xxx = ""; } ?>
											<option value="Single" <?php echo $xxx; ?>>Single</option>
											<option value="Married" <?php echo $xxx; ?>>Married</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="addUnit"> Unit : <span class="danger">*</span> </label>
									<div class="controls">
										<input type="text" class="form-control required" id="addUnit" name="add_unit" value="<?php echo $add_unit; ?>" required data-validation-required-message="This field is required" >
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label for="addStreet"> Street : <span class="danger">*</span> </label>
									<div class="controls">
										<input type="text" class="form-control required" id="addStreet" name="add_street" value="<?php echo $add_street; ?>" required data-validation-required-message="This field is required" >
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="addCity"> City : <span class="danger">*</span> </label>
									<div class="controls">
										<input type="text" class="form-control required" id="addCity" name="add_city" value="<?php echo $add_city; ?>" required data-validation-required-message="This field is required" >
									</div>
								</div>
							</div>
							<div class="col-md-8" id="divctr">
								<div class="form-group">
									<label for="addCountry"> Country : <span class="danger">*</span> </label>
									<div class="controls">
										<select class="form-control required" id="addCountry" name="add_country" required data-validation-required-message="This field is required" >
											<option value="">No data</option>
										</select>
									</div>
								</div>
							</div>
							<div style="display:none" id="statebox" class="col-md-4">
								<div class="form-group">
									<label for="addState"> State : </label>
									<div class="controls">
										<select class="form-control" id="addState" name="add_state">
												
											<?php 
												if($add_state <> "") {
													echo "<option value='$add_state'>$add_state</option>";
												} else {
													echo "<option value=''>No data</option>";
												}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="addZip"> Zip Code : <span class="danger">*</span> </label>
									<div class="controls">
										<input type="text" class="form-control required" id="addZip" name="add_zipcode" value="<?php echo $emp_last; ?>" required data-validation-required-message="This field is required" >
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="empStat"> Employment Status : <span class="danger">*</span> </label>
									<div class="controls">
										<select class="form-control required" id="empStat" name="emp_status" required data-validation-required-message="This field is required" >
											<?php if($emp_status <> "") { $xxx = "selected"; } else { $xxx = ""; } ?>
											<option value="Regular" <?php echo $xxx; ?>>Regular</option>
											<option value="Contractual" <?php echo $xxx; ?>>Contractual</option>
											<option value="Project Based" <?php echo $xxx; ?>>Project Based</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="desig"> Designation : <span class="danger">*</span> </label>
									<div class="controls">
										<select class="form-control required" id="desig" name="designation" required data-validation-required-message="This field is required" >
											<option value="">-- SELECT --</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="hourlyrate">Hourly Rate: <span class="danger">*</span> </label>
									<div class="controls">
										<input placeholder="0" type="number" class="form-control" name="hourly_rate" id="hourly_rate" required data-validation-required-message="This field is required" value="<?php echo $hourly_rate; ?>" >
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="hourlyrate">Monthly Rate: <span class="danger">*</span> </label>
									<div class="controls">
										<input placeholder="0" type="number" class="form-control" name="monthly_rate" id="monthly_rate" required data-validation-required-message="This field is required"  value="<?php echo $monthly_rate; ?>" >
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<button class="btn btn-info col-3" type="submit">SAVE</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
		© 2018 Geo Grout Inc
	</footer>
</div>
<script src="<?php echo base_url("public/js/validation.js"); ?>"></script>
<script>
	$(document).ready(function() {
		$("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
		getEmpDesignations("<?php echo $designation; ?>");
		$('#bdate, #datepicker').datepicker({
			format: 'yyyy-mm-dd'
		});
		loadCountries("<?php echo $add_country; ?>");
		
		<?php if($add_country <> "" && ($add_country == "Canada" || $add_country == "United States")): ?>
			$("#divctr").removeClass('col-md-8');
			$("#divctr").addClass('col-md-4');
			$("#statebox").show();
		<?php endif; ?>
		
		$("#addCountry").change(function() {
			var ctr = $(this).val();
			if(ctr == "United States" || ctr == "Canada") {
				$(".preloader").show();
				$("#divctr").removeClass('col-md-8');
				$("#divctr").addClass('col-md-4');
				$("#statebox").show();
				$.post("<?php echo base_url("crm/crud/retrieve/statescbo"); ?>", { admin_id: "1", country: ctr })
				.done(function(data) {
					$("#addState").html(data);
					$(".preloader").fadeOut();
				});
			} else {
				$("#divctr").removeClass('col-md-4');
				$("#divctr").addClass('col-md-8');
				$("#statebox").hide();
			}
		});
	});
	
	function getEmpDesignations(desig) {
		$(".preloader").show();
		$.post("<?php echo base_url("employees/crud/retrieve/listcbo"); ?>", { admin_id : "1", def_desig: desig })
		.done(function(data) {
			$("#desig").html(data);
			$(".preloader").fadeOut();
		});
		
	}
	
	function loadCountries(ctr) {
		$(".preloader").show();
		$.post("<?php echo base_url("crm/crud/retrieve/countrycbo"); ?>", { admin_id : "1", def_ctr: ctr })
		.done(function(data) {
			$("#addCountry").html(data);
			$(".preloader").fadeOut();
		});
	}
	
	
</script>
