<?php
// FileName: classLogins.php
// Class is for getting user inputs during register and login, sanitise user inputs and interact with database

/*
Currently Effects:
login.php
verify.php
register.php
addUser.php
*/


class Credentials {
	// Properties
	public $fname;
	public $lname;
	public $email;
	public $password;

	// Methods

	// Set and return $fname
	function set_fname($fname) {
		$this->fname = $fname;
	}
	function get_fname() {
		return $this->fname;
	}

	// Set and return $lname
	function set_lname($lname) {
		$this->lname = $lname;
	}
	function get_lname() {
		return $this->lname;
	}

	// Set and Return $email
	function set_email($email) {
		$this->email = $email;
	}
	function get_email() {
		return $this->email;
	}

	//Set and Return Password
	function set_password($password) {
		$this->password = $password;
	}
	function get_password() {
		return $this->password;
	}

	//Sanitise Inputs
	function SanitiseAll() {
		$this->fname = htmlspecialchars($this->fname);
		$this->lname = htmlspecialchars($this->lname);
		$this->email = htmlspecialchars($this->email);
		$this->password = htmlspecialchars($this->password);
	}

	//Hash password
	function passwordHash() {
		$this->password = password_hash($this->password, PASSWORD_DEFAULT);
	}

	// Sanitisation for when users login
	function sanitiseLogin() {
		$this->email = htmlspecialchars($this->email);
		$this->password = htmlspecialchars($this->password);
	}

	// Connect to the data base and insert values (Register)
	function register() {
		include 'dbDetails.php';
		try {
		  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		  // set the PDO error mode to exception
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "INSERT INTO gjt_logins (fname, lname, accType, email, password)
		  VALUES ('$this->fname', '$this->lname','Student', '$this->email', '$this->password')";
		  // use exec() because no results are returned
		  $conn->exec($sql);
		  echo "New record created successfully";
		} catch(PDOException $e) {
		  echo $sql . "<br>" . $e->getMessage();
		}

		$conn = null;
	}

	// Connect to a data base and insert values to the student database
	function setStudent() {
		include 'dbDetails.php';
		$dbname = 'gibjohn_students';
		try {
		  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		  // set the PDO error mode to exception
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "INSERT INTO students (FName, LName, grade, onTrack, supportExam, email)
		  VALUES ('$this->fname', '$this->lname', 'N/A', 'N/A', 'No', '$this->email')";
		  // use exec() because no results are returned
		  $conn->exec($sql);
		  echo "New record created successfully";
		} catch(PDOException $e) {
		  echo $sql . "<br>" . $e->getMessage();
		}
	}

	// Connect to the Database to read values to find a login
	function login() {
		include 'dbDetails.php';
		try {
		  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $stmt = $conn->prepare("SELECT FName, LName, email, password, accType FROM gjt_logins WHERE email = '$this->email'");
		  $stmt->execute();
		  $result = $stmt->fetch(PDO::FETCH_ASSOC);
		  $hashedPass = $result['password'];
		  $passwordCheck = password_verify($this->password,$hashedPass);
		  if ($passwordCheck) {
		  	// set variable name to the name
		  	$_SESSION['name'] = $result['FName'] . ' ' . $result['LName'];
		  	$_SESSION['valid'] = True;
		  	$_SESSION['Privalage'] = $result['accType'];
		  }
		  $conn = null;
		} catch(PDOException $e) {
			echo 'Not found';
			$_SESSION['valid'] = False;
			$conn = null;
		}
	}
}
?>