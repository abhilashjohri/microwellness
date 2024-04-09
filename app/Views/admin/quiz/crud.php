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
            <h1>Quiz</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quiz create</li>
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
          <h3 class="card-title">Quiz create</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <form id="form" action ="<?= site_url('admin/quiz/crud') ?>" method="post">
        
        <div class="card-body">
            <div class="row">
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
        <div class="form-group col-md-12">
                    <label for="question">Question</label>
                    <input type="text" class="form-control"  value="<?php echo $quiz['question'];?>" id="question" name ="question" placeholder="question">
                    <label class="error"> <?= \Config\Services::validation()->getError('question'); ?></label>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="option1">Option 1</label>
                    <input type="text" class="form-control" value="<?php echo  $quiz['option1']; ?>" id="option1" name="option1" placeholder="option 1">
                    <label class="error"> <?= \Config\Services::validation()->getError('option1'); ?></label>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="option2">Option 2</label>
                    <input type="text" class="form-control" value="<?php echo  $quiz['option2'] ?>" id="option2" name="option2" placeholder="option 2">
                    <label class="error"> <?= \Config\Services::validation()->getError('option2'); ?></label>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="option3">Option 3</label>
                    <input type="text" class="form-control" value="<?php echo  $quiz['option3'] ?>" id="option3" name="option3" placeholder="option 3">
                    <label class="error"> <?= \Config\Services::validation()->getError('option3'); ?></label>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="option4">Option 4</label>
                    <input type="text" class="form-control" value="<?php echo  $quiz['option4'] ?>" id="option4" name="option4" placeholder="option 4">
                    <label class="error"> <?= \Config\Services::validation()->getError('option4'); ?></label>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="answer">Answer</label>
                  <select class="form-control" id="answer" name="answer">
                
                         <option value="">Select Answer</option>
                              <option value="option1" <?php echo ($quiz['answer']=='option1')?'selected':''; ?>>option1</option>
                              <option value="option2" <?php echo ($quiz['answer']=='option2')?'selected':''; ?>>option2</option>
                              <option value="option3" <?php echo ($quiz['answer']=='option3')?'selected':''; ?>> option3</option>
                              <option value="option4" <?php echo ($quiz['answer']=='option4')?'selected':''; ?>>option4</option>
                           </select>
                           <label class="error"> <?= \Config\Services::validation()->getError('answer'); ?></label>
                           </div>   
                           <div class="form-group col-md-6">
                    <label for="answer">Status</label>
                  <select class="form-control" id="status" name="status">
                
              
                              <option value="1" <?php echo ($quiz['status']=='1')?'selected':''; ?>>Active</option>
                              <option value="0" <?php echo ($quiz['status']=='0')?'selected':''; ?>>Inactive</option>
                             
                           </select>
                      
                           </div>      
                           </div>      
                           </div>  
                                       
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        <input type="hidden" id="quiz_id" name="quiz_id" value="<?php echo $quiz_Id ?>"/>
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
   
    rules:{ question: {
        required: true,
        minlength: 20
      },
      answer :{
         required:true,
      },
      option1:{
        required: true,
        minlength: 3
      },
      option2:{
         required : true,
         minlength: 3
      },
      option3:{
         required : true,
         minlength: 3
      },
      option4:{
         required : true,
         minlength: 3
      },
     
     
   
},

messages :{
  question: {
        required: "question Required",
        minlength: "question min 20 character"
      },
      option1: " option 1 required",
      option2: "option 2 required",
      option3: "option 3 required",
      option4: " option 4 required",
      answer: " Answer required",
   },
   submitHandler: function(form) {
     form.submit();
   }
   });
   });
   </script>
 <?= $this->endSection() ?>