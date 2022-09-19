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
			<form  action="db.php" method="POST">
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
				<input type="submit" name="edituser" value="Update" onclick="location.href='adminpage.html'"/>
			</form>
		</div>
	</body>
</html>