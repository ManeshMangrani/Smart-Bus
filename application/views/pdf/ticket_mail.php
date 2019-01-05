<!DOCTYPE html>
<html>
<head>
</title>
</head>
<body>
<!-- <img  src='<?php echo PATH; ?>images/logo-dark1.png?>' alt=''/> -->
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