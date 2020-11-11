<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
</head>
<body>
	<div class="col-4 mx-auto p-4" >
		<form action="insert.php" method="GET">
			<h1 class="text-center">Пост</h1>
			<p class="mt-5"><input type="" name="user" placeholder="Имя пользователя" class="col-12"></p>
			<p><input type="" name="img" placeholder="Путь к картинке" class="col-12"></p>
			<textarea type="" name="text" placeholder="Текст" class="col-12"></textarea>
			<button class="btn btn-primary mt-4">Добавить пост</button>
		</form>
	</div>
</body>
</html>