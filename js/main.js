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
    // console.log("abc");
    function preview(){
        var click = document.querySelectorAll('.preview-icon');
        var content = document.querySelectorAll('.content-wrapper');
        var out = document.querySelectorAll('.icon-out');
        // console.log(out);
        // console.log("object");
        console.log(click);
        console.log(content);
        for(var k=0; k < click.length; k++){
            click[k].addEventListener('click', function(){
                var showingUp = this.getAttribute('data-preview');
                var showingContent = document.getElementById(showingUp);
                console.log(showingUp);
                console.log(showingContent);
                showingContent.classList.add('rushOut');
                for(var i=0; i < out.length; i++){
                    out[i].addEventListener('click', function(){
                        showingContent.classList.remove('rushOut');
                    })
                }
            })
        }
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
    alert("Đăng nhập để tiếp tục mua hàng!!");
    document.querySelector('[data-cart="login"]').click();
}
function loginFail() {
    alert("Đăng nhập không thành công!!");
    document.querySelector('[data-cart="login"]').click();
}


function updateCounter(id, value) {
    document.getElementById("quantity_" + id).value = value;
  }

  function increment(id) {
    let counterValue = document.getElementById("quantity_" + id).value;
    counterValue++;
    updateCounter(id, counterValue);
  }

  function decrement(id) {
    let counterValue = parseInt(document.getElementById("quantity_" + id).value);
    if (counterValue > 0) {
      counterValue--;
      updateCounter(id, counterValue);
    }
  }

  function validatePassword(password) {
    var passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}$/;
    return passwordRegex.test(password);
}
function validateEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

    function validateRegisterForm() {
        var username = document.getElementById('username').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var confirm = document.getElementById('confirm').value;

        var usernameError = document.getElementById('usernameError');
        var emailError = document.getElementById('emailError');
        var passwordError = document.getElementById('passwordError');
        var confirmError = document.getElementById('confirmError');

        usernameError.innerHTML = "";
        emailError.innerHTML = "";
        passwordError.innerHTML = "";
        confirmError.innerHTML = "";

        // Validate Username
        if (username === "") {
            usernameError.innerHTML = "Vui lòng nhập tên đăng nhập";
            return false;
        } else if (username.length < 8) {
            usernameError.innerHTML = "Tên đăng nhập phải có ít nhất 8 ký tự";
            return false;
        } else if (!/^[A-Za-z0-9]+$/.test(username)) {
            usernameError.innerHTML = "Tên đăng nhập không dấu ";
            return false;
        }

        if (email === "") {
            emailError.innerHTML = "Vui lòng nhập địa chỉ email";
            return false;
        } else if (!validateEmail(email)) {
            emailError.innerHTML = "Địa chỉ email không hợp lệ";
            return false;
        }
        if (password === "") {
            passwordError.innerHTML = "Vui lòng nhập mật khẩu";
            return false;
        } else if (!validatePassword(password)) {
            passwordError.innerHTML = "Mật khẩu phải viết hoa, có chữ và số, và ít nhất 8 ký tự";
            return false;
        }
        if (confirm === "") {
            confirmError.innerHTML = "Vui lòng xác nhận mật khẩu";
            return false;
        } else if (confirm !== password) {
            confirmError.innerHTML = "Xác nhận mật khẩu phải giống với mật khẩu";
            return false;
        }
        // Add other validation checks for email, password, and confirmation here
        alert("Đăng kí thành công!!")
        return true;
    }

    function validateLoginForm() {
        var loginUsername = document.getElementById('loginUsername').value;
        var loginPassword = document.getElementById('loginPassword').value;
    
        var loginUsernameError = document.getElementById('loginUsernameError');
        var loginPasswordError = document.getElementById('loginPasswordError');
    
        loginUsernameError.innerHTML = "";
        loginPasswordError.innerHTML = "";
    
        // Validate Login Username
        if (loginUsername === "") {
            loginUsernameError.innerHTML = "Vui lòng nhập tên người dùng";
            return false;
        }
    
        // Validate Login Password
        if (loginPassword === "") {
            loginPasswordError.innerHTML = "Vui lòng nhập mật khẩu";
            return false;
        }
    
        // Bổ sung các quy tắc kiểm tra khác tại đây nếu cần
    
        return true;
    }
