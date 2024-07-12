<?php 
session_start();

require '../function/connection.php';

if (isset($_SESSION['login'])) {
    header("Location: ../page/dashboard.php");
    exit;
}

$messages = '';

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["password_repeat"];

    if (empty($name) || empty($email) || empty($password) || empty($password2)) {
      $messages .= "<div class='alert-danger'>Data tidak boleh kosong!</div>";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $messages .= "<div class='alert-danger'>Email tidak valid!</div>";
  } elseif ($password != $password2) {
      $messages .= "<div class='alert-danger'>Password tidak sama!</div>";
  } elseif (strlen($password) < 8) {
      $messages .= "<div class='alert-danger'>Password minimal 8 karakter!</div>";
  }else {
    $checkQuery = "SELECT * FROM users WHERE email='$email' OR name='$name'";
    $result = mysqli_query($conn, $checkQuery);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if ($user['email'] === $email) {
            $messages .= "<div class='alert-danger'>Email sudah terdaftar!</div>";
        } elseif ($user['name'] === $name) {
            $messages .= "<div class='alert-danger'>Nama sudah terdaftar!</div>";
        }
    } else {
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password_hashed')";
        if (mysqli_query($conn, $query)) {
          $_SESSION['success_message'] = 'Akun Berhasil Didaftar!';
          header("Location: login.php");
        } else {
            $messages .= "<div class='alert-danger'>Pendaftaran gagal!</div>";
        }
    }
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <link rel="stylesheet" href="../styles/login.css" media="screen" title="no title">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
  <div class="login">

    <div class="avatar">
      <i class="fa fa-user"></i>
    </div>

    <h2>Register Form</h2>

    <form action="" method="post">
    <?= $messages; ?>
      <div class="box-login">
        <i class="fas fa-id-badge"></i>
        <input type="text" name="name" id="name" placeholder="Nama" required>
      </div>
      <div class="box-login">
        <i class="fas fa-envelope-open-text"></i>
        <input type="text" name="email" id="email" placeholder="Email" required>
      </div>
      <div class="box-login">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
      </div>
      <div class="box-login">
        <i class="fas fa-lock"></i>
        <input type="password" name="password_repeat" id="password" placeholder="Verifikasi Password" required>
      </div>

      <button type="submit" name="submit" class="btn-login">Login</button>
    </form>
    <div class="bottom">
      <a href="login.php">Sudah punya akun</a>
    </div>
  </div>

</body>

</html>