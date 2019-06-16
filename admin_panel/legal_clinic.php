<?php 
require_once "../function/connectMySQL/connect_to_db.php";
global $mysqli;
connectDB();

if(isset($_POST['title'], $_POST['full_text1'], $_FILES['image'])) {
  $errors = array();
  $image_name = $_FILES['image']['name'];
  $image_temp = $_FILES['image']['tmp_name'];
  $full_image_src = 'img/legal_clinic/'.$image_name;
  $full_src = $_POST['full_text1'];;

  function addOptionalImage($image) {
    global $full_src;
    if($image) {
      $full_src .= $image.'$';
    }
  }
  addOptionalImage($_POST['full_text2']);
  addOptionalImage($_POST['full_text3']);
  addOptionalImage($_POST['full_text4']);
  addOptionalImage($_POST['full_text5']);
  addOptionalImage($_POST['full_text6']);
  
  //echo $full_src;
  $title = $_POST['title'];

  $sql = "INSERT INTO `legal_clinic` (`title`, `description`, `img_1`) VALUES ('$title', '$full_src', '$full_image_src')";
  if ($mysqli->query($sql) === TRUE) {
    if(empty($errors)) { move_uploaded_file($image_temp, "../img/legal_clinic/".$image_name); }
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
  <title>Юридична клініка</title>
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
<?php require_once "nav.php";?>
<div class="container">
<form enctype="multipart/form-data" action="" method="post" class="form_added">
  <div>
    <div class="title">Додавання запису Юридичної клініки:</div>
  </div>
  <div class="inputs">
  <div>
    Введіть заголовок: <textarea name="title" data-type="title"></textarea>
  </div>
  <div>
    Введіть перший абзац: <textarea name="full_text1" data-type="text"></textarea>
  </div>
  <div>
    Введіть другий абзац (опціонально): <textarea name="full_tex2" data-type="text"></textarea>
  </div>
  <div>
    Введіть третій абзац (опціонально): <textarea name="full_text3" data-type="text"></textarea>
  </div>
  <div>
    Введіть четвертий абзац (опціонально): <textarea name="full_text4" data-type="text"></textarea>
  </div>
  <div>
    Введіть п'ятий абзац (опціонально): <textarea name="full_text5" data-type="text"></textarea>
  </div>
  <div>
    Введіть шостий абзац (опціонально): <textarea name="full_text6" data-type="text"></textarea>
  </div>

  <div>
    Виберіть головну картинку: <input type="file" name="image">
  </div>
  
  <br>
  <div><input type="submit" name="uploadBtn" value="Додати" data-type="add"> </div>
  </div>
  
</form>
</div>
<hr>
<div class="container">
<form action="deleted_legal_clinic.php" method="post" class="form_deleted">
  <div>
    <div class="title">Видалення запису Юридичної клініки</div>
  </div>
  <div class="inputs" data-type="input-deleted">
    <div>Введіть ID новини: <input type="text" name="id"></div>
    <br>
    <div><input type="submit" name="deletedBtn" value="Видалити"  data-type="remove"></div>
  </div>
  
</form>
<div>
</body>
</html>