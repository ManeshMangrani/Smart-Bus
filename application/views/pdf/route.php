<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1 style="text-align: center; color: #18377a"> <b>Routes Information</b> </h1><p style="text-align: center; color: #18377a"><span style="color: red"> TILL </span><?php echo date("Y-m-d"); ?></p>
<table style="border:1px ;width:100%;">
	<tr>
		<th style="border:1px">Route Id</th>
		<th style="border:1px">Source</th>
		<th style="border:1px">Destination</th>
		<!-- <th style="border:1px">Stops</th> -->
		<th style="border:1px">Departure</th>
		<th style="border:1px">Arrival</th>
		<th style="border:1px">Fare</th>
		<th style="border:1px">Km</th>
		<th style="border:1px">Start Date</th>

	</tr>
	<?php foreach($html as $a){ ?>
	<tr style="text-align: center;">
		<?php 
			if($a['day'] == 0){
			$day = "Same Day";
			}
			else if($a['day'] == 1){
			$day = "Next Day";
			}
		?>
		<td style="border:1px"><?php echo $a['route_id'] ?></td>
		<td style="border:1px"><?php echo $a['source'] ?></td>
		<td style="border:1px"><?php echo $a['destination'] ?></td>
		<!-- <td style="border:1px"><?php echo $a['stops'] ?></td> -->
		<td style="border:1px"><?php echo $a['departure'] ?></td>
		<td style="border:1px"><?php echo $a['arrival']."-".$day ?></td>
		<td style="border:1px"><?php echo $a['fare'] ?></td>
		<td style="border:1px"><?php echo $a['km'] ?></td>
		<td style="border:1px"><?php echo $a['created_at'] ?></td>
	</tr>
	<?php } ?>
	
</table>
</body>
</html>