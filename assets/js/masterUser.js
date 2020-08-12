function MenuUser(){

		Loader();

		$.ajax({
			url:'page/user/index.php',
			success:function(html){


			
            		  dataLoad.html(html);



			           var table = $("#tableUser").DataTable({
			            		"processing": true,
						        "serverSide": true,
						        "scrollX": true,
						        "order": [[ 1, "desc" ]],
						        "ajax": {
						        	
						        	url:"api/user_data.php",
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
									         'targets': 1,
									         'searchable': false,
									         'orderable': false,
									         'className': 'dt-body-center',
									         'render': function (data, type, full, meta){
									             return '<a href="#" class="kt-media kt-media--lg kt-media--circle"><img src="'+$('<div/>').text(data).html()+'" alt="image"></a>';
									         }
									      },
									      {
									         'targets': 5,
									         'width':'10%',
									         'searchable': false,
									         'orderable': false
									        
									      },


							      ],
					            "columns": [
					            	{ "data": "id" },
					                { "data": "foto" },
					                { "data": "username" }, // Tampilkan nis
					                { "data": "nama_lengkap" },
					                { "data": "level" },
					               
					                { "render": function ( data, type, row ) { // Tampilkan kolom aksi
					                    var html  ='<div class="btn-group btn-group" role="group">'
											html +='<button type="button" onclick="ViewUser(' + row[0] + ')" class="btn btn-primary btnView" data-id="' + row[0] + '"><i class="fa fa-eye"></i> View</button>'
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
						
					   $('#btnUserPilih').show();



					});



				
				   $("#btnUserPilih").click(function(){

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
							    	url:'api/user_delete.php',
							    	type:'POST',
							    	data:{id:data},
							    	success:function(data){
							    		
							    		if (data==200) {
							    			MenuUser();
							    			Not("data berhasil dihapus..","success","info-circle");
							    		}	
							    		
							    	}
							    })
				   		}

				   });

					     


				

			
			}
		});




		$(".kt-subheader__title").text("Master User");

	}


 function AddUser(){
 						Loader();

						$.ajax({
							url:'page/user/form_add.php',
							success:function(html){

									dataLoad.html(html);
									$(".kt-subheader__title").text("Add User")

							}
						 });
 }



  	function ViewUser(id){
 						Loader();

						$.ajax({
							url:'page/user/form_view.php',
							type:'POST',
							data:{id:id},
							success:function(html){

									dataLoad.html(html);
									$(".kt-subheader__title").text("View User")

							}
						 });
 	}



  	function SettingUser(id){
 						Loader();

						$.ajax({
							url:'page/user/form_view2.php',
							type:'POST',
							data:{id:id},
							success:function(html){

									dataLoad.html(html);
									$(".kt-subheader__title").text("Setting User")

							}
						 });
 	}



 	  


 						