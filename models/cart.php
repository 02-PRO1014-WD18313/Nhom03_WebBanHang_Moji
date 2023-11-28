<?php
  


    function tongdonhang(){
        $tong=0;
            foreach ($_SESSION['mycart'] as $cart) {
                $ttien=$cart[3]*$cart[4];
                $tong += $ttien;
                
            }
            return $tong;
    }

    function insert_bill($pttt,$ngaydathang,$tongdonhang){
        $sql = "insert into bill(pttt,ngaydathang,total) values('$pttt','$ngaydathang','$tongdonhang')";
        return pdo_execute_return_lastInsertId($sql);
    }

    function insert_cart($idpro,$img,$name,$price,$soluong){
        $sql = "insert into cart(id_pro,img,name,price,soluong) values('$idpro','$img','$name','$price','$soluong')";
        return pdo_execute($sql);
    }

    function loadone_bill($id){
        $sql="select * from bill where id=".$id;
        $bill=pdo_query_one($sql);
        return $bill;
    }

    function loadall_cart($idbill){
        $sql="select * from cart where idbill=".$idbill;
        $bill=pdo_query($sql);
        return $bill;
    }

    function loadall_cart_count($idbill){
        $sql="select * from cart where idbill=".$idbill;
        $bill=pdo_query($sql);
        return sizeof($bill);
    }

    function loadall_bill($kyw="",$iduser=0){
        $sql="select * from bill where 1";
        if($iduser>0) $sql.= " AND iduser=".$iduser;
        if($kyw!="") $sql.= " AND id like '%".$kyw."%'";
        $sql.=" order by id desc";
        $listbill=pdo_query($sql);
        return $listbill;
    }

    function delete_bill($id){
        $sql="delete from bill where id=".$id;
        $sql2="delete from cart where idbill=".$id;
        pdo_execute($sql2);
        pdo_execute($sql);
    }

    function get_ttdh($n){
        switch ($n) {
            case '0':
                $tt="Đơn hàng mới";
                break;
              
            case '1':
                $tt="Đang xử lý";
                break;
            
            case '2':
                $tt="Đang giao hàng";
                break;

            case '3':
                $tt="Hoàn tất";
                break;
                
            default:
                 $tt="Đơn hàng mới";
                break;
        }
        return $tt;
    }

    function select_tt($n){
        if($n==0)
        {
            $o0="selected";
        } else{
            $o0="";}
            return $o0;
        }  
        
    function select_tt1($n){
        if($n==1)
        {
            $o0="selected";
        } else{
            $o0="";}
            return $o0;
        }
        
    function select_tt2($n){
        if($n==2)
        {
            $o0="selected";
        } else{
            $o0="";}
            return $o0;
        }  
        
    function select_tt3($n){
        if($n==3)
        {
            $o0="selected";
        } else{
            $o0="";}
            return $o0;
        }  

    function loadall_thongke(){
        $sql="select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
        $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.id_dm";
        $sql.=" group by danhmuc.id order by danhmuc.id desc";
        $listtk=pdo_query($sql);
        return $listtk;
    }

    function update_bill($id,$tt){
        $sql = "update bill set bill_status='".$tt."' where id=".$id;
        pdo_execute($sql);
    }
?>