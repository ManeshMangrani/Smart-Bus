<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1 style="text-align: center; color: #18377a"> <b>User Information</b></h1>
<table style="border:1px ;width:100%;">
	<tr>
		<th style="border:1px">User Id</th>
		<th style="border:1px">Name</th>
		<th style="border:1px">DOB</th>
		<th style="border:1px">Gender</th>
		<th style="border:1px">Email</th>
		<th style="border:1px">Phone</th>
		<th style="border:1px">CNIC</th>
		<th style="border:1px">Role ID</th>
		<th style="border:1px">Valued</th>
		<th style="border:1px">New</th>
		<th style="border:1px">KMs</th>

	</tr>
	<?php foreach($html as $a){ ?>
	<tr style="text-align: center;">
		<td style="border:1px"><?php echo $a['user_id'] ?></td>
		<td style="border:1px"><?php echo $a['fname']." ".$a['lname'] ?></td>
		<td style="border:1px"><?php echo $a['dob'] ?></td>
		<td style="border:1px"><?php echo $a['gender'] ?></td>
		<td style="border:1px"><?php echo $a['email'] ?></td>
		<td style="border:1px"><?php echo $a['phone'] ?></td>
		<td style="border:1px"><?php echo $a['cnic'] ?></td>
		<td style="border:1px"><?php echo $a['role_id'] ?></td>
		<td style="border:1px"><?php echo $a['is_valued'] ?></td>
		<td style="border:1px"><?php echo $a['is_new'] ?></td>
		<td style="border:1px"><?php echo $a['km'] ?></td>
	</tr>
	<?php } ?>
	
</table>
</body>
</html>