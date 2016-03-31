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
 		<h2> Submit your question (multiple choice or upload file) </h2>
 			<h3><a href="/fileupload">Upload A File</a></h3>
				<form id="formname" name="formname" method="post" action="upload.php" >
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
						 <option value="Spanish">Spanish</option>
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

					 	<div> <h3> Enter multiple choice question: </h3> </div>
						<div> Question: <input type="text" name="question" width= 300> </div>
						<div> a: <input type="text" name="a"> </div>
						<div> b: <input type="text" name="b"> </div>
						<div> c: <input type="text" name="c"> </div>
						<div> d: <input type="text" name="d"> </div>
						<div> e: <input type="text" name="e"> </div>

					 	<div> <h3> Enter correct multiple choice answer: </h3> </div>
						<div> <input type="radio" name="correctAnswer" value="a" >a </div>
						<div> <input type="radio" name="correctAnswer" value="b" >b </div>
						<div> <input type="radio" name="correctAnswer" value="c" >c </div>
						<div> <input type="radio" name="correctAnswer" value="d" >d </div>
						<div> <input type="radio" name="correctAnswer" value="e" >e </div>

						<div> <h3> Rate the difficulty of the problem from 1 to 5: </h3> </div>
						<div> <input type="radio" name="difficulty" value="1" >1 </div>
						<div> <input type="radio" name="difficulty" value="2" >2 </div>
						<div> <input type="radio" name="difficulty" value="3" >3 </div>
						<div> <input type="radio" name="difficulty" value="4" >4 </div>
						<div> <input type="radio" name="difficulty" value="5" >5 </div>
					<input type="Submit">
				</form>
	</body>
</html>