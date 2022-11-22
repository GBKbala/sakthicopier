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
  	*{
  		font-size: 12px;
  	}
  	#bold{
  		font-weight: bold;
  	}
  	#center{
  		text-align: center;
  	}
  	.special{
  		font-size: 18px;
  	}
  	th, tr, td{
  		border-width: solid black;
  	}
  </style>
</head>
<body>

	<?php

include 'dbconnect.php';

$id=$_GET['id'];

$object = new db_conn();

$link=$object-> connection();

$qr=mysqli_query($link,"select * from tblrent_invoice where billno='$id'");


while($dt=mysqli_fetch_array($qr)){

?>
	<table class="table table-bordered">
		<!-- <caption>Invoice</caption> -->
		<tr>
			<td colspan="3" rowspan="3" id="bold">Sakthi Copier<br>36,A subbaiahpuram<br>2nd street,<br>Thoothukudi.<br><b>Ph:0461 2337755/94431 72023</b></td>
			
			<td colspan="2"></td>
			<td colspan="2" id="bold"><center>Dated :<br><?php echo $dt['rdate'];  ?></center></td>
		</tr>
		<tr>
			<td colspan="2" id="bold"><center>Invoice/Bill No</center></td>
			<td colspan="2" id="bold"><center>Customer Code</center></td>
		</tr>
		<tr>
			<td colspan="2"><center><?php echo $dt['billno'];  ?></center></td>
			<td colspan="2"><center><?php echo $dt['rcode'];  ?></center></td>
		</tr>
		<tr>
			<td colspan="3" rowspan="2" id="bold">M/S.INDIRA COMPUTERS,<br>1,Bhagat singh bus stand,<br>Trichendur-628 215<br>Cell:94420 52171</td>
			<td colspan="2" id="bold"><center>M/c Model No</center></td>
			<td colspan="2" id="bold"><center>M/c Serial No</center></td>
		</tr>
		<tr>
			<td colspan="2"><center><?php echo $dt['modelno']; ?></center></td>
			<td colspan="2"><center><?php echo $dt['serialno']; } ?></center></td>
		</tr>

		<tr>
			<th colspan="2" id="center"><b>DESCRIPTION</b></th>
			<th colspan="2" id="center"><b>METER READING</b></th>
			<th colspan="2" id="center"><b>DATE OF READING</b></th>
			<th id="center"><b>AMOUNT</b></th>
		</tr>



		<tr>
			<td colspan="2">CSMA Charges Per Only</td>	
			<td colspan="2"></td>
			<td colspan="2"></td>
			<td id="bold">Rs:0.20 paise</td> 
		</tr>
		<tr>
			<td colspan="2">Current Month meter reading</td>

<?php
$object = new db_conn();
$link=$object-> connection();


$qr1=mysqli_query($link,"select * from tblrent_invoice_details where billno='$id'");


while($dt1=mysqli_fetch_array($qr1)){

?>		
			<td colspan="2" id="center"><?php echo$dt1['meter_read']; } ?></td>
			<!-- <td colspan="2" id="center"></td> -->
			<td></td> 
		</tr>
		<tr>
			<td colspan="2">Starter meter reading</td>	
			<td colspan="2" id="center"></td>
			<td colspan="2" id="center">07.01.2022</td>
			<td></td> 
		</tr>
		<tr>
			<td colspan="2">Gross reading</td>	
			<td colspan="2" id="center">4,350</td>
			<td colspan="2"></td>
			<td></td> 
		</tr>
		<tr>
			<td colspan="2">Net Billable Copies</td>	
			<td colspan="2" id="center">4,350*0.20</td>
			<td colspan="2"></td>
			<td>Rs:870.00</td> 
		</tr>
		<tr>
			<td colspan="2">Charges @ Rs.0.20 Per Copy </td>	
			<td colspan="2"></td>
			<td colspan="2">Round off</td>
			<td>Rs:000.00</td> 
		</tr>
		<tr>
			<td colspan="5"></td>
			<td>Total Amount</td>	
			<td id="bold">Rs:870</td> 
		</tr>
		<tr>
			<td colspan="7">AMOUNT IN WORDS : Rupees Eight hundred and seventy only </td>
		</tr>
		<tr>
			<td colspan="7"><b>*NOTE :OFFICE WORKING HOURS 10.00 AM TO 6.00 PM</b></td>
		</tr>
		<tr>
			<td style="padding-bottom: 2em; padding-top: 2em; font-size: 16px; text-align: center;">(Customer's<br> signature with Name<br> and Stamp)</td>
			<td colspan="4"><span style="text-decoration: underline;" id="bold">RTC OR NEFT PAYMENT DETAILS:</span><br>ACCOUNT HOLDER NAME:<b> SANKARANARAYANAN SORIMUTHU</b><br>BANK:<b>TAMILNADU MERCANTILE BANK</b><br>ACCOUNT NUMBER:<b>174100050325871</b><br>IFSC:<b>TMBL0000174</b><br>BRANCH:<b> KAMARAJ COLLEGE BRANCH</b><br>AREA:<b>THOOTHUKUDI</b></td>	
			<td colspan="2" id="bold"><center><span style="font-size: 18px;">CSMA<br><br>Per copy 0.20 paise</span></center></td>
		</tr>
		<tr>
			<td colspan="5" id="bold"><center>PAYABLE TO <span class="special"> SAKTHI COPIER</span></center></td>
			<td colspan="2" rowspan="2"><b>FOR SAKTHI COPIER</b><br><br><br><br><br>AUTHORISED SIGNATURE</td>
		</tr>
		<tr>
			<td colspan="5" id="center">PLEASE PAY BY CROSSED CHEQUE / DEMAND DRAFT ONLY</td>	
		</tr>						
		
	</table>
</body>
</html>