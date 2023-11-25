<div class="mt" style="height: auto;width: 100%;background-color: rgba(0, 0, 0, 0.07);">
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

            <div class="bo1 pd15" style="background-color: #ffffff; height: auto;display: block;">
            <div class="cart">
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
                                    foreach ($_SESSION['mycart'] as $cart) {
                                      $hinh=$img_path."sanpham/".$cart[1];
                                      $ttien=$cart[4]*$cart[5];
                                      $tong+=$ttien;
                                      echo '<tr class="bb">
                                                <td></td>
                                                <td><img src="'.$hinh.'" alt=""><p class="np">'.$cart[2].'</p> <br><p>Size: 35cm</p></td>
                                                <td ><span class="product-price">'.$cart[4].'</span></td>
                                                <td>
                                                    '.$cart[5].'
                                                </td>
                                                <td class="total-price">'.$ttien.'</td>
                                            </tr>';
                                    }
                                ?>
                        
                            </table>

                    <div class="pd">

                    </div>
            </div>
            </div>
            
        </div>
       
    </div>