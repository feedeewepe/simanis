<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PROMISE | ITTelkom SBY</title>
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('favicon.png'); ?>" />
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
                    
                    <h1 class="fst-italic lh-1">Coming Soon</h1>
                    <span class="title">
                        <img src="<?php echo base_url('/assets/img/logo_simanis.png'); ?>" class="logo" alt="logo simanis"/>
                        SIMANIS
                    </span>  
                    <p>Student Internship MANagement Information System</p>
                    
                        <!-- <section class="login_content">
                            <form>
                            <div>
                                <input type="text" class="form-control" placeholder="Username" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Password" required="" />
                            </div>
                            <div>
                            <button type="button" class="btn btn-secondary" data-placement="bottom" title=""> Log in</button>
                                <a class="reset_pass" href="#">Lost your password?</a>
                            </div>

                            <div class="clearfix"></div>
                            </form>
                        </section> -->

                        <div class="">
                            <div class="col-5">
                                <p class="login-box-msg"><?=lang('Auth.loginTitle'); ?></p>
                                <?= view('Myth\Auth\Views\_message_block'); ?>
                                <form action="<?= route_to('Auth.login'); ?>" method="post">
                                <?= csrf_field(); ?>
                                <?php if ($config->validFields === ['email']) { ?>
                                <div class="mb-3">
                                    <input type="email" name="login"
                                    class="form-control <?= session('error.login') || session('errors.login') ? 'is-invalid' : ''; ?>"
                                    placeholder="<?=lang('Auth.email'); ?>" value="<?= old('login'); ?>" autocomplete="off">
                                    
                                    <div class="invalid-feedback">
                                    <?= session('errors.login'); ?>
                                    </div>
                                </div>
                                <?php } else { ?>
                                <div class="mb-3">
                                    <input type="text" name="login"
                                    class="form-control <?= session('error.login') || session('errors.login') ? 'is-invalid' : ''; ?>"
                                    placeholder="<?=lang('Auth.emailOrUsername'); ?>" value="<?= old('login'); ?>" autocomplete="off">
                                   
                                    <div class="invalid-feedback">
                                    <?= session('errors.login'); ?>
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="mb-3">
                                    <input type="password" name="password"
                                    class="form-control <?= session('errors.password') ? 'is-invalid' : ''; ?>"
                                    placeholder="<?=lang('Auth.password'); ?>">
                                    
                                    <div class="invalid-feedback">
                                    <?= session('errors.password'); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <?php if ($config->allowRemembering) { ?>
                                    <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" name="remember" id="remember" <?= old('remember') ? 'checked' : ''; ?> >
                                        <label for="remember">
                                        <?=lang('Auth.rememberMe'); ?>
                                        </label>
                                    </div>
                                    </div>
                                    <?php } ?>
                                    <!-- /.col -->
                                    <div class="col-8">
                                    <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.signIn'); ?></button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                </form>
                                
                                <?php if ($config->activeResetter != null) { ?>
                                <p class="mb-1">
                                <a href="forgot"><?=lang('Auth.forgotYourPassword'); ?></a>
                                </p>                                
                                <?php } ?>
                                <?php if ($config->allowRegistration) { ?>
                                <p class="mb-0">
                                <a href="register" class="text-center"><?=lang('Auth.needAnAccount'); ?></a>
                                </p>
                                <?php } ?>
                            </div>
                            <!-- /.login-card-body -->
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
