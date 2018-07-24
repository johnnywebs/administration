<style>
	.form-group { margin-bottom:10px; }
</style>
<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-themecolor">Administration</h3>
	</div>
	<div class="col-md-7 align-self-center">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
			<li class="breadcrumb-item">Administration</li>
			<li class="breadcrumb-item active">Admin Accounts</li>
		</ol>
	</div>
	<!--<div class="">
		<button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
	</div>-->
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-12 col-sm-10">
							<h4 class="card-title">Your Account</h4>
							<h6 class="card-subtitle">Account Information</h6>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<form id="formAcc" method="post" action="<?php echo base_url("user/crud/update/account"); ?>">
								<div class="form-group row">
									<label for="xusername" class="col-sm-12 control-label">Username*</label>
									<div class="col-sm-12">
										<div class="input-group">
											<input type="text" readonly class="form-control" id="username" value="<?php echo $this->session->userdata('username'); ?>">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label for="xpassword" class="col-sm-12 control-label">Password*</label>
									<div class="col-sm-12">
										<div class="input-group">
											<input type="text" class="form-control" name="password" id="password" placeholder="Type here to change password">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label for="xfullname" class="col-sm-12 control-label">Full Name*</label>
									<div class="col-sm-12">
										<div class="input-group">
											<input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo $this->session->userdata('fullname'); ?>">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label for="xusername" class="col-sm-12 control-label">Level</label>
									<div class="col-sm-12">
										<div class="input-group">
											<input type="text" readonly class="form-control" id="level" value="<?php echo $this->session->userdata('userlevel'); ?>">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
											</div>
										</div>
									</div>
								</div>
								<input type="button" onclick="confirmSubmit();" class="btn btn-success" value="UPDATE">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer">
			© 2018 Geo Grout Inc
		</footer>
	</div>
</div>

<script>
	$(document).ready(function() {
		<?php 
			if($this->session->flashdata('global_message') != "") {
				echo $this->session->flashdata('global_message');
			}
		?>
	});
	
	function confirmSubmit() {
		swal({   
            title: "Are you sure you want to update your data?",   
            text: "You will be logged out after update.",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes",   
            cancelButtonText: "No",   
            closeOnConfirm: false,   
            closeOnCancel: false,
			showLoaderOnConfirm: true 
        }, function(isConfirm){   
            if (isConfirm) {     
				$("#formAcc").submit();
            } else {     
                swal("Cancelled", "Record is not deleted!", "error");   
            } 
        });
	}
</script>
