<?php
session_start();
 header("Access-Control-Allow-Origin: *");

include_once '../../api/koneksi.php';



if ($_SESSION['level']=='Admin') {
	# code...
	$sql = "SELECT * FROM master_user";

}else{

	$id_user = $_SESSION['id'];
	$sql = "SELECT * FROM master_user where id='$id_user'";
}


?>

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-portlet">
								<div class="kt-portlet__body kt-portlet__body--fit">
									<div class="kt-grid kt-wizard-v1 kt-wizard-v1--white" id="kt_wizard_v1" data-ktwizard-state="step-first">
										<div class="kt-grid__item">

											<!--begin: Form Wizard Nav -->
											<div class="kt-wizard-v1__nav">

												<!--doc: Remove "kt-wizard-v1__nav-items--clickable" class and also set 'clickableSteps: false' in the JS init to disable manually clicking step titles -->
												<div class="kt-wizard-v1__nav-items kt-wizard-v1__nav-items--clickable">
													

												   <div id="iconSatu" class="kt-wizard-v1__nav-item" data-ktwizard-type="step" >
														<div class="kt-wizard-v1__nav-body">
															<div class="kt-wizard-v1__nav-icon">
																<i class="flaticon-profile-1"></i>
															</div>
															<div class="kt-wizard-v1__nav-label">
																1. Masukan Data Pasien
															</div>
														</div>
													</div>
													<div id="iconDua" class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
														<div class="kt-wizard-v1__nav-body">
															<div class="kt-wizard-v1__nav-icon">
																<i class="flaticon-list"></i>
															</div>
															<div class="kt-wizard-v1__nav-label">
																2. Melakukan Wawancara
															</div>
														</div>
													</div>
													<div id="iconTiga" class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
														<div class="kt-wizard-v1__nav-body">
															<div class="kt-wizard-v1__nav-icon">
																<i class="flaticon-notes"></i>
															</div>
															<div class="kt-wizard-v1__nav-label">
																3. Hasil 
															</div>
														</div>
													</div>
											
												</div>
											</div>

											<!--end: Form Wizard Nav -->
										</div>
										<div class="kt-wizard-v1__wrapper">

											<!--begin: Form Wizard Form-->
											<div class="container" id="satu">
												<form id="formKonsul1">

													<center><h2>Masukan Data Pasien</h2></center>
													
													<div class="form-group">
														<label for="nama">Nama Lengkap :</label>
														<select id="nama" name="nama" class="form-control selectza" data-live-search="true">
															<option>--Pilih User--</option>
															<?php
																$hasil = $conn->query($sql);
																while ( $r = $hasil->fetch()) {
																	# code...
																

															 ?>
															<option value="<?php echo $r['id'] ?>"><?php echo $r['nama_lengkap'] ?></option>
															<?php } ?>
														</select>

														<div id="dataUser">
															
														</div>

														
													
												</form>
										
											</div>




											<div class="container" id="dua" style="display: none;">

												
												<form id="formKonsul2">

													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
													<div class="form-group">
														<h2 id="pertanyaan">
														
													</h2>
													</div>
													
													<div class="row">
													   <div class="col-sm-6" id="ya">
														 <div class="kt-portlet kt-iconbox kt-iconbox--brand kt-iconbox--animate">
															<div class="kt-portlet__body">

																<div class="kt-iconbox__body">

																	<div class="kt-iconbox__icon">
																		<i class="fa fa-check-circle fa-3x"></i>
																		
																	 </div>

																	<div class="kt-iconbox__desc">

																		<h3 class="kt-iconbox__title">

																			<a class="kt-link" >YA, BETUL</a>

																		</h3>

																		<div class="kt-iconbox__content">
																			<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
												

																			<h2>Pilihlah dengan benar</h2>

																		</div>

																	</div>

																</div>
															</div>
														  </div>
													  </div>

													<div id="tidak" class="col-sm-6">
														<div class="kt-portlet kt-iconbox kt-iconbox--danger kt-iconbox--animate">
															<div class="kt-portlet__body">

																<div class="kt-iconbox__body">


																	<div class="kt-iconbox__icon">
																		<i class="fa fa-times-circle fa-3x"></i>
																		
																	 </div>

																	<div class="kt-iconbox__desc">

																		<h3 class="kt-iconbox__title">


																			<a class="kt-link" >TIDAK, SALAH</a>

																		</h3>

																		<div class="kt-iconbox__content">
																			<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
												
																			<h2>Pilihlah dengan benar</h2>

																		</div>

																	</div>

																</div>
															</div>
														</div>
													</div>
														
													</div>


													 
												</form>
										
											</div>	


											<div class="container" id="tiga" style="display: none">

												

										

												<div id="dataHasil">
													
												</div>


													

										
											</div>		

											<!--end: Form Wizard Form-->
										</div>
									</div>
								</div>
							</div>
						</div>

						<script type="text/javascript">
							$(".selectza").selectpicker();


								$('.tanggal').datepicker({
								format: "yyyy-mm-dd",
							    todayBtn: "linked",
							    orientation: "bottom right",
							    toggleActive: true,
							    language: "id",
							    autoclose: true,
							    todayHighlight: true,
							    clearBtn: true
							});
								
						</script>