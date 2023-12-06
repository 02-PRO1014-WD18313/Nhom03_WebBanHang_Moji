<?php 
    function insert_user($name, $username, $password, $email, $sdt, $dia_chi) {
        $sql = "INSERT INTO `taikhoan`(`name`, `username`, `password`, `email`, `sdt`, `dia_chi`)
        VALUES ('$name', '$username', '$password', '$email', '$sdt', '$dia_chi')";
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

    function update_user($id, $name, $username, $email, $role) {
        $sql = "UPDATE `taikhoan` SET `name`='$name', `username` = '$username', `email` = '$email',
        `role` = '$role' WHERE `id` = ".$id;
        pdo_execute($sql);
    }
?>