<?php
	$con = mysqli_connect('localhost', 'root', '', 'db');
	if (isSet($_GET['emailButton']) && isSet($_GET['email'])) {
		$email = $_GET['email'];
		$email = strip_tags($email);
		$email = mysqli_real_escape_string($email);
		$ticket = generateRandom();
		$q = mysqli_query($con, "SELECT * FROM `users` WHERE `email`='$email'");
		if ($q && mysqli_num_rows($q) > 0) {
			$accountID = mysqli_fetch_array($q)['id'];
			$qq = mysqli_query($con, "INSERT INTO `tickets` VALUES ('', '$email', '$accountID')");
			if ($qq) {
				mail($email, 'Ticket ID', 'Your ticket ID for password reset form is: ' . $ticket);
				echo 'Emailed with a ticket!';
			}else{
				echo 'Unable to create ticket.';
			}
		}else{
			echo 'No account found!';
		}
	}

	//Generate ticket function here...
?>
