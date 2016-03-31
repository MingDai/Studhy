<?php
include($_SERVER['DOCUMENT_ROOT']."/php/db.php");
	if (!isset($_POST['subject']) || 
		!isset($_POST['topic']) || 
		!isset($_POST['question']) || 
		!isset($_POST['a']) || 
		!isset($_POST['b']) ||
		!isset($_POST['c']) ||
		!isset($_POST['d']) || 
		!isset($_POST['e']) || 
		!isset($_POST['correctAnswer']) ||
		!isset($_POST['difficulty']) || 
		($_POST['subject'] == "" )||  
		($_POST['topic'] == "" )|| 
		($_POST['question'] == "" )|| 
		($_POST['a'] == "" )|| 
		($_POST['b'] == "" )|| 
		($_POST['c'] == "" )|| 
		($_POST['d'] == "" )||  
		($_POST['e'] == "" )|| 
		($_POST['correctAnswer'] == "" )|| 
		($_POST['difficulty'] == ""))
	
	{
			header("location:/upload");
	}else
	 {

	$subject = $_POST['subject'];
	$topic = $_POST['topic'];
	$question = $_POST['question'];
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$e = $_POST['e'];
	$answer =  $_POST['correctAnswer'];
	$difficulty = $_POST['difficulty'];
	$udVote = 0;
	$numPplAns= 0;

		$subject = mysql_real_escape_string(stripslashes($subject));
		$topic = mysql_real_escape_string(stripslashes($topic));
		$question = mysql_real_escape_string(stripslashes($question));
		$a = mysql_real_escape_string(stripslashes($a));
		$b = mysql_real_escape_string(stripslashes($b));
		$c = mysql_real_escape_string(stripslashes($c));
		$d = mysql_real_escape_string(stripslashes($d));
		$e = mysql_real_escape_string(stripslashes($e));
		$answer = mysql_real_escape_string(stripslashes($answer));
		$difficulty = mysql_real_escape_string(stripslashes($difficulty));
		// $udvote = mysql_real_escape_string(stripslashes($udvote));

			$sql="INSERT INTO $table(subject, topic, question, a, b, c, d, e, answer, difficulty, udvote, numPplAns)
			VALUES
			('$subject','$topic','$question','$a','$b','$c','$d','$e','$answer','$difficulty','$udVote', '#numPplAns')";
			mysql_query($sql);
			
		}
?>

<html>
<head>
	<title> Submitted</title>
	<link rel="stylesheet" href="/css/all.css" type="text/css" />
	<link rel="stylesheet" href="/css/sub.css" type="text/css" />
</head>
	<body>
		<p> <a href = "/upload"> Submit another problem </a> </p>
		<p> <a href = "/"> Return to home page </a> </p>
	</body>

</html>