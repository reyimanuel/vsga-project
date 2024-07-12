<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
            </div>
        </div>
        <!-- Headline -->

        <!-- Navigation Bar -->
        <nav class="navigation">
            <a class="fa fa-home" href="dashboard.php"> &nbsp;Home</a>
            <a class="fa fa-group active" href="profile.php"> &nbsp;Profile</a>
            <a class="fa fa-certificate" href="visi_misi.php"> &nbsp;Visi Misi</a>
            <a class="fa fa-shopping-cart" href="product.php"> &nbsp;Product</a>
            <a class="fa fa-envelope" href="contact.php"> &nbsp;Contact</a>
            <a class="fa fa-archive" href="about.php"> &nbsp;About Us</a>
        </nav>
        <!-- Navigation Bar -->

    </header>
    <!-- Header -->

    <div class="page-heading reveal">
            <h2>profile</h2>
        </div>

        <div class="container-profile">
            
        <section class="experiences">
            <h2>Pengalaman Komunitas</h2>
            <p>Kami telah menjalani berbagai pengalaman yang mengesankan bersama, mulai dari perjalanan touring yang menantang hingga acara sosial yang memberikan dampak positif bagi masyarakat. Berikut beberapa pengalaman berkesan kami:</p>
            <ul>
                <li>Touring ke Pegunungan Dieng, menikmati pemandangan alam yang menakjubkan dan kebersamaan yang erat.</li>
                <li>Partisipasi dalam acara amal tahunan, membantu anak-anak kurang mampu dengan memberikan donasi dan kebutuhan sekolah.</li>
                <li>Mengadakan workshop teknik dasar perawatan sepeda motor bagi anggota baru, meningkatkan keterampilan dan pengetahuan mereka.</li>
                <li>Acara BBQ dan gathering keluarga yang mempererat hubungan antar anggota dan keluarga mereka.</li>
            </ul>
        </section>

        <section class="strengths">
            <h2>Kelebihan Komunitas Kami</h2>
            <ul>
                <li>Solidaritas dan Persaudaraan</li>
                <li>Kegiatan Rutin dan Menarik</li>
                <li>Pengetahuan dan Pengalaman</li>
                <li>Akses ke Jaringan yang Luas</li>
                <li>Kegiatan Sosial</li>
            </ul>
        </section>

        <section class="weaknesses">
            <h2>Kekurangan Komunitas Kami</h2>
            <ul>
                <li>Keterbatasan Waktu</li>
                <li>Biaya Keanggotaan</li>
                <li>Keragaman Pengalaman</li>
                <li>Komunikasi dan Koordinasi</li>
            </ul>
        </section>
        </div>

        <?php include 'parts/footer.php'; ?>
</body>
</html>