<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?= base_url('vendor/twbs/bootstrap/dist/css/bootstrap.css') ?>"/>
	<script src="<?= base_url('vendor/twbs/bootstrap/dist/js/bootstrap.js') ?>"></script>
	<title>Halaman Registrasi Dosen</title>
</head>
<body>
<!-- Section: Design Block -->
<section>
	<!-- Background image -->
	<div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 150px;">
	</div>
	<!-- Background image -->
	<div class="container pb-5">
		<div class="card mx-lg-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">

			<div class="card-body py-5 px-md-5">

				<div class="row">
					<div>
						<form method="post" action="<?= base_url('Cdaftar/prosesDaftar') ?>">
							<h2 class="form-label fw-bold mb-5 text-start">Registrasi Dosen</h2>
							<div class="d-flex mb-2">
								<div class="col-6">
									<!-- NIK input -->
									<div class="mb-3 me-2">
										<label class="form-label" for="form_input_nik">NIK</label>
										<input type="number" id="form_input_nik" class="form-control"
													 name="nik" required minlength="15" maxlength="15"/>
									</div>

									<!-- Name input -->
									<div class="mb-3 me-2">
										<label class="form-label"
													 for="form_input_namaLengkap">Nama lengkap</label>
										<input type="text" id="form_input_namaLengkap" class="form-control"
													 name="namaLengkap" required/>
									</div>

									<!-- Email input -->
									<div class="mb-3 me-2">
										<label class="form-label" for="form_input_email">Email</label>
										<input type="email" id="form_input_email" class="form-control"
													 name="email" required/>
									</div>

									<!-- Password input -->
									<div class="mb-3 me-2">
										<label class="form-label"
													 for="form_input_password">Password</label>
										<input type="password" id="form_input_password" class="form-control"
													 name="password" value="" required/>

										<div class="d-flex">
											<input name="" class="me-2 form-check-input" id="form_input_autoGen-Pass"
														 type="checkbox">
											<label class="form-label form-check-label"
														 for="form_input_autoGen-Pass">Auto-Generate Password</label>
										</div>
									</div>

									<!-- Jenis kelamin input -->
									<div class="mb-3 me-2">
										<div class="form-label">Jenis Kelamin</div>
										<select name="jenisKelamin" class="form-select"
														aria-label="Default select example" required>
											<option selected>Pilih Salah Satu</option>
											<option value="Laki-Laki">Laki-Laki</option>
											<option value="Perempuan">Perempuan</option>
										</select>
									</div>
								</div>

								<div class="col-6">
									<!-- Tanggal lahir input -->
									<div class="mb-3 ms-2">
										<label for="form_input_tanggalLahir" class="form-label">Tanggal lahir</label>
										<input class="form-control" id="form_input_tanggalLahir"
													 type="date" name="tanggalLahir" required>
									</div>

									<!-- Nomer Telp input -->
									<div class="mb-3 ms-2">
										<label for="form_input_nomerTelp" class="form-label">No Telp.</label>
										<input class="form-control" id="form_input_nomerTelp"
													 type="number" name="nomerTelp" required>
									</div>

									<!-- Alamat input -->
									<div class="mb-3 ms-2">
										<label for="form_input_alamat" class="form-label">Alamat</label>
										<textarea class="form-control" id="form_input_alamat"
															name="alamat" style="resize: none"></textarea>
									</div>

									<!-- Status dosen input -->
									<div class="mb-3 ms-2">
										<div class="form-label">Status dosen</div>
										<select name="statusDosen" class="form-select"
														aria-label="Default select example" required>
											<option selected>Pilih Salah Satu</option>
											<option value="Tetap">Tetap</option>
											<option value="Tidak Tetap">Tidak Tetapp</option>
											<option value="Honorer">Honorer</option>
										</select>
									</div>

									<!-- Pendidikan terakhir input -->
									<div class="mb-3 ms-2">
										<div class="form-label">Pendidikan terakhir</div>
										<select name="pendidikanTerakhir" class="form-select"
														aria-label="Default select example" required>
											<option selected>Pilih Salah Satu</option>
											<option value="SD">Sekolah Dasar</option>
											<option value="SMP">Sekolah Menengah Pertama</option>
											<option value="SMA">Sekolah Menengah Atas</option>
											<option value="D3">D3</option>
											<option value="S1">Strata 1</option>
											<option value="S2">Strata 2</option>
											<option value="S3">Strata 3</option>
										</select>
									</div>
								</div>

							</div>

							<!-- Submit button -->
							<button type="submit" class="btn btn-primary my-lg-2">Daftar</button>
							<div>
								<p class="mb-0">Sudah punya akun? <a href="<?= base_url('halaman/masuk') ?>"
																										 class="fw-bold">Masuk</a>
								</p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Section: Design Block -->
</body>
</html>
