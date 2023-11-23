

<div class="slide-wrapper">

    <div class="slides">
        <ul>
            <li class="active">
                <div class="slide">
                    <div class="img" style="background-image: url(image/slide1.avif);"></div>
                    <img src="image/big_brown.png" alt="" class="below-brown">
                    <img src="image/big_brown.png" alt="" class="above-brown">
                    <img src="image/small_brown.png" alt="" class="right-brown">
                    <div class="text-content">
                        <h2>01</h2>
                        <small>TH true milk</small>
                        <div class="dot"></div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, quod perferendis. Earum, optio veritatis? Corrupti incidunt sed asperiores eligendi necessitatibus, soluta dolor atque vitae blanditiis nobis fugit est eius aliquid.</p>
                        <a href="" class="button">See Project</a>
                    </div>
                    
                </div>
            </li>
            <li>
                <div class="slide">
                    <div class="img" style="background-image: url('image/slide2.avif');"></div>
                    <img src="image/big_blue.png" alt="" class="below-brown">
                    <img src="image/big_blue.png" alt="" class="above-brown">
                    <img src="image/small_blue.png" alt="" class="right-brown">
                    <div class="text-content">
                        <h2>02</h2>
                        <small>TH true milk</small>
                        <div class="dot"></div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, quod perferendis. Earum, optio veritatis? Corrupti incidunt sed asperiores eligendi necessitatibus, soluta dolor atque vitae blanditiis nobis fugit est eius aliquid.</p>
                        <a href="" class="button">See Project</a>
                    </div>
                    
                </div>
            </li>
            <li>
                <div class="slide">
                    <div class="img" style="background-image: url(image/slide3.avif);"></div>
                    <img src="image/big_red.png" alt="" class="below-brown">
                    <img src="image/big_red.png" alt="" class="above-brown">
                    <img src="image/small_red.png" alt="" class="right-brown">
                    <div class="text-content">
                        <h2>03</h2>
                        <small>TH true milk</small>
                        <div class="dot"></div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, quod perferendis. Earum, optio veritatis? Corrupti incidunt sed asperiores eligendi necessitatibus, soluta dolor atque vitae blanditiis nobis fugit est eius aliquid.</p>
                        <a href="" class="button">See Project</a>
                    </div>
                    
                </div>
            </li>
        </ul>
        
    </div>
    <div class="transfer-slides">
        <ul>
            <li class="transfer">1</li>
            <li>2</li>
            <li>3</li>
        </ul>
    </div>
</div>
<div class="h2">

<h2 class="h2_title">Lorem ipsum dolor <br> sit amet </h2>
</div>
<div class="section">
<?php
    if(is_array($one)){
        extract($one);
    }
    $hinhone=$img_path."sanpham/".$img;
?>
        
        
    <div class="section_wrapper section_wrapper_1 " style="background-image: url(<?php echo $hinhone ?>);">
        <div class="section_title section_title_1">
            <h6>Our recommendation</h6>
            <h2><?php echo $tensp ?></h2>
            <p><?php echo $mota ?></p>
            <a href="" class="button button_size_2">
                <span class="button_label">Buy Now</span>
            </a>
        </div>
    </div>
    <?php
    if(is_array($two)){
        extract($two);
    }
    $hinhtwo=$img_path."sanpham/".$img;
?>
    <div class="section_wrapper section_wrapper_2 " style="background-image: url(<?php echo $hinhtwo ?>);">
        <div class="section_title section_title_2">
            <h6>Our recommendation</h6>
            <h2><?php echo $tensp ?></h2>
            <p class="np"><?php echo $mota ?></p>
            <a href="" class="button button_size_2">
                <span class="button_label">Product</span>
            </a>
        </div>
    </div>
</div>

<div class="mcb mcb-wrap one">
<div class="mcb-column-inner">
    <h2 class="title">Top Rated Category</h2>
    <div class="column-attr mfn-inline-editor">
        Best choice
    </div>
</div>
<div class="categorys-wrapper ">
    <?php
        foreach ($dmhome as $dm) {
            extract($dm);
            $hinhdm=$img_path."danhmuc/".$img;
            echo '<div class="isotope-item category">
                    <img src="'.$hinhdm.'" alt="">
                    <h4>
                        <a href="#">'.$tendm.'</a>
                    </h4>
                </div>';
        }
    ?>
    <!-- <div class="isotope-item category">
        <img src="image/gnddddw003706-nhan-kim-cuong-vang-trang-14k-pnj-true-love-19-1.png" alt="">
        <h4>
            <a href="#">Wedding ring</a>
        </h4>
    </div>
    <div class="isotope-item category">
        <img src="image/smxmxmk000062-mat-day-chuyen-bac-dinh-da-pnjsilver-2.png" alt="">
        <h4>
            <a href="#">Necklace</a>
        </h4>
    </div>
    <div class="isotope-item category">
        <img src="image/sbxmxmk000155-bong-tai-bac-dinh-da-pnjsilver-4002.png" alt="">
        <h4>
            <a href="#">Earrings</a>
        </h4>
    </div> -->
    
