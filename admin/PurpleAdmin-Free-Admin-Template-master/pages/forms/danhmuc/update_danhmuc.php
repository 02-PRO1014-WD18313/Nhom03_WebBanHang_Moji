<?php 
    if(is_array($get_dm)) {
        extract($get_dm);
    }
?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 style="color: #cf76fa;">CẬP NHẬT DANH MỤC</h4>
            <br>
            <form class="forms-sample" method="post" action="index.php?act=updatedm&img=<?php echo $get_dm['img'] ?>" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputName1">Tên danh mục:</label>
                <input type="text" class="form-control" name="tendm" value="<?php if(isset($tendm) && $tendm != "") echo $tendm; ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Mã danh mục:</label>
                <input type="text" class="form-control" name="iddm" value="<?php if(isset($iddm) && $iddm != "") echo $iddm;?>">
              </div>
              <?php 
                if($get_dm['img'] != "" && $get_dm['img'] != null) {
                    echo "<img width='100' src='../../upload/danhmuc/".$get_dm['img']."' >";    
                } 
                ?> 
                <div class="form-group">
                <label>Ảnh:</label>
                <div class="input-group col-xs-12">
                  <input type="file" class="form-control file-upload-info" placeholder="Upload Image" name="img">
                </div>
              </div>
                
              
              <div class="form-group">
              <input type="submit" class="btn btn-gradient-primary me-2" name="updatedm" value="Cập nhật">
              <button type="submit" class="btn btn-gradient-primary me-2" name="btnSubmit">Danh sách</button>
              </div>
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
       