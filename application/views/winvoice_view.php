<?php
				$date1 = date_create($row->start_date);
				$date2 = date_create($row->end_date);
				$diff = date_diff($date1,$date2);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
<title>  ::~Car Rental~:: </title>
</head>
	 <body onload="JavaScript:document.body.focus(); " onkeydown="return showKeyCode(event)">
		<div id="container">  
			<div id="main">
				<div id="main_body">

					<div id="middle">
					<div class="mid_box">
	

<div id="main_invoice" style="margin: 0 auto;width: 800px;">

	<div id="invoice" style="margin: 0 auto;min-height: 1100px;width: 743px;">
		<div id="shop_title_box" style="background-color: lightgray;float: left;height: auto;margin-bottom: 0;margin-left: 0px;margin-right: 0;margin-top: 0;text-align: right;width: 100%;">			
			<div id="shop_title_test" style="background:#C0C4C0;color: black;float: left;font-family: 'Times New Roman';font-size: 24px;font-weight: normal;height: 50%;margin-bottom: 0;margin-right: 0;margin-top: 0;text-align: center;width: 100%;"> Car Rental </div>
			<div id="shop_address_test" style="    color: black;float: left;font-family: arial;font-size: 13px;font-weight: normal;height: 16px;margin-bottom: 0;margin-right: 0;margin-top: 0;text-align: center;width: 100%;"> Metropolitan University, <br>Zindabazar,Sylhet . </div>			
			<div id="shop_title_test"  style="background:#C0C4C0;color: black;float: left;font-family: 'Times New Roman';font-size: 24px;font-weight: normal;height: 50%;margin-bottom: 0;margin-right: 0;margin-top: 0;text-align: center;width: 100%;"> Wrong Invoice Information </div>
			<!--<div id="shop_title_test" style="color: red;font-size: 30px;"><b> RETURN : </b> <big style="font-size: 18px; font-weight:bold;"> ৳ </big> 0</div>-->
		</div><!--end of shop_title_box-->
		<div id="invoice_details_header" style="border-bottom: 1px dashed #959595;float: left;margin: 0 0 5px;min-height: 74px;width: 740px;">	
			<div id="inv_details_one" style="float: left;margin: 0 0 0 0px;min-height: 70px;width: 406px;">
				<div id="left_div" style="float: left;margin: 0;min-height: 20px;padding: 2px;width: 100%;"> 	
					<h2 style="float: left;font-family: arial;font-size: 13px;margin: 0;min-height: 20px;padding: 1px;width: 125px;"> Customer Name </h2>
					<div class="dot2" style="color: black;float: left;font-size: 14px;margin: 0;min-height: 20px;width:7px;">:</div>
					<p style="float: left;font-family: arial;font-size: 12px;margin: 0;min-height: 22px;text-align: left;width: 66%;line-height: 22px;"><?php echo $row->firstname.' '.$row->lastname;?></p>
					<h2 style="float: left;font-family: arial;font-size: 13px;margin: 0;min-height: 20px;padding: 1px;width: 125px;"> Contact No </h2>
					<div class="dot2" style="color: black;float: left;font-size: 14px;margin: 0;min-height: 20px;width:7px;">:</div>
					<p style="float: left;font-family: arial;font-size: 12px;margin: 0;min-height: 22px;text-align: left;width: 66%;line-height: 22px;"> <?php echo $row->mobile;?> </p>
					<h2 style="float: left;font-family: arial;font-size: 13px;margin: 0;min-height: 20px;padding: 1px;width: 125px;">Address:</h2>	<div class="dot2"  style="color: black;float: left;font-size: 14px;margin: 0;min-height: 20px;width:7px;">:</div>
					<p style="float: left;font-family: arial;font-size: 12px;margin: 0;min-height: 22px;text-align: left;width: 66%;line-height: 22px;"> <?php echo $row->address;?> </p>	
				</div>  <!--end of left div-->			
			</div><!--end of inv_details_one-->
			<div id="inv_details_two" style=" float: left;margin-left: 49px;min-height: 66px;padding: 2px;width: 281px;"> 
				<div id="right_div" style="float: left;margin: 0;min-height: 20px;width: 326px;margin-left: 28px;"> 
					<h2 style="float: left;font-family: arial;font-size: 13px;margin: 0;min-height: 20px;padding: 1px;width: 125px;">Invoice ID:</h2>
					<div class="dot2" style="color: black;float: left;font-size: 14px;margin: 0;min-height: 20px;width:7px;">:</div>
					<p style="float: left;font-family: arial;font-size: 12px;line-height: 22px;margin: 0;min-height: 20px;text-align: left;text-indent: 5px;width: 145px;"><?php echo $row->booking_id;?></p>
					<h2 style="float: left;font-family: arial;font-size: 13px;margin: 0;min-height: 20px;padding: 1px;width: 125px;">Date</h2>	
					<div class="dot2" style="color: black;float: left;font-size: 14px;margin: 0;min-height: 20px;width:7px;">:</div>
					<p style="float: left;font-family: arial;font-size: 12px;line-height: 22px;margin: 0;min-height: 20px;text-align: left;text-indent: 5px;width: 145px;"> <?php echo date('d-m-Y',strtotime($row->transaction_date));?></p>
					<h2 style="float: left;font-family: arial;font-size: 13px;margin: 0;min-height: 20px;padding: 1px;width: 125px;"></h2>	
					<div class="dot2" style="color: black;float: left;font-size: 14px;margin: 0;min-height: 20px;width:7px;"></div>
					<p style="float: left;font-family: arial;font-size: 12px;line-height: 22px;margin: 0;min-height: 20px;text-align: left;text-indent: 5px;width: 145px;"> </p>
					
				</div>
			</div><!--end of inv_details_two-->
		</div> <!--end of invoice_details_header-->	
		
			 <div class="mid_box_top">
			   <p> Order Description</p>
			 </div>
			<div class="CSSTableGenerator" style="">
				 <table>	
					<tbody>
					<tr>
						<td style="background: #8DC0EF;color: #FFFFFF;font-family: Arial;font-size: 13px;text-align: center;">Car Name</td>
						<td style="background: #8DC0EF;color: #FFFFFF;font-family: Arial;font-size: 13px;text-align: center;">Start Date</td>
						<td style="background: #8DC0EF;color: #FFFFFF;font-family: Arial;font-size: 13px;text-align: center;">End Date</td>
						<td style="background: #8DC0EF;color: #FFFFFF;font-family: Arial;font-size: 13px;text-align: center;">Total</td>
					</tr>
					<tr>
						<td style="text-align:left;width:35%;">
							<h1 style="height:13px;font-size:12px;font-weight:normal;margin:0px;"><?php echo $row->vehicle_name;?></h1>						</td>
						<td style="text-align:right;width:8%">
							<?php echo date('d-m-Y',strtotime($row->start_date));?>
						</td>
						<td style="text-align:right;width:8%">
							<?php echo date('d-m-Y',strtotime($row->end_date));?>
						</td>
						<td style="text-align:right;width:9%">
							<big style="font-size: 11px; font-weight:bold;"> BDT</big> <?php echo $tot = ($diff->d+1)*$row->curr_rate;?> 
						</td>
						
						
					</tr>
						
					<tr style="border-width: 0 0px 0 0;background:  #8DC0EF;background: -moz-linear-gradient(center top , #8DC0EF 5%, #4997E5 100%) repeat scroll 0 0 #8DC0EF;">
						<td colspan="8" style="text-align:left; font-size:10px;"> 
							<!--<big style="font-size: 11px; font-weight:bold;"> In Word: </big>Eighty  -->
						</td>
					</tr>
				</tbody></table>		
			</div> <!--	End of CSSTableGenerator DIV-->		
		<div id="transaction_details" style="float: left;margin-top: 5px;min-height: 110px;width: 743px;min-height:170px;">
			<div id="t_left" style=" float: left;min-height: 105px;width: 452px;">
			</div><!--end of t_left div-->			
			<div id="t_right" style="~background: none repeat scroll 0 0 green;float: left;min-height: 105px;width: 291px;"> 
				<div id="left_portion" style="~background: none repeat scroll 0 0 white;float: left;min-height: 105px;width: 138px;">
					<div class="title_name" style="~background: none repeat scroll 0 0 yellow;float: left;font-family: arial;font-size: 13px;line-height: 20px;margin: 5px 0 0;min-height: 20px;text-indent: 5px;width: 132px;">Grand Total</div>
					<div class="dot" style="color: black;float: left;font-size: 14px;margin: 5px 0 0;min-height: 20px;width: 5px;">:</div>
					<div class="title_name" style="~background: none repeat scroll 0 0 yellow;float: left;font-family: arial;font-size: 13px;line-height: 20px;margin: 5px 0 0;min-height: 20px;text-indent: 5px;width: 132px;">Total Paid</div> <div class="dot" style="color: black;float: left;font-size: 14px;margin: 5px 0 0;min-height: 20px;width: 5px;">:</div>
														</div>
				<div id="ri8_portion" style="~background: none repeat scroll 0 0 brown;float: left;min-height: 100px;width: 102px;">
					<div class="title_result" style="~background: none repeat scroll 0 0 red;float: left;font-family: arial;font-size: 13px;line-height: 20px;margin: 5px 0 0;min-height: 20px;text-align: right;text-indent: 5px;width: 101px;">
						<big style="font-size: 11px; font-weight:bold;"> BDT </big> <?php echo $tot;?>					
					</div>
					<div class="title_result" style="~background: none repeat scroll 0 0 red;float: left;font-family: arial;font-size: 13px;line-height: 20px;margin: 5px 0 0;min-height: 20px;text-align: right;text-indent: 5px;width: 101px;">
						<big style="font-size: 11px; font-weight:bold;"> BDT </big>0					
					</div>
				</div> <!--END OF ri8_portion-->
			</div><!--end of t_right div-->			
		</div><!--end of transaction div-->		
		<div id="signature_area" style="height:55px;float:left;margin:0px  auto;">	
			<div id="signature_one" style="float: left;height: 25px;width: 371px;">
				<div class="customer_signature" style="line-height:25px;width:350 px;height:25px;font-size:13px;border-bottom:1px solid  gray;!background:white;text-align:center;width:190px;"> Customer's Signature	</div>
			</div>
			<div id="signature_one"  style="float: left;height: 25px;width: 371px;"> 
				<div class="customer_signature2" style="line-height:25px;~width:350 px;height:25px;font-size:13px;margin-left:165px;border-bottom:1px solid  gray;text-align:center;min-width:190px;"> On behalf of Car Rental </div>
			</div>
		</div> <!--end of signature-->
	</div> <!--end of invoice-->
</div>
	
						</div>					
					</div>	<!-- end of middle/middle_sale-->

   			</div> <!--end of main_body-->
<div class="clear" style="clear:both;~background:black;height:1px;">	</div>

			</div> <!--end of main-->
		</div><!--end of container-->
</body><!--end of body-->
</html>