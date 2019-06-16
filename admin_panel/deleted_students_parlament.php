<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Сторінка видалення</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div class="remove_container"><?php
require_once "../function/connectMySQL/connect_to_db.php";
global $mysqli;
connectDB();

if(isset($_POST['name'])) {
  $name = $_POST['name'];
  $sql = "DELETE FROM `students_parlament` WHERE `name` = '$name'";
  if ($mysqli->query($sql) === TRUE) { echo "<div id='warning'>Запис з ім’ям  = $name видалено</div>"; } 
  else { echo "<div id='warning'>Помилка при видаленні, спробуйте ще раз.</div>"; }
  echo "<div><a href='students_parlament.php'>Вернуться назад</a></div>";
}
?>
</div>
</body>
</html>


