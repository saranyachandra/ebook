

//login form super admin

    $(document).on("submit", "#login", function(e){

        e.preventDefault();

         $(this).validate({ 
                          rules: {              
                                    email: "required",                                  
                                    password: "required",                                                                           
                                 },

                          messages: {                          
                                 
                                  email: {
                                      required: "Required ", 
                                  },                                
                                  password: {
                                      required: "Required", 
                                  }, 
                             },

                           }); 

    if($(this).valid())
        {     
                var url = $(this).attr('action');
                var formdata = new FormData(this);
              
                $.ajax({
                        url : baseURL+'Login/login_auth',
                        method: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        dataType:'json',
                        error: function(xhr,status,error)
                        {   
                            alert(xhr.responseText);
                        },
                        beforeSend: function()
                        {
              
                        },
                        
                        success: function(response)
                        {
                           if(response.status == 'success')
                           {                                
                                window.location.href = baseURL+'Superadmin/dashboard';                           
                            }  
                               
                            else 
                            {                            
                                $("#error").show();
                            }          
                        }
               });
        }
     

 });
 
 //login form admin

    $(document).on("submit", "#admin-login", function(e){

        e.preventDefault();

         $(this).validate({ 
                          rules: {              
                                    email: "required",                                  
                                    password: "required",                                                                           
                                 },

                          messages: {                          
                                 
                                  email: {
                                      required: "Required ", 
                                  },                                
                                  password: {
                                      required: "Required", 
                                  }, 
                             },

                           }); 

    if($(this).valid())
        {     
                var url = $(this).attr('action');
                var formdata = new FormData(this);
              
                $.ajax({
                        url : baseURL+'Login/admin_login_auth',
                        method: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        dataType:'json',
                        error: function(xhr,status,error)
                        {   
                            alert(xhr.responseText);
                        },
                        beforeSend: function()
                        {
              
                        },
                        
                        success: function(response)
                        {
                           if(response.status == 'success')
                           {                                
                                window.location.href = baseURL+'admin/dashboard';                           
                            }  
                               
                            else 
                            {                            
                                $("#error").show();
                            }          
                        }
               });
        }
     

 });
 
 //login admin-create-user

    $(document).on("submit", "#admin-create-user", function(e){

        e.preventDefault();

         $(this).validate({ 
                          rules: {              
                                    email: "required",
                                    name: "required",
                                    phone: "required",                                 
                                    password: "required",                                                                           
                                 },

                          messages: {                          
                                 
                                  email: {
                                      required: "Required ", 
                                  }, 
                                  name: {
                                      required: "Required ", 
                                  }, 
                                  phone: {
                                      required: "Required ", 
                                  },                                
                                  password: {
                                      required: "Required", 
                                  }, 
                             },

                           }); 

    if($(this).valid())
        {     
                var url = $(this).attr('action');
                var formdata = new FormData(this);
              
                $.ajax({
                        url : baseURL+'admin/user_insert',
                        method: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        dataType:'json',
                        error: function(xhr,status,error)
                        {   
                            alert(xhr.responseText);
                        },
                        beforeSend: function()
                        {
              
                        },
                        
                        success: function(response)
                        {
                           if(response.status == 'success')
                           {                                
                                $('#success_msg').show();                          
                            }  
                               
                            else 
                            {                            
                                $("#error_msg").show();
                            }          
                        }
               });
        }
     

 });

 //delete user 

 $(document).ready(function(){

   $(document).on("submit", ".blog_delete", function(e){     
         e.preventDefault();
        var url = $(this).attr('action');
        var formdata = new FormData(this);

      bootbox.confirm("Are you sure you want to delete?", function(result) {
            if(result)
               {

                    $.ajax({

                            url : url,
                            context:this,
                            type: 'POST',                            
                            processData: false,
                            contentType: false,
                            dataType:'json',
                            error: function(xhr,status,error)
                            {   
                               alert(xhr.responseText);
                            },              
                            
                            success: function(response)
                            {
                               if(response.status == 'success')
                               {
                                 $('#success_msg').show();
                                 window.location.href =baseURL+'Admin/get_adminuser';                                                                    
                                }else 
                                 {                    
                                    alert('Something went wrong..');
                                 }
                            }

                        });
                }
            });
    }); 
   
});

  
  
//add book insert form 
    $(document).on("submit", "#ebook_form", function(e){
        e.preventDefault();
         $(this).validate({ 
                          rules: {                           
                                    book_name: "required",
                                    book_type: "required",
                                    url: "required",
                                    thumb_img: "required",                                                                                                        
                                 },
                          messages: {                           
                                  book_name: {
                                      required: "Required ", 
                                  },
                                  book_type: {
                                      required: "Required ", 
                                  }, 
                                  url: {
                                      required: "Required ", 
                                  }, 
                                  thumb_img: {
                                      required: "Required ", 
                                  },
                                                                                                                                                        
                             },

                           }); 
    if($(this).valid())
        {     
                var url = $(this).attr('action');
                var formdata = new FormData(this);              
                $.ajax({
                        url :baseURL+'admin/insert_ebook',
                        method: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        dataType:'json',
                        error: function(xhr,status,error)
                        {   
                            alert(xhr.responseText);
                        },
                        beforeSend: function()
                        {
                                      
                        },                        
                        success: function(response)
                        {
                           if(response.status == 'success')
                           {                             
                               $('#ebook_form').trigger("reset"); 
                                $('#success_msg').show();                                                          
                            }   
                            else 
                            {                            
                               $('#error_msg').show();
                            }          
                        }
               });
        }     

 });
  //update book  form 
    $(document).on("submit", "#ebook_update_form", function(e){
        e.preventDefault();
         $(this).validate({ 
                          rules: {                           
                                    book_name: "required",
                                    book_type: "required",
                                    url: "required",
                                                                                                                                   
                                 },
                          messages: {                           
                                  book_name: {
                                      required: "Required ", 
                                  },
                                  book_type: {
                                      required: "Required ", 
                                  }, 
                                  url: {
                                      required: "Required ", 
                                  }, 
                                  
                                                                                                                                                        
                             },

                           }); 
    if($(this).valid())
        {     
                var url = $(this).attr('action');
                var formdata = new FormData(this);              
                $.ajax({
                        url :baseURL+'admin/update_ebook',
                        method: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        dataType:'json',
                        error: function(xhr,status,error)
                        {   
                            alert(xhr.responseText);
                        },
                        beforeSend: function()
                        {
                                      
                        },                        
                        success: function(response)
                        {
                           if(response.status == 'success')
                           {                             
                              
                                $('#success_msg').show();                                                          
                            }   
                            else 
                            {                            
                               $('#error_msg').show();
                            }          
                        }
               });
        }     

 });

