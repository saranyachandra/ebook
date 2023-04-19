



<?php $this->load->view('layout/header_css'); ?>

<body class="user-unauthorized path-frontpage has-glyphicons">
  <div class="mb-device-xs visible-xs"></div>
  <div class="mb-device-sm visible-sm"></div>
  <div class="mb-device-md visible-md"></div>
  <div class="mb-device-lg visible-lg"></div>
  
  <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>

  <?php $this->load->view('layout/header-menu'); ?>    

<div role="main" class="main-container container-fluid js-quickedit-main-content">
<div class="row">
<section>


<div class="region region-content">

<div class="clearfix bs-search-books">

<div class="bs-region--top">
  <div class="container">
    <div class="row">

      <div class="col-xs-12 col-sm-4 bs-region bs-region--top-left">
<div class="block-region-top-left">
  <section class="views-exposed-form bef-exposed-form block block-views block-views-exposed-filter-blocksearch-results-index-block-main-search clearfix" data-drupal-selector="views-exposed-form-search-results-index-block-main-search">

<div class="block-content">
  <form action="<?php echo base_url('web/filter');?>" method="POST" id="views-exposed-form-search-results-index-block-main-search" accept-charset="UTF-8">
    <div class="form--inline form-inline clearfix">

      <fieldset data-drupal-selector="edit-field-genre" class="fieldgroup form-composite js-form-item form-item js-form-wrapper form-wrapper" id="edit-field-genre--wrapper">
        <legend>
          <span class="fieldset-legend">Genre</span>
        </legend>
            <div class="fieldset-wrapper">
              <input type="checkbox" id="vehicle1" name="book_type[]" value="Social Work">
                <label for="vehicle1"> Social Work</label>
               <input type="checkbox" id="vehicle2" name="book_type[]" value="Fisheries">
                <label for="vehicle1"> Fisheries</label><br>
              <input type="checkbox" id="vehicle2" name="book_type[]" value="Self Improvement">
                <label for="vehicle1"> Self Improvement</label><br>  
               <input type="checkbox" id="vehicle2" name="book_type[]" value="Electronics">
                <label for="vehicle1"> Electronics</label><br>
                <input type="checkbox" id="vehicle2" name="book_type[]" value="English">
                <label for="vehicle1"> English</label><br>
                <input type="checkbox" id="vehicle2" name="book_type[]" value="Management">
                <label for="vehicle1"> Management</label><br>        
            </div>
      </fieldset>
          <input data-drupal-selector="edit-sort-by" type="hidden" name="sort_by" value="field_downloads" /><div data-drupal-selector="edit-actions" class="form-actions form-group js-form-wrapper form-wrapper" id="edit-actions"><button data-drupal-selector="edit-submit-search-results-index" class="button js-form-submit form-submit btn-info btn" type="submit" id="edit-submit-search-results-index" value="Apply" name="">Apply</button></div>
    </div>
  </form>
</div>
</section>

</div>
</div>


<div class="col-xs-12 col-sm-8 bs-region bs-region--top-center">
<div class="block-region-top-center">

<section class="views-element-container block block-views block-views-blocksearch-results-index-block-main-search clearfix">

