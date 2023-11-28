<div class="mt" style="height: auto;width: 100%;background-color: rgba(0, 0, 0, 0.07);margin-bottom: 30px;">
       <div class="box" style="width: 100%;height:75px;padding: 20px 9%;display: block;border-bottom: 1px solid #66666637;background-color: #ffffff;">
            <div style="float: left;color: #666;font-size: x-large;padding-right: 30px;border-right: 1px solid #666;">
                <p>Thanh toán</p>
            </div>
            <div style="float: right;width: 30%;">
                <form action="" style="display:flex ;background-color: #666;border-radius: 5px;">
                    <input style="display: inline-block;height: 5vh;width: 75%;border-radius: 5px 0 0 5px;border: 2px solid #666;font-size: 60%;" type="text" name="" id="" placeholder="    Tìm kiếm sản phẩm">
                    <button class="sch" style="background-image: url('image/search.png');"></button>
                   
                </form>
            </div>
       </div>

       <div class="box_1"  style="width: 100%;padding:0px 9%;height: auto; margin-bottom: 0px;display: block;">
            <div class="bo1 pd15" style="background-color: #ffffff;padding:20px 2%; height: auto;display: block;">
               <div ><img style="width: 3vh;height: 3vh;" src="image/placeholder.png" alt=""><span style=" font-size: x-large;color: #666;padding: 4px;">  Địa chỉ nhận hàng</span></div>
                    <div class="diachi" style="margin-top: 25px;font-size: large;display: flex;">
                        <p><Strong style="margin-right: 10px;">Tên  0123456789</Strong>Địa chỉ</p>
                        <p style="border: 1px solid #5FBDFF; color: #5FBDFF;font-size: small;padding: 1px;">Mặc định</p>
                        <a href="">Thay đổi</a>
                    </div>
            </div>

            <div class="bo1 pd15" style=" height: auto;display: block;">
            <form action="">
            <div class="tcart">
                            <table>
                                <tr class="ct bb">
                                    <th></th>
                                    <th>Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <span></span>
                                </tr>
                                    
                                <?php
                                $tong =0;
                                $pvc=70000;
                                    foreach ($_SESSION['mycart'] as $cart) {
                                      $hinh=$img_path."sanpham/".$cart[2];
                                      $ttien=$cart[5]*$cart[6];
                                      $tong+=$ttien;
                                      echo '<tr class="bb">
                                                <td></td>
                                                <td><img src="'.$hinh.'" alt=""><p class="np">'.$cart[3].'</p> <br><p>Size: 35cm</p></td>
                                                <td ><span class="product-price">'.$cart[5].'</span></td>
                                                <td>
                                                    '.$cart[6].'
                                                </td>
                                                <td class="total-price">'.$ttien.'</td>
                                            </tr>';
                                    }
                                    $tongtt=$tong+$pvc;
                                ?>
                        
                            </table>

                            <div class="box_1 pd15" style="width: 100%;height: auto;background-color: #ffffff;">
                                    <div class="bo1 hbo">
                                    <p style=" font-size: large;color: #666;">Phương thức thanh toán</p>
                                    <input type="radio" id="ob" name="pttt">
                                    <label for="ob">Online Banking</label>

                                    <input type="radio" id="ttknh" name="pttt">
                                    <label for="ttknh">Thanh toán khi nhận hàng</label>
                                    </div>
                                    <div class="bo2 hbo ct">
                                        <p>Tổng tiền hàng:      <span><?php echo $tong ?>  ₫</span></p>
                                        <p>Phí vận chuyển:      <span><?php echo $pvc  ?>  ₫</span></p>
                                        <p>Tổng thanh toán:     <span class="ik"><?php echo $tongtt?>  ₫</span></p>
                                    </div> 
                                    <div class="bo3 hbo">
                                      <p>Nhấn "Đặt hàng" đồng nghĩa với việc bạn đồng ý tuân theo <span><a href="#">Điều khoản dịch vụ</a></span></p>
                                      <input class="sub" type="submit" name="dathang" value="Đặt hàng">
                                    </div>
                                </div>
                           
                        </form>
            </div>
            </div>
            
        </div>
       
    </div>