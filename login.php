<?php
	$username = "roberto";
	$password = "3bc2e28ca8940090c3d80c851784a5d5"; //cifrado
		
	if (($_POST['user'] == $username) && (MD5($_POST['password']) == $password)) {
		$logged = true;
		setcookie("username","roberto");
	}
?>
<html>
<head>
</head>
<body>
	<?php if ($logged == true) {?>
		<h1>Logged in</h1>
		<a href="admin/index.php">Go to admin</a>
	<?php } else { ?>
		<h1>Login error</h1>
	<?php } ?>
</body>