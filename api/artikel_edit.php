<?php

session_start();

date_default_timezone_set("Asia/Jakarta");

 header("Access-Control-Allow-Origin: *");

 include_once 'koneksi.php';



# Fungsi untuk membalik tanggal dari format English (Y-m-d) -> Indo (d-m-Y)

include_once 'koneksi.php';



$id = $_POST['id'];
$upd = $_SESSION['username'];
$judul= $_POST['judul'];
$isi= $_POST['isi'];


$sql="UPDATE artikel SET judul='$judul',isi='$isi',tgl=NOW(),`time`=NOW(),upd='$upd' WHERE id='$id'";



if ($conn->query($sql)) {

  

  echo 200;

}else{

  echo 404;

}



?>