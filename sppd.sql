-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 03:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sppd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_instansi`
--

CREATE TABLE `tb_instansi` (
  `id_instansi` int(11) NOT NULL,
  `nm_instansi` varchar(300) DEFAULT NULL,
  `nm_skpd` varchar(300) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `gambar` varchar(500) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_instansi`
--

INSERT INTO `tb_instansi` (`id_instansi`, `nm_instansi`, `nm_skpd`, `alamat`, `gambar`, `id`) VALUES
(42, 'PEMERINTAH KABUPATEN HULU SUNGAI TENGAH', 'DINAS PENDIDIKAN', 'Jl. H. Sibli Imansyah No.1 Barabai Telp/WA. 0838-3030-1333 Kode Pos: 71352 ', 'barabai11.jpg', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_nip` int(11) NOT NULL,
  `nip_peg` varchar(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pangkat_gol` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `ttl` date NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `skpd` varchar(500) NOT NULL,
  `instansi` varchar(500) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_nip`, `nip_peg`, `nama`, `pangkat_gol`, `jabatan`, `ttl`, `pendidikan`, `skpd`, `instansi`, `id`) VALUES
(33, '19821218 200604 1 008', 'Muhammad Sugeng Wahyudi, A.Md', 'Penata / III/c', 'Kepala Sub Bagian Umum', '0000-00-00', '', 'Dinas Pendidikan Kabupaten HST', 'Pemerintah Kabupaten Hulu Sungai Tengah', 14),
(34, '6307061410960006', 'Muhammad Arif', '-', 'Petugas Lapangan dan Administrasi', '0000-00-00', '', 'Dinas Pendidikan Kabupaten HST', 'Pemerintah Kabupaten Hulu Sungai Tengah', 14),
(35, '6307062604960005', 'Sulaiman', '-', 'Petugas Lapangan dan Administrasi', '0000-00-00', '', 'Dinas Pendidikan Kabupaten HST', 'Pemerintah Kabupaten Hulu Sungai Tengah', 14),
(36, '6307062711900005', 'M. Novensyah Irwan, S.P', '-', 'Petugas Lapangan dan Administrasi', '0000-00-00', '', 'Dinas Pendidikan Kabupaten HST', 'Pemerintah Kabupaten Hulu Sungai Tengah', 14),
(37, '19820916 200012 1 002', 'H. Muhammad Anhar, S.STP, ME', 'Pembina / IV/a', 'Plt. Kepala Dinas Pendidikan', '0000-00-00', '', 'Dinas Pendidikan Kab. Hulu Sungai Tengah', 'Pemerintah Kab. Hulu Sungai Tengah', 14),
(38, '19820709 200903 1 002', 'Julianur Syahdini, S.Pd', 'Penata Tk. I / III/d', 'Kepala Seksi Peserta Didik SMP', '0000-00-00', '', 'Dinas Pendidikan Kab. Hulu Sungai Tengah', 'Pemerintah Kab. Hulu Sungai Tengah', 14),
(39, '19940327 202012 1 009', 'Reza Arieswan, A.Md', 'Pengatur II/c', 'Pengelola Pemanfaatan Barang Milik Daerah', '0000-00-00', '', 'Dinas Pendidikan Kab. HST', 'Pemerintah Kabupaten Hulu Sungai Tengah', 14),
(40, '-', 'Muhammad Fitrah Dzikry, ST', '-', 'Tenaga Teknik Sipil', '0000-00-00', '', 'Dinas Pendidikan Kab. HST', 'Pemerintah Kabupaten Hulu Sungai Tengah', 14),
(41, '-', 'Kenia Khairunnisa, ST', '-', 'Tenaga Teknik Sipil', '0000-00-00', '', 'Dinas Pendidikan Kab. HST', 'Pemerintah Kabupaten Hulu Sungai Tengah', 14),
(42, '-', 'Isabella Anderia Muliati, ST', '-', 'Tenaga Teknik Sipil', '0000-00-00', '', 'Dinas Pendidikan Kab. HST', 'Pemerintah Kabupaten Hulu Sungai Tengah', 14),
(43, '19810918 200903 1 005', 'Taufik Rachman, S.Pd', 'Penata III/c', 'Kepala Seksi Kelembagaan Sarana Dan Prasarana SMP', '0000-00-00', '', 'Dinas Pendidikan Kab. HST', 'Pemerintah Kabupaten Hulu Sungai Tengah', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tb_spd`
--

CREATE TABLE `tb_spd` (
  `id_spd` int(11) NOT NULL,
  `id_instansi` int(11) NOT NULL,
  `id_st` int(11) DEFAULT NULL,
  `id_nip` int(16) DEFAULT NULL,
  `id_nip_ttd` int(11) DEFAULT NULL,
  `peng1` varchar(50) DEFAULT NULL,
  `tgl_lahir_peng1` varchar(50) DEFAULT NULL,
  `peng2` varchar(50) DEFAULT NULL,
  `tgl_lahir_peng2` varchar(50) DEFAULT NULL,
  `skpd_pembeban` varchar(128) DEFAULT NULL,
  `kode_belanja` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_spd`
--

INSERT INTO `tb_spd` (`id_spd`, `id_instansi`, `id_st`, `id_nip`, `id_nip_ttd`, `peng1`, `tgl_lahir_peng1`, `peng2`, `tgl_lahir_peng2`, `skpd_pembeban`, `kode_belanja`, `id`) VALUES
(72, 42, 21, 33, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14),
(73, 42, 21, 36, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14),
(74, 42, 21, 35, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14),
(75, 42, 21, 34, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14),
(76, 42, 22, 39, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14),
(77, 42, 22, 36, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14),
(78, 42, 22, 35, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14),
(79, 42, 22, 34, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14),
(80, 42, 23, 37, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab. Hulu Sungai Tengah', '5.1.02.04.01.0001', 14),
(81, 42, 23, 33, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab. Hulu Sungai Tengah', '5.1.02.04.01.0001', 14),
(85, 42, 24, 37, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab. Hulu Sungai Tengah', '5.1.02.04.01.0001', 14),
(96, 42, 25, 33, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14),
(97, 42, 25, 39, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14),
(98, 42, 25, 43, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14),
(99, 42, 25, 40, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14),
(100, 42, 25, 41, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14),
(101, 42, 25, 42, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14),
(102, 42, 25, 36, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14),
(103, 42, 25, 35, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14),
(104, 42, 26, 33, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14),
(105, 42, 26, 39, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14),
(106, 42, 26, 36, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14),
(107, 42, 26, 35, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14),
(108, 42, 26, 34, 10, '', '', '', '', 'DPA Dinas Pendidikan Kab HST TA 2022', '5.1.02.04.01.0001', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tb_st`
--

CREATE TABLE `tb_st` (
  `id_st` int(11) NOT NULL,
  `no_st` varchar(50) NOT NULL,
  `tgl_surat` varchar(50) NOT NULL,
  `dasar` varchar(300) NOT NULL,
  `maksud` varchar(300) NOT NULL,
  `t_berangkat` varchar(50) NOT NULL,
  `t_tujuan` varchar(50) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `alat_angkut` varchar(50) NOT NULL,
  `id_instansi` int(11) NOT NULL,
  `id_nip_ttd` int(11) NOT NULL,
  `no_u1` varchar(2) NOT NULL,
  `no_u2` varchar(2) NOT NULL,
  `no_u3` varchar(2) NOT NULL,
  `no_u4` varchar(2) NOT NULL,
  `no_u5` varchar(2) NOT NULL,
  `lap1` varchar(256) NOT NULL,
  `lap2` varchar(256) NOT NULL,
  `lap3` varchar(256) NOT NULL,
  `lap4` varchar(256) NOT NULL,
  `lap5` varchar(256) NOT NULL,
  `tibadi1` varchar(30) NOT NULL,
  `tibadi2` varchar(30) NOT NULL,
  `tibadi3` varchar(30) NOT NULL,
  `dari1` varchar(30) NOT NULL,
  `dari2` varchar(30) NOT NULL,
  `dari3` varchar(30) NOT NULL,
  `ke1` varchar(30) NOT NULL,
  `ke2` varchar(30) NOT NULL,
  `ke3` varchar(30) NOT NULL,
  `tgl_kiri1` varchar(30) DEFAULT NULL,
  `tgl_kiri2` varchar(30) DEFAULT NULL,
  `tgl_kiri3` varchar(30) DEFAULT NULL,
  `tgl_kanan1` varchar(30) DEFAULT NULL,
  `tgl_kanan2` varchar(30) DEFAULT NULL,
  `tgl_kanan3` varchar(30) DEFAULT NULL,
  `kepalakiri1` varchar(30) NOT NULL,
  `kepalakiri2` varchar(30) NOT NULL,
  `kepalakiri3` varchar(30) NOT NULL,
  `namakiri1` varchar(30) NOT NULL,
  `namakiri2` varchar(30) NOT NULL,
  `namakiri3` varchar(30) NOT NULL,
  `nipkiri1` varchar(30) NOT NULL,
  `nipkiri2` varchar(30) NOT NULL,
  `nipkiri3` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_st`
--

INSERT INTO `tb_st` (`id_st`, `no_st`, `tgl_surat`, `dasar`, `maksud`, `t_berangkat`, `t_tujuan`, `tgl_berangkat`, `tgl_kembali`, `alat_angkut`, `id_instansi`, `id_nip_ttd`, `no_u1`, `no_u2`, `no_u3`, `no_u4`, `no_u5`, `lap1`, `lap2`, `lap3`, `lap4`, `lap5`, `tibadi1`, `tibadi2`, `tibadi3`, `dari1`, `dari2`, `dari3`, `ke1`, `ke2`, `ke3`, `tgl_kiri1`, `tgl_kiri2`, `tgl_kiri3`, `tgl_kanan1`, `tgl_kanan2`, `tgl_kanan3`, `kepalakiri1`, `kepalakiri2`, `kepalakiri3`, `namakiri1`, `namakiri2`, `namakiri3`, `nipkiri1`, `nipkiri2`, `nipkiri3`, `id`) VALUES
(21, '090/047/Sekr.UM/DIK/2022', '2022-03-30', 'Perintah Plt. Kepala Dinas Pendidikan Kabupaten Hulu Sungai Tengah', 'Melakukan Pendataan dan Melengkapi Berkas Permohonan Sertifikat Tanah Sekolah ke Sekolah SD Negeri Binjai Pemangkih, Desa Binjai Pemangkih Kec. Labuan Amas Utara pada tanggal 30 Maret 2022', 'Barabai', 'Desa Binjai Pemangkih', '2022-03-30', '2022-03-30', 'Kendaraan R4', 42, 10, '1.', '2.', '', '', '', 'Sekolah sudah difoto sesuai Geolokasi GPS', 'Berkas permohonan pembuatan sertifikat tanah sudah dititipkan ke Kepala Sekolah SD Negeri Binjai Pemangkih, untuk diserahkan ke kantor desa dan ditandatangani Pembakal Desa Binjai Pemangkih', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', 14),
(22, '090/048/Sekr.UM/DIK/2022', '2022-05-12', 'Perintah Plt. Kepala Dinas Pendidikan Kabupaten Hulu Sungai Tengah', 'Melakukan Pendataan dan Melengkapi Berkas Permohonan Sertifikat Tanah Sekolah ke Sekolah Wilayah Desa Kambat Utara  Kec. Pandawan pada tanggal 12 Mei 2022', 'Barabai', 'Desa Kambat Utara', '2022-05-12', '2022-05-12', 'Kendaraan R4', 42, 10, '1.', '2.', '', '', '', 'Sekolah sudah difoto sesuai Geolokasi GPS', 'Berkas permohonan pembuatan sertifikat tanah sudah dititipkan ke beberapa Kepala Sekolah di wilayah Desa Kambat Utara, untuk diserahkan ke kantor desa dan ditandatangani Pembakal Kambat Utara', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 14),
(23, '090/185/UMUM/2022', '2022-04-16', 'Disposisi/ Perintah Wakil BUpati Kabupaten Hulu Sungai Tengah', 'Mengikuti kegiatan bimbingan teknis monitoring dan evaluasi implementasi pendidikan anti korupsi menggunakan Platform  Jaga.id se Kalimantan Selatan', 'Barabai', 'Banjarmasin', '2022-03-17', '2022-03-18', 'Kendaraan R4', 42, 10, '1.', '2.', '3.', '', '', 'Lembaga pendidikan merupakan basis pendidikan karakter generasi muda Indonesia untuk jangka panjang. Pada tatanan ini, sangat penting menanamkan pendidikan anti korupsi secara berkesinambungan. ', 'Pemerintah melalui Komisi Pemberantasan Anti Korupsi (KPK) telah melakukan kampanye anti korupsi ke lembaga pendidikan di seluruh Provinsi/Kabupaten/Kota di Indonesia. ', 'Kurikulum pendidikan anti korupsi mulai dikembangkan di sekolah-sekolah dengan penyesuaian konsep dan target sasaran yang hendak dicapai di jenjang lembaga pendidikan terkait. ', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', 14),
(24, '090/_____.Sekr.UM/DIK/2022', '2022-03-18', 'Disposisi/ Perintah Plt. Kepala Dinas Pendidikan Kabupaten Hulu Sungai Tengah', 'Mengikuti Kegiatan Asistensi Evaluasi Hasil Penilaian Kepatuhan Standar Pelayanan Publik Tahun 2021', 'Barabai', 'Banjarmasin', '2022-03-20', '2022-03-22', 'Kendaraan R4', 42, 10, '1.', '2.', '3.', '4.', '5.', 'Belum Lengkap Seperti SP, SOP, Ruang Pelayanan, pengaduan, Kompetensi Pengaduan, Sarpras Kelompok Rentan \r\n', 'Belum  melibatkan masyarakat/Pengguna Layanan ', 'Publikasi SP masih minim dan perlu diperluas agar dapat diketahui masyarakat (Online website)\r\n', 'Saran dari Ombusman : Memuat dasar Hukum Layanan, Meyiapkan Petugas Yang Kompeten Evaluasi Kinerja/ IKM Sarpras Internal,meningkatkan  jumlah pelaksana Pengawasan, Menginformasikan Jaminan Pelayanan\r\n', 'Pada Service Delivery Memenuhi sarpas Yanlik : Ruang Layanan, Kursi/ meja, kelompok rentan, toilet, Pengaduan, SMP, Jangka Waktu, Biaya, membuat brosur/ dipajang.\r\n', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', 14),
(25, '090/046/Sekr.UM/DIK/2022', '2022-05-19', 'Perintah Plt. Kepala Dinas Pendidikan Kabupaten Hulu Sungai Tengah', 'Melakukan Pendataan dan Inventarisasi Sarana Prasarana pasca kebakaran ke SMPN 21 HST, Desa Kayu Rabah Kec. Pandawan pada tanggal 19 Mei 2022', 'Barabai', 'SMPN 21 HST Desa Kayu Rabah Pandawan', '2022-05-19', '2022-05-19', 'Kendaraan R4', 42, 10, '', '', '', '', '', 'Telah dilakukan identifikasi dan verifikasi barang dan bangunan terbakar, dan telah dilakukan pengukuran luasan bangunan gedung sekolah, untuk dilakukan usulan rehabilitasi ke Tim TAPD Pemkab HST', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', 14),
(26, '090/_____.Sekr.UM/DIK/2022', '2022-05-24', 'Perintah Plt. Kepala Dinas Pendidikan Kabupaten Hulu Sungai Tengah', 'Melakukan Pendataan dan Melengkapi Berkas Permohonan Sertifikat Tanah Sekolah ke SDN Hapulang, SDN Andang, SMPN 33 Satap HST, SMPN 19 HST, di Kecamatan Haruyan pada tanggal 24 Mei 2022', 'Barabai', 'SMPN 19 HST', '2022-05-24', '2022-05-24', 'Kendaraan R4', 42, 10, '1.', '2.', '', '', '', 'Sekolah sudah difoto sesuai Geolokasi GPS', 'Berkas permohonan pembuatan sertifikat tanah sudah ditandatangani Pembakal Desa Binjai Pemangkih', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ttd`
--

CREATE TABLE `tb_ttd` (
  `id_nip_ttd` int(11) NOT NULL,
  `nip_ttd` varchar(30) NOT NULL,
  `nama_ttd` varchar(100) DEFAULT NULL,
  `pangkat_gol_ttd` varchar(50) DEFAULT NULL,
  `jabatan_ttd` varchar(50) DEFAULT NULL,
  `kewenangan` varchar(50) DEFAULT NULL,
  `lokasi_ttd` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ttd`
--

INSERT INTO `tb_ttd` (`id_nip_ttd`, `nip_ttd`, `nama_ttd`, `pangkat_gol_ttd`, `jabatan_ttd`, `kewenangan`, `lokasi_ttd`, `id`) VALUES
(10, '19820916 200012 1 002', 'H. Muhammad Anhar, S.STP, ME', 'Pembina', 'Plt. Kepala Dinas Pendidikan', 'Pengguna Anggaran', 'Barabai', 14);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(13, 'Kecamatan Labuan Amas Utara', 'lau@lau.com', 'logo1.jpg', '$2y$10$SOVbaTA1IMemcFPios8R3uTo4Vit8VJCK0LvuGKNRJAjT/l57bY0y', 2, 1, 1575957639),
(14, 'Dinas Pendidikan HST', 'disdik@hst.com', 'foto_disdik.jpg', '$2y$10$PFY4ipxhH5hec3Vi6HXQ7eRQNDPiaX2JIeWHteb3dzgeb6BNNaDAW', 2, 1, 1648312598);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-sw fa-folder', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_instansi`
--
ALTER TABLE `tb_instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_nip`);

--
-- Indexes for table `tb_spd`
--
ALTER TABLE `tb_spd`
  ADD PRIMARY KEY (`id_spd`) USING BTREE,
  ADD KEY `id_instansi` (`id_instansi`),
  ADD KEY `id_st` (`id_st`),
  ADD KEY `id_nip` (`id_nip`),
  ADD KEY `id_nip_ttd` (`id_nip_ttd`);

--
-- Indexes for table `tb_st`
--
ALTER TABLE `tb_st`
  ADD PRIMARY KEY (`id_st`);

--
-- Indexes for table `tb_ttd`
--
ALTER TABLE `tb_ttd`
  ADD PRIMARY KEY (`id_nip_ttd`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_instansi`
--
ALTER TABLE `tb_instansi`
  MODIFY `id_instansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_nip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tb_spd`
--
ALTER TABLE `tb_spd`
  MODIFY `id_spd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `tb_st`
--
ALTER TABLE `tb_st`
  MODIFY `id_st` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_ttd`
--
ALTER TABLE `tb_ttd`
  MODIFY `id_nip_ttd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_spd`
--
ALTER TABLE `tb_spd`
  ADD CONSTRAINT `tb_spd_ibfk_1` FOREIGN KEY (`id_nip`) REFERENCES `tb_pegawai` (`id_nip`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_spd_ibfk_2` FOREIGN KEY (`id_instansi`) REFERENCES `tb_instansi` (`id_instansi`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_spd_ibfk_3` FOREIGN KEY (`id_nip_ttd`) REFERENCES `tb_ttd` (`id_nip_ttd`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_spd_ibfk_4` FOREIGN KEY (`id_st`) REFERENCES `tb_st` (`id_st`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
