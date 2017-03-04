<?php
require_once "db/dbconnection.php";


$id=@$_GET['uid'];

if(@$_POST['update']){
	$updSql="update register set simptoms='{$_POST['simptoms']}',type='{$_POST['type']}', test='{$_POST['test']}',drug='{$_POST['drug']}' where id={$_POST['prid']}";

	$updQuery=mysql_query($updSql);

	if($updQuery){
		echo "Successfully Updated!";
	}else{
		echo mysql_error();
	}
}


$sql="SELECT  prid, simptoms,type, test,drug from prescription_tbl where prid={$id}";

$query=mysql_query($sql);

$rec=mysql_fetch_assoc($query);


?>


<form action="" method="post" enctype="multipart/form-data" id="contact_form" class="fLeft">
		<h1>Prescription:</h1><br />
			<table>
				<tr>
					<td><label for="simptoms">Symptoms:</label></td>
					<td><input type="text" id="simptoms" class="input"  name="simptoms"  required autofocus placeholder="Symptoms..."  value="<?php echo $rec['simptoms']; ?>"></td>
				</tr>
				<tr>
					<td><label for="test">Recommended Test:</label></td>
					<td><input type="text"  name="test" id="test" class="input"  required autofocus placeholder="Recommended Test..."  value="<?php echo $rec['test']; ?>"></td>
				</tr>
				<tr>
					<td><label for="drug">Recommended Drug:</label></td>
					<td><input type="text"  name="drug" id="drug" class="input"  required autofocus placeholder="Recommended Drug:.."  value="<?php echo $rec['drug']; ?>"></td>
			
				</tr><tr>

					<td>&nbsp;</td>
					<td><input type="submit" name="update" value="submit" id="" class="input" ></td>
				</tr>
			</table>
		</form>

