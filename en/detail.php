<?php
$title='Mahara Digital trading Co. - Products';
?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once("head.php");?>
<body>
	<?php require_once("header.php");?>

    <?php
        if(isset($_GET['id']))
        {
            $id=$_GET['id'];
            
            $row = getDetails($id,'items');
            $catid = $row['category'];
            $rowCat = getDetails($catid,'categories');
            $catName = $rowCat['name_en'];


        }
        else
        {
            @header('Location:home.php');
        }
    ?>


    <!-- Breadcrumb Start -->
    <div class="container-fluid mt-5">
        <div class="row px-xl-5">
            <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="home.php">Home</a>
                    <a class="breadcrumb-item text-dark" href="shop.php">Our Products</a>
                    <a class="breadcrumb-item text-dark" href="shopCat.php?cat=<?=$catid?>"><?=$catName?></a>
                    <span class="breadcrumb-item active"><?=$row['name_en']?></span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-4 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="<?=$row['pic1']?>" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="<?=$row['pic2']?>" alt="Image">       
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="<?=$row['pic3']?>" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="<?=$row['pic4']?>" alt="Image">   
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-8 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3 class='mb-4'><?=$row['name_en']?></h3>
                    <hr class="my-2">
                    <div class="d-flex my-3 ml-2">
                        <strong class="text-dark mr-4">Product Code : </strong>
                        <label class=""><?=$row['model']?></label>
                    </div>
                    <hr class="my-2">
                    <div class="d-flex my-3 ml-2">
                        <strong class="text-dark mr-4">Product Sizes :</strong>
                        <label class=""><?=$row['size']?></label>
                    </div>
                    <hr class="my-2">
                    <div class="d-flex my-3 ml-2">
                        <strong class="text-dark mr-4">Product Manual :</strong>
                        <label class="" > <a href='<?=$row['sheet']?>' class='bg-primary text-dark text-decoration-none px-3 py-2'> Download</a></label>
                    </div>
                   


                    <div class='orderWhats d-inline-flex align-items-center mt-4'>
                    <?php 
                        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                        $link = "https";
                    else $link = "http";
                      
                    // Here append the common URL characters.
                    $link .= "://";
                      
                    // Append the host(domain name, ip) to the URL.
                    $link .= $_SERVER['HTTP_HOST'];
                      
                    // Append the requested resource location to the URL
                    $link .= $_SERVER['REQUEST_URI'];
                    ?>
                    <img src="../style/img/3.png" alt="">
                    <a target='_blank'href="https://api.whatsapp.com/send?phone=+966552204321&text=
                    <?php echo urlencode ($link); ?>" data-action="share/whatsapp/share">
                    
                    Contact to order the product</a>  

                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-4">Product Description</h4>
                        <hr class="my-2">
                        <p class='py-2'> <?=$row['desc_en']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->



    <!-- Vendor End -->

    <?php require_once("footer.php");?>

    <?php require_once("js-src.php");?>
</body>

</html>