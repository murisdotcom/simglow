<!-- top navigation -->

<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
	<div class="card shadow-sm border-bottom-primary">
		<div class="card-header bg-white py-3">
			<div class="row">
				<div class="col">
					<h4 class="h5 align-middle m-0 font-weight-bold">
						<?= $title; ?>
					</h4>
				</div>
			</div>
		</div>

		<?php if (validation_errors()) : ?>
			<div class="alert alert-danger">
				<?= validation_errors(); ?>
			</div>
		<?php endif; ?>

		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

		<!-- top tiles -->
		<div class="col" style="display: inline-block;">
			<div class="tile_count" style="text-align: center;">
				<div class="col-md-2 tile_stats_count">
					<span class="count_top"><i class="fa fa-user"></i> Total Reseller</span>
					<div class="count">
						<?= $customer; ?>
					</div>
					<a href="<?= base_url('user/customer'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					<!-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> -->
				</div>
				<div class="col-md-2 tile_stats_count">
					<span class="count_top"><i class="fa fa-fw fa-shopping-cart"></i> Transaksi Penjualan Hari Ini</span>
					<div class="count">123.50</div>
					<a href="<?= base_url('user/transaction'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					<!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span> -->
				</div>
				<div class="col-md-2 tile_stats_count">
					<span class="count_top"><i class="fa fa-fw fa-plus"></i> Stok Masuk Hari Ini</span>
					<div class="count green">
						<?= $stock_in; ?>
					</div>
					<a href="<?= base_url('user/stock_in'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					<!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
				</div>
				<div class="col-md-2 tile_stats_count">
					<span class="count_top"><i class="fa fa-fw fa-minus"></i> Stok Keluar Hari Ini</span>
					<div class="count red">
						<?= $stock_out; ?>
					</div>
					<a href="<?= base_url('user/stock_out'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					<!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
				</div>
				<div class="col-md-2 tile_stats_count">
					<span class="count_top"><i class="fa fa-fw fa-money"></i> Total Penjualan Bulan Ini</span>
					<div class="count blue">4,567</div>
					<a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					<!-- <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span> -->
				</div>
				<div class="col-md-2 tile_stats_count">
					<span class="count_top"><i class="fa fa-fw fa-bank"></i> Total Stok Barang</span>
					<div class="count">
						<?= $allproduct; ?> pcs</div>
					<a href="<?= base_url('user/product'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					<!-- <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span> -->
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
								<table class="h6 table table-striped dt-responsive nowrap" style="text-align: center;">
									<thead class="thead-dark">
										<tr>
											<th scope="col" style="text-align: left;">No</th>
											<th scope="col">Name</th>
											<th scope="col">Price</th>
											<th scope="col">Stock</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; ?>
										<?php foreach ($product as $p) : ?>
											<tr>
												<th scope="row" style="text-align: left;"><?= $i++; ?></th>
												<td><?= $p['name_product']; ?></td>
												<td><?= $p['price']; ?></td>
												<td><?= $p['stock']; ?></td>
											</tr>
										<?php endforeach; ?>
									</tbody>
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

		<!-- Modal -->
		<!-- <div class="modal fade" id="profile" tabindex="-1" aria-labelledby="profileLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="profileLabel">My Profile</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="card">
							<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title"><?= $user['name']; ?></h5>
								<p class="card-text"><?= $user['email']; ?></p>
								<p class="card-text">Member since <?= date('d F Y', $user['date_created']); ?></p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div> -->


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
</div>
<!-- /page content -->

<!-- footer content -->

<!-- /footer content -->
