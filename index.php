<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2><img src="logo.png" width="100" height="100"/></h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="ex: amal"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="************"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>