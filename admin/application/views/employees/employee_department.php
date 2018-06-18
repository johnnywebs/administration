<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-themecolor">Employee Records</h3>
	</div>
	<div class="col-md-7 align-self-center">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
			<li class="breadcrumb-item">Employees</li>
			<li class="breadcrumb-item active">Employee Department</li>
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
							<h4 class="card-title">Employee Department</h4>
							<h6 class="card-subtitle">List of Employee Department</h6>
						</div>
						<div class="col-12 col-sm-2">
							<button type='button' data-toggle="modal" data-target="#createEmpDept" class='btn btn-info'><i class='fa fa-edit'></i> Create New</button>
						</div>
					</div>
					<div class="table-responsive m-t-10">
						<table id="tblEmpDept" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Department</th>
									<th>Date Inserted</th>
									<th>Inserted by</th>
									<th>Options</th>
								</tr>
							</thead>
							<tbody id="empDeptData">
										
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
	<div id="createEmpDept" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Create New Employee Department</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo base_url("employees/crud/create/departments"); ?>" class="form-horizontal p-t-20">
						<div class="form-group row">
							<label for="emp_dept" class="col-sm-12 control-label">Employee Department*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="hidden" class="form-control" name="admin_id" value="1">
									<input type="text" class="form-control" name="emp_dept" id="emp_dept">
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
	
	<!-- start create modal -->
	<div id="editEmpDept" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Update Employee Department</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<form id="updateEmpDept" method="post" action="<?php echo base_url("employees/crud/update/departments"); ?>" class="form-horizontal p-t-20">
						<div class="form-group row">
							<label for="emp_dept" class="col-sm-12 control-label">Employee Department*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="hidden" class="form-control" name="row_id" id="row_id">
									<input type="hidden" class="form-control" name="admin_id" value="1">
									<input type="text" class="form-control" name="emp_dept" id="emp_dept">
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
		getEmployeeDepartmentList();
		<?php 
			if($this->session->flashdata('global_message') != "") {
				echo $this->session->flashdata('global_message');
			}
		?>
	});
	
	function getEmployeeDepartmentList() {
		$.post("<?php echo base_url("employees/crud/retrieve/departments"); ?>",{ admin_id : "1" })
		.done(function(data) {
			$("#empDeptData").html(data);
			$('#tblEmpDept').DataTable({
				dom: 'Bfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			});
			$(".preloader").fadeOut();
		});
	}
	
	function fneditDepts(id) {
		$.post("<?php echo base_url("employees/prepupdate/department"); ?>",{ admin_id : "1", id: id })
		.done(function(json) {
			var obj = JSON.parse(json);
			$('#updateEmpDept input#row_id').val(obj[0].id);
			$('#updateEmpDept input#emp_dept').val(obj[0].description);
			$("#editEmpDept").modal('show');
		});
	}
	
	function fndeleteDepts(id) {
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
				$.post("<?php echo base_url("employees/crud/delete/departments"); ?>",{ admin_id : "1", id: id })
				.done(function(data) {
					if(data == 1) { // or true
						$('#tblEmpDept').DataTable().destroy();
						getEmployeeDepartmentList();
						swal("Deleted!", "Record was successfully deleted!", "success"); 
					} else {
						swal("Error!", "Unable to delete record.", "error"); 
					}
				});  
            } else {     
                swal("Cancelled", "Record is not deleted!", "error");   
            } 
        });
	}
</script>
