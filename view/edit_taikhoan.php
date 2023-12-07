
<div  class="mt" style="height: auto;width: 100%;background-color: rgba(0, 0, 0, 0.03);">
       <div class="box" style="width: 100%;height:75px;padding: 20px 9%;display: block;border-bottom: 1px solid #66666637;background-color: #ffffff;padding-top: 10px;">
            <div style="float: left;color: rgb(199, 3, 3);font-size: x-large;padding-right: 30px;border-right: 1px solid #666;">
                <p style="margin: 0px;">QUẢN LÝ TÀI KHOẢN</p>
            </div>
            <div style="float: right;width: 30%;">
                <form action="" style="display:flex ;background-color: #666;border-radius: 5px;">
                    <input style="display: inline-block;height: 5vh;width: 75%;border-radius: 5px 0 0 5px;border: 2px solid #666;font-size: 60%;" type="text" name="" id="" placeholder="    Tìm kiếm sản phẩm">
                    <button class="sch" style="background-image: url('image/search.png');"></button>
                   
                </form>
            </div>
       </div>
       <?php
                                if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                                    extract($_SESSION['user']);
                                    $rol="hidden";
                                    if($role==1){
                                        $rol="";
                                    }
                                }
                            ?>
       <div class="box_1" style="width: 100%;padding:20px 9%;height: auto;display: flex;">
        <div class="boxleft">
            <a class="menu-item" href="index.php?act=account">Đơn hàng</a>
            <a class="menu-item" href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
            <a class="menu-item" <?= $rol ?>  href="../Nhom03_WebBanHang_Moji/admin/admin-template/index.php">Trang quản trị</a>
            <a class="menu-item" href="index.php?act=thoat">Thoát</a>
          </div>
          <div class="boxright" style="background-color: rgba(0, 0, 0, 0.01)">
                            
                            <form action="index.php?act=edit_taikhoan" method="post">
                            <div class="bi">
                                    Họ và tên
                                    <input  type="text" name="name" value="<?=$name?>">
                                </div>
                                <div class="bi">
                                    Email
                                    <input  type="email" name="email" value="<?=$email?>">
                                </div>
                                <div class="bi">
                                    Tên đăng nhập
                                    <input type="text" name="user" value="<?=$username?>" id="">
                                </div><div class="bi">
                                    Mật khẩu
                                    <input type="text"  value="<?=$password?>" name="pass" id="">
                                </div>
                                <div class="bi">
                                    Địa chỉ
                                    <input  type="text" value="<?=$dia_chi?>" name="address">
                                </div>
                                <div class="bi">
                                    Điện thoại
                                    <input  type="text" value="<?=$sdt?>" name="tel">
                                </div>
                                <div class="bi">
                                    <input type="hidden" name="id" value="<?=$id?>"  id="">
                                    <input type="submit" name="capnhat" value="Cập nhật" id="">
                                    <input type="reset" name="" value="Nhập lại" id="">
                                </div>
                            </form>
                            <h2 class="thongbao">
                            <?php
                            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                        ?>
                            </h2>

        </div>

    </div>
