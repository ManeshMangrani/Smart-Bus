<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1 style="text-align: center; color: #18377a"> <b>Offers Information</b> </h1><p style="text-align: center; color: #18377a"><span style="color: red"> TILL </span><?php echo date("Y-m-d"); ?></p>
<table style="border:1px ;width:100%;">
	<tr>
		<th style="border:1px">Offer Id</th>
		<th style="border:1px">Name</th>
		<th style="border:1px">Discount %</th>
		<th style="border:1px">Applicable Class</th>
		<th style="border:1px">Validity</th>
		<th style="border:1px">Seat # Required</th>
		<th style="border:1px">Discription</th>
		<th style="border:1px">Start Date</th>

	</tr>
	<?php foreach($html as $a){ ?>
	<tr style="text-align: center;">
		<td style="border:1px"><?php echo $a['o_id'] ?></td>
		<td style="border:1px"><?php echo $a['name'] ?></td>
		<td style="border:1px"><?php echo $a['value'] ?></td>
		<td style="border:1px"><?php echo $a['class'] ?></td>
		<td style="border:1px"><?php echo $a['validity'] ?></td>
		<td style="border:1px"><?php echo $a['seat'] ?></td>
		<td style="border:1px"><?php echo $a['disc'] ?></td>
		<td style="border:1px"><?php echo $a['created_at'] ?></td>
	</tr>
	<?php } ?>
	
</table>
</body>
</html>