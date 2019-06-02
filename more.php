<!DOCTYPE html>
<html>
<head>
	<title> sadasd as</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		.long_description { display: block; }
	</style>
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
	  	  <div class='full_news'>
	  	  	 	<img class='image_fullnews' src= ".$currentData[$i+5].">	  	  	 	  	
				<div class='title_fullnews'>".$currentData[$i+1]."</div>
	  	  		<div class='long_fulldescription'>".$currentData[$i+3]."</div>
	  	  		<div class='date_fullnews'>".str_replace('-', '.',substr ( $currentData[$i+4] , 0, 10))."</div>
	  	  	
	  	  </div>
	  	  ";
	  }
	}
  ?>
</body>
</html>