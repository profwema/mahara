<?php
include('chicklog.php');
include('controller.php');
$page='cats'; 



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
		<?php
		include('layout/header.php');
		?>
		<div class="main-container">
			<?php
				include('layout/navbar.php');
			?>
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
								<li>
									<a href="categories.php">
										تصنيفات المنتجات			
										<span class="selected"></span>									
									</a>
								</li>
								<li class="active">
									إضافة تصنيف جديد	

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
									إضافة تصنيف جديد	
								</div>									
								<div class="panel-body">
									<div id='result'><?=$result?></div>
									<form action="" method="post"id='cat-form' class="form-horizontal">
										<div class="box-body">
											<div class="form-group">
												<label class="col-sm-2 control-label"> التصنسف الأعلى</label>
												<div class="col-sm-10">
													<select name="parent_id" class="form-control">
														<option value="0"> الأعلى </option>
															<?php
																echo catDataOption(0,'');
															?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">اسم التصنيف</label>
												<div class="col-sm-5">
													<input type="text" class="form-control" placeholder="باللغة العربية" name="arName" required>
												</div>
												<div class="col-sm-5">
													<input type="text" class="form-control" placeholder="باللغة الإنجليزية" name="enName" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">صورة التصنيف</label>
												<div class="col-sm-10">
													<input type="url" class="form-control" placeholder="رابط الصورة" name="catPic">
													
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label"> حالة التصنيف</label>
												<div class="col-sm-3">
												<span class="mainCat">تصنيف رئيسي </span>
													<input type="radio" value="1" name="state" checked="true">
												</div>
												<div class="col-sm-3">
													<span class="subCat">تصنيف فرعي </span>
													<input type="radio" value="2" name="state">
												</div>												

											</div>
										</div>
										<div class="box-footer">
											<input type="hidden" name="time"id='time'>
											<button class="btn btn-info pull-right" type="submit" name="addcat" >إضافة</button>
										</div>
									</form>
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
		<!-- end: LEFT SIDEBAR -->
					
					
		<?php
			include('layout/footer.php');
		?>
		<script>
		$(document).ready(function()
		{	
			$("#time").val(new Date().getTime());
		});
	</script>
	</body>
	
	<!-- end: BODY -->
</html>