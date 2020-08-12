<?php 

 header("Access-Control-Allow-Origin: *");
 include_once 'koneksi.php';

$id = $_POST['id'];

$sqlProv = "SELECT DISTINCT `kabupaten` FROM master_daerah WHERE provinsi='$id'";
$data = $conn->query($sqlProv);
?>


<select id="kota" name="kota" class="form-control selectza" data-live-search="true">

  <?php
  while ($r = $data->fetch()) {
  echo '<option>'.$r['kabupaten'].'</option>';
}

?>

</select>