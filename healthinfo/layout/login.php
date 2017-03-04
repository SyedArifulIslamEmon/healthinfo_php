<style type="text/css">
	a {/*padding: 10px 0 0 120px;font-size: 24px;*/}
</style>

<div id="memberLogin" class="fLeft">
						
						<?php
							if(@$_POST['submit']){
								require_once "db/dbconnection.php";
								//ignore sql real command
								$pname=@mysql_real_escape_string($_POST['pname']);
								$pass=@mysql_real_escape_string($_POST['password']);
								echo $name;
									//$sql="INSERT INTO login_user(name,password) VALUES('{$name}','{$pass}')";
									$sql="select * from registration_tbl where pname='{$pname}' and password='{$pass}'";
									$query=mysql_query($sql);
									$check=mysql_num_rows($query);
									if($check>0){
										$_SESSION['uid']=$pname;
										header('location:index.php?h=patientprofile');
									}else{
										echo "Username or Password didn't match!";
									}
								}
								if(@$_SESSION['uid']){
									echo '<a href="?h=logout">
									<h1>Hello <br >Welcome  '.$_SESSION['uid'].'</h1> <br />
									<input type="submit" name="searchBtn" value="Logout"></a>';

								}
					if(!@$_SESSION['uid']):
				?>
						<form action="" method="post" id="contact_form">
							<h1>Member Login</h1><br />
							<table>
								<tr>
									<td>
										<label for="pname">User Name</label>
									</td>
									<td>
										<input type="text" class="input" id="pname" name="pname"  required autofocus placeholder="Name..." />
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
								<tr>
									<td></td>
									<td><input type="submit" id="loginBtn" name="submit" value="Login"></td>
								</tr>
								<tr>
									<td></td>
									<td>Create New Account</td>
								</tr>
								<tr>
									<td></td>
									<td><a href="?h=registration"> <input type="submit" id="loginBtn" name="submit" value="Sign up"></td></a>
								</tr>
							</table>
							
						</form>
					<?php endif; ?>

						<div class="cLeft"></div>
					</div>

