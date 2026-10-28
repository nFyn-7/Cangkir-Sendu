<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="kelompok3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@700&family=Nunito:wght@500;700&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffeshop</title>
</head>

<body class="body-kelompok-3">
    <header class="header-kelompok-3"> <?php include __DIR__ . '/includes/header_kelompok_3.php'; ?> </header>
    <main class="main-container-kelompok-3">
        <?php
        if (isset($_GET['hal'])) {
            if ($_GET['hal'] == "beranda") {
                include __DIR__ . "/pages/beranda_kelompok_3.php";
            } else if ($_GET['hal'] == "menu") {
                include __DIR__ . "/pages/menu_kelompok_3.php";
            } else if ($_GET['hal'] == "about-us") {
                include __DIR__ . "/pages/about-us_kelompok_3.php";
            } else if ($_GET['hal'] == "beli") {
                include __DIR__ . "/pages/831_beli.php";
            } else if ($_GET['hal'] == "pembayaran") {
                include __DIR__ . "/pages/pembayaran_kelompok_3.php";
            } else if ($_GET['hal'] == "member") {
                include __DIR__ . "/pages/member_kelompok_3.php";
            } else {
                echo "halaman tidak ditemukan";
            }
        } else {
            include __DIR__ . '/pages/beranda_kelompok_3.php';

        }
        ?>
    </main>
    <footer> <?php include __DIR__ . '/includes/footer_kelompok_3.php'; ?> </footer>
</body>

</html>