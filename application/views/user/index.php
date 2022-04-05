<div class="container body">
	<div class="main_container">
		<div class="col-md-3 left_col">
			<div class="left_col scroll-view">
				<div class="navbar nav_title" style="border: 0;">
					<a href="<?= base_url('user'); ?>" class="site_title"><i class="fa fa-home"></i> <span>SIMGLOW</span></a>
				</div>

				<div class="clearfix"></div>

				<!-- menu profile quick info -->
				<div class="profile clearfix">
					<div class="profile_pic">
						<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="..." class="img-circle profile_img">
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
					<div class="menu_section">
						<h3>General</h3>
						<ul class="nav side-menu">
							<li>
								<a><i class="fa fa-fw fa-truck"></i> Supplier</a>
							</li>
							<li>
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
							</li>
						</ul>
					</div>
					<div class="menu_section">
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
							<!-- <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li> -->
						</ul>
					</div>

				</div>
				<!-- /sidebar menu -->

				<!-- /menu footer buttons -->
				<div class="sidebar-footer hidden-small">
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
				</div>
				<!-- /menu footer buttons -->
			</div>
		</div>

		<!-- top navigation -->
		<div class="top_nav">
			<div class="nav_menu">
				<div class="nav toggle">
					<a id="menu_toggle"><i class="fa fa-bars"></i></a>
				</div>
				<nav class="nav navbar-nav">
					<ul class=" navbar-right">
						<li class="nav-item dropdown open" style="padding-left: 15px;">
							<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
								<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt=""> <?= $user['name']; ?>
							</a>
							<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="javascript:;"><i class="fa fa-user pull-right"></i> Profile</a>

								<a class="dropdown-item" href="javascript:;"><i class="fa fa-calendar pull-right"></i> Absensi</a>

								<!-- <a class="dropdown-item" href="javascript:;"><i class="fa fa-gear pull-right"></i>
									<span class="badge bg-red pull-right">50%</span>
									<span>Settings</span>
								</a> -->

								<a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
							</div>
						</li>

						<!-- <li role="presentation" class="nav-item dropdown open">
								<a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
									<i class="fa fa-envelope-o"></i>
									<span class="badge bg-green">6</span>
								</a>
								<ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<div class="text-center">
											<a class="dropdown-item">
												<strong>See All Alerts</strong>
												<i class="fa fa-angle-right"></i>
											</a>
										</div>
									</li>
								</ul>
							</li> -->
					</ul>
				</nav>
			</div>
		</div>
		<!-- /top navigation -->

		<!-- page content -->
		<div class="right_col" role="main">
			<!-- top tiles -->
			<div class="col" style="display: inline-block;">
				<div class="tile_count" style="text-align: center;">
					<div class="col-md-2 tile_stats_count">
						<span class="count_top"><i class="fa fa-user"></i> Total Reseller</span>
						<div class="count">2500</div>
						<span class="count_bottom"><i class="green">4% </i> From last Week</span>
					</div>
					<div class="col-md-2 tile_stats_count">
						<span class="count_top"><i class="fa fa-fw fa-shopping-cart"></i> Transaksi Penjualan</span>
						<div class="count">123.50</div>
						<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
					</div>
					<div class="col-md-2 tile_stats_count">
						<span class="count_top"><i class="fa fa-fw fa-plus"></i> Stok Masuk Hari Ini</span>
						<div class="count green">2,500</div>
						<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
					</div>
					<div class="col-md-2 tile_stats_count">
						<span class="count_top"><i class="fa fa-fw fa-money"></i> Total Penjualan Bulan Ini</span>
						<div class="count">4,567</div>
						<span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
					</div>
					<div class="col-md-2 tile_stats_count">
						<span class="count_top"><i class="fa fa-fw fa-bank"></i> Total Piutang</span>
						<div class="count">4,567</div>
						<span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
					</div>
				</div>
			</div>
			<!-- /top tiles -->

			<br />

			<div class="row">

				<div class="col-md-6 col-sm-4 ">
					<div class="x_panel tile fixed_height_320 overflow_hidden">
						<div class="x_title">
							<h2>Device Usage</h2>
							<ul class="nav navbar-right panel_toolbox">
								<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								</li>
								<!-- <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="#">Settings 1</a>
										<a class="dropdown-item" href="#">Settings 2</a>
									</div>
								</li>
								<li><a class="close-link"><i class="fa fa-close"></i></a>
								</li> -->
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<table class="" style="width:100%">
								<tr>
									<th style="width:37%;">
										<p>Top 5</p>
									</th>
									<th>
										<div class="col-lg-7 col-md-7 col-sm-7 ">
											<p class="">Device</p>
										</div>
										<div class="col-lg-5 col-md-5 col-sm-5 ">
											<p class="">Progress</p>
										</div>
									</th>
								</tr>
								<tr>
									<td>
										<canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
									</td>
									<td>
										<table class="tile_info">
											<tr>
												<td>
													<p><i class="fa fa-square blue"></i>IOS </p>
												</td>
												<td>30%</td>
											</tr>
											<tr>
												<td>
													<p><i class="fa fa-square green"></i>Android </p>
												</td>
												<td>10%</td>
											</tr>
											<tr>
												<td>
													<p><i class="fa fa-square purple"></i>Blackberry </p>
												</td>
												<td>20%</td>
											</tr>
											<tr>
												<td>
													<p><i class="fa fa-square aero"></i>Symbian </p>
												</td>
												<td>15%</td>
											</tr>
											<tr>
												<td>
													<p><i class="fa fa-square red"></i>Others </p>
												</td>
												<td>30%</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>


				<div class="col-md-6 col-sm-4 ">
					<div class="x_panel tile fixed_height_320">
						<div class="x_title">
							<h2>Stok Produk</h2>
							<ul class="nav navbar-right panel_toolbox">
								<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								</li>
								<!-- <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="#">Settings 1</a>
										<a class="dropdown-item" href="#">Settings 2</a>
									</div>
								</li>
								<li><a class="close-link"><i class="fa fa-close"></i></a>
								</li> -->
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div style="height: 250px;max-height: 250px; overflow-y: scroll;">
								<ul class="list-group" id="stok_produk">
									<table>
										<tr>
											<td>acne</td>
											<td style="text-align: center;">2</td>
										</tr>
									</table>
								</ul>
							</div>

						</div>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-md-12 col-sm-12 ">
					<div class="dashboard_graph">

						<div class="col-md-9 col-sm-9 ">
							<div id="chart_plot_01" class="demo-placeholder"></div>
						</div>
						<div class="col-md-3 col-sm-3  bg-white">
							<div class="x_title">
								<h2>Top Campaign Performance</h2>
								<div class="clearfix"></div>
							</div>

							<div class="col-md-12 col-sm-12 ">
								<div>
									<p>Facebook Campaign</p>
									<div class="">
										<div class="progress progress_sm" style="width: 76%;">
											<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
										</div>
									</div>
								</div>
								<div>
									<p>Twitter Campaign</p>
									<div class="">
										<div class="progress progress_sm" style="width: 76%;">
											<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 ">
								<div>
									<p>Conventional Media</p>
									<div class="">
										<div class="progress progress_sm" style="width: 76%;">
											<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
										</div>
									</div>
								</div>
								<div>
									<p>Bill boards</p>
									<div class="">
										<div class="progress progress_sm" style="width: 76%;">
											<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
										</div>
									</div>
								</div>
							</div>

						</div>

						<div class="clearfix"></div>
					</div>
				</div>

			</div>


			<!-- <div class="row">

				<div class="col-md-8 col-sm-8 ">

					<div class="row"> -->


			<!-- Start to do list -->
			<!-- <div class="col-md-6 col-sm-6 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>To Do List <small>Sample tasks</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a class="dropdown-item" href="#">Settings 1</a>
												<a class="dropdown-item" href="#">Settings 2</a>
											</div>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">

									<div class="">
										<ul class="to_do">
											<li>
												<p>
													<input type="checkbox" class="flat"> Schedule meeting with new client
												</p>
											</li>
											<li>
												<p>
													<input type="checkbox" class="flat"> Create email address for new intern
												</p>
											</li>
											<li>
												<p>
													<input type="checkbox" class="flat"> Have IT fix the network printer
												</p>
											</li>
											<li>
												<p>
													<input type="checkbox" class="flat"> Copy backups to offsite location
												</p>
											</li>
											<li>
												<p>
													<input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney
												</p>
											</li>
											<li>
												<p>
													<input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney
												</p>
											</li>
											<li>
												<p>
													<input type="checkbox" class="flat"> Create email address for new intern
												</p>
											</li>
											<li>
												<p>
													<input type="checkbox" class="flat"> Have IT fix the network printer
												</p>
											</li>
											<li>
												<p>
													<input type="checkbox" class="flat"> Copy backups to offsite location
												</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div> -->
			<!-- End to do list -->
			<!-- </div>
				</div>
			</div> -->
		</div>
		<!-- /page content -->

		<!-- footer content -->
		<footer>
			<div class="pull-right">
				Copyright &copy; <?= date('Y'); ?>
				<a href="https://colorlib.com">muris.com
					All Rights Reserved</a>
			</div>
			<div class="clearfix"></div>
		</footer>
		<!-- /footer content -->
	</div>
</div>
