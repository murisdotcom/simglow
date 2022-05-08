<!-- top navigation -->

<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
	<a href="" class="btn btn-primary mb-3 mt-1" data-toggle="modal" data-target="#newAdminModal">Add New Admin</a>
	<table class="h6 table table-striped dt-responsive nowrap" style="text-align: center;">
		<thead class="thead-dark">
			<tr>
				<th scope="col">No</th>
				<th scope="col">Profile</th>
				<th scope="col">Nama</th>
				<th scope="col">Email</th>
				<th scope="col">Role</th>
				<th scope="col">Active</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach ($Admin as $a) : ?>
				<tr>
					<th scope="row"><?= $i++; ?></th>
					<td><img style="width: 70px;" src="<?= base_url('assets/img/profile/') . $a['image']; ?>"></td>
					<td><?= $a['name']; ?></td>
					<td><?= $a['email']; ?></td>
					<td><?= $a['role']; ?></td>
					<td><?= $a['is_active']; ?></td>
					<td style="text-align: end;">
						<a href="<?= base_url('admin/editAdmin/') . $a['id']; ?>" style="color: white;" class="btn btn-success btn-circle btn-sm mb-1"><i class="fa fa-fw fa-edit"></i></a>
						<a href="<?= base_url('admin/deleteAdmin/') . $a['id']; ?>" class="btn btn-danger btn-circle btn-sm mb-1 button-delete"><i class="fa fa-fw fa-trash"></i></a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</div>
<!-- /page content -->

<!-- footer content -->

<!-- /footer content -->


<!-- Modal -->
<div class="modal fade" id="newAdminModal" tabindex="-1" aria-labelledby="newAdminModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="newAdminModalLabel">Add Admin</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('admin/addAdmin'); ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Fullname">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email adress">
					</div>
					<div class="form-group">
						<select name="role_id" id="role_id" class="form-control">
							<option value="">Select Menu</option>
							<?php foreach ($Admin as $a) : ?>
								<option value="<?= $a['id']; ?>"><?= $a['role']; ?></option>
							<?php endforeach;  ?>
						</select>
					</div>
					<div class="form-group">
						<input name="password1" id="password1" type="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-group">
						<input name="password2" id="password2" type="password" class="form-control" placeholder="Konfirmasi Password">
					</div>
					<div class="form-group">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
							<label class="form-check-label" for="is_active">
								Active ?
							</label>
						</div>
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
