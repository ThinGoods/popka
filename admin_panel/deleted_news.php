<?php
require_once "../function/connectMySQL/connect_to_db.php";
global $mysqli;
connectDB();

if(isset($_POST['id'])) {
  $id = $_POST['id'];
  $sql = "DELETE FROM `news` WHERE `id` = '$id'";
  if ($mysqli->query($sql) === TRUE) { echo "Запись с ID = $id удалена"; } 
  else { echo "Error: " . $sql . "<br>" . $mysqli->error; }
  echo "<div><a href='news_admin.php'>Вернуться назад</a></div>";
}
?>