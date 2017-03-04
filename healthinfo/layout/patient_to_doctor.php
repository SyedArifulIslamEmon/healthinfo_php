<?php
$p=@$_GET['did'];
$sql="SELECT dname,email,degree,doctor_tbl.cname as 'Category',image_path,create_date,did,age FROM doctor_tbl INNER JOIN category_tbl on doctor_tbl.cname=category_tbl.cname  where doctor_tbl.did={$p}";


$query=mysql_query($sql);
$info=mysql_fetch_assoc($query); 

?> 


	<div id="dimg" class="fRight">
		<span class='zoom' id='ex1'>
		 	<img src="<?php echo "images/doctor/".$info['image_path']; ?>" alt="shart" width="250px" height="250px" > 
		</span> 
	</div>
	<div id="pContent" class="fLeft">
		<div id="pdetaliHead">

		<h1><?php echo $info['Category']; ?> </h1>
			<h2><?php echo $info['dname']; ?> </h2>			
			<div class="price">Email: <?php echo $info['email']; ?></div> 
			<div class="price">Degree: <?php echo $info['degree']; ?></div> 
			<div class="price">Age: <?php echo $info['age']; ?></div> 
		</div>
	</div>
	<div class="cBoth"></div>





		<div class="fLeft">
		<form action="" method="post" enctype="multipart/form-data" id="contact_form" >
		<h1>Contact with Doctor:</h1><br />
			<table>
				<tr>
					<td><label for="did">Doctor Id:<sup>*</sup></label></td>
					<td><input type="text" id="did" class="input"  name="did"  required autofocus  value="<?php echo $info['did']; ?>"></td>
				</tr>
				<tr>
					<td><label for="pname">Patient Name:</label></td>
					<td>

					<select id="pname"  class="input" name="pname">
						
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
					<td><label>Problem<br /> Description:</label></td>
					<td><textarea type="text" name="description"  class="input" style="hight: 30px;" rows="5"  required autofocus placeholder="Description..." rows="10" tabindex="5"></textarea></td>
				</tr>
				<tr>
					<td >&nbsp;</td>
					<td><input type="submit" name="submit" class="input" id="" value="Send"></td>
				</tr>
			</table>

		</form>
		</div>
 		<div class="cBoth"></div>






<?php


if(@$_POST['submit']){
	require_once "db/dbconnection.php";

	//ignore sql real command

	$did=@mysql_real_escape_string($_POST['did']);
	$pname=@mysql_real_escape_string($_POST['pname']);
	$description=@mysql_real_escape_string($_POST['description']);
	$date=date('Y-m-d');

		$sql="INSERT INTO pproblem_tbl(did,pname,description,create_date) VALUES('{$did}', '{$pname}',
			'{$description}','{$date}')";

		$insert=mysql_query($sql);

		if($insert){
			echo "Successfully Send!";
		}else{
			echo mysql_error();
		}
	}

?>

	</body>
</html>

