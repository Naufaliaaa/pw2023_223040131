<?php
    require('../config/session.php');

	if($_SESSION['level'] != 'Admin'){
		header("Location: ../user/index.php"); 
	  }

	if(isset($_SESSION)) {
		session_destroy();
	}
    
	echo "<meta http-equiv='refresh' content='0; url=../login.php'>";
?>