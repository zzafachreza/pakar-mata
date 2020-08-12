							<div class="kt-portlet">



										<!--begin::Form-->

										<form class="kt-form" id="formAdd" enctype="multipart/form-data">

											<div class="kt-portlet__body">

												<div class="row">

													<div class="col col-sm-12">

											
														<div class="form-group">

															<label>judul :</label>

															<input name="judul" type="text" class="form-control" placeholder="Enter judul">

															<span class="form-text text-muted">Please enter your judul</span>

														</div>

														<div class="form-group">

															<label>isi :</label>

															<input name="isi" type="text" class="form-control" placeholder="Enter isi">

															<span class="form-text text-muted">Please enter your isi</span>

														</div>
														

														

													</div>
													

												</div>

												

												
											<div class="kt-portlet__foot kt-portlet__foot--solid">

												<div class="kt-form__actions kt-form__actions--right">

													 <a onclick="MenuGangguan()"  class="btn btn-clean kt-margin-r-10">

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
											url:'api/artikel_add.php',
											type:'POST',
											data:data,
											success:function(data){
												if (data==200) {

													MenuArtikel();
													Not("data berhasil ditambah","success","check-circle");
												
												}else{
													alert(data);
												}
											}
										})

									});

							</script>