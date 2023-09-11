<?php
$title='Mahara Digital trading Co. - About Us';

?>
<!DOCTYPE html>
<html lang="en">

    <?php require_once("head.php");?>


<body>
    <?php require_once("header.php");?>

    <!-- Breadcrumb Start -->
    <div class="container-fluid mt-5">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <span class="breadcrumb-item active">About Us</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <span class="bg-secondary pr-3">About Us</span>
        </h2>
        <div class="row px-xl-5">
            <div class="col-lg-12 mb-5">

                    <center class="tab-content bg-light p-30">
                        <img src="../style/img/about_en.png" alt="" >


                        <p>
                            Maharah Digital Trading Company is a company specialized in technical solutions and security systems Points of sale, attendance and departure, card printers, smart parking and inspection gates</p>

</center>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <span class="bg-secondary pr-3">Our Categories</span>
        </h2>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel related-carousel text-center">
                <?php
            foreach ($catData as $cat) 
            {
                ?>     
                        <a class="h6 text-decoration-none text-truncate" href="shopCat.php?cat=<?=$cat['id']?>">
                            <div class="product-item bg-light " style="height: 250px;">
                                <div class="product-img position-relative overflow-hidden text-center">
                                    <img class="d-inline-flex py-3 align-items-center justify-content-center" src="<?=$cat['pic']?>" alt="" style="height: 200px; width:auto">
                                </div>
                                <div class="text-center py-1" style="font-size: 18px;">
                                        <?=$cat['name_en']?>
                                </div>
                            </div> 
                        </a>   
                    <?php
            }
            ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->

    <?php require_once("footer.php");?>

    <?php require_once("js-src.php");?>
</body>

</html>