//delete ebook
$(document).ready(function(){

   $(document).on("submit", ".ebook_delete", function(e){     
         e.preventDefault();
        var url = $(this).attr('action');
        var formdata = new FormData(this);

      bootbox.confirm("Are you sure you want to delete?", function(result) {
            if(result)
               {

                    $.ajax({

                            url : url,
                            context:this,
                            type: 'POST',                            
                            processData: false,
                            contentType: false,
                            dataType:'json',
                            error: function(xhr,status,error)
                            {   
                               alert(xhr.responseText);
                            },              
                            
                            success: function(response)
                            {
                               if(response.status == 'success')
                               {
                                 $('#success_msg').show();
                                 window.location.href = baseURL+'Admin/book_details';                               
                                }else 
                                 {                    
                                    alert('Something went wrong..');
                                 }
                            }

                        });
                }
            });
    }); 
   
});


//insert register

    $(document).on("submit", "#registration-form", function(e){
        e.preventDefault();
         $(this).validate({ 
                          rules: {                           
                                    name: "required",
                                    email: "required",
                                    password: "required",                                    
                                                                                                               
                                 },
                          messages: {                           
                                  name: {
                                      required: "Required ", 
                                  },
                                  email: {
                                      required: "Required ", 
                                  }, 
                                  password: {
                                      required: "Required ", 
                                  },                                
                                                                                                                                                        
                            },

                           }); 
    if($(this).valid())
        {     
                var url = $(this).attr('action');
                var formdata = new FormData(this);              
                $.ajax({
                        url :baseURL+'Login/register_insert',
                        method: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        dataType:'json',
                        error: function(xhr,status,error)
                        {   
                            alert(xhr.responseText);
                        },
                        beforeSend: function()
                        {
                                      
                        },                        
                        success: function(response)
                        {
                           if(response.status == 'success')
                           {                             
                                $('#registration-form').trigger("reset");
                                $('#success_msg').show(); 
                            }   
                            else 
                            {                            
                               $('#error_msg').show();
                            }          
                        }
               });
        }     

 });

//login form  user

    $(document).on("submit", "#login-form", function(e){

        e.preventDefault();

         $(this).validate({ 
                          rules: {              
                                    email: "required",                                  
                                    password: "required",                                                                           
                                 },

                          messages: {                          
                                 
                                  email: {
                                      required: "Required ", 
                                  },                                
                                  password: {
                                      required: "Required", 
                                  }, 
                             },

                           }); 

    if($(this).valid())
        {     
                var url = $(this).attr('action');
                var formdata = new FormData(this);
              
                $.ajax({
                        url : baseURL+'Login/user_auth',
                        method: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        dataType:'json',
                        error: function(xhr,status,error)
                        {   
                            alert(xhr.responseText);
                        },
                        beforeSend: function()
                        {
              
                        },
                        
                        success: function(response)
                        {
                           if(response.status == 'success')
                           {                                
                                window.location.href = baseURL+'Web/Index';                
                            }  
                               
                            else 
                            {                            
                                $('#error_msg').show();
                            }          
                        }
               });
        }
     

 });

$(document).on('change', '#email', function(){

  // var id= $(this).data("id");
    var email = $(this).val();
   
    $.ajax({

                            url : 'isexist_email',                           
                            type: 'POST',
                            data:  { email:email},
                            dataType:'json',
                            error: function(xhr,status,error)
                            {   
                               alert(xhr.responseText);
                            },              
                            
                            success: function(response)
                            {
                               if(response.status == 'success')
                               {
                                $('#error_msg_email').show();
                                $('#success_msg_email').hide();
                                 document.getElementById('email').value = " ";
                                                                   
                                }else 
                                 {                    
                                   // $('#success_msg_email').show();
                                    $('#error_msg_email').hide();
                                 }
                            }

                        });

  });    

//filter ebook
$(document).on('change', '#status', function(){

   var id= $(this).data("id");
    var status = $(this).val();
    $.ajax({

                            url : 'status_id',                           
                            type: 'POST',
                            data:  {id: id, status:status},
                            dataType:'json',
                            error: function(xhr,status,error)
                            {   
                               alert(xhr.responseText);
                            },              
                            
                            success: function(response)
                            {
                               if(response.status == 'success')
                               {
                                
                                 $('#success_msg').show();
                                                                   
                                }else 
                                 {                    
                                    $('#error_msg').show();
                                 }
                            }

                        });

  });  