<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-themecolor">Estimation</h3>
	</div>
	<div class="col-md-7 align-self-center">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
			<li class="breadcrumb-item">Estimation</li>
			<li class="breadcrumb-item active">Build</li>
		</ol>
	</div>
	<!--<div class="">
		<button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
	</div>-->
</div>
<div class="container-fluid">
	<div id="frmestimation" class="row">
		<div class="col-md-9">
			<div id="estimateinfo" class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-12 col-sm-12">
							<h4 class="card-title">Project Estimation Details</h4>
							<hr>
							<div class="form-group row">
								  <label for="etimatedby" class="col-md-2 col-form-label">Estimated By</label>
								  <div class="col-md-5">
									<input class="form-control" type="text" id="etimatedby">
								  </div>
								  <label for="etimateddate" class="col-md-1 col-form-label">Date</label>
								  <div class="col-md-3">
									<input class="form-control" type="date" value="2011-08-19" id="example-date-input">
								   </div>
							</div>
							<div class="form-group row">
								  <label for="filename" class="col-md-2 col-form-label">File Name</label>
								  <div class="col-md-10">
									<input class="form-control" type="text" id="filename">
								  </div>
							</div>
							<div class="form-group row">
								  <label for="client" class="col-md-2 col-form-label">Client</label>
								  <div class="col-md-10">
									<input class="form-control" type="text" id="client">
								  </div>
							</div>
							<div class="form-group row">
								  <label for="location" class="col-md-2 col-form-label">Location</label>
								  <div class="col-md-10">
									<input class="form-control" type="text" id="location">
								  </div>
							</div>
							<div class="form-group row">
								  <label for="typeofwork" class="col-md-2 col-form-label">Type of Work</label>
								  <div class="col-md-10">
									<input class="form-control" type="text" id="typeofwork">
								  </div>
							</div>
							<hr>
							<div class="form-group row">
								<div class="col-md-6">
									<form id="workingdays">
									  <label class="col-md-12 col-form-label">No.Of Days</label>
									  <label for="stdshift" class="col-sm-6 col-form-label">Standard Shifts</label>
									  <div class="col-sm-6">
										<input class="form-control" type="text" id="stdshift" data-cell="A1" data-format="0" value="30">
									  </div>
									  <label for="premshift" class="col-sm-6 col-form-label">Premium Shifts x 1.5</label>
									  <div class="col-sm-6">
										<input class="form-control" type="text" id="premshift" data-cell="A2" data-format="0" value="0">
									  </div>
									  <label for="premshift" class="col-sm-6 col-form-label"> Premium Shifts x 2</label>
									  <div class="col-sm-6">
										<input class="form-control" type="text" id="premshift2" data-cell="A3" data-format="0" value="0">
									  </div>
									  <hr class="col-sm-6">
									   <label for="totaldays" class="col-sm-6 col-form-label" >Total Days</label>
									  <div class="col-sm-6">
										<input class="form-control" type="text" id="totaldays" data-cell="A4" data-format="0" data-formula="SUM(A1:A3)">
									  </div>
									 
								 </div>
								 <div class="col-md-6">
									  <label class="col-sm-12 col-form-label">&nbsp;</label>
									  <label for="unitqty" class="col-sm-6 col-form-label">Unit Qty</label>
									  <div class="col-sm-5">
										<input class="form-control" type="text" id="unitqty" data-cell="A5" data-format="0" value="0">
									  </div>
									  <label for="points" class="col-sm-6 col-form-label">Points</label>
									  <div class="col-sm-5">
										<input class="form-control" type="text" id="points" data-cell="A6" data-format="0" value="0">
									  </div>
								 </div>
								 </form>
							</div>
							
							<div class="form-group float-right">
								 <button type="button" class="btn btn-info" onclick="showbreakdown();">
								 <i class="fa fa-edit"></i> Build</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="estimatebreakdown" class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-12 col-sm-12">
								<h4 class="card-title">Project Estimate Breakdown</h4>
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
										<a onclick="bidsumchange();" class="nav-link" data-toggle="tab" href="#bidsum" role="tab"><span class="hidden-sm-up">
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
												<form action="#" class="form-horizontal" id="labortable">
													<div class="row">
														<label for="prt" class="col-md-2 col-form-label">PRT & I</label>
														<div class="col-md-2">
															<input id="prt" onchange="laborchange();"  class="form-control input-sm text-center cell" data-cell="AA1" data-format="0,0[.]00 %" value="155"/>
														</div>
														<div class="col-md-8">
															<button id="" class="add_item btn btn-sm btn-primary float-right">Add Item</button>
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
																<td style="width: 10%" class="text-center"><label>Action </label></td>
															</tr>
														</thead>
														<tbody id="laboritemlist">
															<tr>
																<td><label data-cell="A1" data-format="0">1</label></td>
																<td><label data-cell="A2" data-format="0">Project Manager/QC</label></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="C1" data-format="0"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="D1" data-format="$ 0,0.00"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="E1" data-format="$ 0,0.00"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="F1" data-format="$0,0[.]00" data-formula="(C1*(D1+E1)) * AA1"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="G1" data-format="$ 0,0.00" value="0"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="H1" data-format="$0,0[.]00" data-formula="(F1*8)+(G1*C1)"></td>
																<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
															<tr>
																<td><label data-cell="A2" data-format="0">2</label></td>
																<td><label data-cell="B2" data-format="0">Foreman</label></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="C2" data-format="0"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="D2" data-format="$ 0,0.00"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="E2" data-format="$ 0,0.00"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="F2" data-format="$0,0[.]00" data-formula="(C2*(D2+E2)) * AA1"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="G2" data-format="$ 0,0.00" value="0"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="H2" data-format="$0,0[.]00" data-formula="(F2*8)+(G2*C2)"></td>
																<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
															<tr>
																<td><label data-cell="A3" data-format="0">3</label></td>
																<td><label data-cell="B3" data-format="0">Point Man</label></td> 
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="C3" data-format="0"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="D3" data-format="$ 0,0.00"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="E3" data-format="$ 0,0.00"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="F3" data-format="$0,0[.]00" data-formula="(C3*(D3+E3)) * AA1"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="G3" data-format="$ 0,0.00" value="0"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="H3" data-format="$0,0[.]00" data-formula="(F3*8)+(G3*C3)"></td>
																<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
															<tr>
																<td><label data-cell="A4" data-format="0">4</label></td>
																<td><label data-cell="B4" data-format="0">Mix Man</label></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="C4" data-format="0"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="D4" data-format="$ 0,0.00"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="E4" data-format="$ 0,0.00"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="F4" data-format="$0,0[.]00" data-formula="(C4*(D4+E4)) * AA1"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="G4" data-format="$ 0,0.00" value="0"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="H4" data-format="$0,0[.]00" data-formula="(F4*8)+(G4*C4)"></td>
																<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
															<tr>
																<td><label data-cell="A5" data-format="0">5</label></td>
																<td><label data-cell="B5" data-format="0">Loader Operator</label></td> 
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="C5" data-format="0"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="D5" data-format="$ 0,0.00"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="E5" data-format="$ 0,0.00"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="F5" data-format="$0,0[.]00" data-formula="(C5*(D5+E5)) * AA1"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="G5" data-format="$ 0,0.00" value="0"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="H5" data-format="$0,0[.]00" data-formula="(F5*8)+(G5*C5)"></td>
																<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
															<tr>
																<td><label data-cell="A6" data-format="0">6</label></td>
																<td><label data-cell="B6" data-format="0">Driller</label></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="C6" data-format="0"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="D6" data-format="$ 0,0.00"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="E6" data-format="$ 0,0.00"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="F6" data-format="$0,0[.]00" data-formula="(C6*(D6+E6)) * AA1"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="G6" data-format="$ 0,0.00" value="0"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="H6" data-format="$0,0[.]00" data-formula="(F6*8)+(G6*C6)"></td>
																<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
															<tr>
																<td><label data-cell="A7" data-format="0">7</label></td>
																<td><label data-cell="B7" data-format="0">Chucker</label></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="C7" data-format="0"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="D7" data-format="$ 0,0.00"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="E7" data-format="$ 0,0.00"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="F7" data-format="$0,0[.]00" data-formula="(C7*(D7+E7)) * AA1"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="G7" data-format="$ 0,0.00" value="0"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="H7" data-format="$0,0[.]00" data-formula="(F7*8)+(G7*C7)"></td>
																<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
															<tr>
																<td><label data-cell="A8" data-format="0">8</label></td>
																<td><label data-cell="B8" data-format="0">Laborer</label></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="C8" data-format="0"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="D8" data-format="$ 0,0.00"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="E8" data-format="$ 0,0.00"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="F8" data-format="$0,0[.]00" data-formula="(C8*(D8+E8)) * AA1"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="G8" data-format="$ 0,0.00" value="0"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="H8" data-format="$0,0[.]00" data-formula="(F8*8)+(G8*C8)"></td>
																<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
															<tr>
																<td><label data-cell="A9" data-format="0">9</label></td>
																<td><label data-cell="B9" data-format="0">Mix Man</label></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="C9" data-format="0"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="D9" data-format="$ 0,0.00"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="E9" data-format="$ 0,0.00"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="F9" data-format="$0,0[.]00" data-formula="(C9*(D9+E9)) * AA1"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="G9" data-format="$ 0,0.00" value="0"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="H9" data-format="$0,0[.]00" data-formula="(F9*8)+(G9*C9)"></td>
																<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
															<tr>
																<td><label data-cell="A10" data-format="0">10</label></td>
																<td><label data-cell="B10" data-format="0">Laborer (Apprentice)</label></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="C10" data-format="0"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="D10" data-format="$ 0,0.00"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="E10" data-format="$ 0,0.00"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="F10" data-format="$0,0[.]00" data-formula="(C10*(D10+E10)) * AA1"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="G10" data-format="$ 0,0.00" value="0"></td>
																<td><input onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="H10" data-format="$0,0[.]00" data-formula="(F10*8)+(G10*C10)"></td>
																<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
														</tbody>
														<tfoot>
															<tr >
																<td colspan="2">Total :</td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="AC" data-format="$ 0,0.00" data-formula="SUM(C1:C2)"></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="AD" data-format="$ 0,0.00" data-formula="SUM(D1:D2)"></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="AE" data-format="$ 0,0.00" data-formula="SUM(E1:E2)"></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="AF" data-format="$0,0[.]00" data-formula="SUM(F1:F2)"></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="AG" data-format="$ 0,0.00" data-formula="SUM(G1:G2)"></td>
																<td colspan="2"><input onchange="bidsumchange();" id="labor_total" class="form-control input-sm text-left cellblock" data-cell="AH"  data-format="$ 0,0.00" data-formula="SUM(H1:H2)" value="0"></td>
															</tr>
														</tfoot>
													</table>
													
												</form>
											</div>
										</div>
									 </div>
									 <div class="tab-pane p-l-20 p-r-20" id="equip" role="tabpanel">
										<div class="row">
											<br>
											<form class="form-horizontal" id="equiptable" >
													<div class="row">
														<label class="col-md-2 col-form-label">Fuel Cost Per Gallon</label>
														<div class="col-md-2">
															<input class="form-control input-sm text-center cell" data-cell="AA1" data-format="$ 0,0.00" value="0.04"/>
														</div>
														<div class="col-md-8">
															<button id="mainequip" class="add_item btn btn-sm btn-primary float-right">Add Item</button>
														</div>
													</div>
													<br>													
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
															<tr>
																<td><label data-cell="A1" data-format="0">1</label></td>
																<td><input class="form-control input-sm cell" data-cell="B1"></td>
																<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="C1" data-format="0,0.00"></td>
																<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="D1" data-format="$ 0,0.00"></td>
																<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="E1" data-format="$ 0,0.00" data-formula="(C1*D1)*8"></td>
																<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="F1" data-format="$0,0[.]00"></td>
																<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="G1" data-format="$ 0,0.00" data-formula="(F1*C1)"></td>
																<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
															<tr>
																<td><label data-cell="A2" data-format="0">2</label></td>
																<td><input class="form-control input-sm cell" data-cell="B1"></td>
																<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="C2" data-format="0,0.00"></td>
																<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="D2" data-format="$ 0,0.00"></td>
																<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="E2" data-format="$ 0,0.00" data-formula="(C2*D2)*8"></td>
																<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="F2" data-format="$0,0[.]00"></td>
																<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="G2" data-format="$ 0,0.00" data-formula="(F2*C2)"></td>
																<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
														</tbody>
														<tbody>
															<tr>
																<td colspan="6">&nbsp;</td><
																<td colspan="2"><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="EA1" data-format="$ 0,0.00" data-formula="E1 + E2"></td>
															</tr>
															<tr>
																<td colspan="8">&nbsp;</td>
															</tr>
															<tr>
																<td colspan="7"><b>Rental Equipments</b></td>
																<td>
																	<button id="rentequip" class="add_item btn btn-sm btn-primary float-right">Add Item</button>
																</td>
															</tr>
															<tr>
																<td colspan="8">&nbsp;</td>
															</tr>
														</tbody>
														<tbody id="rentalitemlist">
															<tr>
																<td><label data-cell="A3" data-format="0">1</label></td>
																<td><input class="form-control input-sm cell" data-cell="B3"></td>
																<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="C3" data-format="0,0.00"></td>
																<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="D3" data-format="$ 0,0.00"></td>
																<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="E3" data-format="$ 0,0.00" data-formula="(C3*D3)*8"></td>
																<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="F3" data-format="$0,0[.]00"></td>
																<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="G3" data-format="$ 0,0.00" data-formula="(F3*C3)"></td>
																<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
															<tr>
																<td><label data-cell="A4" data-format="0">2</label></td>
																<td><input class="form-control input-sm cell" data-cell="B4"></td>
																<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="C4" data-format="0,0.00"></td>
																<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="D4" data-format="$ 0,0.00"></td>
																<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="E4" data-format="$ 0,0.00" data-formula="(C4*D4)*8"></td>
																<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="F4" data-format="$0,0[.]00"></td>
																<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="G4" data-format="$ 0,0.00" data-formula="(F4*C4)"></td>
																<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
														</tbody>
														<tfoot>
															<tr>
																<td colspan="6"></td>
																<td colspan="2"><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="EA2" data-format="$ 0,0.00" data-formula="E3 + E4"></td>
															</tr>
															</tr>
															<tr >
																<td colspan="2">Subtotal / Shift :</td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="AC" data-format="$ 0,0.00" data-formula="SUM(C1:C4)"></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="AD" data-format="$ 0,0.00" data-formula="SUM(D1:D4)"></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="AE" data-format="$ 0,0.00" data-formula="SUM(E1:E4)" ></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="AF" data-format="$0,0[.]00" data-formula="SUM(F1:F4)"></td>
																<td colspan="2"><input class="form-control input-sm text-left cellblock" data-cell="AG" data-format="$ 0,0.00" data-formula="SUM(G1:G4)" value="0"></td>
															</tr>
															<tr >
																<td colspan="4">Cost Plus **  *** :</td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="BE" data-format="$ 0,0.00" ></td>
																<td colspan="2"></td>
															</tr>
															<tr >
																<td colspan="4">Total Cost Per Shift:</td>
																<td><input id="total_equip_cost_hour" class="form-control input-sm text-center cellblock" data-cell="CE" data-format="$ 0,0.00" ></td>
																<td colspan="2"></td>
															</tr>
															<tr >
																<td colspan="4">Total Cost Per Hour :</td>
																<td><input id="total_equip_cost_shift" class="form-control input-sm text-center cellblock" data-cell="DE" data-format="$ 0,0.00" ></td>
																<td colspan="2"></td>
															</tr>
														</tfoot>
													</table>
												</form>
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
										<div class="row">
											<div class="col-sm-12">
												<br>
												<form action="#" class="form-horizontal" id="materialtable" method="POST">
													<div class="row">
														<div class="col-md-12">
															<button id="" class="add_item btn btn-sm btn-primary float-right">Add Item</button>
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
															<tr>
																<td><label data-cell="A1" data-format="0">1</label></td>
																<td><input class="form-control input-sm cell" data-cell="B1"></td>
																<td><input class="form-control input-sm cell" data-cell="C1"></td>
																<td><input onchange="materialchange();" class="form-control input-sm text-center cell" data-cell="D1" data-format="0,0.00"></td>
																<td><input onchange="materialchange();" class="form-control input-sm text-center cell" data-cell="E1" data-format="$ 0,0.00"></td>
																<td><input onchange="materialchange();" class="form-control input-sm text-center cell" data-cell="F1" data-format="$0,0[.]00" data-formula="(D1*E1)"></td>
																<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
															<tr>
																<td><label data-cell="A2" data-format="0">2</label></td>
																<td><input class="form-control input-sm cell" data-cell="B2"></td>
																<td><input class="form-control input-sm cell" data-cell="C2"></td>
																<td><input onchange="materialchange();" class="form-control input-sm text-center cell" data-cell="D2" data-format="0,0.00"></td>
																<td><input onchange="materialchange();" class="form-control input-sm text-center cell" data-cell="E2" data-format="$ 0,0.00"></td>
																<td><input onchange="materialchange();" class="form-control input-sm text-center cell" data-cell="F2" data-format="$0,0[.]00" data-formula="(D2*E2)"></td>
																<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
														</tbody>
														<tfoot>
															<tr>
																<td colspan="5">Sub Total Material :</td>
																<td colspan="2"><input class="form-control input-sm text-center cell" data-cell="AF1" data-format="$ 0,0.00" data-formula="SUM(F1:F2)"></td>
															</tr>
															<tr>
																<td colspan="4">Sales Tax @ :</td>
																<td><input class="form-control input-sm text-center cell" data-cell="AA2" data-format="0,0[.]00 %" value="8.5"></td>
																<td colspan="2"><input class="form-control input-sm text-center cell" data-cell="AF2" data-format="$ 0,0.00" data-formula="(AF1 * AA2)" ></td>
															</tr>
															<tr>
																<td colspan="5">Total Material Cost :</td>
																<td colspan="2"><input class="form-control input-sm text-center cellblock" data-cell="AA4" data-format="$ 0,0.00" data-formula="SUM(AF1:AF2)" ></td>
															</tr>
														</tfoot>
													</table>
													
												</form>
											</div>
										</div>
									 </div>
									 <div class="tab-pane p-l-20 p-r-20" id="misc" role="tabpanel">
										<div class="row">
											<div class="col-sm-12">
												<br>
												<form action="#" class="form-horizontal" id="misctable">
													<div class="row">
														<div class="col-md-12">
															<button id="" class="add_item btn btn-sm btn-primary float-right">Add Item</button>
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
															<tr>
																<td><label data-cell="A1" data-format="0">1</label></td>
																<td><input class="form-control input-sm cell" data-cell="B1"></td>
																<td><input class="form-control input-sm cell" data-cell="C1"></td>
																<td><input onchange="miscchange();" class="form-control input-sm text-center cell" data-cell="D1" data-format="0,0.00"></td>
																<td><input onchange="miscchange();" class="form-control input-sm text-center cell" data-cell="E1" data-format="$ 0,0.00"></td>
																<td><input onchange="miscchange();" class="form-control input-sm text-center cell" data-cell="F1" data-format="$0,0[.]00" data-formula="(D1*E1)"></td>
																<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
															<tr>
																<td><label data-cell="A2" data-format="0">2</label></td>
																<td><input class="form-control input-sm cell" data-cell="B2"></td>
																<td><input class="form-control input-sm cell" data-cell="C2"></td>
																<td><input onchange="miscchange();" class="form-control input-sm text-center cell" data-cell="D2" data-format="0,0.00"></td>
																<td><input onchange="miscchange();" class="form-control input-sm text-center cell" data-cell="E2" data-format="$ 0,0.00"></td>
																<td><input onchange="miscchange();" class="form-control input-sm text-center cell" data-cell="F2" data-format="$0,0[.]00" data-formula="(D2*E2)"></td>
																<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
														</tbody>
														<tfoot>
															<tr>
																<td colspan="3">Total Misc Cost :</td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="AD" data-format="$ 0,0.00" data-formula="SUM(D1:D2)"></td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="AE" data-format="$ 0,0.00" data-formula="SUM(E1:E2)"></td>
																<td colspan="2"><input class="form-control input-sm text-center cellblock" data-cell="AF" data-format="$ 0,0.00" data-formula="SUM(F1:F2)"></td>
															
															</tr>
														</tfoot>
													</table>
													
												</form>
											</div>
										</div>			
									 </div>
									 <div class="tab-pane p-l-20 p-r-20" id="subcon" role="tabpanel">
										<div class="row">
											<div class="col-sm-12">
												<br>
												<form action="#" class="form-horizontal" id="subcontable" method="POST">
													<div class="row">
														<div class="col-md-12">
															<button id="" class="add_item btn btn-sm btn-primary float-right">Add Item</button>
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
															<tr>
																<td><label data-cell="A1" data-format="0">1</label></td>
																<td><input class="form-control input-sm cell" data-cell="B1"></td>
																<td><input class="form-control input-sm cell" data-cell="C1"></td>
																<td><input onchange="subconchange();" class="form-control input-sm text-center cell" data-cell="D1" data-format="$ 0,0.00"></td>
																<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
															<tr>
																<td><label data-cell="A2" data-format="0">2</label></td>
																<td><input class="form-control input-sm cell" data-cell="B2"></td>
																<td><input class="form-control input-sm cell" data-cell="C2"></td>
																<td><input onchange="subconchange();" class="form-control input-sm text-center cell" data-cell="D2" data-format="$ 0,0.00"></td>
																<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>
															</tr>
														</tbody>
														<tfoot>
															<tr>
																<td colspan="3">Total SubContracts :</td>
																<td colspan="2"><input class="form-control input-sm text-center cellblock" data-cell="AD" data-format="$ 0,0.00" data-formula="SUM(D1:D2)"></td>
															</tr>
														</tfoot>
													</table>
													
												</form>
											</div>
										</div>
									 </div>
									 <div class="tab-pane p-l-20 p-r-20" id="bidsum" role="tabpanel">
										<div class="row">
											<div class="col-sm-12">
												<br>
												<form action="#" class="form-horizontal" id="bidsumtable">
													<div class="row">
														<div class="col-md-12">	
														</div>
													</div>
													<br>
													<div class="row">
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
																<td><label data-cell="A1" data-format="0">1</label></td>
																<td><label data-cell="B1" data-format="0">Labor</label></td>
																<td><label data-cell="C1" data-format="0">Per Hour</label></td>
																<td><input id="bid_labor_hour" onchange="bidsumchange();" class="form-control input-sm text-center cell" data-cell="D1" data-format="$ 0,0.00" ></td>
																<td><input onchange="bidsumchange();" class="form-control input-sm text-center cell" data-cell="E1" data-format="0,0.00 %" value="140"></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="F1" data-format="$0,0[.]00" data-formula="(E1*D1)"></td>
															</tr>
															<tr>
																<td><label data-cell="A2" data-format="0">2</label></td>
																<td><label data-cell="B2" data-format="0">Labor</label></td>
																<td><label data-cell="C2" data-format="0">Per Shift</label></td>
																<td><input id="bid_labor_shift" onchange="bidsumchange();" class="form-control input-sm text-center cell" data-cell="D2" data-format="$ 0,0.00"></td>
																<td><input onchange="bidsumchange();" class="form-control input-sm text-center cell" data-cell="E2" data-format="0,0.00 %" value="140"></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="F2" data-format="$0,0[.]00" data-formula="(E2*D2)"></td>
															</tr>
															<tr>
																<td><label data-cell="A3" data-format="0">3</label></td>
																<td><label data-cell="B3" data-format="0">Equipment</label></td>
																<td><label data-cell="C3" data-format="0">Per/Shift</label></td>
																<td><input id="bid_equip_hour" onchange="bidsumchange();" class="form-control input-sm text-center cell" data-cell="D3" data-format="$ 0,0.00" ></td>
																<td><input onchange="bidsumchange();" class="form-control input-sm text-center cell" data-cell="E3" data-format="0,0.00 %" value="140"></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="F3" data-format="$0,0[.]00" data-formula="(E3*D3)"></td>
															</tr>
															<tr>
																<td><label data-cell="A4" data-format="0">4</label></td>
																<td><label data-cell="B4" data-format="0">Equipment</label></td>
																<td><label data-cell="C4" data-format="0">Per/Shift</label></td>
																<td><input id="bid_equip_shift" onchange="bidsumchange();" class="form-control input-sm text-center cell" data-cell="D4" data-format="$ 0,0.00"></td>
																<td><input onchange="bidsumchange();" class="form-control input-sm text-center cell" data-cell="E4" data-format="0,0.00 %" value="140"></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="F4" data-format="$0,0[.]00" data-formula="(E4*D4)"></td>
															</tr>
															<tr>
																<td><label data-cell="A5" data-format="0">5</label></td>
																<td><label data-cell="B5" data-format="0">Materials</label></td>
																<td><label data-cell="C5" data-format="0"></label></td>
																<td><input id="bid_material_total" onchange="bidsumchange();" class="form-control input-sm text-center cell" data-cell="D5" data-format="$ 0,0.00" ></td>
																<td><input onchange="bidsumchange();" class="form-control input-sm text-center cell" data-cell="E5" data-format="0,0.00 %" value="140"></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="F5" data-format="$0,0[.]00" data-formula="(E5*D5)"></td>
															</tr>
															<tr>
																<td><label data-cell="A6" data-format="0">6</label></td>
																<td><label data-cell="B6" data-format="0">Misc</label></td>
																<td><label data-cell="C6" data-format="0"></label></td>
																<td><input id="bid_misc_total" onchange="bidsumchange();" class="form-control input-sm text-center cell" data-cell="D6" data-format="$ 0,0.00"></td>
																<td><input onchange="bidsumchange();" class="form-control input-sm text-center cell" data-cell="E6" data-format="0,0.00 %" value="140"></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="F6" data-format="$0,0[.]00" data-formula="(E6*D6)"></td>
															</tr>
															<tr>
																<td><label data-cell="A7" data-format="0">7</label></td>
																<td><label data-cell="B7" data-format="0">SubContract</label></td>
																<td><label data-cell="C7" data-format="0"></label></td>
																<td><input id="bid_subcon_total" onchange="bidsumchange();" class="form-control input-sm text-center cell" data-cell="D7" data-format="$ 0,0.00"></td>
																<td><input onchange="bidsumchange();" class="form-control input-sm text-center cell" data-cell="E7" data-format="0,0.00 %" value="140"></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="F7" data-format="$0,0[.]00" data-formula="(E7*D7)"></td>
															</tr>
														</tbody>
														<tfoot>
															<tr>
																<td colspan="3">Total :</td>
																<td><input class="form-control input-sm text-center cellblock" data-cell="AC" data-format="$ 0,0.00" data-formula="SUM(C7:C7)"></td>
																<td>&nbsp;</td>
																<td colspan="2"><input class="form-control input-sm text-center cellblock" data-cell="AE" data-format="$ 0,0.00" data-formula="SUM(F1:F7)"></td>
															</tr>
														</tfoot>
													</table>
													</div>
													<br>
													<div class="row">
														<div class="col-sm-6">
															<!---------- start with A ------->
															<table class="table-responsive">
																<tbody>
																	<tr>
																		<td>Labor Std.</td>
																		<td><input class="form-control input-sm cell text-center" data-cell="BA1"  data-format="$0,0[.]00" data-formula="D2 * #workingdays!A1"></td>
																	</tr>
																	<tr>
																		<td>Labor 1.5.</td>
																		<td><input class="form-control input-sm cell text-center" data-cell="BA2"  data-format="$0,0[.]00" data-formula="(D2 * 1.5) * #workingdays!A2"></td>
																	</tr>
																	<tr>
																		<td>Labor 2.</td>
																		<td><input class="form-control input-sm cell text-center" data-cell="BA3"  data-format="$0,0[.]00" data-formula="(D2 * 2) * #workingdays!A3"></td>
																	</tr>
																	<tr>
																		<td>Equipment</td>
																		<td><input class="form-control input-sm cell text-center" data-cell="BA4"  data-format="$0,0[.]00" data-formula="D4 * #workingdays!A4"></td>
																	</tr>
																	<tr>
																		<td>Materials</td>
																		<td><input class="form-control input-sm cell text-center" data-cell="BA5"  data-format="$0,0[.]00" data-formula="D5"></td>
																	</tr>
																	<tr>
																		<td>Misc</td>
																		<td><input class="form-control input-sm cell text-center" data-cell="BA6"  data-format="$0,0[.]00" data-formula="D6"></td>
																	</tr>
																	<tr>
																		<td>Sub Contract</td>
																		<td><input class="form-control input-sm cell text-center" data-cell="BA7"  data-format="$0,0[.]00" data-formula="D7"></td>
																	</tr>
																	<tr>																	
																	<td>Total Cost</td>
																		<td><input class="form-control input-sm cell text-center" data-cell="BA8"  data-format="$0,0[.]00" data-formula="SUM(BA1:BA7)"></td></tr>
																</tbody>
															</table>
														</div>
														<div class="col-sm-6">
															<!---------- start with B ------->
															<table class="table-responsive" id="qucklink">
																<tbody>
																	<tr>
																		<td>Labor Std.</td>
																		<td><input  class="form-control input-sm cell" data-cell="CA1"  data-format="$0,0[.]00" data-formula="(E1*D1) * #workingdays!A1"></td>
																	</tr>
																	<tr>
																		<td>Labor 1.5.</td>
																		<td><input class="form-control input-sm cell" data-cell="CA2"  data-format="$0,0[.]00" data-formula="((E2*D2) * 1.5) * #workingdays!A2"></td>
																	</tr>
																	<tr>
																		<td>Labor 2.</td>
																		<td><input class="form-control input-sm cell" data-cell="CA3" data-format="$0,0[.]00"  data-formula="(E2*D2) * #workingdays!A4"></td>
																	</tr>
																	<tr>
																		<td>Equipment</td>
																		<td><input class="form-control input-sm cell" data-cell="CA4"  data-format="$0,0[.]00" data-formula="(E4*D4) * #workingdays!A4"></td>
																	</tr>
																	<tr>
																		<td>Materials</td>
																		<td><input class="form-control input-sm cell" data-cell="CA5"  data-format="$0,0[.]00" data-formula="(E5*D5)" ></td>
																	</tr>
																	<tr>
																		<td>Misc</td>
																		<td><input class="form-control input-sm cell" data-cell="CA6" data-format="$0,0[.]00"  data-formula="(E6*D6)" ></td>
																	</tr>
																	<tr>
																		<td>Sub Contract</td>
																		<td><input class="form-control input-sm cell" data-cell="CA7"  data-format="$0,0[.]00" data-formula="(E7*D7)" ></td>
																	</tr>
																	<tr>																	
																		<td>Total Cost</td>
																		<td><input class="form-control input-sm cell" data-cell="CA8"  data-format="$0,0[.]00" data-formula="SUM(CA1:CA7)"></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</form>
											</div>
										</div>	
									 </div>
									 <div class="tab-pane p-l-20 p-r-20" id="jobbudj" role="tabpanel">
										<div class="row">
											<div class="col-sm-12">
												<br>
												<form action="#" class="form-horizontal" id="jobbudgetable" method="POST">
													<div class="row">
														<div class="col-md-12">
															
														</div>
													</div>
													<br>
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
																<td><label data-cell="A1" data-format="0">1</label></td>
																<td><label data-cell="B1" data-format="0">Misc</label></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="C1" data-format="$ 0,0.00" data-formula="#qucklink!CA6"></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="D1" data-format="0,0[.]00 %" data-formula="C1/AC"></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="E1" data-format="$ 0,0.00"></td>
															</tr>
															<tr>
																<td><label data-cell="A2" data-format="0">2</label></td>
																<td><label data-cell="B2" data-format="0">Labor</label></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="C2" data-format="$ 0,0.00" data-formula="#bidsumtable!CA1 + #bidsumtable!CA2 + #bidsumtable!CA3"></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="D2" data-format="0,0[.]00 %" data-formula="C2/AC"></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="E2" data-format="$ 0,0.00"></td>
															</tr>
															<tr>
																<td><label data-cell="A3" data-format="0">3</label></td>
																<td><label data-cell="B3" data-format="0">Equipment</label></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="C3" data-format="$ 0,0.00" data-formula="#bidsumtable!CA4"></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="D3" data-format="0,0[.]00 %" data-formula="C3/AC"></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="E3" data-format="$ 0,0.00"></td>
															</tr>
															<tr>
																<td><label data-cell="A4" data-format="0">4</label></td>
																<td><label data-cell="B4" data-format="0">Materialor</label></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="C4" data-format="$ 0,0.00" data-formula="#bidsumtable!CA5"></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="D4" data-format="0,0[.]00 %" data-formula="C4/AC"></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="E4" data-format="$ 0,0.00"></td>
																
															</tr>
															<tr>
																<td><label data-cell="A5" data-format="0">5</label></td>
																<td><label data-cell="B5" data-format="0">SubContractor</label></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="C5" data-format="$ 0,0.00"  data-formula="#bidsumtable!CA7"></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="D5" data-format="0,0[.]00 %" data-formula="C5/AC"></td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="E5" data-format="$ 0,0.00"></td>
															</tr>
														</tbody>
														<tfoot>
															<tr>
																<td colspan="2">Total Estimated Income:</td>
																<td ><input class="form-control input-sm text-center cellblock" data-cell="AC" data-format="$ 0,0.00" data-formula="SUM(C1:C2)"></td>
																<td ><input class="form-control input-sm text-center cellblock" data-cell="AD" data-format="$ 0,0.00" data-formula="SUM(D1:D2)"></td>
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
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="C10" data-format="$ 0,0.00" data-formula="#bidsumtable!BA1 + #bidsumtable!BA2 + #bidsumtable!BA3 "></td>
																<td class="text-center">-</td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="E10" data-format="$ 0,0.00"></td>
															</tr>
															<tr>
																<td colspan="2">Misc</td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="C11" data-format="$ 0,0.00" data-formula="#bidsumtable!BA6"></td>
																<td class="text-center">-</td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="E11" data-format="$ 0,0.00"></td>
															</tr>
															<tr>
																<td colspan="2">Permanent Materials</td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="C12" data-format="$ 0,0.00" data-formula="#bidsumtable!BA5"></td>
																<td class="text-center">-</td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="E12" data-format="$ 0,0.00"></td>
															</tr>
															<tr>
																<td colspan="2">Supplies/Incidentials/Fuel</td>
																<td><input id="supfuelmix" class="form-control input-sm text-center cell" data-cell="C13" data-format="$ 0,0.00" ></td>
																<td class="text-center">-</td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="E13" data-format="$ 0,0.00"></td>
															</tr>
															<tr>
																<td colspan="2">Outside Equipment Rental</td>
																<td><input class="form-control input-sm text-center cell" data-cell="C14" data-format="$ 0,0.00" data-formula="#workingdays!A4 * #equiptable!EA1"></td>
																<td class="text-center">-</td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="E14" data-format="$ 0,0.00"></td>
															</tr>
															<tr>
																<td colspan="2">Subsistence/Per Diem</td>
																<td><input id="subsperdiem" onchange="" class="form-control input-sm text-center cell" data-cell="C15" data-format="$ 0,0.00" ></td>
																<td class="text-center">-</td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="E15" data-format="$ 0,0.00"></td>
															</tr>
															<tr>
																<td colspan="2">Back Charges</td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="C16" data-format="$ 0,0.00"></td>
																<td class="text-center">-</td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="E16" data-format="$ 0,0.00"></td>
															</tr>
															<tr>
																<td colspan="5">&nbsp;</td>
															</tr>
															<tr>
																<td colspan="2">Total Job Costs</td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="C17" data-format="$ 0,0.00" data-formula="SUM(C10:C16)"></td>
																<td >Total Actual Cost</td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="E17" data-format="$ 0,0.00" data-formula="SUM(E10:E16)"></td>
															</tr>
															<tr>
																<td colspan="5"><hr></td>
															</tr>
															
															<tr>
																<td colspan="2">Gross Margin</td>
																<td><input class="form-control input-sm text-center cell" data-cell="C18" data-format="$ 0,0.00" data-formula="SUM(E1:E2) - SUM(C10:C17)"></td>
																<td >Percent:</td>
																<td><input class="form-control input-sm text-center cell" data-cell="E18" data-format="$ 0,0.00" data-formula="(SUM(E1:E2) - SUM(C10:C17)) / SUM(E1:E2) "></td>
															</tr>
															<tr>
																<td colspan="2">Internal Equipment Charge</td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="C19" data-format="$ 0,0.00"  data-formula="#workingdays!A4 * #equiptable!EA2"></td>
															</tr>
															<tr>
																<td colspan="2">Contribution to O/H Profit</td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="C20" data-format="$ 0,0.00" data-formula="C18 - C19"></td>
																<td >Percent:</td>
																<td><input onchange="" class="form-control input-sm text-center cell" data-cell="E20" data-format="$ 0,0.00" data-formula="C20 / SUM(E1:E2) "></td>
															</tr>
														</tfoot>
													</table>
													
												</form>
											</div>
										</div>
									 </div>
								  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
			<div class="col-md-3">
				<div class="stickyside is_stuck card">
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<h4 class="card-title">Quick Summary</h4>
								<hr>
								<form id="quicksummary">
									<div class="row">
										<div class="col-6">
												 <label>Labor Std.</label>
											</div>
											<div class="col-6">
												 <label><input id="qck_lbrstd" class="form-control input-sm cell text-center" data-cell="A1"  data-format="$ 0,0[.]00" data-formula="#bidsumtable!CA1" ></label>
											</div>
											
											<div class="col-6">
												 <label>Labor 1.5</label>
											</div>
											<div class="col-6">
												 <label><input id="qck_lbrstd15" class="form-control input-sm cell text-center" data-cell="A2"  data-format="$ 0,0[.]00" data-formula="#bidsumtable!CA2"></label>
											</div>
											
											<div class="col-6">
												 <label>Labor 2</label>
											</div>
											<div class="col-6">
												 <label><input id="qck_lbrstd2" class="form-control input-sm cell text-center" data-cell="A3"  data-format="$ 0,0[.]00" data-formula="#bidsumtable!CA3"></label>
											</div>
											
											<div class="col-6">
												 <label>Equipment</label>
											</div>
											<div class="col-6">
												 <label><input id="qck_equip" class="form-control input-sm cell text-center" data-cell="A4"  data-format="$ 0,0[.]00" data-formula="#bidsumtable!CA4"></label>
											</div>
											
											<div class="col-6">
												 <label>Materials</label>
											</div>
											<div class="col-6">
												 <label><input id="qck_material" class="form-control input-sm cell text-center" data-cell="A5"  data-format="$ 0,0[.]00" data-formula="#bidsumtable!CA5"></label>
											</div>
											
											<div class="col-6">
												 <label>Mobilization</label>
											</div>
											<div class="col-6">
												 <label><input id="qck_mobil" class="form-control input-sm cell text-center" data-cell="A6"  data-format="$ 0,0[.]00" data-formula="#bidsumtable!CA6"></label>
											</div>
											
											<div class="col-6">
												 <label>Subcontracts</label>
											</div>
											<div class="col-6">
												 <label><input id="qck_subcon" class="form-control input-sm cell text-center" data-cell="A7"  data-format="$ 0,0[.]00" data-formula="#bidsumtable!CA7"></label>
											</div>
											<div class="col-12">
												<hr>
											</div>
											<div class="col-6">
												 <label>Total Bid</label>
											</div>
											<div class="col-6">
												 <label><input class="form-control input-sm cell text-center" data-cell="A8"  data-format="$0,0[.]00" data-formula="SUM(A1:A7)"></label>
											</div>
									</div>
									<br>
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
														 <label><input id="liabilities" class="form-control input-sm cell text-center" data-cell="A9"  data-format="$0,0[.]00" data-formula="SUM(A1:A7)* 0.018"></label>
													</div>
													
													<div class="col-6">
														 <label>Price/CF</label>
													</div>
													<div class="col-6">
														 <label><input class="form-control input-sm cell text-center" data-cell="A10"  data-format="$0,0[.]00" data-formula="SUM(A1:A7) * #workingdays!A5"></label>
													</div>
													
													<div class="col-6">
														 <label>Price/Pt</label>
													</div>
													<div class="col-6">
														 <label><input class="form-control input-sm cell text-center" data-cell="A11"  data-format="$0,0[.]00" data-formula="SUM(A1:A7) * #workingdays!A6"></label>
													</div>
									
													
												</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			
