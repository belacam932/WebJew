 <!-- anh banner -->
 <?php
	include_once "./View/menu.php";
 ?>
 <section id="billboard" class="container">
      <div class="swiper main-swiper">
        <div class="swiper-wrapper">
          <div class="position-relative swiper-slide" style="background-image: url(Content/images/banner-image4.jpg); background-size: cover; background-repeat: no-repeat; height: 80vh; background-position: center;">
          </div>
          <div class="position-relative swiper-slide" style="background-image: url(Content/images/banner-image11.jpg); background-size: cover; background-repeat: no-repeat; height: 80vh; background-position: center;">
          </div>
          <div class="position-relative swiper-slide" style="background-image: url(Content/images/banner-image8.jpg); background-size: cover; background-repeat: no-repeat; height: 80vh; background-position: center;">
          </div>
        </div>
        <div class="main-slider-pagination position-absolute text-center"></div>
      </div>
    </section>
 <!-- ba cột -->
 <section id="company-services" class="padding-large">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 pb-3">
            <div class="icon-box text-left d-flex">
              <span class="icon-box-icon d-flex justify-content-center align-items-center bg-white rounded-circle shadow">
                <svg width="50" height="20" class="cart-outline text-primary">
                  <use xlink:href="#cart-outline">
                </svg>
              </span>
              <div class="icon-box-content ms-3">
                <h5 class="card-title">GIAO HÀNG MIỄN PHÍ</h5>
                <p>Áp dụng cho hóa đơn trên 1.000.000Đ và cách cửa hàng trong bán kính 7km</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 pb-3">
            <div class="icon-box text-left d-flex">
              <div class="icon-box-icon d-flex justify-content-center align-items-center bg-white rounded-circle shadow">
                <svg width="50" height="20" class="quality text-primary">
                  <use xlink:href="#quality">
                </svg>
              </div>
              <div class="icon-box-content ms-3">
                <h5 class="card-title">ĐẢM BẢO CHẤT LƯỢNG</h5>
                <p>Luôn mang lại cảm giác hài lòng khi đến tay khách hàng.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 pb-3">
            <div class="icon-box text-left d-flex">
              <div class="icon-box-icon d-flex justify-content-center align-items-center bg-white rounded-circle shadow">
                <svg width="50" height="20" class="price-tag text-primary">
                  <use xlink:href="#price-tag">
                </svg>
              </div>
              <div class="icon-box-content ms-3">
                <h5 class="card-title">ƯU ĐÃI</h5>
                <p>Giảm 30% cho đơn hàng từ 5.000.000Đ</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- Who are you-->
<section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="image-holder">
              <img src="Content/images/banner-image9.jpg" alt="single" class="single-image img-fluid">
            </div>
          </div>
          <div class="about-content col-lg-6 m-auto px-5">
            <h4 class="display-4">Who are we</h4>
            <p style="font-size:15px">Một trong các cửa hàng kinh doanh Trang sức Kim Cương, Vàng lớn nhất nước.
              Sở hữu trên 350 trung tâm kim hoàn tại 55 tỉnh thành trên cả nước.</p>
          </div>
        </div>
      </div>
  </section>
  <!-- sản phẩm All -->
  <section id="products" class="padding-large">
      <div class="container">
        <div class="display-header d-flex flex-wrap justify-content-between pb-1">
          <h4 class="display-4">PRODUCT NEWS</h4>
          <div class="btn-right d-flex flex-wrap align-items-center">
            <a href="index.php?action=sanpham" class="btn me-5">XEM CHI TIẾT</a>
			<!--icon-->
            <div class="swiper-buttons">
              <button class="swiper-prev product-carousel-prev me-1">
                <svg width="41" height="41"><use xlink:href="#angle-left"></use></svg>
              </button>
              <button class="swiper-next product-carousel-next">
                <svg width="41" height="41"><use xlink:href="#angle-right"></use></svg>
              </button>
            </div>
          </div>
        </div>
		<!--sản phẩm mới nhất-->
        <div class="swiper product-swiper">
          <div class="swiper-wrapper">
			  <?php
				$hh = new hanghoa();
				$result = $hh->getHangHoaNew();
				while ($set = $result->fetch()) :
          $limit=6
				?>
            <div class="swiper-slide py-3">
				<!--hình ảnh-->
              <div class="image-holder position-relative">
                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['idsp']; ?>">
                  <img src="Content/images/product/<?php echo $set['hinh'];?>" alt="categories" class="product-image img-fluid">
                </a>
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
            </div>
            <?php
            endwhile;
            ?>
          </div> 
        </div>
      </div>
