
<div  class="mt" style="height: auto;width: 100%;background-color: rgba(0, 0, 0, 0.03);">
       <div class="box" style="width: 100%;height:62px;padding: 20px 9%;display: block;border-bottom: 1px solid #66666637;background-color: #ffffff;padding-top: 10px;">
            <div style="float: left;color: rgb(199, 3, 3);font-size: x-large;padding-right: 30px;border-right: 1px solid rgb(199, 3, 3);">
                <p style="margin: 0px;">Quản lý tài khoản</p>
            </div>
            <div style="float: right;width: 30%;">
                <form action="" style="display:flex ;background-color: rgb(199, 3, 3);border-radius: 5px;">
                    <input style="display: inline-block;height: 5vh;width: 75%;border-radius: 5px 0 0 5px;border: 2px solid rgb(199, 3, 3);font-size: 60%;" type="text" name="" id="" placeholder="    Tìm kiếm sản phẩm">
                    <button class="sch" style="background-image: url('image/search.png');"></button>
                   
                </form>
            </div>
       </div>
       <?php
                                if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                                    extract($_SESSION['user']);
                                    $rol="";
                                    if($role==1){
                                        $rol='<a class="menu-item" href="../Nhom03_WebBanHang_Moji/admin/admin-template/index.php">Trang quản trị</a>';
                                    }
                                }
                            ?>
       <div class="box_1" style="width: 100%;padding:20px 9%;height: auto;display: flex;">
        <div class="boxleft">
            <a class="menu-item" href="index.php?act=account">Đơn hàng</a>
            <a class="menu-item" href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
            <?= $rol?>
            <a class="menu-item" href="index.php?act=thoat">Thoát</a>
          </div>
          <div class="boxright" style="background-color: rgba(0, 0, 0, 0.01)">
          <div class="tcart">
                            <table>
                                <tr class="ct bb pdrow">
                                    <th style="width: 8%;">Đơn hàng</th>
                                    <th style="width: 15%;">Ngày</th>
                                    <th style="width: 15%;">Tình trạng</th>
                                    <th>Tổng</th>
                                    <th>Thao tác</th>
                                    <span></span>
                                </tr>
                            <?php
                    if(is_array($listbill)){
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ttdh=get_ttdh($bill['tinh_trang']);
                            $countsp=loadall_cart_count($bill['id']);
                            echo '<tr class="pdrow">
                                <td>#'.$bill['id'].'</td>
                                <td>'.substr($bill['ngaydathang'], strpos($bill['ngaydathang'], 'm') + 1).'</td>
                                <td style="width: 15%;">'.$ttdh.'</td>
                                <td>'.number_format((int)$bill['total'], 0, ",", ".").' cho '.$countsp.' mục</td>
                                <td><a href="index.php?act=ctdonhang&id='.$bill['id'].'"><button>Xem</button></a></td>
                            </tr>';
                        }
                    }
                ?>
                                            
                            </table>
            </div>
        </div>

    </div>
