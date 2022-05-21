<div class="col-md-3 left_col">
	<div class="left_col scroll-view">
		<div class="navbar nav_title" style="border: 0;">
			<a href="<?= base_url('user'); ?>" class="site_title"><img class="ml-1" style="width: 40px;" src="<?= base_url('assets/img/simglow.png'); ?>"> <span>SIMGLOW</span></a>
		</div>

		<div class="clearfix"></div>

		<!-- menu profile quick info -->
		<div class="profile clearfix">
			<div class="profile_pic">
				<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-circle profile_img">
			</div>
			<div class="profile_info">
				<span>Welcome,</span>
				<h2><?= $user['name']; ?></h2>
			</div>
		</div>
		<!-- /menu profile quick info -->

		<br />

		<!-- sidebar menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">


			<!-- QUERY MENU -->


			<?php
			$role_id = $this->session->userdata('role_id');
			$queryMenu = "SELECT `user_menu`.`id`, `menu`
										FROM `user_menu` JOIN `user_access_menu`
											ON `user_menu`.`id` = `user_access_menu`.`menu_id`
										WHERE `user_access_menu`.`role_id`= $role_id
										ORDER BY `user_access_menu`.`menu_id` DESC
										";

			$menu = $this->db->query($queryMenu)->result_array();

			?>

			<!-- LOOPING MENU -->
			<?php foreach ($menu as $m) : ?>
				<div class="menu_section">
					<h3><?= $m['menu']; ?></h3>


					<!-- SIAPKAN SUB MENU SESUAI MENU -->
					<?php
					$menuId = $m['id'];
					$querySubMenu = "SELECT *
												FROM `user_sub_menu`
												WHERE `menu_id`= $menuId
												AND `is_active` = 1
												";
					$subMenu = $this->db->query($querySubMenu)->result_array();
					?>

					<?php foreach ($subMenu as $sm) : ?>

						<ul class="nav side-menu">
							<li>
								<?php if ($sm['title'] == 'Product') : ?>
									<a>
										<i class="<?= $sm['icon']; ?>"></i> <?= $sm['title']; ?><span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url('user/category'); ?>">Category Product</a></li>
										<li><a href="<?= base_url('user/unit'); ?>">Unit Product</a></li>
										<li><a href="<?= base_url('user/product'); ?>">Product</a></li>
										<li><a href="<?= base_url('user/stock_in'); ?>">Stock In</a></li>
										<li><a href="<?= base_url('user/stock_out'); ?>">Stock Out</a></li>
									</ul>
								<?php elseif ($sm['title'] == 'Settings') : ?>
									<a>
										<i class="<?= $sm['icon']; ?>"></i> <?= $sm['title']; ?><span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url('admin'); ?>"><i class="fa fa-fw fa-user"></i> Admin</a></li>
										<li><a href="<?= base_url('admin/role'); ?>"><i class="fa fa-fw fa-universal-access"></i> Role Access</a></li>
									</ul>
								<?php else : ?>
									<a href="<?= base_url($sm['url']); ?>">
										<i class="<?= $sm['icon']; ?>"></i> <?= $sm['title']; ?>
									</a>
								<?php endif; ?>
							</li>
							<!-- <li>
								<a><i class="fa fa-fw fa-users"></i> Pelanggan</a>
							</li>
							<li><a><i class="fa fa-fw fa-sitemap"></i> Produk <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li><a href="tables.html">Kategori Produk</a></li>
									<li><a href="tables_dynamic.html">Satuan Produk</a></li>
									<li><a href="tables_dynamic.html">Produk</a></li>
								</ul>
							</li>
							<li><a><i class="fa fa-fw fa-database"></i> Stok <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li><a href="chartjs.html">Stok Masuk</a></li>
									<li><a href="chartjs2.html">Stok Keluar</a></li>
								</ul>
							</li>
							<li>
								<a><i class="fa fa-fw fa-money"></i>Transaksi</a>
							</li>
							<li><a><i class="fa fa-fw fa-file"></i> Laporan <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li><a href="e_commerce.html">Laporan Penjualan</a></li>
									<li><a href="projects.html">Laporan Stok Masuk</a></li>
									<li><a href="project_detail.html">Laporan Stok Keluar</a></li>
									<li><a href="contacts.html">Laporan Piutang</a></li>
									<li><a href="contacts.html">Laporan Absensi</a></li>
								</ul>
							</li> -->
						</ul>

					<?php endforeach; ?>

				</div>
			<?php endforeach; ?>
			<!-- <div class="menu_section">
				<h3>Live On</h3>
				<ul class="nav side-menu">
					<li>
						<a href="javascript:void(0)"><i class="fa fa-fw fa-user"></i> Pengguna</a>
					</li>
					<li><a><i class="fa fa-fw fa-gear"></i> Pengaturan <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="page_403.html">403 Error</a></li>
							<li><a href="page_404.html">404 Error</a></li>
							<li><a href="page_500.html">500 Error</a></li>
							<li><a href="plain_page.html">Plain Page</a></li>
							<li><a href="login.html">Login Page</a></li>
							<li><a href="pricing_tables.html">Pricing Tables</a></li>
						</ul>
					</li>
					<li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
				</ul>
			</div> -->

		</div>
		<!-- /sidebar menu -->

		<!-- /menu footer buttons -->
		<!-- <div class="sidebar-footer hidden-small">
			<a data-toggle="tooltip" data-placement="top" title="Settings">
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="FullScreen">
				<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="Lock">
				<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url('auth/logout'); ?>">
				<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
			</a>
		</div> -->
		<!-- /menu footer buttons -->
	</div>
</div>
