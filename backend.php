<?php
	
	$result = init();
	$system = "Subtitulo de la aplicacion";
	
	function the_title(){
		$titulo = "Titulo de la aplicacion";
		echo "Titulo de la aplicacion";
	}
	
	function init(){
		mysql_connect('localhost', 'root', 'macbook');
		mysql_select_db('blog'); 
		$result = mysql_query('SELECT * FROM posts');
		return $result;
	}
	
	function add_new_post($title, $text){
		mysql_connect('localhost', 'root', 'macbook');
		mysql_select_db('blog');
		$result = mysql_query("INSERT INTO posts (title,text) VALUES ('".$title."', '".$text."')");
		echo mysql_error();
		echo "<a href='index.php'>Go to admin</a>";
	}
?>