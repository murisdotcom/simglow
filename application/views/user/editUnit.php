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
					<a href="<?= base_url('user/unit') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
				<input type="hidden" name="id" value="<?= $Unit['id']; ?>">
				<div class="form-group">
					<label for="unit">Unit</label>
					<input type="text" class="form-control" id="unit" name="unit" placeholder="Insert unit" value="<?= $Unit['unit']; ?>">
					<span class="form-text text-danger"><?= form_error('unit'); ?></span>
				</div>
				<button type="submit" class="btn btn-primary float-right ml-2">Edit Unit</button>
			</form>
		</div>
	</div>
</div>
</div>
