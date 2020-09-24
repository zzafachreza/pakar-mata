<?php

 header("Access-Control-Allow-Origin: *");

 session_start();



?>


<?php
								if ($_SESSION['level']=='Admin') {
									# code...
								
							?>


							<div class="kt-portlet kt-portlet--mobile">

								<div class="kt-portlet__head kt-portlet__head--lg">

									<div class="kt-portlet__head-label">

										<span class="kt-portlet__head-icon">

											<i class="kt-font-brand flaticon2-line-char"></i>

										</span>

									</div>

									<div class="kt-portlet__head-toolbar">

										<div class="kt-portlet__head-wrapper">

											<div class="kt-portlet__head-actions">

													<button type="button" id="btnPilihAll"  class="btn btn-danger btn-icon-sm" >

														<i class="la la-trash"></i> Delete

													</button>

												

											</div>

										</div>

									</div>

								</div>

								<div class="kt-portlet__body">



									<!--begin: Datatable -->

									<table class="table table-striped- table-bordered table-hover table-checkable" id="tableData">

											   <thead>

										             <tr>

										            	<th>
										            		<label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid">
										            		<input type="checkbox" id="select_all">&nbsp;<span></span>
										            		</label>
										            	</th>

									
									
										                <th>nama</th>
										                <th>email</th>
										                <th>subjek</th>
										                <th>pesan</th>
										                <th>tanggal</th>
										                <th>time</th>

										                

										            </tr>
										            </tr>

										        </thead>

									</table>



									<!--end: Datatable -->

								</div>

							</div>

		

<?php }else{

	?>

							<div class="kt-portlet kt-portlet--mobile">

								<div class="kt-portlet__head kt-portlet__head--lg">

									<div class="kt-portlet__head-label">

										<span class="kt-portlet__head-icon">

											<i class="kt-font-brand flaticon2-line-char"></i>

										</span>

									</div>

									<div class="kt-portlet__head-toolbar">

										<div class="kt-portlet__head-wrapper">

											<div class="kt-portlet__head-actions">


												

											</div>

										</div>

									</div>

								</div>

								<div class="kt-portlet__body">
									<form id="formSaran">
										<div class="form-group">
											<label>Nama :</label>
											<input name="nama" type="text" class="form-control" placeholder="Masukan Nama Anda">
										</div>
										<div class="form-group">
											<label>email :</label>
											<input name="email" type="text" class="form-control" placeholder="Masukan email Anda">
										</div>
										<div class="form-group">
											<label>Subjek :</label>
											<input name="subjek" type="text" class="form-control" placeholder="Masukan subjek Anda">
										</div>
									
										<div class="form-group">
											<label>Pesan :</label>
											<textarea name="pesan" type="text" class="form-control" placeholder="Masukan pesan Anda"></textarea>
										</div>

										<div class="form-group">
											
											<button type="SUBMIT" class="btn btn-primary">KIRIM SARAN</button>
										</div>
	
										
									</form>								
								</div>
							</div>

							<script type="text/javascript">
								 $("#formSaran").submit(function(e){
								 	e.preventDefault();
									var dataForm =	$(this).serialize();
								

												$.ajax({
												    	url:'./api/saran_add.php',
												    	type:'POST',
												    	data:dataForm,
												    	success:function(data){
												    		
												    		if (data=200) {
												    			alert('Terima kasih, Saran Anda telah terkirim..');
												    			$("input[name='nama']").val("");
												    			$("input[name='email']").val("");
												    			$("input[name='subjek']").val("");
												    			$("textarea[name='pesan']").val("");
												    		}
												    	}
												    })


								 })
							</script>

<?php } ?>



