
      <div class="card mt-3 offset-md-4">
        <div class="card-header info">
          <h4 style="font-size:25px; color:darkslategray;"><b>QUẢN LÝ LOẠI HÀNG</b></h4>
        </div>
        <div class="card-body">
        <form action="index.php?action=loai&act=loai_action" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="">
            <input type="submit" name="submit_file" value="Import">
        </form>
        <form action="index.php?action=loai&act=loai_action1" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="">Mã danh mục</label>
                <input type="text" readonly name="iddanhmuc" class="form-control" >
              </div>
              <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" name="tendanhmuc" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Menu số:</label>
                <input type="text" name="menu"  class="form-control">
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Lưu</button>
                  <a href="index.php?action=loai&act=dsloai" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>
