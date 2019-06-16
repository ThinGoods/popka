<?php 
require_once "../function/connectMySQL/connect_to_db.php";
global $mysqli;
connectDB();

if(isset($_POST['title'], $_POST['full_text'])) {
  $errors = array();
  $title = $_POST['title'];
  $full_text = $_POST['full_text'];
  $sql = "INSERT INTO `grantu` (`title`, `description`) VALUES ('$title', '$full_text')";
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
	<title>Грантова підтримка</title>
  <link rel="stylesheet" type="text/css" href="main.css">
	<style>
    body {
      margin: 0px;
      padding: 0px;
      font-family: Arial;
      transition: 0.5s; 
    }
    /*
		.form_deleted {
		  display: flex;
		  flex-direction: column;
		  justify-content: center;
		  align-items: center;
      margin-bottom: 15px;
      width: 100%;
		}
    .title {
      font-size: 20pt;
      padding: 25px;
    }
    .container {
      display: flex;
      flex-direction: row;
      justify-content: start;
      align-items: center;
      width: 80%;
      margin: 0 auto;
    }
    .form_added {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin-bottom: 15px;
      margin: 0 auto;
      width: 100%;

    }
    .inputs {
      background-color: #e0fde0;
      padding: 25px;
      width: 100%;
      border: 2px solid #353535;
      border-bottom-left-radius: 45px;
      border-top-right-radius: 45px;
    }
    .inputs[data-type="input-deleted"] {
      background-color: #fdcbcb;
    }
    .inputs > div {
       font-size: 15pt;
       display: flex;
       justify-content: space-between;
       align-items: center;
       padding: 5px 30px 5px 30px;
    }
    .inputs > div > textarea {
      width: 55%;
      height: 50px;
      background-color: #353535;
      color: white;
      text-decoration: none;
      font-size: 12pt;
      padding: 15px;
      transition: 0.2s;
      border-radius: 15px;
    }
    .inputs > div > textarea[data-type="title"] {
      text-align: center;
      height: 40px;
    }
    .inputs > div > textarea[data-type="text"] {
      height: 60px;
    }

    .inputs > div > textarea:focus {
      outline: 0px;
      border-radius: 25px;
    }
    .inputs > div > input[data-type="add"]  {
      margin: 0 auto;
      border: 2px solid #353535;
      border-radius: 5px;
      box-shadow: 0px 0px 2px black;
      background-color: darkgreen;
      color: white;
      cursor: pointer;
      width: 200px;
      font-size: 15pt;
      padding: 20px;
    }
    .inputs > div > input[data-type="remove"]  {
      margin: 0 auto;
      border: 2px solid #353535;
      border-radius: 5px;
      box-shadow: 0px 0px 2px black;
      background-color: darkred;
      color: white;
      cursor: pointer;
      width: 200px;
      font-size: 15pt;
      padding: 20px;
    }
    .inputs > div > input[type="text"]  {
      border: 2px solid #353535;
      border-radius: 5px;
      box-shadow: 0px 0px 2px black;
      background-color: #353535;
      color: white;
      width: 200px;
      font-size: 15pt;      padding: 5px;
      border: 2px solid #353535;
      border-radius: 10px;
      box-shadow: 0px 0px 2px black;
      text-align: center;
    }
    hr {
      border: 3px solid darkred;
      margin-top: 50px;
    }
    .vvod {
     background-color: red;
     font-style: italic;
    }*/
	</style>
</head>
<body>
<?php require_once "nav.php";?>
<div class="container">
<form action="" method="post" class="form_added">
  <div>
    <div class="title">Додавання запису Грантової підтримки</div>
  </div>
  <div class="inputs">
  <div>
    Введіть назву: <textarea name="title" data-type="title"></textarea>
  </div>
  <div>
    Введіть посилання: <textarea name="full_text" data-type="text"></textarea>
  </div>
  <br>
  <div><input type="submit" name="uploadBtn" value="Додати" data-type="add"> </div>
  </div>
  
</form>
</div>
<hr>
<div class="container">
<form action="deleted_grantu.php" method="post" class="form_deleted">
  <div>
    <div class="title">Видалення запису Грантової підтримки</div>
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