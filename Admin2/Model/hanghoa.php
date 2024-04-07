<?php
class hanghoa
{
    function getHangHoa()
    {
        $db = new connect();
        $select = "select * from sanpham";
        $result = $db->getList($select);
        return $result;
    }
    // phương thức thêm hàng hóa
    function getInsertHangHoa($tenhh, $maloai, $slx, $ngaylap, $mota)
    {
        $db = new connect();
        $query = "insert into sanpham (idsp,tensp,idloai,soluotxem,ngaylap,mota) 
            values (NULL,'$tenhh',$maloai,$slx,'$ngaylap','$mota')";
        $db->exec($query);
    }
    function getHangHoaID($id)
    {
        $db = new connect();
        $select = "select * from sanpham where idsp=$id";
        $result = $db->getInstance($select);
        return $result;
    }
    // phương thức update
    function getUpdateHH($mahh, $tenhh, $maloai, $slx, $ngaylap, $mota)
    {
        $db = new connect();
        $query = "update sanpham 
            set tensp='$tenhh',idloai=$maloai,soluotxem=$slx,ngaylap='$ngaylap',mota='$mota' 
            WHERE idsp=$mahh";
        $db->exec($query);
    }
    // phương thức xóa
    function getDeleteHH($id)
    {
        $db = new connect();
        $query = "delete from sanpham where idsp=$id";
        $db->exec($query);
    }
    // mau
    function getMau()
    {
        $db = new connect();
        $select = "select * from mau";
        $result = $db->getList($select);
        return $result;
    }
    function getSize()
    {
        $db = new connect();
        $select = "select * from size";
        $result = $db->getList($select);
        return $result;
    }
    function getCLieu()
    {
        $db = new connect();
        $select = "select * from chatlieu";
        $result = $db->getList($select);
        return $result;
    }
    // phương thức tính tổng số lượng mua của từng món hàng
    // phần thống kê
    function getThongKeDesc()
    {
        $db = new connect();
        $select = "select a.idsp, b.tensp, sum(a.soluongmua) as soluong from cthoadon a,sanpham b WHERE a.idsp=b.idsp GROUP by a.idsp, b.tensp ORDER BY soluong ASC";
        $result = $db->getList($select);
        return $result;
    }
    function getThongKeAsc()
    {
        $db = new connect();
        $select = "select a.idsp, b.tensp, sum(a.soluongmua) as soluong from cthoadon a,sanpham b WHERE a.idsp=b.idsp GROUP by a.idsp, b.tensp ORDER BY soluong DESC";
        $result = $db->getList($select);
        return $result;
    }
    function getThongKeYear()
    {
        $db = new connect();
        $select = "SELECT EXTRACT(MONTH FROM b.ngaydat) AS thang, SUM(soluongmua) AS soluong FROM cthoadon a, hoadon b WHERE EXTRACT(YEAR FROM b.ngaydat) = 2024 AND a.masohd=b.masohd GROUP BY EXTRACT(MONTH FROM b.ngaydat)";
        $result = $db->getList($select);
        return $result;
    }
    
}
