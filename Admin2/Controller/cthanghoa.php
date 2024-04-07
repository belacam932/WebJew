<?php
$act = "cthanghoa";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'cthanghoa':
        include_once "./View/cthanghoa.php";
        break;

    case 'cthanghoa_action':
        if (isset($_POST['submit'])) {
            $mahh = $_POST['mahh'];
            $mamau = $_POST['mamau'];
            $masize = $_POST['masize'];
            $dongia = $_POST['dongia'];
            $slt = $_POST['slt'];
            $chat=$_POST['chatlieu'];
            $loai=$_POST['loai'];
            $hinh = $_FILES['image']['name'];
            // đem dữ liệu insert vào database
            $ct = new cthanghoa();
            $hang=uploadImage().$upload;
            
            if ($hang==1) {
                $checkct = $ct->insertCTHangHoa($mahh,$chat,$loai, $mamau, $masize, $dongia, $slt, $hinh);
                echo '<script>alert("Insert thành công");</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=cthanghoa"/>';
            } else {
                echo '<script>alert("Insert ko thành công");</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=cthanghoa"/>';
            }
        }
        break;
}
?>