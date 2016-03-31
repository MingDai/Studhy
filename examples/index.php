<?php include('db.php'); ?>

<html>
	<head>
		<title>SRVUSD Students</title>
		<link rel="stylesheet" href="css/css.css" type="text/css">
	</head>
	<body>
		<div>
<!-- 			<div>
				<div class="img-container">
					<img src="img/photos/22059.jpg" />
				</div>
				<div>
					Timothy Deng
				</div>
				<div>
					DVHS
				</div>
				<div>
					2015
				</div>
			</div> -->
			<?php
				// $name = "Timothy Deng";
				// $sql = "SELECT * FROM '$table' WHERE fullname = '$name'";
				// $result = mysql_query($sql);
				// $rows = mysql_fetch_array($result);
				// echo $rows['address'];

				// $result = "SELECT * FROM students";
				// while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
				//     echo '<tr><div>$row["fullname"]</div></tr>';
				// }
				$sql = "SELECT * FROM $table ORDER BY fullname";
				$result = mysql_query($sql);
				while ($row = mysql_fetch_array($result)) {
					print '<div><div class="img-container">';
					if ($row['photo'] != "") {
						printf('<img src="img/photos/%s%s" />', $row['patronid'], $row['photo']);
					}
					print "</div>";
					printf("
							<div>

							</div>
							<div>
								%s
							</div>
							<div>
								%s
							</div>
							<div>
								%s
							</div>
							<div>
								%s
							</div>
							<div>
								%s
							</div>
							<div>
								%s
							</div>
							<div>
								%s
							</div></div>",
						$row['fullname'],
						$row['school'],
						$row['gradyear'],
						$row['sex'],
						$row['studentid'],
						$row['birthdate'],
						$row['address']);
				}
			?>
		</div>
	</body>
</html>