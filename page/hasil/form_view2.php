<?php

 header("Access-Control-Allow-Origin: *");

 include_once '../../api/koneksi.php';

$id = $_POST['id'];

$sqlHd = "SELECT
  `konsultasi_hd`.`id`          AS `id`,
  `konsultasi_hd`.`tgl`         AS `tgl`,
  `konsultasi_hd`.`time`        AS `time`,
  `konsultasi_hd`.`id_solusi`   AS `id_solusi`,
  `master_solusi`.`hasil`       AS `hasil`,
  `master_solusi`.`ciri`        AS `ciri`,
  `master_solusi`.`solusi`      AS `solusi`,
  `konsultasi_hd`.`id_user`     AS `id_user`,
  `master_user`.`username`      AS `username`,
  `master_user`.`nama_lengkap`  AS `nama_lengkap`,
  `master_user`.`jenis_kelamin` AS `jenis_kelamin`,
  `master_user`.`tanggal_lahir` AS `tanggal_lahir`,
  `master_user`.`email`         AS `email`,
  `master_user`.`telepon`       AS `telepon`,
  `master_user`.`alamat`        AS `alamat`,
  `master_user`.`foto`          AS `foto`
FROM ((`konsultasi_hd`
    JOIN `master_solusi`
      ON ((`konsultasi_hd`.`id_solusi` = `master_solusi`.`id`)))
   JOIN `master_user`
     ON ((`konsultasi_hd`.`id_user` = `master_user`.`id`))) WHERE konsultasi_hd.id='$id'";

$dataHd = $conn->query($sqlHd)->fetch();


//barcode QR
 
$isi_teks = $id;
$namafile = "coba.png";
$quality = 'H'; //ada 4 pilihan, L (Low), M(Medium), Q(Good), H(High)
$ukuran = 5; //batasan 1 paling kecil, 10 paling besar
$padding = 0;
$tempdir =''; 
$qr = QRCode::png($isi_teks,$tempdir.$namafile,$quality,$ukuran,$padding);
 
$path = $tempdir.$namafile;
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
  $qrcode = '<img width="100" height="100" src="'.$base64.'" />';

//barcode Batang 128

               $img      = code128BarCode($isi_teks, 1);
              ob_start();
              imagepng($img);
           
              $output_img   = ob_get_clean();
              echo "";

 $barcode128 ='<img width="250" height="60" src="data:image/png;base64,'.base64_encode($output_img).'" />'; 



