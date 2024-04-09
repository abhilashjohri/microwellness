<?= $this->extend('frontend/layout/default') ?>

<?= $this->section('head') ?>


 <?= $this->endSection() ?>
 <?= $this->section('content') ?>
   
   <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-banner-content">
              <h1>About Us</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== About Start ====== -->
    <section id="about" class="ud-about">
      <div class="container">
        <div class="ud-about-wrapper wow fadeInUp" data-wow-delay=".2s">
          <div class="ud-about-content-wrapper">
            <div class="ud-about-content">
              <span class="tag">About Us</span>
              <h2>Making a Difference.</h2>
              <p>
                MicroWellness.me is a cutting-edge smartphone app that aims to provide holistic and cost-effective mental wellness. MicroWellness gives guidance that is particularly personalized to the user, taking into account their mental wellness demands and the time they can commit to workouts on a daily basis, utilizing artificial intelligence to calibrate the personality factors of the user.
              </p>
            </div>
          </div>
          <div class="ud-about-image">
            <!-- <img src="https://cdn.thewirecutter.com/wp-content/media/2023/10/androidphones-2048px-4861.jpg?auto=webp&quality=75&width=1024" alt="about-image" /> -->
            <img src="<?= base_url('public/'); ?>assets/images/about/aboutMe.png" alt="about-image" />
          </div>
        </div>
      </div>
    </section>
    <!-- ====== About End ====== -->
    
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
 
 <?= $this->endSection() ?>