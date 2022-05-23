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

		<div class="col">
			<?= $this->session->flashdata('message'); ?>
		</div>

		<div class="card-body">
			<form action="<?= base_url('user/changePassword'); ?>" method="post">
				<div class="form-group">
					<label for="current_password">Current Password</label>
					<input type="password" class="form-control" id="current_password" name="current_password" placeholder="Current Password">
					<span class="form-text text-danger"><?= form_error('current_password'); ?></span>
				</div>
				<div class="form-group">
					<label for="new_password1">Current Password</label>
					<input type="password" class="form-control" id="new_password1" name="new_password1" placeholder="New Password">
					<span class="form-text text-danger"><?= form_error('new_password1'); ?></span>
				</div>
				<div class="form-group">
					<label for="new_password2">Repeat Password</label>
					<input type="password" class="form-control" id="new_password2" name="new_password2" placeholder="Repeat password">
					<span class="form-text text-danger"><?= form_error('new_password2'); ?></span>
				</div>
				<button type="submit" class="btn btn-primary float-right ml-2">Change Password</button>
			</form>
		</div>
	</div>
</div>
</div>
