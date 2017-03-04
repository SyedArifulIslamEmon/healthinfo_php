
<div  id="contact_form" class="fLeft">
<?php 

if (empty($_POST) ===false) {
	echo "Prescription";
}

if(@$_POST['submit']){
	$selCat=@$_POST['selCat'];
	if($selCat=="men"){

	}
}

 ?>

<form action="" method="post" enctype="multipart/form-data" id="contact_form" class="fLeft">
		<h1>Prescription:</h1><br />
			<table>
				
				<tr>
					<td><label for="did">Doctor Name:</label></td>
					<td>

					<select id="did"  class="input" name="did">
						
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
					<td><label for="pid">Patient Name:</label></td>
					<td>

					<select id="pid"  class="input" name="pid">
						
						<?php
							$sql="SELECT * from registration_tbl";
							$query=mysql_query($sql);

							while($row=mysql_fetch_row($query)){
								echo '<option value="'. $row[0].'">'.Id.$row[0] .$row[1].'</option>';
							}
						?>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="simptoms">Symptoms:</label></td>
					<td><input type="text" id="simptoms" class="input"  name="simptoms"  required autofocus placeholder="Symptoms..."></td>
				</tr>
				<tr>
					<td><label for="test">Recommended Test:</label></td>
					<td><input type="text"  name="test" id="test" class="input"  required autofocus placeholder="Recommended Test..."></td>
				</tr>
				<tr>
					<td><label for="drug">Recommended Drug:</label></td>
					<td><input type="text"  name="drug" id="drug" class="input"  required autofocus placeholder="Recommended Drug:.."></td>
			
				</tr><tr>

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
	$did=@mysql_real_escape_string($_POST['did']);
	$pid=@mysql_real_escape_string($_POST['pid']);
	$simptoms=@mysql_real_escape_string($_POST['simptoms']);
	$test=@mysql_real_escape_string($_POST['test']);
	$drug=@mysql_real_escape_string($_POST['drug']);
	$date=date('Y-m-d');

	$sql="INSERT INTO prescription_tbl(did,pid, simptoms,test,drug,create_date) VALUES('{$did}','{$pid}','{$simptoms}', '{$test}', '{$drug}', '{$date}')";

	$insert=mysql_query($sql);

	if($insert){
		echo "Successfully Send!";
	}else{
		echo mysql_error();
	}
	}

?>



