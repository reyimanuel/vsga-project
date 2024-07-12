<?php 
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: ../auth/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
            <a class="fa fa-envelope" href="contact.php"> &nbsp;Contact</a>
            <a class="fa fa-archive active" href="about.php"> &nbsp;About Us</a>
        </nav>
        <!-- Navigation Bar -->

    </header>
    <!-- Header -->

    <div class="page-heading reveal">
        <h2>About Us</h2>
    </div>


    <section class="about">
        <h2>The Journey of Inferno Motor Club</h2>
        <img src="../images/artikel.jpg" alt="Inferno Motor Club Journey">
        <p>
            Inferno Motor Club didirikan pada tahun 2010 oleh sekelompok penggemar sepeda motor yang memiliki kecintaan terhadap berkendara dan kebebasan di jalan. 
            Klub ini dimulai dengan hanya beberapa anggota tetapi telah berkembang pesat selama bertahun-tahun,
             menarik pengendara dari berbagai kalangan yang memiliki antusiasme yang sama terhadap sepeda motor dan persaudaraan.
        </p>
        <p>
            Misi klub ini adalah untuk mempromosikan pengalaman berkendara yang aman dan menyenangkan, 
            serta memberikan kontribusi kepada masyarakat melalui berbagai acara amal dan penggalangan dana. 
            Selama bertahun-tahun, Inferno Motor Club telah menyelenggarakan banyak perjalanan, rally, dan acara sosial, 
            menciptakan ikatan yang kuat di antara anggotanya.
        </p>
        <p>
            Salah satu aspek utama dari Inferno Motor Club adalah komitmennya terhadap keselamatan. 
            Klub secara rutin mengadakan lokakarya keselamatan dan sesi pelatihan untuk memastikan 
            bahwa semua anggota memiliki pengetahuan dan keterampilan yang diperlukan untuk berkendara dengan aman. 
            Selain itu, klub memiliki kode etik yang ketat yang harus dipatuhi oleh semua anggota, mempromosikan rasa hormat dan tanggung jawab di jalan.
        </p>
        <p>
            Selain berkendara, Inferno Motor Club juga terlibat aktif dalam pelayanan masyarakat. 
            Klub telah bermitra dengan berbagai organisasi lokal untuk mendukung berbagai penyebab amal, 
            termasuk penggalangan dana untuk pendidikan, koleksi mainan, dan penggalangan dana untuk penelitian medis. 
            Acara tahunan Charity Bike Wash adalah salah satu acara paling populer di klub, 
            mengumpulkan dana untuk amal lokal sekaligus mempererat komunitas.
        </p>
        <p>
            Ke depan, Inferno Motor Club bertujuan untuk terus tumbuh dan memperluas jangkauannya, 
            mengundang lebih banyak pengendara untuk bergabung dengan klub dan berpartisipasi dalam kegiatannya. 
            Dedikasi klub untuk membina rasa kebersamaan dan mempromosikan praktik berkendara yang aman tetap menjadi inti dari misinya, 
            memastikan bahwa Inferno Motor Club akan terus menjadi kekuatan positif dalam komunitas sepeda motor selama bertahun-tahun yang akan datang.
        </p>
    </section>

    <?php include '../page/parts/footer.php'; ?>
</body>
</html>