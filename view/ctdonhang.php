
<div  class="mt" style="height: auto;width: 100%;">
       <div class="box" style="width: 100%;height:75px;padding: 20px 9%;display: block;border-bottom: 1px solid #66666637;background-color: #ffffff;">
            <div style="float: left;color: rgb(199, 3, 3);font-size: x-large;padding-right: 30px;border-right: 1px solid rgb(199, 3, 3);">
                <p style="margin: 0px;">Quản lý tài khoản</p>
            </div>
            <div style="float: right;width: 30%;">
                <form action="" style="display:flex ;background-color: #666;border-radius: 5px;">
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
          <div class="boxright" style="background-color: rgba(0, 0, 0, 0.01);">
            <p style="margin-bottom: 20px;">Đơn hàng #<?= $bill['id'] ?> đã được đặt <?= substr($bill['ngaydathang'], strpos($bill['ngaydathang'], 'm') + 1)?> và hiện tại là <strong><?= get_ttdh($bill['tinh_trang']); ?></strong></p>
            <h1 style="margin: 20px; font-size: xx-large;color: rgb(199, 3, 3);">Chi tiết đơn hàng</h1>
          <div class="tcart">
                            <table >
                                <tr class="ct bb pdrow" >
                                    <th style="width: 12%;"><h1>Sản phẩm</h1></th>
                                    <th style="width: 20%;"></th>
                                </tr>
                                
                            <?php
                    if(is_array($cart)){
                        foreach ($cart as $cart) {
                            extract($cart);
                            echo '
                            <tr class="pdrow" >
                                <td >'.$cart['name'].' X '.$cart['soluong'].'</td>
                                <td>'.number_format((int)$cart['thanhtien'], 0, ",", ".").' đ</td>
                                </tr> 
                            ';
                        }
                    }
                ?>        
                                  
                               <tr class="pdrow">
                                    <td>Phương thức thanh toán</td>
                                    <td><?= get_pttt($bill['pttt']) ?></td>
                               </tr>   
                               <tr class="pdrow">
                                    <td>Phí vận chuyển</td>
                                    <td><?= number_format(70000, 0, ",", ".") ?> đ</td>
                               </tr>
                               <tr class="pdrow">
                                    <td>Tổng</td>
                                    <td><?= number_format((int)$bill['total'], 0, ",", ".") ?> đ</td>
                               </tr>        
                            </table>
            </div>
            <div class="tcart" style="margin-top: 40px;">
                            <table >
                                <tr class="ct bb pdrow" >
                                    <th style="width: 40%;text-align: left;"><h1>Địa chỉ thanh toán</h1></th>
                                </tr>
                                <tr class="pdrow" style="width: 100%;padding: 10px;">
                                    <td><?= $bill['user_name'] ?>
                                <br>
                                <br>
                                <?= $bill['tel'] ?>
                                <br>
                                <br>
                                <?= $bill['email'] ?>
                                <br>
                                <br>
                                <?= $bill['dia_chi'] ?>
                                    </td>
                               </tr>
                                
                           
                            </table>
            </div>
        </div>

    </div>
