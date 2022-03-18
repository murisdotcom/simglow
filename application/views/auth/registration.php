<div>
	<div class="login_wrapper">
		<div class="animate form login_form">
			<img style="width:350px;" src="<?= base_url('assets/') ?>img/Msglow.png">
			<section class="login_content">
				<form method="post" action="<?= base_url('auth/registration'); ?>">
					<h1>Create Account</h1>
					<div>
						<input name="name" id="name" type="text" class="form-control" placeholder="Fullname"
							value="<?= set_value('name'); ?>">

						<?= form_error('name', '<span class="text-danger">','</span>'); ?>
					</div>
					<div>
						<input name="email" id="email" type="email" class="form-control" placeholder="Email"
							value="<?= set_value('email'); ?>">

						<?= form_error('email', '<span class="text-danger">','</span>'); ?>
					</div>
					<div>
						<input name="password1" id="password1" type="password" class="form-control" placeholder="Password">
						<?= form_error('password1', '<span class="text-danger">','</span>'); ?>
					</div>
					<div>
						<div>
							<input name="password2" id="password2" type="password" class="form-control"
								placeholder="Konfirmasi Password">
							<?= form_error('password2', '<span class="text-danger">','</span>'); ?>
						</div>
						<div>
							<button type="submit" class="btn btn-dark">Submit</button>
						</div>

						<div class="clearfix"></div>

						<div class="separator">
							<p class="change_link">Already a member ?
								<a href="<?= base_url('auth'); ?>" class="to_register"> Log in </a>
							</p>
							<div class="clearfix"></div>
							<br />

							<div>
								<h1><i class="fa fa-paw"></i> MURIS.COM</h1>
								<p>Copyright &copy; <?= date('Y'); ?> muris.com</p>
								All Rights Reserved
							</div>
						</div>
				</form>
			</section>
		</div>
	</div>
</div>