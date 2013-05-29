$(document).ready(function(){


				view_contact();
		
			display_front_quotes();
			
			
		//-----for Tabs-------//
			$("#btn_tab").tabs();
			
			
						//---dialog for adding Contact----//
					$("#reg_form").hide();					
					$("#btnContact").click(function(){
						$("#reg_form").dialog({
							autoOpen: true,
							resizable: false,
							show:"bounce",
							hide:"explode",
							height: 680,
							width: 500,
							modal: true,
							buttons: {
									"close": function(){
					
									$(this).dialog("close");
									}
					
					
					
					
									}
						});		
					});
					
					
						//----dialog for registration-----//
					$("#reg_user").hide();	
					$("#btnReg").click(function(){
						$("#register").dialog({
						autoOpen: true,
							resizable: false,
							show:"bounce",
							hide:"explode",
							height: 580,
							width: 300,
							modal: true,
							buttons: {
									"close": function(){
					
									$(this).dialog("close");
									}
					
									}
						});	
					});
	
					
			
	
				//-----------------ADD CONTACTS-----------------------//
			
				$("#add").click(function(){
					var addObj = {
					"contact_id":$("input[name='contact_id']").val(), 
										"fname":$("input[name='fname']").val(), 
										"mname":$("input[name='mname']").val(),
										"lname":$("input[name='lname']").val(), 
										"pnumber":$("input[name='pnumber']").val(),
										"tnumber":$("input[name='tnumber']").val(), 
										"email":$("input[name='email']").val()
								};
		
						$.ajax({
							type: "POST",
							url: "addContacts.php",
							data: addObj,
							success: function(data){
								$("#contact").append(data);		
							},
							error: function(data){
									
							}
						});		

				
				});
	
	
				//----------------POST QUOTES------------------//

			$("#qbtn").click(function(){
				
					var addQ = {
					"id": $("input[name='id']").val(),
						"quotes": $("textarea[name='quotes']").val()
					};
				
		
					$.ajax({
						type: "POST",
						url: "post_quotes.php",
						data: addQ,
						success: function(data){
							$("#Q1").append(data);
						},
						error: function(data){
							
						}
					});
					
				});	
					
					
			
					
				//------------VIEW QUOTES------------------//

					$.ajax({
						type: "POST",
						url: "view_quotes.php",
						success: function(data){
							$("#Q1").append(data);
							
						},
						error:function(data){
							alert(JSON.stringify(data));
						}
					});


				//------------SAVE CONTACTS-----------------//
		
					$("#save").click(function(){
	
	
						var contactObj = {
										"id":$("input[name='id']").val(),
										"fname":$("input[name='fname']").val(), 
										"mname":$("input[name='mname']").val(),
										"lname":$("input[name='lname']").val(), 
										"pnumber":$("input[name='pnumber']").val(),
										"tnumber":$("input[name='tnumber']").val(), 
										"email":$("input[name='email']").val()
										};
		
						$.ajax({
							type: "POST",
							url: "saveContacts.php",
							data: contactObj,
							success: function(data){
									$(document.getElementById(contactObj.id)).html(data);
							},
							error: function(data){
								alert(data);		
							}
						});			


					});
					
					
				//----------------SEARCH CONTACTS----------------//
				 
				$("#search").keyup(function(){
	
						 var lastname = $("#search").val();
						 var searchobj = {'lastname':lastname};
		
								$.ajax({
								type:"POST",
								url: "searchContacts.php",
								data: searchobj,
								 success: function(data){
								 $("#contact").html(data);
														                 
								},
								error: function(data){
								 alert(data);
								 }
												 
								});	
				}); 
								$("#search").click(function(){
								 $("#search").val("");
								});  
			
				//----------------ADD REGISTER-----------------------//
			
				$("#addRegister").click(function(){

					var addUsers = {
						"myusername":$("input[name='myusername']").val(),
						"mypassword":$("input[name='mypassword']").val(),
						"email":$("input[name='email']").val()

					};
		
					$.ajax({
							type: "POST",
							url: "add_register.php",
							data: addUsers,
							success: function(data){
							alert('add user');
							},
							error: function(data){
								
							}
						});		


				});
						   
	
});//CLOSING OF $(document).ready(function(){}//


				//---------------DELETE CONTACTS-----------------//

	function deleteContacts(id){

					var contactDelete = {"id":id};

					$.ajax({
						type: "POST",
						data: contactDelete,
						url: "deleteContacts.php",
						success: function(data){
							$(document.getElementById(id)).remove(); 
						},
						error: function(){}
					});
	}

				//---------------------DELETE QUOTES----------------//

	function delete_Quotes(id){
					var quotes_Delete = {"id":id};

					$.ajax({
						type: "POST",
						url: "delete_quotes.php",
						data: quotes_Delete,
						success: function(data){
							$(document.getElementById(id)).remove(); 
						},
						error: function(data){
							console.log("error in displaying quotes in front! = " + JSON.stringify(data));
						}
					});

	}

				//----------EDIT CONTACTS-----------------//

	function editContacts(id){

					var contactEdit = {"id":id};
	
					$.ajax({
							 type: "POST",
							 data: contactEdit,
							 url: "editContacts.php",
							 success: function(data){
							var obj = JSON.parse(data);
								 $("input[name = 'id']").val(obj.id);
								 $("input[name = 'fname']").val(obj.fname);
								 $("input[name = 'mname']").val(obj.mname);
									$("input[name = 'lname']").val(obj.lname);
								 $("input[name = 'pnumber']").val(obj.pnumber);
									$("input[name = 'tnumber']").val(obj.tnumber);
								 $("input[name = 'email']").val(obj.email);
						},
						error: function(){}
					});
							$(".icon-edit").click(function(){
									$("#reg_form").dialog({
										autoOpen: true,
										resizable: false,
										show:"bounce",
										hide:"explode",
										height: 680,
										width: 500,
										modal: true,
										buttons: {
												"close": function(){
									 

											$(this).dialog("close");
												}
					
												}
									});		
								});
	}
			
		
		//-------------DISPLAYING FRONT QUOTES-------------// 
		 			
	function display_front_quotes() {
		$.ajax({
			url: "display_front_quotes.php",
			success: function(data){
				$("#quotes").html(data);
			},
			error:function(data){
				console.log("error in displaying quotes in front! = " + JSON.stringify(data));
			}
		});
		
		
	}
  
	//--------------ADD COMMENT---------//
		

