<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->

<head>
    <base href="../../">
    <meta charset="utf-8" />
    <title>Sistem Pakar Penyakit Mata</title>
    <meta name="description" content="Login page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="assets/css/pages/login/login-2.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pagePreloaders.css" rel="stylesheet" type="text/css" />

    <!--end::Page Custom Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="assets/css/skins/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/skins/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/skins/aside/dark.css" rel="stylesheet" type="text/css" />

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="assets/media/logo/icon.png" />
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body
    class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid kt-grid--hor kt-grid--root kt-login kt-login--v2 kt-login--signin" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor"
                style="background-image: url(assets/media/bg/bg-8.jpg);">
                <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                    <div class="kt-login__container">
                        <div class="kt-login__logo">
                            <a>
                                <img src="assets/media/login.svg" width="200">
                            </a>
                        </div>
                        <div class="kt-login__signin">
                            <div class="kt-login__head">
                                <h4 class="kt-login__title">Sistem Pakar Untuk Mengetahui Penyakit Kuklit Pada Mata</h4>
                             </div>
                            <form id="form_login" class="kt-form">


                                <div id="errroLogin" style="display: none;" class="alert alert-solid-danger alert-bold"
                                    role="alert">
                                    <div class="alert-text">Username dan Password Salah..!</div>
                                    <div class="alert-close">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="la la-close"></i></span>
                                        </button>
                                    </div>
                                </div>



                                <div class="form-group">


                                    <input style="border-top-right-radius: : 0px;border-top-left-radius: 0px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;background-color: #3F3D56" class="form-control" type="text" placeholder="Username" id="username"
                                        name="username" aria-invalid="true" autocomplete="off">

                                    <div style="display: none" id="username-error" class="error invalid-feedback">This
                                        field is required.</div>

                                </div>
                                <div class="form-group">
                                    <input style="border-top-right-radius: : 0px;border-top-left-radius: 0px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;background-color: #3F3D56" class="form-control" type="password" placeholder="Password" id="password"
                                        name="password" autocomplete="off">

                                    <div style="display: none" id="password-error" class="error invalid-feedback">This
                                        field is required.</div>
                                </div>


                                <div class="kt-login__actions">
                                    <button id="kt_login_signin_submit"
                                        class="requestfullscreen btn btn-pill kt-login__btn-primary" style="width:100%;background-color: #575A88;border-radius: 0px;">LOGIN
                                    </button><br />
                                    <button id="kt_login_signup"
                                        class="btn btn-pill kt-login__btn-secondary" style="width:100%;background-color: #575A88;border-radius: 0px;">DAFTAR</button>
                                </div>
                            </form>
                        </div>
                        <div class="kt-login__signup">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">DAFTAR</h3>
                                <div class="kt-login__desc">Silahkan isi form ini untuk membuat Akun Baru:</div>
                            </div>
                            <form class="kt-login__form kt-form" action="">
                                <div class="input-group">
                                    <input style="border-top-right-radius: : 0px;border-top-left-radius: 0px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;background-color: #3F3D56" class="form-control" type="text" placeholder="username" name="username">
                                </div>
                                <div class="input-group">
                                    <input style="border-top-right-radius: : 0px;border-top-left-radius: 0px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;background-color: #3F3D56" class="form-control" type="text" placeholder="nama lengkap Anda"
                                        name="nama_lengkap" autocomplete="off">
                                </div>
                                <div class="input-group">
                                    <select style="border-top-right-radius: : 0px;border-top-left-radius: 0px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;background-color: #3F3D56" name="jenis_kelamin" class="form-control">
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>

                                <div class="input-group">
                                    <input style="border-top-right-radius: : 0px;border-top-left-radius: 0px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;background-color: #3F3D56" class="tanggal form-control" type="text" placeholder="tanggal lahir"
                                        name="tanggal_lahir" autocomplete="off">
                                </div>
                                <div class="input-group">
                                    <input style="border-top-right-radius: : 0px;border-top-left-radius: 0px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;background-color: #3F3D56" class="form-control" type="text" placeholder="Email" name="email"
                                        autocomplete="off">
                                </div>
                                <div class="input-group">
                                    <input style="border-top-right-radius: : 0px;border-top-left-radius: 0px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;background-color: #3F3D56" class="form-control" type="password" placeholder="Password" name="password">
                                </div>
                                <div class="input-group">
                                    <input style="border-top-right-radius: : 0px;border-top-left-radius: 0px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;background-color: #3F3D56" class="form-control" type="password" placeholder="Confirm Password"
                                        name="password">
                                </div>
                                <div class="row kt-login__extra">
                                    <div class="col kt-align-left">
                                        <label class="kt-checkbox">
                                            <input required="required" type="checkbox" name="agree">I Agree the <a
                                                class="kt-link kt-login__link kt-font-bold">terms and conditions</a>.
                                            <span></span>
                                        </label>
                                        <span class="form-text text-muted"></span>
                                    </div>
                                </div>
                                <div class="kt-login__actions">


                                    <button id="kt_login_signup_submit"
                                        class="btn btn-pill kt-login__btn-primary" style="background-color: #3F3D56;border-radius: 0px;">DAFTAR</button>&nbsp;&nbsp;


                                    <button id="kt_login_signup_cancel"
                                        class="btn btn-pill kt-login__btn-secondary" style="background-color: #3F3D56;border-radius: 0px;">CANCEL</button>
                                </div>
                            </form>
                        </div>
                        <div class="kt-login__forgot">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">Forgotten Password ?</h3>
                                <div class="kt-login__desc">Enter your email to reset your password:</div>
                            </div>
                            <form class="kt-form" action="">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Email" name="email"
                                        id="kt_email" autocomplete="off">
                                </div>
                                <div class="kt-login__actions">
                                    <button id="kt_login_forgot_submit"
                                        class="btn btn-pill kt-login__btn-primary">Request</button>&nbsp;&nbsp;
                                    <button id="kt_login_forgot_cancel"
                                        class="btn btn-pill kt-login__btn-secondary">Cancel</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Page -->

    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": [
                    "#c5cbe3",
                    "#a1a8c3",
                    "#3d4465",
                    "#3e4466"
                ],
                "shape": [
                    "#f0f3ff",
                    "#d9dffa",
                    "#afb4d4",
                    "#646c9a"
                ]
            }
        }
    };
    </script>

    <!-- end::Global Config -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
    <script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
    <script src="assets/js/pagePreloaders.js" type="text/javascript"></script>
    <script src="assets/js/pages/components/extended/bootstrap-notify.js" type="text/javascript"></script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="assets/js/pages/custom/login/login-general.js" type="text/javascript"></script>
    <script src="assets/js/full.js" type="text/javascript"></script>

    <!--end::Page Scripts -->
