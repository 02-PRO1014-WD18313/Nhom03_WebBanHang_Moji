
<?php
        if(is_array($data_dm)){
            extract($data_dm);
            // print_r($data_dm);
        }
        if(is_array($data_sp_top8)) {
            extract($data_sp_top8);
        }
        if(is_array($data_sp_top2)) {
            extract($data_sp_top2);
        }
        if(is_array($data_sp_highlight)) {
            extract($data_sp_highlight);
        }
    ?>

<div class="h2">

<h2 class="h2_title">Sản Phẩm Gợi Ý </h2>
</div>
<div class="section">
<?php
    foreach ($data_sp_top2 as $value) :
        extract($value);
?>
<div class="section_wrapper section_wrapper_1 " style="background-image: url(upload/sanpham/<?php echo $value['img']; ?>);">
    <div class="section_title section_title_1">
        <h5>Our recommendation</h5>
        <h4><?php echo $value['tensp']; ?></h4>

<!--         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, fugiat!</p> -->
        <p><?php echo $value['motangan']; ?></p>
        <a href="index.php?act=sanphamct&id_sp=<?php echo $id_sp?>" class="button button_size_2">
            <span class="button_label">Buy Now</span>
        </a>
    </div>
</div>
<?php endforeach; ?>
</div>

<div class="mcb mcb-wrap one">
<div class="mcb-column-inner">
    <h3 class="title">Top Rated Category</h3>
    <div class="column-attr mfn-inline-editor">
        Best choice
    </div>
</div>
<div class="categorys-wrapper ">

    <?php
        foreach ($data_dm as $value):
    ?>
    <div class="isotope-item category">
        <?php echo "<img width='200' src='upload/danhmuc/".$value['img']."' >"; ?>
        <h4>
            <a href="#"><?php echo $value['tendm']?></a>
        </h4>
    </div>
    <?php endforeach; ?>
    

    
</div>
</div>

<div class="mcb-backgound">
<!-- <div class="image-wrapper mcb-wrap-inner">
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
</div> -->
<img src="image/banner2.png" alt="">
</div>

<div class="mcb mcb-wrap two">
<div class="mcb-column-inner">
    <h3 class="title">Our Newest Products</h3>
    <div class="column-attr mfn-inline-editor">
        Best choice
    </div>
</div>
<div class="products-wrapper">
    
<?php
    foreach ($data_sp_top8 as $value) :
        extract($value);
?>
    <div class="isotope-item product">
        <?php echo "<img class='img-product' src='upload/sanpham/".$value['img']."' >";  ?>
        <p><a href="#" class="product-title"><?php echo $tensp?></a></p> <br>
        <div class="price">
            <p class="newprice"><?php echo number_format($value['giamoi'], 0 , ','); ?> VNĐ</p>
            <p class="oldprice"><?php echo number_format($value['giacu'], 0 , ','); ?> VNĐ</p>
        </div>
        <button class="onsale sale-label">On Sale</button>
        <div class="hover-product">
            <div class="icons-product">
                
                <a class="icon" href="index.php?act=sanphamct&id_sp=<?php echo $id_sp?>"><i class="fas fa-link"></i></a>
                <a class="icon preview-icon" data-preview="<?php echo $id_sp ?>" ><i class="fas fa-expand-arrows-alt"></i></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
</div>

    <div class="mcb-backgound">
    <img src="image/banner3.jpg" alt="">
    </div>
    <div class="mcb mcb-wrap two">
<div class="mcb-column-inner">
    <h3 class="title">Our Best-seller Products</h3>
    <div class="column-attr mfn-inline-editor">
        Best choice
    </div>
</div>
<div class="products-wrapper">
<?php
    foreach ($data_sp_highlight as $value) :
        extract($value);
