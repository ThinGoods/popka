<!DOCTYPE html>
<html>
<head>
  <title> Наука </title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/science.css">
  <style>
    /* news [start] */

.news {
  background-color: white;
  font-size: 14pt;
  width: 70%;
  margin: 0 auto;
  margin-bottom: 15px;
  margin-top: 5px;
  padding: 10px;
  display: flex;
  align-items: center;
  border-bottom: 6px solid #0e5861;
  border-bottom-left-radius: 15px;
  border-bottom-right-radius: 15px;
}

.left_part_news {
  width: 25%;
}

.right_part_news {
  width: 75%;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
  padding: 10px;
}

.title_news {
  background-color: #0e5861;
  color: white;
  text-align: center;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 15px;
  transition: 0.5s;
}
.title_news:hover {
  padding: 15px;
  margin-right: 15px;
}
.more {
  color: #0e5861;
  font-size: 15pt;
  font-weight: bolder;
  transition: 0.5s;
  margin: 20px;
  
/*  padding: 5px;
  padding-left: 10px;
  padding-right: 10px;*/
/*  box-shadow: 3px 3px 10px 5px #0e5861;*/
  border-radius: 10px;
}
.more:hover {
  font-size: 20pt;

}

.long_description {
  display: none;
}

.btn_expand, .btn_unexpand {
  font-weight: bolder;
  font-size: 25pt;
  color: blue;
  cursor: pointer;
}

.btn_unexpand {
  display: none;
}
.date_news {
/*  margin-right: 0;
  position: absolute;*/
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
  width: 100%;
}
.image_news {
  width: 300px;
  border-radius: 10px;
  transition: 0.5s;
  cursor: pointer;
}
.image_news:hover {
  width: 330px;
  border-radius: 20px;
  border-left: 8px solid #0e7a61;
}
 /* news [end]*/
  </style>
</head>
<body>
<?php require("nav.php"); ?>
<?php require_once __DIR__."/function/connectMySQL/connect_to_db.php";
    global $mysqli;
    connectDB();
 
    $answer = $mysqli->query("SELECT * FROM `science` ORDER BY `date` DESC");
    while(($row = $answer->fetch_assoc()) != false ){ $data[] = $row; }
      foreach($data as $key=>$value){
        foreach($value as $keyData => $valueData) { $currentData[] = $valueData; }
  }     

  for($i = 0; $i < count($currentData); $i++){
    if( ($i % 6) == 0){
      echo "
        <div class='news'>
          <div class='left_part_news'>
            <img class='image_news' src= ".$currentData[$i+3].">
           </div>
          <div class='right_part_news'>
        <div class='title_news'>".$currentData[$i+1]."</div>
            <div class='short_description'>".mb_strimwidth($currentData[$i+2], 0, 200, '.....')."</div>
            <a  class='a-normal' href='/popka/more_science.php?more&id=".$currentData[$i]."'><div class='more'>  Детальніше</div></a> 
        <div class='date_news'>".str_replace('-', '.',substr ( $currentData[$i+5] , 0, 10))."</div>

          </div>
        </div>
        ";
    }
  }

  /*-----------------------------
     ВЫВОД НОВОСТЕЙ С БАЗЫ ДАННЫХ
  -----------------------------*/
?>
<?php require("footer.php"); ?>
</body>
</html>