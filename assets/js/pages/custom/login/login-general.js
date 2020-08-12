





        Loader();

        $("input[name='username'").focus();



        if (localStorage.username!='') {

            $("input[name='username'").val(localStorage.username);

            $("input[name='password'").val(localStorage.password);

            $("#remember").hide();

            $("#unremember").show();

        }





        $("#btnKembali").click(function(e){

            e.preventDefault();

            location.href='./../'

        });



        function Loader(e){



            var waktu = e;



         $(document).pagePreloaders({

            

                //Main Options

                preloaderStyle: 'animation',    // Preloader style: animation, logo

                backgroundColor: '', // Preloader background color

                backgroundOpacity: 0.1, // Preloader background opacity: 0.1 to 1

                animationTime: waktu, // Minimum preloader display time in seconds (prevents the preloader from disappearing too fast)



                //Animation Preloader Options

                animationPreloader: '1', // Choose from 11 preload animations. Enter any value from 1 to 11

                animationPreloaderColor: '#f01867', // Animation color

                animationPreloaderOpacity: '1', // Animation opacity: 0.1 to 1



                //Logo Preloader Options

                imageURL: 'https://fachreza-maulana.com/img/ava.png', // Path to your logo image

                logoSize: '150px', // Size of the displayed logo (image proportions will be constrained to retain the quality)

                logoBackgroundColor: 'transparent', // Logo background color

                logoOpacity: '1', // Logo opacity: 0.1 to 1

                logoBorderWidth: '5px', // Logo stroke color width

                logoBorderColor: '#3cf', // Logo stroke color

                logoBorderRadius: '50%', // Logo corner radius

            });



        }





// Class Definition

