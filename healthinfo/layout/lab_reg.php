<style type="text/css">
	a {/*padding: 10px 0 0 120px;font-size: 24px;*/}
</style>

<div id="memberLogin" class="fLeft">
						<h1>Members</h1><br />
						<?php
							if(@$_POST['submit']){
								require_once "db/dbconnection.php";
								//ignore sql real command
								$lname=@mysql_real_escape_string($_POST['lname']);
								$password=@mysql_real_escape_string($_POST['password']);
								echo $lname;
									//$sql="INSERT INTO login_user(name,password) VALUES('{$name}','{$pass}')";
									$sql="select * from labretorist_tbl where lname='{$lname}' and password='{$password}'";
									$query=mysql_query($sql);
									$check=mysql_num_rows($query);
									if($check>0){
										$_SESSION['uid']=$lname;
										header('location:index.php?h=lab_report');
									}else{
										echo "Wrong username or password";
									}
								}
								if(@$_SESSION['uid']){
									echo '<a href="?h=logout">
									<h1>Hello <br >Welcome  '.$_SESSION['uid'].'</h1> <br />
									<input type="submit" name="searchBtn" value="Logout"></a>';

								}
					if(!@$_SESSION['uid']):
				?>
						<form action="" method="post">
							<table>
								<tr>
									<td>
										<label for="dname">Labertory User Name</label>
									</td>
									<td>
										<input type="text" class="input" id="dname" name="lname"  required autofocus placeholder="Name..." />
									</td>
								</tr>
								<tr>
									<td>
										<label for="password">Password</label>
									</td>
									<td>
										<input type="password" class="input" id="password" name="password"  required autofocus placeholder="Password...">
									</td>
								</tr>
							</table>
							<input type="submit" id="loginBtn" name="submit" value="Login">
						</form>
					<?php endif; ?>

						<div class="cLeft"></div>
					</div>

<a href="?h=doctor_reg">Doctor Registration</a>




<div  id="contact_form" class="fLeft">
<?php 

if (empty($_POST) ===false) {
	echo "Labretorist Registration";
}

if(@$_POST['submit']){
	$selCat=@$_POST['selCat'];
	if($selCat=="men"){

	}
}

 ?>

<form action="" method="post" enctype="multipart/form-data" id="contact_form" class="fLeft">
		<h1>Labretorist Registration:</h1><br />
			<table>
				
				<tr>
					<td><label for="lname">Name:</label></td>
					<td><input type="text" id="lname" class="input"  name="lname"  required autofocus placeholder="Name:..."></td>
				</tr>
				
				<tr>
					<td><label for="email">Email:</label></td>
					<td><input type="text" id="email" class="input"  name="email"  required autofocus placeholder="Email..."></td>
				</tr>
				<tr>
					<td><label for="diagname">Diag.Name:</label></td>
					<td><input type="text" id="diagname" class="input"  name="diagname"  required autofocus placeholder="Diag.Name:..."></td>
				</tr>
				<tr>
					<td><label for="password">Password:</label></td>
					<td><input type="text"  name="password" id="password" class="input"  required autofocus placeholder="Password:..."></td>
				</tr>
				<tr>
					<td><label for="image_path">image_path:</label></td>
					<td><input type="file" id="image_path"  class="input" name="image_path"  required autofocus placeholder="image_path:..."></td>
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
	require_once "shared/dbconnection.php";

	//ignore sql real command
	$lname=@mysql_real_escape_string($_POST['lname']);
	$email=@mysql_real_escape_string($_POST['email']);
	$diagname=@mysql_real_escape_string($_POST['diagname']);
	$password=@mysql_real_escape_string($_POST['password']);
	$date=date('Y-m-d');
	//$image_path=@mysql_real_escape_string($_POST['image_path']);
	//$status=@mysql_real_escape_string($_POST['status']);

	$supportedimage_path=array('jpg', 'png', 'gif', 'jpeg');
	$img=pathinfo($_FILES['image_path']['name']);
	$ext=$img['extension'];
	$image_path="img_".uniqid().".".$ext;

	if(in_array($ext, $supportedimage_path)){
		move_uploaded_file($_FILES['image_path']['tmp_name'], "images/labretory/".$image_path);
	}



	$sql="INSERT INTO labretorist_tbl(lname,email,diagname,password,image_path, create_date) VALUES('{$lname}','{$email}','{$diagname}','{$password}','{$image_path}', '{$date}')";

	$insert=mysql_query($sql);

	if($insert){
		echo "Successfully Registered!";
		echo "<img src=\"images/labretory/$image_path\" />";
	}else{
		echo mysql_error();
	}
	}

?>



