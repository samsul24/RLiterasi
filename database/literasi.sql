-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 07:44 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `literasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `diskripsi` varchar(100) NOT NULL,
  `file_pdf` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `diskripsi`, `file_pdf`) VALUES
(5, 'Politik', 'as', 'CamScanner_03-13-2021_21_33.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `detail_ulasan`
--

CREATE TABLE `detail_ulasan` (
  `id_detail_ulasan` int(11) NOT NULL,
  `id_ulasan` int(11) NOT NULL,
  `ket_guru` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `npsn` varchar(50) NOT NULL,
  `nss` varchar(50) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `kode_pos` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `verification_key` varchar(250) NOT NULL,
  `is_email_verified` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `npsn`, `nss`, `alamat_sekolah`, `kode_pos`, `no_telp`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `website`, `email`, `visi`, `misi`, `verification_key`, `is_email_verified`) VALUES
(0, 'super', 'super', 'super', 'super', 'super', 'super', 'super', 'super', 'super', 'super', 'super', 'super', 'super', 'super', '', 'yes'),
(1, 'SMAN 1 Geger ', '20507726', '', 'Jl. Raya Uteran. No.634', '63171', '(0351) 367070', 'Sumberejo', 'Geger', 'Madiun', 'Jawa Timur', 'http://sman1geger.sch.id', 'sman1geger@gmail.com', 'UNGGUL DALAM BIDANG AKADEMIK DAN NON AKADEMIK YANG BERPIJAK PADA KESEIMBANGAN IMTAQ DAN IPTEK SERTA BERWAWASAN LINGKUNGAN', '1. Melaksanakan pembelajaran dan bimbingan secara efektif sehingga setiap siswa berkembang optimal sesuai profesi yang dimiliki.\r\n2. Menumbuhkan penghayatan terhadap nilai agama, budaya dan hukum sehingga menjadi sumber kearifan dalam bertindak.\r\n3. Mendorong tumbuhnya semangat kualitas dan kompetisi yang sehat dan berwawasan lingkungan hidup\r\n4. Menerapkan management partisipatf dengan melibatkan seluruh warga sekolah dan stake holder sekolah.', '', 'yes'),
(2, 'SMAN 1 Lumajang', '', '', '', '', '', '', '', 'Lumajang', '', '', '', '', '', '', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `similar`
--

CREATE TABLE `similar` (
  `id_text` int(11) NOT NULL,
  `ulasan1` longtext NOT NULL,
  `ulasan2` longtext NOT NULL,
  `hasil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `similar`
--

INSERT INTO `similar` (`id_text`, `ulasan1`, `ulasan2`, `hasil`) VALUES
(0, 'sama', 'sama', 'hasil = '),
(0, 'ini aku sedang membaca buku agar wawasan saya jadi luas', 'buku adalah tempat unutuk menambah wawasan', 'hasil = ');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `ket_siswa` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P','-') NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(10) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `id_user_role` int(11) NOT NULL,
  `is_active` enum('aktif','pasif') NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `foto`, `nis`, `username`, `password`, `nama`, `jenis_kelamin`, `kelas`, `email`, `jurusan`, `no_telp`, `id_user_role`, `is_active`, `id_sekolah`, `date_created`) VALUES
(1, '', '', 'super', ' $2y$10$9l6Ht9iTthl.nuemqQMHtenO4LUvBOnMJ6lMnkmQ6XKoR1VaAjzMC', 'super admin', 'L', '', '', '', '', 1, 'aktif', 0, 0),
(2, '', '', 'magang', '$2y$10$f8YDcMv3UsyG4Dg6qsWuLuBsUVZZAkeIyviomzHNtt8KYiAafwuf2', 'samsul', 'L', '', '', '', '', 2, 'aktif', 1, 0),
(3, '', '', 'guru', '$2y$10$f8YDcMv3UsyG4Dg6qsWuLuBsUVZZAkeIyviomzHNtt8KYiAafwuf2', 'samsul', 'L', '', '', '', '', 3, 'aktif', 1, 0),
(4, '', '1831710009', 'sam', '$2y$10$qVtrOb9MZoFXGdgC4uy3dOIqfNICGX6FxZe9GHfD5WPYDHDQ9JrFK', 'samsul ibs', 'L', '12 ', '', 'IPA', '09898787887', 4, 'aktif', 1, 0),
(5, '', '123', 'magang1', '$2y$10$f8YDcMv3UsyG4Dg6qsWuLuBsUVZZAkeIyviomzHNtt8KYiAafwuf2', 'sudirman', 'L', '', '', '', '0896755456', 2, 'aktif', 2, 0),
(7, '', '1831710001', 'asd', ' $2y$10$GUM90JJPELwnxuPmOc.ljeQ/8fm7IawJd1LWH4k0Xk9v335DWcbCO', 'asd', 'P', '12 ', '', 'IPA', '08967554562', 4, 'aktif', 2, 0),
(36, 'default.png', 'null', 'zxc', '$2y$10$mIlHrV1.gpHMDCC8DEb8oupGYMHWKsQjXcvcpFj36/dDdZiOEBlvi', 'null ', '-', 'null', 'samsuldar0130@gmail.com', 'null', 'null', 4, 'pasif', 1, 1619413190),
(37, 'default.png', 'null', ',./', '$2y$10$J.uckwUvHQxbnpfr9zRGdOj3KQqYvgkLvq/hUSqUc5Lzo4ry4f0i.', 'null ', '-', 'null', 'samsulibs30@gmail.com', 'null', 'null', 4, 'aktif', 1, 1619413253),
(38, 'default.png', 'null', 'qwe', '$2y$10$wnE9.hhkRBcJRI44RfmdEeFqFUPks.7.qKZx2.2z2nv4K4X9uI6y.', 'null ', '-', 'null', 'samsulalyusa@gmail.com', 'null', 'null', 4, 'aktif', 1, 1619414426);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_user_role` int(11) NOT NULL,
  `nama_role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_user_role`, `nama_role`) VALUES
(1, 'super admin'),
(2, 'admin'),
(3, 'guru'),
(4, 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id_token` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id_token`, `username`, `email`, `token`, `date_created`) VALUES
(31, 'zxc', 'samsuldar0130@gmail.com', 'RCA04AfldI412HZQ6CBrwl4vVlsAbmBnYHh0ha/9GPE=', 1619413190),
(34, 'sam', 'samsulalyusa@gmail.com', 'NjwWqmMyq8xROiBM0dK9zs/mmuqaobQzq/RicPR/PQs=', 1619477906),
(35, '', 'samsulalyusa@gmail.com', 'Y3hqYzoI0NtASYLadd61T599DMAVp3F4Ji+yXuLPaik=', 1619478172),
(36, '', 'samsulalyusa@gmail.com', '/21IoKDc9GHsocmnrDXaJ+EHP33ZVYW2TdARPKSNZnA=', 1619478226);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `detail_ulasan`
--
ALTER TABLE `detail_ulasan`
  ADD PRIMARY KEY (`id_detail_ulasan`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_user_role`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_ulasan`
--
ALTER TABLE `detail_ulasan`
  MODIFY `id_detail_ulasan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_user_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
