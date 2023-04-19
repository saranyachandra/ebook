<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from motaadmin.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 05:31:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Mydigitallib - Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/web/images/favicon.ico');?>">
    <link href="<?php echo base_url('assets/admin/css/style.css');?>" rel="stylesheet">

</head>

<style>
.error{
    color:red;
}

</style>
<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                  
                                    <div class="logo" style="text-align: center;">
                                        <img style="width:250px" src="<?php echo base_url('assets/admin/images/Logo.png');?>"> 
                                    </div>
                                    <form id="login" action="" method="POST">
                                        <div id="error" style="display: none;">
                                            <div class="alert alert-danger alert-dismissible fade show" >
                                                <strong>Error!</strong> User name or Password incorrect. Plz try again
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="text" class="form-control" name="email" placeholder="User Name">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" placeholder="Password" >
                                        </div>
                                       
                                        <div class="text-center">
                                            <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
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
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    
    <script src="<?php echo base_url('assets/admin/vendor/global/global.min.js');?>"></script>
	<script src="<?php echo base_url('assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/js/custom.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/js/deznav-init.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/js/jquery.validate.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/js/custom.js')?>"></script>
    
    <script type='text/javascript'>
    var baseURL= "<?php echo base_url();?>";
    </script>

</body>

<!-- Mirrored from motaadmin.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 05:31:57 GMT -->
</html>