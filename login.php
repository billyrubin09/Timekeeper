<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login to Timekeeper</title>
</head>

<body>
	
<?php
// define variables and set to empty values
$usernameErr = $pwErr = "";
$username = $pw = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
  }
  
  if (empty($_POST["pw"])) {
    $pwErr = "Password is required";
  } else {
    $pw = test_input($_POST["pw"]);
  }   
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
	<form method="POST" action="/welcome.php">
	  Username: <input type="text" name="user">
	  Password: <input type="password" name="pw">
	  <input type="submit" value="Login">
	</form> 
</body>

</html> 