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

if(isset($_POST['login'])) {
  $login = $_POST['login'];
  $sql = "UPDATE `admin` set login = '$login'";
  if ($mysqli->query($sql) === TRUE) { echo "<div id='warning'>Запись обновлена</div>"; } 
  else { echo "<div id='warning'>Помилка при оновленні, спробуйте ще раз.</div>"; }
  echo "<div><a href='settings_admin.php'>Вернуться назад</a></div>";
   
}
?>
</div>
</body>
</html>

