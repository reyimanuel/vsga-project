<?php 
session_start();

require '../function/connection.php';

if (!isset($_SESSION['login'])) {
  header("Location: ../auth/login.php");
  exit;
}

$name = $_SESSION['name'];
$product = query("SELECT * FROM product");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productName = $_POST['product'];
    $amount = intval($_POST['amount']);
    
    if ($amount <= 0) {
        $_SESSION['message'] = "<div class='alert-danger'>Jumlah pembelian harus lebih dari 0!</div>";
        header("Location: product.php");
        exit;
    }

    $query = "INSERT INTO buyers (product, name, amount) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssi", $productName, $name, $amount);
    $stmt->execute();


    $_SESSION['message'] = "<div class='alert-success'>Produk berhasil dibeli!</div>";
    header("Location: product.php");
    exit;

}
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
    <?php
        if (isset($_SESSION['message'])) {
            echo "{$_SESSION['message']}";
            unset($_SESSION['message']);
        }
        ?>
        <h2>Produk dan Jasa Kami</h2>
        <?php foreach ($product as $row) : ?>
        <div class="product">
            <img src="../images/<?= $row["picture"]; ?>" alt="<?= $row["description"]; ?>">
            <h3><?= $row["product"]; ?></h3>
            <p><?= $row["text"]; ?></p>
            <p><strong>Harga: <?= $row["price"]; ?></strong></p>
            <form action="product.php" method="post">
                <input type="hidden" name="product" value="<?= $row["product"]; ?>">
                <label for="amount">Jumlah:</label>
                <input type="number" id="amount" name="amount" value="1" min="1">
                <button type="submit">Beli</button>
            </form>
        </div>
        <?php endforeach; ?>
    </section>

    <?php include 'parts/footer.php'; ?>
</body>
</html>