<?php
        extract($onesp);    
        // print_r($relatedProduct);
?>
    <!-- <img src="upload/sanpham/daychuyen1.jpg" alt=""> -->
    <header class="header">
        <div class="logo">
            <a href="">
                <img src="image/z4876602114590_6223b9460e22e4f10da597208a1fa113.png" alt="">
            </a>
        </div>
        <nav class="navbar">
            <a href="index.php?act=home">Home</a>
            <a href="#">Products</a>
            <a href="#">Review</a>
            <a href="#">Contact</a>
            <a href="#">About</a>
        </nav>
        <div class="icons">
                <a data-cart="register" class="icon-header">Register</a>
                <a data-cart="login" class="icon-header">Login</a></li>
                <a data-cart="cart" class="icon-header">
                    <i class="fas fa-shopping-cart"></i>
                </a>
        </div>
    </header>
    
    <div class="mcb-backgound-overlay">
        <div class="product-image-wrapper" style="background-image: url(upload/sanpham/daychuyen1.jpg);">
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
            <span>Giá --- </span>
            <span><del>Giá</del></span>

            <p>Size</p>
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
    <h2 style="text-align:center; font-size:56px; margin-top:10px">Related Product</h2>
    <div class="related-product" >
    <?php
    foreach ($relatedProduct as $value):
        extract($value);
    ?>
        <div class="product-ct">
            <img src="<?php echo "upload/sanpham/$img"?>" alt="">
            <h2><?php echo $tensp ?></h2>
            <?php if($giamoi < $giacu): ?>
            <p><del><?php echo $giacu?></del>$ - <?php echo $giamoi?>$</p>
            <button class="onsale sale-label">On Sale</button>
            <?php else: ?>
                <p><?php echo $giamoi?>$</p>
        <?php  endif;?>
        </div>
        
        <?php endforeach; ?>
    </div>
