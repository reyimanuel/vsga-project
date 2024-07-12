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
    <title>Gallery</title>
    <link rel="stylesheet" href="../styles/style.css">  
</head>
<body>
    
    <section class="gallery" id="A4">
    <div class="page-heading">
        <h2>Gallery</h2>
    </div>
    <div class="back">
        <a href="dashboard.php">Kembali ke Beranda</a>
    </div>

    <br><br>

    <div class="images">
        <div class="gallery">
            <img src="../images/pic1.jpg" alt="Inferno Picture Gallery">
                <div class="desc">
                    <div class="text">Picture of riders</div>
                </div>
        </div>
      </div>
      <div class="images">
        <div class="gallery">
            <img src="../images/pic2.jpg" alt="Inferno Picture Gallery">
                <div class="desc">
                    <div class="text">Picture of riders</div>
                </div>
        </div>
      </div>
      <div class="images">
        <div class="gallery">
            <img src="../images/pic3.jpg" alt="Inferno Picture Gallery">
                <div class="desc">
                    <div class="text">Picture of riders</div>
                </div>
        </div>
      </div>
      <div class="images">
        <div class="gallery">
            <img src="../images/pic4.jpg" alt="Inferno Picture Gallery">
                <div class="desc">
                    <div class="text">Picture of riders</div>
                </div>
        </div>
        <br>
      </div>
      <div class="images">
        <div class="gallery">
            <img src="../images/pic5.jpg" alt="Inferno Picture Gallery">
                <div class="desc">
                    <div class="text">Picture of riders</div>
                </div>
        </div>
      </div>
      <div class="images">
        <div class="gallery">
            <img src="../images/pic6.jpg" alt="Inferno Picture Gallery">
                <div class="desc">
                    <div class="text">Picture of riders</div>
                </div>
        </div>
      </div>
      <div class="images">
        <div class="gallery">
            <img src="../images/pic7.jpg" alt="Inferno Picture Gallery">
                <div class="desc">
                    <div class="text">Picture of riders</div>
                </div>
        </div>
      </div>
      <div class="images">
        <div class="gallery">
            <img src="../images/pic8.jpg" alt="Inferno Picture Gallery">
                <div class="desc">
                    <div class="text">Picture of riders</div>
                </div>
        </div>
        <br>
      </div>
      <div class="images">
        <div class="gallery">
            <img src="../images/pic9.jpg" alt="Inferno Picture Gallery">
                <div class="desc">
                    <div class="text">Picture of riders</div>
                </div>
        </div>
      </div>
      <div class="images">
        <div class="gallery">
            <img src="../images/pic10.jpg" alt="Inferno Picture Gallery">
                <div class="desc">
                    <div class="text">Picture of riders</div>
                </div>
        </div>
      </div>
      <div class="images">
        <div class="gallery">
            <img src="../images/pic11.jpg" alt="Inferno Picture Gallery">
                <div class="desc">
                    <div class="text">Picture of riders</div>
                </div>
        </div>
      </div>
      <div class="images">
        <div class="gallery">
            <img src="../images/pic12.jpg" alt="Inferno Picture Gallery">
                <div class="desc">
                    <div class="text">Picture of riders</div>
                </div>
        </div>
      </div>

      <div class="clearfix"></div>
    </section>

    <?php include 'parts/footer.php'; ?>
</body>
</html>