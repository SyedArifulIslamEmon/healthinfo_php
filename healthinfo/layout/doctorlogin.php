<style type="text/css">
	a {/*padding: 10px 0 0 120px;font-size: 24px;*/}
</style>

<div id="memberLogin" class="fLeft">
						
						<?php
							if(@$_POST['submit']){
								require_once "db/dbconnection.php";
								//ignore sql real command
								$dname=@mysql_real_escape_string($_POST['dname']);
								$pass=@mysql_real_escape_string($_POST['password']);
								echo $name;
									//$sql="INSERT INTO login_user(name,password) VALUES('{$name}','{$pass}')";
									$sql="select * from doctor_tbl where dname='{$dname}' and password='{$pass}'";
									$query=mysql_query($sql);
									$check=mysql_num_rows($query);
									if($check>0){
										$_SESSION['uid']=$dname;
										header('location:index.php?h=doctorprofile');
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
						<form action="" method="post"  id="contact_form">
						<h1>Doctor Login</h1><br />
							<table>

								<tr>
									<td>
										<label for="dname">Doctor User Name</label>
									</td>
									<td>
										<input type="text" class="input" id="dname" name="dname"  required autofocus placeholder="Name..." />
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
									<td><a href="?h=doctor_reg"> <input type="submit" id="loginBtn" name="submit" value="Doctor Sign up"></td></a>
								</tr>
							</table>
						</form>
					<?php endif; ?>

						<div class="cLeft"></div>
					</div>

