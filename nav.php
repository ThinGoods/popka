<div class="top">
  <img src="img/bigicon/icona.png" alt="Лого" class="icona">
  <div class="top_text">
  	Сумська філія Харківського національного університету внутрішніх справ
  </div>	
</div>

<div class="parent">
 <a href="index.php"> <div class="menu_item">Головна</div></a>

    <div class="menu_item" id="list-1" data-show = "false"> Про філію
     <div class="hide_menu"> 								  
                                    <a href="#"><div class="submenu_item">Історична довідка</div></a>
                                    <a href="#"><div class="submenu_item">Керівництво</div></a>
                                    <a href="#"><div class="submenu_item">Вчена рада</div></a>
                                    <a href="#"><div class="submenu_item">Контакти</div></a>
                                    <a href="#"><div class="submenu_item">Державні закупівлі</div></a> 
     </div>

    </div>

 <div class="menu_item"> <a href="#"> Структура філії </a></div>
 <div class="menu_item"> <a href="#"> Міжнародна діяльність </a></div>
 <div class="menu_item" id="list-2" data-show = "false"> Абітурієнту
    	<div class="hide_menu"> 
                                     <a href="#"><div class="submenu_item">Загальна інформація</div></a>
                                     <a href="#"><div class="submenu_item">Умови вступу</div></a>
                                     <a href="#"><div class="submenu_item">Підготовчі курси</div></a>
                                     <a href="#"><div class="submenu_item">Питання - відповіді</div></a>
        </div>
    </div>
 <div class="menu_item"> <a href="#"> Наука </a></div>

    <div class="menu_item" id="list-3" data-show = "false"> Студентське життя
    	<div class="hide_menu">
                                     <a href="#"><div class="submenu_item">ELSA</div></a>
                                     <a href="#"><div class="submenu_item">Спорт</div></a>
                                     <a href="#"><div class="submenu_item">Юридична клініка</div></a>
                                     <a href="#"><div class="submenu_item">Студентський парламент</div></a>
        </div>
    </div>

  <div class="menu_item"><a href="#"> Запобігання корупції </a></div>
</div>
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