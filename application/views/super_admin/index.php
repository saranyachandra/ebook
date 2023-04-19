
<?php $this->load->view('layout/admin/admin_css'); ?>
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
					<div class="col-xl-8 col-xxl-8">
						<div class="row">
							<div class="col-xl-4 col-xxl-4 col-lg-6 col-sm-6">
								<div class="card overflow-hidden">
									<div class="card-body pb-0 px-4 pt-4">
										<div class="row">
											<div class="col">
												<h5 class="mb-1"><?php echo $book_count->total; ?></h5>
												<span class="text-success">Total Books</span>
											</div>
										</div>
									</div>
									<div class="chart-wrapper">
										<canvas id="areaChart_2" class="chartjs-render-monitor" height="90"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-xxl-4 col-lg-6 col-sm-6">
								<div class="card bg-success	overflow-hidden">
									<div class="card-body pb-0 px-4 pt-4">
										<div class="row">
											<div class="col">
												<h5 class="text-white mb-1"><?php echo $stu_count->total_stu; ?></h5>
												<span class="text-white">Total Student</span>
											</div>
										</div>
									</div>
									<div class="chart-wrapper" style="width:100%">
										<span class="peity-line" data-width="100%">6,2,8,4,3,8,4,3,6,5,9,2</span>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-xxl-4 col-lg-6 col-sm-6">
								<div class="card bg-primary overflow-hidden">
									<div class="card-body pb-0 px-4 pt-4">
										<div class="row">
											<div class="col text-white">
												<h5 class="text-white mb-1"><?php echo $tech_count->total_tech; ?></h5>
												<span>Total Teacher</span>
											</div>
										</div>
									</div>
									<div class="chart-wrapper px-2">
										<canvas id="chart_widget_2" height="100"></canvas>
									</div>
								</div>
							</div>
							
						<div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="card-title">Recent Add Books </h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
										<table  id="table_view" class="table table-striped table-bordered">
                                        
                                        <thead>
                                            <tr>
                                                <th>S.No</th> 
                                                <th>Book Name</th>   
                                                <th>Type</th>                          
                                                <th>Author Name</th>                                               
                                                <th>Img</th>
                                            </tr>
                                        </thead>
                                            <tbody>     
                                            <?php 
                                                $i=1;
                                                foreach ($details as $detail) 
                                                {                                                
                                            ?>                                          
                                            <tr>                                               
                                                <td><?php echo $i; ?></td>                                                   
                                                <td><?php echo $detail->book_name; ?> </td>
                                                <td>  <?php echo $detail->type; ?>   </td>
                                                <td>  <?php echo $detail->author_name; ?>   </td>
                                                <td>                                              
                                                    <img style="width:100px; height: 100px;"  src="<?php echo base_url('assets/admin/uploads/ebook_thumb/').$detail->img?>" >
                                                </td>                                                                               
                                                                                          
                                                
                                            </tr> 
                                            <?php $i++; } ?>
                                              <!--   here end foreach   -->                            
                                           
                                        </tbody>
                                    </table>
										</div>
									</div>
									<div class="form-group text-center">
										<a href="<?php echo base_url('admin/book_details') ?>" class="btn btn-info"> View All</a>
									</div>
								</div>
							</div>
							
						
						</div>
					</div>
					<div class="col-xl-4 col-xxl-4 col-lg-12 col-md-12">
						<div class="card bg-primary text-white">
                            <div class="card-header pb-0 border-0">
                                <h4 class="card-title text-white">Top Performer</h4>
                            </div>
                            <div class="card-body"> 
                                <div class="widget-media">
                                    <ul class="timeline">
                                    	
                                        <li>
                                            <div class="timeline-panel">
												<div class="media mr-2">
													<img alt="image" width="50" src="<?php echo base_url('assets/admin/images/avatar/avatar.jpg');?>">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1 text-white" style="text-transform: capitalize;">
														John
													</h5>
													<small class="d-block">
													
													</small>
												</div>
												<div class="dropdown">
													<a class="btn btn-primary light sharp" href="#">View</a>				
												</div>
											</div>
                                        </li>
                                    	
                                       
                                        </li>
                                    </ul>
                                </div>
                            </div>
							<canvas id="lineChart_3Kk"></canvas> 							
                        </div>
						
						
					</div>
					
					
					<div class="col-xl-8 col-xxl-8 col-lg-12 col-md-12">
						<div id="user-activity" class="card">
							<div class="card-header border-0 pb-0 d-sm-flex d-block">
								<div>
									<h4 class="card-title">Report 2021</h4>
									
								</div>
								<div class="card-action">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#user" role="tab">
												Monthly
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#bounce" role="tab">
												Weekly
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#session-duration" role="tab">
												Today
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-body">
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="user" role="tabpanel">
										<canvas id="activity" class="chartjs"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
			   
			   <div class="col-xl-4 col-xxl-4 col-lg-6 col-md-6">
						<div class="card bg-info activity_overview">
                            <div class="card-header  border-0 pb-3 ">
                                <h4 class="card-title text-white">Activity</h4>
                            </div>
                            <div class="card-body pt-0">
								<div class="custom-tab-1">
                                    <ul class="nav nav-tabs mb-2">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#sale">Sale</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="#overview">Overview</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="sale">
                                            <canvas id="chart_widget_4"></canvas>
                                        </div>
										<div class="tab-pane fade " id="overview" role="tabpanel">
                                            <div class="pt-4 text-white">
                                                <h4 class="text-white">This is home title</h4>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                                </p>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                                </p>
                                            </div>
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
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
   
	<?php $this->load->view('layout/admin/admin_js'); ?>	
</body>

<!-- Mirrored from motaadmin.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 05:30:46 GMT -->
</html>