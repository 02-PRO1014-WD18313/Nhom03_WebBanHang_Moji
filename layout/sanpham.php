<?php
    if(isset($loadAll_sp)){
        // print_r($loadAll_sp);
        // echo json_encode($loadAll_sp, JSON_UNESCAPED_SLASHES);
    }        
    if(isset($load_idsp_tensp)){
        
    }
    if(isset($loadAll_sp_dm)){
        // foreach($loadAll_sp_dm as $value){
        //     extract($value);
        //     print_r($value);
        // }
    }
    if(isset($loadAll_sp_range)){
        // foreach($loadAll_sp_range as $value){
        //     extract($value);
        //     echo $tensp;
        // }
    }
    if(isset($loadAll_sp_dm)){
        
    }
?>


<form action="" class="search-product" autocomplete="off">
    <div class="autocomplete-wrapper" id="autocomplete-wrapper">
        <input id="autocomplete-input" type="text" placeholder="Search" class="search">
    </div>
        <button type="submit" class="btn-submit">Send</button>
</form>
<?php
    
    if(isset($aboutPrice)){
        echo $aboutPrice;
    }
?>
<div class="container_sp">
    <div class="filter">
        <div class="price_sp">
            <h2 style="margin-top:10px">Price</h2>
            <div class="price-input">
                <div class="field">
                    <span>Min</span>
                    <input type="number" value="2500000" class="input-min">
                </div>
                <div class="separator">-</div>
                <div class="field">
                    <span>Max</span>
                    <input type="number" value="7500000" class="input-min">
                </div>
            </div>
            <div class="slide_sp">
                <div class="progress"></div>
            </div>
            <div class="range-input">
                <form action="index.php?act=range" method="POST">
                    <input type="range" name="minPrice" class="range-min" min="0"  max="10000000" value="2500000" step="1000" >
                    <input type="range" name="maxPrice" class="range-max" min="0" max="10000000" value="7500000"  step="1000">
                    <button name="submitRange" type="submit" style="padding:10px; margin-top:10px;">ABCXYZ</button>
                </form>
            </div>
        </div>
        <hr>
        <div class="category_sp">
            <h2 style="margin-top:10px; margin-bottom:10px">Danh Mục</h2>
            <form action="index.php?act=danhmuc" method="POST">
                <button type="submit" name="NH01" >Nhẫn</button>
                <button type="submit" name="LT01">Lắc Tay</button>
                <button type="submit" name="DC01">Dây Chuyền</button>
                <button type="submit" name="BT01">Bông Tai</button>
            </form>
        </div>
        <hr>
        <!-- <div class="size_sp">
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
        </div> -->
        <!-- <hr> -->
        <!-- <div class="sale_sp">
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
        </div> -->
    </div>
    <!-- <hr> -->
    <div class="line"></div>
    
    <div class="all-products" id="all-products">
        
        
    </div>
    
</div>
<div class="content-pagging">
    <ul>
        <li class="btn-back"><i class="fas fa-angle-left"></i></li>
        <div class="number-page" id="numberpage">
            <!-- <li class="active-pagging">1</li>
            <li>2</li>
            <li>3</li> -->
        </div>
        <li class="btn-next"><i class="fas fa-angle-right"></i></li>
    </ul>
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
<script>
    <?php if(isset($load_idsp_tensp)): ?>;
    var myObj = <?php echo json_encode($load_idsp_tensp); ?>;
    <?php endif; ?>;
    <?php if(isset($loadAll_sp_range)): ?>;
    var myObj = <?php echo json_encode($loadAll_sp_range); ?>;
    <?php endif; ?>;
    <?php if(isset($loadAll_sp_dm)): ?>;
    var myObj = <?php echo json_encode($loadAll_sp_dm); ?>;
    <?php endif; ?>;

    

    
    
    // console.log(myObj);
    // console.log(myObj[1].id_sp);
    const inputEL = document.getElementById('autocomplete-input');
    // console.log(inputEL);
    inputEL.addEventListener("input", onInputChange);

    function onInputChange(){
        
        removeDropDown();
        let value = this.value;
        if(value.length === 0) return;
        let data = search(value, myObj);
        console.log(data);
            createAutoComplete(data);
    }
    
    function search(value, data){
        const filteredData = [];
        for(var i = 0; i < data.length; i++) {
            value = value.toLowerCase();
            let name = data[i].tensp.toLowerCase();
            let href = data[i].id_sp;
            let obj = [
                name,
                href
            ]
            if(name.includes(value)){
                filteredData.push(obj);
            }
        }
        return filteredData;
    }
    function createAutoComplete(list){
        const listEl = document.createElement('ul');
        listEl.className = "autocomplete-list";
        listEl.id = "autocomplete-list";
        document.querySelector('#autocomplete-wrapper').appendChild(listEl);
        list.forEach((name) => {
            let listItem = document.createElement('li');
            let aName = document.createElement('a');
            console.log(name);
            for(let i = 0; i < name.length; i++){
                aName.innerHTML = name[0];
                // console.log(name[1]);
                aName.setAttribute("href", `index.php?act=sanphamct&id_sp=${name[1]}`);
            }
            aName.style.color = "black";
            listItem.appendChild(aName);
            listEl.appendChild(listItem);
        });
    }

    function removeDropDown(){
        const listEl = document.querySelector('#autocomplete-list');
        if(listEl) listEl.remove();
    }
    
