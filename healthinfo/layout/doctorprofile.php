<style type="text/css">
	table#usreInfo {font-size: 20px;color: #080000;padding-left: 30px;}
	table#usreInfo tr td:first-child{font-size: 20px;font-weight: bold;}
</style>
<?php
if(!isset($_SESSION['uid'])) header('location:index.php');

$p=@$_SESSION['uid'];

$sql="SELECT did,dname,email,age,degree,cname FROM doctor_tbl where dname='{$p}'";

$query=mysql_query($sql);

$info=mysql_fetch_assoc($query);


?>
<br />
<h1>User Information</h1>

<br />
<table id="usreInfo">
	<tr>
		<td>Name</td>
		<td>:</td>
		<td><?php echo $info['dname']."<br/>";  ?></td>
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
		<td>degree</td>
		<td>:</td>
		<td><?php echo $info['degree']."<br/>"; ?> </td>
	</tr>
	<tr>
		<td>Date of Birth</td>
		<td>:</td>
		<td><?php echo $info['cname']."<br/>"; ?> </td>
	</tr>
	
</table>


<br />




<a href="?h=showpatientinfo"><input type="submit" id="loginBtn" name="submit" value="show patient info"></a> 
<a href="?h=showreport"><input type="submit" id="loginBtn" name="submit" value="View patient Report"></a> 




