<?php
	session_start();
	session_destroy();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Studhy</title>
		<link rel="stylesheet" href="/css/home.css" type="text/css" />
		<link rel="stylesheet" href="/css/all.css" type="text/css" />
		<link rel="stylesheet" href="/css/animate.css" type="text/css" />
	</head>
	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>
		<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
		<?php include_once($_SERVER['DOCUMENT_ROOT']."/php/analyticstracking.php") ?>
			<div class="fb-like" data-href="https://www.facebook.com/studhyapp" data-layout="standard" data-action="like" data-show-faces="true" data-share="true" style="position: absolute; top: 5px; right: 0px; "></div>
		<div class="container">
			<table>
				<tr>
					<td>
						<h1><a href ="/" style="text-decoration: none"><span id="stud">stud</span><span id="hy">hy</span> </a></h1>
					</td>
				</tr>
				<tr>
					<td>
						<p><i>The crowdsourced quiz bank.</i></p>
					</td>
				</tr>
				<tr>
					<td>
						<p><a href="/upload">Upload a Question</a></p>
						<p><a href="/filequiz">Download a file</a></p>
					</td>
				</tr>
				<tr>
					<td>
						<h2>Sciences</h2>
							<p> <a href = "/sub?cat=Chemistry">Chemistry</a></p>
							<p> <a href = "/sub?cat=Biology">Biology</a> </p>
							<p>	<a href = "/sub?cat=Physics">Physics</a> </p>
							<p><a href="/sub?cat=Computer Science">Computer Science</a></p>
				 	</td>
				 	<td>
				 		<h2>Mathematics</h2>
				 			<P> <a href = "/sub?cat=Calculus">Calculus</a> </p>
				 			<p> <a href = "/sub?cat=Pre-Calculus">Pre-Calculus</a></p>
				 			<P> <a href = "/sub?cat=Algebra">Algebra</a> </p>
				 			<P> <a href = "/sub?cat=Geometry">Geometry</a> </p>
				 			<p> <a href = "/sub?cat=Trigonometry">Trigonometry</a> </p>
				 			<p><a href="/sub?cat=Statistics">Statistics</a></p>
				 	</td>
				</tr>
				<tr>
					<td>
				 		<h2>History + Social Sciences </h2>
				 			<P> <a href = "/sub?cat=United States History">United States History</a> </p>
				 			<p> <a href = "/sub?cat=European History">European History</a></p>
				 			<P> <a href = "/sub?cat=World History">World History</a> </p>
				 			<P> <a href = "/sub?cat=Economics">Economics</a> </p>
				 			<p> <a href = "/sub?cat=Government">Government</a> </p>
				 	</td>
					<td>
				 		<h2>English</h2>
				 			<P> <a href = "/sub?cat=Literature">Literature</a> </p>
				 			<p> <a href = "/sub?cat=Language">Language</a></p>
				 	</td>
				 </tr>
				 <tr>
					 <td>
					 	<h2>Foreign Language</h2>
				 			<P> <a href = "/sub?cat=Spanish">Spanish</a> </p>
					 </td>
				 </tr>
			</table>
		</div>
		<footer>
			<div class="footer-left">
				<script type="text/javascript">
					d = new Date();
					cur = d.getFullYear();
					document.write("Studhy &#169; " + cur);
				</script>
			</div>
			<div class="footer-right">
				Created by: Ming Dai and Timothy Deng
			</div>
		</footer>
	</body>
</html>