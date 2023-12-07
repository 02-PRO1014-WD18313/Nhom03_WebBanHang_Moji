<?php
  


    function tongdonhang(){
        $tong=0;
            foreach ($_SESSION['mycart'] as $cart) {
                $ttien=$cart[3]*$cart[4];
                $tong += $ttien;
                
            }
            return $tong;
    }

    function insert_bill($id_user,$name,$address,$tel,$email,$pttt,$ngaydathang,$tongdonhang){
        $sql = "insert into bill(id_user,user_name,dia_chi,tel,email,pttt,ngaydathang,total) values('$id_user','$name','$address','$tel','$email','$pttt','$ngaydathang','$tongdonhang')";
        return pdo_execute_return_lastInsertId($sql);
    }

    function insert_cart($idpro,$idsp,$img,$name,$giacu,$giamoi,$soluong,$thanhtien,$idbill){
        $sql = "insert into cart(id_pro,id_sp,img,name,giacu,giamoi,soluong,thanhtien,id_bill) values('$idpro','$idsp','$img','$name','$giacu','$giamoi','$soluong','$thanhtien','$idbill')";
        return pdo_execute($sql);
    }

    function loadone_bill($id){
        $sql="select * from bill where id=".$id;
        $bill=pdo_query_one($sql);
        return $bill;
    }

    function loadone_sanphamCart ($idList) {
        $sql = 'SELECT * FROM sanpham WHERE id IN ('. $idList . ')';
        $sanpham = pdo_query($sql);
        return $sanpham;
    }

    function loadall_cart($idbill){
        $sql="select * from cart where id_bill=".$idbill;
        $bill=pdo_query($sql);
        return $bill;
    }

    function loadall_cart_count($idbill){
        $sql="select * from cart where id_bill=".$idbill;
        $bill=pdo_query($sql);
        return sizeof($bill);
    }

    function loadall_bill($kyw="",$iduser=0){
        $sql="select * from bill where 1";
        if($iduser>0) $sql.= " AND id_user=".$iduser;
        if($kyw!="") $sql.= " AND id like '%".$kyw."%'";
        $sql.=" order by id desc";
        $listbill=pdo_query($sql);
        return $listbill;
    }

    function load_bill($id,$iduser){
        $sql="select * from bill where 1 AND id_user=$iduser AND id like $id order by id desc";
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

    function get_pttt($n){
        switch ($n) {
            case '1':
                $tt="Thanh toán khi nhận hàng";
                break;
              
            case '2':
                $tt="Thanh toán online";
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
        $sql = "update bill set tinh_trang='".$tt."' where id=".$id;
        pdo_execute($sql);
    }
?>