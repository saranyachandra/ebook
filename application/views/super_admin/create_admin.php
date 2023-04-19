

<?php $this->load->view('layout/admin/admin_css'); ?>
<style>
.error{
	color:red;
}

</style>
<body>

    <div id="main-wrapper">       
		
		<?php $this->load->view('layout/super_admin/sidebar'); ?>     
        <?php $this->load->view('layout/super_admin/headerbar'); ?>
             
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                <div class="row">
					<div class="col-xl-12 col-xxl-12">
						<div class="row">
						   <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h2 class="card-title" style="font-size: 27px;">Create Admin</h2>
									</div>
									<div class="card-body">
                                        <div class="alert alert-success" id="success_msg" role="alert" style="display:none;" >Successfully updated
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="alert alert-danger" id="error_msg" role="alert" style="display:none;" >Something went wrong please try again
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
									   <form class="step-form-horizontal" method="POST" action="<?php echo base_url('superadmin/admin_insert/'); ?>">
                                            <div class="row"> 
                                        	    <div class="col-lg-6 col-md-6"> 
                                                    <section>
                                                        
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="text-label">Email</label>
                                                                <input type="email" name="admin_email"  class="form-control" required >
                                                            </div>
                                                        </div>   
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="text-label">Name</label>
                                                                <input type="text" name="admin_name"  class="form-control" required>
                                                            </div>
                                                        </div>   
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="text-label">Password</label>
                                                               <input type="password" name="admin_password"  class="form-control" required> 
                                                            </div>
                                                        </div>                                                  
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="text-label">User Creation Count</label>
                                                               <input type="number" name="user_count"  class="form-control" required> 
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
        <div class="footer">
            <div class="copyright">
                <p>Copyright © 2021. Mydigitallib. All Rights Reserved. &amp; Powered by <a href="https://yungmedia.com" target="_blank">Yung</a></p>
            </div>
        </div>
        


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