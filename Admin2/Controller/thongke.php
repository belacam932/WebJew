<?php
$act="thongke";
if(isset($_GET['act']))
{
    $act=$_GET['act'];
}
switch ($act) {
    case 'thongke':
        include_once "./View/thongke.php";
        break;
    }