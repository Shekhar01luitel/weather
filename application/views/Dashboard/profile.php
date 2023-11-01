<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('includes/header'); ?>
	<title>Edit Profile</title>
</head>

<body>
	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-md-12 col-12 mx-auto">
				<nav aria-label="breadcrumb" class="mb-3">
					<ol class="breadcrumb bg-common">
						<li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?= BASE_URL('admindashboard/setting') ?>">Admin Setting</a></li>
						<li class="breadcrumb-item active" aria-current="page">Profile settings</li>
					</ol>
				</nav>
				<div class="row">
					<div class="col-lg-3 col-md-4 d-md-block d-none">
						<div class="card bg-common card-left bg-common">
							<div class="card-body">
								<nav class="nav d-md-block d-none">
									<a data-toggle='tab' class="nav-link active" aria-current="page" href="#profile"><i class="fas fa-user mr-1"></i> Profile</a>
									<a data-toggle='tab' class="nav-link" href="#account"><i class="fas fa-user-cog mr-1"></i> Account Setting</a>
									<a data-toggle='tab' class="nav-link" href="#security"><i class="fas fa-user-shield mr-1"></i> Security</a>
									<a data-toggle='tab' class="nav-link" href="#permission"><i class="fas fa-bell mr-1"></i> Permission</a>
								</nav>
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-md-8">
						<div class="card">
							<div class="card-header border-bottom mb-3 d-md-none">
								<ul class="nav nav-tabs card-header-tabs nav-fill">
									<li class="nav-item">
										<a data-toggle="tab" class="nav-link active" aria-current="page" href="#profile"><i class="fas fa-user mr-1"></i></a>
									</li>
									<li class="nav-item">
										<a data-toggle="tab" class="nav-link" href="#account"><i class="fas fa-user-cog mr-1"></i></a>
									</li>
									<li class="nav-item">
										<a data-toggle="tab" class="nav-link" href="#security"><i class="fas fa-user-shield mr-1"></i></a>
									</li>
									<li class="nav-item">
										<a data-toggle="tab" class="nav-link" href="#permission"><i class="fas fa-bell mr-1"></i></a>
									</li>
								</ul>
							</div>
							<!-- Edit Profile Content -->
							<div class="card-body tab-content border-0">
								<div class="tab-pane active" id="profile">
									<h6>YOUR PROFILE INFORMATION</h6>
									<hr>
									<form>
										<div class="mb-3">
											<label for="full_name" class="form-label">Full Name</label>
											<input type="text" class="form-control" id="full_name" placeholder="Your Full Name" value="<?= isset($user_data->name) ? $user_data->name : '' ?>">
										</div>
										<div class="mb-3">
											<label for="bio" class="form-label">Your Bio</label>
											<textarea class="form-control" id="bio" rows="3" placeholder="Tell us about yourself"><?= isset($user_data->bio) ? $user_data->bio : '' ?></textarea>
										</div>
										<div class="mb-3">
											<label for "url" class="form-label">URL</label>
											<input type="text" class="form-control" id="url" placeholder="Your website URL" value="<?= isset($user_data->url) ? $user_data->url : '' ?>">
										</div>
										<div class="mb-3">
											<label for="location" class="form-label">Location</label>
											<input type="text" class="form-control" id="location" placeholder="Your location" value="<?= isset($user_data->location) ? $user_data->location : '' ?>">
										</div>
										<button class="btn btn-outline-info" type="button">Update Profile</button>
										<button class="btn btn-outline-info" type="reset">Reset Changes</button>
									</form>
								</div>

								<div class="tab-pane" id="account">
									<h6>ACCOUNT SETTING</h6>
									<form>
										<div class="mb-3">
											<label for="exampleFormControlInput1" class="form-label">Username</label>
											<input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Tell us about yourself" value="<?= isset($user_data->user_name) ? $user_data->user_name : '' ?>">
											<small class="form-text text-muted">Must be Unique</small>
										</div>
										<hr>
										<div class="mb-3">
											<label for="exampleFormControlInput1" class="form-label">Email</label>
											<input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Tell us about yourself" value="<?= isset($user_data->email) ? $user_data->email : '' ?>">
											<small class="form-text text-muted">Must be Unique</small>
										</div>
										<button class="btn btn-info" type="button">Update Account</button>
										<hr>
									</form>
									<form>
										<div class="mb-3">
											<label for="exampleFormControlInput1" class="form-label text-danger">Delete Account</label>
											<p class="text-muted">One you delete your account , there is no going back. Please be certain</p>
										</div>
										<br>
										<button class="btn btn-danger" type="button">Delete Account</button>
									</form>
								</div>


								<!-- actual security -->
								<div class="tab-pane" id="security">
									<h6>SECURITY SETTING</h6>
									<form>
										<div class="mb-3">
											<label for="exampleFormControlInput1" class="form-label">Change Password</label>
											<input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Your Current Password">
											<br>
											<input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Your New Password">
											<br>
											<input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Confirm New Password">
										</div>
										<button class="btn btn-info" type="button">Update Account</button>
									</form>
									<hr>
									<form>
										<div class="form-group">
											<label class="d-block mb-3">Two Factor Authentication</label>
											<button class="btn btn-outline-info" type="submit">Enable two-factor Authentication Comming soon!</button>
											<p class="text-muted small">Two-factor Authentication adds on additional layer of security to your
												account by requiring more than just a password to log in.</p>
										</div>
									</form>
								</div>

								<!-- actual permission -->
								<div class="tab-pane" id="permission">
									<h6>PERMISSION SETTINGS</h6>
									<hr>
									<form>
										<div class="mb-3">
											<label for="security_alerts" class="form-label d-block">Security Alerts</label>
											<small class="form-text text-muted">Receive security alert permissions via email.</small>
											
										</div>

										<div class="mb-3">
											<label class="d-block mb-2">Permission</label>
											<ul class="list-group">
												
											</ul>
										</div>
										<button class="btn btn-outline-info" type="button">Update Permissions</button>
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
