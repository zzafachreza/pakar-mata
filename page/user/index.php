<?php
 header("Access-Control-Allow-Origin: *");
 

?>


							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-char"></i>
										</span>
									
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">
													<button type="button" id="btnUserPilih"  class="btn btn-danger btn-icon-sm" >
														<i class="la la-trash"></i> Delete
													</button>
											
												&nbsp;
												<button onclick="AddUser()" class="btn btn-brand btn-elevate btn-icon-sm">
													<i class="la la-plus"></i>
													New Record
												</button>
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body" style="padding-right: 10%;padding-left: 10%">

									<!--begin: Datatable -->
									<table class="table table-striped table-bordered table-hover table-checkable" id="tableUser" style="width: 500px">
											   <thead>
										            <tr>
										            	<th>
										            	<label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid">
										            		<input type="checkbox" id="select_all">&nbsp;<span></span>
										            	</label>
										            	</th>
										            	<th>Foto</th>
										                <th>username</th>
										                <th>nama_lengkap</th>
										                <th>Level</th>
										                <th></th>
										            </tr>
										        </thead>
									</table>

									<!--end: Datatable -->
								</div>
							</div>
		


