<?php 
    function insert_user($username, $password, $email) {
        $sql = "INSERT INTO `taikhoan`(`username`, `password`, `email`)
        VALUES ('$username', '$password', '$email')";
        pdo_execute($sql);
    }

    function check_user($username, $password) {
        $sql = "SELECT * FROM `taikhoan` where `username` = '$username' AND `password` = '$password'";
        $get_user = pdo_query_one($sql);
        return $get_user;
    }
?>