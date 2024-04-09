<!-- app/Views/quiz/index.php -->
<?= $this->extend('admin/layout/default') ?>

<?= $this->section('head') ?>

 <?= $this->endSection() ?>
 <?= $this->section('content') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= ucwords($user['first_name'].' '.$user['last_name'] )?> Quiz results</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Quiz result </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <?php// print_R($user);?>
                <h3 class="card-title"><?= ucwords($user['first_name'].' '.$user['last_name']) ?> Quiz result</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="quizTable" class="table table-strip">
        <thead>
            <tr>
                <th>ID</th>
                <th>selected_emoji </th>
                
                <th>Results</th>
                <th>created_at</th>
               
            </tr>
        </thead>
        <tbody>
            <?php foreach ($quiz_result as $data):
                 $result =  json_decode($data['results']); 
                 $question_arr =$result->question;
                 $question_id_arr =$result->question_id;
                 $correct_anser_arr =$result->correct_anser;
                  $answer_arr =$result->answer;
                ?>
                <tr>
                    <td><?= $data['id']; ?></td>
                    <td><?= json_decode($data['selected_emoji']); ?></td>
                    <td>
                        <table>
                            <tr>
                                <th>Ques Id</th>
                                <th>Question</th>
                                <th>user Answer</th>
                                <th>correct Answer</th>
                            </tr>  
                        <?php 
                        foreach ($question_arr as $rkey => $rdata){ ?>
                             <tr>  
                             <td><?= $question_id_arr[$rkey]; ?></td>   
                             <td><?= $question_arr[$rkey]; ?></td>
                             <td><?= $answer_arr[$rkey]; ?></td>
                             <td><?= $correct_anser_arr[$rkey]; ?></td>
                             </tr>  
                      <?php  }
                    
                    ?>
                    </table>
                    </td>
                    <td><?= $data['created_at']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
              </div> 
              </div> 
              </div> 
              </div> 
</section>     
            </div>

   

   
     <!-- /.content-wrapper -->
  <?= $this->endSection() ?>

<?= $this->section('javascript') ?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<script>
        $(document).ready(function() {
            $('#quizTable').DataTable();
        });
    </script>
 <?= $this->endSection() ?>