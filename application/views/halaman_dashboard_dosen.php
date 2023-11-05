<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?= base_url('vendor/twbs/bootstrap/dist/css/bootstrap.css') ?>"/>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
					integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
					crossorigin="anonymous"></script>
	<script src="<?= base_url('vendor/twbs/bootstrap/dist/js/bootstrap.js') ?>"></script>
	<title>Dashboard Dosen</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Halaman Admin</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" role="button"
						 data-bs-toggle="dropdown" aria-expanded="false">Master Data</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item"
									 href="<?= base_url('halaman/dashboard/dosen/data_prodi') ?>">
								Data Prodi</a></li>
						<li><a class="dropdown-item"
									 href="#">Data Jurusan</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item"
									 href="#">Something else here</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" aria-disabled="true">Disabled</a>
				</li>
			</ul>
			<div class="col-1">
				<button type="button" onclick="logout()"
								class="btn btn-outline-danger">Log out</button>
			</div>
		</div>
	</div>
</nav>
<div class="container mt-3">
	<h3>Halo <?php echo $this->session->userdata('Username'); ?></h3>
	<p>Selamat Datang di Sistem Pendaftaran Mahasiswa Baru</p>

	<?php
	if (!empty($konten)) {
		echo $konten;
	}

	if (!empty($table)) {
		echo $table;
	}
	?>


</div>
</body>

<script>
  function logout() {
		window.open("<?=base_url('halaman/dashboard/dosen/logout')?>", '_self');
  }
</script>
</html>
