<?php
	if (isSet($_GET['email'])) {
	$email = $_GET['email'];
	if (strlen($email) > 5) {
if (strpos('@', $email) !== FALSE) {
	if (strpos('.', $email) !== FALSE) {
	
}else
	echo 'Email doesn\'t contain a . symbol! Invalid.';
}else
	echo 'Email doesn\'t contain an @ symbol! Invalid.';
	}else
		echo 'Email too short!';
}
?>
<form action='reset.php' method='GET'>
	<input type='text' placeholder='Email address' name='email' />
	<input type='submit' value='Send Reset Email' name='emailButton' />
</form>
