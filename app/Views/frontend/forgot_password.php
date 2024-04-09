<?php 
/**
 * @var CodeIgniter\View\View $this
*/
?>
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
              <h1>Forget Password</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Banner End ====== -->

    <div class="container m-4">
   <form id="form" method ="post" action="<?= base_url("/forgotPassword")?>" class="m-4">
       <div class="main-section-email">
             <div class="logo-section-email">
           
                <div class="text-email">
                  <h4>Enter Your Email</h4>
                  <hr style="max-width: 40%;margin: 0px auto; margin-top: 20px;border:1px solid">
                </div>
                <div class="form-section-email">
                   
                    <div id="Enter-email-email">
                        <input type="text" id="phone" name="email" placeholder=" Email" class="form-control">
                       
                        <span id="valid-msg" class="hide"></span>
                       <span id="error-msg" class="hide"></span>
                       </div>
                </div>
             </div>
       </div>
       <div class="email-btn">
      <button type="submit" class="btn btn-primary">SUBMIT</button>
     </div>
</form>
    </div>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
         
<script>

   $(document).ready(function(){
      
   $("#form").validate({
   rules:{ 
      phone: {
            required: true,
         },
         
      },
   messages :{
      phone: {
            'required': "Required",
         },
        },    
   submitHandler: function(form) {
     form.submit();
   }
   
   });
   });
   </script>

</script>
   <script src="<?= base_url('assets') ?>/intl-tel-input/build/js/intlTelInput.js"></script>
   <script>
      var input = document.querySelector("#phone")
      errorMsg = document.querySelector("#error-msg"),
      validMsg = document.querySelector("#valid-msg");
      var errorMap = ["Invalid number","Invalid Country code","Too short","Invalid Number"];
      var intl = window.intlTelInput(input,{
         initialCountry: "us",
         geoIpLookup : function(success,failure){
            jQuery_2_0_3.get("https://ipinfo.io",function() {}, "jsonp").always(function(resp){
               var countryCode = (resp && resp.country) ? resp.country :"";
               success(countryCode);
            });
         },
         utilsScript: "<?= base_url('assets') ?>/intl-tel-input/build/js/utils.js"
      });
      var reset = function(){
         input.classList.remove("error");
         errorMsg.innerHTML = "";
         errorMsg.classList.add("hide");
         validMsg.classList.add("hide");
      };
      input.addEventListener('blur', function() {
  reset();
  if (input.value.trim()) {
    if (intl.isValidNumber()) {
      validMsg.classList.remove("hide");
    } else {
      input.classList.add("error");
      var errorCode = intl.getValidationError();
      errorMsg.innerHTML = errorMap[errorCode];
      errorMsg.classList.remove("hide");
    }
  }
});
input.addEventListener('change', reset);
input.addEventListener('keyup', reset);
   </script>

<?= $this->endSection() ?>