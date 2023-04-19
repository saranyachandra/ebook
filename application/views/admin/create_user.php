

<?php $this->load->view('layout/admin/admin_css'); ?>
<style>
.error{
	color:red;
}

</style>
<body>

    <div id="main-wrapper">       
		
		<?php $this->load->view('layout/admin/sidebar'); ?>     
        <?php $this->load->view('layout/admin/headerbar'); ?>
             
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                <div class="row">
					<div class="col-xl-12 col-xxl-12">
						<div class="row">
						   <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h2 class="card-title" style="font-size: 27px;">Create User</h2>
									</div>
									<div class="card-body">
                                        <div class="alert alert-success" id="success_msg" role="alert" style="display:none;" >Successfully created user
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="alert alert-danger" id="error_msg" role="alert" style="display:none;" >User create limit exist
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
									   <form class="step-form-horizontal" id="admin-create-user" method="POST" action="">
                                            <div class="row"> 
                                        	    <div class="col-lg-6 col-md-6"> 
                                                    <section>
                                                        
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="text-label">Email</label>
                                                                <input type="email" name="email"  class="form-control" id="email" required >
                                                            </div>
                                                        </div>  
                                                       
                                        <div class="alert alert-success" id="success_msg_email" role="alert" style="display:none;" >Successfully updated
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="alert alert-danger" id="error_msg_email" role="alert" style="display:none;" >Email already exist please try new
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div> 
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="text-label">Name</label>
                                                                <input type="text" name="name"  class="form-control" required>
                                                            </div>
                                                        </div>   
                                                         <div class="col-lg-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="text-label">Phone</label>
                                                                <input type="text" name="phone"  class="form-control" required>
                                                            </div>
                                                        </div>   
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="text-label">Password</label>
                                                               <input type="password" name="password"  class="form-control" required> 
                                                            </div>
                                                        </div>                                                  
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="text-label">User Type</label>
                                                            <select name="user_type" class="form-text form-control">
                                                                <option>-- Select Type-- </option>
                                                                <option value="Student"> Student</option>
                                                                <option value="Teacher"> Teacher</option>
                                                            </select> 
                                                            </div>
                                                        </div>  
                                                    </section>
                                                </div>
                                               

                                            </div>
                                        
                                             <div class="col-lg-12 text-center mb-2">
                                                <div class="form-group"> 
                                                  <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                        Cancel</button>                                            
                                                  <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        Submit
                                                    </button>                                            
                                                </div>
                                            </div>
                                        </form>
                                    </div>
								</div>
							</div>						
						</div>
					</div>					
			   </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        


    </div>
    
<?php $this->load->view('layout/admin/admin_js'); ?>



<script src="<?php echo base_url('assets/admin/js/custom.js')?>"></script>
 <script src="<?php echo base_url('assets/admin/js/jquery.validate.js')?>"></script>

<script type='text/javascript'>
    var baseURL= "<?php echo base_url();?>";
   

</script>
</body>

<!-- Mirrored from motaadmin.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 05:30:46 GMT -->
</html>