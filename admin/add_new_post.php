<?php
	include_once "../backend.php";

	$title = $_POST['title'];
	$text = $_POST['text'];

	echo $title;
	echo $text;
	add_new_post($title,$text);
?>