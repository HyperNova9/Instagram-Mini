<?php 
	
	$con = mysqli_connect('127.0.0.1', 'root','','instagram');

	$text_query = "UPDATE posts
SET text='{$_GET["text"]}', img='{$_GET["img"]}'
WHERE id = '{$_GET["id"]}' ";
	$query = mysqli_query($con, $text_query);
	header("Location: index.php");
 ?>