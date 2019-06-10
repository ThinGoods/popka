<!DOCTYPE html>
<html>
<head>
	<title> ELSA </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.long_description { display: block; }
    .container_for_id {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: row;
    }
    .full_news {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      width: 70%;
      margin: 0 auto;
    }
    .title_fullnews, .id_fullnews {
      font-size: 15pt;
      padding: 15px;
      margin-top: 20px;
      margin-bottom: 20px;
      font-weight: bolder;
    }
    .id_fullnews {
      background-color: #0e5861;
      color: white;
      border-radius: 10px;
    }
    .title_image {
      width: 500px;
      border-radius: 10px;
        transition: 0.5s;
        cursor: pointer;
        margin-bottom: 15px;
    }
    .title_image:hover {
      width: 550px;
        border-radius: 20px;
        border-left: 8px solid #0e5861;
        border-right: 8px solid #0e5861;
    }
    .long_fulldescription {
      font-size: 15pt;
      margin: 10px;
      padding-left: 10px;
      margin-bottom: 20px;
      text-align: justify;
      border-left: 7px solid #0e5861;
    }
    .all_images {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: space-around;
      align-items: center;
      width: 100%;
    }
    .images {
      width: 500px;
      border-radius: 20px;
      transition: 0.5s;
      margin: 30px;
      cursor: pointer;
    }
    .images:hover {
      width: 550px;
    }
    .date_fullnews {
      font-size: 15pt;
      padding: 20px;
    }
	</style>
</head>
<body>
   <?php require("nav.php"); ?>
  <?php 
	require_once __DIR__."/function/connectMySQL/connect_to_db.php";
	  global $mysqli;
	  connectDB();

	  $answer = $mysqli->query("SELECT * FROM `elsa` WHERE id = ".$_GET['id']);
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
	  	  	  for($key = 0; $key < substr_count($images, '$'); $key++){
	  	 	  	echo "<img class='images' src='".explode('$', $currentData[$i+4])[$key]."'>";
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
