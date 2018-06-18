<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-themecolor">Payroll Records</h3>
	</div>
	<div class="col-md-7 align-self-center">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
			<li class="breadcrumb-item">Payroll Transactions</li>
			<li class="breadcrumb-item active">Leave Request</li>
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
							<h4 class="card-title">Leave Request</h4>
							<h6 class="card-subtitle">List of Leave Request</h6>
						</div>
						<div class="col-12 col-sm-2">
							<button type='button' data-toggle="modal" data-target="#createLeaveReq" class='btn btn-info'><i class='fa fa-edit'></i> Create New</button>
						</div>
					</div>
					<div class="table-responsive m-t-10">
						<table id="tblLeaveReq" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Employee ID</th>
									<th>Date From</th>
									<th>Date To</th>
									<th>Leave Type</th>
									<th>Reason</th>
									<th>Date Inserted</th>
									<th>Options</th>
								</tr>
							</thead>
							<tbody id="empLeaveReqData">
										
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
	<div id="createLeaveReq" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Create New Leave Request</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo base_url("payroll/crud/create/leaverequest"); ?>" class="form-horizontal p-t-20">
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
							<label for="date_from" class="col-sm-12 control-label">Date From*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="date" class="form-control" name="date_from" id="date_from">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="date_to" class="col-sm-12 control-label">Date To*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="date" class="form-control" name="date_to" id="date_to">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="leave_type" class="col-sm-12 control-label">Leave Type*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<select class="form-control" name="leave_type" id="leave_type">
									
									</select>
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="reason" class="col-sm-12 control-label">Reason*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="reason" id="reason">
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
	<div id="editLeaveReq" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Update Leave Request</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<form id="updateEmpType" method="post" action="<?php echo base_url("payroll/crud/update/leaverequest"); ?>" class="form-horizontal p-t-20">
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
							<label for="date_from" class="col-sm-12 control-label">Date From*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="date" class="form-control" name="date_from" id="date_from">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="date_to" class="col-sm-12 control-label">Date To*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="date" class="form-control" name="date_to" id="date_to">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="leave_type" class="col-sm-12 control-label">Leave Type*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<select class="form-control" name="leave_type" id="leave_type">
									
									</select>
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="reason" class="col-sm-12 control-label">Reason*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="reason" id="reason">
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
		getLeaveRequestList();
		<?php 
			if($this->session->flashdata('global_message') != "") {
				echo $this->session->flashdata('global_message');
			}
		?>
	});
	
	function getLeaveRequestList() {
		$.post("<?php echo base_url("payroll/crud/retrieve/leaverequest"); ?>",{ admin_id : "1" })
		.done(function(data) {
			$("#empLeaveReqData").html(data);
			$('#tblLeaveReq').DataTable({
				dom: 'Bfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			});
		});
		getLeaveTypes();
	}
	
	function getLeaveTypes() {
		$.post("<?php echo base_url("payroll/crud/retrieve/cboleavetype"); ?>",{ admin_id : "1" })
		.done(function(data) {
			$("#createLeaveReq #leave_type").html(data);
			$("#editLeaveReq #leave_type").html(data);
			$(".preloader").fadeOut();
		});
	}
	
	function fneditLeaveReq(id) {
		$.post("<?php echo base_url("payroll/prepupdate/leaverequest"); ?>",{ admin_id : "1", id: id })
		.done(function(json) {
			var obj = JSON.parse(json);
			$('#editLeaveReq input#rowid').val(obj[0].id);
			$('#editLeaveReq input#employee_id').val(obj[0].employee_id);
			$('#editLeaveReq input#date_from').val(obj[0].date_from);
			$('#editLeaveReq input#date_to').val(obj[0].date_to);
			$('#editLeaveReq select#leave_type').val(obj[0].leave_type);
			$('#editLeaveReq input#reason').val(obj[0].reason);
			$("#editLeaveReq").modal('show');
		});
	}
	
	function fndeleteLeaveReq(id) {
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
				$.post("<?php echo base_url("payroll/crud/delete/leaverequest"); ?>",{ admin_id : "1", id: id })
				.done(function(data) {
					if(data == 1) { // or true
						$('#tblLeaveReq').DataTable().destroy();
						getLeaveRequestList();
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
