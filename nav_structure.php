 <?php require_once "function/connectMySQL/connect_to_db.php";
	  global $mysqli;
	  connectDB();
	  $answerr = $mysqli->query("SELECT `id`, `description` FROM `branch_structure`");
	  while(($roww = $answerr->fetch_assoc()) != false ){ $dataa[] = $roww; }
     	foreach($dataa as $keyy=>$valuee){
     		foreach($valuee as $keyyData => $valueeData) { $currenttData[] = $valueeData; }
	    }
  ?>
<div class="nav">
  <div class="nav_title"></div>
  <div class="a_list">
  <?php 
  for($ii = 0; $ii < count($currenttData); $ii++){
	  if( ($ii % 2) == 0){
	  	echo "<a class='a' href='more_structure.php?more_structure&type=".$currenttData[$ii]."'>".$currenttData[$ii+1]."</a>";  
	  }
	}
  ?>
  </div>
</div>