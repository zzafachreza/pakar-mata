<?php 

 header("Access-Control-Allow-Origin: *");
 include_once 'koneksi.php';

$sql = "SELECT * FROM master_user";
$data = $conn->query($sql);
?>




  <?php
  while ($r = $data->fetch()) {
  echo '<li class="selected"><a role="option" class="dropdown-item selected" id="bs-select-1-0" tabindex="0" aria-setsize="1" aria-posinset="1" aria-selected="true"><span class="text">'.$r['nama_lengkap'].'</span></a></li>';
	}

?>
