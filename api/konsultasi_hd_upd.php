<?php
 header("Access-Control-Allow-Origin: *");

 include_once 'koneksi.php';

$id_konsultasi = $_POST['id_konsultasi'];
$id_solusi = $_POST['id_solusi'];


echo $sql= "UPDATE konsultasi_hd SET id_solusi='$id_solusi' WHERE id='$id_konsultasi'";


if ($conn->query($sql)) {

  

  echo 200;

}else{

  echo 404;

}



 ?>