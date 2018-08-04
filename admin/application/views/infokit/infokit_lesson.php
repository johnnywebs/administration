<?php 
	if($this->session->userdata('topic_id') == "") {
		redirect(base_url('infokit/topic'));
	}
?>

<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-themecolor">Infokit - Topic : <?php echo $this->session->userdata('topic_name'); ?></h3>
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
					<div>
					<?php if($this->session->userdata('userlevel') != "VIEWER"): ?>
						<button onclick="saveSequence();" class="btn btn-primary">SAVE ORDDER</button>
						<button data-toggle="modal" data-target="#createLesson" class="btn btn-info">ADD NEW</button>
					<?php endif; ?>
						<a href="<?php echo base_url("infokit/topic"); ?>" class="float-right btn btn-warning">GO BACK</a>
					</div>
					<br/>
					<ul id="topic_lessons" class="list-group">
						
					</ul>
				</div>
			</div>
		</div>
		<footer class="footer">
			© 2018 Geo Grout Inc
		</footer>
	</div>
	<!-- start create modal -->
	<div id="createLesson" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Create New Lesson for <?php echo $this->session->userdata('topic_name'); ?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<form method="post" enctype="multipart/form-data" action="<?php echo base_url("infokit/crud/create/lesson"); ?>" class="form-horizontal p-t-20">
						<div class="form-group row">
							<label for="name" class="col-sm-12 control-label">Title*</label>
							<div class="col-sm-12">
								<input type="hidden" class="form-control" name="topic_id" value="<?php echo $this->session->userdata('topic_id'); ?>">
								<input type="text" class="form-control" name="name" id="name">
							</div>
						</div>
						<div class="form-group row">
							<label for="description" class="col-sm-12 control-label">Details*</label>
							<div class="col-sm-12">
								<textarea class="form-control" name="description" id="description"></textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="attachment" class="col-sm-12 control-label">Attachment*</label>
							<div class="col-sm-12">
								<input type="file" class="form-control" name="attachment" id="attachment">
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
	
	<!-- start preview modal -->
	<div id="previewLesson" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Preview Topic: <span id="lesson_name"></span></h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<div class="form-group row">
						<label for="description" class="col-sm-12 control-label">Details</label>
						<div class="col-sm-12">
							<div id="description" style="border-bottom:2px solid #6BB9F0;"></div>
						</div>
					</div>
					<div class="form-group row">
						<label for="attachment" class="col-sm-12 control-label">Attachment</label>
						<div class="col-sm-12">
							<div id="attachment" style="border-bottom:2px solid #6BB9F0;"></div>
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
	<!-- end preview modal -->
	<div style="display:none;">
		<form target="_blank" name="redir" id="redir" action="<?php echo base_url("infokit/crud/retrieve/ftplessonfile"); ?>" method="post">
			<input type="hidden" value="" name="file" id="file" />
		</form>
	</div>
</div>

<script>
	var new_order = [];
	var topic_id = "<?php echo $this->session->userdata('topic_id'); ?>";
	var current_order = [];
	current_order = <?php echo ($this->session->userdata('topic_sequence') != "" ? $this->session->userdata('topic_sequence') : '[]'); ?>;
	
	$(document).ready(function() {
		getLessons();
		<?php 
			if($this->session->flashdata('global_message') != "") {
				echo $this->session->flashdata('global_message');
			}
		?>
		
		
	});
	
	function saveSequence() {
		if(new_order.length > 0) {
			$.post("<?php echo base_url("infokit/crud/update/lesson_order"); ?>",{ topic_id: topic_id, topic_sequence: new_order })
			.done(function(data) {
				alert(data);
				document.location.href='<?php echo base_url("infokit/topic"); ?>';
			});
		}
	}
	
	function getLessons() {
		$.post("<?php echo base_url("infokit/crud/retrieve/lessonlist"); ?>",{ topic_id: topic_id })
		.done(function(data) {
			$("#topic_lessons").html(data);
			
			var list = document.getElementById("topic_lessons");
			var sortable = Sortable.create(list, {
				animation: 150,
				sort:<?php echo ($this->session->userdata('userlevel') == "VIEWER" ? "false" : "true"); ?>,
				onSort: function (e) { 
					var items = e.to.children; 
					var result = []; 
					for (var i = 0; i < items.length; i++) { 
						result.push($(items[i]).data('id')); 
					}
					new_order = result;
				}
			});
			sortable.sort(current_order);
		});
	}
	
	function fnViewLesson(id) {
		$.post("<?php echo base_url("infokit/prepupdate/lessons"); ?>",{ admin_id : "1", id: id })
		.done(function(json) {
			if(json == "Unable to proceed insufficient account level!") {
				swal("Error!", json, "error"); 
				return false;
			}
			var obj = JSON.parse(json);
			$('#previewLesson span#lesson_name').text(obj[0].name);
			$('#previewLesson div#description').text(obj[0].description);
			//if(obj[0].attachment_type == ")
			var att_link = "<a href='#' onclick=\"$('#redir').submit();\">"+obj[0].attachment+"</a>";
			var dl_link = obj[0].attachment;
			$('#previewLesson div#attachment').html(att_link);
			$('#redir input#file').val(dl_link);
			$("#previewLesson").modal('show');
		});
	}
	
	function fnDeleteLesson(id) {
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
				$.post("<?php echo base_url("infokit/crud/delete/lesson"); ?>",{ admin_id : "1", id: id })
				.done(function(data) {
					if(data == 1) { // or true
						getLessons()
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


