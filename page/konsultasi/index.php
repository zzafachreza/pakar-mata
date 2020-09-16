<?php
session_start();
 header("Access-Control-Allow-Origin: *");

include_once '../../api/koneksi.php';



if ($_SESSION['level']=='Admin') {
	# code...
	$sql = "SELECT * FROM master_user";

}else{

	$id_user = $_SESSION['id'];
	$sql = "SELECT * FROM master_user where id='$id_user'";
}

// #3F3D56 abu
// #F6EFD3
?>

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet">
        <div class="kt-portlet__body kt-portlet__body--fit" style="background-color: #3F3D56">
            <div class="kt-grid kt-wizard-v1 kt-wizard-v1--white" id="kt_wizard_v1" data-ktwizard-state="step-first">
                <div class="kt-grid__item">

                    <!--begin: Form Wizard Nav -->
                    <div class="kt-wizard-v1__nav">

                        <!--doc: Remove "kt-wizard-v1__nav-items--clickable" class and also set 'clickableSteps: false' in the JS init to disable manually clicking step titles -->
                        <div class="kt-wizard-v1__nav-items kt-wizard-v1__nav-items--clickable">


                            <div id="iconSatu" class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
                                <div class="kt-wizard-v1__nav-body" >
                                    <div class="kt-wizard-v1__nav-icon"  style="color: #F6EFD3">
                                        <i class="flaticon-profile-1"></i>
                                    </div>
                                    <div class="kt-wizard-v1__nav-label"  style="color: #F6EFD3"> 
                                        1. Konfirmasi Data Pasien
                                    </div>
                                </div>
                            </div>
                            <div id="iconDua" class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
                                <div class="kt-wizard-v1__nav-body">
                                    <div class="kt-wizard-v1__nav-icon"  style="color: #F6EFD3">
                                        <i class="flaticon-list"></i>
                                    </div>
                                    <div class="kt-wizard-v1__nav-label"  style="color: #F6EFD3">
                                        2. Melakukan Wawancara
                                    </div>
                                </div>
                            </div>
                            <div id="iconTiga" class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
                                <div class="kt-wizard-v1__nav-body">
                                    <div class="kt-wizard-v1__nav-icon"  style="color: #F6EFD3">
                                        <i class="flaticon-notes"></i>
                                    </div>
                                    <div class="kt-wizard-v1__nav-label"  style="color: #F6EFD3">
                                        3. Hasil
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--end: Form Wizard Nav -->
                </div>
                <div class="kt-wizard-v1__wrapper">

                    <!--begin: Form Wizard Form-->
                    <div class="container" id="satu">
                        <form id="formKonsul1">

                            <center>
                                <h2>Konfirmasi Data Pasien</h2>
                                <input id="id_user" type="hidden" name="id_user" value="<?php echo $_SESSION['id'] ?>">
                            </center>

                            <div class="form-group">
                                <!-- <label for="nama">Nama Lengkap :</label>
														<select id="nama" name="nama" class="form-control selectza" data-live-search="true">
															<option>--Pilih User--</option>
															<?php
																// $hasil = $conn->query($sql);
																// while ( $r = $hasil->fetch()) {
																	# code...
																

															 ?>
															<option value="<?php echo $r['id'] ?>"><?php echo $r['nama_lengkap'] ?></option>
															<?php //} ?>
														</select> -->

                                <div id="dataUser">

                                </div>



                        </form>

                    </div>




                    <div class="container" id="dua" style="display: none;">

                            <style type="text/css">

                                .card-2{
                                    /*border: 2px solid black;*/
                                    background-color: #278571;
                                    border-radius: 15px;
                                    padding: 5%;
                                     box-shadow: 1px 2px 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
                                }
                                 .card-3{
                                    /*border: 2px solid black;*/
                                    background-color: #7185f5;
                                    border-radius: 15px;
                                    padding: 5%;
                                     box-shadow: 1px 2px 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
                                }
   

   

        </style>



                        <form id="formKonsul2">

                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                            <div class="form-group">
                                <h4 id="pertanyaan">

                                </h4>
                            </div>

                            <div class="row" style="justify-content: space-around;height: 100px;">
                                <div class="col-sm-5 card-2" id="ya">
                                

                                                <div class="kt-iconbox__icon" style="color: white">
                                                    <i class="fa fa-check-circle fa-3x"></i>

                                                </div>

                                                <div class="kt-iconbox__desc">

                                                    <h3 class="kt-iconbox__title" style="color: white">

                                                        <a class="kt-link">YA, BETUL</a><br />
                                             

                                                    </h3>
                                                </div>
                                </div>

                                <div id="tidak" class="col-sm-5 card-3">
                                   
                                     

                                                <div class="kt-iconbox__icon"  style="color: white">
                                                    <i class="fa fa-times-circle fa-3x"></i>

                                                </div>

                                               

                                                    <h3 class="kt-iconbox__title"  style="color: white">


                                                        <a class="kt-link">TIDAK, SALAH</a><br />
                                                      

                                                    </h3>

                                                   

                                          
                                    </div>
                                  
                                </div>

                            </div>



                        </form>

                    </div>


                    <div class="container" id="tiga" style="display: none">





                        <div id="dataHasil">

                        </div>





                    </div>

                    <!--end: Form Wizard Form-->
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(".selectza").selectpicker();


$('.tanggal').datepicker({
    format: "yyyy-mm-dd",
    todayBtn: "linked",
    orientation: "bottom right",
    toggleActive: true,
    language: "id",
    autoclose: true,
    todayHighlight: true,
    clearBtn: true
});
</script>