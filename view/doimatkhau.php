
<div  class="mt" style="height: auto;width: 100%;background-color: rgba(0, 0, 0, 0.03);">
       <div class="box" style="width: 100%;height:62px;padding: 20px 9%;display: block;border-bottom: 1px solid #66666637;background-color: #ffffff;padding-top: 10px;">
            <div style="float: left;color: rgb(199, 3, 3);font-size: x-large;padding-right: 30px;border-right: 1px solid rgb(199, 3, 3);">
                <p style="margin: 0px;">QUẢN LÝ TÀI KHOẢN</p>
            </div>
            <div style="float: right;width: 30%;">
                <form action="" style="display:flex ;background-color: #666;border-radius: 5px;">
                    <input style="display: inline-block;height: 5vh;width: 75%;border-radius: 5px 0 0 5px;border: 2px solid rgb(199, 3, 3);font-size: 60%;" type="text" name="" id="" placeholder="    Tìm kiếm sản phẩm">
                    <button class="sch" style="background-image: url('image/search.png');"></button>
                   
                </form>
            </div>
       </div>
       <?php
        
                                if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                                    extract($_SESSION['user']);
                                    $rol="";
                                    if($role==1){
                                        $rol='<a class="menu-item" href="../Nhom03_WebBanHang_Moji/admin/admin-template/index.php">Trang quản trị</a>';
                                    }
                                }

                                
                            ?>
       <div class="box_1" style="width: 100%;padding:20px 9%;height: auto;display: flex;">
        <div class="boxleft">
            <a class="menu-item" href="index.php?act=account">Đơn hàng</a>
            <a class="menu-item" href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
            <?= $rol?>
            <a class="menu-item" href="index.php?act=thoat">Thoát</a>
          </div>
          <div class="boxright" style="background-color: rgba(0, 0, 0, 0.01)">
                            <form action="index.php?act=edit_taikhoan" method="post">
                            <div class="bi">
                                    Mật khẩu hiện tại
                                    <input  type="text" name="password" value="">
                                </div>
                                <div class="bi">
                                    Mật khẩu mới
                                    <input  type="text" name="pw1" value="">
                                </div>
                                <div class="bi">
                                    Nhập lại mật khẩu
                                    <input type="text" name="pw2" value="" id="">
                                </div>
                                <div class="bi">
                                    <input type="hidden" name="id" value="<?=$id?>"  id="">
                                    <input type="hidden" name="user" value="<?=$username?>" id="">
                                    <input type="submit" name="capnhatmk" value="Cập nhật" id="">
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
