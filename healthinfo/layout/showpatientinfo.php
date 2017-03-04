
<br />
<h1 align="center">User Registration Information</h1>
<style type="text/css">
	/*table tr:nth-child(odd){
		background-color:red;}
	table tr:nth-child(even){
		background-color:green;}*/
		table {border: 2px solid #382B35;}
	table tr td {font-size: 12px;padding: 2px;}
		table tr th {font-weight: bold;background: #5C5EA4;color: #E1D1D6;font-size: 14px;}
</style>



<?php
require_once "db/dbconnection.php";
$sql="SELECT pproblem_tbl.did as 'Doctor Id',dname,registration_tbl.pname as 'Pname',pid,description,pproblem_tbl.create_date as 'create_date' FROM pproblem_tbl inner join doctor_tbl on doctor_tbl.did=pproblem_tbl.did  inner join registration_tbl on registration_tbl.pname=pproblem_tbl.pname  ";
$query=mysql_query($sql);

$i=1;
echo '<table border="1" width="700px">';
echo '<tr><th>Doctor id</th><th>Doctor Name</th><th>Patient Name</th><th>Patient Id</th><th>description</th><th>Create Date</th><th> Update Report</th></tr>';

while($row=mysql_fetch_row($query)){

	if($i%2==0){
		echo "<tr bgcolor='#C5D7E5'>";
	}else{
		echo "<tr bgcolor='#CECFE1'>";
	}
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "<td>".$row[4]."</td>";
		echo "<td>".$row[5]."</td>";
		echo '<td><a href=""?r=update&uid='. $row[0].'" target ="_blank">Edit</a> : <a href="?a=delete&uid='. $row[0].'">Delete</a></td>';
	echo "</tr>";
	$i++;
}
echo '</table>';
?>
<br />
<a href="?h=prescription"><input type="submit" id="loginBtn" name="submit" value="Write prescription"></a> 
