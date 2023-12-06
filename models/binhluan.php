<?php 
    function insert_binhluan($id_sp, $id, $noidung, $thoigian) {
        $sql = "INSERT INTO binhluan(id_pro, id_user, noidung, ngaybinhluan) VALUES ('$id_sp', '$id', '$noidung', '$thoigian')";
        pdo_execute($sql);
    }

    function loadAll_binhluan($id_sp) {
        $sql = "select * from binhluan inner join `taikhoan` on binhluan.id_user=taikhoan.id where id_pro = '".$id_sp."' ";
        $data_binhluan = pdo_query($sql);
        return $data_binhluan;       
    }

    function loadAll_list_binhluan() {
        $sql = "SELECT *, COUNT(*) AS SoLuongBinhLuan, MIN(binhluan.ngaybinhluan) AS ThoiGianCuNhat, MAX(binhluan.ngaybinhluan) AS ThoiGianMoiNhat FROM binhluan INNER JOIN sanpham ON binhluan.id_pro = sanpham.id GROUP BY binhluan.id_pro;";
        $data_binhluan = pdo_query($sql);
        return $data_binhluan;       
    }

    function delete_binhluan($id) {
        $sql = "DELETE FROM `binhluan` WHERE `id` = ".$id;
        pdo_execute($sql);
    }

    function loadOne_binhluan($id) {
        $sql = "SELECT * FROM `binhluan` inner join `taikhoan` on binhluan.id_user=taikhoan.id where binhluan.id = ".$id;
        $get_binhluan = pdo_query_one($sql);
        return $get_binhluan;
    }

?>