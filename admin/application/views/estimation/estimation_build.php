<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-themecolor">Estimation</h3>
	</div>
	<div class="col-md-7 align-self-center">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
			<li class="breadcrumb-item">Estimation</li>
			<li id="action" class="breadcrumb-item active"><?php echo ucwords($showitem); ?></li>
		</ol>
	</div>
	<!--<div class="">
		<button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
	</div>-->
</div>
<div class="container-fluid">
	<div id="frmestimation" class="row">
		<div class="col-md-12">
			<div id="estimatetable" class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-12 col-sm-12">
						<h4 class="card-title">Preview Estimation Data</h4>
						<div class="table-responsive m-t-10">
							<table id="tblEstimate" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Project Code</th>
										<th width='20px'>Project Name</th>
										<th width='20px'>Project Type</th>
										<th width='20px'>Client</th>
										<th width='20px'>Type of Work</th>
										<th>Estimated By</th>
										<th>Estimated Date</th>
										<th>Options</th>
									</tr>
								</thead>
								<tbody id="estimateList">
											
								</tbody>
							</table>
						</div>
						</div>
					</div>
				</div>
			</div>
	
			<div id="estimateinfo" class="card">
				<form id="workingdays">
				<div class="card-body">
					<div class="row">
						<div class="col-12 col-sm-12">
							<h4 class="card-title">Project Estimation Details</h4>
							
							<hr>
							<div class="form-group row">
								  <label for="etimatedby" class="col-md-2 col-form-label">Estimated By</label>
								  <div class="col-md-5">
									<input class="form-control" type="text" id="etimatedby" name="etimatedby" value="<?php echo $this->session->userdata('username'); ?>" required>
								  </div>
								  <label for="etimateddate" class="col-md-1 col-form-label">Date</label>
								  <div class="col-md-3">
									<input class="form-control" type="date" value="2011-08-19" id="etimateddate" name="etimateddate" required>
								   </div>
							</div>
							<div class="form-group row">
								  <label for="projectname" class="col-md-2 col-form-label">Project Name</label>
								  <div class="col-md-10">
									<!--<input class="form-control" type="text" id="typeofwork" name="typeofwork" required>-->
									<select class="form-control" id="projectname" name="projectname" onchange="getprjdata();" required>
									  
									</select>
								  </div>
							</div>
							<div class="form-group row">
								  <label for="projecttype" class="col-md-2 col-form-label">Project Type</label>
								  <div class="col-md-10">
									<input class="form-control" type="text" id="projecttype" name="projecttype" required>
								  </div>
							</div>
							<div class="form-group row">
								  <label for="filename" class="col-md-2 col-form-label">File Name</label>
								  <div class="col-md-10">
									<input class="form-control" type="text" id="filename" name="filename" required>
								  </div>
							</div>
							<div class="form-group row">
								  <label for="client" class="col-md-2 col-form-label">Client</label>
								  <div class="col-md-10">
									<input class="form-control" type="text" id="client" name="client" required>
								  </div>
							</div>
							<div class="form-group row">
								  <label for="location" class="col-md-2 col-form-label">Location</label>
								  <div class="col-md-10">
									<input class="form-control" type="text" id="location" name="location" required>
								  </div>
							</div>
							<div class="form-group row">
								  <label for="typeofwork" class="col-md-2 col-form-label">Type of Work</label>
								  <div class="col-md-10">
									<!--<input class="form-control" type="text" id="typeofwork" name="typeofwork" required>-->
									<select class="form-control" id="typeofwork" name="typeofwork" required>
									  
									</select>
									
								  </div>
							</div>
							<hr>
							<div class="form-group row">
								<div class="col-md-6">
									  <label class="col-md-12 col-form-label">No.Of Days</label>
									   <div class="row">
											<label for="stdshift" class="col-sm-6 col-form-label">Standard Shifts</label>									  
											<div class="col-sm-6">
												<input class="form-control" type="text" id="stdshift" name="stdshift" data-cell="A1" data-format="0" value="30" required>
											</div>
									  </div>
									  <div class="row">
										  <label for="premshift" class="col-sm-6 col-form-label">Premium Shifts x 1.5</label>
										  <div class="col-sm-6">
											<input class="form-control" type="text" id="premshift1"  name="premshift1"  data-cell="A2" data-format="0" value="0" required>
										  </div>
									  </div>
									  <div class="row">
										  <label for="premshift" class="col-sm-6 col-form-label"> Premium Shifts x 2</label>
										  <div class="col-sm-6">
											<input class="form-control" type="text" id="premshift2" name="premshift2" data-cell="A3" data-format="0" value="0" required>
										  </div>
									  </div>
									  <hr class="col-sm-10">
									  <div class="row">
										  <label for="totaldays" class="col-sm-6 col-form-label" >Total Days</label>
										  <div class="col-sm-6">
											<input class="form-control" type="text" id="totaldays" name="totaldays" data-cell="A4" data-format="0" data-formula="SUM(A1:A3)" required>
										  </div>
									  </div>
								 </div>
								 <div class="col-md-6">
									  <label class="col-sm-12 col-form-label">&nbsp;</label>
									  <div class="row">
										  <label for="unitqty" class="col-sm-6 col-form-label">Unit Qty</label>
										  <div class="col-sm-5">
											<input class="form-control" type="text" id="unitqty" name="unitqty" data-cell="A5" data-format="0" value="32000" required>
										  </div>
									  </div>
									  <div class="row">
										  <label for="points" class="col-sm-6 col-form-label">Points</label>
										  <div class="col-sm-5">
											<input class="form-control" type="text" id="points" name="points" data-cell="A6" data-format="0" value="198" required>
										  </div>
									   </div>
									  <div class="row">
										  <label for="prtval" class="col-sm-6 col-form-label">PRT</label>
										  <div class="col-sm-5">
											<input class="form-control" type="text" id="prtval" name="prtval" data-cell="A7" data-format="0,0[.]00 %" value="155" required>
										  </div>
									  </div>
									  <div class="row">
										  <label for="galval" class="col-sm-6 col-form-label">Cost Per Fuel Gallon</label>
										  <div class="col-sm-5">
											<input class="form-control" type="text" id="galval" name="galval" data-cell="A8" data-format="$ 0,0.00" value="0.04" required>
										  </div>
									  </div>
									  <div class="row">
										  <label for="galval" class="col-sm-6 col-form-label">Sales Tax</label>
										  <div class="col-sm-5">
											<input class="form-control" type="text" id="sales_tax" name="sales_tax" data-cell="A9" data-format="0,0[.]00 %" value="8.5" required>
										  </div>
									  </div>
								 </div>
							</div>
							<div class="form-group float-right">
								 <!--<button type="submit" class="btn btn-info" onclick="showbreakdown();">-->
								 <button id="bldbutton" type="submit" class="btn btn-info" style="width: 250px; margin-right: 20px;" >
									<i class="fa fa-edit"></i> Build
								 </button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<form id="estimationmaster">
			<div id="estimatebreakdown" class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-9 col-sm-9">
								<h4 class="card-title">Project Estimate Breakdown</h4>
								<div>Project Code : <label class="text-muted" id="projectcode">0000</label></div>
								  <ul class="nav nav-tabs customtab" role="tablist">
									 <li class="nav-item"> 
										<a class="nav-link active" data-toggle="tab" href="#labor" role="tab"><span class="hidden-sm-up">
										<i class="ti-home"></i></span> <span class="hidden-xs-down">Labor</span></a> 
									 </li>
									 <li class="nav-item"> 
										<a class="nav-link" data-toggle="tab" href="#equip" role="tab"><span class="hidden-sm-up">
										<i class="ti-user"></i></span> <span class="hidden-xs-down">Equipment</span></a> 
									 </li>
									 <li class="nav-item"> 
										<a class="nav-link" data-toggle="tab" href="#material" role="tab"><span class="hidden-sm-up">
										<i class="ti-email"></i></span> <span class="hidden-xs-down">Material</span></a> 
									 </li>
									 <li class="nav-item"> 
										<a class="nav-link" data-toggle="tab" href="#misc" role="tab"><span class="hidden-sm-up">
										<i class="ti-email"></i></span> <span class="hidden-xs-down">Misc</span></a> 
									 </li>
									 <li class="nav-item"> 
										<a class="nav-link" data-toggle="tab" href="#subcon" role="tab"><span class="hidden-sm-up">
										<i class="ti-email"></i></span> <span class="hidden-xs-down">SubContract</span></a> 
									 </li>
									 <li class="nav-item"> 
										<a class="nav-link" data-toggle="tab" href="#bidsum" role="tab"><span class="hidden-sm-up">
										<i class="ti-email"></i></span> <span class="hidden-xs-down">BID Summary</span></a> 
									 </li>
									 <li class="nav-item"> 
										<a class="nav-link" data-toggle="tab" href="#jobbudj" role="tab"><span class="hidden-sm-up">
										<i class="ti-email"></i></span> <span class="hidden-xs-down">JOB BUDGET</span></a> 
									 </li>
								  </ul>
								  
								  <div class="tab-content p-b-20">
									 <div class="tab-pane p-l-20 p-r-20 active" id="labor" role="tabpanel">
										 <div class="row">
											<div class="col-sm-12">
												<br>
													<div class="row">
														<label for="prt" class="col-md-2 col-form-label">PRT & I</label>
														<div class="col-md-2">
															<input id="prt" name="prt" type="text" class="form-control input-sm text-center cell" data-cell="AA1" data-format="0,0[.]00 %" data-formula="#workingdays!A7">
														</div>
														<div class="col-md-8">
															<!--
															<button id="" class="add_item btn btn-sm btn-primary float-right">Add Item</button>
															-->
														</div>
													</div>
													<table class="table-responsive" width="100%">
														<thead>
															<tr>
																<td style="width: 1%;" ><label>No.</label></td>
																<td style="width: 30%" class="text-center"><label>Description</label></td>
																<td style="width: 15%" class="text-center"><label>QTY</label></td>
																<td style="width: 10%" class="text-center"><label>Hourly Rate</label></td>
																<td style="width: 10%" class="text-center"><label>Fringe Cost Per Hour</label></td>
																<td style="width: 15%" class="text-center"><label>Cost Per Hour</label></td>
																<td style="width: 10%" class="text-center"><label>Per Diem Per Shift </label></td>
																<td style="width: 10%" class="text-center"><label>Cost Per Shift </label></td>
															</tr>
														</thead>
														<tbody id="laboritemlist">
															<!--
															<tr>
																<td><label data-cell="A1" data-format="0">1</label></td>
																<td><input name="labordescription[]" type="text" class="form-control input-sm text-center cell" data-cell="B1" value="Project Manager/QC" ></td>
																<td><input name="laborquantity[]" type="text" class="form-control input-sm text-center cell" data-cell="C1" data-format="0"></td>
																<td><input name="laborrate[]" type="text" class="form-control input-sm text-center cell" data-cell="D1" data-format="$ 0,0.00"></td>
																<td><input name="laborfringehour[]" type="text" class="form-control input-sm text-center cell" data-cell="E1" data-format="$ 0,0.00"></td>
																<td><input name="laborcostperhour[]" type="text" class="form-control input-sm text-center cell" data-cell="F1" data-format="$0,0[.]00" data-formula="(C1*(D1+E1)) * AA1" ></td>
																<td><input name="labordiemshift[]" type="text" class="form-control input-sm text-center cell" data-cell="G1" data-format="$ 0,0.00" value="0"></td>
																<td><input name="laborcostshift[]" type="text" class="form-control input-sm text-center cell" data-cell="H1" data-format="$0,0[.]00" data-formula="(F1*8)+(G1*C1)"></td>
															</tr>
															<tr>
																<td><label data-cell="A2" data-format="0">2</label></td>
																<td><input name="labordescription[]"	type="text" class="form-control input-sm text-center cell" data-cell="B2" value="Foreman"></td> 
																<td><input name="laborquantity[]"	type="text" class="form-control input-sm text-center cell" data-cell="C2" data-format="0"></td>
																<td><input name="laborrate[]"	type="text" class="form-control input-sm text-center cell" data-cell="D2" data-format="$ 0,0.00"></td>
																<td><input name="laborfringehour[]"	type="text"class="form-control input-sm text-center cell" data-cell="E2" data-format="$ 0,0.00"></td>
																<td><input name="laborcostperhour[]"	type="text" class="form-control input-sm text-center cell" data-cell="F2" data-format="$0,0[.]00" data-formula="(C2*(D2+E2)) * AA1"></td>
																<td><input name="labordiemshift[]"	type="text" class="form-control input-sm text-center cell" data-cell="G2" data-format="$ 0,0.00" value="0"></td>
																<td><input name="laborcostshift[]"	type="text" class="form-control input-sm text-center cell" data-cell="H2" data-format="$0,0[.]00" data-formula="(F2*8)+(G2*C2)"></td>
															</tr>
															<tr>
																<td><label data-cell="A3" data-format="0">3</label></td>
																<td><input name="labordescription[]"	type="text" class="form-control input-sm text-center cell" data-cell="B3" value="Point Man"></td> 
																<td><input name="laborquantity[]"	type="text" class="form-control input-sm text-center cell" data-cell="C3" data-format="0"></td>
																<td><input name="laborrate[]"	type="text" class="form-control input-sm text-center cell" data-cell="D3" data-format="$ 0,0.00"></td>
																<td><input name="laborfringehour[]"	type="text"class="form-control input-sm text-center cell" data-cell="E3" data-format="$ 0,0.00"></td>
																<td><input name="laborcostperhour[]"	type="text" class="form-control input-sm text-center cell" data-cell="F3" data-format="$0,0[.]00" data-formula="(C3*(D3+E3)) * AA1"></td>
																<td><input name="labordiemshift[]"	type="text" class="form-control input-sm text-center cell" data-cell="G3" data-format="$ 0,0.00" value="0"></td>
																<td><input name="laborcostshift[]"	type="text" class="form-control input-sm text-center cell" data-cell="H3" data-format="$0,0[.]00" data-formula="(F3*8)+(G3*C3)"></td>
															</tr>
															<tr>
																<td><label data-cell="A4" data-format="0">4</label></td>
																<td><input name="labordescription[]"	type="text" class="form-control input-sm text-center cell" data-cell="B4" value="Mix Man"></td>
																<td><input name="laborquantity[]"	type="text" class="form-control input-sm text-center cell" data-cell="C4" data-format="0"></td>
																<td><input name="laborrate[]"	type="text" class="form-control input-sm text-center cell" data-cell="D4" data-format="$ 0,0.00"></td>
																<td><input name="laborfringehour[]"	type="text" class="form-control input-sm text-center cell" data-cell="E4" data-format="$ 0,0.00"></td>
																<td><input name="laborcostperhour[]"	type="text" class="form-control input-sm text-center cell" data-cell="F4" data-format="$0,0[.]00" data-formula="(C4*(D4+E4)) * AA1"></td>
																<td><input name="labordiemshift[]"	type="text" class="form-control input-sm text-center cell" data-cell="G4" data-format="$ 0,0.00" value="0"></td>
																<td><input name="laborcostshift[]"	type="text" class="form-control input-sm text-center cell" data-cell="H4" data-format="$0,0[.]00" data-formula="(F4*8)+(G4*C4)"></td>
															</tr>
															<tr>
																<td><label data-cell="A5" data-format="0">5</label></td>
																<td><input name="labordescription[]"	type="text" class="form-control input-sm text-center cell" data-cell="B5" value="Loader Operator"></td> 
																<td><input name="laborquantity[]"	type="text" class="form-control input-sm text-center cell" data-cell="C5" data-format="0"></td>
																<td><input name="laborrate[]"	type="text" class="form-control input-sm text-center cell" data-cell="D5" data-format="$ 0,0.00"></td>
																<td><input name="laborfringehour[]"	type="text" class="form-control input-sm text-center cell" data-cell="E5" data-format="$ 0,0.00"></td>
																<td><input name="laborcostperhour[]"	type="text" class="form-control input-sm text-center cell" data-cell="F5" data-format="$0,0[.]00" data-formula="(C5*(D5+E5)) * AA1"></td>
																<td><input name="labordiemshift[]"	type="text" class="form-control input-sm text-center cell" data-cell="G5" data-format="$ 0,0.00" value="0"></td>
																<td><input name="laborcostshift[]"	type="text" class="form-control input-sm text-center cell" data-cell="H5" data-format="$0,0[.]00" data-formula="(F5*8)+(G5*C5)"></td>
															</tr>
															<tr>
																<td><label data-cell="A6" data-format="0">6</label></td>
																<td><input name="labordescription[]"	type="text" class="form-control input-sm text-center cell" data-cell="B6" value="Driller"></td>
																<td><input name="laborquantity[]"	type="text" class="form-control input-sm text-center cell" data-cell="C6" data-format="0"></td>
																<td><input name="laborrate[]"	type="text" class="form-control input-sm text-center cell" data-cell="D6" data-format="$ 0,0.00"></td>
																<td><input name="laborfringehour[]"	type="text" class="form-control input-sm text-center cell" data-cell="E6" data-format="$ 0,0.00"></td>
																<td><input name="laborcostperhour[]"	type="text" class="form-control input-sm text-center cell" data-cell="F6" data-format="$0,0[.]00" data-formula="(C6*(D6+E6)) * AA1"></td>
																<td><input name="labordiemshift[]"	type="text" class="form-control input-sm text-center cell" data-cell="G6" data-format="$ 0,0.00" value="0"></td>
																<td><input name="laborcostshift[]"	type="text" class="form-control input-sm text-center cell" data-cell="H6" data-format="$0,0[.]00" data-formula="(F6*8)+(G6*C6)"></td>
															</tr>
															<tr>
																<td><label data-cell="A7" data-format="0">7</label></td>
																<td><input name="labordescription[]"	type="text" class="form-control input-sm text-center cell" data-cell="B7" value="Chucker"></td>
																<td><input name="laborquantity[]"	type="text" class="form-control input-sm text-center cell" data-cell="C7" data-format="0"></td>
																<td><input name="laborrate[]"	type="text" class="form-control input-sm text-center cell" data-cell="D7" data-format="$ 0,0.00"></td>
																<td><input name="laborfringehour[]"	type="text" class="form-control input-sm text-center cell" data-cell="E7" data-format="$ 0,0.00"></td>
																<td><input name="laborcostperhour[]"	type="text" class="form-control input-sm text-center cell" data-cell="F7" data-format="$0,0[.]00" data-formula="(C7*(D7+E7)) * AA1"></td>
																<td><input name="labordiemshift[]"	type="text" class="form-control input-sm text-center cell" data-cell="G7" data-format="$ 0,0.00" value="0"></td>
																<td><input name="laborcostshift[]"	type="text" class="form-control input-sm text-center cell" data-cell="H7" data-format="$0,0[.]00" data-formula="(F7*8)+(G7*C7)"></td>
															</tr>
															<tr>
																<td><label data-cell="A8" data-format="0">8</label></td>
																<td><input name="labordescription[]"	type="text" class="form-control input-sm text-center cell" data-cell="B8" value="Laborer"></td>
																<td><input name="laborquantity[]"	type="text" class="form-control input-sm text-center cell" data-cell="C8" data-format="0"></td>
																<td><input name="laborrate[]"	type="text" class="form-control input-sm text-center cell" data-cell="D8" data-format="$ 0,0.00"></td>
																<td><input name="laborfringehour[]"	type="text" class="form-control input-sm text-center cell" data-cell="E8" data-format="$ 0,0.00"></td>
																<td><input name="laborcostperhour[]"	type="text" class="form-control input-sm text-center cell" data-cell="F8" data-format="$0,0[.]00" data-formula="(C8*(D8+E8)) * AA1"></td>
																<td><input name="labordiemshift[]"	type="text" class="form-control input-sm text-center cell" data-cell="G8" data-format="$ 0,0.00" value="0"></td>
																<td><input name="laborcostshift[]"	type="text" class="form-control input-sm text-center cell" data-cell="H8" data-format="$0,0[.]00" data-formula="(F8*8)+(G8*C8)"></td>
															</tr>
															<tr>
																<td><label data-cell="A9" data-format="0">9</label></td>
																<td><input name="labordescription[]"	type="text" class="form-control input-sm text-center cell" data-cell="B9" value="Mix Man"></td>
																<td><input name="laborquantity[]"	type="text" class="form-control input-sm text-center cell" data-cell="C9" data-format="0"></td>
																<td><input name="laborrate[]"	type="text" class="form-control input-sm text-center cell" data-cell="D9" data-format="$ 0,0.00"></td>
																<td><input name="laborfringehour[]"	type="text" class="form-control input-sm text-center cell" data-cell="E9" data-format="$ 0,0.00"></td>
																<td><input name="laborcostperhour[]"	type="text" class="form-control input-sm text-center cell" data-cell="F9" data-format="$0,0[.]00" data-formula="(C9*(D9+E9)) * AA1"></td>
																<td><input name="labordiemshift[]"	type="text" class="form-control input-sm text-center cell" data-cell="G9" data-format="$ 0,0.00" value="0"></td>
																<td><input name="laborcostshift[]"	type="text" class="form-control input-sm text-center cell" data-cell="H9" data-format="$0,0[.]00" data-formula="(F9*8)+(G9*C9)"></td>
															</tr>
															<tr>
																<td><label data-cell="A10" data-format="0">10</label></td>
																<td><input name="labordescription[]"	type="text" class="form-control input-sm text-center cell" data-cell="B10" value="Laborer (Apprentice)"></td>
																<td><input name="laborquantity[]"	type="text" class="form-control input-sm text-center cell" data-cell="C10" data-format="0"></td>
																<td><input name="laborrate[]"	type="text" class="form-control input-sm text-center cell" data-cell="D10" data-format="$ 0,0.00"></td>
																<td><input name="laborfringehour[]"	type="text" class="form-control input-sm text-center cell" data-cell="E10" data-format="$ 0,0.00"></td>
																<td><input name="laborcostperhour[]"	type="text" class="form-control input-sm text-center cell" data-cell="F10" data-format="$0,0[.]00" data-formula="(C10*(D10+E10)) * AA1"></td>
																<td><input name="labordiemshift[]"	type="text" class="form-control input-sm text-center cell" data-cell="G10" data-format="$ 0,0.00" value="0"></td>
																<td><input name="laborcostshift[]"	type="text" class="form-control input-sm text-center cell" data-cell="H10" data-format="$0,0[.]00" data-formula="(F10*8)+(G10*C10)"></td>
															</tr>
															-->
														</tbody>
														<tfoot>
															<tr >
																<td colspan="2">Total :</td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="AC" data-format="$ 0,0.00" data-formula="SUM(C1:C10)"></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="AD" data-format="$ 0,0.00" data-formula="SUM(D1:D10)"></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="AE" data-format="$ 0,0.00" data-formula="SUM(E1:E10)"></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="AF" data-format="$0,0[.]00" data-formula="SUM(F1:F10)"></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="AG" data-format="$ 0,0.00" data-formula="SUM(G1:G10)"></td>
																<td colspan="2"><input id="labor_total" class="form-control input-sm text-left cellblock" data-cell="AH"  data-format="$ 0,0.00" data-formula="SUM(H1:H100)" value="0"></td>
															</tr>
														</tfoot>
													</table>
											</div>
										</div>
									 </div>
									 <div class="tab-pane p-l-20 p-r-20" id="equip" role="tabpanel">
										<br>
										<div class="row">
													<label class="col-sm-2 col-form-label">Fuel Cost Per Gallon</label>
													<div class="col-sm-2">
														<input id="fuelpergal" name="fuelpergal" class="form-control input-sm text-center cell" data-cell="AI1" data-format="$ 0,0.00" data-formula="#workingdays!A8">
													</div>
													<div class="col-sm-8">
														<button id="mainequip" type="button" class="add_item btn btn-sm btn-primary float-right">Add Item</button>
													</div>
													
													<table class="table-responsive" width="100%">
														<thead>
															<tr>
																<td style="width: 1%;" ><label>No.</label></td>
																<td style="width: 30%" class="text-center"><label>Description</label></td>
																<td style="width: 15%" class="text-center"><label>QTY</label></td>
																<td style="width: 10%" class="text-center"><label>Rate/Hour</label></td>
																<td style="width: 10%" class="text-center"><label>Total Rate Shift</label></td>
																<td style="width: 15%" class="text-center"><label>Fuel Gal Shift</label></td>
																<td style="width: 10%" class="text-center"><label>Consumed Gal Shift</label></td>
																<td style="width: 10%" class="text-center"><label>Action </label></td>
															</tr>
														</thead>
														<tbody id="equipitemlist">
															<!--
															<tr>
																<td><label data-cell="I1" data-format="0">1</label></td>
																<td><input name="equipdescription[]"	class="form-control input-sm cell" data-cell="J1"></td>
																<td><input name="equipquantity[]" 	class="form-control input-sm text-center cell" data-cell="K1" data-format="0,0.00"></td>
																<td><input name="equipratehour[]" 	class="form-control input-sm text-center cell" data-cell="L1" data-format="$ 0,0.00"></td>
																<td><input name="equiprateshift[]" 	class="form-control input-sm text-center cell" data-cell="M1" data-format="$ 0,0.00" data-formula="(K1*L1)*8"></td>
																<td><input name="equipfuelgalshift[]" 	class="form-control input-sm text-center cell" data-cell="N1" data-format="$0,0[.]00"></td>
																<td><input name="equipconsumegalshift[]"	class="form-control input-sm text-center cell" data-cell="O1" data-format="$ 0,0.00" data-formula="(N1*K1)"></td>
																<td class="text-center"><button type="button" class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
															-->
														</tbody>
														<tbody>
															<tr>
																<td colspan="6">&nbsp;</td>
																<td colspan="2"><input id="totalmainequip" class="form-control input-sm text-center cell" data-cell="AO1" data-format="$ 0,0.00" data-formula="SUM(L1:L100)"></td>
															</tr>
															<tr>
																<td colspan="8">&nbsp;</td>
															</tr>
															<tr>
																<td colspan="7">
																	<label class="col-sm-2 col-form-label">Rental Equipments</label>
																</td>
																<td>
																	<button id="rentequip" type="button" class="add_item btn btn-sm btn-primary float-right">Add Item</button>
																</td>
															</tr>
															<tr>
																<td colspan="8">&nbsp;</td>
															</tr>
														</tbody>
														<tbody id="rentalitemlist">
															<!--
															<tr>
																<td><label data-cell="I101" data-format="0">1</label></td>
																<td><input name="rentequipdescription[]"	class="form-control input-sm cell" data-cell="J101"></td>
																<td><input name="rentequipquantity[]" 	class="form-control input-sm text-center cell" data-cell="K101" data-format="0,0.00"></td>
																<td><input name="rentequipratehour[]" 	class="form-control input-sm text-center cell" data-cell="L101" data-format="$ 0,0.00"></td>
																<td><input name="rentequiprateshift[]" 	class="form-control input-sm text-center cell" data-cell="M101" data-format="$ 0,0.00" data-formula="(K101*L101)*8"></td>
																<td><input name="rentequipfuelgalshift[]" 	class="form-control input-sm text-center cell" data-cell="N101" data-format="$0,0[.]00"></td>
																<td><input name="rentequipconsumegalshift[]" 	class="form-control input-sm text-center cell" data-cell="O101" data-format="$ 0,0.00" data-formula="(N101*K101)"></td>
																<td class="text-center"><button type="button" class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
															-->
														</tbody>
														<tfoot>
															<tr>
																<td colspan="6"></td>
																<td colspan="2"><input  class="form-control input-sm text-center cell" data-cell="EA2" data-format="$ 0,0.00" data-formula="SUM(M101:M200)"></td>
															</tr>
															</tr>
															<tr >
																<td colspan="2">Subtotal / Shift :</td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="IC" data-format="$ 0,0.00" data-formula="SUM(K1:K200)"></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="ID" data-format="$ 0,0.00" data-formula="SUM(L1:L200)"></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="IE" data-format="$ 0,0.00" data-formula="SUM(M1:M200)" ></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="IF" data-format="$0,0[.]00" data-formula="SUM(N1:N200)"></td>
																<td colspan="2"><input class="form-control input-sm text-left cellblock" data-cell="IG" data-format="$ 0,0.00" data-formula="SUM(O1:O200)" value="0"></td>
															</tr>
															<tr >
																<td colspan="4">Cost Plus **  *** :</td>
																<td><input name="costplus" id="costplus" class="form-control input-sm text-center cellblock" data-cell="IH" data-format="$ 0,0.00" data-formula="SUM((SUM(M1:M200) * 1.1) + (SUM(O1:O200) * 1.1 * AI1))"></td>
																<td colspan="2"></td>
															</tr>
															<tr >
																<td colspan="4">Total Cost Per Shift:</td>
																<td><input id="total_equip_cost_hour" name="total_equip_cost_hour" class="form-control input-sm text-center cellblock" data-cell="IJ" data-format="$ 0,0.00" data-formula="(SUM(M1:M200) * 1.1) + (SUM(O1:O200) * 1.1 * AI1)"></td>
																<td colspan="2"></td>
															</tr>
															<tr >
																<td colspan="4">Total Cost Per Hour :</td>
																<td><input id="total_equip_cost_shift" class="form-control input-sm text-center cellblock" data-cell="IK" data-format="$ 0,0.00" data-formula="((SUM(M1:M200) * 1.1) + (SUM(O1:O200) * 1.1 * AI1)) / 8"></td>
																<td colspan="2"></td>
															</tr>
														</tfoot>
													</table>
											
												<br>
												<div class="col-sm-12">
													<small>**Includes 10% for Equipment Repair & Replacement</small>
												</div>
												<div class="col-sm-12">
													<small>*** Includes 10% for Oil & Grease</small>
												</div>
										</div>
									 </div>
									 <div class="tab-pane p-l-20 p-r-20" id="material" role="tabpanel">
										<br>
										<div class="row">
														<div class="col-md-12">
															<button id="addmaterial" type="button" class="add_item btn btn-sm btn-primary float-right">Add Item</button>
														</div>
													</div>
													<br>
													<table class="table-responsive">
														<thead>
															<tr>
																<td style="width: 1%;" ><label>No.</label></td>
																<td style="width: 30%" class="text-center"><label>Description</label></td>
																<td style="width: 15%" class="text-center"><label>Units</label></td>
																<td style="width: 10%" class="text-center"><label>Quantity</label></td>
																<td style="width: 10%" class="text-center"><label>Cost / Unit</label></td>
																<td style="width: 15%" class="text-center"><label>Total Cost</label></td>
																<td style="width: 15%" class="text-center"><label>Action</label></td>
															</tr>
														</thead>
														<tbody id="materialitemlist">
															<!--
															<tr>
																<td><label data-cell="P1" data-format="0">1</label></td>
																<td><input name="materialdescription[]"  class="form-control input-sm text-center cell" data-cell="Q1" ></td>
																<td><input name="materialunits[]"  class="form-control input-sm text-center cell" data-cell="R1"></td>
																<td><input name="materialquantity[]"  class="form-control input-sm text-center cell" data-cell="S1" data-format="0,0.00"></td>
																<td><input name="materialcostperunit[]"  class="form-control input-sm text-center cell" data-cell="T1" data-format="$ 0,0.00"></td>
																<td><input name="materialtotalcost[]"  class="form-control input-sm text-center cell" data-cell="U1" data-format="$0,0[.]00" data-formula="(S1*T1)"></td>
																<td class="text-center"><button type="button" class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
															-->
														</tbody>
														<tfoot>
															<tr>
																<td colspan="5">Sub Total Material :</td>
																<td colspan="2"><input class="form-control input-sm text-center cell" data-cell="PA1" data-format="$ 0,0.00" data-formula="SUM(U1:U100)"></td>
															</tr>
															<tr>
																<td colspan="4">Sales Tax @ :</td>
																<td><input id="salestax" name="salestax" class="form-control input-sm text-center cell" data-cell="PB2" data-format="0,0[.]00 %" data-formula="#workingdays!A9"></td>
																<td colspan="2"><input class="form-control input-sm text-center cell" data-cell="PA2" data-format="$ 0,0.00" data-formula="(PA1 * PB2)" ></td>
															</tr>
															<tr>
																<td colspan="5">Total Material Cost :</td>
																<td colspan="2"><input class="form-control input-sm text-center cellblock" data-cell="PA4" data-format="$ 0,0.00" data-formula="SUM(PA1:PA2)" ></td>
															</tr>
														</tfoot>
													</table>
									 </div>
									 <div class="tab-pane p-l-20 p-r-20" id="misc" role="tabpanel">
									 <br>
										<div class="row">
														<div class="col-md-12">
															<button id="addmisc" type="button" class="add_item btn btn-sm btn-primary float-right">Add Item</button>
														</div>
													</div>
													<br>
													<table class="table-responsive">
														<thead>
															<tr>
																<td style="width: 1%;" ><label>No.</label></td>
																<td style="width: 30%" class="text-center"><label>Description</label></td>
																<td style="width: 15%" class="text-center"><label>Units</label></td>
																<td style="width: 10%" class="text-center"><label>Quantity</label></td>
																<td style="width: 10%" class="text-center"><label>Cost / Unit</label></td>
																<td style="width: 15%" class="text-center"><label>Total Cost</label></td>
																<td style="width: 15%" class="text-center"><label>Action</label></td>
															</tr>
														</thead>
														<tbody id="miscitemlist">
															<!--
															<tr>
																<td><label data-cell="A1" data-format="0">1</label></td>
																<td><input name="miscdescription[]" class="form-control input-sm text-center cell" data-cell="V1"></td>
																<td><input name="miscunits[]" class="form-control input-sm text-center cell" data-cell="W1"></td>
																<td><input name="miscquantity[]" class="form-control input-sm text-center cell" data-cell="X1" data-format="0,0.00"></td>
																<td><input name="misccostperunit[]" class="form-control input-sm text-center cell" data-cell="Y1" data-format="$ 0,0.00"></td>
																<td><input name="misctotalcost[]" class="form-control input-sm text-center cell" data-cell="Z1" data-format="$0,0[.]00" data-formula="(X1*Y1)"></td>
																<td class="text-center"><button type="button" class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
															-->
														</tbody>
														<tfoot>
															<tr>
																<td colspan="3">Total Misc Cost :</td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="VA1" data-format="$ 0,0.00" data-formula="SUM(X1:X100)"></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="VA2" data-format="$ 0,0.00" data-formula="SUM(Y1:Y100)"></td>
																<td colspan="2"><input class="form-control input-sm text-center cellblock" data-cell="VA3" data-format="$ 0,0.00" data-formula="SUM(Z1:Z100)"></td>
															
															</tr>
														</tfoot>
													</table>
									 </div>
									 <div class="tab-pane p-l-20 p-r-20" id="subcon" role="tabpanel">
									 <br>
													<div class="row">
														<div class="col-md-12">
															<button id="addsubcon" type="button" class="add_item btn btn-sm btn-primary float-right">Add Item</button>
														</div>
													</div>
													<br>
													<table class="table-responsive">
														<thead>
															<tr>
																<td style="width: 1%;" ><label>No.</label></td>
																<td style="width: 30%" class="text-center"><label>Subcontractor</label></td>
																<td style="width: 15%" class="text-center"><label>Type of Work</label></td>
																<td style="width: 15%" class="text-center"><label>Quote</label></td>
																<td style="width: 15%" class="text-center"><label>Action</label></td>
															</tr>
														</thead>
														<tbody id="subconitemlist">	
															<!--
															<tr>
																<td><label data-cell="A1" data-format="0">1</label></td>
																<td><input name="subcondesc[]" class="form-control input-sm cell" data-cell="BB1"></td>
																<td><input name="typeofwork[]" class="form-control input-sm cell" data-cell="BC1"></td>
																<td><input name="quote[]" class="form-control input-sm text-center cell" data-cell="BD1" data-format="$ 0,0.00"></td>
																<td class="text-center"><button type="button" class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
															-->
														</tbody>
														<tfoot>
															<tr>
																<td colspan="3">Total SubContracts :</td>
																<td colspan="2"><input class="form-control input-sm text-center cellblock" data-cell="BE1" data-format="$ 0,0.00" data-formula="SUM(BD1:BD100)"></td>
															</tr>
														</tfoot>
													</table>
									 </div>
									 <div class="tab-pane p-l-20 p-r-20" id="bidsum" role="tabpanel">
										<br>
										<div class="row">
											<div class="col-md-12">
											<table class="table-responsive">
														<thead>
															<tr>
																<td style="width: 1%;" ><label>No.</label></td>
																<td style="width: 30%" class="text-center"><label>Description</label></td>
																<td style="width: 15%" class="text-center"><label>-</label></td>
																<td style="width: 10%" class="text-center"><label>Cost</label></td>
																<td style="width: 10%" class="text-center"><label>Mark Up %</label></td>
																<td style="width: 15%" class="text-center"><label>Total</label></td>
															</tr>
														</thead>
														<tbody id="bidsumitemlist">	
															<tr>
																<td><label data-cell="BF1" data-format="0">1</label></td>
																<td><input name="bidsumdescription[]" class="form-control input-sm text-center cell" data-cell="BG1" value="Labor"></td>
																<td><input name="bidsumsubdesc[]" class="form-control input-sm text-center cell" data-cell="BH1" value="Per Hour"></td>
																<td><input id="bid_labor_hour" name="bidsumcost[]" class="form-control input-sm text-center cell" data-cell="BI1" data-format="$ 0,0.00" data-formula="SUM(H1:H100) / 8"></td>
																<td><input name="bidsummarkup[]" class="form-control input-sm text-center cell" data-cell="BJ1" data-format="0,0.00 %" value="140"></td>
																<td><input name="bidsumtotalbid[]" class="form-control input-sm text-center cell" data-cell="BK1" data-format="$0,0[.]00" data-formula="(BJ1*BI1)"></td>
															</tr>
															<tr>
																<td><label data-cell="BF2" data-format="0">2</label></td>
																<td><input name="bidsumdescription[]" class="form-control input-sm text-center cell" data-cell="BG2" value="Labor"></td>
																<td><input name="bidsumsubdesc[]" class="form-control input-sm text-center cell" data-cell="BH2" value="Per Shift"></td>
																<td><input id="bid_labor_shift" name="bidsumcost[]" class="form-control input-sm text-center cell" data-cell="BI2" data-format="$ 0,0.00" data-formula="SUM(H1:H100)"></td>
																<td><input name="bidsummarkup[]" class="form-control input-sm text-center cell" data-cell="BJ2" data-format="0,0.00 %" value="140"></td>
																<td><input name="bidsumtotalbid[]" class="form-control input-sm text-center cell" data-cell="BK2" data-format="$0,0[.]00" data-formula="(BJ2*BI2)"></td>
															</tr>
															<tr>
																<td><label data-cell="BF3" data-format="0">3</label></td>
																<td><input name="bidsumdescription[]" class="form-control input-sm text-center cell" data-cell="BG3" value="Equipment"></td>
																<td><input name="bidsumsubdesc[]" class="form-control input-sm text-center cell" data-cell="BH3" value="Per/Hour"></td>
																<td><input id="bid_equip_hour"  name="bidsumcost[]" class="form-control input-sm text-center cell" data-cell="BI3" data-format="$ 0,0.00" data-formula="((SUM(M1:M200) * 1.1) + (SUM(O1:O200) * 1.1 * AI1)) / 8"></td>
																<td><input name="bidsummarkup[]" class="form-control input-sm text-center cell" data-cell="BJ3" data-format="0,0.00 %" value="140"></td>
																<td><input name="bidsumtotalbid[]" class="form-control input-sm text-center cell" data-cell="BK3" data-format="$0,0[.]00" data-formula="(BJ3*BI3)"></td>
															</tr>
															<tr>
																<td><label data-cell="BF4" data-format="0">4</label></td>
																<td><input name="bidsumdescription[]" class="form-control input-sm text-center cell" data-cell="BG4" value="Equipment"></td>
																<td><input name="bidsumsubdesc[]" class="form-control input-sm text-center cell" data-cell="BH4" value="Per/Shift"></td>
																<td><input id="bid_equip_shift" name="bidsumcost[]"  class="form-control input-sm text-center cell" data-cell="BI4" data-format="$ 0,0.00" data-formula="((SUM(M1:M200) * 1.1) + (SUM(O1:O200) * 1.1 * AI1))"></td>
																<td><input name="bidsummarkup[]" class="form-control input-sm text-center cell" data-cell="BJ4" data-format="0,0.00 %" value="140"></td>
																<td><input name="bidsumtotalbid[]" class="form-control input-sm text-center cell" data-cell="BK4" data-format="$0,0[.]00" data-formula="(BJ4*BI4)"></td>
															</tr>
															<tr>
																<td><label data-cell="BF5" data-format="0">5</label></td>
																<td><input name="bidsumdescription[]" class="form-control input-sm text-center cell" data-cell="BG5" value="Materials"></td>
																<td><input name="bidsumsubdesc[]" class="form-control input-sm text-center cell" data-cell="BH5" value=""></td>
																<td><input id="bid_material_total" name="bidsumcost[]"  class="form-control input-sm text-center cell" data-cell="BI5" data-format="$ 0,0.00" data-formula="SUM(PA1:PA2)"></td>
																<td><input name="bidsummarkup[]" class="form-control input-sm text-center cell" data-cell="BJ5" data-format="0,0.00 %" value="140"></td>
																<td><input name="bidsumtotalbid[]" class="form-control input-sm text-center cell" data-cell="BK5" data-format="$0,0[.]00" data-formula="(BJ5*BI5)"></td>
															</tr>
															<tr>
																<td><label data-cell="BF6" data-format="0">6</label></td>
																<td><input name="bidsumdescription[]" class="form-control input-sm text-center cell" data-cell="BG6" value="Misc"></td>
																<td><input name="bidsumsubdesc[]" class="form-control input-sm text-center cell" data-cell="BH6" value=""></td>
																<td><input id="bid_misc_total" name="bidsumcost[]" class="form-control input-sm text-center cell" data-cell="BI6" data-format="$ 0,0.00" data-formula="SUM(Z1:Z100)"></td>
																<td><input name="bidsummarkup[]" class="form-control input-sm text-center cell" data-cell="BJ6" data-format="0,0.00 %" value="140"></td>
																<td><input name="bidsumtotalbid[]" class="form-control input-sm text-center cell" data-cell="BK6" data-format="$0,0[.]00" data-formula="(BJ6*BI6)"></td>
															</tr>
															<tr>
																<td><label data-cell="BF7" data-format="0">7</label></td>
																<td><input name="bidsumdescription[]" class="form-control input-sm text-center cell" data-cell="BG7" value="SubContract"></td>
																<td><input name="bidsumsubdesc[]" class="form-control input-sm text-center cell" data-cell="BH7" value=""></td>
																<td><input id="bid_subcon_total" name="bidsumcost[]"  class="form-control input-sm text-center cell" data-cell="BI7" data-format="$ 0,0.00" data-formula="SUM(BD1:BD100)"></td>
																<td><input name="bidsummarkup[]" class="form-control input-sm text-center cell" data-cell="BJ7" data-format="0,0.00 %" value="140"></td>
																<td><input name="bidsumtotalbid[]" class="form-control input-sm text-center cell" data-cell="BK7" data-format="$0,0[.]00" data-formula="(BJ7*BI7)"></td>
															</tr>
														</tbody>
														<tfoot>
															<tr>
																<td colspan="3">Total :</td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="BI100" data-format="$ 0,0.00" data-formula="SUM(BI1:BI50)"></td>
																<td>&nbsp;</td>
																<td colspan="2"><input class="form-control input-sm text-center cellblock" data-cell="BK100" data-format="$ 0,0.00" data-formula="SUM(BK1:BK7)"></td>
															</tr>
														</tfoot>
													</table>
												</div>
												<br>
												<div class="col-md-6">
													<table class="table-responsive">
														<thead>
															<tr>
																
															</tr>
														</thead>
														<tbody>
															<tr>
																<td><label>Labor Std.</label></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="BL1" data-format="$ 0,0.00" data-formula="BI2 * #workingdays!A1"></td>
															</tr>
															<tr>
																<td><label>Labor 1.5</label></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="BL2" data-format="$ 0,0.00" data-formula="(BI2 * 1.5) * #workingdays!A2"></td>
															</tr>
															<tr>
																<td><label>Labor 2</label></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="BL3" data-format="$ 0,0.00" data-formula="(BI2 * 2) * #workingdays!A3"></td>
															</tr>
															<tr>
																<td><label>Equipment</label></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="BL4" data-format="$ 0,0.00" data-formula="BI4 * (#workingdays!A1 + #workingdays!A2 + #workingdays!A3)"></td>
															</tr>
															<tr>
																<td><label>Materials</label></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="BL5" data-format="$ 0,0.00" data-formula="BI5"></td>
															</tr>
															<tr>
																<td><label>Misc</label></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="BL6" data-format="$ 0,0.00" data-formula="VA3"></td>
															</tr>
															<tr>
																<td><label>SubContract</label></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="BL7" data-format="$ 0,0.00" data-formula="BE1"></td>
															</tr>
														</tbody>
														<tfoot>
															<hr>
															<tr>
																<td><label>Total Cost</label></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="BL8" data-format="$ 0,0.00" data-formula="SUM(BL1:BL7)"></td>
															</tr>
														</tfoot>
													</table>
												</div>
												
												<div class="col-md-6">
													<table class="table-responsive">
														<thead>
															<tr>
																
															</tr>
														</thead>
														<tbody>
															<tr>
																<td><label>Labor Std.</label></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="BM1" data-format="$ 0,0.00" data-formula="BK2 * #workingdays!A1"></td>
															</tr>
															<tr>
																<td><label>Labor 1.5</label></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="BM2" data-format="$ 0,0.00" data-formula="(BK2 * 1.5) * #workingdays!A2"></td>
															</tr>
															<tr>
																<td><label>Labor 2</label></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="BM3" data-format="$ 0,0.00" data-formula="(BK2 * 2) * #workingdays!A3"></td>
															</tr>
															<tr>
																<td><label>Equipment</label></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="BM4" data-format="$ 0,0.00" data-formula="BK4 * (#workingdays!A1 + #workingdays!A2 + #workingdays!A3)"></td>
															</tr>
															<tr>
																<td><label>Materials</label></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="BM5" data-format="$ 0,0.00" data-formula="BK5"></td>
															</tr>
															<tr>
																<td><label>Misc</label></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="BM6" data-format="$ 0,0.00" data-formula="BK6"></td>
															</tr>
															<tr>
																<td><label>SubContract</label></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="BM7" data-format="$ 0,0.00" data-formula="BK7"></td>
															</tr>
														</tbody>
														<tfoot>
															<hr>
															<tr>
																<td><label>Total Bid</label></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="BM8" data-format="$ 0,0.00" data-formula="SUM(BM1:BM7)"></td>
															</tr>
														</tfoot>
													</table>
												</div>
										</div>
									 </div>
									 <div class="tab-pane p-l-20 p-r-20" id="jobbudj" role="tabpanel">
										<br>
										<div class="row">
											<table class="table-responsive">
														<thead>
															<tr>
																<td style="width: 1%;" ><label>No.</label></td>
																<td style="width: 30%" class="text-center"><label>Description</label></td>
																<td style="width: 15%" class="text-center"><label>Budget</label></td>
																<td style="width: 15%" class="text-center"><label>%</label></td>
																<td style="width: 15%" class="text-center"><label>Actual</label></td>
															</tr>
														</thead>
														<tbody id="jobcostitemlist">	
															<tr>
																<td><label data-cell="CA1" data-format="0">1</label></td>
																<td><label data-cell="CB1" data-format="0">Misc</label></td>
																<td><input  class="form-control input-sm text-center cell" data-cell="CC1" data-format="$ 0,0.00" data-formula="BK6"></td>
																<td><input  class="form-control input-sm text-center cell" data-cell="CD1" data-format="0,0[.]00 %" data-formula="CF1 / CC1"></td>
																<td><input name="actualmisc" id="actualmisc" class="form-control input-sm text-center cell" data-cell="CE1" data-format="$ 0,0.00"></td>
															</tr>
															<tr>
																<td><label data-cell="CA2" data-format="0">2</label></td>
																<td><label data-cell="CB2" data-format="0">Labor</label></td>
																<td><input  class="form-control input-sm text-center cell" data-cell="CC2" data-format="$ 0,0.00" data-formula="BM1 + BM2 + BM3"></td>
																<td><input  class="form-control input-sm text-center cell" data-cell="CD2" data-format="0,0[.]00 %" data-formula="CF1 / CC2"></td>
																<td><input name="actuallabor" id="actuallabor" class="form-control input-sm text-center cell" data-cell="CE2" data-format="$ 0,0.00"></td>
															</tr>
															<tr>
																<td><label data-cell="CA3" data-format="0">3</label></td>
																<td><label data-cell="CB3" data-format="0">Equipment</label></td>
																<td><input  class="form-control input-sm text-center cell" data-cell="CC3" data-format="$ 0,0.00" data-formula="BM4"></td>
																<td><input  class="form-control input-sm text-center cell" data-cell="CD3" data-format="0,0[.]00 %" data-formula="CF1 / CC3"></td>
																<td><input name="actualequipment" id="actualequipment" class="form-control input-sm text-center cell" data-cell="CE3" data-format="$ 0,0.00"></td>
															</tr>
															<tr>
																<td><label data-cell="CA4" data-format="0">4</label></td>
																<td><label data-cell="CB4" data-format="0">Material</label></td>
																<td><input  class="form-control input-sm text-center cell" data-cell="CC4" data-format="$ 0,0.00" data-formula="BK5"></td>
																<td><input  class="form-control input-sm text-center cell" data-cell="CD4" data-format="0,0[.]00 %" data-formula="CF1 / CC4"></td>
																<td><input name="actualmaterial" id="actualmaterial" class="form-control input-sm text-center cell" data-cell="CE4" data-format="$ 0,0.00"></td>
																
															</tr>
															<tr>
																<td><label data-cell="CA5" data-format="0">5</label></td>
																<td><label data-cell="CB5" data-format="0">SubContractor</label></td>
																<td><input  class="form-control input-sm text-center cell" data-cell="CC5" data-format="$ 0,0.00"  data-formula="BK7"></td>
																<td><input  class="form-control input-sm text-center cell" data-cell="CD5" data-format="0,0[.]00 %" data-formula="CF1 / CC5"></td>
																<td><input name="actualsubcon" id="actualsubcon" class="form-control input-sm text-center cell" data-cell="CE5" data-format="$ 0,0.00"></td>
															</tr>
														</tbody>
														<tfoot>
															<tr>
																<td colspan="2">Total Estimated Income:</td>
																<td ><input class="form-control input-sm text-center cellblock" data-cell="CF1" data-format="$ 0,0.00" data-formula="SUM(CC1:CC10)"></td>
																<td ><input class="form-control input-sm text-center cellblock" data-cell="CG1" data-format="0,0[.]00 %" data-formula="SUM(CD1:CD10)"></td>
																<td ><input class="form-control input-sm text-center cellblock" data-cell="CI1" data-format="$ 0,0.00" data-formula="SUM(CE1:CE10)"></td>
															</tr>
															<tr>
																<td colspan="5"></td>
															</tr>
															<tr>
																<td colspan="5"></td>
															</tr>
															<tr>
																<td colspan="5">JOB COST</td>
															</tr>
															<tr>
																<td colspan="2">Labor</td>
																<td><input  class="form-control input-sm text-center cell" data-cell="CH10" data-format="$ 0,0.00" data-formula="BL1 + BL2 + BL3"></td>
																<td class="text-center">-</td>
																<td><input name="jblabor" id="jblabor" class="form-control input-sm text-center cell" data-cell="CI10" data-format="$ 0,0.00"></td>
															</tr>
															<tr>
																<td colspan="2">Misc</td>
																<td><input  class="form-control input-sm text-center cell" data-cell="CH11" data-format="$ 0,0.00" data-formula="BL6"></td>
																<td class="text-center">-</td>
																<td><input name="jbmisc" id="jbmisc" class="form-control input-sm text-center cell" data-cell="CI11" data-format="$ 0,0.00"></td>
															</tr>
															<tr>
																<td colspan="2">Permanent Materials</td>
																<td><input  class="form-control input-sm text-center cell" data-cell="CH12" data-format="$ 0,0.00" data-formula="BL5"></td>
																<td class="text-center">-</td>
																<td><input name="jbpermmaterial" id="jbpermmaterial" class="form-control input-sm text-center cell" data-cell="CI12" data-format="$ 0,0.00"></td>
															</tr>
															<tr>
																<td colspan="2">Supplies/Incidentials/Fuel</td>
																<td><input id="supfuelmix" class="form-control input-sm text-center cell" data-cell="CH13" data-format="$ 0,0.00" data-formula="(SUM(O1:O200) * #workingdays!A8) * #workingdays!A4"></td>
																<td class="text-center">-</td>
																<td><input name="jbsupplies" id="jbsupplies" class="form-control input-sm text-center cell" data-cell="CI13" data-format="$ 0,0.00"></td>
															</tr>
															<tr>
																<td colspan="2">Outside Equipment Rental</td>
																<td><input class="form-control input-sm text-center cell" data-cell="CH14" data-format="$ 0,0.00" data-formula="EA2 * #workingdays!A4"></td>
																<td class="text-center">-</td>
																<td><input name="jboutequip" id="jboutequip" class="form-control input-sm text-center cell" data-cell="CI14" data-format="$ 0,0.00"></td>
															</tr>
															<tr>
																<td colspan="2">Subsistence/Per Diem</td>
																<td><input id="subsperdiem"  class="form-control input-sm text-center cell" data-cell="CH15" data-format="$ 0,0.00" data-formula="AG * #workingdays!A4"></td>
																<td class="text-center">-</td>
																<td><input name="jbsubstence" id="jbsubstence" class="form-control input-sm text-center cell" data-cell="CI15" data-format="$ 0,0.00"></td>
															</tr>
															<tr>
																<td colspan="2">Back Charges</td>
																<td><input  class="form-control input-sm text-center cell" data-cell="CH16" data-format="$ 0,0.00"></td>
																<td class="text-center">-</td>
																<td><input name="jbbackcharge" id="jbbackcharge" class="form-control input-sm text-center cell" data-cell="CI16" data-format="$ 0,0.00"></td>
															</tr>
															<tr>
																<td colspan="5">&nbsp;</td>
															</tr>
															<tr>
																<td colspan="2">Total Job Costs</td>
																<td><input  class="form-control input-sm text-center cell" data-cell="CH17" data-format="$ 0,0.00" data-formula="SUM(CH10:CH16)"></td>
																<td >Total Actual Cost</td>
																<td><input  class="form-control input-sm text-center cell" data-cell="CI17" data-format="$ 0,0.00" data-formula="SUM(CI10:CI16)"></td>
															</tr>
															<tr>
																<td colspan="5"><hr></td>
															</tr>
															
															<tr>
																<td colspan="2">Gross Margin</td>
																<td><input name="grossmargin" class="form-control input-sm text-center cell" data-cell="CH18" data-format="$ 0,0.00" data-formula="CF1 - CH17"></td>
																<td >Percent:</td>
																<td><input class="form-control input-sm text-center cell" data-cell="CI18" data-format="0,0[.]00 %" data-formula="CH18 / CF1"></td>
															</tr>
															<tr>
																<td colspan="2">Internal Equipment Charge</td>
																<td><input name="internalequip"  class="form-control input-sm text-center cell" data-cell="CH19" data-format="$ 0,0.00"  data-formula="SUM(M1:M200) * #workingdays!A4"></td>
															</tr>
															<tr>
																<td colspan="2">Contribution to O/H Profit</td>
																<td><input name="ohprofit" class="form-control input-sm text-center cell" data-cell="CH20" data-format="$ 0,0.00" data-formula="CH18 - CH19"></td>
																<td >Percent:</td>
																<td><input  class="form-control input-sm text-center cell" data-cell="CI20" data-format="0,0[.]00 %" data-formula="CH20 / CF1"></td>
															</tr>
														</tfoot>
													</table>
										</div>
									 </div>
								  </div>
						</div>
						<br>
						<br>
						<div class="col-3">
								<div class="row">
									<?php if($showitem == "build"):?>
										<button id="btnBuild" type="submit" class="btn btn-primary" style="width:98%;">Create Project</button>
										<a id="btnewestimate" href="<?php echo base_url('estimation/build'); ?>" class="btn btn-primary" style="width:98%" >Create New Estimation</a>
									<?php else:?>
										<a href="<?php echo base_url('estimation/preview'); ?>" class="btn btn-primary" style="width:98%" >Back To List</a>
									<?php endif;?>
								</div>
								<br>
								<h4 class="card-title">Quick Summary</h4>
								<hr>
									<div class="row">
										<div class="col-6">
												 <label>Labor Std.</label>
											</div>
											<div class="col-6">
												 <label><input id="qck_lbrstd" name="qslaborstd" class="form-control input-sm cell text-center" data-cell="BN1"  data-format="$ 0,0[.]00" data-formula="BM1" ></label>
											</div>
											
											<div class="col-6">
												 <label>Labor 1.5</label>
											</div>
											<div class="col-6">
												 <label><input id="qck_lbrstd15" name="qslabor1" class="form-control input-sm cell text-center" data-cell="BN2"  data-format="$ 0,0[.]00" data-formula="(BK2 * 1.5) * #workingdays!A2"></label>
											</div>
											
											<div class="col-6">
												 <label>Labor 2</label>
											</div>
											<div class="col-6">
												 <label><input id="qck_lbrstd2" name="qslabor2" class="form-control input-sm cell text-center" data-cell="BN3"  data-format="$ 0,0[.]00" data-formula="(BK2 * 2) * #workingdays!A3"></label>
											</div>
											
											<div class="col-6">
												 <label>Equipment</label>
											</div>
											<div class="col-6">
												 <label><input id="qck_equip" name="qsequipment" class="form-control input-sm cell text-center" data-cell="BN4"  data-format="$ 0,0[.]00" data-formula="BK4 * (#workingdays!A1 + #workingdays!A2 + #workingdays!A3)"></label>
											</div>
											
											<div class="col-6">
												 <label>Materials</label>
											</div>
											<div class="col-6">
												 <label><input id="qck_material" name="qsmaterial" class="form-control input-sm cell text-center" data-cell="BN5"  data-format="$ 0,0[.]00" data-formula="BK5"></label>
											</div>
											
											<div class="col-6">
												 <label>Mobilization</label>
											</div>
											<div class="col-6">
												 <label><input id="qck_mobil" name="qsmobilization"  class="form-control input-sm cell text-center" data-cell="BN6"  data-format="$ 0,0[.]00" data-formula="BK6"></label>
											</div>
											
											<div class="col-6">
												 <label>Subcontracts</label>
											</div>
											<div class="col-6">
												 <label><input id="qck_subcon" name="qssubcontract" class="form-control input-sm cell text-center" data-cell="BN7"  data-format="$ 0,0[.]00" data-formula="BK7"></label>
											</div>
											<div class="col-12">
												<hr>
											</div>
											<div class="col-6">
												 <label>Total Bid</label>
											</div>
											<div class="col-6">
												 <label><input class="form-control input-sm cell text-center" data-cell="BN8"  data-format="$0,0[.]00" data-formula="SUM(BN1:BN7)"></label>
											</div>
									</div>
									<br>
									<div class="row">
										<div class="col-12">
											<h4 class="card-title">Other Data</h4>
											<hr>
												<div class="row">
													<div class="col-6">
														 <label>LIABILITY INS.</label>
													</div>
													<div class="col-6">
														 <label><input id="liabilities" name="qsliabilities" class="form-control input-sm cell text-center" data-cell="BN9"  data-format="$0,0[.]00" data-formula="BN8 * 1.85"></label>
													</div>
													<div class="col-6">
														 <label>Price/CF</label>
													</div>
													<div class="col-6">
														 <label><input name="qspricecf" class="form-control input-sm cell text-center" data-cell="BN10"  data-format="$0,0[.]00" data-formula="BN8 / #workingdays!A5"></label>
													</div>
													<div class="col-6">
														 <label>Price/Pt</label>
													</div>
													<div class="col-6">
														 <label><input name="qspricept" class="form-control input-sm cell text-center" data-cell="BN11"  data-format="$0,0[.]00" data-formula="BN8 / #workingdays!A6"></label>
													</div>
												</div>
										</div>
									</div>
							</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--
		<div id="stickysummary" class="col-md-3">
				<div class="stickyside is_stuck card">
					<div class="card-body">
						<div class="row">
							
						</div>
					</div>
				</div>
			</div>
		-->
	</form><!-- end of estimation master -->
