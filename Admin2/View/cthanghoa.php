<div class="row col-md-4 col-md-offset-4">
  <form action="index.php?action=cthanghoa&act=cthanghoa_action" method="post" enctype="multipart/form-data">
    <h4 class="text-center " style="font-size:30px; color:darkslategray;"><b>CHI TIẾT SẢN PHẨM</b></h4>
    <table class="table">
      <tr>
        <td>Mã hàng hóa</td>
        <td>
          <select name="mahh" class="form-control" style="width:300px;">
            <?php
            $hh = new hanghoa();
            $hang = $hh->getHangHoa();
            while ($set = $hang->fetch()) :
            ?>
              <option value="<?php echo $set['idsp']; ?>"><?php echo $set['tensp']; ?></option>
            <?php
            endwhile;
            ?>
          </select>
        </td>
      </tr>
      <!-- phân loại -->
      <tr>
        <td>Loại</td>
        <td> <select name="loai" class="form-control" style="width:150px;">
            <?php
            $hh = new loai();
            $loai = $hh->getLoai();
            while ($set = $loai->fetch()) :
            ?>
              <option value="<?php echo $set['idloai']; ?>"><?php echo $set['tenloai']; ?></option>
            <?php
            endwhile;

            ?>
          </select>
        </td>
      </tr>
      <!-- chất liệu -->
      <tr>
        <td>Chất liệu</td>
        <td> <select name="chatlieu" class="form-control" style="width:150px;">
            <?php
            $hh = new hanghoa();
            $cl = $hh->getCLieu();
            while ($set = $cl->fetch()) :
            ?>
              <option value="<?php echo $set['idchat']; ?>"><?php echo $set['tenchat']; ?></option>
            <?php
            endwhile;
            ?>
          </select>
        </td>
      </tr>
      <!-- màu sắc -->
      <tr>
        <td>Màu sắc</td>
        <td> <select name="mamau" class="form-control" style="width:150px;">
            <?php
            $hh = new hanghoa();
            $mau = $hh->getMau();
            while ($set = $mau->fetch()) :
            ?>
              <option value="<?php echo $set['idmau']; ?>"><?php echo $set['tenmau']; ?></option>
            <?php
            endwhile;
            ?>
          </select>
        </td>
      </tr>
      <!-- kích thước -->
      <tr>
        <td>Size</td>
        <td> <select name="masize" class="form-control" style="width:150px;">
            <?php
            $hh = new hanghoa();
            $size = $hh->getSize();
            while ($set = $size->fetch()) :
            ?>
              <option value="<?php echo $set['idsize']; ?>"><?php echo $set['tensize']; ?></option>
            <?php
            endwhile;
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Đơn giá</td>
        <td><input type="text" class="form-control" name="dongia"></td>
      </tr>

      <tr>
        <td>Số lượng tồn</td>
        <td><input type="text" class="form-control" name="slt">
        </td>
      </tr>
      <tr>
        <td>Hình</td>
        <td>
          <input type="file" name="image" id="fileupload">

        </td>
      </tr>
      <tr>
        <td colspan="2" class=" text-center">
          <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </td>
      </tr>

    </table>
  </form>
</div>