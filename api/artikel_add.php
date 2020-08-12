<?php

session_start();

date_default_timezone_set("Asia/Jakarta");

 header("Access-Control-Allow-Origin: *");

 include_once 'koneksi.php';



# Fungsi untuk membalik tanggal dari format English (Y-m-d) -> Indo (d-m-Y)

include_once 'koneksi.php';


$upd = $_SESSION['username'];
$judul= $_POST['judul'];
$isi= $_POST['isi'];


$sql="INSERT INTO artikel(`judul`,`isi`,`tgl`,`time`,`upd`) VALUES('$judul','$isi',NOW(),NOW(),'$upd')";



if ($conn->query($sql)) {

  

  echo 200;

}else{

  echo 404;

}



?>