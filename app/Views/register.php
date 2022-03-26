<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SIMANIS | ITTelkom SBY</title>
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('favicon.ico'); ?>" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('/assets/startbootstrap-coming-soon-gh-pages/css/styles.css'); ?>" rel="stylesheet" />
    </head>
    <body class="login">
        <!-- Background Video-->
        <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="<?php echo base_url(); ?>/assets/startbootstrap-coming-soon-gh-pages/assets/mp4/bg.mp4" type="video/mp4" /></video>
        <!-- Masthead-->
        <div class="masthead">
            <div class="masthead-content text-white">
                <div class="container-fluid px-4 px-lg-0">
                    <tittle>SIMANIS</tittle>
                    <h1 class="fst-italic lh-1">Coming Soon</h1>
                    <p>Student Internship MANagement Information System</p>
                    
                       

                        <div class="row">
                            <div class="container-fluid px-4 px-lg-0">

                                <div class="col-5">
                                    <h2 class="card-header"><?=lang('Auth.register'); ?></h2>
                                    <div class="mb-3">

                                        <?= view('Myth\Auth\Views\_message_block'); ?>

                                        <form action="<?= route_to('Auth.register'); ?>" method="post">
                                            <?= csrf_field(); ?>

                                            <div class="form-group">
                                                <label for="email"><?=lang('Auth.email'); ?></label>
                                                <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif; ?>"
                                                    name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email'); ?>" value="<?= old('email'); ?>">
                                                <small id="emailHelp" class="form-text text-muted">Pastikan email anda valid</small>
                                            </div>

                                            <div class="form-group">
                                                <label for="nim_nip">NIM / NIP</label>
                                                <input type="text" class="form-control <?php if (session('errors.nim_nip')) : ?>is-invalid<?php endif; ?>" name="nim_nip" placeholder="NIM / NIP">
                                                    <small id="nimnipHelp" class="form-text text-muted">NIM (mahasiswa), NIP (dosen)</small>
                                            </div>

                                            <div class="form-group">
                                                <label for="username"><?=lang('Auth.username'); ?></label>
                                                <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif; ?>" name="username" placeholder="<?=lang('Auth.username'); ?>" value="<?= old('username'); ?>">
                                            </div>

                                            
                                            <div class="form-group">
                                                <label for="password"><?=lang('Auth.password'); ?></label>
                                                <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif; ?>" placeholder="<?=lang('Auth.password'); ?>" autocomplete="off">
                                            </div>

                                            <div class="form-group">
                                                <label for="pass_confirm"><?=lang('Auth.repeatPassword'); ?></label>
                                                <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif; ?>" placeholder="<?=lang('Auth.repeatPassword'); ?>" autocomplete="off">
                                            </div>

                                            <br>

                                            <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.register'); ?></button>
                                        </form>


                                        <hr>

                                        <p>Sudah punya akun? <a href="login">Login</a></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- Social Icons-->
        <!-- For more icon options, visit https://fontawesome.com/icons?d=gallery&p=2&s=brands-->
        <div class="social-icons">
            <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
                <a class="btn btn-dark m-3" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark m-3" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark m-3" href="#!"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url(); ?>/assets/startbootstrap-coming-soon-gh-pages/js/scripts.js"></script>
    </body>
</html>
