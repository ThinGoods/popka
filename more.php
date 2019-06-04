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
	  	$title_image = "<img class='title_image' src='".$currentData[$i+5]."'>"; 
	  	$images = $currentData[$i+2];
	  	?>
	  	<div class='full_news'>
	  	  <div class='id_fullnews'><?php echo $currentData[$i]; ?></div>
	  	  <div class='title_fullnews'><?php echo $currentData[$i+1]; ?></div>
	  	  <?php echo $title_image; ?>	 
	  	  <div class='long_fulldescription'><?php echo $currentData[$i+3]; ?></div>
	  	  	<?php 
	  	  	  for($key = 0; $key < substr_count($images, '$'); $key++){
	  	 	  	echo "<div class='all_images'><img class='images' src='".explode('$', $currentData[$i+2])[$key]."'></div>";
	  	  	  }
	  	  	?>
	  	  <div class='date_fullnews'><?php echo str_replace('-', '.',substr ( $currentData[$i+4] , 0, 10)) ?></div>
	  	</div> 	  	
	  	<?php
	  }
	}
  ?>
</body>
</html>
