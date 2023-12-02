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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="header nb">
        <div class="logo">
            <a href="index.php?act=home">
                <img src="image/z4876602114590_6223b9460e22e4f10da597208a1fa113.png" alt="">
            </a>
        </div>
        <nav class="navbar">

            <a href="index.php">Trang Chủ</a>
            <a href="#">Sản Phẩm</a>
            <a href="#">Blog</a>
            <a href="#">Liên Hệ</a>
            <a href="#">Về Chúng Tôi</a>
        </nav>
        <?php ?>
        <div class="icons">

            <?php 
                if(isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                    // echo $_SESSION['user'];
            ?>
   


        <a data-cart="user" class="icon-header" data-bs-toggle="dropdown">Xin chào, <strong><?=$username?></strong></a></li>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php?act=logout">Đăng xuất</a></li>
                <li><a class="dropdown-item" href="#">Link 2</a></li>
                <li><a class="dropdown-item" href="#">Link 3</a></li>
            </ul>

            <a data-cart="cart" class="icon-header">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <?php 
                }else {
            ?>
            <a data-cart="register" class="icon-header">Đăng Kí</a>
            <a data-cart="login" class="icon-header">Đăng Nhập</a></li>
            <a data-cart="cart" class="icon-header">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <?php } ?>

                <!-- <a data-cart="register" class="icon-header">Đăng Kí</a>
                <a data-cart="login" class="icon-header">Đăng Nhập</a></li>
                <a data-cart="cart" class="icon-header">

                    <i class="fas fa-shopping-cart"></i>
                </a> -->

        </div>
</div>