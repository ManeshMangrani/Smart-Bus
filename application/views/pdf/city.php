<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1 style="text-align: center; color: #18377a"> <b>Cities Information</b> </h1><p style="text-align: center; color: #18377a"><span style="color: red"> TILL </span><?php echo date("Y-m-d"); ?></p>
<table style="border:1px ;width:100%;">
	<tr>
		<th style="border:1px">City Id</th>
		<th style="border:1px">Name</th>
		<th style="border:1px">Short Code</th>

	</tr>
	<?php foreach($html as $a){ ?>
	<tr style="text-align: center;">
		<td style="border:1px"><?php echo $a['city_id'] ?></td>
		<td style="border:1px"><?php echo $a['name'] ?></td>
		<td style="border:1px"><?php echo $a['shortcode'] ?></td>
	</tr>
	<?php } ?>
	
</table>
</body>
</html>