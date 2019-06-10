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
  		<a class="a-normal" href="grantu.php"><div class="title"> Інтернет-ресурси фондів і організацій, які пропонують грантову підтримку </div></a>
  		<div class="description"> 
  		1.   Посольство США – http://ukrainian.ukraine.usembassy.gov/
  		2.   FLEX (Програма обміну майбутніх лідерів) – http://www.americancouncils.org.ua/uk/pages/7/flex.html.....
      3.   Гранти Президента України –  http://www1.nas.gov.ua/nm/news/Pages/GrPU2014.aspx 4.   Міжнародний фонд «Відродження» – www.irf.kiev.ua/programs
  	 	</div>
  	</div>
  </div>

  <div class="news">
  	<div>
  		<a class="a-normal" href="about_ELSA.php"><div class="title"> Про ELSA </div></a>
  		<div class="description">  ELSA (The European Law Students' Association) — це міжнародна, незалежна, неполітична та неприбуткова організація, що об'єднує студенів-правників та молодих юристів, що зацікавлені в науковому та особистому вдосконаленні. Організація надає ідеальну базу для розвитку їхніх навичок, здобуття нових знань і спілкування з студентами права та юристами з усієї Європи......</div>
  	</div>
  </div>

  <div class="news">
  	<div>
  		<a class="a-normal" href="mizhvuz.php"><div class="title"> Міжнародне та міжвузівське співробітництво </div></a>
  		<div class="description">  Зростання ролі освіти та науки в суспільстві, диверсифікація, а також інтернаціоналізація вищої освіти – ці світові тенденції характеризують міжнародний компонент у діяльності університету як необхідну умову його комплексного розвитку. Міжнародне співробітництво було і залишається одним із пріоритетів розвитку Сумської філії Харківського національного університету внутрішніх справ......</div>
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