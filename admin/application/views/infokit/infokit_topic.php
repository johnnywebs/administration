<?php 
	$sess = array('topic_name', 'topic_id','topic_sequence');
	$this->session->unset_userdata($sess);
?>
<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-themecolor">Infokit</h3>
	</div>
	<div class="col-md-7 align-self-center">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
			<li class="breadcrumb-item">Infokit</li>
			<li class="breadcrumb-item active">Topics</li>
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
							<h4 class="card-title">Infokit Topics</h4>
							<h6 class="card-subtitle">List of Topics</h6>
						</div>
						<div class="col-12 col-sm-2">
							<?php if($this->session->userdata('userlevel') != "VIEWER"): ?>
							<button type='button' data-toggle="modal" data-target="#createTopics" class='btn btn-info'><i class='fa fa-edit'></i> Create New</button>
							<?php endif; ?>
						</div>
					</div>
					<div class="table-responsive m-t-10">
						<table id="tblTopics" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Topic Name</th>
									<th>Description</th>
									<th>Date Inserted</th>
									<th>Options</th>
								</tr>
							</thead>
							<tbody id="topicData">
										
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
	<div id="createTopics" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Create New Topic</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo base_url("infokit/crud/create/topics"); ?>" class="form-horizontal p-t-20">
						<div class="form-group row">
							<label for="subject" class="col-sm-12 control-label">Topic Name*</label>
							<div class="col-sm-12">
								<input type="text" class="form-control" name="subject" id="subject">
							</div>
						</div>
						<div class="form-group row">
							<label for="description" class="col-sm-12 control-label">Description*</label>
							<div class="col-sm-12">
								<textarea class="form-control" name="description" id="description"></textarea>
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
	<div id="editTopic" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Update Topic</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<form id="updateIKTopic" method="post" action="<?php echo base_url("infokit/crud/update/topics"); ?>" class="form-horizontal p-t-20">
						<div class="form-group row">
							<label for="subject" class="col-sm-12 control-label">Topic Name*</label>
							<div class="col-sm-12">
								<input type="hidden" class="form-control" name="rowid" id="rowid">
								<input type="text" class="form-control" name="subject" id="subject">
							</div>
						</div>
						<div class="form-group row">
							<label for="description" class="col-sm-12 control-label">Description*</label>
							<div class="col-sm-12">
								<textarea class="form-control" name="description" id="description"></textarea>
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
	
	<!-- start create modal -->
	<div id="previewTopic" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Preview Topic</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<div class="form-group row">
						<label for="subject" class="col-sm-12 control-label">Topic Name</label>
						<div class="col-sm-12">
							<div id="subject" style="border-bottom:2px solid #6BB9F0;"></div>
						</div>
					</div>
					<div class="form-group row">
						<label for="description" class="col-sm-12 control-label">Description</label>
						<div class="col-sm-12">
							<div id="description" style="border-bottom:2px solid #6BB9F0;"></div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
					<button onclick="showEditTopics();" class="btn btn-danger waves-effect waves-light">Update</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end create modal -->
	<div style="display:none;">
		<form name="redir" id="redir" action="<?php echo base_url("infokit/crud/retrieve/lesson"); ?>" method="post">
			<input type="hidden" value="" name="topic_id" id="topic_id" />
			<input type="hidden" value="" name="topic_name" id="topic_name" />
			<input type="hidden" value="" name="topic_sequence" id="topic_sequence" />
		</form>
	</div>
</div>

<script>
	$(document).ready(function() {
		getInfokitTopics();
		<?php 
			if($this->session->flashdata('global_message') != "") {
				echo $this->session->flashdata('global_message');
			}
		?>
	});
	
	function getInfokitTopics() {
		$.post("<?php echo base_url("infokit/crud/retrieve/topics"); ?>",{ admin_id : "1" })
		.done(function(data) {
			$("#topicData").html(data);
			$('#tblTopics').DataTable({
				dom: 'Bfrtip',
				buttons:[]
			});
			$(".preloader").fadeOut();
		});
	}
	
	function fneditTopics(id) {
		$.post("<?php echo base_url("infokit/prepupdate/topics"); ?>",{ admin_id : "1", id: id })
		.done(function(json) {
			if(json == "Unable to proceed insufficient account level!") {
				swal("Error!", json, "error"); 
				return false;
			}
			var obj = JSON.parse(json);
			$('#editTopic input#rowid').val(obj[0].id);
			$('#editTopic input#subject').val(obj[0].subject);
			$('#editTopic textarea#description').val(obj[0].description);
			$('#previewTopic div#subject').text(obj[0].subject);
			$('#previewTopic div#description').text(obj[0].description);
			$("#previewTopic").modal('show');
		});
		
	}
	
	function fnRedirectLesson(id,name,seq) {
		$("#redir #topic_id").val(id);
		$("#redir #topic_name").val(name);
		$("#redir #topic_sequence").val(seq);
		$("#redir").submit();
	}
	
	function showEditTopics() {
		$("#editTopic").modal('show');
		$("#previewTopic").modal('hide');
	}
	
	function fndeleteTopics(id) {
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
				$.post("<?php echo base_url("infokit/crud/delete/topics"); ?>",{ admin_id : "1", id: id })
				.done(function(data) {
					if(data == 1) { // or true
						$('#tblTopics').DataTable().destroy();
						getInfokitTopics();
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
