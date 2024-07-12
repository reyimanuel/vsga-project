<?php 
require '../function/connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
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
            <a class="fa fa-home" href="../index.php"> &nbsp;Home</a>
            <a class="fa fa-group" href="profile.php"> &nbsp;Profile</a>
            <a class="fa fa-certificate" href="visi_misi.php"> &nbsp;Visi Misi</a>
            <a class="fa fa-shopping-cart active" href="product.php"> &nbsp;Product</a>
            <a class="fa fa-envelope" href="contact.php"> &nbsp;Contact</a>
            <a class="fa fa-archive" href="about.php"> &nbsp;About Us</a>
        </nav>
        <!-- Navigation Bar -->

    </header>
    <!-- Header -->

    <div class="page-heading">
        <h2>Product</h2>
    </div>


    <section class="products">
z
        <div class="product">
            <img src="../images/t-shirt.png" alt="Kaos Inferno Motor Club">
            <h3>Kaos Inferno Motor Club</h3>
            <p>Kaos berkualitas tinggi dengan desain eksklusif dari Inferno Motor Club. Tersedia dalam berbagai ukuran.</p>
            <p><strong>Harga: Rp150,000</strong></p>
        </div>
        <div class="product">
            <img src="../images/mug.jpg" alt="Mug Inferno Motor Club">
            <h3>Mug Inferno Motor Club</h3>
            <p>Mug keramik dengan logo Inferno Motor Club. Cocok untuk teman minum kopi Anda.</p>
            <p><strong>Harga: Rp50,000</strong></p>
        </div>
        <div class="product">
            <img src="../images/service.png" alt="Servis Sepeda Motor">
            <h3>Servis Sepeda Motor</h3>
            <p>Kami menawarkan layanan servis sepeda motor profesional untuk memastikan kendaraan Anda dalam kondisi terbaik.</p>
            <p><strong>Harga: Mulai dari Rp200,000</strong></p>
        </div>
    </section>

    <?php include '../page/parts/footer.php'; ?>
</body>

</html>