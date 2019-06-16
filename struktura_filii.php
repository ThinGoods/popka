<!DOCTYPE html>
<html>
<head>
  <title> Структура філії </title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/struktura_filii.css">
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
  <div class='container'>
  <?php require("nav_structure.php"); ?>
  <div class="right_content">
  	<div> Структура філії </div>

  <?php require_once __DIR__."/function/connectMySQL/connect_to_db.php";
	  global $mysqli;
	  connectDB();
	  $answer = $mysqli->query("SELECT * FROM `branch_structure_main`");
	  while(($row = $answer->fetch_assoc()) != false ){ $data[] = $row; }
     	foreach($data as $key=>$value){
     		foreach($value as $keyData => $valueData) { $currentData[] = $valueData; }
	    }     
	for($i = 0; $i < count($currentData); $i++){
	  if( ($i % 3) == 0){	  	
	  	?>

	  	  <div class='headerok'><?php echo $currentData[$i+1]; ?></div> 
<!--  майн -->
		<?php
            $images = $currentData[$i+2];
            for($key = 0; $key < substr_count($images, '$'); $key++){
              echo "<img class='images' src=".explode('$', $images)[$key]." alt='f'>";
            }
        ?>  
	  	  <?php echo $title_image; ?>	  	
	  	<?php
	  }
	}
  ?>
</div>
</div>
<?php require("footer.php"); ?>
</body>
</html>