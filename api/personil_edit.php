<?php
session_start();
date_default_timezone_set("Asia/Jakarta");
 header("Access-Control-Allow-Origin: *");
 include_once 'koneksi.php';
# Fungsi untuk membalik tanggal dari format English (Y-m-d) -> Indo (d-m-Y)



$id= $_POST['id'];
$nama= $_POST['nama'];
$nip= $_POST['nip'];
$tempat_lahir= $_POST['tempat_lahir'];
$tanggal_lahir= $_POST['tanggal_lahir'];
$prov= $_POST['provOk'];
$kota= $_POST['kotaOk'];
$grp1= $_POST['grp1'];
$grp2= $_POST['grp2'];
$pangkat= $_POST['pangkat'];
$korps= $_POST['korps'];
$nrp= $_POST['nrp'];
$jabatan= $_POST['jabatan'];
$baju_p_bj= $_POST['baju_p_bj'];
$baju_l_bd= $_POST['baju_l_bd'];
$baju_l_pr= $_POST['baju_l_pr'];
$baju_l_pg= $_POST['baju_l_pg'];
$baju_pdk= $_POST['baju_pdk'];
$baju_p_tg= $_POST['baju_p_tg'];
$baju_l_tg= $_POST['baju_l_tg'];
$baju_krh= $_POST['baju_krh'];
$celana_p_ci= $_POST['celana_p_ci'];
$celana_l_pg= $_POST['celana_l_pg'];
$celana_l_pgl= $_POST['celana_l_pgl'];
$celana_l_ph= $_POST['celana_l_ph'];
$celana_l_ltt= $_POST['celana_l_ltt'];
$celana_l_bwh= $_POST['celana_l_bwh'];
$celana_kris= $_POST['celana_kris'];
$tutup_kepala= $_POST['tutup_kepala'];
$tutup_kaki= $_POST['tutup_kaki'];
$tutup_badan= $_POST['tutup_badan'];
$ket= $_POST['ket'];
$ls= date('Y-m-d H:i:s');
$sql ="UPDATE `personil`
SET
  `nama` = '$nama',
  `nip` = '$nip',
  `tempat_lahir` = '$tempat_lahir',
  `tanggal_lahir` = '$tanggal_lahir',
  `prov` = '$prov',
  `kota` = '$kota',
  `grp1` = '$grp1',
  `grp2` = '$grp2',
  `pangkat` = '$pangkat',
  `korps` = '$korps',
  `nrp` = '$nrp',
  `jabatan` = '$jabatan',
  `baju_p_bj` = '$baju_p_bj',
  `baju_l_bd` = '$baju_l_bd',
  `baju_l_pr` = '$baju_l_pr',
  `baju_l_pg` = '$baju_l_pg',
  `baju_pdk` = '$baju_pdk',
  `baju_p_tg` = '$baju_p_tg',
  `baju_l_tg` = '$baju_l_tg',
  `baju_krh` = '$baju_krh',
  `celana_p_ci` = '$celana_p_ci',
  `celana_l_pg` = '$celana_l_pg',
  `celana_l_pgl` = '$celana_l_pgl',
  `celana_l_ph` = '$celana_l_ph',
  `celana_l_ltt` = '$celana_l_ltt',
  `celana_l_bwh` = '$celana_l_bwh',
  `celana_kris` = '$celana_kris',
  `tutup_kepala` = '$tutup_kepala',
  `tutup_kaki` = '$tutup_kaki',
  `tutup_badan` = '$tutup_badan',
  `ket` = '$ket',
  `ls` = '$ls'
WHERE `id` = '$id';";


if ($conn->query($sql)) {
  
  echo 200;
}else{
  echo 404;
}

?>