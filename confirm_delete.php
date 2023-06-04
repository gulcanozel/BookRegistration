<?php
$conn = mysqli_connect("localhost", "root", "", "bookregistration");

if (isset($_POST['book_id'])) {
    $book_id = $_POST['book_id'];

    $query = "DELETE FROM books WHERE id = $book_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Kitap başarıyla silindi.";
    } else {
        echo "Kitap silinirken bir hata oluştu.";
    }
}

// Kitap silindiğinde index sayfasına yönlendirin
header("Location: index.php");
exit;
?>
