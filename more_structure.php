<!DOCTYPE html>
<html>
<head>
	<title> Новини </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
	<style>
  	.container {
  	  width: 85%;
  	  margin: 0 auto;
	  display: flex;
	  flex-direction: row;
  	}
    .images {
      width: 500px;
    }
    .nav {
      width: 40%;
    }
    .right_content {
	  width: 60%;
    }
    .a {
    	color: black;
    	padding: 5px;
    }
    .a_list {
    	display: flex;
    	flex-direction: column;
    	justify-content: center;
    	align-items: center;
    }
  </style>
</head>
<body>

  <?php require("nav.php"); ?>
  <?php require("nav_structure.php"); ?>
  
  <?php 
	  require_once "function/connectMySQL/connect_to_db.php";
	  global $mysqli;
	  connectDB();
if($_GET['type'] == '1'){
  echo "<div>Відділ навчально-методичної роботи</div>";
  $leader = $mysqli->query("SELECT * FROM `leadership` where `id` = '2'");
      while(($row_leader = $leader->fetch_assoc()) != false ){ $data_leader[] = $row_leader; }
      foreach($data_leader as $key_leader=>$value_leader){
        foreach($value_leader as $keyDataLeader => $valueDataLeader) { $currentDataLeader[] = $valueDataLeader; }
      }
  ?> 
  <?php
    for($i = 0; $i < count($currentDataLeader); $i++){
	  if( ($i % 7) == 0){
	  	echo "
	  	  <div class='leader_l'>
	  	  	<img class='image_l' src= ".$currentDataLeader[$i+6].">
	  	  	<div class='description'>
	  	      <div class='position_l item_l'>".$currentDataLeader[$i+5]."</div>
				    <div class='name_l item_l'>".$currentDataLeader[$i+1]."</div>
	  	  		
	  	  </div><
	  	  ";
	    }
	  }  
}
else if($_GET['type'] == '2'){
  
}
else if($_GET['type'] == '3'){
  
}
else if($_GET['type'] == '4'){
  
}
else if($_GET['type'] == '5'){
  
}
else if($_GET['type'] == '6'){
  
}
else if($_GET['type'] == '7'){
  
}
else if($_GET['type'] == '8'){
  
}
else if($_GET['type'] == '9'){
  
}
else if($_GET['type'] == '10'){
  
}
else if($_GET['type'] == '11'){
  
}
else if($_GET['type'] == '12'){
  
}
else {
  echo "404 Custom Error";
}


  ?>

</body>
</html>
