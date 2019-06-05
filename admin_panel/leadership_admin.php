<?php 
  require_once "../function/connectMySQL/connect_to_db.php";
  global $mysqli;
  connectDB();
  if(isset($_POST['name'], $_POST['level'], $_POST['position'], $_POST['day'], $_POST['time'], $_FILES['image'])) {
    $errors = array();
    $image_name = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    $full_image_src = 'img/'.$image_name;
    $name = $_POST['name'];
    $level = $_POST['level'];
    $position = $_POST['position'];
    $day = $_POST['day'];
    $time = $_POST['time'];
    $sql = "INSERT INTO `leadership` (`name`, `date`, `description`, `time`, `posision`, `img`) VALUES ('$name', '$day', '$level', '$time', '$position', '$full_image_src')";
    if ($mysqli->query($sql) === TRUE) {
      if(empty($errors)) { move_uploaded_file($image_temp, "../img/".$image_name); }
      echo "Запись успешно добавлена";
    } else { echo "Error: " . $sql . "<br>" . $mysqli->error; }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Руководство</title>
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
<form enctype="multipart/form-data" action="" method="post" class="form_added">
  <div>Добавление руководства</div>
  Введите полное имя: <textarea name="name">1</textarea>
  Введите научную степень: <textarea name="level">2</textarea>
  Введите должность: <textarea name="position">2</textarea>
  Введите день приема: <textarea name="day">2</textarea>
  Введите время приема: <textarea name="time">2</textarea>
  Выберите фото: <input type="file" name="image">
  <input type="submit" name="uploadBtn" value="Добавить"> 
</form>
<hr>
<form action="deleted_leadership.php" method="post" class="form_deleted">
  <div>Удаление руководства</div>
  Введите полное имя человека: <input type="text" name="name">
  <input type="submit" name="deletedBtn" value="Удалить">
</form>
<hr>
<a href="index.php">Вернуться назад</a>
</body>
</html>