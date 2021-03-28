
<?php 
$conn = oci_connect('hr', 'hr','localhost/orcl','utf8');
?>

<?php
function SetServerOutput($conn, $p)
{
    if ($p)
      $s = "BEGIN DBMS_OUTPUT.ENABLE(NULL); END;";
    else
      $s = "BEGIN DBMS_OUTPUT.DISABLE(); END;";
    $s = oci_parse($conn, $s);
    $r = oci_execute($s);
    oci_free_statement($s);
    return $r;
}

// Returns an array of dbms_output lines, or false.
function GetDbmsOutput($conn)
{
    $res = false;
    $s = oci_parse($conn, "BEGIN DBMS_OUTPUT.GET_LINE(:LN, :ST); END;");
    if (oci_bind_by_name($s, ":LN", $ln, 255) &&
    oci_bind_by_name($s, ":ST", $st)) {
    $res = array();
    while (($succ = oci_execute($s)) && !$st)
      $res[] = $ln;
        if (!$succ)
         $res = false;
        }
    oci_free_statement($s);
    return $res;
}
?>
<?php
session_start();

$conn = oci_connect('hr', 'hr','localhost/orcl','utf8');



SetServerOutput($conn, true);



$stid = oci_parse($conn, "
DECLARE   
    TYPE c_names_type IS TABLE OF
    ITEKA_SIGNUP.NAME1%TYPE                 
        INDEX BY BINARY_INTEGER;   
    c_names c_names_type;   
    counter integer :=0; 
    CURSOR country_curs IS     
        SELECT NAME1 FROM ITEKA_SIGNUP ;
BEGIN   
    FOR n IN country_curs LOOP 
        counter := counter +1; 
        c_names(counter) := n.NAME1; 
    END LOOP; 
    
    DBMS_OUTPUT.PUT_LINE('Пользователи  : ' || c_names.COUNT);
END;
");

// Execute Stateme
oci_execute($stid);
$output = GetDbmsOutput($conn);

?>






















<?php
function SetServerOutput2($conn2, $p)
{
    if ($p)
      $s = "BEGIN DBMS_OUTPUT.ENABLE(NULL); END;";
    else
      $s = "BEGIN DBMS_OUTPUT.DISABLE(); END;";
    $s = oci_parse($conn2, $s);
    $r = oci_execute($s);
    oci_free_statement($s);
    return $r;
}

// Returns an array of dbms_output lines, or false.
function GetDbmsOutput2($conn2)
{
    $res = false;
    $s = oci_parse($conn2, "BEGIN DBMS_OUTPUT.GET_LINE(:LN, :ST); END;");
    if (oci_bind_by_name($s, ":LN", $ln, 255) &&
    oci_bind_by_name($s, ":ST", $st)) {
    $res = array();
    while (($succ = oci_execute($s)) && !$st)
      $res[] = $ln;
        if (!$succ)
         $res = false;
        }
    oci_free_statement($s);
    return $res;
}
?>





<?php

$conn2 = oci_connect('hr', 'hr','localhost/orcl','utf8');



SetServerOutput2($conn2, true);



$stid2 = oci_parse($conn2, "
DECLARE   
    TYPE c_names_type IS TABLE OF
    LEKARSTVA2.MEDICINE_NAME%TYPE                 
        INDEX BY BINARY_INTEGER;   
    c_names c_names_type;   
    counter integer :=0; 
    CURSOR country_curs IS     
        SELECT MEDICINE_NAME FROM LEKARSTVA2 ;
BEGIN   

    FOR n IN country_curs LOOP 
        counter := counter +1; 
        c_names(counter) := n.MEDICINE_NAME; 
    END LOOP; 
    
    DBMS_OUTPUT.PUT_LINE(' ' || c_names.COUNT);
END;
");

// Execute Stateme
oci_execute($stid2);
$output2 = GetDbmsOutput2($conn2);

?>






































<?php
function SetServerOutput22($conn22, $p)
{
    if ($p)
      $s = "BEGIN DBMS_OUTPUT.ENABLE(NULL); END;";
    else
      $s = "BEGIN DBMS_OUTPUT.DISABLE(); END;";
    $s = oci_parse($conn22, $s);
    $r = oci_execute($s);
    oci_free_statement($s);
    return $r;
}

// Returns an array of dbms_output lines, or false.
function GetDbmsOutput22($conn22)
{
    $res = false;
    $s = oci_parse($conn22, "BEGIN DBMS_OUTPUT.GET_LINE(:LN, :ST); END;");
    if (oci_bind_by_name($s, ":LN", $ln, 255) &&
    oci_bind_by_name($s, ":ST", $st)) {
    $res = array();
    while (($succ = oci_execute($s)) && !$st)
      $res[] = $ln;
        if (!$succ)
         $res = false;
        }
    oci_free_statement($s);
    return $res;
}
?>





<?php

$conn22 = oci_connect('hr', 'hr','localhost/orcl','utf8');



SetServerOutput22($conn22, true);



$stid22 = oci_parse($conn22, "
DECLARE   
    TYPE c_names_type IS TABLE OF
    APTEKI2.APTEKI%TYPE                 
        INDEX BY BINARY_INTEGER;   
    c_names c_names_type;   
    counter integer :=0; 
    CURSOR country_curs IS     
        SELECT APTEKI FROM APTEKI2 ;
BEGIN   

    FOR n IN country_curs LOOP 
        counter := counter +1; 
        c_names(counter) := n.APTEKI; 
    END LOOP; 
    
    DBMS_OUTPUT.PUT_LINE(' ' || c_names.COUNT);
END;
");

// Execute Stateme
oci_execute($stid22);
$output22 = GetDbmsOutput22($conn22);

?>















<?php
function SetServerOutput222($conn222, $p)
{
    if ($p)
      $s = "BEGIN DBMS_OUTPUT.ENABLE(NULL); END;";
    else
      $s = "BEGIN DBMS_OUTPUT.DISABLE(); END;";
    $s = oci_parse($conn222, $s);
    $r = oci_execute($s);
    oci_free_statement($s);
    return $r;
}

// Returns an array of dbms_output lines, or false.
function GetDbmsOutput222($conn222)
{
    $res = false;
    $s = oci_parse($conn222, "BEGIN DBMS_OUTPUT.GET_LINE(:LN, :ST); END;");
    if (oci_bind_by_name($s, ":LN", $ln, 255) &&
    oci_bind_by_name($s, ":ST", $st)) {
    $res = array();
    while (($succ = oci_execute($s)) && !$st)
      $res[] = $ln;
        if (!$succ)
         $res = false;
        }
    oci_free_statement($s);
    return $res;
}
?>









































































<?php

$conn222 = oci_connect('hr', 'hr','localhost/orcl','utf8');



SetServerOutput222($conn222, true);



$stid222 = oci_parse($conn222, "
DECLARE   
    TYPE c_names_type IS TABLE OF
    KAYRIMDILIK.NAME_K%TYPE                 
        INDEX BY BINARY_INTEGER;   
    c_names c_names_type;   
    counter integer :=0; 
    CURSOR country_curs IS     
        SELECT NAME_K FROM KAYRIMDILIK ;
BEGIN   

    FOR n IN country_curs LOOP 
        counter := counter +1; 
        c_names(counter) := n.NAME_K; 
    END LOOP; 
    
    DBMS_OUTPUT.PUT_LINE(' ' || c_names.COUNT);
END;
");

// Execute Stateme
oci_execute($stid222);
$output222 = GetDbmsOutput222($conn222);

?>




















































































<?php
function SetServerOutput2221($conn2221, $p)
{
    if ($p)
      $s = "BEGIN DBMS_OUTPUT.ENABLE(NULL); END;";
    else
      $s = "BEGIN DBMS_OUTPUT.DISABLE(); END;";
    $s = oci_parse($conn2221, $s);
    $r = oci_execute($s);
    oci_free_statement($s);
    return $r;
}

// Returns an array of dbms_output lines, or false.
function GetDbmsOutput2221($conn2221)
{
    $res = false;
    $s = oci_parse($conn2221, "BEGIN DBMS_OUTPUT.GET_LINE(:LN, :ST); END;");
    if (oci_bind_by_name($s, ":LN", $ln, 255) &&
    oci_bind_by_name($s, ":ST", $st)) {
    $res = array();
    while (($succ = oci_execute($s)) && !$st)
      $res[] = $ln;
        if (!$succ)
         $res = false;
        }
    oci_free_statement($s);
    return $res;
}
?>









































































<?php

$conn2221 = oci_connect('hr', 'hr','localhost/orcl','utf8');



SetServerOutput2221($conn2221, true);



$stid2221 = oci_parse($conn2221, "
DECLARE   
    TYPE c_names_type IS TABLE OF
    TABLE_REG.APTEKI%TYPE                 
        INDEX BY BINARY_INTEGER;   
    c_names c_names_type;   
    counter integer :=0; 
    CURSOR country_curs IS     
        SELECT APTEKI FROM TABLE_REG ;
BEGIN   

    FOR n IN country_curs LOOP 
        counter := counter +1; 
        c_names(counter) := n.APTEKI; 
    END LOOP; 
    
    DBMS_OUTPUT.PUT_LINE(' ' || c_names.COUNT);
END;
");

// Execute Stateme
oci_execute($stid2221);
$output2221 = GetDbmsOutput2221($conn2221);

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="info">
          <a href="#" class="d-block">Страница администратора</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
        
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class=""></i>
              <p>
              Панель управления
                <i class=""></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="pages/tables/data.php" class="nav-link">
                  <i class=""></i>
                  <p>Аптеки и Пользователи</p>
                </a>
              </li>



              <li class="nav-item">
                <a href="pages/tables/lol.php" class="nav-link">
                  <i class=""></i>
                  <p>Регистрация аптек </p>
                </a>
              </li>
              
            </ul>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../test.php.html">I-KOMEK</a></li>
              <li class="breadcrumb-item active"> </li>
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
       
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box  bg-danger ">
              <div class="inner">
                <h3 style="font-size: 1,2em !important"><?php foreach ($output2 as $line)
  echo "$line<br>";?></h3>

                <p>количество препаратов</p>
              </div>





              
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box  bg-danger ">
              <div class="inner">
              <h3 style="font-size: 1,2em !important"><?php foreach ($output22 as $line)
  echo "$line<br>";?></h3>
                <p>Количество аптек</p>
              </div>





              
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box  bg-danger ">
              <div class="inner">
              <h3 style="font-size: 1,2em !important"><?php foreach ($output222 as $line)
  echo "$line<br>";?></h3>
                <p> Объявления даром</p>
              </div>





              
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>

          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box  bg-danger ">
              <div class="inner">
              <h3 style="font-size: 1,2em !important"><?php foreach ($output2221 as $line)
  echo "$line<br>";?></h3>
                <p> Регистрация Аптек</p>
              </div>





              
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3 style="font-size: 1em !important"><?php foreach ($output as $line)
  echo "$line<br>";?></h3>


                <p>Пользователи </p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
           
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
            <!-- /.card -->


             
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

          
            

            <!-- solid sales graph -->
            
            <!-- /.card -->

            <!-- Calendar -->
          
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
