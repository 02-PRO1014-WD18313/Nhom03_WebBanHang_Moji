<?php 
    if(is_array($data_list_binhluan)) {
        extract($data_list_binhluan);
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
                    <h4 class="card-title" style="color: #cf76fa;">DANH SÁCH BÌNH LUẬN</h4>
                    <div class="table-responsive">
                      <table class="table" style="text-align: center;">
                        <thead>
                          <tr>
                            <th></th>
                            <th> Tên sản phẩm </th>
                            <th> Số bình luận </th>
                            <th>Mới nhất</th>
                            <th>Cũ nhất</th>
                            <th>Hành động</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($data_list_binhluan as $key => $value): ?>
                            <?php $chitiet = "index.php?act=chitiet_binhluan&id=".$value['id_pro']; ?>
                  
                        <tr>
                        <td><input class="form-check-input" type="checkbox" id="check1" name="option1" value="something"></td>
                            <td><?php echo $value['tensp']; ?></td>
                            <td><?php echo $value['SoLuongBinhLuan']; ?></td>
                            <td><?php echo $value['ThoiGianMoiNhat']; ?></td>
                            <td><?php echo $value['ThoiGianCuNhat']; ?></td>
                            <td>
                            <a href="<?php echo $chitiet ?>" type="button" class="btn btn-warning">Chi tiết</a>
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