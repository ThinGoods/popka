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

if(isset($_POST['password'])) {
  $password = $_POST['password'];
  $crypt_password = ecrypt($password);
  $sql = "UPDATE `admin` set password = '$crypt_password'";
  if ($mysqli->query($sql) === TRUE) { echo "<div id='warning'>Запись обновлена</div>"; } 
  else { echo "<div id='warning'>Помилка при оновленні, спробуйте ще раз.</div>"; }
  echo "<div><a href='settings_admin.php'>Вернуться назад</a></div>";
   
}
?>
</div>
</body>
</html>


