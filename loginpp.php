<html>
<head>
<link rel="stylesheet "type="text/css" href="loginc.css">
<h3><span>Sign In</span></h3>
</head>
<div class="forml">
<form action="" method="post">
<font color="#F52887" size=5px><i>Blood is meant to circulate, Pass it around!</b></font><br><br>
<label for="username "><span>Username</span></label>
<input type="text" name="username" id="username" ></input>
<br><br>
<label for="password"><span>Password    </span></label>
<input type="password" name="password" id="password" ></input>
<br><br>
<input type="submit" value="Log In" name="login">
<input type="button" value="Sign Up" onclick="signup()">
</form>
</div>
</html>
<?php
if(isset($_POST["login"]))
{
	$user = $_POST["username"];
	$pass = $_POST["password"];

	$servername = "10.120.101.108";
	$username = "apurva";
	$password = "appu";
	$database = "bloodwebsite";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);
	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "Select password from User where email like '$user'";
	$result=mysqli_query($conn,$sql);
	echo mysqli_error($conn);
	$row=mysqli_fetch_array($result);
	echo $row;
	if ($result->num_rows==0) 
	{echo '<script language="javascript">';
	echo 'alert("Login Failed")';
	echo '</script>';
	}
	else
	{
	if($row[0]==$pass)
	echo '<script language="javascript">';
	echo 'document.location="signup.php" ';
	echo '</script>';	
	}
}
	?>
<script>
function signup()
{
document.location='signup.php';
}
</script>