<?php 
    // header
    session_start();
    include 'models/pdo.php';
    include 'models/taikhoan.php';
    include 'layout/header.php';
    include 'models/sanpham.php';
    include 'models/danhmuc.php';
    include 'global.php';

    $spnew = loadall_sanpham_home();
    $dmhome = loadall_danhmuc_home();
    $one= loadOne_sp_nhan_home();
    $two = loadOne_sp_daychuyen_home();
    $dc2 = loadall_sanpham_home_2();


    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

    // main
    if(isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];
        switch($act) {
            case "home":
                include 'layout/home.php';
            break;

            case "unset":
                session_destroy();
                include 'layout/home.php';
            break;


            case "viewcart":
                include 'layout/cart/cart.php';
            break;

            case 'addtocart':
                if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $ten=$_POST['name'];
                    $img=$_POST['img'];
                    $gc=$_POST['giacu'];
                    $gm=$_POST['giamoi'];
                    $soluong=1;
                    $ttien=$soluong * $gm;
                    $spadd=[$id,$img,$ten,$gc,$gm,$soluong,$ttien];
                    array_push($_SESSION['mycart'],$spadd);
                }
                include 'layout/cart/cart.php';
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