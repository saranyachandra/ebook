
<?php $this->load->view('layout/admin/admin_css'); ?>
<link href="<?php echo base_url('assets/admin/plugins/datatables/datatables.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/admin/plugins/datatables/datatables.min.css')?>" rel="stylesheet" type="text/css" />

<body>

    <div id="main-wrapper">
       
		
		<?php $this->load->view('layout/super_admin/sidebar'); ?>
	
        <?php $this->load->view('layout/super_admin/headerbar'); ?>
     
      
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                <div class="row">
					<div class="col-xl-12 col-xxl-12">
						<div class="row">
						<div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="card-title"  style="font-size: 27px;">Ebook Details</h4>
									</div>
									<div class="card-body">
									   
                                    	<div>
                                        
                                        <section>
                                           <div class="table-responsive">
                                    <table  id="table_view" class="table table-striped table-bordered">
                                         <div class="alert alert-success" id="success_msg" role="alert" style="display:none;" >Successfully deleted
                                        </div>
                                        <thead>
                                            <tr>
                                                <th>S.No</th>    
                                                <th>Book Name</th>                                
                                                <th>Type</th>                                          
                                                <th>Thumb Img</th>                                     
                                                <th>Create At</th>                                               
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                <?php 
                                                        $i=1;
                                                        foreach ($details as $detail) 
                                                        {                                                
                                                ?>
                                            <tr>                                               
                                                <td>
                                                   <?php echo $i; ?>
                                                </td>
                                                <td><?php echo $detail->book_name; ?> </td>
                                               <td>                                                   
                                                  <?php echo $detail->type; ?>
                                                </td>
                                                <td>                                              
                                                    <img style="width:100px; height: 65px;"  src="<?php echo base_url('assets/admin/uploads/ebook_thumb/').$detail->img?>" >
                                                </td>                                                                               
                                                <td>
                                                   <?php 
                                                         $timestamp = strtotime($detail->create_at);
                                                         echo date('d-m-Y', $timestamp);
                                                    ?>
                                                </td>                                               

                                                <td>                                              
                                                    <div class="d-flex"> 
                                                        <form  action="<?php echo base_url('admin/edit_ebook/'.$detail->ebook_id); ?>" method="POST" style="float: left;"> 
                                                            <button class="btn btn-primary shadow btn-xs sharp mr-1" >
                                                                   <i class="fa fa-pencil"></i>
                                                            </button>
                                                        </form>
                                                        <form class="ebook_delete" action="<?php echo base_url('admin/delete_ebook/'.$detail->ebook_id); ?>" method="POST" style="float: left;">
                                                            <button type="submit" class="btn btn-danger shadow btn-xs sharp">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                        
                                                    </div>
                                                </td>
                                            </tr> 

                                            <?php $i++; } ?>     <!--   here end foreach   -->                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                                        </section>                                        
                                       
                                        </div>
                                        
                                
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



<script src="<?php echo base_url('assets/admin/plugins/datatables/datatables.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables/datatables.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/jquery.validate.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/custom.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/bootbox.js')?>"></script>
<script>
  var baseURL= "<?php echo base_url();?>";
// show table inbuild function like pagination 
   $(document).ready(function() {
    $('#table_view').DataTable();
} ); 


  

</script>

</body>

<!-- Mirrored from motaadmin.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 05:30:46 GMT -->
</html>