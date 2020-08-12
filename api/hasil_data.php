<?php

 header("Access-Control-Allow-Origin: *");

 include_once 'koneksi.php';



$search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian

$limit = $_POST['length']; // Ambil data limit per page

$start = $_POST['start']; // Ambil data start



$sql = $conn->prepare("SELECT id FROM konsultasi_hd"); // Query untuk menghitung seluruh data siswa

$sql->execute();



$query = "SELECT
  `konsultasi_hd`.`id`          AS `id`,
  `konsultasi_hd`.`tgl`         AS `tgl`,
  `konsultasi_hd`.`time`        AS `time`,
  `konsultasi_hd`.`id_solusi`   AS `id_solusi`,
  `master_solusi`.`hasil`       AS `hasil`,
  `master_solusi`.`ciri`        AS `ciri`,
  `master_solusi`.`solusi`      AS `solusi`,
  `konsultasi_hd`.`id_user`     AS `id_user`,
  `master_user`.`username`      AS `username`,
  `master_user`.`nama_lengkap`  AS `nama_lengkap`,
  `master_user`.`jenis_kelamin` AS `jenis_kelamin`,
  `master_user`.`tanggal_lahir` AS `tanggal_lahir`,
  `master_user`.`email`         AS `email`,
  `master_user`.`telepon`       AS `telepon`,
  `master_user`.`alamat`        AS `alamat`,
  `master_user`.`foto`          AS `foto`
FROM ((`konsultasi_hd`
    JOIN `master_solusi`
      ON ((`konsultasi_hd`.`id_solusi` = `master_solusi`.`id`)))
   JOIN `master_user`
     ON ((`konsultasi_hd`.`id_user` = `master_user`.`id`))) WHERE (konsultasi_hd.id LIKE '%".$search."%' OR nama_lengkap LIKE '%".$search."%' OR hasil LIKE '%".$search."%')";




$order_index = $_POST['order'][0]['column']; // Untuk mengambil index yg menjadi acuan untuk sorting

$order_field = $_POST['columns'][$order_index]['data']; // Untuk mengambil nama field yg menjadi acuan untuk sorting

$order_ascdesc = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"

$order = " ORDER BY ".$order_field." ".$order_ascdesc;



$sql_data = $conn->prepare($query.$order." LIMIT ".$limit." OFFSET ".$start); // Query untuk data yang akan di tampilkan

$sql_data->execute();



$sql_filter = $conn->prepare($query); // Query untuk count jumlah data sesuai dengan filter pada textbox pencarian

$sql_filter->execute();



$callback = array(

    'draw'=>$_POST['draw'], // Ini dari datatablenya

    'recordsTotal'=>$sql->rowCount(), // Hitung data yg ada pada query $sql

    'recordsFiltered'=>$sql_filter->rowCount(), // Hitung data yg ada pada query $sql_filter

    'data'=>$sql_data->fetchAll()

);



header('Content-Type: application/json');

echo json_encode($callback); // Convert array $callback ke json