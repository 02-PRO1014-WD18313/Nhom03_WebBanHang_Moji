


  <body>
    
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 style="color: #cf76fa;">Thêm mới danh mục</h4>
                    <br>

                    <form class="forms-sample" action="../admin/index.php?act=adddm" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Tên danh mục:</label>
                        <input type="text" class="form-control"  placeholder="Nhập tên" name="tenloai">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Mã danh mục:</label>
                        <input type="text" class="form-control"  placeholder="Nhập mã" name="maloai">
                      </div>
                      
                      <div class="form-group">
                      <input type="submit" class="btn btn-gradient-primary me-2" name="themmoi" value="Thêm mới" id="">
                      
                      
                    </form>
                    <a class="btn btn-gradient-primary me-2" href="../admin/index.php?act=list_danhmuc">Danh sách</a>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/file-upload.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>