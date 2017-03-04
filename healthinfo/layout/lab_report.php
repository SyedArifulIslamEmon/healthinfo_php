<style type="text/css">
	table#usreInfo {font-size: 20px;color: #080000;padding-left: 30px;}
	table#usreInfo tr td:first-child{font-size: 20px;font-weight: bold;}
</style>
<?php
if(!isset($_SESSION['uid'])) header('location:index.php');

$p=@$_SESSION['uid'];

$sql="SELECT lname,email,diagname,password,image_path, create_date FROM labretorist_tbl where lname='{$p}'";

$query=mysql_query($sql);

$info=mysql_fetch_assoc($query);


?>
<div  id="usreInfo">

<h1>Labretorist Information</h1>

<br />
<table>
	<tr>
		<td>Name</td>
		<td>:</td>
		<td><?php echo $info['lname']."<br/>";  ?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td>:</td>
		<td><?php echo $info['email']."<br/>"; ?> </td>
	</tr>
	<tr>
		<td>Diagname</td>
		<td>:</td>
		<td><?php echo $info['diagname']."<br/>"; ?> </td>
	</tr>
	
	
</table>
<br />

</div>












<div  id="contact_form" class="fLeft">
<?php 

if (empty($_POST) ===false) {
	echo "Patient Registration";
}

if(@$_POST['submit']){
	$selCat=@$_POST['selCat'];
	if($selCat=="men"){

	}
}

 ?>

<form action="" method="post" enctype="multipart/form-data" id="contact_form" class="fLeft">
		<h1>Upload Report:</h1><br />
			<table>
				
				<tr>
					<td><label for="dname">Patient Name:</label></td>
					<td>

					<select id="dname"  class="input" name="dname">
						
						<?php
							$sql="SELECT * from registration_tbl";
							$query=mysql_query($sql);

							while($row=mysql_fetch_row($query)){
								echo '<option value="'. $row[1].'">'.Id.$row[0] .$row[1].'</option>';
							}
						?>
						</select>
					</td>
				</tr>
				
				<tr>
					<td><label for="dname">Doctor Name:</label></td>
					<td>

					<select id="dname"  class="input" name="dname">
						
						<?php
							$sql="SELECT * from doctor_tbl";
							$query=mysql_query($sql);

							while($row=mysql_fetch_row($query)){
								echo '<option value="'. $row[0].'">'.Id.$row[0] .$row[1].'</option>';
							}
						?>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="tname">Test Name:</label></td>
					<td><input type="text" id="tname" class="input"  name="tname"  required autofocus placeholder="Test Name="" :..."></td>
				</tr>
				<tr>
					<td><label for="image">Upload Image:</label></td>
					<td><input type="file" id="image"  class="input" name="image"  required autofocus placeholder="Upload Image:..."></td>
				</tr>
				

					<td>&nbsp;</td>
					<td><input type="submit" name="execute" value="submit" id="" class="input" ></td>
				</tr>
			</table>
		</form>
</div>

<div class="cBoth"></div>

		<?php


if(@$_POST['execute']){
	require_once "db/dbconnection.php";

	//ignore sql real command
	$pname=@mysql_real_escape_string($_POST['pname']);
	$dname=@mysql_real_escape_string($_POST['dname']);
	$tname=@mysql_real_escape_string($_POST['tname']);
    $image=@mysql_real_escape_string($_POST['image']);
	$date=date('Y-m-d');
	//$image=@mysql_real_escape_string($_POST['image']);
	//$status=@mysql_real_escape_string($_POST['status']);

	$supportedimage=array('jpg', 'png', 'gif', 'jpeg');
	$img=pathinfo($_FILES['image']['name']);
	$ext=$img['extension'];
	$image="img_".uniqid().".".$ext;

	if(in_array($ext, $supportedimage)){
		move_uploaded_file($_FILES['image']['tmp_name'], "images/report/".$image);
	}



	$sql="INSERT INTO report_tbl(pname,dname,tname,image, create_date) VALUES('{$pname}','{$dname}','{$tname}','{$image}', '{$date}')";

	$insert=mysql_query($sql);

	if($insert){
		echo "Successfully Registered!";
		echo "<img src=\"images/report/$image\" />";
	}else{
		echo mysql_error();
	}
	}

?>



