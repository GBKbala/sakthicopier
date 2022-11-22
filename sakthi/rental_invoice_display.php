<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SAKTHI COPIER | Dashboard</title>

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
<?php
include 'nav.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Stock Display</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

       <div class="card">
              <div class="card-header">
                <h3 class="card-title"> Stock DataTable</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SI.No</th>
                    <th>Bill No</th>
                    <th>Date</th>
                    <th>Customer Name</th>
                    <th>Code</th>
                    <th>Model No</th>
                    <th>Serial No</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>View</th>
                  </tr>
                  </thead>
                  <tbody>

<?php
include "dbconnect.php";

$object = new db_conn();

$link=$object-> connection();

$qr=mysqli_query($link,"select * from tblrent_invoice");
$ct=0;

while($dt=mysqli_fetch_array($qr)){
$ct=$ct+1;
?>

                   
                      <tr>
                        <td><?php echo $ct; ?></td>
                        <td><?php echo $dt["billno"];  ?></td>
                        <td><?php echo $dt["rdate"];  ?></td>
                        <td><?php echo $dt["cname"];  ?></td>
                        <td><?php echo $dt["rcode"];  ?></td>
                        <td><?php echo $dt["modelno"];  ?></td>
                        <td><?php echo $dt["serialno"];  ?></td>
                        <td><a href="rental_invoice_update.php?id=<?php echo $dt['billno']; ?>">
                          <i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href="rental_invoice_delete.php?id=<?php echo $dt['billno']; ?>">
                          <i class="fa-solid fa-trash-can"></i></a></td>
                        <td><a href="rental_invoice_print.php?id=<?php echo $dt['billno']; ?>"><i class="fa-solid fa-eye"></i></a>
                        </td>
                      </tr>
                  </tbody>
<?php
}
?>                  


                </table>
              </div>
              <!-- /.card-body -->
            </div>
           </div>
            
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
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
</script>  
</body>
</html> 