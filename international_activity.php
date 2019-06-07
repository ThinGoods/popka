<!DOCTYPE html>
<html>
<head>
  <title> Міжнародні діяльність </title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/international_activity.css">
</head>
<body>
  <?php require("nav.php"); ?>
  <div>
  	<!-- <div class="international_activity"> Міжнародна діяльність </div> -->
 	<?php require_once __DIR__."/function/connectMySQL/connect_to_db.php";
	  global $mysqli;
	  connectDB();
 
	  $answer = $mysqli->query("SELECT * FROM `international_activity` ORDER BY `id` DESC");
	  while(($row = $answer->fetch_assoc()) != false ){ $data[] = $row; }
     	foreach($data as $key=>$value){
     		foreach($value as $keyData => $valueData) { $currentData[] = $valueData; }
	}     

	for($i = 0; $i < count($currentData); $i++){
	  if( ($i % 5) == 0){
	  	echo "
	  	  <div class='news'>

	  	  	<div>

				<div class='title'>".$currentData[$i+1]."</div>

	  	  		<div class='description'>".mb_strimwidth($currentData[$i+2], 0, 200, '.....')."</div>

	  	  		<div> <a class='a-normal' href='/popka/more_international activity.php?more&id=".$currentData[$i]."'> Детальніше </a> </div>

				
				

	  	  	</div>
	  	  </div>
	  	  ";
	  }
	}

	/*-----------------------------
	   ВЫВОД НОВОСТЕЙ С БАЗЫ ДАННЫХ 
	  	  		// <div>".$currentData[$i+4]."</div>
	-----------------------------*/
?>
  </div>

</body>
</html>