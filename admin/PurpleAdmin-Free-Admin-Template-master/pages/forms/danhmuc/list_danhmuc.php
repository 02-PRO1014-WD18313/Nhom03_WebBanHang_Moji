<?php 
    if(is_array($data_dm)) {
        extract($data_dm);
    }
?>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="color: #cf76fa;">DANH SÁCH DANH MỤC</h4>
                    <div class="table-responsive">
                      <table class="table" style="text-align: center;">
                        <thead>
                          <tr>
                            <th></th>
                            <th> Tên danh mục </th>
                            <th> Mã danh mục </th>
                            <th>Hình ảnh</th>
                            <th>Hành động</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($data_dm as $key => $value): ?>
                            <?php $sua_dm = "index.php?act=sua_dm&id=".$value['iddm']; 
                                  $xoa_dm = "index.php?act=xoa_dm&id=".$value['iddm']; 
                            ?>
                  
                        <tr>
                          <td><input class="form-check-input" type="checkbox" id="check1" name="option1"></td>
                          <td><?php echo $value['tendm']; ?></td>
                          <td><?php echo $value['iddm']; ?></td>
                          <td>
                              <?php 
                                if($value['img'] != "" && $value['img'] != null) {
                                  echo "<img src='../../upload/danhmuc/".$value['img']."' >";    
                                } 
                              ?>
                            </td>
                          <td>
                              <a href="<?php echo $sua_dm ?>" type="button" class="btn btn-warning">Sửa</a>
                              <a href="<?php echo $xoa_dm ?>" type="button" class="btn btn-danger">Xóa</a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>