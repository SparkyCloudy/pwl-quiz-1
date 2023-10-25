CREATE DATABASE dbdosen;

USE dbdosen;

CREATE TABLE tbdosen
(
	Nik                 varchar(15)  NOT NULL UNIQUE,
	Nama_lengkap        varchar(255) NOT NULL,
	Password            varchar(32)  NOT NULL,
	Jenis_kelamin       enum ('Laki-Laki', 'Perempuan'),
	Tanggal_lahir       date,
	Nomer_telp          varchar(15)  NOT NULL,
	Alamat              varchar(255),
	Email               varchar(100),
	Status_dosen        enum ('Tetap', 'Tidak Tetap', 'Honorer'),
	Pendidikan_terakhir enum ('SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3'),
	PRIMARY KEY (Nik)
);

