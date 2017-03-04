

<div class="barHeader" class="fLeft">
		<h1>Cardiology Doctor</h1>
		<a href="?h=patient_to_doctorsDoctor"><h2>See more &gt;&gt;</h2></a>
	</div>
	<div class="cLeft"></div>

<?php
$sql="SELECT dname,email,degree,doctor_tbl.cname as 'Category',image_path,create_date,did FROM doctor_tbl INNER JOIN category_tbl on doctor_tbl.cname=category_tbl.cname where category_tbl.cname='Cardiology' order by create_date,did DESC limit 0, 3 ";

$query=mysql_query($sql);

while($row=mysql_fetch_row($query)):

?>
	<div class="tiShirts">
		<span class="tiShirtHeading zoom" id='ex1'>
			<h1><?php echo $row[0] ?></h1>
		</span>
		<div class="tiShirtImg">
			<a href=" ?h=patient_to_doctor&did=<?php echo $row[6]; ?>"><img src="<?php echo "images/doctor/".$row[4]; ?>" height="200px" width="180px"></a>
		</div>
		<div class="imgDescription" class="fLeft">
			
			<div id="patient_to_doctor" class="fLeft">
				<p>Email: <?php echo $row[1] ?></p>
				<p>Degree: <?php echo $row[2] ?></p>
				<a href="?h=patient_to_doctor&did=<?php echo $row[6]; ?>"><button>Contact</button></a> 
			</div>
		</div>
		<div class="cLeft"></div>
	</div>
<?php endwhile; ?>
	
	<div class="cLeft"></div>


<!-- Dentistry -->

<div class="barHeader">
		<h1>Dentistry Doctor</h1>
		<a href="?h=patient_to_doctorsDoctor"><h2>See more &gt;&gt;</h2></a>
	</div>

<?php
$sql="SELECT dname,email,degree,doctor_tbl.cname as 'Category',image_path,create_date,did FROM doctor_tbl INNER JOIN category_tbl on doctor_tbl.cname=category_tbl.cname where category_tbl.cname='Dentistry' order by create_date,did DESC limit 0, 3 ";

$query=mysql_query($sql);

while($row=mysql_fetch_row($query)):

?>
	<div class="tiShirts">
		<div class="tiShirtHeading">
			<h1><?php echo $row[0] ?></h1>
		</div>
		<div class="tiShirtImg">
			<a href=" ?h=patient_to_doctor&did=<?php echo $row[6]; ?>"><img src="<?php echo "images/doctor/".$row[4]; ?>" height="200px" width="180px"></a>
		</div>
		<div class="imgDescription" class="fLeft">
			
			<div id="patient_to_doctor" class="fLeft">
				<p>Email: <?php echo $row[1] ?></p>
				<p>Degree: <?php echo $row[2] ?></p>
				<a href="?h=patient_to_doctor&did=<?php echo $row[6]; ?>"><button>Contact</button></a>  
			</div>

		</div>
		<div class="cLeft"></div>
	</div>
<?php endwhile; ?>
	
	<div class="cLeft"></div>

<!-- Dermatology -->
<div class="barHeader" class="fLeft">
		<h1>Dermatology Doctor</h1>
		<!-- <a href="?h=patient_to_doctorsDoctor"><h2>See more &gt;&gt;</h2></a> -->
	</div>
	<div class="cLeft"></div>

<?php
$sql="SELECT dname,email,degree,doctor_tbl.cname as 'Category',image_path,create_date,did FROM doctor_tbl INNER JOIN category_tbl on doctor_tbl.cname=category_tbl.cname where category_tbl.cname='Dermatology' order by create_date,did DESC limit 0, 3 ";

$query=mysql_query($sql);

while($row=mysql_fetch_row($query)):

?>
	<div class="tiShirts">
		<div class="tiShirtHeading">
			<h1><?php echo $row[0] ?></h1>
		</div>
		<div class="tiShirtImg">
			<a href=" ?h=patient_to_doctor&did=<?php echo $row[6]; ?>"><img src="<?php echo "images/doctor/".$row[4]; ?>" height="200px" width="180px"></a>
		</div>
		<div class="imgDescription" class="fLeft">
			
			<div id="patient_to_doctor" class="fLeft">
				<p>Email: <?php echo $row[1] ?></p>
				<p>Degree: <?php echo $row[2] ?></p>
				<a href="?h=patient_to_doctor&did=<?php echo $row[6]; ?>"><button>Contact</button></a> 
			</div>
		</div>
		<div class="cLeft"></div>
	</div>
