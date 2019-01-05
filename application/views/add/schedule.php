<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Add Schedule</h1>
		<form action="<?php echo site_url('index.php/schedule/add') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<h4>Make sure Buses are Avialable.</h4>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Route</b></div>
					<select name="route_id" class="form-control" required>
						<option>Select</option>
						<?php foreach ($data['d0'] as $k) {	?>
						<option value="<?php echo $k['route_id']?>"><?php echo $k['source'].' -> '.$k['destination'].' : '.$k['departure']?></option> <?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Bus</b></div>
					<select name="bus_id" class="form-control" required>
						<option>Select</option>
						<?php foreach ($data['d1'] as $k) {	?>		
						<option value="<?php echo $k['bus_id']?>"><?php echo $k['regs_no']?></option> <?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-primary" value="Submit">
				</div>
			</div>
		</div>
		</form>
	</div>
</div>