</div>
		
		<footer class="footer">
			© 2018 Geo Grout Inc
		</footer>
</div>

<script>
	$(document).ready(function() {
		var today  = new Date();
		var act = $('#action').text();
		getEstimateList();
		getworktype();
		getprojectname();
		$("#btnewestimate").hide();
		if(act == "Build"){
			$('#estimatetable').hide();
			$('#estimateinfo').show();
			$('#estimatebreakdown').hide();
		}else{
			$('#estimatetable').show();
			$('#estimateinfo').hide();
			$('#estimatebreakdown').hide();
		}
		$(".preloader").fadeOut();
		$('#estimateddate').val(today.toLocaleDateString("en-US"));
		
		<?php 
			if($this->session->flashdata('global_message') != "") {
				echo $this->session->flashdata('global_message');
			}
		?>
		
	});	
	
	function getworktype(){
		$.get('<?php echo base_url('estimation/crud/retrieve/typeofwork'); ?>')
		.done(function(data) {
			$('#typeofwork').html(data);
		});
	}
	
	function getprojectname(){
		$.get('<?php echo base_url('estimation/crud/retrieve/showProjName'); ?>')
		.done(function(data) {
			$('#projectname').html(data);
		});
	}
	
	function getprjdata(){
		var id = $('#projectname').val();
		$.get('<?php echo base_url(); ?>' + 'estimation/crud/retrieve/showProjData/' + id)
		.done(function(response) {
			var js = JSON.parse(response);
			$.each(js['data'], function(key, value){
				$('#projecttype').val(value.project_type);
				$('#client').val(value.client_name);
				$('#location').val(value.location);
			});
		});
	}
	
	function itemremove(me){
		me.closest('tr').remove();
		$('#estimationmaster').calx();
	}
	
	$('#estimationmaster').calx();
	$('#workingdays').calx();
	
	var laborno = 0;
	var sbitem = 0;
	var mscitem = 0;
	var matitem = 0;
	var ownequipitem = 0;
	var rentequipitem = 100;
	var bidsum = 0;
	
	$('#workingdays').submit(function(e){
		e.preventDefault();
		if($('#projectname').val() == null ||$('#typeofwork').val() == null){
			swal(
					'Oopps!',
					'Please Specify Proect Name and Work Type',
					'error'
				);
			return false;
		}
		
		swal({   
            title: "Are you sure you want to Create this record?",   
            text: "You will be creating a new instance set of Data!",   
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
				 $formdata = $('#workingdays').serialize();
				$.post('<?php echo base_url('estimation/crud/create/projectestimate'); ?>', {formdata: $formdata, admin_id: 1})
				.done(function(data) {
					var code = data.replace(/success:/i, '');
					$('#projectcode').html(code);
					showbreakdown();
					swal(
						  'Good job!',
						  'You Created Project Code :' + data,
						  'success'
					);
					buildusingtemplate();
					$(".preloader").fadeOut();
				});
            } else {     
                swal("Cancelled", "", "error");   
            } 
        });
	});
	
	$('#estimationmaster').submit(function(e){
		e.preventDefault();
		
		swal({   
            title: "Are you sure you want to Build this record?",   
            text: "Are you sure all the Items were Correct?!",   
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
				$(".preloader").show();
				$formdata = $('#estimationmaster').serialize();
				$.post('<?php echo base_url('estimation/crud/create/projectdetails'); ?>', {formdata: $formdata, admin_id: 1, code: $('#projectcode').html(),})
				.done(function(data) {
					$(".preloader").fadeOut();
					swal(
						  'Good job!',
						  'You Created Project Code :' + data,
						  'success'
					);
					$("#btnewestimate").show();
					$('.add_item').hide();
					$('#btnBuild').hide();
				});
				
            } else {     
                swal("Cancelled", "", "error");   
            } 
        });
		
	});
	
	function showbreakdown(){
		$('#estimatebreakdown').toggle();
		$('#estimateinfo').toggle();
	}
	
	$('#addsubcon').click(function(e){
		sbitem++;
		if(sbitem > 99){
			swal('Max Items Reached', 'You have reached the allowable items to be added', 'error');
			return false;
		}
		
		$('#estimationmaster').calx('destroy');
		var i = sbitem;
		var itemlist = $('#subconitemlist');
		itemlist.append('<tr>\
							<td><label data-cell="A'+ i +'<" data-format="0">'+ i +'</label></td>\
							<td><input name="subcondesc[]" class="form-control input-sm cell" data-cell="BB'+ i +'"></td>\
							<td><input name="typeofwork[]" class="form-control input-sm cell" data-cell="BC'+ i +'"></td>\
							<td><input name="quote[]" class="form-control input-sm text-center cell" data-cell="BD'+ i +'" data-format="$ 0,0.00"></td>\
							<td class="text-center"><button type="button" class="btn-remove btn btn-sm btn-danger" onclick="itemremove($(this));"><i class="fa fa-times fa-fw"></i></button></td>\
						</tr>');
		$('#estimationmaster').calx();
	});
	
	$('#addmisc').click(function(e){
		mscitem++;
		
		if(mscitem > 99){
			swal('Max Items Reached', 'You have reached the allowable items to be added', 'error');
			return false;
		}
		$('#estimationmaster').calx('destroy');
		var i = mscitem;
		var itemlist = $('#miscitemlist');
		itemlist.append('<tr>\
							<td><label data-cell="W'+ i +'" data-format="0">'+ i +'</label></td>\
							<td><input name="miscdescription[]" class="form-control input-sm text-center cell" data-cell="V'+ i +'"></td>\
							<td><input name="miscunits[]" class="form-control input-sm text-center cell" data-cell="W'+ i +'"></td>\
							<td><input name="miscquantity[]" class="form-control input-sm text-center cell" data-cell="X'+ i +'" data-format="0,0.00"></td>\
							<td><input name="misccostperunit[]" class="form-control input-sm text-center cell" data-cell="Y'+ i +'" data-format="$ 0,0.00"></td>\
							<td><input name="misctotalcost[]" class="form-control input-sm text-center cell" data-cell="Z'+ i +'" data-format="$0,0[.]00" data-formula="(X'+ i +'*Y'+ i +')"></td>\
							<td class="text-center"><button type="button" class="btn-remove btn btn-sm btn-danger" onclick="itemremove($(this));"><i class="fa fa-times fa-fw"></i></button></td>\
						</tr>');
		$('#estimationmaster').calx();
	});
	
	
	$('#addmaterial').click(function(e){
		matitem++;
		
		if(matitem > 99){
			swal('Max Items Reached', 'You have reached the allowable items to be added', 'error');
			return false;
		}
		
		$('#estimationmaster').calx('destroy');
		var i = matitem;
		var itemlist = $('#materialitemlist');
		itemlist.append('<tr>\
							<td><label data-cell="P'+ i +'" data-format="0">'+ i +'</label></td>\
							<td><input name="materialdescription[]"  class="form-control input-sm text-center cell" data-cell="Q'+ i +'" ></td>\
							<td><input name="materialunits[]"  class="form-control input-sm text-center cell" data-cell="R'+ i +'"></td>\
							<td><input name="materialquantity[]"  class="form-control input-sm text-center cell" data-cell="S'+ i +'" data-format="0,0.00"></td>\
							<td><input name="materialcostperunit[]"  class="form-control input-sm text-center cell" data-cell="T'+ i +'" data-format="$ 0,0.00"></td>\
							<td><input name="materialtotalcost[]"  class="form-control input-sm text-center cell" data-cell="U'+ i +'" data-format="$0,0[.]00" data-formula="(S'+ i +'*T'+ i +')"></td>\
							<td class="text-center"><button type="button" class="btn-remove btn btn-sm btn-danger" onclick="itemremove($(this));"><i class="fa fa-times fa-fw"></i></button></td>\
						</tr>');
		$('#estimationmaster').calx();
	});
	
	
	$('#mainequip').click(function(e){
		ownequipitem++;
		
		if(ownequipitem > 99){
			swal('Max Items Reached', 'You have reached the allowable items to be added', 'error');
			return false;
		}
		$('#estimationmaster').calx('destroy');
		var i = ownequipitem;
		var itemlist = $('#equipitemlist');
		itemlist.append('<tr>\
							<td><label data-cell="I'+ i +'" data-format="0">'+ i +'</label></td>\
							<td><input name="equipdescription[]"	class="form-control input-sm cell" data-cell="J'+ i +'"></td>\
							<td><input name="equipquantity[]" 	class="form-control input-sm text-center cell" data-cell="K'+ i +'" data-format="0,0.00"></td>\
							<td><input name="equipratehour[]" 	class="form-control input-sm text-center cell" data-cell="L'+ i +'" data-format="$ 0,0.00"></td>\
							<td><input name="equiprateshift[]" 	class="form-control input-sm text-center cell" data-cell="M'+ i +'" data-format="$ 0,0.00" data-formula="(K'+ i +'*L'+ i +')*8"></td>\
							<td><input name="equipfuelgalshift[]" 	class="form-control input-sm text-center cell" data-cell="N'+ i +'" data-format="$0,0[.]00"></td>\
							<td><input name="equipconsumegalshift[]"	class="form-control input-sm text-center cell" data-cell="O'+ i +'" data-format="$ 0,0.00" data-formula="(N'+ i +'*K'+ i +')"></td>\
							<td class="text-center"><button type="button" class="btn-remove btn btn-sm btn-danger" onclick="itemremove($(this));" ><i class="fa fa-times fa-fw"></i></button></td>\
						</tr>');
		$('#estimationmaster').calx();
	});
	
	$('#rentequip').click(function(e){
		rentequipitem++;
		
		if(rentequipitem > 199){
			swal('Max Items Reached', 'You have reached the allowable items to be added', 'error');
			return false;
		}
		$('#estimationmaster').calx('destroy');
		var i = rentequipitem;
		var itemlist = $('#rentalitemlist');
		itemlist.append('<tr>\
							<td><label data-cell="I1'+ i +'" data-format="0">'+ i +'</label></td>\
							<td><input name="rentequipdescription[]"	class="form-control input-sm cell" data-cell="J'+ i +'"></td>\
							<td><input name="rentequipquantity[]" 	class="form-control input-sm text-center cell" data-cell="K'+ i +'" data-format="0,0.00"></td>\
							<td><input name="rentequipratehour[]" 	class="form-control input-sm text-center cell" data-cell="L'+ i +'" data-format="$ 0,0.00"></td>\
							<td><input name="rentequiprateshift[]" 	class="form-control input-sm text-center cell" data-cell="M'+ i +'" data-format="$ 0,0.00" data-formula="(K'+ i +'*L'+ i +')*8"></td>\
							<td><input name="rentequipfuelgalshift[]" 	class="form-control input-sm text-center cell" data-cell="N'+ i +'" data-format="$0,0[.]00"></td>\
							<td><input name="rentequipconsumegalshift[]" class="form-control input-sm text-center cell" data-cell="O'+ i +'" data-format="$ 0,0.00" data-formula="(N'+ i +'*K'+ i +')"></td>\
							<td class="text-center"><button type="button" class="btn-remove btn btn-sm btn-danger" onclick="itemremove($(this));"><i class="fa fa-times fa-fw"></i></button></td>\
						</tr>');
		$('#estimationmaster').calx();
	});
	
	$('.btn-remove').click(function(e){
		e.preventDefault();
		$(this).closest('tr').remove();
	});
	
	function buildusingtemplate(){
		
		 $('#laboritemlist').html('');
		 $('#equipitemlist').html('');
		 $('#materialitemlist').html('');
		 $('#miscitemlist').html('');
		 $('#subconitemlist').html('');
		
		var tempid = $('#typeofwork').val();
		//$('#estimationmaster').calx('destroy');
		
		//process bidsum
	
		var bidsumitemlist = $('#bidsumitemlist');
		$.get('<?php echo base_url('estimation/crud/retrieve/bidsumtemplate/'); ?>' + tempid)
		.done(function(response) {
			var js = JSON.parse(response);
			$.each(js['bidsummary'], function(key, value){
				bidsum++;
				var i = bidsum;
				var tdhtm = '<input name="bidsummarkup[]" class="form-control input-sm text-center cell" data-cell="BJ'+ i +'" data-format="0,0.00 %" value="'+ value.markup +'">';
				$('#bidsumitemlist').find( "tr" ).eq( i - 1 ).find('td:eq(4)').html(tdhtm);
			});	
					$('#estimationmaster').calx();
		});
	
		
		//process labor template
		var laboritemlist = $('#laboritemlist');		
		$.get('<?php echo base_url('estimation/crud/retrieve/labortemplate/'); ?>' + tempid)
		.done(function(response) {
			var js = JSON.parse(response);
			$.each(js['labor'], function(key, value){
				laborno++;
				var i = laborno;
				laboritemlist.append('<tr>\
									<td><label data-cell="A'+ i +'" data-format="0">'+ i +'</label></td>\
									<td><input name="labordescription[]" type="text" class="form-control input-sm text-center cell" data-cell="B'+ i +'" value="'+ value.description +'" ></td>\
									<td><input name="laborquantity[]" type="text" class="form-control input-sm text-center cell" data-cell="C'+ i +'" data-format="0" value="'+ value.quantity +'"></td>\
									<td><input name="laborrate[]" type="text" class="form-control input-sm text-center cell" data-cell="D'+ i +'" data-format="$ 0,0.00" value="'+ value.hourlyrate +'"></td>\
									<td><input name="laborfringehour[]" type="text" class="form-control input-sm text-center cell" data-cell="E'+ i +'" data-format="$ 0,0.00"  value="'+ value.fringecost +'"></td>\
									<td><input name="laborcostperhour[]" type="text" class="form-control input-sm text-center cell" data-cell="F'+ i +'" data-format="$0,0[.]00" data-formula="(C'+ i +'*(D'+ i +'+E'+ i +')) * AA1" ></td>\
									<td><input name="labordiemshift[]" type="text" class="form-control input-sm text-center cell" data-cell="G'+ i +'" data-format="$ 0,0.00"  value="'+ value.diem +'"></td>\
									<td><input name="laborcostshift[]" type="text" class="form-control input-sm text-center cell" data-cell="H'+ i +'" data-format="$0,0[.]00" data-formula="(F'+ i +'*8)+(G'+ i +'*C'+ i +')"></td>\
								</tr>');
			});
					$('#estimationmaster').calx();
		});
		
		//process equipment
		var equipitemlist = $('#equipitemlist');
		$.get('<?php echo base_url('estimation/crud/retrieve/equipmenttemplate/'); ?>' + tempid)
		.done(function(response) {
			var js = JSON.parse(response);
			$.each(js['equipment'], function(key, value){
				ownequipitem++;
				var i = ownequipitem;
				equipitemlist.append('<tr>\
									<td><label data-cell="I'+ i +'" data-format="0">'+ i +'</label></td>\
									<td><input name="equipdescription[]"	class="form-control input-sm cell" data-cell="J'+ i +'" value="'+ value.description +'"></td>\
									<td><input name="equipquantity[]" 	class="form-control input-sm text-center cell" data-cell="K'+ i +'" data-format="0,0.00" value="'+ value.quantity +'"></td>\
									<td><input name="equipratehour[]" 	class="form-control input-sm text-center cell" data-cell="L'+ i +'" data-format="$ 0,0.00" value="'+ value.rateperhour +'"></td>\
									<td><input name="equiprateshift[]" 	class="form-control input-sm text-center cell" data-cell="M'+ i +'" data-format="$ 0,0.00" data-formula="(K'+ i +'*L'+ i +')*8"></td>\
									<td><input name="equipfuelgalshift[]" 	class="form-control input-sm text-center cell" data-cell="N'+ i +'" data-format="$0,0[.]00" value="'+ value.fuelpergal +'"></td>\
									<td><input name="equipconsumegalshift[]"	class="form-control input-sm text-center cell" data-cell="O'+ i +'" data-format="$ 0,0.00" data-formula="(N'+ i +'*K'+ i +')"></td>\
									<td class="text-center"><button type="button" class="btn-remove btn btn-sm btn-danger" onclick="itemremove($(this));"><i class="fa fa-times fa-fw"></i></button></td>\
								</tr>');
			});	
					$('#estimationmaster').calx();
		});
		
		//process material
		var materialtemlist = $('#materialitemlist');
		$.get('<?php echo base_url('estimation/crud/retrieve/materialtemplate/'); ?>' + tempid)
		.done(function(response) {
			var js = JSON.parse(response);
			$.each(js['material'], function(key, value){
				matitem++;
				var i = matitem;
				materialtemlist.append('<tr>\
							<td><label data-cell="P'+ i +'" data-format="0">'+ i +'</label></td>\
							<td><input name="materialdescription[]"  class="form-control input-sm text-center cell" data-cell="Q'+ i +'" value="'+ value.description +'"></td>\
							<td><input name="materialunits[]"  class="form-control input-sm text-center cell" data-cell="R'+ i +'" value="'+ value.units +'"></td>\
							<td><input name="materialquantity[]"  class="form-control input-sm text-center cell" data-cell="S'+ i +'" data-format="0,0.00" value="'+ value.quantity +'"></td>\
							<td><input name="materialcostperunit[]"  class="form-control input-sm text-center cell" data-cell="T'+ i +'" data-format="$ 0,0.00" value="'+ value.costperunit +'"></td>\
							<td><input name="materialtotalcost[]"  class="form-control input-sm text-center cell" data-cell="U'+ i +'" data-format="$0,0[.]00" data-formula="(S'+ i +'*T'+ i +')"></td>\
							<td class="text-center"><button type="button" class="btn-remove btn btn-sm btn-danger" onclick="itemremove($(this));"><i class="fa fa-times fa-fw"></i></button></td>\
						</tr>');
			});
					$('#estimationmaster').calx();
		});
		
		
		//process misc
		var misctemlist = $('#miscitemlist');
		$.get('<?php echo base_url('estimation/crud/retrieve/misctemplate/'); ?>' + tempid)
		.done(function(response) {
			var js = JSON.parse(response);
			$.each(js['misc'], function(key, value){
				mscitem++;
				var i = mscitem;
				misctemlist.append('<tr>\
							<td><label data-cell="W'+ i +'" data-format="0">'+ i +'</label></td>\
							<td><input name="miscdescription[]" class="form-control input-sm text-center cell" data-cell="V'+ i +'" value="'+ value.description +'"></td>\
							<td><input name="miscunits[]" class="form-control input-sm text-center cell" data-cell="W'+ i +'"  value="'+ value.units +'"></td>\
							<td><input name="miscquantity[]" class="form-control input-sm text-center cell" data-cell="X'+ i +'" data-format="0,0.00" value="'+ value.quantity +'"></td>\
							<td><input name="misccostperunit[]" class="form-control input-sm text-center cell" data-cell="Y'+ i +'" data-format="$ 0,0.00" value="'+ value.costperunit +'"></td>\
							<td><input name="misctotalcost[]" class="form-control input-sm text-center cell" data-cell="Z'+ i +'" data-format="$0,0[.]00" data-formula="(X'+ i +'*Y'+ i +')"></td>\
							<td class="text-center"><button type="button" class="btn-remove btn btn-sm btn-danger" onclick="itemremove($(this));"><i class="fa fa-times fa-fw"></i></button></td>\
						</tr>');
			});	
					$('#estimationmaster').calx();
		});
		
		//process subcon
		var subconitemlist = $('#subconitemlist');
		$.get('<?php echo base_url('estimation/crud/retrieve/subcontemplate/'); ?>' + tempid)
		.done(function(response) {
			var js = JSON.parse(response);
			$.each(js['subcon'], function(key, value){
				sbitem++;
				var i = sbitem;
				subconitemlist.append('<tr>\
							<td><label data-cell="" data-format="0">'+ i +'</label></td>\
							<td><input name="subcondesc[]" class="form-control input-sm cell" data-cell="BB'+ i +'" value="'+ value.subcon + '"></td>\
							<td><input name="typeofwork[]" class="form-control input-sm cell" data-cell="BC'+ i +'" value="'+ value.typeofwork + '"></td>\
							<td><input name="quote[]" class="form-control input-sm text-center cell" data-cell="BD'+ i +'" data-format="$ 0,0.00" value="'+ value.quote + '"></td>\
							<td class="text-center"><button type="button" class="btn-remove btn btn-sm btn-danger" onclick="itemremove($(this));"><i class="fa fa-times fa-fw"></i></button></td>\
								</tr>');
			});	
					$('#estimationmaster').calx();
		});
		
		
		$('#estimationmaster').calx();
	}
	
	//* PREVIEW SCRIPT GOES HERE *//
	
	function renderestimation(param){
		
		$('#projectcode').text(param);
		$('#estimatetable').hide();
		$('#estimateinfo').show();
		$('#estimatebreakdown').show();
		
		$(".preloader").show();
		$('#bldbutton').hide();
		$('#btnBuild').hide();
		$('.add_item').hide();
		$('.btn-remove').hide();

		var laborno = 0;
		var sbitem = 0;
		var mscitem = 0;
		var matitem = 0;
		var ownequipitem = 0;
		var rentequipitem = 100;
		var bidsum = 0;
		
		
		$('#laboritemlist').html('');
		$('#equipitemlist').html('');
		$('#materialitemlist').html('');
		$('#miscitemlist').html('');
		$('#subconitemlist').html('');
		//$('#bidsumitemlist').html('');
		
		$('#actualmisc').val('');
		$('#actuallabor').val('');
		$('#actualequipment').val('');
		$('#actualmaterial').val('');
		$('#actualsubcon').val('');
		$('#jblabor').val('');
		$('#jbmisc').val('');
		$('#jbpermmaterial').val('');
		$('#jbsupplies').val('');
		$('#jboutequip').val('');
		$('#jbsubstence').val('');
		$('#jbbackcharge').val('');
		
		$('#etimatedby').val('');
		$('#etimateddate').val('');
		$('#filename').val('');
		$('#client').val('');
		$('#location').val('');
		$('#premshift1').val('');
		$('#premshift2').val('');
		$('#totaldays').val('');
		$('#unitqty').val('');
		$('#points').val('');
		$('#prtval').val('');
		$('#galval').val('');
	
		var laboritemlist = $('#laboritemlist');
		var materialtemlist = $('#materialitemlist');
		var misctemlist = $('#miscitemlist');
		var subcontemlist = $('#subconitemlist');
		
		var link = 'estimation/crud/retrieve/projectestimation/' + param;
		$.get('<?php echo base_url(); ?>' + link)
		.done(function(response) {
			var js = JSON.parse(response);
			
			$.each(js['data'], function(key, value){
				$.each(value, function(index,itm){
					
					if(index == "main"){
						$('#workingdays').calx('destroy');
						$('#etimatedby').val(itm[0].estimatedby);
						$('#etimateddate').val(itm[0].estimateddate);
						$('#projectname').val(itm[0].project_name);
						$('#projecttype').val(itm[0].project_type);
						$('#filename').val(itm[0].filename);
						$('#client').val(itm[0].client);
						$('#location').val(itm[0].location);
						$('#typeofwork').val(itm[0].typeofwork);
						$('#premshift1').val(itm[0].premshift1);
						$('#premshift2').val(itm[0].premshift2);
						$('#totaldays').val(itm[0].totaldays);
						$('#unitqty').val(itm[0].unitqty);
						$('#points').val(itm[0].points);
						$('#prtval').val(itm[0].prt);
						$('#galval').val(itm[0].fuelcost);
						$('#sales_tax').val(itm[0].sales_tax);
						$('#workingdays').calx();
						
					}
					
					if(index == "bidsummary"){
						for(i=0; i < itm.length ; i++){
							bidsum++;
							var o = bidsum;
							var tdhtm = '<input name="bidsummarkup[]" class="form-control input-sm text-center cell" data-cell="BJ'+ o +'" data-format="0,0.00 %" value="'+ itm[i].markup +'">';
							$('#bidsumitemlist').find( "tr" ).eq( i ).find('td:eq(4)').html(tdhtm);
							
						}
					}
					
					if(index == "labor"){
						for(i=0; i < itm.length; i++){
							laborno++
							var o = laborno;
							laboritemlist.append('<tr>\
											<td><label data-cell="A'+ o +'" data-format="0">'+ o +'</label></td>\
											<td><input name="labordescription[]" type="text" class="form-control input-sm text-center cell" data-cell="B'+ o +'" value="'+ itm[i].description +'" ></td>\
											<td><input name="laborquantity[]" type="text" class="form-control input-sm text-center cell" data-cell="C'+ o +'" data-format="0" value="'+ itm[i].quantity +'"></td>\
											<td><input name="laborrate[]" type="text" class="form-control input-sm text-center cell" data-cell="D'+ o +'" data-format="$ 0,0.00" value="'+ itm[i].rate +'"></td>\
											<td><input name="laborfringehour[]" type="text" class="form-control input-sm text-center cell" data-cell="E'+ o +'" data-format="$ 0,0.00"  value="'+ itm[i].fringe_perhour +'"></td>\
											<td><input name="laborcostperhour[ ]" type="text" class="form-control input-sm text-center cell" data-cell="F'+ o +'" data-format="$0,0[.]00" data-formula="(C'+ o +'*(D'+ o +'+E'+ o +')) * AA1" ></td>\
											<td><input name="labordiemshift[]" type="text" class="form-control input-sm text-center cell" data-cell="G'+ o +'" data-format="$ 0,0.00"  value="'+ itm[i].diem_pershift +'"></td>\
											<td><input name="laborcostshift[]" type="text" class="form-control input-sm text-center cell" data-cell="H'+ o +'" data-format="$0,0[.]00" data-formula="(F'+ o +'*8)+(G'+ o +'*C'+ o +')"></td>\
										</tr>');
						}
					}
					
					if(index == "material"){
						for(i=0; i < itm.length; i++){
							matitem++
							var o = matitem;
							materialtemlist.append('<tr>\
								<td><label data-cell="P'+ o +'" data-format="0">'+ o +'</label></td>\
								<td><input name="materialdescription[]"  class="form-control input-sm text-center cell" data-cell="Q'+ o +'" value="'+ itm[i].description +'"></td>\
								<td><input name="materialunits[]"  class="form-control input-sm text-center cell" data-cell="R'+ o +'" value="'+ itm[i].units +'"></td>\
								<td><input name="materialquantity[]"  class="form-control input-sm text-center cell" data-cell="S'+ o +'" data-format="0,0.00" value="'+ itm[i].quantity +'"></td>\
								<td><input name="materialcostperunit[]"  class="form-control input-sm text-center cell" data-cell="T'+ o +'" data-format="$ 0,0.00" value="'+ itm[i].costperunit +'"></td>\
								<td><input name="materialtotalcost[]"  class="form-control input-sm text-center cell" data-cell="U'+ o +'" data-format="$0,0[.]00" data-formula="(S'+ o +'*T'+ o +')"></td>\
								<td class="text-center"><button type="button" class="btn-remove btn btn-sm btn-danger" onclick="itemremove($(this));"><i class="fa fa-times fa-fw"></i></button></td>\
							</tr>');
						}
					}
					
					if(index == "misc"){
						for(i=0; i < itm.length; i++){
							mscitem++
							var o = mscitem;
							misctemlist.append('<tr>\
								<td><label data-cell="W'+ o +'" data-format="0">'+ o +'</label></td>\
								<td><input name="miscdescription[]" class="form-control input-sm text-center cell" data-cell="V'+ o +'" value="'+ itm[i].description +'"></td>\
								<td><input name="miscunits[]" class="form-control input-sm text-center cell" data-cell="W'+ o +'" value="'+ itm[i].units +'"></td>\
								<td><input name="miscquantity[]" class="form-control input-sm text-center cell" data-cell="X'+ o +'" data-format="0,0.00" value="'+ itm[i].quantity +'"></td>\
								<td><input name="misccostperunit[]" class="form-control input-sm text-center cell" data-cell="Y'+ o +'" data-format="$ 0,0.00" value="'+ itm[i].costperunit +'"></td>\
								<td><input name="misctotalcost[]" class="form-control input-sm text-center cell" data-cell="Z'+ o +'" data-format="$0,0[.]00" data-formula="(X'+ o +'*Y'+ o +')"></td>\
								<td class="text-center"><button type="button" class="btn-remove btn btn-sm btn-danger" onclick="itemremove($(this));"><i class="fa fa-times fa-fw"></i></button></td>\
							</tr>');
						}
					}
					
					if(index == "subcon"){
						for(i=0; i < itm.length; i++){
							sbitem++
							var o = sbitem;
							subcontemlist.append('<tr>\
							<td><label data-cell="A88'+ o +'<" data-format="0">'+ o +'</label></td>\
							<td><input name="subcondesc[]" class="form-control input-sm cell" data-cell="BB'+ o +'" value="'+ itm[i].subcon +'"></td>\
							<td><input name="typeofwork[]" class="form-control input-sm cell" data-cell="BC'+ o +'" value="'+ itm[i].typeofwork +'"></td>\
							<td><input name="quote[]" class="form-control input-sm text-center cell" data-cell="BD'+ o +'" data-format="$ 0,0.00" value="'+ itm[i].quote +'"></td>\
							<td class="text-center"><button type="button" class="btn-remove btn btn-sm btn-danger" onclick="itemremove($(this));"><i class="fa fa-times fa-fw"></i></button></td>\
						</tr>');
						}
					}
					
					if(index == "jobcost"){
						if(typeof(itm[0]) != 'undefined'){
							
							if(typeof(itm[0].actualmisc) != 'undefined') {
								$('#actualmisc').val(itm[0].actualmisc);
							}
							if(typeof(itm[0].actuallabor) != 'undefined') {
								$('#actuallabor').val(itm[0].actuallabor);
							}
							if(typeof(itm[0].actualequipment) != 'undefined') {
								$('#actualequipment').val(itm[0].actualequipment);
							}
							if(typeof(itm[0].actualmaterial) != 'undefined') {
								$('#actualmaterial').val(itm[0].actualmaterial);
							}
							if(typeof(itm[0].actualsubcon) != 'undefined') {
								$('#actualsubcon').val(itm[0].actualsubcon);
							}
							if(typeof(itm[0].jblabor) != 'undefined') {
								$('#jblabor').val(itm[0].jblabor);
							}
							if(typeof(itm[0].jbmisc) != 'undefined') {
								$('#jbmisc').val(itm[0].jbmisc);
							}
							if(itm[0].jbpermmaterial != 'undefined') {
								$('#jbpermmaterial').val(itm[0].jbpermmaterial);
							}
							if(itm[0].jbsupplies != 'undefined') {
								$('#jbsupplies').val(itm[0].jbsupplies);
							}
							if(itm[0].jboutequip != 'undefined') {
								$('#jboutequip').val(itm[0].jboutequip);
							}
							if(itm[0].jbsubstence != 'undefined') {
								$('#jbsubstence').val(itm[0].jbsubstence);
							}
							if(itm[0].jbbackcharge != 'undefined') {
								$('#jbbackcharge').val(itm[0].jbbackcharge);
							}
						}
					}
					
					if(index == "equipment"){
						for(i=0; i < itm.length; i++){
							if(itm[i].type == "own"){
								ownequipitem++;
								var o = ownequipitem;
								var itemlist = $('#equipitemlist');
								itemlist.append('<tr>\
									<td><label data-cell="I'+ o +'" data-format="0">'+ o +'</label></td>\
									<td><input name="equipdescription[]"	class="form-control input-sm cell" data-cell="J'+ o +'" value="'+ itm[i].description +'" "></td>\
									<td><input name="equipquantity[]" 	class="form-control input-sm text-center cell" data-cell="K'+ o +'" data-format="0,0.00" value="'+ itm[i].quantity +'" ></td>\
									<td><input name="equipratehour[]" 	class="form-control input-sm text-center cell" data-cell="L'+ o +'" data-format="$ 0,0.00" value="'+ itm[i].rateperhour +'" ></td>\
									<td><input name="equiprateshift[]" 	class="form-control input-sm text-center cell" data-cell="M'+ o +'" data-format="$ 0,0.00" data-formula="(K'+ i +'*L'+ i +')*8"></td>\
									<td><input name="equipfuelgalshift[]" 	class="form-control input-sm text-center cell" data-cell="N'+ o +'" data-format="$0,0[.]00" value="'+ itm[i].consumedgalpershift +'" ></td>\
									<td><input name="equipconsumegalshift[]"	class="form-control input-sm text-center cell" data-cell="O'+ o +'" data-format="$ 0,0.00" data-formula="(N'+ i +'*K'+ i +')"></td>\
									<td class="text-center"><button type="button" class="btn-remove btn btn-sm btn-danger" onclick="itemremove($(this));" ><i class="fa fa-times fa-fw"></i></button></td>\
								</tr>');
							}else{
								rentequipitem++;
								var o = rentequipitem;
								var itemlist = $('#rentalitemlist');
								itemlist.append('<tr>\
									<td><label data-cell="I1'+ o +'" data-format="0">'+ o +'</label></td>\
									<td><input name="rentequipdescription[]"	class="form-control input-sm cell" data-cell="J'+ o +'" value="'+ itm[i].description +'" ></td>\
									<td><input name="rentequipquantity[]" 	class="form-control input-sm text-center cell" data-cell="K'+ o +'" data-format="0,0.00" value="'+ itm[i].quantity +'" ></td>\
									<td><input name="rentequipratehour[]" 	class="form-control input-sm text-center cell" data-cell="L'+ o +'" data-format="$ 0,0.00" value="'+ itm[i].rateperhour +'" ></td>\
									<td><input name="rentequiprateshift[]" 	class="form-control input-sm text-center cell" data-cell="M'+ o +'" data-format="$ 0,0.00" data-formula="(K'+ i +'*L'+ i +')*8"></td>\
									<td><input name="rentequipfuelgalshift[]" 	class="form-control input-sm text-center cell" data-cell="N'+ o +'" data-format="$0,0[.]00" value="'+ itm[i].consumedgalpershift +'" ></td>\
									<td><input name="rentequipconsumegalshift[]" class="form-control input-sm text-center cell" data-cell="O'+ o +'" data-format="$ 0,0.00" data-formula="(N'+ i +'*K'+ i +')"></td>\
									<td class="text-center"><button type="button" class="btn-remove btn btn-sm btn-danger" onclick="itemremove($(this));"><i class="fa fa-times fa-fw"></i></button></td>\
								</tr>');
									
								
							}
						}
					}
					
				});
				
			});
			$('#estimationmaster').calx();
			$(".preloader").fadeOut();
		});
	
	}
	
	function getEstimateList() {
		$.post("<?php echo base_url("estimation/crud/retrieve/estimatelist"); ?>",{ admin_id : "1" })
		.done(function(data) {
			$("#estimateList").html(data);
			$('#tblEstimate').DataTable({
				dom: 'frtip',
			});
			$(".preloader").fadeOut();
		});
	}
	
	function deleteEstimate(xid){
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
				$.post("<?php echo base_url("estimation/crud/delete/estimatelist"); ?>",{ admin_id : "1", id: xid })
				.done(function(data) {
					if(data == 1) { // or true
						$('#tblEstimate').DataTable().destroy();
						getEstimateList()
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