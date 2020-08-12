<?php 

 header("Access-Control-Allow-Origin: *");
 include_once 'koneksi.php';

$sqlProv = "SELECT DISTINCT `provinsi` FROM master_daerah";
$data = $conn->query($sqlProv);
?>



<select id="prov" name="prov" class="form-control selectza" data-live-search="true">

  <?php
  while ($r = $data->fetch()) {
  echo '<option>'.$r['provinsi'].'</option>';
}

?>

</select>