<div>
	<div class="login_wrapper">
		<div class="animate form login_form">
			<img style="width:350px;" src="<?= base_url('assets/') ?>img/Msglow.png">
			<section class="login_content">


			<?=$this->session->flashdata('message'); ?>

				<!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div> -->

				<form>
					<h1>Login Form</h1>
					<div>
						<input type="text" class="form-control" id="email" name="email" placeholder="Enter email address..."
							autocomplete="off">
					</div>
					<div>
						<input type="password" id="password" name="password" class="form-control" placeholder="Password">
					</div>
					<div>
						<a class="btn btn-default submit" href="index.html">Log in</a>
						<a class="reset_pass" href="#">Lost your password?</a>
					</div>
					<div class="clearfix"></div>
					<div class="separator">
						<p class="change_link">New to site?
							<a href="<?= base_url('auth/registration'); ?>" class="to_register"> Create Account </a>
						</p>