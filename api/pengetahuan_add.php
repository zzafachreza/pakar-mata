<?php

session_start();

date_default_timezone_set("Asia/Jakarta");

 header("Access-Control-Allow-Origin: *");

 include_once 'koneksi.php';



# Fungsi untuk membalik tanggal dari format English (Y-m-d) -> Indo (d-m-Y)

include_once 'koneksi.php';





// $id= $_POST['id'];

$id= $_POST['id'];
$pertanyaan= $_POST['pertanyaan'];
$ifyes= $_POST['ifno'];
$ifno= $_POST['ifyes'];
$id_gangguan= $_POST['id_gangguan'];
$id_solusi= $_POST['id_solusi'];

$sql="INSERT INTO master_pengetahuan VALUES('$id','$pertanyaan','$ifyes','$ifno','$id_gangguan','$id_solusi')";



if ($conn->query($sql)) {

  

  echo 200;

}else{

  echo 404;

}



?>