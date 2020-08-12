<?php
error_reporting(0);
session_start();
 header("Access-Control-Allow-Origin: *");
 include_once 'koneksi.php';
$id = $_POST['id'];

// photo exixting
$fotoAda = $conn->query("SELECT * FROM master_user WHERE id='$id'")->fetch();

if (!empty($_FILES['foto']['name'])) {
        "nama : ". $pama = $_FILES['foto']['name'];
        $type = explode(".", $pama);

         "asal file : ".$asal = $_FILES['foto']['tmp_name'];


if ($type[1]=="jpg") {

$folder = "model";
$upload_image = $_FILES['foto']['name'];
// tentukan ukuran width yang diharapkan
$width_size = 100;
 
// tentukan di mana image akan ditempatkan setelah diupload
$filesave = $folder . $upload_image;
move_uploaded_file($_FILES['foto']['tmp_name'], $filesave);
 
// menentukan nama image setelah dibuat
$resize_image = $folder . "resize.".$type[1];
 
// mendapatkan ukuran width dan height dari image
list( $width, $height ) = getimagesize($filesave);
 
// mendapatkan nilai pembagi supaya ukuran skala image yang dihasilkan sesuai dengan aslinya
$k = $width / $width_size;
 
// menentukan width yang baru
$newwidth = $width / $k;
 
// menentukan height yang baru
$newheight = $height / $k;
 
// fungsi untuk membuat image yang baru
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($filesave);
 
// men-resize image yang baru
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
 
// menyimpan image yang baru
imagejpeg($thumb, $resize_image);
 
imagedestroy($thumb);
imagedestroy($source);
 
 $path= "modelresize.".$type[1];
}

else{
        $path= $asal;
}




        $data = file_get_contents($path);
        
// Convert to Base64

      $foto = $base64 = 'data:image/jpg;base64,' . base64_encode($data);

		!unlink($filesave); //ini untuk menghapus foto alsi
		!unlink($resize_image); //menghapus foto yang sudah di resize

}else{

 $foto = $fotoAda['foto'];

}


if (!empty($_POST['password'])) {
    # code...

    

    $password = crypt($_POST['password'], '$6$rounds=151195$fachrezamaulana$');
}else{
    $password  = $_POST['passwordOk'];
}


$username = $_POST['username'];
$nama_lengkap = $_POST['nama_lengkap'];
$level = $_POST['level'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$ls = date('Y-m-d H:i:s');
    try {
        //script sql
        $sql="UPDATE master_user SET
            username=?,
            password=?,
            nama_lengkap=?,
            level=?,
            alamat=?,
            telepon=?,
            email=?,
            foto=?,
            tanggal_lahir=?,
            jenis_kelamin=?,
            ls=? WHERE id=?";
             
        //prepare and bind
        $stmt = $conn->prepare($sql);
        // excetuce sql
        $stmt->execute(array($username,$password,$nama_lengkap,$level,$alamat,$telepon,$email,$foto,$tanggal_lahir,$jenis_kelamin,$ls,$id));
        // direction if ok
		echo $id;
    }  

    catch (PDOException $e) {
            
        echo $e->getMessage();
     }

?>