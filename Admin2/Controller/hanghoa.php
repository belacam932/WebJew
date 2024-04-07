<?php
    $act="hanghoa";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act) {
        case 'hanghoa':
            include_once "./View/hanghoa.php";
            break;
        
        case 'add_hanghoa':
           include_once "./View/edithanghoa.php";
            break;
        case 'insert_action':
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $mahh=$_POST['idsp'];
                $tenhh=$_POST['tensp'];
                $maloai=$_POST['idloai'];
                $slx=$_POST['slx'];
                $ngaylap=$_POST['ngaylap'];
                $mota=$_POST['mota'];
                // dem thông tin này insert vào bảng hàng hóa
                $hh=new hanghoa();
                $hh->getInsertHangHoa($tenhh,$maloai,$slx,$ngaylap,$mota);
                echo '<script>alert("Thêm sản phẩm thành công");</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa"/>';

            }
            break;
        case 'update_hanghoa':
            include_once "./View/edithanghoa.php";
            break;
        case 'update_action':
            // nhận thông tin 
            if(isset($_POST['idsp']))
            {
                $mahh=$_POST['idsp'];
                $tenhh=$_POST['tensp'];
                $maloai=$_POST['idloai'];
                $slx=$_POST['slx'];
                $ngaylap=$_POST['ngaylap'];
                $mota=$_POST['mota'];
                // tiến hành update
                $hh=new hanghoa();
                $hh->getUpdateHH($mahh,$tenhh,$maloai,$slx,$ngaylap,$mota);
                echo '<script>alert("Update thành công");</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa"/>';

            }
            break;
        case 'delete_hanghoa':
            if(isset($_GET['id']))
            {
                $mahh=$_GET['id'];
                $hh=new hanghoa();
                $hh->getDeleteHH($mahh);
                echo '<script>alert("Delete thành công");</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa"/>';

            }
    }
   
?>