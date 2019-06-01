<html>
<head>
<title>PIZDEC</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <div class='main'>
<?php
echo "hui\n";
require_once __DIR__."/function/connectMySQL/connect_to_db.php";

global $mysqli;
connectDB();

//  <= connect to DB


echo "<br><br>";


$answer = $mysqli->query("SELECT * FROM `chyvaki`");
while(($row = $answer->fetch_assoc()) != false ){
  $data[] = $row;
}
foreach($data as $key=>$value){
  //echo $value;
  foreach($value as $keyData => $valueData){
  	if($keyData != 'id' && $valueData != ''){
  	  // if($keyData == 'src') {
  	  // 	echo "<img src='$valueData'>";
  	  // }
  	  echo "$valueData ";
  	}

  }
  echo ", ";
}        
?>
  </div>
</body>
<script type="text/javascript">
  console.log("Hello");
</script>
</html>