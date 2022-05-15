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
				<div class="col-auto">
					<a href="" class="btn btn-primary" data-toggle="modal" data-target="#newProductModal">
						<span class="icon">
							<i class="fa fa-fw fa-plus"></i>
						</span>
						<span class="text">
							Add New Product
						</span>
					</a>
				</div>
			</div>
		</div>

		<?php if (validation_errors()) : ?>
			<div class="alert alert-danger">
				<?= validation_errors(); ?>
			</div>
		<?php endif; ?>

		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

		<table class="h6 table table-striped dt-responsive nowrap" style="text-align: center;">
			<thead class="thead-dark">
				<tr>
					<th scope="col" style="text-align: left;">No</th>
					<th scope="col">Barcode</th>
					<th scope="col">Name</th>
					<th scope="col">Category</th>
					<th scope="col">Unit</th>
					<th scope="col">Price</th>
					<th scope="col">Stock</th>
					<th scope="col">Sold</th>
					<th style="text-align:end;" scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1; ?>
				<?php foreach ($product as $p) : ?>
					<tr>
						<th scope="row" style="text-align: left;"><?= $i++; ?></th>
						<td><?= $p['barcode']; ?></td>
						<td><?= $p['name_product']; ?></td>
						<td><?= $p['category']; ?></td>
						<td><?= $p['unit']; ?></td>
						<td><?= $p['price']; ?></td>
						<td><?= $p['stock']; ?></td>
						<td><?= $p['sold']; ?></td>
						<td style="text-align: end;">
							<a href="<?= base_url('user/editProduct/') . $p['id']; ?>" style="color: white;" class="btn btn-success btn-circle btn-sm mb-1"><i class="fa fa-fw fa-edit"></i></a>
							<a href="<?= base_url('user/deleteProduct/') . $p['id']; ?>" class="btn btn-danger btn-circle btn-sm mb-1 button-delete"><i class="fa fa-fw fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

	</div>
</div>
<!-- /page content -->

<!-- footer content -->

<!-- /footer content -->


<!-- Modal -->
<div class="modal fade" id="newProductModal" tabindex="-1" aria-labelledby="newProductModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="newProductModalLabel">Add New Product</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('user/product'); ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<input type="text" class="form-control" id="barcode" name="barcode" placeholder="Barcode">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="name_product" name="name_product" placeholder="Product name">
					</div>
					<div class="form-group">
						<select name="category" id="category" class="form-control">
							<option value="">Category</option>
							<?php foreach ($category as $c) : ?>
								<option value="<?= $c['id']; ?>"><?= $c['category']; ?></option>
							<?php endforeach;  ?>
						</select>
					</div>
					<div class="form-group">
						<select name="unit" id="unit" class="form-control">
							<option value="">Unit</option>
							<?php foreach ($unit as $u) : ?>
								<option value="<?= $u['id']; ?>"><?= $u['unit']; ?></option>
							<?php endforeach;  ?>
						</select>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="price" name="price" placeholder="Price">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="stock" name="stock" placeholder="Stock">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Add</button>
				</div>
			</form>
		</div>
	</div>
</div>
