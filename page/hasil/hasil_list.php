<?php

 header("Access-Control-Allow-Origin: *");

 include_once '../../api/koneksi.php';

$id = $_POST['id'];

$sql = "SELECT
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
     ON ((`konsultasi_hd`.`id_user` = `master_user`.`id`))) WHERE nama_lengkap LIKE '%$id%' OR konsultasi_hd.id LIKE '%$id%' LIMIT 100";


$hasilK = $conn->query($sql);


$isi_teks = $dataK['id'];
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
  $qrcode = '<img width="50" height="50" src="'.$base64.'" />';

//barcode Batang 128

               $img      = code128BarCode($isi_teks, 1);
              ob_start();
              imagepng($img);
           
              $output_img   = ob_get_clean();
              echo "";

 $barcode128 ='<img width="50" height="20" src="data:image/png;base64,'.base64_encode($output_img).'" />'; 
 ?>
<div class="kt-notification-v2">
<?php
 while ($dataK = $r = $hasilK->fetch()) {
 	# code...
 
?>


												<a onclick="ViewHasil('<?php echo $dataK['id'] ?>')" class="kt-notification-v2__item">
												

													<div class="kt-notification-v2__item-icon">
															<span class="kt-media kt-media--circle kt-margin-t-5">
														<img src="<?php echo $dataK['foto'] ?>" alt="image">
													</span>
													</div>
													<div class="kt-notification-v2__itek-wrapper">
														<div class="kt-notification-v2__item-title">


																<span class="kt-font-info"><i class="flaticon-lock"></i> <?php echo $dataK['id'] ?></span>
																<span style="float: right;">
																	<?php echo $qrcode?>
																</span>
																<br/>
																<span class="kt-font-danger"><i class="flaticon-users"></i> <?php echo $dataK['nama_lengkap'] ?></span>
															
														
														</div>
														<div class="kt-notification-v2__item-desc">
															<span class="kt-font-inverse"> <?php echo $dataK['hasil'] ?></span>
														</div>
													</div>
												</a>
												
<?php
}
?>

</div>