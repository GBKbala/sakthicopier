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
              <li class="breadcrumb-item active">Stock Entry</li>
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
                <h3 class="card-title">STOCK ENTRY</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="pname" class="col-sm-2 col-form-label">Product Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="pname" placeholder="" name="pname">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label">Product Type</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="ptype" placeholder="" name="ptype">
                    </div>
                  </div>

                   <div class="form-group row">
                    <label for="pcode" class="col-sm-2 col-form-label">Product Code</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="pcode" placeholder="" name="pcode">
                    </div>
                  </div>

                   <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label">Weight </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="weight" placeholder="" name="weight">
                    </div>
                  </div>


                   <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label">Brand(db)</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="brand" name="brand">
                          <option>-select-</option>
                          <option value="1">option 1</option>
                          <option value="2">option 2</option>
                          <option value="3">option 3</option>
                          <option value="4">option 4</option>
                          <option value="5">option 5</option>
                        </select>
                      </div>
                  </div>

                   <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label">Category()</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="category" name="category">
                          <option>-select-</option>
                          <option value="1">option 1</option>
                          <option value="2">option 2</option>
                          <option value="3">option 3</option>
                          <option value="4">option 4</option>
                          <option value="5">option 5</option>
                        </select>
                      </div>
                  </div>

                   <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label">Product Unit </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="punit" placeholder="" name="punit">
                    </div>
                  </div>

                   <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label"> MRP </label>
                    <div class=" input-group-append col-sm-10">
                      <span class="input-group-text">RS.</span>
                      <input type="text" class="form-control" id="mrp" placeholder="" name="mrp">
                      <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label"> Sell Price </label>
                    <div class=" input-group-append col-sm-10">
                      <span class="input-group-text">RS.</span>
                      <input type="text" class="form-control" id="sprice" placeholder="" name="sprice">
                      <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                      </div>
                    </div>
                  </div>

                 

                  <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label">HSN Code</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="hsn" placeholder="" name="hsn">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label">Tax Method()</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="tax" name="tax">
                          <option>-select-</option>
                          <option value="1">option 1</option>
                          <option value="2">option 2</option>
                          <option value="3">option 3</option>
                          <option value="4">option 4</option>
                          <option value="5">option 5</option>
                        </select>
                      </div>
                  </div>

                   <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alert Qt []</label>
                    <div class="input-group-append col-sm-10">
                      <input type="text" class="form-control" id="alert" name="alert">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fas fa-check"></i></span>
                        </div>
                    </div>
                  </div> 




                   <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Product Image</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="image" name="pimage">
                        <!-- <div class="input-group-append">
                          <span class="input-group-text"><i class="fas fa-check"></i></span>
                        </div> -->
                    </div>
                  </div>  

                   <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label">Product Invoice Detail</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="invdet" placeholder="" name="invdet">
                    </div>
                  </div>

                   <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label">Supplier Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="supname" placeholder="" name="supname">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label">Part No</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="partno" placeholder="" name="partno">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="ptype" class="col-sm-2 col-form-label"> Supplier Price </label>
                    <div class=" input-group-append col-sm-10">
                      <span class="input-group-text">RS.</span>
                      <input type="text" class="form-control" id="suprice" placeholder="" name="sup_price">
                      <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                      </div>
                    </div>
                  </div> 
                  <!-- </div> -->
                 
                <!-- /.card-body -->
                <!-- <div class="card-footer"> -->
                 
                  <input type="button" value="ADD PRODUCT" id="btnadd" class="btn btn-info float-right">
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
   $(document).ready(function() {
     $("#btnadd").click(function(){
      
      // alert("working");

       var pname = $("#pname").val();
       var ptype = $("#ptype").val();
       var pcode = $("#pcode").val();
       var weight = $("#weight").val();
       var brand = $("#brand").val();
       var category = $("#category").val();
       var punit = $("#punit").val();
       var mrp = $("#mrp").val();
       var sprice = $("#sprice").val();
       var promotion = $("#promotion").val();
       var hsn = $("#hsn").val();
       var tax = $("#tax").val();
       var palert = $("#alert").val();
       var pimage = $("#image").val();
       var invdetail = $("#invdet").val();
       var supname = $("#supname").val();
       var partno = $("#partno").val();
       var sup_price = $("#suprice").val();
        alert(sup_price);


       $.ajax({

        url : "stock_entrysdata.php",
        method : "POST",
        data : {pname:pname, ptype:ptype, pcode:pcode, weight:weight, brand:brand, category:category, punit:punit, mrp:mrp, sprice:sprice, promotion:promotion, hsn:hsn, tax:tax, palert:palert, pimage:pimage, invdetail:invdetail, supname:supname, partno:partno, sup_price:sup_price},
        
        success : function(response){
          alert("stock entry collected");

        }
      });



        $("#pname").val("");
        $("#ptype").val("");
        $("#pcode").val("");
        $("#weight").val("");
        $("#brand").val("");
        $("#category").val("");
        $("#punit").val("");
        $("#mrp").val("");
        $("#sprice").val("");
        $("#promotion").val("");
        $("#hsn").val("");
        $("#tax").val("");
        $("#alert").val("");
        $("#image").val("");
        $("#invdet").val("");
        $("#supname").val("");
        $("#partno").val("");
        $("#suprice").val("");
        $("#pname").focus();


       

     });
   });
 </script>