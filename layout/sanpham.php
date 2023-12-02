<?php
    if(isset($loadAll_sp_dm)){
        foreach($loadAll_sp_dm as $value){
            extract($value);
        }
    }
?>
<div class="container_sp">
    <div class="filter">
        <div class="price_sp">
            <h2 style="margin-top:10px">Price</h2>
            <div class="price-input">
                <div class="field">
                    <span>Min</span>
                    <input type="number" value="2500" class="input-min">
                </div>
                <div class="separator">-</div>
                <div class="field">
                    <span>Max</span>
                    <input type="number" value="7500" class="input-min">
                </div>
            </div>
            <div class="slide_sp">
                <div class="progress"></div>
            </div>
            <div class="range-input">
                <input type="range" name="" class="range-min" min="0"  max="10000" value="2500" step="100" >
                <input type="range" name="" class="range-max" min="0" max="10000" value="7500"  step="100">
            </div>
        </div>
        <hr>
        <div class="category_sp">
            <h2 style="margin-top:10px">Danh Mục</h2>
            <ul>
                <li>
                    <input data-products="NH01" type="checkbox" value="?id_dm=NH01" name="category[]">
                    <span>Nhẫn</span>
                </li>
                <li>
                    <input data-products="LT01" type="checkbox" value="index.php?act=sanpham&id_dm=LT01" name="category[]">
                    <span>Lắc Tay</span>
                </li>
                <li>
                    <input data-products="DC01" type="checkbox" value="index.php?act=sanpham&id_dm=DC01" name="category[]">    
                    <span>Dây Chuyền</span>
                </li>
                <li>
                    <input data-products="BT01" type="checkbox" value="index.php?act=sanpham&id_dm=BT01" name="category[]">    
                    <span>Bông Tai</span>
                </li>
            </ul>
        </div>
        <hr>
        <div class="size_sp">
            <h2>Size</h2>
            <ul>
                <li>8cm</li>
                <li>8cm</li>
                <li>8cm</li>
                <li>8cm</li>
                <li>8cm</li>
                <li>8cm</li>
                <li>8cm</li>
                <li>8cm</li>
                <li>8cm</li>
            </ul>
        </div>
        <hr>
        <div class="sale_sp">
            <h2>Sale</h2>
            <ul>
                <li>
                    <input type="checkbox" name="sale[]">    
                    <span>Sale</span>
                </li>
                <li>
                    <input type="checkbox" name="name[]">    
                    <span>No Sale</span>
                </li>
            </ul>
        </div>
    </div>
    <!-- <hr> -->
    <div class="line"></div>
    
    <div class="all-products" id="all-products">
        <?php
            if(isset($loadAll_sp)):

                foreach($loadAll_sp as $value):
                    extract($value);            
                
        ?>
        <div class="product_sp">
            <img src="upload/sanpham/<?php echo $img ?>" alt="">
            <p style="text-align:center"><a href="index.php?act=sanphamct&id_sp=<?php echo $id_sp?>" class="product-title"><?php echo $tensp?></a></p> <br>
            <div class="price" >
                <p class="newprice"><?php echo number_format($giamoi, 0 , ','); ?> VNĐ</p>
                <p class="oldprice"><?php echo number_format($giacu, 0 , ','); ?> VNĐ</p>
            </div>
            <div class="buy-now">
                <button class="detail">Detail</button>
                <button class="buyNow">Buy Now</button>
            </div>
        </div>
    <?php endforeach;
        endif;
    ?>
        
    </div>
    <div class="all-products"  id="NH01" style="display:none;">
        <?php
            if(isset($loadAll_sp_dm)):
                foreach($loadAll_sp_dm as $value):
                    extract($value);            
            
        ?>
        <div class="product_sp" >
            <img src="upload/sanpham/<?php echo $img ?>" alt="">
            <p style="text-align:center"><a href="index.php?act=sanphamct&id_sp=<?php echo $id_sp?>" class="product-title"><?php echo $tensp?></a></p> <br>
            <div class="price" >
                <p class="newprice"><?php echo number_format($giamoi, 0 , ','); ?> VNĐ</p>
                <p class="oldprice"><?php echo number_format($giacu, 0 , ','); ?> VNĐ</p>
            </div>
            <div class="buy-now">
                <button class="detail">Detail</button>
                <button class="buyNow">Buy Now</button>
            </div>
        </div>
    <?php endforeach;
        endif; ?>
    
        
    </div>
</div>

<script>
    // console.log(location.href);
    document.addEventListener('DOMContentLoaded', function(){
        let checkbox = document.querySelectorAll('.category_sp input[type=checkbox]');
        let allProducts = document.getElementById('all-products');
        for(let i = 0; i < checkbox.length; i++){
            checkbox[i].addEventListener('change', function(e){
                let showing = this.getAttribute('data-products');
                let showingContent = document.getElementById(showing);
                console.log(showing);
                console.log(showingContent);
                if(this.checked == true){
                    
                    if(this.value != ''){
                        window.location.replace(this.value);
                        
                    }
                }else {
                    
                }
            })
        }
        
    })

</script>
