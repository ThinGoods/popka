<?php 
require_once "../function/connectMySQL/connect_to_db.php";
global $mysqli;
connectDB();

if(isset($_POST['title'], $_POST['full_text'])) {
  $errors = array();
  $title = $_POST['title'];
  $full_text = $_POST['full_text'];
  $sql = "INSERT INTO `faq` (`head`, `title`, `question_main`, `answer_main`, `question`, `answer`) VALUES ('-', '-', '-', '-', '$title', '$full_text')";
  if ($mysqli->query($sql) === TRUE) {
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
	<title>Новости</title>
  <link rel="stylesheet" type="text/css" href="main.css">
	<style>
    body {
      margin: 0px;
      padding: 0px;
      font-family: Arial;
      transition: 0.5s; 
    }
	</style>
</head>
<body>
<?php require_once "nav.php"; ?>
<?php /*require_once "function_output.php"; 
  output("faq", 2);*/
?>
<div class="container">
<form action="" method="post" class="form_added">
  <div>
    <div class="title">Додавання запису FAQ</div>
  </div>
  <div class="inputs">
  <div>
    Введіть запитання: <textarea name="title" data-type="title"></textarea>
  </div>
  <div>
    Введіть відповідь: <textarea name="full_text" data-type="text"></textarea>
  </div>
  <br>
  <div><input type="submit" name="uploadBtn" value="Додати" data-type="add"> </div>
  </div>
  
</form>
</div>
<hr>
<div class="container">
<form action="deleted_faq.php" method="post" class="form_deleted">
  <div>
    <div class="title">Видаллення запису FAQ</div>
  </div>
  <div class="inputs" data-type="input-deleted">
    <div>Введіть ID: <input type="text" name="id"></div>
    <br>
    <div><input type="submit" name="deletedBtn" value="Видалити"  data-type="remove"></div>
  </div>
  
</form>
<div>
</body>
</html>