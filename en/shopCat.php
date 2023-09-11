<?php
$title='Mahara Digital trading Co. - Products';
?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once("head.php");?>
<body>
	<?php require_once("header.php");?>
    <?php
        if(isset($_GET['cat']))
        {
            $cat=$_GET['cat'];
            $row = getDetails($cat,'categories');
            $catName = $row['name_en'];

            global $MySQL_Handle;     
            $cat  = legal_input($cat);
            $query = $MySQL_Handle->prepare('SELECT * from items WHERE category=?');
            $query->bind_param('i',$cat); 
            $query->execute();
            $exec=$query->get_result();
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
                    <span class="breadcrumb-item active"><?=$catName?></span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Shop Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative mx-xl-5 mb-4"><span class="bg-secondary pr-3">List of Products</span></h2>
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <!-- Shop Product Start -->
            <div class="col-lg-12 col-md-12">
                <div class="row pb-3">
                    <?php
                    if($exec->num_rows>0)
                    {
                        while($row= $exec->fetch_assoc())
                        {
                        ?>
                            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                                <div class="mb-4"> 
                                    <a class="h6 text-decoration-none text-truncate" href="detail.php?id=<?=$row['id']?>">
                                        <div class="product-item bg-light " style="height: 300px;">
                                            <div class="product-img position-relative overflow-hidden text-center">
                                                <img class="pt-1" src="<?=$row['pic1']?>" alt="" style="height: 220px; width:auto">
                                            </div>
                                            <div class="text-center py-1 px-2" style="font-size: 18px;">
                                                <?=$row['name_en']?>
                                            </div>
                                        </div> 
                                    </a>    
                                </div>
                            </div>

                        <?php
                        }
                    }
                    ?>
<!--                     <div class="col-12">
                        <nav>
                          <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                        </nav>
                    </div> -->
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->
    <?php require_once("footer.php");?>
    <?php require_once("js-src.php");?>
</body>
</html>