<?php 
    // header
    session_start();
    include 'models/pdo.php';
    include 'models/taikhoan.php';
    include 'models/sanpham.php';
    include 'models/danhmuc.php';
    include 'layout/header.php';
    // main
    $data_sp_top8 = loadAll_sp_top8();
    $data_dm = loadAll_dm();
    if(isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];
        switch($act) {
            case "home":
            include 'layout/home.php';
            break;

            case "login":
                if((isset($_POST['login'])) && ($_POST['login']) ){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
            
                    $check_user = check_user($username, $password);
            
                    if(is_array($check_user)) {
                        $_SESSION['user'] = $check_user;
                        header('location: index.php');
                        exit(); // Kết thúc thực thi sau khi chuyển hướng
                    } else {
                        include 'layout/home.php';
                    }
                }
                break;
            
            case "login":
                if((isset($_POST['login'])) && ($_POST['login']) ){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
            
                    $check_user = check_user($username, $password);
            
                    if(is_array($check_user)) {
                        $_SESSION['user'] = $check_user;
                        header('location: index.php');
                        exit(); // Kết thúc thực thi sau khi chuyển hướng
                    } else {
                        include 'layout/home.php';
                    }
                }
                break;
                ob_end_flush();

            case "register":
                if((isset($_POST['register'])) && ($_POST['register']) ){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
    
                    insert_user($username, $password, $email);
                    $THONG_BAO = "BẠN ĐÃ ĐĂNG KÍ THÀNH CÔNG!";
                };
            include 'layout/home.php';
            break;
            
        }
    } else {
        include 'layout/home.php';
    }

    // footer
    include 'layout/footer.php';
?>