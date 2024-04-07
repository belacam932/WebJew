<script>
  function selectAll() {
    var checkboxes = document.getElementsByName('chonX');
    for (var i = 0; i < checkboxes.length; i++) {
      checkboxes[i].checked = true;
    }
  }

  function deselectAll() {
    var checkboxes = document.getElementsByName('chonX');
    for (var i = 0; i < checkboxes.length; i++) {
      checkboxes[i].checked = false;
    }
  }

  function deleteSelected() {
    var checkboxes = document.getElementsByName('chonX');
    var selectedIds = [];

    for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].checked) {
        var id = checkboxes[i].id.split('_')[1]; // Lấy phần tử thứ 1 sau khi tách chuỗi id
        selectedIds.push(id);
      }
    }
    var hiddenInput = document.getElementById('selectedIds');
    hiddenInput.value = selectedIds.join(',');
    var form = document.forms['frmloaihang'];
    form.submit();
  }
</script>

<form name="frmloaihang" action="index.php?action=loai&act=xoa_danh_muc_da_chon" method="post" class="offset-md-3">
  <div class="card mt-3">
    <div class="card-header text-center">
      <h4>QUẢN LÝ LOẠI HÀNG</h4>
    </div>
    <div class="card-body">
      <table class="table table-striped table">
        <thead>
          <tr class="bg-info">
            <th scope="col"></th>
            <th scope="col">Mã loại</th>
            <th scope="col">Tên loại</th>
            <th scope="col">IdMenu</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $dsloai = new loai();
          $set = $dsloai->getLoai();
          while ($row = $set->fetch()) :
          ?>
            <tr>
              <th scope="row"><input type="checkbox" id="chonX_<?php echo $row['idloai']; ?>" name="chonX" value=""></th>
              <td><?php echo $row['idloai']; ?></td>
              <td><?php echo $row['tenloai']; ?></td>
              <td><input type="text" name="idmenu[]" value="<?php echo $row['idmenu']; ?>"></td>
              <td>
                <a href="index.php?action=loai&act=delete_loai&id=<?php echo $row['idloai']; ?>" class="btn btn-warning">Xoá</a>
                <a href="index.php?action=loai&act=update_loai&id=<?php echo $row['idloai']; ?>" class="btn btn-info">Sửa</a>
              </td>
            </tr>
          <?php
          endwhile;
          ?>
          <input type="hidden" id="selectedIds" name="selectedIds" value="">
        </tbody>
      </table>
    </div>
    <div class="card-footer">
      <button type="button" class="btn btn-info" onclick="selectAll()">Chọn tất cả</button>
      <button type="button" class="btn btn-info" onclick="deselectAll()">Bỏ chọn tất cả</button>
      <button type="button" class="btn btn-info" onclick="deleteSelected()">Xóa danh mục đã chọn</button>
      <a href="index.php?action=loai" class="btn btn-info">Thêm mới</a>
    </div>
  </div>
</form>