function add_comment(id){
		
				
					var addCom = {
						"comment":$("#new_comment_" + id).val(),
						"Post_Id":id
						
					};
					$.ajax({
						type: "POST",
						url: "add_comment.php",
						data: addCom,
						success: function(data){
							$("#view_comment_" + addCom.Post_Id).append(data);
							
						},
						error: function(data){
							alert(data);
						}
					});

}

		//--------------VIEW COMMENT-----------------//

	function view_comment(id){
	
				
				
				$("#view_comment_" + id).slideToggle('slow');
				$("#comment_div_" + id).slideToggle('slow');
				

					var wordObj = {"comment_id":id};
					
				$.ajax({
							type: "POST",
							url: "view_comment.php",
							data: wordObj,
							success: function(data){
								$("#view_comment_" + id).html(data);
							},
							error:function(data){}
						});
					
					
	}

	//-----------VIEW CONTACT--------------------//
	
	
  function view_contact(){
	
					$.ajax({
						type:"POST",
						url: "viewContacts.php",
						success: function(data){
							$("#view_Contacts").append(data);		
						},
						error: function(data){
							
						}
					});
	
	}
	
	//--------------FOR LIKE---------------//
	

	function likePost(id){
			
			
			$("#Like_" + id).hide();
			$("#unLike_" + id).fadeIn('fast');
			
			
			var likeobj = {"id":id};
			
				alert(likeobj);
			
			$.ajax({
						type:"POST",
						url: "likePost.php",
						success: function(data){
							//$("#likeMe").append(data);
						},
						error: function(data){
							alert(JSON.stringify(data));
						}
					});
	
					
	}
	
	
		//---------FOR SHARE---------//

	function sharePost(id)
	{
	
						$("#share_quotes").dialog({
						autoOpen: true,
							resizable: false,
							show:"bounce",
							hide:"explode",
							height: 200,
							width: 700,
							modal: true,
							buttons: {
									
									"close": function(){
					
									$(this).dialog("close");
									}
					
									}
						});	
				
				
			
			 $.ajax({	
			 				type: "POST",				 
							url: "sharePost.php",
							success: function(data){
								$("#share_quotes").append(data);
							},	
							error: function(data){
							
							}
						});
		}
		
		
