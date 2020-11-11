<?php

	$connect = mysqli_connect("127.0.0.1", "root", "", "instagram");
	$text = "DELETE FROM posts WHERE id = '".$_GET["id"]."'";
	$tabl = mysqli_query($connect, $text);
	header("Location: index.php");
 ?> 	
