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
              <h1>Pricing</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Banner End ====== -->


    <!-- ====== Pricing Start ====== -->
    <section id="pricing" class="ud-pricing">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-section-title mx-auto text-center">
              <span>Pricing</span>
              <h2>Our Pricing Plans</h2>
              <p>
                We offer free and paid plans, so you can choose exactly what you need,
                and you can upgrade anytime.
              </p>
            </div>
          </div>
        </div>

        <div class="row g-0 align-items-center justify-content-center">
          <div class="col-lg-4 col-md-6 col-sm-10">
            <div
              class="ud-single-pricing first-item wow fadeInUp"
              data-wow-delay=".15s"
            >
              <div class="ud-pricing-header">
                <h3>STARTING FROM</h3>
                <h4>$ 0.00/mo</h4>
              </div>
              <div class="ud-pricing-body">
                <ul>
                  <li>Personalized Advice</li>
                  <li>Peer Support Networks</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-10">
            <div
              class="ud-single-pricing active wow fadeInUp"
              data-wow-delay=".1s"
            >
              <span class="ud-popular-tag">POPULAR</span>
              <div class="ud-pricing-header">
                <h3>STARTING FROM</h3>
                <h4>$ 9.99/mo</h4>
              </div>
              <div class="ud-pricing-body">
                <ul>
                  <li>Personalized Advice</li>
                  <li>Peer Support Networks</li>
                  <li>Premium Advice and Therapy</li>
                  <li>Discounts on Partnered Services</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Pricing End ====== -->

    <?= $this->endSection() ?>

<?= $this->section('javascript') ?>
 
 <?= $this->endSection() ?>