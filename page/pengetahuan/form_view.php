<?php

 header("Access-Control-Allow-Origin: *");

 include_once '../../api/koneksi.php';

$id = $_POST['id'];





$sql = "SELECT * FROM master_pengetahuan WHERE id='$id'";

$data = $conn->query($sql)->fetch();

// var_dump($data);

?>
<div class="kt-portlet">



										<!--begin::Form-->

										<form class="kt-form" id="formEditPengetahuan" enctype="multipart/form-data">

											<div class="kt-portlet__body">

												<div class="row">

													<div class="col col-sm-6">

													
															<input value="<?php echo $data['id'] ?>" name="id" type="hidden" class="form-control" placeholder="Enter ID">

															
														<div class="form-group">

															<label>Pertanyaan :</label>

															<input value="<?php echo $data['pertanyaan'] ?>" name="pertanyaan" type="text" class="form-control" placeholder="Enter pertanyaan">

															<span class="form-text text-muted">Please enter your pertanyan</span>

														</div>
														<div class="form-group">

															<label>Ifyes :</label>

															<input value="<?php echo $data['ifyes'] ?>" name="ifyes" type="text" class="form-control" placeholder="Enter ifyes">

															<span class="form-text text-muted">Please enter your ifyes</span>

														</div>
														<div class="form-group">

															<label>Ifno :</label>

															<input value="<?php echo $data['ifno'] ?>" name="ifno" type="text" class="form-control" placeholder="Enter ifno">

															<span class="form-text text-muted">Please enter your ifno</span>

														</div>

														

													</div>
													<div class="col-sm-6">

														<div class="form-group">

															<label>ID Gangguan :</label>

															<input value="<?php echo $data['id_gangguan'] ?>" name="id_gangguan" type="text" class="form-control" placeholder="Enter ID Gangguan">

															<span class="form-text text-muted">Please enter your ID Gangguan</span>

														</div>

														<div class="form-group">

															<label>ID Solusi</label>

															<input value="<?php echo $data['id_solusi'] ?>" name="id_solusi" type="text" class="form-control" placeholder="Enter ID Solusi">

															<span class="form-text text-muted">Please enter your ID Solusi</span>

														</div>
														
													</div>

												</div>

												

												
											<div class="kt-portlet__foot kt-portlet__foot--solid">

												<div class="kt-form__actions kt-form__actions--right">

													 <a onclick="MenuPengetahuan()"  class="btn btn-clean kt-margin-r-10">

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
								
									$("#formEditPengetahuan").submit(function(e){
										e.preventDefault();

										var data = $(this).serialize();

										$.ajax({
											url:'api/pengetahuan_edit.php',
											type:'POST',
											data:data,
											success:function(data){
												if (data==200) {

													MenuPengetahuan();
													Not("data berhasil diedit","success","check-circle");
												
												}else{
													alert(data);
												}
											}
										})

									});

							</script>

																


