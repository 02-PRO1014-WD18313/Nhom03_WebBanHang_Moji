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
                    <h4 class="card-title">DANH SÁCH DANH MỤC</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th> Tên sản phẩm </th>
                            <th> Mã sản phẩm </th>
                            <th>Thao tác</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                $suadm="index.php?act=suadm&id=".$id;
                                $xoadm="index.php?act=xoadm&id=".$id;
                                echo '<tr>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$ma_dm.'</td>
                                <td><a href="'.$suadm.'"><input class="btn btn-gradient-primary me-2" type="button" value="Sửa" name="" id=""></a> <a href="'.$xoadm.'"><input class="btn btn-gradient-primary me-2" type="button" value="Xóa"></a></td>
                            </tr>';
                            }
                        ?>
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