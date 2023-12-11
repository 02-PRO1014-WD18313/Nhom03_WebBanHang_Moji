


      
<?php 

include '../../models/pdo.php';
include '../../models/danhmuc.php';
include '../../models/sanpham.php';
include '../../models/taikhoan.php';
include '../../models/binhluan.php';
include '../../models/cart.php';
include 'layout/header.php'; 
  
include 'layout/sidebar.php'; 


if(isset($_GET['act']) && $_GET['act'] != "") {
  $act = $_GET['act'];
  switch($act) {
    case "home":
        include 'layout/home.php';
        break;

    case "list_sanpham":
        $data_sp = loadAll_sp();
        include 'pages/forms/sanpham/list_sanpham.php';
        break;

    case "add_sanpham":
      if( (isset($_POST['themmoisp'])) && ($_POST['themmoisp']) ){
        $tensp = $_POST['tensp'];
        $masp = $_POST['id_sp'];
        $giacu = $_POST['giacu'];
        $giamoi = $_POST['giamoi'];
        $soluong = $_POST['soluong'];
        $mota = $_POST['mota'];
        $motangan = $_POST['motangan'];
        $img = $_FILES['img']['name'];
        $iddm = $_POST['danhmuc'];

        $target_dir = "../../upload/sanpham/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);

        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
            #echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            #echo "Sorry, there was an error uploading your file.";
        }

        insert_sanpham($tensp, $masp, $giacu, $giamoi, $soluong, $mota, $motangan, $img, $iddm);
        $THONG_BAO = "BẠN ĐÃ THÊM THÀNH CÔNG!";
    };
      $data_dm = loadAll_dm();
      include 'pages/forms/sanpham/add_sanpham.php';
        break;

    case "xoa_sp":
      if(isset($_GET['id']) && ($_GET['id'])>0) {
        delete_sanpham($_GET['id']);
      }
      $data_sp = loadAll_sp();
      include 'pages/forms/sanpham/list_sanpham.php';
      break;

    case "sua_sp":
      if(isset($_GET['id']) && ($_GET['id'])>0) {
          $get_sp = loadOne_sp($_GET['id']);
          $data_dm = loadAll_dm();
      }
      include 'pages/forms/sanpham/update_sanpham.php';
      break; 

    case "updatesp":
      if((isset($_POST['updatesp'])) && ($_POST['updatesp']) ){
          $tensp = $_POST['tensp'];
          $id = $_POST['id_sp'];
          $soluong = $_POST['soluong'];
          $giacu = $_POST['giacu'];
          $giamoi = $_POST['giamoi'];
          $mota = $_POST['mota'];
          $motangan = $_POST['motangan'];
          $img = $_FILES['img']['name'];
          $iddm = $_POST['danhmuc'];

          $photo = '';
          $last_img = $_GET['img'];
          if($_FILES['img']['name'] != "" ) {
              unlink("./../upload/sanpham/$last_img");
              $photo = $_FILES['img']['name'];
              move_uploaded_file($_FILES['img']['tmp_name'], "../../upload/sanpham/$photo");
          }

          update_sp($tensp, $id, $soluong, $giacu, $giamoi, $mota, $motangan, $img, $iddm);
          $THONG_BAO = "BẠN ĐÃ CẬP NHẬT THÀNH CÔNG!";
      };
      $data_sp = loadAll_sp();
      include 'pages/forms/sanpham/list_sanpham.php';
      break;

    case "list_danhmuc":
      $data_dm = loadAll_dm();
      include 'pages/forms/danhmuc/list_danhmuc.php';
      break;

    case "add_danhmuc":
        if((isset($_POST['themmoidm'])) && ($_POST['themmoidm']) ){
          $ten_dm = $_POST['tendm'];
          $iddm = $_POST['iddm'];
          $img = $_FILES['img']['name'];
          
          $target_dir = "../../upload/danhmuc/";
          $target_file = $target_dir . basename($_FILES["img"]["name"]);

          if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
              #echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
          } else {
              #echo "Sorry, there was an error uploading your file.";
          }

          insert_danhmuc($ten_dm, $iddm, $img);
          $THONG_BAO = "BẠN ĐÃ THÊM THÀNH CÔNG!";
        };
        include 'pages/forms/danhmuc/add_danhmuc.php';
        break;

    case "xoa_dm":
        if(isset($_GET['id']) && ($_GET['id'])>0) {
            delete_danhmuc($_GET['id']);
        }
        $data_dm = loadAll_dm();
        include 'pages/forms/danhmuc/list_danhmuc.php';
        break;

    case "sua_dm":
        if(isset($_GET['id']) && ($_GET['id'])>0) {
            $get_dm = loadOne_dm($_GET['id']);
        }
        include 'pages/forms/danhmuc/update_danhmuc.php';
        break; 

    case "updatedm":
      if((isset($_POST['updatedm'])) && ($_POST['updatedm']) ){
          $tendm = $_POST['tendm'];
          $id = $_POST['iddm'];
          $img = $_FILES['img']['name'];

          $photo = '';
          $last_img = $_GET['img'];
          if($_FILES['img']['name'] != "" ) {
              unlink("../../upload/danhmuc/$last_img");
              $photo = $_FILES['img']['name'];
              move_uploaded_file($_FILES['img']['tmp_name'], "../../upload/danhmuc/$photo");
          }

          update_dm($tendm, $id, $img);
          $THONG_BAO = "BẠN ĐÃ CẬP NHẬT THÀNH CÔNG!";
      };
      $data_dm = loadAll_dm();
      include 'pages/forms/danhmuc/list_danhmuc.php';
      break;

    case "list_user":
      $data_user = loadAll_user();
      include 'pages/forms/user/list_user.php';
      break;

    case "xoa_user":
      if(isset($_GET['id']) && ($_GET['id'])>0) {
        delete_user($_GET['id']);
      }
      $data_user = loadAll_user();
      include 'pages/forms/user/list_user.php';
      break;

    case "sua_user":
      if(isset($_GET['id']) && ($_GET['id'])>0) {
          $get_user = loadOne_user($_GET['id']);
      }
      include 'pages/forms/user/update_user.php';
      break;

    case "update_user":
      if((isset($_POST['update_user'])) && ($_POST['update_user']) ){
          $id = $_POST['id'];
          $name = $_POST['name'];
          $username = $_POST['username'];
          $password = $_POST['password'];
          $email = $_POST['email'];
          $diachi = $_POST['diachi'];
          $role = $_POST['role'];
          

          update_user($id, $name, $username, $password, $email, $role);
          $THONG_BAO = "BẠN ĐÃ CẬP NHẬT THÀNH CÔNG!";
      };
      include 'pages/forms/user/list_user.php';
      break;
    
      case "list_binhluan":
        $data_list_binhluan = loadAll_list_binhluan();
        include 'pages/forms/binhluan/list_binhluan.php';
        break;

      case "list_bill":
        $listbill=loadall_bill("",0);
        include 'pages/forms/bill/listBill.php';
        break;

      case 'updatett':
        if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
            $id=$_GET['id'];
            $tt=$_POST['cars'];
            update_bill($id,$tt);
            $thongbao="Cập nhật thành công";
            }
            $listbill=loadall_bill("",0);
        include 'pages/forms/bill/listBill.php';
        break; 

        case 'thongke':
          $listthongke=loadall_thongke();
          include 'pages/forms/thongke/list.php';
          break; 

    case "timkiem":
        include '../views/timkiem.php';
        break;

    case "info":
        include '../views/info.php';
        break;
  }
}
else {
  include 'layout/home.php';
}
?>
    
    
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <script>
  function toggleSubMenu(submenuId) {
    var submenu = document.getElementById(submenuId);
    if (submenu.style.display === 'block') {
        submenu.style.display = 'none';
    } else {
        submenu.style.display = 'block';
    }
}

</script>
    <!-- End custom js for this page -->
  </body>
</html>