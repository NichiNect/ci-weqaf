<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	
	<div class="row">
		<div class="col-xl-3 col-md-6 mb-4">
			<a href="<?= base_url('admin/editTestimoni/').$testi[0]['id']; ?>">
				<div class="card border-left-primary shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="h5 mb-2 font-weight-bold text-gray-800"><?= $testi[0]['nama']; ?></div>
								<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?= $testi[0]['profesi']; ?></div>
							</div>
							<div class="col-auto">
								<i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<a href="<?= base_url('admin/editTestimoni/').$testi[0]['id']; ?>">
				<div class="card border-left-success shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="h5 mb-2 font-weight-bold text-gray-800"><?= $testi[0]['nama']; ?></div>
								<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?= $testi[0]['profesi']; ?></div>
							</div>
							<div class="col-auto">
								<i class="fas fa-calendar fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<a href="<?= base_url('admin/editTestimoni/').$testi[0]['id']; ?>">
				<div class="card border-left-info shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="h5 mb-2 font-weight-bold text-gray-800"><?= $testi[0]['nama']; ?></div>
								<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?= $testi[0]['profesi']; ?></div>
							</div>
							<div class="col-auto">
								<i class="fas fa-calendar fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->