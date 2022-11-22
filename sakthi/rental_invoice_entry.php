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
  <style type="text/css">
    #doread{
      width: 495px;
      height: 86px;
      font-size: 18px;
    }

     #poread{
      width: 495px;
      height: 86px;
      font-size: 18px;
    }


  </style>
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
           <div class="form-group row">
              <div class="col-sm-6">
                <label class="col-sm-2 col-form-label">Bill No :</label>
                <input type="text" class="form-control" id="blno">
              </div>

            <div class="col-sm-6">
                <label class="col-sm-2 col-form-label">Date :</label>
                <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" id="date">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-6">
                <label class="col-sm-8 col-form-label">Customer Name :</label>
                <!-- <input type="text" class="form-control" id="cname"> -->
                <select class="form-control" id="cname" name="">
                          <option>-select-</option>
                          <option value="1">option 1</option>
                          <option value="2">option 2</option>
                          <option value="3">option 3</option>
                          <option value="4">option 4</option>
                          <option value="5">option 5</option>
                        </select>
                      </div>
              <!-- </div> -->

           

            <div class="col-sm-6">
                <label class="col-sm-2 col-form-label">Code :</label>
                <input type="text" class="form-control"  id="code">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-6">
                <label class="col-sm-3 col-form-label">Model No :</label>
                <input type="text" class="form-control" id="mdno">
              </div>

            <div class="col-sm-6">
                <label class="col-sm-3 col-form-label">Serial No :</label>
                <input type="text" class="form-control"  id="seno">
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-sm-12">
                <label class="col-sm-2 col-form-label">Details :</label>
                <input type="text" class="form-control" id="detail">
              </div>
            </div>   -->


            <div class="row">
              
               <!-- <div class="col-sm-4">
                <label class="col-sm-6 col-form-label">Description :</label>
                <textarea class="form-control" rows="3" id="desc"></textarea>
              </div> -->

              <div class="col-sm-6">
                <label class="col-sm-12 col-form-label">Meter Reading :</label>
                <textarea class="form-control" rows="3" id="mread"></textarea>
              </div>

               <div class="col-sm-6">
                <label class="col-sm-6 col-form-label">D.O.Reading :</label>
                <input type="date" name="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" id="doread">
              </div>

               <div class="col-sm-6">
                <label class="col-sm-12 col-form-label">Previous Reading :</label>
                <textarea class="form-control" rows="3" id="pread"></textarea>
              </div>

               <div class="col-sm-6">
                <label class="col-sm-12 col-form-label">Previous Date Of Reading :</label>
                <input type="date" name="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" id="poread">
              </div>


              <!-- <div class="col-sm-4">
                <label class="col-sm-6 col-form-label">D.O.Reading :</label>
                <textarea class="form-control" rows="3" id="doread"></textarea>
              </div> -->
            </div>
          </div>
            <!-- <input type="button" value="ADD" id="btnsave" class="btn btn-primary float-right"> -->
          </div>

         <!--   <div class="card-body">
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
                  <tbody id="empty">
                  </tbody>
                </table>
              </div> -->
              <input type="button" value="CONFIRM" id="btnconfirm" class="btn btn-primary float-right"><br><br>

              <div class="form-group row">
                <div class="col-sm-4">
                  <label class="col-sm-10 col-form-label">Monthly Rent :</label>
                  <input type="number" class="form-control" id="mdno">
                </div>

              <div class="col-sm-4">
                <label class="col-sm-10 col-form-label">Serial No :</label>
                <input type="number" class="form-control"  id="seno">
              </div>

              <div class="col-sm-4">
                <label class="col-sm-12 col-form-label">Per Copy Cost :</label>
                <input type="number" class="form-control"  id="seno">
              </div>
            </div>


               <div class="form-group row">
                <div class="col-sm-6">
                  <label class="col-sm-6 col-form-label">Sgst % :</label>
                  <input type="number" class="form-control" id="mdno">
                </div>

              <div class="col-sm-6">
                <label class="col-sm-6 col-form-label">Cgst % :</label>
                <input type="number" class="form-control"  id="seno">
              </div>

            </div>
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
<!-- <script type="text/javascript">
  $(document).ready(function(){
    var cnt=0;
    $("#btnsave").click(function(){
      //alert("hello");
      var count = $('table tr').length;
      var desc = $("#desc").val();
      var mread = $("#mread").val();
      var doread = $("#doread").val();
      
      var x ="<tr id='tdfirst'><td>"+count+"</td><td class='d1'>"+desc+"</td><td class='d2'>"+mread+"</td><td class='d3'>"+doread+"</td><td><i class='fa-solid fa-trash-can'></i></tr>";

      $("tbody").append(x); 

       $("#desc").val("");
       $("#mread").val("");
       $("#desc").focus();


    });
  });
</script> -->

<!-- <script>
$("table").on('click', '#tdfirst', function() {
  // alert("working");
    var currentRow = $(this).closest("tr");
    // alert("working");
    if (confirm('Are you sure ?')) {
        $(this).remove();
    }

    var count = $("table tr").length;
    for(var i=0;i<count-1;i++)
    {
      var x = document.getElementById("table").rows[i+1].cells;
      x[0].innerHTML = i+1;
    }
    alert(count);

});
</script> -->

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
       // var desc = $("#desc").val();
       var mread = $("#mread").val();
       var doread = $("#doread").val();
       var pread = $("#pread").val();
       var poread = $("#poread").val();
       alert(poread);
        


       $.ajax({

        url : "rental_invoice_sdata.php",
        method : "GET",
        data : {rblno:rblno, date:date, cname:cname, code:code, mdno:mdno, seno:seno,mread:mread,doread:doread, pread:pread, poread:poread},
        success : function(response){
          alert("rental sdata collected");
        }

       });

       $("#blno").val("");
       $("#date").val("");
       $("#cname").val("");
       $("#code").val("");
       $("#mdno").val("");
       $("#seno").val("");
       $("#mread").val("");
       $("#doread").val("");
       $("#pread").val("");
       $("#poread").val("");
       $("#blno").focus();
       // window.location.href='rental_invoice_display.php';

     });

  });

</script>



<!-- <script type="text/javascript">
  $(document).ready(function(){
    $("#btnconfirm").click(function(){
      // alert("ok");

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

        url : "rental_invoice_adata.php",
        method : "GET",
        data : {rblno:rblno, ar1:ar1, ar2:ar2, ar3:ar3},
        success : function(response){
          alert("rental adata collected");
        }

      });

      $("tbody").remove();

    });
  });

</script> -->