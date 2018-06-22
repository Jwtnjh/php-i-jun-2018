<?php
##Kandace Lab: Filter/Validate/Sanitize
// this is a copy of "process.php"
// Check for posted data and filter
if($_POST){
	$email = (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) ? "Email is valid: {$_POST['email']}" : 'Email is Invalid';
	$username = (filter_var($_POST['username'], FILTER_SANITIZE_STRING)) ? "Username is valid: {$_POST['username']}" : 'Username is Invalid';	
	// probably should not give feedback on password!
	$password = (filter_var($_POST['password'], FILTER_SANITIZE_STRING)) ? 'Password is valid' : 'Password is Invalid';
	
	echo htmlspecialchars($email) . '<br>';	
	echo htmlspecialchars($username) . '<br>'; 	
	// It's OK to show the password, but only to a valid user
	// Also: generally only when they're resetting or creating new password
	echo htmlspecialchars($password) . '<br>';
	// GENERAL NOTE: before you store the password ...
	//               use "password_hash()" to securely store the password
} 
