<!-- top navigation -->

<!-- /top navigation -->

<!-- page content -->
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
					<a href="" class="btn btn-primary" data-toggle="modal" data-target="#newMenuModal">
						<span class="icon">
							<i class="fa fa-fw fa-folder-plus"></i>
						</span>
						<span class="text">
							Add New Menu
						</span>
					</a>
				</div>
			</div>
		</div>

		<?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

		<table class="h6 table table-striped dt-responsive nowrap" style="text-align: center;">
			<thead class="thead-dark">
				<tr>
					<th scope="col" style="text-align: left;">No</th>
					<th scope="col">Menu</th>
					<th style="text-align:end;" scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1; ?>
				<?php foreach ($menu as $m) : ?>
					<tr>
						<th scope="row" style="text-align: left;"><?= $i++; ?></th>
						<td><?= $m['menu']; ?></td>
						<td style="text-align: end;">
							<a href="<?= base_url('menu/editMenu/') . $m['id']; ?>" style="color: white;" class="btn btn-success btn-circle btn-sm mb-1"><i class="fa fa-fw fa-edit"></i></a>
							<a href="<?= base_url('menu/deleteMenu/') . $m['id']; ?>" class="btn btn-danger btn-circle btn-sm mb-1 button-delete"><i class="fa fa-fw fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

	</div>
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
