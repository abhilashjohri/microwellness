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
              <h1>Testimonials</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== Testimonials Start ====== -->
    <section id="testimonials" class="ud-testimonials">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-section-title mx-auto text-center">
              <span>Testimonials</span>
              <h2>What our Customers Say</h2>
              <p>
                MicroWellness works.
              </p>
              <p>
                Hear it from the users themselves.
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div
              class="ud-single-testimonial wow fadeInUp"
              data-wow-delay=".1s"
            >
              <div class="ud-testimonial-ratings">
                <i class="lni lni-star-filled"></i>
                <i class="lni lni-star-filled"></i>
                <i class="lni lni-star-filled"></i>
                <i class="lni lni-star-filled"></i>
                <i class="lni lni-star-filled"></i>
              </div>
              <div class="ud-testimonial-content">
                <p>
                  "MicroWellness helps me plan out a daily routine that balances studying and leisure time and also provides me with a community of different high school students to talk to on a regular basis!"
                </p>
              </div>
              <div class="ud-testimonial-info">
                <div class="ud-testimonial-image">
                  <img
                    src="<?= base_url('public/'); ?>assets/images/testimonials/author-01.png"
                    alt="author"
                  />
                </div>
                <div class="ud-testimonial-meta">
                  <h4>Sarah Keller</h4>
                  <p>High School Student, age 18</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div
              class="ud-single-testimonial wow fadeInUp"
              data-wow-delay=".15s"
            >
              <div class="ud-testimonial-ratings">
                <i class="lni lni-star-filled"></i>
                <i class="lni lni-star-filled"></i>
                <i class="lni lni-star-filled"></i>
                <i class="lni lni-star-filled"></i>
                <i class="lni lni-star-filled"></i>
              </div>
              <div class="ud-testimonial-content">
                <p>
                  "I use the app to plan my meals, my daily routine, and often have calls with therapists, especially around midterm and final season!"
                </p>
              </div>
              <div class="ud-testimonial-info">
                <div class="ud-testimonial-image">
                  <img
                    src="<?= base_url('public/'); ?>assets/images/testimonials/author-02.png"
                    alt="author"
                  />
                </div>
                <div class="ud-testimonial-meta">
                  <h4>Raj Mehta</h4>
                  <p>University Student, age 21</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div
              class="ud-single-testimonial wow fadeInUp"
              data-wow-delay=".2s"
            >
              <div class="ud-testimonial-ratings">
                <i class="lni lni-star-filled"></i>
                <i class="lni lni-star-filled"></i>
                <i class="lni lni-star-filled"></i>
                <i class="lni lni-star-filled"></i>
                <i class="lni lni-star"></i>
              </div>
              <div class="ud-testimonial-content">
                <p>
                  "Long hours at work make it difficult for me to access regular therapy. The 20-minute sessions at flexible hours really help me as the therapist offers insightful advice but the session does not take a huge chunk of my day!"
                </p>
              </div>
              <div class="ud-testimonial-info">
                <div class="ud-testimonial-image">
                  <img
                    src="<?= base_url('public/'); ?>assets/images/testimonials/author-03.png"
                    alt="author"
                  />
                </div>
                <div class="ud-testimonial-meta">
                  <h4>Jessica Chiu</h4>
                  <p>Corporate Banking Analyst, age 25</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Testimonials End ====== -->

  
  
    <?= $this->endSection() ?>

<?= $this->section('javascript') ?>
 
 <?= $this->endSection() ?>