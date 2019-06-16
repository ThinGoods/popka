<!DOCTYPE html>
<html>
<head>
	<title> Наука </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/more_science.css">
</head>
<body>
	<?php require("nav.php"); ?>
  <?php 
	require_once __DIR__."/function/connectMySQL/connect_to_db.php";
	  global $mysqli;
	  connectDB();

	  $answer = $mysqli->query("SELECT * FROM `science` WHERE id = ".$_GET['id']);
	  while(($row = $answer->fetch_assoc()) != false ){ $data[] = $row; }
     	foreach($data as $key=>$value){
     		foreach($value as $keyData => $valueData) { $currentData[] = $valueData; }
	  }     

	for($i = 0; $i < count($currentData); $i++){
	  if( ($i % 6) == 0){
	  	
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
	  	  	  for($key = 0; $key < substr_count($images, '$'); $key++){
	  	 	  	echo "<img class='images' src='".explode('$', $currentData[$i+4])[$key]."'>";
	  	  	  }
	  	  	?>
	  	  </div>
	  	  <div class='date_fullnews'><?php 
	  	  for($key_date = 0; $key_date < 3; $key_date++){
	  	 	$data_date[] = explode('.', str_replace('-', '.',substr ( $currentData[$i+5] , 0, 10)))[$key_date];
	  	  } echo "$data_date[2].$data_date[1].$data_date[0]";
	  	  ?></div>
	  	</div> 	  	
	  	<?php
	  }
	}
  ?>

<?php require("footer.php"); ?>
</body>
</html>