<?php
	include($_SERVER['DOCUMENT_ROOT']."/php/db.php");
	if (!isset($_GET['cat'])) {
		header("location:/");
	}
	$cat = $_GET['cat'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sub-topics</title>
		<link rel="stylesheet" href="/css/sub.css" type="text/css" />
		<link rel="stylesheet" href="/css/all.css" type="text/css" />
	</head>
	<body>
		<?php include_once($_SERVER['DOCUMENT_ROOT']."/php/analyticstracking.php") ?>
		<div>
			<h1><a href ="/" style="text-decoration: none"><span id="stud">stud</span><span id="hy">hy</span> </a></h1>
		</div>
		<div>
			<?php printf('<h2>%s</h2>', $cat); ?>
		</div>
		<div>
			<?php
				printf('
					<p><a href="/quiz?cat=%s">Quiz All</a></p>
					',
					$cat);
				$sql = "SELECT DISTINCT topic FROM $table WHERE subject='$cat'";
				$result = mysql_query($sql);
				while ($row = mysql_fetch_array($result)) {
					printf('
						<p><a href="/quiz?cat=%s&topic=%s">%s</a></p>
						', $cat, $row['topic'], $row['topic']);
				}
			?>
		</div>
	</body>
</html>