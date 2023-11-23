
    <?php
        if(is_array($data_dm)){
            extract($data_dm);
            // print_r($data_dm);
        }
        if(is_array($data_sp_top8)) {
            extract($data_sp_top8);
            // print_r($data_sp_top8);
        }
    ?>

<div class="h2">

<h2 class="h2_title">Lorem ipsum dolor <br> sit amet </h2>
</div>
<div class="section">
<div class="section_wrapper section_wrapper_1 " style="background-image: url(image/19\(1\).jpg);">
    <div class="section_title section_title_1">
        <h6>Our recommendation</h6>
        <h2>Do Ngoc</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, fugiat!</p>
        <a href="" class="button button_size_2">
            <span class="button_label">Buy Now</span>
        </a>
    </div>
</div>
<div class="section_wrapper section_wrapper_2 " style="background-image: url(image/24b8bf665b798f7fd8418bf16b0cfa66.jpg);">
    <div class="section_title section_title_2">
        <h6>Our recommendation</h6>
        <h2>Do Ngoc</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, fugiat!</p>
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
        foreach ($data_dm as $value):
    ?>
    <div class="isotope-item category">
        <img src="<?php echo "../upload/danhmuc/$img"?>" alt="">
        <h4>
            <a href="#"><?php echo $value['tendm']?></a>
        </h4>
    </div>
    <?php endforeach; ?>
    

    
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
<?php
    foreach ($data_sp_top8 as $value) :
        extract($value);
        // echo $giacu
?>
<div class="products-wrapper">
    
    <div class="isotope-item product">

        <img src="../upload/danhmuc/bongtaivang.png" alt="">
        <h4><a href="#"> <?php echo $tensp?></a></h4>
        <span><?php echo $giacu?>$ - <?php echo $giamoi?>$</span>
        <button class="onsale sale-label">On Sale</button>
        <div class="hover-product">
            <div class="icons-product">
                <a class="icon first-icon"  href="#"><i class="fas fa-heart"></i></a>
                <a class="icon" href="#"><i class="fas fa-snowflake"></i></a>
                <a class="icon preview-icon" data-preview="preview" ><i class="fas fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>


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
    </div>

    <div class="isotope-item product">
        <img src="image/sbxmxmk000155-bong-tai-bac-dinh-da-pnjsilver-4002.png" alt="">
        <h4><a href="#">ABC</a></h4>
        <span>110$ - 220$</span>
        <button class="onsale sale-label">On Sale</button>

    </div>
    <div class="isotope-item product">
        <img src="image/sbxmxmk000155-bong-tai-bac-dinh-da-pnjsilver-4002.png" alt="">
        <h4><a href="#">ABC</a></h4>
        <span>110$ - 220$</span>
        <button class="onsale sale-label">On Sale</button>
    </div>
    <div class="isotope-item product">
        <img src="image/sbxmxmk000155-bong-tai-bac-dinh-da-pnjsilver-4002.png" alt="">
        <h4><a href="#">ABC</a></h4>
        <span>110$ - 220$</span>
        <button class="onsale sale-label">On Sale</button>

    </div>
    <div class="isotope-item product">
        <img src="image/sbxmxmk000155-bong-tai-bac-dinh-da-pnjsilver-4002.png" alt="">
        <h4><a href="#">ABC</a></h4>
        <span>110$ - 220$</span>
        <button class="onsale sale-label">On Sale</button>

    </div>
    <div class="isotope-item product">
        <img src="image/sbxmxmk000155-bong-tai-bac-dinh-da-pnjsilver-4002.png" alt="">
        <h4><a href="#">ABC</a></h4>
        <span>110$ - 220$</span>
        <button class="onsale sale-label">On Sale</button>

    </div>
    <div class="isotope-item product">
        <img src="image/sbxmxmk000155-bong-tai-bac-dinh-da-pnjsilver-4002.png" alt="">
        <h4><a href="#">ABC</a></h4>
        <span>110$ - 220$</span>
        <button class="onsale sale-label">On Sale</button>
    </div> -->

</div>

<div class="backgound mcb" style="background-image: url(image/nhan1-e99b36_preview_rev_1.png);">


    <div class="parent-product">
        <div class="parent-product-overlay">
            <img src="image/24b8bf665b798f7fd8418bf16b0cfa66.jpg" alt="">
            <h4>ABC</h4>
            <p>Giá</p>
        </div>
        <div class="parent-product-overlay product-2">
            <img src="image/24b8bf665b798f7fd8418bf16b0cfa66.jpg" alt="">
        <button class="onsale sale-label">On Sale</button>
            <h4>ABC</h4>
            <p>Giá</p>
        </div>
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
<a class="outCart"><i class="fas fa-times"></i></a>
</div>
</form>

<form action="index.php?act=login" method="post">
<div class="registration login" id="login">
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
<a class="outCart"><i class="fas fa-times"></i></a>

<h4>
    <?php
    if(isset($THONG_BAO) && ($THONG_BAO!="")){
        echo $THONG_BAO;
    }
    ?>
    </h4>
</div>
</form>
