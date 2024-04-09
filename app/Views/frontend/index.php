<?= $this->extend('frontend/layout/default') ?>

<?= $this->section('head') ?>


 <?= $this->endSection() ?>
 <?= $this->section('content') ?>

    <!-- ====== Header End ====== -->

    <!-- ====== Hero Start ====== -->
    <section class="ud-hero" id="home">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-hero-content wow fadeInUp" data-wow-delay=".2s">
              <p class="ud-hero-desc" style="font-size: 30px;">
                MENTAL WELLNESS IN YOUR POCKET
              </p>
              <h1 class="ud-hero-title">
                MicroWellness
              </h1>
              <p class="ud-hero-desc">
                Customized routines for your mental wellbeing.
              </p>
              <!-- <ul class="ud-hero-buttons">
                <li>
                  <button
                    target="_blank"
                    class="ud-main-btn ud-white-btn"
                    onClick="GooglePlayLink()"
                  >
                    <img src="./assets/images/playstore.png" style="width:30px;height:30px;margin-right: 10px;"/>
                    Play Store
                  </button>
                </li>
              </ul> -->
            </div>
            <div
              class="ud-hero-brands-wrapper wow fadeInUp"
              data-wow-delay=".3s"
            >
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Hero End ====== -->

    <!-- ====== New Landing Start ====== -->
    <section id="about" class="ud-about">
      <div class="container">
        <div class="ud-about-wrapper wow fadeInUp" data-wow-delay=".2s">
          <div class="ud-about-content-wrapper">
            <div class="ud-about-content">
              <h2>Wellness for every mind</h2>
              <p>
                Mental wellness is just as important as physical wellness. However, it is often neglected the most. No more - MicroWellness is an application which seeks to offer advice specifically catered to you so that you can be the best version of yourself
              </p>
              <p>
                Our goal is to make mental health services more affordable for youngsters and create awareness around mental health for all age groups.
              </p>
            </div>
          </div>
          <div class="ud-about-image">
            <img src="<?= base_url('public/'); ?>assets/images/landing.jpg" alt="landing-image" />
          </div>
        </div>
      </div>
    </section>
    <!-- ====== New Landing End ====== -->

    <!-- ====== Features Start ====== -->
    <section id="features" class="ud-features">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-section-title">
              <span>Features</span>
              <h2>Main Features</h2>
              <p>
                MicroWellness offers a holistic suite of mental health services all in one place.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-sm-6">
            <div class="ud-single-feature wow fadeInUp" data-wow-delay=".1s">
              <div class="ud-feature-icon">
                <i class="lni lni-layout"></i>
              </div>
              <div class="ud-feature-content">
                <h3 class="ud-feature-title">Customized advice</h3>
                <p class="ud-feature-desc">
                Advice tailored to you based on your personality.
                </p>
                <ul>
                  <li>* Exercise/Meditation </li>
                  <li>* Sample meal plan </li>
                  <li>* Suggesting podcast </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-sm-6">
            <div class="ud-single-feature wow fadeInUp" data-wow-delay=".15s">
              <div class="ud-feature-icon">
                <i class="lni lni-network"></i>
              </div>
              <div class="ud-feature-content">
                <h3 class="ud-feature-title">Support Networks</h3>
                <p class="ud-feature-desc">
                  Join peer support groups with like-minded individuals.
                </p>
                <ul>
                  <li>* Mutual support</li>
                  <li>* Shared experiences</li>
                  <li>* Anonymous participation</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-sm-6">
            <div class="ud-single-feature wow fadeInUp" data-wow-delay=".2s">
              <div class="ud-feature-icon">
                <i class="lni lni-consulting"></i>
              </div>
              <div class="ud-feature-content">
                <h3 class="ud-feature-title">Therapy Sessions</h3>
                <p class="ud-feature-desc">
                  Sessions with therapists at affordable prices.
                </p>
                <ul>
                  <li>* Teletherapy</li>
                  <li>* Affordable therapy</li>
                  <li>* Counsellors from diverse background</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top: 150px;">
          <div class="col-lg-12">
            <div class="ud-section-title">
              <span>Technology</span>
              <h2>How Does It Work?</h2>
              <p>
                MicroWellness leverages the science behind the
                <a href="https://www.verywellmind.com/the-big-five-personality-dimensions-2795422" style="color: #62c48d;">Big 5 Personality Traits</a>
                in order to customize your experience.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-sm-6">
            <div class="ud-single-feature wow fadeInUp" data-wow-delay=".1s">
              <h3 class="ud-feature-title">Step 1:</h3>
              <div class="ud-feature-icon mt-4">
                <i class="lni lni-support"></i>
              </div>
              <div class="ud-feature-content">
                <h3 class="ud-feature-title">Personality Questionnaire</h3>
                <p class="ud-feature-desc">
                  Personality influences coping strategies and response to mental wellness treatment.
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-sm-6">
            <div class="ud-single-feature wow fadeInUp" data-wow-delay=".15s">
              <h3 class="ud-feature-title">Step 2:</h3>
              <div class="ud-feature-icon mt-4">
                <i class="lni lni-move"></i>
              </div>
              <div class="ud-feature-content">
                <h3 class="ud-feature-title">Matching Algorithm</h3>
                <p class="ud-feature-desc">
                  Patent-pending algorithm finds advices that are best suited to you.
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-sm-6">
            <div class="ud-single-feature wow fadeInUp" data-wow-delay=".2s">
              <h3 class="ud-feature-title">Step 3:</h3>
              <div class="ud-feature-icon mt-4">
                <i class="lni lni-book"></i>
              </div>
              <div class="ud-feature-content">
                <h3 class="ud-feature-title">Advice Feed</h3>
                <p class="ud-feature-desc">
                  Customized advice sent directly to your feed to begin your mental wellness journey.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Features End ====== -->


    <!-- ====== Contact Start ====== -->
    <section id="contact" class="ud-contact">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-8 col-lg-7">
            <div class="ud-contact-content-wrapper">
              <div class="ud-contact-title">
                <span>CONTACT US</span>
                <h2>
                  Love to hear from you!
                </h2>
              </div>
              <div class="ud-contact-info-wrapper">
                <div class="ud-single-info">
                  <div class="ud-info-icon">
                    <i class="lni lni-map-marker"></i>
                  </div>
                  <div class="ud-info-meta">
                    <h5>Head Office</h5>
                    <p>Waterfront Business Centre, 145 Chadwick Ct #220, North Vancouver, BC V7M 3K2</p>
                  </div>
                </div>
                <div class="ud-single-info">
                  <div class="ud-info-icon">
                    <i class="lni lni-map-marker"></i>
                  </div>
                  <div class="ud-info-meta">
                    <h5>Branch Office</h5>
                    <p>185, The West Mall, Suite 905, Etobicoke, ON M9C 5L5</p>
                  </div>
                </div>
                <div class="ud-single-info">
                  <div class="ud-info-icon">
                    <i class="lni lni-envelope"></i>
                  </div>
                  <div class="ud-info-meta">
                    <h5>How Can We Help?</h5>
                    <p>info@microwellness.me</p>
                  </div>
                </div>
                <div class="ud-single-info">
                  <div class="ud-info-icon">
                    <i class="lni lni-phone"></i>
                  </div>
                  <div class="ud-info-meta">
                    <h5>Call Us</h5>
                    <p>+1 (236) 304-1583</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5">
            <div
              class="ud-contact-form-wrapper wow fadeInUp"
              data-wow-delay=".2s"
            >
              <h3 class="ud-contact-form-title">Send us a Message</h3>
              <div class="ud-contact-form">
                <div class="ud-form-group">
                  <label for="fullName">Full Name*</label>
                  <input
                    type="text"
                    name="fullName"
                    id="form-name"
                  />
                </div>
                <div class="ud-form-group">
                  <label for="message">Message*</label>
                  <textarea
                    name="message"
                    rows="1"
                    id="form-message"
                  ></textarea>
                </div>
                <div class="ud-form-group mb-0">
                  <button onclick="sendMail()" class="ud-main-btn">
                    Send Message
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Contact End ====== -->

  
    <?= $this->endSection() ?>

<?= $this->section('javascript') ?>
 
 <?= $this->endSection() ?>