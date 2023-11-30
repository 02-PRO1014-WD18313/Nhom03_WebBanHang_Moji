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
<div class="slide-wrapper">
    <div class="slides">
        <ul>
            <li class="active">
                <div class="slide">
                    <div class="img" style="background-image: url(image/slide1.avif);"></div>
                    <img src="image/big_brown.png" alt="" class="below-brown">
                    <img src="image/big_brown.png" alt="" class="above-brown">
                    <img src="image/small_brown.png" alt="" class="right-brown">
                    <div class="text-content">
                        <h2>01</h2>
                        <small>TH true milk</small>
                        <div class="dot"></div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, quod perferendis. Earum, optio veritatis? Corrupti incidunt sed asperiores eligendi necessitatibus, soluta dolor atque vitae blanditiis nobis fugit est eius aliquid.</p>
                        <a href="" class="button">See Project</a>
                    </div>
                    
                </div>
            </li>
            <li>
                <div class="slide">
                    <div class="img" style="background-image: url('image/slide2.avif');"></div>
                    <img src="image/big_blue.png" alt="" class="below-brown">
                    <img src="image/big_blue.png" alt="" class="above-brown">
                    <img src="image/small_blue.png" alt="" class="right-brown">
                    <div class="text-content">
                        <h2>02</h2>
                        <small>TH true milk</small>
                        <div class="dot"></div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, quod perferendis. Earum, optio veritatis? Corrupti incidunt sed asperiores eligendi necessitatibus, soluta dolor atque vitae blanditiis nobis fugit est eius aliquid.</p>
                        <a href="" class="button">See Project</a>
                    </div>
                    
                </div>
            </li>
            <li>
                <div class="slide">
                    <div class="img" style="background-image: url(image/slide3.avif);"></div>
                    <img src="image/big_red.png" alt="" class="below-brown">
                    <img src="image/big_red.png" alt="" class="above-brown">
                    <img src="image/small_red.png" alt="" class="right-brown">
                    <div class="text-content">
                        <h2>03</h2>
                        <small>TH true milk</small>
                        <div class="dot"></div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, quod perferendis. Earum, optio veritatis? Corrupti incidunt sed asperiores eligendi necessitatibus, soluta dolor atque vitae blanditiis nobis fugit est eius aliquid.</p>
                        <a href="" class="button">See Project</a>
                    </div>
                    
                </div>
            </li>
        </ul>
    </div>
    <div class="transfer-slides">
        <ul>
            <li class="transfer">1</li>
            <li>2</li>
            <li>3</li>
        </ul>
    </div>
</div>
    <div class="header">
        <div class="logo">
            <a href="">
                <img src="image/z4876602114590_6223b9460e22e4f10da597208a1fa113.png" alt="">
            </a>
        </div>
        <nav class="navbar">
            <a href="index.php?act=home">Trang Chủ</a>
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
            ?>
   


        <a data-cart="user" class="icon-header" data-bs-toggle="dropdown">Xin chào, <strong><?=$username?></strong></a></li>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
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
        </div>
</div>