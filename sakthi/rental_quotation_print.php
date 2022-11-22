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
 <body>
<br>
<br>
<br>
<br>
<br>
<?php
include "crud.php";

$obj = new crud();

$id=$_GET['id'];

$data=$obj->displayid("tblrent_quotation","rqto",$id);
// $ct=0;
foreach ($data as $get) {
// $ct=$ct+1;



?> 
<span>GST IN:33BOPS2206C1ZL</span>
<span style="float: right;">Date :<?php echo $get['rqdate']; ?></span>
<center><span style="text-decoration:underline;"><b>QUOTAION</b></span></center>
<span>To:<?php echo $get["rqto"]; ?>
  <!-- M/S. Blackstone Shipping Private Limited,<br>
  4 b/209 A,5th street, C.G.E.colony,<br>
  Tuticorin-628003. --></span><br>

<span><b> DEAR SIR,</b>
       <center><span><b>Sub: <?php echo $get["rqsubject"];}  ?></b></span></center>
      <label> As per the personal discussion we had with you please find enclose herewith the exclusive quote for you kind perusal.</label>
</span>
<br>

  <!-- <hr style="border-bottom:solid dark blue 1px;"> -->
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">S.(No)</th>
      <th scope="col">Product Description</th>
      <th scope="col">Permonth Rental amount  </th>
      <th scope="col">Permonth Free Copies</th>
      <th scope="col">Additionala copies over & above percopy</th>
      <th scope="col" >Agreement Period</th>
      <th scope="col">Deposit Amount</th>
    </tr>
  </thead>
<?php
$id1=$_GET['id'];

$data1=$obj->displayid("tblrent_quotation_details","rqto",$id1);
$ct=0;
foreach ($data1 as $get1) {
$ct=$ct+1;



?> 

  <tbody class="table-group-divider">
    <tr>
      <td scope="row"><?php echo $ct?></td>
      <td><?php echo $get1['description'];?><!-- Copier + Network<br>Printer +
      color scanner(A4 Size)<br> ADF Duplex  --></td>
      <td> <?php echo $get1['ramount'];?> </td>
      <td ><?php echo $get1['fcopy'];?></td>
      <td><?php echo $get1['addition'];?></td>
      <td><?php echo $get1['agree'];}?></td>
      <td>dep</td>
    </tr>
  </tbody>
  </table>  
    
    <label>Expecting your favourable reply and for further clarification please feel free to<br> contact us&nbsp;<b> 94431 72023/ 90033 54099.</b></label>
    <center><span>Assuring Best services at all times.</span></center>

    <span style="text-decoration:underline;float:left;"><b>TERMS & CONDITIONS</b></span><br>
    <ol style="float: left;">
      <li>Price : Add 18% Taxes.</li>
      <!-- <li>Advanced : 4 months(deposit) </li> -->
      <li>Payment : As per agreement</li>
      <li>Validity : 30 Days</li>
    </ol><br>
    <p style="float: right;">For<label style="font-size: 18px; color:blue;">&nbsp;Sakthi Copier</label><br><br><br> <label>Authorised Signature</label></p>
   
</body>
</html>