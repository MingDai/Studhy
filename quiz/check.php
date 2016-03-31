<?php
	include($_SERVER['DOCUMENT_ROOT']."/php/db.php");
	if (!isset($_POST['id'])) {
		header("location:/");
	}
	$id = $_POST['id'];
	$cat = $_POST['cat'];
	$topic = $_POST['topic'];
	$leftblank = 0;
	$userans = "";
	$getsql = "SELECT * FROM $table WHERE id='$id'";
	$result = mysql_query($getsql);
	$row = mysql_fetch_array($result);
	$realans = $row['answer'];
	$anscounter = 1;
	if (!isset($_POST['userans'])) {
		$leftblank = 1;
	} else {
		$userans = $_POST['userans'];
		switch($userans)
		{
			case 'a':$sql = "UPDATE $table SET pplAnsA= (pplAnsA + 1) WHERE id='$id'"; mysql_query($sql); break;
			case 'b':$sql = "UPDATE $table SET pplAnsB= (pplAnsB +1) WHERE id='$id'"; mysql_query($sql); break;
			case 'c':$sql = "UPDATE $table SET pplAnsC= (pplAnsC + 1) WHERE id='$id'"; mysql_query($sql); break;
			case 'd':$sql = "UPDATE $table SET pplAnsD= (pplAnsD + 1) WHERE id='$id'"; mysql_query($sql); break;
			case 'e':$sql = "UPDATE $table SET pplAnsE= (pplAnsE +1) WHERE id='$id'"; mysql_query($sql); break;
		}
	}
	$wrong = 0;
	if ($realans != $userans) {
		$wrong = 1;
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Check answer</title>
		<link rel="stylesheet" href="/css/check.css" type="text/css" />
		<link rel="stylesheet" href="/css/all.css" type="text/css" />
		<link rel="stylesheet" href="/css/quiz.css" type="text/css" />
	</head>
	<body>
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
				<td>
					<?php
						$aclass = "";
						$bclass = "";
						$cclass = "";
						$dclass = "";
						$eclass = "";
						if ($leftblank == 1) {
							$aclass = "strike";
							$bclass = "strike";
							$cclass = "strike";
							$dclass = "strike";
							$eclass = "strike";
						} else if ($wrong == 1) {
							switch ($userans) {
								case 'a':
									$aclass = "strike";
									break;
								case 'b':
									$bclass = "strike";
									break;
								case 'c':
									$cclass = "strike";
									break;
								case 'd':
									$dclass = "strike";
									break;
								case 'e':
									$eclass = "strike";
									break;
								default:
									break;
							}
						}
						switch ($realans) {
							case 'a':
								$aclass = "green";
								break;
							case 'b':
								$bclass = "green";
								break;
							case 'c':
								$cclass = "green";
								break;
							case 'd':
								$dclass = "green";
								break;
							case 'e':
								$eclass = "green";
								break;
							default:
								break;
						}
						printf('
							<div>
								%s
							</div>
							<div>
								<span class="%s">a) %s</span><br>
								<span class="%s">b) %s</span><br>
								<span class="%s">c) %s</span><br>
								<span class="%s">d) %s</span><br>
								<span class="%s">e) %s</span><br>
							</div>
							',
							$row['question'],
							$aclass,
							$row['a'],
							$bclass,
							$row['b'],
							$cclass,
							$row['c'],
							$dclass,
							$row['d'],
							$eclass,
							$row['e']);
					?>
					<form name="ratings" method="post" action="ratings.php">
						<?php printf('
							<input type="hidden" name="id" value="%s">
							<input type="hidden" name="cat" value="%s">
							<input type="hidden" name="topic" value="%s">
						',$id, $cat, $topic); ?>
						<div class = "diffandrate">
							<div>
								<table>
									<tr>
										<td>Rate the difficulty of this problem:</td>
									</tr>
								</table>
								<table>
									<tr>
										<td>1</td>
										<td>2</td>
										<td>3</td>
										<td>4</td>
										<td>5</td>
									</tr>
									<tr>
										<td><input type="radio" name="difficulty" value="1"></td>
										<td><input type="radio" name="difficulty" value="2"></td>
										<td><input type="radio" name="difficulty" value="3"></td>
										<td><input type="radio" name="difficulty" value="4"></td>
										<td><input type="radio" name="difficulty" value="5"></td>
									</tr>
								</table>
							</div>
							<div>
								<table>
									<tr>
										<td>Was this a good problem?</td>
									</tr>
								</table>
								<table>

									<tr>
										<td>Thumbs up</td>
										<td>Thumbs down</td>
									</tr>
									<tr>
										<td><input type="radio" name="vote" value= "1" ></td>
										<td><input type="radio" name="vote" value="-1"></td>
									</tr>
								</table>
							</div>
						</div>
						<div>
							<input type="submit" value="Next">
						</div>
					</form>
				</td>
			</tr>
		</table>
	</body>
</html>