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
            <h1>All Books</h1>

            <div class="row mt-4">
                <div class="column-1">
                    <table>
                        <thead>
                        <tr>
                            <th>Book Name</th>
                            <th>Author</th>
                            <th>Page Number</th>
                            <th>Genre</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        // Veritabanı bağlantısını yapın
                        $conn = mysqli_connect("localhost", "root", "", "bookregistration");

                        // Tüm kitapları seçin
                        $query = "SELECT * FROM books";
                        $result = mysqli_query($conn, $query);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['book_name']; ?></td>
                                    <td><?php echo $row['author']; ?></td>
                                    <td><?php echo $row['page_count']; ?></td>
                                    <td><?php echo $row['genre']; ?></td>
                                    <td>
                                        <a href="update_book.php?id=<?php echo $row['id']; ?>" class="btn-update"><i class="fas fa-edit"></i> Güncelle</a>
                                        <a href="deletewithid.php?id=<?php echo $row['id']; ?>" class="btn-delete" ><i class="fas fa-trash"></i> Sil</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "<tr><td colspan='5'>Kayıtlı kitap bulunamadı.</td></tr>";
                        }

                        // Veritabanı bağlantısını kapatın
                        mysqli_close($conn);
                        ?>
                        </tbody>
                    </table>
                </div>
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