<?php endwhile; ?>
	
	<div class="cLeft"></div>

	<!-- Medicine -->

	<div class="barHeader" class="fLeft">
		<h1>Medicine Doctor</h1>
		<!-- <a href="?h=patient_to_doctorsDoctor"><h2>See more &gt;&gt;</h2></a> -->
	</div>
	<div class="cLeft"></div>

<?php
$sql="SELECT dname,email,degree,doctor_tbl.cname as 'Category',image_path,create_date,did FROM doctor_tbl INNER JOIN category_tbl on doctor_tbl.cname=category_tbl.cname where category_tbl.cname='Medicine' order by create_date,did DESC limit 0, 3 ";

$query=mysql_query($sql);

while($row=mysql_fetch_row($query)):

?>
	<div class="tiShirts">
		<div class="tiShirtHeading">
			<h1><?php echo $row[0] ?></h1>
		</div>
		<div class="tiShirtImg">
			<a href=" ?h=patient_to_doctor&did=<?php echo $row[6]; ?>"><img src="<?php echo "images/doctor/".$row[4]; ?>" height="200px" width="180px"></a>
		</div>
		<div class="imgDescription" class="fLeft">
			
			<div id="patient_to_doctor" class="fLeft">
				<p>Email: <?php echo $row[1] ?></p>
				<p>Degree: <?php echo $row[2] ?></p>
				<a href="?h=patient_to_doctor&did=<?php echo $row[6]; ?>"><button>Contact</button></a> 
			</div>
		</div>
		<div class="cLeft"></div>
	</div>
<?php endwhile; ?>
	
	<div class="cLeft"></div>
<!--  -->

<div class="barHeader" class="fLeft">
		<h1>Neurology Doctor</h1>
		<!-- <a href="?h=patient_to_doctorsDoctor"><h2>See more &gt;&gt;</h2></a> -->
	</div>
	<div class="cLeft"></div>

<?php
$sql="SELECT dname,email,degree,doctor_tbl.cname as 'Category',image_path,create_date,did FROM doctor_tbl INNER JOIN category_tbl on doctor_tbl.cname=category_tbl.cname where category_tbl.cname='Neurology' order by create_date,did DESC limit 0, 3 ";

$query=mysql_query($sql);

while($row=mysql_fetch_row($query)):

?>
	<div class="tiShirts">
		<div class="tiShirtHeading">
			<h1><?php echo $row[0] ?></h1>
		</div>
		<div class="tiShirtImg">
			<a href=" ?h=patient_to_doctor&did=<?php echo $row[6]; ?>"><img src="<?php echo "images/doctor/".$row[4]; ?>" height="200px" width="180px"></a>
		</div>
		<div class="imgDescription" class="fLeft">
			
			<div id="patient_to_doctor" class="fLeft">
				<p>Email: <?php echo $row[1] ?></p>
				<p>Degree: <?php echo $row[2] ?></p>
				<a href="?h=patient_to_doctor&did=<?php echo $row[6]; ?>"><button>Contact</button></a> 
			</div>
		</div>
		<div class="cLeft"></div>
	</div>
<?php endwhile; ?>
	
	<div class="cLeft"></div>


<!-- Nephrology -->

<div class="barHeader" class="fLeft">
		<h1>Nephrology Doctor</h1>
		<!-- <a href="?h=patient_to_doctorsDoctor"><h2>See more &gt;&gt;</h2></a> -->
	</div>
	<div class="cLeft"></div>

<?php
$sql="SELECT dname,email,degree,doctor_tbl.cname as 'Category',image_path,create_date,did FROM doctor_tbl INNER JOIN category_tbl on doctor_tbl.cname=category_tbl.cname where category_tbl.cname='Nephrology' order by create_date,did DESC limit 0, 3 ";

$query=mysql_query($sql);

while($row=mysql_fetch_row($query)):

?>
	<div class="tiShirts">
		<div class="tiShirtHeading">
			<h1><?php echo $row[0] ?></h1>
		</div>
		<div class="tiShirtImg">
			<a href=" ?h=patient_to_doctor&did=<?php echo $row[6]; ?>"><img src="<?php echo "images/doctor/".$row[4]; ?>" height="200px" width="180px"></a>
		</div>
		<div class="imgDescription" class="fLeft">
			
			<div id="patient_to_doctor" class="fLeft">
				<p>Email: <?php echo $row[1] ?></p>
				<p>Degree: <?php echo $row[2] ?></p>
				<a href="?h=patient_to_doctor&did=<?php echo $row[6]; ?>"><button>Contact</button></a> 
			</div>
		</div>
		<div class="cLeft"></div>
	</div>
<?php endwhile; ?>
	
	<div class="cLeft"></div>