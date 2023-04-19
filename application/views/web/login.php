<?php $this->load->view('layout/header_css'); ?>
<body class="user-unauthorized path-mnybks-registration-form has-glyphicons">
<div class="mb-device-xs visible-xs"></div>
<div class="mb-device-sm visible-sm"></div>
<div class="mb-device-md visible-md"></div>
<div class="mb-device-lg visible-lg"></div>

<div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>

<?php $this->load->view('layout/header-menu'); ?>    



<div role="main" class="main-container container-fluid js-quickedit-main-content">
<div class="row">
<section>    
  <a id="main-content"></a>

  <div class="region region-content">
   
      <form class="mb-user-registration-form" data-drupal-selector="mb-user-registration-form" action="" method="post" id="login-form" accept-charset="UTF-8">
        <div id="messages-wrapper" data-drupal-selector="edit-wrapper-messages" class="form-group js-form-wrapper form-wrapper"></div>
          <div id="form-wrapper" class="row form-group js-form-wrapper form-wrapper" data-drupal-selector="edit-wrapper">
            <div class="form-step-mbRegistration form-group js-form-wrapper form-wrapper" data-drupal-selector="edit-form" id="edit-form">
              <div class="mb-registration-wr form-group js-form-wrapper form-wrapper" data-drupal-selector="edit-registration-wr" id="edit-registration-wr">
                <div class="mb-circle-icon" data-drupal-selector="edit-icon"> </div>
                  <div class="alert alert-success" id="success_msg" role="alert" style="display:none;" >Successfully login
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="alert alert-danger" id="error_msg" role="alert" style="display:none;" >Something went wrong please try again
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="mb-registration-title" data-drupal-selector="edit-title">Sign In</div>
                    
                      
                      <div class="form-item js-form-item form-type-email js-form-type-email form-item-email js-form-item-email form-no-label form-group">
                        <input data-drupal-selector="edit-email" class="form-email form-control" type="email" id="edit-email" name="email" size="60" maxlength="254" placeholder="Your Email" />
                      </div>
                      
                      <div class="form-item js-form-item form-type-password js-form-type-password form-item-pass js-form-item-pass form-no-label form-group">
                        <input data-drupal-selector="edit-pass" class="form-text form-control" type="password" id="edit-pass" name="password"  maxlength="10" placeholder="Password" />
                      </div>
                     
                      
                      <button class="mb-registration-button button js-form-submit form-submit btn-default btn" data-drupal-selector="edit-button" type="submit" id="edit-button" name="op" value="Submit">Submit</button>                      
                    </div>

                   
                    </div>
                  </div>
          </form>
        </div>


</section>
</div>
</div>
<?php $this->load->view('layout/footer-menu'); ?>
<div id="g_id_onload" data-client_id="973485009583-9dujf54qp7f4fi760fa1k9gj77eq77du.apps.googleusercontent.com" data-login_uri="https://accounts.google.com/o/oauth2/v2/auth?scope=openid%20email%20profile&amp;access_type=offline&amp;state=cab5660171d7f5a55f61cbc902e6e225&amp;response_type=code&amp;redirect_uri=https%3A%2F%2Fmanybooks.net%2Fuser%2Flogin%2Fgoogle%2Fcallback&amp;client_id=973485009583-9dujf54qp7f4fi760fa1k9gj77eq77du.apps.googleusercontent.com">
</div>
</div>
<?php $this->load->view('layout/footer-js'); ?>