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
    $pass = $_POST['password'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $Games = $_POST['games'];
    echo $fname;

mysqli_query($conn,"INSERT INTO challenge (fname, lname, email, password, gender, phone, games) VALUES ('$fname', '$lname', '$gmail', '$pass', '$gender', 'phone', 'games')");



    echo "Challenged successful!";

}
$conn->close();
?>
