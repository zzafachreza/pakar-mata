<?php

session_start();

date_default_timezone_set("Asia/Jakarta");

 header("Access-Control-Allow-Origin: *");

 include_once 'koneksi.php';



# Fungsi untuk membalik tanggal dari format English (Y-m-d) -> Indo (d-m-Y)

include_once 'koneksi.php';





// $id= $_POST['id'];

$id= $_POST['id'];
$gangguan= $_POST['gangguan'];


$sql="UPDATE master_gangguan SET gangguan='$gangguan' WHERE id='$id'";



if ($conn->query($sql)) {

  

  echo 200;

}else{

  echo 404;

}



?>