<div class="block-content">
<div class="form-group"><div class="mb-width-grid-manage-responsive view view-search-results-index view-id-search_results_index view-display-id-block_main_search js-view-dom-id-6053304122d3409d9f6c5c2c62a86cd0ccc4c6e1b1fa0e95a368aa3bb2c1b0df" data-mb-width-grid-regions="0|500-6:501|xs-4:sm-4:md-4:lg-3">
<div id="mb_top_search" style="margin-bottom: 25px;"></div>
<div class="view-content">
  <?php 
                                    foreach($details as $detail){
                                  ?>
  <div class="col-xs-4  col-sm-4 col-md-4 col-lg-3 views-row">
    <article data-history-node-id="126885" role="article" about="/titles/shakespeetext94shaks12.html" class="book is-promoted slider clearfix">
    <div class="content">
      <div class="field field--name-field-cover field--type-image field--label-hidden field--item"> 
        <a href="titles/shakespeetext94shaks12.html" hreflang="en">
        <img src="<?php echo base_url('assets/admin/uploads/ebook_thumb/'.$detail->img);?>" width="220" height="330" alt="The Complete Works of William Shakespeare by William Shakespeare" typeof="foaf:Image" class="img-responsive" /></a>
      </div>
      <div class="field field--name-field-title field--type-string field--label-hidden field--item"><a href="titles/shakespeetext94shaks12.html" hreflang="en"><?=$detail->book_name;?></a></div>
    </div>
    <div class="book-hover">
    <div class="image">
    <div class="field field--name-field-cover field--type-image field--label-hidden field--item"> <a href="titles/shakespeetext94shaks12.html" hreflang="en"><img src="<?php echo base_url('assets/admin/uploads/ebook_thumb/'.$detail->img);?>" width="220" height="330" alt="The Complete Works of William Shakespeare by William Shakespeare" typeof="foaf:Image" class="img-responsive" /></a>
    </div>
    </div>
    <div class="book-hover-content">
    <div class="field field--name-field-title field--type-string field--label-hidden field--item"><a href="<?=$detail->url;?>" hreflang="en"><?=$detail->book_name;?> </a></div>
    <span>by
    <div class="field field--name-field-author-er field--type-entity-reference field--label-hidden field--items">
    <div class="field--item"><a href="#" hreflang="en"><?=$detail->author_name;?></a></div>
    </div>
    </span>
    <?php if($this->session->userdata('user_id') != null){ ?>
    <a href="<?=$detail->url;?>" class="mb-link-files use-ajax book-hover-download" name="download" data-dialog-type="modal" data-dialog-options="{&quot;width&quot;:550}" data-node-id="126885" id="download">Download</a>
     <?php } else{ ?>
     <a href="<?php echo base_url('Login/user_loin');?>" 
                                              class="mb-link-files book-hover-download" name="download">Download</a>
       <?php } ?>
    </div>
    </div>
    </article>
  </div>   
<?php } ?>

</div>


</div>
</div>
</div>
</section>



</div>
</div>
</div>
</div>
</div>

</div>
<a href="mb_ac_newsletter_subscription_form.html" class="hidden use-ajax newsletter-subscribe" data-dialog-type="modal" data-dialog-options="{&quot;width&quot;:492}" data-class="newsletter-subscribe" rel="nofollow">Sign up</a>
</div>

</section>
</div>
</div>


