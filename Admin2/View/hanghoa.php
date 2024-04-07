<!-- thành công -->
<div class="col-md-4 col-md-offset-4">
  <h3 style="font-size:25px; color:darkslategray;"><b>DANH SÁCH HÀNG HÓA</b></h3>
</div>
<div class="row col-12">
  <a href="index.php?action=hanghoa&act=add_hanghoa">
    <button class="btn btn-success">Thêm sản phẩm</button> <br> <br>
  </a>
</div>
<div class="row">
  <table class="table table-bordered">
    <thead>
      <tr class="table-success">
        <th>Mã SP</th>
        <th>Tên SP</th>
        <th>Mã Loại</th>
        <th>Số lượt xem</th>
        <th>Ngày lập</th>
        <th>Mô tả</th>
        <th>Cập Nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $hh = new hanghoa();
      $ht = $hh->getHangHoa();
      while ($set = $ht->fetch()) :
      ?>
        <tr>
          <td><?php echo $set['idsp']; ?></td>
          <td><?php echo $set['tensp']; ?></td>
          <td><?php echo $set['idloai']; ?></td>
          <td><?php echo $set['soluotxem']; ?></td>
          <td><?php echo $set['ngaylap']; ?></td>
          <td><?php echo $set['mota']; ?></td>
          <td>
            <a href="index.php?action=hanghoa&act=update_hanghoa&id=<?php echo $set['idsp']; ?>">
              <span class="badge">Cập nhật</span>
            </a>
          </td>
          <td>
            <a href="index.php?action=hanghoa&act=delete_hanghoa&id=<?php echo $set['idsp']; ?>">
              <span class="badge">Xóa</span>
            </a>
          </td>

        </tr>
      <?php
      endwhile;
      ?>
    </tbody>
  </table>
</div>