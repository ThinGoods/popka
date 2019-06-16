<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Зміна данних адміністратора</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<style>
		.form {
		  display: flex;
		  flex-direction: column;
		  justify-content: center;
		  align-items: center;
          margin-bottom: 15px;
		}
		body {
	      margin: 0px;
	      padding: 0px;
	      font-family: Arial;
	  	  transition: 0.5s;
	  	}
	</style>
</head>
<body>
<?php require_once "nav.php" ?>

<div class="container">
<form  action="update_login.php" method="post" class="form_added">
  <div><div class="title">Зміна імені Адміністратора</div></div>
  <div class="inputs" data-type="input-update"><div>Введіть нове ім'я: <textarea name="login"></textarea></div>
  <div><input type="submit" name="uploadBtn" value="Изменить" data-type="update"> </div>
</div>
</form>
</div>
<hr>
<div class="container">
<form action="update_password.php" method="post" class="form_added">
  <div><div class="title">Зміна паролю адміністратора</div></div>
  <div class="inputs" data-type="input-update"><div>Введіть новий пароль: <textarea name="password"></textarea></div>
  <div><input type="submit" name="deletedBtn" value="Изменить" data-type="update"></div>
</form>
</div>
</body>
</html>