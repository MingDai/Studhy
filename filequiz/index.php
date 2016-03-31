<?php
include($_SERVER['DOCUMENT_ROOT']."/php/dbfile.php");

if(isset($_GET['id'])) 
{
// if id is set then get the file with the id from database
include($_SERVER['DOCUMENT_ROOT']."/php/dbfile.php");

$id    = $_GET['id'];
$query = "SELECT name, type, size, content " .
         "FROM files WHERE id = '$id'";

$result = mysql_query($query) or die('Error, query failed');
list($name, $type, $size, $content) = mysql_fetch_array($result);

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
echo $content;

exit;
}

?>

<html>
	<head>
		<title>Download File From MySQL</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" href="/css/all.css" type="text/css" />
	</head>

	<body>
		<?php include_once($_SERVER['DOCUMENT_ROOT']."/php/analyticstracking.php") ?>
		<?php
			$query = "SELECT id, name FROM files";
			$result = mysql_query($query) or die('Error, query failed');
		if(mysql_num_rows($result) == 0)
			{
			echo "Database is empty <br>";
			} 
		else
			{
			while(list($id, $name) = mysql_fetch_array($result))
				{
		?>
		<a href="index.php?id=<?php echo urlencode($id);?>"><?php echo urlencode($name);?></a> <br>
		<br>
			<?php 
				}	
			}
			?>
	</body>
</html>