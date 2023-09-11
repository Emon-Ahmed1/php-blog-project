<?php
include("Class/function.php");
$obj = new blogproject;

//login system
session_start();
$id = $_SESSION['adminId'];
if ($id == null) {
  header('location:index.php');
}
//logout system
if (isset($_GET['adminlogout'])) {
  if ($_GET['adminlogout'] == 'logout') {
    $obj->adminlogout();
  }
}


?>


<?php include_once('include/header.php'); ?>

<body class="sb-nav-fixed">
  <?php include_once('include/topNav.php'); ?>
  <div id="layoutSidenav">
    <?php include_once('include/sidenav.php'); ?>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid">
          <?php
          if (isset($view)) {
            if ($view == 'dashboard') {
              include('view/view_dashboard.php');
            } elseif ($view == 'add_cetagory') {
              include('view/view_add_ceta.php');
            } elseif ($view == 'manage_cetagory') {
              include('view/view_manage_ceta.php');
            } elseif ($view == 'add_post') {
              include('view/view_add_post.php');
            } elseif ($view == 'manage_post') {
              include('view/view_manage_post.php');
            } elseif ($view == 'edit_cetagory') {
              include('view/view_edit_cetagory.php');
            }elseif ($view == 'edit_post_img') {
              include('view/view_edit_post_img.php');
            }elseif ($view == 'edit_post') {
              include('view/view_edit_post.php');
            }elseif ($view == 'status') {
              include('view/view_status.php');
            }

          }
          ?>
        </div>
      </main>
      <?php include_once('include/footer.php') ?>
    </div>
  </div>
  <?php include_once('include/script.php') ?>
</body>

</html>