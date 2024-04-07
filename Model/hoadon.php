<?php
class hoadon
{
    // phương thức insert vào bảng hoá đơn trước, bởi vì có hoá đơn thì mới có chi tiết hoá đơn
    // bảng chi tiết hoá đơn là bảng dc sinh ra từ hoá đơn và khách hàng
    function insertHoaDon($makh)
    {
        $date = new DateTime('now');
        $ngay = $date->format('Y-m-d'); // do trong database là nam-ngay-thang
        $db = new connect();
        $query = "insert into hoadon(masohd, makh, ngaydat, tongtien) values (Null, $makh, '$ngay',0)";
        $db->exec($query);
        // đã insert xong rồi, lấy mã vừa insert để insert vào cthoadon
        $select = "select masohd from hoadon order by masohd desc limit 1";
        $mahd = $db->getInstance($select);
        return $mahd[0]; //mahd[34];
    }
    // phương thức chèn vào bảng chi tiết hoá đơn
    function insertCTHoaDon($masohd, $idsp, $soluongmua, $tenmau, $tensize, $thanhtien)
    {
        $db = new connect();
        $query = "insert into cthoadon(masohd, idsp, soluongmua, tenmau ,tensize ,thanhtien, tinhtrang)
         values ($masohd, $idsp, $soluongmua, '$tenmau', $tensize, $thanhtien,0)";
        // echo $query;
        // thực thi câu lệnh insert theo dạng tiêu chuẩn là exec , còn dạng bảo mật là prepare (về tự viết lại)
        $db->exec($query);
    }
    // phương thức updatethanhtien trong bảng hoá đơn 
    function updateHoaDonThanhTien($masohd, $makh, $total)
    {
        $db = new connect();
        $query = "update hoadon set tongtien=$total WHERE masohd=$masohd and makh=$makh";
        $db->exec($query);
    }

    // phương thức trừ lại tồn kho của món hàng mình đã mua
    // function updateHangHoaTon()



    // phương thức hiển thị thông tin của khách hàng trên hoá đơn
    function getHoaDonKH($masohd)
    {
        $db = new connect();
        $select = "select b.masohd, b.ngaydat, a.tenkh, a.diachi, a.sodienthoai
        from khachhang a inner join hoadon b on a.makh=b.makh WHERE masohd=$masohd";
        $result = $db->getInstance($select);
        return $result;
    }


    // phương thức hiển thị thông tin những món hàng đã mua trên hoá đơn
    function getHoaDonCTHD($masohd)
    {
        $db = new connect();
        $select = "select distinct a.tensp, c.tenmau, c.tensize, b.dongia, c.soluongmua
        from sanpham a, ctsanpham b, cthoadon c where a.idsp=b.idsp and a.idsp=c.idsp and c.masohd=$masohd ";
        $result = $db->getList($select);
        return $result;
    }
}
