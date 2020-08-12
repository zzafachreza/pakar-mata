function MenuPengetahuan(){

		Loader();

		// $.ajax({

		// 	url:"api/pengetahuan_data.php",
		// 	type:"POST",
		// 	success:function(html){
		// 		console.log(html);
		// 	}
		// })

		$.ajax({
			url:'page/pengetahuan/index.php',
			success:function(html){


            		  dataLoad.html(html);



			           
			           var table = $("#tablePengetahuan").DataTable({
			            		"processing": true,
						        "serverSide": true,
						        "scrollX": true,
						        "order": [[ 0, "asc" ]],
						        "ajax": {
						        	
						        	url:"api/pengetahuan_data.php",
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
									         'targets': 7,
									         'width':'10%',
									         'searchable': false,
									         'orderable': false
									        
									      },

									     


							      ],
					            "columns": [
					            	{ "data": "id" },
					            	{ "data": "id" },
					                { "data": "pertanyaan" }, 
					                { "data": "ifyes" }, 
					                { "data": "ifno" }, 
					                { "data": "id_gangguan" }, 
					                { "data": "id_solusi" }, 
					               
					                { "render": function ( data, type, row ) { // Tampilkan kolom aksi
					                    var html  ='<div class="btn-group btn-group" role="group">'
											html +='<button type="button" onclick="ViewPengetahuan(' + row[0] + ')" class="btn btn-primary btnView" data-id="' + row[0] + '"><i class="fa fa-eye"></i> View</button>'
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
							    	url:'api/pengetahuan_delete.php',
							    	type:'POST',
							    	data:{id:data},
							    	success:function(data){
							    		
							    		if (data==200) {
							    			MenuPengetahuan();
							    			Not("data berhasil dihapus..","success","info-circle");
							    		}	
							    		
							    	}
							    })
				   		}

				   });

					     


				

			
			}
		});




		$(".kt-subheader__title").text("Data Pengetahuan");

	}


 function AddPengetahuan(){
 						Loader();

						$.ajax({
							url:'page/pengetahuan/form_add.php',
							success:function(html){

									dataLoad.html(html);
									$(".kt-subheader__title").text("Add Pengetahuan");


							}
						 });
 }






  	function ViewPengetahuan(id){
 						Loader();

						$.ajax({
							url:'page/pengetahuan/form_view.php',
							type:'POST',
							data:{id:id},
							success:function(html){

									dataLoad.html(html);
									$(".kt-subheader__title").text("View Pengetahuan")

							}
						 });
 	}


 	  


 						