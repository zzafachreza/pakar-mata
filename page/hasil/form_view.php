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


?>
<div class="kt-portlet">
								<div class="kt-portlet__body kt-portlet__body--fit">
									<div class="kt-invoice-1">
										<div class="kt-invoice__head" style="background-image: url(assets/media/bg/bg-6.jpg);">
										</div>
										<div class="kt-invoice__body">

											 	<center>
													<div class="kt-portlet kt-iconbox kt-iconbox--success kt-iconbox--animate">
														<div class="kt-portlet__body">
															<h2><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																        <rect x="0" y="0" width="24" height="24"/>
																        <circle fill="#000000" opacity="0.3" cx="12" cy="9" r="8"/>
																        <path d="M14.5297296,11 L9.46184488,11 L11.9758349,17.4645458 L14.5297296,11 Z M10.5679953,19.3624463 L6.53815512,9 L17.4702704,9 L13.3744964,19.3674279 L11.9759405,18.814912 L10.5679953,19.3624463 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																        <path d="M10,22 L14,22 L14,22 C14,23.1045695 13.1045695,24 12,24 L12,24 C10.8954305,24 10,23.1045695 10,22 Z" fill="#000000" opacity="0.3"/>
																        <path d="M9,20 C8.44771525,20 8,19.5522847 8,19 C8,18.4477153 8.44771525,18 9,18 C8.44771525,18 8,17.5522847 8,17 C8,16.4477153 8.44771525,16 9,16 L15,16 C15.5522847,16 16,16.4477153 16,17 C16,17.5522847 15.5522847,18 15,18 C15.5522847,18 16,18.4477153 16,19 C16,19.5522847 15.5522847,20 15,20 C15.5522847,20 16,20.4477153 16,21 C16,21.5522847 15.5522847,22 15,22 L9,22 C8.44771525,22 8,21.5522847 8,21 C8,20.4477153 8.44771525,20 9,20 Z" fill="#000000"/>
																    </g>
																</svg> KONSULTASI SELESAI</h2>

														   <div class="kt-iconbox__body">
														  
														
																

															<button onclick="ViewHasil('<?php echo $id ?>')" class="btn btn-brand col col-sm-12">

																<i class="flaticon-imac"></i>


															LIHAT HASIL KONSULTASI</button>
															
														</div>
													</div>
												</div>
												</center>


											
										</div>
										
									</div>
								</div>
							</div>