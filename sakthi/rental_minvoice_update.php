<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
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
              <li class="breadcrumb-item active">Rental Machine Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<?php
include 'crud.php';		//class file

$obj = new crud();

$id=$_GET["id"];	

$data=$obj->displayid9("tblrent_minvoice","customer",$id);
foreach ($data as $get) {
	

?>

   <div class="card card-danger">
        <div class="card-header">
           <h3 class="card-title"> RENTAL MACHINE INVOICE ENTRY</h3>
        </div>

          <div class="alert alert-light" role="alert" style="background">
        <div class="container overflow-hidden">
          <div class="card-body card-light">
           <div class="form-group row">
               <div class="col-sm-6">
                <label class="col-sm-2 col-form-label">Date :</label>
                <input type="date" class="form-control" value="<?php echo $get["mrdate"];  ?>" id="date">
              </div>

              <div class="col-sm-6">
                <label class="col-sm-6 col-form-label">Reference :</label>
                <input type="text" class="form-control" value="<?php echo $get["reference"];  ?>" id="ref">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-6">
                <label class="col-sm-8 col-form-label">Biller :</label>
                <input type="text" class="form-control" value="<?php echo $get["biller"];  ?>" id="bill">
              </div>

            <div class="col-sm-6">
                <label class="col-sm-6 col-form-label">Customer :</label>
                <input type="text" class="form-control" value="<?php echo $get["customer"];  ?>"  id="custom" readonly>
              </div>
            </div>

            <div class="row">
              
               <div class="col-sm-4">
                <label for="ptype" class="col-sm-12 col-form-label">Details</label>
                    <div class="col-sm-12">
                      <select class="form-control"  id="detail">
                          <option>-select-</option>
                          <option value="1">option 1</option>
                          <option value="2">option 2</option>
                          <option value="3">option 3</option>
                          <option value="4">option 4</option>
                          <option value="5">option 5</option>
                        </select>
                      </div>
              </div>

              <div class="col-sm-4">
                <label class="col-sm-12 col-form-label">Rate :</label>
                <input type="text" name="" class="form-control"  id="rate"> 
              </div>

                <div class="col-sm-4">
                <label class="col-sm-12 col-form-label">Quantity :</label>
                <input type="text" name="" class="form-control"  id="quant"> 
              </div>

              

              <!-- <div class="col-sm-4">
                <label class="col-sm-6 col-form-label">D.O.Reading :</label>
                <textarea class="form-control" rows="3" id="doread"></textarea>
              </div> -->
            </div>
          </div>
            <input type="button" value="ADD" id="btnsave" class="btn btn-primary float-right">
          </div>

          <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px;">S.N0</th>
                      <th>Details</th>
                      <th>Rate</th>
                      <th>Quantity</th>
                      <th style="width: 10px;">Delete</th>
                    </tr>
                  </thead>
                  <tbody id="empty">
                  </tbody>
                </table>
              </div><br>

               <div class="form-group row">
               <div class="col-sm-2">
                <label class="col-sm-6 col-form-label">C.GST :</label>
                <input type="text" class="form-control" value="<?php echo $get["cgst"];  ?>" id="cgst">
              </div>

              <div class="col-sm-2">
                <label class="col-sm-6 col-form-label">S.GST :</label>
                <input type="text" class="form-control" value="<?php echo $get["sgst"];  ?>" id="sgst">
              </div>

               <div class="col-sm-2">
                <label class="col-sm-12 col-form-label">Search :</label>
                <input type="text" class="form-control" value="<?php echo $get["search"];  ?>" id="search">
              </div>

              <div class="col-sm-2">
                <label class="col-sm-12 col-form-label">Service Charge :</label>
                <input type="text" class="form-control" value="<?php echo $get["scharge"];  ?>" id="scharge">
              </div>

              <div class="col-sm-2">
                <label class="col-sm-8 col-form-label">Packing :</label>
                <input type="text" class="form-control" value="<?php echo $get["packing"];  ?>" id="pack">
              </div>
            </div>
<?php
}

?>
              <input type="button" value="CONFIRM" id="btnconfirm" class="btn btn-primary float-right">
          </div>
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
<script type="text/javascript">
  $(document).ready(function(){
    $("#btnconfirm").click(function(){
      // alert("helo");
      var mrdate= $("#date").val();
      var ref = $("#ref").val();
      var biller = $("#bill").val();
      var customer = $("#custom").val();
      var cgst = $("#cgst").val();
      var sgst = $("#sgst").val();
      var search = $("#search").val();
      var scharge = $("#scharge").val();
      var pack = $("#pack").val();
      // alert(pack);

      $.ajax({
        url:"rental_minvoice_sdata_update.php",
        method:"GET",
        data:{mrdate:mrdate, ref:ref, biller:biller, customer:customer, cgst:cgst, sgst:sgst, search:search, scharge:scharge, pack:pack},
        success:function(response){
          alert("rental m invoice s data updated");
        }

      });

      window.location.href="rental_minvoice_display.php";



    });
  });
</script>