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
					<a href="<?= base_url('user/category') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
				<input type="hidden" name="id" value="<?= $Category['id']; ?>">
				<div class="form-group">
					<label for="category">Category</label>
					<input type="text" class="form-control" id="category" name="category" placeholder="Insert Category" value="<?= $Category['category']; ?>">
					<span class="form-text text-danger"><?= form_error('category'); ?></span>
				</div>
				<button type="submit" class="btn btn-primary float-right ml-2">Edit Category</button>
			</form>
		</div>
	</div>
</div>
</div>
