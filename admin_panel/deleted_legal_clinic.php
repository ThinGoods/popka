<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Сторінка видалення</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div class="remove_container">
<?php
require_once "../function/connectMySQL/connect_to_db.php";
global $mysqli;
connectDB();

//"Error: " . $sql . "<br>" . $mysqli->error;

if(isset($_POST['id'])) {
  $id = $_POST['id'];
  $sql = "DELETE FROM `legal_clinic` WHERE `id` = '$id'";
  if ($mysqli->query($sql) === TRUE) { echo "<div id='warning'>Запис с ID = $id видалено</div>"; } 
  else { echo "<div id='warning'>Помилка при видаленні, спробуйте ще раз.</div>"; }
  echo "<div><a href='legal_clinic.php'>Вернуться назад</a></div>";
}
?>
</div>
</body>
</html>


