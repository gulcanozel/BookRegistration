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
            <li><a href="add_book.html"><i class="fas fa-plus"> Add New Book</i></a></li>
            <li><a href="update_book.php"><i class="fas fa-pen-to-square"> Update Book</i></a></li>
            <li><a href="delete_book.php"><i class="fas fa-trash"> Delete Book</i></a></li>
            <li><a href="logout_action.php" onclick="return confirm('Çıkış yapmak istediğinize emin misiniz?')"><i class="fas fa-xmark"> Log out</i></a></li>
        </ul>
    </div>
<wrapper>
    <div class="content">
        <h1>Update Book</h1>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "bookregistration");


        if (isset($_GET['id'])) {
            $book_id = $_GET['id'];

            // Kitabı veritabanından seçin
            $query = "SELECT * FROM books WHERE id = $book_id";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                ?>
                <form action="save_update.php" method="post">
                    <input type="hidden" name="book_id" value="<?php echo $row['id']; ?>">
                    <label for="book_name">Kitap Adı:</label>
                    <input type="text" id="book_name" name="book_name" value="<?php echo $row['book_name']; ?>" required>
                    <label for="author">Yazar:</label>
                    <input type="text" id="author" name="author" value="<?php echo $row['author']; ?>" required>
                    <label for="page_count">Sayfa Sayısı:</label>
                    <input type="number" id="page_count" name="page_count" value="<?php echo $row['page_count']; ?>" required>
                    <label for="genre">Tür:</label>
                    <select id="genre" name="genre" required>
                        <option value="Novel" <?php if ($row['genre'] == 'Novel') echo 'selected'; ?>>Novel</option>
                        <option value="History"<?php if ($row['genre'] == 'History') echo 'selected'; ?>>History</option>
                        <option value="Philosophy"<?php if ($row['genre'] == 'Philosophy') echo 'selected'; ?>>Philosophy</option>
                        <option value="Self-Help"<?php if ($row['genre'] == 'Self-Help') echo 'selected'; ?>>Self-Help</option>
                        <option value="Biography"<?php if ($row['genre'] == 'Biography') echo 'selected'; ?>>Biography</option>
                        <option value="Fantasy "<?php if ($row['genre'] == 'Fantasy') echo 'selected'; ?>>Fantasy</option>
                        <option value="Scientific"<?php if ($row['genre'] == 'Scientific') echo 'selected'; ?>>Scientific</option>
                        <option value="Drama"<?php if ($row['genre'] == 'Drama') echo 'selected'; ?>>Drama</option>
                    </select>
                    <input type="submit" value="Güncelle">
                </form>
                <?php
            } else {
                echo "Kitap bulunamadı.";
            }
        } else {
            echo "You can do this from the ALL BOOKS page.";
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
