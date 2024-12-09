-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_rainbow_flowers
CREATE DATABASE IF NOT EXISTS `db_rainbow_flowers` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_rainbow_flowers`;

-- Dumping structure for table db_rainbow_flowers.bunga
CREATE TABLE IF NOT EXISTS `bunga` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_bunga` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `gambar` varchar(200) DEFAULT 'img/product/1.png',
  `harga` varchar(100) DEFAULT '0',
  `diskon` varchar(100) NOT NULL DEFAULT '0',
  `rating` varchar(100) NOT NULL DEFAULT '0',
  `deskripsi` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_rainbow_flowers.bunga: ~6 rows (approximately)
DELETE FROM `bunga`;
INSERT INTO `bunga` (`id`, `nama_bunga`, `gambar`, `harga`, `diskon`, `rating`, `deskripsi`) VALUES
	(1, 'Adenium', 'img/product/1.png', '100000', '1000', '2', 'Bunga ini memiliki nama lain bunga Kamboja. Bunga ini memiliki banyak sekali variasi warna mulai dari merah, putih, merah-piutih, kuning, sampai dengan hitam.'),
	(2, 'Alamanda', 'img/product/2.png', '23000', '2000', '3', 'Bunga yang memiliki nama lain bunga terompet emas ini memiliki warna merah, jingga atau ungu yang sangat cantik.'),
	(3, 'Cempaka', 'img/product/3.png', '300000', '34000', '4', 'Bunga ini memiliki banyak variasi. Di Sunda bunga ini sering disebut dengan campaka.'),
	(4, 'Dahlia', 'img/product/10.png', '50000', '2000', '4', 'Bunga dahlia merupakan jenis tanaman yang adaptif sehingga bisa hidup di berbagai kondisi lingkungan.\r\n\r\nMaka, meski bunga ini berasal dari Meksiko, tetapi bunga ini mudah ditanam di daerah yang mempunyai iklim tropis seperti Indonesia.\r\n\r\nBunga dahlia merupakan anggota keluarga Asteraceae. Asteraceat mencakup tanaman dikotil seperti bunga matahari, chrysanthemum, dan bunga aster.\r\n\r\nDi dunia jumlah bunga dahlia diprediksi lebih dari 42 spesies, termasuk jenis bunga hybrid.\r\n\r\nBunga ini selain digunakan sebagai lambang cinta, juga bisa digunakan sebagai penghias taman yang menawan.\r\n\r\nWarna bunga ini bermacam-macam mulai kuning, merah muda, sampai dengan ungu.'),
	(5, 'Flamboyan', 'img/product/4.png', '312333', '6533', '1', 'Bunga ini memiliki nama lain pohon semarak api. Hal ini dikarenakan bunga ini memiliki batang yang besar dengan bunga berwarna merah menyala.\r\n\r\nKetika batangnya mencapai ketinggian 9 – 15 meter, flamboyan akan tumbuh seperti payung.\r\n\r\nMeski tanaman ini berasal dari Madagaskar, tetapi dahulu tanaman ini banyak dibudidayakan di daerah Betawi.\r\n\r\nHal ini dikarenakan tanaman ini bisa menyerap polusi udara. Di alam liar, tanaman ini mulai sulit ditemukan karena tanaman ini banyak diburu untuk diambil kayunya.'),
	(6, 'Kenanga', 'img/product/5.png', '623213', '43000', '5', 'Selain dibuat untuk bahan baku parfum. Bunga kenanga sering digunakan dalam berbagai upacara adat di Indonesia.\r\n\r\nBunga ini hadir dalam upacara daur hidup orang Jawa mulai dari selamat kelahiran sampai dengan ziarah kubur.');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
