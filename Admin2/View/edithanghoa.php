<?php
if (isset($_GET['id'])) {
  $idsp = $_GET['id'];
  $hh = new hanghoa();
  $kq = $hh->getHangHoaID($idsp);
  $tensp = $kq['tensp'];
  $idloai = $kq['idloai'];
  $slx = $kq['soluotxem'];
  $ngaylap = $kq['ngaylap'];
  $mota = $kq['mota'];
}
?>
<?php
$ac = 1;
if (isset($_GET['action'])) {
  if (isset($_GET['act']) && ($_GET['act'] == 'add_hanghoa')) {
    $ac = 1;
  } else {
    $ac = 2;
  }
}
?>

<!-- tiêu đề -->
<?php
if ($ac == 1) {
  echo
  '<img src="./Content/images/database.png" alt="" width="80px" height="70px">
      <h1> THÊM SẢN PHẨM</h1> ';
} else {
  echo
  '<img src="./Content/images/update.png" alt="" width="80px" height="70px"><h1> UPDATE SẢN PHẨM</h1>';
}
?>
<div class="row col-md-6 col-md-offset-4">
  <?php
  if ($ac == 1) {
    echo '<form action="index.php?action=hanghoa&act=insert_action" method="post" enctype="multipart/form-data">;';
  } else {
    echo '<form action="index.php?action=hanghoa&act=update_action" method="post" enctype="multipart/form-data">;';
  }
  ?>

  <table class="table" style="border: 0px;">
    <tr>
      <td>Mã hàng</td>
      <td> <input type="text" class="form-control" name="idsp" value="<?php if (isset($idsp)) echo $idsp; ?>" readonly/></td>
    </tr>
    <tr>
      <td>Tên hàng</td>
      <td><input type="text" class="form-control" name="tensp" value="<?php if (isset($tensp)) echo $tensp; ?>" maxlength="100px"></td>
    </tr>

    <tr>
      <td>Mã loại</td>
      <td>
        <select name="idloai" class="form-control" style="width:150px;">
          <?php
          $selectedLoai = -1;
          if (isset($idloai) && $idloai != -1) {
            $selectedLoai = $idloai; //3
          }
          $loaihh = new loai();
          $kqloai = $loaihh->getLoai();
          while ($set = $kqloai->fetch()) :
          ?>
            <option value="<?php echo $set['idloai'] ?>" <?php if ($selectedLoai == $set['idloai']) echo 'selected' ?>><?php echo $set['tenloai']; ?></option>
          <?php
          endwhile;
          ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Số lượt xem</td>
      <td><input type="text" class="form-control" value="<?php if (isset($slx)) echo $slx; ?>" name="slx">
      </td>
    </tr>
    <tr>
      <td>Ngày lập</td>
      <td><input type="date" class="form-control" value="<?php if (isset($ngaylap)) echo $ngaylap; ?>" name="ngaylap">
      </td>
    </tr>
    <tr>
      <td>Mô tả</td>
      <td><input type="text" class="form-control" value="<?php if (isset($mota)) echo $mota; ?>" name="mota">
      </td>
    </tr>

    <tr>
      <td colspan="2">
        <input type="submit" value="submit" class="btn btn-primary">
      </td>
    </tr>

  </table>
  </form>
</div>