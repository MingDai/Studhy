<?php
	include($_SERVER['DOCUMENT_ROOT']."/php/dbfile.php");
		$acceptable_extensions[0] = "pdf";
		$acceptable_extensions[1] = "jpg";
		$acceptable_extensions[2] = "gif";
		$acceptable_extensions[3] = "doc";
		$acceptable_extensions[4] = "ppt";
		$acceptable_extensions[5] = "xls";
		$acceptable_extensions[6] = "xsl";
		$acceptable_extensions[14] = "txt";
		$acceptable_extensions[16] = "csv";
		$acceptable_extensions[18] = "docx";
	// Check the uploaded file to make sure it's a valid file
	$validated = 1;
//check if file has subject and topic
	if(($_POST['subject']!="") && ($_POST['topic']!=""))
	{
		if (isset($_POST['upload']) && $_FILES['file']['size']>0)
		{    
		    //make sure the file has a valid file extension
		    $file_info = pathinfo($_FILES['file']['name']);
		    $acceptable_ext = 0;
		                
		    for($x = 0; $x < count($acceptable_extensions); $x++)
		    {
		        if(strtolower($file_info['extension']) == $acceptable_extensions[$x])
		        {
		            $acceptable_ext = 1;         
		        }
		    }
		    if($acceptable_ext== 0){ $validated = 0; }   
		}else{ $validated = 0;}
	//add file into database if true
		if($validated==1)
		{
		    // Get important information about the file and put it into variables
		    $subject = $_POST['subject'];
			$topic = $_POST['topic'];
		    $fileName = $_FILES['file']['name'];
		    $tmpName  = $_FILES['file']['tmp_name'];
		    $fileSize = $_FILES['file']['size'];
		    $fileType = $_FILES['file']['type'];

		    // Slurp the content of the file into a varFiable
		    $fp = fopen($tmpName, 'r');
		    $content = fread($fp, filesize($tmpName));
		    $content = addslashes($content);
		    fclose($fp);

			    if(!get_magic_quotes_gpc())
			    {
			        $fileName = addslashes($fileName);
			    }
		    $file_info = pathinfo($_FILES['file']['name']);

		    $sql = "INSERT INTO files SET 
		    			subject='".$subject."',
		    			topic='".$topic."',
		                name = '".$fileName."', 
		                type = '".$fileType."',
		                size = '".$fileSize."',
		                content = '".$content."',
		                extension = '".$file_info['extension']."'";          
		    $result = mysql_query($sql);
		    // If the query was successful, give success message
			    if(!$result)
			    {
			        echo "Could not add this file to the database.";
			        exit;
			    } 
			    else{ echo  "New file successfully added."; }

		}else {
			   echo "Invalid file.";
			   exit;
			  }
	}else{ echo "Select a subject and a topic"; exit;}

?>