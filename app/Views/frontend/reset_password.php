<?php 
/**
 * @var CodeIgniter\View\View $this
*/
?>
<?= $this->extend('layout/default') ?>

<?= $this->section('head') ?>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/Forgotpass.css'); ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="container">
       <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?php echo $validation->listErrors() ?></div>
                    <?php endif;?> 
      <form id="form" action=" <?php echo site_url("$role/reset_password"); ?>" method="post">
       <div class="forgot-password-main">
        <div class="forgot-img">
             <img src="<?= base_url('assets'); ?>/Images/Email.png">
             <div class="forgot-text">
                <h2>FORGOT PASSWORD</h2>
             </div>
             <div class="input-field-forgot">
                <fieldset >
                <input placeholder="New Password" name="newpass" type="password" tabindex="2" required class="form-control">
                </fieldset>
                <fieldset style="position: relative;top: 8px;">
                    <input placeholder="Confirm Password"  name="confirmpass" type="password" tabindex="2" required class="form-control">
                    </fieldset>
             </div>
             <div class="forgot-button">
          <button type="submit">UPDATE</button>
             </div>
      </form>
        </div>
       </div>
    </div>

<?= $this->endSection() ?>

<?= $this->section('javascript') ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
<script type="text/javascript">
var jQuery_2_0_3 = $.noConflict(true);
jQuery_2_0_3.validator.addMethod("StrongPassword",function(value){ 
      return /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/.test(value);
   }, "Password must contain UpperCase, LowerCase, Number/SpecialChar and min 8 Chars");
   jQuery_2_0_3("#conpass").keyup(function(){
             if (jQuery_2_0_3("#newpass").val() != jQuery_2_0_3("#conpass").val()) {
                 jQuery_2_0_3("#msg").html("Password do not match").css("color","red");
             }else{
                 jQuery_2_0_3("#msg").html("Password matched").css("color","green");
            }
      });

   jQuery_2_0_3(document).ready(function(){
   jQuery_2_0_3("#form").validate({
   rules:{ 
      newpass: {
            required: true,
            StrongPassword:true
         },
      conpass: {
            required: true,
            // equalTo : "#newpass"
         },
 
      },
   messages :{
      newpass: {
            'required': "Required",
         },
         conpass: {
            // equalTo: "Not matching",
      },
        },    
   submitHandler: function(form) {
     form.submit();
   }
   
   });
   });
   </script>

<?= $this->endSection() ?>