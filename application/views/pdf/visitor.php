<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1 style="text-align: center; color: #18377a"> <b>Visitors Information</b></h1>
<table style="border:1px ;width:100%;">
	<tr>
		<th style="border:1px">Visitor Id</th>
		<th style="border:1px">Username</th>
		<th style="border:1px">Gender</th>
		<th style="border:1px">Email</th>
		<th style="border:1px">Phone</th>
		<th style="border:1px">CNIC</th>

	</tr>
	<?php foreach($html as $a){ ?>
	<tr style="text-align: center;">
		<td style="border:1px"><?php echo $a['p_id'] ?></td>
		<td style="border:1px"><?php echo $a['fname']." ".$a['lname'] ?></td>
		<td style="border:1px"><?php echo $a['gender'] ?></td>
		<td style="border:1px"><?php echo $a['email'] ?></td>
		<td style="border:1px"><?php echo $a['phone'] ?></td>
		<td style="border:1px"><?php echo $a['cnic'] ?></td>
	</tr>
	<?php } ?>
	
</table>
</body>
</html>