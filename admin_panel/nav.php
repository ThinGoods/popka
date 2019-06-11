<style>
  a {
    text-decoration: none;
  }
  .icona {
    width: 65px;
    height: 78px;
    margin-right: 15px;
  }
  .top {
  	display: flex;
  	align-items: center;
  	justify-content: center;
  	height: 100px;
  	background-color: #353535;
  	color: white;
}
  .top_text {
  	font-size: 25pt;
  	font-family: 'Arial';
}
.nav {
	display: flex;
    flex-direction: row;
    justify-content: space-between;
    flex-wrap: wrap;
    background: darkred;
    color: white;
    padding-left: 15%;
    padding-right: 15%;
    font-weight: bold;
    box-shadow: 0px 0px 3px black;
}
.submenu_item {
  padding: 10px;
  color: white;
  transition: 0.3s;
}
.submenu_item:hover {
  background-color: #353535;
  color: lightgrey;
}
</style>
<div class="top">
  <img src="../img/bigicon/icona.png" alt="Лого" class="icona">
  <div class="top_text">Административная панель СФХНУВС</div>	
</div>
  <div class="nav">
    <a href="news_admin.php"><div class="submenu_item">Новости</div></a>
    <a href="leadership_admin.php"><div class="submenu_item">Руководство</div></a>
    <a href="settings_admin.php"><div class="submenu_item">Основные параметры</div></a>
    <a href="international_activity.php"><div class="submenu_item">Міжнародна діяльність</div></a>
  </div>