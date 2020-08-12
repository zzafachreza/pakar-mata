function MenuHasil(){

		Loader();

		// $.ajax({

		// 	url:"api/gangguan_data.php",
		// 	type:"POST",
		// 	success:function(html){
		// 		console.log(html);
		// 	}
		// })

		$.ajax({
			url:'page/hasil/index.php',
			success:function(html){


            		  dataLoad.html(html);


        


			           
			           var table = $("#tableHasil").DataTable({
			            		"processing": true,
						        "serverSide": true,
						        "scrollX": true,
						        "order": [[ 0, "asc" ]],
						        "ajax": {
						        	
						        	url:"api/hasil_data.php",
						        	type:"POST"

						        },
						        "deferRender": true,
					            "aLengthMenu": [[5, 10, 50],[ 5, 10, 50]], // Combobox Limit
					            'columnDefs': [

							            {
									         'targets': 0,
									         'searchable': false,
									         'orderable': false,
									         'className': 'dt-body-center',
									         'render': function (data, type, full, meta){
									             return '<label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid">'+
										            		'<input class="data_cek" type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">&nbsp;<span></span>'+
										            	'</label>';
									         }
									      },
									      {
									      	'targets': 2,
									      	'width': '16%', 
									      	render:function(data){
											      return moment(data).format('DD/MM/YYYY');
											    }
											},
											{
									         'targets': 5,
									         'width':'15%',
									         'searchable': false,
									         'orderable': false
									        
									      },
									     


							      ],
					            "columns": [
					            	{ "data": "id" },
					            	{ "data": "id" },
					                { "data": "tgl" }, 
					                { "data": "nama_lengkap" }, 
					                { "data": "hasil" }, 


					               
					                { "render": function ( data, type, row ) { // Tampilkan kolom aksi
					                    var html  ='<div class="btn-group btn-group" role="group">'
											html +='<button type="button" onclick="ViewHasil(\'' + row[0] + '\')" class="btn btn-primary btnView" data-id="' + row[0] + '"><i class="fa fa-file-medical-alt"></i> View Detail</button>'
											html +='</div>'
						                    return html
						                }
						            },  // Tampilkan nama
						         ],
						        	


			            	});
           		// buka form tambah



            	// Handle click on "Select all" control

					$("#select_all").change(function(){

					   $('input[type="checkbox"]').prop('checked', this.checked); 
						



					});



				
				   $("#btnPilihAll").click(function(){

				   		var rows_selected = $(".data_cek:checked");
				   		
				   		var data=[];

				   		for(i=0;i<rows_selected.length;i++)
				   		{
				   			data.push(rows_selected[i].value);
				   		}


						     	
				   		if (data=="") {
				   			Not("Tidak ada data yang terpilih..","danger","info-circle");
				   		}else{



							    $.ajax({
							    	url:'api/hasil_delete.php',
							    	type:'POST',
							    	data:{id:data},
							    	success:function(data){
							    		
							    		if (data==200) {
							    			MenuHasil();
							    			Not("data berhasil dihapus..","success","info-circle");
							    		}
							    		
							    	}
							    })
				   		}

				   });

					     


				

			
			}
		});




		$(".kt-subheader__title").text("Data hasil");

	}


 function AddHasil(){
 						Loader();

						$.ajax({
							url:'page/hasil/form_add.php',
							success:function(html){

									dataLoad.html(html);
									$(".kt-subheader__title").text("Add hasil");


							}
						 });
 }






  	function ViewHasil(id){



 						Loader();

						$.ajax({
							url:'page/hasil/form_view2.php',
							type:'POST',
							data:{id:id},
							success:function(html){

									dataLoad.html(html);
									$(".kt-subheader__title").text("View hasil")

							}
						 });
 	}


 	  


 						
 function printHasil(){
 	$(".hilang").hide();
 	window.print();
 	 setTimeout(function(){
 	 	$(".hilang").show();
 	 }, 0);


 }