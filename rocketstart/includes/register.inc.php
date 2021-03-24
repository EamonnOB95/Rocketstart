<?php

if(isset($_POST['submit'])) {

	$email = $_POST['email'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];

	require_once 'dbconnect.inc.php';
	require_once 'functions.inc.php';

	if (emptyInputRegister($email, $password1, $password2) !== false) {
		header("location: ../register.php?error=emptyinput");
		exit();
	}

	if (invalidEmail($email) !== false) {
		header("location: ../register.php?error=invalidemail");
		exit();
	}

	if (differentPasswords($password1, $password2) !== false) {
		header("location: ../register.php?error=passwordsnotmatching");
		exit();
	}

	if (emailExists($connection, $email) !== false) {
		header("location: ../register.php?error=emailalreadyexists");
		exit();
	}

	if (weakPassword($password1) !== false) {
		header("location: ../register.php?error=weakpassword");
		exit();
	}

	createUser($connection, $email, $password1);

}
else {
	header("location: ../register.php");
	exit();
}
