<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-themecolor">Employee Records</h3>
	</div>
	<div class="col-md-7 align-self-center">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
			<li class="breadcrumb-item">Employees</li>
			<li class="breadcrumb-item active">Employee Designations</li>
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
							<h4 class="card-title">Employee Designations</h4>
							<h6 class="card-subtitle">List of Employee Designations</h6>
						</div>
						<div class="col-12 col-sm-2">
							<?php if($this->session->userdata('userlevel') != "VIEWER"): ?>
							<button type='button' data-toggle="modal" data-target="#createEmpDesig" class='btn btn-info'><i class='fa fa-edit'></i> Create New</button>
							<?php endif; ?>
						</div>
					</div>
					<div class="table-responsive m-t-10">
						<table id="tblEmpDesig" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Designations</th>
									<th>Date Inserted</th>
									<th>Inserted by</th>
									<th>Options</th>
								</tr>
							</thead>
							<tbody id="empDesigData">
										
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer">
			© 2018 Geo Grout Inc
		</footer>
	</div>
	<!-- start create modal -->
	<div id="createEmpDesig" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Create New Employee Designations</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo base_url("employees/crud/create/designations"); ?>" class="form-horizontal p-t-20">
						<div class="form-group row">
							<label for="emp_desig" class="col-sm-12 control-label">Employee Designations*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="hidden" class="form-control" name="admin_id" value="1">
									<input type="text" class="form-control" name="emp_desig" id="emp_desig">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
				</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-danger waves-effect waves-light">Create</button>
					</div>
					</form>
			</div>
		</div>
	</div>
	<!-- end create modal -->
	<style>
		#previewEmpDesig .values { border-bottom:#6BB9F0 solid 2px;padding:5px }
	</style>
	<!-- start create modal -->
	<div id="previewEmpDesig" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Employee Designations</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<div class="form-group row">
						<label for="emp_desig" class="col-sm-12 control-label">Employee Designations</label>
						<div class="col-sm-12">
							<div class="values" id="emp_desig"></div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
					<button onclick="$('#previewEmpDesig').modal('hide');$('#editEmpDesig').modal('show');" class="btn btn-danger waves-effect waves-light">Edit</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end create modal -->
	
	<!-- start create modal -->
	<div id="editEmpDesig" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Update Employee Designations</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<form id="updateEmpDesig" method="post" action="<?php echo base_url("employees/crud/update/designations"); ?>" class="form-horizontal p-t-20">
						<div class="form-group row">
							<label for="emp_desig" class="col-sm-12 control-label">Employee Designations*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="hidden" class="form-control" name="row_id" id="row_id">
									<input type="hidden" class="form-control" name="admin_id" id="admin_id">
									<input type="text" class="form-control" name="emp_desig" id="emp_desig">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
				</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-danger waves-effect waves-light">Update</button>
					</div>
					</form>
			</div>
		</div>
	</div>
	<!-- end create modal -->
</div>

<script>
	$(document).ready(function() {
		getEmployeeDesignationList();
		<?php 
			if($this->session->flashdata('global_message') != "") {
				echo $this->session->flashdata('global_message');
			}
		?>
	});
	
	function getEmployeeDesignationList() {
		$.post("<?php echo base_url("employees/crud/retrieve/designations"); ?>",{ admin_id : "1" })
		.done(function(data) {
			$("#empDesigData").html(data);
			$('#tblEmpDesig').DataTable({
				dom: 'Bfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			});
			$(".preloader").fadeOut();
		});
	}
	
	function fneditDesigs(id) {
		$.post("<?php echo base_url("employees/prepupdate/designations"); ?>",{ admin_id : "1", id: id })
		.done(function(json) {
			if(json == "Unable to proceed insufficient account level!") {
				swal("Error!", json, "error"); 
				return false;
			}
			var obj = JSON.parse(json);
			$('#updateEmpDesig input#row_id').val(obj[0].id);
			$('#updateEmpDesig input#emp_desig').val(obj[0].description);
			$('#previewEmpDesig div#emp_desig').text(obj[0].description);
			$("#previewEmpDesig").modal('show');
		});
	}
	
	function fndeleteDesigs(id) {
		swal({   
            title: "Are you sure you want to delete this record?",   
            text: "You will not be able to recover this record!",   
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
				$.post("<?php echo base_url("employees/crud/delete/designations"); ?>",{ admin_id : "1", id: id })
				.done(function(data) {
					if(data == 1) { // or true
						$('#tblEmpDesig').DataTable().destroy();
						getEmployeeDesignationList();
						swal("Deleted!", "Record was successfully deleted!", "success"); 
					} else {
						swal("Error!", data, "error"); 
					}
				});  
            } else {     
                swal("Cancelled", "Record is not deleted!", "error");   
            } 
        });
	}
</script>
