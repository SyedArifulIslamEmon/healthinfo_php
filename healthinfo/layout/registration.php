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
		<h1>Patient Registration:</h1><br />
			<table>
				
				<tr>
					<td><label for="pname">Patient Name:</label></td>
					<td><input type="text" id="pname" class="input"  name="pname"  required autofocus placeholder="Patient Name:..."></td>
				</tr>
				
				<tr>
					<td><label for="email">Email:</label></td>
					<td><input type="text" id="email" class="input"  name="email"  required autofocus placeholder="Email..."></td>
				</tr>
				<tr>
					<td><label for="address">Address:</label></td>
					<td><input type="text"  name="address" id="address" class="input"  required autofocus placeholder="Address:..."></td>
				</tr>
				<tr>
					<td><label for="age">Age:</label></td>
					<td><input type="text" id="age" class="input"  name="age"  required autofocus placeholder="Age:..."></td>
				</tr>
				<tr>
					<td><label for="dob">Date of Birth:</label></td>
					<td><input type="text"  name="dob" id="dob" class="input"  required autofocus placeholder="Date of Birth..."></td>
				</tr>
				<tr>
					<td><label for="genderMale">Sex:</label></td>
						<td>
						<select id="blood" name="sex" class="input">
							<option value="male">Male</option>
							<option value="female">Female</option>
							<option value="common">Common</option>
						</select>
					</td>
					</tr>
				
				<tr>
					<td><label for="blood">Blood Group:</label></td>
					<td>
						<select id="blood" name="blood" class="input">
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
						</select>
					</td>
				
				</tr>
				
				<tr>
					<td><label for="password">Password:</label></td>
					<td><input type="text"  name="password" id="password" class="input"  required autofocus placeholder="Password:..."></td>
				</tr>
				<tr>
					<td><label for="image_path">Image:</label></td>
					<td><input type="file" id="image_path"  class="input" name="image_path"  required autofocus placeholder="Image:..."></td>
				</tr>
				

					<td>&nbsp;</td>
					<td><input type="submit" name="submit" value="submit" id="" class="input" ></td>
				</tr>
			</table>
		</form>
</div>

<div class="cBoth"></div>

		<?php


if(@$_POST['submit']){
	require_once "db/dbconnection.php";

	//ignore sql real command
	$pname=@mysql_real_escape_string($_POST['pname']);
	$email=@mysql_real_escape_string($_POST['email']);
	$age=@mysql_real_escape_string($_POST['age']);
	$sex=@mysql_real_escape_string($_POST['sex']);
	$dob=@mysql_real_escape_string($_POST['dob']);
	$blood=@mysql_real_escape_string($_POST['blood']);
	$address=@mysql_real_escape_string($_POST['address']);
    $password=@mysql_real_escape_string($_POST['password']);
	$date=date('Y-m-d');
	//$image_path=@mysql_real_escape_string($_POST['image_path']);
	//$status=@mysql_real_escape_string($_POST['status']);

	$supportedImage=array('jpg', 'png', 'gif', 'jpeg');
	$img=pathinfo($_FILES['image_path']['name']);
	$ext=$img['extension'];
	$image_path="img_".uniqid().".".$ext;

	if(in_array($ext, $supportedImage)){
		move_uploaded_file($_FILES['image_path']['tmp_name'], "images/registration/".$image_path);
	}



	$sql="INSERT INTO registration_tbl(pname,email,age, sex,dob,blood,address,password,image_path, create_date) VALUES('{$pname}','{$email}','{$age}','{$sex}', '{$dob}', '{$blood}','{$address}','{$password}','{$image_path}', '{$date}')";

	$insert=mysql_query($sql);

	if($insert){
		echo "Successfully Registered!";
		echo "<img src=\"images/registration/$image_path\" />";
	}else{
		echo mysql_error();
	}
	}

?>



