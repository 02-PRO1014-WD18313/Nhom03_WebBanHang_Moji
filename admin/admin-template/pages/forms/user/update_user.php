<?php 
    if(is_array($get_user)) {
        extract($get_user);
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
            <form class="forms-sample" method="post" action="index.php?act=update_user" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputName1">Tên khách hàng:</label>
                <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Mã khách hàng:</label>
                <input type="text" class="form-control" name="id" value="<?php echo $id;?>">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Email:</label>
                <input type="text" class="form-control" name="email" value="<?php echo $email;?>">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Username:</label>
                <input type="text" class="form-control" name="username" value="<?php echo $username;?>">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Địa chỉ:</label>
                <input type="text" class="form-control" name="diachi" value="<?php echo $username;?>">
              </div>
                <div class="form-group">
                <label for="exampleInputName1">Vai trò:</label>
                    <select class="form-control" name="role" style="height: 45px;">
                        <option value="0" <?php if($get_user['role'] == 0): ?>
                                                selected 
                                            <?php endif; ?>
                            >Khách hàng</option>
                        <option value="1" <?php if($get_user['role'] == 1): ?>
                                                selected 
                                            <?php endif; ?>
                            >Admin</option>
                    </select>
                </div>
              
              <div class="form-group">
              <input type="submit" class="btn btn-gradient-primary me-2" name="update_user" value="Cập nhật">
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
       