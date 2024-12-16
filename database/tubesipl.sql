-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Dec 16, 2024 at 03:03 PM
=======
-- Generation Time: Dec 11, 2024 at 01:38 AM
>>>>>>> parent of 5bd6cf0 (update database karyawan)
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: tubesipl
--

-- --------------------------------------------------------

--
-- Table structure for table admin
--

CREATE TABLE admin (
  id int(11) NOT NULL,
  username varchar(255) NOT NULL,
  password varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table admin
--

INSERT INTO admin (id, username, password) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table karyawan
--

CREATE TABLE karyawan (
  id_karyawan int(11) NOT NULL,
  username varchar(50) NOT NULL,
  password varchar(50) NOT NULL,
  nama varchar(255) NOT NULL,
  tmp_tgl_lahir varchar(255) NOT NULL,
  jenkel varchar(255) NOT NULL,
  agama varchar(255) NOT NULL,
  alamat text NOT NULL,
  no_tel varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table karyawan
--

INSERT INTO karyawan (id_karyawan, username, password, nama, tmp_tgl_lahir, jenkel, agama, alamat, no_tel) VALUES
(1, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'nama karyawan', 'tempat tanggal lahir', 'jenis kelamin', 'agama', 'alamat', 'nomor telepon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table admin
--
ALTER TABLE admin
  ADD PRIMARY KEY (id);

--
-- Indexes for table karyawan
--
ALTER TABLE karyawan
  ADD PRIMARY KEY (id_karyawan);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table admin
--
ALTER TABLE admin
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table karyawan
--
ALTER TABLE karyawan
  MODIFY id_karyawan int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;