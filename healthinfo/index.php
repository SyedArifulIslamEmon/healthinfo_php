<?php 
session_start();
ob_start();
require_once "db/dbconnection.php";
	require_once "layout/header.php"
?>


	<?php
		$pg=@$_GET['h']?$_GET['h']:'home';

		$page=$pg.".php";

		if(file_exists("layout/".$page)){
		require_once "layout/".$page ;

	}else{
		echo "Page Not Found";
	}


	?>

<?php


	require_once "layout/footer.php"
?>