</div>
		
		<footer class="footer">
			© 2018 Geo Grout Inc
		</footer>
</div>

<script>
	$(document).ready(function() {
		$(".preloader").fadeOut();
	});
	
	
	
	function showbreakdown(){
		$('#estimatebreakdown').toggle();
		$('#estimateinfo').toggle();
	}
	
	$formquicksum = $('#quicksummary').calx();
	$formworkdays = $('#workingdays').calx();
	
	$form = $('#labor').calx();
    $counterlabor  = 10;
	$('#labor .add_item').click(function(e){
		$itemlist   = $('#laboritemlist');		
        e.preventDefault();
        var i = ++$counterlabor;
		$itemlist.append('<tr><td><label data-cell="A'+i+'" data-format="0">'+i+'</label></td>\
				<td><input type="text" class="form-control input-sm cell" data-cell="B'+ i +'"></td>\
				<td><input type="text" onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="C'+i+'" data-format="0"></td>\
				<td><input type="text" onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="D'+i+'" data-format="$ 0,0.00"></td>\
				<td><input type="text" onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="E'+i+'" data-format="$ 0,0.00"></td>\
				<td><input type="text" onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="F'+i+'" data-format="$0,0[.]00" data-formula="(C'+i+'*(D'+i+'+E'+i+')) * AA1"></td>\
				<td><input type="text" onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="G'+i+'" data-format="$ 0,0.00"></td>\
				<td><input type="text" onchange="laborchange();" class="form-control input-sm text-center cell" data-cell="H'+i+'" data-format="$0,0[.]00" data-formula="(F'+i+'*8)+(G'+i+'+C'+i+')"></td>\
				<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td></tr>');
			$form.calx('update');
					
			$form.calx('getCell', 'AH').setFormula('SUM(H1:H'+i+')');
			$form.calx('getCell', 'AG').setFormula('SUM(G1:G'+i+')');
			$form.calx('getCell', 'AF').setFormula('SUM(F1:F'+i+')');
			$form.calx('getCell', 'AE').setFormula('SUM(E1:E'+i+')');
			$form.calx('getCell', 'AD').setFormula('SUM(D1:D'+i+')');
			$form.calx('getCell', 'AC').setFormula('SUM(C1:C'+i+')');	
                //console.log($form.calx('getSheet'));
				
			bidsumchange();
        });
	
	function laborchange() {
		var i = $counterlabor;
		$form = $('#labor').calx();
		
		$form.calx('getCell', 'AH').setFormula('SUM(H1:H'+i+')');
		$form.calx('getCell', 'AG').setFormula('SUM(G1:G'+i+')');
		$form.calx('getCell', 'AF').setFormula('SUM(F1:F'+i+')');
		$form.calx('getCell', 'AE').setFormula('SUM(E1:E'+i+')');
		$form.calx('getCell', 'AD').setFormula('SUM(D1:D'+i+')');
		$form.calx('getCell', 'AC').setFormula('SUM(C1:C'+i+')');
		$form.calx('update');

	}
	
	
	$('#labor .input-sm').change(function(e){
		$form = $('#labor').calx();
		$form.calx('getCell', 'AH').calculate();
		e.preventDefault();
		var bidlbr_ph = $form.calx('getCell', 'AH').getValue();
		var diem = $form.calx('getCell', 'AG').getValue();
		
		$formbidsum = $('#bidsumtable').calx();
		$('#bid_labor_hour').val(bidlbr_ph / 8);
		$('#bid_labor_shift').val(bidlbr_ph);
		
		$('#subsperdiem').val(diem * $('#totaldays').val());
		$formbidsum.calx('update');
	
	});
		
	$('#labor .btn-remove').click(function(e){
		e.preventDefault();
		// $(this).closest("tr").remove();
		$(this).parent().parent().remove();
		$form = $('#labor').calx();
		$form.calx('update');
		$form.calx('getCell', 'AH').calculate();
		$form.calx('getCell', 'AG').calculate();
		$form.calx('getCell', 'AF').calculate();
		$form.calx('getCell', 'AE').calculate();
		$form.calx('getCell', 'AD').calculate();
		$form.calx('getCell', 'AC').calculate();
	});
		
	$countermaterial  = 2;
	$formmat = $('#materialtable').calx();
	
	$('#materialtable .add_item').click(function(e){
		$itemlist   = $('#materialitemlist');
			e.preventDefault();
			var o = ++$countermaterial;	
			$itemlist.append('<tr>\
				<td><label data-cell="A'+ o +'" data-format="0">'+ o +'</label></td>\
				<td><input class="form-control input-sm cell" data-cell="B'+ o +'"></td>\
				<td><input class="form-control input-sm cell" data-cell="C'+ o +'"></td>\
				<td><input onchange="materialchange();" class="form-control input-sm text-center cell" data-cell="D'+ o +'" data-format="0,0.00"></td>\
				<td><input onchange="materialchange();" class="form-control input-sm text-center cell" data-cell="E'+ o +'" data-format="$ 0,0.00" ></td>\
				<td><input onchange="materialchange();" class="form-control input-sm text-center cell" data-cell="F'+ o +'" data-format="$0,0[.]00" data-formula="D'+ o +'*E'+ o +'"></td>\
				<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>\
			</tr>');
			
			$formmat.calx('getCell', 'AF1').setFormula('SUM(F1:F'+ o +')');
            $formmat.calx('update');
           
		
      });
	  
	function materialchange() {
		var o = $countermaterial;
		$formmat = $('#materialtable').calx();
        $formmat.calx('getCell', 'AF1').setFormula('SUM(F1:F'+ o +')');
		$formmat.calx('update');
		
		$formmat = $('#materialtable').calx();
		var cellmat = $formmat.calx('getCell', 'AA4').getValue() ;
		$formbidsum = $('#bidsumtable').calx();
		$('#bid_material_total').val(cellmat);
		
		$formbidsum.calx('update');
	}
	
	
		
	$('#materialtable .btn-remove').click(function(e){
		e.preventDefault();
		//$(this).closest("tr").remove();
		$(this).parent().parent().remove();
		$formmat = $('#materialtable').calx();
		$formmat.calx('update');
		$formmat.calx('getCell', 'AF1').calculate();
		$formmat.calx('getCell', 'AF2').calculate();
		$formmat.calx('getCell', 'AA4').calculate();
	});
	
	$countermisc  = 2;
	$formmisc = $('#misctable').calx();
	$('#misctable .add_item').click(function(e){
		$itemlist   = $('#miscitemlist');
                e.preventDefault();
                var l = ++$countermisc;	
				$itemlist.append('<tr>\
									<td><label data-cell="A'+ l +'" data-format="0">'+ l +'</label></td>\
									<td><input class="form-control input-sm cell" data-cell="B'+ l +'"></td>\
									<td><input class="form-control input-sm cell" data-cell="C'+ l +'"></td>\
									<td><input onchange="miscchange();" class="form-control input-sm text-center cell" data-cell="D'+ l +'" data-format="0,0.00"></td>\
									<td><input onchange="miscchange();" class="form-control input-sm text-center cell" data-cell="E'+ l +'" data-format="$ 0,0.00"></td>\
									<td><input onchange="miscchange();" class="form-control input-sm text-center cell" data-cell="F'+ l +'" data-format="$0,0[.]00" data-formula="(D'+ l +'*E'+ l +')"></td>\
									<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>\
									</tr>');
		$formmisc.calx('update');
		$formmisc.calx('getCell', 'AF').setFormula('SUM(F1:F'+l+')');
		$formmisc.calx('getCell', 'AE').setFormula('SUM(E1:E'+l+')');
		$formmisc.calx('getCell', 'AD').setFormula('SUM(D1:D'+l+')'); 
		//console.log($form.calx('getSheet'));
     });
			
	function miscchange() {
		var l = $countermisc;
		$formmisc = $('#misctable').calx();
		$formmisc.calx('update');
		$formmisc.calx('getCell', 'AF').setFormula('SUM(F1:F'+l+')');
		$formmisc.calx('getCell', 'AE').setFormula('SUM(E1:E'+l+')');
		$formmisc.calx('getCell', 'AD').setFormula('SUM(D1:D'+l+')');
		
	
	}
	
	$('#misctable .input-sm ').click(function(e){
		$formmisc = $('#misctable').calx();
		e.preventDefault();
		
		$formmisc.calx('getCell', 'AF').calculate();
		var misctot = $formmisc.calx('getCell', 'AF').getValue();
		
		$formbidsum = $('#bidsumtable').calx();
		$('#bid_misc_total').val(misctot);
		
		$formbidsum.calx('update');
	});	
		
	$('#misctable .btn-remove').click(function(e){
		e.preventDefault();
		// $(this).closest("tr").remove();
		$(this).parent().parent().remove();
		$formmisc = $('#misctable').calx();
		$formmisc.calx('update');
		$formmisc.calx('getCell', 'AF').calculate();
		$formmisc.calx('getCell', 'AE').calculate();
		$formmisc.calx('getCell', 'AD').calculate();
	});		
			
	$countersubcon  = 2;
	$formsubcon = $('#subcontable').calx();
	
	$('#subcontable .add_item').click(function(e){
		$formsubcon = $('#subcontable').calx();
		$itemlist = $('#subconitemlist');
			e.preventDefault();
			var ii = ++$countersubcon;	
			$itemlist.append('<tr>\
								<td><label data-cell="A'+ ii +'" data-format="0">'+ ii +'</label></td>\
								<td><input class="form-control input-sm cell" data-cell="B'+ ii +'"></td>\
								<td><input class="form-control input-sm cell" data-cell="C'+ ii +'"></td>\
								<td><input onchange="subconchange();" class="form-control input-sm text-center cell" data-cell="D'+ ii +'" data-format="$ 0,0.00"></td>\
								<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>\
							</tr>');
			$formsubcon.calx('update');
			$formsubcon.calx('getCell', 'AD').setFormula('SUM(D1:D'+ ii +')');
     });
	 
	 function subconchange(){
		 var ii = ++$countersubcon;
		$formsubcon = $('#subcontable').calx();
		$formsubcon.calx('update');
		$formsubcon.calx('getCell', 'AD').setFormula('SUM(D1:D'+ ii +')');
		
	 }
	 
	 $('#subcontable .input-sm ').click(function(e){
		$formsubcon = $('#subcontable').calx();
		e.preventDefault();
		
		$formsubcon.calx('getCell', 'AD').calculate();
		var subcontot = $formsubcon.calx('getCell', 'AD').getValue();
		
		$formbidsum = $('#bidsumtable').calx();
		$('#bid_subcon_total').val(subcontot);
		
		$formbidsum.calx('update');
	});	
	 
	 $('#subcontable .btn-remove').click(function(e){
		$formsubcon = $('#subcontable').calx();
		var oo = $counterequiprent;
		e.preventDefault();
		$(this).parent().parent().remove();
		$formsubcon.calx('update');
		$formsubcon.calx('getCell', 'AD').setFormula('SUM(D1:D'+ ii +')');
	});	
	
	$counterequip = 4;
	$counterequip_rent = 4;
	$formequip = $('#equiptable').calx();
	
	$('#mainequip').click(function(e){
		 e.preventDefault();
		 $formequip = $('#equiptable').calx();
		 $itemlist   = $('#equipitemlist');
		 var mainitemlist = $('#equiptable').calx('getCell', 'EA1').getFormula();
         
		 e.preventDefault();
         var aa = ++$counterequip;	
				$itemlist.append('<tr>\
									<td><label data-cell="A'+ aa +'" data-format="0">'+ aa +'</label></td>\
									<td><input class="form-control input-sm cell" data-cell="B'+ aa +'"></td>\
									<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="C'+ aa +'" data-format="0,0.00"></td>\
									<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="D'+ aa +'" data-format="$ 0,0.00"></td>\
									<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="E'+ aa +'" data-format="$ 0,0.00" data-formula="(C'+ aa +'*D'+ aa +')*8"></td>\
									<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="F'+ aa +'" data-format="$0,0[.]00"></td>\
									<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="G'+ aa +'" data-format="$ 0,0.00" data-formula="(F'+ aa +'*C'+ aa +')"></td>\
									<td class="text-center"><button onsubmit="return false;" class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>\
								</tr>');
       
	   
		$formequip.calx('getCell', 'AF').setFormula('SUM(F1:F'+ aa +')');
		$formequip.calx('getCell', 'AE').setFormula('SUM(E1:E'+ aa +')');
		$formequip.calx('getCell', 'AD').setFormula('SUM(D1:D'+ aa +')'); 
		$formequip.calx('getCell', 'AC').setFormula('SUM(C1:C'+ aa +')'); 
		
		$formequip.calx('getCell', 'EA1').setFormula(mainitemlist +	' +  E' + aa); 
		$formequip.calx('update');
		
	});
	
	$('#equipitemlist .btn-remove').click(function(e){
		e.preventDefault();
		var aa = $counterequip;	
		$formequip = $('#equiptable').calx();
		 $(this).parent().parent().remove();
		$formequip.calx('getCell', 'AF').setFormula('SUM(F1:F'+ aa +')');
		$formequip.calx('getCell', 'AE').setFormula('SUM(E1:E'+ aa +')');
		$formequip.calx('getCell', 'AD').setFormula('SUM(D1:D'+ aa +')'); 
		$formequip.calx('getCell', 'AC').setFormula('SUM(C1:C'+ aa +')'); 
		$formequip.calx('getCell', 'EA1').setFormula('E1 + E2 + E' + aa); 
		$formequip.calx('update');
		$formequip.calx('getCell', 'EA1').calculate();
		equipchange();
	});	
	
	$('#rentequip').click(function(e){
		 e.preventDefault();
		 $formequip = $('#equiptable').calx();
		 $itemlist   = $('#rentalitemlist');
		 var rentitemlist = $('#equiptable').calx('getCell', 'EA2').getFormula();
         var aa = ++$counterequip;	
		$itemlist.append('<tr>\
							<td><label data-cell="A'+ aa +'" data-format="0">'+ aa +'</label></td>\
							<td><input class="form-control input-sm cell" data-cell="B'+ aa +'"></td>\
							<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="C'+ aa +'" data-format="0,0.00"></td>\
							<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="D'+ aa +'" data-format="$ 0,0.00"></td>\
							<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="E'+ aa +'" data-format="$ 0,0.00" data-formula="(C'+ aa +'*D'+ aa +')*8"></td>\
							<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="F'+ aa +'" data-format="$0,0[.]00"></td>\
							<td><input onchange="equipchange();" class="form-control input-sm text-center cell" data-cell="G'+ aa +'" data-format="$ 0,0.00" data-formula="(F'+ aa +'*C'+ aa +')"></td>\
							<td class="text-center"><button class="btn-remove btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i></button></td>\
						</tr>');
       
		$formequip.calx('getCell', 'AG').setFormula('SUM(G1:G'+ aa +')');
		$formequip.calx('getCell', 'AF').setFormula('SUM(F1:F'+ aa +')');
		$formequip.calx('getCell', 'AE').setFormula('SUM(E1:E'+ aa +')');
		$formequip.calx('getCell', 'AD').setFormula('SUM(D1:D'+ aa +')'); 
		$formequip.calx('getCell', 'AC').setFormula('SUM(C1:C'+ aa +')'); 
		
		$formequip.calx('getCell', 'EA2').setFormula(mainitemlist +	' +  E' + aa); 
		$formequip.calx('update');
		equipchange();
		 
	});
	
	 $('#rentalitemlist .btn-remove').click(function(e){
		 var aa = $counterequip;	
		 $formequip = $('#equiptable').calx();
         e.preventDefault();
		 $(this).parent().parent().remove();
		$formequip.calx('getCell', 'AG').setFormula('SUM(G1:G'+ aa +')');
		$formequip.calx('getCell', 'AF').setFormula('SUM(F1:F'+ aa +')');
		$formequip.calx('getCell', 'AE').setFormula('SUM(E1:E'+ aa +')');
		$formequip.calx('getCell', 'AD').setFormula('SUM(D1:D'+ aa +')'); 
		$formequip.calx('getCell', 'AC').setFormula('SUM(C1:C'+ aa +')'); 
		$formequip.calx('getCell', 'EA2').setFormula('E3 + E4 + E' + aa); 
		
		$formequip.calx('update');
		$formequip.calx('getCell', 'EA2').calculate(); 
		equipchange();
		
	
	});	
	
	function equipchange(){

		var aa = $counterequip;
		
		$formequip = $('#equiptable').calx();
		$formequip.calx('getCell', 'AG').setFormula('SUM(G1:G'+ aa +')');
		$formequip.calx('getCell', 'AF').setFormula('SUM(F1:F'+ aa +')');
		$formequip.calx('getCell', 'AE').setFormula('SUM(E1:E'+ aa +')');
		$formequip.calx('getCell', 'AD').setFormula('SUM(D1:D'+ aa +')'); 
		$formequip.calx('getCell', 'AC').setFormula('SUM(C1:C'+ aa +')'); 
		
		$formequip.calx('getCell', 'BE').setFormula('(SUM(E1:E'+ aa +') * 1.1) + (SUM(G1:G'+ aa +') * 1.1 * AA1)');
		$formequip.calx('getCell', 'CE').setFormula('(SUM(E1:E'+ aa +') * 1.1) + (SUM(G1:G'+ aa +') * 1.1 * AA1)');
		$formequip.calx('getCell', 'DE').setFormula('((SUM(E1:E'+ aa +') * 1.1) + (SUM(G1:G'+ aa +') * 1.1 * AA1)) / 8');
		
		$formequip.calx('getCell', 'EA1').calculate(); 
		$formequip.calx('getCell', 'EA2').calculate();
		$formequip.calx('getCell', 'CE').calculate();
		$formequip.calx('getCell', 'DE').calculate();		
		$formequip.calx('calculate');
		$formequip.calx('update');
		
	}
	
	$('#equiptable .input-sm').change(function(e){

		e.preventDefault();
		$formequip = $('#equiptable').calx();
		
		var bid_equip_hr = $formequip.calx('getCell', 'CE').getValue();
		var bid_equip_sh = $formequip.calx('getCell', 'DE').getValue();
		var totsubco = $formequip.calx('getCell', 'AG').getValue() ;
		var fueldata = $formequip.calx('evaluate', 'AA1');
		
		var supflmix = (fueldata * totsubco) * $('#totaldays').val();
		$('#bid_equip_hour').val(bid_equip_hr);
		$('#bid_equip_shift').val(bid_equip_sh);
		$('#supfuelmix').val(supflmix);
		
		bidsumchange();
		//$formequip.calx('update');
		//$formbidsum.calx('update');
	
	
	});
	
