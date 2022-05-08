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
					<a href="<?= base_url('menu/submenu') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
				<input type="hidden" name="id" value="<?= $subMenu['id']; ?>">
				<div class="form-group">
					<label for="title">Nama SubMenu</label>
					<input type="text" class="form-control" id="title" name="title" placeholder="Submenu title" value="<?= $subMenu['title']; ?>">
				</div>
				<div class="form-group">
					<label for="menu_id">Menu</label>
					<select class="form-control" id="menu_id" name="menu_id">
						<?php foreach ($menu as $m) : ?>
							<?php if ($subMenu['menu_id'] == $m['id']) : ?>
								<option value="<?= $m['id']; ?>" selected><?= $m['menu']; ?></option>
							<?php else : ?>
								<option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
							<?php endif; ?>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label for="url">Submenu url</label>
					<input type="text" class="form-control" id="url" name="url" placeholder="Submenu url" value="<?= $subMenu['url']; ?>">
				</div>
				<div class="form-group">
					<label for="icon">Submenu icon</label>
					<input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon" value="<?= $subMenu['icon']; ?>">
				</div>
				<div class="form-group">
					<div class="form-check">
						<?php if ($subMenu['is_active'] == 1) : ?>
							<input class="form-check-label" type="checkbox" name="is_active" id="is_active" checked>
						<?php else : ?>
							<input class="form-check-label" type="checkbox" name="is_active" id="is_active">
						<?php endif; ?>
						<label class="form-check-label" for="is_active">
							<h5 style="color: green">Active?</h5>
						</label>

					</div>
				</div>
		</div>
		<div class=" modal-footer">
			<button type="submit" class="btn btn-primary">Edit Submenu</button>
		</div>
		</form>
	</div>
</div>
</div>
