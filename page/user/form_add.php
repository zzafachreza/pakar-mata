							<div class="kt-portlet">

										<!--begin::Form-->
										<form class="kt-form" id="formUserAdd" enctype="multipart/form-data">
											<div class="kt-portlet__body">
												<div class="row">
													<div class="col col-sm-5">
														<div class="form-group">
															<label>Username:</label>
															<input name="username" type="text" class="form-control" placeholder="Enter username">
															<span class="form-text text-muted">Please enter your username</span>
														</div>
														<div class="form-group">
															<label>Full Name:</label>
															<input name="nama_lengkap" type="text" class="form-control" placeholder="Enter full name">
															<span class="form-text text-muted">Please enter your full name</span>
														</div>
														<div class="form-group">
															<label>Password:</label>
															<input name="password" type="password" class="form-control" placeholder="Enter password">
															<span class="form-text text-muted">Please enter your password</span>
														</div>
														<div class="form-group">
															<label>Type User:</label>
															<select name="level" class="form-control selectza" data-live-search="true">
															  <option data-tokens="Admin">Admin</option>
															  <option data-tokens="Member">Member</option>
															</select>
														</div>
													</div>
													<div class="col col-sm-5">
														<div class="form-group">
															<label>Tanggal Lahir:</label>
															<input autocomplete="off" name="tanggal_lahir" type="text" class="tanggal form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
															<span class="form-text text-muted">Please enter your birthday</span>
														</div>

														<div class="form-group">
															<label>Jenis Kelamin:</label>
															<select name="jenis_kelamin" class="form-control">
																<option>Laki-laki</option>
																<option>Perempuan</option>
															</select>
															<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
															<span class="form-text text-muted">Please enter your birthday</span>
														</div>

														<div class="form-group">
															<label>Email:</label>
															<input type="email" name="email" class="form-control" placeholder="Enter email">
															<span class="form-text text-muted">We'll never share your email with anyone else</span>
														</div>
														<div class="form-group">
															<label>Telepon:</label>
															<input type="text" name="telepon" class="form-control" placeholder="Enter telepon">
															<span class="form-text text-muted">Please enter your phone</span>
														</div>
														<div class="form-group">
															<label>Alamat:</label>
															<textarea name="alamat" class="form-control" placeholder="Enter alamat" id="kt_autosize_1" rows="3" style="overflow: auto; overflow-wrap: break-word; resize: none; height: 80px;"></textarea>
															<span class="form-text text-muted">Please enter your Address</span>
														</div>
														<div class="form-group">

															
																<div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_user_avatar_3">
																	<div class="kt-avatar__holder" style="background-image: url('data:image/jpg;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAAAAACPAi4CAAAACXZwQWcAAABAAAAAQADq8/hgAAAEWklEQVRYw9WX6XKjRhCAef8HiySQvGt5vfZuEselOUAcEpe4GdI9MAgQOjb5k3SVyzY1801PX9OtNf9StP80QJR5miRpXtb/AFCnvmMySgmhlJn2Mal+BSBSj1NCGeNSGAMOd0/iQYCI95TAXnm+FCr/I2ZYPwJILEJhPaGm7flBFIW+Z5sUvwEivguovG7pMR0cV2e+BbYArF3cBqQclKfEvryvSB2KaHa6BYhgDSP7ZN7gmUNQCf86wCdgcBaKq04/cTzAuwbA/czKb8VdZYMSI8IAEOJ+XjTiFkF4SDjOARIIHLiBK+4E/xHOIdEloMSAAwZx7hEOBKIquwA4lFPbR/3uEhzCqSUmgBiwrGgeIlQm5b0zO0CN3yKw34QgQC4JKZqrGAFC0MpWvuwJ3V6hWD3BI5wchoDaBAumzYQgmsrd7ewZx5bosHIAAAtQp4+nXUuA+2yXy9Xyi4OsIorjauBLZQWtd0Gqrt3EvCXQlb4BMZYfsPP7cr0gvS4FaNw6Qus0ovtez8DZcYyHt8Wmk9XWdF+Mjf570Ke4q46UgAgUCtX55mKl/wSbsD83hrEE0VGJ1RrEWHz2aaXuIAEe7b3SNG/601oSzL/W20/T2r2uDNACARvjWelZQTTaCiCg2vSR1bzrsFgSQMk8SbPi8FWX+0GFbX2OXMarDoAmOGfo+wpXt7cwj4Hv+1n+rSMYW3HOfS4TAgHZIDIVYG38wNzchyB+kj4ZUwB4npw6ABokmgA2qz9kfbIkoWDLzQSQ0tbw2gA20kA/nmyqCHG8nmqQd2prbSKQZAIwnk5B5PSE/EWfACCUZGFSgHQKeE6DsCcExfc5wKEDRLMaJHBwTwA/zFzhOLBBPGODoCfEyYUb0XVBB1AGHXvho/SVDsSjF15QrtMG1xlpsDbCrCewj7UxAWAJSjsAlJOuHI0AX9Mi8IMgsJnMC2MMOJA2f7RhXI8AG/2LVxZZVlQWmKElnAFiT5nMH62L67Mb3lTmbIzVK3Uc9r6GvJAEyMa6d0KXP1oXliqbRPPzN0NvBcrBAmSpr37wlrB8GeRS6zkJECZVNRKeuLfty1C+wc/zp7TD9jVQN7DUDq2vkUEzfAymIl9uZ5iL1B0U1Rw7surmc4SE/sUBE3KaDB8Wd1QS7hJQga4Kayow2aAsXiV0L458HE/jx9UbPi33CIf+ITwDSnxM/IcIcAGIrHzaH+BX8Ky4awdq41nBZYsjG4/kEQLjg9Q5A9A1jJ7u3CJEa1OzmuvSKgubwPA24IT7WT7fJ5YmEtwbASWO2AkP94871WpPOCc8vmYHaORhv5lf75VrV3bD+9nZIrUJamhXN9v9kMlu3wonYVlGe9msU1/cGTgKpx0YmO2fsrKq66rMk8Bh7dd99sDIk+xxxsE5icqhqfsLflkz1pkbukSCBzI5bqG0EGrPGvfK2FeGDseRi1I5eVFuB8WvDp51FvsH13Fcz4+y6n86Oz8kfwPMD02INEiadQAAAABJRU5ErkJggg==')"></div>
																	<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
																		<i class="fa fa-pen"></i>
																		<input class="foto" type="file" name="foto" accept=".png, .jpg, .jpeg">
																	</label>
																	<span style="height: 18px;text-align: center;" class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
																			<center><i class="fa fa-times"></i></center>
																	</span>
																</div>
																<span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
															
														</div>
													</div>
												</div>
												
												



												
											</div>





											<div class="kt-portlet__foot kt-portlet__foot--solid">
												<div class="kt-form__actions kt-form__actions--right">
													 <a onclick="MenuUser()"  class="btn btn-clean kt-margin-r-10">
													<i class="la la-arrow-left"></i>
													<span class="kt-hidden-mobile">Back</span>
													</a>
													<button type="SUBMIT" class="btn btn-brand">Submit</button>
													<button type="reset" class="btn btn-secondary">Cancel</button>
													
												</div>
											</div>


										</form>

										<!--end::Form-->
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
								

								  function readURL(input) {
			                        if (input.files && input.files[0]) {
			                            var reader = new FileReader();

			                            reader.onload = function (e) {

			                                $('.kt-avatar__holder').css('background-image', 'url('+e.target.result+')');
			                                $(".kt-avatar__cancel").show();
			                            }

			                            reader.readAsDataURL(input.files[0]);
			                        }
			                    }


			                    $(".foto").change(function(){
			                        readURL(this);
			                    });


			                    $(".kt-avatar__cancel").click(function(){

			                    	$(".kt-avatar__holder").css("background-image","url('data:image/jpg;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAAAAACPAi4CAAAACXZwQWcAAABAAAAAQADq8/hgAAAEWklEQVRYw9WX6XKjRhCAef8HiySQvGt5vfZuEselOUAcEpe4GdI9MAgQOjb5k3SVyzY1801PX9OtNf9StP80QJR5miRpXtb/AFCnvmMySgmhlJn2Mal+BSBSj1NCGeNSGAMOd0/iQYCI95TAXnm+FCr/I2ZYPwJILEJhPaGm7flBFIW+Z5sUvwEivguovG7pMR0cV2e+BbYArF3cBqQclKfEvryvSB2KaHa6BYhgDSP7ZN7gmUNQCf86wCdgcBaKq04/cTzAuwbA/czKb8VdZYMSI8IAEOJ+XjTiFkF4SDjOARIIHLiBK+4E/xHOIdEloMSAAwZx7hEOBKIquwA4lFPbR/3uEhzCqSUmgBiwrGgeIlQm5b0zO0CN3yKw34QgQC4JKZqrGAFC0MpWvuwJ3V6hWD3BI5wchoDaBAumzYQgmsrd7ewZx5bosHIAAAtQp4+nXUuA+2yXy9Xyi4OsIorjauBLZQWtd0Gqrt3EvCXQlb4BMZYfsPP7cr0gvS4FaNw6Qus0ovtez8DZcYyHt8Wmk9XWdF+Mjf570Ke4q46UgAgUCtX55mKl/wSbsD83hrEE0VGJ1RrEWHz2aaXuIAEe7b3SNG/601oSzL/W20/T2r2uDNACARvjWelZQTTaCiCg2vSR1bzrsFgSQMk8SbPi8FWX+0GFbX2OXMarDoAmOGfo+wpXt7cwj4Hv+1n+rSMYW3HOfS4TAgHZIDIVYG38wNzchyB+kj4ZUwB4npw6ABokmgA2qz9kfbIkoWDLzQSQ0tbw2gA20kA/nmyqCHG8nmqQd2prbSKQZAIwnk5B5PSE/EWfACCUZGFSgHQKeE6DsCcExfc5wKEDRLMaJHBwTwA/zFzhOLBBPGODoCfEyYUb0XVBB1AGHXvho/SVDsSjF15QrtMG1xlpsDbCrCewj7UxAWAJSjsAlJOuHI0AX9Mi8IMgsJnMC2MMOJA2f7RhXI8AG/2LVxZZVlQWmKElnAFiT5nMH62L67Mb3lTmbIzVK3Uc9r6GvJAEyMa6d0KXP1oXliqbRPPzN0NvBcrBAmSpr37wlrB8GeRS6zkJECZVNRKeuLfty1C+wc/zp7TD9jVQN7DUDq2vkUEzfAymIl9uZ5iL1B0U1Rw7surmc4SE/sUBE3KaDB8Wd1QS7hJQga4Kayow2aAsXiV0L458HE/jx9UbPi33CIf+ITwDSnxM/IcIcAGIrHzaH+BX8Ky4awdq41nBZYsjG4/kEQLjg9Q5A9A1jJ7u3CJEa1OzmuvSKgubwPA24IT7WT7fJ5YmEtwbASWO2AkP94871WpPOCc8vmYHaORhv5lf75VrV3bD+9nZIrUJamhXN9v9kMlu3wonYVlGe9msU1/cGTgKpx0YmO2fsrKq66rMk8Bh7dd99sDIk+xxxsE5icqhqfsLflkz1pkbukSCBzI5bqG0EGrPGvfK2FeGDseRi1I5eVFuB8WvDp51FvsH13Fcz4+y6n86Oz8kfwPMD02INEiadQAAAABJRU5ErkJggg==')");
			                    	$(".foto").val("");
			                    	$(this).hide();

			                    });




			                    $("#formUserAdd").submit(function(e){

			                    	e.preventDefault();

			                    	var dataForm = $(this).serialize();
			                    
			                    	$.ajax({
											url: "api/user_add.php", // Url to which the request is send
											type: "POST",             // Type of request to be send, called as method
											data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
											contentType: false,       // The content type used when sending data to the server.
											cache: false,             // To unable request pages to be cached
											processData:false,        // To send DOMDocument or non processed data file it is set to false
											success: function(data)   // A function to be called if request succeeds
											{
												if (data==200) {

													MenuUser();
													Not("data berhasil ditambah","success","check-circle");
												
												}else{
													alert(data);
												}
												
											}
										});


			                    });





						

							</script>