
<div class="barHeader" class="fLeft">
		<h1> Doctor</h1>
		<a href="?h=patient_to_doctorsDoctor"><h2>See more &gt;&gt;</h2></a>
	</div>
	<div class="cLeft"></div>

<?php
$category=@$_GET['cat'];
$sql="SELECT dname,email,degree,doctor_tbl.cname as 'Category',image_path,create_date,did FROM doctor_tbl INNER JOIN category_tbl on doctor_tbl.cname=category_tbl.cname where category_tbl.cid={$category} order by create_date,did DESC ";

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

