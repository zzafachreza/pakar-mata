<?php
session_start();
header("Access-Control-Allow-Origin: *");
date_default_timezone_set("Asia/Jakarta");
 header("Access-Control-Allow-Origin: *");
 include_once 'koneksi.php';

print_r($_POST);
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

		$foto = "data:image/jpg;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAAAAACPAi4CAAAACXZwQWcAAABAAAAAQADq8/hgAAAEWklEQVRYw9WX6XKjRhCAef8HiySQvGt5vfZuEselOUAcEpe4GdI9MAgQOjb5k3SVyzY1801PX9OtNf9StP80QJR5miRpXtb/AFCnvmMySgmhlJn2Mal+BSBSj1NCGeNSGAMOd0/iQYCI95TAXnm+FCr/I2ZYPwJILEJhPaGm7flBFIW+Z5sUvwEivguovG7pMR0cV2e+BbYArF3cBqQclKfEvryvSB2KaHa6BYhgDSP7ZN7gmUNQCf86wCdgcBaKq04/cTzAuwbA/czKb8VdZYMSI8IAEOJ+XjTiFkF4SDjOARIIHLiBK+4E/xHOIdEloMSAAwZx7hEOBKIquwA4lFPbR/3uEhzCqSUmgBiwrGgeIlQm5b0zO0CN3yKw34QgQC4JKZqrGAFC0MpWvuwJ3V6hWD3BI5wchoDaBAumzYQgmsrd7ewZx5bosHIAAAtQp4+nXUuA+2yXy9Xyi4OsIorjauBLZQWtd0Gqrt3EvCXQlb4BMZYfsPP7cr0gvS4FaNw6Qus0ovtez8DZcYyHt8Wmk9XWdF+Mjf570Ke4q46UgAgUCtX55mKl/wSbsD83hrEE0VGJ1RrEWHz2aaXuIAEe7b3SNG/601oSzL/W20/T2r2uDNACARvjWelZQTTaCiCg2vSR1bzrsFgSQMk8SbPi8FWX+0GFbX2OXMarDoAmOGfo+wpXt7cwj4Hv+1n+rSMYW3HOfS4TAgHZIDIVYG38wNzchyB+kj4ZUwB4npw6ABokmgA2qz9kfbIkoWDLzQSQ0tbw2gA20kA/nmyqCHG8nmqQd2prbSKQZAIwnk5B5PSE/EWfACCUZGFSgHQKeE6DsCcExfc5wKEDRLMaJHBwTwA/zFzhOLBBPGODoCfEyYUb0XVBB1AGHXvho/SVDsSjF15QrtMG1xlpsDbCrCewj7UxAWAJSjsAlJOuHI0AX9Mi8IMgsJnMC2MMOJA2f7RhXI8AG/2LVxZZVlQWmKElnAFiT5nMH62L67Mb3lTmbIzVK3Uc9r6GvJAEyMa6d0KXP1oXliqbRPPzN0NvBcrBAmSpr37wlrB8GeRS6zkJECZVNRKeuLfty1C+wc/zp7TD9jVQN7DUDq2vkUEzfAymIl9uZ5iL1B0U1Rw7surmc4SE/sUBE3KaDB8Wd1QS7hJQga4Kayow2aAsXiV0L458HE/jx9UbPi33CIf+ITwDSnxM/IcIcAGIrHzaH+BX8Ky4awdq41nBZYsjG4/kEQLjg9Q5A9A1jJ7u3CJEa1OzmuvSKgubwPA24IT7WT7fJ5YmEtwbASWO2AkP94871WpPOCc8vmYHaORhv5lf75VrV3bD+9nZIrUJamhXN9v9kMlu3wonYVlGe9msU1/cGTgKpx0YmO2fsrKq66rMk8Bh7dd99sDIk+xxxsE5icqhqfsLflkz1pkbukSCBzI5bqG0EGrPGvfK2FeGDseRi1I5eVFuB8WvDp51FvsH13Fcz4+y6n86Oz8kfwPMD02INEiadQAAAABJRU5ErkJggg==";
}


$username = $_POST['username'];
$nama_lengkap = $_POST['nama_lengkap'];
$password = crypt($_POST['password'], '$6$rounds=151195$fachrezamaulana$');
$level = 'Member';
$email = $_POST['email'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$ls = date('Y-m-d H:i:s');
    try {
        //script sql
        $sql="INSERT INTO master_user
                (`username`,
                `nama_lengkap`,
                 `password`,
                 `level`,
                 `email`,
                 `tanggal_lahir`,
                 `jenis_kelamin`,
                 `foto`,
                 `ls`)
        VALUES (?,?,?,?,?,?,?,?,?)";
        // prepare and bind
        $stmt = $conn->prepare($sql);

        // excetuce sql
        $stmt->execute(array($username,$nama_lengkap,$password,$level,$email,$tanggal_lahir,$jenis_kelamin,$foto,$ls));
        // direction if ok
		echo 200;
    }  

    catch (PDOException $e) {
            
        echo $e->getMessage();
     }

?>