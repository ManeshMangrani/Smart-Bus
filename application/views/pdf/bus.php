<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1 style="text-align: center; color: #18377a"> <b>Buses Information</b> </h1><p style="text-align: center; color: #18377a"><span style="color: red"> TILL </span><?php echo date("Y-m-d"); ?></p>
<table style="border:1px ;width:100%;">
	<tr>
		<th style="border:1px">Bus Id</th>
		<th style="border:1px">Registration #</th>
		<th style="border:1px">Seating Capacity</th>
		<th style="border:1px">Class</th>
		<th style="border:1px">Description</th>
		<th style="border:1px">Tracker ID</th>
		<th style="border:1px">Cam IDs</th>
		<th style="border:1px">Induction Date</th>

	</tr>
	<?php foreach($html as $a){ ?>
	<tr style="text-align: center;">
		<td style="border:1px"><?php echo $a['bus_id'] ?></td>
		<td style="border:1px"><?php echo $a['regs_no'] ?></td>
		<td style="border:1px"><?php echo $a['seats'] ?></td>
		<td style="border:1px"><?php echo $a['class'] ?></td>
		<td style="border:1px"><?php echo $a['des'] ?></td>
		<td style="border:1px"><?php echo $a['tracker_id'] ?></td>
		<td style="border:1px"><?php echo $a['cam_id'] ?></td>
		<td style="border:1px"><?php echo $a['created_at'] ?></td>
	</tr>
	<?php } ?>
	
</table>
</body>
</html>