<?php

 header("Access-Control-Allow-Origin: *");

 include_once '../../api/koneksi.php';

$id = $_POST['id'];





$sql = "SELECT * FROM master_gangguan WHERE id='$id'";

$data = $conn->query($sql)->fetch();

// var_dump($data);

?>
<div class="kt-portlet">



										<!--begin::Form-->

										<form class="kt-form" id="formEditGangguan" enctype="multipart/form-data">

											<div class="kt-portlet__body">

												<div class="row">

													<div class="col col-sm-12">

													
															<input value="<?php echo $data['id'] ?>" name="id" type="hidden" class="form-control" placeholder="Enter ID">

															
														<div class="form-group">

															<label>Gangguan :</label>

															<input value="<?php echo $data['gangguan'] ?>" name="gangguan" type="text" class="form-control" placeholder="Enter gangguan">

															<span class="form-text text-muted">Please enter your Gangguan</span>

														</div>
														
														

													</div>
													

												</div>

												

												
											<div class="kt-portlet__foot kt-portlet__foot--solid">

												<div class="kt-form__actions kt-form__actions--right">

													 <a onclick="MenuGangguan()"  class="btn btn-clean kt-margin-r-10">

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
								
									$("#formEditGangguan").submit(function(e){
										e.preventDefault();

										var data = $(this).serialize();

										$.ajax({
											url:'api/gangguan_edit.php',
											type:'POST',
											data:data,
											success:function(data){
												if (data==200) {

													MenuGangguan();
													Not("data berhasil diedit","success","check-circle");
												
												}else{
													alert(data);
												}
											}
										})

									});

							</script>

																


