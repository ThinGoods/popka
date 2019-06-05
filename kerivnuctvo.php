<!DOCTYPE html>
<html>
<head>
  <title> Керівництво </title>
  <link rel="stylesheet" type="text/css" href="css/kerivnuctvo.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">
  	.leadership {
  	  text-align: center;
  	  font-size: 30pt;
      margin: 30px;
      transition: 0.2s;
      border-radius: 25px;
      cursor: pointer;
  	}
  	.leadership:hover {
  	  background-color: #0e5861;
  	  color: white;
  	}
  	.leader_l {
  	  display: flex;
  	  flex-direction: row;
  	  justify-content: flex-start;
  	  align-items: center;
  	  margin: 20px;
  	  margin-left: 20%;
  	  transition: 0.5s;
  	}
  	.description {
  	  display: flex;
  	  flex-direction: column;
  	  justify-content: center;
  	  align-items: center;
	  background-color: #0e5861;
  	  color: white;
  	  padding: 20px;
  	  margin: 20px;
  	  font-size: 15pt;
  	  box-shadow: 3px 3px 5px 3px #0e5861;
  	}
  	.image_l {
  	  width: 400px;
  	  border-left: 8px solid #0e5861;
  	  border-top-left-radius: 35px;
  	  transition: 0.5s;
  	  cursor: pointer;
  	}
  	.image_l:hover {
  	  width: 450px;
  	  border-left: 8px solid #0e5861;
  	  border-top-left-radius: 25%;
  	}
  	.item_l {
  	  padding: 3px;
  	}
    .id_l {
      background-color: #0e5861;
      color: white;
      border-radius: 10px;
      padding: 10px;
      display: none;
    }
  </style>
</head>
<body>
  <?php require("nav.php"); ?>
  <?php 
      require_once __DIR__."/function/connectMySQL/connect_to_db.php";
      global $mysqli;
      connectDB();
      $leader = $mysqli->query("SELECT * FROM `leadership`");
      while(($row_leader = $leader->fetch_assoc()) != false ){ $data_leader[] = $row_leader; }
      foreach($data_leader as $key_leader=>$value_leader){
        foreach($value_leader as $keyDataLeader => $valueDataLeader) { $currentDataLeader[] = $valueDataLeader; }
      }
  ?> 
  <div class="leadership"> Керівництво </div>
  <?php
    for($i = 0; $i < count($currentDataLeader); $i++){
	  if( ($i % 7) == 0){
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