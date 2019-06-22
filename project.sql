-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2019 at 05:51 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `angkatan`
--

CREATE TABLE `angkatan` (
  `id_angkatan` int(2) NOT NULL,
  `angkatan` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angkatan`
--

INSERT INTO `angkatan` (`id_angkatan`, `angkatan`) VALUES
(12, 2012),
(13, 2013),
(14, 2014),
(15, 2015),
(16, 2016),
(17, 2017),
(18, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `dataadmin`
--

CREATE TABLE `dataadmin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataadmin`
--

INSERT INTO `dataadmin` (`id_admin`, `username`, `pass`) VALUES
(1, 'admin', '123'),
(2, 'petugas', '123');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(3) NOT NULL,
  `jurusan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `jurusan`) VALUES
(121, 'Teknik Kimia'),
(122, 'Teknik Industri'),
(123, 'Teknik Informatika'),
(124, 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `pilih`
--

CREATE TABLE `pilih` (
  `id_pilih` int(11) NOT NULL,
  `id_voter` int(11) DEFAULT NULL,
  `id_calon` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilih`
--

INSERT INTO `pilih` (`id_pilih`, `id_voter`, `id_calon`) VALUES
(1, 1, 1),
(26, 4, 2),
(27, 3, 1),
(28, 2, 1),
(29, 5, 1),
(30, 6, 1),
(31, 7, 1),
(32, 7, 2),
(33, 27, 2),
(34, 23, 2),
(35, 28, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vcalon`
--

CREATE TABLE `vcalon` (
  `id_calon` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nim` char(4) DEFAULT NULL,
  `id_jurusan` int(3) DEFAULT NULL,
  `id_angkatan` int(2) DEFAULT NULL,
  `ipk` char(4) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vcalon`
--

INSERT INTO `vcalon` (`id_calon`, `nama`, `nim`, `id_jurusan`, `id_angkatan`, `ipk`, `foto`) VALUES
(1, 'Nurhadi', '0100', 123, 17, '4,00', 'laki.jpg'),
(2, 'Muhidin', '0100', 122, 17, '4,00', 'laki.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `id_voter` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nim` char(4) DEFAULT NULL,
  `id_jurusan` int(3) DEFAULT NULL,
  `id_angkatan` int(2) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`id_voter`, `nama`, `nim`, `id_jurusan`, `id_angkatan`, `pass`, `foto`) VALUES
(1, 'Ardit', '0090', 123, 17, '123', 'laki.jpg'),
(2, 'Nurul', '0023', 123, 17, '123', 'cewek.jpeg'),
(3, 'Haris', '0040', 123, 17, '123', 'laki.jpg'),
(4, 'Eko', '0001', 123, 17, '123', 'laki.jpg'),
(5, 'Adit', '0011', 123, 17, '123', 'laki.jpg'),
(6, 'Ilham Spasojefic', '0050', 121, 18, '123', '5cc6df833dfa6.jpg'),
(7, 'Dany', '0099', 122, 16, '123', 'laki.jpg'),
(8, 'Sani', '0040', 124, 17, '123', 'laki.jpg'),
(9, 'Doni', '0011', 122, 17, '123', 'laki.jpg'),
(10, 'Budi', '0090', 123, 15, '123', 'laki.jpg'),
(11, 'ayu', '0002', 122, 12, '123', 'cewek.jpg'),
(12, 'sinta', '0003', 121, 12, '123', 'cewek.jpg'),
(13, 'santi', '0004', 124, 12, '123', 'cewek.jpg'),
(14, 'fifi', '0005', 123, 18, '123', 'cewek.jpg'),
(15, 'pita', '0006', 123, 13, '123', 'cewek.jpg'),
(16, 'dita', '0006', 121, 16, '123', 'cewek.jpg'),
(17, 'lita', '0006', 121, 14, '123', 'cewek.jpg'),
(18, 'lina', '0007', 124, 16, '123', 'cewek.jpg'),
(19, 'diyah', '0021', 123, 17, '123', 'cewek.jpg'),
(20, 'nagita', '0007', 124, 16, '123', 'cewek.jpg'),
(21, 'tina', '0008', 121, 17, '123', 'cewek.jpg'),
(22, 'nana', '0009', 124, 12, '123', 'cewek.jpg'),
(23, 'aurora', '0010', 123, 13, '123', 'cewek.jpg'),
(24, 'guinevere', '0012', 123, 13, '123', 'cewek.jpg'),
(25, 'esmeralda', '0014', 124, 16, '123', 'cewek.jpg'),
(26, 'harith', '0014', 122, 14, '123', 'cewek.jpg'),
(27, 'eudora', '0015', 122, 12, '123', 'cewek.jpg'),
(28, 'lapu-lapu', '0016', 124, 18, '123', 'laki.jpg'),
(29, 'balmond', '0017', 124, 16, '123', 'laki.jpg'),
(30, 'tigreal', '0018', 121, 13, '123', 'laki.jpg'),
(31, 'ant-man', '0019', 124, 12, '123', 'laki.jpg'),
(32, 'thor', '0022', 122, 14, '123', 'laki.jpg'),
(33, 'hulk', '0023', 123, 12, '123', 'laki.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angkatan`
--
ALTER TABLE `angkatan`
  ADD PRIMARY KEY (`id_angkatan`);

--
-- Indexes for table `dataadmin`
--
ALTER TABLE `dataadmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `pilih`
--
ALTER TABLE `pilih`
  ADD PRIMARY KEY (`id_pilih`),
  ADD KEY `fkid_voter` (`id_voter`),
  ADD KEY `fkid_calon` (`id_calon`);

--
-- Indexes for table `vcalon`
--
ALTER TABLE `vcalon`
  ADD PRIMARY KEY (`id_calon`),
  ADD KEY `fk_id_jurusan` (`id_jurusan`),
  ADD KEY `fk_id_angkatan` (`id_angkatan`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`id_voter`),
  ADD KEY `fkid_jurusan` (`id_jurusan`),
  ADD KEY `fkid_angkatan` (`id_angkatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataadmin`
--
ALTER TABLE `dataadmin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pilih`
--
ALTER TABLE `pilih`
  MODIFY `id_pilih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `vcalon`
--
ALTER TABLE `vcalon`
  MODIFY `id_calon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `id_voter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pilih`
--
ALTER TABLE `pilih`
  ADD CONSTRAINT `fkid_calon` FOREIGN KEY (`id_calon`) REFERENCES `vcalon` (`id_calon`),
  ADD CONSTRAINT `fkid_voter` FOREIGN KEY (`id_voter`) REFERENCES `voter` (`id_voter`);

--
-- Constraints for table `vcalon`
--
ALTER TABLE `vcalon`
  ADD CONSTRAINT `fk_id_angkatan` FOREIGN KEY (`id_angkatan`) REFERENCES `angkatan` (`id_angkatan`),
  ADD CONSTRAINT `fk_id_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);

--
-- Constraints for table `voter`
--
ALTER TABLE `voter`
  ADD CONSTRAINT `fkid_angkatan` FOREIGN KEY (`id_angkatan`) REFERENCES `angkatan` (`id_angkatan`),
  ADD CONSTRAINT `fkid_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
