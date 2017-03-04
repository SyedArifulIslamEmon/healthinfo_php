<div  id="contact_form" class="fLeft">
<?php 

if (empty($_POST) ===false) {
	echo "Doctor Registration";
}

if(@$_POST['submit']){
	$selCat=@$_POST['selCat'];
	if($selCat=="men"){

	}
}

 ?>

<form action="" method="post" enctype="multipart/form-data" id="contact_form" class="fLeft">
		<h1>Doctor Registration:</h1><br />
			<table>
				
				<tr>
					<td><label for="dname">Dr.Name:</label></td>
					<td><input type="text" id="dname" class="input"  name="dname"  required autofocus placeholder="Dr.Name:..."></td>
				</tr>
				
				<tr>
					<td><label for="email">Email:</label></td>
					<td><input type="text" id="email" class="input"  name="email"  required autofocus placeholder="Email..."></td>
				</tr>
				<tr>
					<td><label for="age">Age:</label></td>
					<td><input type="text" id="age" class="input"  name="age"  required autofocus placeholder="Age:..."></td>
				</tr>
				<tr>
					<td><label for="degree">Degree:</label></td>
					<td><input type="text" id="degree" class="input"  name="degree"  required autofocus placeholder="degree..."></td>
				</tr>
				<tr>
					<td><label for="cname">Category:</label></td>
					<td>

					<select id="cname"  class="input" name="cname">
						
						<?php
							$sql="SELECT * from category_tbl";
							$query=mysql_query($sql);

							while($row=mysql_fetch_row($query)){
								echo '<option value="'. $row[1].'">'.$row[1].'</option>';
							}
						?>
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
	$dname=@mysql_real_escape_string($_POST['dname']);
	$email=@mysql_real_escape_string($_POST['email']);
	$age=@mysql_real_escape_string($_POST['age']);
	$degree=@mysql_real_escape_string($_POST['degree']);
	$cname=@mysql_real_escape_string($_POST['cname']);
	$password=@mysql_real_escape_string($_POST['password']);
	$date=date('Y-m-d');
	//$image_path=@mysql_real_escape_string($_POST['image_path']);
	//$status=@mysql_real_escape_string($_POST['status']);

	$supportedImage=array('jpg', 'png', 'gif', 'jpeg');
	$img=pathinfo($_FILES['image_path']['name']);
	$ext=$img['extension'];
	$image_path="img_".uniqid().".".$ext;

	if(in_array($ext, $supportedImage)){
		move_uploaded_file($_FILES['image_path']['tmp_name'], "images/doctor/".$image_path);
	}



	$sql="INSERT INTO doctor_tbl(dname,email,age,degree,cname,password,image_path, create_date) VALUES('{$dname}','{$email}','{$age}','{$degree}', '{$cname}','{$password}','{$image_path}', '{$date}')";

	$insert=mysql_query($sql);

	if($insert){
		echo "Successfully Registered!";
		echo "<img src=\"images/doctor/$image_path\" />";
	}else{
		echo mysql_error();
	}
	}

?>



