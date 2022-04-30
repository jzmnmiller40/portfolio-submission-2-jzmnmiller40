<?php

include("security.php");
security_updatePassword();
?>

<!DOCTYPE html>
<html>
<head>
    <title> Sign Up  </title>

</head>

<body>
  
  	<h2> Sign Up Form</h2>
  
  <form method="post" action="update.php">
  	
  	
  		<label>Username</label>
  		<input type="text" name="username" >
  
  	
  		<label>Password</label>
  		<input type="password" name="password">
          <input type="password" name="new_password">
  		<button type="submit" class="btn" name="submit">Submit</button>
  
  	
  </form>

  
</body>
</html>