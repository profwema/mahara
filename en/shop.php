<?php
$title='Mahara Digital trading Co. - Products';

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
                    <span class="breadcrumb-item active">Our Products</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
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
                                        <?=$cat['name_en']?>
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
    <!-- Shop Detail End -->



    <?php require_once("footer.php");?>

    <?php require_once("js-src.php");?>
</body>

</html>