<?= $this->extend("layout/template_admin"); ?>

<?= $this->section('content-admin'); ?>

<!-- Content Wrap -->
        <div class="col-lg-9 col-md-8">
							<div class="dashboard-body">
								<div class="dashboard-caption">
									
									<div class="dashboard-caption-header">
										<h4><i class="ti-id-badge"></i>My Profile</h4>
									</div>
									
									<div class="dashboard-caption-wrap">
										
										<!-- row -->
										<div class="row mrg-top-20">
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Fulle Name*</label>
													<input type="text" class="form-control" placeholder="Enter Name">
												</div>	
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Email</label>
													<input type="email" class="form-control" placeholder="designing@themezhub.com">
												</div>	
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Phone</label>
													<input type="text" class="form-control" placeholder="91 256 254 4578">
												</div>	
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Birthday</label>
													<input type="text" id="birthday" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
												</div>	
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Headlines*</label>
													<input type="text" class="form-control" placeholder="Enter Headlines">
												</div>	
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Gender</label>
													<select id="jb-level" class="form-control">
														<option>Gender</option>
														<option>Male</option>
														<option>Female</option>
														<option>Other</option>
													</select>
												</div>	
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>About Info</label>
													<textarea class="form-control textarea" placeholder="About Company"></textarea>
												</div>	
											</div>
										</div>
										
										<!-- row -->
										<div class="row mrg-top-30">
											<div class="col-md-12 col-sm-12">
												<div class="form-group">
													<h4>Job Loation & Map</h4>
												</div>	
											</div>
										</div>
										
										<!-- row -->
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Address*</label>
													<input type="text" class="form-control" placeholder="Ex. 502, Sector 20 C, Mohali">
												</div>	
											</div>
											
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781" data-mapTitle="Our Location"></div>
												</div>	
											</div>
											
										</div>
										
										<!-- row -->
										<div class="row mrg-top-30">
											<div class="col-md-12 col-sm-12">
												<div class="form-group">
													<h4>Social Accounts</h4>
												</div>	
											</div>
										</div>
											
										<!-- row -->
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Facebook</label>
													<input type="text" class="form-control" placeholder="Ex. 502, Sector 20 C, Mohali">
												</div>	
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Twitter</label>
													<input type="text" class="form-control">
												</div>	
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Google Plus</label>
													<input type="text" class="form-control">
												</div>	
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Youtube</label>
													<input type="text" class="form-control">
												</div>	
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Vimeo</label>
													<input type="text" class="form-control">
												</div>	
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Linkedin</label>
													<input type="text" class="form-control">
												</div>	
											</div>
										</div>
										
										
										<button type="submit" class="btn-savepreview"><i class="ti-angle-double-right"></i>Update Changes</button>
										
									</div>
									
								</div>
							</div>
                        </div>
                        
                        <?= $this->endSection(); ?>