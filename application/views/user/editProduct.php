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
					<a href="<?= base_url('user/product') ?>" class="btn btn-sm btn-secondary btn-icon-split">
						<span class="icon">
							<i class="fa fa-arrow-left"></i>
						</span>
						<span class="text">
							Kembali
						</span>
					</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<form action="" method="post">
				<input type="hidden" name="id" value="<?= $Product['id']; ?>">
				<div class="form-group">
					<label for="barcode">Barcode</label>
					<input type="text" class="form-control" id="barcode" name="barcode" placeholder="Barcode" value="<?= $Product['barcode']; ?>" readonly>
					<span class="form-text text-danger"><?= form_error('barcode'); ?></span>
				</div>
				<div class="form-group">
					<label for="name_product">Product Name</label>
					<input type="text" class="form-control" id="name_product" name="name_product" placeholder="Product name" value="<?= $Product['name_product']; ?>">
					<span class="form-text text-danger"><?= form_error('name_product'); ?></span>
				</div>
				<div class="form-group">
					<label for="category">Category</label>
					<select class="form-control" id="category" name="category">
						<?php foreach ($category as $c) : ?>
							<?php if ($Product['category'] == $c['id']) : ?>
								<option value="<?= $c['id']; ?>" selected><?= $c['category']; ?></option>
							<?php else : ?>
								<option value="<?= $c['id']; ?>"><?= $c['category']; ?></option>
							<?php endif; ?>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label for="unit">Unit</label>
					<select class="form-control" id="unit" name="unit">
						<?php foreach ($unit as $u) : ?>
							<?php if ($Product['unit'] == $u['id']) : ?>
								<option value="<?= $u['id']; ?>" selected><?= $u['unit']; ?></option>
							<?php else : ?>
								<option value="<?= $u['id']; ?>"><?= $u['unit']; ?></option>
							<?php endif; ?>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label for="price">Price</label>
					<input type="text" class="form-control" id="price" name="price" placeholder="Price" value="<?= $Product['price']; ?>">
					<span class="form-text text-danger pl-2"><?= form_error('price'); ?></span>
				</div>
				<div class="form-group">
					<label for="stock">Stock</label>
					<input type="text" class="form-control" id="stock" name="stock" placeholder="Stock product" value="<?= $Product['stock']; ?>">
					<span class="form-text text-danger pl-2"><?= form_error('stock'); ?></span>
				</div>
				<button type="submit" class="btn btn-primary float-right ml-2">Edit Product</button>
			</form>
		</div>
	</div>
</div>
</div>
