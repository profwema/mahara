<?php
include('chicklog.php');
include('controller.php');
$page='pruds'; 



?>


<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<link rel="stylesheet" href="assets/datatable/dataTables.bootstrap.min.css">

	<?php
	include('layout/head.php');
	?>

	<!-- end: HEAD -->

	<!-- start: BODY -->
	<body class="rtl">

		<!-- start: HEADER -->
		<?php
		include('layout/header.php');
		?>
		<!-- end: HEADER -->

		<!-- start: MAIN CONTAINER -->
		<div class="main-container">

			<!-- start: NAVBAR -->
			<?php
				include('layout/navbar.php');
			?>
			<!-- evd: NAVBAR -->

			<!-- start: PAGE -->
			<div class="main-content">


				<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">

							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="fa fa-home"></i>
									<a href="index.php">
										الرئيسية
										<span class="selected"></span>									
									</a>
								</li>
								<li class="active">
									 المنتجات			
								
								</li>

							</ol>

							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									 المنتجات
								</div>									
								<div class="panel-body">
								<div id='result'>
									<?php 
									echo isset($_SESSION['dellCat'])? $_SESSION['dellCat']:'';
									//unset($_SESSION['dellCat']);
									?></div>
									<div class="new">
										<a href="product_new.php">	اضافة منتج جديد</a>
									</div>

									<table  id="example" class="table table-striped table-bordered" style="width:100%">	
										<thead>
											<tr>
												<th style="width: 60%;">اسم المنتج</th>
												<th style="width: 30%;">التصنيف</th>
												<th style="width: 10%;">تحكم</th>
											</tr>
										</thead>
										<tbody>
										<?php
											echo itemDatashow();
										?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->

		</div>
		<!-- end: MAIN CONTAINER -->

		<!-- start: LEFT SIDEBAR -->
		<?php
			include('layout/sidebar.php');		
		?>
		<!-- end: LEFT SIDEBAR -->
					
					
		<?php
			include('layout/footer.php');
		?>
				
<!-- 					
				<script src="assets/datatable/jquery-3.5.1.js"></script>			
				<script src="assets/datatable/jquery.dataTables.min.js"></script>
				<script src="assets/datatable/dataTables.bootstrap.min.js"></script>


		<script type="text/javascript">
		$(document).ready(function() 
		{
			
			$(".onoffswitch-checkbox").click(function() 
		
			{

        
				var id = this.id;  //changed here also, just because jQuery is not needed here
        
				var state = 0;
		
				//alert(state);
        
				$("#state_span").load("module_update.php?id="+id+"&state="+state+"&table=support&field=status"); 
    
			});
			

          $('#example').DataTable( {

			"language": {
			
				"url": "assets/plugins/ar.json"
			}


        } );
      } );  

		
	</script>
 -->
	</body>
	<!-- end: BODY -->
</html>