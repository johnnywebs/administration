<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-themecolor">Payroll Records</h3>
	</div>
	<div class="col-md-7 align-self-center">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
			<li class="breadcrumb-item">Payroll Transactions</li>
			<li class="breadcrumb-item active">Payroll Period</li>
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
							<h4 class="card-title">Processed Payroll</h4>
							<h6 class="card-subtitle">List of Employees Processed Payroll</h6>
						</div>
					</div>
					<div class="table-responsive m-t-10">
						<table style='font-size:10px;' id="tblPayperiod" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>ID</th>
									<th>Fullname</th>
									<th>Payroll Period</th>
									<th>Status</th>
									<th>Regular Pay</th>
									<th>Overtime Pay</th>
									<th>Deductions</th>
									<th>Leave Deductions</th>
									<th>Gross Pay</th>
									<th>Net Pay</th>
								</tr>
							</thead>
							<tbody id="payrollList">
										
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
	
		<div id="periodModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Process Payroll - Select a period.</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<div class="form-group row">
							<label for="period" class="col-sm-12 control-label">Period*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<select class="form-control" name="period" id="period">
										<option>-- SELECT --</option>
									</select>
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
						<button type="button" onclick="generatePayroll();" class="btn btn-danger waves-effect waves-light">Process Payroll</button>
					</div>
				</div>
			</div>
		</div>
		<!-- end create modal -->
</div>

<script>
	
	$(document).ready(function() {
		$(".preloader").show();
		getPeriodList();
		$('#periodModal').modal('show');
	});
		
	function getPeriodList() {
		$.post("<?php echo base_url("payroll/crud/retrieve/cbopayperiod"); ?>",{ admin_id : "1" })
		.done(function(data) {
			$("#periodModal #period").html(data);
			$(".preloader").fadeOut();
		});
	}
	
	function generatePayroll() {
		var period = $("#period").val();
		swal({   
			title: "Are you sure you want to process the payroll?",   
			text: "Process is not revertable!",   
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
				$.post("<?php echo base_url("payroll/crud/retrieve/payrollschedprocess"); ?>", { admin_id : "1", payperiod: period })
				.done(function(data) {
					$(".preloader").show();
					$("#payrollList").html(data);
					$('#tblPayperiod').DataTable({
						dom: 'Bfrtip',
						buttons: [
							'copy', 'csv', 'excel', 'pdf', 'print'
						]
					});
					$('#periodModal').modal('hide');
					$(".preloader").fadeOut();
					swal("Processed!", "Payroll was successfully processed!", "success"); 				
				});
				
			} else {     
				swal("Cancelled", "Processing was cancelled!", "error");   
			} 
		});
	}
	
</script>
