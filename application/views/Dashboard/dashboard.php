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
					<li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
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
									<h3>Admin Dashboard</h3>
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
