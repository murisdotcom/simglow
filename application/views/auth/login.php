<div>
	<div class="login_wrapper">
		<div class="animate form login_form">
			<img style="width:350px;" src="<?= base_url('assets/') ?>img/Msglow.png">

			<section class="login_content">

				<?= $this->session->flashdata('message'); ?>

				<!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div> -->

				<form method="post" action="<?= base_url('auth'); ?>">
					<h1>Login Form</h1>
					<div class="input-group mb-4">
						<input type="text" class="form-control" id="email" name="email" placeholder="Enter email address..." autocomplete="off" value="<?= set_value('email'); ?>">
						<?= form_error('email', '<span class="text-danger">', '</span>'); ?>
					</div>
					<div class="input-group">
						<input type="password" id="password" name="password" class="form-control" placeholder="Password">
						<?= form_error('password', '<span class="text-danger is-invalid">', '</span>'); ?>
					</div>
					<div>
						<button class="btn btn-dark" type="submit">Log in</button>
					</div>
					<br>
					<a class="reset_pass" href="<?= base_url('auth/forgotpassword'); ?>">Lost your password?</a>

					<div class="clearfix"></div>
					<div class="separator">
						<p class="change_link">New to site?
							<a href="<?= base_url('auth/registration'); ?>" class="to_register"> Create Account </a>
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
