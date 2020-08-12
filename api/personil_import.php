<?php
session_start();
date_default_timezone_set("Asia/Jakarta");
 header("Access-Control-Allow-Origin: *");
 include_once 'koneksi.php';




			$pama = $_FILES['importPersonil']['tmp_name'];

           $myfile = fopen($pama, "r") or die("Unable to open file!");


            $sql = fread($myfile,filesize($pama));

            $row = explode("\n", trim($sql));

            $jumlah_row = count($row);

             try{
		          $conn->beginTransaction();

		          
		          $arr = array();
		          for ($i=0; $i < $jumlah_row ; $i++) {

		           	if ($i>0) {
		           		array_push($arr, $row[$i]);
		           	}
		           
		          // $conn->exec($q);
		          }

		         
		          for ($q=0; $q < count($arr) ; $q++) { 
		          		
		          		echo $sql = "INSERT INTO `personil`
						            (`nama`,
						             `nip`,
						             `tempat_lahir`,
						             `tanggal_lahir`,
						             `prov`,
						             `kota`,
						             `grp1`,
						             `grp2`,
						             `pangkat`,
						             `korps`,
						             `nrp`,
						             `jabatan`,
						             `baju_p_bj`,
						             `baju_l_bd`,
						             `baju_l_pr`,
						             `baju_l_pg`,
						             `baju_pdk`,
						             `baju_p_tg`,
						             `baju_l_tg`,
						             `baju_krh`,
						             `celana_p_ci`,
						             `celana_l_pg`,
						             `celana_l_pgl`,
						             `celana_l_ph`,
						             `celana_l_ltt`,
						             `celana_l_bwh`,
						             `celana_kris`,
						             `tutup_kepala`,
						             `tutup_kaki`,
						             `tutup_badan`,
						             `ket`,
						             `ls`)
						VALUES (".$arr[$q].");"; 
		          }

		         $conn->commit();

		        

		    
		    } catch (Exception $e) {
		        echo $e->getMessage();
		         
		    }

 ?>