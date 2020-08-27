<?= $this->extend("layout/template_admin"); ?>

<?= $this->section('content-admin'); ?>

<!-- Content Wrap -->
<div class="col-lg-9 col-md-8 col-sm-12">
	<div class="dashboard-body">
		<div class="dashboard-caption">

			<div class="dashboard-caption-header">
				<h4><i class="ti-briefcase"></i>Registered Thesis</h4>
			</div>

			<div class="dashboard-caption-wrap">

				<!-- row -->
				<div class="row">

					<div class="col-lg col-md col-sm-12 mt-4">

						<!--Filter -->
						<div class="row">
							<div class="col-md-12">
								<div class="filter-wraps">

									<div class="filter-wraps-one">
										<i class="ti-search"></i>
										<ul>
											<li><a href="#">Fakultas Ilkom<i class="ti-close"></i></a></li>
											<li><a href="#">Fakultas Pertanian<i class="ti-close"></i></a></li>
											<li><a href="#">Fakultas Ilmu Pangan Halal<i class="ti-close"></i></a></li>
										</ul>
									</div>
									<div class="filter-wraps-two">
										<h5><a href="#">RESET FILTERS</a></h5>
									</div>

								</div>
							</div>
						</div>
						<!--/.Filter -->

						<!--Browse Candidates -->
						<div class="row">
							<div class="col-md-12">

								<!-- Single Candidate List -->
								<div class="candidate-list-layout">
									<div class="cll-wrap">
										<div class="cll-thumb">
											<a href="resume-detail.html"><img src="<?= base_url('assets'); ?>/assets_inti/img/hero1.jpg" class="img-responsive img-circle" alt="" /></a>
										</div>
										<div class="cll-caption">
											<h4><a href="resume-detail.html">Muhamad Faisal Ramdani</a><span><i class="ti-briefcase"></i>Tata Cara Broadcasting</span></h4>
											<ul>
												<li><i class="fa fa-graduation-cap"></i>Fakultas Ilmu Komputer</li>
												<li><i class="ti-time "></i>Sunday 04 - June - 2020 | Registered <i class="ti-check cl-success"></i></li>
											</ul>
										</div>
									</div>

									<div class="cll-right">
										<a href="#" class="btn theme-btn btn-shortlist"><i class="ti-plus"></i>Shortlist</a>
									</div>
								</div>

								<!-- Single Candidate List -->
								<div class="candidate-list-layout">
									<div class="cll-wrap">
										<div class="cll-thumb">
											<a href="resume-detail.html"><img src="<?= base_url('assets'); ?>/assets_inti/img/can-1.png" class="img-responsive img-circle" alt="" /></a>
										</div>
										<div class="cll-caption">
											<h4><a href="resume-detail.html">Rafael Nuansa</a><span><i class="ti-briefcase"></i>Penanggunalangan Bencana Alam</span></h4>
											<ul>
												<li>
													<i class="fa fa-graduation-cap"></i>
													Fakultas Pertanian</li>
												<li><i class="ti-time "></i>Monday 04 - June - 2020 | Registered <i class="ti-check cl-success"></i></li>
											</ul>
										</div>
									</div>

									<div class="cll-right">
										<a href="#" class="btn theme-btn btn-shortlist"><i class="ti-plus"></i>Shortlist</a>
									</div>
								</div>

								<!-- Single Candidate List -->
								<div class="candidate-list-layout">
									<div class="cll-wrap">
										<div class="cll-thumb">
											<a href="resume-detail.html"><img src="<?= base_url('assets'); ?>/assets_inti/img/can-2.png" class="img-responsive img-circle" alt="" /></a>
										</div>
										<div class="cll-caption">
											<h4><a href="resume-detail.html">Ahmad Hasan Bashori</a><span><i class="ti-briefcase"></i>Pengelolaan Sistem Basis data</span></h4>
											<ul>
												<li><i class="fa fa-graduation-cap"></i>Fakultas Ilmu Komputer</li>
												<li><i class="ti-time "></i>Thursday 04 - June - 2020 | Registered <i class="ti-check cl-success"></i></li>
											</ul>
										</div>
									</div>

									<div class="cll-right">
										<a href="#" class="btn theme-btn btn-shortlist"><i class="ti-plus"></i>Shortlist</a>
									</div>
								</div>

								<!-- Single Candidate List -->
								<div class="candidate-list-layout">
									<div class="cll-wrap">
										<div class="cll-thumb">
											<a href="resume-detail.html"><img src="<?= base_url('assets'); ?>/assets_inti/img/can-4.png" class="img-responsive img-circle" alt="" /></a>
										</div>
										<div class="cll-caption">
											<h4><a href="resume-detail.html">Syukri</a><span><i class="ti-briefcase"></i>Mutu Dan Gizi Pangan</span></h4>
											<ul>
												<li><i class="fa fa-graduation-cap"></i>Fakultas Ilmu Pangan Halal</li>
												<li><i class="ti-time "></i>Weednesday 04 - June - 2020 | Registered <i class="ti-check cl-success"></i></li>
											</ul>
										</div>
									</div>

									<div class="cll-right">
										<a href="#" class="btn theme-btn btn-shortlist"><i class="ti-plus"></i>Shortlist</a>
									</div>
								</div>


							</div>
						</div>
						<!--/.Browse Job-->


						<div class="row mrg-0">
							<ul class="pagination">
								<li><a href="#"><i class="ti-arrow-left"></i></a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li>
								<li><a href="#"><i class="ti-arrow-right"></i></a></li>
							</ul>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
</div>


<?= $this->endSection(); ?>