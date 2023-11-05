<div class="mb-auto col-6">
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama Prodi</th>
			<th>Jenjang</th>
			<th>Jurusan</th>
			<th>Aksi</th>
		</tr>

		<?php
		if (!empty($hasil)) {
			$no = 1;
			foreach ($hasil as $data) {
				?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $data->Nama_prodi ?></td>
					<td><?= $data->Jenjang ?></td>
					<td><?= $data->Jurusan ?></td>
					<td>
						<a href="<?=
						base_url(
							'halaman/dashboard/dosen/data_prodi/edit/'
						).$data->Kode_prodi;
						?>"
							 class="btn btn-primary" type="button">Ubah</a>

						<a href="<?=
						base_url('halaman/dashboard/dosen/data_prodi/delete/'
						).$data->Kode_prodi;
						?>"
							 class="btn btn-danger" type="button">
							Hapus
						</a>
					</td>
				</tr>
				<?php
			}
		}
		?>


	</table>
</div>
