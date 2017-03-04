
<h1 align="center"> Patient Prescription</h1>
<?php
if(!isset($_SESSION['uid'])) header('location:index.php');

$p=@$_SESSION['uid'];
$sql="SELECT doctor_tbl.dname as 'dname',registration_tbl.pname as 'Pname', simptoms,test,drug,prescription_tbl.create_date as 'create_date',registration_tbl.image_path as 'image_path' FROM prescription_tbl inner join doctor_tbl on doctor_tbl.did=prescription_tbl.did inner join registration_tbl on registration_tbl.pid=prescription_tbl.pid where registration_tbl.pname='{$p}'";

$query=mysql_query($sql);

$info=mysql_fetch_assoc($query);


?>


<div id="prescriptionArea">
	<h1 align="center">Online Health  Management System</h1>
	<div class="fLeft">
		<h2>Doctor Name:<span><?php echo $info['dname']."<br/>";  ?> </span>  </h2>
		<h2>Patient Name: <span><?php echo $info['Pname']."<br/>";  ?></span>  </h2>
		<h2>Symptoms:
		<ul>
			<li><span><?php echo $info['simptoms']."<br/>";  ?> </li>
		</ul>
		  </h2>
	</div>
	<div class="fRight">
		
	</div>
	<div class="cBoth"></div>
	<div id="test">
		
		 <h2>Recommended Test: </h2>
		 <ul>
			<li><span><?php echo $info['test']."<br/>";  ?> </li>
		</ul>
		 <h2>Recommended Drug: </h2>
		 <ul>
			<li><span><?php echo $info['drug']."<br/>";  ?> </li>
		</ul>
		 <h2>Suggetion: </h2>
		 <br />
		 <p class="fLeft">Signature:<?php echo $info['dname']."<br/>";  ?></p>
		 <p class="fRight">Date:<span><?php echo $info['create_date']."<br/>";  ?> </p>
	</div>
</div>

<input type="submit" name="submit" value="Download" id="" class="input fRight" >




<br />

<style type="text/css">
	/*table tr:nth-child(odd){
		background-color:red;}
	table tr:nth-child(even){
		background-color:green;}*/
		table {border: 2px solid #382B35;}
	table tr td {font-size: 12px;padding: 2px;}
		table tr th {font-weight: bold;background: #5C5EA4;color: #E1D1D6;font-size: 14px;}


		
		#prescriptionArea {height: 500px;width: 600px;background: #BEDFDF;margin: 20px 0 30px 60px;border:2px solid #5AB2B0;}
		#prescriptionArea h1 {padding: 8px 0;width: 600px;border-bottom:2px solid #5AB2B0;color: #217565;}
		#prescriptionArea h2 {padding: 8px 20px;width: 300px;font-size: 20px;color:#217565;}
		#prescriptionArea h2 span{border-bottom:1px dotted #96B2D7;width: 100px;color: #5AB2B0;}
		#prescriptionArea h2 ul li{color: #000;}
		#test {width: 500px;}
		#test ul li{color: #000;}
		input { color: #fff;}
</style>






