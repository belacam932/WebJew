<section class="login-block text-center">
  <div class="container">
    <div class="row">
      <!-- slide ảnh  -->
      <div class="col-md-6 banner-sec">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner"  role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="Content/Images/banner-img4.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="Content/Images/banner-img2.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="Content/Images/banner-img3.jpg" alt="First slide">
            </div>
          </div>
        </div>
      </div>
      <!-- form login -->
      <div class="col-md-5 login-sec">
        <h3 class=""><b>Login Now</b></h3>
        <form  action="index.php?action=dangnhap&act=dangnhap_action" class="login-form" method="post" >
          <!-- input -->
          <div class="form-group text-left">
            <label for="exampleInputEmail1" class="text-uppercase"><i class="fa fa-user" aria-hidden="true"></i> Username</label> <br>
            <!-- <input type="text" class="form-control" name="txtusername" placeholder="nhập username" > -->
            <input type="text" name="txtusername" placeholder="Username " required="" class="btn-block"/>
          </div>
          <div class="form-group text-left" >
            <label for="exampleInputPassword1" class="text-uppercase"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Password</label> <br>
            <!-- <input type="password" class="form-control" name="txtpassword" placeholder=""> -->
            <input type="password"class="btn-block" name="txtpassword" placeholder="Password" required="" />
          </div>
		  <!-- forget Password-->
		  <div class="form-group" >
			<div class="col-md-6">
				<a href="index.php?action=forget" style="font-weight:bold;" >Forget Password</a>
			</div>
			<div>
				<a href="index.php?action=dangky" style="font-weight:bold;" >Not a user? Sign up now!</a>
			</div>
          </div>
          <!-- Submit -->
          <div class="form-check text-center" >
			<button class="btn btn-lg btn-primary btn-block" name="submit" type="submit"> Login</button> 
          </div>
		  
        </form>
      </div>
    </div>
  </div>
</section>