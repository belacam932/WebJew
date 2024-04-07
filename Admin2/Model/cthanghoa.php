<?php
    class cthanghoa{
        function insertCTHangHoa($mahh, $chat,$loai,$mamau, $masize, $dongia, $slt, $hinh)
        {
            $db=new connect();
            $query="INSERT INTO ctsanpham(idsp,idchat,idloai,idmau,idsize,dongia,soluongton,hinh) 
                    values($mahh,$chat,$loai,$mamau,$masize,$dongia,$slt,'$hinh')
                    ";
            echo $query;
            $result=$db->exec($query);
            return $result;
        }
    }
?>