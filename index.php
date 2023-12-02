<?php 
    // header
    session_start();
    include 'models/pdo.php';
    include 'models/taikhoan.php';
    include 'models/sanpham.php';
    include 'models/danhmuc.php';

    include 'layout/header.php';
    include 'global.php';

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

    // main
    $data_sp_top8 = loadAll_sp_top8();
    $data_dm = loadAll_dm();
    if(isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];
        switch($act) {
        
            case "unset":
                session_destroy();
                include 'layout/home.php';
            break;


            case "viewcart":
                include 'layout/cart/cart.php';
            break;

            case "bill":
                include 'layout/cart/bill.php';
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
                    $name = $_POST['name'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $dia_chi = $_POST['dia_chi'];
    
                    insert_user($name, $username, $password, $email, $sdt, $dia_chi);
                    $THONG_BAO = "BẠN ĐÃ ĐĂNG KÍ THÀNH CÔNG!";
                };
            include 'layout/home.php';
            break;
            case "logout":
                session_unset();
                header('loacation: index.php');
                break;
                
        }
    } else {
        $data_sp_highlight = loadAll_sp_highlight();
        $data_sp_top2 = loadAll_sp_top2();
        $data_sp_top8 = loadAll_sp_top8();
        $data_dm = loadAll_dm();
        include 'layout/home.php';
    }

    // footer
    include 'layout/footer.php';
?>