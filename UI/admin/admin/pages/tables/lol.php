
<?php
session_start();

$conn = oci_connect('hr', 'hr','localhost/orcl','utf8');
if (!$conn) {
    $e = oci_error();
}



error_reporting(E_ERROR | E_PARSE);




        $stid = oci_parse($conn, 'begin :cursor := APTEKI_JANA; end;');
        $p_cursor = oci_new_cursor($conn);

        //Send parameters variable  value  lenght


        //Bind Cursor     put -1
        oci_bind_by_name($stid, ':cursor', $p_cursor, -1, OCI_B_CURSOR);

        // Execute Statement
        oci_execute($stid);
        oci_execute($p_cursor, OCI_DEFAULT);

        oci_fetch_all($p_cursor, $cursor, null, null, OCI_FETCHSTATEMENT_BY_ROW);
        ;       

    
/*
    for ($x = 0; $x <= 106; $x+=1) {
         print_r(($cursor[$x]['FIRST_NAME'])) ;
      }
      
*/
    
            
  
          
?>







<?php
session_start();

$conn = oci_connect('hr', 'hr','localhost/orcl','utf8');
if (!$conn) {
    $e = oci_error();
}



error_reporting(E_ERROR | E_PARSE);




        $stid = oci_parse($conn, 'begin :cursor := APTEKI_JANA22; end;');
        $p_cursor = oci_new_cursor($conn);

        //Send parameters variable  value  lenght


        //Bind Cursor     put -1
        oci_bind_by_name($stid, ':cursor', $p_cursor, -1, OCI_B_CURSOR);

        // Execute Statement
        oci_execute($stid);
        oci_execute($p_cursor, OCI_DEFAULT);

        oci_fetch_all($p_cursor, $cursorv, null, null, OCI_FETCHSTATEMENT_BY_ROW);
        ;       

    
/*
    for ($x = 0; $x <= 106; $x+=1) {
         print_r(($cursor[$x]['FIRST_NAME'])) ;
      }
      
*/
    
            
  
          
?>









































<?php
session_start();

$conn = oci_connect('hr', 'hr','localhost/orcl','utf8');
if (!$conn) {
    $e = oci_error();
}







        $stid = oci_parse($conn, 'begin :cursor := USER22; end;');
        $p_cursor = oci_new_cursor($conn);

        //Send parameters variable  value  lenght


        //Bind Cursor     put -1
        oci_bind_by_name($stid, ':cursor', $p_cursor, -1, OCI_B_CURSOR);

        // Execute Statement
        oci_execute($stid);
        oci_execute($p_cursor, OCI_DEFAULT);

        oci_fetch_all($p_cursor, $cursorz, null, null, OCI_FETCHSTATEMENT_BY_ROW);
        ;       

    
/*
    for ($x = 0; $x <= 106; $x+=1) {
         print_r(($cursor[$x]['FIRST_NAME'])) ;
      }
      
*/
    
            
  
          
?>





<?php

if(isset($_POST['subToDel'])){
    $key=$_POST['keyToDel'];
    $sql2="SELECT * FROM TABLE_REG WHERE APTEKI = '$key'";
    $stid3 = oci_parse($conn,$sql2);
    oci_execute($stid3);
    if(oci_num_rows($stid3)==0){
        $del = "begin good_job.auistyru(:zbai1);
        end;";
        $stid2 = oci_parse($conn,$del);




        oci_bind_by_name($stid2, ':zbai1', $key,62);


  



        
        oci_execute($stid2);

        

    }
    

}







if(isset($_POST['subToDDD'])){
    $key=$_POST['keyToDDD'];
    $sql2="SELECT * FROM TABLE_REG WHERE APTEKI = '$key'";
    $stid3 = oci_parse($conn,$sql2);
    oci_execute($stid3);
    if(oci_num_rows($stid3)==0){
        $del = "begin good_job3.oshiru99(:zbai1);
        end;";
        $stid2 = oci_parse($conn,$del);




        oci_bind_by_name($stid2, ':zbai1', $key,62);


  



        
        oci_execute($stid2);

        

    }
    

}
























?>


    




<!DOCTYPE html>
<html lang="en">
<head>



  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini"> 
<form action="" method="post">

<div class="wrapper">
  <!-- Navbar -->
 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light"> Страница администратора</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="../../index.php" class="d-block">Панель</a>
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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class=""></i>
              <p>
                Панель управления
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/data.php" class="nav-link active">
                  <i class=""></i>
                  <p>Аптеки и Пользователи
</p>
                </a>
              </li>
              
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/lol.php" class="nav-link active">
                  <i class=""></i>
                  <p>Регистрация аптек
</p>
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>База Данных</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Аптеки</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>названия</th>
                    <th>Адрес</th>
                    <th>Телефон</th>
                    <th>Телефон2</th>
                    <th>доб</th>

                    <th>---</th>
                    <th>удал</th>

                    <th>---</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                           
                           for ($x = 0; $x <(count ($cursor)) ; $x+=1) {
                               
                 ?>
                  <tr>
                    <td><?php  echo (( $cursor[$x]['APTEKI'])) ?></td>
                    <td><?php  echo ( $cursor[$x]['APTEKA_ADDRESS'] ) ?></td>

                    <td><?php  echo ( $cursor[$x]['APTEKA_NUMBER'] ) ?></td>
                    <td><?php  echo ( $cursor[$x]['APTEKA_NUMBER_URL'] ) ?></td>

                    
                    <td>
                    <input type="checkbox" name="keyToDel" value="<?php print_r($cursor[$x]['APTEKI']); ?>"  >

                    </td>
                    <td>   
                                <input type="submit" name="subToDel">
                    </td>
                    <td>
                    <input type="checkbox" name="keyToDDD" value="<?php print_r($cursor[$x]['APTEKI']); ?>"  >

                    </td>
                    <td>   
                                <input type="submit" name="subToDDD" value="delete">
                    </td>
                  </tr>
                  
                  <?php }?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>

                    <th></th>
                    <th></th>

                    <th>-</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Пользователи</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>названия</th>
                    <th>Стоимость</th>
                    <th>Номер телефона</th>
                    <th>---</th>


                  </tr>
                  </thead>
                  <tbody>
                  <?php
                           
                           for ($x = 0; $x <(count ($cursorv)) ; $x+=1) {
                               
                 ?>
                  <tr>
                    <td><?php  print_r (( $cursorv[$x]['MEDICINE_NAME'])) ?></td>

                    <td><?php  print_r ( $cursorv[$x]['MEDICINE_PRICE'] ) ?></td>
                    <td><?php  print_r ( $cursorv[$x]['MEDICINE_NUMBER'] ) ?></td>


                    <td>---</td>
                  </tr>
                  
                  <?php }?>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th> --</th>
                    

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
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script></form>
</body>
</html>
