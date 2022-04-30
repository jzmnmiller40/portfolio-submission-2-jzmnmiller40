<?php

include("security.php");
security_login();

?>

<html>
<head>
    <title> Login </title>

</head>

<body>
  
<h1>Success your back again!</h1>

<form method="post" action="logout.php">

<button type="logout" class="btn" name="logout"> Logout </button>

</form>
</body>
</html
  	