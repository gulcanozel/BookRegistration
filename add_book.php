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
    <div class="content">
        <h1>Add New Book</h1>
        <form action="save_book.php" method="post">
            <label for="book_name">Book Name:</label>
            <input type="text" id="book_name" name="book_name" required>
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" required>
            <label for="page_count">Page Number:</label>
            <input type="number" id="page_count" name="page_count" required>
            <label for="genre">Genre:</label>
            <select id="genre" name="genre" required>
                <option value="Novel">Novel</option>
                <option value="History">History</option>
                <option value="Philosophy">Philosophy</option>
                <option value="Self-Help">Self-Help</option>
                <option value="Biography">Biography</option>
                <option value="Fantasy ">Fantasy</option>
                <option value="Scientific">Scientific</option>
                <option value="Drama">Drama</option>
            </select>
            <input type="submit" value="Save">
        </form>
    </div>

    <form id="logoutForm" method="post" style="display: none;">
        <input type="hidden" name="confirm_logout" value="1">
    </form>

    </wrapper>
</div>

<footer>
    <h2> Designed by Gülcan ÖZEL</h2>
</footer>

</body>
</html>


