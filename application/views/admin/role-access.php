<div class="right_col" role="main">
	<div class="card shadow-sm border-bottom-primary">
		<div class="card-header bg-white py-3">
			<div class="row">
				<div class="col">
					<h4 class="h5 align-middle m-0 font-weight-bold">
						<?= $titlee . ' : ' . $role['role']; ?>
					</h4>
				</div>
				<div class="col-auto">
					<a href="<?= base_url('admin/role') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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


		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">
		</div>

		<div class="card-body">
			<!-- <h5>Role : <?= $role['role']; ?></h5> -->
			<table class="h6 table table-striped dt-responsive nowrap" id="tableBarang">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Menu</th>
						<th scope="col">Access</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($menu as $m) : ?>
						<tr>
							<th scope="row" style="text-align: left;"><?= $i++; ?></th>
							<td><?= $m['menu']; ?></td>
							<td>

								<!-- <div class="custom-control custom-switch">
									<input type="checkbox" class="custom-control-input" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>" id="click">
									<label class="custom-control-label" for="click"></label>
								</div> -->

								<div class="form-check">
									<input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
								</div>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
