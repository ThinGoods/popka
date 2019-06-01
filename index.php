<!DOCTYPE html>
<html>
<head>
	<title> Головна хуйня </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php require("nav.php"); ?>

MAIN
<?php 
	echo "<br><br>";
	require_once __DIR__."/function/connectMySQL/connect_to_db.php";
	global $mysqli;
	connectDB();

	echo "<br><br>";

	$answer = $mysqli->query("SELECT * FROM `news` ORDER BY `date` DESC");
	while(($row = $answer->fetch_assoc()) != false ){ $data[] = $row; }
 
    foreach($data as $key=>$value){
    	foreach($value as $keyData => $valueData) {
    		$currentData[] = $valueData;
    	}
	}     


	for($i = 0; $i < count($currentData); $i++){
	  if( ($i % 5) == 0){
	  	echo "
	  	  <div>
	  	  	<div>title = ".$currentData[$i+1]."
	  	  	<div>short_desc = ".$currentData[$i+2]."
	  	  	<div>long_desc = ".$currentData[$i+3]."
	  	  	<div>date = ".$currentData[$i+4]."
	  	  </div>
	  	  ";
	  }
	}

	/*
		----------------------------
		ВЫВОД НОВОСТЕЙ С БАЗЫ ДАННЫХ
		----------------------------
	*/




?>
</body>
</html>