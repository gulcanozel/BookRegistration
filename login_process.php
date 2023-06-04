<?php
// Veritabanı bağlantısını yapın
$conn = mysqli_connect("localhost", "root", "", "bookregistration");

// Formdan gelen verileri alın
$username = $_POST['username'];
$password = $_POST['password'];

// Kullanıcıyı veritabanında kontrol edin
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // Giriş başarılı, index sayfasına yönlendirin veya istenen işlemi yapın
    header("Location: index.php");
    exit;
} else {
    // Giriş başarısız, hata mesajını görüntüleyin veya tekrar login sayfasına yönlendirin
    echo "Kullanıcı adı veya şifre hatalı.";
}

// Veritabanı bağlantısını kapatın
mysqli_close($conn);
?>
