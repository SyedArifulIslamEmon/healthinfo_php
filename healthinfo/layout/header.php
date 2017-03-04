<!DOCTYPE html>
<html>
	<head>
		<title>Online Health Information Management system</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript">
		var imagecount = 1;
		var total = 3;

		function slide(x) {
			var Image = document.getElementById('img');
			imagecount = imagecount + x;
			if (imagecount > total) { imagecount = 1;}
			if (imagecount < 1) { imagecount = total;}
			Image.src = "img"+ imagecount + ".jpg";
		}
		
		window.setInterval(function slide() {
			var Image = document.getElementById('img');
			imagecount = imagecount + 1;
			if (imagecount > total) { imagecount = 1;}
			if (imagecount < 1) { imagecount = total;}
			Image.src = "img"+ imagecount + ".jpg";
		},3000);

		</script>


		<link rel="stylesheet" type="text/css" href="css/sty.css">
	<script src='js/js.js'></script>
	<script src='js/jquery.zoom.min.js'></script>
	<script>
		$(document).ready(function(){
			$('#ex1').zoom();
			$('#ex2').zoom({ on:'grab' });
			$('#ex3').zoom({ on:'click' });			 
			$('#ex4').zoom({ on:'toggle' });
		});
	</script>
	</head>
	<body>
		<header>

			<div class="siteWrapper">
				<div class="fLeft" id="logo">
					<a href="index.php"><img src="images/logo.png" height="150px" width="150px"></a> 
				</div>
				<div class="fLeft">
					<h1 id="head">Online Health Management System</h1>
					<div id="MainMenu">
					<ul>
                        <li><a href="index.php">Home</a>| </li>
                        <li><a href="?h=about">About</a>| </li>
                        <li><a href="?h=service">Services</a>| </li>
                        <li><a href="?h=contact">Contact</a></li>
					</ul>
				</div>
				</div>
				
				<div class="fLeft" id="rightHeader">
					<div id="search">
						<form action="?h=search" method="post" enctype="multipart/form-data" id="searchBox">
							<input type="text" name="searchText" id="searchText" placeholder="Search..." class="fLeft" />
                            <!-- <input type="submit" name="execute" value="Go" id="submit" class="fRight"  > -->
						</form>
						<div id="login">
							<a  href="?h=login">Login</a>
						</div>
						
					</div>
					
					<!-- <div id="login">
						<a href=".php#">Login</a>
					</div> -->
					
				</div>
				<div class="cLeft"></div>
			</div>
		</header>
		<div class="siteWrapper">
			<!-- <img src="images/banner1.jpg" height="450px" width="1000px"> -->
			<div id="bannerArea">
				<img src="img.jpg" id="img" height="300px" width="1000px">
				<div id="left_holder">
					<img onclick="slide(-1)" class="left"src="images/left.jpg"  height="295px" width="1000px" >
				</div>
				<div id="right_holder">
					<img onclick="slide(-1)" class="right" src="images/right.jpg"  height="295px" width="1000px" >
				</div>
			</div>
		</div>
		<div class="siteWrapper">
			<div class="fRight" id="sitebar">
				<h3>Our User</h3> 
					<ul class="sidemenu">
						<li><a href="?h=doctor">Specialized Doctor</a></li>
						<li><a href="?h=login">Patient Login</a></li>
						<li><a href="?h=doctorlogin">Doctor Login</a></li>
						<li><a href="?h=lab_reg">Labretorist Login</a></li>
					</ul>
					<br />
					<!-- <h3>Our Skill</h3>
					<img src="images/skill.jpg" width="220px">
					<br /> -->
					<h3>Category</h3>
					<ul  class="sidemenu">
						<?php  
						$sql="SELECT * from category_tbl";
						$query=mysql_query($sql);
						while($row=mysql_fetch_row($query)){
							echo '<li><a href="?h=categorywise&cat='.$row[0].'">'.$row[1].'</a></li>'; 
							}
						?>
					</ul>
					<br />
			</div>

			<div class="fLeft" id="content">
				