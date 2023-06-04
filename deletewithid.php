<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Library Book Registration System</title>
    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        function confirmLogout() {
            var result = confirm("Çıkış yapmak istediğinize emin misiniz?");
            if (result) {
                document.getElementById("logoutForm").submit();
            }
        }
    </script>

</head>

<header>
    <h2>Library Book Registration System</h2>
</header>

<body>
<div class="container">
    <div class="sidebar">
        <h2><span>Book Registration</span></h2>
        <ul>
            <li><a href="index.php"><i class="fas fa-book"> All Books</i></a></li>
            <li><a href="add_book.php"><i class="fas fa-plus"> Add New Book</i></a></li>
            <li><a href="update_book.php"><i class="fas fa-pen-to-square"> Update Book</i></a></li>
            <li><a href="delete_book.php"><i class="fas fa-trash"> Delete Book</i></a></li>
            <li><a href="logout_action.php" onclick="return confirm('Çıkış yapmak istediğinize emin misiniz?')"><i class="fas fa-xmark"> Log out</i></a></li>
        </ul>
    </div>
    <wrapper>
        <h2>Delete Book</h2>
        <div class="content">

            <?php

            $conn = mysqli_connect("localhost", "root", "", "bookregistration");


            if (isset($_GET['id'])) {
                $book_id = $_GET['id'];


                $query = "SELECT * FROM books WHERE id = $book_id";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    ?>
                    <h3><?php echo $row['book_name']; ?> adlı kitabı silmek istediğinize emin misiniz?</h3>
                    <form action="confirm_delete.php" method="post">
                        <input type="hidden" name="book_id" value="<?php echo $row['id']; ?>">
                        <input type="submit" value="Sil">
                    </form>
                    <?php
                } else {
                    echo "Kitap bulunamadı.";
                }
            } else {
                echo "Geçersiz kitap ID'si.";
            }


            mysqli_close($conn);
            ?>
        </div>

        <form id="logoutForm" method="post" style="display: none;">
            <input type="hidden" name="confirm_logout" value="1">
        </form>
    </wrapper>
</div>

<footer>
    <h2>Designed by Gülcan ÖZEL</h2>
</footer>

</body>
</html>
