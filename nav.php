<div class="top">
  <img src="img/bigicon/icona.png" alt="Лого" class="icona">
  <div class="top_text">
  	<?php 
      require_once __DIR__."/function/connectMySQL/connect_to_db.php";
      global $mysqli;
      connectDB();
      $title = $mysqli->query("SELECT `title` FROM `settings`");
      while(($row_title = $title->fetch_assoc()) != false ){ $data_title[] = $row_title; }
      foreach($data_title as $key_title=>$value_title){
        foreach($value_title as $keyDataTitle => $valueDataTitle) { $currentDataTitle[] = $valueDataTitle; }
      }   
      echo $valueDataTitle;  
    ?> 
  </div>	
</div>

<div class="parent">
  <a href="index.php"> <div class="menu_item">Головна</div></a>
    <div class="menu_item" id="list-1" data-show = "false"> Про філію
      <div class="hide_menu"> 								  
        <a href="history_dovidka.php"><div class="submenu_item">Історична довідка</div></a>
        <a href="kerivnuctvo.php"><div class="submenu_item">Керівництво</div></a>
        <a href="vchena_rada.php"><div class="submenu_item">Вчена рада</div></a>
        <a href="derzh_zakypki.php"><div class="submenu_item">Державні закупівлі</div></a> 
      </div>
    </div>
  <div class="menu_item"> <a href="struktura_filii.php"> Структура філії </a></div>
  <div class="menu_item"> <a href="international_activity.php"> Міжнародна діяльність </a></div>
  <div class="menu_item" id="list-2" data-show = "false"> Абітурієнту
    <div class="hide_menu"> 
      <a href="general_info.php"><div class="submenu_item">Загальна інформація</div></a>
      <a href="ymovu_vstypy.php"><div class="submenu_item">Умови вступу</div></a>
      <a href="pidgotovchi_kyrsu.php"><div class="submenu_item">Підготовчі курси</div></a>
      <a href="Q_A.php"><div class="submenu_item">Питання - відповіді</div></a>
    </div>
  </div>

 <div class="menu_item"> <a href="science.php"> Наука </a></div>
    <div class="menu_item" id="list-3" data-show = "false"> Студентське життя
    	<div class="hide_menu">
        <a href="ELSA.php"><div class="submenu_item">ELSA</div></a>
        <a href="sport.php"><div class="submenu_item">Спорт</div></a>
        <a href="legal_clinic.php"><div class="submenu_item">Юридична клініка</div></a>
        <a href="students_parlament.php"><div class="submenu_item">Студентський парламент</div></a>
      </div>
    </div>
  <div class="menu_item"><a href="http://www.univd.edu.ua/uk/dir/1610/zapobigannya-koruptsii"> Запобігання корупції </a></div>
</div>
<style type="text/css">
     .parent {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    background: #0e5861;
    color: white;
    padding-left: 15%;
    padding-right: 15%;
    font-weight: bold;
  }
  .menu_item {
    padding: 10px;
    cursor: pointer;
    transition: 0.5s;
  }
  .menu_item:hover {
    background-color: #0e7a61;
    border-radius: 10px;
  }
  .hide_menu {
    display: none;
    position: absolute;
    background-color: #0e5861;
    margin-top: 10px;
    margin-left: -2%;
    padding: 5px;
    padding-top: 5px;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    border-top: 1px solid #0e7a61;
  }
  .submenu_item {
     padding: 7px;
     border-radius: 5px;
  }
  .submenu_item:hover {
    background-color: #0e7a61;
  }
</style>
<!-- Конец меню -->

<script type="text/javascript"> 
function hiding (submenu) {
  submenu.addEventListener("click", function (){
    if (submenu.getAttribute("data-show") == "true")  { 
      submenu.childNodes[1].style.display = 'none';
      submenu.setAttribute('data-show', 'false') 
    }
    else {
      submenu.childNodes[1].style.display = 'block';
      submenu.setAttribute('data-show', 'true');
    }
  });
 } 
hiding(document.getElementById('list-1'));
hiding(document.getElementById('list-2'));
hiding(document.getElementById('list-3'));
</script>