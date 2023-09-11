<?php
$title='شركة مهارة الرقمية للتجارة - الرئيسية';
?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once("head.php");?>
<body>
	<?php require_once("header.php");?>
    <!-- Carousel Start -->
    <div class="container-fluid mt-5">
        <div class="row px-xl-5">
            <div class="col-lg-12">
                <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 560px;">
                            <img class="position-absolute w-100 h-100" src="../style/img/banners/bannner1.jpg" style="object-fit: cover;">
                        </div>
                        <div class="carousel-item position-relative" style="height: 560px;">
                            <img class="position-absolute w-100 h-100" src="../style/img/banners/banner2.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <span class="bg-secondary pl-3">الخدمات</span>
        </h2>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 ml-3"></h1>
                    <h5 class="font-weight-semi-bold m-0"> جودة المنتج</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 ml-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">الشحن مجانا</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 ml-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">استرجاع خلال 14 يوم</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 ml-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">دعم 24/7</h5>
                </div>
            </div>
        </div>
    </div> 
    <!-- Featured End -->
    <!-- Categories Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pl-3">الاقسام</span></h2>
        <div class="row px-xl-5">
            <?php
            foreach ($catData as $cat) 
            {
                ?>            
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="mb-4"> 
                        <a class="h6 text-decoration-none text-truncate" href="shopCat.php?cat=<?=$cat['id']?>">
                            <div class="product-item bg-light " style="height: 250px;">
                                <div class="product-img position-relative overflow-hidden text-center">
                                    <img class="py-3" src="<?=$cat['pic']?>" alt="" style="height: 200px; width:auto">
                                </div>
                                <div class="text-center py-1" style="font-size: 18px;">
                                        <?=$cat['name_ar']?>
                                </div>
                            </div> 
                        </a>    
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <!-- Categories End -->

    <!-- Vendor Start -->
    <div class="container-fluid py-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pl-3">عملائنا</span></h2>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="bg-light p-4 d-flex justify-content-center" style="height: 200px;">
                        <img src="../style/img/clients/Baytur.jpg" alt="" class="align-self-center">
                    </div>
                    <div class="bg-light p-4 d-flex justify-content-center" style="height: 200px;">
                        <img src="../style/img/clients/carousel-1.jpg" alt="" class="align-self-center">
                    </div>
                    <div class="bg-light p-4 d-flex justify-content-center" style="height: 200px;">
                        <img src="../style/img/clients/Coca Cola.png" alt="" class="align-self-center">
                    </div>
                    <div class="bg-light p-4 d-flex justify-content-center" style="height: 200px;">
                        <img src="../style/img/clients/Deemah.jpg" alt="" class="align-self-center">
                    </div>
                    <div class="bg-light p-4 d-flex justify-content-center" style="height: 200px;">
                        <img src="../style/img/clients/Gissah.jpg" alt="" class="align-self-center">
                    </div>
                </div> 
            </div>
        </div>
    </div>
    
    <!-- Vendor End -->
    <?php require_once("footer.php");?>
    <?php require_once("js-src.php");?>
</body>
</html>