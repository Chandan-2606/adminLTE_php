<?php
include('config/dbconn.php');

?>
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

$sql = 'SELECT * FROM registration ORDER BY timeStamp DESC';
$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Could not get data: ' . mysqli_error($conn));
}
$username= $email= $timeStamp='';
while ($row = mysqli_fetch_assoc($result)) {
    // $userId = $row['Id'];
    $username =$row['userName'];
    $email =$row['email'];
    // $pass = $row['password'];
    $timeStamp=$row['timeStamp'];

    echo '<div class="post">
        <div class="user-block">


            <img class="img-circle img-bordered-sm" src="./assets/dist/img/user1-128x128.jpg" alt="user image">
            <span class="username">
            <a href="#">'. $username.'</a>
            </span>
            <span class="description">Email - '.$email.'</span>
            <span class="description">Created At - '.$timeStamp.' ||7:45 PM today</span>
        </div>
        <!-- /.user-block -->
        <p>
            Lorem ipsum represents a long-held tradition for designers,
            typographers and the like. Some people hate it and argue for
            its demise, but others ignore.
        </p>

        <p>
            <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
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
    <a href="index.php"><b>Admin</b>LTE</a>
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
          <input type="password" class="form-control" placeholder="Retype password" name="password2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
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
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
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

  if ($_POST['username']==''||$_POST['email']==''||$_POST['password']=='' ) {
    echo "Pleace fill all inputs";
  } else {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql ="insert into registration(userName, email, password)values('.$username.','.$email.','.$password.')";
  

     
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      $username= $email= $password='';
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  } 

  mysqli_close($conn);


    //  if ($_POST['pass'] == "chan12" && $_POST['email'] == "chan@gmail.com") {
    //    header("Location: index.php", true, 301);  
    //    exit();  
    //   }
      // form processing if the form is not empty
}

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