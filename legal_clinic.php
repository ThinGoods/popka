<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/legal_clinic.css">
	<title> Юридична клініка </title>
</head>
<body>
	<?php require("nav.php"); ?>
 <div class="everything">
	<div class="headerok">
	Юридична клініка «Правова допомога» 
	</div>

	<div class="p"> 
		Сучасне життя ставить перед випускниками юридичних ВНЗ вимогу: «Не лише знай, але і вмій». Для юридичної освіти це завжди актуально. Особливо це актуально нині, в умовах забезпечення нормотворчої, правоохоронної і правозастосовчої діяльності, необхідності гарантувати реалізацію прав і інтересів фізичних та юридичних осіб. 
	</div>

	<div class="p"> 
		Реалізуючі рекомендації Всеукраїнської міжвідомчої координаційно-методичної ради з правової освіти населення, та з метою створення належних умов для набуття громадянами необхідного обсягу правових знань та навичок у їх застосуванні, надання безоплатної правової допомоги особам, які потребують соціального захисту та підтримки, а також отримання студентами старших курсів юридичних спеціальностей практичних навичок юриста Міністерство освіти і науки України видало наказ N 592 від 03.08.2006<a href="documents/legal_clinic/Nakaz.doc">«Про затвердження Типового положення про юридичну клініку вищого навчального закладу України».</a>		
	</div>

	<div class="p">
		Юридична клініка «Правова допомога» заснована у травні 2005 року на базі Сумської обласної громадської організації «Правова допомога» та Сумської філії Харківського національного університету внутрішніх справ, для надання безоплатної правової допомоги малозабезпеченим верствам населення та правопросвітницької роботи. Підстави:  Наказ Міністерства освіти і науки України № 592 від 3.08.2006 року <a href="documents/legal_clinic/Nakaz.doc">«Про затвердження типового положення про юридичну клініку вищого навчального закладу України»,</a> <a href="documents/legal_clinic/Statut_SOGO.doc">Статут СОГО «Правова допомога».</a>
	</div>

	<div class="headerok">Мета та завдання юридичної клініки:</div>

	<div class="p">
		Метою діяльності юридичної клініки є забезпечення практичної підготовки студентів юридичних вищих навчальних закладів та факультетів до професійної діяльності, сприяння розумінню ними соціальної ваги юридичної професії та вирішенню соціальних проблем. Завданням юридичної клініки є:
	</div>

	<div class="cont_li">		
		<li>забезпечення навчального процесу, спрямованого на оволодіння студентами практичними аспектами юридичної професії;</li>
		<li>надання безоплатної юридичної допомоги соціально незахищеним верствам населення та неприбутковим організаціям;</li>
		<li>проведення правопросвітницької роботи.</li>
	</div>


	<div class="headerok">
	Принципи та методи діяльності юридичних клінік в Україні
	</div>
	
	<div class="head_li">Юридична клініка діє на принципах:</div>

	<div class="cont_li">		
		<li>законності;</li>
		<li>об’єктивності;</li>
		<li>безвідплатності надання правової допомоги;</li>
		<li>повного інформування клієнта про правила роботи юридичної клініки;</li>
		<li>конфіденційності;</li>
		<li>компетентності та добросовісності.</li>		
	</div>

	<div class="head_li">Методами діяльності юридичних клінік є:</div>

	<div class="cont_li">		
		<li>застосування інтерактивних методик;</li>
		<li>безпосередня участь студентів у реальній юридичній практиці під керівництвом викладів або(та) фахівців практиків.</li>
	</div>





  <?php require_once __DIR__."/function/connectMySQL/connect_to_db.php";
	  global $mysqli;
	  connectDB();
	  $answer = $mysqli->query("SELECT * FROM `legal_clinic`");
	  while(($row = $answer->fetch_assoc()) != false ){ $data[] = $row; }
     	foreach($data as $key=>$value){
     		foreach($value as $keyData => $valueData) { $currentData[] = $valueData; }
	    }     

	for($i = 0; $i < count($currentData); $i++){
	  if( ($i % 4) == 0){	  	
	  	$title_image = "<img class='images' src='".$currentData[$i+3]."'>";
	  	?>

	  	  <div class='headerok'><?php echo $currentData[$i+1]; ?></div> 
<!--  майн -->
		<?php
            $images = "<div class='p'>'".$currentData[$i+2]."'</div>";
            for($key = 0; $key < substr_count($images, '$'); $key++){
              $empty = '';
              $empty .= explode('$', $currentData[$i+2])[$key].'<br>';
              echo "<div class='p'>".$empty."</div>";
            }
        ?>  
	  	  <?php echo $title_image; ?>	  	
	  	<?php
	  }
	}
  ?>

	<div class="p">Безпосередню роботу з громадянами проводять 15 студентів-консультантів юридичної клініки. </div>

	<img src="img/legal_clinic/studentu.jpg" class="images">
	
	<div class="headerok_sleva">Основні види діяльності юридичної клініки:</div>
		<div class="cont_li">
			<li>консультаційні послуги;</li>
			<li>інформаційні послуги;</li>
			<li>складання процесуальних документів.</li>
		</div>

	<div class="headerok_sleva">Студенти-консультанти надають допомогу з таких питань:

		<div class="cont_li">
			<li>оформлення документів для одержання субсидій;</li>
			<li>роз’яснення порядку ліквідації та реорганізації підприємств;</li>
			<li>поділ спадщини;</li>
			<li>розірвання шлюбу та поділ майна;</li>
			<li>стягнення аліментів;</li>
			<li>відновлення втраченого паспорта громадянина України;</li>
			<li>порядок відновлення соціальних пільг;</li>
			<li>встановлення факту батьківства;</li>
			<li>поновлення дієздатності фізичної особи;</li>
			<li>консультації з питань приватизації;</li>
			<li>реєстрація громадської організації тощо.</li>
		</div>
	</div>

	<img src="img/legal_clinic/students_1.jpg" class="images">

	<div class="p">Протягом навчання в юридичній клініці студенти відвідують школи юридичної клінічної освіти, семінари, тренінги, конференції, беруть участь в олімпіадах та конкурсах.</div>

	<img src="img/legal_clinic/students_2.jpg" class="images">

	<div class="p">
		Крім поточної роботи з клієнтами студенти-консультанти займаються правопросвітницькою діяльністю в рамках існуючих клінічних програм. Надалі планується брати активну участь в роботі Асоціації юридичних клінік України та Фундації юридичних клінік України, співпрацювати з Міжнародними фондами, посольствами та іншими громадськими організаціями.
	</div>

	<div class="p">
		Продовжувати співпрацю юридичної клініки з Головним територіальним управлінням юстиції у Сумській області, Сумським міським кризовим центром, Сумським Центром реінтеграції бездомних громадян, із Сумським міським центром соціальних служб для сім’ї, дітей та молоді, Регіональним центром з надання безоплатної вторинної правової допомоги, Сумським місцевим центром з надання БВПД.
	</div>

	<img src="img/legal_clinic/students_3.jpg" class="images">

	<div class="p">
		У 2006 році СОГО «Правова допомога» закінчено проект № 2505351 за підтримки МФ „Відродження” – „Розробка та вдосконалення навчально-методичної бази, спецкурсу для юридичної клініки”. Розроблено та видано навчальний посібник „Особливості роботи з клієнтом, який потребує допомоги у кримінальній справі, в юридичній клініці” та методичні рекомендації для викладачів та консультантів юридичних клінік з такою ж назвою.
	</div>
	<div class="p">
		Протягом 2006-2007 років співробітники СОГО „Правова допомога” та юридичної клініки працювали в проекті № SUP30006GR262 „Удосконалення комплексу правових заходів, спрямованих на ресоціалізацію осіб, засуджених до обмеження або позбавлення волі. Проведення семінарів для персоналу установ виконання покарань Сумської області”, за підтримки Фонду сприяння демократії Посольства США в Україні. Розроблено та видано пам’ятку для засуджених до обмеження або позбавлення волі, у якій висвітлені правові питання, що найчастіше виникають в осіб, які відбувають покарання.
	</div>
	<div class="p">
		Протягом 2008-2009 років співробітники СОГО „Правова допомога” та юридичної клініки працювали в проекті №SUP30008GR048 „Гуманізація системи виконання покарань шляхом введення інституту пробації на прикладі Сумської області” за підтримки Фонду сприяння демократії Посольства США в Україні. Розроблено та видано методичний посібник для співробітників системи виконання покарання „Пробація – розвиток в Україні”.
	</div>

	<div class="headerok">
		УМОВИ НАДАННЯ ПРАВОВОЇ ДОПОМОГИ
	</div>

	<div class="p">
		Правова допомога надається студентами юридичного факультету, що не є професійними юристами. Правова допомога надається у приміщенні юридичної клініки, що знаходиться за адресою: <a href="https://goo.gl/maps/D1CkczDr4kQaFtuw7">м. Суми, вул.  Миру, буд. 24</a>
	</div>

	<div class="p">
		Допомога, що надається працівниками цієї юридичної клініки, є безоплатною. Виняток можуть становити витрати на оформлення представництва в суді та витрати на ксерокопіювання, друк документів справи. Усі перелічені витрати попередньо обговорюються з клієнтом.
	</div>

	<div class="p">
		Ідентифікаційні дані клієнта (ім'я, адреса тощо) є конфіденційними і не підлягають розголошенню чи розповсюдженню. Матеріали справи можуть бути використані в навчальному процесі.
	</div>

	<div class="p">
		У разі непередбачених обставин (хвороба, терміновий від'їзд, припинення роботи у юридичній клініці тощо) справа клієнта може бути передана іншому консультантові, про що клієнт повідомляється у найближчий термін.Консультант має право відмовити клієнту у наданні правової допомоги або за своєю ініціативою закрити справу:
	</div>

	<div class="cont_li">
		<li>у разі непогодження клієнта з умовами надання правової допомоги чи відмовою підписати угоду про надання правової допомоги;</li>
		<li>у разі подання завідомо неправдивих даних під час проведення консультації;</li>
		<li>у випадку непристойної, нахабної чи образливої поведінки у приміщенні юридичної клініки чи за її межами під час виконання консультантом своїх обов'язків як члена юридичної клініки;</li>
		<li>у разі, коли неможливо зв'язатися з клієнтом протягом більше як 2 місяців.</li>
		<li>клієнт спроможний звернутися за наданням платної правової допомоги;</li>
		<li>у клієнта уже є представник;</li>
		<li>клієнт  не   виконує   взятих   зобов’язань  згідно   угодою   про   надання   правової допомоги, або грубо чи не тактовно поводить себе з учасниками юридичної клініки;</li>
		<li>клієнт перебуває  в  стані  алкогольного  чи  наркотичного  сп’яніння,  або  має хворобу, що ставить під загрозу безпеку та здоров’я учасників юридичної клініки;</li>
		<li>результат якого  бажає  клієнт,  або  засоби  його  досягнення,   на  яких   клієнт наполягає, є протиправними.</li>
	</div>
	
	<div class="p">
	У випадку незадоволення консультаціями, отриманими в цій юридичній клініці, клієнт може звернутися до професійних юристів, не висуваючи жодних претензій до студентів-правників, якими було надано консультації.
	</div>

	<div class="docs_footer">
		<a href="documents/legal_clinic/Nakaz.doc">Наказ N 592 від 03.08.2006 «Про затвердження Типового положення про юридичну клініку вищого навчального закладу України»</a>
		<a href="documents/legal_clinic/Polozhennya.doc">Положення про юридичну клініку</a>
		<a href="documents/legal_clinic/Standarty.doc">Стандарти юридичних клінік України</a>
		<a href="documents/legal_clinic/Statut_SOGO.doc">Статут СОГО «Правова допомога»</a>
	</div>
 </div>
 </body>
</html>