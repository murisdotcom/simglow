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
					<a href="<?= base_url('admin') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
				<input type="hidden" name="id" value="<?= $admin['id']; ?>">
				<div class="form-group">
					<label for="name">Fullname</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Fullname" value="<?= $admin['name']; ?>">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Email address" value="<?= $admin['email']; ?>">
				</div>
				<div class="form-group">
					<label for="role_id">Role</label>
					<select class="form-control" id="role_id" name="role_id">
						<?php foreach ($Admin as $a) : ?>
							<?php if ($admin['role_id'] == $a['id']) : ?>
								<option value="<?= $a['id']; ?>" selected><?= $a['role']; ?></option>
							<?php else : ?>
								<option value="<?= $a['id']; ?>"><?= $a['role']; ?></option>
							<?php endif; ?>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<div class="form-check">
						<?php if ($admin['is_active'] == 1) : ?>
							<input class="form-check-label" type="checkbox" name="is_active" id="is_active" checked>
						<?php else : ?>
							<input class="form-check-label" type="checkbox" name="is_active" id="is_active">
						<?php endif; ?>
						<label class="form-check-label" for="is_active">
							<h5 style="color: green">Active?</h5>
						</label>

					</div>
				</div>
		</div>
		<div class=" modal-footer">
			<button type="submit" class="btn btn-primary">Edit</button>
		</div>
		</form>
	</div>
</div>
</div>