</script>

<script >
    document.addEventListener('DOMContentLoaded', function(){
        <?php
            if(isset($loadAll_sp)){
        ?>
            let myProduct = <?php echo json_encode($loadAll_sp)?>;
        <?php
            }
            elseif(isset($loadAll_sp_range)){
        ?>
            let myProduct = <?php echo json_encode($loadAll_sp_range)?>;
            // console.log();
        <?php }elseif(isset($loadAll_sp_dm)){  ?>;
            let myProduct = <?php echo json_encode($loadAll_sp_dm)?>;

            <?php }?>
        // console.log(myProduct);
        let perpage = 9;
        let CurrentPage = 1;
        let start = 0;
        let end = perpage;
        const totalPage = Math.ceil(myProduct.length / perpage);
        // console.log(totalPage);
        const back = document.querySelector('.btn-back');
        const next = document.querySelector('.btn-next');
        
        function getCurrentPage(CurrentPage){
            start = (CurrentPage - 1 ) * perpage;
            end = CurrentPage * perpage;
            // console.log(start, end);
        }
        // getCurrentPage(2);

        function renderProduct(){
            html ="";
            const content = myProduct.map((item, index) => {
                if(index >= start && index < end){

                html += '<div class="product_sp">';
                html += `<img src="upload/sanpham/${item.img}" alt="" class="img-product">`
                html += '<p>';
                html += `<a style="color:black" href="index.php?act=sanphamct&id_sp=${item.id_sp}">${item.tensp}`
                html += '</a>';
                html += '</p>';
                html += '<br>';
                html += '<div class="price">';
                html += `<p class="oldprice">${item.giacu} VNĐ`;
                html += '</p>';
                html += `<p class="newprice">${item.giamoi} VNĐ`;
                html += '</p>';
                html += '</div>';
                html += '</div>';
                return html;
            }
                
            });
            document.getElementById('all-products').innerHTML = html;
        }
        renderProduct();
        renderpagination();

        function renderpagination(){
            let html = "";
            html += `<li class="active-pagging">1</li>`;
            for(let i = 2 ; i <= totalPage ; i++){
                html += `<li>${i}</li>`;
            }
            document.getElementById('numberpage').innerHTML = html;
        }


        function changpages(){
            const currentPages = document.querySelectorAll('#numberpage li');
            console.log(currentPages);
            for(let i = 0 ; i < currentPages.length ; i++){
                currentPages[i].addEventListener('click', function(){
                    const value = i+1;
                    console.log(value);
                    getCurrentPage(value);
                    // console.log(getCurrentPage(value));
                    renderProduct();
                }); 
            }
        }

        changpages()
        
        next.addEventListener('click', function(){
            CurrentPage++;
            
            // console.log(start, end);
            if(CurrentPage > totalPage){
                CurrentPage = totalPage;
            }
            // console.log(start, end);
            // if(CurrentPage === totalPage){
            //     document.querySelector('.btn-next').classList = 'btn-active';
            // }
            getCurrentPage(CurrentPage);
            renderProduct();
        });
        back.addEventListener('click', function(){
            CurrentPage--;
            if(CurrentPage <= 1 ){
                CurrentPage = 1;
            }
            // console.log(start, end);
            getCurrentPage(CurrentPage);
            renderProduct();
        });
    });
</script>


<!--  -->
