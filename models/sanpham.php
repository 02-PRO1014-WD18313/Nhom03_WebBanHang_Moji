<?php 
    function insert_sanpham($tensp, $masp, $giacu, $giamoi, $soluong, $mota, $img, $iddm) {
        $sql = "INSERT INTO `sanpham`(`tensp`, `id_sp`, `giacu`, `giamoi`, `soluong`, `mota`, `img`, `id_dm`)
        VALUES ('$tensp', '$masp', '$giacu', '$giamoi', '$soluong', '$mota', '$img', '$iddm')";
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

    function loadOne_sp($id) {
        $sql = "SELECT * FROM `sanpham` where `id_sp` = '$id'";
        $get_sp = pdo_query_one($sql);
        return $get_sp;
    }

    function update_sp($tensp, $id, $price, $soluong, $mo_ta, $img, $idLoai, $number_see, $giamgia) {
        if($img != "") {
            $sql = "UPDATE `sanpham` SET `tensp`='$tensp', `giatien` = '$price', `giamgia` = '$giamgia', `soluong` = '$soluong', `mota` = '$mo_ta',
            `img` = '$img', `luotxem` = '$number_see', `idLoai` = '$idLoai' WHERE `idSP` = ".$id;
        }
        else {
            $sql = "UPDATE `sanpham` SET `tensp`='$tensp', `giatien` = '$price', `giamgia` = '$giamgia', `soluong` = '$soluong', `mota` = '$mo_ta',
            `luotxem` = '$number_see', `idLoai` = '$idLoai' WHERE `idSP` = ".$id;
        }
        pdo_execute($sql);
    }

    function search($key) {
        $sql = "SELECT * FROM `sanpham` WHERE `tensp` like '%".$key."%'";
        $get_sp = pdo_query($sql);
        return $get_sp;
    }
?>