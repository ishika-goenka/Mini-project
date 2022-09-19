<?php
$uid=$_SESSION['uid'];
$sql1="select * from userdata where sno='$uid'";
$query1=mysqli_query($con,$sql1);
$fetch=mysqli_fetch_array($query1);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./adminstyle.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Admin</title>
</head>
<body style="background-color:#FBFBFB;">
    <div id="logo">
        <img src="https://www.gitam.edu/assets/images/GITAM-logo.png" height=100>
        <img src="https://www.gitam.edu/assets/images/spotlight/teacher-pointing-blackboard.svg" height=100 style="margin-left:1080px"><br>
    </div>
    <div id="plain">
        <p style="margin-left:1340px;font: 15px Arial, sans-serif;
        "><b>
        Welcome <?php  echo $fetch["fname"];?>!
        </b></p>
    </div>
    <div id="add-questions">
        <img src="https://cdn0.iconfinder.com/data/icons/instagram-ui-1/24/Instagram-UI_post-512.png" width=100 height=120><br/>
        <a href="./addquestion.html">
            Add Questions
        </a>
    </div>
    <div id="manage-questions">
        <img src="    data:image/png;base64,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
" width=100 height=120/><br/>
        <a href="">
            Manage Questions
        </a>
    </div>
    <div id="edit-questions">
        <img src="https://cdn-icons-png.flaticon.com/512/84/84380.png" width=100 height=120/><br/>
        <a href="">
            Edit Questions
        </a>
    </div>
    <div id="view-questions">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-3vWNn_yADXTLEvdImj6-TA7uk79ckeUpuQ&usqp=CAU" width=100 height=120/><br/>
        <a href="">
            View Questions
        </a>
    </div>
    <div id="add-solutions">
        <img src="data:image/png;base64,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" width=100 height=120/><br/>
        <a href="">
            Add Solutions
        </a>
    </div>
    <div id="edit-solutions">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqwR47D0M0myxqekU3Hn2ok9uFLedQk8sWkQ&usqp=CAU" width=100 height=120/><br/>
        <a href="">
            Edit Solutions
        </a>
    </div>
    <div id="view-solutions">
        <img src="https://cdn2.iconfinder.com/data/icons/picol-vector/32/view-512.png" width=100 height=120/><br/>
        <a href="">
            View Solutions
        </a>
    </div>
    <div id="edit-userinfo">
        <img src="data:image/png;base64,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" width=100 height=120/><br/>
        <a href="./Editdetails.html">
            Edit user-info
        </a>
    </div>
</body>
</html>
