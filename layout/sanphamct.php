<?php
    extract($onesp);    
?>
    
    
    <div class="mcb-backgound-overlay">
        <div class="product-image-wrapper" style="background-image: url(upload/sanpham/<?php echo $img?>);">
            <a><i class="fas fa-search"></i></a>
        </div>
        <div class="entry-sumary-column">
            <div class="directional"></div>
            <a href=""> Trang Chủ</a> >
            <a href="">Sản Phẩm</a>
            <h3><?php echo $tensp ?></h3>
            <p>MÃ SẢN PHẨM: <?php echo $id_sp; ?></p>
            <p class="currentprice" style="font-size:25px"><?php echo number_format($giamoi, 0 , ','); ?> VNĐ</p>
            <p>*Giá có thể thay đổi tùy thuộc vào kích thước và trọng lượng thực tế của sản phẩm.
            Vui lòng gọi 1800 1168 để được hỗ trợ.</p>
            
            
            <div class="information-product">
                <div class="variations-form">
                    <div class="input-number">
                        <input type="number" min="1" max="10" name="" value="1">
                        <button class="plus"><i class="fas fa-plus"></i></button>
                        <button class="minus"><i class="fas fa-minus"></i></button>
                        <input data-id="<?= $id ?>" onclick="addToCart(<?= $id ?>,'<?= $id_sp?>', '<?= $tensp ?>', '<?= $img ?>', <?= $giacu ?>,<?= $giamoi ?>)"  type="submit" value="Add to Cart">
                    </div>
                </div>
            </div>
        </div>

        <div class="more-info">
            <div class="quality-check">
                <h4><i class="fas fa-award"></i> CAM KẾT CHẤT LƯỢNG</h4>
                <p><i class="far fa-check-circle"></i> Thương hiệu trang sức cưới thuộc Tập đoàn Vàng bạc đá quý MOJI.</p>
                <p><i class="far fa-check-circle"></i> 100% Chuẩn xác về hàm lượng vàng.</p>
                <p><i class="far fa-check-circle"></i> 100% chuẩn xác về trọng lượng vàng.</p>
                <p><i class="far fa-check-circle"></i> Mọi sản phẩm trang sức do MOJI bán ra đều có hóa đơn.</p>
            </div>
            <div class="banking-guide">
                <h4><i class="fas fa-desktop"></i> HƯỚNG DẪN MUA HÀNG ONLINE</h4>
                <p><i class="far fa-check-circle"></i> Lựa chọn sản phẩm tại các chuyên mục trên website.</p>
                <p><i class="far fa-check-circle"></i> Thêm vào giỏ hàng.</p>
                <p><i class="far fa-check-circle"></i> Kiểm tra thông tin đơn hàng và đặt hàng.</p>
                <p><i class="far fa-check-circle"></i> Kiểm tra và xác nhận đơn hàng.</p>
            </div>
        </div>
        
    </div>
 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#binhluan").load("view/binhluanform.php", {id_sp: <?php echo $id; ?>});
        });
    </script>
    <div id="binhluan"></div> <br>


   
    <hr>
    <h3 style="text-align:center; font-size:35px; margin-top:10px">Related Product</h3>
    
    <div class="products-wrapper-ct">
    <?php
    foreach ($relatedProduct as $value):
        extract($value);
    ?>
  
        <div class="isotope-item product">
        <img src="<?php echo "upload/sanpham/$img"?>" alt="">
            <p><a href="index.php?act=sanphamct&id_sp=<?php echo $id_sp ?>" class="product-title"><?php echo $tensp?></a></p> 
            <div class="price">
                <p class="oldprice"><?php echo number_format($giacu, 0 , ','); ?> VNĐ</p>
                <p class="newprice"><?php echo number_format($giamoi, 0 , ','); ?> VNĐ</p>
            </div>
            <button class="onsale sale-label">On Sale</button>
            <div class="hover-product">
                <div class="icons-product">
                    <a class="icon preview-icon" data-preview="preview" ><i class="fas fa-link"></i></a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

<script>

    let navigation = document.querySelectorAll(".directionaly a");
    let display = document.querySelectorAll(".detail-product .display");
    
    
    for(var i = 0; i < navigation.length; i++){
        
        navigation[i].addEventListener("click", function(){
            
            let showing = this.getAttribute("data-display");
            let showingcontent = document.getElementById(showing);
            for(var j = 0; j < showingcontent.length; j++){
                showingcontent.classList.remove = "hienra";
            }
            showingcontent.classList.add('hienra');
            console.log(showingcontent);
        })
    }
    
</script>
<script>
    function addToCart(productId,idSp, productName,image, oldPrice, newPrice) {
        $.ajax({
            type: 'POST',
            // Đường dẫ tới tệp PHP xử lý dữ liệu
            url: 'view/addToCart.php',
            data: {
                id: productId,
                idsp: idSp,
                name: productName,
                img: image,
                giacu: oldPrice,
                giamoi: newPrice
            },
            success: function(response) {
                alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>
