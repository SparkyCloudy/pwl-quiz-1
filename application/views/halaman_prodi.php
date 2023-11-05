<div class="mb-5">
	<form method="post" action="<?=
	base_url(
		!empty($hasil) ?
			'Cprodi/prosesEdit/'.$hasil->Kode_prodi : 'Cprodi/prosesSimpan'
	)
	?>">
		<h2 class="form-label fw-bold mb-5 text-start">Halaman Prodi</h2>
		<div class="d-flex mb-2">
			<div class="col-6">
				<!-- Nomor input -->
				<div class="mb-3 me-2">
					<label class="form-label" for="form_input_nomorProdi">Nomor Prodi</label>
					<input type="text" id="form_input_nomorProdi" class="form-control"
								 name="Nomor_prodi"
								 value="<?= !empty($hasil) ? $hasil->Nomor_prodi: '' ?>"
								 required/>
				</div>
				
				<!-- Nama input -->
				<div class="mb-3 me-2">
					<label class="form-label"
								 for="form_input_namaProdi">Nama Prodi</label>
					<input type="text" id="form_input_namaProdi" class="form-control"
								 name="Nama_prodi"
								 value="<?= !empty($hasil) ? $hasil->Nama_prodi: '' ?>"
								 required/>
				</div>
				
				<!-- Jurusan input -->
				<div class="mb-3 me-2">
					<label class="form-label" for="form_input_jurusan">Jurusan</label>
					<input type="text" id="form_input_jurusan" class="form-control"
								 name="Jurusan"
								 value="<?= !empty($hasil) ? $hasil->Jurusan: '' ?>"
								 required/>
				</div>
				
				<!-- Jenjang input -->
				<div class="mb-3 me-2">
					<label class="form-label"
								 for="form_input_jenjang">Jenjang</label>
					<input type="text" id="form_input_jenjang" class="form-control"
								 name="Jenjang"
								 value="<?= !empty($hasil) ? $hasil->Jenjang: '' ?>"
								 required/>
				</div>
				
				<!-- Kaprodi input -->
				<div class="mb-3 me-2">
					<label class="form-label"
								 for="form_input_kaprodi">Kaprodi</label>
					<input type="text" id="form_input_kaprodi" class="form-control"
								 name="Kaprodi"
								 value="<?= !empty($hasil) ? $hasil->Kaprodi: '' ?>" required/>
				</div>
				
				<!-- Sk Prodi input -->
				<div class="mb-3 me-2">
					<label class="form-label"
								 for="form_input_skprodi">Sk Prodi</label>
					<input type="text" id="form_input_skprodi" class="form-control"
								 name="Sk_prodi"
								 value="<?= !empty($hasil) ? $hasil->Sk_prodi: '' ?>"
								 required/>
				</div>
				
				<!-- Keterangan input -->
				<div class="mb-3 me-2">
					<label class="form-label"
								 for="form_input_keterangan">Keterangan</label>
					<input type="text" id="form_input_keterangan" class="form-control"
								 name="Keterangan"
								 value="<?= !empty($hasil) ? $hasil->Keterangan: '' ?>"
								 required/>
				</div>
			
			</div>
		
		</div>
		
		<!-- Submit button -->
		<?php
		if (!empty($hasil)) {
			?>
			<button type="submit" class="btn btn-warning my-lg-2">Edit</button>
		<?php
		} else {
			?>
			<button type="submit" class="btn btn-primary my-lg-2">Daftar</button>
		<?php
		}
		?>
	</form>
</div>
