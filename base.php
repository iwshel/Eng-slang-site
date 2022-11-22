<link rel="stylesheet" type="text/css" href="style2.css">
<ul class="menu-main">
        <li><a href="index.html" class="current">Словарь</a></li> 
        <li><a href="cont2.html" class="">Контакты</a></li>
      </ul>
      
<?php
  $phrase = filter_var(trim($_POST['phrase']), FILTER_SANITIZE_STRING);


  $mysql=new mysqli('localhost:3307', 'root', 'root', 'phrase-bd');
  $result=$mysql->query("SELECT * FROM `phrases` WHERE `phrase`='$phrase'"); 
  $mass = $result->fetch_assoc();
  if(count($mass)==0) {
    echo '<h1>Такое выражение не найдено</h1>';
    echo '<a href="javascript: history.back ()" class="naz">&#8249; Вернуться к поиску</a>';
    exit();
  }?> <br>
