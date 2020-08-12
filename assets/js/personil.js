function MenuPersonil(){

		Loader();

		$.ajax({
			url:'page/personil/index.php',
			success:function(html){


			
            		  dataLoad.html(html);



			           var table = $("#tablePersonil").DataTable({
			            		"processing": true,
						        "serverSide": true,
						        "scrollX": true,
						        "order": [[ 1, "desc" ]],
						        "ajax": {
						        	
						        	url:"api/personil_data.php",
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
									             return '<input class="data_cek" type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
									         }
									      }


							      ],
					            "columns": [
					            	{ "data": "id" },
					                { "data": "nama" },
					                { "data": "nip" }, // Tampilkan nis
					                { "data": "pangkat" },
					                { "data": "korps" },
					                { "data": "nrp" },
					                { "data": "jabatan" },
					               
					                { "render": function ( data, type, row ) { // Tampilkan kolom aksi
					                    var html  ='<div class="btn-group btn-group" role="group">'
											html +='<button type="button" onclick="ViewPersonil(' + row[0] + ')" class="btn btn-primary btnView" data-id="' + row[0] + '"><i class="fa fa-eye"></i> View</button>'
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
						
					   $('#btnPersonilPilih').show();

					 


					});



				
				   $("#btnPersonilPilih").click(function(){

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
							    	url:'api/personil_delete.php',
							    	type:'POST',
							    	data:{id:data},
							    	success:function(data){
							    		
							    		if (data==200) {
							    			MenuPersonil();
							    			Not("data berhasil dihapus..","success","check-circle");
							    		}	
							    		
							    	}
							    })
				   		}

				   });


				   $("#btnImportPersonil").click(function(){
				   		$("#modalUpload").modal("show");

				   		   $("#formImportPersonil").submit(function(e){

			                    	e.preventDefault();

			                    	var dataForm = $(this).serialize();
			                    
			                    	$.ajax({
											url: "api/personil_import.php", // Url to which the request is send
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
													console.log(data);
												}
												
											}
										});


			                    });

				   });



					     


				

			
			}
		});




		$(".kt-subheader__title").text("Personil");

	}


 function AddPersonil(){
 						Loader();

						$.ajax({
							url:'page/personil/form_add.php',
							success:function(html){

									dataLoad.html(html);
									$(".kt-subheader__title").text("Add Personil");


							}
						 });
 }

 function EditPersonil(id){
 						Loader();

						$.ajax({
							url:'page/personil/form_edit.php',
							data:{id:id},
							type:'POST',
							success:function(html){

									dataLoad.html(html);
									$(".kt-subheader__title").text("Edit Personil");


							}
						 });
 }



  	function ViewPersonil(id){
 						Loader();

						$.ajax({
							url:'page/personil/form_view.php',
							type:'POST',
							data:{id:id},
							success:function(html){

									dataLoad.html(html);
									$(".kt-subheader__title").text("View Personil")

							}
						 });
 	}


 	  

