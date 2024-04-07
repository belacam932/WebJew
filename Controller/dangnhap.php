<?php
    $act="dangnhap";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch($act)
    {
        case 'dangnhap':
            include_once"./View/login.php";
            break;
        case 'dangnhap_action':
            // gửi thông tin đăng nhập
            $user='';
            $pass='';
            if(isset($_POST['submit'])){
               
                $user = $_POST['txtusername']; //anhanh
                $pass=$_POST['txtpassword'];
                $saltF="G45a#?";
                $saltL='Td23$%';
                $passnew=md5($saltF.$pass.$saltL);
				//echo $passnew;
                $kh=new user();
                $lgkh=$kh->loginKH($user,$passnew);
                if($lgkh!==false)
                {
                    echo '<script> alert("Đăng nhập thành công");</script>';
                    $_SESSION['makh']=$lgkh['makh'];
                    $_SESSION['tenkh']=$lgkh['tenkh'];
                    echo '<meta http-equiv="refresh" content="0; url=./index.php?action=home"/>';
                }
                else
                {
                    //  var_dump($lgkh);
                    echo '<script> alert("Đăng nhập không thành công");</script>';   
                    echo '<meta http-equiv="refresh" content="0; url=./index.php?action=dangnhap"/>';
                }
            }
            break;
        case 'dangxuat':
            unset($_SESSION['makh']);
            unset($_SESSION['tenkh']);
            echo '<script> alert("Bạn muốn đăng xuất");</script>';   
            echo '<meta http-equiv="refresh" content="0; url=./index.php?action=home"/>';
    }
?>