<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IHAZE FARMING</title>
  <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Abaut us</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->


      <!-- Messages Dropdown Menu -->


      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">

        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">



        <span class="brand-text font-weight-light">IHAZE FARMING</span>
      </a>

  <!-- Preloader -->

    <!-- Sidebar -->


      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open" class="nav-item">

            <a href="index.html" >

              <p>
                <i class="nav-icon fas fa-tachometer-alt"></i>Dashboard</p>

            </a>

            <ul class="nav nav-treeview">

          <li class="nav-item">
            <a href="#" class="nav-link">

              <p>
                <i class='fa-solid fa-temperature-full' style='color:#36b065'></i>
                 Temperature <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pond_tempd.php" class="nav-link">
                  <i class='fa-solid fa-temperature-full' style='color:#065c27'></i>

                  <p>Pond-temperature</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="fish_temd.php" class="nav-link">
                  <i class='fa-solid fa-temperature-full' style='color:#065c27'></i>

                  <p>Food-temperature</p>
                </a>
              </li>
             </ul>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-droplet" style="color:#065c27"></i>
              <p>
                Humidity
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pond_humd.php" class="nav-link">
                  <i class="fa-solid fa-droplet" style="color:#065c27"></i>
                  <p>Pond-Humidity</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="fish_humd.php" class="nav-link">
                  <i class="fa-solid fa-droplet" style="color:#065c27"></i>
                  <p>food-humidity</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-level-up"></i><i class="fa-solid fa-turn-down"></i>
              <p>
                Level
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="tank_levd.php" class="nav-link">
                  <i class="fa-solid fa-dial-med-low"></i>
                  <p>Tank-level (L)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="fish_levd.php" class="nav-link">
                  <i class="fa-solid fa-dial-med-low"></i>
                  <p>Water-level (L)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="fish_weid.php" class="nav-link">
                  <i class="fa-solid fa-dial-med-low"></i>
                  <p>Food-Weight (KG)</p>
                </a>
              </li>

            </ul>
          </li>



               </ul>
               <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa-regular fa-snowflake" style='color:#a16a0b'></i>

                    <p>
                    Atmospheric
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="atm_temd.php" class="nav-link">
                        <i class='fa-solid fa-temperature-full' style='color:#065c27'></i>

                        <p>temperature</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="atm_humd.php" class="nav-link">
                        <i class="fa-solid fa-droplet" style="color:#065c27"></i>

                        <p>Humidity</p>
                      </a>
                    </li>
                  </ul>
                </ul>
                <ul class="nav nav-treeview">

                 <li class="nav-item">
                   <a href="#" class="nav-link">
                                      <i class="fa-solid fa-droplet" style="color:#065c27"></i>

                     <p>
                     Form-data
                       <i class="fas fa-angle-left right"></i>
                     </p>
                   </a>
                   <ul class="nav nav-treeview">
                     <li class="nav-item">
                       <a href="pages/forms/temperature.html" class="nav-link">

                         <p>temp and hum</p>
                       </a>
                     </li>
                     <li class="nav-item">
                       <a href="pages/forms/level.html" class="nav-link">

                         <p>watel level</p>
                       </a>
                     </li>
                     <li class="nav-item">
                      <a href="pages/forms/weight.html" class="nav-link">

                        <p>weight</p>
                      </a>
                    </li>
                   </ul> </nav>


                <!-- /.sidebar-menu -->
              </div>
              <!-- /.sidebar -->
            </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">


        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">


                  <div class="card">


                  <br><br>
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Temperature and Humidity detected in food </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">

                  <table class="table">
                                       <tr>
                      <th>Data ID</th>
                      <th>Senser id</th>
                      <th>Temperature(c)</th>


                      <th>Time obtained</th>
                    </tr>
                    <?php
                  include 'pages/forms/connect.php';
                  $select=mysqli_query($con,"SELECT * from fish_temperature order by id desc limit 10");
                  while($row=mysqli_fetch_array($select)){
                    $id=1;
                  ?>
                    <tr>
                      <td><?php echo"$id"?></a></td>
                      <td><?php echo"$row[3]"?></a></td>
                      <td><span class="badge badge-success"><?php echo"$row[1]"?></span></td>

                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo"$row[4]"?></div>
                      </td>




                <?php
                $id=$id+1;
                }
                ?>
                 </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
              </div>
              <!-- /.card-footer -->
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://adminlte.io">Bjay-techs</a>.</strong>
    All rights reserved by.
    <div class="float-right d-none d-sm-inline-block">
      <b>IHAZE FARMING</b>
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
