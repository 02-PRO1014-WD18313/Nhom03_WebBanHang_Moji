<?php
    function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
        $sql = "insert into binhluan(noidung,id_user,id_pro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
        pdo_execute($sql);
    }

    function loadall_binhluan($idpro){
        $sql = "select * from binhluan where 1";
        if($idpro>0) $sql.=" AND id_pro='".$idpro."'";
        $sql.=" order by id_bl desc";
        $listbl=pdo_query($sql);
        return $listbl;
    }

    function delete_binhluan($id){
        $sql="delete from binhluan where id_bl=".$id;
        pdo_execute($sql);
    }
?>