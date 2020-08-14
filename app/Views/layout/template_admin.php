<!doctype html>
<html lang="en">




<head>
    <title>SIPUJI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/assets_inti/plugins/css/plugins.css">
    <link href="<?= base_url('assets'); ?>/assets_inti/css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="<?= base_url('assets'); ?>/assets_inti/css/colors/green-style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>

<body>
    <div class="Loader"></div>
    <div class="wrapper">
	
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
            <li class="left-br"><a href="<?= base_url('/thesis'); ?>"
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
                                    <img src="<?= base_url('assets'); ?>/assets_inti/img/hero1.jpg" class="img-avater" alt="" />
								</div>
                                
								<div class="dashboard-avatar-text">
                                    <h4>Muhamad Faisal Ramdani</h4>
									<span>Fakultas Ilkom</span>
								</div>
                                
							</div>
                            
							<div class="dashboard-menu">
                                <h4>Student</h4>
                                <ul>
                                    <li class="active"><a href="<?= base_url('/dashboard'); ?>"><i
                                    class="ti-dashboard"></i>Dashboard</a></li>
									<li><a href="<?= base_url('/thesis'); ?>"><i class="ti-ruler-pencil"></i>Post Thesis</a>
                                </li>  
                                <li><a href="<?= base_url('/registered_thesis'); ?>"><i class="ti-briefcase"></i>Registered Thesis</a></li>
								
								
                                
                                
                                <li><a href="applied-jobs.html"><i class="ti-hand-point-right"></i>Applied Thesis</a>
                            </li>
                            <li><a href="saved-jobs.html"><i class="ti-heart"></i>Saved Thesis</a></li>
                            <li><a href="alert-jobs.html"><i class="ti-bell"></i>Notification Thesis</a></li>
</ul>
<ul>
                            <h4>User</h4>
                                <li><a href="<?= base_url('/profile'); ?>"><i class="ti-id-badge"></i>Edit Profile</a></li>
                                <li><a href="<?= base_url('/login'); ?>"><i class="ti-power-off"></i>Logout</a></li>
								</ul>
							</div>
						</div>
					</div>

                    <?= $this->renderSection('content-admin'); ?>
				

			
            </div>
</div>
		</section>
		<!-- General Detail End -->

	
        <!-- ============================ Before Footer ================================== -->
        <div class="before-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-6 hill">
                        <ul class="job stock-facts">
                            <li><span class="badge badge-dark">1000</span></br>
                                <p class="text-white my-2 lead font-weight-bold">
                                    Tesis
                                </p>
                            </li>
                            <li><span class="badge badge-dark">500</span></br>
                                <p class="text-white my-2 lead font-weight-bold">
                                    Pembimbing
                                </p>
                            </li>
                            <li><span class="badge badge-dark">2021</span></br>
                                <p class="text-white my-2 lead font-weight-bold">
                                    Pengajuan
                                </p>
                            </li>
                            <li><span class="badge badge-dark">7542</span></br>
                                <p class="text-white my-2 lead font-weight-bold">
                                    Disetuji
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- ============================ Before Footer ================================== -->

        <!-- ============================ Footer Start ================================== -->
        <footer class="dark-footer skin-dark-footer">
            <div>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-9 col-sm-6">
                            <div class="footer-widget">
                                <img src="<?= base_url('assets'); ?>/assets_inti/img/Logo-Sipuji-White.png" class="img-footer" alt="" />
                                <div class="footer-add">
                                    <p>Jl. Tol Ciawi No1, Ciawi-Bogor, Jawa Barat,</br> Indonesia.</p>

                                    <p><strong>Email:</strong></br><a href="mailto:" class="text-lowercase">adminsipuji@unida.ac.id</a></p>
                                    <p><strong>Call:</strong></br><a href="tel:+628211158028"></a>Faisal : 08211158028</p>
                                </div>

                            </div>
                        </div>


                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="widget-title">Download Apps</h4>
                                <a href="#" class="other-store-link">
                                    <div class="other-store-app">
                                        <div class="os-app-icon">
                                            <i class="ti-android theme-cl"></i>
                                        </div>
                                        <div class="os-app-caps">
                                            Google Play
                                            <span>Get It Now</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="other-store-link">
                                    <div class="other-store-app">
                                        <div class="os-app-icon">
                                            <i class="ti-apple theme-cl"></i>
                                        </div>
                                        <div class="os-app-caps">
                                            App Store
                                            <span>Now it Available</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-6 col-md-6">
                            <p class="mb-0">© 2020 SIPUJI . Designd By <a href="https://themezhub.com/">MuhamadFaisalRamdani</a> All Rights Reserved</p>
                        </div>

                        <div class="col-lg-6 col-md-6 text-right">
                            <ul class="footer-bottom-social">
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                                <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!-- ============================ Footer End ================================== -->

        <!-- Scripts
			================================================== -->
        <script type="text/javascript" src="<?= base_url('assets'); ?>/assets_inti/plugins/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets'); ?>/assets_inti/plugins/js/viewportchecker.js"></script>
        <script type="text/javascript" src="<?= base_url('assets'); ?>/assets_inti/plugins/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets'); ?>/assets_inti/plugins/js/bootsnav.js"></script>
        <script type="text/javascript" src="<?= base_url('assets'); ?>/assets_inti/plugins/js/select2.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets'); ?>/assets_inti/plugins/js/wysihtml5-0.3.0.js"></script>
        <script type="text/javascript" src="<?= base_url('assets'); ?>/assets_inti/plugins/js/bootstrap-wysihtml5.js"></script>
        <script type="text/javascript" src="<?= base_url('assets'); ?>/assets_inti/plugins/js/datedropper.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets'); ?>/assets_inti/plugins/js/dropzone.js"></script>
        <script type="text/javascript" src="<?= base_url('assets'); ?>/assets_inti/plugins/js/loader.js"></script>
        <script type="text/javascript" src="<?= base_url('assets'); ?>/assets_inti/plugins/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets'); ?>/assets_inti/plugins/js/slick.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets'); ?>/assets_inti/plugins/js/gmap3.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets'); ?>/assets_inti/plugins/js/jquery.easy-autocomplete.min.js"></script>
        <!-- Custom Js -->
        <script src="<?= base_url('assets'); ?>/assets_inti/js/custom.js"></script>
        <script type="text/javascript" src="<?= base_url('assets'); ?>/assets_inti/plugins/js/counterup.min.js"></script>
        <script src="<?= base_url('assets'); ?>/assets_inti/js/jQuery.style.switcher.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#styleOptions').styleSwitcher();
            });
        </script>
        <script>
            function openRightMenu() {
                document.getElementById("rightMenu").style.display = "block";
            }

            function closeRightMenu() {
                document.getElementById("rightMenu").style.display = "none";
            }
        </script>
    </div>


</body>



</html>