
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
          <div class="highlighted container">
            <div class="region region-highlighted">
              <div data-drupal-messages-fallback class="hidden"></div>
            </div>
          </div>
          <a id="main-content"></a>
          <div class="region region-content">
            <div class="clearfix bs-home">              
              
              <div class="bs-region--top-center">
                <div class="container">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="block-region-top-center">
                                              
                        <section
                          class="views-element-container block block-views block-views-blockbooks-block-trending-books clearfix">
                          <div class="block-header">
                            <h2 class="block-title">Search Result</h2>
                            <a href="#">(view all)</a>
                          </div>
                          <div class="block-content">
                            <div class="form-group">
                              <div
                                class="view view-books view-id-books view-display-id-block_trending_books js-view-dom-id-05347aa85af205efd21e0783252553144bb8adb03cb5ee3435fb3b41c3839137">
                                <div class="view-content">
                                  <div class="item-list">
                                    <ul>
                                      <?php 
                                        foreach($details as $detail){
                                      ?>

                                      <li>
                                        <article data-history-node-id="248256" role="article"
                                        about="/titles/love-in-an-undead-age"
                                        class="book is-promoted is-sticky slider clearfix">
                                        <div class="content">
                                          <div
                                            class="field field--name-field-cover field--type-image field--label-hidden field--item">
                                            <a href="#" hreflang="en">
                                              <img src="<?php echo base_url('assets/admin/uploads/ebook_thumb/'.$detail->img);?>"
                                                width="220" height="330" alt="Love in an Undead Age by A.M. Geever"
                                                typeof="foaf:Image" class="img-responsive" />
                                            </a>
                                          </div>
                                          <div
                                            class="field field--name-field-title field--type-string field--label-hidden field--item">
                                            <a href="##" hreflang="en"><?=$detail->book_name;?>
                                            </a></div>
                                        </div>
                                        <div class="book-hover">
                                          <div class="image">
                                            <div
                                              class="field field--name-field-cover field--type-image field--label-hidden field--item">
                                              <a href="##" hreflang="en">
                                                <img src="<?php echo base_url('assets/admin/uploads/ebook_thumb/'.$detail->img);?>"
                                                  width="220" height="330" alt="Love in an Undead Age by A.M. Geever"
                                                  typeof="foaf:Image" class="img-responsive" />
                                              </a>
                                            </div>
                                          </div>
                                          <div class="book-hover-content">
                                            <div
                                              class="field field--name-field-title field--type-string field--label-hidden field--item">
                                              <a href="<?=$detail->url;?>" hreflang="en"><?=$detail->book_name;?>
                                              </a></div>
                                            <span>by
                                              <div
                                                class="field field--name-field-author-er field--type-entity-reference field--label-hidden field--items">
                                                <div class="field--item"><a href="##"
                                                    hreflang="en"><?=$detail->author_name;?>
                                                  </a></div>
                                              </div>
                                            </span>
                                            <?php if($this->session->userdata('user_id') != null){ ?>
                                          <a href="<?=$detail->url;?>" class="mb-link-files book-hover-download" target="_blank" >Download</a>
                                            
                                          <?php } else{ ?>
                                            <a href="<?php echo base_url('Login/user_loin');?>" 
                                              class="mb-link-files book-hover-download" name="download">Download</a>
                                            
                                          <?php } ?>
                                            <!--<a href="##" class="book-hover-read">Read
                                              more</a>-->
                                          </div>
                                        </div>
                                      </article>
                                      </li>
                                     <?php } ?>
                                      
                                    </ul>
                                  </div>
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
        </section>
      </div>
    </div>
    <br/>
    <br/>

    <?php $this->load->view('layout/footer-menu'); ?>
    
    <div id="g_id_onload" data-client_id="973485009583-9dujf54qp7f4fi760fa1k9gj77eq77du.apps.googleusercontent.com"
      data-login_uri="https://manybooks.net/user/login/google?destination=/home">
    </div>
  </div>
  <script type="text/javascript">
    window.doorbellOptions = {
      id: '9242',
      appKey: 'RNPSNvWSz0fkZT27E475sxd5AGT4wCLgXiKqOHGNgsEsKvBPmPLAGGx2eNLpRHfD'
    };
    (function (w, d, t) {
      var hasLoaded = false;
      function l() { if (hasLoaded) { return; } hasLoaded = true; window.doorbellOptions.windowLoaded = true; var g = d.createElement(t); g.id = 'doorbellScript'; g.type = 'text/javascript'; g.async = true; g.src = 'https://embed.doorbell.io/button/' + window.doorbellOptions['id'] + '?t=' + (new Date().getTime()); (d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(g); }
      if (w.attachEvent) { w.attachEvent('onload', l); } else if (w.addEventListener) { w.addEventListener('load', l, false); } else { l(); }
      if (d.readyState == 'complete') { l(); }
    }(window, document, 'script'));
  </script>
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
  <script type="application/json"
    data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"","currentPath":"home","currentPathIsAdmin":false,"isFront":true,"currentLanguage":"en"},"pluralDelimiter":"\u0003","suppressDeprecationErrors":true,"ajaxPageState":{"libraries":"bootstrap\/popover,bootstrap\/tooltip,comment\/drupal.comment-by-viewer,core\/drupal.dialog.ajax,core\/html5shiv,google_analytics\/google_analytics,lazy\/lazy,mnybks\/global-styling,mnybks\/one-tap,mnybks\/read-more,mnybks_book\/mnybks-book.mnybks-book-hover,mnybks_owl\/mnybks-owl.custom,mnybks_owl\/mnybks-owl.slider,mnybks_user\/mnybks-user.page_leave_popup,paragraphs\/drupal.paragraphs.unpublished,system\/base,views\/views.ajax,views\/views.module","theme":"mnybks","theme_token":null},"ajaxTrustedUrl":{"\/search-book":true},"google_analytics":{"account":"UA-28198269-1","trackOutbound":true,"trackMailto":true,"trackDownload":true,"trackDownloadExtensions":"7z|aac|arc|arj|asf|asx|avi|bin|csv|doc(x|m)?|dot(x|m)?|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt(x|m)?|pot(x|m)?|pps(x|m)?|ppam|sld(x|m)?|thmx|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd|xls(x|m|b)?|xlt(x|m)|xlam|xml|z|zip"},"lazy":{"lazysizes":{"lazyClass":"lazyload","loadedClass":"lazyloaded","loadingClass":"lazyloading","preloadClass":"lazypreload","errorClass":"lazyerror","autosizesClass":"lazyautosizes","srcAttr":"data-src","srcsetAttr":"data-srcset","sizesAttr":"data-sizes","minSize":40,"customMedia":[],"init":true,"expFactor":1.5,"hFac":0.80000000000000004,"loadMode":2,"loadHidden":true,"ricTimeout":0,"throttleDelay":125,"plugins":[]},"placeholderSrc":"","preferNative":false},"bootstrap":{"forms_has_error_value_toggle":1,"modal_animation":1,"modal_backdrop":"true","modal_focus_input":1,"modal_keyboard":1,"modal_select_text":1,"modal_show":1,"modal_size":"","popover_enabled":1,"popover_animation":1,"popover_auto_close":1,"popover_container":"body","popover_content":"","popover_delay":"0","popover_html":0,"popover_placement":"right","popover_selector":"","popover_title":"","popover_trigger":"click","tooltip_enabled":1,"tooltip_animation":1,"tooltip_container":"body","tooltip_delay":"0","tooltip_html":0,"tooltip_placement":"auto left","tooltip_selector":"","tooltip_trigger":"hover"},"basePath":"modules\/contrib\/vote_up_down","views":{"ajax_path":"\/views\/ajax","ajaxViews":{"views_dom_id:fc9f2ae10177b63e26ab7004eca19d6c6551bfd6d140085a0f763cb251bdeb8b":{"view_name":"author_of_the_day","view_display_id":"daily_author_block","view_args":"","view_path":"\/home","view_base_path":null,"view_dom_id":"fc9f2ae10177b63e26ab7004eca19d6c6551bfd6d140085a0f763cb251bdeb8b","pager_element":0},"views_dom_id:96890f15f5c366fe93723d93e1dcbe28afaf1f98d6e612faa54a5f9142a066b9":{"view_name":"comments_recent","view_display_id":"block_recent_answers","view_args":"","view_path":"\/home","view_base_path":null,"view_dom_id":"96890f15f5c366fe93723d93e1dcbe28afaf1f98d6e612faa54a5f9142a066b9","pager_element":0},"views_dom_id:9f8429f9748871c01c1a040a20f4e80cb851fecc218d3d8046f95b3d79950432":{"view_name":"books","view_display_id":"block_popular_classics","view_args":"","view_path":"\/home","view_base_path":"app\/block\/editors-choice","view_dom_id":"9f8429f9748871c01c1a040a20f4e80cb851fecc218d3d8046f95b3d79950432","pager_element":0},"views_dom_id:9a267b2e7005ad8c422499e950595b1f81b5a568f7897b54459b0070f88f0c82":{"view_name":"aggregator_rss_feed","view_display_id":"todays_books_feed_block","view_args":"","view_path":"\/home","view_base_path":"aggregator\/rss","view_dom_id":"9a267b2e7005ad8c422499e950595b1f81b5a568f7897b54459b0070f88f0c82","pager_element":0}}},"mnybksOwl":{".js-view-dom-id-97e13460f6e6a15cdfce8a615fa3355b10767004c41b48c289a58031c34494a6 .view-content":{"0":{"items":"1"},"700":{"items":"2"}},".js-view-dom-id-9a267b2e7005ad8c422499e950595b1f81b5a568f7897b54459b0070f88f0c82 .view-content":{"0":{"items":"1"},"320":{"items":"2"},"650":{"items":"3"},"820":{"items":"4"},"990":{"items":"5"},"1200":{"items":"6"}},".js-view-dom-id-d20242c584cbcc67a091d3c01b6a41f6b2d76d30218fe28443e5585e7af400b3 .view-content":{"0":{"items":"1"},"320":{"items":"2"},"650":{"items":"3"},"820":{"items":"4"},"990":{"items":"5"},"1200":{"items":"6"}}},"bookHover":{"baseUrl":"https:\/\/manybooks.net"},"user":{"uid":0,"permissionsHash":"3bdd8b0cf2587b28848dc223e767135d9aebd1114950a7937154830d53c542a0"}}</script>
  <script src="<?php echo base_url('assets/web/js/js_11wrHHP4tLXQw6yRAVdHGk2pMox-vnVTPAw8PXGs-2Q.js');?>"></script>
  <script src="<?php echo base_url('assets/web/js/js_3QlX-OTQhaVhOqV6ZcgoXDqENm9_HBN2OquRFN9wT9w.js');?>"></script>
  <script src="<?php echo base_url('assets/web/js/js_kPH6jcv0JozT_uLrF1gFAkFDishBcROs41t8fh2t16M.js');?>"></script>
  <script src="<?php echo base_url('assets/web/ js/js_aKtB_Vb0sTODX15U1Nk8Ycr5w7B99tZt-mE6stg93WQ.js');?>"></script>
 
  
</body>

<!-- Mirrored from manybooks.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Nov 2021 18:53:01 GMT -->

</html>