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
					<a href="<?= base_url('menu') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
			<form action="" method="post">
				<input type="hidden" name="id" value="<?= $Menu['id']; ?>">
				<div class="form-group">
					<input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name" value="<?= $Menu['menu']; ?>">
					<?= form_error('menu', '<p class="text-danger pl-2">', '</p>'); ?>
				</div>
				<button type="submit" name="editMenu" class="btn btn-primary float-right ml-2">Edit Menu</button>
			</form>
		</div>
	</div>
</div>
</div>


<!-- <div class="modal fade" id="editMenuModel" tabindex="-1" role="dialog" aria-labelledby="editMenuModelLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editMenuModelLabel">Edit menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
            <input type="hidden" name="id" value="<?= $Menu['id']; ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name" value="<?= $Menu['menu']; ?>">
                        <?= form_error('menu', '<p class="text-danger pl-2">', '</p>'); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="editMenu" class="btn btn-primary float-right ml-2">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div> -->