var KTLoginGeneral = function() {



    var login = $('#kt_login');



    var showErrorMsg = function(form, type, msg) {
        var alert = $('<div class="alert alert-' + type + ' alert-dismissible" role="alert">\
            <div class="alert-text">'+msg+'</div>\
            <div class="alert-close">\
                <i class="flaticon2-cross kt-icon-sm" data-dismiss="alert"></i>\
            </div>\
        </div>');

        form.find('.alert').remove();
        alert.prependTo(form);
        //alert.animateClass('fadeIn animated');
        KTUtil.animateClass(alert[0], 'fadeIn animated');
        alert.find('span').html(msg);
    }



    // Private Functions

    var displaySignUpForm = function() {

        login.removeClass('kt-login--forgot');

        login.removeClass('kt-login--signin');



        login.addClass('kt-login--signup');

        KTUtil.animateClass(login.find('.kt-login__signup')[0], 'flipInX animated');

    }



    var displaySignInForm = function() {

        login.removeClass('kt-login--forgot');

        login.removeClass('kt-login--signup');



        login.addClass('kt-login--signin');

        KTUtil.animateClass(login.find('.kt-login__signin')[0], 'flipInX animated');

        //login.find('.kt-login__signin').animateClass('flipInX animated');

    }



    var displayForgotForm = function() {

        login.removeClass('kt-login--signin');

        login.removeClass('kt-login--signup');



        login.addClass('kt-login--forgot');

        //login.find('.kt-login--forgot').animateClass('flipInX animated');

        KTUtil.animateClass(login.find('.kt-login__forgot')[0], 'flipInX animated');



    }



    var handleFormSwitch = function() {

        $('#kt_login_forgot').click(function(e) {

            e.preventDefault();

            displayForgotForm();

        });



        $('#kt_login_forgot_cancel').click(function(e) {

            e.preventDefault();

            displaySignInForm();

        });



        $('#kt_login_signup').click(function(e) {

            e.preventDefault();

            displaySignUpForm();

        });



        $('#kt_login_signup_cancel').click(function(e) {

            e.preventDefault();

            displaySignInForm();

        });

    }



    var handleSignInFormSubmit = function() {

        $('#kt_login_signin_submit').click(function(e) {

            e.preventDefault();

            var btn = $(this);

            var form = $(this).closest('form');



            form.validate({

                rules: {

                    username: {

                        required: true

    

                    },

                    password: {

                        required: true

                    }

                }

            });



            if (!form.valid()) {

                return;

            }



            btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);



            form.ajaxSubmit({

                url: './api/validasi.php',

                type:'POST',

                beforeSend:function(){



                 if ($("input[name='remember'").is(':checked')) {

                    // save username and password

                    

                   var username = $("input[name='username'").val();

                    var password = $("input[name='password'").val();

                    var remember = $("input[name='remember'").val();





                    console.log(username + password + remember)



                    localStorage.username = username;

                    localStorage.password = password;

                    localStorage.checkBoxValidation = remember;





                }else  if ($("input[name='username'").is(':checked')) {

                    // save username and password

                    

                 localStorage.removeItem(username);

                 localStorage.removeItem(password);



                }





                 else {

                    localStorage.username = '';

                    localStorage.password = '';

                    localStorage.checkBoxValidation = '';



                }





                    setTimeout(function() {

                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);

                    }, 2000);

                },

                success: function(response, status, xhr, $form) {



                	// similate 2s delay



                    if (response==200) {



                       setTimeout(function(){

                            location.href="./";



                         

                       },1000)

                        

                    }else{

                        showErrorMsg(form, 'danger', 'Incorrect username or password. Please try again.');

                    }

                	

                }

            });

        });

    }



    var handleSignUpFormSubmit = function() {

        $('#kt_login_signup_submit').click(function(e) {

            e.preventDefault();



            var btn = $(this);

            var form = $(this).closest('form');



            form.validate({

                rules: {

                    username: {

                        required: true

                    },

                    email: {

                        required: true,

                        email: true

                    },

                    password: {

                        required: true

                    },

                    nama_lengkap: {

                        required: true

                    },

                    tanggal_lahir: {

                        required: true

                    },

                    rpassword: {

                        required: true

                    },

                    agree: {

                        required: true

                    }

                }

            });



            if (!form.valid()) {

                return;

            }



            btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);



            form.ajaxSubmit({

                url: './api/user_daftar.php',

                type:'POST',

                 beforeSend:function(){

                    setTimeout(function() {

                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);

                    }, 2000);

                },

                success: function(response, status, xhr, $form) {



                	// similate 2s delay

                	setTimeout(function() {

	                    

	                    form.clearForm();

	                    form.validate().resetForm();



	                    // display signup form

	                    displaySignInForm();

	                    var signInForm = login.find('.kt-login__signin form');

	                    signInForm.clearForm();

	                    signInForm.validate().resetForm();



	                    showErrorMsg(signInForm, 'success', 'Thank you. To complete your registration please check your email.');

	                }, 2000);

                }

            });

        });

    }



    var handleForgotFormSubmit = function() {

        $('#kt_login_forgot_submit').click(function(e) {

            e.preventDefault();



            var btn = $(this);

            var form = $(this).closest('form');



            form.validate({

                rules: {

                    email: {

                        required: true,

                        email: true

                    }

                }

            });



            if (!form.valid()) {

                return;

            }



            btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);



            form.ajaxSubmit({

                url: '',

                success: function(response, status, xhr, $form) {

                	// similate 2s delay

                	setTimeout(function() {

                		btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false); // remove

	                    form.clearForm(); // clear form

	                    form.validate().resetForm(); // reset validation states



	                    // display signup form

	                    displaySignInForm();

	                    var signInForm = login.find('.kt-login__signin form');

	                    signInForm.clearForm();

	                    signInForm.validate().resetForm();



	                    showErrorMsg(signInForm, 'success', 'Cool! Password recovery instruction has been sent to your email.');

                	}, 2000);

                }

            });

        });

    }



    // Public Functions

    return {

        // public functions

        init: function() {

            handleFormSwitch();

            handleSignInFormSubmit();

            handleSignUpFormSubmit();

            handleForgotFormSubmit();

        }

    };

}();



// Class Initialization

jQuery(document).ready(function() {

    KTLoginGeneral.init();

});



