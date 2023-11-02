<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('includes/header'); ?>
	<title>Admin Dashboard</title>
</head>

<body>
	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-md-12 col-12 mx-auto">
				<nav aria-label="breadcrumb" class="mb-3">
					<ol class="breadcrumb bg-common">
						<li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Admin User Management</li>
					</ol>
				</nav>
				<div class="row">
					<div class="col-lg-3 col-md-4 d-md-block d-none">
						<div class="card bg-common card-left bg-common">
							<div class="card-body">
								<?php $this->load->view('Dashboard/Admin_navbar/navbar'); ?>
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-md-8">
						<div class="card">
							<div class="card-header border-bottom mb-3 d-md-none">
								<?php $this->load->view('Dashboard/Admin_navbar/phone_navbar'); ?>
							</div>
							<div class="card-body tab-content border-0">
								<div class="tab-pane active" id="dashboard">
									<h3>Admin User Management</h3>
									<?php echo $this->session->flashdata('message'); ?>

									<!-- Super Admin Table -->
									<div class="col-md-12">
										<table class="table table-bordered">
											<thead>
												<th class="text-center" colspan="2">Super Admin</th>
												</th>
											</thead>
											<thead>
												<tr>
													<th>Username</th>
													<th>Email</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($super_admin as $user) : ?>
													<tr>
														<td><a href="<?= base_url('profile') ?>/<?= $user->id ?>"><?= $user->name ?></a></td>
														<td><a href="<?= base_url('profile') ?>/<?= $user->id ?>"><?= $user->email ?></a></td>
													</tr>

												<?php endforeach; ?>
											</tbody>
										</table>
									</div>

									<!-- Admin Table -->
									<div class="col-md-12">
										<table class="table table-bordered">
											<thead>
												<th class="text-center" colspan="2">Admin</th>
											</thead>
											<thead>
												<tr>
													<th>Username</th>
													<th>Email</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($admin as $user) : ?>
													<tr>
														<td><a href="<?= base_url('profile') ?>/<?= $user->id ?>"><?= $user->name ?></a></td>
														<td><a href="<?= base_url('profile') ?>/<?= $user->id ?>"><?= $user->email ?></a></td>
													</tr>

												<?php endforeach; ?>
											</tbody>
										</table>
									</div>

									<!-- User Table -->
									<div class="col-md-12">
										<table class="table table-bordered">
											<thead>
												<th class="text-center" colspan="2">User</th>
											</thead>
											<thead>
												<tr>
													<th>Username</th>
													<th>Email</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($users as $user) : ?>
													<tr>
														<td><a href="<?= base_url('profile') ?>/<?= $user->id ?>"><?= $user->name ?></a></td>
														<td><a href="<?= base_url('profile') ?>/<?= $user->id ?>"><?= $user->email ?></a></td>
													</tr>

												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
