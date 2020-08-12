<?php

session_start();

date_default_timezone_set("Asia/Jakarta");

 header("Access-Control-Allow-Origin: *");

 include_once 'koneksi.php';



# Fungsi untuk membalik tanggal dari format English (Y-m-d) -> Indo (d-m-Y)

include_once 'koneksi.php';

print_r($_POST);
$nama = $_POST['nama'];
$email=$_POST['email'];
$subjek=$_POST['subjek'];
$pesan=$_POST['pesan'];

$sql="INSERT INTO saran(`nama`,`email`,`subjek`,`pesan`,`tgl`,`time`) VALUES('$nama','$email','$subjek','$pesan',NOW(),NOW())";



if ($conn->query($sql)) {

  

  echo 200;

}else{

  echo 404;

}



?>