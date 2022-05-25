<div>
	<div class="login_wrapper">
		<div class="animate form login_form">
			<img style="width:350px;" src="<?= base_url('assets/') ?>img/Msglow.png">

			<section class="login_content">

				<?= $this->session->flashdata('message'); ?>

				<!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div> -->

				<form method="post" action="<?= base_url('auth/forgotPassword'); ?>">
					<h5>Forgot your password ?</h5>
					<div class="input-group mb-4">
						<input type="text" class="form-control" id="email" name="email" placeholder="Enter email address..." autocomplete="off" value="<?= set_value('email'); ?>">
						<?= form_error('email', '<span class="text-danger">', '</span>'); ?>
					</div>
					<div>
						<button class="btn btn-dark" type="submit">Reset Password</button>
					</div>
					<div class="clearfix"></div>
					<div class="separator">
						<p class="change_link">
							<a href="<?= base_url('auth'); ?>" class="to_register">Back to login! </a>
						</p>
						<div class="clearfix"></div>
						<br />
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
