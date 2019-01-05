<div class="row">
	<div class="col-sm-12">
		<h2>PDF User List</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<table class="table">
		<tbody><tr>
			<td><form action="<?php echo site_url('index.php/pdf/user') ?>" method="post" class="form-horizontal">
			<input type="hidden" name="user" value="0">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-success" value="Register User">
				</div>
			</div>
			</form></td>
			<td><form action="<?php echo site_url('index.php/pdf/user') ?>" method="post" class="form-horizontal">
				<input type="hidden" name="user" value="1">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-success" value="Visitors">
				</div>
			</div>
			</form></td>
		</tr>
		<tr>
			<td><form action="<?php echo site_url('index.php/pdf/part_user') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Enter ID</b></div>
					<input id="id" type="number" name="id" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-success" value="Submit" onClick="return do1();">
				</div>
			</div>
			</td>
			<td>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Passenger Type</b></div>
					<select required id="type" name="type" class="form-control">
						<option value="0">Select Type</option>
						<option value="1">Register User</option>
						<option value="2">Visitor</option>
					</select>
				</div>
			</div>
			</td>
			</form>
		</tr>
		</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
	function do1(){
		var id = document.getElementById("id").value;
		var type = document.getElementById("type").value;
		console.log(id,type);
		if(/^[0-9]*$/.test(id) == false){
			alert("Valid ID Contains Digits only.");
        	document.getElementById("id").focus();
        	return false;
		}
		else if(id.length > 4){
			alert("Valid ID Contains 5 or Less Digits only.");
        	document.getElementById("id").focus();
        	return false;
		}
		else if(type == 0){
			alert("PLZ Select Valid Type.");
        	document.getElementById("type").focus();
        	return false;
		}
	}
</script>