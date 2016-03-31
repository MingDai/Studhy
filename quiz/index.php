<?php
	session_start();
	include($_SERVER['DOCUMENT_ROOT']."/php/db.php");
	if (!isset($_GET['cat'])) {
		header("location:/");
	}
	$cat = $_GET['cat'];
	$useAll = 0;
	$topic = "";
	if (!isset($_GET['topic'])) {
		$useAll = 1;
	} else if ($_GET['topic'] == "") {
		$useAll = 1;
	} else {
		$topic = $_GET['topic'];
	}

	$sql = "";
	if ($useAll == 0) {
		$sql = "SELECT id FROM $table WHERE subject='$cat' AND topic='$topic'";
	} else {
		$sql = "SELECT id FROM $table WHERE subject='$cat'";
	}
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);
	if ($count == 0) {
		header("location:/");
	}
	$boolOldQs = 1;//FALSE
	if(!isset($_SESSION['oldQs'])){
		$_SESSION['oldQs'] = array();
	}
	if(sizeof($_SESSION['oldQs'])== $count)//finished all questions of topic
			{
				header("location:finished.php");//troll thank you page with session_destroy();
			}else{
	do {
		$randnum = rand(0, $count - 1);
		foreach ($_SESSION['oldQs'] as $value) //if empty array it will go straight through the foreach loop right????
		{
			if($randnum==$value)
			{
				$boolOldQs=0;//gotta generate another number
				break;
			}else{ $boolOldQs=1;}	

		}
	} while ($boolOldQs==0);
	array_push($_SESSION['oldQs'],$randnum);//should not include repeated numbers

	mysql_data_seek($result, $randnum);
	$row = mysql_fetch_array($result);
 	$key = $row['id'];
	$sql = "SELECT * FROM $table WHERE id='$key'";
	$result = mysql_query("$sql");
	$row = mysql_fetch_array($result);
}
?>

<html>
	<head>
		<title>Quiz</title>
		<link rel="stylesheet" href="/css/quiz.css" type="text/css" />
		<link rel="stylesheet" href="/css/all.css" type="text/css" />
	</head>
	<body>
		<?php include_once($_SERVER['DOCUMENT_ROOT']."/php/analyticstracking.php") ?>
		<div class="container">
			<table>
				<tr>
					<td>
						<h1><a href ="/" style="text-decoration: none"><span id="stud">stud</span><span id="hy">hy</span> </a></h1>
					</td>
				</tr>
				<tr>
					<td>
						<?php printf('<h2>%s</h2>', $cat); ?>
					</td>
				</tr>
				<tr>
					<td class="question-info">
						
					</td>
				</tr>
				<tr>
					<td>
						<form name="answers" method="post" action="check.php">
							<?php
								$submit = "";
								switch (rand(0, 3)) {
									case 0:
										$submit = "Submit";
										break;
									case 1:
										$submit = "OK";
										break;
									case 2:
										$submit = "Lock in my answer";
										break;
									case 3:
										$submit = "Check answer";
										break;
									default:
										$submit = "Submit";
										break;
								}


								printf('
									<input type="hidden" name="id" value="%s">
									<input type="hidden" name="cat" value="%s">
									<input type="hidden" name="topic" value="%s">

									<div>
										%s
									</div>
									<div class="container">
										<table class="quiz">
											<tr>
												<td>
													<input type="radio" name="userans" value="a">
												</td>
												<td>
													a) %s
												</td>
											</tr>
											<tr>
												<td>
													<input type="radio" name="userans" value="b">
												</td>
												<td>
													b) %s
												</td>
											</tr>
											<tr>
												<td>
													<input type="radio" name="userans" value="c">
												</td>
												<td>
													c) %s
												</td>
											</tr>
											<tr>
												<td>
													<input type="radio" name="userans" value="d">
												</td>
												<td>
													d) %s
												</td>
											</tr>
											<tr>
												<td>
													<input type="radio" name="userans" value="e">
												</td>
												<td>
													e) %s
												</td>
											</tr>
										</table>
									</div>
									<div>
										<input type="submit" value="%s">
									</div>
									',
									$key,
									$cat,
									$topic,
									$row['question'],
									$row['a'],
									$row['b'],
									$row['c'],
									$row['d'],
									$row['e'],
									$submit);
							?>
						</form>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>