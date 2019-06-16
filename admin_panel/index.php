<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Адмін-панель</title>
	<style type="text/css">
	a {
	  	text-decoration: none;
	  	color: black;
	  }
	body {
	  margin: 0px;
	  padding: 0px;
	  font-family: Arial;
	  transition: 0.5s;
    }
    #placeholder {
      width: 100%;
      height: 100%;
      background-color: white;
      position: fixed;
    }
	</style>
</head>
<body>
  <?php require_once "nav.php" ?>
  <div id="placeholder"></div>
  <?php require_once "../function/connectMySQL/connect_to_db.php"; 
    global $mysqli; connectDB();
  ?>
</body>
</html>