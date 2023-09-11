    <!-- Topbar Start -->
    <?php
        $page = basename($_SERVER['PHP_SELF']);
        if(isset($_SERVER["QUERY_STRING"]));
        {
            $page =$page.'?'.$_SERVER["QUERY_STRING"];
        }
        $catData = array(); // create a variable to hold the information
        global $MySQL_Handle;
        $state = '2';
        $query = $MySQL_Handle->prepare('SELECT * FROM categories WHERE state=?');
        $query->bind_param('i',$state); 
        $query->execute();
        $exec=$query->get_result();
        if($exec->num_rows>0)
        {
            while($row= $exec->fetch_assoc())
            {
                $catData[] = $row;              
            }
        }
        ?>
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">

            <div class="col-12 col-lg-9 text-center text-lg-right">

            </div>
            <div class="col-12 col-lg-3 text-center text-lg-right">
                <div class="d-inline-flex align-items-center h-100">
                    <a href="#"class="text-body mr-4"target="_blank" title="Social Media">  <i class="fab fa-facebook-f"></i>  </a>
                    <a href="#"class="text-body mr-4"target="_blank" title="Social Media">  <i class="fab fa-twitter"></i>  </a>
                    <a href="#"class="text-body mr-4"target="_blank" title="Social Media">  <i class="fab fa-youtube"></i>  </a>
                    <a href="#"class="text-body mr-4"target="_blank" title="Social Media">  <i class="fab fa-instagram"></i>  </a>
                    <a href="#"class="text-body mr-4"target="_blank" title="Social Media">  <i class="fab fa-linkedin"></i>  </a>
                </div>  
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">
                                <img src="../style/img/en.png" alt="">English</button>
                        <div class="dropdown-menu dropdown-menu-left">
                            <a class="dropdown-item" href="../ar/<?= $page?>">
                                <img src="../style/img/ar.png" alt="">عربي
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30" id='menu-1'>
        <div class="row px-xl-5">

        
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="home.php" class=" px-3 py-0 text-decoration-none d-none align-items-center d-lg-block logo">
                        <img src="../style/img/logo.png" alt="" >
                    </a>
                    <a href="#" class="text-decoration-none d-block align-items-center d-lg-none">
                        <span class="h4 px-2 py-0 align-self-center text-light">Mahara Digital trading Co.</span>
                    </a>
                    
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav ml-5 py-0">
                            <a href="home.php"class="nav-item nav-link">Home</a>
                            <a href="about.php"class="nav-item nav-link">About Us</a>
                            <div class="menudown nav-item">
                                <a class="menubtn nav-link" href="shop.php">
                                   Our Products <i class="fa fa-caret-down"></i>
                                </a>
                                <div class="menudown-content">
                                    <div class="row">
                                        <?php
                                            foreach ($catData as $cat) 
                                            {
                                                ?>
                                                <div class="col-lg-4 col-12 categories">
                                                    <a href="shopCat.php?cat=<?=$cat['id']?>">
                                                        <img src="<?=$cat['pic']?>" alt="">
                                                        <?=$cat['name_en']?></div>
                                                    </a>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <a href="contact.php"class="nav-item nav-link">Contact Us</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->