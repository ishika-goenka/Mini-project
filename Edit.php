<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>EDIT-DETAILS</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	</head>
	<body>
		<div id="page-wrapper">
		<div class="container col-lg-6 border border-success rounded shadow  well my-5">
			<form  action="" method="post">
				<h2 class="text-center text-success font-italic"><u>EDIT DETAILS</u></h2>
                <div class="form-group">
                    <label>Employee Id</label>
                    <input type="text" name="id" class="form-control border border-success" placeholder="Enter Id" ></div>
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control border border-success" placeholder="Change Name" >
				</div>
				<div class="form-group">
					<label>Phone</label>
					<input type="text" name="phone" class="form-control border border-success" placeholder="Change Phone Number">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control border border-success" placeholder="Change mail address">
				
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control border border-success" placeholder="Change Password">
				</div>
				<input type="submit" name="update" value="Update" onclick="location.href='adminpage.html'"/>
			</form>
		</div>
	</body>
</html>

<?php
session_start();
$connection =mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'miniproject');

error_reporting(0);
if(isset($_POST['update']))
 {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
	
    if(empty($id) || empty($name) || empty($phone) || empty($email) || empty($password))
	{
		echo "<span style='color: red;'>All Fields are Required..!</span>";
		echo "<br>";
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		echo "<span style='color: red;'>Invalid Email Address...!</span>";
		echo "<br>";
	}
	if (!preg_match("/^[a-zA-Z0-9-' ]*$/",$name)) {
		echo "<span style='color: red;'>Only letters and white space allowed..!</span>";
		echo "<br>"; 
	  }
  
 
	if(!preg_match("/^([0-9]{10})$/",$phone))
	{
		echo "<span style='color: red;'>Invalid phone Number !</span>";
		echo "<br>";
	}
	if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,20}$/', $password)) {
		echo "<span style='color: red;'>Password should be at least 8 characters in length .</span>";
		echo "<br>";
	}
	else{
		$query = "UPDATE employee SET name='$name', phone='$phone', email='$email', password='$password' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);
		
		if($query_run)
		{
			echo '<script type = "text/javascript"> alert("Data Updated")</script>';
		}
		else
		{
			echo '<script type = "text/javascript"> alert("Data Not Updated")</script>';
		}
	}
    
 }
 

?>


