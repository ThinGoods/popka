<?php 
require_once "function/connectMySQL/connect_to_db.php";
global $mysqli;
connectDB();

$answer = $mysqli->query("SELECT `login`, `password` FROM `admin` LIMIT 1");
while(($row = $answer->fetch_assoc()) != false ){ $data[] = $row; }
foreach($data as $key=>$value){
  foreach($value as $keyData => $valueData) { $currentData[] = $valueData; }
}

if (isset($_POST['login'], $_POST['password'], $_POST['password_repeat'] )) {
  $true = [ $currentData[0], $currentData[1]];
  $trueDecrypt = $currentData[1];
  $l = $_POST['login'];
  $p = $_POST['password'];
  $p_crypt = ecrypt($p);
  $pr = $_POST['password_repeat'];
  $pr_crypt = ecrypt($pr);
  if($l === $true[0]) {
  	if($p_crypt === $trueDecrypt) {
  	  if($pr_crypt === $trueDecrypt) header("Location: http://localhost/popka/admin_panel/index.php");//echo "<div class='notification'>! <a href='admin_panel/index.php'>Дані вірні, натисність щоб перейти.</a></div>";//
      else echo "<div class='notification'>Паролі не співпадають.</div>";
    }
	else echo "<div class='notification'>Введені дані невірні.</div>";
  }
  else echo "<div class='notification'>Дані введено невірно.</div>";
}



?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In</title>
	<style>
	  body {
	  	background-color: #353535;
	  	color: lightgrey;
	  	font-size: 17pt;
	  	font-weight: bolder;
	  }
	  .notification {
	  	position: fixed;
	  	background-color: darkred;
	  	color: lightgrey;
	  	font-weight: bolder;
	  	font-size: 12pt;
	  	padding: 15px;
	  	border-radius: 10px;
		width: 20%;
		font-size: 17pt;
	  }
	  .login_form {
	  	display: flex;
	  	flex-direction: column;
	  	justify-content: center;
	  	align-items: center;
	  	position: fixed;
	  	width: 100%;
	  	height: 100%;
	  }
	  .title {
	    padding: 20px;
	    font-size: 17pt;

	  }
	  .container {
	  	display: flex;
	  	flex-direction: column;
	  	justify-content: center;
	  	align-items: center;
        border: 5px solid lightgrey;
		padding: 25px;
		border-top-left-radius: 30px;
		border-bottom-right-radius: 30px;
	  }
	  .container > div {
	  	display: flex;
	  	flex-direction: row;
	  	justify-content: space-between;
		align-items: center;
		width: 100%;
		margin: 10px;
	  }
	  .container > div > input[type = 'text'], .container > div > input[type = 'password']  {
	  	font-size: 15pt;
	  	border: 1px solid lightgrey;
	  	border-radius: 15px;
	  	min-width: 300px;
	  	min-height: 30px;
	  	padding: 5px;
	  	text-align: center;
	  }
	  .container > div > input[type = 'submit'] {
	  	margin: 0 auto;
	  	width: 100px;
	  	height: 40px;
	  	background-color: darkred;
	  	color: lightgrey;
	  	border: 0;
	  	font-weight: bolder;
	  	font-size: 12pt;
	  	transition: 0.2s;
	  	cursor: pointer;
	  }
	  .container > div > input[type = 'submit']:hover {
	  	background-color: white;
	  	color: darkred;
	  	border-top-left-radius: 10px;
		border-bottom-right-radius: 10px;
	  }
	</style>
</head>
<body>
<?php 

// if(true){//isset($_SESSION['logged'])) {
//   header('Location: http://localhost/popka/admin_panel/index.php');
// }
// else {
?>
<form action="" method="POST" class="login_form">
  <div class="title">Вхід до Адміністративної панелі</div>
  <div class="container">
    <div>Введіть логін адміністратора: <input type="text" name="login"></div>
    <div>Введіть пароль адміністратора: <input type="password" name="password"></div>
    <div>Введіть пароль знову: <input type="password" name="password_repeat"></div>
    <div><input type="submit" name="sumbit" value="Увійти"></div>
  </div>
</form>
<?php //} ?>
</body>
</html>