?>
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						<!-- end:: Subheader -->

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-portlet">
								<div class="kt-portlet__body kt-portlet__body--fit">
									<div class="kt-invoice-1">
										<div class="kt-invoice__head" style="background-image: url(assets/media/bg/bg-7.jpg);padding: 10px;color: #FFF">
											<div class="kt-invoice__container">
												<div class="kt-invoice__brand">
													<h1 class="kt-invoice__title">HASIL KONSULTASI</h1>
													<h4><?php echo $dataHd['id']; ?></h4>
													<div  class="kt-invoice__logo">
												
														<span class="kt-invoice__desc">
															<span>Aplikasi Sistem Pakar Mengetahui untuk Karakteristik dan kepribadian pada Anak</span>
														
														</span>
													</div>
												</div>
												<div class="kt-invoice__items">
													<div class="kt-invoice__item">
														<span class="kt-invoice__subtitle">Tanggal : </span>
														<span class="kt-invoice__text"><?php echo Indonesia2Tgl($dataHd['tgl']); ?></span>
													</div>
											
												</div>
											</div>
										</div>
										<div class="kt-invoice__body" style="padding:10px">
											<div class="kt-invoice__container">


												<div class="kt-portlet kt-portlet--height-fluid">
														<div class="kt-portlet__body">
															<div class="kt-widget kt-widget--user-profile-3">
																<div class="kt-widget__top">
																	<div class="kt-widget__media kt-hidden-">
																		<img src="<?php echo $dataHd['foto'] ?>" alt="image">
																	</div>
																	<div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
																		JM
																	</div>
																	<div class="kt-widget__content">
																		<div class="kt-widget__head">
																			<a  class="kt-widget__username">
																				<?php echo $dataHd['nama_lengkap'] ?>
																				

																				<i class="flaticon2-correct"></i><br/>
																				<?php
																				$lahir=new DateTime($dataHd['tanggal_lahir']);
														                        $today=new DateTime();
														                        $umur = $today->diff($lahir);

														                        echo $umur->y." Tahun, ".$umur->m." Bulan, dan ".$umur->d." Hari";

																				?>
																			</a>
																			<div class="kt-widget__action">
																				<?php echo $barcode128 ?><br/>
																				<center><small><?php echo $id ?></small></center>

																			</div>
																		</div>
																		<div class="kt-widget__subhead">
																			<a ><i class="flaticon2-new-email"></i><?php echo $dataHd['email'] ?></a>
																			<a ><i class="flaticon2-calendar-3"></i><?php echo $dataHd['jenis_kelamin'] ?> </a>
																			<a ><i class="flaticon2-telegram-logo"></i><?php echo $dataHd['telepon'] ?></a>
																		</div>
																		<div class="kt-widget__info">
																			<div class="kt-widget__desc">
																				<?php echo $dataHd['alamat'] ?>
																				
																			</div>
																			<div class="kt-widget__progress">
																				<div class="kt-widget__text">
																					Complete
																				</div>
																				<div class="progress" style="height: 5px;width: 100%;">
																					<div class="progress-bar kt-bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
																				</div>
																				<div class="kt-widget__stats">
																					100%
																				</div>

																			</div>
																		</div>
																	</div>
																</div>

																<center>
																	<h1><?php echo $dataHd['hasil'] ?></h1>
															
																</center>
																<div class="kt-widget__bottom">
																	
																	<div class="kt-widget__item">
																		<div class="kt-widget__icon">
																			<i class="flaticon-pie-chart"></i>
																		</div>
																		<div class="kt-widget__details">
																			<span class="kt-widget__title">Ciri</span>
																			<span class="kt-widget__value" style="font-size: large;">
																				<?php echo $dataHd['ciri'] ?>
																			</span>
																		</div>
																	</div>
																	<div class="kt-widget__item">
																		<div class="kt-widget__icon">
																			<i class="flaticon-file-2"></i>
																		</div>
																		<div class="kt-widget__details">
																			<span class="kt-widget__title">Solusi</span>
																			<span class="kt-widget__value" style="font-size: large;">
																				<?php echo $dataHd['solusi'] ?>
																			</span>
																		</div>
																	</div>
																	
																	
																</div>
															</div>
														</div>
												
												</div>


										
											</div>
							

											<div class="row">
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg col-sm-4">
												</div>
												<div class="col-sm-4">
													<center><h2>Gangguan</h2></center>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg col-sm-4">
												</div>
												
											</div>
										

											<div class="kt-portlet kt-portlet--height-fluid">
														<div class="kt-portlet__body">

															<div class="kt-demo__preview" >
																<div class="kt-list-timeline">
																	<div class="kt-list-timeline__items">


																		<?php
																	$sqlDt = "     SELECT
																				  `konsultasi_dt`.`id`          AS `id`,
																				  `konsultasi_dt`.`id_gangguan` AS `id_gangguan`,
																				  `master_gangguan`.`gangguan`  AS `gangguan`
																				FROM (`konsultasi_dt`
																				   JOIN `master_gangguan`
																				     ON ((`konsultasi_dt`.`id_gangguan` = `master_gangguan`.`id`))) WHERE konsultasi_dt.id='$id'";
																	$no=1;
																	$hasilDt = $conn->query($sqlDt);

																	while ($dataDt = $hasilDt->fetch()) {
																		# code...
																	
																?>

																		<div class="kt-list-timeline__item" >
																			<span style="font-size: xx-large;" class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>


																			<span class="kt-list-timeline__icon flaticon-notes kt-font-success"></span>


																			<span class="kt-list-timeline__text" style="font-size: large;" >
																			<?php
																				echo $dataDt['gangguan'];
																			?>
																			</span>
																			<span class="kt-list-timeline__time" style="font-size: small;">
																				<a  class="btn btn-sm btn-label-primary btn-bold">
																					<?php
																				echo $no;
																			?>

																				</a>
																			</span>
																		</div>

																		<?php $no++; } ?>
																	
																	</div>
																</div>


															</div>
													

															

																

															
																
															
														</div>


												
												</div>

												<div class="col-sm-1 offset-sm-10">
																	<?php echo $qrcode ?>
																</div>

										<div class="kt-invoice__actions">
										

												<button type="button" class="hilang btn btn-label-brand btn-bold" onclick="printHasil();">Download Hasil</button>
												<button type="button" class="hilang btn btn-brand btn-bold" onclick="printHasil();">Print Hasil</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- end:: Content -->
					</div>

					