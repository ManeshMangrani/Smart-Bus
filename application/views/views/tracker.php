<div class="row">
	<div class="col-sm-12">
		<h2>Tracker List</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<a class="btn btn-primary">Total Records : <?php echo count($info); ?></a>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Area</th>
					<th>Location</th>
					<th>Update Time</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php if (count($info) >= 1) {
				foreach ($info as $p) {?>
					<tr>
						<td> <?php echo $p['tracker_id'] ?></td>
						<td> <?php echo $p['Area'] ?></td>
						<td> <?php echo $p['position'] ?></td>
						<td> <?php echo $p['created_at'] ?> </td>
						<td> <?php if($p['position'] == "NULL"){?><form  method="post" class="form-horizontal" >
						<input type="hidden" name="tracker_id" value="<?php echo $p['tracker_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-danger" value="Location is NULL">
							</div>
						</div>
						</form><?php }
						else {?>
							<form action="<?php echo site_url('index.php/maps/init') ?>" method="post" class="form-horizontal" target="_blank">
						<input type="hidden" name="tracker_id" value="<?php echo $p['tracker_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-success" value="View On MAP">
							</div>
						</div>
						</form>
						<?php }
						?>
						</td>
					</tr>
				    <?php } 
				}
				else { ?>
					<tr>
						<td> <?php echo "No Data Found !!!"; ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>