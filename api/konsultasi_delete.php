<?php

session_start();

 header("Access-Control-Allow-Origin: *");

 include_once 'koneksi.php';




$arr = $_POST['id'];




 

 $jml = count($arr);



$id="";



	for ($i=0; $i < $jml ; $i++) { 

		

		if ($i==($jml-1)) {

			$id .="'".$arr[$i]."'";

		}else{

			$id .="'".$arr[$i]."',";

		}

	}




 $sql1="DELETE FROM konsultasi_dt WHERE id in($id)";
  $sql2="DELETE FROM konsultasi_hd WHERE id in($id)";


if ($conn->query($sql1)) {

	if ($conn->query($sql2)) {

		

		echo 200;

	}
	


}