<?php
session_start();

$answers1 = $_SESSION['answer1'];
$answers2 = $_SESSION['answer2'];
$answers3 = $_POST['answer3'];  

if (($answers1==1) && ($answers2==1) && ($answers3==1)){
  	echo '<h2 align="center">Твои ответы показали что ты красавчик, и идешь по правильному жизненному пути! :)</h2>';
}elseif (($answers1==3) && ($answers2==4) && ($answers3==2)) {
  	echo '<h2 align="center">Ты знаешь, бро, дела так не делаются! Исправляйся!</h2>';

}else {
	echo '<h2 align="center">Дружище, можно было бы и лучше, я думаю в бане с тобой проведем исправительную беседу :)</h2>';
}  	

  	
    ?>
    <a href="/">Проийти еще раз</a>
<meta charset="utf-8">