<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="/pages" method="POST">


		Имя:
		<input type="text" name="param"/><br />
		Комментарий:<br />
		<textarea name="text"></textarea>
		<!--<input type="hidden" name="_method" value="PUT">-->

		<br />
		<input type="submit" value="Добавить"/>

	</form>
	
</body>
</html>