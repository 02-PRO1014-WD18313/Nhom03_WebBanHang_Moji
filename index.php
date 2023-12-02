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

    if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];
    // main
    $data_sp_top8 = loadAll_sp_top8();
    $data_dm = loadAll_dm();
    if(isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];
        switch($act) {
            case "home":


                $data_sp_highlight = loadAll_sp_highlight();
                $data_sp_top2 = loadAll_sp_top2();


                $data_sp_top8 = loadAll_sp_top8();
                $data_dm = loadAll_dm();
                include 'layout/slideShow.php';
                include 'layout/home.php';
                break;
        
            case "account":
                if(isset($_GET['id'])){
                    $id =$_GET['id'];
                    $listbill=loadall_bill("",0);
                }
                include 'view/account.php';
            break;


            case 'edit_taikhoan':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $name=$_POST['name'];
                    $username=$_POST['user'];
                    $password=$_POST['pass'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $id=$_POST['id'];
                    
                    update_tk_user($id,$username, $password,$name,$sdt, $email, $address);
                    $_SESSION['user']=check_user($username,$password);
                    $thongbao="Cập nhật tài khoản thành công";
                        header('location:index.php?act=edit_taikhoan');
                }
                include "view/edit_taikhoan.php";
                break;  


            case "viewcart":
                if (!empty($_SESSION['cart'])) {
                    $cart = $_SESSION['cart'];

                    $productId = array_column($cart, 'id');
                    $idList = implode(',', $productId);
                    $dataDb = loadone_sanphamCart($idList);
                }
                include 'view/cart.php';
            break;

            case "bill":
                if (!empty($_SESSION['cart'])) {
                    $cart = $_SESSION['cart'];

                    $productId = array_column($cart, 'id');
                    $idList = implode(',', $productId);
                    $dataDb = loadone_sanphamCart($idList);
                }
                include 'view/bill.php';
            break;

            case 'billconfirm':
                if(isset($_POST['dongydathang']) && ($_POST['dongydathang'])){
                    $user = $_SESSION['user'];
                    $cart = $_SESSION['cart'];
                    $pttt=$_POST['pttt'];
                    $ngaydathang=date('h:i:sa d/m/Y');
                    $tongdonhang=$_POST['tongthanhtoan'];
                    $idbill=insert_bill($user['id'],$user['name'],$user['dia_chi'],$user['sdt'],$user['email'],$pttt,$ngaydathang,$tongdonhang);
                    foreach ($cart as $item) {
                        insert_cart($item['id'],$item['idsp'],$item['img'],$item['name'],$item['giacu'],$item['giamoi'],$item['quantity'],$item['giamoi'] * $item['quantity'],$idbill);
                    }
                    unset($_SESSION['cart']);
                }
                include "view/billconfirm.php";
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

            case 'thoat':
                session_unset();
                header('location:index.php');
                break;   

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
                }
            include 'layout/home.php';
            break;
            case "sanphamct":
                if(isset($_GET['id_sp'])){
                    $id = $_GET['id_sp'];
                    $onesp = loadOne_sp($id);
                    // echo $id_sp;
                    extract($onesp);
                    $relatedProduct = productSamilar($id_sp, $id_dm);
                    include 'layout/sanphamct.php';
                }else {
                    include 'layout/sanphamct.php';

                }
                break;
            case "sanpham":
                $data_sp_highlight = loadAll_sp_highlight();
                include 'layout/sanpham.php';
                break;
            
        }
    } else {

        include 'layout/slideShow.php';

        $data_sp_highlight = loadAll_sp_highlight();
        $data_sp_top2 = loadAll_sp_top2();
        $data_sp_top8 = loadAll_sp_top8();
        $data_dm = loadAll_dm();

        include 'layout/home.php';
    }

    // footer
    include 'layout/footer.php';
?>