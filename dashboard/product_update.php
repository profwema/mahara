<?php
include('chicklog.php');
include('controller.php');
$page='pruds'; 
if(isset($_GET['pass']))
{
	$row = getDetails($_GET['pass'],'items');
} //echo $id;))
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
								<li>
									<a href="products.php">
										 المنتجات			
										<span class="selected"></span>									
									</a>
								</li>
								<li class="active">
									تعديل منتج 	
								</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									تعديل منتج 
								</div>									
								<div class="panel-body">
									<div id='result'><?=$result?></div>
									<form action="" method="post"id='item-form' class="form-horizontal">
										<input type="hidden" name="item_id" value="<?=$row['id']?>">
										<div class="box-body">
											<div class="form-group">
												<label class="col-sm-2 control-label"> تصنيف المنتج</label>
												<div class="col-sm-10">
													<select name="category" class="form-control">
														<?php
															echo itemEditOption(0,'',$row['category']);
														?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">اسم المنتج</label>
												<div class="col-sm-5">
													<input type="text" class="form-control" placeholder="باللغة العربية" name="arName"value="<?php echo $row['name_ar'];?>" required>
												</div>
												<div class="col-sm-5">
													<input type="text" class="form-control" placeholder="باللغة الإنجليزية" name="enName"value="<?php echo $row['name_en'];?>" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">وصف المنتج</label>
												<div class="col-sm-5">
													<textarea class="form-control" rows='10' placeholder="باللغة العربية" name="arDesc"><?php echo $row['desc_ar'];?></textarea>
												</div>
												<div class="col-sm-5">
													<textarea class="form-control" rows='10' placeholder="باللغة الانجليزية" name="enDesc"><?php echo $row['desc_en'];?></textarea>												
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">موديل المنتج</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" placeholder="كود الموديل " name="model"value="<?php echo $row['model'];?>">
												</div>
												<label class="col-sm-2 control-label">مقاس المنتج</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" placeholder="مقاس " name="size"value="<?php echo $row['size'];?>">
												</div>												
											</div>	
											<div class="form-group">
												<label class="col-sm-2 control-label">كتيب المنتج </label>
												<div class="col-sm-10">
													<input type="url" class="form-control" placeholder="رابط ملف الكتيب " name="sheet"value="<?php echo $row['sheet'];?>">
												</div>
											</div>											
											<div class="form-group">
												<label class="col-sm-2 control-label">صور المنتج </label>
												<div class="col-sm-10">
													<input type="url" class="form-control" placeholder="رابط الصورة 1" name="url[1]"value="<?php echo $row['pic1'];?>">
													<input type="url" class="form-control" placeholder="رابط الصورة 2" name="url[2]"value="<?php echo $row['pic2'];?>">
													<input type="url" class="form-control" placeholder="رابط الصورة 3" name="url[3]"value="<?php echo $row['pic3'];?>">
													<input type="url" class="form-control" placeholder="رابط الصورة 4" name="url[4]"value="<?php echo $row['pic4'];?>">
												</div>
											</div>
										</div>
										<div class="box-footer">
											<input type="hidden" name="time"id='time'>
											<button class="btn btn-info pull-right" type="submit" name="editItem" >إضافة</button>
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
			include('layout/footer.php');
		?>
		<script>
		$(document).ready(function()
		{	
			$("#time").val(new Date().getTime());
		});
	</script>
	</body>
</html>