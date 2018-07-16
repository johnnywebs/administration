<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-themecolor">Project Records</h3>
	</div>
	<div class="col-md-7 align-self-center">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
			<li class="breadcrumb-item">Projects</li>
			<li class="breadcrumb-item active">Bidding List</li>
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
							<h4 class="card-title">Bidding List</h4>
							<h6 class="card-subtitle">List of Biddings</h6>
						</div>
						<div class="col-12 col-sm-2">
							<button type='button' data-toggle="modal" data-target="#createBiddingList" class='btn btn-info'><i class='fa fa-edit'></i> Create New</button>
						</div>
					</div>
					<div class="table-responsive m-t-10">
						<table id="tblBiddingList" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Bid Date</th>
									<th>Bid Agent</th>
									<th>Job Name</th>
									<th>Project Type</th>
									<th>Bid Completed</th>
									<th>Rebid</th>
									<th>Old Bid Date</th>
									<th>Prebid Meeting Date</th>
									<th>Job Location</th>
									<th>Start Date</th>
									<th>Project Valuation</th>
									<th>Subcontract Method</th>
									<th>Delivery System</th>
									<th>Owner Type</th>
									<th>Address</th>
									<th>Date Inserted</th>
									<th>Options</th>
								</tr>
							</thead>
							<tbody id="BiddingListData">
										
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
	<div id="createBiddingList" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Create New Bidding</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo base_url("projects/crud/create/bidding"); ?>" class="form-horizontal p-t-20">
						<div class="form-group row">
							<label for="bid_date" class="col-sm-12 control-label">Bid Date*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="hidden" class="form-control" name="admin_id" value="1">
									<input type="date" class="form-control" name="bid_date" id="bid_date">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-ruler-pencil"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="bid_agent" class="col-sm-12 control-label">Bid Agent*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="bid_agent" id="bid_agent">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="job_name" class="col-sm-12 control-label">Job Name*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="job_name" id="job_name">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="project_type" class="col-sm-12 control-label">Project Type*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<select class="form-control" name="project_type" id="project_type">
									
									</select>
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="bid_completed" class="col-sm-12 control-label">Bid Completed*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="number" class="form-control" name="bid_completed" id="bid_completed">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="rebid" class="col-sm-12 control-label">Rebid*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<select class="form-control" name="rebid" id="rebid">
										<option value="Y">YES</option>
										<option value="N">NO</option>
									</select>
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="old_bid_date" class="col-sm-12 control-label">Old Bid Date*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="date" class="form-control" name="old_bid_date" id="old_bid_date">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="prebid_meeting_date" class="col-sm-12 control-label">Pre-Bid Meeting*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="date" class="form-control" name="prebid_meeting_date" id="prebid_meeting_date">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="job_location" class="col-sm-12 control-label">Job Location*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="job_location" id="job_location">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="start_date" class="col-sm-12 control-label">Start Date*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="date" class="form-control" name="start_date" id="start_date">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="project_valuation" class="col-sm-12 control-label">Project Valuation*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="project_valuation" id="project_valuation">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="sc_method" class="col-sm-12 control-label">Subcontract Method*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="sc_method" id="sc_method">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="delivery_system" class="col-sm-12 control-label">Project Delivery System*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="delivery_system" id="delivery_system">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="owner_type" class="col-sm-12 control-label">Owner Type*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="owner_type" id="owner_type">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="address" class="col-sm-12 control-label">Address*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="address" id="address">
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
	<div id="editBiddingList" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Update Bidding List</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo base_url("projects/crud/update/bidding"); ?>" class="form-horizontal p-t-20">
						<div class="form-group row">
							<label for="bid_date" class="col-sm-12 control-label">Bid Date*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="hidden" class="form-control" name="rowid" id="rowid">
									<input type="hidden" class="form-control" name="admin_id" value="1">
									<input type="date" class="form-control" name="bid_date" id="bid_date">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-ruler-pencil"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="bid_agent" class="col-sm-12 control-label">Bid Agent*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="bid_agent" id="bid_agent">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="job_name" class="col-sm-12 control-label">Job Name*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="job_name" id="job_name">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="project_type" class="col-sm-12 control-label">Project Type*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<select class="form-control" name="project_type" id="project_type">
									
									</select>
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="bid_completed" class="col-sm-12 control-label">Bid Completed*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="number" class="form-control" name="bid_completed" id="bid_completed">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="rebid" class="col-sm-12 control-label">Rebid*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<select class="form-control" name="rebid" id="rebid">
										<option value="Y">YES</option>
										<option value="N">NO</option>
									</select>
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="old_bid_date" class="col-sm-12 control-label">Old Bid Date*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="date" class="form-control" name="old_bid_date" id="old_bid_date">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="prebid_meeting_date" class="col-sm-12 control-label">Pre-Bid Meeting*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="date" class="form-control" name="prebid_meeting_date" id="prebid_meeting_date">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="job_location" class="col-sm-12 control-label">Job Location*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="job_location" id="job_location">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="start_date" class="col-sm-12 control-label">Start Date*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="date" class="form-control" name="start_date" id="start_date">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="project_valuation" class="col-sm-12 control-label">Project Valuation*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="project_valuation" id="project_valuation">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="sc_method" class="col-sm-12 control-label">Subcontract Method*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="sc_method" id="sc_method">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="delivery_system" class="col-sm-12 control-label">Project Delivery System*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="delivery_system" id="delivery_system">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="owner_type" class="col-sm-12 control-label">Owner Type*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="owner_type" id="owner_type">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon2"><i class="ti-user"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="address" class="col-sm-12 control-label">Address*</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" name="address" id="address">
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
		getBiddingData();
		<?php 
			if($this->session->flashdata('global_message') != "") {
				echo $this->session->flashdata('global_message');
			}
		?>
	});
	
	function getBiddingData() {
		$.post("<?php echo base_url("projects/crud/retrieve/bidding"); ?>",{ admin_id : "1" })
		.done(function(data) {
			$("#BiddingListData").html(data);
			$('#tblBiddingList').DataTable({
				dom: 'Bfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			});
			getProjectTypes();
		});
	}
	
	function getProjectTypes() {
		$.post("<?php echo base_url("projects/crud/retrieve/cbotypes"); ?>",{ admin_id : "1" })
		.done(function(data) {
			$("#createBiddingList #project_type").html(data);
			$("#editBiddingList #project_type").html(data);
			$(".preloader").fadeOut();
		});
	}
	
	function fndeleteBiddingData(id) {
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
				$.post("<?php echo base_url("projects/crud/delete/bidding"); ?>",{ admin_id : "1", id: id })
				.done(function(data) {
					if(data == 1) { // or true
						$('#tblBiddingList').DataTable().destroy();
						getMtrl();
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
	
	function fneditBiddingData(id) {
		$.post("<?php echo base_url("projects/prepupdate/bidding"); ?>",{ admin_id : "1", id: id })
		.done(function(json) {
			var obj = JSON.parse(json);
			$('#editBiddingList input#rowid').val(obj[0].id);
			$('#editBiddingList input#bid_date').val(obj[0].bid_date);
			$('#editBiddingList input#bid_agent').val(obj[0].bid_agent);
			$('#editBiddingList input#job_name').val(obj[0].job_name);
			$('#editBiddingList select#project_type').val(obj[0].project_type);
			$('#editBiddingList input#bid_completed').val(obj[0].bid_completed);
			$('#editBiddingList input#rebid').val(obj[0].rebid);
			$('#editBiddingList input#old_bid_date').val(obj[0].old_bid_date);
			$('#editBiddingList input#prebid_meeting_date').val(obj[0].prebid_meeting_date);
			$('#editBiddingList input#job_location').val(obj[0].job_location);
			$('#editBiddingList input#start_date').val(obj[0].start_date);
			$('#editBiddingList input#project_valuation').val(obj[0].project_valuation);
			$('#editBiddingList input#sc_method').val(obj[0].sc_method);
			$('#editBiddingList input#delivery_system').val(obj[0].delivery_system);
			$('#editBiddingList input#owner_type').val(obj[0].owner_type);
			$('#editBiddingList input#address').val(obj[0].address);
			$("#editBiddingList").modal('show');
		});
	}
</script>
