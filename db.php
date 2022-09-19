<?php
$con=mysqli_connect("localhost","root","","miniproject");
session_start();
if(isset($_POST['signup']))
{
  if(!empty($_POST['fname'])&& !empty($_POST['lname'])&& !empty($_POST['eid']) && !empty($_POST['pass1']))
  {
    $fn=$_POST['fname'];
    $mn=$_POST['mname'];
    $ln=$_POST['lname'];
    $emp=$_POST['eid'];
    $pass=$_POST['pass1'];
    $cpass=$_POST['pass2'];
    $phone = $_POST['phno'];
    $email = $_POST['mail'];
    $sql="select * from userdata where Employee='$emp'";
    $res=mysqli_query($con,$sql);
    $fetch=mysqli_fetch_array($res);
    if(empty($fetch))
    {
      if($pass==$cpass)
      {
        $sql1="insert into userdata values('','$fn','$mn','$ln','$emp','$pass','$phone','$email')";
        $res1=mysqli_query($con,$sql1);
      }
      if($res1)
      {
        $msg1="Successfully Signed Up..!!";
        require "login.php";
      }
      else
      {
        $msg2="Invalid Details";
        require "Register.php";
      }
    }
    else
    {
      $msg3="Already Data Exits";
      require "Register.php";
    }
  }
  else
  {
    $msg4="Please Fill the Details..! Details are mandatory";
    require "Register.php";
  }
}
elseif (isset($_POST['Login']))
{
  if(!empty($_POST['empid']) && !empty($_POST['password']))
  {
    $emp=$_POST['empid'];
    $p=$_POST['password'];
    $sql2="select * from userdata where Employee='$emp' and pwd='$p'";
    $res2=mysqli_query($con,$sql2);
    $fetch2=mysqli_fetch_array($res2);
    if($fetch2>0)
    {
      $_SESSION['uid']=$fetch2['sno'];
      require "adminpage.php";
    }
    else
    {
      $msg5="User details are invalid";
      require "login.php";
    }
  }
  else
  {
    $msg5="Please Fill all the Details";
    require "login.php";
  }
}

elseif(isset($_POST['update']))
 {
    if(!empty($_POST['ques']) && !empty($_POST['sub']) &&  !empty($_POST['i1']) && !empty($_POST['o1']) && !empty($_POST['i2']) && !empty($_POST['o2']))
    {
    $q = $_POST['ques'];
    $lq = $_POST['level'];
	  $su = $_POST['sub'];
    $se=$_POST['sem'];
	  $i1 = $_POST['i1'];
    $o1 = $_POST['o1'];
    $i2 = $_POST['i2'];
    $o2 = $_POST['o2'];
    $i3 = $_POST['i3'];
    $o3 = $_POST['o3'];
    $i4 = $_POST['i4'];
    $o4 = $_POST['o4'];
    $i5 = $_POST['i5'];
    $o5 = $_POST['o5'];
    $i6 = $_POST['i6'];
    $o6 = $_POST['o6'];
    $i7 = $_POST['i7'];
    $o7 = $_POST['o7'];
    $i8 = $_POST['i8'];
    $o8 = $_POST['o8'];
	  $sql1="insert into question values('$q','$lq','$su','$se','$i1','$o1','$i2','$o2','$i3','$o3','$i4','$o4','$i5','$o5','$i6','$o6','$i7','$o7','$i8','$o8')";
    $res1=mysqli_query($con,$sql1);
    if($res1)
      {
        echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
      }
    }  
 }
 elseif(isset($_POST['solution']))
{
  if(!empty($_POST['sol']) && !empty($_POST['lang']))
  {  
    $sol = $_POST['sol'];
    $lang = $_POST['lang'];
    $yesno = $_POST['yesno'];
		$query = "insert into solution values('$sol','$lang','$yesno')";
		$res= mysqli_query($con,$query);
		if($res)
		{
			echo "<h3>Solution added !!</h3>";
		}
		else
		{
			echo "Error:".$query."<br>".$connection->error;
		}
}
}
if(isset($_POST['edituser']))
 {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
	if(empty($id))
  {
    echo "<span>id is required</span>";
  }
	if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
		$query = "UPDATE userdata SET email='$email' WHERE Employee='$id'";
    $query_run = mysqli_query($con, $query);
		
		if($query_run)
		{
			echo '<h3>Data Updated</h3>';
		}
		else
		{
			echo '<h3>Data Not Updated</h3>';
		}
	}
  if(!empty($email) && !filter_var($email,FILTER_VALIDATE_EMAIL))
  {
    echo '<h3>Invalid email id !!</h3>';
  }
  if (!empty($name) && preg_match("/^[a-zA-Z0-9-' ]*$/",$name)) {
		$query = "UPDATE userdata SET fname='$name' WHERE Employee='$id'";
    $query_run = mysqli_query($con, $query);
		if($query_run)
		{
			echo '<h3>Data Updated</h3>';
		}
		else
		{
			echo '<h3>Data Not Updated</h3>';
		}
	  }
	if (!empty($name) && !preg_match("/^[a-zA-Z0-9-' ]*$/",$name)) {
		echo "<span style='color: red;'>Only letters and white space allowed..!</span>";
		echo "<br>"; 
	  }
    if(!empty($phone) && preg_match("/^([0-9]{10})$/",$phone))
    {
      $query = "UPDATE userdata SET phone='$phone' WHERE Employee='$id'";
      $query_run = mysqli_query($con, $query);
      if($query_run)
      {
        echo '<h3>Data Updated</h3>';
      }
      else
      {
        echo '<h3>Data Not Updated</h3>';
      } 
    }
 
	if(!empty($phone) && !preg_match("/^([0-9]{10})$/",$phone))
	{
		echo "<span style='color: red;'>Invalid phone Number !</span>";
		echo "<br>";
	}

  if(!empty($password) && preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,20}$/', $password)) {
		$query = "UPDATE userdata SET pwd='$password' WHERE Employee='$id'";
      $query_run = mysqli_query($con, $query);
      if($query_run)
      {
        echo '<h3>Data Updated</h3>';
      }
      else
      {
        echo '<h3>Data Not Updated</h3>';
      }
	}
	if(!empty($password) && !preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,20}$/', $password)) {
		echo "<span style='color: red;'>Password should be at least 8 characters in length .</span>";
		echo "<br>";
	}
    
 }
?>
