// open in fullscreen
						$('.requestfullscreen').click(function() {
							$('html').fullscreen();

							return false;
						});

			

						// exit fullscreen
						$('.exitfullscreen').click(function() {
							$.fullscreen.exit();
							return false;
						});

						// document's event
						$(document).bind('fscreenchange', function(e, state, elem) {
							// if we currently in fullscreen mode
							if ($.fullscreen.isFullScreen()) {

								$("#modal_sc").modal('hide');
								// $('.requestfullscreen').hide();
								// $('.exitfullscreen').show();
							} else {
								// $('.requestfullscreen').show();
								// $('.exitfullscreen').hide();
							}

						
						});



	Loader(1);

	$.ajax({
		url:'api/waktu.php',
		success:function(data){
			$("#waktu").html(data);
		}
	})
	
    var dataLoad = $("#dataLoad"); 

    	document.onkeydown = function(e) {
	  if(event.keyCode == 123) {
	     return false;
	  }
	  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
	     return false;
	  }
	  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
	     return false;
	  }
	  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
	     return false;
	  }
	  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
	     return false;
	  }
	}


$("body").on("contextmenu",function(){


Not("Terimakasih untuk tidak click kanan","brand","terminal");
       return false;
    }); 

$('body').on("cut copy",function() {
    Not("Terimakasih untuk tidak dicopy","warning","stack-overflow");
       return false;

   });


    dataLoad.load('page/dashboard.php');
    $(".kt-subheader__title").text("Dashboard");
	
	// setTimeout(function(){
	// 	$("#modal_sc").modal('show');
	// },2000);
	// membuka menu dasboard

	$(".home").click(function(e){
		e.preventDefault();
		dataLoad.load('page/dashboard.php');

				menuAktif('.home');
				$(".kt-subheader__title").text("Dashboard");
		
		
		
	})

	// membuka menu user
	$("#master_user").click(function(e){
		e.preventDefault();
		$(".dataDashbiard").hide();
		MenuUser();
		menuAktif('#master_data');
		
	})

	// membuka menu user
	$("#master_pengetahuan").click(function(e){
		e.preventDefault();
		MenuPengetahuan();
		menuAktif('#master_data');
		
	})

	// membuka menu konsultasi
	$(".konsultasi").click(function(e){
		e.preventDefault();
		MenuKonsultasi();
		menuAktif('.konsultasi');
		
	})

	// membuka menu konsultasi
	$("#master_gangguan").click(function(e){
		e.preventDefault();
		MenuGangguan();
		menuAktif('#master_data');

		
	})

	// membuka menu solusi
	$("#master_solusi").click(function(e){
		e.preventDefault();
		MenuSolusi();
		menuAktif('#master_data');
		
	})

	// membuka menu artikel
	$(".artikel").click(function(e){
		e.preventDefault();
		MenuArtikel();
		menuAktif('.artikel');
		
	})
		// membuka menu saran
	$(".saran").click(function(e){
		e.preventDefault();
		MenuSaran();
		menuAktif('.saran');
		
	})

	// menu hasil

	$(".hasil").click(function(e){
		e.preventDefault();
		MenuHasil();
		menuAktif('.hasil');
		
	});

	$("#cari").on('keyup',function(e){
		e.preventDefault();
		var cari = $("#cari").val();
		$.ajax({
			url:'page/hasil/hasil_list.php',
			type:'POST',
			data:{id:cari},
			success:function(data){
				$("#hasilCari").show();
				$("#hasilCari").html(data);
			}
		})
		

	});












	function MenuHome(){

		 dataLoad.load('page/dashboard.php');
		 $(".kt-subheader__title").text("Dashboard");

	}
					           				
    function menuAktif(data){

    	$(".kt-menu__item--active").removeClass("kt-menu__item--active");

		$(data).addClass("kt-menu__item--active");
		
		 
    }

	function Loader(e){

			var waktu = e;

		 // $(document).pagePreloaders({
			
			// 	//Main Options
			// 	preloaderStyle: 'animation',	// Preloader style: animation, logo
			// 	backgroundColor: '', // Preloader background color
			// 	backgroundOpacity: 0.1, // Preloader background opacity: 0.1 to 1
			// 	animationTime: waktu, // Minimum preloader display time in seconds (prevents the preloader from disappearing too fast)

			// 	//Animation Preloader Options
			// 	animationPreloader: '1', // Choose from 11 preload animations. Enter any value from 1 to 11
			// 	animationPreloaderColor: '#5867dd', // Animation color
			// 	animationPreloaderOpacity: '1', // Animation opacity: 0.1 to 1

			// 	//Logo Preloader Options
			// 	imageURL: 'https://fachreza-maulana.com/img/ava.png', // Path to your logo image
			// 	logoSize: '150px', // Size of the displayed logo (image proportions will be constrained to retain the quality)
			// 	logoBackgroundColor: 'transparent', // Logo background color
			// 	logoOpacity: '1', // Logo opacity: 0.1 to 1
			// 	logoBorderWidth: '5px', // Logo stroke color width
			// 	logoBorderColor: '#3cf', // Logo stroke color
			// 	logoBorderRadius: '50%', // Logo corner radius
			// });

		}

	function Not(text,warna,iconSet){
				$.notify({
	// options
				icon: 'icon la la-'+iconSet,
				message: text
				},{
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
