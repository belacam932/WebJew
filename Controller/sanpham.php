<?php
$act = "sanpham";
if (isset($_GET['act'])) {
        $act = urldecode($_GET['act']);
}
switch ($act) {
        case 'sanpham':
                include_once './View/sanpham.php';
                break;
        case 'nhan':
                include_once './View/sanpham.php';
                break;
        case 'bongtai':
                include_once './View/sanpham.php';
                break;
        case 'daychuyen':
                include_once './View/sanpham.php';
                break;
        case 'sanphamchitiet':
                include_once './View/sanphamchitiet.php';
                break;
        case 'timkiem':
                include_once "./View/sanpham.php";
                break;
        case '4': case '6': case '7': case '36':
                include_once "./View/sanpham.php";
                break;
}
