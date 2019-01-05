<!DOCTYPE html>
<html>
<head>
   <style>
     @page { margin: 100px 10px; }
     #header { position: fixed; left: 0px; top: -100px; height: 60px; width: 50%; background-color: #18377a; }
     #header1 { position: fixed; top: -100px; right: 0px; height: 60px; width: 50%; background-color: #18377a; }
     #footer { position: fixed; left: 0px; bottom: -100px; right: 0px; height: 150px; background-color: #18377a; }
     #footer .page:after { content: counter(page, upper-roman); }
   </style>
</title>
</head>
<body>
<!-- <img  src='<?php echo PATH; ?>images/logo-dark1.png?>' alt=''/> -->
<div id="header">
	<h3 style="color: #f0e319;text-align: left;"><b>SMART TRAVEL</b></h3><span style="color: #f0e319">Inter-City Travelling Bus System</span>
</div>
<div id="header1">
	<h3 style="color: #f0e319;text-align: right;">http://www.smarttravel.pk</h3>
</div>
<div id="footer">
	<h3 style="color: #f0e319;"><b>Guidelines</b></h3>
	<ul style="color: #f0e319;">
		<li>Be there before 15 min of departure.</li>
		<li>Company is not responsible of your carry belongings.</li>
		<li>Do not eat anything taking from other passengers.</li>
	</ul>
</div>
<h1 style="text-align: center;color: #18377a">Travelling<span style="color: #f0e319"> Receipt </span></h1>
<h2 class="text-bold" style="color: #18377a"><u>Traveller</u><span style="color: #f0e319"><u> Info</u></h2>
<table style="border:1px;width:100%;">
	<tr>
		<th style="border:1px;text-align: center ;color: #18377a">ID</th>
		<th style="border:1px;text-align: center ;color: #18377a">Name</th>
		<th style="border:1px;text-align: center ;color: #18377a">CNIC</th>
		<th style="border:1px;text-align: center ;color: #18377a">Gender</th>
	</tr>
	<tr>
		<td style="border:1px;text-align: center "><?php if($this->session->userdata('user_id')){ echo "U-".$this->session->userdata('user_id');}
							 else{echo "V-".$this->session->userdata('p_id');} ?></td>
		<td style="border:1px;text-align: center "><?php echo $this->session->userdata('username'); ?></td>
		<td style="border:1px;text-align: center "><?php echo $this->session->userdata('cnic'); ?></td>
		<td style="border:1px;text-align: center "><?php echo $this->session->userdata('gender'); ?></td>
	</tr>
</table>
<br><br>
<h2 class="text-bold" style="color: #18377a"><u>Travelling</u><span style="color: #f0e319"><u> Info</u></h2>
<table style="border:1px;width:100%;">
		<tr>
		<th style="border:1px;text-align: center ;color: #18377a">Reservation ID</th>
		<th style="border:1px;text-align: center ;color: #18377a">Source</th>
		<th style="border:1px;text-align: center ;color: #18377a">Destination</th>
		<th style="border:1px;text-align: center ;color: #18377a">Departure</th>
		<th style="border:1px;text-align: center ;color: #18377a">Arrival</th>
	</tr>
	<tr>
		<td style="border:1px;text-align: center;color: red"><u><?php echo $this->session->userdata('reservation_id'); ?><u></td>
		<td style="border:1px;text-align: center"><?php echo $this->session->userdata('source'); ?></td>
		<td style="border:1px;text-align: center"><?php echo $this->session->userdata('destination'); ?></td>
		<td style="border:1px;text-align: center"><?php echo $this->session->userdata('busdate').' - '.$this->session->userdata('departure'); ?></td>
		<td style="border:1px;text-align: center"><?php echo $this->session->userdata('arrival').' - '; 
							   if($this->session->userdata('day') == 1){ echo "Next Day";}
							   else{echo "Same Day";}; ?></td>
	</tr>
</table>
<br><br>
<h2 class="text-bold" style="color: #18377a"><u>Technical</u><span style="color: #f0e319"><u> Info</u></span></h2>
<table style="border:1px;width:100%;">
	<tr>
		<th style="border:1px;text-align: center ;color: #18377a">Status</th>
		<th style="border:1px;text-align: center ;color: #18377a">Distace</th>
		<th style="border:1px;text-align: center ;color: #18377a">Fare/Discount(%)</th>
		<th style="border:1px;text-align: center ;color: #18377a">Seat #</th>
	</tr>
	<tr>
		<td style="border:1px;text-align: center"><?php if($this->session->userdata('state') == 1){echo "Booked, Payment Pending.";}
								elseif($this->session->userdata('state') == 2){echo "Confirmed";}
								elseif($this->session->userdata('state') == 3){echo "Refund";}
								elseif($this->session->userdata('state') == 4){echo "Cancelled";} ?></td>
		<td style="border:1px;text-align: center"><?php echo $this->session->userdata('km'); ?></td>
		<td style="border:1px;text-align: center"><?php if($this->session->userdata('logged_in')){ echo $this->session->userdata('offer_price')*$this->session->userdata('num-seat').'/'.$this->session->userdata('offer_value');}
              else echo $this->session->userdata('offer_price').'/'.$this->session->userdata('offer_value');  ?></td>
		<td style="border:1px;text-align: center"><?php echo $this->session->userdata('seatno'); ?></td>
	</tr>
</table>
</body>
</html>