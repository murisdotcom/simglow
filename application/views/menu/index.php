<!-- top navigation -->

<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
	<div class="row">
		<div class="col">
			<?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

			<?= $this->session->flashdata('message'); ?>
		</div>
	</div>
	<a href="" class="btn btn-primary mb-3 mt-1" data-toggle="modal" data-target="#newMenuModal">Add New Menu</a>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama Menu</th>
				<th style="text-align:end;" scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach ($menu as $m) : ?>
				<tr>
					<th scope="row"><?= $i++; ?></th>
					<td><?= $m['menu']; ?></td>
					<td style="text-align: end;">
						<a class="btn btn-success" href="">Edit</a>
						<a class="btn btn-danger" href="">Delete</a>
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
<div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('menu'); ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
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
