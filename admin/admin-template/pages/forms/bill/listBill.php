<?php 
    if(is_array($listbill)) {
        extract($listbill);
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
                    <h4 class="card-title" style="color: #cf76fa;">DANH SÁCH ĐƠN HÀNG</h4>
                    <div class="table-responsive">
                      <table class="table" style="text-align: center;">
                        <thead >
                          <tr>
                            <th> Mã ĐH</th>
                            <th>Ngày đặt hàng</th>
                            <th> Khách hàng </th>
                            <th> Tổng</th>
                            <th> Tình trạng đơn hàng </th>
                            <th>Thao tác</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($listbill as $key => $value): ?>
                              <?php ; 
                              $o0=select_tt($value['tinh_trang']);
                              $o1=select_tt1($value['tinh_trang']);
                              $o2=select_tt2($value['tinh_trang']);
                              $o3=select_tt3($value['tinh_trang']);
                              ?>
                    
                          <tr>
                            <td>#<?php echo $value['id']; ?></td>
                            <td><?php echo substr($value['ngaydathang'], strpos($value['ngaydathang'], 'm') + 1) ?></td>
                            <td><?php echo $value['user_name']; ?>
                                <p class="truncate" style="overflow: hidden;text-overflow: ellipsis;max-width: 250px; "><?= $value['dia_chi'] ?></p>
                            </td>
                            <td><?= number_format((int)$value['total'], 0, ",", ".") ?>đ</td>
                            <td><form action="index.php?act=updatett&id=<?= $value['id'] ?>" method="post">
                                <select name="cars" id="cars">
                                    <option <?= $o0 ?> value="0">Đơn hàng mới</option>
                                    <option <?= $o1 ?> value="1">Đang xử lý</option>
                                    <option <?= $o2 ?> value="2">Đang giao hàng</option>
                                    <option <?= $o3 ?> value="3">Đã giao hàng</option>
                              </select></td>
                                <td><input type="submit" class="btn btn-primary btn-sm" name="capnhat" value="Sửa"></td>
                                </form>
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