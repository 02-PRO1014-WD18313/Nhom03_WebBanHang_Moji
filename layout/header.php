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
    <!--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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
            <a href="index.php?act=account">Xin chào, <strong><?=$username?></strong>!</a>
            <a data-cart="cart" href="index.php?act=viewcart" class="icon-header">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <?php 
                }else {
            ?>
            <a data-cart="register" class="icon-header">Đăng Kí</a>
            <a data-cart="login" class="icon-header">Đăng Nhập</a></li>
            <a href="index.php?act=viewcart" class="icon-header">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <?php } ?>
        </div>
</div>
<form action="index.php?act=register" method="post" onsubmit="return validateRegisterForm()">
    <div class="registration" id="register">
        <div class="regis-top">
            <img src="image/z4876602114590_6223b9460e22e4f10da597208a1fa113.png" alt="">
            <h4>Sign Up</h4> <br>
        </div>
        <div class="form-control">
            <div class="form-label">
                <input type="text" class="form-input" name="username" id="username" placeholder="Username">
                <p id="usernameError" class="error"></p>
            </div>
            <div class="form-label">
                <input type="text" class="form-input" name="email" id="email" placeholder="Email">
                <p id="emailError" class="error"></p>
            </div>
            <div class="form-label">
                <input type="password" class="form-input" name="password" id="password" placeholder="Password">
                <p id="passwordError" class="error"></p>
            </div>
            <div class="form-label">
                <input type="password" class="form-input" name="confirm" id="confirm" placeholder="Confirm password">
                <p id="confirmError" class="error"></p>
            </div>
            <input type="submit" class="form-button" name="register" value="ĐĂNG KÍ">
        </div>
        <br>
        <a class="outCart"><i class="fas fa-times"></i></a>
    </div>
</form>

<!-- Login Form -->
<form action="index.php?act=login" method="post" onsubmit="return validateLoginForm()">
    <div class="registration login" id="login">
        <div class="login-top">
            <img src="image/z4876602114590_6223b9460e22e4f10da597208a1fa113.png" alt="">
            <h4>Sign In</h4> <br>
        </div>
        <div class="form-control">
            <div class="form-label">
                <input type="text" name="username" id="loginUsername" class="form-input" placeholder="Username">
                <p id="loginUsernameError" class="error"></p>
            </div>
            <div class="form-label">
                <input type="text" name="password" id="loginPassword" class="form-input" placeholder="Password">
                <p id="loginPasswordError" class="error"></p>
            </div>
            <input type="submit" name="login" class="form-button" value="ĐĂNG NHẬP">
        </div>
        <br>
        <a class="outCart"><i class="fas fa-times"></i></a>
    </div>
</form>


