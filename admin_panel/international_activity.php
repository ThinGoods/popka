<?php 
require_once "../function/connectMySQL/connect_to_db.php";
global $mysqli;
connectDB();

if(isset($_POST['title'], $_POST['full_text'], $_POST['date'])) {
  $errors = array();
  // $image_name = $_FILES['image']['name'];
  // $image_temp = $_FILES['image']['tmp_name'];
  // $full_image_src = 'img/'.$image_name;
  $full_src = '';

  function addOptionalImage($image) {
    global $full_src;
    if($image['name']) {
      $image_optional_name = $image['name'];
      $image_optional_temp = $image['tmp_name'];
      $full_optional_image_src = 'img/international_activity/'.$image_optional_name;
      $full_src .= $full_optional_image_src.'$';
      move_uploaded_file($image_optional_temp, "../img/international_activity/".$image_optional_name);
    }
  }
  addOptionalImage($_FILES['image1']);
  addOptionalImage($_FILES['image2']);
  addOptionalImage($_FILES['image3']);
  addOptionalImage($_FILES['image4']);
  addOptionalImage($_FILES['image5']);
  addOptionalImage($_FILES['image6']);
  addOptionalImage($_FILES['image7']);
  addOptionalImage($_FILES['image8']);
  addOptionalImage($_FILES['image9']);
  addOptionalImage($_FILES['image10']);
  
  // echo $full_src;
  $title = $_POST['title'];
  $full_text = $_POST['full_text'];
  $date = $_POST['date'];
  $sql = "INSERT INTO `international_activity` (`title`, `img`, `long_text`, `date`) VALUES ('$title', '$full_src', '$full_text', '$date')";
  if ($mysqli->query($sql) === TRUE) {
    // if(empty($errors)) { move_uploaded_file($image_temp, "../img/".$image_name); }
    echo "Запись успешно добавлена";
  } else { echo "Error: " . $sql . "<br>" . $mysqli->error; }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Міжнародна діяльність </title>
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
  <div>Добавление новости</div>
  Введите назвние новости: <textarea name="title">1</textarea>
  Введите описание новости: <textarea name="full_text">2</textarea>
  Выберите дату: <input type="date" name="date">
  Выберите дополнительную картинку 1: <input type="file" name="image1">
  Выберите дополнительную картинку 2: <input type="file" name="image2">
  Выберите дополнительную картинку 3: <input type="file" name="image3">
  Выберите дополнительную картинку 4: <input type="file" name="image4">
  Выберите дополнительную картинку 5: <input type="file" name="image5">
  Выберите дополнительную картинку 6: <input type="file" name="image6">
  Выберите дополнительную картинку 7: <input type="file" name="image7">
  Выберите дополнительную картинку 8: <input type="file" name="image8">
  Выберите дополнительную картинку 9: <input type="file" name="image9">
  Выберите дополнительную картинку 10: <input type="file" name="image10">
  <input type="submit" name="uploadBtn" value="Добавить"> 
</form>
<hr>
<form action="deleted_international_activity.php" method="post" class="form_deleted">
  <div>Удаление новости</div>
  Введите ID записи: <input type="text" name="id">
  <input type="submit" name="deletedBtn" value="Удалить">
</form>
<hr>
<a href="index.php">Вернуться назад</a>
</body>
</html>