  <header id="header" class="site-header">
      <nav id="header-nav" class="navbar navbar-expand-lg p-3 p-lg-0">
        <div class="container">
          <a class="navbar-brand d-lg-none" href="index.html">
            <img src="Content/images/main.jpeg" class="logo img-fluid">
          </a>
          <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" 
		  aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">Menu</button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
            <div class="offcanvas-header px-4 pb-0">
              <a class="navbar-brand" href="index.html">
                <img src="Content/images/main-logo.png" class="logo img-fluid">
              </a>
              <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdNavbar"></button>
            </div>
			<!--header-->
            <div class="offcanvas-body d-block">
              <ul id="navbar" class="navbar-nav w-100 py-4 d-none d-lg-flex justify-content-between align-items-center border-bottom border-dark">
                <!--logo-->
				<a class="navbar-brand d-none d-lg-block me-0" href="index.php">
                  <img src="Content/images/main.jpeg" class="logo img-fluid">
                </a>
				<!--right-->
                <ul class="list-unstyled d-lg-flex justify-content-between align-items-center">
                  <li class="nav-item ms-5 search-item">
                    <div id="search-bar" class="border-right d-lg-block">
                      <form action="index.php?action=sanpham&act=timkiem" autocomplete="on" method="post">
                        <input id="search" class="text-dark" name="txtsearch" type="text" placeholder="Search Here..." >
                        <a type="submit" class="nav-link me-0" href="#">Search</a>
                      </form>
                    </div>
                  </li>
                  <li >
                    <a class="nav-link dropdown-toggle me-0" href="index.php?action=giohang" role="button" aria-expanded="false">Cart</a>
                  </li>
				  <!--login-->
                  <li class="nav-item ms-5">
                  <?php
                                    if(!isset($_SESSION['makh'])&& !isset($_SESSION['tenkh']))
                                    {
                                        echo '<a href="index.php?action=dangnhap" class="nav-link">Login</a>';
                                    }
                   ?>
                  </li>
				  <!--sign up-->
				  <li class="nav-item ms-5">
                  <?php
                                    if(!isset($_SESSION['makh'])&& !isset($_SESSION['tenkh']))
                                    {
                                        echo '<a href="index.php?action=dangky" class="nav-link">Registration</a>';
                                    }
                   ?>
                  </li>
				  <!--user-->
					<li class="nav-item dropdown">
						
						  <?php
								if(isset($_SESSION['makh'])&& isset($_SESSION['tenkh']))
								{
									echo '<a class="nav-link dropdown-toggle" 
									href="#" role="button" data-bs-toggle="dropdown" 
									aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>'.$_SESSION['tenkh'].'</a>
									  <ul class="dropdown-menu">
										<li><a class="dropdown-item" href="index.php?action=dangnhap&act=dangxuat">Logout</a></li>
									  </ul>';
								}
						   ?>
					</li>
                </ul>
              </ul>
            </div>
          </div>
        </div>
      </nav>
	  
    </header>
   