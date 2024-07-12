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
    <title>Article</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <div class="back">
        <a href="dashboard.php">Kembali ke Beranda</a>
    </div>

    <div class="page-heading reveal">
        <h2>Artikel</h2>
    </div>

    <article class="article">
        <h2>Produk dan Jasa Unggulan dari Inferno Motor Club</h2>
        <img src="../images/t-shirt.png" alt="Kaos Inferno Motor Club" class="article-img">
        <h3>Kaos Inferno Motor Club</h3>
        <p>
            Kaos berkualitas tinggi dengan desain eksklusif dari Inferno Motor Club. 
            Tersedia dalam berbagai ukuran dan cocok untuk dikenakan sehari-hari atau saat acara klub.
            Kaos ini menjadi simbolis sebagai bagian dari club motor inferno.
        </p>

        <img src="../images/mug.jpg" alt="Mug Inferno Motor Club" class="article-img">
        <h3>Mug Inferno Motor Club</h3>
        <p>
            Mug keramik dengan logo Inferno Motor Club. Cocok untuk teman minum kopi atau teh di rumah maupun di tempat kerja.
            Sebelum riding enaknya minum kopi biar fokus dalam membawa motor, club kami menyediakan penjualan gelas yang cocok
            menemani waktu santai anda.
        </p>

        <img src="../images/service.png" alt="Servis Sepeda Motor" class="article-img">
        <h3>Servis Sepeda Motor</h3>
        <p>
            Inferno Motor Club juga menawarkan layanan servis sepeda motor profesional. 
            Tim kami terdiri dari mekanik berpengalaman yang siap memastikan kendaraan Anda dalam kondisi terbaik.
            Kami memberikan layanan servis berkualitas dengan harga terjangkau.
        </p>

        <p>
            Dengan produk dan jasa ini, Inferno Motor Club tidak hanya ingin memberikan yang terbaik bagi anggotanya, 
            tetapi juga memperkuat ikatan dan identitas komunitas. Setiap pembelian produk dan jasa kami juga berkontribusi pada kegiatan amal dan sosial yang dilakukan oleh klub.
            Dana yang dikumpulkan akan digunakan dalam membangun dan memperkuat komunitas Inferno Motor Club.
        </p>
        <p>
            Bergabunglah dengan kami dan nikmati berbagai keuntungan serta produk eksklusif dari Inferno Motor Club!
        </p>
    </article>


    <?php include 'parts/footer.php'; ?>
</body>

</html>