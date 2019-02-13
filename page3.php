<?php
	session_start();

	$answers2 = $_POST['answer2'];
	$_SESSION['answer2'] = $answers2;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Тест на пацана</title>
</head>
<body>
	<h2 align="center">
	<p>  И последний вопрос: </p></h2>
	<h3 style="text-align: center;"><p> Как часто планируешь проведение данного мероприятия? </p></br></h3>
	    <form action="result.php" method="post" style="display: flex; flex-direction: column; align-items: center;">
	    <label>
			<input type="radio" name="answer3" value="1" required="required">		
			На регулярной основе, главное чтобы деньги были)0))
		</label><br>
		<label>
			<input type="radio" name="answer3" value="2" required="required">		
			Не знаю, иногда можно сходить...
		</label>
		<br>
			<input type="submit" value="Send Yopta">
	</form>
</body>
</html>