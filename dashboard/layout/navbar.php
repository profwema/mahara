			<!-- start: NAVBAR -->



			<div class="navbar-content">
				<!-- start: SIDEBAR -->
				<div class="main-navigation navbar-collapse collapse">
					<!-- start: MAIN MENU TOGGLER BUTTON -->
					<div class="navigation-toggler">
					<i class="fa fa-arrow-left"></i>

					<i class="fa fa-arrow-left" aria-hidden="true"></i>

					</div>
					<!-- end: MAIN MENU TOGGLER BUTTON -->
					<!-- start: MAIN NAVIGATION MENU -->
					<ul class="main-navigation-menu">
						<li class='<?php  if ($page=="home") echo "active open" ?>'>
							<a href="index.php"><i class="fa fa-home"></i>

								<span class="title"> الرئيسية </span>
								<span class="selected"></span>
							</a>
						</li>



						<li  class='<?php  if ($page=="cats") echo "active open" ?>'>
							<a href="categories.php"><i class="fa fa-object-ungroup"></i>

								<span class="title">تصنيفات المنتجات</span>	
								<span class="selected"></span>
							</a>
						</li>
						<li  class='<?php  if ($page=="pruds") echo "active open" ?>'>
							<a href="products.php"><i class="fa fa-book"></i>
								<span class="title"> المنتجات</span>	
								<span class="selected"></span>
							</a>
						</li>						
					</ul>
					<!-- end: MAIN NAVIGATION MENU -->
				</div>
				<!-- end: SIDEBAR -->
			</div>
			<!-- evd: NAVBAR -->