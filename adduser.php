<?php
session_start();


// open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', '', 'perfectcup');

// Output any connection error
if ($mysqli->connect_error) {
    # code...
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error );
}

$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
$lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);

//VALIDATION


?>