/*
	$('#equiptable .input-sm').change(function(e){
		e.preventDefault();
		$formequip = $('#equiptable').calx();
		
		var bid_equip_hr = $formequip.calx('getCell', 'CE').getValue();
		var bid_equip_sh = $formequip.calx('getCell', 'DE').getValue() ;
	
		$formbidsum = $('#bidsumtable').calx();
		$('#bid_equip_hour').val(bid_equip_hr);
		$('#bid_equip_shift').val(bid_equip_sh);
		
		
		$formbidsum.calx('update');
		$formequip.calx('update');
	});
	
	*/
	$formbidsum = $('#bidsumtable').calx();
	
	function bidsumchange(){
		$formbidsum = $('#bidsumtable').calx();
		$formbidsum.calx('getCell', 'F1').calculate();
		$formbidsum.calx('getCell', 'F2').calculate();
		$formbidsum.calx('getCell', 'F3').calculate();
		$formbidsum.calx('getCell', 'F4').calculate();
		$formbidsum.calx('getCell', 'F5').calculate();
		$formbidsum.calx('getCell', 'F6').calculate();
		$formbidsum.calx('getCell', 'F7').calculate();
		
		$formbidsum.calx('getCell', 'BA1').calculate();
		$formbidsum.calx('getCell', 'BA2').calculate();
		$formbidsum.calx('getCell', 'BA3').calculate();
		$formbidsum.calx('getCell', 'BA4').calculate();
		$formbidsum.calx('getCell', 'BA5').calculate();
		$formbidsum.calx('getCell', 'BA6').calculate();
		$formbidsum.calx('getCell', 'BA7').calculate();
		$formbidsum.calx('getCell', 'BA8').calculate();

		$formbidsum.calx('getCell', 'CA1').calculate();
		$formbidsum.calx('getCell', 'CA2').calculate();
		$formbidsum.calx('getCell', 'CA3').calculate();
		$formbidsum.calx('getCell', 'CA4').calculate();
		$formbidsum.calx('getCell', 'CA5').calculate();
		$formbidsum.calx('getCell', 'CA6').calculate();
		$formbidsum.calx('getCell', 'CA7').calculate();
		$formbidsum.calx('getCell', 'CA8').calculate();
		$formbidsum.calx('update');
		
		
		//refreshquicksum();
	}
	
	function refreshquicksum(){
		$formbidsum = $('#bidsumtable').calx();
		$formquicksum = $('#quicksummary').calx();
		
		$lb = $formbidsum.calx('getCell', 'CA1').getValue();
		$("#qck_lbrstd").val($lb);
		$formquicksum.calx('getCell', 'A1').calculate();
		
		$lb1 = $formbidsum.calx('getCell', 'CA2').getValue();
		$("#qck_lbrstd15").val($lb1);
		$formquicksum.calx('getCell', 'A2').calculate();
		
		$lb2 = $formbidsum.calx('getCell', 'CA3').getValue();
		$("#qck_lbrstd2").val($lb2);
		$formquicksum.calx('getCell', 'A3').calculate();
		
		$eq = $formbidsum.calx('getCell', 'CA4').getValue();
		$("#qck_equip").val($eq);
		$formquicksum.calx('getCell', 'A4').calculate();
		
		$mat = $formbidsum.calx('getCell', 'CA5').getValue();
		$("#qck_material").val($mat);
		$formquicksum.calx('getCell', 'A5').calculate();
		
		$mobil = $formbidsum.calx('getCell', 'CA6').getValue();
		$("#qck_mobil").val($mobil);
		$formquicksum.calx('getCell', 'A6').calculate();
		
		$subcon = $formbidsum.calx('getCell', 'CA7').getValue();
		$("#qck_subcon").val($subcon);
			
		$formquicksum.calx('update');
		
		//$formquicksum.calx('getCell', 'A7').calculate();
		//$formquicksum.calx('getCell', 'A9').calculate();
		//$formquicksum.calx('getCell', '10').calculate();
	
	}
	
	$formjobbudget= $('#jobbudgetable').calx();
	
</script>