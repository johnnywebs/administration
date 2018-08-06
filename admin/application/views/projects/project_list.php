<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-themecolor">Project Records</h3>
	</div>
	<div class="col-md-7 align-self-center">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
			<li class="breadcrumb-item">Projects</li>
			<li class="breadcrumb-item active">Project List</li>
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
							<h4 class="card-title">Project List</h4>
							<h6 class="card-subtitle">List of Projects</h6>
						</div>
						<div class="col-12 col-sm-2">
							<?php if($this->session->userdata('userlevel') != "VIEWER"): ?>
							<button type='button' data-toggle="modal" data-target="#createProjList" class='btn btn-info'><i class='fa fa-edit'></i> Create New</button>
							<?php endif; ?>
						</div>
					</div>
					<div class="table-responsive m-t-10">
						<table id="tblProjList" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Name</th>
									<th>Client Name</th>
									<th>Location</th>
									<th>Type</th>
									<th>Date Inserted</th>
									<th>Options</th>
								</tr>
							</thead>
							<tbody id="projListData">
										
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
	<div id="createProjList" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Create New Project</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo base_url("projects/crud/create/projlist"); ?>" class="form-horizontal p-t-20">
						<div class="form-group row">
							<label for="project_name" class="col-sm-12 control-label">Project Name*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="hidden" class="form-control" name="admin_id" value="1">
									<input type="text" class="form-control" name="project_name" id="project_name">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-ruler-pencil"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="client_name" class="col-sm-12 control-label">Client Name*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="client_name" id="client_name">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="proj_location" class="col-sm-12 control-label">Location*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="proj_location" id="proj_location">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-location-pin"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="project_type" class="col-sm-12 control-label">Project Type*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<select class="form-control" name="project_type" id="project_type">
										<option value="">-- No data --</option>
									</select>
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-list"></i></span>
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
		#previewProjectType .values { border-bottom:#6BB9F0 solid 2px;padding:5px }
	</style>
	<!-- start create modal -->
	<div id="previewProjectType" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Project</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<div class="form-group row">
						<label for="project_name" class="col-sm-12 control-label">Project Name</label>
						<div class="col-sm-12">
							<div  class="values" id="project_name"></div>
						</div>
					</div>
					<div class="form-group row">
						<label for="client_name" class="col-sm-12 control-label">Client Name</label>
						<div class="col-sm-12">
							<div class="values" id="client_name"></div>
						</div>
					</div>
					<div class="form-group row">
						<label for="proj_location" class="col-sm-12 control-label">Location</label>
						<div class="col-sm-12">
							<div  class="values" id="proj_location"></div>
						</div>
					</div>
					<div class="form-group row">
						<label for="project_type" class="col-sm-12 control-label">Project Type</label>
						<div class="col-sm-12">
							<div  class="values" id="project_type"></div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
					<button onclick="$('#previewProjectType').modal('hide');$('#editProjectType').modal('show');" class="btn btn-danger waves-effect waves-light">Edit</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end create modal -->
	
	<!-- start create modal -->
	<div id="editProjectType" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Update Project</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo base_url("projects/crud/update/projlist"); ?>" class="form-horizontal p-t-20">
						<div class="form-group row">
							<label for="project_name" class="col-sm-12 control-label">Project Name*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="hidden" class="form-control" name="admin_id" value="1">
									<input type="hidden" class="form-control" name="rowid" id="rowid">
									<input type="text" class="form-control" name="project_name" id="project_name">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-ruler-pencil"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="client_name" class="col-sm-12 control-label">Client Name*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="client_name" id="client_name">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="proj_location" class="col-sm-12 control-label">Location*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="proj_location" id="proj_location">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-location-pin"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="project_type" class="col-sm-12 control-label">Project Type*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<select class="form-control" name="project_type" id="project_type">
										<option value="">-- No data --</option>
									</select>
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-list"></i></span>
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
		getProjectList();
		<?php 
			if($this->session->flashdata('global_message') != "") {
				echo $this->session->flashdata('global_message');
			}
		?>
	});
	
	function getProjectList() {
		$.post("<?php echo base_url("projects/crud/retrieve/projlist"); ?>",{ admin_id : "1" })
		.done(function(data) {
			$("#projListData").html(data);
			$('#tblProjList').DataTable({
				dom: 'Bfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			});
			getProjectTypes();
		});
	}
	
	function getProjectList2() {
		$.post("<?php echo base_url("projects/crud/retrieve/projlist"); ?>",{ admin_id : "1" })
		.done(function(data) {
			$("#projListData").html(data);
			$('#tblProjList').DataTable({
				dom: 'Bfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			});
		});
	}
	
	function getProjectTypes() {
		$.post("<?php echo base_url("projects/crud/retrieve/cbotypes"); ?>",{ admin_id : "1" })
		.done(function(data) {
			$("#createProjList #project_type").html(data);
			$("#editProjectType #project_type").html(data);
			$(".preloader").fadeOut();
		});
	}
	
	function fndeleteProjList(id) {
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
				$.post("<?php echo base_url("projects/crud/delete/projlist"); ?>",{ admin_id : "1", id: id })
				.done(function(data) {
					if(data == 1) { // or true
						$('#tblProjList').DataTable().destroy();
						getProjectList2();
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
	
	function fneditProjList(id) {
		$.post("<?php echo base_url("projects/prepupdate/projlist"); ?>",{ admin_id : "1", id: id })
		.done(function(json) {
			if(json == "Unable to proceed insufficient account level!") {
				swal("Error!", json, "error"); 
				return false;
			}
			var obj = JSON.parse(json);
			$('#editProjectType input#rowid').val(obj[0].id);
			$('#editProjectType input#project_name').val(obj[0].project_name);
			$('#editProjectType input#client_name').val(obj[0].client_name);
			$('#editProjectType input#proj_location').val(obj[0].location);
			$('#editProjectType input#project_type').val(obj[0].project_type);
			$('#previewProjectType div#project_name').text(obj[0].project_name);
			$('#previewProjectType div#client_name').text(obj[0].client_name);
			$('#previewProjectType div#proj_location').text(obj[0].location);
			$('#previewProjectType div#project_type').text(obj[0].project_type);
			$("#previewProjectType").modal('show');
		});
	}
</script>
