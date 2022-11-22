<!DOCTYPE html>
<html>
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


<?php
include "crud.php";

$obj = new crud();

$id=$_GET['id'];

$data=$obj->displayid("tblbiller","bfname",$id);
$ct=0;
foreach ($data as $get) {
$ct=$ct+1;



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
              <li class="breadcrumb-item active">Biller Update</li>
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
                <h3 class="card-title">BILLER UPDATE</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="pname" class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $get['bfname'];?>" id="fname" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $get['blname'];?>" id="lname" placeholder="">
                    </div>
                  </div>


                   <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">
                      <select class="form-control" value="<?php echo $get['bgender'];?>" id="gender">
                          <option>-Select-</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                      </select>
                      </div>
                  </div>

                   <div class="form-group row">
                    <label for="pcode" class="col-sm-2 col-form-label">Company </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $get['bcompany'];?>" id="company" placeholder="">
                    </div>
                  </div>

                   <div class="form-group row">
                    <label for="pcode" class="col-sm-2 col-form-label">Phone Number </label>
                    <div class="col-sm-10 input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                      <input type="text" class="form-control" value="<?php echo $get['bphone'];?>" id="phno" placeholder="">
                    </div>
                  </div>

                  <div class="form-group row">
                     <label for="pcode" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10 input-group-prepend">
                        <span class="input-group-text">@</span>
                        <input type="mail" class="form-control" value="<?php echo $get['bemail'];?>" id="mail" placeholder="">
                      </div>
                  </div>

                   <div class="form-group row">
                    <label for="pcode" class="col-sm-2 col-form-label">User Name </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $get['buname'];?>" id="uname" placeholder="">
                    </div>
                  </div>

                   <div class="form-group row">
                    <label for="pcode" class="col-sm-2 col-form-label"> Password </label>
                    <div class="col-sm-10">
                      <input type="Password" class="form-control" value="<?php echo $get['bpwd'];?>" id="pwd" placeholder="">
                    </div>
                  </div>

                   <div class="form-group row">
                    <label for="pcode" class="col-sm-2 col-form-label">Confirm Password </label>
                    <div class="col-sm-10">
                      <input type="Password" class="form-control" id="cpwd" placeholder="">
                    </div>
                  </div>

                 

                   <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                      <select class="form-control" value="<?php echo $get['bstatus'];?>" id="status">
                          <option>-Select-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                      </select>
                      </div>
                  </div>

                   <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label">Group </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $get['bgroup'];}?>" id="group" placeholder="">
                    </div>
                  </div>


                  
                  <!-- </div> -->
                 
                <!-- /.card-body -->
                <!-- <div class="card-footer"> -->
                 
                  <input type="button" id="btnconfirm" value="CONFIRM" class="btn btn-info float-right">
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

 </body>
 </html>
 <script type="text/javascript">
   $(document).ready(function(){
      $("#btnconfirm").click(function(){
        // alert("hello");

        var bfname = $("#fname").val();
        var blname = $("#lname").val();
        var bgender = $("#gender").val();
        var bcompany = $("#company").val();
        var bphone = $("#phno").val();
        var bemail = $("#mail").val();
        var buname = $("#uname").val();
        var bpwd = $("#pwd").val();
        var bstatus = $("#status").val();
        var bgroup = $("#group").val();
         // alert(bgender);

        // alert(bgroup);


        $.ajax({

          url : "biller_entry_sdata_update.php",
          method : "GET",
          data : {bfname:bfname, blname:blname, bgender:bgender, bcompany:bcompany, bphone:bphone, bemail,bemail, buname:buname, bpwd:bpwd, bstatus:bstatus, bgroup:bgroup},
          success : function(response){
            alert("biller data updated");
          }

        });

      });

    });

 </script>