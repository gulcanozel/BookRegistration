<?php
session_start();

// Oturumu sonlandır
session_destroy();

// Oturum verilerini temizle
$_SESSION = array();

// Kullanıcıyı giriş sayfasına yönlendir
header("Location: login.php");
exit;
?>