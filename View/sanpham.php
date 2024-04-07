
<?php
    $hh = new hanghoa();
    $count = $hh->getHangHoaAllNew()->rowCount();
    $limit = 4;
    $trang = new page();
    $page = $trang->findPage($count, $limit);
    $start = $trang->findStart($limit);
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    ?>
  <?php
    $ac = 1;
    if (isset($_GET['action'])) {
        if (isset($_GET['act']) && $_GET['act'] == 'nhan') {
            $ac = 2;
        }
        elseif (isset($_GET['act']) && $_GET['act'] == 'bongtai') {
            $ac = 3;
        } 
        elseif (isset($_GET['act']) && $_GET['act'] == 'daychuyen') {
            $ac = 4;
        } elseif(isset($_GET['act']) && $_GET['act'] == 'timkiem')
		{
            $ac = 5;
        }
        elseif(isset($_GET['act']) && $_GET['act'] == '4')
		{
            $ac = 6;
        }elseif(isset($_GET['act']) && $_GET['act'] == '6')
		{
            $ac = 7;
        }elseif(isset($_GET['act']) && $_GET['act'] == '7')
		{
            $ac = 8;
        }elseif(isset($_GET['act']) && $_GET['act'] == '36')
		{
            $ac = 9;
        }
		else{
			$ac=1;
		}
    }
    ?>

  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-12 text-right">
          <?php
                if ($ac == 1) {
                    echo '  <h3 class="mb-5 font-weight-bold text-center" >TẤT CẢ SẢN PHẨM MỚI NHẤT</h3>';
                }
                elseif ($ac == 2) {
                    echo ' <h3 class="mb-5 font-weight-bold text-center" >TẤT CẢ SẢN PHẨM NHẪN</h3>';
                }
				elseif($ac==3)
				{
					echo ' <h3 class="mb-5 font-weight-bold text-center" >TẤT CẢ SẢN PHẨM BÔNG TAI</h3>';
				}
                elseif($ac==4)
				{
					echo ' <h3 class="mb-5 font-weight-bold text-center" >TẤT CẢ SẢN PHẨM DÂY CHUYỀN</h3>';
				}
                elseif($ac==5)
				{
					echo ' <h3 class="mb-5 font-weight-bold text-center" >TẤT CẢ SẢN PHẨM TÌM KIẾM</h3>';
                    echo '<form action="index.php?action=sanpham&act=timkiem">
                    <select id="sapxep" name="sapxep">
                      <option value="1">Giá cao đến thấp</option>
                      <option value="2">Mới nhất</option>
                      <option value="3">Giá thấp đến cao</option>
                      <option value="4">Sản phẩm bán chạy</option>
                    </select>
                    </form>';
				}
                elseif($ac==6)
				{
					echo ' <h3 class="mb-5 font-weight-bold text-center" >TẤT CẢ SẢN PHẨM TRANG SỨC BẠC</h3>';
				}elseif($ac==7)
				{
					echo ' <h3 class="mb-5 font-weight-bold text-center" >TẤT CẢ SẢN PHẨM ĐỒNG HỒ</h3>';
				}elseif($ac==8)
				{
					echo ' <h3 class="mb-5 font-weight-bold text-center" >TẤT CẢ SẢN PHẨM ĐÁ QUÝ</h3>';
				}elseif($ac==9)
				{
					echo ' <h3 class="mb-5 font-weight-bold text-center" >TẤT CẢ SẢN PHẨM TRANG SỨC VÀNG</h3>';
				}
				
                ?>
          </div>

      </div>
      <!--List product-->
      <div class="row">
          <?php
            $hh = new hanghoa();
            if ($ac === 1) {
                $result = $hh->getHangHoaAllPage($start, $limit);
            }
            elseif($ac==2)
            {
                $result = $hh->getHangHoaNhanPage($start, $limit);
            }
            elseif($ac==3)
            {
                $result = $hh->getHangHoaBongtaiPage($start, $limit);
            }
            elseif($ac==4)
            {
                $result = $hh->getHangHoaDChuyenPage($start, $limit);
            }
			elseif($ac==5)
					{
						if($_POST['txtsearch'])
						{
							$tk=$_POST['txtsearch'];
							$result=$hh->timkiemSP($tk);
						}
					}
            elseif($ac==6)
            {
                $result = $hh->getBac($start, $limit);
            }elseif($ac==7)
            {
                $result = $hh->getDHo($start, $limit);
            }elseif($ac==8)
            {
                $result = $hh->getDa($start, $limit);
            }elseif($ac==9)
            {
                $result = $hh->getVang($start, $limit);
            }
            while ($set = $result->fetch()) :
            ?>
              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3">

                  <div class="view overlay z-depth-1-half " >
                  <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['idsp']; ?>">
                      <img src="Content\Images\product\<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                      <div class="mask rgba-black-slight"></div>
                  </a>
                  </div>
                  <!-- ten sanpham -->
                  <div class="product-content text-center">
                  <p class="text-uppercase mt-3">
					<a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['idsp']; ?>">
                      <span><?php echo $set['tensp'];?></span>
					</a>
                  </p>
                  <div class="action">
					<span style="color:#B2001F; font-size:12px; font-weight:bold;">
                    <?php 
                      echo number_format($set['dongia']);
                     ?> <u>Đ</u>
					</span>
                  </div>
                </div>
              </div>
          <?php
            endwhile;
            ?>
      </div>
  </section>
  <div class="offset-md-4 text-center">
    <ul class="pagination">
        <?php
		$current_page=isset($_GET['page']) ? $_GET['page'] :1;
        if ($current_page > 1 && $page > 1) {
            echo '<li><a href="index.php?action=sanpham&page=' . ($current_page - 1) . '" style="color:black; font-weight:bold; ">Last</a></li>';
        }
        for ($i = 1; $i <= $page; $i++) {
            ?> <li><a href="index.php?action=sanpham&page=<?php echo $i;?>" >
			<?php echo $i?>
			</a></i>
			<?php
                    }
        if ($current_page < $page && $page > 1) {
            echo '<li><a href="index.php?action=sanpham&page=' . ($current_page + 1) . '" style="color:black;font-weight:bold;">Next</a></li>';
        }
        ?>
    </ul>
</div>
  <!-- end sản phẩm mới nhất -->