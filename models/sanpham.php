<?php 
    function insert_sanpham($tensp, $masp, $giacu, $giamoi, $soluong, $mota, $motangan, $img, $iddm) {
        $sql = "INSERT INTO `sanpham`(`tensp`, `id_sp`, `giacu`, `giamoi`, `soluong`, `mota`, `motangan`, `img`, `id_dm`)
        VALUES ('$tensp', '$masp', '$giacu', '$giamoi', '$soluong', '$mota', '$motangan', '$img', '$iddm')";
        pdo_execute($sql);
    }

    function delete_sanpham($id) {
        $sql = "DELETE FROM `sanpham` WHERE `id_sp` = '$id'";
        pdo_execute($sql);
    }

    function loadAll_sp() {
        $sql = "SELECT * FROM `sanpham`";
        $data_sp = pdo_query($sql);
        return $data_sp;       
    }


    function loadAll_sp_top8() {
        $sql = "SELECT * FROM `sanpham` order by `id_sp` desc limit 0,8";
        $data_sp = pdo_query($sql);
        return $data_sp;       
    }

    function loadAll_sp_top2() {
        $sql = "SELECT * FROM `sanpham` order by `soluong` desc limit 0,2";
        $data_sp = pdo_query($sql);
        return $data_sp;       
    }

    function loadAll_sp_highlight() {
        $sql = "SELECT * FROM `sanpham` order by `luot_ban` desc limit 0,8";
        $data_sp = pdo_query($sql);
        return $data_sp;       
    }

    function loadOne_sp($id) {
        $sql = "SELECT * FROM `sanpham` where `id_sp` = '$id'";
        $get_sp = pdo_query_one($sql);
        return $get_sp;
    }


    function loadOne_sp_nhan_home(){
        $sql = "select * from sanpham where id_dm = 'NH01' order by soluong desc limit 1";
        $get_sp = pdo_query_one($sql);
        return $get_sp;
    }

    function loadOne_sp_daychuyen_home(){
        $sql = "select * from sanpham where id_dm = 'DC01' order by soluong desc limit 1";
        $get_dm = pdo_query_one($sql);
        return $get_dm;
    }

    function update_sp($tensp, $id, $soluong, $giacu, $giamoi, $mota, $motangan, $img, $iddm) {
<<<<<<< HEAD

=======
>>>>>>> 5145f0516ac63b398de1f893e6b1a39fcebd14f7

        if($img != "") {
            $sql = "UPDATE `sanpham` SET `tensp`='$tensp', `id_sp` = '$id', `soluong` = '$soluong', `giacu` = '$giacu', `giamoi` = '$giamoi',
            `mota` = '$mota', `motangan` = '$motangan', `img` = '$img', `id_dm` = '$iddm' WHERE `id_sp` = '$id'";
        }
        else {
            $sql = "UPDATE `sanpham` SET `tensp`='$tensp', `id_sp` = '$id', `soluong` = '$soluong', `giacu` = '$giacu', `giamoi` = '$giamoi',
            `mota` = '$mota', `motangan` = '$motangan', `id_dm` = '$iddm' WHERE `id_sp` = '$id'";
        }
        pdo_execute($sql);
    }


    function productSamilar($id_sp, $id_dm){
        $sql = "select * from sanpham where id_sp <> '$id_sp' and id_dm = '$id_dm'";
        $get_sp = pdo_query($sql);
        return $get_sp;
    }


    function search($key) {
        $sql = "SELECT * FROM `sanpham` WHERE `tensp` like '%".$key."%'";
        $get_sp = pdo_query($sql);
        return $get_sp;
    }
    // function loadAll_sp_top8() {
    //     $sql = "SELECT * FROM `sanpham` order by `id_sp` desc limit 0,8";
    //     $data_sp = pdo_query($sql);
    //     return $data_sp;       
    // }
    function loadAll_sp_dm($id) {
        $sql = "SELECT * FROM `sanpham` WHERE `id_dm` = '$id'";
        $get_sp = pdo_query($sql);
        return $get_sp;
    }
    function load_idsp_tensp(){
        $sql = "SELECT `id_sp`, `tensp` FROM `sanpham` where 1";
        $get_sp = pdo_query($sql);
        return $get_sp;
    }
?>