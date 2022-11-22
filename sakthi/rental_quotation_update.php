<!DOCTYPE html>
<html lang="en">
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
<body class="hold-transition sidebar-mini layout-fixed">
  
<?php
include 'nav.php';
?> 

<?php
include "crud.php";

$obj = new crud();

$id=$_GET['id'];

$data=$obj->displayid("tblrent_quotation","rqto",$id);
$ct=0;
foreach ($data as $get) {
$ct=$ct+1;



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
              <li class="breadcrumb-item active">Rental Quotation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



   <div class="card card-danger">
        <div class="card-header">
           <h3 class="card-title"> RENTAL QUOTATION ENTRY</h3>
        </div>

        <div class="alert alert-light" role="alert" style="background">
          <div class="container overflow-hidden">
            <div class="card-body card-light">
              <div class="row">
                <div class="col-sm-6">
                  <label class="col-sm-2 col-form-label">Date :</label>
                  <input type="date" value="<?php echo $get['rqdate']; ?>"  class="form-control" id="date">
                </div>
              </div>  
              <div class="form-group row">
                <div class="col-sm-6">
                  <label class="col-sm-2 col-form-label">To :</label>
                  <input type="text" class="form-control" id="to" value="<?php echo $get['rqto']; ?>" readonly>
                </div>

                <div class="col-sm-6">
                  <label class="col-sm-6 col-form-label">Subject :</label>
                  <input type="text" class="form-control"  id="sub" value="<?php echo $get['rqsubject']; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label class="col-sm-2 col-form-label">Details :</label>
                  <input type="text" class="form-control" id="detail" value="<?php echo $get['rqdetails']; } ?>">
                </div>
              </div>  



            <div class="row">
              <div class="col-sm-3">
                <label class="col-sm-6 col-form-label">Description :</label>
                <textarea class="form-control" rows="3" id="desc"></textarea>
              </div>

              <div class="col-sm-2">
                <label class="col-sm-12 col-form-label">Rental Amount :</label>
                <textarea class="form-control" rows="3" id="rent"></textarea>
              </div>


              <div class="col-sm-2">
                <label class="col-sm-9 col-form-label">Free Copies  :</label>
                <textarea class="form-control" rows="3" id="free"></textarea>
              </div> 

              <div class="col-sm-2">
                <label class="col-sm-10 col-form-label">Additional :</label>
                <textarea class="form-control" rows="3"  id="add">
                  </textarea>
              </div>

              <div class="col-sm-3">
                <label class="col-sm-6 col-form-label">Agreement :</label>
                <textarea class="form-control" rows="3" id="agree"></textarea>


              </div>
            </div>
          </div>
          
            <input type="button" value="ADD" id="btnsave" class="btn btn-primary float-right">

          </div>

           <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px;">S.N0</th>
                      <th>Description</th>
                      <th style="width: 10px;">Rental Amount</th>
                      <th style="width: 10px;">Free Copies</th>
                      <th style="width: 10px;">Additional</th>
                      <th>Agreement</th>
                      <th style="width: 10px;">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
              <input type="button" value="CONFIRM" id="btnconfirm" class="btn btn-primary float-right">
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
    var s=0;
    $("#btnsave").click(function(){
      //alert("hello");
      s=s+1;
      var desc = $("#desc").val();
      var rent = $("#rent").val();
      var copy = $("#free").val();
      var add = $("#add").val();
      var agree = $("#agree").val();

      // alert(agree);

      var x ="<tr><td>"+s+"</td><td>"+desc+"</td><td>"+rent+"</td><td>"+copy+"</td><td>"+add+"</td><td>"+agree+"</td><td><i class='fa-solid fa-trash-can'></i></td></tr>";

      $("tbody").append(x);



    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#btnconfirm").click(function(){
      // alert("work");

       
       var rqdate = $("#date").val();
       var rqto = $("#to").val();
       var rqsub = $("#sub").val();
       var rqdet = $("#detail").val();
       var rqdesc = $("#desc").val();
       var rqramt = $("#rent").val();
       var rqfcopy = $("#free").val();
       var rqadd = $("#add").val();
       var rqagree = $("#agree").val();
       // alert(rqagree);

      


        $.ajax({

        url : "rental_quotation_sdata_update.php",
        method : "GET",
        data : {rqdate:rqdate, rqto:rqto, rqsub:rqsub, rqdet:rqdet, rqdesc:rqdesc, rqramt:rqramt, rqfcopy:rqfcopy, rqadd:rqadd, rqagree:rqagree},
        success : function(response){
          alert("rental mquotation sdata updated");
        }

       });

        // window.location.href="rental_quotation_display.php";


    });

  });

</script>