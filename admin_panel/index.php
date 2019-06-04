<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>
</head>
<body>
  <a href="news_admin.php"><div>News</div></a>
  <?php require_once "../function/connectMySQL/connect_to_db.php"; 
    global $mysqli; connectDB(); 
  ?>
</body>
</html>