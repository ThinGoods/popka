<?php
require_once "../function/connectMySQL/connect_to_db.php";
global $mysqli;
connectDB();

if(isset($_POST['name'])) {
  $name = $_POST['name'];
  $sql = "DELETE FROM `leadership` WHERE `name` = '$name'";
  if ($mysqli->query($sql) === TRUE) { echo "Запись с именем = $name удалена"; } 
  else { echo "Error: " . $sql . "<br>" . $mysqli->error; }
  echo "<div><a href='leadership_admin.php'>Вернуться назад</a></div>";
}
?>