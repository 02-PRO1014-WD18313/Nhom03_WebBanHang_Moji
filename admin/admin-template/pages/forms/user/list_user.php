<?php 
    if(is_array($data_user)) {
        extract($data_user);
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
                    <h4 class="card-title" style="color: #cf76fa;">DANH SÁCH TÀI KHOẢN</h4>
                    <div class="table-responsive">
                      <table class="table" style="text-align: center;">
                        <thead >
                          <tr>
                            <th></th>
                            <th> Mã KH </th>
                            <th>Họ tên</th>
                            <th> Email </th>
                            <th> Username </th>
                            <th>Số Điện Thoại</th>
                            <th> Role </th>
                            <th>Hành động</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($data_user as $key => $value): ?>
                              <?php $sua_user = "index.php?act=sua_user&id=".$value['id']; 
                                    $xoa_user = "index.php?act=xoa_user&id=".$value['id']; 
                              ?>
                    
                          <tr>
                            <td><input class="form-check-input" type="checkbox" id="check1" name="option1"></td>
                            <td><?php echo $value['id']; ?></td>
                            <td><?php echo $value['name']; ?></td>
                            <td><?php echo $value['email']; ?></td>
                            <td><?php echo $value['username']; ?></td>
                            <td><?php echo $value['sdt']; ?></td>

                            <?php if($value['role'] == 0): ?>
                                <td><?php echo "Khách hàng"; ?></td>
                            <?php else: ?>
                                <td><?php echo "Admin"; ?></td>
                            <?php endif; ?></td>

                            <td>
                                <a href="<?php echo $sua_user ?>" type="button" class="btn btn-warning">Sửa</a>
                                <a href="<?php echo $xoa_user ?>" type="button" class="btn btn-danger">Xóa</a>
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