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

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Purchase</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


   <div class="card card-danger">
        <div class="card-header">
           <h3 class="card-title"> PURCHASE ENTRY</h3>
        </div>

        <div class="alert alert-light" role="alert" style="background">
        <div class="container overflow-hidden">
          <div class="card-body card-light">
            <div class="form-group row">
             <div class="col-sm-6">
                <label class="col-sm-2 col-form-label">Date :</label>
                <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" id="date">
              </div>
               <div class="col-sm-6">
                <label class="col-sm-8 col-form-label">Invoice No :</label>
                <input type="text" class="form-control" id="blno">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6">
                <label class="col-sm-10 col-form-label">Warehouse* :</label>
                <input type="text" class="form-control" id="to">
              </div>

            <div class="col-sm-6">
                <label class="col-sm-10 col-form-label">Status* :</label>
                <input type="text" class="form-control"  id="sub">
              </div>
            </div>

             <div class="form-group row">
              <div class="col-sm-6">
                <label class="col-sm-10 col-form-label">Attach Document :</label>
                <input type="file" class="form-control" id="to">
              </div>
            </div>

             <div class="row">
              
               <div class="col-sm-3">
                <label class="col-sm-12 col-form-label">Product(code-name) :</label>
                <input type="text" class="form-control" name="">
              </div>

              <div class="col-sm-3">
                <label class="col-sm-6 col-form-label">M.R.P :</label>
                <input type="text" class="form-control" name="">
              </div>

               <div class="col-sm-3">
                <label class="col-sm-6 col-form-label">Net Unit Cost :</label>
                <input type="text" name="date" class="form-control" value="" id="doread">
              </div>

              <div class="col-sm-3">
                <label class="col-sm-6 col-form-label">Quantity :</label>
                <input type="text" class="form-control" name="">
              </div>
            </div>

             <div class="row">
              
               <div class="col-sm-4">
                <label class="col-sm-12 col-form-label">Discount :</label>
                <input type="text" class="form-control" name="">
              </div>

               <div class="col-sm-4">
                <label class="col-sm-12 col-form-label">Product Tax :</label>
                <input type="text" class="form-control" name="">
              </div>

                <div class="col-sm-4">
                <label class="col-sm-12 col-form-label">Sub Total :</label>
                <input type="text" class="form-control" name="">
              </div>
          </div><br>  
            <input type="button" value="ADD" id="btnsave" class="btn btn-primary float-right">
          </div>

           <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Product(code-name)</th>
                      <th>M.R.P</th>
                      <th>Net Unit Cost</th>
                      <th>Quantity</th>
                      <th>Discount</th>
                      <th>Product Tax</th>
                      <th>Subtottal</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
           </div>
           <label>more options</label>     
            <div class="form-group row">
             <div class="col-sm-6">
                <label class="col-sm-8 col-form-label">Order Tax :</label>
                <input type="text" class="form-control"  id="date">
              </div>
               <div class="col-sm-6">
                <label class="col-sm-12 col-form-label">Discount(5/5%) :</label>
                <input type="text" class="form-control" id="blno">
              </div>

              <div class="col-sm-6">
                <label class="col-sm-10 col-form-label">Shipping :</label>
                 <input type="text" class="form-control"  id="date">
              </div>
               <div class="col-sm-6">
                <label class="col-sm-8 col-form-label">Payment Terms :</label>
                <input type="text" class="form-control" id="blno">
              </div>
            </div>

            <div class="form-group row">
             <div class="col-sm-12">
                <label class="col-sm-6 col-form-label">Note :</label>
                <textarea class="form-control" rows="4"></textarea>
              </div>  


              </div>
              <input type="button" value="CONFIRM" id="btnconfirm" class="btn btn-primary float-right">
              <!-- <input type="button" value="CONFIRM" id="btnconfirm" class="btn btn-primary float-right"> -->
          </div>
          <div class="card-body">
            <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Items 2(210.0)</th>
                      <th>Total 2,600</th>
                      <th>Order Discount 0.0</th>
                      <th>Shipping 0.0</th>
                      <th>Grand Total</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
            
          </div>

      </div>
  </div>

 
          
                    
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>                  