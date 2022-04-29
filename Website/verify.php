<?php
session_start(); // Starting up Session
// FileName: verify.php

// Class containing all properties and methods needed for Login
include 'include/classLogins.php';

// Setting login as the new keyword, this allows us to use the methods set up in the Credentials class
$login = new Credentials();

// Assigning class properties to the user inputs via methods
$login->set_email($_POST['email']);
$login->set_password($_POST['password']);

// Running the method that sanitises the inputs
$login->sanitiseLogin();

// Running the method that checks for entered credentials in the database, if any are found the variable valid becomes true
$login->login();

//Runing the method that fetches the name
//$login->get_name();

// Setting up swtich cases to be guided by the session variable valid
$_SESSION['valid'] = "N/A";
switch ($_SESSION['valid']) {
	// If Valid = True
	case True:
		// Session variable for logged in is set to being logged in (named like that in order so that no other website sessions interfere)
		$_SESSION['GibJohnLogged(XvE54F2)'] = "Logged In true";

		// Assigning Email to session variable to be used else where
		$_SESSION['email'] = $login->get_email();

		// redirect to site and stops the code
		header("Location: LearningResources.php");
		break;

	// If valid = false
	case False:
		// Set session variable to logged out
		$_SESSION['GibJohnLogged(XvE54F2)'] = "Logged Out true";

		// Set error message
		$_SESSION['errorMsg'] = "Invalid Username or Password";

		// Redirect to login
		header("Location: login.php");
		break;

	// Used for incase something breaks and the session variable doesn't work
	default:
		// Set session variable to logged out
		$_SESSION['GibJohnLogged(XvE54F2)'] = "Logged out true";

		// Provide an error message
		$_SESSION['errorMsg'] = "An error has occurred, please try again later";
		
		// Redirect to login
		header("Location login.php");
		break;
}
?>