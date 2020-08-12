<?php
 header("Access-Control-Allow-Origin: *");

 include_once 'koneksi.php';


 if (!empty($_POST['next'])) {
 	
 	$next = $_POST['next'];
 }else{
 	$next=1;
 }

 $sql= "SELECT * FROM master_pengetahuan WHERE id='$next'";

 $data = $conn->query($sql)->fetch();

echo $data['pertanyaan']."$".$data['ifyes']."$".$data['ifno']."$".$data['id_gangguan']."$".$data['id_solusi'];
 ?>