<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav">
    <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i class="fa fa-bars"></i></button>
        <div class="navbar-header">
            <a class="navbar-brand" href="/user"><img src="<?= base_url('assets'); ?>/assets_inti/img/Logo-Sipuji-White.png" class="logo logo-display" alt=""><img src="<?= base_url('assets'); ?>/assets_inti/img/Logo-Sipuji-White.png" class="logo logo-scrolled" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right p-4" data-in="fadeInDown" data-out="fadeOutUp">
                <li class="left-br"><a href="<?= Base_url('/user/login'); ?>" class="signin">Login</a></li>
            </ul>

        </div>
    </div>
</nav>
<div class="clearfix"></div>
<section class="slide-banner scroll-con-sec hero-section" data-scrollax-parent="true" id="sec1">
    <div class="slideshow-container">
        <div class="slideshow-item">
            <div class="bg" data-bg="<?= base_url('assets'); ?>/assets_inti/img/slider-4.jpg"></div>
        </div>
        <div class="slideshow-item">
            <div class="bg" data-bg="<?= base_url('assets'); ?>/assets_inti/img/banner-6.jpg"></div>
        </div>
        <div class="slideshow-item">
            <div class="bg" data-bg="<?= base_url('assets'); ?>/assets_inti/img/banner-5.jpg"></div>
        </div>
        <div class="slideshow-item">
            <div class="bg" data-bg="<?= base_url('assets'); ?>/assets_inti/img/banner-2.jpg"></div>
        </div>
    </div>
    <div class="overlay"></div>
    <div class="hero-section-wrap fl-wrap">
        <div class="container">
            <div class="intro-item fl-wrap">
                <div class="caption text-center cl-white mt-4">
                    <h2 style="visibility: hidden;">Sistem Pengajuan Judul Tesis</h2>
                    <p>Cari, apakah judul tesis yang ingin anda buat sudah terdaftar?</p>
                </div>
                <form action="" method="POST" class="form-horizontal">
                    <div class="col-md-10 no-padd form-custom">
                        <div class="input-group">
                            <input type="text" class="form-control br-1" placeholder="Ketikan Judul Tesis Yang Anda Cari.." name="keyword" autocomplete="off"> </div>
                    </div>
                    <div class="col-md-2 no-padd">
                        <div class="input-group">
                            <button type="submit" name="submit" class="btn btn-primary signin full-width"><span class="material-icons md-48">
                                    search
                                </span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!-- Hasil Pencarian -->
        <div class="container mt-4">
            <!--Browse Candidates -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">



                    <?php $i = 1 + (1 * ($currentPage - 1)); ?>
                    <?php foreach ($thesis as $t) : ?>



                        <!-- cek jika thesis terdaftar -->

                        <!-- end cek -->

                        <!-- Single Candidate List -->
                        <div class="candidate-list-layout">
                            <div class="cll-wrap">
                                <div class="cll-thumb">
                                    <!-- <a href="resume-detail.html"><img src="<?= base_url('assets'); ?>/assets_inti/img/hero1.jpg" class="img-responsive img-circle" alt="" /></a> -->
                                </div>
                                <div class="cll-caption">
                                    <h4><a href="resume-detail.html"><?= $t['mhs_name']; ?></a>
                                        <?php if ($t['mhs_thesis_registered'] == 1) : ?>
                                            <span><i class="ti-briefcase"></i><?= $t['mhs_thesis']; ?><i class="ti-check cl-success"></i></span>
                                        <?php elseif ($t['mhs_thesis_registered'] == 2) : ?>
                                            <span><i class="ti-briefcase"></i><?= $t['mhs_thesis']; ?><i class="ti-close cl-danger"></i></span>
                                        <?php else : ?>
                                            <span><i class="ti-briefcase"></i><?= $t['mhs_thesis']; ?><i class="ti-time"></i></span>
                                        <?php endif; ?>

                                    </h4>
                                    <ul>
                                        <li><i class="fa fa-graduation-cap"></i><?= $t['mhs_majors']; ?></li>
                                        <li><i class="ti-time "></i>Sunday 04 - June - 2020</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="cll-right">

                                <?php if ($t['mhs_thesis_registered'] == 1) : ?>
                                    <a class="btn theme-btn btn-shortlist success">Registered<i class="ti-check"></i></a>
                                <?php elseif ($t['mhs_thesis_registered'] == 2) : ?>
                                    <a class="btn theme-btn btn-shortlist danger"> Registered Failed<i class="ti-close"></i></a>
                                <?php else : ?>
                                    <span class="btn theme-btn btn-shortlist secondary">Nothing Apllied<i class="ti-time"></i></span>
                                <?php endif; ?>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <?= $pager->links('tbl_mhs', 'pager_thesis'); ?>
            <!--/.Browse Job-->


            <!-- <div class="row mrg-0">
                <ul class="pagination">
                    <li><a href="#"><i class="ti-arrow-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li>
                    <li><a href="#"><i class="ti-arrow-right"></i></a></li>
                </ul>
            </div> -->

        </div>
        <!-- End Hasil Pencarian -->
    </div>
</section>


<!-- ========== Begin: Brows job Category ===============  -->



<!-- ========== Begin: Brows job Category End ===============  -->
<div class="clearfix"></div>
<!-- ============================ Call To Action ================================== -->
<section class="theme-bg call-to-act-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="call-to-act">
                    <div class="call-to-act-head">
                        <h3>Ingin Mengajukan Judul Tesis?</h3>
                        <span>Silahkan Login Terlebih Dahulu.</span>
                    </div>
                    <a href="<?= base_url('/login'); ?>" class="btn btn-call-to-act">Login</a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- ============================ Call To Action End ================================== -->

<?= $this->endSection(); ?>