<?php
session_start();
require '../function/connection.php';

if (!isset($_SESSION['login'])) {
    header("Location: ../auth/login.php");
}

$name = $_SESSION['name'];
$email = $_SESSION['email'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = $_POST['message'];

    if (empty($message)) {
        $_SESSION['message'] = "<div class='alert-success'>Pesan tidak boleh kosong!</div>";
        header("Location: contact.php");
        exit;
    }

    // Insert message into the database
    $query = "INSERT INTO message (name, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $name, $email, $message);
    $stmt->execute();

    // Check for errors
    if ($stmt->affected_rows > 0) {
        $_SESSION['message'] = "<div class='alert-success'>Pesan berhasil dikirim!</div>";
    } else {
        $_SESSION['message'] = "<div class='alert-danger'>Terjadi kesalahan, pesan gagal dikirim.</div>";
    }

    header("Location: contact.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Header -->
    <header>

        <!-- Headline -->
        <div class="wrapper">
            <div class="logo">
                <img src="../images/logo.png" alt="logo">
            </div>
            <div class="title">
                <h1>Inferno Motorcycle Club</h1>
                <h2> </h2>
            </div>
        </div>
        <!-- Headline -->

        <!-- Navigation Bar -->
        <nav class="navigation">
            <a class="fa fa-home" href="dashboard.php"> &nbsp;Home</a>
            <a class="fa fa-group" href="profile.php"> &nbsp;Profile</a>
            <a class="fa fa-certificate" href="visi_misi.php"> &nbsp;Visi Misi</a>
            <a class="fa fa-shopping-cart" href="product.php"> &nbsp;Product</a>
            <a class="fa fa-envelope active" href="contact.php"> &nbsp;Contact</a>
            <a class="fa fa-archive" href="about.php"> &nbsp;About Us</a>
        </nav>
        <!-- Navigation Bar -->

    </header>
    <!-- Header -->

    <div class="page-heading reveal">
        <h2>Contact</h2>
    </div>

    <section class="contact">
        <h2>Contact Us</h2>
        <div class="contact-info">
            <p><strong>Alamat:</strong> Jl. Raya No. 123, Jakarta, Indonesia</p>
            <p><strong>Telepon:</strong> +62 21 12345678</p>
            <p><strong>Fax:</strong> +62 21 87654321</p>
            <p><strong>Email:</strong> info@infernoclub.com</p>
        </div>
        <div class="contact-form">
            <h3>Send Us a Message</h3>
            <?php
            if (isset($_SESSION['message'])) {
                echo "<p>{$_SESSION['message']}</p>";
                unset($_SESSION['message']);
            }
            ?>
            <form action="contact.php" method="post">

                <label for="message">Pesan:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Kirim</button>
            </form>
        </div>
    </section>
    <?php include 'parts/footer.php'; ?>
</body>

</html>