<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-themecolor">Project Records</h3>
	</div>
	<div class="col-md-7 align-self-center">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
			<li class="breadcrumb-item">Labor Rate</li>
			<li class="breadcrumb-item active">Labor Rate</li>
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
							<h4 class="card-title">Labor Rate</h4>
							<h6 class="card-subtitle">List of Rates</h6>
						</div>
						<div class="col-12 col-sm-2">
							<?php if($this->session->userdata('userlevel') != "VIEWER"): ?>
							<button type='button' data-toggle="modal" data-target="#createLaborRate" class='btn btn-info'><i class='fa fa-edit'></i> Create New</button>
							<?php endif; ?>
						</div>
					</div>
					<div class="table-responsive m-t-10">
						<table id="tblLaborList" class="display wrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Class</th>
									<th>Description</th>
									<th>Straight Hours</th>
									<th>Straight Rate</th>
									<th>OT Hour</th>
									<th>OT Rate</th>
									<th>Doubletime Hour</th>
									<th>Doubletime Rate</th>
									<th>Date Inserted</th>
									<th id="optdiv">Options</th>
								</tr>
							</thead>
							<tbody id="laborListData">
										
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
	<div id="createLaborRate" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Create New Labor Rate</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo base_url("projects/crud/create/laborrate"); ?>" class="form-horizontal p-t-20">
						<div class="form-group row">
							<div class="col-sm-6">
								<label for="class" class="p-0 col-sm-6 control-label">Class*</label>
								<div class="input-group">
									<input type="hidden" class="form-control" name="admin_id" value="1">
									<input type="text" class="form-control" name="class" id="class">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-ruler-pencil"></i></span>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label for="description" class="p-0 col-sm-12 control-label">Description*</label>
								<div class="input-group">
									<input type="text" class="form-control" name="description" id="description">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-6">
								<label for="st_hour" class="p-0 col-sm-12 control-label">Straight Hour*</label>
								<div class="input-group">
									<input type="number" step="0" class="form-control" name="st_hour" id="st_hour">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label for="st_rate" class="p-0 col-sm-12 control-label">Straight Rate*</label>
								<div class="input-group">
									<input type="number" step="0.01" class="form-control" name="st_rate" id="st_rate">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-6">
							<label for="ot_hour" class="col-sm-12 control-label">Overtime Hour*</label>
								<div class="input-group">
									<input type="number" step="0" class="form-control" name="ot_hour" id="ot_hour">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label for="ot_rate" class="col-sm-12 control-label">Overtime Rate*</label>
								<div class="input-group">
									<input type="number" step="0.01" class="form-control" name="ot_rate" id="ot_rate">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-6">
								<label for="dt_hour" class="col-sm-12 control-label">Doubletime Hour*</label>
								<div class="input-group">
									<input type="number" step="0" class="form-control" name="dt_hour" id="dt_hour">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label for="dt_rate" class="col-sm-12 control-label">Doubletime Rate*</label>
								<div class="input-group">
									<input type="number" step="0.01" class="form-control" name="dt_rate" id="dt_rate">
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
	<div id="editLaborRate" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Update Labor Rate</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo base_url("projects/crud/update/laborrate"); ?>" class="form-horizontal p-t-20">
						<div class="form-group row">
							<div class="col-sm-6">
								<label for="class" class="p-0 col-sm-12 control-label">Class*</label>
								<div class="input-group">
									<input type="hidden" class="form-control" name="rowid" id="rowid">
									<input type="hidden" class="form-control" name="admin_id" value="1">
									<input type="text" class="form-control" name="class" id="class">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-ruler-pencil"></i></span>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label for="description" class="p-0 col-sm-12 control-label">Description*</label>
								<div class="input-group">
									<input type="text" class="form-control" name="description" id="description">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-6">
								<label for="st_hour" class="p-0 col-sm-12 control-label">Straight Hour*</label>
								<div class="input-group">
									<input type="number" step="0" class="form-control" name="st_hour" id="st_hour">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label for="st_rate" class="p-0 col-sm-12 control-label">Straight Rate*</label>
								<div class="input-group">
									<input type="number" step="0.01" class="form-control" name="st_rate" id="st_rate">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-6">
								<label for="ot_hour" class="p-0 col-sm-12 control-label">Overtime Hour*</label>
								<div class="input-group">
									<input type="number" step="0" class="form-control" name="ot_hour" id="ot_hour">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label for="ot_rate" class="p-0 col-sm-12 control-label">Overtime Rate*</label>
								<div class="input-group">
									<input type="number" step="0.01" class="form-control" name="ot_rate" id="ot_rate">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-6">
								<label for="dt_hour" class="p-0 col-sm-12 control-label">Doubletime Hour*</label>
								<div class="input-group">
									<input type="number" step="0" class="form-control" name="dt_hour" id="dt_hour">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label for="dt_rate" class="p-0 col-sm-12 control-label">Doubletime Rate*</label>
								<div class="input-group">
									<input type="number" step="0.01" class="form-control" name="dt_rate" id="dt_rate">
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
</div>

<script>
	$(document).ready(function() {
		getLaborRate();
		<?php 
			if($this->session->flashdata('global_message') != "") {
				echo $this->session->flashdata('global_message');
			}
		?>
	});
	
	function getLaborRate() {
		$.post("<?php echo base_url("projects/crud/retrieve/laborrate"); ?>",{ admin_id : "1" })
		.done(function(data) {
			$("#laborListData").html(data);
			$('#tblLaborList').DataTable({
				dom: 'Bfrtip',
				"scrollX" : false,
				"responsive" : true,
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			});
			$(".preloader").fadeOut();
		});
	}

	function fndeleteLaborRate(id) {
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
				$.post("<?php echo base_url("projects/crud/delete/laborrate"); ?>",{ admin_id : "1", id: id })
				.done(function(data) {
					if(data == 1) { // or true
						$('#tblLaborList').DataTable().destroy();
						getLaborRate();
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
	
	function fneditLaborRate(id) {
		$.post("<?php echo base_url("projects/prepupdate/laborrate"); ?>",{ admin_id : "1", id: id })
		.done(function(json) {
			if(json == "Unable to proceed insufficient account level!") {
				swal("Error!", json, "error"); 
				return false;
			}
			var obj = JSON.parse(json);
			$('#editLaborRate input#rowid').val(obj[0].id);
			$('#editLaborRate input#class').val(obj[0].class);
			$('#editLaborRate input#description').val(obj[0].description);
			$('#editLaborRate input#st_hour').val(obj[0].st_hour);
			$('#editLaborRate input#st_rate').val(obj[0].st_rate);
			$('#editLaborRate input#ot_hour').val(obj[0].ot_hour);
			$('#editLaborRate input#ot_rate').val(obj[0].ot_rate);
			$('#editLaborRate input#dt_hour').val(obj[0].dt_hour);
			$('#editLaborRate input#dt_rate').val(obj[0].dt_rate);
			$("#editLaborRate").modal('show');
		});
		
	}
</script>
