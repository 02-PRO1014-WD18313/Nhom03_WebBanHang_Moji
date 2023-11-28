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
   
    


}, false);

function thongbao() {
    alert("Sản phẩm đã có trong giỏ hàng!!");
}

var productData = [];
var tong=parseInt(document.getElementById('tong').innerText);
   
function updateCounter(id, value, tt,tong) {
    document.getElementById(id).value = value;
    document.getElementById(id).closest('tr').querySelector('.total-price').innerText=tt;
    document.getElementById('tong').innerText = tong;
  }

  function increment(id) {
    let counterValue = document.getElementById(id).value;
    let price = parseInt(document.getElementById(id).closest('tr').querySelector('.product-price').innerText);
    let pricett = 0;
    counterValue++;
    pricett=counterValue*price;
    tong+=price;
    updateCounter(id, counterValue,pricett,tong);
  }

  function decrement(id) {
    let counterValue = parseInt(document.getElementById(id).value);
    let price = parseInt(document.getElementById(id).closest('tr').querySelector('.product-price').innerText);
    let pricett = 0;
    if (counterValue > 0) {
      counterValue--;
      pricett=counterValue*price;
      tong-=price;
      updateCounter(id, counterValue, pricett,tong);
    }
  }

