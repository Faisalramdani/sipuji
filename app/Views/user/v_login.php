<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Start Navigation -->
<nav class="navbar navbar-default navbar-fixed navbar-light white bootsnav">
    <div class="container-navbar">
        <a href="/" class="navbar-button"><span class="material-icons md-40">
                keyboard_backspace
            </span></a>
        <div class="container-content-navbar">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <!-- Start Header Navigation -->
            <div class="navbar-header text-center">
                <a class="navbar-brand" href="<?= base_url('/'); ?>">
                    <img src="<?= base_url('assets'); ?>/assets_inti/img/Logo-Sipuji.png" class="logo-login logo-scrolled" alt="">
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- End Navigation -->
<div class="clearfix"></div>

<!-- Title Header Start -->
<section class="inner-header-title" style="background-image:url(<?= base_url('assets'); ?>/assets_inti/img/bn2.jpg);">
    <div class="container">
        <h1>Login</h1>
    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->

<!-- Tab Section Start -->
<section class="tab-sec gray">
    <div class="container">
        <div class="col-lg-8 col-md-8 col-sm-12 col-lg-offset-2 col-md-offset-2 shadows pl-4">
            <div class="new-logwrap">

                <div class="form-group mt-4">
                    <label>NIM</label>
                    <div class="input-with-icon">
                        <input type="text" class="form-control" placeholder="Enter Your NIM">
                        <i class="theme-cl ti-user"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <div class="input-with-icon">
                        <input type="password" class="form-control" placeholder="Enter Your Password">
                        <i class="theme-cl ti-lock"></i>
                    </div>
                </div>

                <div class="form-groups">
                    <button type="submit" class="btn btn-primary theme-bg full-width mb-3">Login</button>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Tab section End -->

<?= $this->endSection(); ?>