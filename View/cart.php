<div class="table-responsive">
  <?php
    if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
    {
  ?>
    <form action="index.php?action=giohang&act=update_giohang" method="post">
      <table class="table table-bordered">
        <thead>
          <tr><td colspan="5"><h2 style="color: red;">THÔNG TIN GIỎ HÀNG</h2></td></tr>
          <tr class="table-success">
            <th>Số TT</th>
            <th>Thông Tin Sản Phẩm</th>
            <th>Tùy Chọn Của Bạn</th>
            <th colspan="2">Giá</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $j=0;
            foreach($_SESSION['cart'] as $key => $item):
              $j++;
          ?>
            <tr>
              <td><?php echo $j;
               
                ?></td>
              <td><img width="50px" height="50px" 
              src="Content/images/product/<?php echo $item['hinh']; ?>">
              <?php echo $item['tensp'];?>    
              </td>
              <td>Màu: <?php echo $item['tenmau'];?> <br>
                 Size: <?php echo $item['tensize']?> </td>
              <td>Đơn Giá: <?php echo number_format($item['dongia']);?> <br> Số Lượng: <input type="text" name="newqty[]" value="<?php echo $item['soluong'];?>" /><br /><br>
                <p style="float: right; font-weight:bold;"> Thành Tiền <?php echo number_format($item['thanhtien']);?><sup><u>đ</u></sup></p>
              </td>
              <td><a href="index.php?action=giohang&act=delete_giohang&id=<?php echo $key;?>"><button type="button" class="btn border-0 btn-danger">Xóa</button></a>

                <button type="submit" class="btn border-0 btn-secondary">Sửa</button>
              
              </td>
            </tr>
                <?php
                  endforeach;
                ?>
          <tr>
            <td colspan="3">
              <b>Tổng Tiền</b>
            </td>
            <td style="float: right;">
              <b> 
                <?php
                  $gh=new giohang();
                  echo $gh->getTotal();
                ?>
                <sup><u>đ</u></sup></b>
            </td>
            <td><a href="index.php?action=thanhtoan">Thanh toán</a></td>
          </tr>
        </tbody>
      </table>
    </form>
 <?php
    }
    else
    {
      echo '<script> alert("Giỏ hàng của bạn chưa có hàng");</script>';
      echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
    }
 ?>
</div>
</div>