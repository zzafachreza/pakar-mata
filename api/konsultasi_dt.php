<?php
 header("Access-Control-Allow-Origin: *");

 include_once 'koneksi.php';

$id_konsultasi = $_POST['id_konsultasi'];
$id_gangguan = $_POST['id_gangguan'];


echo $sql= "INSERT INTO konsultasi_dt(id,id_gangguan) VALUES('$id_konsultasi','$id_gangguan')";


if ($conn->query($sql)) {

  

  echo 200;

}else{

  echo 404;

}



 ?>