

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <style>
        .submenu {
    display: none;
    list-style-type: none;
    padding-left: 20px;
}

.submenu li {
    padding: 8px;
    text-align: center;
    color: black;
    cursor: pointer;
}
.nav-item {
  list-style: none;
  cursor: pointer;
}
.nav-link {
  display: flex;
  justify-content: space-between;
}
.nav-submenu {
  text-decoration: none;
  color: black;
}
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      
      <?php include 'layout/header.php'; ?>
        
      <?php include 'layout/sidebar.php'; ?>

      <?php
      if(isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];
        switch($act) {
          case "home":
              include 'layout/home.php';
              break;

          case "list_sanpham":
              include 'pages/forms/sanpham/list_sanpham.php';
              break;

          case "add_sanpham":
            include 'pages/forms/sanpham/add_sanpham.php';
              break;

          case "list_danhmuc":
            include 'pages/forms/danhmuc/list_danhmuc.php';
            break;

          case "add_danhmuc":
              include 'pages/forms/danhmuc/add_danhmuc.php';
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