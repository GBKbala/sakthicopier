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
              <li class="breadcrumb-item active">customer Entry</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <!-- /.card -->
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">CUSTOMER ENTRY</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="pname" class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="fname" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="lname" placeholder="">
                    </div>
                  </div>


                   <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="gender">
                          <option>-Select-</option>
                          <option>Male</option>
                          <option>Female</option>
                      </select>
                      </div>
                  </div>

                   <div class="form-group row">
                    <label for="pcode" class="col-sm-2 col-form-label">Company </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="company" placeholder="">
                    </div>
                  </div>

                   <div class="form-group row">
                    <label for="pcode" class="col-sm-2 col-form-label">Phone Number </label>
                    <div class="col-sm-10 input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                      <input type="text" class="form-control" id="phone" placeholder="">
                    </div>
                  </div>

                  <div class="form-group row">
                     <label for="pcode" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10 input-group-prepend">
                        <span class="input-group-text">@</span>
                        <input type="mail" class="form-control" id="mail" placeholder="">
                      </div>
                  </div>

                   <div class="form-group row">
                    <label for="pcode" class="col-sm-2 col-form-label">User Name </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="uname" placeholder="">
                    </div>
                  </div>

                   <div class="form-group row">
                    <label for="pcode" class="col-sm-2 col-form-label"> Password </label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="pwd" placeholder="">
                    </div>
                  </div>

                   <div class="form-group row">
                    <label for="pcode" class="col-sm-2 col-form-label">Confirm Password </label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="cpwd" placeholder="">
                    </div>
                  </div>

                   <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="status">
                          <option>-Select-</option>
                          <option>1</option>
                          <option>2</option>
                      </select>
                      </div>
                  </div>

                   <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label">Remark </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="group" placeholder="">
                    </div>
                  </div>


                  
                  <!-- </div> -->
                 
                <!-- /.card-body -->
                <!-- <div class="card-footer"> -->
                 
                  <input type="button" value="CONFIRM" id="btnconfirm" class="btn btn-info float-right">
                <!-- </div> -->
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
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
<!-- <script src="dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
 </body>
 </html>
 <script type="text/javascript">
   $(document).ready(function(){
      $("#btnconfirm").click(function(){
        // alert("hello");

        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var gender = $("#gender").val();
        var company = $("#company").val();
        var phone = $("#phone").val();
        var email = $("#mail").val();
        var uname = $("#uname").val();
        var pwd = $("#pwd").val();
        var cpwd = $("#cpwd").val();
        var status = $("#status").val();
        var group = $("#group").val();
        // alert(group);


        $.ajax({

          url : "customer_entrysdata.php",
          method : "GET",
          data : {fname:fname, lname:lname, gender:gender, company:company, phone:phone, email,email, uname:uname, pwd:pwd, cpwd:cpwd, status:status, group:group},
          success : function(response){
            alert("customer data collected");
          }

        });
      });

    });

 </script>