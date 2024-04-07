<script type="text/javascript">
    function chonsize(a) {
        document.getElementById("tensize").value = a;

    }
</script>
<section>
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="mb-5 font-weight-bold" style="color:red;">CHI TIẾT SẢN PHẨM</h3>
        </div>

    </div>
    <article class="col-12">
        <!-- <div class="card"> -->
        <div class="container-fliud">
            <div class="wrapper row">
                <form action="index.php?action=giohang&act=giohang_action" method="post">
                    <!-- <input type="hidden" name="action" value="giohang&add_cart"/> -->

                    <div class="preview col-md-6">
                        <div class="tab-content">

                            <?php
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $hh = new hanghoa();
                                $sp = $hh->getHangHoaId($id);

                                $tensp = $sp['tensp'];
                                $mota = $sp['mota'];
                                $dongia = $sp['dongia'];
                            }
                            ?>
                            <?php
                            $hinh = $hh->getHangHoaHinh($id);
                            $set = $hinh->fetch();
                            ?>
                            <div class="tab-pane active" id=""><img src="Content\Images\Product\<?php echo $set['hinh']; ?>" alt=""  >

                            </div>
                        </div>
                        <!-- -->
                    </div>
                    <div class="details col-md-6">
                        <input type="hidden" name="idsp" value="<?php echo $id;?>" />
                        <h3 class="product-title" style="font-weight: bold;"> <?php echo $tensp; ?> </h3>
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star"></span> <span class="fa fa-star"></span>
                            </div>
                        </div>
                            <hr>
                              <!-- Mô tả -->
                        <p class="d-inline-flex gap-1">
                            <a class="btn" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                MÔ TẢ
                            </a>
                        </p>
                        <div class="collapse show" id="collapseExample">
                            <div class="card card-body">
                                <?php
                                echo $mota;
                                ?>
                            </div>
                        </div>
                        <hr>
                        <h4 class="price" style="color: #B2001F; font-weight: bold;" >Giá bán: <?php echo number_format($dongia); ?> đ</h4>

                        <h5 class="colors font-weight-bold" >Màu:
                        <select name="mymausac" class="btn-group btn" style="font-size:15px;">
                                <?php
                                $mau = $hh->getHangHoaMau($id);
                                while ($set = $mau->fetch()):
                                    ?>
                                    <option value="<?php echo $set['idmau']; ?>" style="font-size:20px;">
                                        <?php echo $set['tenmau']; ?>
                                    </option>
                                    <?php
                                endwhile;
                                ?>
                        </select><br> <br>
                                
                            <input type="hidden" name="tensize" id="tensize" value="0" />
                            
                            <?php
                            $size = $hh->getHangHoaSize($id);
                            echo'Kích Thước:';
                            if($size!=0)
                            { 
                                
                                    while ($set = $size->fetch()) :
                                        
                                ?>
                           
                            
                                <button type="button" name="" onclick="chonsize(<?php echo $set['tensize'];?>)"  class="btn btn-default-hong btn-circle" id="hong" 
                                value="<?php echo $set['idsize']; ?>">
                                    <?php echo $set['tensize']; ?>
                                </button>
                            <?php
                                
                            endwhile;
                        }
                            ?>
                            
                            </br></br>
                           
                            Số Lượng:

                            <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" style="font-size:25px;"/>


                        </h5>

                        <div class="action">

                        <button class="add-to-cart btn btn-default" type="submit" data-toggle="modal"
                                data-target="#myModal">MUA NGAY
                            </button>

                            <a href="#" target="_blank"> <button class="like btn btn-default"
                                    type="button"><span class="fa fa-heart"></span></button> </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- </div> -->
    </article>
</section>
<section>
    <?php 
        if(isset($_SESSION['makh'])):
    ?>
    <p style="font-size: 20px;" class="text-center"><b>BÌnh luận </b></p> <br> <br> 
    </div>
    <form action="index.php?action=binhluan" method="post">
        <div class="row">

            <input type="hidden" name="txtmasp" value="<?php echo $id; ?>" />
            <textarea style="width: 1000px" class="input-field" type="text" name="comment" rows="5" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea> 
            <input name="submit" style="width: 1000px;" type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />

        </div>

    </form>
    <div class="row">
        <p class="float-left"><b>Các bình luận</b></p>
        <?php 
            $bl=new binhluan();
            $noidung=$bl->selectComment($id);
            while($set=$noidung->fetch()):
        ?>
        <div class="col-12">
                    <div class="row">
                        <p><?php echo '<b>'.$set['username'].'</b>:'.$set['content'];?></p>
                    </div>
                </div>
        <?php 
            endwhile;
        ?>
        <hr>
    </div>
    <div class="row">
        <br />
    </div>
        <?php 
            endif;
        ?>
    </div>
</section>