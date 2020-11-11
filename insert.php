<?php
		
		$connect = mysqli_connect("127.0.0.1", "root", "", "instagram");


		$text_query_insert = "INSERT INTO posts (user, img, text)
								VALUES ('{$_GET["user"]}', '{$_GET["img"]}', '{$_GET["text"]}')";

		$query_insert = mysqli_query($connect, $text_query_insert); //запрос для ввода в таблицу

		header("Location: index.php")
	?>