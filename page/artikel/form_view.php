<?php

 header("Access-Control-Allow-Origin: *");

 include_once '../../api/koneksi.php';

$id = $_POST['id'];





$sql = "SELECT * FROM artikel WHERE id='$id'";

$data = $conn->query($sql)->fetch();

// var_dump($data);

?>
<div class="kt-portlet">



										<!--begin::Form-->

										<form class="kt-form" id="formEdit" enctype="multipart/form-data">

											<div class="kt-portlet__body">

												<div class="row">

													<div class="col col-sm-12">

													
															<input value="<?php echo $data['id'] ?>" name="id" type="hidden" class="form-control" placeholder="Enter ID">

															
														<div class="form-group">

															<label>judul :</label>

														
															<textarea name="judul" class="form-control"><?php echo $data['judul'] ?></textarea>

															<span class="form-text text-muted">Please enter your judul</span>

														</div>

														<div class="form-group">

															<label>isi :</label>

															<textarea name="isi" class="form-control"><?php echo $data['isi'] ?></textarea>

															<span class="form-text text-muted">Please enter your isi</span>

														</div>
														
														

													</div>
													

												</div>

												

												
											<div class="kt-portlet__foot kt-portlet__foot--solid">

												<div class="kt-form__actions kt-form__actions--right">

													 <a onclick="MenuArtikel()"  class="btn btn-clean kt-margin-r-10">

													<i class="la la-arrow-left"></i>

													<span class="kt-hidden-mobile">Back</span>

													</a>

													<button type="SUBMIT" class="btn btn-brand">Edit</button>

													<button type="reset" class="btn btn-secondary">Cancel</button>

													

												</div>

											</div>





										</form>



										<!--end::Form-->

							</div>

							<script type="text/javascript">
								
									$("#formEdit").submit(function(e){
										e.preventDefault();

										var data = $(this).serialize();

										$.ajax({
											url:'api/artikel_edit.php',
											type:'POST',
											data:data,
											success:function(data){
												if (data==200) {

													MenuArtikel();
													Not("data berhasil diedit","success","check-circle");
												
												}else{
													alert(data);
												}
											}
										})

									});

							</script>

																


