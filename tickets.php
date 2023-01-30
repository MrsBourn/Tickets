<?php
	function generateRandom() {
		$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
		for ($i = 0; $i < 20; $i++) {
    		$randomString .= $characters[rand(0, strlen($characters) - 1)];
		}
		return $randomString;
	}
?>
