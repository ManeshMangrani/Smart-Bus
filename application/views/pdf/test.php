<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1 style="text-align: center; color: #18377a"> <b>Tickets Information</b> </h1><p style="text-align: center; color: #18377a"> <?php echo $this->session->userdata('sdate')." "; ?><span style="color: red"> TO </span><?php echo " ".$this->session->userdata('ldate'); ?></p>
<table style="border:1px ;width:100%;">
	<tr>
		<th style="border:1px">Reservation_Id</th>
		<th style="border:1px">T_Id</th>
		<th style="border:1px">Ticket Status</th>
		<th style="border:1px">Traveller ID</th>
		<th style="border:1px">Shedule ID</th>
		<th style="border:1px">Issuance Time</th>

	</tr>
	<?php foreach($html as $a){ ?>
	<tr style="text-align: center;">
		<td style="border:1px;color: red"><u><?php echo $a['reservation_id'] ?></u></td>
		<td style="border:1px"><?php echo $a['t_id'] ?></td>
		<td style="border:1px"><?php echo $a['state'] ?></td>
		<td style="border:1px"><?php if($a['p_id'] == NULL){ echo "U-".$a['trav_id'];} else{echo "V-".$a['p_id'];} ?></td>
		<td style="border:1px"><?php echo $a['schedule_id'] ?></td>
		<td style="border:1px"><?php echo $a['created_at'] ?></td>
	</tr>
	<?php } ?>
	
</table>
</body>
</html>