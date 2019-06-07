<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>
</head>
<body>
  
  <a href="news_admin.php"><div>Новости</div></a>
  <a href="leadership_admin.php"><div>Руководство</div></a>
  <a href="settings_admin.php"><div>Основные параметры</div></a>
  <a href="international_activity.php"><div>Міжнародна діяльність</div></a>
  <?php require_once "../function/connectMySQL/connect_to_db.php"; 
    global $mysqli; connectDB();
  ?>
</body>
</html>