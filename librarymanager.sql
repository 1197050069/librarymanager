-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 03:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarymanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bukukembali`
--

CREATE TABLE `tb_bukukembali` (
  `idpinjam` varchar(8) NOT NULL,
  `judulbuku` varchar(75) NOT NULL,
  `kategori` varchar(75) NOT NULL,
  `jumlah` varchar(2) NOT NULL,
  `namapeminjam` varchar(75) NOT NULL,
  `kelas` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `notlp` varchar(13) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglkembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_bukukembali`
--

INSERT INTO `tb_bukukembali` (`idpinjam`, `judulbuku`, `kategori`, `jumlah`, `namapeminjam`, `kelas`, `email`, `notlp`, `tglpinjam`, `tglkembali`) VALUES
('A1022302', 'Budi Daya Kacang Panjang', 'Non-Fiksi', '1', 'Nurwita Arini', 'XII RPL 1', 'aririn@gmail.com', '089512348765', '2023-01-23', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `idpinjam` varchar(8) NOT NULL,
  `judulbuku` varchar(75) NOT NULL,
  `kategori` varchar(75) NOT NULL,
  `jumlah` varchar(2) NOT NULL,
  `namapeminjam` varchar(75) NOT NULL,
  `kelas` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `notlp` varchar(13) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglkembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pinjam`
--

INSERT INTO `tb_pinjam` (`idpinjam`, `judulbuku`, `kategori`, `jumlah`, `namapeminjam`, `kelas`, `email`, `notlp`, `tglpinjam`, `tglkembali`) VALUES
('A1021386', 'Kaya Miskin Sama Saja', 'Novel', '1', 'Sisnaya Salsabila', 'XII RPL 2', 'nayanayy@gmail.com', '081234348765', '2023-01-13', '0000-00-00'),
('A1021690', 'Laporan PKL Irawati', 'Laporan PKL', '1', 'Irawati', 'XII RPL 2', 'iraraaa24@gmail.com', '089999123455', '2023-01-16', '0000-00-00'),
('A1022302', 'Budi Daya Kacang Panjang', 'Non-Fiksi', '1', 'Nurwita Arini', 'XII RPL 1', 'aririn@gmail.com', '089512348765', '2023-01-23', '0000-00-00'),
('A1040119', 'Azira Gabut', 'Novel', '2', 'Azira Setya Nanda Putri', 'XII RPL 1', 'azzira@gmail.com', '083887654321', '2023-01-19', '0000-00-00'),
('A1120301', 'JK in Wonderland', 'Novel', '1', 'Alicia Chairunisyah', 'XII RPL 1', 'professional.lice@gmail.com', '083818358955', '2023-01-17', '2023-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`) VALUES
('matilampu', 'bobonyenyak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bukukembali`
--
ALTER TABLE `tb_bukukembali`
  ADD PRIMARY KEY (`idpinjam`);

--
-- Indexes for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`idpinjam`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
