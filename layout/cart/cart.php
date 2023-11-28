<div class="mt" style="height: auto;width: 100%;background-color: rgba(0, 0, 0, 0.07);">
       <div class="box" style="width: 100%;height:75px;padding: 20px 9%;display: block;border-bottom: 1px solid #66666637;background-color: #ffffff;">
            <div style="float: left;color: #666;font-size: x-large;padding-right: 30px;border-right: 1px solid #666;">
                <p>Giỏ Hàng</p>
            </div>
            <div style="float: right;width: 30%;">
                <form action="" style="display:flex ;background-color: #666;border-radius: 5px;">
                    <input style="display: inline-block;height: 5vh;width: 75%;border-radius: 5px 0 0 5px;border: 2px solid #666;font-size: 60%;" type="text" name="" id="" placeholder="    Tìm kiếm sản phẩm">
                    <button class="sch" style="background-image: url('image/search.png');"></button>
                   
                </form>
            </div>
       </div>



        <?php
            $an="";
            $hien="";
            if(count($_SESSION['mycart']) == 0){
                $hien = "hidden";
            } else {
                $an="hidden";
            }
        ?>



       <div class="box_1" style="width: 100%;padding:20px 9%;height: auto;">
            <div class="giotrong" <?php echo $an ?> style="width: 100%;height: auto;background-color: #ffffff;padding: 20px 20%;">
                <div class="gio1" style="display: flex;justify-content: center;">
                    <img style="width: 80%;height: auto;" src="image/giotrong.png" alt="">
                </div>
                <div class="gio2" style="text-align: center;">
                    <p style="font-weight: bolder;font-size: x-large;margin-top: 10px;margin-bottom: 5px;">"Hổng" có gì trong giỏ hàng hết</p>
                    <p style="color: rgba(0, 0, 0, 0.5);">Về trang cửa hàng để chọn mua sản phẩm bạn nhé!!</p>
                    <a href="index.php?act=home"><button style="margin: 20px;width: 20vh;height: 7vh;border-radius: 5px;background-color: #ffffff;font-size: medium; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Mua sắm ngay</button></a>
                </div>
            </div>
            <div class="cart" <?php echo $hien ?>>
                            <table>
                                <tr class="ct bb">
                                    <th></th>
                                    <th>Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Thao tác</th>
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
                                                <td ><span><del>'.$cart[3].'</del> - <span class="product-price">'.$cart[4].'</span></span></td>
                                                <td>
                                                    <div class="counter-container" style="display: flex;justify-content: center;">
                                                        <div class="count" id="counter1">
                                                            <button class="counter-button" onclick="adjustCounter('.$cart[0].', -1)">-</button>
                                                            <input id="'.$cart[0].'" name="'.$cart[0].'" class="counter-input" type="text" value="'.(int)$cart[5].'" readonly>
                                                            <button class="counter-button" onclick="adjustCounter('.$cart[0].', 1)">+</button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="total-price">'.$ttien.'</td>
                                                <td style="color: red;">Xóa</td>
                                            </tr>';
                                    }
                                ?>
                                <!-- <tr class="bb">
                                    <td></td>
                                    <td><img src="upload/daychuyen1.jpg" alt=""><p class="np">Dây chuyền</p> <br><p>Size: 35cm</p></td>
                                    <td class="product-price">200000000</td>
                                    <td>
                                        <div class="counter-container" style="display: flex;justify-content: center;">
                                            <div class="count" id="counter1">
                                                <button class="counter-button" onclick="adjustCounter(1, -1)">-</button>
                                                <input id="1" name="1" class="counter-input" type="text" value="1" readonly>
                                                <button class="counter-button" onclick="adjustCounter(1, 1)">+</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price"></td>
                                    <td style="color: red;">Xóa</td>
                                </tr> -->
                                
                        
                            </table>

                    <div class="pd">

                    </div>
            </div>
       </div>
       <div class="box_1" <?php echo $hien ?> style="width: 100%;padding:0px 9%;height: 33vh; margin-bottom: 0px;">
            <div class="bo1 hbo">
                <p class="ct">Tổng sản phẩm :<span class="ik"> <?php echo count($_SESSION['mycart']) ?></span></p>
            </div>
            <div class="bo2 hbo">
                <p class="ct">Tổng thanh toán: <span class="ik"><?php echo $tong ?>  ₫</span></p> <p class="ik"></p>
            </div> 
            <div class="bo3 hbo">
                <a href="index.php?act=bill"><button type="submit" style="width: 30vh; height: 8vh; display: block; float: right;margin-right: 10px;background-color: rgba(255, 0, 0, 0.871);text-align: center;line-height: 8vh;color: #ffffff;">
                Mua hàng</button></a>
            </div>
        </div>
       
    </div>