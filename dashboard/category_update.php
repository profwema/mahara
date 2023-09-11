<?php
include('chicklog.php');
include('controller.php');
$page='cats'; 

if(isset($_GET['pass']))
{
	
	$row = getDetails($_GET['pass'],'categories');
	$stateUpdatable = checkCatContains($row['id'],$row['state']);
	$disable=''; $reson='';
	if ($stateUpdatable)
	{
		$disable=' style ="display:none" ';
		$reson ='<p class="reson"> التصنيف غير فارغ فلا يمكن تغيير نوعه</p>';
	}
} //echo $id;))
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
									تعديل تصنيف 	
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
									تعديل تصنيف 
								</div>									
								<div class="panel-body">
									<div id='result'><?=$result?></div>
									<form action="" method="post"id='cat-form' class="form-horizontal">
										<input type="hidden" name="cat_id" value="<?=$row['id']?>">
										<div class="box-body">
											<div class="form-group">
												<label class="col-sm-2 control-label"> التصنسف الأعلى</label>
												<div class="col-sm-10">
													<select name="parent_id" class="form-control">
														<option 
															value="0"
															<?php if ($row['parent']==0) {?> selected ="selected" <?php } ?>> الأعلى
														</option>
														<?php
															echo catEditOption(0,'',$row['parent'],$row['id']);
														?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">اسم التصنيف</label>
												<div class="col-sm-5">
													<input type="text" class="form-control" value="<?php echo $row['name_ar'];?>" placeholder="باللغة العربية" name="arName" required>
												</div>
												<div class="col-sm-5">
													<input type="text" class="form-control" value="<?php echo $row['name_en'];?>" placeholder="باللغة الإنجليزية" name="enName" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">صورة التصنيف</label>
												<div class="col-sm-10">
													<input type="url" value="<?php echo $row['pic'];?>" class="form-control" placeholder="رابط الصورة" name="catPic">
													
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label"> حالة التصنيف</label>
												<div class="col-sm-3" <?=$disable?>>
													<span class="mainCat">تصنيف فرعي </span>
													<input 	type="radio" 
															value="1" 
															name="state"													
															<?=($row['state']==1)?"checked=true":""?> >
												</div>
												<div class="col-sm-3" <?=$disable?>>
													<span class="subCat">تصنيف فرعي </span>
													<input 	type="radio" 
															value="2" 
															name="state"
															<?=($row['state']==2)?"checked=true":""?> >
												</div>
												<div class="col-sm-4">
													<?=$reson;?>
												</div>
												
											</div>											
										</div>
										<div class="box-footer">
											<input type="hidden" name="time"id='time'>
											<button class="btn btn-info pull-right" type="submit" name="editcat" >تعديل</button>
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