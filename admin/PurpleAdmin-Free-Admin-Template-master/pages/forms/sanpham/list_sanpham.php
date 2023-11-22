<?php 
    if(is_array($data_sp)) {
        extract($data_sp);
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
                    <h4 class="card-title" style="color: #cf76fa;">DANH SÁCH SẢN PHẨM</h4>
                    <div class="table-responsive">
                      <table class="table" style="text-align: center;">
                        <thead >
                          <tr>
                            <th></th>
                            <th> Tên sản phẩm </th>
                            <th> Mã sản phẩm </th>
                            <th> Giá cũ </th>
                            <th> Giá mới </th>
                            <th> Số lượng </th>
                            <th>Lượt bán</th>
                            <th>Hình ảnh</th>
                            <th>Hành động</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($data_sp as $key => $value): ?>
                              <?php $sua_sp = "index.php?act=sua_sp&id=".$value['id_sp']; 
                                    $xoa_sp = "index.php?act=xoa_sp&id=".$value['id_sp']; 
                              ?>
                    
                          <tr>
                            <td><input class="form-check-input" type="checkbox" id="check1" name="option1"></td>
                            <td><?php echo $value['tensp']; ?></td>
                            <td><?php echo $value['id_sp']; ?></td>
                            <td><?php echo $value['giacu']; ?></td>
                            <td><?php echo $value['giamoi']; ?></td>
                            <td><?php echo $value['soluong']; ?></td>
                            <td></td>
                            <td>
                              <?php 
                                if($value['img'] != "" && $value['img'] != null) {
                                  echo "<img width='200' src='../../upload/sanpham/".$value['img']."' >";    
                                } 
                              ?>
                            </td>
                            <td>
                                <a href="<?php echo $sua_sp ?>" type="button" class="btn btn-warning">Sửa</a>
                                <a href="<?php echo $xoa_sp ?>" type="button" class="btn btn-danger">Xóa</a>
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