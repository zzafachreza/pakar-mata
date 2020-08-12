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




 $sql="DELETE FROM master_gangguan WHERE id in($id)";


if ($conn->query($sql)) {

	

	echo 200;

}