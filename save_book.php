<?php
$conn = mysqli_connect("localhost", "root", "", "bookregistration");

$book_name = $_POST['book_name'];
$author = $_POST['author'];
$page_count = $_POST['page_count'];
$genre = $_POST['genre'];

$query = "INSERT INTO books (book_name, author, page_count, genre) VALUES ('$book_name', '$author', '$page_count', '$genre')";
mysqli_query($conn, $query);

mysqli_close($conn);

header("Location: index.php");
exit;
?>
