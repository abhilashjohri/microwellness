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
              <h1>Signup</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Banner End ====== -->

   <div class="container m-4">
      <div class="Signin-main-section">
         <div class="Signin-main-text-section">
             
            <form id="form" action ="<?= site_url('/signup') ?>" method="post" class="m-4">
            <h2 class="mb-3"> SIGN UP </h2>
            <?php if (session()->has('errors')): ?>
        <div style="color: red;">
            <?= \Config\Services::validation()->listErrors(); ?>
        </div>
    <?php endif; ?>
    <?php if(session()->get('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
        </div>
    <?php endif; ?>
                   <div class="row">
                       <div id="First-name" style="margin-top: 10px;"  class="col-md-6"> 
                       <label for="fname">First Name*</label>
                         <input type="text" id="fname" name="fname" class="form-control" value="<?= set_value('fname') ?>" >
                        <label class="error"> <?= \Config\Services::validation()->getError('fname'); ?></label>
                     </div>

                     <div id="last-name" style="margin-top: 10px;"  class="col-md-6">
                       <label for="lname">Last Name*</label>
                       <input type="text" id="lname" name="lname" class="form-control" value="<?= set_value('lname') ?>" >
                       <label class="error"><?= \Config\Services::validation()->getError('lname'); ?></label>
                     </div>

                     <div id="Email-address" style="margin-top: 10px;"  class="col-md-6">
                         <label for="Email">Email*</label>
                         <input type="email" id="email" name="email" class="form-control"  value="<?= set_value('email') ?>">
                         <label class="error"> <?= \Config\Services::validation()->getError('email'); ?></label>
                     </div>
                        <!-- First name, last name, email id, age, gender, location, occupation -->
                        <div id="Email-address" style="margin-top: 10px;"  class="col-md-6"> 
                         <label for="Email">Age*</label>
                         <input type="number" id="age" name="age" class="form-control" value="<?= set_value('age') ?>" >
                         <label class="error"> <?= \Config\Services::validation()->getError('age'); ?></label>
                     </div>
                    
                     <div id="Email-address" style="margin-top: 10px;"  class="col-md-6">
                         <label for="location">Location*</label>
                         <input type="text" id="location" name="location" class="form-control"  value="<?= set_value('location') ?>">
                         <label class="error">  <?= \Config\Services::validation()->getError('location'); ?></label>
                     </div>
                     <div id="Email-address" style="margin-top: 10px;"  class="col-md-6">
                         <label for="Email">Gender*</label>
                         <select class="form-control" id="gender" name="gender">
                         <option value="">Select Gender</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="None">None</option>
                              
                           </select>
                           <label class="error">  <?= \Config\Services::validation()->getError('gender'); ?></label>
                     </div>
                     <!-- <div id="Phone-number" style="margin-top: 10px;"  class="col-md-6">
                       <label for="Number">Phone Number</label>
                       <input type="text" id="phone_number" name="phone_number" class="form-control"  value="<?= set_value('phone_number') ?>">
                       <label class="error"><?= \Config\Services::validation()->getError('phone_number'); ?></label>
                     </div> -->

                     <div id="Password" style="margin-top: 10px;"  class="col-md-6">
                         <label for="Password">Password*</label>
                         <input type="password" id="password" name="password" class="form-control" >
                         <label class="error">  <?= \Config\Services::validation()->getError('password'); ?></label>
                     </div>

                     <div id="confirm-Password" style="margin-top: 10px;"  class="col-md-6">
                       <label for="Password">Confirm Password*</label>
                       <input type="password" id="confpassword" name="confpassword" class="form-control" >
                       <label class="error"><?= \Config\Services::validation()->getError('confpassword'); ?></label>
                     </div>  
                 
                      
                        <!-- ========== Button section start here ========== -->
                        
                        <div class="signin-button mt-3">
                       <button type="submit" class="btn btn-primary">Sign Up</button>

                  
                    <a href="<?= base_url("/login")?>"><button type="button" class="btn btn-default"> Login</button></a>
                        </div>
                        </div>
                        </form>
                  <!-- ========== Button section start here ========== -->
                
      </div>
     
   </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
 <script type="text/javascript">
   $(document).ready(function(){
   $("#form").validate({
    rules:{ fname: {
        required: true,
        minlength: 3
      },
      lname :{
         required:true,
      },
      email: {
        required: true,
        email: true,
      },
      age: {
        required: true,
      
      },
      location: {
        required: true,
     
      },
      gender:{
         required : true
      },
      password: {
         required:true,
         StrongPassword:true
      },
      confpassword: {
         required:true,
          equalTo : "#password"
      },
},

messages :{
      fname: {
        required: "Required",
        minlength: "min 3 character>"
      },
      lname: "required",
      Email: "required",

      confpassword: {
      //   equalTo: "Not matching",
      },
   },
   submitHandler: function(form) {
     form.submit();
   }
   });
   });
   </script>
 <!-- <script src="validation.js"></script> -->
 <!-- <script type="text/javascript">
   var jQuery_2_0_3 = $.noConflict(true);
</script> -->
<script type="text/javascript">
// jQuery_2_0_3.validator.addMethod("StrongPassword",function(value){ 
      // return /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/.test(value);
   // }, "Password must contain UpperCase, LowerCase, Number/SpecialChar and min 8 Chars");
   // jQuery_2_0_3("#cPassword").keyup(function(){
   //           if (jQuery_2_0_3("#Password").val() != jQuery_2_0_3("#cPassword").val()) {
   //               jQuery_2_0_3("#msg").html("Password do not match").css("color","red");
   //           }else{
   //               jQuery_2_0_3("#msg").html("Password matched").css("color","green");
   //          }
      // });
// jQuery_2_0_3(document).ready(function(){
//    jQuery_2_0_3("#form").validate({
// rules:{ fname: {
//         required: true,
//         minlength: 3
//       },
//       lname :{
//          required:true,
//       },
//       Email: {
//         required: true,
//         email: true,
//       },
//       phone:{
//          required : true
//       },
//       Password: {
//          required:true,
//          StrongPassword:true
//       },
//       cPassword: {
//          required:true,
//          // equalTo : "#Password"
//       },
// },

// messages :{
//       fname: {
//         required: "Required",
//         minlength: "min 3 character>"
//       },
//       lname: "required",
//       Email: "required",

//       cPassword: {
//       //   equalTo: "Not matching",
//       },
//    },
// submitHandler: function(form) {
//   form.submit();
// }
// });
// });
 </script>
   <script src="<?php base_url('assets')?>/intl-tel-input/build/js/intlTelInput.js"></script>
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
         utilsScript: "./intl-tel-input/build/js/utils.js"
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