</section>
<!---nhan-->
<section id="ring" class="padding-large">
      <div class="container">
        <div class="display-header d-flex flex-wrap justify-content-between pb-1">
          <h4 class="display-4">ring</h4>
          <div class="btn-right d-flex flex-wrap align-items-center">
            <a href="index.php?action=sanpham&act=nhan" class="btn me-5">XEM CHI TIẾT</a>
			<!--icon-->
            <div class="swiper-buttons">
              <button class="swiper-prev product-carousel-prev me-1">
                <svg width="41" height="41"><use xlink:href="#angle-left"></use></svg>
              </button>
              <button class="swiper-next product-carousel-next">
                <svg width="41" height="41"><use xlink:href="#angle-right"></use></svg>
              </button>
            </div>
          </div>
        </div>
		<!--sản phẩm mới nhất-->
        <div class="swiper product-swiper">
          <div class="swiper-wrapper">
			  <?php
				$hh = new hanghoa();
				$result = $hh->getHangHoaNhan();
				while ($set = $result->fetch()) :
          $limit=6
				?>
            <div class="swiper-slide py-3">
				<!--hình ảnh-->
              <div class="image-holder position-relative">
                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['idsp']; ?>">
                  <img src="Content/images/product/<?php echo $set['hinh'];?>" alt="categories" class="product-image img-fluid">
                </a>
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
            </div>
            <?php
            endwhile;
            ?>
          </div> 
        </div>
      </div>
</section>
<!---bông tai-->
<section id="products" class="padding-large">
      <div class="container">
        <div class="display-header d-flex flex-wrap justify-content-between pb-1">
          <h4 class="display-4">earrings</h4>
          <div class="btn-right d-flex flex-wrap align-items-center">
            <a href="index.php?action=sanpham&act=bongtai" class="btn me-5">XEM CHI TIẾT</a>
			<!--icon-->
            <div class="swiper-buttons">
              <button class="swiper-prev product-carousel-prev me-1">
                <svg width="41" height="41"><use xlink:href="#angle-left"></use></svg>
              </button>
              <button class="swiper-next product-carousel-next">
                <svg width="41" height="41"><use xlink:href="#angle-right"></use></svg>
              </button>
            </div>
          </div>
        </div>
		<!--sản phẩm mới nhất-->
        <div class="swiper product-swiper">
          <div class="swiper-wrapper">
			  <?php
				$hh = new hanghoa();
				$result = $hh->getHangHoaBtai();
				while ($set = $result->fetch()) :
          $limit=6
				?>
            <div class="swiper-slide py-3">
				<!--hình ảnh-->
              <div class="image-holder position-relative">
                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['idsp']; ?>">
                  <img src="Content/images/product/<?php echo $set['hinh'];?>" alt="categories" class="product-image img-fluid">
                </a>
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
            </div>
            <?php
            endwhile;
            ?>
          </div> 
        </div>
      </div>
</section>
<!---daychuyen-->
<section id="products" class="padding-large">
      <div class="container">
        <div class="display-header d-flex flex-wrap justify-content-between pb-1">
          <h4 class="display-4">Necklade</h4>
          <div class="btn-right d-flex flex-wrap align-items-center">
            <a href="index.php?action=sanpham&act=daychuyen" class="btn me-5">XEM CHI TIẾT</a>
			<!--icon-->
            <div class="swiper-buttons">
              <button class="swiper-prev product-carousel-prev me-1">
                <svg width="41" height="41"><use xlink:href="#angle-left"></use></svg>
              </button>
              <button class="swiper-next product-carousel-next">
                <svg width="41" height="41"><use xlink:href="#angle-right"></use></svg>
              </button>
            </div>
          </div>
        </div>
		<!--sản phẩm mới nhất-->
        <div class="swiper product-swiper">
          <div class="swiper-wrapper">
			  <?php
				$hh = new hanghoa();
				$result = $hh->getHangHoaDchuyen();
				while ($set = $result->fetch()) :
          $limit=6
				?>
            <div class="swiper-slide py-3">
				<!--hình ảnh-->
              <div class="image-holder position-relative">
                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['idsp']; ?>">
                  <img src="Content/images/product/<?php echo $set['hinh'];?>" alt="categories" class="product-image img-fluid">
                </a>
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
            </div>
            <?php
            endwhile;
            ?>
          </div> 
        </div>
      </div>
</section>
<section id="newsletter" class="bg-light padding-medium" style="background-image: url(Content/images/hero-img.jpg); background-size: cover; background-repeat: no-repeat;">
      <div class="container">
        <div class="newsletter">
          <div class="row">
            <div class="col-lg-6 col-md-12 title mb-4">
              <h4 class="display-4">Subscribe to Our</h4>
              <p>Get latest news, updates and deals directly mailed to your inbox</p> 				
            </div>
            <!-- form email -->
            <form class="col-lg-6 col-md-12 d-flex align-items-center">
              <div class="d-flex w-75 border-bottom border-dark py-2">
                <input id="newsletter1" type="text" class="form-control fw-light border-0 p-0" placeholder="Your email address here">
                <button class="btn fw-medium text-uppercase border-0 p-0" type="button">Subscribe</button>
              </div>
            </form>
          </div> 			
        </div>
      </div>
    </section>