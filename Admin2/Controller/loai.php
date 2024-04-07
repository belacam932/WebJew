<?php
$act = "loai";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'loai':
        include_once "./View/addloaisanpham.php";
        break;

    case 'loai_action':
        if (isset($_POST['submit_file'])) {

            $file = $_FILES['file']['tmp_name'];

            file_put_contents($file, str_replace("\xEF\xBB\xBF", "", file_get_contents($file)));

            $file_open = fopen($file, "r");

            while (($csv = fgetcsv($file_open, 1000, ",")) !== false) {
                $tenloai = $csv[0];
                $idmenu = $csv[1];
                $db = new connect();
                $query = "insert into loai (idloai,tenloai,idmenu) values (NULL,'$tenloai',$idmenu)";
                $db->exec($query);
            }
            echo '<script>alert("Import thành công");</script>';
            include_once "./View/addloaisanpham.php";
        }

        break;
    case 'loai_action1':
        if (isset($_POST['tendanhmuc']) && isset($_POST['menu'])) {
            $tenloai = $_POST['tendanhmuc'];
            $menu = $_POST['menu'];
            $db = new connect();
            $query = "insert into loai (idloai,tenloai,idmenu) values (NULL,'$tenloai',$menu)";
            $db->exec($query);
        }
        echo '<script>alert("Import thành công");</script>';
        include_once "./View/addloaisanpham.php";
        break;
    case 'dsloai':
        include_once "./View/editloaisanpham.php";
        break;
    case 'delete_loai':
        if (isset($_GET['id'])) {
            $loai = $_GET['id'];
            $ds = new loai();
            $ds->getDeleteloai($loai);
            echo '<script>alert("Delete thành công");</script>';
            echo '<meta http-equiv=refresh content="0;url=./index.php?action=loai&act=dsloai"/>';
        }
        break;
        case 'xoa_danh_muc_da_chon':
            if (isset($_POST['selectedIds'])) {
                $selectedIds = explode(',', $_POST['selectedIds']);
                $db = new connect();
                foreach ($selectedIds as $id) {
                    $idloai = intval($id);
                    $query = "DELETE FROM loai WHERE idloai = $idloai";
                    $db->exec($query);
                }
                echo '<script>alert("Xóa thành công");</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=loai&act=dsloai"/>';
            }
            break;
        case 'update_loai':
            if (isset($_GET['id'])&& isset($_POST['idmenu'])) {
                $idloai=$_GET['id'];
                $idmenu=$_POST['idmenu'];
                $ds = new loai();
                $ds->getUpdateloai($idmenu,$idloai);
                echo '<script>alert("Update thành công");</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=loai&act=dsloai"/>';
            }
            break;
}
