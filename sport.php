<!DOCTYPE html>
<html>
<head>
  <title> Спорт </title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/sport.css">

</head>
<body>
  <?php require("nav.php"); ?>

<?php require_once __DIR__."/function/connectMySQL/connect_to_db.php";
    global $mysqli;
    connectDB();
 
    $answer = $mysqli->query("SELECT * FROM `sport` ORDER BY `id` DESC");
    while(($row = $answer->fetch_assoc()) != false ){ $data[] = $row; }
      foreach($data as $key=>$value_elsa){
        foreach($value_elsa as $keyData => $valueData) { $currentData[] = $valueData; }
    }     

    for($i = 0; $i < count($currentData); $i++){
      if( ($i % 5) == 0){
        echo "
          <div class='news'>
            <div class='left_part_news'>
              <img class='image_news' src= ".$currentData[$i+3].">
             </div>
             <div class='right_part_news'>
               <div class='title_news'>".$currentData[$i+1]."</div>
               <div class='short_description'>".mb_strimwidth($currentData[$i+2], 0, 200, '.....')."</div>
               <a  class='a-normal' href='/popka/more_sport.php?more&id=".$currentData[$i]."'><div class='more'>  Детальніше...</div></a> 
             </div>
          </div>
        ";
    }
  }
?>













    </div>
  </div>

</body>
</html>