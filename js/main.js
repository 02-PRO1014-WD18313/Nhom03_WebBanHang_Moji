document.addEventListener("DOMContentLoaded", function() {
    var transferSlides = document.querySelectorAll(".transfer-slides ul li");
    // console.log(transferSlides);
    var slides = document.querySelectorAll(".slides ul li");
    // console.log(slides);
    // var slides = document.querySelectorAll(".slides ul li");
    var time = setInterval(function(){
            autoSlide();
    }, 4000);     
   
    // autoSlide();

    for(var i = 0; i < transferSlides.length; i++){
        
        transferSlides[i].addEventListener("click", function(){
            clearInterval(time);
            for(var j = 0; j < transferSlides.length; j++){
                transferSlides[j].classList.remove("transfer");
            }
            this.classList.add("transfer");
            var buttonActive = this ;
            var buttonLct = 0;
            for(var buttonLct = 0; buttonActive = buttonActive.previousElementSibling ; buttonLct++){

            }
            // console.log(buttonLct);
            for(var i = 0; i < slides.length; i++){
                slides[i].classList.remove('active');
                slides[buttonLct].classList.add('active');
            }
            
        }); 
    }
    function autoSlide(){
        var slidesLct = 0;
        var slideNow = document.querySelector('.slides ul li.active');
        // console.log(slideNow);
        for(var slidesLct = 0; slideNow = slideNow.previousElementSibling; slidesLct++){

        }
        if(slidesLct < slides.length - 1){
            for(var i = 0; i < slides.length; i++){
                slides[i].classList.remove('active');
                transferSlides[i].classList.remove('transfer');
            }
            slides[slidesLct].nextElementSibling.classList.add('active');
            transferSlides[slidesLct].nextElementSibling.classList.add('transfer');
        }else{
            for(var i = 0; i < slides.length; i++){
                slides[i].classList.remove('active');
                transferSlides[i].classList.remove('transfer');
            }
            slides[0].classList.add('active');
            transferSlides[0].classList.add('transfer');
        }
    }
    preview();
    function preview(){
        var click = document.querySelectorAll('.preview-icon');
        var content = document.querySelectorAll('.content-wrapper');
        var out = document.querySelectorAll('.icon-out');
        // console.log(out);
        for(var k=0; k < click.length; k++){
            click[k].addEventListener('click', function(){
                var showingUp = this.getAttribute('data-preview');
                var showingContent = document.getElementById(showingUp);
                showingContent.classList.add('rushOut');
                // console.log(showingContent);
                for(var i=0; i < out.length; i++){
                    out[i].addEventListener('click', function(){
                        showingContent.classList.remove('rushOut');
                    })
                }
            })
        }
    }

    countdown();
    function countdown(){
        let countDown = new Date("Nov 25, 2023 00:00:00").getTime();
        x = setInterval(function(){
            let now = new Date().getTime();
            let distance = countDown - now;
            // document.getElementById('days').innerText = Math.floor(distance / (1000 * 60 * 60 * 24));
            // document.getElementById('hours').innerText = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            // document.getElementById('minutes').innerText = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            // document.getElementById('seconds').innerText = Math.floor((distance % (1000 * 60)) / 1000);
            if(distance < 0){
                clearInterval(x);
            }
        }, 0);
    }

    cart();
    function cart(){
        var icons = document.querySelectorAll('.icons .icon-header');
        var outCart = document.querySelectorAll('.fa-times');
        console.log(outCart);
        for(var i = 0; i < icons.length; i++){
           icons[i].addEventListener('click', function(){
                var showingUp = this.getAttribute('data-cart');
                var showingContent = document.getElementById(showingUp);
                for(var j = 0; j < showingContent.length; j++){
                    this.classList.remove('rushOut')
                }
                showingContent.classList.add('rushOut');
                for(var j = 0; j < outCart.length; j++){
                    outCart[j].addEventListener('click', function(){
                        showingContent.classList.remove('rushOut');
                    })
                }
           }) 
        }
    }


}, false);

function thongbao() {
    alert("Sản phẩm đã có trong giỏ hàng!!");
}

function adjustCounter(productId, value) {
    console.log("productId:", productId);
    console.log("value:", value);
    console.log(document.getElementsByName(productId).value);
    
    var counterInput = document.getElementsByName(productId);
    var counterValue = parseInt(counterInput.value);

    if (value === 1 || (value === -1 && counterValue > 0)) {
        counterValue += value;
        counterInput.value = counterValue;

        // // Lấy giá của sản phẩm từ ô chứa giá
        // var productPriceCell = counterInput.closest('.count').querySelector('.product-price');
        // var pricePerUnit = parseFloat(productPriceCell.textContent);

        // // Tính toán lại thành tiền và cập nhật giá trị trong ô "Thành tiền"
        // var totalPrice = pricePerUnit * counterValue;
        // var totalPriceCell = counterInput.closest('.count').querySelector('.total-price');
        // totalPriceCell.textContent = totalPrice;

        // Thêm mã để cập nhật thành tiền tương ứng nếu cần
    }
}