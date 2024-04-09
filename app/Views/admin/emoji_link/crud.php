<!-- app/Views/quiz/index.php -->

<?= $this->extend('admin/layout/default') ?>



<?= $this->section('head') ?>



<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

  <!-- Content Header (Page header) -->

  <section class="content-header">

    <div class="container-fluid">

      <div class="row mb-2">

        <div class="col-sm-6">

          <h1>Emoji LInk</h1>

        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item"><a href="#">Home</a></li>

            <li class="breadcrumb-item active">Emoji LInk create</li>

          </ol>

        </div>

      </div>

    </div><!-- /.container-fluid -->

  </section>



  <!-- Main content -->

  <section class="content">



    <!-- Default box -->

    <div class="card">

      <div class="card-header">

        <h3 class="card-title">Emoji LInk Update</h3>



        <div class="card-tools">

          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">

            <i class="fas fa-minus"></i>

          </button>

          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">

            <i class="fas fa-times"></i>

          </button>

        </div>

      </div>

      <form id="form" action ="<?= site_url('admin/emoji_link/crud') ?>" method="post">



        <div class="card-body">

          <div class="row">

            <?php if (session()->has('errors')): ?>

            <div style="color: red;">

              <?= \Config\Services::validation()->listErrors(); ?>

            </div>

          <?php endif; ?>

          <?php if(session()->get('success')): ?>

          <div class="alert alert-success col-md-12" role="alert">

            <?= session()->get('success') ?>

          </div>

        <?php endif; ?> 

      </div>

      <div class="row">  

        <div class="form-group col-md-6">

          <label for="emoji_code">Emoji</label>

          <select class="form-control" id="emoji_code" name="emoji_code">



           <option value="">Select Emoji</option>



           <?php foreach ($records as $emoji): ?>

            <option value="<?php echo json_decode($emoji['id']) ?>" <?php echo (@$emoji_link['id']==$emoji['id'])?'selected':''; ?>><?php echo json_decode($emoji['emoji_code']) ?></option>



          <?php endforeach; ?>

        </select>

        <label class="error"> <?= \Config\Services::validation()->getError('answer'); ?></label>

      </div>   

      <div class="form-group col-md-6">

        <label for="link">Emoji Name</label>

        <input type="text" class="form-control" value="<?php echo  @$emoji_link['name'] ?>" id="name" name="name" placeholder="name">

        <label class="error"> <?= \Config\Services::validation()->getError('name'); ?></label>

      </div>   

      <div class="form-group col-md-6">

        <label for="link">Link</label>

        <input type="url" class="form-control" value="<?php echo  @$emoji_link['link'] ?>" id="link" name="link" placeholder="Link">

        <label class="error"> <?= \Config\Services::validation()->getError('link'); ?></label>

      </div>         
   <div class="form-group col-md-6">

        <label for="answer">Status</label>

        <select class="form-control" id="status" name="status">

          <option value="1" <?php echo (@$emoji_link['status']=='1')?'selected':''; ?>>Active</option>

          <option value="0" <?php echo (@$emoji_link['status']=='0')?'selected':''; ?>>Inactive</option>

        </select>



      </div>      
  <div class="form-group col-md-12">

        <label for="emoji_quote1">emoji quote 1</label>

        <input type="text" class="form-control" value="<?php echo  @$emoji_link['emoji_quote1'] ?>" id="emoji_quote1" name="emoji_quote1" placeholder="emoji quote">

        <label class="error"> <?= \Config\Services::validation()->getError('emoji_quote1'); ?></label>

      </div>   
       <div class="form-group col-md-12">

        <label for="emoji_quote2">emoji quote 2</label>

        <input type="text" class="form-control" value="<?php echo  @$emoji_link['emoji_quote2'] ?>" id="emoji_quote2" name="emoji_quote2" placeholder="emoji quote">

        <label class="error"> <?= \Config\Services::validation()->getError('emoji_quote2'); ?></label>

      </div>   
       <div class="form-group col-md-12">

        <label for="emoji_quote3">emoji quote 3</label>

        <input type="text" class="form-control" value="<?php echo  @$emoji_link['emoji_quote3'] ?>" id="emoji_quote3" name="emoji_quote3" placeholder="emoji quote">

        <label class="error"> <?= \Config\Services::validation()->getError('emoji_quote3'); ?></label>

      </div>   
       <div class="form-group col-md-12">

        <label for="emoji_quote4">emoji quote 4</label>

        <input type="text" class="form-control" value="<?php echo  @$emoji_link['emoji_quote4'] ?>" id="emoji_quote4" name="emoji_quote4" placeholder="emoji quote">

        <label class="error"> <?= \Config\Services::validation()->getError('emoji_quote4'); ?></label>

      </div>   
       <div class="form-group col-md-12">

        <label for="emoji_quote5">emoji quote 5</label>

        <input type="text" class="form-control" value="<?php echo  @$emoji_link['emoji_quote5'] ?>" id="emoji_quote5" name="emoji_quote5" placeholder="emoji quote">

        <label class="error"> <?= \Config\Services::validation()->getError('emoji_quote5'); ?></label>

      </div>   
    
    </div>      

  </div>  



</div>

<!-- /.card-body -->

<div class="card-footer">

  <input type="hidden" id="quiz_id" name="quiz_id" value="<?php echo @$quiz_Id ?>"/>

  <button type="submit" class="btn btn-primary">Submit</button>

</div>

<!-- /.card-footer-->

</form>

</div>

<!-- /.card -->



</section>

<!-- /.content -->

</div>

<!-- /.content-wrapper -->

<?= $this->endSection() ?>



<?= $this->section('javascript') ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

<script type="text/javascript">

 $(document).ready(function(){

   $("#form").validate({


    rules:{ name: {

      required: true,

      minlength: 2

    },

    emoji_code :{

     required:true,

   },
     emoji_quote1 :{

    minlength: 3,
     maxlength: 200

   },
     status :{

     required:true,

   },
    
  emoji_quote2 :{

    minlength: 3,
     maxlength: 200

   },
     emoji_quote3 :{

    minlength: 3,
     maxlength: 200

   },
     emoji_quote4 :{

    minlength: 3,
     maxlength: 200

   },
     emoji_quote5 :{

    minlength: 3,
     maxlength: 200

   },
   

 },



 messages :{

  name: {

    required: "Name is Required",

    minlength: "Name min 20 character"

  },

   link: " URL Link is required",

  

},

submitHandler: function(form) {

 form.submit();

}

});

 });

</script>

<?= $this->endSection() ?>