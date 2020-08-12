<?php
 header("Access-Control-Allow-Origin: *");

 include_once 'koneksi.php';

$id_konsultasi = $_POST['id_konsultasi'];
$id_user = $_POST['id_user'];


echo $sql= "INSERT INTO konsultasi_hd(id,tgl,`time`,id_user) VALUES('$id_konsultasi',NOW(),NOW(),'$id_user')";


if ($conn->query($sql)) {

  

  echo 200;

}else{

  echo 404;

}



 ?>