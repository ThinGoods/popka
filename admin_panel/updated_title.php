<?php
require_once "../function/connectMySQL/connect_to_db.php";
global $mysqli;
connectDB();

if(isset($_POST['title'])) {
  $title = $_POST['title'];
  $sql = "UPDATE `settings` set title = '$title'";
  if ($mysqli->query($sql) === TRUE) { echo "Запись обновлена"; } 
  else { echo "Error: " . $sql . "<br>" . $mysqli->error; }
  echo "<div><a href='settings_admin.php'>Вернуться назад</a></div>";
   
}
?>