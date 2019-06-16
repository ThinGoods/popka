<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Головні налаштування</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<style>
		.form_added, .form_deleted {
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
	</style>
</head>
<body>
	 <?php require_once "nav.php" ?>
<div class="container">
<form enctype="multipart/form-data" action="updated_abc.php" method="post" class="form_added">
  <div><div class="title">Зміна абревіатури сайту</div></div>
  <div class="inputs" data-type="input-update"><div>Введіть нову абревіатуру: <textarea name="abc" data-type="title"></textarea></div>
  <div><input type="submit" name="uploadBtn" value="Змінити" data-type="update"></div>
</div>
</form>
</div>
<hr>
<div class="container">
<form action="updated_title.php" method="post" class="form_deleted">
  <div><div class="title">Зміна назви сайту</div></div>
  <div class="inputs" data-type="input-update"><div>Введіть нову назву сайту: <textarea name="title" data-type="title"></textarea></div>
  <div><input type="submit" name="deletedBtn" value="Змінити" data-type="update"></div>
</div>
</form>
</div>
</body>
</html>