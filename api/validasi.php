<?php

 session_start();

 header("Access-Control-Allow-Origin: *");

 include_once 'koneksi.php';


 $user = $_POST['username'];

 $pass = crypt($_POST['password'], '$6$rounds=151195$fachrezamaulana$');



				

							

								$sql = "SELECT * FROM master_user WHERE username= ? and password=? limit 1";

								$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

								$q = $conn->prepare($sql);

								$q->execute(array($user,$pass));

								$data = $q->fetch(PDO::FETCH_ASSOC);

								

				

				

								

									$a = $data['username'];

									$b = $data['password'];

								



							







											if ($a == $user && $b == $pass ) 

											{

														$_SESSION['username'] =$user;

														$_SESSION['id']  =$data['id'];

														$_SESSION['nama_lengkap'] = $data['nama_lengkap'];

														$_SESSION['level']  = $data['level'];

														$_SESSION['foto']  = $data['foto'];

														$_SESSION['email']  = $data['email'];

														$_SESSION['telepon']  = $data['telepon'];

														$_SESSION['time'] = date('H:i:s');

														

														echo 200;

											}

											else {

													     echo '<script>window.location.href="./../"</script>'; 

										}

						

							

						







?>