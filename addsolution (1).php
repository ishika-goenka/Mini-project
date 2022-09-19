<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./addsolution.css">
    <title>Add Solution</title>
</head>
<body>
    <form action="db.php" method="POST">
        <div id="head" style="font-weight: bold;background-color:chocolate;color:white;text-align:center;font-size: 40px;text-decoration: underline;">
            ADD  SOLUTION
        </div><br/><br/>
        <div style="font-weight: bold;font-size:22px;"><b>SOLUTION:</b></div><br/>
        <textarea id="solution" name="sol" placeholder="Type your solution here" style="width: 100%; height:250px;" required></textarea><br/><br/>
        <div style="font-weight: bold;font-size:22px;"><b>LANGUAGE:</b></div><br/>
        Language used:<input type="text" name="lang" id="lang" required><br/><br/>
        <div style="font-weight: bold;font-size:20px;"><b>TEST CASES PASSED:</b></div><br/>
        <div class="form-group">
        Passed(Yes/No): <select class="form-control" style="width: 150px;" name = "yesno">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select><br/><br/>
        </div>
        <input type="submit" id="submit" value="Submit" name="solution" style="width: 100px; padding:2px;position:absolute;left:10px;">
    </form>
</body>
</html>