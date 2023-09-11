<?php
include('chicklog.php');
include('controller.php');
$page='cats'; 
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<link rel="stylesheet" href="assets/datatable/dataTables.bootstrap.min.css">
	<?php
	include('layout/head.php');
	?>
	<body class="rtl">
		<?php
		include('layout/header.php');
		?>
		<div class="main-container">
			<?php
				include('layout/navbar.php');
			?>
			<div class="main-content">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<ol class="breadcrumb">
								<li>
									<i class="fa fa-home"></i>
									<a href="index.php">
										الرئيسية
										<span class="selected"></span>									
									</a>
								</li>
								<li class="active">
									تصنيفات المنتجات			
								</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									تصنيفات المنتجات
								</div>									
								<div class="panel-body">
								<div id='result'>
									<?php 
									echo $result;
									//unset($_SESSION['dellCat']);
									?></div>
									<div class="new">
										<a href="category_new.php">	اضافة تصنيف جديد</a>
									</div>
									<table id="example" class="table table-striped table-bordered">
										<thead>
											<tr>
											<th style="width: 60%;">اسم التصنيف</th>
											<th style="width: 30%;">حالة التصنيف</th>
											<th style="width: 10%;">تحكم</th>
											</tr>
										</thead>
										<tbody>
											<?php
												echo catDataShow(0,'');
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			include('layout/sidebar.php');		
		?>
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