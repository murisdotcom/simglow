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
					<a href="<?= base_url('user/customer') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
			<div class="form-group">
				<label for="id_customer">Id Customer</label>
				<input type="text" class="form-control" id="id_customer" name="id_customer" placeholder="Id Customer" value="<?= $Customer['id_customer']; ?>" readonly>
				<span class="form-text text-danger"><?= form_error('id_customer'); ?></span>
			</div>
			<form action="" method="post">
				<input type="hidden" name="id" value="<?= $Customer['id']; ?>">
				<div class="form-group">
					<label for="name">Customer Name</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Supplier name" value="<?= $Customer['name']; ?>">
					<span class="form-text text-danger"><?= form_error('name'); ?></span>
				</div>
				<div class="form-group">
					<label for="gender">Gender</label>
					<select class="form-control" id="gender" name="gender">
						<?php foreach ($gender as $g) : ?>
							<?php if ($Customer['gender'] == $g['id']) : ?>
								<option value="<?= $g['id']; ?>" selected><?= $g['gender']; ?></option>
							<?php else : ?>
								<option value="<?= $g['id']; ?>"><?= $g['gender']; ?></option>
							<?php endif; ?>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" class="form-control" id="address" name="address" placeholder="Supplier address" value="<?= $Customer['address']; ?>">
					<span class="form-text text-danger pl-2"><?= form_error('address'); ?></span>
				</div>
				<div class="form-group">
					<label for="phone_number">Phone Number</label>
					<input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Supplier phone_number" value="<?= $Customer['phone_number']; ?>">
					<span class="form-text text-danger pl-2"><?= form_error('phone_number'); ?></span>
				</div>
				<div class="form-group">
					<label for="status">Status</label>
					<select class="form-control" id="status" name="status">
						<?php foreach ($status as $s) : ?>
							<?php if ($Customer['status'] == $s['id']) : ?>
								<option value="<?= $s['id']; ?>" selected><?= $s['status']; ?></option>
							<?php else : ?>
								<option value="<?= $s['id']; ?>"><?= $s['status']; ?></option>
							<?php endif; ?>
						<?php endforeach; ?>
					</select>
				</div>
				<button type="submit" class="btn btn-primary float-right ml-2">Edit Customer</button>
			</form>
		</div>
	</div>
</div>
</div>
