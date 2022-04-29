<?php
// FileName: studentTable.php
// Details to login to the database
include 'include/dbDetails.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname2);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Select SQL statement and execute command
$sql = "SELECT ID, FName, LName, grade, onTrack FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table id='myTable' class='table table-striped' >";
  echo "<thead><tr><th>ID #</th><th>Firstname</th><th>Lastname</th><th>Grade</th><th>onTrack</th><th>Actions</th></tr></thead>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["ID"]."</td><td>".$row["FName"]." </td><td>".$row["LName"]."</td><td>".$row["grade"]."</td><td>".$row["onTrack"]."</td><td><a href='delete.php?id=".$row['ID']."'>Send Support Quiz</a></td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>