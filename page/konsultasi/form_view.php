<?php
 header("Access-Control-Allow-Origin: *");
 include_once '../../api/koneksi.php';
$id = $_POST['id'];


$sql = "SELECT * FROM master_user WHERE id='$id'";
$data = $conn->query($sql)->fetch();
// var_dump($data);
?>
																

<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">

								<!--Begin:: App Aside Mobile Toggle-->
								<button class="kt-app__aside-close" id="kt_user_profile_aside_close">
									<i class="la la-close"></i>
								</button>

								<!--End:: App Aside Mobile Toggle-->

								<!--Begin:: App Aside-->
								<div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">

									<!--begin:: Widgets/Applications/User/Profile1-->
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
														<img src="<?php echo $data['foto']; ?>" alt="image">
													</div>
													<div class="kt-widget__content">
														<div class="kt-widget__section">
															<a  class="kt-widget__username">
																<?php echo $data['nama_lengkap']; ?>
																<i class="flaticon2-correct kt-font-success"></i>
															</a>
															<span class="kt-widget__subtitle">
																<?php echo $data['level']; ?>
															</span>
														</div>
														<div class="kt-widget__action">
															<button type="button" class="btn btn-info btn-sm">chat</button>&nbsp;
															<button type="button" class="btn btn-success btn-sm">follow</button>
														</div>
													</div>
												</div>
												<div class="kt-widget__body">
													<div class="kt-widget__content">
														<div class="kt-widget__info">
															<span class="kt-widget__label">Email:</span>
															<a  class="kt-widget__data"><?php echo $data['email']; ?></a>
														</div>
														<div class="kt-widget__info">
															<span class="kt-widget__label">Phone:</span>
															<a  class="kt-widget__data"><?php echo $data['telepon']; ?></a>
														</div>
														<div class="kt-widget__info">
															<!-- <span class="kt-widget__label">Alamat:</span> -->
															<span class="kt-widget__data"><?php echo $data['alamat']; ?></span>
														</div>
													</div>
													<div class="kt-widget__items">
														<a href="custom/apps/user/profile-1/overview.html" class="kt-widget__item ">
															<span class="kt-widget__section">
																<span class="kt-widget__icon">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24"></polygon>
																			<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
																			<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
																		</g>
																	</svg> </span>
																<span class="kt-widget__desc">
																	Profile Overview
																</span>
															</span>
														</a>
														
														
													</div>
												</div>
											</div>

											<!--end::Widget -->
										</div>
									</div>

									<!--end:: Widgets/Applications/User/Profile1-->
								</div>

								<!--End:: App Aside-->

								<!--Begin:: App Content-->
								<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-xl-12">
											<div class="kt-portlet">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title"> <a onclick="MenuUser()"  class="btn btn-danger kt-margin-r-10">
																	<i class="la la-arrow-left"></i>
																	<span class="kt-hidden-mobile">Back</span>
																	</a>
																	Personal Information <small>update your personal informaiton</small></h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<div class="kt-portlet__head-wrapper">
															<div class="dropdown dropdown-inline">
																<button type="button" class="btn btn-label-brand btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="flaticon2-gear"></i>
																</button>
																<div class="dropdown-menu dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__section kt-nav__section--first">
																			<span class="kt-nav__section-text">Export Tools</span>
																		</li>
																		<li class="kt-nav__item">
																			<a  class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-print"></i>
																				<span class="kt-nav__link-text">Print</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a  class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-copy"></i>
																				<span class="kt-nav__link-text">Copy</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a  class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-file-excel-o"></i>
																				<span class="kt-nav__link-text">Excel</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a  class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-file-text-o"></i>
																				<span class="kt-nav__link-text">CSV</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a  class="kt-nav__link">
																				<i class="kt-nav__link-icon la la-file-pdf-o"></i>
																				<span class="kt-nav__link-text">PDF</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											<form class="kt-form kt-form--label-right" id="formUserEdit" enctype="multipart/form-data">
													<div class="kt-portlet__body">
														<div class="kt-section kt-section--first">
															<div class="kt-section__body">
																<div class="row">
																	<label class="col-xl-3"></label>
																	<div class="col-lg-9 col-xl-6">
																		<h3 class="kt-section__title kt-section__title-sm">User Info:</h3>
																	</div>
																</div>
																<div class="form-group row">
																	<div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_user_avatar_3">
																		<div class="kt-avatar__holder" style="background-image: url('<?php echo $data['foto'] ?>')"></div>
																		<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
																			<i class="fa fa-pen"></i>
																			<input class="foto" type="file" value="<?php echo $data['foto'] ?>" name="foto" accept=".png, .jpg, .jpeg">
																		</label>
																		<span style="height: 18px;text-align: center;" class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
																				<center><i class="fa fa-times"></i></center>
																		</span>
																	</div>
															
																</div>
																<div class="row">
													<div class="col col-sm-5">
														<div class="form-group">
															<label>Username:</label>
															<input name="username" type="text" class="form-control" placeholder="Enter username" value="<?php echo $data['username'] ?>">
															<span class="form-text text-muted">Please enter your username</span>
														</div>
														<div class="form-group">
															<label>Full Name:</label>
															<input value="<?php echo $data['nama_lengkap'] ?>" name="nama_lengkap" type="text" class="form-control" placeholder="Enter full name">
															<span class="form-text text-muted">Please enter your full name</span>
														</div>
														<div class="form-group">
															<label>Password:</label>
															<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
															<input type="hidden" name="passwordOk" value="<?php echo $data['password'] ?>">
															<input name="password" type="password" class="form-control" placeholder="Enter password">
															<span class="form-text text-muted">Please enter your password</span>
														</div>
														<div class="form-group">
															<label>Type User:</label>
															<select name="level" class="form-control selectza" data-live-search="true">
															  <option data-tokens="Admin" <?php echo $data['level']=='Admin'?'selected':'' ?>>Admin</option>
															  <option data-tokens="Member" <?php echo $data['level']=='Member'?'selected':'' ?>>Member</option>
															</select>
														</div>
													</div>
													<div class="col col-sm-5">
														<div class="form-group">
															<label>Email:</label>
															<input value="<?php echo $data['email'] ?>" type="email" name="email" class="form-control" placeholder="Enter email">
															<span class="form-text text-muted">We'll never share your email with anyone else</span>
														</div>
														<div class="form-group">
															<label>Telepon:</label>
															<input value="<?php echo $data['telepon'] ?>" type="text" name="telepon" class="form-control" placeholder="Enter telepon">
															<span class="form-text text-muted">Please enter your phone</span>
														</div>
														<div class="form-group">
															<label>Alamat:</label>
															<textarea name="alamat" class="form-control" placeholder="Enter alamat" id="kt_autosize_1" rows="3" style="overflow: auto; overflow-wrap: break-word; resize: none; height: 80px;"><?php echo $data['alamat'] ?></textarea>
															<span class="form-text text-muted">Please enter your Address</span>
														</div>
															</div>
														</div>
													</div>
													<div class="kt-portlet__foot">
														<div class="kt-form__actions">
															<div class="row">
																<div class="col-lg-3 col-xl-3">
																</div>
																<div class="col-lg-9 col-xl-9">
																	
														
																	<button type="SUBMIT" class="btn btn-success">Submit</button>&nbsp;
																	<button type="reset" class="btn btn-secondary">Cancel</button>
																</div>
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>

							<script type="text/javascript">
								

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


			                    $("#formUserEdit").submit(function(e){

			                    	e.preventDefault();

			                    	var dataForm = $(this).serialize();
			                    
			                    	$.ajax({
											url: "api/user_edit.php", // Url to which the request is send
											type: "POST",             // Type of request to be send, called as method
											data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
											contentType: false,       // The content type used when sending data to the server.
											cache: false,             // To unable request pages to be cached
											processData:false,        // To send DOMDocument or non processed data file it is set to false
											success: function(data)   // A function to be called if request succeeds
											{	
									
												if (data>=0) {
													ViewUser(data);
												
												}else{
													alert(data);
												}
												
											}
										});


			                    });


							</script>