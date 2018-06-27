<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-themecolor">Payroll Records</h3>
	</div>
	<div class="col-md-7 align-self-center">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
			<li class="breadcrumb-item">Payroll Transactions</li>
			<li class="breadcrumb-item active">Deduction Master</li>
		</ol>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-12 col-sm-10">
							<h4 class="card-title">Deduction Master</h4>
							<h6 class="card-subtitle">List of Deduction Master</h6>
						</div>
						<div class="col-12 col-sm-2">
							<button type='button' data-toggle="modal" data-target="#createDeductionMaster" class='btn btn-info'><i class='fa fa-edit'></i> Create New</button>
						</div>
					</div>
					<div class="table-responsive m-t-10">
						<table id="tblDeductionMaster" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Employee ID</th>
									<th>Employee Name</th>
									<th>Deduction Type</th>
									<th>Amount</th>
									<th>Period</th>
									<th>Created By</th>
									<th>Created Date</th>
									<th>Options</th>
								</tr>
							</thead>
							<tbody id="DeductionMasterData">
										
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
	<div id="createDeductionMaster" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Create New Deduction Master</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo base_url("payroll/crud/create/deductionmaster"); ?>" class="form-horizontal p-t-20">
						<div class="form-group row">
							<label for="employee_id" class="col-sm-12 control-label">Employee ID*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="hidden" class="form-control" name="admin_id" value="1">
									<input type="text" class="form-control" name="employee_id" id="employee_id">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="employee_name" class="col-sm-12 control-label">Employee Name*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="employee_name" id="employee_name">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="deduction_type" class="col-sm-12 control-label">Deduction Type*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<select class="form-control" name="deduction_type" id="deduction_type">
									
									</select>
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="amt" class="col-sm-12 control-label">Amount*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="number" class="form-control" name="amt" id="amt">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="period" class="col-sm-12 control-label">Period*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="period" id="period">
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
	<div id="editDeductionMaster" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Update Deduction Master</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<form id="updateDeductionMaster" method="post" action="<?php echo base_url("payroll/crud/update/deductionmaster"); ?>" class="form-horizontal p-t-20">
						<div class="form-group row">
							<label for="employee_id" class="col-sm-12 control-label">Employee ID*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="hidden" class="form-control" name="rowid" id="rowid">
									<input type="hidden" class="form-control" name="admin_id" value="1">
									<input type="text" class="form-control" name="employee_id" id="employee_id">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="employee_name" class="col-sm-12 control-label">Employee Name*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="employee_name" id="employee_name">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="deduction_type" class="col-sm-12 control-label">Deduction Type*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<select class="form-control" name="deduction_type" id="deduction_type">
									
									</select>
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="amt" class="col-sm-12 control-label">Amount*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="number" class="form-control" name="amt" id="amt">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="period" class="col-sm-12 control-label">Period*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="period" id="period">
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
		getDeductionMasterList();
		<?php 
			if($this->session->flashdata('global_message') != "") {
				echo $this->session->flashdata('global_message');
			}
		?>
	});
	
	function getDeductionMasterList() {
		$.post("<?php echo base_url("payroll/crud/retrieve/deductionmaster"); ?>",{ admin_id : "1" })
		.done(function(data) {
			$("#DeductionMasterData").html(data);
			$('#tblDeductionMaster').DataTable({
				dom: 'Bfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			});
		});
		getDeductionTypes();
	}
	
	function getDeductionTypes() {
		$.post("<?php echo base_url("payroll/crud/retrieve/cbodeductiontype"); ?>",{ admin_id : "1" })
		.done(function(data) {
			$("#createDeductionMaster #deduction_type").html(data);
			$("#editDeductionMaster #deduction_type").html(data);
			$(".preloader").fadeOut();
		});
	}
	
	function fneditDeductionMaster(id) {
		$.post("<?php echo base_url("payroll/prepupdate/deductionmaster"); ?>",{ admin_id : "1", id: id })
		.done(function(json) {
			var obj = JSON.parse(json);
			$('#editDeductionMaster input#rowid').val(obj[0].id);
			$('#editDeductionMaster input#employee_id').val(obj[0].employee_id);
			$('#editDeductionMaster input#employee_name').val(obj[0].employee_name);
			$('#editDeductionMaster select#deduction_type').val(obj[0].deduction_type);
			$('#editDeductionMaster input#amt').val(obj[0].amt);
			$('#editDeductionMaster input#period').val(obj[0].period);
			$('#editDeductionMaster input#admin_id').val(obj[0].created_by);
			$("#editDeductionMaster").modal('show');
		});
	}
	
	function fndeleteDeductionMaster(id) {
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
				$.post("<?php echo base_url("payroll/crud/delete/deductionmaster"); ?>",{ admin_id : "1", id: id })
				.done(function(data) {
					if(data == 1) { // or true
						$('#tblDeductionMaster').DataTable().destroy();
						getDeductionMasterList();
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
