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
					<a href="<?= base_url('user/supplier') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
				<input type="hidden" name="id" value="<?= $Supplier['id']; ?>">
				<div class="form-group">
					<input type="text" class="form-control" id="name" name="name" placeholder="Supplier name" value="<?= $Supplier['name']; ?>">
					<span class="form-text text-danger"><?= form_error('name'); ?></span>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="address" name="address" placeholder="Supplier address" value="<?= $Supplier['address']; ?>">
					<span class="form-text text-danger pl-2"><?= form_error('address'); ?></span>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Supplier phone_number" value="<?= $Supplier['phone_number']; ?>">
					<span class="form-text text-danger pl-2"><?= form_error('phone_number'); ?></span>
				</div>
				<button type="submit" class="btn btn-primary float-right ml-2">Edit Supplier</button>
			</form>
		</div>
	</div>
</div>
</div>
