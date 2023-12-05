
<div class="container-fluid page-body-wrapper">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"></span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <ul>

            <li class="nav-item" onclick="toggleSubMenu('submenu1')"><div class="nav-link">
                <span class="menu-title" >Danh mục</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </div></li>
            <ul id="submenu1" class="submenu">
                <li><i class="fa-regular fa-circle" style="color: #8a24bbcf;"></i><a href="../admin-template/index.php?act=add_danhmuc" class="nav-submenu"> Thêm mới danh mục</a></li>
                <li><i class="fa-regular fa-circle" style="color: #8a24bbcf;"></i><a href="../admin-template/index.php?act=list_danhmuc" class="nav-submenu"> Danh sách danh mục</a> </li>
            </ul>

            <li class="nav-item" onclick="toggleSubMenu('submenu2')"><div class="nav-link">
                    <span class="menu-title" >Sản phẩm</span>
                    <i class="fa-regular fa-gem" style="color: #bba8bff5;"></i>
                  </div></li>
            <ul id="submenu2" class="submenu">
                <li><i class="fa-regular fa-circle" style="color: #8a24bbcf;"></i><a href="../admin-template/index.php?act=add_sanpham" class="nav-submenu"> Thêm mới sản phẩm</a></a></li>
                <li><i class="fa-regular fa-circle" style="color: #8a24bbcf;"></i><a href="../admin-template/index.php?act=list_sanpham" class="nav-submenu"> Danh sách sản phẩm</a> </li>
            </ul>

              <li class="nav-item"><div class="nav-link">
                <a class="menu-title" href="../admin-template/index.php?act=list_binhluan" style="text-decoration: none; color: inherit; font-size: 0.875rem; ">Bình luận</a>
                <i class="fa-solid fa-comment-dots" style="color: #bba8bff5;"></i>
              </div></li>

              <li class="nav-item"><div class="nav-link">
                <a class="menu-title" href="../admin-template/index.php?act=list_user" style="text-decoration: none; color: inherit; font-size: 0.875rem; ">Khách hàng</a>
                <i class="fa-solid fa-user-group" style="color: #bba8bff5;"></i>
              </div></li>

              <li class="nav-item"><div class="nav-link">
              <a class="menu-title" href="../admin-template/index.php?act=list_bill" style="text-decoration: none;">Đơn hàng</a>
                <i class="fa-solid fa-boxes-packing" style="color: #bba8bff5;"></i>
              </div></li>

              <li class="nav-item"><div class="nav-link">
                <span class="menu-title" >Thống kê</span>
                <i class="fa-solid fa-chart-line" style="color: #bba8bff5;"></i>
              </div></li>
        <!-- Add more menu items as needed -->
    </ul>
          </ul>
        </nav>

        