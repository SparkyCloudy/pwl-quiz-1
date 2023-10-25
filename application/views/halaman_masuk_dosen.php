<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?= base_url('vendor/twbs/bootstrap/dist/css/bootstrap.css') ?>"/>
	<script src="<?= base_url('vendor/twbs/bootstrap/dist/js/bootstrap.js') ?>"></script>
	<title>Halaman Masuk Dosen</title>
</head>
<body>
<section class="vh-100 gradient-custom">
	<div class="container py-5 h-100">
		<div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-12 col-md-8 col-lg-6 col-xl-5">
				<div class="card" style="border-radius: 1rem;">
					<div class="card-body p-5 text-center">

						<div class="mb-md-5 mt-md-4">

							<h2 class="fw-bold mb-2 text-uppercase">Login Dosen</h2>
							<p class="mb-5">Harap masukan identitas login anda!</p>

							<form method="post" action="<?= base_url('halaman/masuk/proses') ?>">
								<div class="form-outline mb-4">
									<label class="form-label" for="inputNik">NIK</label>
									<input type="number" id="inputNik" class="form-control form-control-lg"
												 name="nik" placeholder="Nomer Induk Kependudukan"/>
								</div>

								<div class="form-outline mb-4">
									<label class="form-label" for="inputPassword">Password</label>
									<input type="password" id="inputPassword" class="form-control form-control-lg"
												 name="password" placeholder="Password"/>
								</div>

								<button class="btn btn-outline-primary btn-lg px-5 mb-5" type="submit">Masuk</button>
							</form>

							<?php
							if (!empty($login_gagal)) {
								?>
								<div id="alertGagal" class="alert alert-danger">
									<button type="button" class="btn-close btn btn-sm"
													onclick="document.getElementById('alertGagal').remove()"></button>
									<?= $login_gagal ?>
								</div>
								<?php
							}
							?>
						</div>

						<div>
							<p class="mb-0">Tidak punya akun? <a href="<?= base_url('halaman/daftar') ?>" class="fw-bold">Daftar</a>
							</p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</body>
</html>
