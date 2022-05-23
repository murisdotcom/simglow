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
					<a href="<?= base_url('user') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
			<?= form_open_multipart('user/editProfile'); ?>
			<!-- <form action="" method="post" enctype="multipart/form-data"> -->
			<!-- <input type="hidden" name="id" value="<?= $user['id']; ?>"> -->
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?= $user['email']; ?>" readonly>
			</div>
			<div class="form-group">
				<label for="name">Fullname</label>
				<input type="name" class="form-control" id="name" name="name" placeholder="Fullname" value="<?= $user['name']; ?>">
				<span class="form-text text-danger"><?= form_error('name'); ?></span>
			</div>
			<div class="form-group mt-4">
				<div class="col-sm-0">Image</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-2">
							<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
						</div>
						<div class="col-sm-10">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="image" name="image">
								<label class="custom-file-label" for="image">Choose file</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary float-right ml-2">Edit Profile</button>
			</form>
		</div>
	</div>
</div>
</div>
