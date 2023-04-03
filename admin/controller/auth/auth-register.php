<?php

include("../../../db/connect.php");

// ! REGISTER USER

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
  
    if ($email && $username && $password) {
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      $stmt = $connect->prepare("INSERT INTO admin_users (email, username, password) VALUES (?, ?, ?)");
      $stmt->bind_param("sss", $email, $username, $hashed_password);
      $stmt->execute();
      header("Location: http://localhost/admin/index.php?registeration=success");
      exit();
    } else {
      header("Location: http://localhost/admin/register.php");
      exit();
    }
  }


?>