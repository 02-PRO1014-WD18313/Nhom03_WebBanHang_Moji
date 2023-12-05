
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
        ?>
<div class="section_wrapper section_wrapper_1 " style="background-image: url(upload/sanpham/<?php echo $value['img']; ?>);">
    <div class="section_title section_title_1">
        <h5>Our recommendation</h5>
        <h4><?php echo $value['tensp']; ?></h4>
        <p><?php echo $value['motangan']; ?></p>
        <a href="" class="button button_size_2">
            <span class="button_label">Buy Now</span>
        </a>
    </div>
</div>
<?php endforeach; ?>
</div>

<div class="mcb mcb-wrap one">
<div class="mcb-column-inner">
    <h3 class="title">Danh Mục Sản Phẩm</h3>
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
    <h3 class="title">Sản Phẩm Mới</h3>
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
        <p><a href="#" class="product-title"><?php echo $tensp?></a></p><br>
        <div class="price">
            <p class="newprice"><?php echo number_format($value['giamoi'], 0 , ','); ?> VNĐ</p>
            <p class="oldprice"><?php echo number_format($value['giacu'], 0 , ','); ?> VNĐ</p>
        </div>
        <button class="onsale sale-label">On Sale</button>
        <div class="hover-product">
            <div class="icons-product">
                <a class="icon preview-icon" data-preview="preview"  href="index.php?act=sanphamct&id_sp=<?= $id_sp ?>">
                    <i class="fas fa-link"></i></a>
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
    <h3 class="title">Sản Phẩm Bán Chạy</h3>
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
        <p><a href="#" class="product-title"><?php echo $tensp?></a></p><br>
        <div class="price">
            <p class="newprice"><?php echo number_format($value['giamoi'], 0 , ','); ?> VNĐ</p>
            <p class="oldprice"><?php echo number_format($value['giacu'], 0 , ','); ?> VNĐ</p>
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
</div>



