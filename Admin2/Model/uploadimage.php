<?php
    function uploadImage()
    {
        $target_dir="../../DuAn/Content/images/Product/";
        // lấy tên hình để vào thư mục
        //$target_file="../../DuAnMau/Content/imagetourdien/hinhbaby.jpg";
        $target_file=$target_dir.basename($_FILES['image']['name']);
        // kiểm tra xem hình có tồn tại trên server hay không
        $upload=1;
        if(isset($_POST['submit']))
        {
            $check=getimagesize($_FILES['image']['tmp_name']);
            // $check=$_FILES['image']['size]
            if($check!==false)
            {
                $upload=1;
            }
            else
            {
                $upload=0;
            }
        }
        // kiểm tra xem hình đã tồn tại hay chưa
        if(file_exists($target_file))
        {
            $upload=0;
            echo '<script> alert("Hình đã tồn tại")</script>';
        }
        // kiểm tra xem hình có vượt quá dung lượng hay không, 500kb=500000b
        if($_FILES['image']['size']>500000)
        {
            $upload=0;
            echo '<script> alert("Hình vượt quá dung lượng")</script>';
        }
        // kiểm tra có phải là hình hay không
        $imagefileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if($imagefileType!="jpg" && $imagefileType!="jpeg" && $imagefileType!="png"&& $imagefileType!="gif")
        {
            $upload=0;
            echo '<script> alert("Không phải là hình")</script>';
        }
        // bước cuối là di chueyern hình từ server vào thư mục hình
        if($upload==1)
        {
            if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file))
            {
                echo '<script> alert("Upload hình thành công")</script>';
            }
            else
            {
                echo '<script> alert("Upload hình ko thành công")</script>';
            }
        }
        return $upload;
    }
?>