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
	<title> Міжнародна діяльність </title>
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
  <div><div class="title">Додавання новини Міжнародної діяльності</div></div>
  <div class="inputs"><div>Введіть назву новини: <textarea name="title"></textarea></div>
  <div>Введіть опис новини: <textarea name="full_text"></textarea></div>
  <div>Виберіть дату: <input type="date" name="date"></div>
  <div>Виберіть додаткове зображення 1: <input type="file" name="image1"></div>
  <div>Виберіть додаткове зображення 2: <input type="file" name="image2"></div>
  <div>Виберіть додаткове зображення 3: <input type="file" name="image3"></div>
  <div>Виберіть додаткове зображення 4: <input type="file" name="image4"></div>
  <div>Виберіть додаткове зображення 5: <input type="file" name="image5"></div>
  <div>Виберіть додаткове зображення 6: <input type="file" name="image6"></div>
  <div>Виберіть додаткове зображення 7: <input type="file" name="image7"></div>
  <div>Виберіть додаткове зображення 8: <input type="file" name="image8"></div>
  <div>Виберіть додаткове зображення 9: <input type="file" name="image9"></div>
  <div>Виберіть додаткове зображення 10: <input type="file" name="image10"></div>
  <div><input type="submit" name="uploadBtn" value="Додати" data-type="add"></div>
</div>
</form>
</div>
<hr>
<div class="container">
<form action="deleted_international_activity.php" method="post" class="form_deleted">
  <div><div class="title" >Видалення новини Міжнародної діяльності</div></div>
  <div class="inputs" data-type="input-deleted"><div>Введіть ID запису: <input type="text" name="id"></div>
  <div><input type="submit" name="deletedBtn" value="Видалити" data-type="remove"></div>
</div>
</form>
</div>
</body>
</html>