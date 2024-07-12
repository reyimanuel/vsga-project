<?php 
require '../function/connection.php';

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: ../auth/login.php");
}

$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard</title>
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
            <a class="fa fa-home active" href="dashboard.php"> &nbsp;Home</a>
            <a class="fa fa-group" href="profile.php"> &nbsp;Profile</a>
            <a class="fa fa-certificate" href="visi_misi.php"> &nbsp;Visi Misi</a>
            <a class="fa fa-shopping-cart" href="product.php"> &nbsp;Product</a>
            <a class="fa fa-envelope" href="contact.php"> &nbsp;Contact</a>
            <a class="fa fa-archive" href="about.php"> &nbsp;About Us</a>
        </nav>
        <!-- Navigation Bar -->

    </header>
    <!-- Header -->

    <!-- Main Content -->
    <section>

        <aside class="aside-container">
            <ul>
            <li><a class="fa fa-print" href="article.php"> &nbsp;Artikel</a></li>
                <li><a class="fa fa-group" href="event.php"> &nbsp;Event</a></li>
                <li><a class="fa fa-handshake-o" href="client.php"> &nbsp;Client</a></li>
                <li><a class="fa fa-image" href="gallery.php"> &nbsp;Gallery</a></li>
                <li><a class="fa fa-male" href="../auth/logout.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout</a></li>
            </ul>
        </aside>


        <section class="content-container">
            <h1>Inferno</h1> <br>
            <div class="content">
                <p>
                    Selamat Datang <?php echo $_SESSION['name'] ?>! Website ini adalah website dari komunitas motor Inferno,
                    selamat bergabung dengan kami! Silahkan pilih beberapa menu diatas dan disamping untuk mencari tau lebih dalam
                    dari website ini.
                </p>
                <img src="../images/hero.jpg" alt="hero">
            </div>
        </section>

    </section>
    <!-- Main Content -->

    <!-- Footer -->
    <?php include 'parts/footer.php'; ?>
    <!-- Footer -->

</html>