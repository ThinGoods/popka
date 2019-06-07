<!DOCTYPE html>
<html>
<head>
  <title> Міжнародні діяльність </title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/international_activity.css">
</head>
<body>
    <?php require("nav.php"); ?>

  <div class="news">
  	<div>
  		<a class="a-normal" href="#"><div class="title"> Інтернет-ресурси фондів і організацій, які пропонують грантову підтримку </div></a>
  		<div class="description"> 
  		1.   Посольство США – http://ukrainian.ukraine.usembassy.gov/
  		2.   FLEX (Програма обміну майбутніх лідерів) – http://www.americancouncils.org.ua/uk/pages/7/flex.html.....
		3.   Гранти Президента України –  http://www1.nas.gov.ua/nm/news/Pages/GrPU2014.aspx
		4.   Міжнародний фонд «Відродження» – www.irf.kiev.ua/programs
  	 	</div>
  	</div>
  </div>

  <div class="news">
  	<div>
  		<a class="a-normal" href="#"><div class="title"> Про ELSA </div></a>
  		<div class="description">  .....</div>
  	</div>
  </div>

  <div class="news">
  	<div>
  		<a class="a-normal" href="#"><div class="title"> Міжнародне та міжвузівське співробітництво </div></a>
  		<div class="description">  .....</div>
  	</div>
  </div>









<!--   <div>
  	<?php require_once __DIR__."/function/connectMySQL/connect_to_db.php";
	  global $mysqli;
	  connectDB(); 
	  $answer = $mysqli->query("SELECT * FROM `international_activity` ORDER BY `id` DESC");
	  while(($row = $answer->fetch_assoc()) != false ){ $data[] = $row; }
     	foreach($data as $key=>$value){
     		foreach($value as $keyData => $valueData) { $currentData[] = $valueData; }
	    }

	for($i = 0; $i < count($currentData); $i++){
	  if( ($i % 4) == 0){
	  	echo "
	  	  <div class='news'>
	  	  	<div>
				<a class='a-normal' href='/popka/more_international activity.php?more&id=".$currentData[$i]."'><div class='title'>".$currentData[$i+1]."</div></a>
	  	  		<div class='description'>".mb_strimwidth($currentData[$i+2], 0, 200, '.....')."</div>	  	  		
	  	  	</div>
	  	  </div>
	  	  ";
	  }
	}
?> -->
  </div>
</body>
</html>