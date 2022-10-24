

<?php
$servername = "localhost";
$username = "root";
$password = "";

// Connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,"students_db");

// For checking if connection is
// successful or not
if ($conn->connect_error) {
  die("Connection failed: "
      . $conn->connect_error);
}

?>
