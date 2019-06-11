<?php 
require_once "../function/connectMySQL/connect_to_db.php";
global $mysqli;
connectDB();

if(isset($_POST['title'], $_POST['full_text'], $_POST['date'], $_FILES['image'])) {
  $errors = array();
  $image_name = $_FILES['image']['name'];
  $image_temp = $_FILES['image']['tmp_name'];
  $full_image_src = 'img/'.$image_name;
  $full_src = '';

  function addOptionalImage($image) {
    global $full_src;
    if($image['name']) {
      $image_optional_name = $image['name'];
      $image_optional_temp = $image['tmp_name'];
      $full_optional_image_src = 'img/'.$image_optional_name;
      $full_src .= $full_optional_image_src.'$';
      move_uploaded_file($image_optional_temp, "../img/".$image_optional_name);
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
  
  echo $full_src;
  $title = $_POST['title'];
  $full_text = $_POST['full_text'];
  $date = $_POST['date'];
  $sql = "INSERT INTO `news` (`title`, `images`, `full_text`, `date`, `img`) VALUES ('$title', '$full_src', '$full_text', '$date', '$full_image_src')";
  if ($mysqli->query($sql) === TRUE) {
    if(empty($errors)) { move_uploaded_file($image_temp, "../img/".$image_name); }
    echo "Запись успешно добавлена";
  } else { echo "Error: " . $sql . "<br>" . $mysqli->error; }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Новости</title>
	<style>
    body {
      margin: 0px;
      padding: 0px;
      font-family: Arial;
      transition: 0.5s; 
    }
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
    .inputs > div > input[type="file"]  {
      padding: 10px;
      border: 2px solid #353535;
      border-radius: 10px;
      box-shadow: 0px 0px 2px black;
    }
    .inputs > div > input[type="date"]  {
      padding: 10px;
      border: 2px solid #353535;
      border-radius: 10px;
      box-shadow: 0px 0px 2px black;
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
	</style>
</head>
<body>
<?php require_once "nav.php";?>
<div class="container">
<form enctype="multipart/form-data" action="" method="post" class="form_added">
  <div>
    <div class="title">Добавление новости</div>
  </div>
  <div class="inputs">
  <div>
    Введите назвние новости: <textarea name="title" data-type="title"></textarea>
  </div>
  <div>
    Введите описание новости: <textarea name="full_text" data-type="text"></textarea>
  </div>
  <div>
    Выберите дату: <input type="date" name="date">
  </div>
  <div>
    Выберите главную картинку: <input type="file" name="image">
  </div>
  <div>
    Выберите дополнительную картинку 1: <input type="file" name="image1">
  </div>
  <div>
    Выберите дополнительную картинку 2: <input type="file" name="image2">
  </div>
  <div>
    Выберите дополнительную картинку 3: <input type="file" name="image3">
  </div>
  <div>
    Выберите дополнительную картинку 4: <input type="file" name="image4">
  </div>
  <div>
    Выберите дополнительную картинку 5: <input type="file" name="image5">
  </div>
  <div>
    Выберите дополнительную картинку 6: <input type="file" name="image6">
  </div>
  <div>
    Выберите дополнительную картинку 7: <input type="file" name="image7">
  </div>
  <div>
    Выберите дополнительную картинку 8: <input type="file" name="image8">
  </div>
  <div>
    Выберите дополнительную картинку 9: <input type="file" name="image9">
  </div>
  <div>
    Выберите дополнительную картинку 10: <input type="file" name="image10">
  </div>
  <br>
  <div><input type="submit" name="uploadBtn" value="Добавить" data-type="add"> </div>
  </div>
  
</form>
</div>
<hr>
<div class="container">
<form action="deleted_news.php" method="post" class="form_deleted">
  <div>
    <div class="title">Удаление новости</div>
  </div>
  <div class="inputs" data-type="input-deleted">
    <div>Введите ID записи: <input type="text" name="id"></div>
    <br>
    <div><input type="submit" name="deletedBtn" value="Удалить"  data-type="remove"></div>
  </div>
  
</form>
<div>
</body>
</html>