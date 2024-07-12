<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Header -->
    <header>

        <!-- Headline -->
        <div class="wrapper">
            <div class="logo">
                <img src="images/logo.png" alt="logo">
            </div>
            <div class="title">
                <h1>Inferno Motorcycle Club</h1>
                <h2> </h2>
            </div>
        </div>
        <!-- Headline -->

        <!-- Navigation Bar -->
        <nav class="navigation">
            <a class="fa fa-home active" href="page_unverif/index.php.php"> &nbsp;Home</a>
            <a class="fa fa-group" href="page_unverif/profile.php"> &nbsp;Profile</a>
            <a class="fa fa-certificate" href="page_unverif/visi_misi.php"> &nbsp;Visi Misi</a>
            <a class="fa fa-shopping-cart" href="page_unverif/product.php"> &nbsp;Product</a>
            <a class="fa fa-envelope" href="page_unverif/contact.php"> &nbsp;Contact</a>
            <a class="fa fa-archive" href="page_unverif/about.php"> &nbsp;About Us</a>
        </nav>
        <!-- Navigation Bar -->

    </header>
    <!-- Header -->

    <!-- Main Content -->
    <section>

        <aside class="aside-container">
            <ul>
                <li><a class="fa fa-print" href="page_unverif/article.php"> &nbsp;Artikel</a></li>
                <li><a class="fa fa-group" href="page_unverif/event.php"> &nbsp;Event</a></li>
                <li><a class="fa fa-handshake-o" href="page_unverif/client.php"> &nbsp;Client</a></li>
                <li><a class="fa fa-image" href="page_unverif/gallery.php"> &nbsp;Gallery</a></li>
                <li><a class="fa fa-male" href="auth/login.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign in!</a></li>
                <li><a class="fa fa-child" href="auth/register.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign up!</a></li>
            </ul>
        </aside>


        <section class="content-container">
            <h1>Inferno</h1> <br>
            <div class="content">
                <p>
                    Selamat Datang di website Inferno Motorcycle Club, Kami terbuka untuk orang yang ingin bergabung,
                    Komunitas kita juga sering memiliki banyak event dan acara - acara yang tentu seru dan menyenangkan.
                    Jangan sungkan untuk bergabung dengan kami!
                </p>
                <img src="images/hero.jpg" alt="hero">
            </div>
        </section>

    </section>
    <!-- Main Content -->

    <!-- Footer -->
    <?php include 'page/parts/footer.php'; ?>
    <!-- Footer -->

</html>