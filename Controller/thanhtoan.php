<?php
$act = "thanhtoan";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'thanhtoan':
        $hd = new hoadon();
        if (isset($_SESSION['makh']))
         {
            $makh = $_SESSION['makh'];
            $sohd = $hd->insertHoaDon($makh);
            $_SESSION['masohd']=$sohd;
            $total = 0;
            foreach ($_SESSION['cart'] as $key => $item) {
                $hd->insertCTHoaDon($sohd, $item['idsp'], $item['soluong'], $item['tenmau'], $item['tensize'], $item['thanhtien']);
                $total += $item['thanhtien'];
            }
            $hd->updateHoaDonThanhTien($sohd, $makh, $total);
        }
        include_once "./View/order.php";
        break;
}
?>