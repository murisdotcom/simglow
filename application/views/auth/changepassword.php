<div>
	<div class="login_wrapper">
		<div class="animate form login_form">
			<img style="width:350px;" src="<?= base_url('assets/') ?>img/Msglow.png">

			<section class="login_content">

				<?= $this->session->flashdata('message'); ?>

				<!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div> -->

				<form method="post" action="<?= base_url('auth/changePassword'); ?>">
					<br>
					<h4>Change your password for</h4>
					<h5 class="mb-4"><?= $this->session->userdata('reset_email'); ?></h5>
					<div class="input-group mb-4">
						<input type="password" class="form-control" id="password1" name="password1" placeholder="Enter new password..." autocomplete="off">
						<?= form_error('password1', '<span class="text-danger">', '</span>'); ?>
					</div>
					<div class="input-group mb-4">
						<input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat password..." autocomplete="off">
						<?= form_error('password2', '<span class="text-danger">', '</span>'); ?>
					</div>
					<div>
						<button class="btn btn-dark" type="submit">Change Password</button>
					</div>
					<div class="clearfix"></div>
					<div class="separator">
						<div class="footer mt-3">
							<img src="<?= base_url('assets/img/muris.png'); ?>" alt="">
							<p>Copyright &copy; <?= date('Y'); ?> muris.com</p>
							All Rights Reserved
						</div>
					</div>
				</form>
			</section>
		</div>
	</div>
</div>
