<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('includes/header'); ?>
	<title>Admin Dashboard - Settings</title>
</head>

<body>
	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-md-12 col-12 mx-auto">
				<nav aria-label="breadcrumb" class="mb-3">
					<ol class="breadcrumb bg-common">
						<li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Admin Setting</li>
					</ol>
				</nav>
				<div class="row">
					<div class="col-lg-3 col-md-4 d-md-block d-none">
						<div class="card bg-common card-left bg-common">
							<div class="card-body">
								<nav class="nav d-md-block d-none">
									<a class="nav-link active" aria-current="page" href="<?= base_url('profile') ?>"><i class="fa fa-user mr-1"></i> Profile</a>
								</nav>
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-md-8">
						<div class="card">
							<div class="card-header border-bottom mb-3">
								<?php $this->load->view('Dashboard/Admin_navbar/phone_navbar'); ?>
							</div>
							<div class="card-header border-bottom mb-3 d-md-none">
								<ul class="nav nav-tabs card-header-tabs nav-fill">
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url('profile') ?>">
											Profile
										</a>
									</li>
								</ul>
							</div>

							<div class="card-body tab-content border-0">
								<div class="tab-pane active" id="dashboard">
									<h3>Access Control and Permissions</h3>
									<form>
										<label for="userRole">User Role:</label>
										<select id="userRole" name="userRole">
											<option value="admin">Admin</option>
											<option value="editor">Editor</option>
											<option value="viewer">Viewer</option>
										</select>
										<p>Current Permissions:</p>
										<ul>
											<li>Can manage users</li>
											<li>Can edit content</li>
											<!-- Add more permission items here based on the user's role -->
										</ul>
										<button type="submit">Save</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view('includes/footer'); ?>
</body>

</html>
