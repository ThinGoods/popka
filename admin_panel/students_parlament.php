<?php 
  require_once "../function/connectMySQL/connect_to_db.php";
  global $mysqli;
  connectDB();
  if(isset($_POST['name'], $_POST['position'], $_FILES['image'])) {
    $errors = array();
    $image_name = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    $full_image_src = 'img/students_palament/'.$image_name;
    $name = $_POST['name'];
    $position = $_POST['position'];
    $sql = "INSERT INTO `students_parlament` (`name`, `posision`, `img`) VALUES ('$name', '$position', '$full_image_src')";
    if ($mysqli->query($sql) === TRUE) {
      if(empty($errors)) { move_uploaded_file($image_temp, "../img/students_palament/".$image_name); }
      echo "<div id='notification'>Запис успішно додано.</div>";
    } else { echo "<div id='notification'>Помилка в отправці форми, спробуйте ще раз.</div>"; }
  }
  else {
  echo "<div id='notification'>Заповніть всі поля.</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Студентський парламент</title>
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
<form enctype="multipart/form-data" action="" method="post" class="form_added">
  <div><div class="title">Додати до студентського парламенту</div></div>
  <div class="inputs"><div>Введіть повне ім’я: <textarea name="name"></textarea></div>
  <div>Введіть посаду: <textarea name="position"></textarea></div>
  <div>Виберіть фото: <input type="file" name="image"></div>
  <div><input type="submit" name="uploadBtn" value="Додати" data-type="add"> </div>
  </div>
</form>
</div>
<hr>
<div class="container">
<form action="deleted_students_parlament.php" method="post" class="form_deleted">
  <div><div class="title">Видалити зі студентського парламенту</div></div>
  <div class="inputs" data-type="input-deleted"><div>Введіть повне ім’я людини: <input type="text" name="name"></div>
  <div><input type="submit" name="deletedBtn" value="Видалити" data-type="remove"></div>
  </div>
</form>
</div>

</body>
</html>