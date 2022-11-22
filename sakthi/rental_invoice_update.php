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
include 'dbconnect.php';

$id=$_GET['id'];

$object = new db_conn();

$link=$object-> connection();

$qr=mysqli_query($link,"select * from tblrent_invoice where billno='$id'");


while($dt=mysqli_fetch_array($qr)){

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
              <li class="breadcrumb-item active">Rental Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


	 <div class="card card-danger">
        <div class="card-header">
           <h3 class="card-title"> RENTAL INVOICE ENTRY</h3>
        </div>

          <div class="alert alert-light" role="alert" style="background">
        <div class="container overflow-hidden">
          <div class="card-body card-light">
           <!--  <div class="row">
              <div class="col-sm-6">
                <label class="col-sm-2 col-form-label">Date :</label>
                <input type="date" value="<?php; ?>"  class="form-control" id="date">
              </div>
            </div>   -->
            <div class="form-group row">
              <div class="col-sm-6">
                <label class="col-sm-2 col-form-label">Bill No :</label>
                <input type="text" class="form-control" id="blno" value="<?php echo$dt['billno'];  ?>" readonly>
              </div>

            <div class="col-sm-6">
                <label class="col-sm-2 col-form-label">Date :</label>
                <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" id="date" value="<?php echo$dt['rdate'];  ?>">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-6">
                <label class="col-sm-8 col-form-label">Customer Name :</label>
                <input type="text" class="form-control" id="cname" value="<?php echo$dt['cname'];  ?>">
              </div>

            <div class="col-sm-6">
                <label class="col-sm-2 col-form-label">Code :</label>
                <input type="text" class="form-control"  id="code" value="<?php echo$dt['rcode'];  ?>">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-6">
                <label class="col-sm-3 col-form-label">Model No :</label>
                <input type="text" class="form-control" id="mdno" value="<?php echo$dt['modelno'];  ?>">
              </div>

            <div class="col-sm-6">
                <label class="col-sm-3 col-form-label">Serial No :</label>
                <input type="text" class="form-control"  id="seno" value="<?php echo$dt['serialno']; } ?>">
              </div>
            </div>
           


            <div class="row">
              
              <div class="col-sm-4">
                <label class="col-sm-6 col-form-label">Description :</label>
                <textarea class="form-control" rows="3" id="desc"></textarea>
              </div>

              <div class="col-sm-4">
                <label class="col-sm-12 col-form-label">Meter Reading :</label>
                <textarea class="form-control" rows="3" id="mread"></textarea>
              </div>

              <div class="col-sm-4">
                <label class="col-sm-6 col-form-label">D.O.Reading :</label>
                <textarea class="form-control" rows="3" id="doread"></textarea>
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
                      <th>Meter Reading</th>
                      <th>D.O.Reading </th>
                      <th style="width: 10px;">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
              <input type="button" value="UPDATE" id="btnconfirm" class="btn btn-primary float-right">
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
    var s=0;
    $("#btnsave").click(function(){
      //alert("hello");
      s=s+1;
      var desc = $("#desc").val();
      var mread = $("#mread").val();
      var doread = $("#doread").val();
      
      var x ="<tr><td>"+s+"</td><td class='d1'>"+desc+"</td><td class='d2'>"+mread+"</td><td class='d3'>"+doread+"</td><td><i class='fa-solid fa-trash-can'></i></tr>";

      $("tbody").append(x); 

    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#btnconfirm").click(function(){
      // alert("work");

       var rblno = $("#blno").val();
       var date = $("#date").val();
       var cname = $("#cname").val();
       var code = $("#code").val();
       var mdno = $("#mdno").val();
       var seno = $("#seno").val();
       var desc = $("#desc").val();
       var mread = $("#mread").val();
       var doread = $("#doread").val();
       // alert(doread);


       $.ajax({

        url : "rental_invoice_sdata_update.php",
        method : "GET",
        data : {rblno:rblno, date:date, cname:cname, code:code, mdno:mdno, seno:seno, desc:desc, mread:mread, doread:doread},
        success : function(response){
          alert("rental sdata updated");
        }

       });


    });

  });

</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#btnconfirm").click(function(){
      alert("ok");

      var rblno = $("#blno").val();
      var ar1=[];
      var ar2=[];
      var ar3=[];

      $(".d1").each(function(){
        ar1.push($(this).text());
      });
      

       $(".d2").each(function(){
        ar2.push($(this).text());
      });
      

       $(".d3").each(function(){
        ar3.push($(this).text());
      });
      // alert(ar3);

      $.ajax({

        url : "rental_invoice_adata_update.php",
        method : "GET",
        data : {rblno:rblno, ar1:ar1, ar2:ar2, ar3:ar3},
        success : function(response){
          alert("rental adata updated");
        }

      });

    });
  });

</script>