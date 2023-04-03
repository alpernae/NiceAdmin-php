<?php
// ! block user the access without login
session_start();

if (!isset($_SESSION["user_id"])) {
  // Kullanıcı giriş yapmamış, dashboard sayfasına erişime izin verilmez
  header("Location: http://localhost/admin/login.php");
  exit();
}
?>