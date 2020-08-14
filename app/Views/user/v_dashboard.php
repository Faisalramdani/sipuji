<?= $this->extend("layout/template_admin"); ?>

<?= $this->section('content-admin'); ?>
	
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
												</ul>
											</div>
										</div>
									</div>

								</div>

							</div>
						</div>
					</div>

<?= $this->endSection(); ?>

	