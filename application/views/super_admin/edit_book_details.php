

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
                                        <h2 class="card-title" style="font-size: 27px;">Edit Blog</h2>
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
                                       <form id="ebook_update_form" action="" class="create-user step-form-horizontal" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="book_id"  class="form-control" value="<?=$details->ebook_id; ?>" >
                                            <div class="row"> 
                                               <div class="col-lg-6 col-md-6"> 
                                                    <section>                                                   
                                                        
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="text-label">Book Name</label>
                                                                <input type="text" name="book_name"  class="form-control" value="<?=$details->book_name; ?>" >
                                                            </div>
                                                        </div>   
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="text-label">Author Name</label>
                                                                <input type="text" name="author_name"  class="form-control" value="<?=$details->author_name; ?>">
                                                            </div>
                                                        </div>   
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="text-label">Book Type</label>
                                                                <select name="book_type" class="form-control" >
                                                                    <option>--Select Book Type--</option>
                                                                    <option value="Social Work" <?php if($details->type == 'Social Work'){ ?> selected <?php }?>>Social Work</option>
                                                                    <option value="Fisheries" <?php if($details->type == 'Fisheries'){ ?> selected <?php }?>>Fisheries</option>
                                                                    <option value="Self Improvement" <?php if($details->type == 'Self Improvement'){ ?> selected <?php }?>>Self Improvement</option>
                                                                    <option value="Electronics" <?php if($details->type == 'Electronics'){ ?> selected <?php }?>>Electronics</option>
                                                                    <option value="English" <?php if($details->type == 'English'){ ?> selected <?php }?>>English</option>
                                                                    <option value="Management" <?php if($details->type == 'Management'){ ?> selected <?php }?>>Management</option>

                                                                </select>
                                                            </div>
                                                        </div>                                                     
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="text-label">Thumb Image Upload </label>
                                                                <input type="file" name="thumb_img" class="form-control"  accept=".jpg, .jpeg, .png, .webp" >
                                                                 <input type="hidden" name="thumb_img_old" class="form-control"  value="<?=$details->img ?>" >
                                                                 <img src="../../assets/admin/uploads/ebook_thumb/<?=$details->img ?>" alt="Thumb image" height="100" width="200">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="text-label">Book URL</label>
                                                                <input type="text" name="url"  class="form-control" value="<?=$details->url; ?>">
                                                            </div>
                                                        </div>  
                                                    </section>
                                                </div>
                                                <div class="col-lg-6 col-md-6"> 
                                                    <section>                                                 
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="text-label">Publisher</label>
                                                                <input type="text" name="Publisher"  class="form-control" value="<?=$details->publisher; ?>">
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="text-label">ISBN No</label>
                                                                <input type="text" name="ISBN_No"  class="form-control" value="<?=$details->isbn_no; ?>">
                                                            </div>
                                                        </div> 
                                                         <div class="col-lg-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="text-label">Year</label>
                                                                <input type="text" name="Year"  class="form-control" value="<?=$details->year; ?>">
                                                            </div>
                                                        </div> 
                                                         <div class="col-lg-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="text-label">Edition</label>
                                                                <input type="text" name="Edition"  class="form-control" value="<?=$details->edition; ?>">
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
                <p>Copyright © 2021.  Mydigitallib. All Rights Reserved. &amp; Powered by <a href="https://yungmedia.com" target="_blank">Yung</a></p>
            </div>
        </div>
        
    </div>
    
<?php $this->load->view('layout/admin/admin_js'); ?>



<script src="<?php echo base_url('assets/admin/plugins/ckfinder/ckfinder.js')?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/ckeditor/ckeditor.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/custom.js')?>"></script>
 <script src="<?php echo base_url('assets/admin/js/jquery.validate.js')?>"></script>


<script type='text/javascript'>
    var baseURL= "<?php echo base_url();?>";
    var editor = CKEDITOR.replace( 'ckfinder' );
    CKFinder.setupCKEditor( editor );
    CKEDITOR.replace( 'editor', {
        filebrowserUploadMethod: 'form',
         filebrowserUploadUrl:'<?php echo base_url('admin/upload_ckeditor');?>',
        } );
    
</script>
</body>

<!-- Mirrored from motaadmin.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 05:30:46 GMT -->
</html>