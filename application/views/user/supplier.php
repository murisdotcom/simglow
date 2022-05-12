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
					<a href="" class="btn btn-primary" data-toggle="modal" data-target="#newSupplierModal">
						<span class="icon">
							<i class="fa fa-fw fa-plus"></i>
						</span>
						<span class="text">
							Add New Supplier
						</span>
					</a>
				</div>
			</div>
		</div>

		<?php if (validation_errors()) : ?>
			<div class="alert alert-danger">
				<?= validation_errors(); ?>
			</div>
		<?php endif; ?>

		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

		<table class="h6 table table-striped dt-responsive nowrap" style="text-align: center;">
			<thead class="thead-dark">
				<tr>
					<th scope="col" style="text-align: left;">No</th>
					<th scope="col">Name</th>
					<th scope="col">Address</th>
					<th scope="col">Phone Number</th>
					<th style="text-align:end;" scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1; ?>
				<?php foreach ($supplier as $s) : ?>
					<tr>
						<th scope="row" style="text-align: left;"><?= $i++; ?></th>
						<td><?= $s['name']; ?></td>
						<td><?= $s['address']; ?></td>
						<td><?= $s['phone_number']; ?></td>
						<td style="text-align: end;">
							<a href="<?= base_url('user/editSupplier/') . $s['id']; ?>" style="color: white;" class="btn btn-success btn-circle btn-sm mb-1"><i class="fa fa-fw fa-edit"></i></a>
							<a href="<?= base_url('user/deleteSupplier/') . $s['id']; ?>" class="btn btn-danger btn-circle btn-sm mb-1 button-delete"><i class="fa fa-fw fa-trash"></i></a>
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
<div class="modal fade" id="newSupplierModal" tabindex="-1" aria-labelledby="newSupplierModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="newSupplierModalLabel">Add New Supplier</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('user/supplier'); ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Supplier name">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="address" name="address" placeholder="Address">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone number">
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
