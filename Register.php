<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./Register.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
  <div class="center">
  <h1 style="color:blue;"><u>Sign Up</u></h1>
  <p style="color:green;text-align: center;"><?php  if(isset($msg1)) echo $msg1; ?></p>
  <p style="color:red; text-align: center;"><?php if(isset($msg2)) echo $msg2; ?></p>
  <p style="color:red;text-align: center;"><?php if(isset($msg3)) echo $msg3; ?></p>
  <p style="color:grey;text-align: center;"><?php  if(isset($msg4)) echo $msg4; ?></p>
  <form class="register" action="db.php" method ="POST">
      <input type="text" class="fname" name="fname" placeholder="Enter First Name" required><br/>
      <input type="text" placeholder="Enter Middle Name" class="mname" name="mname"><br/>
      <input type="text" placeholder="Enter Last Name" class="lname"name="lname" required><br/>
      <input type="text" placeholder="Enter Employee ID Name" class="eid" name="eid" required><br/>
      <input type="password" placeholder="Enter Password" class="pass1"  name="pass1" required><br/>
    <input type="password" placeholder="Re-Enter Password" class="pass2" name="pass2" required><br/>
    <input type="email" placeholder="Enter Email id" class="mail" name="mail" required><br/>
    <input type="text" placeholder="Enter Phone number" class="phno" name="phno" required><br/>
      <input type="submit" class="button" value="Register" name="signup" style="margin-bottom:10px;"><br>
        <label style="margin-left:160px;">Already have an account?<a href="login.php" style="color:#3AB4F2;">Click Here</a></label>
  </form>
  </div>
</body>
</html>
