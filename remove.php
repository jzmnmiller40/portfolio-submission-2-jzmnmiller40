<?php

include("security.php");
security_deleteUser();
?>

<!DOCTYPE html>
<html>
<head>
    <title> Sign Up  </title>

</head>

<body>
  
  	<h2> Sign Up Form</h2>
  
  <form method="post" action="remove.php">
  	
  	
  		<label>Username</label>
  		<input type="text" name="username" >
  
  	
  		<label>Password</label>
  		<input type="password" name="password">
  
  		<button type="submit" class="btn" name="submit">Submit</button>
  
  	
  </form>

  
</body>
</html>