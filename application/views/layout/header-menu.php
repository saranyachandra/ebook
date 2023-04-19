<header class="navbar navbar-default container-fluid" id="navbar" role="banner">
      <div class="navbar-region">
        <div class="container">
          <div class="region region-navigation">
            <section id="block-sitelogo" class="block block-mnybks-main block-site-logo-block clearfix">
              <div class="block-header">
              </div>
              <div class="block-content">
                <a href="<?php echo base_url('web/');?>"><img src="<?php echo base_url('assets/web/images/logo-dark.png');?>"
                    style="max-width: 60%; margin-top: 5%;" alt="Home" typeof="foaf:Image"
                    class="img-responsive" /></a>
              </div>
            </section>           
            <section id="block-discoverblock"
              class="mnybks-collapsible-block block block-mnybks-main block-discover-block clearfix">
              <div class="block-header">
                <h2 class="block-title">Books <i class="fa fa-caret-down"></i></h2>
              </div>
              <div class="block-content">
                <div class="nav-list form-group">
                  <ul>
                    <li><a href="##">Social Work</a></li>
                    <li><a href="##">Fisheries</a></li>
                    <li><a href="##">Self Improvement</a></li>
                    <li><a href="##">Electronics</a></li>
                    <li><a href="##">English</a></li>
                    <li><a href="##">Management</a></li>
                  </ul>
                </div>
              </div>
            </section>
            <section id="block-discoverblock"
              class="mnybks-collapsible-block block block-mnybks-main block-discover-block clearfix">
             
            </section>
            <section id="block-discoverblock"
              class="mnybks-collapsible-block block block-mnybks-main block-discover-block clearfix">
              <div class="block-header">
                <h2 class="block-title">Magazines</h2>
              </div>
            </section>
            <section id="block-discoverblock"
              class="mnybks-collapsible-block block block-mnybks-main block-discover-block clearfix">
              <div class="block-header">
                <h2 class="block-title">Journals</h2>
              </div>
            </section>
            <section class="book-search-form block block-mnybks-main block-book-search-form-block clearfix"
              data-drupal-selector="book-search-form" id="block-booksearchformblock">
              <div class="block-header">
              </div>
              <div class="block-content">
                <form action="<?php echo base_url('Web/search_ebook');?>" method="post" id="book-search-form"
                  accept-charset="UTF-8">
                  <div
                    class="form-item js-form-item form-type-textfield js-form-type-textfield form-item-search js-form-item-search form-no-label form-group">
                    <input data-drupal-selector="edit-search" class="form-text form-control" type="text"
                      id="edit-search" name="search" size="60" maxlength="246"
                      placeholder="Search by title, author or keyword" required="" />
                  </div>
                  <button data-drupal-selector="edit-submit" class="button js-form-submit form-submit btn-primary btn"
                    type="submit" id="edit-submit" name="op" value="Submit">Submit</button>
                </form>
              </div>
            </section>
            <section id="block-mbusermenu"
              class="mnybks-collapsible-block block block-mnybks-user block-mnybks-user-menu clearfix">
              <div class="block-header">
                <h2 class="block-title">Profile</h2>
              </div>
              <div class="block-content">
                <ul class="menu nav navbar-nav navbar-right">
                  <?php if($this->session->userdata('user_id') != null){ ?>
                  
                       <li>                  
                    <a href="#"  
                      ><?php echo $this->session->userdata('user_name');?></a>
                    </li>
                    <?php } else{  ?>  
                  <li>                  
                    <a href="<?php echo base_url('Login/user_loin');?>"  
                      >Login</a>
                    </li>
                  <?php } ?>
                  <?php if($this->session->userdata('user_id') != null){ ?>
                      <li><a href="<?php echo base_url('Login/user_logout');?>" 
                      >Logout</a></li>
                  <?php } else{  ?> 
                    <li>
                    <a href="<?php echo base_url('Login/user_register');?>"  
                      >Register</a>
                    </li>
                     <?php } ?>
                </ul>
                
              </div>
            </section>
          </div>
        </div>
      </div>
      <div class="sub-navbar-region hidden-xs">
        <div class="container">
        </div>
      </div>
    </header>