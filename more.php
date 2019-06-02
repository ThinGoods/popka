<!DOCTYPE html>
<html>
<head>
	<title> sadasd as</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <?php require("nav.php"); ?>

	<?php 
	  echo ($_GET['id']);

require_once __DIR__."/function/connectMySQL/connect_to_db.php";


	  global $mysqli;
	  connectDB();
 
	  $answer = $mysqli->query("SELECT * FROM `news` WHERE id = ".$_GET['id']);
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
	  	  		<div class='date_news'>".$currentData[$i+4]."</div>
	  	  	</div>
	  	  </div>
	  	  ";
	  }
	}
  ?>
</body>
</html>