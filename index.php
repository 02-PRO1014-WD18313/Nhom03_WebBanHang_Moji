<?php 
    // header
    session_start();
    include 'models/pdo.php';
    include 'models/taikhoan.php';
    include 'models/cart.php';
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
            case "home":

                $data_sp_top8 = loadAll_sp_top8();
                $data_dm = loadAll_dm();
                include 'layout/home.php';
                break;
        
            case "unset":
                session_destroy();
                include 'layout/home.php';
            break;


            case "viewcart":
                $sp1=[1,"NHAN1","1.jpg","Nhẫn 1",200000,300000,"1"];
                $sp2=[6,"NHAN6","6.jpg","Nhẫn 6",200000,400000,"1"];
                array_push($_SESSION['mycart'],$sp1,$sp2);
                include 'layout/cart/cart.php';
            break;

            case 'delcart':
                if(isset($_GET['idcart'])){
                    array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                } else{
                    $_SESSION['mycart']=[];
                }
                include 'layout/cart/cart.php';
                break;  

            case "bill":
                include 'layout/cart/bill.php';
            break;

            case 'billconfirm':
                if(isset($_POST['dongydathang']) && ($_POST['dongydathang'])){ 
                    $pttt=$_POST['pttt'];
                    $ngaydathang=date('h:i:sa d/m/Y');
                    $tongdonhang=$_POST['tongthanhtoan'];
                    //tạo bill
                    insert_bill($pttt,$ngaydathang,$tongdonhang);

                    //insert into cart: $session['mycart] & idbill

                    foreach ($_SESSION['mycart'] as $cart) {
                        insert_cart($cart[0],$cart[2],$cart[3],$cart[5],$cart[6]);
                    }
                    //Xóa session
                    $_SESSION['mycart']=[];
                }
                include "layout/cart/billconfirm.php";
                break; 

            case 'addtocart':
                if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $id_sp=$_POST['id_sp'];
                    $ten=$_POST['name'];
                    $img=$_POST['img'];
                    $gc=$_POST['giacu'];
                    $gm=$_POST['giamoi'];
                    $soluong=1;
                    $ttien=$soluong * $gm;
                    $spadd=[$id,$id_sp,$img,$ten,$gc,$gm,$soluong,$ttien];
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
        $data_sp_top8 = loadAll_sp_top8();
        $data_dm = loadAll_dm();
        include 'layout/home.php';
    }

    // footer
    include 'layout/footer.php';
?>