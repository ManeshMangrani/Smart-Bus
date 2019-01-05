<div class="row">
	<div class="col-sm-12">
		<h2>Message List</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<a  class="btn btn-primary">Total Records : <?php echo count($info); ?></a>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Sender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Message</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php if (count($info) >= 1) {
				foreach ($info as $p) {?>
					<tr>
						<td> <?php echo $p['m_id'] ?></td>
						<td> <?php echo $p['fname'].$p['lname'] ?></td>
						<td> <?php echo $p['email'] ?></td>
						<td> <?php echo $p['phone'] ?></td>
						<td> <?php echo $p['message'] ?></td>
						<td> <form action="<?php echo site_url('index.php/message/reply_loader') ?>" method="post" class="form-horizontal">
						<input type="hidden" name="m_id" value="<?php echo $p['m_id'] ?>">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="submit" class="btn btn-info" value="Reply">
							</div>
						</div>
						</form> </td>
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

<script type="text/javascript">
function doconfirm()
{
    job = confirm("Are you sure to Delete?");
    if(job != true)
    {
        return false;
    }
}
</script>