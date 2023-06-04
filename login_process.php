<?php

$conn = mysqli_connect("localhost", "root", "", "bookregistration");


$username = $_POST['username'];
$password = $_POST['password'];


$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {

    header("Location: index.php");
    exit;
} else {

    echo "Username or password is wrong.";
}


mysqli_close($conn);
?>
