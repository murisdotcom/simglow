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
					<a href="" class="btn btn-primary" data-toggle="modal" data-target="#newStock_outModal">
						<span class="icon">
							<i class="fa fa-fw fa-minus"></i>
						</span>
						<span class="text">
							Stock Out
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
						<th scope="col">Date</th>
						<th scope="col">Barcode</th>
						<th scope="col">Total</th>
						<th scope="col">Description</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($stock_out as $s) : ?>
						<tr>
							<th scope="row" style="text-align: left;"><?= $i++; ?></th>
							<td><?= $s['date']; ?></td>
							<td><?= $s['barcode']; ?></td>
							<td><?= $s['total']; ?></td>
							<td><?= $s['description']; ?></td>
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
<div class="modal fade" id="newStock_outModal" tabindex="-1" aria-labelledby="newStock_outModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="newStock_outModalLabel">Stock Out</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('user/stock_out'); ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<select name="barcode" id="barcode" class="form-control">
							<option value="">Barcode</option>
							<?php foreach ($product as $p) : ?>
								<option value="<?= $p['barcode']; ?>"><?= $p['barcode'] . " - " . $p['name_product']; ?></option>
							<?php endforeach;  ?>
						</select>
					</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input type="text" class="form-control" id="total" name="total" placeholder="Total">
					</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input type="text" class="form-control" id="description" name="description" placeholder="Description">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
