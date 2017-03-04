
<?php
if(!isset($_SESSION['uid'])) header('location:index.php');

$p=@$_SESSION['uid'];

$sql="SELECT pname,dname,tname,image, create_date FROM report_tbl where dname='{$p}'";
$query=mysql_query($sql);
$info=mysql_fetch_assoc($query);
?>

<table id="usreInfo">
	<tr>
		<td>Pathint Name</td>
		<td>:</td>
		<td><?php echo $info['pname']."<br/>";  ?></td>
	</tr>
	<tr>
		<td>Doctor Name</td>
		<td>:</td>
		<td><?php echo $info['dname']."<br/>";  ?></td>
	</tr>
	<tr>
		<td>Test Name</td>
		<td>:</td>
		<td><?php echo $info['tname']."<br/>";  ?></td>
	</tr>
	<tr>
		<td>create_date</td>
		<td>:</td>
		<td><?php echo $info['create_date']."<br/>"; ?> </td>
	</tr>
	<tr>
		<td>Image</td>
		<td>:</td>
		<td>
			<span class='zoom' id='ex1'>
		<img src="<?php echo "images/report/".$info['image']; ?>" alt="shart" width="400px" height="400px" > 
		</span>
		</td>
	</tr>
</table>

