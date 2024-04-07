<?php
class hanghoa
{
    // thuoc tinh
    // ham tao
    // phuong thuc lấy sản phẩm mới
    function getHangHoaNew()
    {
        $db = new connect();
        $select = "select a.idsp,a.tensp,b.hinh,b.dongia from sanpham a, ctsanpham 
		b where a.idsp=b.idsp order by a.idsp DESC limit 6";
        $result = $db->getList($select);
        return $result;
    }
    ///lấy bộ sưu tập nhẫn
    function getHangHoaNhan()
    {
        $db = new connect();
        $select = "SELECT  DISTINCT a.idsp, a.tensp, b.hinh, b.dongia
					FROM sanpham a
					JOIN ctsanpham b ON a.idsp = b.idsp
					WHERE a.tensp LIKE '%nhẫn%'
					ORDER BY a.idsp DESC
					";
        $result = $db->getList($select);
        return $result;
    }
    ///lấy bộ sưu tập dây chuyền
    function getHangHoaDchuyen()
    {
        $db = new connect();
        $select = "SELECT  DISTINCT a.idsp, a.tensp, b.hinh, b.dongia
					FROM sanpham a
					JOIN ctsanpham b ON a.idsp = b.idsp
					WHERE a.tensp LIKE '%Chuyền%'
					ORDER BY a.idsp DESC
					";
        $result = $db->getList($select);
        return $result;
    }
    ///lấy bộ sưu tập bông tai
    function getHangHoaBtai()
    {
        $db = new connect();
        $select = "SELECT  DISTINCT a.idsp, a.tensp, b.hinh, b.dongia
					FROM sanpham a
					JOIN ctsanpham b ON a.idsp = b.idsp
					WHERE a.tensp LIKE '%Bông%'
					ORDER BY a.idsp DESC
					";
        $result = $db->getList($select);
        return $result;
    }
    // xem chi tiết
    function getHangHoaAllNew()
    {
        $db = new connect();
        $select = "SELECT DISTINCT a.idsp,a.tensp,a.soluotxem,b.hinh,b.dongia 
			from sanpham a, ctsanpham b WHERE a.idsp=b.idsp order by a.idsp DESC ";
        $result = $db->getList($select);
        return $result;
    }
    // phân trang
    function getHangHoaAllPage($start, $limit)
    {
        $db = new connect();
        $select = "select DISTINCT a.idsp,a.tensp,b.dongia,b.hinh from sanpham a,ctsanpham b WHERE a.idsp=b.idsp ORDER by a.idsp DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaNhanPage($start, $limit)
    {
        $db = new connect();
        $select = "select DISTINCT a.idsp,a.tensp,b.dongia,b.hinh from sanpham a,ctsanpham b WHERE a.idsp=b.idsp AND a.tensp LIKE '%Nhẫn%' ORDER by a.idsp DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaBongtaiPage($start, $limit)
    {
        $db = new connect();
        $select = "select DISTINCT a.idsp,a.tensp,b.dongia,b.hinh from sanpham a,ctsanpham b WHERE a.idsp=b.idsp AND a.tensp LIKE '%Bông%' ORDER by a.idsp DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaDChuyenPage($start, $limit)
    {
        $db = new connect();
        $select = "select DISTINCT a.idsp,a.tensp,b.dongia,b.hinh from sanpham a,ctsanpham b WHERE a.idsp=b.idsp AND a.tensp LIKE '%Chuyen%' ORDER by a.idsp DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaId($id)
    {
        $db = new connect();
        $select = "select DISTINCT b.idsp,b.tensp,b.mota,a.dongia from ctsanpham a,sanpham b WHERE a.idsp=b.idsp and b.idsp=$id ";
        $result = $db->getInstance($select);
        return $result;
    }
    function getHangHoaMau($id)
    {
        $db = new connect();
        $select = "select DISTINCT b.idmau,b.tenmau from ctsanpham a,mau b WHERE a.idmau=b.idmau and a.idsp=$id ";
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaSize($id)
    {
        $db = new connect();
        $select = "select DISTINCT b.idsize,b.tensize from ctsanpham a,size b 
        WHERE a.idsize=b.idsize and a.idsp=$id ";
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaHinh($id)
    {
        $db = new connect();
        $select = "select  a.hinh from ctsanpham a WHERE  a.idsp=$id ";
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaMauSacId($id)
    {
        $db = new connect();
        //b2: can lay cai gi thi viet cau lenh select cai do
        $select = "select DISTINCT a.tenmau from mau a WHERE a.idmau=$id";
        $result = $db->getInstance($select);
        return $result;
    }
    function getHangHoaIDMauSizeHinh($id, $idmau, $tensize)
    {
        $db = new connect();
        //b2: can lay cai gi thi viet cau lenh select cai do
        $select = "select DISTINCT a.hinh from ctsanpham a, size b, mau c 
        WHERE a.idsp=$id and c.idmau=$idmau and b.tensize LIKE $tensize";
        $result = $db->getInstance($select);
        return $result;
    }
    // tìm kiếm sản phẩm
    function timkiemSP($tensp)
    {
        $db = new connect();
        //b2: can lay cai gi thi viet cau lenh select cai do
        $select = "SELECT DISTINCT a.idsp,a.tensp ,a.soluotxem,b.hinh, b.dongia, c.tenmau from sanpham a,ctsanpham b,mau c 
            WHERE a.idsp=b.idsp and c.idmau=b.idmau and a.tensp like '%$tensp%' order by a.idsp desc";
        $result = $db->getList($select);
        return $result;
    }
    //lấy menu
    function getMenu()
    {
        $db = new connect();
        //b2: can lay cai gi thi viet cau lenh select cai do
        $select = "SELECT idloai,tenloai,idmenu from loai WHERE idmenu";
        $result = $db->getList($select);
        return $result;
    }
    //  menu trang sức bạc
    function getBac($start, $limit)
    {
        $db = new connect();
        //b2: can lay cai gi thi viet cau lenh select cai do
        $select = "select DISTINCT a.idsp,a.tensp,b.dongia,b.hinh from sanpham a,ctsanpham b WHERE a.idsp=b.idsp  AND a.tensp LIKE '%Vàng Trắng%' OR a.tensp LIKE '%Bạc%' ORDER by a.idsp DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }
    function getVang($start, $limit)
    {
        $db = new connect();
        //b2: can lay cai gi thi viet cau lenh select cai do
        $select = "select DISTINCT a.idsp,a.tensp,b.dongia,b.hinh from sanpham a,ctsanpham b WHERE a.idsp=b.idsp  AND  a.tensp LIKE '%Vàng%' ORDER by a.idsp DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }
    function getDHo($start, $limit)
    {
        $db = new connect();
        //b2: can lay cai gi thi viet cau lenh select cai do
        $select = "select DISTINCT a.idsp,a.tensp,b.dongia,b.hinh from sanpham a,ctsanpham b WHERE a.idsp=b.idsp  AND  a.tensp LIKE '%Đồng hồ%' ORDER by a.idsp DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }
    function getDa($start, $limit)
    {
        $db = new connect();
        //b2: can lay cai gi thi viet cau lenh select cai do
        $select = "select DISTINCT a.idsp,a.tensp,b.dongia,b.hinh from sanpham a,ctsanpham b WHERE a.idsp=b.idsp  AND  a.tensp LIKE '%đính đá%' ORDER by a.idsp DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }
}
