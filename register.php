<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sufyan";

$conn =mysqli_connect($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gmail = $_POST['gmail'];
$pass = $_POST['password'];
$check = $_POST['gender'];
echo $fname;

mysqli_query($conn,"INSERT INTO resgister (fname, lname, email, password, gender) VALUES ('$fname', '$lname', '$gmail', '$pass', '$check')");



    echo "Registration successful!";

}
$conn->close();
?>