</body>

<!-- end::Body -->

</html>

<script>
// document.onkeydown = function(e) {
//     if (event.keyCode == 123) {
//         return false;
//     }
//     if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
//         return false;
//     }
//     if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
//         return false;
//     }
//     if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
//         return false;
//     }
//     if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
//         return false;
//     }
// }


// $("body").on("contextmenu", function() {


//     Not("Terimakasih untuk tidak click kanan", "brand", "terminal");
//     return false;
// });

// $('body').on("cut copy", function() {
//     Not("Terimakasih untuk tidak dicopy", "warning", "stack-overflow");
//     return false;

// });



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




function Not(text, warna, iconSet) {
    $.notify({
        // options
        icon: 'icon la la-' + iconSet,
        message: text
    }, {
        // settings
        element: 'body',
        position: null,
        type: warna,
        allow_dismiss: true,
        newest_on_top: false,
        showProgressbar: false,
        placement: {
            from: "bottom",
            align: "right"
        },
        offset: 20,
        spacing: 10,
        z_index: 1031,
        delay: 1000,
        timer: 1000,
        url_target: '_blank',
        mouse_over: null,
        animate: {
            enter: 'animated bounce',
            exit: 'animated bounceOut'
        },
        onShow: null,
        onShown: null,
        onClose: null,
        onClosed: null,
        icon_type: 'class',
        template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span data-notify="message">{2}</span>' +
            '<div class="progress" data-notify="progressbar">' +
            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
    });
}
</script>