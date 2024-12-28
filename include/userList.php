<?php
include_once("../config/dbconn.php");
include_once("header.php");
include_once("topbar.php");
include_once("sidebar.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Userid</th>
                  <th>UserName</th>
                  <th>Email</th>
                  <th>Notes </th>
                  <th>IsAdmin</th>
                  <th>Operation</th>
                </tr>
                </thead>
                <tbody>
                <!-- ------------------------ -->
                  <?php

                  $sql = 'SELECT * FROM registration';
                  $result = mysqli_query($conn, $sql);

                  if (!$result) {
                      die('Could not get data: ' . mysqli_error($conn));
                  }
                  

                  while ($row = mysqli_fetch_assoc($result)) {
                      echo '<tr>
                          <td>' . $row['id'] . '</td>
                          <td>' . $row['userName'] . '</td>
                          <td>' . $row['email'] . '</td>
                          <td>' . $row['note'] . '</td>
                          <td>' . $row['isAdmin'] . '</td>
                          <td> 
                          <a href="update.php?id='.$row["id"].'" class="">
                          <button type="button" class="btn btn-inline btn-info"><i class="fas fa-edit"></i></button></a>                 
                        
                          <a href="userList.php?id='.$row["id"].'" class=""><button type="submit" class="btn btn-inline btn-danger ">Delete</button></a> </td></tr>';
                  }

                  
                          if (isset($_GET['id'])) {
                            $id = intval($_GET['id']); // Use intval to sanitize input
                            // Connect to the database
                            //include_once("../config/dbconn.php");

                            // Fetch the record to display in the form
                            $dsql = "DELETE FROM registration WHERE id = $id";
                            $result = mysqli_query($conn,$dsql);

                            if (!$result) {
                                die('Could not get data: ' . mysqli_error($conn));
                            }else{
                              
                              echo ' <script>
                                alert("User Deleted");
                                window.location.assign("userList.php");
                              </script> ';
                            }
                            
                            
                          }
                  
                  ?>

                <!-- ------------------------ -->
                </tbody>
                <tfoot>
                <tr>
                  <!-- <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th> -->
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
</div>
<!-- ./wrapper -->
<!-- -----------------------Footer------------------------- -->


<!-- -----------------------/Footer------------------------- -->
<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
