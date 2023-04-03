<?php


include("../../../db/connect.php");

// ! LOGIN
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  // ? Check for XSS
  $checked_email = htmlspecialchars($email);
  $checked_password = htmlspecialchars($password);

  // * Get user from database
  $stmt = $connect->prepare("SELECT * FROM admin_users WHERE email = ?");
  $stmt->bind_param("s", $checked_email);
  $stmt->execute();
  $result = $stmt->get_result();
  $user = $result->fetch_assoc();
  
  // * Verify password and login user
  if ($user && password_verify($checked_password, $user["password"])) {
  
    // * Login successful
    session_start();
    $_SESSION["user_id"] = $user["id"];
    header("Location: http://localhost/admin/index.php");
    exit();
  } else {
  
    // ! Login failed
    header("Location: http://localhost/admin/login.php?login=failed");
    exit();
  }
}

?>