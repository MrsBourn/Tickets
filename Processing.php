<?php
	if (isSet($_POST['resetPassword'])) {
if ($_POST['password'] == $_POST['password2']) {
	$pass = md5(strip_tags($_POST['password']));
	$uID = ticketValid();
if ($uID >= 1) {
$qq = mysqli_query($con, "UPDATE `users` SET `password`='$pass' WHERE `id`='$uID'");
if ($qq) {
	echo 'Updated password successfully!';
}else{
	echo 'Failed.';
}	
}
}
	}

	function ticketValid() {
	if (isSet($_POST['ticket'])) {
		$ticket = strip_tags($_POST['ticket']);
		$q = mysqli_query($con, "SELECT * FROM `tickets` WHERE `Ticket`='$ticket'");
		if ($q && mysqli_num_rows($q) > 0) {
			return (int) mysqli_fetch_array($con, $q)['User'];
		}
	}
	return 0;
}
?>
