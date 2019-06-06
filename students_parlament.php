<!DOCTYPE html>
<html>
<head>
  <title> Студентський парламент </title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <?php require("nav.php"); ?>
      <?php   
      require_once __DIR__."/function/connectMySQL/connect_to_db.php";
      global $mysqli;
      connectDB();
      $leader = $mysqli->query("SELECT * FROM `students_parlament` ORDER BY `id` DESC");
      echo "$leader";
      while(($row_leader = $leader->fetch_assoc()) != false ){ $data_leader[] = $row_leader; }
        foreach($data_leader as $key_leader=>$value_leader){
          foreach($value_leader as $keyDataLeader => $valueDataLeader) { $currentDataLeader[] = $valueDataLeader; }
        }
     ?> 
<div class="leadership"> Студентський парламент Сумської філії Харківського національного університету внутрішніх справ </div>
  <?php $description_students_parliament = $mysqli->query ("SELECT * FROM 'students_parlament`");
  ?>
  <?php
    for($i = 0; $i < count($currentDataLeader); $i++){
	  if( ($i % 5) == 0){
	  	echo "
	  	  <div class='leader_l'>
	  	  	<img class='image_l' src= ".$currentDataLeader[$i+6].">
	  	  	<div class='description'>
	  	      <div class='position_l item_l'>".$currentDataLeader[$i+5]."</div>
				    <div class='name_l item_l'>".$currentDataLeader[$i+1]."</div>
	  	  		<div class='activity_l item_l'>".$currentDataLeader[$i+3]."</div>
				    <div class='date_time_l item_l'>".$currentDataLeader[$i+2].' - '.$currentDataLeader[$i+4]."</div>
				  </div>
          <div class='id_l item_l'>".$currentDataLeader[$i]."</div>
	  	  </div><
	  	  ";
	    }
	  }
	?> 
  
</body>
</html>