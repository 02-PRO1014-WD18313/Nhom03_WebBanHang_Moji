<?php 
    function insert_danhmuc($ten_dm, $iddm, $img) {
        $sql = "INSERT INTO danhmuc(tendm, iddm, img) VALUES ('$ten_dm', '$iddm', '$img')";
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

    function loadall_danhmuc_home(){
        $sql = "select * from danhmuc where 1 order by iddm desc limit 0,3";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }

    function loadOne_dm($id) {
        $sql = "SELECT * FROM `danhmuc` where `iddm` = '$id'";
        $get_dm = pdo_query_one($sql);
        return $get_dm;
    }

    

    function update_dm($tendm, $id, $img) {
        if($img != "") {
            $sql = "UPDATE `danhmuc` SET `tendm`='$tendm', `iddm` = '$id', `img` = '$img' WHERE `iddm` = '$id'";
        } else {
            $sql = "UPDATE `danhmuc` SET `tendm`='$tendm', `iddm` = '$id' WHERE `iddm` = '$id'";
        }
        pdo_execute($sql);
    }
?>