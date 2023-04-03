<?php include('./include/header.php'); ?>
<?php include('./controller/auth/access-control.php'); ?>
<?php include_once('../db/connect.php'); ?>


 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="./index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>
  
  <!-- End Dashboard Nav -->

  <!-- Start Logout Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="./logout.php">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Log Out</span>
    </a>
  </li>
  
  <!-- End Logout Page Nav -->

  <li class="nav-heading">Pages</li>


  <!--  Start Error 404 Page Nav -->
  

  <li class="nav-item">
    <a class="nav-link collapsed" href="./include/404.html">
      <i class="bi bi-dash-circle"></i>
      <span>Error 404</span>
    </a>
  </li>
  <!-- End Error 404 Page Nav -->
  
</ul>

</aside><!-- End Sidebar-->


<?php include("./include/sales.php") ?>


  <?php include('./include/footer.php'); ?>