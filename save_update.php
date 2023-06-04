<?php

$conn = mysqli_connect("localhost", "root", "", "bookregistration");

$book_id = $_POST['book_id'];
$book_name = $_POST['book_name'];
$author = $_POST['author'];
$page_count = $_POST['page_count'];
$genre = $_POST['genre'];

$query = "UPDATE books SET book_name = '$book_name', author = '$author', page_count = '$page_count', genre = '$genre' WHERE id = $book_id";
mysqli_query($conn, $query);

mysqli_close($conn);


header("Location: index.php");
exit;
?>
