<?php 
    function insert_danhmuc($ten_dm, $iddm) {
        $sql = "INSERT INTO danhmuc(tendm, iddm) VALUES ('$ten_dm', '$iddm')";
        pdo_execute($sql);
    }

    function delete_danhmuc($id) {
        $sql = "DELETE FROM `danhmuc` WHERE `iddm` = '$id'";
        pdo_execute($sql);
    }

    function loadAll_dm() {
        $sql = "SELECT * FROM `danhmuc` order by `iddm` desc";
        $data_dm = pdo_query($sql);
        return $data_dm;       
    }

    function loadOne_dm($id) {
        $sql = "SELECT * FROM `loaisp` where `idLoai` = ".$id;
        $get_dm = pdo_query_one($sql);
        return $get_dm;
    }

    function update_dm($tenloai, $id) {
        $sql = "UPDATE `loaisp` SET `tenloai`='$tenloai' WHERE `idLoai` = ".$id;
        pdo_execute($sql);
    }
?>