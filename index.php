<?php
include("config/dbconn.php");
include("include/header.php");
include("include/topbar.php");
include("include/sidebar.php");



?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>0</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>0<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>0</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>0</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
          <!-- ----------------------------------------------------- -->
          <!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">User Detail</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fas fa-times"></i></button>
    </div>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
        
        <div class="row">
          <div class="col-12">
            <h4>Recent Activity</h4>
            <?php

$sql = 'SELECT * FROM registration ORDER BY created_at DESC';
$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Could not get data: ' . mysqli_error($conn));
}
$username= $email= $note = $created_at='';
while ($row = mysqli_fetch_assoc($result)) {
    // $userId = $row['Id'];
    $username =$row['userName'];
    $email =$row['email'];
    $note = $row['note'];
    $created_at=$row['created_at'];

    echo '<div class="post">
        <div class="user-block">


            <img class="img-circle img-bordered-sm" src="./assets/dist/img/user1-128x128.jpg" alt="user image">
            <span class="username">
            <a href="#">'.$username.'</a>
            </span>
            <span class="description">Email - '.$email.'</span>
            <span class="description">Created At - '.$created_at.'</span>
        </div>
        <!-- /.user-block -->
        <p>
        <div style="padding:10px;">Note:
        '.$note.'
        </div>
            
        </p>

        
    </div>';



}

?>
                            
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
       <!-- --------------------------------------------------------- -->


       <div class="register-box">
  <div class="register-logo">
    <a href="index.php"><b>Registration</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new member</p>

      <form action="index.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Enter notes" name="note">
          <div class="input-group-append">
            <div class="input-group-text">
              <!-- <span class="fas fa-lock"></span> -->
              
              
            </div>
          </div>
        </div>
        <div class="form-group">
                    <!-- <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div> -->
        <div class="row">
          <div class="col-8">
            <!-- <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div> -->
          </div>
          <!-- /.col -->
          <div class="col-12">
            <br><button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

      <br><a href="login.html" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<?php 


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
  
  if ($_POST['username']=='' || $_POST['email']=='' || $_POST['password']=='' ) {
    echo "Pleace fill all inputs";
  } else {
    
    $username = trim($_POST["usernsame"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $note = trim($_POST["note"]);

    $sql ="insert into registration".
    "(userName, email, password, note)"."values".
    "('$username','$email','$password','$note')";
       
    if (mysqli_query($conn, $sql)) {
      $username= $email= $password= $note ='';
      echo "<script>
            window.location.href = window.location.href;
          </script>";
      exit; 
      // echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  } 
}



mysqli_close($conn);
?>


       <!-- ----------------------------------------- -->
        <div class="text-center mt-5 mb-3">
          <a href="#" class="btn btn-sm btn-primary">Add files</a>
          <a href="#" class="btn btn-sm btn-warning">Report contact</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</section>
<!-- /.content -->
          <!-- ----------------------------------------------------- -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php

include("include/footer.php");
?>