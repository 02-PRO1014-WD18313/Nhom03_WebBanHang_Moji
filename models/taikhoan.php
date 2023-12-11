<?php 
    function insert_user($username, $password, $email) {
        $sql = "INSERT INTO `taikhoan`( `username`, `password`, `email`)
        VALUES ('$username', '$password', '$email')";
        pdo_execute($sql);
    }

    function check_user($username, $password) {
        $sql = "SELECT * FROM `taikhoan` where `username` = '$username' AND `password` = '$password'";
        $get_user = pdo_query_one($sql);
        return $get_user;
    }

    function loadAll_user() {
        $sql = "SELECT * FROM `taikhoan`";
        $data_user = pdo_query($sql);
        return $data_user;       
    }

    function delete_user($id) {
        $sql = "DELETE FROM `taikhoan` WHERE `id` = '$id'";
        pdo_execute($sql);
    }

    function loadOne_user($id) {
        $sql = "SELECT * FROM `taikhoan` where `id` = '$id'";
        $get_user = pdo_query_one($sql);
        return $get_user;
    }

    function update_user($id, $name, $username, $password, $email, $role) {
        $sql = "UPDATE `taikhoan` SET `name`='$name', `username` = '$username', `password` = '$password', `email` = '$email',
        `role` = '$role' WHERE `id` = ".$id;
        pdo_execute($sql);
    }

    function update_tk_user($id,$username, $password,$name,$sdt, $email, $address) {
        $sql = "UPDATE `taikhoan` SET `name`='$name', `username` = '$username', `password` = '$password', `email` = '$email',
        `sdt` = '$sdt', `dia_chi` = '$address' WHERE `id` = ".$id;
        pdo_execute($sql);
    }

    function update_mk($id,$password) {
        $sql = "UPDATE `taikhoan` SET `password` = '$password' WHERE `id` = ".$id;
        pdo_execute($sql);
    }
?>