<?php
include("header.php");
include_once("../config/dbconn.php");
// not working currently.

$sql = "SELECT userName FROM registration WHERE id = 1";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Could not get data: ' . mysqli_error($conn));
}
$username ='';
while ($row = mysqli_fetch_assoc($result)) {
  $username =$row['userName'];
}
?>
<!-- Main Sidebar Container -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link">
    <img
      src="../assets/dist/img/AdminLTELogo.png"
      alt="AdminLTE Logo"
      class="brand-image img-circle elevation-3"
      style="opacity: 0.8"
    />
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div style="overflow: unset; overflow-x:hidden; scrollbar-width: none" class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img
          src="../assets/dist/img/user2-160x160.jpg"
          class="img-circle elevation-2"
          alt="User Image"
        />
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $username ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul
        class="nav nav-pills nav-sidebar flex-column"
        data-widget="treeview"
        role="menu"
        data-accordion="false"
      >
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Menu
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
            <!--class = active -->
              <a href="./index.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="userList.php" class="nav-link">
              <i class="fas fa-users"></i>
                <!-- <i class="far fa-circle nav-icon"></i> -->
                <p>&nbsp;User List</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="registration.php" class="nav-link">
                <i class="nav-icon fa-regular fas fa-user">+</i>
                <!-- <i class="far fa-circle nav-icon"></i> -->
                <p>Add User</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->

    <!-- /.sidebar-menu -->
    <ul
      style="
        position: sticky;
        bottom: 1rem;
        cursor: pointer;
        background-color: #007bff;
        margin-top: 29rem;
        border-radius: 4px;
        height: 2.5rem;
        padding: 0px 21px;
      "
    >
      <li style="padding: 6px 0px; list-style-type: none" class="">
        <a style="display: flex" class="" id="logout">
          <!-- <i class="far fa-circle text-danger"></i> -->
          <p class="">🔒</p>
          <p
            style="margin-left: 2rem; font-weight: bold; color: #ffffffe8"
            class=""
          >
            Logout
          </p>
        </a>
      </li>
    </ul>
  </div>
  <!-- /.sidebar -->
</aside>
<script>
  document.querySelector("#logout").addEventListener("click", (e) => {
    console.log("clicked");
    window.location.assign("login.php");
  });
</script>
