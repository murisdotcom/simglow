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
							Add New Customer
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
		<div class="card-body">
			<table class="h6 table table-striped dt-responsive nowrap" id="tableBarang">
				<thead class="thead-dark">
					<tr>
						<th scope="col" style="text-align: left;">No</th>
						<th scope="col">Name</th>
						<th scope="col">Status</th>
						<th scope="col">Gender</th>
						<th scope="col">Address</th>
						<th scope="col">Phone Number</th>
						<th style="text-align:end;" scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($customer as $c) : ?>
						<tr>
							<th scope="row" style="text-align: left;"><?= $i++; ?></th>
							<td><?= $c['name']; ?></td>
							<td><?= $c['status']; ?></td>
							<td><?= $c['gender']; ?></td>
							<td><?= $c['address']; ?></td>
							<td><?= $c['phone_number']; ?></td>
							<td style="text-align: end;">
								<a href="<?= base_url('user/editCustomer/') . $c['id']; ?>" style="color: white;" class="btn btn-success btn-circle btn-sm mb-1"><i class="fa fa-fw fa-edit"></i></a>
								<a href="<?= base_url('user/deleteCustomer/') . $c['id']; ?>" class="btn btn-danger btn-circle btn-sm mb-1 button-delete"><i class="fa fa-fw fa-trash"></i></a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

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
				<h5 class="modal-title" id="newSupplierModalLabel">Add New Customer</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('user/customer'); ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Customer name">
					</div>
					<div class="form-group">
						<select name="gender" id="gender" class="form-control">
							<option value="">Gender</option>
							<?php foreach ($gender as $g) : ?>
								<option value="<?= $g['id']; ?>"><?= $g['gender']; ?></option>
							<?php endforeach;  ?>
						</select>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="address" name="address" placeholder="Address">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone number">
					</div>
					<div class="form-group">
						<select name="status" id="status" class="form-control">
							<option value="">Status</option>
							<?php foreach ($status as $s) : ?>
								<option value="<?= $s['id']; ?>"><?= $s['status']; ?></option>
							<?php endforeach;  ?>
						</select>
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
