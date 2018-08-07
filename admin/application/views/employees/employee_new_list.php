<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-themecolor">Employee Records</h3>
	</div>
	<div class="col-md-7 align-self-center">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
			<li class="breadcrumb-item">Employees</li>
			<li class="breadcrumb-item">Employee List</li>
			<li class="breadcrumb-item active">Create New Employee</li>
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
					<h4 class="card-title">Create new Employee Record</h4>
					<h6 class="card-subtitle"></h6>
					<form action="<?php echo base_url("employees/crud/create/emplist"); ?>" method="post" novalidate>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="wfirstName"> First Name : <span class="danger">*</span> </label>
									<div class="controls">
										<input type="text" class="form-control required" required data-validation-required-message="This field is required" id="wfirstName" name="emp_first"> 
									</div>
									<input type="hidden" name="admin_id" value="1"> 
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="wlastName"> Last Name : <span class="danger">*</span> </label>
									<div class="controls">
										<input type="text" class="form-control required" required data-validation-required-message="This field is required" id="wlastName" name="emp_last"> 
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="wMiddleIni"> Middle Initial : <span class="danger">*</span> </label>
									<div class="controls">
										<input type="text" class="form-control required" required data-validation-required-message="This field is required" id="wmiddleIni" name="emp_mi"> 
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="wNickname"> Nickname : <span class="danger">*</span> </label>
									<div class="controls">
										<input type="text" class="form-control required" required data-validation-required-message="This field is required" id="wNickname" name="emp_nick"> 
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="bdate"> Birthdate : <span class="danger">*</span> </label>
									<div class="controls">
										<input type="text" class="form-control required" required data-validation-required-message="This field is required" id="bdate" name="birthdate">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="email"> Email : <span class="danger">*</span> </label>
									<div class="controls">
										<input type="text" class="form-control required" required data-validation-required-message="This field is required" id="email" name="email">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="mobtel"> Mobile # : <span class="danger">*</span> </label>
									<div class="controls">
										<input type="text" class="form-control required" required data-validation-required-message="This field is required" id="mobtel" name="mobile_no">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="marital"> Civil Status : <span class="danger">*</span> </label>
									<div class="controls">
										<select class="form-control required" id="marital" required data-validation-required-message="This field is required" name="marital_status">
											<option value="Single">Single</option>
											<option value="Married">Married</option>
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
										<input type="text" class="form-control required" required data-validation-required-message="This field is required" id="addUnit" name="add_unit">
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label for="addStreet"> Street : <span class="danger">*</span> </label>
									<div class="controls">
										<input type="text" class="form-control required" required data-validation-required-message="This field is required" id="addStreet" name="add_street">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="addCity"> City : <span class="danger">*</span> </label>
									<div class="controls">
										<input type="text" class="form-control required" required data-validation-required-message="This field is required" id="addCity" name="add_city">
									</div>
								</div>
							</div>
							<div class="col-md-8" id="divctr">
								<div class="form-group">
									<label for="addCountry"> Country : <span class="danger">*</span> </label>
									<div class="controls">
										<select class="form-control required" id="addCountry" required data-validation-required-message="This field is required" name="add_country">
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
											<option value="">No data</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="addZip"> Zip Code : <span class="danger">*</span> </label>
									<div class="controls">
										<input type="text" class="form-control required" required data-validation-required-message="This field is required" id="addZip" name="add_zipcode">
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
										<input placeholder="0" type="number" class="form-control" name="hourly_rate" id="hourly_rate" required data-validation-required-message="This field is required" >
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="hourlyrate">Monthly Rate: <span class="danger">*</span> </label>
									<div class="controls">
										<input placeholder="0" type="number" class="form-control" name="monthly_rate" id="monthly_rate" required data-validation-required-message="This field is required" >
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
		getEmpDesignations();
		$('#bdate, #datepicker').datepicker({
			format: 'yyyy-mm-dd'
		});
		loadCountries();
		
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
	
	function getEmpDesignations() {
        $(".preloader").show();
		$.post("<?php echo base_url("employees/crud/retrieve/listcbo"); ?>", { admin_id : "1" })
		.done(function(data) {
			$("#desig").html(data);
			$(".preloader").fadeOut();
		});
		
	}
	
	function loadCountries() {
		$(".preloader").show();
		$.post("<?php echo base_url("crm/crud/retrieve/countrycbo"); ?>", { admin_id : "1" })
		.done(function(data) {
			$("#addCountry").html(data);
			$(".preloader").fadeOut();
		});
	}
	
	
</script>
