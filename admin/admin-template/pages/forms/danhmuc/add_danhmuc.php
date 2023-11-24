



<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 style="color: #cf76fa;">THÊM MỚI DANH MỤC</h4>
            <br>
            <form class="forms-sample" method="post" enctype="multipart/form-data" action="index.php?act=add_danhmuc">
              <div class="form-group">
                <label for="exampleInputName1">Tên danh mục:</label>
                <input type="text" class="form-control"  placeholder="Nhập tên" name="tendm">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Mã danh mục:</label>
                <input type="text" class="form-control"  placeholder="Nhập mã" name="iddm">
              </div>
              <div class="form-group">
                <label>Ảnh:</label>
                <div class="input-group col-xs-12">
                  <input type="file" class="form-control file-upload-info" placeholder="Upload Image" name="img">
                </div>
              </div>
              
              <div class="form-group">
              <input type="submit" class="btn btn-gradient-primary me-2" name="themmoidm" value="Thêm mới">
              <button type="submit" class="btn btn-gradient-primary me-2" name="btnSubmit">Danh sách</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <h4>
        <?php
        if(isset($THONG_BAO) && ($THONG_BAO!="")){
            echo $THONG_BAO;
        }
        ?>
        </h4>
  </div>
       