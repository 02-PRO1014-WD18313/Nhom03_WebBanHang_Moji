<?php 
    if(is_array($get_sp)) {
        extract($get_sp);
    }

    if(is_array($data_dm)) {
        extract($data_dm);
    }
?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 style="color: #cf76fa;">CẬP NHẬT SẢN PHẨM</h4>
            <br>
            <form class="forms-sample" method="post" action="index.php?act=updatesp&img=<?php echo $get_sp['img']; ?>" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputName1">Tên sản phẩm:</label>
                <input type="text" class="form-control" name="tensp" value="<?php if(isset($tensp) && $tensp != "") echo $tensp; ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Mã sản phẩm:</label>
                <input type="text" class="form-control" name="id_sp" value="<?php if(isset($id_sp) && $id_sp != "") echo $id_sp;?>">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Số Lượng:</label>
                <input type="text" class="form-control" name="soluong" value="<?php if(isset($soluong) && $soluong != "") echo $soluong;?>">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Giá cũ:</label>
                <input type="text" class="form-control" name="giacu" value="<?php if(isset($giacu) && $giacu != "") echo $giacu;?>">
              </div>
                <div class="form-group">
                <label for="exampleInputName1">Giá mới:</label>
                <input type="text" class="form-control" name="giamoi" value="<?php if(isset($giamoi) && $giamoi != "") echo $giamoi;?>">
                </div>
                <div class="form-group">
                <label for="exampleInputName1">Mô tả:</label>
                <input type="text" class="form-control" name="mota" value="<?php if(isset($mota) && $mota != "") echo $mota;?>">
                </div>
                <div class="form-group">
                <label for="exampleSelectGender">Danh mục</label>
                <select class="form-control" name="danhmuc">
                    <?php foreach($data_dm as $value): ?>
                        <option value="<?php echo $value['iddm']; ?>"
                            <?php if($value['iddm'] == $get_sp['id_dm']): ?>
                                selected
                            <?php endif; ?>
                        >
                    <?php echo $value['tendm']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                </div>
                <?php 
                    if($get_sp['img'] != "" && $get_sp['img'] != null) {
                        echo "<img width='100' src='../../upload/sanpham/".$get_sp['img']."' >";    
                    } 
                ?>
                <div class="form-group">
                <label>Ảnh:</label>
                
                <div class="input-group col-xs-12">
                    <input type="file" class="form-control file-upload-info" placeholder="Upload Image" name="img">
                </div>
                </div>
              
              <div class="form-group">
              <input type="submit" class="btn btn-gradient-primary me-2" name="updatesp" value="Cập nhật">
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
       