?>
    <div class="isotope-item product">
        <?php echo "<img class='img-product' src='upload/sanpham/".$value['img']."' >";  ?>
        <p><a href="#" class="product-title"><?php echo $tensp?></a></p> <br>
        <div class="price">
            <p class="newprice"><?php echo number_format($value['giamoi'], 0 , ','); ?> VNĐ</p>
            <p class="oldprice"><?php echo number_format($value['giacu'], 0 , ','); ?> VNĐ</p>
        </div>
        <button class="onsale sale-label">On Sale</button>
        <div class="hover-product">
            <div class="icons-product">

                <a class="icon" href="index.php?act=sanphamct&id_sp=<?php echo $id_sp?>"><i class="fas fa-link"></i></a>
                <a class="icon preview-icon" data-preview="<?php echo $id_sp ?>" ><i class="fas fa-expand-arrows-alt"></i></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
</div>


<!-- <div class="preview content-wrapper" id="preview">
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
</div> -->
<?php 
    foreach ($data_sp_top8 as $value) :
        extract($value);
?>
<div class="preview content-wrapper" id="<?php echo $id_sp ?>">
<a class="icon-out">
    <i class="fas fa-plus"></i>
</a>
<div class="preview-image" style="background-image: url(upload/sanpham/<?php echo $img ?>);">

</div>
<div class="information-product">
    <div class="text-content-product">
        <h3 class="heading"><?php echo $tensp ?></h3>
        <p><?php echo $mota ?></p>
        <div class="price" style="margin: 10px">
            <p class="newprice" style="color: rgb(199, 3, 3);"><?php echo number_format($giacu, 0 , ','); ?> VNĐ</p>
            <p class="oldprice" style="color: rgb(199, 3, 3); "><?php echo number_format($giamoi, 0 , ','); ?> VNĐ</p>
        </div>
        <p style="font-size: 20px; margin-top:10px ;color: black;">Size</p>
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

<?php endforeach ?>
<br>
<div class="cart cart-product" id="cart">
<a class="outCart" style="cursor: pointer;"><i class="fas fa-times"></i></a>
<span>
    <i class="fas fa-shopping-cart"></i>
    Cart
</span>
</div>

<form action="index.php?act=register" method="post">
<div class="registration" id="register">
<div class="regis-top">
    <img src="image/z4876602114590_6223b9460e22e4f10da597208a1fa113.png" alt="">
    <h4>Sign Up</h4> <br>
</div>
<div class="form-control">
<div  class="form-label">
    <input type="text" class="form-input" name="name" placeholder="Họ tên">
</div>
<div  class="form-label">
    <input type="text" class="form-input" name="username" placeholder="Username">
</div>
<div  class="form-label">
    <input type="text" class="form-input" name="email" placeholder="Email">
</div>
<div  class="form-label">
    <input type="text" class="form-input" name="sdt" placeholder="Số điện thoại">
</div>
<div  class="form-label">
    <input type="text" class="form-input" name="dia_chi" placeholder="Địa chỉ">
</div>
<div class="form-label">
    <input type="password" class="form-input" name="password" placeholder="Password">
</div>
<div class="form-label">
    <input type="password" class="form-input" name="confirm" placeholder="Confirm password">
</div>
<input type="submit" class="form-button" name="register" value="ĐĂNG KÍ">
</div>
<br>
<a class="outCart"><i class="fas fa-times"></i></a>
</div>
</form>

<form action="index.php?act=login" method="post">
<div class="registration login" id="login">
<div class="login-top">
    <img src="image/z4876602114590_6223b9460e22e4f10da597208a1fa113.png" alt="">
    <h4>Sign In</h4> <br>
</div>
<div class="form-control">
<div  class="form-label">
<input type="text" name="username" class="form-input" placeholder="Username">
</div>

<div class="form-label">
<input type="text" name="password" class="form-input" placeholder="Password">
</div>
<input type="submit" name="login" class="form-button" value="ĐĂNG NHẬP">
    </div>
<a class="outCart"><i class="fas fa-times"></i></a>

</div>
</form>

