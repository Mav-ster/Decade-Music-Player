<?php 
	if(isset($_GET["id"]) === false)
	{
		header("location: index(p).php?id=index(p).php");
		exit;  //GET exectued if url if does not exist and loads main page with pg1.php material. -->
	}
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-portfolio</title>
</head>

<body>
	<!--
	#CABFE6
		#58558F
		#C28CE9
		#A282EB
		#A4C5EA
		#EA81CD
COLOR PALLETE
-->
<header>
	<h1 id="logo">MAV-STER</h1>
	<nav>
		<ul>
			<li><a  class="underline" href="#about">ABOUT ME</a></li>
			<li><a class="underline" href="#projects">WORK</a></li>
			<li><a class="underline" href="Mavi-R-Resume.pdf" download="Mavi_R.pdf" title="Resume download">RESUME</a></li>
		</ul>
	</nav>
</header>
	<br><br><br><br><br><br><br>
		<img  id="me" src="../../Desktop/tech 273/images/Gunter adventure time.png" alt="muah">
<h1 id="name">Hi! My name is <br><span id="shadow">Mavi Reyes</span></h1> <!--Maybe I'll animate my name?-->
	<h3 id="position">I am a UI/UX  Visual Designer who turns complex web and mobile challenges into intuitive, interactive digital products through rapid wireframing and prototyping.

</h3>
	<!--<img> of my face, I'll make the photo round-->
	
	<br><br><br><br><br>
<div id="socials-wrapper">
	<ul>
  		<li id="linked"><a href="https://www.linkedin.com/in/mavi-reyes-328201373" title="LINKEDIN profile" target="_blank"><img class="social" src="images/linkedin.png" alt="linked" ></a></li>
  		<li><a href="https://github.com/Mav-ster" title="Github Profile" target="_blank"><img class="social" src="images/github.png" alt="git"  ></a></li>
  		<li><a href="mailto:mavireyes24@gmail.com" title="Email"><img class="social" src="images/gmail.png" alt="email" ></a></li>
	</ul>
</div><!--Customize to make horizantal and make them glow when hovered over -->
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	
		<span id="ABOUT"><h1 class="more"><i>ABOUT ME</i></h1></span>
<div id="details-wrapper">
	
	<img  id="poloroid" src="images/1-smalls.jpeg" alt="poloroid1">
	
<p>I am a college student at Montgomery College currently increasing my knowledge in coding languages. My journey started in the classroom however, it has evolved to a passion where my artistry has a way to shine. I focus on creating websites that are pleasing to the eyes while still being engaging.</p>
	<br>
	
	<h3>I also work on...</h3>
	<br>
	<ul>
		<li>website wireframes</li>
		<li>Mockups</li>
		<li>User research</li>
	</ul>
	<br>
<h3><b>Other interests</b></h3>
	<br>
	<ul>
		<li>PC building</li>
		<li>CD collecting</li>
		<li>Gaming</li>
		<li>Drawing</li>
	</ul>
</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
		<span id="WORK"><h1 class="more"><i>PROJECTS</i></h1></span>
	<a href="?id=webdev.php">WEB DEVELOPMENT</a>
	<br>
	<?php include($_GET["id"]) ?>
</body>
</html>
