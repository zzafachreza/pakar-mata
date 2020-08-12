<?php 

 header("Access-Control-Allow-Origin: *");
 include_once 'koneksi.php';

$id = $_POST['id'];
$sql = "SELECT * FROM master_user WHERE id='$id' limit 1";
$r = $conn->query($sql)->fetch();



?>
<div class="row">
	<div class="col col-sm-6">
		<div class="kt-portlet ">
										<div class="kt-portlet__head  kt-portlet__head--noborder">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
												</h3>
											</div>
											
										</div>
										<div class="kt-portlet__body kt-portlet__body--fit-y">

											<!--begin::Widget -->
											<div class="kt-widget kt-widget--user-profile-1">
												<div class="kt-widget__head">
													<div class="kt-widget__media">
														<img src="<?php echo $r['foto'] ?>" alt="image">
													</div>
													<div class="kt-widget__content">
														<div class="kt-widget__section">
															<a class="kt-widget__username">
																<?php echo $r['nama_lengkap'] ?>	<i class="flaticon2-correct kt-font-success"></i>
															</a>
															<span class="kt-widget__subtitle">
																<?php echo $r['level'] ?>
																
																</span>
																	<span class="kt-widget__subtitle">
																<?php 
															echo "Lahir : ".Indonesia2Tgl($r['tanggal_lahir']);?>
																
																</span>
														</div>
														<div class="kt-widget__action">
															<button type="button" class="btn btn-info btn-sm"><?php echo $r['jenis_kelamin'] ?></button>&nbsp;
				

															<button type="button" class="btn btn-success btn-sm"><?php 

															$lahir=new DateTime($r['tanggal_lahir']);
									                        $today=new DateTime();
									                        $umur = $today->diff($lahir);

									                        echo $umur->y." Tahun, ".$umur->m." Bulan, dan ".$umur->d." Hari";

															?></button>

															
														</div>
													</div>
												</div>
												<div class="kt-widget__body">
													<div class="kt-widget__content">
														<div class="kt-widget__info">
															<span class="kt-widget__label">Email:</span>
															<a  class="kt-widget__data"><?php echo $r['email'] ?></a>
														</div>
														<div class="kt-widget__info">
															<span class="kt-widget__label">Phone:</span>
															<a  class="kt-widget__data"><?php echo $r['telepon'] ?></a>
														</div>
														<div class="kt-widget__info">
															<!-- <span class="kt-widget__label">Alamat:</span> -->
															<span class="kt-widget__data"><?php echo $r['alamat'] ?></span>
														</div>
													</div>
													
												</div>
											</div>

											<!--end::Widget -->
										</div>
									</div>
	</div>
	<div class="col col-sm-6">
		
			<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
			<input type="hidden" name="id_user" value="<?php echo $r['id'] ?>">
			<input type="hidden" name="nama_lengkap" value="<?php echo $r['nama_lengkap'] ?>">
			<input type="hidden" name="id_konsultasi" value="<?php echo date('ymd').'/'.date('his').'/'.$r['id'] ?>">
			<button type="submit" class="btn btn-success col-sm-12" style="height: 100px">


				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																        <rect x="0" y="0" width="100" height="100"/>
																        <circle fill="#000000" opacity="0.3" cx="12" cy="9" r="8"/>
																        <path d="M14.5297296,11 L9.46184488,11 L11.9758349,17.4645458 L14.5297296,11 Z M10.5679953,19.3624463 L6.53815512,9 L17.4702704,9 L13.3744964,19.3674279 L11.9759405,18.814912 L10.5679953,19.3624463 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																        <path d="M10,22 L14,22 L14,22 C14,23.1045695 13.1045695,24 12,24 L12,24 C10.8954305,24 10,23.1045695 10,22 Z" fill="#000000" opacity="0.3"/>
																        <path d="M9,20 C8.44771525,20 8,19.5522847 8,19 C8,18.4477153 8.44771525,18 9,18 C8.44771525,18 8,17.5522847 8,17 C8,16.4477153 8.44771525,16 9,16 L15,16 C15.5522847,16 16,16.4477153 16,17 C16,17.5522847 15.5522847,18 15,18 C15.5522847,18 16,18.4477153 16,19 C16,19.5522847 15.5522847,20 15,20 C15.5522847,20 16,20.4477153 16,21 C16,21.5522847 15.5522847,22 15,22 L9,22 C8.44771525,22 8,21.5522847 8,21 C8,20.4477153 8.44771525,20 9,20 Z" fill="#000000"/>
																    </g>
																</svg>


			KONSULTASI SEKARANG</button>
	
	</div>
</div>