</div>
</div>

<div class="mcb-backgound">
<div class="image-wrapper mcb-wrap-inner">
    <img src="image/Bộ-Trang-Sức-Kim-Đính-Cương-Nhân-Tạo-iGems-2-scaled.jpg" alt="">
    
        <div class="sale-label">
            <h5>-33%</h5>
        </div>
    
</div>
<div class="mcb-wrap-backgound-overlay mcb-wrap-inner">
    <h2 class="title">Special Offer</h2>
    <p class="title">Tên Sản Phẩm</p>
    <div class="parent-quick-fact">
        <div class="quick-fact">
            <div id="days" class="number-wrap"></div>
            <h3 class="tittle">Days</h3>
        </div>
        <div class="quick-fact">
            <div id="hours" class="number-wrap"></div>
            <h3 class="tittle">Hours</h3>
            
        </div>
        <div class="quick-fact">
            <div id="minutes" class="number-wrap"></div>
            <h3 class="tittle">Minutes</h3>
        </div>
        <div class="quick-fact">
            <div id="seconds" class="number-wrap"></div>
            <h3 class="tittle">Seconds</h3>
        </div>
    </div>
    <h3>Tên Sản Phẩm</h3>
    <p class="title">Giá</p>
    <button class="button-size-2">Buy Now</button>
</div>
</div>

<div class="mcb mcb-wrap two">
<div class="mcb-column-inner">
    <h2 class="title">Our newest Products</h2>
    <div class="column-attr mfn-inline-editor">
        Best choice
    </div>
</div>
<div class="products-wrapper">
    
    <?php
    foreach ($spnew as $sp) {
        extract($sp);
        $hinh=$img_path."sanpham/".$img;
        $check=$id_sp;
        $foundItems = array();
        foreach ($_SESSION['mycart'] as $sp) {
        if ($sp[0] == $check) {
        $foundItems[] = $sp[0];
        }
        }
        $dh=0;
        if(count($foundItems)==0){
            $dh='name="addtocart"';
        } else {
            $dh='onclick="thongbao()"';
        }
        echo '<div class="isotope-item product">
                    <img src="'.$hinh.'" alt="">
                    <h4><a href="#">'.$tensp.'</a></h4>
                    <span><del>'.$giacu.'</del> - '.$giamoi.'</span>
                    <button class="onsale sale-label">On Sale</button>
                    <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id" value="'.$id_sp.'">
                        <input type="hidden" name="name" value="'.$tensp.'">
                        <input type="hidden" name="giacu" value="'.$giacu.'">
                        <input type="hidden" name="giamoi" value="'.$giamoi.'">
                        <input type="hidden" name="img" value="'.$img.'">
                        <input type="submit" '.$dh.' value="Thêm vào giỏ hàng">
                    </form>
                </div>';
    }
    ?>
    <!-- <div class="isotope-item product">
        <img src="image/sbxmxmk000155-bong-tai-bac-dinh-da-pnjsilver-4002.png" alt="">
        <h4><a href="#">ABC</a></h4>
        <span>110$ - 220$</span>
        <button class="onsale sale-label">On Sale</button>
        <div class="hover-product">
            <div class="icons-product">
                <a class="icon first-icon"  href="#"><i class="fas fa-heart"></i></a>
                <a class="icon" href="#"><i class="fas fa-snowflake"></i></a>
                <a class="icon preview-icon" data-preview="preview" ><i class="fas fa-link"></i></a>
            </div>
        </div>
    </div> -->
    
    <!-- <div class="isotope-item product">
        <img src="image/sbxmxmk000155-bong-tai-bac-dinh-da-pnjsilver-4002.png" alt="">
        <h4><a href="#">ABC</a></h4>
        <span>110$ - 220$</span>
        <button class="onsale sale-label">On Sale</button>
    </div> -->
</div>
</div>

