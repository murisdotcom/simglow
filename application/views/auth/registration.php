<div>
	<div class="login_wrapper">
		<div class="animate form login_form">
			<img style="width:350px;" src="<?= base_url('assets/') ?>img/Msglow.png">
			<section class="login_content">
				<form>
					<h1>Create Account</h1>
					<div>
						<input type="text" class="form-control" placeholder="Username" required="" />
					</div>
					<div>
						<input type="email" class="form-control" placeholder="Email" required="" />
					</div>
					<div>
						<input type="password" class="form-control" placeholder="Password" required="" />
					</div>
					<div>
						<a class="btn btn-default submit" href="index.html">Submit</a>
					</div>

					<div class="clearfix"></div>

					<div class="separator">
						<p class="change_link">Already a member ?
							<a href="<?= base_url('auth'); ?>" class="to_register"> Log in </a>
						</p>