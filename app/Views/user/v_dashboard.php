<?= $this->extend("layout/template"); ?>

<?= $this->section('content'); ?>
		<!-- Start Navigation -->
		<nav class="navbar navbar-default navbar-fixed navbar-light white bootsnav">

			<div class="container">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
					<i class="fa fa-bars"></i>
				</button>
				<!-- Start Header Navigation -->
				<div class="navbar-header">
					<a class="navbar-brand" href="index.html">
						<img src="<?= base_url('assets'); ?>/assets_inti/img/Logo-Sipuji.png" class="logo logo-scrolled" alt="">
                    </a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					
					<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
						<li><a href="<?= base_url('/login'); ?>"><i class="fa fa-sign-in"></i>Log Out</a></li>
						<li class="left-br"><a href="javascript:void(0)" data-toggle="modal" data-target="#signup"
								class="signin">Post Thesis</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		<!-- End Navigation -->
		<div class="clearfix"></div>

		<!-- General Detail Start -->
		<section class="dashboard-wrap">
			<div class="container-fluid">
				<div class="row">

					<!-- Sidebar Wrap -->
					<div class="col-lg-3 col-md-4">
						<div class="side-dashboard">

							<div class="dashboard-avatar">

								<div class="dashboard-avatar-thumb">
									<img src="assets/img/can-2.png" class="img-avater" alt="" />
								</div>

								<div class="dashboard-avatar-text">
									<h4>Shaurya Preet</h4>
									<span>Zivara Technoloty</span>
								</div>

							</div>

							<div class="dashboard-menu">
								<ul>
									<li class="active"><a href="dashboard.html"><i
												class="ti-dashboard"></i>Dashboard</a></li>
									<li><a href="post-new-job.html"><i class="ti-ruler-pencil"></i>Post Thesis</a>
									</li>
									<li><a href="all-jobs.html"><i class="ti-briefcase"></i>Registered Thesis</a></li>
								
								
									<li><a href="myprofile.html"><i class="ti-id-badge"></i>Edit Profile</a></li>
									<li><a href="<?= base_url('/login'); ?>"><i class="ti-power-off"></i>Logout</a></li>
								</ul>
								<h4>User</h4>
								<ul>
									<li><a href="candidate-dashboard.html"><i class="ti-dashboard"></i>Candidate
											Dashboard</a></li>
									<li><a href="candidate-resume.html"><i class="ti-wallet"></i>My Resume</a></li>
									<li><a href="applied-jobs.html"><i class="ti-hand-point-right"></i>Applied Thesis</a>
									</li>
									<li><a href="saved-jobs.html"><i class="ti-heart"></i>Saved Thesis</a></li>
									<li><a href="alert-jobs.html"><i class="ti-bell"></i>Alert Thesis</a></li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Content Wrap -->
					<div class="col-lg-9 col-md-8">
						<div class="dashboard-body">
							<div class="dashboard-caption">

								<div class="dashboard-caption-header">
									<h4><i class="ti-settings"></i>Dashboard</h4>
								</div>

								<div class="dashboard-caption-wrap">

									<!-- Overview -->
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-12">
											<div class="dashboard-stat widget-1">
												<div class="dashboard-stat-content">
													<h4>0</h4> <span>Thesis Posted</span>
												</div>
												<div class="dashboard-stat-icon"><i class="ti-location-pin"></i></div>
											</div>
										</div>

										<div class="col-lg-3 col-md-6 col-sm-12">
											<div class="dashboard-stat widget-2">
												<div class="dashboard-stat-content">
													<h4>0</h4> <span>Thesis Pending</span>
												</div>
												<div class="dashboard-stat-icon"><i class="ti-layers"></i></div>
											</div>
										</div>

										<div class="col-lg-3 col-md-6 col-sm-12">
											<div class="dashboard-stat widget-3">
												<div class="dashboard-stat-content">
													<h4>712</h4> <span>Total Views</span>
												</div>
												<div class="dashboard-stat-icon"><i class="ti-pie-chart"></i></div>
											</div>
										</div>

										<div class="col-lg-3 col-md-6 col-sm-12">
											<div class="dashboard-stat widget-4">
												<div class="dashboard-stat-content">
													<h4>0</h4> <span>Thesis Failed</span>
												</div>
												<div class="dashboard-stat-icon"><i class="ti-bookmark"></i></div>
											</div>
										</div>
									</div>

									<!-- Notifications -->
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="dashboard-gravity-list with-icons">
												<h4>Recent Activities</h4>
												<ul>
													<li class="recent-success">
														<i class="dash-icon-box ti-check ic-success"></i> Your thesis <strong><a
																href="#">Sistem DSIT</a></strong> has been approved!
														<a href="#" class="close-list-item"><i
																class="fa fa-close"></i></a>
													</li>

													<li class="recent-primary">
														<i class="dash-icon-box fa fa-spinner"></i> Your thesis <strong><a
																href="#">Sistem DSIT</a></strong> in progress!
														<a href="#" class="close-list-item"><i
																class="fa fa-close"></i></a>
													</li>

													<li class="recent-danger">
														<i class="dash-icon-box ti-close"></i> Your thesis
														<strong><a href="#">Sistem DSIT</a></strong> was rejected!
														<a href="#" class="close-list-item"><i
																class="fa fa-close"></i></a>
													</li>

													<li>
														<i class="dash-icon-box ti-star"></i> Gracie Mahmood left a
														review <div class="numerical-rating mid" data-rating="3.8">
														</div> on <strong><a href="#">Sonal Cafe</a></strong>
														<a href="#" class="close-list-item"><i
																class="fa fa-close"></i></a>
													</li>

													<li>
														<i class="dash-icon-box ti-heart"></i> Your job <strong><a
																href="#">UI/UX Designer</a></strong> has been approved!
														<a href="#" class="close-list-item"><i
																class="fa fa-close"></i></a>
													</li>

													<li>
														<i class="dash-icon-box ti-heart"></i> Someone bookmarked your
														<strong><a href="#">PHP Developer</a></strong> job!
														<a href="#" class="close-list-item"><i
																class="fa fa-close"></i></a>
													</li>

													<li>
														<i class="dash-icon-box ti-star"></i> Your job <strong><a
																href="#">Software Developer</a></strong> expire soon!
														<a href="#" class="close-list-item"><i
																class="fa fa-close"></i></a>
													</li>
												</ul>
											</div>
										</div>

									
									</div>

								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
        <!-- General Detail End -->
        
        <?= $this->endSection(); ?>

	