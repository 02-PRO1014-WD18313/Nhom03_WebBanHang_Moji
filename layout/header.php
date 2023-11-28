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
</head>
<body>
    <div class="header nb">
        <div class="logo">
            <a href="index.php?act=home">
                <img src="image/z4876602114590_6223b9460e22e4f10da597208a1fa113.png" alt="">
            </a>
        </div>
        <nav class="navbar">
            <a href="index.php?act=home">Home</a>
            <a href="#">Products</a>
            <a href="#">Review</a>
            <a href="index.php?act=viewcart">Contact</a>
            <a href="index.php?act=unset">About</a>
        </nav>
        <div class="icons">
                <a data-cart="register" class="icon-header">Register</a>
                <a data-cart="login" class="icon-header">Login</a></li>
                <a data-cart="cart" href="index.php?act=viewcart" class="icon-header">
                    <i class="fas fa-shopping-cart"></i>
                </a>
        </div>
</div>