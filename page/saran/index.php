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

													<button type="button" id="btnPilihAll"  class="btn btn-danger btn-icon-sm" >

														<i class="la la-trash"></i> Delete

													</button>

												

											</div>

										</div>

									</div>

								</div>

								<div class="kt-portlet__body">



									<!--begin: Datatable -->

									<table class="table table-striped- table-bordered table-hover table-checkable" id="tableData">

											   <thead>

										             <tr>

										            	<th>
										            		<label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid">
										            		<input type="checkbox" id="select_all">&nbsp;<span></span>
										            		</label>
										            	</th>

									
									
										                <th>nama</th>
										                <th>email</th>
										                <th>subjek</th>
										                <th>pesan</th>
										                <th>tanggal</th>
										                <th>time</th>

										                

										            </tr>
										            </tr>

										        </thead>

									</table>



									<!--end: Datatable -->

								</div>

							</div>

		





