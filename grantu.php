<!DOCTYPE html>
<html>
<head>
	<title> Гранти </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		.title {
 			color: black;
  		text-align: center;
  		padding: 10px;
  		margin-bottom: 20px;
      font-size: 25px;
      margin: 0 auto;
      width: 70%;
		}
		.list {
			font-size: 20px;
			color: black;
    	border-left: 7px solid #0e5861;
     	border-right: 7px solid #0e5861;
     	border-radius: 15px;
  		padding: 10px;
   		margin: 10px;
   		background-color: #8cd8a4;
      transition: 0.3s;
		}
		.list:hover {
		  padding: 15px;
      margin-right: 15px;
      font-size: 30px;

		}
		.bloc {
      margin: 0 auto;
      width: 70%;
		}
		.
	</style>
</head>
<body>
    <?php require("nav.php"); ?>	
	<div class="title">ІНТЕРНЕТ-РЕСУРСИ ФОНДІВ І ОРГАНІЗАЦІЙ, ЯКІ ПРОПОНУЮТЬ ГРАНТОВУ ПІДТРИМКУ</div>
<?php require_once __DIR__."/function/connectMySQL/connect_to_db.php";
    global $mysqli;
    connectDB();
 
    $answer = $mysqli->query("SELECT * FROM `grantu`");
    while(($row = $answer->fetch_assoc()) != false ){ $data[] = $row; }
      foreach($data as $key=>$value_elsa){
        foreach($value_elsa as $keyData => $valueData) { $currentData[] = $valueData; }
    }
    for($i = 0; $i < count($currentData); $i++){
      if( ($i % 3) == 0){
        echo "
          <div class='bloc'>
             <a href='".$currentData[$i+2]."'><div class='list'>".$currentData[$i+1]."</div>               
          </div>
        ";
      }
    }
?>
<?php require("footer.php"); ?>
</body>
</html>