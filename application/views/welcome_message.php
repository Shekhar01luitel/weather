<!doctype html>
<html lang="en">

<head>
	<?php $this->load->view('includes/header'); ?>
	<title>Edit Post</title>
</head>

<body>

	<div class="container">
		<h2 class="text-center mb-3">Registration</h2>
		<div class="card">
			<div class="card-body p-5">
				<form action="Registration/process_registration" method="post">
					<div class="mb-3">
						<label for="name" class="form-label">Your Name:</label>
						<input type="text" id="name" name="name" class="form-control" required>
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Your Email:</label>
						<input type="email" id="email" name="email" class="form-control" required>
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Password:</label>
						<input type="password" id="password" name="password" class="form-control" required>
					</div>
					<div class="mb-3">
						<label for="confirm_password" class="form-label">Confirm Password:</label>
						<input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
					</div>
					<div class="mb-3 form-check">
						<input type="checkbox" id="terms" name="terms" class="form-check-input" required>
						<label for="terms" class="form-check-label">I agree to the <a href="#">Terms of Service</a></label>
					</div>
					<div class="d-grid">
						<button type="submit" class="btn btn-primary">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php $this->load->view('includes/footer'); ?>

</body>

</html>
