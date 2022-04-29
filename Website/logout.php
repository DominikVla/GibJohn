<?php
session_start(); // Start the session
// Filename: logout.php

// Unset all Session Variables
session_unset();

// Destroy the Session and redirect to login.php
session_destroy();
header("Location: login.php");
?>