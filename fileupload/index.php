<!DOCTYPE html>
<html>
		<head>
		<title>Submit Problem</title>
		<link rel="stylesheet" href="/css/upload.css" type="text/css" />
		<link rel="stylesheet" href="/css/all.css" type="text/css" />
		<script language="javascript" type="text/javascript" src="/js/upload.js" />
		<!-- http://www.tamilcodes.com/javascript/javascript-dynamic-dependent-drop-down-list-box/ -->
		</script>
	</head>
	<body>
		<div>
			<h1><a href ="/" style="text-decoration: none"><span id="stud">stud</span><span id="hy">hy</span> </a></h1>
		</div>
		<?php include_once($_SERVER['DOCUMENT_ROOT']."/php/analyticstracking.php") ?>
 		<h2> Upload your file </h2>
				<form id="formname" name="formname" method="post" action="fileupload.php" enctype="multipart/form-data">
					 	<div><h3>Subject:</h3></div>
					 <div>
					 	<select name="subject" id="subject" onchange="javascript: dropdownlist(this.options[this.selectedIndex].value);">
							 <option value="">Select Subject</option>
							 <option value="Algebra">Algebra</option>
							 <option value="Biology">Biology</option>
							 <option value="Calculus">Calculus</option>
							 <option value="Chemistry">Chemistry</option>
							 <option value="Computer Science">Computer Science</option>
							 <option value="Economics">Economics</option>
							 <option value="European History">European History</option>
							 <option value="Geometry">Geometry</option>
							 <option value="Government">Government</option>
							 <option value="Language">Language</option>
							 <option value="Literature">Literature</option>
							 <option value="Physics">Physics</option>
							 <option value="Pre-Calculus">Pre-Calculus</option>
							 <option value="Statistics">Statistics</option>
							 <option value="Trigonometry">Trigonometry</option>
							 <option value="United States History">United States History</option>
							 <option value="World History">World History</option>
						 </select>
										
								<div>
									<div><h3>Topic:</h3></div>
										 <div>
										 	<script type="text/javascript" language="JavaScript">
											  document.write('<select name="topic"><option value="">Select Topic</option></select>')
								 			</script>
												<noscript>
									 				<select name="topic" id="topic" >
														<option value="">Select Topic</option>
													</select>
												</noscript>
										 </div>
								</div>
					</div>

					<label>File:</label>
					<input type="file" name="file" id="file">   
					<input name="upload" type="submit" class="box" id="upload" value=" Upload ">		
			</form>
	</body>

</html>