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
      $student = $mysqli->query("SELECT * FROM `students_parlament`");  
      $description = $mysqli->query("SELECT * FROM `description_for_students_parlament`");
      while(($row_description = $description->fetch_assoc()) != false ){
        $description_true = $row_description['description_for_students_parlament'];
      }

      while(($row_leader_student = $student->fetch_assoc()) != false ){ 
        $data_leader_student[] = $row_leader_student; 
      }
        foreach($data_leader_student as $key_leader=>$value_leader){
          foreach($value_leader as $keyDataLeader => $valueDataLeader) { 
            $currentDataLeaderStudent[] = $valueDataLeader; }
        }
     ?> 
<div>Студентський парламент</div>
<div><?php echo $description_true; ?></div>
<div class="students_parlament"> Студентський парламент Сумської філії Харківського національного університету внутрішніх справ </div>
  <?php
    for($i = 0; $i < count($currentDataLeaderStudent); $i++){
	  if( ($i % 5) == 0){
	  	echo "
	  	  <div class='leader_l'>
	  	  	<img class='image_l' src= ".$currentDataLeaderStudent[$i+4].">
	  	  	<div class='description'>
	  	      <div class='position_l item_l'>".$currentDataLeaderStudent[$i+3]."</div>
				    <div class='name_l item_l'>".$currentDataLeaderStudent[$i+1].$currentDataLeaderStudent[$i+2]."</div>
          <div class='id_l item_l'>".$currentDataLeaderStudent[$i]."</div>
	  	  </div>
	  	  ";
	    }
	  }
	?>  
   
</body>
</html>