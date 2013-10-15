<?php
include_once "config.php";

if( isset( $_POST[ 'uname' ] ) && isset( $_POST[ 'pass' ] ) ) {
	
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];	
	
	if( !empty( $uname ) && !empty( $pass ) ) {
		
		$query = "select username, password from login where username = '".$uname."' and password = '".$pass."'";
		
		if($queryrun = mysqli_query($conn, $query)){
			$queryrows = mysqli_num_rows($queryrun);
			
			if($queryrows == 0) {
					echo "Invalid username/password";
			}
			elseif($queryrows == 1) {
				$redirect_page = 'home.php';
				header('Location: '.$redirect_page);
				
				}
			}		
					
	}else {
		
		echo " you must supply username and password";	
	}
	
			
	}

?>