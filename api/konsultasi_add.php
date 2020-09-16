<?php 

 header("Access-Control-Allow-Origin: *");
 include_once 'koneksi.php';

$id = $_POST['id'];
$sql = "SELECT * FROM master_user WHERE id='$id' limit 1";
$r = $conn->query($sql)->fetch();



?>
<div class="row" style="background-color: #FFF;padding-top: 5%">
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
                            <img src="<?php echo $r['foto'] ?>" alt="image" style="width: 100px;height: 100px;border-radius: 50px">
                        </div>
                        <div class="kt-widget__content">
                            <div class="kt-widget__section">
                                <a class="kt-widget__username">
                                    <h3><?php echo $r['nama_lengkap'] ?></h3>
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
                    <div class="kt-widget__body">
                        <div class="kt-widget__content">
                            
                        </div>

                    </div>
                </div>

                <!--end::Widget -->
            </div>
        </div>
    </div>
    <div class="col col-sm-6" style="padding:5%">

        <style type="text/css">
                .card-1 {
         
                    width: 100%;

                    height: 100%;
                  box-shadow: 1px 2px 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
                   transition: box-shadow 1s;
                
                }

                .card-1:hover {
                  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
                  
                }

                .judulService{
                 /*#cc0c14*/
                 width: 20%;
                 float: left;
                 display: inline-block;
                  border-bottom-width: 5px;
                 border-bottom-color: #6c6c6c;
                 border-bottom-style: solid;
                 transition:width 1s;
        
            }

            .imgService{
                align-items: center;
            
                transition: transform 1s;

            }


                .card-1:hover .judulService {
                    border-bottom: 5px solid #3F3D56;
                     width: 100%;
                }

                .card-1:hover .imgService {
                     transform: scale(1.5,1.5);
                }

        </style>

        <input type="hidden" name="id_user" value="<?php echo $r['id'] ?>">
        <input type="hidden" name="nama_lengkap" value="<?php echo $r['nama_lengkap'] ?>">
        <input type="hidden" name="id_konsultasi" value="<?php echo date('ymd').'/'.date('his').'/'.$r['id'] ?>">

        <button type="submit" class="btn btn-light col-sm-12 card-1">


            <h2 >KONSULTASI MATA</h2>
            <hr class="judulService"/>


        </button>

    </div>
</div>