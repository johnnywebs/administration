<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-themecolor">Google map</h3>
	</div>
	<div class="col-md-7 align-self-center">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
			<li class="breadcrumb-item active">Google Map</li>
		</ol>
	</div>
	<div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Employee Locations</h4>
					<iframe id="markermap" width="100%" height="300px"
						frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6318.092472145345!2d-122.41930747363149!3d37.64811701913067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xad1925a4bf0970e9!2sGeoGrout+ggms!5e0!3m2!1sen!2sph!4v1528353344175" allowfullscreen>
					</iframe>
                 </div>
			</div>
		</div>
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-12 col-sm-10">
							<h4 class="card-title">Employee Logs</h4>
							<h6 class="card-subtitle">List of Employee Logs</h6>
						</div>
					</div>
					<div class="table-responsive m-t-10">
						<table id="tblEmpLogs" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Employee ID</th>
									<th>Employee Name</th>
									<th>Job</th>
									<th>Task</th>
									<th>Location</th>
									<th>Group Entry</th>
									<th>Time Start</th>
									<th>Time End</th>
									<th>Date Inserted</th>
								</tr>
							</thead>
							<tbody id="empLogData">
										
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
		$.post("<?php echo base_url("employees/crud/retrieve/logs"); ?>",{ admin_id : "1" })
		.done(function(data) {
			$("#empLogData").html(data);
			$('#tblEmpLogs').DataTable({
				dom: 'Bfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			});
			$(".preloader").fadeOut();
		});
	}
	
	function showInMap(map) {
		var url = "https://www.google.com/maps/embed/v1/search?key=AIzaSyDiiBE86xJkfFADJnCE4jZfwCu2nn30IOI&q=";
		url = url + map + "&zoom=18";
		$("#markermap").attr('src',url);
	}
</script>