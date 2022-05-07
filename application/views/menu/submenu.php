<!-- top navigation -->

<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
	<div class="row">
		<div class="col">
			<!-- <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?> -->

			<?php if (validation_errors()) : ?>
				<div class="alert alert-danger">
					<?= validation_errors(); ?>
				</div>
			<?php endif; ?>

			<?= $this->session->flashdata('message'); ?>
		</div>
	</div>
	<a href="" class="btn btn-primary mb-3 mt-1" data-toggle="modal" data-target="#newSubMenuModal">Add New Submenu</a>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Title</th>
				<th scope="col">Menu</th>
				<th scope="col">Url</th>
				<th scope="col">Icon</th>
				<th scope="col">Active</th>
				<th style="text-align:end;" scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach ($subMenu as $sm) : ?>
				<tr>
					<th scope="row"><?= $i++; ?></th>
					<td><?= $sm['title']; ?></td>
					<td><?= $sm['menu']; ?></td>
					<td><?= $sm['url']; ?></td>
					<td><?= $sm['icon']; ?></td>
					<td><?= $sm['is_active']; ?></td>
					<td style="text-align: end;">
						<a class="btn btn-success btn-sm" href="">Edit</a>
						<a class="btn btn-danger btn-sm" href="">Delete</a>
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
<div class="modal fade" id="newSubMenuModal" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="newSubMenuModalLabel">Add New Submenu</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('menu/submenu'); ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
					</div>
					<div class="form-group">
						<select name="menu_id" id="menu_id" class="form-control">
							<option value="">Select Menu</option>
							<?php foreach ($menu as $m) : ?>
								<option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
							<?php endforeach;  ?>
						</select>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
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
