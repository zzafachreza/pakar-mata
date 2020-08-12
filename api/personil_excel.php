<?php 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=personil-".date('ymd').".xls");//ganti nama sesuai keperluan
header("Pragma: no-cache");
header("Expires: 0");
session_start();
error_reporting(0);
include_once "koneksi.php";
?>
<head>
<title>Personil</title>
<body>
  <table border="1" width=100%>
    <thead>
        <tr>
            <th>No</th>
            <th>nama</th>
            <th>nip</th>
            <th>tempat_lahir</th>
            <th>tanggal_lahir</th>
            <th>prov</th>
            <th>kota</th>
            <th>grp1</th>
            <th>grp2</th>
            <th>pangkat</th>
            <th>korps</th>
            <th>nrp</th>
            <th>jabatan</th>
            <th>baju_p_bj</th>
            <th>baju_l_bd</th>
            <th>baju_l_pr</th>
            <th>baju_l_pg</th>
            <th>baju_pdk</th>
            <th>baju_p_tg</th>
            <th>baju_l_tg</th>
            <th>baju_krh</th>
            <th>celana_p_ci</th>
            <th>celana_l_pg</th>
            <th>celana_l_pgl</th>
            <th>celana_l_ph</th>
            <th>celana_l_ltt</th>
            <th>celana_l_bwh</th>
            <th>celana_kris</th>
            <th>tutup_kepala</th>
            <th>tutup_kaki</th>
            <th>tutup_badan</th>
            <th>keterangan</th>
            <th>last update</th>

        </tr>
    </thead>
    <tbody>
        <?php
       
          $no=1;
           $sql="SELECT * FROM personil";
            $hasil = $conn->query($sql);

            while ($r = $hasil->fetch(PDO::FETCH_ASSOC)) {
            

        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $r['nama'] ?></td>
            <td><?php echo $r['nip'] ?></td>
            <td><?php echo $r['tempat_lahir'] ?></td>
            <td><?php echo $r['tanggal_lahir'] ?></td>
            <td><?php echo $r['prov'] ?></td>
            <td><?php echo $r['kota'] ?></td>
            <td><?php echo $r['grp1'] ?></td>
            <td><?php echo $r['grp2'] ?></td>
            <td><?php echo $r['pangkat'] ?></td>
            <td><?php echo $r['korps'] ?></td>
            <td><?php echo $r['nrp'] ?></td>
            <td><?php echo $r['jabatan'] ?></td>
            <td><?php echo $r['baju_p_bj'] ?></td>
            <td><?php echo $r['baju_l_bd'] ?></td>
            <td><?php echo $r['baju_l_pr'] ?></td>
            <td><?php echo $r['baju_l_pg'] ?></td>
            <td><?php echo $r['baju_pdk'] ?></td>
            <td><?php echo $r['baju_p_tg'] ?></td>
            <td><?php echo $r['baju_l_tg'] ?></td>
            <td><?php echo $r['baju_krh'] ?></td>
            <td><?php echo $r['celana_p_ci'] ?></td>
            <td><?php echo $r['celana_l_pg'] ?></td>
            <td><?php echo $r['celana_l_pgl'] ?></td>
            <td><?php echo $r['celana_l_ph'] ?></td>
            <td><?php echo $r['celana_l_ltt'] ?></td>
            <td><?php echo $r['celana_l_bwh'] ?></td>
            <td><?php echo $r['celana_kris'] ?></td>
            <td><?php echo $r['tutup_kepala'] ?></td>
            <td><?php echo $r['tutup_kaki'] ?></td>
            <td><?php echo $r['tutup_badan'] ?></td>
            <td><?php echo $r['ket'] ?></td>
            <td><?php echo $r['ls'] ?></td>



        </tr>
        <?php
           $no++; }
        ?>
    </tbody>
</table>
</body>