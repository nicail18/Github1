<?php
	 
	 //print_r($_POST);
	 $user = $_POST['username'];
	 $pass = $_POST['password'];
	 
	 if( strlen($user) == 0 || strlen($pass) == 0){
		//incomplete form data
		header("Location: form.php?error");
	 
	 }
	 else{
		echo "Welcom $user. I know your password!";
	 }
?>