<div class="row">
	<div class="col-sm-12">
		<h2>PDF Ticket List</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<table class="table">
		<tbody><tr>
			<td><form action="<?php echo site_url('index.php/pdf/ticket') ?>" method="post" class="form-horizontal">
			<input type="hidden" name="sdate" value="<?php echo date("Y-m-d 00:00:00"); ?>">
			<input type="hidden" name="ldate" value="<?php echo date("Y-m-d H:i:s"); ?>">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-success" value="Today">
				</div>
			</div>
			</form></td>
			<td><form action="<?php echo site_url('index.php/pdf/ticket') ?>" method="post" class="form-horizontal">
			<input type="hidden" name="sdate" value="<?php $date = strtotime("-2 day");
			echo date('Y-m-d 00:00:00', $date); ?>">
			<input type="hidden" name="ldate" value="<?php echo date("Y-m-d H:i:s"); ?>">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-success" value="Last 3 Days">
				</div>
			</div>
			</form></td>

			<td><form action="<?php echo site_url('index.php/pdf/ticket') ?>" method="post" class="form-horizontal">
			<input type="hidden" name="sdate" value="<?php $date = strtotime("-7 day");
			echo date('Y-m-d 00:00:00', $date); ?>">
			<input type="hidden" name="ldate" value="<?php echo date("Y-m-d H:i:s"); ?>">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-success" value="Last 7 Days">
				</div>
			</div>
			</form></td>
			<td><form action="<?php echo site_url('index.php/pdf/ticket') ?>" method="post" class="form-horizontal">
			<input type="hidden" name="sdate" value="<?php $date = strtotime("-15 day");
			echo date('Y-m-d 00:00:00', $date); ?>">
			<input type="hidden" name="ldate" value="<?php echo date("Y-m-d H:i:s"); ?>">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-success" value="Last 15 Days">
				</div>
			</div>
			</form></td>
		<tr>
		<tr>
			<td><form action="<?php echo site_url('index.php/pdf/ticket') ?>" method="post" class="form-horizontal">
			<input type="hidden" name="sdate" value="<?php $date = strtotime("-30 day");
			echo date('Y-m-d 00:00:00', $date); ?>">
			<input type="hidden" name="ldate" value="<?php echo date("Y-m-d H:i:s"); ?>">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-success" value="Last Month">
				</div>
			</div>
			</form></td>
			<td><form action="<?php echo site_url('index.php/pdf/ticket') ?>" method="post" class="form-horizontal">
			<input type="hidden" name="sdate" value="<?php $date = strtotime("-90 day");
			echo date('Y-m-d 00:00:00', $date); ?>">
			<input type="hidden" name="ldate" value="<?php echo date("Y-m-d H:i:s"); ?>">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-success" value="Last Quarter">
				</div>
			</div>
			</form></td>
			<td><form action="<?php echo site_url('index.php/pdf/ticket') ?>" method="post" class="form-horizontal">
			<input type="hidden" name="sdate" value="<?php $date = strtotime("-180 day");
			echo date('Y-m-d 00:00:00', $date); ?>">
			<input type="hidden" name="ldate" value="<?php echo date("Y-m-d H:i:s"); ?>">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-success" value="Last Half year">
				</div>
			</div>
			</form></td>
			<td><form action="<?php echo site_url('index.php/pdf/ticket') ?>" method="post" class="form-horizontal">
			<input type="hidden" name="sdate" value="<?php $date = strtotime("-365 day");
			echo date('Y-m-d 00:00:00', $date); ?>">
			<input type="hidden" name="ldate" value="<?php echo date("Y-m-d H:i:s"); ?>">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-success" value="Last Year">
				</div>
			</div>
			</form></td>
		</tr>
		<tr>
			<td><form action="<?php echo site_url('index.php/pdf/ticket') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-9">
					<div><b>Start Date</b></div>
					<input id="sdate" type="datetime-local" name="sdate" class="form-control" max="<?php echo date("Y-m-d"); ?>" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-9">
					<div><b>End Date</b></div>
					<input id="ldate" type="datetime-local" name="ldate" class="form-control" max="<?php echo date("Y-m-d"); ?>" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-success" value="Submit" onClick="return do1();">
				</div>
			</div>
			</form></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		</tbody>
	</table>
	</div>
</div>
<script type="text/javascript">
	function do1(){
		var sdate = document.getElementById("sdate").value;
		var ldate = document.getElementById("ldate").value;
		console.log(sdate,ldate);
		if(ldate < sdate){
			alert("Start Date is greater than Last Date.");
        	document.getElementById("sdate").focus();
        	return false;
		}
	}
</script>