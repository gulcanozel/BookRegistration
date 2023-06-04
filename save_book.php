<?php
// Veritabanı bağlantısını yapın
$conn = mysqli_connect("localhost", "root", "", "bookregistration");

// Formdan gelen verileri alın
$book_name = $_POST['book_name'];
$author = $_POST['author'];
$page_count = $_POST['page_count'];
$genre = $_POST['genre'];

// Kitabı veritabanına kaydedin
$query = "INSERT INTO books (book_name, author, page_count, genre) VALUES ('$book_name', '$author', '$page_count', '$genre')";
mysqli_query($conn, $query);

// Veritabanı bağlantısını kapatın
mysqli_close($conn);

// Yeni kitap eklendiğinde index sayfasına yönlendirin
header("Location: index.php");
exit;
?>
