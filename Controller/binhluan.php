<?php 
    if(isset($_POST['submit'])){
        $makh=$_SESSION['makh'];
        $masp=$_POST['txtmasp'];
        $content=$_POST['comment'];
        $bl=new binhluan();
        $bl->insertBinhLuan($makh,$masp,$content);
    }
    
    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=sanpham&act=sanphamchitiet&id='.$masp.'"/>';
?>