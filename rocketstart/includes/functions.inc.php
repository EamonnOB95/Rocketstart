<?php

function emptyInputRegister($email, $password1, $password2) {
	$result;

	if(empty($email) || empty($password1) || empty($password2)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function invalidEmail($email) {
	$result;

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function differentPasswords($password1, $password2) {
	$result;

	if($password1 !== $password2) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function emailExists($connection, $email) {
	// Set up query with placeholder (No user data)
	$query = "SELECT * FROM users WHERE usersEmail = ?;";
	// Create a statement to pass to the db
	$stmt = mysqli_stmt_init($connection);

	// Check if theres an error with the prepared statement and query
	if(!mysqli_stmt_prepare($stmt, $query)) {
		header("location: ../register.php?error=stmtfailed");
		exit();
	}

	// Since no error, bind user data to prepared statement
	mysqli_stmt_bind_param($stmt, "s", $email);
	// Execute statement
	mysqli_stmt_execute($stmt);

	// Put the returned data into a variable
	$returnedSql = mysqli_stmt_get_result($stmt);

	// If the email exists then return it
	if($row = mysqli_fetch_assoc($returnedSql)) {
		return $row;
	}
	// Else return false
	else {
		$result = false;
		return $result;
	}

	// Close the statement
	mysqli_stmt_close();
}

function weakPassword($password1) {
	$result;

	$uppercase = preg_match('@[A-Z]@', $password1);
	$lowercase = preg_match('@[a-z]@', $password1);
	$number    = preg_match('@[0-9]@', $password1);

	if(!$uppercase || !$lowercase || !$number) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function createUser($connection, $email, $password1) {
	// Set up query with placeholder (No user data)
	$query = "INSERT INTO users(usersEmail, usersPassword) VALUES(?, ?);";
	// Create a statement to pass to the db
	$stmt = mysqli_stmt_init($connection);

	// Check if theres an error with the prepared statement and query
	if(!mysqli_stmt_prepare($stmt, $query)) {
		header("location: ../register.php?error=stmtfailed");
		exit();
	}

	// Hash password
	$hashedPassword = password_hash($password1, PASSWORD_DEFAULT);

	// Since no error, bind user data to prepared statement
	mysqli_stmt_bind_param($stmt, "ss", $email, $hashedPassword);
	// Execute statement
	mysqli_stmt_execute($stmt);
	// Close the statement
	mysqli_stmt_close();

	header("location: ../register.php?error=none");
	exit();
}

function emptyInputSignIn($email, $password) {
	$result;

	if(empty($email) || empty($password)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function signInUser($connection, $email, $password) {
	// Use true condition of emailExists to return row of valid user from users table
	$userExists = emailExists($connection, $email);

	if ($userExists === false) {
		header("location: ../signIn.php?error=userdoesntexist");
		exit();
	}

	$hashedPassword = $userExists["usersPassword"];
	$passwordCheck = password_verify($password, $hashedPassword);

	if ($passwordCheck === false) {
		header("location: ../signIn.php?error=invalidpassword");
		exit();
	}
	// If users password matches then begin session.
	else if ($passwordCheck === true) {
		session_start();
		$_SESSION["userID"] = $userExists["usersID"];
		header("location: ../index.php");
		exit();
	}
}