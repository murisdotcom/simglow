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
			</div>
		</div>

		<?php if (validation_errors()) : ?>
			<div class="alert alert-danger">
				<?= validation_errors(); ?>
			</div>
		<?php endif; ?>

		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

		<form action="">
			<div class="card-header bg-white py-3">
				<div class="row">
					<div class="col-sm-6">
						<!-- <div class="form-group">
							<label>Produk</label>
							<div class="form-inline">
								<select id="barcode" class="form-control select2 col-sm-6" onchange="getNama()"></select>
								<span class="ml-3 text-muted" id="nama_produk"></span>
							</div>
							<small class="form-text text-muted" id="sisa"></small>
						</div>
						<div class="form-group">
							<label>Produk</label>
							<div class="form-inline">
								<select name="product" id="product" class="form-control select2 col-sm-6">
									<option value="">Product</option>
									<?php foreach ($product as $c) : ?>
										<option value="<?= $c['barcode']; ?>"><?= $c['name_product']; ?></option>
									<?php endforeach;  ?>
								</select>
							</div>
							<small class="form-text text-muted" id="sisa"></small>
						</div>
						<div class="form-group">
							<label>Jumlah</label>
							<div class="form-inline">
								<input type="number" class="form-control col-sm-6" placeholder="Jumlah" id="jumlah" onkeyup="checkEmpty()">
							</div>
						</div>
						<div class="form-group">
							<button id="tambah" class="btn btn-success" onclick="checkStok()" disabled>Tambah</button>
							<button id="bayar" class="btn btn-success" data-toggle="modal" data-target="#modal" disabled>Bayar</button>
						</div> -->

						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa-solid fa-barcode"></i></span>
							</div>
							<select name="product" id="product" class="form-control select2 col-sm-6">
								<option value="">Product</option>
								<?php foreach ($product as $c) : ?>
									<option value="<?= $c['barcode']; ?>"><?= $c['name_product']; ?></option>
								<?php endforeach;  ?>
							</select>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa-solid fa-cash-register"></i></i></span>
							</div>
							<input type="text" class="form-control col-sm-6" placeholder="Barcode">
						</div>

					</div>
					<!-- <div class="col-sm-6 d-flex justify-content-end text-right nota">
					<div>
						<div class="mb-0">
							<b class="mr-2">Nota</b> <span id="nota"></span>
						</div>
						<span id="total" style="font-size: 80px; line-height: 1" class="text-danger">0</span>
					</div>
				</div> -->
				</div>
			</div>
		</form>
		<div class="card-body">
			<table class="h6 table table-striped dt-responsive nowrap" id="tableBarang">
				<thead class="thead-dark">
					<tr>
						<th scope="col" style="text-align: left;">No</th>
						<th scope="col">Barcode</th>
						<th scope="col">Nama</th>
						<th scope="col">Harga</th>
						<th scope="col">Jumlah</th>
						<th style="text-align:end;" scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row" style="text-align: left;"></th>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td style="text-align: end;">
							<a href="" style="color: white;" class="btn btn-success btn-circle btn-sm mb-1"><i class="fa fa-fw fa-edit"></i></a>
							<a href="" class="btn btn-danger btn-circle btn-sm mb-1 button-delete"><i class="fa fa-fw fa-trash"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>
</div>
<!-- /page content -->

<div class="modal fade" id="modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Bayar</h5>
				<button class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="form">
					<div class="form-group">
						<label>Tanggal</label>
						<input type="text" class="form-control" name="tanggal" id="tanggal" required>
					</div>
					<div class="form-group">
						<label>Pelanggan</label>
						<select name="pelannggan" id="pelanggan" class="form-control select2"></select>
					</div>
					<div class="form-group">
						<label>Jumlah Uang</label>
						<input placeholder="Jumlah Uang" type="number" class="form-control" name="jumlah_uang" onkeyup="kembalian()" required>
					</div>
					<div class="form-group">
						<label>Diskon</label>
						<input placeholder="Diskon" type="number" class="form-control" onkeyup="kembalian()" name="diskon">
					</div>
					<div class="form-group">
						<b>Total Bayar:</b> <span class="total_bayar"></span>
					</div>
					<div class="form-group">
						<b>Kembalian:</b> <span class="kembalian"></span>
					</div>
					<button id="add" class="btn btn-success" type="submit" onclick="bayar()" disabled>Bayar</button>
					<button id="cetak" class="btn btn-success" type="submit" onclick="bayarCetak()" disabled>Bayar Dan Cetak</button>
					<button class="btn btn-danger" data-dismiss="modal">Close</button>
				</form>
			</div>
		</div>
