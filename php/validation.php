<?php

// user validation account
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["username-user"]) && isset($_POST["password-user"])) {
    $username_user = $_POST["username-user"];
    $password_user = $_POST["password-user"];

    $valid_username_user = "Hai";
    $valid_password_user = "123";

    $user_next_page = "../html/index.html";
    $user_login_page = "../html/login.html#user";

    if ($username_user == $valid_username_user && $password_user == $valid_password_user) {
      echo '<script>';
      echo 'alert("Login successful!");';
      echo 'window.location.href = "' . $user_next_page . '";';
      echo '</script>';
    } else {
      echo '<script>';
      echo 'alert("Invalid login!");';
      echo 'window.location.href = "' . $user_login_page . '";';
      echo '</script>';
    }
  } 
  
  // admin validation account
  elseif (isset($_POST["username-admin"]) && isset($_POST["password-admin"])) {
    $username_admin = $_POST["username-admin"];
    $password_admin = $_POST["password-admin"];

    $valid_username_admin = "Denta";
    $valid_password_admin = "123";

    $admin_next_page = "../html/admin.html";
    $admin_login_page = "../html/login.html#admin";

    if ($username_admin == $valid_username_admin && $password_admin == $valid_password_admin) {
      echo '<script>';
      echo 'alert("Login successful!");';
      echo 'window.location.href = "' . $admin_next_page . '";';
      echo '</script>';
      exit;
    } else {
      echo '<script>';
      echo 'alert("Invalid login!");';
      echo 'window.location.href = "' . $admin_login_page . '";';
      echo '</script>';
    }
  }
}

?>
