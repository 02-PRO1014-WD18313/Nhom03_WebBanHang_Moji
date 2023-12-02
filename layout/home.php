
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
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, fugiat!</p>
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
            <input data-id="<?= $id ?>" onclick="addToCart(<?= $id ?>,'<?= $id_sp?>', '<?= $tensp ?>', '<?= $img ?>', <?= $giacu ?>,<?= $giamoi ?>)"  type="submit" value="Add to Cart">
        </div>
        <p>Tags: </p>
    </div>
</div>
</div>

<?php endforeach ?>
<br>



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