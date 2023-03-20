		<!-- LEFT MAIN SIDEBAR -->
		<div class="ec-left-sidebar ec-bg-sidebar">
			<div id="sidebar" class="sidebar ec-sidebar-footer">

				<div class="ec-brand">
					<a href="index.html" title="Ekka">
						<img class="ec-brand-icon" src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/logo/ec-site-logo.png" alt="" />
						<span class="ec-brand-name text-truncate">Ekka</span>
					</a>
				</div>

				<!-- begin sidebar scrollbar -->
				<div class="ec-navigation" data-simplebar>
					<!-- sidebar menu -->
					<ul class="nav sidebar-inner" id="sidebar-menu">
						<!-- Dashboard -->
						<li class="active">
							<a class="sidenav-item-link" href="index.html">
								<i class="mdi mdi-slack"></i>
								<span class="nav-text">Bảng Điều Khiển</span>
							</a>
							<hr>
						</li>

						<!-- Vendors -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-account-group-outline"></i>
								<span class="nav-text">Staff</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="<?php echo _WEB_ROOT.'/admin/employee?action=list'?>">
											<span class="nav-text">List Staff</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="<?php echo _WEB_ROOT.'/admin/employee?action=add'?>">
											<span class="nav-text">Add Staff</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="<?php echo _WEB_ROOT.'/admin/employee?action=list'?>">
											<span class="nav-text">Edit Staff</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<!-- Users -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-comment-account"></i>
								<span class="nav-text">Customer</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="users" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="<?php echo _WEB_ROOT.'/admin/customer?action=list'?>">
											<span class="nav-text">List Customer</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="<?php echo _WEB_ROOT.'/admin/customer?action=add'?>">
											<span class="nav-text">Add Customer</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="<?php echo _WEB_ROOT.'/admin/customer?action=list'?>">
											<span class="nav-text">Edit Customer</span>
										</a>
									</li>
								</ul>
							</div>
							<hr>
						</li>

						<!-- Category -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-file-tree"></i>
								<span class="nav-text">Danh Mục</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="main-category.html">
											<span class="nav-text">Danh Sách Danh Mục</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="sub-category.html">
											<span class="nav-text">Chỉnh Sửa Danh Mục</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Products -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-flower-outline"></i>
								<span class="nav-text">Sản Phẩm</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="product-add.html">
											<span class="nav-text">Thêm Sản Phẩm</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="product-list.html">
											<span class="nav-text">Danh Sách Sản Phẩm</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="product-grid.html">
											<span class="nav-text">Chỉnh Sửa Sản Phẩm</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Orders -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-shopify"></i>
								<span class="nav-text">Đơn Hàng</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="new-order.html">
											<span class="nav-text">Đơn Hàng Mới</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="order-history.html">
											<span class="nav-text">Lịch Sử Đơn Hàng</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="order-detail.html">
											<span class="nav-text">Chi Tiết Đơn Hàng</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="invoice.html">
											<span class="nav-text">Invoice</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Reviews -->
						<li>
							<a class="sidenav-item-link" href="review-list.html">
								<i class="mdi mdi-star-half"></i>
								<span class="nav-text">Đánh Giá</span>
							</a>
						</li>

						<!-- Brands -->
						<li>
							<a class="sidenav-item-link" href="brand-list.html">
								<i class="mdi mdi-tag-faces"></i>
								<span class="nav-text">Thương Hiệu</span>
							</a>
							<hr>
						</li>

						<li>
							<a class="sidenav-item-link" href="brand-list.html">
								<i class="mdi mdi-chart-areaspline"></i>
								<span class="nav-text">Thống Kê</span>
							</a>
							<hr>
						</li>
					</ul>
				</div>
			</div>
		</div>