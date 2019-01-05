<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Reply Widget</h1>
		<form action="<?php echo site_url('index.php/message/reply') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="hidden" name="m_id" value="<?php echo $info->m_id ?>">
					<div><b>Sender Name</b></div>
					<input name="name" type="text" class="form-control" value="<?php echo $info->fname." ".$info->lname ?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Email</b></div>
					<input name="email" type="email" class="form-control" value="<?php echo $info->email ?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
				<div><b>Phone</b></div>
					<input name="phone" type="number" class="form-control" value="<?php echo $info->phone ?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
				<div><b>Message</b></div>
					<textarea name="message" class="form-control" cols="40" rows="10" readonly> 
					<?php echo $info->message?></textarea>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-4">
				<div><b>Reply</b></div>
					<textarea id="reply" name="reply" class="form-control" cols="40" rows="10" placeholder="Make Reply" required></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-success" value="Send" onClick="return job();">
				</div>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	function job(){
		var reply = document.getElementById("reply").value;
		if(/^[a-zA-Z0-9 # , . -]*$/.test(reply) == false){
        alert("Reply has Special characters avoid them.");
        document.getElementById("reply").focus();
        return false;
    	}
        else if(reply.length > 500){
    	alert("Reply should be 0-500 characters.");
    	document.getElementById("reply").focus();
    	return false;
    	}
	}
</script>