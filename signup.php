<html>
<head>
<link rel="stylesheet "type="text/css" href="loginc.css">
<h5>Congratulations!<br>You are one step closer from saving someone's life!</h5>
</head>

<div class="forms">
<form id="formsign" action="" name="formsign" method="post">
<label for="name">Name</label>
<input type="text" name="name" id="name" ></input>
<br><br>
<label for="email">Email</label>
<input type="email" name="email" id="email" ></input>
<label for="password">Password </label>
<input type="password" name="password" id="password" ></input>
<br><br>
<label for="mobile">Mobile</label>
<input type="tel" name="mobile" id="mobile" ></input>
<br><br>
<label for="bloodgroup">BloodGroup</label>
<input type="text" name="bloodgroup" id="bloodgroup" ></input>
<br><br>
<label for="age">Age</label>
<input type="text" name="age" id="age" ></input>
<br><br>
<input type="submit" value="Create Account">
<input type="button" value="Clear" onclick="clear()">
</form>
</div>
</html>
<?php
$variable = $_GET['hosname'];
echo($variable);
if(isset($_POST["name"]) and isset($_POST["email"]) and isset($_POST["password"]) and isset($_POST["mobile"]) and isset($_POST["bloodgroup"]) and isset($_POST["age"]))
//if(isset($_POST["name"]))
{
	$name = $_POST["name"];
	$email=$_POST["email"];
	$passwordd=$_POST["password"];
	$mobile=$_POST["mobile"];
	$bloodgroup=$_POST["bloodgroup"];
	$age=$_POST["age"];
	echo($name);
	
	$servername = "10.120.99.120";
	$username = "apurva";
	$password = "appu";
	$database = "bloodwebsite";

	
	$conn = new mysqli($servername, $username, $password, $database);
	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "Insert into User(name,email,password,bloodgroup,phoneno,age,points) values('$name','$email','$passwordd','$bloodgroup','$mobile',$age,0);";
	$result=mysqli_query($conn,$sql);
	echo mysqli_error($conn);
	echo "hey inside";
}
?>
<script>
function login()
{
alert("Logged in Successfully!!");
}

function clear()
{
document.getElementById("username").value="";
}

</script>