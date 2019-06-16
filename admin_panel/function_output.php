<?php 
require_once "../function/connectMySQL/connect_to_db.php";
connectDB();

function output($table, $count){
  if($table === 'faq') {
    global $mysqli;
    $answer = $mysqli->query("SELECT `question`, `answer` FROM $table");
    while(($row = $answer->fetch_assoc()) != false ){ $data[] = $row; }
    foreach($data as $key=>$value){
      foreach($value as $keyData => $valueData) { $currentData[] = $valueData; }
    }
    //var_dump($currentData);
    echo "<table>";
    for($i = 0; $i < count($currentData); $i++){
        if( ($i % $count) == 0){
          echo "<tr>";
          $a1 = $currentData[$i];
          $temp = [];
          for($t = 0; $t < $count; $t++){
            global $temp;
            $temp[$t] = $a1[$t];
            echo $a1[$t];
          }
          for($k = $i; $k < $count; $k++){
            echo "<td>".$currentData[$k]."</td>";
          }
        echo "</tr>";
      }
    } 
    echo "</table>";
  }
  
}
?>