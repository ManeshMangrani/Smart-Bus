<div class="container">
	<div class="col-sm-10 col-sm-offset-2">
		
		<h1>Add User</h1>
		<form action="<?php echo site_url('index.php/user/add') ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>First Name</b></div>
					<input id="fname" name="fname" type="text" placeholder="First Name" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Last Name</b></div>
					<input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Date of Birth</b></div>
					<input name="dob" type="date" placeholder="Birthday" class="form-control" required max="<?php echo date("Y-m-d"); ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Gender</b></div>
					<select id="gender" required name="gender" class="form-control">
						<option>Select</option>
						<option>Male</option>
						<option>Female</option>
						<option>Others</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>E-Mail Address</b></div>
					<input name="email" type="email" placeholder="E-mail" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Contact #</b></div>
					<input id="phone" name="phone" type="tel" placeholder="Phone" class="form-control" required>
				</div>
			</div>
			<!--<div class="form-group">
				<div class="col-sm-4">
					<div><b>Upload Your Image</b></div>
					<input name="image" type="image" placeholder="Image" class="form-control" required>
				</div>
			</div>-->
			
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>National Identity #</b></div>
					<input id="cnic" name="cnic" type="number" placeholder="CNIC" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Mailing Address</b></div>
					<textarea id="address" name="address" class="form-control" required cols="40" rows="10" placeholder="Physical Address"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Role</b></div>
					<select id="role" required name="role_id" class="form-control">
						<option>Select</option>
						<option value=1>FULL CRUD</option>
						<option value=2>INTER CRUD</option>
						<option value=3>CAPTAIN</option>
						<option value=4>REPORTER</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Create Password</b></div>
					<input id="pass" name="password" type="password" placeholder="Password" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<div><b>Repeat Password</b></div>
					<input id="r_pass" name="r_password" type="password" placeholder="Password" class="form-control" required>
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
    function doconfirm(){
      var fname   = document.getElementById("fname").value;
      var lname   = document.getElementById("lname").value;
      var address = document.getElementById("address").value;
      var cnic    = document.getElementById("cnic").value;
      var phone   = document.getElementById("phone").value;
      var pass    = document.getElementById("pass").value;
      var r_pass  = document.getElementById("r_pass").value;
      var gender  = document.getElementById("gender").value;
      var role  = document.getElementById("role").value;
      console.log(fname,lname,address,cnic,phone,pass,r_pass);
      if(/^[a-zA-Z]*$/.test(fname) == false){
        alert("First-Name has Special characters or digits avoid them.");
        document.getElementById("fname").focus();
        return false;
      }
      else if(/^[a-zA-Z]*$/.test(lname) == false){
        alert("Last-Name has Special charactersor or digits avoid them.");
        document.getElementById("lname").focus();
        return false;
      }
      else if(/^[0-9]*$/.test(phone) == false){
        alert("Phone has characters avoid them.");
        document.getElementById("phone").focus();
        return false;
      }
      else if(/^[0-9]*$/.test(cnic) == false){
        alert("CNIC has characters avoid them.");
        document.getElementById("cnic").focus();
        return false;
      }
      else if(pass !== r_pass){
        alert("Password do not match.");
        document.getElementById("pass").focus();
        return false;
      }
      else if (fname.length > 16){
      	alert("First-Name should be of 15 character or less.");
        document.getElementById("fname").focus();
        return false;
      }
      else if (lname.length > 16){
      	alert("Last-Name should be of 15 character or less.");
        document.getElementById("lname").focus();
        return false;
      }
      else if(phone.length > 11 || phone.length < 11){
        alert("Phone # should be of 11 digits.");
        document.getElementById("phone").focus();
        return false; 
      }
      else if(cnic.length > 13 || cnic.length < 13){
        alert("CNIC should be of 13 digits.");
        document.getElementById("cnic").focus();
        return false; 
      }
      else if(address.length > 50){
        alert("Address should be less then 50 characters.");
        document.getElementById("address").focus();
        return false; 
      }
      else if(pass.length > 10 || pass.length < 6){
        alert("Password should be between 6-10 characters.");
        document.getElementById("pass").focus();
        return false; 
      }
      else if(/^[a-zA-Z0-9 # , . -]*$/.test(address) == false){
        alert("Postal Address has Special characters avoid them.");
        document.getElementById("address").focus();
        return false;
      }
      else if(gender=="Select"){
    	alert("Select a Valid gender.");
    	document.getElementById("gender").focus();
    	return false;
      }
      else if(role=="Select"){
    	alert("Select a Valid role.");
    	document.getElementById("role").focus();
    	return false;
      }
    }
  </script>
  