<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Add Bus</h1>
		<form action="<?php echo site_url('index.php/bus/add') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Bus Registration #</b></div>
					<input id="regs_no" name="regs_no" type="text" placeholder="Excise #" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Seating Capacity</b></div>
					<input id="seats" name="seats" type="number" placeholder="# of Seats" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Class Category</b></div>
					<select required id="class" name="class" class="form-control">
						<option>Select Class</option>
						<option>Gold Luxury</option>
						<option>Royal Luxury-I</option>
						<option>Royal Luxury-II</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>About Bus/Bus Features</b></div>
					<textarea id="des" name="des" class="form-control" required cols="40" rows="10" placeholder="Discription" required></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Tracker #</b></div>
					<input name="tracker_id" type="text" value="<?PHP echo $detail['data1']['tracker_id'] ?>" class="form-control" readonly>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Cam ID-1</b></div>
					<input name="cam_id" type="text" value="<?PHP 
					echo $detail['data']['cam_id']-1; ?>" class="form-control" readonly>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Cam ID-2</b></div>
					<input name="cam_id1" type="text" value="<?PHP 
					echo $detail['data']['cam_id']; ?>" class="form-control" readonly>
				</div>
			</div>
		
			<div class="form-group">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-primary" value="Submit" onClick="return doconfirm();">
				</div>
			</div>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
function doconfirm()
{
	var regs_no  = document.getElementById("regs_no").value;
    var des      = document.getElementById("des").value;
    var seats    = document.getElementById("seats").value;
	var class1   = document.getElementById("class").value;
	console.log(regs_no,des,seats,class1);
    if(/^[a-zA-Z0-9 -]*$/.test(regs_no) == false){
        alert("Registration # has Special characters avoid them.");
        document.getElementById("regs_no").focus();
        return false;
    }
    else if(/^[a-zA-Z]*$/.test(regs_no) == false){
        alert("Registration # should also have characters.");
        document.getElementById("regs_no").focus();
        return false;
    }
    else if(/^[0-9]*$/.test(regs_no) == false){
        alert("Registration # should also have digits.");
        document.getElementById("regs_no").focus();
        return false;
    }
    else if(/^[-]*$/.test(regs_no) == false){
        alert("Registration # should also have - between digits and characters.");
        document.getElementById("regs_no").focus();
        return false;
    }
    else if(regs_no.length > 10){
        alert("Registration # should not exceed 10 characters.");
        document.getElementById("regs_no").focus();
        return false;
    }
    else if(/^[a-zA-Z0-9 # , . -]*$/.test(des) == false){
        alert("Discripion has Special characters avoid them.");
        document.getElementById("des").focus();
        return false;
    }
    else if(des.length > 150){
    	alert("Description should be 0-150 characters.");
    	document.getElementById("des").focus();
    	return false;
    }
    else if(seats > 40){
    	alert("Seat Number should be < or = 40");
    	document.getElementById("seats").focus();
    	return false;
    }
    else if(class1=="Select Class"){
    	alert("Select a Valid Class");
    	document.getElementById("class1").focus();
    	return false;
    }
}

</script>