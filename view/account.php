
<div  class="mt" style="height: auto;width: 100%;background-color: rgba(0, 0, 0, 0.007);">
       <div class="box" style="width: 100%;height:75px;padding: 20px 9%;display: block;border-bottom: 1px solid #66666637;background-color: #ffffff;padding-top: 10px;">
            <div style="float: left;color: #666;font-size: x-large;padding-right: 30px;border-right: 1px solid #666;">
                <p style="margin: 0px;">Quản lý tài khoản</p>
            </div>
            <div style="float: right;width: 30%;">
                <form action="" style="display:flex ;background-color: #666;border-radius: 5px;">
                    <input style="display: inline-block;height: 5vh;width: 75%;border-radius: 5px 0 0 5px;border: 2px solid #666;font-size: 60%;" type="text" name="" id="" placeholder="    Tìm kiếm sản phẩm">
                    <button class="sch" style="background-image: url('image/search.png');"></button>
                   
                </form>
            </div>
       </div>
       <div class="box_1" style="width: 100%;padding:20px 9%;height: auto;display: flex;">
        <div class="boxleft">
            <a class="menu-item" href="index.php?act=account">Đơn hàng</a>
            <a class="menu-item" href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
            <a class="menu-item" href="">Địa chỉ</a>
            <a class="menu-item" href="../Nhom03_WebBanHang_Moji/admin/admin-template/index.php">Trang quản trị</a>
            <a class="menu-item" href="index.php?act=thoat">Thoát</a>
          </div>
          <div class="boxright">
          <div class="tcart">
                            <table>
                                <tr class="ct bb pdrow">
                                    <th style="width: 12%;">Đơn hàng</th>
                                    <th style="width: 20%;">Ngày</th>
                                    <th>Tình trạng</th>
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
                                <td>'.$bill['ngaydathang'].'</td>
                                <td>'.$ttdh.'</td>
                                <td>'.number_format((int)$bill['total'], 0, ",", ".").' cho '.$countsp.' mục</td>
                                <td></td>
                            </tr>';
                        }
                    }
                ?>
                                            
                            </table>
            </div>
        </div>

    </div>
