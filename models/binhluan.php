<?php
    function insert_binhluan($id_sp, $noidung, $time, $id_user) {
        $sql = "INSERT INTO `binhluan`(`id_user`, `id_pro`, `noidung`, `ngaybinhluan`)
        VALUES ('$id_user', '$id_sp', '$noidung', '$time')";
        pdo_execute($sql);
    }
    function showbl(){
        $sql = "SELECT * FROM `binhluan`";
        $data_sp = pdo_query($sql);
        return $data_sp;
    }
?>