<?php include_once "backend.php"; ?>
<html>
<head>
</head>
<body>
<h1><?php the_title(); ?></h1>
<h2><?php echo $system?></h2>
<?php
while ($row = mysql_fetch_assoc($result)) {
    echo "<h1>".$row['title']."</h1>";
    echo "<p>".$row['text']."</p>";
}
?>
<h3>Meta</h3>
<?php if (!isset($_COOKIE['username'])): ?>
	<form action="login.php" method="post">
		<label for="user">User:</label> <input type="text" name="user"></input><br/>
		<label for="user">Password:</label> <input type="password" name="password"></input><br/>
		<input type="submit"/>
	</form>
<?php else : ?>
	
	<p>Logged in as <?php echo $_COOKIE['username']."." ?> <a href="admin/index.php">Go to admin</a>
	</p>
<?php endif ?>

</body>