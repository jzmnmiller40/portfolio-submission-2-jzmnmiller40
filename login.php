<?php

include("security.php");
security_login();

?>

<!DOCTYPE html>
<html>
<head>
    <title> Login </title>

</head>

<body>
  
  	<h2>Login</h2>
  
  <form method="post" action="login.php">
  	
  	
  		<label>Username</label>
  		<input type="text" name="username" >
  
  	
  		<label>Password</label>
  		<input type="password" name="password">
  
  		<button type="submit" class="btn" name="login"><a href="profile.php"> Login</a></button>
  	
  	<p>
  		Not yet a member? <a href="signup.php">Sign up</a>
  	</p>
  </form>


</body>
</html>