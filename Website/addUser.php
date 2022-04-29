<?php
// FileName: addUser.php
// Class containing all properties and methods needed for Register
include 'include/classLogins.php';

// Setting registration as the new keyword, this allows us to use the methods set up in the Credentials class
$registration = new Credentials();

// Assigning class properties to the user inputs via methods
$registration->set_fname($_POST['fname']);
$registration->set_lname($_POST['lname']);
$registration->set_email($_POST['email']);
$registration->set_password($_POST['password']);

// Running the method that sanitises the inputs
$registration->sanitiseAll();

// Execting the method that hashes the password to store it securely on the database
$registration->passwordHash();

// Running the method that uploads the inputs to the database
$registration->register();

// Executing Method that uploads inputs into the student database
$registration->setStudent();

// redirect to login page
header('Location: login.php')
?>