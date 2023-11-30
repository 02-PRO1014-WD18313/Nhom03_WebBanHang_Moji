<?php
        extract($onesp);    
?>
    
    
    <div class="mcb-backgound-overlay">
        <div class="product-image-wrapper" style="background-image: url(upload/sanpham/<?php echo $img?>);">
            <a><i class="fas fa-search"></i></a>
        </div>
        <div class="entry-sumary-column">
            <div class="directional"></div>
            <a href="">Home</a>
            <a href="">Danh Mục</a>
            <a href="">Tên Sản Phẩm</a>
            <h3><?php echo $tensp ?></h3>
            <div class="content-brighness">
                <div class="parameter">
                    <span>Weight</span>
                    <span>Brand</span>
                    <span>Size</span>
                </div>
                <div class="specifications">
                    <span>20kg</span>
                    <span>Do Ngoc</span>
                    <span>1m, 2m, 3m </span>
                </div>  
            </div>
            <div class="price">
                <p class="oldprice" style="font-size:25px"><?php echo number_format($giacu, 0 , ','); ?> VNĐ</p>
                <p class="newprice" style="font-size:30px"><?php echo number_format($giamoi, 0 , ','); ?> VNĐ</p>
            </div>
            <h3 style="font-size:25px">Size</h3>
            <div class="information-product">

            <div class="variations-form">
                <div class="input-number">
                    <input type="number" min="1" max="10" name="" value="1">
                    <button class="plus"><i class="fas fa-plus"></i></button>
                    <button class="minus"><i class="fas fa-minus"></i></button>
                    <input type="submit" value="Add to Cart">
                </div>
            </div>
        </div>

        </div>
    </div>
    <hr>
    <div class="detail-product">
        <div class="directionaly">
            <a data-display="information">Information</a>
            <a data-display="review">Review</a>
        </div>
        
    </div>
        <div class="information display" id="information">
            <p style="text-align:center"><?php echo $mota ?></p>
        </div>
        <div class="review display" id="review">
            <h2>Abc</h2>
        </div>
    <hr>
    <h2 style="text-align:center; font-size:56px; margin-top:10px">Related Product</h2>
    <div class="related-product" >
    <?php
    foreach ($relatedProduct as $value):
        extract($value);
    ?>
        <div class="product-ct">
            <img src="<?php echo "upload/sanpham/$img"?>" alt="">
            <h2><a href="index.php?act=sanphamct&id_sp=<?php echo $id_sp ?>"><?php echo $tensp ?></a></h2>
            <div class="price">
                <p class="oldprice"><?php echo number_format($giacu, 0 , ','); ?> VNĐ</p>
                <p class="newprice"><?php echo number_format($giamoi, 0 , ','); ?> VNĐ</p>
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
                showingcontent[j].classList.remove = "hienra";
            }
            showingcontent.classList.add('hienra');
            console.log(showingcontent);
        })
    }
    
</script>
