<?php
// Không có khoảng trắng, dòng trống hoặc văn bản trước thẻ <?php
ob_start(); // Bắt đầu bộ đệm đầu ra
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue&display=swap" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://accounts.google.com/gsi/client" async></script>
    <script src="https://unpkg.com/js-image-zoom@0.7.0/js-image-zoom.js" type="application/javascript"></script>

</head>
<body>

    <div class="header nb">

        <div class="logo">
            <a href="index.php">
                <img src="image/z4876602114590_6223b9460e22e4f10da597208a1fa113.png" alt="">
            </a>
        </div>
        <nav class="navbar">

            <a href="index.php">Trang Chủ</a>
            <a href="index.php?act=sanpham">Sản Phẩm</a>
            <a href="#">Blog</a>
            <a href="#">Liên Hệ</a>
            <a href="#">Về Chúng Tôi</a>
        </nav>
        <?php ?>
        <div class="icons">

            <?php 
                if(isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
            ?>
            <p>Xin chào, <strong><?=$username?></strong>!</p>
            <?php 
                }else {
            ?>
            <a data-cart="register" class="icon-header">Đăng Kí</a>
            <a data-cart="login" class="icon-header">Đăng Nhập</a></li>
            <a data-cart="cart" class="icon-header">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <?php } ?>
<!-- 
                <a data-cart="register" class="icon-header">Đăng Kí</a>
                <a data-cart="login" class="icon-header">Đăng Nhập</a></li>
                <a data-cart="cart" class="icon-header">

                    <i class="fas fa-shopping-cart"></i>
                </a> -->

        </div>
</div>