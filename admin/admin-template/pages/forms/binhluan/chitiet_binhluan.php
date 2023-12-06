<?php 
    if(is_array($get_binhluan)) {
        extract($get_binhluan);
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
                    <h4 class="card-title" style="color: #cf76fa;">CHI TIẾT BÌNH LUẬN</h4>
                    <div class="table-responsive">
                      <table class="table" style="text-align: center;">
                        <thead>
                          <tr>
                            <th></th>
                            <th> Nội dung </th>
                            <th>Ngày bình luận</th>
                            <th>Người bình luận</th>
                            <th>Hành động</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($get_binhluan as $key => $value): ?>
                            
                            <?php $xoa_ctbl = "index.php?act=xoa_ctbl&idbl=".$value['id']."&id=".$_GET['id']; ?>
                        <tr>
                        <td><input class="form-check-input" type="checkbox" id="check1" name="option1" value="something"></td>
                            <td><?php echo $value['noidung']; ?></td>
                            <td><?php echo $value['ngaybinhluan']; ?></td>
                            <td><?php echo $value['username']; ?></td>
                            <td>
                            <a href="<?php echo $xoa_ctbl ?>" type="button" class="btn btn-danger">Xóa</a>
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