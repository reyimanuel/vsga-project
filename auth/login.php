<?php 
session_start();

require '../function/connection.php';

if (isset($_SESSION['login'])) {
    header("Location: ../page/dashboard.php");
    exit;
}

$messages = '';

if (isset($_POST['submit'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    $cek = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if ($cek && mysqli_num_rows($cek) > 0) {
        $data = mysqli_fetch_assoc($cek);

        if (password_verify($password, $data['password'])) {

            $_SESSION['login'] = true;
            $_SESSION['name'] = $data['name'];
            $_SESSION['email'] = $data['email'];
            header("Location: ../page/dashboard.php");
            exit;
        } else {
            $messages .= "<div class='alert-danger'>Username atau Password Salah!</div>";
        }
    } else {
        $messages .= "<div class='alert-danger'>Username atau Password Salah!</div>";
    }
}

if (isset($_SESSION['success_message'])) {
    $messages .= "<div class='alert-success'>{$_SESSION['success_message']}</div>";
    unset($_SESSION['success_message']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../styles/login.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
    <div class="login">

        <div class="avatar">
            <i class="fa fa-user"></i>
        </div>

        <h2>Login Form</h2>

        <form action="login.php" method="post">

        <?= $messages; ?>
            <div class="box-login">
                <i class="fas fa-envelope-open-text"></i>
                <input type="text" name="email" id="email" placeholder="Email" required>
            </div>

            <div class="box-login">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <button type="submit" name="submit" class="btn-login">Login</button>
        </form>
        <div class="bottom">
            <a href="register.php">Buat Akun Baru</a>
        </div>
    </div>

</body>

</html>