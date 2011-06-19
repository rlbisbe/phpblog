<?php
	
	include_once "../backend.php";
	
	if (!isset($_COOKIE['username'])) {
		echo "You shouldn't be here";
	}
?>

<html>
<head>
	
</head>
<body>
	<p>Welcome <?php echo $_COOKIE['username'];?> <a href='../index.php'>Go home</a></p>
	
	<h1>Listing posts</h1>
	<table border="0" cellspacing="5" cellpadding="5">
		<tr><th>Title</th><th>Actions</th></tr>
		<?php while ($row = mysql_fetch_assoc($result)) {
		    echo "<tr><td>".$row['title']."</td><td><a href=''>Edit</a> | <a href=''>Delete</a></tr>";
		} ?>
	</table>
	<h1>Options</h1>
	<a href='new_post.php'>New post</a><br/>
	<a href='../logout.php'>Log out</a>
</body>