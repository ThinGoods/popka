<!DOCTYPE html>
<html>
<head>
	<title> Спорт </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
  <?php require("nav.php"); ?>
  <?php 
	require_once __DIR__."/function/connectMySQL/connect_to_db.php";
	  global $mysqli;
	  connectDB();
	  $answer = $mysqli->query("SELECT * FROM `sport` WHERE id = ".$_GET['id']);
	  while(($row = $answer->fetch_assoc()) != false ){ $data[] = $row; }
     	foreach($data as $key=>$value){
     		foreach($value as $keyData => $valueData) { $currentData[] = $valueData; }
	  }     

	for($i = 0; $i < count($currentData); $i++){
	  if( ($i % 5) == 0){
	  	$title_image = "<img class='title_image' src='".$currentData[$i+3]."'>"; 
	  	$images = $currentData[$i+4];
	  	?>
	  	<div class='full_news'>
	  	  <div class='container_for_id'>
	  	  	<div class='id_fullnews'><?php echo $currentData[$i]; ?></div>
	  	    <div class='title_fullnews'><?php echo $currentData[$i+1]; ?></div>
	  	  </div>
	  	  <?php echo $title_image; ?>	 
	  	  <div class='long_fulldescription'>
	  	  	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $currentData[$i+2]; ?>
	  	  </div>
	  	  <div class='all_images'>
	  	  	<?php 
	  	  	  for($key1 = 0; $key1 < substr_count($images, '$'); $key1++){
	  	 	  	echo "<img class='images' src='".explode('$', $currentData[$i+4])[$key1]."'>";
	  	  	  }
	  	  	?>
	  	  </div>

	  	</div> 	  	
	  	<?php
	  }
	}
  ?>

</body>
</html>
