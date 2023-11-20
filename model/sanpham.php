<?php
    function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
        $sql = "insert into sanpham(name,price,img,mota,id_dm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql="delete from sanpham where id=".$id;
        pdo_execute($sql);
    }
    function loadall_sanpham_home(){
        $sql = "select * from sanpham where 1 order by id desc limit 0,9";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_top10(){
        $sql = "select * from sanpham where 1 order by view desc limit 0,10";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham($kyw="",$iddm=0){
        $sql = "select * from sanpham where 1";
       if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
       } 
       if($iddm>0){
        $sql.=" and id_dm='".$iddm."'";
       } 
        $sql.= " order by id desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    function loadone_sanpham($id){
        $sql="select * from sanpham where id=".$id;
        $sanpham=pdo_query_one($sql);
        return $sanpham;
    }

    function load_ten_dm($iddm){
        if($iddm>0){
        $sql="select * from danhmuc where id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
        } else {
            return "";
        }
    }


    function load_sanpham_cungloai($id,$id_dm){
        $sql="select * from sanpham where id_dm=".$id_dm." and id <>".$id;
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
        if($hinh!=""){
        $sql = "update sanpham set id_dm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' where id=".$id;
        } else {
        $sql = "update sanpham set id_dm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."' where id=".$id;
        }
        pdo_execute($sql);
    }
?>