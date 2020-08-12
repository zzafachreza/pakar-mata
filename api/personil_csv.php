<?php 
header('Content-Type: text/csv; charset=utf-8');
header("Content-Disposition: attachment; filename=personil-".date('ymd').".csv");//ganti nama sesuai keperluan
header("Pragma: no-cache");
header("Expires: 0");

session_start();
error_reporting(0);
include_once "koneksi.php";

$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array(
      'id',
      'nama',
      'nip',
      'tempat_lahir',
      'tanggal_lahir',
      'prov',
      'kota',
      'grp1',
      'grp2',
      'pangkat',
      'korps',
      'nrp',
      'jabatan',
      'baju_p_bj',
      'baju_l_bd',
      'baju_l_pr',
      'baju_l_pg',
      'baju_pdk',
      'baju_p_tg',
      'baju_l_tg',
      'baju_krh',
      'celana_p_ci',
      'celana_l_pg',
      'celana_l_pgl',
      'celana_l_ph',
      'celana_l_ltt',
      'celana_l_bwh',
      'celana_kris',
      'tutup_kepala',
      'tutup_kaki',
      'tutup_badan',
      'ket',
      'ls'

));

// fetch the data
$rows = $conn->query('SELECT  `id`,
  `nama`,
  `nip`,
  `tempat_lahir`,
  `tanggal_lahir`,
  `prov`,
  `kota`,
  `grp1`,
  `grp2`,
  `pangkat`,
  `korps`,
  `nrp`,
  `jabatan`,
  `baju_p_bj`,
  `baju_l_bd`,
  `baju_l_pr`,
  `baju_l_pg`,
  `baju_pdk`,
  `baju_p_tg`,
  `baju_l_tg`,
  `baju_krh`,
  `celana_p_ci`,
  `celana_l_pg`,
  `celana_l_pgl`,
  `celana_l_ph`,
  `celana_l_ltt`,
  `celana_l_bwh`,
  `celana_kris`,
  `tutup_kepala`,
  `tutup_kaki`,
  `tutup_badan`,
  `ket`,
  `ls` FROM personil');

   while ($r = $rows->fetch(PDO::FETCH_ASSOC)) {
            

      echo '"'.$r['id'].'",';
      echo '"'.$r['nama'].'",';
      echo '"'.$r['nip'].'",';
      echo '"'.$r['tempat_lahir'].'",';
      echo '"'.$r['tanggal_lahir'].'",';
      echo '"'.$r['prov'].'",';
      echo '"'.$r['kota'].'",';
      echo '"'.$r['grp1'].'",';
      echo '"'.$r['grp2'].'",';
      echo '"'.$r['pangkat'].'",';
      echo '"'.$r['korps'].'",';
      echo '"'.$r['nrp'].'",';
      echo '"'.$r['jabatan'].'",';
      echo '"'.$r['baju_p_bj'].'",';
      echo '"'.$r['baju_l_bd'].'",';
      echo '"'.$r['baju_l_pr'].'",';
      echo '"'.$r['baju_l_pg'].'",';
      echo '"'.$r['baju_pdk'].'",';
      echo '"'.$r['baju_p_tg'].'",';
      echo '"'.$r['baju_l_tg'].'",';
      echo '"'.$r['baju_krh'].'",';
      echo '"'.$r['celana_p_ci'].'",';
      echo '"'.$r['celana_l_pg'].'",';
      echo '"'.$r['celana_l_pgl'].'",';
      echo '"'.$r['celana_l_ph'].'",';
      echo '"'.$r['celana_l_ltt'].'",';
      echo '"'.$r['celana_l_bwh'].'",';
      echo '"'.$r['celana_kris'].'",';
      echo '"'.$r['tutup_kepala'].'",';
      echo '"'.$r['tutup_kaki'].'",';
      echo '"'.$r['tutup_badan'].'",';
      echo '"'.$r['ket'].'",';
      echo '"'.$r['ls'].''."\n";

 }

?>

