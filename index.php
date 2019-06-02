<!DOCTYPE html>
<html>
<head>
	<title> Головна хуйня </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<style>
		html * {text-decoration: none;}
	</style>

</head>

<body>
<?php require("nav.php"); ?>
<?php require_once __DIR__."/function/connectMySQL/connect_to_db.php";
	  global $mysqli;
	  connectDB();
 
	  $answer = $mysqli->query("SELECT * FROM `news` ORDER BY `date` DESC");
	  while(($row = $answer->fetch_assoc()) != false ){ $data[] = $row; }
     	foreach($data as $key=>$value){
     		foreach($value as $keyData => $valueData) { $currentData[] = $valueData; }
	}     

	for($i = 0; $i < count($currentData); $i++){
	  if( ($i % 6) == 0){
	  	echo "
	  	  <div class='news'>
	  	  	<div>title = ".$currentData[$i+1]."</div>
	  	  	<img src= ".$currentData[$i+5].">
	  	  	<div class='short_description'>short_desc = ".mb_strimwidth($currentData[$i+3], 0, 200, '.....')."</div>
	  	  	<div class='long_description'>long_desc = ".$currentData[$i+3]."</div>
	  	  	<div class='btn_expand'>+</div>
	  	  	<div class='btn_unexpand'>-</div>
	  	  	<div>date = ".$currentData[$i+4]."</div>
	  	  </div>
	  	  ";
	  }
	}

	/*-----------------------------
	   ВЫВОД НОВОСТЕЙ С БАЗЫ ДАННЫХ
	-----------------------------*/
?>

<script type="text/javascript">
const itemsOfShortDesc = document.getElementsByClassName('short_description');
const itemsOfLongDesc = document.getElementsByClassName('long_description');
const itemsOfButtons = document.getElementsByClassName('btn_expand');
const itemsOfHideButtons = document.getElementsByClassName('btn_unexpand');

function iteration(buttons, displayFirst, displaySecond) {
  Array.prototype.forEach.call(buttons, (button, index) => {
    button.addEventListener('click', () => { 
  	  itemsOfShortDesc[index].style.display = displayFirst;
  	  itemsOfLongDesc[index].style.display = displaySecond;
  	  itemsOfHideButtons[index].style.display = displaySecond;
  	  itemsOfButtons[index].style.display = displayFirst;
  	});
  });
};

iteration(itemsOfButtons, 'none', 'block');
iteration(itemsOfHideButtons, 'block', 'none');
</script>
</body>
</html>


<!-- меню разварачивается при клике что бы можно было лучше контролировать поведение страницы
 ДЛЯ ЗАЩИТЫ -->