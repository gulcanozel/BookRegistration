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
        <h2>Please select the book you want to delete</h2>
        <div class="content">
            <?php

            $conn = mysqli_connect("localhost", "root", "", "bookregistration");

            // Tüm kitapları seçin
            $query = "SELECT * FROM books";
            $result = mysqli_query($conn, $query);


            if (mysqli_num_rows($result) > 0) {
                echo "<form action='confirm_delete.php' method='post'>";
                echo "<select name='book_id'>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['id'] . "'>" . $row['book_name'] . "</option>";
                }
                echo "</select>";
                echo "<input type='submit' value='Delete'>";
                echo "</form>";
            } else {
                echo "Kitap bulunamadı.";
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
