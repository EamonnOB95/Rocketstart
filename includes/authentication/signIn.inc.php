<?php

if(isset($_POST["submit"])) {

	$email = $_POST["email"];
	$password = $_POST["password"];

	require_once '../dbconnect.inc.php';
	require_once 'functions.inc.php';

	if (emptyInputSignIn($email, $password) !== false) {
		header("location: ../../signIn.php?error=emptyinput");
		exit();
	}

	signInUser($connection, $email, $password);
}
else {
	header("location: ../../signIn.php");
	exit();
}