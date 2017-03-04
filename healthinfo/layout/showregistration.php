
<style type="text/css">
	/*table tr:nth-child(odd){
		background-color:red;}
	table tr:nth-child(even){
		background-color:green;}*/
		table tr td {font-size: 12px;padding: 2px;}
		table tr th {font-weight: bold;background: #5C5EA4;color: #E1D1D6;font-size: 14px;}
</style>
<br/>
<h1>Patient Details</h1>
<br/>
<?php
require_once "db/dbconnection.php";
$sql="SELECT * from registration_tbl ";
$query=mysql_query($sql);

$i=1; 
echo '<table border="1" width="700px">'; 	 	 	 	 	 	 	 
echo '<tr><th>pid</th><th>Patient Name</th><th>Email</th><th>Age</th>
<th>Sex</th><th>DOB</th><th>Blood Group</th><th>Address</th><th>Action</th></tr>';
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
		echo "<td>".$row[6]."</td>";
		echo "<td>".$row[7]."</td>";
		

		echo '<td><a href="edit.php?uid='. $row[0].'" target ="_blank">Edit</a> : <a href="?a=delete&uid='. $row[0].'">Delete</a></td>';
	echo "</tr>";
	$i++;
}
echo '</table>';