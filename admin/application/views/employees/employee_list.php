<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-themecolor">Employee Records</h3>
	</div>
	<div class="col-md-7 align-self-center">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
			<li class="breadcrumb-item">Employees</li>
			<li class="breadcrumb-item active">Employee List</li>
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
							<h4 class="card-title">Employee List</h4>
							<h6 class="card-subtitle">List of Employees</h6>
						</div>
						<div class="col-12 col-sm-2">
							<?php if($this->session->userdata('userlevel') != "VIEWER"): ?>
							<a href="<?php echo base_url("employees/empnew"); ?>" class='btn btn-info'><i class='fa fa-edit'></i> Create New</a>
							<?php endif; ?>
						</div>
					</div>
					<div class="table-responsive m-t-10">
						<table id="tblEmpList" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Full Name</th>
									<th>Designation</th>
									<th>Email</th>
									<th>Emp Status</th>
									<th>Date Inserted</th>
									<th>Options</th>
								</tr>
							</thead>
							<tbody id="empListData">
										
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
	<div id="createEmpList" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Create New Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					 
                </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-danger waves-effect waves-light">Create</button>
				</div>	
			</div>
		</div>
	</div>
	<!-- end create modal -->
	
	<!-- start create modal -->
	<div id="editEmpType" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Update Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-danger waves-effect waves-light">Update</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end create modal -->
</div>

<script>
	$(document).ready(function() {
		getEmployeeList();
		<?php 
			if($this->session->flashdata('global_message') != "") {
				echo $this->session->flashdata('global_message');
			}
		?>
	});
	
	function getEmployeeList() {
		$.post("<?php echo base_url("employees/crud/retrieve/emplist"); ?>",{ admin_id : "1" })
		.done(function(data) {
			$("#empListData").html(data);
			$('#tblEmpList').DataTable({
				dom: 'Bfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			});
			$(".preloader").fadeOut();
		});
	}
	
	function fndeleteEmpList(id) {
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
				$.post("<?php echo base_url("employees/crud/delete/emplist"); ?>",{ admin_id : "1", id: id })
				.done(function(data) {
					if(data == 1) { // or true
						$('#tblEmpList').DataTable().destroy();
						getEmployeeList();
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
