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
              <li class="breadcrumb-item active">Rental Machine Quotation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


	 <div class="card card-danger">
        <div class="card-header">
           <h3 class="card-title"> RENTAL MACHINE QUOTATION ENTRY</h3>
        </div>

      	<div class="alert alert-light" role="alert" style="background">
  			<div class="container overflow-hidden">
  				<div class="card-body card-light">
  					<div class="row">
    					<div class="col-sm-6">
    						<label class="col-sm-2 col-form-label">Date :</label>
   							<input type="date" value="<?php echo date('Y-m-d'); ?>"  class="form-control" id="date">
  						</div>
  					</div>	
  					<div class="form-group row">
    					<div class="col-sm-6">
    						<label class="col-sm-2 col-form-label">To :</label>
   							<input type="text" class="form-control" id="to">
  						</div>

						<div class="col-sm-6">
    						<label class="col-sm-2 col-form-label">Subject :</label>
   							<input type="text" class="form-control"  id="sub">
  						</div>
  					</div>
  				<!-- 	<div class="row">
    					<div class="col-sm-12">
    						<label class="col-sm-2 col-form-label">Details :</label>
   							<input type="text" class="form-control" id="detail">
  						</div>
  					</div>	 -->


  					<div class="row">
  						
  						 <div class="col-sm-3">
    						<label class="col-sm-6 col-form-label">Particulars :</label>
   							<textarea class="form-control" rows="3" id="desc"></textarea>
  						</div>

    					<div class="col-sm-3">
    						<label class="col-sm-12 col-form-label">Quantity :</label>
   							<textarea class="form-control" rows="3" id="rent"></textarea>
  						</div>


						<div class="col-sm-3">
    						<label class="col-sm-9 col-form-label">Rate  :</label>
   							<textarea class="form-control" rows="3" id="free"></textarea>
  						</div> 

  						  <div class="col-sm-3">
    						<label class="col-sm-8 col-form-label">Amount :</label>
   							<textarea class="form-control" rows="3"  id="add"></textarea>
  						</div>
            </div><br>

  					<!-- 	<div class="col-sm-3">
    						<label class="col-sm-6 col-form-label">Agreement :</label>
   							<textarea class="form-control" rows="3" id="agree"></textarea>
  						</div>
  					</div> -->

          
  					<input type="button" value="ADD" id="btnsave" class="btn btn-primary float-right">
  				</div>

  				 <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <!-- <th style="width: 10px;">S.N0</th> -->
                      <th>Particulars</th>
                      <th style="width: 10px;">Quantity</th>
                      <th style="width: 10px;">Rate</th>
                      <th style="width: 10px;">Amount</th>
                      <!-- <th>Agreement</th> -->
                      <th style="width: 10px;">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
              <input type="button" value="CONFIRM" id="btnconfirm" class="btn btn-primary float-right"><br><br>

                <div class="form-group row">
              <div class="col-sm-6">
                <label class="col-sm-6 col-form-label">SGST % :</label>
                <input type="number" class="form-control" id="sgst">
              </div>

            <div class="col-sm-6">
                <label class="col-sm-6 col-form-label">CGST  % :</label>
                <input type="number" class="form-control"  id="cgst">
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

<script type="text/javascript">
	$(document).ready(function(){
		// var s=0;
		$("#btnsave").click(function(){
			//alert("hello");
			// s=s+1;
			var desc = $("#desc").val();
			var rent = $("#rent").val();
			var copy = $("#free").val();
			var add = $("#add").val();
			// var agree = $("#agree").val();

			// alert(agree);

			var x ="<tr><td class='a1'>"+desc+"</td><td class='a2'>"+rent+"</td><td class='a3'>"+copy+"</td><td class='a4'>"+add+"</td><td class='a5'><i class='fa-solid fa-trash-can'></i></td></tr>";

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
       // var rqdet = $("#detail").val();
       var cgst = $("cgst").val();
       var sgst = $("sgst").val();
       // alert(rqdet);
       
      


        $.ajax({

        url : "rental_mquotation_sdata.php",
        method : "GET",
        data : {rqdate:rqdate, rqto:rqto, rqsub:rqsub, rqdet:rqdet},
        success : function(response){
          alert("rental mquotation sdata collected");
        }

       });

        // window.location.href="rental_quotation_display.php";


    });

  });

</script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#btnconfirm").click(function(){
      // alert("work");

      var rqto = $("#to").val();
      var ar1=[];
      var ar2=[];
      var ar3=[];
      var ar4=[];
      // var ar5=[];

      $(".a1").each(function(){
        ar1.push($(this).text());
      });

      $(".a2").each(function(){
        ar2.push($(this).text());
      });
      // alert(ar2);

      $(".a3").each(function(){
        ar3.push($(this).text());
      });

      $(".a4").each(function(){
        ar4.push($(this).text());
      });
      alert(ar4);

      // $(".a5").each(function(){
      //   ar5.push($(this).text());
      // });
      // alert(ar5);

      // alert(ar5);

      $.ajax({
        url:"rental_mquotation_adata.php",
        method:"GET",
        data:{rqto:rqto, ar1:ar1, ar2:ar2, ar3:ar3, ar4:ar4, ar5:ar5},
        success:function(response){
          alert("rental mquotation a data collected ");
        }

      });
      


    });
  });  
</script>