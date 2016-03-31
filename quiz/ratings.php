<?php
	include($_SERVER['DOCUMENT_ROOT']."/php/db.php");
	if (!isset($_POST['id'])) {
		header("location:/");
	}
	$id = $_POST['id'];
	$cat = $_POST['cat'];
	$topic = $_POST['topic'];

	$difficulty = 0.0;
	$updown = 0.0;

	$sql = "SELECT * FROM $table WHERE id='$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);

	$numPplAns = $row['numPplAns'];
	$numPplDiff = $row['numPplDiff'];
	$curdiff = $row['difficulty'];
	$vote = $row['udvote'];
	$minimum = -5;
	if (!isset($_POST['difficulty']))
	{
		$var = $numPplAns + 1.0;
		$sql = "UPDATE $table SET numPplAns = $var WHERE id='$id'";
		mysql_query($sql);
	}else{
		$difficulty = $_POST['difficulty'];
	}

	if(isset($_POST['vote']))
		{
			$updown = $_POST['vote'];
			$vote += $updown;
			}
			
		if ($vote < $minimum ) 
				{
					$sql = "DELETE FROM $table WHERE id='$id'";
					mysql_query($sql);
				} else 		
					{
					$var = $numPplAns+1;
					$sql = "UPDATE $table SET numPplAns = $var WHERE id='$id'";
						mysql_query($sql);
					$var = (($curdiff * $numPplDiff) + $difficulty)/($numPplDiff + 1);
					$sql = "UPDATE $table SET difficulty = $var WHERE id='$id'";
						mysql_query($sql);
					$var = $numPplDiff + 1;
					$sql = "UPDATE $table SET numPplDiff = $var WHERE id='$id'";
						mysql_query($sql);
					$var = $vote;
					$sql = "UPDATE $table SET udvote = $var WHERE id='$id'";
						mysql_query($sql);
					}
			
		

	header("location:/quiz?cat=$cat&topic=$topic");
?>