<?php $this->load->view('layout/footer-menu'); ?>
<div id="g_id_onload" data-client_id="973485009583-9dujf54qp7f4fi760fa1k9gj77eq77du.apps.googleusercontent.com" data-login_uri="https://accounts.google.com/o/oauth2/v2/auth?scope=openid%20email%20profile&amp;access_type=offline&amp;state=84549dc577853ca3ae7d8bd6dd977bc8&amp;response_type=code&amp;redirect_uri=https%3A%2F%2Fmanybooks.net%2Fuser%2Flogin%2Fgoogle%2Fcallback&amp;client_id=973485009583-9dujf54qp7f4fi760fa1k9gj77eq77du.apps.googleusercontent.com">
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
<script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"","currentPath":"search-book","currentPathIsAdmin":false,"isFront":false,"currentLanguage":"en","currentQuery":{"field_genre":{"29":"29"}}},"pluralDelimiter":"\u0003","suppressDeprecationErrors":true,"ajaxPageState":{"libraries":"better_exposed_filters\/general,better_exposed_filters\/select_all_none,bootstrap\/popover,bootstrap\/tooltip,core\/drupal.dialog.ajax,core\/drupal.states,core\/html5shiv,google_analytics\/google_analytics,lazy\/lazy,mnybks\/global-styling,mnybks\/one-tap,mnybks_advertising\/mnybks_advertising.google_ads,mnybks_book\/mnybks-book.mnybks-book-hover,mnybks_book\/mnybks-book.search-title,mnybks_owl\/mnybks-owl.custom,mnybks_user\/mnybks-user.page_leave_popup,system\/base,views\/views.ajax,views\/views.module","theme":"mnybks","theme_token":null},"ajaxTrustedUrl":{"\/app\/genre\/%2A":true,"\/search-book":true},"google_analytics":{"account":"UA-28198269-1","trackOutbound":true,"trackMailto":true,"trackDownload":true,"trackDownloadExtensions":"7z|aac|arc|arj|asf|asx|avi|bin|csv|doc(x|m)?|dot(x|m)?|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt(x|m)?|pot(x|m)?|pps(x|m)?|ppam|sld(x|m)?|thmx|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd|xls(x|m|b)?|xlt(x|m)|xlam|xml|z|zip"},"lazy":{"lazysizes":{"lazyClass":"lazyload","loadedClass":"lazyloaded","loadingClass":"lazyloading","preloadClass":"lazypreload","errorClass":"lazyerror","autosizesClass":"lazyautosizes","srcAttr":"data-src","srcsetAttr":"data-srcset","sizesAttr":"data-sizes","minSize":40,"customMedia":[],"init":true,"expFactor":1.5,"hFac":0.80000000000000004,"loadMode":2,"loadHidden":true,"ricTimeout":0,"throttleDelay":125,"plugins":[]},"placeholderSrc":"","preferNative":false},"bootstrap":{"forms_has_error_value_toggle":1,"modal_animation":1,"modal_backdrop":"true","modal_focus_input":1,"modal_keyboard":1,"modal_select_text":1,"modal_show":1,"modal_size":"","popover_enabled":1,"popover_animation":1,"popover_auto_close":1,"popover_container":"body","popover_content":"","popover_delay":"0","popover_html":0,"popover_placement":"right","popover_selector":"","popover_title":"","popover_trigger":"click","tooltip_enabled":1,"tooltip_animation":1,"tooltip_container":"body","tooltip_delay":"0","tooltip_html":0,"tooltip_placement":"auto left","tooltip_selector":"","tooltip_trigger":"hover"},"basePath":"modules\/contrib\/vote_up_down","views":{"ajax_path":"\/views\/ajax","ajaxViews":{"views_dom_id:7b50f81053e6d068f90125d16f94fd2bdcf8d84f3c9b57b8e9078a8396217779":{"view_name":"author_of_the_day","view_display_id":"daily_author_block","view_args":"","view_path":"\/search-book","view_base_path":null,"view_dom_id":"7b50f81053e6d068f90125d16f94fd2bdcf8d84f3c9b57b8e9078a8396217779","pager_element":0},"views_dom_id:fe3b266ba5d515c4b35eed8ecae751b0bf69279deeaaf78988e44a3d8ff98ad0":{"view_name":"books","view_display_id":"editors_choice_by_genre","view_args":"29","view_path":"\/search-book","view_base_path":"app\/block\/editors-choice","view_dom_id":"fe3b266ba5d515c4b35eed8ecae751b0bf69279deeaaf78988e44a3d8ff98ad0","pager_element":0}}},"mnybksOwl":{".js-view-dom-id-165d9af4e2aa737f66b992fbae1afd0dfa1029e394b57d31f93757d4f5766c79 .view-content":{"0":{"items":"2"},"501":{"items":"3"},"1200":{"items":"4"}}},"bookHover":{"baseUrl":"https:\/\/manybooks.net"},"user":{"uid":0,"permissionsHash":"3bdd8b0cf2587b28848dc223e767135d9aebd1114950a7937154830d53c542a0"}}</script>
<script src="<?php echo base_url('assets/web/js/js_jBZHzsNBgGVwyGtujuBDo1OdYmq8lb-tQZZEcPHUYOc.js');?>"></script>
<script src="<?php echo base_url('assets/web/js/js_O6uU7GITicFVmcrTKThuyEHVHLqkYbzSvMBfwKVVknc.js');?>"></script>
<script src="../pagead2.googlesyndication.com/pagead/js/f.txt" async></script>
<script src="<?php echo base_url('assets/web/js/js_rBjcxS-6Wt3CG0cLoW6TMkjvxblZ-14RCGB-sAAGrew.js');?>"></script>
<script src="http://accounts.google.com/gsi/client" defer async></script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"fd2d2a57b6","applicationID":"135398014","transactionName":"ZgRbY0FRWRZVUEJfC19OeFRHWVgLG0NXUQFuAlhUW1U=","queueTime":0,"applicationTime":21,"atts":"SkNYFQlLShg=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>

<!-- Mirrored from manybooks.net/search-book?field_genre%5B29%5D=29 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Nov 2021 19:22:08 GMT -->
</html>
