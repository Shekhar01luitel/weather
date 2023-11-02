
<!doctype html>
<html lang="en">

<head>
	<?php $this->load->view('includes/header'); ?>
	<title>Login</title>
</head>

<body>

	<div class="container">
		<h2 class="text-center mb-3">LOGIN</h2>
		<div class="card">
        <?php echo $this->session->flashdata('message'); ?>
			<div class="card-body p-5">
				<form action="<?=base_url('login_controller/Login/process_login')?>" method="post">
					<div class="mb-3">
						<label for="email" class="form-label">Your Email:</label>
						<input type="email" id="email" name="email" class="form-control" required>
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Password:</label>
						<input type="password" id="password" name="password" class="form-control" required>
					</div>					
					<div class="d-grid">
						<button type="submit" class="btn btn-primary">Login</button>
					</div>
					<label for="terms" class="form-check-label">Not Registered <a href="<?=base_url('registration') ?>">Register</a></label>
				</form>
			</div>
		</div>
	</div>
	<?php $this->load->view('includes/footer'); ?>

</body>

</html>
