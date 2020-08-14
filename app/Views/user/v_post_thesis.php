<?= $this->extend('layout/template_admin'); ?>    

<?= $this->section('content-admin'); ?>
    
    <!-- Content Wrap -->
    <div class="col-lg-9 col-md-8">
							<div class="dashboard-body">
								<div class="dashboard-caption">
									
									<div class="dashboard-caption-header">
										<h4><i class="ti-briefcase"></i>Post Thesis</h4>
									</div>
									
									<div class="dashboard-caption-wrap">
										
										<!-- row -->
										<div class="row">
											<div class="col-md-12 col-sm-12">
												<div class="form-group">
													<h4>Curriculum Vitae & Cover Letter</h4>
												</div>	
											</div>
										</div>
										
										<!-- row -->
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Curriculum Vitae</label>
													<div class="input-group">
													  <div class="custom-file">
														<input type="file" class="custom-file-input">
														<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
													  </div>
													</div>
												</div>	
											</div>
											
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Cover Letter</label>
													<textarea class="form-control resume height-120" placeholder="Cover Letter"></textarea>
												</div>	
											</div>
											
										</div>
										
										<!-- row -->
										<div class="row mrg-top-30">
											<div class="col-md-12 col-sm-12">
												<div class="form-group">
													<h4>Working Preferences</h4>
												</div>	
											</div>
										</div>
										
										<!-- row -->
										<div class="row">
											<div class="col-lg-4 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Job Category*</label>
													<select id="jb-category" class="form-control">
														<option>Choose Category</option>
														<option>Accounting Assistant</option>
														<option>Arts, Design, Media</option>
														<option>Charity & Voluntary</option>
														<option>Education & Coachs</option>
														<option>Finance And Business</option>
														<option>IT & Computer</option>
														<option>Banking</option>
													</select>
												</div>	
											</div>
											
											<div class="col-lg-4 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Job Type*</label>
													<select id="jb-type" class="form-control">
														<option>Job Type</option>
														<option>Contract</option>
														<option>Full-Time</option>
														<option>Part-time</option>
														<option>Temporary</option>
														<option>Freelancer</option>
													</select>
												</div>	
											</div>
											
											<div class="col-lg-4 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Job Level*</label>
													<select id="jb-level" class="form-control">
														<option>Job Level</option>
														<option>Junior</option>
														<option>Manager</option>
														<option>Senior</option>
													</select>
												</div>	
											</div>
											
										</div>
										
										<!-- row -->
										<div class="row">
											
											<div class="col-lg-8 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Language</label>
													<select class="language form-control" name="skills[]" multiple="multiple">
														<option>Afrikanns</option>
														<option>Albanian</option>
														<option>English</option>
														<option>Estonian</option>
														<option>Georgian</option>
														<option>French</option>
														<option>German</option>
													</select>
												</div>	
											</div>
												
											<div class="col-lg-4 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Salary From</label>
													<input type="text" class="form-control" placeholder="Enter Salary From">
												</div>	
											</div>
											
										</div>
										
										<!-- row -->
										<div class="row">
											
											<div class="col-lg-8 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Skills</label>
													<select class="multiple-skill form-control" name="skills[]" multiple="multiple">
														<option>HTML5</option>
														<option>Css3</option>
														<option>Photoshop</option>
														<option>Php</option>
														<option>Wordpress</option>
														<option>Bootstrap</option>
														<option>Magento</option>
													</select>
												</div>	
											</div>
												
											<div class="col-lg-4 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Experience</label>
													<input type="text" class="form-control" placeholder="Enter Experience">
												</div>	
											</div>
											
										</div>
										
										<!-- Row Experience -->
										<div class="row mrg-top-30">
											<div class="col-md-12 col-sm-12">
												<div class="form-group">
													<h4>Experience</h4>
												</div>	
											</div>
										</div>
										
										<!-- row -->
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="form-group">
													<label>Title</label>
													<input type="text" class="form-control">
												</div>	
											</div>
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="form-group">
													<label>Company Name</label>
													<input type="text" class="form-control">
												</div>	
											</div>
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="form-group">
													<label>DATE IN - DATE OUT</label>
													<input type="text" class="form-control">
												</div>	
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Description</label>
													<textarea class="form-control height-140"></textarea>
												</div>	
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12">
												<a href="#" class="btn add-clone">+ Add more</a>
											</div>
										</div>
										
										<!-- Row Educations -->
										<div class="row mrg-top-30">
											<div class="col-md-12 col-sm-12">
												<div class="form-group">
													<h4>Educations</h4>
												</div>	
											</div>
										</div>
										
										<!-- row -->
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="form-group">
													<label>Title</label>
													<input type="text" class="form-control">
												</div>	
											</div>
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="form-group">
													<label>School Name</label>
													<input type="text" class="form-control">
												</div>	
											</div>
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="form-group">
													<label>DATE IN - DATE OUT</label>
													<input type="text" class="form-control">
												</div>	
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Description</label>
													<textarea class="form-control height-140"></textarea>
												</div>	
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12">
												<a href="#" class="btn add-clone">+ Add more</a>
											</div>
										</div>
										
										<!-- Row Skills -->
										<div class="row mrg-top-30">
											<div class="col-md-12 col-sm-12">
												<div class="form-group">
													<h4>Skills</h4>
												</div>	
											</div>
										</div>
										
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Skill Title</label>
													<input type="text" class="form-control">
												</div>	
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Value (Percent)</label>
													<input type="text" class="form-control">
												</div>	
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12">
												<a href="#" class="btn add-clone">+ Add more</a>
											</div>
										</div>
										
										<!-- Row Honors & Awards -->
										<div class="row mrg-top-30">
											<div class="col-md-12 col-sm-12">
												<div class="form-group">
													<h4>Honors & Awards</h4>
												</div>	
											</div>
										</div>
										
										<!-- row -->
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Title</label>
													<input type="text" class="form-control">
												</div>	
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<label>Year</label>
													<input type="text" class="form-control">
												</div>	
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Description</label>
													<textarea class="form-control height-140"></textarea>
												</div>	
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12">
												<a href="#" class="btn add-clone">+ Add more</a>
											</div>
										</div>
										
										<!-- row -->
										<div class="row mrg-top-30">
											<div class="col-md-12 col-sm-12">
												<div class="form-group">
													<h4>Video & Demo Url</h4>
												</div>	
											</div>
										</div>
										
										<!-- row -->
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Video URL</label>
													<input type="text" class="form-control">
												</div>	
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Video URL</label>
													<input type="text" class="form-control">
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
												<div class="form-group text-center">
													<button type="submit" class="btn-savepreview"><i class="ti-angle-double-right"></i>Update Resume</button>
												</div>	
											</div>
										</div>
										
									</div>
									
								</div>
							</div>
                        </div>
                        <?= $this->endSection(); ?>