<div class="backgound mcb" style="background-image: url(image/nhan1-e99b36_preview_rev_1.png);">


    <div class="parent-product">
    <?php
    foreach ($dc2 as $sp) {
        extract($sp);
        $hinh=$img_path."sanpham/".$img;
        echo '<div class="parent-product-overlay product-2">
                <img src="'.$hinh.'" alt="">
                <button class="onsale sale-label">On Sale</button>
                <h4>'.$tensp.'</h4>
                <span><del>'.$giacu.'</del> - '.$giamoi.'</span>
            </div>';
    }
    ?>
        <!-- <div class="parent-product-overlay">
            <img src="image/24b8bf665b798f7fd8418bf16b0cfa66.jpg" alt="">
            <h4>ABC</h4>
            <p>Giá</p>
        </div>
        <div class="parent-product-overlay product-2">
            <img src="image/24b8bf665b798f7fd8418bf16b0cfa66.jpg" alt="">
            <button class="onsale sale-label">On Sale</button>
            <h4>ABC</h4>
            <p>Giá</p>
        </div> -->
    </div>
</div>

<div class="preview content-wrapper" id="preview">
<a class="icon-out">
    <i class="fas fa-plus"></i>
</a>
<div class="preview-image" style="background-image: url(image/photo-1-1571065781331448666071.jpg);">

</div>
<div class="information-product">
    <div class="text-content-product">
        <h3 class="heading">Tên Sản Phẩm</h3>
        <span class="price"> <del>Giá</del>  -  Giá</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus rem repellat ipsam ex soluta voluptas error ducimus illum consequuntur sit perferendis, inventore aliquam! Deserunt quisquam recusandae libero excepturi cumque dignissimos dolor cupiditate. Et harum ab doloribus dolores dolorum reiciendis provident minus sed eum nulla dolorem, necessitatibus cupiditate mollitia aperiam.</p>
        <p style="font-size: 20px; margin-top:10px ;color: black;">Material</p>
    </div>
    <div class="variations-form cart">
        <div class="input-number">
            <input type="number" min="1" max="10" name="" value="1">
            <button class="plus"><i class="fas fa-plus"></i></button>
            <button class="minus"><i class="fas fa-minus"></i></button>
            <input type="submit" value="Add to Cart">
        </div>
        <p>Tags: </p>
    </div>
</div>
</div>
<div class="preview content-wrapper" id="preview_1">
<a class="icon-out">
    <i class="fas fa-plus"></i>
</a>
<div class="preview-image" style="background-image: url(image/photo-1-1571065781331448666071.jpg);">

</div>
<div class="information-product">
    <div class="text-content-product">
        <h3 class="heading">Tên Sản Phẩm</h3>
        <span class="price"> <del>Giá</del>  -  Giá</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus rem repellat ipsam ex soluta voluptas error ducimus illum consequuntur sit perferendis, inventore aliquam! Deserunt quisquam recusandae libero excepturi cumque dignissimos dolor cupiditate. Et harum ab doloribus dolores dolorum reiciendis provident minus sed eum nulla dolorem, necessitatibus cupiditate mollitia aperiam.</p>
        <p style="font-size: 20px; margin-top:10px ;color: black;">Material</p>
    </div>
    <div class="variations-form">
        <div class="input-number">
            <input type="number" min="1" max="10" name="" value="1">
            <button class="plus"><i class="fas fa-plus"></i></button>
            <button class="minus"><i class="fas fa-minus"></i></button>
            <input type="submit" value="Add to Cart">
        </div>
        <p>Tags: </p>
    </div>
</div>
</div>

<div class="cart cart-product" id="cart">
<a class="outCart" style="cursor: pointer;"><i class="fas fa-times"></i></a>
<span>
    <i class="fas fa-shopping-cart"></i>
    Cart
</span>
</div>

<form action="index.php?act=register" method="post">
<div class="registration" id="register">
<h3>Registation</h3>
<div  class="form-label">
    <label for="">User name:</label>
    <input type="text" name="username">
</div>
<div  class="form-label">
    <label for="">Email:</label>
    <input type="text" name="email">
</div>
<div class="form-label">
    <label for="">Password:</label>
    <input type="text" name="password">
</div>
<div class="form-label">
    <label for="">Confirm Password:</label>
    <input type="text" name="confirm">
</div>
<input type="submit" name="register">
<br>
</div>
</form>

<form action="index.php?act=login" method="post">
<div class="registration" id="login">
<h3>Login</h3>
<div  class="form-label">
    <label for="">User name:</label>
    <input type="text" name="username">
</div>

<div class="form-label">
    <label for="">Password:</label>
    <input type="text" name="password">
</div>
<input type="submit" name="login">
<h4>
    <?php
    if(isset($THONG_BAO) && ($THONG_BAO!="")){
        echo $THONG_BAO;
    }
    ?>
    </h4>
</div>
</form>
