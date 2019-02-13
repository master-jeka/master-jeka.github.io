<?php
session_start();

$answers1 = $_POST['answer1'];
$_SESSION['answer1'] = $answers1;

  ?>


<meta charset="utf-8">
<h2 align="center">
<p>  Вопрос второй: </p></h2>
<h3 style="text-align: center;"> <p> Что пить будешь, друг? </p></br></h3>

<form action="page3.php" method="post" style="display: flex; flex-direction: column; align-items: center;"> 
	<label>
		<input type="radio" name="answer2" value="1" required="required">		
		Да сколько влезет, я бы и водку пил, если кто со мной будет!
	</label><br>
	<label>
		<input type="radio" name="answer2" value="2" required="required">		
		Как всегда, литру-вторую светлого нефильтрованного :)
	</label><br>
	<label>
		<input type="radio" name="answer2" value="3" required="required">		
		Я не хочу напиватся, максимум бутылочку, что бы пацанов уважить.
	</label><br>
	<label>
		<input type="radio" name="answer2" value="4" required="required">		
		Не употребляю! И вам не советую, только здоровье портите..
	</label>
	<br>
	<input type="submit" value="Send Yopta">
</form>
</form>
