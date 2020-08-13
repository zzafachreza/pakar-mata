<?php 

 header("Access-Control-Allow-Origin: *");
 include_once 'koneksi.php';

$id = $_POST['id'];
$sql = "SELECT * FROM master_user WHERE id='$id' limit 1";
$r = $conn->query($sql)->fetch();



?>
<div class="row">
    <div class="col col-sm-6">
        <div class="kt-portlet ">
            <div class="kt-portlet__head  kt-portlet__head--noborder">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                    </h3>
                </div>

            </div>
            <div class="kt-portlet__body kt-portlet__body--fit-y">

                <!--begin::Widget -->
                <div class="kt-widget kt-widget--user-profile-1">
                    <div class="kt-widget__head">
                        <div class="kt-widget__media">
                            <img src="<?php echo $r['foto'] ?>" alt="image">
                        </div>
                        <div class="kt-widget__content">
                            <div class="kt-widget__section">
                                <a class="kt-widget__username">
                                    <?php echo $r['nama_lengkap'] ?> <i class="flaticon2-correct kt-font-success"></i>
                                </a>
                                <span class="kt-widget__subtitle">
                                    <?php echo $r['level'] ?>

                                </span>
                                <span class="kt-widget__subtitle">
                                    <?php 
															echo "Lahir : ".Indonesia2Tgl($r['tanggal_lahir']);?>

                                </span>
                            </div>
                            <div class="kt-widget__action">
                                <button type="button"
                                    class="btn btn-info btn-sm"><?php echo $r['jenis_kelamin'] ?></button>&nbsp;


                                <button type="button" class="btn btn-success btn-sm"><?php 

															$lahir=new DateTime($r['tanggal_lahir']);
									                        $today=new DateTime();
									                        $umur = $today->diff($lahir);

									                        echo $umur->y." Tahun, ".$umur->m." Bulan, dan ".$umur->d." Hari";

															?></button>


                            </div>
                        </div>
                    </div>
                    <div class="kt-widget__body">
                        <div class="kt-widget__content">
                            <div class="kt-widget__info">
                                <span class="kt-widget__label">Email:</span>
                                <a class="kt-widget__data"><?php echo $r['email'] ?></a>
                            </div>
                            <div class="kt-widget__info">
                                <span class="kt-widget__label">Phone:</span>
                                <a class="kt-widget__data"><?php echo $r['telepon'] ?></a>
                            </div>
                            <div class="kt-widget__info">
                                <!-- <span class="kt-widget__label">Alamat:</span> -->
                                <span class="kt-widget__data"><?php echo $r['alamat'] ?></span>
                            </div>
                        </div>

                    </div>
                </div>

                <!--end::Widget -->
            </div>
        </div>
    </div>
    <div class="col col-sm-6">

        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
        <input type="hidden" name="id_user" value="<?php echo $r['id'] ?>">
        <input type="hidden" name="nama_lengkap" value="<?php echo $r['nama_lengkap'] ?>">
        <input type="hidden" name="id_konsultasi" value="<?php echo date('ymd').'/'.date('his').'/'.$r['id'] ?>">
        <button type="submit" class="btn btn-light col-sm-12"
            style="height: 200px;border:1px solid #ccc;box-shadow:0px 0px 2px 2px #CACACA">


            <img src="page/dokter.svg" width="150" height="150" /><br />
            <h2>KONSULTASI SEKARANG</h2>


        </button>

    </div>
</div>