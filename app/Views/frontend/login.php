
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
              <h1>SIGN IN</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Banner End ====== -->
    
<div class="container m-4">
   <div class="Signup-main-section">
      <div class="Signup-main-text-section">
       
          <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
              <form  action="<?= site_url('/login/auth') ?>" method="post" id="Email-address" class="m-4">
              <h2 class="mb-3"> SIGN IN</h2>
              <div>
                <label for="Email" >Email address</label>
                <input type="text" id="email" name="email" class="form-control" value="<?= set_value('email') ?>">
                 <label class="error"> <?= \Config\Services::validation()->getError('email'); ?></label>
          </div>
          <div>
          
              <label for="Password" class="signin-pswd">Password</label>
              <input type="Password" id="password" name="password" class="form-control">
              
              </div>
            
               <!-- ========== Button section start here ========== -->
               <div class="signup-button mt-3">
             <button type="submit" class="btn btn-primary">Sign In</button>
            <a href="<?= site_url("/signup") ?>"><button type="button" class="btn btn-default">Sign Up</button></a>
               </div>
               </form>
               <div class="signup-text">
              <a href="<?= site_url("/forgotPassword") ?>">Forgot Password</a>
               </div>
          
   </div>
   
</div>
</div>



<?= $this->endSection() ?>

 <?= $this->section('javascript') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
 <script type="text/javascript">
   $(document).ready(function(){
   $("#Email-address").validate({
   rules:{
         email: {
           required: true,
           // Specify that email should be validated
           // by the built-in "email" rule
           email: true,
         },
         password: {
            required:true,
         },
      },
   messages :{
    email: "Required",
         password: "Required",
      },
   submitHandler: function(form) {
     form.submit();
   }
   });
   });
   </script>
<?= $this->endSection() ?>
