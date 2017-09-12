<?php
if($_POST["message"]) {
    mail("your@email.address", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Xin Yi Chen || Contact Me</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans+Mono|Meddon|Open+Sans:400,600,800" rel="stylesheet">
	<script src="assets/js/js.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
		    $(".submit").click(function(){
		        alert("Thank you for the message! I usually respond within 48 hours.");
		    });
		});
	</script>
</head>
<body>
	<nav>
		<ul>
		  <li><a href="index.html">Home</a></li>
		  <li><a href="aboutme.html">About Me</a></li>
		  <li><a href="resume.html">Resume</a></li>
		  <li><a class="active" href="contact.html">Contact Me</a></li>
		  <li><a href="blog.html">Blog</a></li>
		</ul>
	</nav>
	<div class="header">Contact Us</div>
	<hr>
	<div class="text">
		To contact me, please refer to my LinkedIn, which can be accessed by clicking 
		<a href="https://www.linkedin.com/in/xinyichen516/" style="text-decoration:none; color: #767676;">here</a>, email me at xinyichen@berkeley.edu, or use the form below:
	</div>
	<div id="contactform">
		<form method="post" action="contact.php">
		    <textarea name="message"></textarea>
		    <input type="submit">
		</form>
	</div>
</body>
</html>