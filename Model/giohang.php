<?php
class giohang{
    function addGioHang($id,$idmau,$tensize,$soluong)
    {
        //thieu hinh, ten sp, ten mau, thanh tien, don gia
        // tu id truy van ra lay duoc ten, don gia
        $hh=new hanghoa();
        $sanpham=$hh->getHangHoaId($id);
        $tensp=$sanpham['tensp'];
        $dongia=$sanpham['dongia'];
        //lay ra ten mau, tu idmau lay ra mau sac
        $mau=$hh->getHangHoaMauSacId($idmau);
        $tenmau=$mau['tenmau'];
        //lay hinh dua vao idsan sam, idmau, size
        $hinh=$hh->getHangHoaIDMauSizeHinh($id,$idmau,$tensize);
        $img=$hinh['hinh'];
        $total=$soluong*$dongia;
        $flag=false;
        //truoc khi them vao gio hang thi can kiem tra xem la gio hang do co hang hay chua
        //duyet qua gio hang
        foreach($_SESSION['cart'] as $key => $item){
            if($item['idsp']==$id && $item['tenmau']==$tenmau && $item['tensize']==$tensize)
            {
                
                $flag=true;
                $soluong=$soluong+$item['soluong'];
                $this->updateGioHang($key,$soluong);//giohang::updateGioHang...
            }
        }
        if($flag==false)
        {
            //tao ra doi tuong
        $item=array(
            'idsp'=>$id,//thuoc tinh -> gia tri
            'tensp'=>$tensp,
            'hinh'=>$img,
            'tenmau'=>$tenmau,
            'tensize'=>$tensize,
            'soluong'=>$soluong,
            'dongia'=>$dongia,
            'thanhtien'=>$total
        );
        //dem doi tuong them vao gio hang a[]
        $_SESSION['cart'][]=$item;
        }   
    }
    //phuong thuc updateGioHang
    function updateGioHang($index, $soluong)
    {
        if($soluong<0)
        {
            unset($_SESSION['cart'][$index]);
        }
        else
        {
            //update la phep gan
            $_SESSION['cart'][$index]['soluong']=$soluong;
            $tiennew=$_SESSION['cart'][$index]['soluong']*$_SESSION['cart'][$index]['dongia'];
            $_SESSION['cart'][$index]['thanhtien']=$tiennew;
        }
    }
    function getTotal()
    {
        $subtotal=0;
        foreach($_SESSION['cart'] as $item){
            $subtotal+=$item['thanhtien'];
        }
        return number_format($subtotal,2);
    }
}
?>