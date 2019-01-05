<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1 style="text-align: center; color: #18377a"> <b>Schedules Information</b> </h1><p style="text-align: center; color: #18377a"><span style="color: red"> TILL </span><?php echo date("Y-m-d"); ?></p>
<table style="border:1px ;width:100%;">
	<tr>
		<th style="border:1px">Schedule Id</th>
		<th style="border:1px">Route ID</th>
		<th style="border:1px">Bus ID</th>
		<th style="border:1px">Induction Date</th>

	</tr>
	<?php foreach($html as $a){ ?>
	<tr style="text-align: center;">
		<td style="border:1px"><?php echo $a['schedule_id'] ?></td>
		<td style="border:1px"><?php echo $a['route_id'] ?></td>
		<td style="border:1px"><?php echo $a['bus_id'] ?></td>
		<td style="border:1px"><?php echo $a['created_at'] ?></td>
	</tr>
	<?php } ?>
	
</table>
</body>
</html>