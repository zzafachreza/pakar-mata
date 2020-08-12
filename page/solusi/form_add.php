							<div class="kt-portlet">



										<!--begin::Form-->

										<form class="kt-form" id="formAdd" enctype="multipart/form-data">

											<div class="kt-portlet__body">

												<div class="row">

													<div class="col col-sm-12">

														<div class="form-group">

															<label>ID :</label>

															<input name="id" type="text" class="form-control" placeholder="Enter ID">

															<span class="form-text text-muted">Please enter your id</span>

														</div>
														<div class="form-group">

															<label>hasil :</label>

															<input name="hasil" type="text" class="form-control" placeholder="Enter hasil">

															<span class="form-text text-muted">Please enter your hasil</span>

														</div>

														<div class="form-group">

															<label>ciri :</label>

															<input name="ciri" type="text" class="form-control" placeholder="Enter ciri">

															<span class="form-text text-muted">Please enter your ciri</span>

														</div>

														<div class="form-group">

															<label>solusi :</label>

															<input name="solusi" type="text" class="form-control" placeholder="Enter solusi">

															<span class="form-text text-muted">Please enter your solusi</span>

														</div>
														

														

													</div>
													

												</div>

												

												
											<div class="kt-portlet__foot kt-portlet__foot--solid">

												<div class="kt-form__actions kt-form__actions--right">

													 <a onclick="MenuSolusi()"  class="btn btn-clean kt-margin-r-10">

													<i class="la la-arrow-left"></i>

													<span class="kt-hidden-mobile">Back</span>

													</a>

													<button type="SUBMIT" class="btn btn-brand">Submit</button>

													<button type="reset" class="btn btn-secondary">Cancel</button>

													

												</div>

											</div>





										</form>



										<!--end::Form-->

							</div>

							<script type="text/javascript">
								
									$("#formAdd").submit(function(e){
										e.preventDefault();

										var data = $(this).serialize();

										$.ajax({
											url:'api/solusi_add.php',
											type:'POST',
											data:data,
											success:function(data){
												if (data==200) {

													MenuSolusi();
													Not("data berhasil ditambah","success","check-circle");
												
												}else{
													alert(data);
												}
											}
										})

									});

							</script>