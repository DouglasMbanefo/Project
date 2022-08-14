
        <!-- main header -->
        <header class="main-header style-three">

            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.php"><img src="assets/images/mechailer.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li ><a href="index.php">Home</a></li> 
                                        <li ><a href="">About</a></li> 
                                        <li ><a href="<?php if(isset($_COOKIE["provider_id"])){echo 'service_provider_account.php';}else{ echo 'user_account.php'; } ?>">My Account</a></li> 
                                        
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="btn-box">
                            <?php if(isset($_COOKIE["provider_id"])){ ?>
                            <a href="select_service.php" class="theme-btn-one"><i class="icon-1"></i>Post a Service</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.php"><img src="assets/images/mechailer.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="btn-box">
                            <?php if(isset($_COOKIE["provider_id"])){ ?>
                            <a href="select_service.php" class="theme-btn-one"><i class="icon-1"></i>Post a Service</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img src="assets/images/mechailer.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
               
               
            </nav>
        </div><!-- End Mobile Menu -->

