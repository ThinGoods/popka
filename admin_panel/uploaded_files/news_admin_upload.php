<!-- 
<?php require_once "../function/connectMySQL/connect_to_db.php"; 
  global $mysqli; connectDB(); 
?>
<?php echo php_ini_loaded_file(); ?>
<?php
$uploaddir = '../img/';
$uploadfile = $uploaddir.basename($_FILES['userfile']['name']);

if (isset(
	$_POST['title'],
	$_POST['full_text'],
	$_POST['date'],
	$_POST['img']
)) {
  $title = $_POST['title'];
  $full_text = $_POST['full_text'];
  $date = $_POST['date'];
  $img = $_POST['img'];
  // $images = $_POST['images'];
  echo "$title, $full_text, $date, $img";

  if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
  } else {
    echo "Возможная атака с помощью файловой загрузки!\n";
  }

echo 'Некоторая отладочная информация:';
print_r($_FILES);
  // foreach($_FILES as $key => $value){
  // 	echo "$key ====== $value";
  // }
}

?> -->




<!-- <?php
  session_start();
  $message = ''; 
  if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload'){
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK){
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $newFileName = md5(time().$fileName).'.'.$fileExtension;
    $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');
    if (in_array($fileExtension, $allowedfileExtensions)){
      $uploadFileDir = './uploaded_files/';
      $dest_path = $uploadFileDir . $newFileName;
      if(move_uploaded_file($fileTmpPath, $dest_path)){ $message ='Success.'; }
      else { $message = 'Error directory.'; }
    }
    else { $message = 'Upload failed. Error type'; }
  }
  else {
    $message = 'Some error';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }
}

$_SESSION['message'] = $message;
header("Location: news_admin.php");
?> -->