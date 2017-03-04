<style type="text/css">
	table#usreInfo {font-size: 20px;color: #080000;padding-left: 30px;}
	table#usreInfo tr td:first-child{font-size: 20px;font-weight: bold;}
</style>
<?php
if(!isset($_SESSION['uid'])) header('location:index.php');

$p=@$_SESSION['uid'];

$sql="SELECT pname,email,age, sex,dob,blood,address,password,image_path, create_date FROM registration_tbl where pname='{$p}'";

$query=mysql_query($sql);

$info=mysql_fetch_assoc($query);


?>
<div  id="usreInfo">

<h1>User Information</h1>

<br />
<table>
	<tr>
		<td>Name</td>
		<td>:</td>
		<td><?php echo $info['pname']."<br/>";  ?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td>:</td>
		<td><?php echo $info['email']."<br/>"; ?> </td>
	</tr>
	<tr>
		<td>Age</td>
		<td>:</td>
		<td><?php echo $info['age']."<br/>"; ?> </td>
	</tr>
	<tr>
		<td>Sex</td>
		<td>:</td>
		<td><?php echo $info['sex']."<br/>"; ?> </td>
	</tr>
	<tr>
		<td>Date of Birth</td>
		<td>:</td>
		<td><?php echo $info['dob']."<br/>"; ?> </td>
	</tr>
	<tr>
		<td>Blood</td>
		<td>:</td>
		<td><?php echo $info['blood']."<br/>"; ?> </td>
	</tr>
	<tr>
		<td>User Address</td>
		<td>:</td>
		<td><?php echo $info['address']."<br/>"; ?> </td>
	</tr>
	
</table>
<br />
<a href="?h=doctor"><input type="submit" id="loginBtn" name="submit" value="Contact Doctor"></a> 


<a href="?h=showprescription"><input type="submit" id="loginBtn" name="submit" value="showprescription"></a> 

</div>


