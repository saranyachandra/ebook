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
    <h1 class="page-header">User Account Form</h1>
      <form class="mb-user-registration-form" data-drupal-selector="mb-user-registration-form" action="" method="post" id="registration-form" accept-charset="UTF-8">
        <div id="messages-wrapper" data-drupal-selector="edit-wrapper-messages" class="form-group js-form-wrapper form-wrapper"></div>
          <div id="form-wrapper" class="row form-group js-form-wrapper form-wrapper" data-drupal-selector="edit-wrapper">
            <div class="form-step-mbRegistration form-group js-form-wrapper form-wrapper" data-drupal-selector="edit-form" id="edit-form">
              <div class="mb-registration-wr form-group js-form-wrapper form-wrapper" data-drupal-selector="edit-registration-wr" id="edit-registration-wr">
                <div class="mb-circle-icon" data-drupal-selector="edit-icon"> </div>
                  <div class="alert alert-success" id="success_msg" role="alert" style="display:none;" >Successfully Register
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="alert alert-danger" id="error_msg" role="alert" style="display:none;" >Something went wrong please try again
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="mb-registration-title" data-drupal-selector="edit-title">Sign up to download</div>
                    <div class="mb-login-description" data-drupal-selector="edit-description">Access our library with a free account</div>
                      <div class="form-item js-form-item form-type-textfield js-form-type-textfield form-item-name js-form-item-name form-no-label form-group">
                        <input autocorrect="none" autocapitalize="none" spellcheck="false" autofocus="autofocus" data-drupal-selector="edit-name" class="form-text form-control" type="text" id="edit-name" name="name" value="" size="60" maxlength="60" placeholder="Your Name" />
                      </div>
                      <div class="form-item js-form-item form-type-email js-form-type-email form-item-email js-form-item-email form-no-label form-group">
                        <input data-drupal-selector="edit-email" class="form-email form-control" type="email" id="edit-email" name="email" size="60" maxlength="254" placeholder="Your Email" onkeyup="checkemail();" />
                        <span id="name_status"></span>
                      </div>
                      <div class="form-item js-form-item form-type-password js-form-type-password form-item-pass js-form-item-pass form-no-label form-group">
                        <input data-drupal-selector="edit-pass" class="form-text form-control" type="text" id="edit-pass" name="phone"  maxlength="10" placeholder="Phone" />
                      </div>
                      <div class="form-item js-form-item form-type-password js-form-type-password form-item-pass js-form-item-pass form-no-label form-group">
                        <input data-drupal-selector="edit-pass" class="form-text form-control" type="password" id="edit-pass" name="password"  maxlength="10" placeholder="Password" />
                      </div>
                      <div class="form-item js-form-item form-type-password js-form-type-password form-item-pass js-form-item-pass form-no-label form-group">
                        <select name="type" class="form-text form-control">
                          <option>-- Select Type-- </option>
                          <option value="Student"> Student</option>
                          <option value="Teacher"> Teacher</option>
                        </select>
                      </div>
                      
                      <button class="mb-registration-button button js-form-submit form-submit btn-default btn" data-drupal-selector="edit-button" type="submit" id="edit-button" name="op" value="Submit">Submit</button>                      
                    </div>

                    <div class="mb-login-wr form-group js-form-wrapper form-wrapper" data-drupal-selector="edit-login-wr" id="edit-login-wr">
                     
                    Already a member?<a href="<?php echo base_url('Login/user_loin');?>" class="use-ajax mb-log-in-link" data-dialog-type="modal" data-dialog-options="{&quot;width&quot;:550}" data-drupal-selector="edit-login-link" id="edit-login-link">Log In
                      </a></div>
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
<script type="text/javascript">
          window.doorbellOptions = {
            id: '9242',
            appKey: 'RNPSNvWSz0fkZT27E475sxd5AGT4wCLgXiKqOHGNgsEsKvBPmPLAGGx2eNLpRHfD'
          };
          (function (w, d, t) {
            var hasLoaded = false;
          function l() { if (hasLoaded) { return; } hasLoaded = true; window.doorbellOptions.windowLoaded = true; var g = d.createElement(t);g.id = 'doorbellScript';g.type = 'text/javascript';g.async = true;g.src = 'https://embed.doorbell.io/button/'+window.doorbellOptions['id']+'?t='+(new Date().getTime());(d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(g); }
          if (w.attachEvent) { w.attachEvent('onload', l); } else if (w.addEventListener) { w.addEventListener('load', l, false); } else { l(); }
          if (d.readyState == 'complete') { l(); }
          }(window, document, 'script'));
        </script>
<div id="fs-select-footer"></div>
<script>
      (function () {
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = '../app.termly.io/embed.min.js';
        s.id = 'f52b167c-4a3c-4c7a-b5f6-89b23d2043d7';
        s.setAttribute("data-name", "termly-embed-banner");
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
      })();
    </script>
<script>
      (function () {
        var s = document.createElement('script'), e = !document.body ? document.querySelector('head') : document.body;
        s.src = '../acsbapp.com/apps/app/dist/js/app.js';
        s.async = true;
        s.onload = function () {
          acsbJS.init({
            statementLink: '',
            footerHtml: '',
            hideMobile: false,
            hideTrigger: false,
            language: 'en',
            position: 'left',
            leadColor: '#146ff8',
            triggerColor: '#146ff8',
            triggerRadius: '50%',
            triggerPositionX: 'right',
            triggerPositionY: 'bottom',
            triggerIcon: 'people',
            triggerSize: 'medium',
            triggerOffsetX: 20,
            triggerOffsetY: 100,
            mobile: {
              triggerSize: 'small',
              triggerPositionX: 'right',
              triggerPositionY: 'bottom',
              triggerOffsetX: 10,
              triggerOffsetY: 10,
              triggerRadius: '50%'
            }
          });
        };
        e.appendChild(s);
      }());
    </script>

<script src="<?php echo base_url('assets/web/js/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/admin/js/custom.js')?>"></script>
 <script src="<?php echo base_url('assets/admin/js/jquery.validate.js')?>"></script>
<script src="<?php echo base_url('assets/web/js/js_BbMuwk74cq_zW7xM9E5o2obNs6VCCPl3KQuPIpDGCQg.js');?>"></script>
<script src="<?php echo base_url('assets/web/js/js_W7evIVUPEvCB1OR4amXg5l1u9G17XIpcoAzuaA_6jkw.js');?>"></script>
<script src="<?php echo base_url('assets/web/js/js_wQgn2KXTEDsJ8ktJOFugcF7BvjgWr-OHVEPiv9mSEJA.js');?>"></script>
<script type='text/javascript'>
    var baseURL= "<?php echo base_url();?>";
    
  //check email id
 function checkemail() {   
 var name=document.getElementById("edit-email").value; 
 console.log(name); 
 if(name)
 {
      $.ajax({
      type: 'post',
      url: '<?php echo base_url('Login/check_email'); ?>',
      data: {
       email:name,
      },
      success: function (response) {
           $( '#name_status' ).html(response);
            
           if(response=="OK")   
           {
             return true; 
           }
           else
           {
            return false;   
           }
          }
      });
 }
}
</script>
</body>

<!-- Mirrored from manybooks.net/mnybks-registration-form?download_nid=208231 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Nov 2021 19:28:14 GMT -->
</html>
