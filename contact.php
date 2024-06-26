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
    $gmail = $_POST['email'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];
echo $fname;

mysqli_query($conn,"INSERT INTO contact (fname, lname, email, country , subject) VALUES ('$fname', '$lname', '$gmail', '$country', '$subject')");



    echo "Registration successful!";

}
$conn->close();
?>
