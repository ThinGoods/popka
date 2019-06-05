<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Основные настройки</title>
	<style>
		.form_added, .form_deleted {
		  display: flex;
		  flex-direction: column;
		  justify-content: center;
		  align-items: center;
      margin-bottom: 15px;
		}
	</style>
</head>
<body>
<form enctype="multipart/form-data" action="updated_abc.php" method="post" class="form_added">
  <div>Изменение абрревиатуры сайта</div>
  Введите новую аббревиатуру: <textarea name="abc">1</textarea>
  <input type="submit" name="uploadBtn" value="Изменить"> 
</form>


<hr>


<form action="updated_title.php" method="post" class="form_deleted">
  <div>Изменение названия сайта</div>
  Введите новое название сайта: <textarea name="title">1</textarea>
  <input type="submit" name="deletedBtn" value="Изменить">
</form>
<hr>
<a href="index.php">Вернуться назад</a>
</body>
</html>