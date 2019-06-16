<?php
$mysqli = false;
function connectDB()
{
    global $mysqli;
    $mysqli = new mysqli('localhost', 'root', '', 'diplom');
    if($mysqli->connect_errno)
    {   echo "Connection DataBase error : ".$mysqli->connect_error."\r\n";
        exit;
    }

    else { mysqli_set_charset($mysqli, "utf8");
           // echo "\npizda\n\n";
           return 1;
    }
}
function closeDB()
{
    global $mysqli;
    $mysqli->close();
}
function ecrypt($str){
  $key = "very_safety_key_in_my_function";
  for($i=0; $i<strlen($str); $i++) {
     $char = substr($str, $i, 1);
     $keychar = substr($key, ($i % strlen($key))-1, 1);
     $char = chr(ord($char)+ord($keychar));
     $result.=$char;
  }
  return urlencode(base64_encode($result));
}


function decrypt($str){
  $str = base64_decode(urldecode($str));
  $result = '';
  $key = "very_safety_key_in_my_function";
  for($i=0; $i<strlen($str); $i++) {
    $char = substr($str, $i, 1);
    $keychar = substr($key, ($i % strlen($key))-1, 1);
    $char = chr(ord($char)-ord($keychar));
    $result.=$char;
  }
return $result;
}
?>
