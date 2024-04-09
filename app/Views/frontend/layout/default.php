
<!-- =========

	Template Name: Play
	Author: UIdeck
	Author URI: https://uideck.com/
	Support: https://uideck.com/support/
	Version: 1.1

========== -->

<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from www.microwellness.me/about by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Feb 2024 13:37:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= ucfirst(@$page_title); ?> | Mental Wellness in Your Pocket</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?= base_url('public/'); ?>assets/images/favicon.svg" type="image/svg" />

    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href="<?= base_url('public/'); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url('public/'); ?>assets/css/animate.css" />
    <link rel="stylesheet" href="<?= base_url('public/'); ?>assets/css/lineicons.css" />
    <link rel="stylesheet" href="<?= base_url('public/'); ?>assets/css/ud-styles.css" />
    <?= $this->renderSection('head') ?>
    <style>
      label.error{
        color:red;
      }
      </style>
      <script>
        var SITE_URL ="<?= site_url();?>";
        </script>
  </head>
  <body>
    <!-- ====== Header Start ====== -->
    <header class="ud-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class='navbar-brand' href='<?= site_url('/'); ?>index'>
                <img src="<?= base_url('public/'); ?>assets/images/logo/logo.svg" alt="Logo1"/>
              </a>
              <button class="navbar-toggler">
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
              </button>

              <div class="navbar-collapse">
                <ul id="nav" class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class='ud-menu-scroll' href='<?= site_url('/'); ?>index#home'>Home</a>
                  </li>
                  <li class="nav-item">
                    <a href='<?= site_url('/'); ?>about'>About</a>
                  </li>
                  <li class="nav-item">
                    <a class='ud-menu-scroll' href='<?= site_url('/'); ?>testimonials'>Testimonials</a>
                  </li>
                  <li class="nav-item">
                    <a class='ud-menu-scroll' href='<?= site_url('/'); ?>pricing'>Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class='ud-menu-scroll' href='<?= site_url('/'); ?>index#contact'>Contact</a>
                  </li>
                  <li class="nav-item">
                    <a href='<?= site_url('/'); ?>blog'>Blogs</a>
                  </li>
                  <?php if(session()->get('user_id')): ?>
                  <li class="nav-item">
                    <a href='<?= site_url('user/quiz'); ?>'>Quiz</a>
                  </li>
                  <li class="nav-item">
                    <a href='<?= site_url('/logout'); ?>'>Logout</a>
                  </li>
                  <?php else: ?>
                    <li class="nav-item">
                    <a href='<?= site_url('/login'); ?>'>Sign In</a>
                  </li>
                  <?php endif; ?>

                  <!-- <li class="nav-item">
                    <a href='<?= site_url('admin/login'); ?>'>Admin</a>
                  </li> -->
                </ul>
              </div>

              <!-- Sign In and Sign Up -->
              <!-- <div class="navbar-btn d-none d-sm-inline-block">
                <a href="login" class="ud-main-btn ud-login-btn">
                  Sign In
                </a>
                <a class="ud-main-btn ud-white-btn" href="javascript:void(0)">
                  Sign Up
                </a>
              </div> -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ====== Header End ====== -->
    <?php if (session()->has('message')): ?>
    <div class="alert alert-<?= session('status') ?>">
        <?= session('message') ?>
    </div>
<?php endif; ?>
    <?= $this->renderSection('content') ?>


    <!-- ====== Footer Start ====== -->
    <footer class="ud-footer wow fadeInUp" data-wow-delay=".15s">
      <div class="shape shape-1">
        <img src="<?= base_url('public/'); ?>assets/images/footer/shape-1.svg" alt="shape" />
      </div>
      <div class="shape shape-2">
        <img src="<?= base_url('public/'); ?>assets/images/footer/shape-2.svg" alt="shape" />
      </div>
      <div class="shape shape-3">
        <img src="<?= base_url('public/'); ?>assets/images/footer/shape-3.svg" alt="shape" />
      </div>
      <div class="ud-footer-widgets">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="ud-widget">
                <a class='ud-footer-logo' href='<?= site_url('/'); ?>index'>
                  <img src="<?= base_url('public/'); ?>assets/images/logo/logo.svg" alt="logo" />
                </a>
                <p class="ud-widget-desc">
                  We strive to create the best experiences.
                </p>
                <ul class="ud-widget-socials">
                  <li>
                    <a href="https://instagram.com/microwellness.mentalhealth">
                      <i class="lni lni-instagram-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/company/microwellness">
                      <i class="lni lni-linkedin-original"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="ud-widget mw-widget">
                <ul class="ud-widget-socials">
                  <li class="ud-widget-desc mw-desc">
                    <i class="lni lni-map-marker"></i>
                    185, The West Mall, Suite 905, Etobicoke, ON M9C 5L5
                  </li>
                </ul>
              </div>
              <div class="ud-widget mw-widget">
                <ul class="ud-widget-socials">
                  <li class="ud-widget-desc mw-desc">
                    <i class="lni lni-envelope"></i>
                    info@microwellness.me
                  </li>
                </ul>
              </div>
              <div class="ud-widget mw-widget">
                <ul class="ud-widget-socials">
                  <li class="ud-widget-desc mw-desc">
                    <i class="lni lni-phone"></i>
                    +1 (236) 304-1583
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="ud-widget mw-widget">
                <ul class="ud-widget-socials">
                  <li class="ud-widget-desc mw-desc">
                    <a href='<?= site_url('/'); ?>index#home'>Home</a>
                  </li>
                </ul>
              </div>
              <div class="ud-widget mw-widget">
                <ul class="ud-widget-socials">
                  <li class="ud-widget-desc mw-desc">
                    <a href='<?= site_url('/'); ?>about'>About Us</a>
                  </li>
                </ul>
              </div>
              <div class="ud-widget mw-widget">
                <ul class="ud-widget-socials">
                  <li class="ud-widget-desc mw-desc">
                    <a href='<?= site_url('/'); ?>testimonials'>Testimonials</a>
                  </li>
                </ul>
              </div>
              <div class="ud-widget mw-widget">
                <ul class="ud-widget-socials">
                  <li class="ud-widget-desc mw-desc">
                    <a href='<?= site_url('/'); ?>pricing'>Pricing</a>
                  </li>
                </ul>
              </div>
              <div class="ud-widget mw-widget">
                <ul class="ud-widget-socials">
                  <li class="ud-widget-desc mw-desc">
                    <a href='<?= site_url('/'); ?>blog'>Blogs</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ud-footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="ud-footer-bottom-left">
                <a href='<?= site_url('/'); ?>terms-and-conditions' rel='nofollow'>
                  Terms and Conditions
                </a>
                <a href='<?= site_url('/'); ?>privacy-policy' rel='nofollow'>
                  Privacy Policy
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <p class="ud-footer-bottom-right">

              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- ====== Footer End ====== -->


    <!-- ====== Back To Top Start ====== -->
    <a href="javascript:void(0)" class="back-to-top">
      <i class="lni lni-chevron-up"> </i>
    </a>
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="<?= base_url('public/'); ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('public/'); ?>assets/js/wow.min.js"></script>
    <script src="<?= base_url('public/'); ?>assets/js/main.js"></script>
    <?= $this->renderSection('javascript') ?>
  </body>

<!-- Mirrored from www.microwellness.me/about by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Feb 2024 13:37:14 GMT -->
</html>
