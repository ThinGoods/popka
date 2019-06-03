<!DOCTYPE html>
<html>
<head>
	<title> Головна хуйня </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/news.css">

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
	  	  	<div class='left_part_news'>
	  	  	 	<img class='image_news' src= ".$currentData[$i+5].">
	  	  	 </div>
	  	  	<div class='right_part_news'>
				<div class='title_news'>".$currentData[$i+1]."</div>
	  	  		<div class='short_description'>".mb_strimwidth($currentData[$i+3], 0, 200, '.....')."</div>
	  	  		<div class='long_description'>".$currentData[$i+3]."</div>
	  	  		<div class='title_news'> <a  class='a-normal' href='/popka/more.php?more&id=".$currentData[$i]."'> Детальніше </a> </div>
				<div class='date_news'>".str_replace('-', '.',substr ( $currentData[$i+4] , 0, 10))."</div>

	  	  	</div>
	  	  </div>
	  	  ";
	  }
	}

	/*-----------------------------
	   ВЫВОД НОВОСТЕЙ С БАЗЫ ДАННЫХ
	-----------------------------*/
?>

</body>
</html>

