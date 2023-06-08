<?php
    require('../config/session.php');

	if($_SESSION['level'] != 'Pengguna'){
		header("Location: ../admin/index.php"); 
	  }

	if(isset($_SESSION)) {
		session_destroy();
	}
    
	echo "<meta http-equiv='refresh' content='0; url=../login.php'>";
?>