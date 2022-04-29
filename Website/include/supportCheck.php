<?php
// FileName: supportCheck.php
include 'dbDetails.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname2);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Exexute SQL statement and save the result in a session variable
try {
 $sql = "SELECT supportExam FROM Students WHERE email='".$_SESSION['email']."'";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 $_SESSION['SupportExam'] = $row['supportExam']; 
} catch (Exception $e) {
  echo "An Error Occured";
}
// Close connection
$conn->close();
?>