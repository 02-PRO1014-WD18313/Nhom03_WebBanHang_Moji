
<div  class="mt" style="height: auto;width: 100%;background-color: rgba(0, 0, 0, 0.07);">
       <div class="box" style="width: 100%;height:62px;padding: 20px 9%;display: block;border-bottom: 1px solid #66666637;background-color: #ffffff;padding-top: 10px;">
            <div style="float: left;color: rgb(199, 3, 3);font-size: x-large;padding-right: 30px;border-right: 1px solid rgb(199, 3, 3);">
                <p style="margin: 0px;">Giỏ Hàng</p>
            </div>
            <div style="float: right;width: 30%;">
                <form action="" style="display:flex ;background-color: rgb(199, 3, 3);border-radius: 5px;">
                    <input style="display: inline-block;height: 5vh;width: 75%;border-radius: 5px 0 0 5px;border: 2px solid rgb(199, 3, 3);font-size: 60%;color: rgb(199, 3, 3);" type="text" name="" id="" placeholder="    Tìm kiếm sản phẩm">
                    <button class="sch" style="background-image: url('image/search.png');"></button>
                   
                </form>
            </div>
       </div>
       <script src="js/main.js"></script>
        
       <?php
            $an="";
            $hien="";
            if(count($_SESSION['cart']) == 0){
                $hien = "hidden";
            } else {
                $an="hidden";
            }
        ?>


       <div class="box_1" style="width: 100%;padding:20px 9%;height: auto;">
            <div class="giotrong" <?= $an ?> style="width: 100%;height: auto;background-color: #ffffff;padding: 20px 20%;">
                <div class="gio1" style="display: flex;justify-content: center;">
                    <img style="width: 80%;height: auto;" src="image/giotrong.png" alt="">
                </div>
                <div class="gio2" style="text-align: center;">
                    <p style="font-weight: bolder;font-size: x-large;margin-top: 10px;margin-bottom: 5px;">"Hổng" có gì trong giỏ hàng hết</p>
                    <p style="color: rgba(0, 0, 0, 0.5);">Về trang cửa hàng để chọn mua sản phẩm bạn nhé!!</p>
                    <a href="index.php?act=home"><button style="margin: 20px;width: 20vh;height: 7vh;border-radius: 5px;background-color: #ffffff;font-size: medium; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Mua sắm ngay</button></a>
                </div>
            </div>
            
            
            <div class="tcart" <?= $hien ?>>
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
                                    <tbody id="order">
                                <?php
                                    $sum_total = 0;
                                    foreach ($dataDb as $key => $product) :
                                        // kiểm tra số lượng sản phẩm trong giỏ hàng
                                        $quantityInCart = 0;
                                        foreach ($_SESSION['cart'] as $item) {
                                            if ($item['id'] == $product['id']) {
                                                $quantityInCart = $item['quantity'];
                                                break;
                                            }
                                        }
                                    ?>
                                            <tr class="bb" >
                                                <td></td>
                                                <td><img src="<?= $img_path,'sanpham/',$product['img'] ?>" alt=""><p class="np"><?= $product['tensp']?></p> <br><p>Mã sản phẩm: <?= $product['id_sp']?></p></td>
                                                <td ><span><del><?= number_format((int)$product['giacu'], 0, ",", ".")  ?> <u>đ</u></del> - <span class="product-price"><?= number_format((int)$product['giamoi'], 0, ",", ".")  ?> <u>đ</u></span></span></td>
                                                <td>
                                                <div class="counter-container">
                                                    <div class="counter-container" style="display: flex;justify-content: center;">
                                                        <div class="count" id="counter1">
                                                            <button class="counter-button" onclick="decrement(<?= $product['id'] ?>),updateQuantity(<?= $product['id'] ?>, <?= $key ?>)">-</button>
                                                            <input class="counter-input" type="number" value="<?= $quantityInCart ?>" min="1" max="<?= $product['soluong']?>" id="quantity_<?= $product['id'] ?>" oninput="updateQuantity(<?= $product['id'] ?>, <?= $key ?>)">
                                                            <button class="counter-button" onclick="increment(<?= $product['id'] ?>),updateQuantity(<?= $product['id'] ?>, <?= $key ?>)">+</button>
                                                        </div>
                                                    </div>
                                              </div>
                                                </td>
                                                <td class="total-price"><?= number_format((int)$product['giamoi'] * (int)$quantityInCart, 0, ",", ".") ?> <u>đ</u></td>
                                                <td><a onclick="removeFormCart(<?= $product['id'] ?>)" style="color: red;">Xóa </a> </td>
                                            </tr>
                                     <?php
                                        $sum_total += ((int)$product['giamoi'] * (int)$quantityInCart);
                                        $_SESSION['resultTotal'] = $sum_total;
                                    endforeach;
                                    ?>
                                    </tbody>
                            </table>

                    <div class="pd">
                    </div>
            </div>
       </div>
            <?php
                if(isset($_SESSION['user']) && ($_SESSION['user'])){
                    $dh='<form action="index.php?act=bill" method="post">
                    <input class="sub" type="submit" name="dongydathang" value="Tiến Hành Thanh Toán" style="cursor:pointer">
                    </form>';
                } else {
                    $dh='<input class="sub" type="button" value="Tiến hành thanh toán" style="cursor:pointer" onclick="thongbao()">';
                }
            ?>


       <div class="box_1" <?= $hien ?> style="width: 100%;padding:0px 9%;height: auto;">
            <div class="bo1 hbo">
                <p class="ct">Tổng sản phẩm :<span class="ik"> <?php echo count($dataDb) ?></span></p>
            </div>
            <div class="bo2 hbo">
                <p class="ct">Tổng thanh toán: <span class="ik" id="tong"><?= number_format((int)$sum_total, 0, ",", ".")  ?> <u>đ</u></span></p> <p class="ik"></p>
            </div> 
            <div class="bo3 hbo">
                <p></p>
                <?= $dh?>
            </div>
        </div>
        
    </div>
    

    <script>
    // hàm cập nhật số lượng
    function updateQuantity(id, index, acti) {
        // lấy giá trị của ô input
        let newQuantity = $('#quantity_' + id).val();
        if (newQuantity <= 0 || newQuantity == "") {
            newQuantity = 1
        }

        // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
        $.ajax({
            type: 'POST',
            url: 'view/updateQuantity.php',
            data: {
                id: id,
                quantity: newQuantity
            },
            success: function(response) {
                // Sau khi cập nhật thành công
                $.post('view/tableCartOrder.php', function(data) {
                    $('.mt').html(data);
                })
            },
            error: function(error) {
                console.log(error);
            },
        })
    }

    function removeFormCart(id) {
        if (confirm("Bạn có đồng ý xóa sản phẩm hay không?")) {
            // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
            $.ajax({
                type: 'POST',
                url: './view/removeFormCart.php',
                data: {
                    id: id
                },
                success: function(response) {
                    // Sau khi cập nhật thành công
                    $.post('view/tableCartOrder.php', function(data) {
                        $('.mt').html(data);
                    })
                },
                error: function(error) {
                    console.log(error);
                },
            })
        }
    }
</script>