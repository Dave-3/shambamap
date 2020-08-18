<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.vasterad.com/themes/listeo/dashboard-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Aug 2020 10:02:26 GMT -->
<head>
	<meta charset="utf-8">
	<title>Listeo Invoice</title>
	<link rel="stylesheet" href="css/invoice.css">
</head> 

<body>

<!-- Print Button -->
<a href="javascript:window.print()" class="print-button">Print this invoice</a>

<!-- Invoice -->
<div id="invoice">

	<!-- Header -->
	<div class="row">
		<div class="col-md-6">
			<div id="logo"><img src="images/logo.png" alt=""></div>
		</div>

		<div class="col-md-6">	

			<p id="details">
				<strong>Order:</strong> #00124 <br>
				<strong>Issued:</strong> 20/07/2019 <br>
				Due 7 days from date of issue
			</p>
		</div>
	</div>


	<!-- Client & Supplier -->
	<div class="row">
		<div class="col-md-12">
			<h2>Invoice</h2>
		</div>

		<div class="col-md-6">	
			<strong class="margin-bottom-5">Supplier</strong>
			<p>
				Listeo Ltd. <br>
				21 St Andrews Lane <br>
				London, CF44 6ZL, UK <br>
			</p>
		</div>

		<div class="col-md-6">	
			<strong class="margin-bottom-5">Customer</strong>
			<p>
				John Doe <br>
				36 Edgewater Street <br>
				Melbourne, 2540, Australia <br>
			</p>
		</div>
	</div>


	<!-- Invoice -->
	<div class="row">
		<div class="col-md-12">
			<table class="margin-top-20">
				<tr>
					<th>Description</th>
					<th>Quantity</th>
					<th>VAT</th>
					<th>Total</th>
				</tr>

				<tr>
					<td>Extended Plan</td> 
					<td>1</td>
					<td>$0.00</td>
					<td>$9.00</td>
				</tr>
			</table>
		</div>
		
		<div class="col-md-4 col-md-offset-8">	
			<table id="totals">
				<tr>
					<th>Total Due</th> 
					<th><span>$9.00</span></th>
				</tr>
			</table>
		</div>
	</div>


	<!-- Footer -->
	<div class="row">
		<div class="col-md-12">
			<ul id="footer">
				<li><span>www.example.com</span></li>
				<li><a href="http://www.vasterad.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="09666f6f606a6c496c71686479656c276a6664">[email&#160;protected]</a></li>
				<li>(123) 123-456</li>
			</ul>
		</div>
	</div>
		
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>

<!-- Mirrored from www.vasterad.com/themes/listeo/dashboard-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Aug 2020 10:02:27 GMT -->
</html>