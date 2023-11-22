

<?php 
    if(is_array($data_dm)) {
        extract($data_dm);
    }
?>


<body>
    
<div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 style="color: #cf76fa;">THÊM MỚI SẢN PHẨM</h4>
                    <br>
                    <form class="forms-sample" method="post" action="index.php?act=add_sanpham" enctype="multipart/form-data" >
                      <div class="form-group">
                        <label for="exampleInputName1">Tên sản phẩm:</label>
                        <input type="text" class="form-control"  placeholder="Nhập tên" name="tensp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Mã sản phẩm:</label>
                        <input type="text" class="form-control"  placeholder="Nhập mã" name="id_sp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Số Lượng:</label>
                        <input type="text" class="form-control"  placeholder="Nhập số lượng" name="soluong">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Giá cũ:</label>
                        <input type="text" class="form-control"  placeholder="Nhập giá cũ" name="giacu">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Giá mới:</label>
                        <input type="text" class="form-control"  placeholder="Nhập giá mới" name="giamoi">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Mô tả:</label>
                        <input type="text" class="form-control"  placeholder="Nhập mô tả" name="mota">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Danh mục</label>
                        <select class="form-control" name="danhmuc">
                            <?php foreach($data_dm as $value): ?>
                                <option value="<?php echo $value['iddm']; ?>">
                            <?php echo $value['tendm']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Ảnh:</label>
                        
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" placeholder="Upload Image" name="img">
                        </div>
                      </div>
                      <div class="form-group">
                      <input type="submit" class="btn btn-gradient-primary me-2" name="themmoisp" value="Thêm mới">
                      <button type="submit" class="btn btn-gradient-primary me-2" name="btnSubmit">Danh sách</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <!-- content-wrapper ends -->
      <!-- partial:../../partials/_footer.html -->
      