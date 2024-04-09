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
            <h1 class="m-0"> users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users </li>
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
                <h3 class="card-title">User List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="quizTable" class="table table-strip">
        <thead>
            <tr>
                <th>ID</th>
                <th>first name</th>
                <th>last name</th>
                <th>email</th>
                <th>age</th>
                <th>gender</th>
                <th>location</th>
               
                <th>staus</th>
                <th>created at</th>
                <th>Action</th> 
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['user_id']; ?></td>
                    <td><?= $user['first_name']; ?></td>
                    <td><?= $user['last_name']; ?></td>
                    <td><?= $user['user_email']; ?></td>
                    <td><?= $user['age']; ?></td>
                    <td><?= $user['gender']; ?></td>
                    <td><?= $user['location']; ?></td>
                  
                    <td><?= ($user['status']==1)?"Active":"Inactive"; ?></td>
                    <td><?= $user['created_at']; ?></td>
                   <td> 
                   <a href="<?= site_url("admin/quiz/result/".$user['user_id']) ?>" class="btn btn-primary btn-sm">quiz results </a>
                      <!-- <a href="<?= site_url("admin/quiz/crud/".$user['user_id']) ?>" class="btn btn-primary btn-sm">Edit </a> -->
                      <!-- <a href="<?= site_url("admin/quiz/delete/".$user['user_id']) ?>" class="btn btn-danger btn-sm">Delete </a> -->
                     </td> 
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