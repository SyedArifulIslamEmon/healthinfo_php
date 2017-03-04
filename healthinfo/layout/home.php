<h1 id="contentHead">Online Health Management System</h1>
				<p>
					Health information management (HIM) is the practice of acquiring, analyzing and protecting digital and traditional medical information vital to providing quality patient care. With the widespread computerization of health records, traditional (paper-based) records are being replaced with Electronic Health Records (EHRs). The tools of health informatics and health information technology are being increasingly utilized to introduce efficiency in information management practices in the health care sector. Both hospital information systems and health human resources information systems (HRHIS) are common implementations of HIM.

				</p>


<div class="barHeader" class="fLeft">
		<h1>Specialize Doctor</h1>
		<a href="?h=doctor"><h2>See more &gt;&gt;</h2></a>
	</div>
	<div class="cLeft"></div>
<marquee direction="left" behavior="alternet" scrollamount="7" onMouseOver="this.stop()" onMouseOut="this.start()">	
								
<?php
$sql="SELECT dname,email,degree,doctor_tbl.cname as 'Category',image_path,create_date,did FROM doctor_tbl INNER JOIN category_tbl on doctor_tbl.cname=category_tbl.cname  order by create_date,did DESC limit 0, 8 ";

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
</marquee>


<script type="text/javascript">

		$(function() {
	    $('marquee').mouseover(function() {
	        $(this).attr('scrollamount',0);
	    }).mouseout(function() {
	         $(this).attr('scrollamount',5);
	    });

	});
	</script>
<br />
				