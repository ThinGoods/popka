<!DOCTYPE html>
<html>
<head>
  <title> Питання та відповіді </title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/Q_A.css">
  <style type="text/css">
  	.container_Q_A {
  	  margin: 0 auto;
  	  width: 70%;
  	}
    .putannya_vidtovidi {
      font-size: 20pt;
      margin: 10px;
    }
    .Q_A {
      color: black;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      font-size: 14pt;
    }
  	.container_faq {
	  
  	}
  	.head {
      padding: 10px;
  	}
  	.question {
      border-left: 7px solid #0e5861;
      border-right: 7px solid #0e5861;
      border-radius: 15px;
      padding: 10px;
      margin: 10px;
      background-color: #ccffcc;
  	}
  	.title_question {
      padding-left: 15px;
      padding-right: 15px;
      padding-top: 5px;
      padding-bottom: 5px;
      margin: 10px;
  	}
  	.list_of_answers {
	  padding: 5px;
  	}
  	.list_of_answers > li {
  	  margin-left: 25px; 
  	  padding: 5px;
  	}
  	.answer {
      margin-left: 25px; 
  	  padding: 5px;
  	}
  </style>
</head>
<body>
  <?php require("nav.php"); ?>
  <?php   
      require_once __DIR__."/function/connectMySQL/connect_to_db.php";
      global $mysqli;
      connectDB();
      $faq = $mysqli->query("SELECT `id`,`answer`, `question` FROM `faq`");  
      $faqs = $mysqli->query("SELECT `head`, `title`,`question_main`,`answer_main` FROM `faq` LIMIT 1");
      while(($row_faqs = $faqs->fetch_assoc()) != false ){
        $faqs_data[] = $row_faqs;
      }
      foreach($faqs_data as $key_faqs=>$value_faqs){
        foreach($value_faqs as $keyDataFaqs => $valueDataFaqs) { 
          $currentDataFaqs[] = $valueDataFaqs;
        }
      }
      while(($row_faq = $faq->fetch_assoc()) != false ){
        $faq_data[] = $row_faq;
      }
      foreach($faq_data as $key_faq=>$value_faq){
        foreach($value_faq as $keyDataFaq => $valueDataFaq) { 
          $currentDataFaq[] = $valueDataFaq;
        }
      }
     ?> 
  <div class="container_Q_A">
  <div class="Q_A"> 
  	<div class="putannya_vidtovidi">Шановні абітурієнти!</div>
      <?php 
      for($i = 0; $i < count($currentDataFaqs); $i++){
	    if( ($i % 4) == 0){
	      $answers = $currentDataFaqs[$i+3];
	  	  ?>
	  	  <div class='container_faq'>
	  	  	<div class='head'> <?php echo $currentDataFaqs[$i] ?></div>
	  	  	<div class='question'><?php echo $currentDataFaqs[$i+2] ?></div>
	  	  	<div class='title_question'><?php echo $currentDataFaqs[$i+1] ?></div>
	  	  	<div class='list_of_answers'>
	  	  	  <?php for($key = 0; $key < substr_count($answers, '$'); $key++){
	  	 	  	  echo "<li>".explode('$', $answers)[$key];
	  	  	    } ?>
	  	  	</div>
	  	  	<?php 
	  	  	  for($a = 0; $a < count($currentDataFaq); $a++){
	  	  	  	if( ($a % 3) == 0){
	  	  	  	  echo "<div class='question'>".$currentDataFaq[$a+2]."</div>
	  	  	  	  <div class='answer'>".$currentDataFaq[$a+1]."</div>";
	  	  	    }
	  	  	  }
	  	  	?>
	  	  </div>
	  	 <?php
	    }
	  }
      ?>
  </div>
</div>
<?php require("footer.php"); ?>
</body>
</html>