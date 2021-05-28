-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 16 Apr 2021 pada 07.08
-- Versi Server: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technofest`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `TB_AGENDA`
--

CREATE TABLE `TB_AGENDA` (
  `ID_AGENDA` varchar(10) NOT NULL,
  `ID_SEMESTER` int(10) NOT NULL,
  `JUDUL` varchar(50) DEFAULT NULL,
  `POSTER` varchar(200) DEFAULT NULL,
  `DRAFT` tinyint(1) NOT NULL DEFAULT '0',
  `TANGGAL` varchar(20) DEFAULT NULL,
  `WAKTU` varchar(20) DEFAULT NULL,
  `SEMINAR` tinyint(1) DEFAULT '0',
  `REGISTER` tinyint(1) DEFAULT '0',
  `BERBAYAR` tinyint(1) DEFAULT '0',
  `FEE` int(11) DEFAULT NULL,
  `MEDIA` text,
  `KETERANGAN` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `TB_AGENDA`
--

INSERT INTO `TB_AGENDA` (`ID_AGENDA`, `ID_SEMESTER`, `JUDUL`, `POSTER`, `DRAFT`, `TANGGAL`, `WAKTU`, `SEMINAR`, `REGISTER`, `BERBAYAR`, `FEE`, `MEDIA`, `KETERANGAN`) VALUES
('CPR_PTO9A', 1, 'CEO Program 2021', 'poster_CPR_PTO9A.png', 0, '2021-01-21', '13:30 - 16:00', 1, 1, 0, NULL, 'Zoom', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Halo Eagles, udah pada bikin agenda belum? ????</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Daripada bosen di rumah, yuk join CEO Program 2021!</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Tahun ini CEO program mengusung tema Platform for collaboration loh!</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Dalam acara ini kalian akan diberikan materi seputar seluk beluk kolaborasi</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Selain itu kalian juga akan diberi pemahaman soal pentingnya sebuah kolaborasi</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Selain dapat ilmu, kalian juga dapat sertifikat gratis loh!</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Mending catat dulu deh tanggalnya:</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">???? Kamis, 21 Januari 2020</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">? 13.30 - 16.00</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Jangan lupa daftarkan dirimu ke http://bit.ly/CEOprogram2021 &amp; Kunjungi http://technofest.stiki.ac.id ya!</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Daftar sekarang dan catat di kalender biar kamu ga ketinggalan acara penting ini ya!</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">See you ????????</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/technofest/\">#TECHNOFEST</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;</span><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/stikitechnofest/\">#STIKITECHNOFEST</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;</span><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/technofest2021/\">#TECHNOFEST2021</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;</span><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/stiki/\">#STIKI</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;</span><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/stikimalang/\">#STIKIMALANG</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;</span><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/webinar/\">#WEBINAR</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;</span><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/ceoprogram/\">#CEOPROGRAM</a></p>\r\n</body>\r\n</html>'),
('GMD_OF4BT', 1, 'Game Development: Promising Side Quest of Learning', 'poster_GMD_OF4BT.png', 0, '2021-01-20', '09:00 - 11:00', 1, 1, 0, NULL, 'Zoom App', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Hello eagles, apa kabarnya nih yang masih #dirumahaja ? ????</p>\r\n<p>&nbsp;</p>\r\n<p>Kali ini STIKI Malang menghadirkan webinar dengan judul \"Game Development : Promising Side Quest of Learning\".</p>\r\n<p>&nbsp;</p>\r\n<p>Kalo kalian anak TI pasti excited nih soal game. Tapi bukan cuma itu aja, kali ini pemateri akan cerita bagaimana mereka mengembangkan game dan juga kalian bakal belajar bagaimana trik dan tips mengembangkan game dengan mudah dan cepat.</p>\r\n<p>&nbsp;</p>\r\n<p>Penasaran?</p>\r\n<p>Catat aja dulu tanggalnya</p>\r\n<p>???? Rabu, 20 Januari 2021</p>\r\n<p>? 9.00 - 10.00 WIB</p>\r\n<p>&nbsp;</p>\r\n<p>Jangan lupa daftarkan dirimu ke link berikut :</p>\r\n<p>https://s.id/DevelopmentStory</p>\r\n<p>&nbsp;</p>\r\n<p>Jangan lupa follow instagram @stiki.technofest &amp; kunjungi https://technofest.stiki.ac.id untuk melihat karya-karya terbaik mahasiswa STIKI ya.</p>\r\n<p>&nbsp;</p>\r\n<p>Acara ini GRATIS dan kalian juga akan mendapatkan ilmu plus e-sertifikat langsung loh.</p>\r\n<p>&nbsp;</p>\r\n<p>Jangan sampai kelewatan yah! See ya ????</p>\r\n<p>&nbsp;</p>\r\n<p>#TECHNOFEST #STIKITECHNOFEST #TECHNOFEST2021 #STIKI #STIKIMALANG #WEBINAR #WORKSHOPSTIKI</p>\r\n<p>1 hari</p>\r\n</body>\r\n</html>'),
('LWC_ERHRK', 1, 'Low Code FastAPI Development with Zaruba', 'poster_LWC_ERHRK.png', 0, '2021-01-20', '19:00 - 21:00', 1, 1, 0, NULL, 'Zoom', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Halo Eagles! ????</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Mana nih yang pengen jadi programmer handal mendunia? ????</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Kalo kamu orangnya, jangan sampai ketinggalan acara webinar kita satu ini \"Low Code FastAPI Development with Zaruba\" ????</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Wajib banget buat kamu ikut acara ini! Karena nantinya kalian akan dikenalkan berbagai tool yang mempermudah pekerjaan seorang programmer agar membuat program yang presisi. Kalo udah presisi kenapa? Ini tentu akan membuat developer fokus ke bussiness logic sehingga aplikasi yang kamu buat menjadi lebih ciamik.</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Gimana yakin mau dilewatin? ????</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Catet tanggalnya dulu deh</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">???? Rabu, 20 Januari 2021</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">? 19.00 - 21.00 WIB</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Dan daftarkan dirimu di link ini</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">https://s.id/zaruba</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Jangan lupa follow instagram&nbsp;</span><a class=\"notranslate\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/stiki.technofest/\">@stiki.technofest</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;&amp; kunjungi https://technofest.stiki.ac.id untuk melihat karya-karya terbaik mahasiswa STIKI ya.</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Kalian ga cuma dapat ilmu loh, tapi juga e-sertifikat gratis yang tentu bermanfaat buat masa depan yang gemilang.</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Jangan sampai ketinggalan ya, dan sampai jumpa nanti ????</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/technofest/\">#TECHNOFEST</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;</span><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/stikitechnofest/\">#STIKITECHNOFEST</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;</span><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/technofest2021/\">#TECHNOFEST2021</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;</span><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/stiki/\">#STIKI</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;</span><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/stikimalang/\">#STIKIMALANG</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;</span><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/webinar/\">#WEBINAR</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;</span><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/workshopstiki/\">#WORKSHOPSTIKI</a></p>\r\n</body>\r\n</html>'),
('MMB_7NBDJ', 2, 'Membedah Framework PHP Menjadi Topik Penelitian', 'poster_MMB_7NBDJ.jpeg', 0, '2021-03-26', '11:28 - 13:28', 1, 1, 0, NULL, 'Zoom Meeting Link', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Ini adalah acara workshop</p>\r\n</body>\r\n</html>'),
('MMB_MWKJG', 1, 'Membedah Framework PHP Menjadi Topik Penelitian', NULL, 0, '2021-01-20', '12:30 - 15:00', 1, 1, 0, NULL, 'Zoom', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Yang udah mulai bosan di rumah angkat tangan? ????</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Wah jangan bosan yaa karena&nbsp;</span><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/dirumahaja/\">#dirumahaja</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;dijamin bikin kamu terhindar dari virus corona.</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Nah daripada gabut, nganggur di rumah, kamu bisa banget nih join acara kita \"Membedah Framework PHP Menjadi Topik Penelitian Skripsi\"</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Acara ini ga cuma buat yang mau skripsian aja loh. Kamu yang pengen nulis dan meneliti juga bisa gabung ke acara ini. Karena kamu akan diajarkan bagaimana cara mencari topik penelitian dari sebuah framework php. Gimana, faedah banget kaan? ????</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Makanya catat tanggalnya yah</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">???? Rabu, 20 Januari 2021</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">? 13.30 - 15.00</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Dan daftarkan dirimu ke link di bawah ini dulu</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">https://s.id/BedahFrameworkPHP</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Jangan lupa follow instagram&nbsp;</span><a class=\"notranslate\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/stiki.technofest/\">@stiki.technofest</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;&amp; kunjungi https://technofest.stiki.ac.id untuk melihat karya-karya terbaik mahasiswa STIKI ya.</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Acara ini GRATIS dan kalian juga akan mendapatkan ilmu plus e-sertifikat langsung loh.</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Lalu jangan lupa juga bikin reminder di hpmu dan join sama kita.</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Supaya gak ketinggalan yaa, See you ????</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/technofest/\">#TECHNOFEST</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;</span><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/stikitechnofest/\">#STIKITECHNOFEST</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;</span><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/technofest2021/\">#TECHNOFEST2021</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;</span><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/stiki/\">#STIKI</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;</span><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/stikimalang/\">#STIKIMALANG</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;</span><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/webinar/\">#WEBINAR</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;</span><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/workshopstiki/\">#WORKSHOPSTIKI</a></p>\r\n</body>\r\n</html>'),
('MMB_QRFBA', 1, 'Membangun StartUp, ternyata gk susah Lho!', 'poster_MMB_QRFBA.png', 0, '2021-01-22', '13:30 - 15:00', 1, 1, 0, NULL, 'Zoom', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Halo apakabar nih?</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Semoga kalian tetap sehat dan nggak lupa menjaga protokol kesehatan dan&nbsp;</span><a class=\" xil3i\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; overflow-wrap: break-word; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/explore/tags/tetapdirumah/\">#tetapdirumah</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;yaa selama PSBB ini ????</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Udah pada tau belum sih kalau STIKI Malang punya kegiatan seru yang namanya Technofest?</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Nah, technofest ini merupakan sebuah persembahan khusus dari para mahasiswa prodi Teknik Informatika, Sistem Informasi, dan Manajemen Informatika STIKI Malang.</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Persembahan khusus gimana?</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Jadi para mahasiswa akan memamerkan hasil karya tugas akhir mata kuliah, proyek personal, material lomba dan berbagai produk kece lainnya dalam Technofest 2021 ini!</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Terus benefitnya apa? Jadi kalian bisa banget nih berbagai produk baru sekaligus sharing langsung dengan para pembuatnya loh. Seru kan?</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Selain itu ada juga nih Charity Session yakni seminar bertajuk \"Membangun Start Up Ternyata ga susah lho!\" Yang digelar secara online.</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Pematerinya ada Mahdi Mashroni Rizal, S.Kom., M.BA seorang Enterpreneur dan juga dosen STIKI Malang sekaligus ka Inbis, Bagus Kristomoyo, S.Kom., M.MT yang akan mengupas tuntas seluk beluk mendirikan startup. Wah coba angkat tangan kalian mana yang pengen bikin startup sendiri hayo? Acara ini terbuka untuk umum juga ????</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Catat dulu tanggalnya ya</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">???? 22 Januari 2021</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">?13.30 - 15.00 WIB</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Dan daftarkan dirimu pada kegiatan charity ini ke :</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">https://s.id/CharityWebinar</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Jangan lupa follow instagram&nbsp;</span><a class=\"notranslate\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; vertical-align: baseline; text-decoration-line: none; background-color: #ffffff;\" tabindex=\"0\" href=\"https://www.instagram.com/stiki.technofest/\">@stiki.technofest</a><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">&nbsp;&amp; kunjungi https://technofest.stiki.ac.id untuk melihat karya-karya terbaik mahasiswa STIKI ya.</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Jangan lupa berikan donasi terbaikmu untuk acara ini yah! Nantinya donasi ini akan diberikan bagi masyarakat yang membutuhkan dan terdampak corona.</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Sampai ketemu di technofest 2021 ya ????????</span></p>\r\n</body>\r\n</html>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `TB_AUTH`
--

CREATE TABLE `TB_AUTH` (
  `KODE_USER` varchar(15) NOT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `PASSWORD` varchar(200) DEFAULT NULL,
  `ASAL_KAMPUS` text,
  `HP` varchar(30) NOT NULL,
  `ROLE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `TB_AUTH`
--

INSERT INTO `TB_AUTH` (`KODE_USER`, `NAMA`, `EMAIL`, `PASSWORD`, `ASAL_KAMPUS`, `HP`, `ROLE`) VALUES
('USER_0076f', 'AGUS ALFREDO', '171111058@mhs.stiki.ac.id', '$2y$10$f.wMfmbOht37P8JTjfps6ut7jhkb0goE86jLEwvvhGeLXMrkNdVwm', 'STIKI MALANG', '083159180809', 1),
('USER_03151', 'RICKY ALVIANTO', '191221021@mhs.stiki.ac.id', '$2y$10$FjMwCZvfXBGCElyfU.FaXuDUXC6nIeph.Z96AhPo/g9u4dn/7xyVu', 'STIKI Malang', '0895335727679', 1),
('USER_0834d', 'Varell Fauzan Widyatamaka', '171111031@mhs.stiki.ac.is', '$2y$10$zI5dNluoJ9qSAWAKeGmAy.GK.38OMq4t1GoT47k5eE7QEtp4IZT7K', 'Stiki', '085608088591', 1),
('USER_084d4', 'Wahyu Dwi Agung Kuncoro', '181221037@mhs.stiki.ac.id', '$2y$10$wsGobZeGxwYJBfMndEGrAOFMU48KqeIyiYIHy5vYrJzWw8AetTSTq', 'STIKI Malang', '085227765501', 1),
('USER_12e60', 'Rissa Prita Natalia', 'rissa303@gmail.com', '$2y$10$Tn0EdC6J5dscRHAYJnNAC.IA7VfgqzcQcwPrMmf7iR32.o0t6ze22', 'Stiki Malang', '089697111892', 1),
('USER_1b3e3', 'Sherly Brelinda Harisna Nova', '17111148@mhs.stiki.ac.id', '$2y$10$ZPFML20Nc4pq/zZe0e9aEethjrKVow9HZxUgzZzWpUluv4yhKYHBS', 'STIKI MALANG', '081337680154', 1),
('USER_31183', 'NADIA MEGA HAPSARI', '202116003@mhs.stiki.ac.id', '$2y$10$oh7.gLyu6rR48rwAbWWRjOoVwoecj5LiGw6whHcg8./TWdsBnenzm', 'STIKI MALANG', '089686424457', 1),
('USER_3ba05', 'Anisa\' Shihhatin Sholihah', '161116038@mhs.stiki.ac.id', '$2y$10$QVoSaiRiANJC7cj2tEkUNOybStiMP1iEoDjD.C8ytDC60pH4dpUui', 'STIKI Malang', '085850666927', 1),
('USER_47c4d', 'Asdikin', '171116007@mhs.stiki.ac.id', '$2y$10$51GmZz3rjCfUyxE8ZJftieCNm8k2qYM2vPR4m5Sx2tVvJTOi7Slr.', 'STIKI Malang', '05646429958', 1),
('USER_486a0', 'Hans Felix Tjahyono', '202111007@mhs.stiki.ac.id', '$2y$10$QYZvb68e5wzW/cCOgPbBwOIdhO8LsOKcK.fXNeQkV5c140oNz/syi', 'STIKI', '081326078930', 1),
('USER_4dca5', 'ARGA CHANDRA FIRMANSYAH', 'argachandrafirmansyah@gmail.co', '$2y$10$sMCimOcwZ7LghYlf../5w.iuOlmz5.r6g7ua8/BvDTwd1AzyKfJkK', 'Stiki', '085934350515', 1),
('USER_54e67', 'BAGUS RASYID RAMADHANI NUGRAHA', '201111031@mhs.stiki.ac.id', '$2y$10$U2ozmUZdGNKow0gfD5jCPOWCYQXzMHBYZamJ9jGenPQLcppGLjWLi', 'STIKI MALANG', '082141988172', 1),
('USER_56378', 'axel ishack holatila', 'axelishack100@gmail.com', '$2y$10$Eba7hFYeJRjnE.uXuy6Z6OOVNPP3mEUy0fAkhiC58gWhhshqqvWQi', 'STIKI MALANG', '089679891182', 1),
('USER_56387', 'Rissa prita natalia', 'rissaprita303@gmail.com', '$2y$10$1y3R03S3UZ9wb7azFQJY/uvmsYRVVN8CyVssIjmA.YvekHyeNCdGC', 'Stiki malang', '089697111892', 1),
('USER_6ef1d', 'ARGA CHANDRA FIRMANSYAH', 'argachandrafirmansyah@gmail.co', '$2y$10$m6YNgfTMrltbfhe0zbFuL.O8SBrPrw7ryYESXHFBChat2Gr3e782.', 'Stiki', '085934350515', 1),
('USER_7c3de', 'Muhammad Rafli Putranto', '191131001@mhs.stiki.ac.id', '$2y$10$n/cdxwLClHg96Jz6DfUshOkNbKCT7hDanOXOnj3sX/dHUs8xRuYea', 'STIKI Malang', '089652697399', 1),
('USER_82b66', 'Victoria Luna Terang Lotussa', '171111047@mhs.stiki.ac.id', '$2y$10$MwxTyiWRiAqYWO786AyZOuvhObHwyUx4lDBppSTxvbcs6DmHVnVMu', 'STIKI Malang', '087798252171', 1),
('USER_86e12', 'Jemmy Yulianto Gunawan', 'jemmyyulianto73@gmail.com', '$2y$10$9Vm1w1.JLKQ.AGipoPtDZu1oIwvJAWDzT1PnarFytHBDlLrxuCcAW', 'STIKI Malang', '082245834461', 1),
('USER_88132', 'Koordinator 1', 'koordinator@techno.com', '$2y$10$AVn5iVJ3WD7mRz1ZXGhrWuViNqSwBtvczXzoKOrL7dwqeFjVAuQja', NULL, '', 2),
('USER_9308a', 'Teofilus Jodi Saputra', '171111008@mhs.stiki.ac.id', '$2y$10$yCgRo7knkAjU.hx7y3NAI.5jZg99bWv6GFeCaQ9wu2OOkQAT4HdtC', 'STIKI Malang', '089605319704', 1),
('USER_9c79f', 'admin', 'admin@gmail.com', '$2y$10$sQn6n7pDKznTazeUSHksyOl0Efzeza9MSu2XA/s3lz.IDBxeJK8iS', 'STIKI', '085', 1),
('USER_a287c', 'Robbie indra kusuma', '202111018@mhs.stiki.ac.id', '$2y$10$uLx8i6SKknWL4IkJLmm3CeglXGpd5ysCziWdM7DmPJumsUxz5xWlG', 'Stiki malamg', '08883819390', 1),
('USER_a40c6', 'ARGA CHANDRA FIRMANSYAH', '201111041@mhs.stiki.ac.id', '$2y$10$N7IQ2.G48.fdWBJzEgmuJOWm8qxbm3wcTW5FNfrhrmCOnST4mRFIu', 'Stiki', '085934350515', 1),
('USER_a8a92', 'Adnan Zulkarnain', 'adnan.zulkarnain@stiki.ac.id', '$2y$10$/ZnYcchjdorPL6ZMvX8Rouc4Jz1MIkvA0SYbhgr1H43V/Vt0hdGWO', 'STIKI Malang', '083834653944', 1),
('USER_af441', 'ARGA CHANDRA FIRMANSYAH', 'argachandrafirmansyah@gmail.co', '$2y$10$kn9kmRwGwrARsLd8QZaMoeaelPEdJBLRdJKZLqOhNKf8Czt2dNefy', 'Stiki', '085934350515', 1),
('USER_b6bf1', 'Qori\' Hidayatulloh', '171111069@mhs.stiki.ac.id', '$2y$10$buln7RQDNtnN4vFZE5I6UupEM.oQEg755Olxl6YnX0Cs3WdaNNeZK', 'STIKI', '08988993655', 1),
('USER_b6f1a', 'Nura Olga Yuanita', '202116011@mhs.stiki.ac.id', '$2y$10$KrJNNqdUxamC7PkEx23MKOIf5K4T89GzUb5XbzIW51ciILa7eM9z6', 'SEKOLAH TINGGI INFORMATIKA DAN KOMPUTER INDONESIA', '081223393328', 1),
('USER_bbc56', 'Aditya Fadjar Grazia', '171111094@mhs.stiki.ac.id', '$2y$10$gG5ZB4I8Nq2PRAQ4gk7kxeAPp9lmHowNSQQF4laRit38p/Qq3FSY6', 'STIKI Malang', '089691217542', 1),
('USER_c73a0', 'Ariq Fernanda Atalantha', 'kzsplashtune@gmail.com', '$2y$10$5KBwVnILhZgyaxeFHBIC3u.9Z7CF.otxtaOFkXa1UVrS57/jUHipy', 'STIKI MALANG', '082354784602', 1),
('USER_d16de', 'Rizky Abdillah', '181111090@mhs.stiki.ac.id', '$2y$10$5IoYewO3EgII8rM9pX2bnu.hfTQykNBPO4acGx2ixqV4TKfAxYpdG', 'STIKI Malang', '082333826883', 1),
('USER_d1ae8', 'Universitas Esa Unggul', 'lulnazi12@gmail.com', '', 'Universitas Esa Unggul', '089653982239', 1),
('USER_d2d92', 'MAIN ADMIN', 'admin@techno.com', '$2y$10$0icCG9IOCWVAH4Vcrvz8QuXF5vg1tAW0mCQBVXm2Ge4trMGvjjMSq', 'STIKI Malang', '', 0),
('USER_e4d56', 'Mahendra', 'mahendradwipurwanto@gmail.com', '$2y$10$P48TJg9CQd6b5UjCGWGXEuELywsZyzI.qPSHpy11oHpkH7JVv2IPa', NULL, '', 1),
('USER_f1428', 'Nayang Albik Bagasseno', '202111012@mhs.stiki.ac.id', '$2y$10$OurbWCv7N7mDKFLQNwqpv.qCZ2R044z2NAN15ll9qB7N9ojW.wDk6', 'STIKI Malang', '081329051213', 1),
('USER_f6933', 'husaini ali wafa', 'husainiagecy@gmail.com', '$2y$10$nEsX1RLL1zRN8fST1oGcDu0qtwxJPY2SomnjftCil8o.FkE9nkPAS', 'Sekolah Tinggi ilmu ', '083139452993', 1),
('USER_ff897', 'husaini aliwafa', 'husainiagency@gmail.com', '$2y$10$dWg9lmypUm0.Pqb09P2LQeLc.Zn1Z.eEwB2IE22VgFaHErUn4wS7u', 'Sekolah Tinggi ilmu ', '082139452992', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `TB_AUTHOR`
--

CREATE TABLE `TB_AUTHOR` (
  `ID_AUTHOR` int(11) NOT NULL,
  `ID_KARYA` varchar(20) DEFAULT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `NRP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `TB_AUTHOR`
--

INSERT INTO `TB_AUTHOR` (`ID_AUTHOR`, `ID_KARYA`, `NAMA`, `NRP`) VALUES
(38, 'PLK_F0OK1', 'ADI PRASETYO', 181116018),
(39, 'PLK_F0OK1', 'MARCHO ARI PRAYOGO', 181116062),
(40, 'PLK_F0OK1', 'NUR MUHAMMAD KHILYATUL AKBAR', 181116063),
(41, 'PLK_93103', 'Mariska Serly Dianti', 181116001),
(42, 'PLK_93103', 'Erlina Novita Putri', 181116002),
(43, 'PLK_93103', 'Shafira Pramatana R.', 181116003),
(44, 'PLK_E0HFX', 'Avilia Nur Istiqomah', 181116014),
(45, 'PLK_E0HFX', 'Ferry Fernando', 181116052),
(46, 'PLK_E0HFX', 'Miftahul Rohmah', 181116064),
(47, 'PRP_26YDK', 'Yessa Aldy Prasetyoko', 181111086),
(48, 'PRP_26YDK', 'Yusan Abid', 181111031),
(49, 'PRP_26YDK', 'Alham', 181111063),
(50, 'PRP_26YDK', 'Fahmi Ramadhani', 181111091),
(51, 'PDM_D12FK', 'Aulia Agustina Anjani', 191111002),
(52, 'PDM_D12FK', 'Muhammad Hasyim Chaidir', 191111006),
(53, 'PDM_D12FK', 'Eka Mei Ayu Widyati P', 191111022),
(54, 'PDM_D12FK', 'Gracia Yoel Christiawan', 191111031),
(55, 'PLK_8G1TS', 'Achmad Buyung Riyadi', 181111002),
(56, 'PLK_8G1TS', 'Syamsul Ma’Arif', 181111004),
(57, 'PLK_8G1TS', 'Setyawan Dwi Pradika', 181111084),
(58, 'PLK_8G1TS', 'Muhammad Ridwan Ilyasa', 181111092),
(59, 'PLK_GP31B', 'Aprilda Peter Sandoria M.', 181111042),
(60, 'PLK_GP31B', 'Zulfi Rizkiawan', 181111058),
(61, 'PLK_GP31B', 'Moh. Bahrul Ulum', 181111082),
(62, 'PLK_GP31B', 'Ramadhan Putra P', 181111093),
(63, 'PML_T7IZU', 'Aditya Gandhi  ', 191111007),
(64, 'PML_T7IZU', 'Maulana Reza R  ', 191111020),
(65, 'PML_T7IZU', 'M.Dwi Prasetyo', 191111025),
(66, 'PML_T7IZU', 'Rafi Fitrah Alamsyah', 191111036),
(67, 'PLK_CJMNG', 'Naufal Dzaki Abrar', 191111012),
(68, 'PLK_CJMNG', 'Muhammad Arif Afandi', 191111045),
(69, 'PLK_CJMNG', 'Guardian Theo Andritya', 191111013),
(70, 'PLK_R849P', 'George Abraham Talakua', 191111024),
(71, 'PLK_R849P', 'Janrel George’gi Fenanlampir ', 191111026),
(72, 'PLK_R849P', 'Ronggo Haikal   ', 191111014),
(73, 'PLK_R849P', 'MHD Husaini   ', 191111037),
(74, 'PNT_HGBLB', 'Greta Septy Purwiantono  ', 191111038),
(75, 'PNT_HGBLB', 'Cendikia Fitri Nuril Halizah   ', 191111039),
(76, 'PNT_HGBLB', 'Muhammad Mutawalli Sya’rawi  ', 191111041),
(77, 'PNT_HGBLB', 'Stephanus Dhimas Hulio', 191111048),
(78, 'STK_UJX35', 'Zakiyatu Rofiqoh  ', 191111009),
(79, 'STK_UJX35', 'Mahesa Rahma Wijaya  ', 191111021),
(80, 'STK_UJX35', 'Fani Oktaf Laurisa  ', 191111050),
(81, 'STK_UJX35', 'Ken Bagus Panuluh Yudha P.', 191111051),
(82, 'PLK_Y3AOO', 'Arnold Catur Wicaksono ', 191111034),
(83, 'PLK_Y3AOO', 'Bagus Pamungkas ', 191111043),
(84, 'PLK_Y3AOO', 'Eko Irdian Adha ', 191111055),
(86, 'PHT_S8BJG', 'Weni Tri Setya', 171111085),
(87, 'BC(_LYAVE', 'Mohammad Nur Ali F  ', 171111027),
(88, 'BC(_LYAVE', 'Rizky Galuh Dewantara ', 171111034),
(89, 'BC(_LYAVE', 'Risky Dewantara', 171111086),
(90, 'BC(_LYAVE', 'Dewi Azizah Satyarini S ', 171111095),
(91, 'BKN_9X23J', 'Ade Ramadhana Pratama ', 171111020),
(92, 'BKN_9X23J', 'Ronald Arrival Fajar  ', 171111076),
(93, 'PLK_N5GX9', 'Cindy Sanobia Majid ', 182111005),
(94, 'PLK_N5GX9', 'Moh Farhan Almuzakki ', 182111033),
(95, 'PLK_N5GX9', 'Sihono  ', 181111085),
(96, 'PLK_MTYN2', 'M Akhyar Nasution ', 191131013),
(97, 'PLK_MTYN2', 'Ferdinar Satria H ', 191131019),
(98, 'PLK_MTYN2', 'Fiki Hermawan', 191131020),
(99, 'PLK_0AIKO', 'Alif Fadil Syaifullah', 191131007),
(100, 'PLK_0AIKO', 'Muhammad Rizqi Hafifi', 191131008),
(101, 'PLK_0AIKO', 'Bramastha Attila Noval', 191131011),
(102, 'PLK_K7N8C', 'Gewa Pratama', 181111051),
(103, 'PLK_K7N8C', 'Ramadhan Ardigumelar', 181111064),
(104, 'PLK_K7N8C', 'Thegar Septiawan Khafli', 181111070),
(105, 'PLK_SMYAT', 'Karina Hanif A', 172111004),
(106, 'PLK_SMYAT', 'Vanda Fransiska A.S', 172111023),
(107, 'PLK_Z49FM', 'Hafedo Rakhmad Prasetyo ', 181111081),
(108, 'PLK_Z49FM', 'El Reginald Caesaro San ', 181111097),
(109, 'PLK_Z49FM', 'Muhammad Al Kausar ', 181111107),
(110, 'PLK_WPOQR', 'Hafedo Rakhmad Prasetyo ', 181111081),
(111, 'PLK_WPOQR', 'El Reginald Caesaro San', 181111097),
(112, 'PLK_WPOQR', 'Muhammad Al Kausar      ', 181111107),
(113, 'PLK_ZDIU8', 'Marselianus Herdian', 171111114),
(114, 'PLK_ZDIU8', 'Robert Mahendra', 171111120),
(115, 'PLK_8J6BC', 'Kristina Ayu Saputri', 182111026),
(116, 'PLK_8J6BC', 'Erni Dwi Lutfiani', 182111064),
(117, 'PLK_GF9B8', 'Achmad Buyung Riyadi ', 181111002),
(118, 'PLK_GF9B8', 'Dedy Hermawan', 181111076),
(119, 'PLK_GF9B8', 'Setyawan Dwi Pradika', 181111084),
(120, 'PLK_MXWJY', 'Irfan ferdianto', 181111021),
(121, 'PLK_MXWJY', 'Ekananda Yanwar Julianto', 181111023),
(122, 'PLK_MXWJY', 'Arifasiwi Milanda Putri', 181111035),
(123, 'PLK_EPJHC', 'Zulfi Rizkiawan  ', 181111058),
(124, 'PLK_EPJHC', 'Bima Reynaldi S  ', 181111078),
(125, 'PLK_EPJHC', 'Aprilda Peter S.M ', 181111043),
(126, 'PLK_95ZWJ', 'Asdikin', 171116007),
(127, 'PLK_95ZWJ', 'Robby Wahyu N.', 171116024),
(128, 'PLK_95ZWJ', 'Taukhid Aji N. ', 171116028),
(129, 'PLK_F49AZ', 'Rheza Chandra K.', 171111019),
(130, 'PLK_Q3PMC', 'Wahyudi Prasetiyo', 191136005),
(131, 'PLK_Q3PMC', 'Chairudian Noor Sya’bani ', 191136006),
(132, 'PLK_XQ7WY', 'Mukhamad Yusron Alamsyah ', 191136001),
(133, 'PLK_XQ7WY', 'Dian Nofika Prasetya A ', 191136002),
(134, 'PLK_45N70', 'Welly Kuswanto ', 181116026),
(135, 'PLK_45N70', 'Rizky Aditama ', 181116020),
(136, 'PLK_3AF5H', 'Anita Yulianti ', 182116017),
(137, 'PLK_3AF5H', 'Husaini Ali Wafa ', 182116015),
(138, 'PLK_FEYYQ', 'Avilia Nur Istiqomah  ', 181116014),
(139, 'PLK_FEYYQ', 'Miftahul Rohmah   ', 181116064),
(140, 'PLK_BOW1L', 'Amanda Febrianti   ', 171116006),
(141, 'PLK_BOW1L', 'Jihan Arifia Ramadhanti ', 171116016),
(142, 'PLK_BOW1L', 'Shaquille Akbar Demsi ', 171116026),
(143, 'PZZ_VFIGS', 'Stefanus Salem', 171111010),
(144, 'PZZ_VFIGS', 'I Made Rama Pratama', 171111043),
(145, 'PZZ_VFIGS', 'Deni Aprianto', 1811112001),
(146, 'NVS_4819U', 'Suhendra', 171111022),
(147, 'NVS_4819U', 'Adam Reynold R.', 172111018),
(148, 'NVS_4819U', 'Rio Agustyas', 192111063),
(149, 'PLK_S5ZQF', 'Mukhamat Andi Setiawan ', 182111050),
(150, 'PLK_S5ZQF', 'Fariz Dwi Setiawan  ', 182111049),
(151, 'PLK_S5ZQF', 'Dianandho YuanggaE  ', 182111067),
(152, 'PLK_TBXZD', 'Wahyudi Prasetyo ', 191136005),
(153, 'PLK_NH4MZ', 'Mariska Serly Dianti ', 181116001),
(154, 'PLK_NH4MZ', 'Shafira Pramatana Rachmadanti ', 181116003),
(155, 'PLK_IW5VL', 'Fery Eka Mahendra ', 171111117),
(156, 'PLK_IW5VL', 'Luqman Al-Hakim', 171111118),
(157, 'MR(_L136J', 'Achmad Aditia', 181221003),
(158, 'MR(_L136J', 'Galih Adhitya K   ', 181221036),
(159, 'MR(_L136J', 'Winsome Syauqi B', 181221043),
(160, 'MR(_L136J', 'Rahmat Hidayat Syukri ', 181221045),
(161, 'CST_J3ERA', 'Yogi Bagus Karunia Pangestu', 181221002),
(162, 'DHR_I8D8K', 'Danu Kuncoro Aji   ', 171111024),
(163, 'DHR_I8D8K', 'Tito Ainurrakhman  ', 171111045),
(164, 'DHR_I8D8K', 'Rheza Chandra Kurniawan ', 171111019),
(165, 'DHR_I8D8K', 'Muhammad Ade Ikhsan ', 171111017),
(166, '-RM_SM9ZU', 'Ade Ramadhana Pratama', 171111020),
(167, '-RM_SM9ZU', 'Panji Iman Baskoro', 171111023),
(168, '-RM_SM9ZU', 'Alfian Azis', 171111101),
(169, '-RM_SM9ZU', 'Nanda Bima Pratama', 171111109),
(170, '-RM_SM9ZU', 'Nadiva Ramandani', 181111009),
(171, '-RM_SM9ZU', 'Ilham Sagita Putra', 181111060),
(172, '-RM_SM9ZU', 'Bima Reynaldi Sumitro', 181111078),
(173, '-RM_SM9ZU', 'Decya Windri Sukmawati Susanto', 181221001),
(174, 'KTM_DCSHD', 'Panji Iman Baskoro ', 171111023),
(175, 'KTM_DCSHD', 'Monica Tifani Zahara ', 171111077),
(176, 'KTM_DCSHD', 'Mahsa Savira B.P ', 171111078),
(177, 'KTM_DCSHD', 'Gellen Surya Dewanta ', 181111045),
(178, 'WBS_VWBGC', 'Panji Iman Baskoro   ', 171111023),
(179, 'WBS_VWBGC', 'Monica Tifani Zahara   ', 171111077),
(180, 'WBS_VWBGC', 'Mahsa Savira Berlianti Putri ', 171111078),
(181, 'WBS_VWBGC', 'Gellen Surya Dewanta   ', 181111045),
(182, 'PLK_0D2P0', 'Victoria Luna Terang Lotussa ', 171111047),
(183, 'PLK_3QQ7A', 'Andrew Nagata ', 191111011),
(189, 'HTN_7OW9Q', 'Risky Feryansyah Pribadi ', 171111040),
(190, 'HTN_7OW9Q', 'Shania Saraswati ', 171111011),
(191, 'HTN_7OW9Q', 'Varell Fauzan Widyatamaka ', 171111031),
(192, 'HTN_7OW9Q', 'Teofilus jodi saputra ', 171111008),
(193, 'HTN_7OW9Q', 'Dana prisma wijayadi ', 171111035),
(194, 'HTN_7OW9Q', 'Trio kurniawan ', 171111042),
(195, 'HTN_7OW9Q', 'Teuku Rionaldi S ', 171111046),
(196, 'HTN_7OW9Q', 'I Made Rama Pratama ', 171111043),
(197, 'HTN_7OW9Q', 'Rheza Chandra Kurniawan ', 171111019),
(198, 'HTN_7OW9Q', 'Muhammad Ade Ikhsan ', 171111017),
(199, 'HTN_7OW9Q', 'Danu Kuncoro Aji ', 171111024),
(200, 'HTN_7OW9Q', 'Yordan Alyudha Ardhanta Putra ', 171111074),
(201, 'HTN_7OW9Q', 'Thomas Kristanto Wijaya ', 171111001),
(202, 'HTN_7OW9Q', 'Satyo Utomo ', 161221013),
(203, 'HTN_7OW9Q', 'Winsome Syauqi B ', 181221043),
(204, 'HTN_7OW9Q', 'Dimas Dwi Priambodo ', 181111036),
(205, 'HTN_7OW9Q', 'Aulia Alka Riza ', 191131012),
(206, 'HTN_7OW9Q', 'Dedy Hermawan ', 181111076),
(207, 'HTN_7OW9Q', 'Ekananda Yanwar Julianto ', 181111023),
(208, 'HTN_7OW9Q', 'Rama Wahyudani Arifin ', 171111092),
(209, 'HTN_7OW9Q', 'Mohammad Fajar ', 171111055),
(210, 'HTN_7OW9Q', 'Setyawan Dwi Pradika ', 181111084),
(211, 'HTN_7OW9Q', 'Mohammad Iqbal Fauzi ', 171111016),
(212, 'HTN_7OW9Q', 'Ricko Hardianto ', 171131011),
(213, 'HTN_7OW9Q', 'Mohammad Andy Sampurno ', 171111052),
(214, 'HTL_YK0QG', 'Aditya Gandhi ', 191111007),
(215, 'PLM_BHX33', 'Mochammad Fachrizal Muzakky ', 191221007),
(216, 'SMB_CGI59', 'Zakiyatu Rofiqoh ', 191111009),
(217, 'PLK_U91D6', 'Vega Yobel Wijaya ', 191111058),
(218, 'SST_8FQ92', 'Alfina Rosyida ', 191221019),
(219, 'WBS_2SDZN', 'Ricky Alvianto ', 191221021),
(220, 'SKR_ZSJKH', 'Bagus Pamungkas ', 191111043),
(221, 'TKB_QV1B7', 'Muhammad Arif Afandi ', 191111045),
(222, 'WBS_FH4B9', 'Ronald Arrival Fajar ', 171111076),
(223, 'WBS_FH4B9', 'Padma Rodha Larasati ', 181221027),
(224, 'WBS_FH4B9', 'Decya windri sukmawati susanto ', 181221001),
(225, 'WBS_FH4B9', 'Stefanus Salem ', 171111010),
(226, 'WBS_FH4B9', 'Ade Ramadhana Pratama ', 171111020),
(227, 'WBS_FH4B9', 'Hermawan Prasetyo ', 171111088),
(228, 'WBS_FH4B9', 'Nadiva Ramandani ', 181111009),
(229, 'WBS_FH4B9', 'Muhammad Fiscal A ', 181221041),
(230, 'WBS_FH4B9', 'Randika M Rizki ', 171111080),
(231, 'WBS_FH4B9', 'Ariya Djayanto ', 171111032),
(232, 'WBS_FH4B9', 'Muhammad Alam Wahyudi ', 171111050),
(233, 'WBS_FH4B9', 'Rusmadeta Okta Nugraha ', 171111057),
(234, 'WBS_FH4B9', 'M Andy Sampurno ', 171111052),
(235, 'RPL_ZQ6L7', 'Muhammad Hasyim Chaidir Ali ', 191111006),
(236, 'WBS_6D98K', 'Teuku Rionaldi S ', 171111046),
(237, 'WBS_6D98K', 'Sutan Arif Pambudi ', 171111068),
(238, 'WBS_6D98K', 'Fikriansyah Dava A ', 171111093),
(239, 'PLK_FTG92', 'Adi Prasetyo        ', 181116018),
(240, 'PLK_FTG92', 'Ayu Setya Ningtyas  ', 181116013),
(241, 'PLK_FTG92', 'Prima Listianti     ', 181116012),
(242, 'VNT_2457M', 'Mariska Serly Dianti ', 181116001),
(243, 'VNT_2457M', 'Erlina Novita Putri ', 181116002),
(244, 'VNT_2457M', 'Shafira Pramatana R ', 181116003),
(245, 'SST_8FAZI', 'AVILIA NUR ISTIQOMAH ', 181116014),
(246, 'SST_8FAZI', 'MARCHO ARI PRAYOGO ', 181116062),
(247, 'SST_8FAZI', 'MIFTAHUL ROHMAH ', 181116064),
(248, 'PLK_DSLTO', 'Yohana Adella ', 181116015),
(249, 'PLK_DSLTO', 'Titania putri Kumala Dewi ', 181116017),
(250, 'TRC_02PYU', 'Miftahul ', 181116069),
(251, 'THS_77AQP', 'Ferry Fernando', 181116052),
(252, 'PNG_V02TS', 'Galih Anggi Satriawan', 161111077),
(253, 'SST_EKLJI', 'Ahmad Masrud Mubarok', 171111112),
(254, 'DHR_QFJQB', 'Danu Kuncoro Aji ', 171111024),
(255, 'DHR_QFJQB', 'Muhammad Ade Ikhsan ', 171111017),
(256, 'DHR_QFJQB', 'Tito Ainurrakhman ', 171111045),
(257, 'DHR_QFJQB', 'Rheza Chandra Kurniawan ', 171111019),
(258, 'BRT_7VSUD', 'Samuel Ardiyanto ', 181111001),
(259, 'FLX_UATPG', 'Gellen Surya Dewanta ', 181111045),
(260, 'WBS_INH31', 'Padma Rodha Larasati ', 181221027),
(261, 'WBN_1B3V1', 'David Iman Sentosa ', 181221020),
(262, 'WBD_NRVCJ', 'Ramadhan Andik Saputra ', 181221016),
(263, 'WBS_LW1G3', 'Yeun Arinda Eka Sari ', 181221012),
(264, 'WBP_9GGRT', 'Nadhief Fawaz Rezaka ', 181221024),
(265, 'LPL_RYCBD', 'Achmad Aditia', 181221003),
(266, 'BTT_R00LV', 'Bela Arfi Dayani ', 181221042),
(267, 'WBG_O7GD1', 'Galih Adhitya Kurniawan ', 181221036),
(268, 'TMT_COXJH', 'Susetiyo Mohaimin ', 181221030),
(269, 'SMP_SS9U2', 'Yogi Bagus Karunia Pangestu', 181221002),
(270, 'WBS_H4QBG', 'Rhonny octavia saputra ', 181221010),
(285, 'CRT_PRGZK', 'Mahendra Dwi Purwanto', 181221006),
(286, 'DHS_6LLKT', 'Yogi Bagus Karunia', 181221002);

-- --------------------------------------------------------

--
-- Struktur dari tabel `TB_FOTO`
--

CREATE TABLE `TB_FOTO` (
  `ID_FOTO` int(11) NOT NULL,
  `ID_KARYA` varchar(20) DEFAULT NULL,
  `FOTO` varchar(100) DEFAULT NULL,
  `KETERANGAN` text,
  `LOG_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `TB_FOTO`
--

INSERT INTO `TB_FOTO` (`ID_FOTO`, `ID_KARYA`, `FOTO`, `KETERANGAN`, `LOG_TIME`) VALUES
(53, 'PLK_F0OK1', 'Aplikasi_Jasa_titip_barang-Template1.jpg', NULL, '2021-01-19 06:38:36'),
(54, 'PLK_F0OK1', 'Aplikasi_Jasa_titip_barang-Template2.jpg', NULL, '2021-01-19 06:38:36'),
(55, 'PLK_F0OK1', 'Aplikasi_Jasa_titip_barang-Template6.jpg', NULL, '2021-01-19 06:38:36'),
(56, 'PLK_F0OK1', 'Aplikasi_Jasa_titip_barang-Template7.jpg', NULL, '2021-01-19 06:38:36'),
(57, 'PLK_93103', 'Aplikasi_Klinik_Rekam_Medis-Template1.jpg', NULL, '2021-01-19 07:29:19'),
(58, 'PLK_93103', 'Aplikasi_Klinik_Rekam_Medis-Template2.jpg', NULL, '2021-01-19 07:29:19'),
(59, 'PLK_93103', 'Aplikasi_Klinik_Rekam_Medis-Template6.jpg', NULL, '2021-01-19 07:29:19'),
(60, 'PLK_93103', 'Aplikasi_Klinik_Rekam_Medis-Template7.jpg', NULL, '2021-01-19 07:29:19'),
(61, 'PLK_E0HFX', 'Aplikasi_to_do_list_skripsi-Template1.jpg', NULL, '2021-01-19 09:25:43'),
(62, 'PLK_E0HFX', 'Aplikasi_to_do_list_skripsi-Template2.jpg', NULL, '2021-01-19 09:25:43'),
(63, 'PLK_E0HFX', 'Aplikasi_to_do_list_skripsi-Template6.jpg', NULL, '2021-01-19 09:25:43'),
(64, 'PLK_E0HFX', 'Aplikasi_to_do_list_skripsi-Template7.jpg', NULL, '2021-01-19 09:25:43'),
(65, 'PRP_26YDK', 'Perpustakaan_SMA_SHALAHUDDIN_MALANG-Template1.jpg', NULL, '2021-01-19 09:34:25'),
(66, 'PRP_26YDK', 'Perpustakaan_SMA_SHALAHUDDIN_MALANG-Template2.jpg', NULL, '2021-01-19 09:34:25'),
(67, 'PRP_26YDK', 'Perpustakaan_SMA_SHALAHUDDIN_MALANG-Template6.jpg', NULL, '2021-01-19 09:34:25'),
(68, 'PRP_26YDK', 'Perpustakaan_SMA_SHALAHUDDIN_MALANG-Template7.jpg', NULL, '2021-01-19 09:34:25'),
(69, 'PDM_D12FK', 'PDAM_CASHLESS_-Template1.jpg', NULL, '2021-01-19 14:09:06'),
(70, 'PDM_D12FK', 'PDAM_CASHLESS_-Template2.jpg', NULL, '2021-01-19 14:09:06'),
(71, 'PDM_D12FK', 'PDAM_CASHLESS_-Template6.jpg', NULL, '2021-01-19 14:09:06'),
(72, 'PDM_D12FK', 'PDAM_CASHLESS_-Template7.jpg', NULL, '2021-01-19 14:09:06'),
(73, 'PLK_8G1TS', 'Aplikasi_Pembelajaran_GH_LEARNING-Template1.jpg', NULL, '2021-01-19 14:11:53'),
(74, 'PLK_8G1TS', 'Aplikasi_Pembelajaran_GH_LEARNING-Template2.jpg', NULL, '2021-01-19 14:11:53'),
(75, 'PLK_8G1TS', 'Aplikasi_Pembelajaran_GH_LEARNING-Template6.jpg', NULL, '2021-01-19 14:11:53'),
(76, 'PLK_8G1TS', 'Aplikasi_Pembelajaran_GH_LEARNING-Template7.jpg', NULL, '2021-01-19 14:11:53'),
(77, 'PLK_GP31B', 'Aplikasi_Rental_Mobil-Template1.jpg', NULL, '2021-01-19 14:14:07'),
(78, 'PLK_GP31B', 'Aplikasi_Rental_Mobil-Template2.jpg', NULL, '2021-01-19 14:14:07'),
(79, 'PLK_GP31B', 'Aplikasi_Rental_Mobil-Template6.jpg', NULL, '2021-01-19 14:14:07'),
(80, 'PLK_GP31B', 'Aplikasi_Rental_Mobil-Template7.jpg', NULL, '2021-01-19 14:14:07'),
(81, 'PML_T7IZU', 'Pemilihan_Berbasis_E_Voting_-Template1.jpg', NULL, '2021-01-19 14:17:41'),
(82, 'PML_T7IZU', 'Pemilihan_Berbasis_E_Voting_-Template2.jpg', NULL, '2021-01-19 14:17:41'),
(83, 'PML_T7IZU', 'Pemilihan_Berbasis_E_Voting_-Template6.jpg', NULL, '2021-01-19 14:17:41'),
(84, 'PML_T7IZU', 'Pemilihan_Berbasis_E_Voting_-Template7.jpg', NULL, '2021-01-19 14:17:41'),
(85, 'PLK_CJMNG', 'Aplikasi_E_Canteen-Template1.jpg', NULL, '2021-01-19 14:20:27'),
(86, 'PLK_CJMNG', 'Aplikasi_E_Canteen-Template2.jpg', NULL, '2021-01-19 14:20:27'),
(87, 'PLK_CJMNG', 'Aplikasi_E_Canteen-Template6.jpg', NULL, '2021-01-19 14:20:27'),
(88, 'PLK_CJMNG', 'Aplikasi_E_Canteen-Template7.jpg', NULL, '2021-01-19 14:20:27'),
(89, 'PLK_R849P', 'Aplikasi_Manajement_Skripsi-Template1.jpg', NULL, '2021-01-19 14:22:45'),
(90, 'PLK_R849P', 'Aplikasi_Manajement_Skripsi-Template2.jpg', NULL, '2021-01-19 14:22:45'),
(91, 'PLK_R849P', 'Aplikasi_Manajement_Skripsi-Template6.jpg', NULL, '2021-01-19 14:22:45'),
(92, 'PLK_R849P', 'Aplikasi_Manajement_Skripsi-Template7.jpg', NULL, '2021-01-19 14:22:45'),
(93, 'PNT_HGBLB', 'Point_of_Sales_at_Polopendem-Template1.jpg', NULL, '2021-01-19 14:43:12'),
(94, 'PNT_HGBLB', 'Point_of_Sales_at_Polopendem-Template2.jpg', NULL, '2021-01-19 14:43:12'),
(95, 'PNT_HGBLB', 'Point_of_Sales_at_Polopendem-Template6.jpg', NULL, '2021-01-19 14:43:12'),
(96, 'PNT_HGBLB', 'Point_of_Sales_at_Polopendem-Template7.jpg', NULL, '2021-01-19 14:43:12'),
(97, 'STK_UJX35', 'STIKI_Cashless_Online_Canteen-Template1.jpg', NULL, '2021-01-19 14:47:02'),
(98, 'STK_UJX35', 'STIKI_Cashless_Online_Canteen-Template2.jpg', NULL, '2021-01-19 14:47:03'),
(99, 'STK_UJX35', 'STIKI_Cashless_Online_Canteen-Template6.jpg', NULL, '2021-01-19 14:47:03'),
(100, 'STK_UJX35', 'STIKI_Cashless_Online_Canteen-Template7.jpg', NULL, '2021-01-19 14:47:03'),
(101, 'PLK_Y3AOO', 'Aplikasi_Penjualan_Toko_Komputer_-Template1.jpg', NULL, '2021-01-19 14:49:02'),
(102, 'PLK_Y3AOO', 'Aplikasi_Penjualan_Toko_Komputer_-Template2.jpg', NULL, '2021-01-19 14:49:02'),
(103, 'PLK_Y3AOO', 'Aplikasi_Penjualan_Toko_Komputer_-Template6.jpg', NULL, '2021-01-19 14:49:02'),
(104, 'PLK_Y3AOO', 'Aplikasi_Penjualan_Toko_Komputer_-Template7.jpg', NULL, '2021-01-19 14:49:02'),
(109, 'PHT_S8BJG', 'PhotoMap-Template1.jpg', NULL, '2021-01-19 15:10:58'),
(110, 'PHT_S8BJG', 'PhotoMap-Template2.jpg', NULL, '2021-01-19 15:10:58'),
(111, 'PHT_S8BJG', 'PhotoMap-Template6.jpg', NULL, '2021-01-19 15:10:58'),
(112, 'PHT_S8BJG', 'PhotoMap-Template7.jpg', NULL, '2021-01-19 15:10:58'),
(113, 'BC(_LYAVE', 'ABC__Asyiknya_Belajar_Ceria_-Template1.jpg', NULL, '2021-01-19 16:55:33'),
(114, 'BC(_LYAVE', 'ABC__Asyiknya_Belajar_Ceria_-Template2.jpg', NULL, '2021-01-19 16:55:33'),
(115, 'BC(_LYAVE', 'ABC__Asyiknya_Belajar_Ceria_-Template6.jpg', NULL, '2021-01-19 16:55:33'),
(116, 'BC(_LYAVE', 'ABC__Asyiknya_Belajar_Ceria_-Template7.jpg', NULL, '2021-01-19 16:55:33'),
(117, 'BKN_9X23J', 'Booking_Pendakian_Gunung_Panderman_dan_Buthak-Template1.jpg', NULL, '2021-01-19 17:00:55'),
(118, 'BKN_9X23J', 'Booking_Pendakian_Gunung_Panderman_dan_Buthak-Template2.jpg', NULL, '2021-01-19 17:00:55'),
(119, 'BKN_9X23J', 'Booking_Pendakian_Gunung_Panderman_dan_Buthak-Template6.jpg', NULL, '2021-01-19 17:00:55'),
(120, 'BKN_9X23J', 'Booking_Pendakian_Gunung_Panderman_dan_Buthak-Template7.jpg', NULL, '2021-01-19 17:00:55'),
(121, 'PLK_N5GX9', 'Aplikasi_Edukasi_Anak-Template1.jpg', NULL, '2021-01-19 17:03:24'),
(122, 'PLK_N5GX9', 'Aplikasi_Edukasi_Anak-Template2.jpg', NULL, '2021-01-19 17:03:24'),
(123, 'PLK_N5GX9', 'Aplikasi_Edukasi_Anak-Template6.jpg', NULL, '2021-01-19 17:03:24'),
(124, 'PLK_MTYN2', 'Aplikasi_Mobile_E_learning_Untuk_Siswa_SD-Template1.jpg', NULL, '2021-01-19 17:05:46'),
(125, 'PLK_MTYN2', 'Aplikasi_Mobile_E_learning_Untuk_Siswa_SD-Template2.jpg', NULL, '2021-01-19 17:05:46'),
(126, 'PLK_MTYN2', 'Aplikasi_Mobile_E_learning_Untuk_Siswa_SD-Template6.jpg', NULL, '2021-01-19 17:05:46'),
(127, 'PLK_0AIKO', 'Aplikasi_M_POINT-Template1.jpg', NULL, '2021-01-19 17:10:13'),
(128, 'PLK_0AIKO', 'Aplikasi_M_POINT-Template2.jpg', NULL, '2021-01-19 17:10:13'),
(129, 'PLK_0AIKO', 'Aplikasi_M_POINT-Template6.jpg', NULL, '2021-01-19 17:10:13'),
(130, 'PLK_0AIKO', 'Aplikasi_M_POINT-Template7.jpg', NULL, '2021-01-19 17:10:13'),
(131, 'PLK_K7N8C', 'Aplikasi_Panduan_Travelling-Template1.jpg', NULL, '2021-01-19 17:13:26'),
(132, 'PLK_K7N8C', 'Aplikasi_Panduan_Travelling-Template2.jpg', NULL, '2021-01-19 17:13:26'),
(133, 'PLK_K7N8C', 'Aplikasi_Panduan_Travelling-Template6.jpg', NULL, '2021-01-19 17:13:26'),
(134, 'PLK_K7N8C', 'Aplikasi_Panduan_Travelling-Template7.jpg', NULL, '2021-01-19 17:13:26'),
(135, 'PLK_SMYAT', 'Aplikasi_Pencarian_Bengkel__Gobengkel_-Template1.jpg', NULL, '2021-01-19 17:15:04'),
(136, 'PLK_SMYAT', 'Aplikasi_Pencarian_Bengkel__Gobengkel_-Template2.jpg', NULL, '2021-01-19 17:15:04'),
(137, 'PLK_SMYAT', 'Aplikasi_Pencarian_Bengkel__Gobengkel_-Template6.jpg', NULL, '2021-01-19 17:15:04'),
(138, 'PLK_SMYAT', 'Aplikasi_Pencarian_Bengkel__Gobengkel_-Template7.jpg', NULL, '2021-01-19 17:15:04'),
(139, 'PLK_Z49FM', 'Aplikasi_Pencarian_Event_Sekolah_Annonce_-Template1.jpg', NULL, '2021-01-19 17:37:58'),
(140, 'PLK_Z49FM', 'Aplikasi_Pencarian_Event_Sekolah_Annonce_-Template2.jpg', NULL, '2021-01-19 17:37:58'),
(141, 'PLK_Z49FM', 'Aplikasi_Pencarian_Event_Sekolah_Annonce_-Template6.jpg', NULL, '2021-01-19 17:37:58'),
(142, 'PLK_Z49FM', 'Aplikasi_Pencarian_Event_Sekolah_Annonce_-Template7.jpg', NULL, '2021-01-19 17:37:58'),
(143, 'PLK_WPOQR', 'Aplikasi_Pencarian_Guru_Les_Privat_“EduOne”-Template1.jpg', NULL, '2021-01-19 17:39:57'),
(144, 'PLK_WPOQR', 'Aplikasi_Pencarian_Guru_Les_Privat_“EduOne”-Template2.jpg', NULL, '2021-01-19 17:39:57'),
(145, 'PLK_WPOQR', 'Aplikasi_Pencarian_Guru_Les_Privat_“EduOne”-Template6.jpg', NULL, '2021-01-19 17:39:57'),
(146, 'PLK_WPOQR', 'Aplikasi_Pencarian_Guru_Les_Privat_“EduOne”-Template7.jpg', NULL, '2021-01-19 17:39:57'),
(147, 'PLK_ZDIU8', 'Aplikasi_Pendukung_Ternak_Ayam-Template1.jpg', NULL, '2021-01-19 17:41:38'),
(148, 'PLK_ZDIU8', 'Aplikasi_Pendukung_Ternak_Ayam-Template2.jpg', NULL, '2021-01-19 17:41:38'),
(149, 'PLK_ZDIU8', 'Aplikasi_Pendukung_Ternak_Ayam-Template6.jpg', NULL, '2021-01-19 17:41:38'),
(150, 'PLK_ZDIU8', 'Aplikasi_Pendukung_Ternak_Ayam-Template7.jpg', NULL, '2021-01-19 17:41:38'),
(151, 'PLK_8J6BC', 'Aplikasi_penjualan_Jahe-Template1.jpg', NULL, '2021-01-19 17:43:15'),
(152, 'PLK_8J6BC', 'Aplikasi_penjualan_Jahe-Template2.jpg', NULL, '2021-01-19 17:43:15'),
(153, 'PLK_8J6BC', 'Aplikasi_penjualan_Jahe-Template6.jpg', NULL, '2021-01-19 17:43:15'),
(154, 'PLK_8J6BC', 'Aplikasi_penjualan_Jahe-Template7.jpg', NULL, '2021-01-19 17:43:15'),
(155, 'PLK_GF9B8', 'Aplikasi_Sistem_Informasi_Pertanian_Hidroponik-Template1.jpg', NULL, '2021-01-19 17:46:17'),
(156, 'PLK_GF9B8', 'Aplikasi_Sistem_Informasi_Pertanian_Hidroponik-Template2.jpg', NULL, '2021-01-19 17:46:17'),
(157, 'PLK_GF9B8', 'Aplikasi_Sistem_Informasi_Pertanian_Hidroponik-Template6.jpg', NULL, '2021-01-19 17:46:17'),
(158, 'PLK_GF9B8', 'Aplikasi_Sistem_Informasi_Pertanian_Hidroponik-Template7.jpg', NULL, '2021-01-19 17:46:17'),
(159, 'PLK_MXWJY', 'Aplikasi_Tapak_Tilas-Template1.jpg', NULL, '2021-01-19 17:48:32'),
(160, 'PLK_MXWJY', 'Aplikasi_Tapak_Tilas-Template2.jpg', NULL, '2021-01-19 17:48:32'),
(161, 'PLK_MXWJY', 'Aplikasi_Tapak_Tilas-Template6.jpg', NULL, '2021-01-19 17:48:32'),
(162, 'PLK_MXWJY', 'Aplikasi_Tapak_Tilas-Template7.jpg', NULL, '2021-01-19 17:48:32'),
(163, 'PLK_EPJHC', 'Aplikasi_Tour_Travel_Bali-Template1.jpg', NULL, '2021-01-19 17:50:30'),
(164, 'PLK_EPJHC', 'Aplikasi_Tour_Travel_Bali-Template2.jpg', NULL, '2021-01-19 17:50:30'),
(165, 'PLK_EPJHC', 'Aplikasi_Tour_Travel_Bali-Template6.jpg', NULL, '2021-01-19 17:50:30'),
(166, 'PLK_EPJHC', 'Aplikasi_Tour_Travel_Bali-Template7.jpg', NULL, '2021-01-19 17:50:30'),
(167, 'PLK_95ZWJ', 'Aplikasi_Perpustakaan_Online_“BukuQT”-Template1.jpg', NULL, '2021-01-19 18:05:11'),
(168, 'PLK_95ZWJ', 'Aplikasi_Perpustakaan_Online_“BukuQT”-Template2.jpg', NULL, '2021-01-19 18:05:11'),
(169, 'PLK_95ZWJ', 'Aplikasi_Perpustakaan_Online_“BukuQT”-Template6.jpg', NULL, '2021-01-19 18:05:11'),
(170, 'PLK_95ZWJ', 'Aplikasi_Perpustakaan_Online_“BukuQT”-Template7.jpg', NULL, '2021-01-19 18:05:11'),
(171, 'PLK_F49AZ', 'Aplikasi_Dhuar_Wisata-Template1.jpg', NULL, '2021-01-20 02:30:17'),
(172, 'PLK_F49AZ', 'Aplikasi_Dhuar_Wisata-Template2.jpg', NULL, '2021-01-20 02:30:17'),
(173, 'PLK_F49AZ', 'Aplikasi_Dhuar_Wisata-Template6.jpg', NULL, '2021-01-20 02:30:17'),
(174, 'PLK_F49AZ', 'Aplikasi_Dhuar_Wisata-Template7.jpg', NULL, '2021-01-20 02:30:17'),
(175, 'PLK_Q3PMC', 'Aplikasi_Travelling_Guide___Blog_DULIN-Template1.jpg', NULL, '2021-01-20 02:32:24'),
(176, 'PLK_Q3PMC', 'Aplikasi_Travelling_Guide___Blog_DULIN-Template2.jpg', NULL, '2021-01-20 02:32:24'),
(177, 'PLK_Q3PMC', 'Aplikasi_Travelling_Guide___Blog_DULIN-Template6.jpg', NULL, '2021-01-20 02:32:24'),
(178, 'PLK_Q3PMC', 'Aplikasi_Travelling_Guide___Blog_DULIN-Template7.jpg', NULL, '2021-01-20 02:32:24'),
(179, 'PLK_XQ7WY', 'Aplikasi_E_learning-Template1.jpg', NULL, '2021-01-20 02:36:04'),
(180, 'PLK_XQ7WY', 'Aplikasi_E_learning-Template2.jpg', NULL, '2021-01-20 02:36:04'),
(181, 'PLK_XQ7WY', 'Aplikasi_E_learning-Template6.jpg', NULL, '2021-01-20 02:36:04'),
(182, 'PLK_XQ7WY', 'Aplikasi_E_learning-Template7.jpg', NULL, '2021-01-20 02:36:04'),
(183, 'PLK_45N70', 'Aplikasi_Kursus_Dan_Penjualan_Buku_Indofira-Template1.jpg', NULL, '2021-01-20 02:41:38'),
(184, 'PLK_45N70', 'Aplikasi_Kursus_Dan_Penjualan_Buku_Indofira-Template2.jpg', NULL, '2021-01-20 02:41:38'),
(185, 'PLK_45N70', 'Aplikasi_Kursus_Dan_Penjualan_Buku_Indofira-Template6.jpg', NULL, '2021-01-20 02:41:38'),
(186, 'PLK_45N70', 'Aplikasi_Kursus_Dan_Penjualan_Buku_Indofira-Template7.jpg', NULL, '2021-01-20 02:41:38'),
(187, 'PLK_3AF5H', 'Aplikasi_Mobile_App_Malang_Explore-Template1.jpg', NULL, '2021-01-20 02:45:36'),
(188, 'PLK_3AF5H', 'Aplikasi_Mobile_App_Malang_Explore-Template2.jpg', NULL, '2021-01-20 02:45:36'),
(189, 'PLK_3AF5H', 'Aplikasi_Mobile_App_Malang_Explore-Template6.jpg', NULL, '2021-01-20 02:45:36'),
(190, 'PLK_3AF5H', 'Aplikasi_Mobile_App_Malang_Explore-Template7.jpg', NULL, '2021-01-20 02:45:36'),
(191, 'PLK_FEYYQ', 'Aplikasi_Pemesanan_Tiket_Travel_Ntap_Travel-Template1.jpg', NULL, '2021-01-20 02:49:33'),
(192, 'PLK_FEYYQ', 'Aplikasi_Pemesanan_Tiket_Travel_Ntap_Travel-Template2.jpg', NULL, '2021-01-20 02:49:33'),
(193, 'PLK_FEYYQ', 'Aplikasi_Pemesanan_Tiket_Travel_Ntap_Travel-Template6.jpg', NULL, '2021-01-20 02:49:33'),
(194, 'PLK_FEYYQ', 'Aplikasi_Pemesanan_Tiket_Travel_Ntap_Travel-Template7.jpg', NULL, '2021-01-20 02:49:33'),
(195, 'PLK_BOW1L', 'Aplikasi_Marketplace_Oleh_oleh_Khas_Daerah-Template1.jpg', NULL, '2021-01-20 02:52:23'),
(196, 'PLK_BOW1L', 'Aplikasi_Marketplace_Oleh_oleh_Khas_Daerah-Template2.jpg', NULL, '2021-01-20 02:52:23'),
(197, 'PLK_BOW1L', 'Aplikasi_Marketplace_Oleh_oleh_Khas_Daerah-Template6.jpg', NULL, '2021-01-20 02:52:23'),
(198, 'PLK_BOW1L', 'Aplikasi_Marketplace_Oleh_oleh_Khas_Daerah-Template7.jpg', NULL, '2021-01-20 02:52:23'),
(199, 'PZZ_VFIGS', 'Puzzle_Game_with_Unreal_Engine-Template1.jpg', NULL, '2021-01-20 05:24:04'),
(200, 'PZZ_VFIGS', 'Puzzle_Game_with_Unreal_Engine-Template2.jpg', NULL, '2021-01-20 05:24:04'),
(201, 'PZZ_VFIGS', 'Puzzle_Game_with_Unreal_Engine-Template6.jpg', NULL, '2021-01-20 05:24:04'),
(202, 'PZZ_VFIGS', 'Puzzle_Game_with_Unreal_Engine-Template7.jpg', NULL, '2021-01-20 05:24:04'),
(203, 'NVS_4819U', 'Invasion_Rush-Template361.jpg', NULL, '2021-01-20 05:47:44'),
(204, 'NVS_4819U', 'Invasion_Rush-Template37.jpg', NULL, '2021-01-20 05:47:44'),
(205, 'NVS_4819U', 'Invasion_Rush-Template38.jpg', NULL, '2021-01-20 05:47:44'),
(206, 'NVS_4819U', 'Invasion_Rush-Template39.jpg', NULL, '2021-01-20 05:47:44'),
(207, 'PLK_S5ZQF', 'Aplikasi_Poty_Hydro-Template1.jpg', NULL, '2021-01-20 05:56:41'),
(208, 'PLK_S5ZQF', 'Aplikasi_Poty_Hydro-Template2.jpg', NULL, '2021-01-20 05:56:41'),
(209, 'PLK_S5ZQF', 'Aplikasi_Poty_Hydro-Template6.jpg', NULL, '2021-01-20 05:56:41'),
(210, 'PLK_S5ZQF', 'Aplikasi_Poty_Hydro-Template7.jpg', NULL, '2021-01-20 05:56:41'),
(211, 'PLK_TBXZD', 'Aplikasi_Simple_Smart_Daring__SSD_-Template1.jpg', NULL, '2021-01-20 06:06:06'),
(212, 'PLK_TBXZD', 'Aplikasi_Simple_Smart_Daring__SSD_-Template2.jpg', NULL, '2021-01-20 06:06:06'),
(213, 'PLK_TBXZD', 'Aplikasi_Simple_Smart_Daring__SSD_-Template6.jpg', NULL, '2021-01-20 06:06:06'),
(214, 'PLK_TBXZD', 'Aplikasi_Simple_Smart_Daring__SSD_-Template7.jpg', NULL, '2021-01-20 06:06:06'),
(215, 'PLK_NH4MZ', 'Aplikasi_Informasi_Lingkungan_Sekitar__SPHERE_-Template1.jpg', NULL, '2021-01-20 07:52:44'),
(216, 'PLK_NH4MZ', 'Aplikasi_Informasi_Lingkungan_Sekitar__SPHERE_-Template2.jpg', NULL, '2021-01-20 07:52:44'),
(217, 'PLK_NH4MZ', 'Aplikasi_Informasi_Lingkungan_Sekitar__SPHERE_-Template6.jpg', NULL, '2021-01-20 07:52:44'),
(218, 'PLK_NH4MZ', 'Aplikasi_Informasi_Lingkungan_Sekitar__SPHERE_-Template7.jpg', NULL, '2021-01-20 07:52:44'),
(219, 'PLK_IW5VL', 'Aplikasi_Katalog_Perpustakaan-Template11.jpg', NULL, '2021-01-20 07:58:34'),
(220, 'PLK_IW5VL', 'Aplikasi_Katalog_Perpustakaan-Template21.jpg', NULL, '2021-01-20 07:58:34'),
(221, 'PLK_IW5VL', 'Aplikasi_Katalog_Perpustakaan-Template6.jpg', NULL, '2021-01-20 07:58:34'),
(222, 'PLK_IW5VL', 'Aplikasi_Katalog_Perpustakaan-Template71.jpg', NULL, '2021-01-20 07:58:34'),
(223, 'MR(_L136J', 'MERO___MEDIC_HERO___-MERO1.jpg', NULL, '2021-01-20 09:45:54'),
(224, 'MR(_L136J', 'MERO___MEDIC_HERO___-MERO2.jpg', NULL, '2021-01-20 09:45:54'),
(225, 'MR(_L136J', 'MERO___MEDIC_HERO___-MERO3.jpg', NULL, '2021-01-20 09:45:54'),
(226, 'MR(_L136J', 'MERO___MEDIC_HERO___-MERO4.jpg', NULL, '2021-01-20 09:45:54'),
(227, 'CST_J3ERA', 'Cost_Calculator__Hitung_Jarak_-Template11.jpg', NULL, '2021-01-20 11:45:59'),
(228, 'CST_J3ERA', 'Cost_Calculator__Hitung_Jarak_-Template2.jpg', NULL, '2021-01-20 11:45:59'),
(229, 'CST_J3ERA', 'Cost_Calculator__Hitung_Jarak_-Template6.jpg', NULL, '2021-01-20 11:45:59'),
(230, 'DHR_I8D8K', 'Dhuar_Pesantren-Template11.jpg', NULL, '2021-01-20 11:48:10'),
(231, 'DHR_I8D8K', 'Dhuar_Pesantren-Template2.jpg', NULL, '2021-01-20 11:48:10'),
(232, 'DHR_I8D8K', 'Dhuar_Pesantren-Template6.jpg', NULL, '2021-01-20 11:48:10'),
(233, 'DHR_I8D8K', 'Dhuar_Pesantren-Template7.jpg', NULL, '2021-01-20 11:48:10'),
(234, '-RM_SM9ZU', 'E_RMS_RSUD_Dr_Iskak-Template36.jpg', NULL, '2021-01-20 11:51:20'),
(235, '-RM_SM9ZU', 'E_RMS_RSUD_Dr_Iskak-Template37.jpg', NULL, '2021-01-20 11:51:20'),
(236, '-RM_SM9ZU', 'E_RMS_RSUD_Dr_Iskak-Template38.jpg', NULL, '2021-01-20 11:51:20'),
(237, '-RM_SM9ZU', 'E_RMS_RSUD_Dr_Iskak-Template39.jpg', NULL, '2021-01-20 11:51:20'),
(238, 'KTM_DCSHD', 'Ketemu:_yet_another_meeting_app-Template1.jpg', NULL, '2021-01-20 11:54:18'),
(239, 'KTM_DCSHD', 'Ketemu:_yet_another_meeting_app-Template2.jpg', NULL, '2021-01-20 11:54:18'),
(240, 'KTM_DCSHD', 'Ketemu:_yet_another_meeting_app-Template6.jpg', NULL, '2021-01-20 11:54:18'),
(241, 'WBS_VWBGC', 'Website_Mebel_Agam_Jaya_Furniture_-Template1.jpg', NULL, '2021-01-20 11:57:36'),
(242, 'WBS_VWBGC', 'Website_Mebel_Agam_Jaya_Furniture_-Template2.jpg', NULL, '2021-01-20 11:57:36'),
(243, 'WBS_VWBGC', 'Website_Mebel_Agam_Jaya_Furniture_-Template6.jpg', NULL, '2021-01-20 11:57:36'),
(244, 'WBS_VWBGC', 'Website_Mebel_Agam_Jaya_Furniture_-Template7.jpg', NULL, '2021-01-20 11:57:36'),
(245, 'PLK_0D2P0', 'Aplikasi_BOKI_-Template28.jpg', NULL, '2021-01-20 12:07:29'),
(246, 'PLK_0D2P0', 'Aplikasi_BOKI_-Template29.jpg', NULL, '2021-01-20 12:07:29'),
(247, 'PLK_0D2P0', 'Aplikasi_BOKI_-Template30.jpg', NULL, '2021-01-20 12:07:29'),
(248, 'PLK_0D2P0', 'Aplikasi_BOKI_-Template31.jpg', NULL, '2021-01-20 12:07:29'),
(249, 'PLK_3QQ7A', 'Aplikasi_Pembukuan_Kas_Pribadi-Template69.jpg', NULL, '2021-01-20 12:08:34'),
(250, 'PLK_3QQ7A', 'Aplikasi_Pembukuan_Kas_Pribadi-Template70.jpg', NULL, '2021-01-20 12:08:34'),
(251, 'PLK_3QQ7A', 'Aplikasi_Pembukuan_Kas_Pribadi-Template71.jpg', NULL, '2021-01-20 12:08:34'),
(252, 'PLK_3QQ7A', 'Aplikasi_Pembukuan_Kas_Pribadi-Template72.jpg', NULL, '2021-01-20 12:08:34'),
(253, 'HTN_7OW9Q', 'Hitung_Zakat-Template44.jpg', NULL, '2021-01-20 16:04:34'),
(254, 'HTN_7OW9Q', 'Hitung_Zakat-Template45.jpg', NULL, '2021-01-20 16:04:34'),
(255, 'HTN_7OW9Q', 'Hitung_Zakat-Template46.jpg', NULL, '2021-01-20 16:04:34'),
(256, 'HTL_YK0QG', 'Hotel_edotel_SMKN_2-Template24.jpg', NULL, '2021-01-20 16:06:06'),
(257, 'HTL_YK0QG', 'Hotel_edotel_SMKN_2-Template25.jpg', NULL, '2021-01-20 16:06:06'),
(258, 'HTL_YK0QG', 'Hotel_edotel_SMKN_2-Template26.jpg', NULL, '2021-01-20 16:06:06'),
(259, 'HTL_YK0QG', 'Hotel_edotel_SMKN_2-Template27.jpg', NULL, '2021-01-20 16:06:06'),
(260, 'PLM_BHX33', 'Plamil___Planner_makanan_selama_1_minggu-Template61.jpg', NULL, '2021-01-20 16:07:23'),
(261, 'PLM_BHX33', 'Plamil___Planner_makanan_selama_1_minggu-Template62.jpg', NULL, '2021-01-20 16:07:23'),
(262, 'PLM_BHX33', 'Plamil___Planner_makanan_selama_1_minggu-Template63.jpg', NULL, '2021-01-20 16:07:23'),
(263, 'PLM_BHX33', 'Plamil___Planner_makanan_selama_1_minggu-Template64.jpg', NULL, '2021-01-20 16:07:23'),
(264, 'SMB_CGI59', 'Sambat_Online-Template44.jpg', NULL, '2021-01-20 16:09:16'),
(265, 'SMB_CGI59', 'Sambat_Online-Template45.jpg', NULL, '2021-01-20 16:09:16'),
(266, 'SMB_CGI59', 'Sambat_Online-Template46.jpg', NULL, '2021-01-20 16:09:16'),
(267, 'SMB_CGI59', 'Sambat_Online-Template47.jpg', NULL, '2021-01-20 16:09:16'),
(268, 'PLK_U91D6', 'Aplikasi_Web_Perpustakaan_SMA_Shalahuddin-Template20.jpg', NULL, '2021-01-20 16:10:21'),
(269, 'PLK_U91D6', 'Aplikasi_Web_Perpustakaan_SMA_Shalahuddin-Template21.jpg', NULL, '2021-01-20 16:10:21'),
(270, 'PLK_U91D6', 'Aplikasi_Web_Perpustakaan_SMA_Shalahuddin-Template22.jpg', NULL, '2021-01-20 16:10:21'),
(271, 'PLK_U91D6', 'Aplikasi_Web_Perpustakaan_SMA_Shalahuddin-Template23.jpg', NULL, '2021-01-20 16:10:21'),
(272, 'SST_8FQ92', 'Sistem_Informasi_dan_Manajemen_Hotel_The_Seminyak-Template57.jpg', NULL, '2021-01-20 16:16:54'),
(273, 'SST_8FQ92', 'Sistem_Informasi_dan_Manajemen_Hotel_The_Seminyak-Template58.jpg', NULL, '2021-01-20 16:16:54'),
(274, 'SST_8FQ92', 'Sistem_Informasi_dan_Manajemen_Hotel_The_Seminyak-Template59.jpg', NULL, '2021-01-20 16:16:54'),
(275, 'SST_8FQ92', 'Sistem_Informasi_dan_Manajemen_Hotel_The_Seminyak-Template60.jpg', NULL, '2021-01-20 16:16:54'),
(276, 'WBS_2SDZN', 'Website_Sistem_Informasi_Perpustakaan-Template40.jpg', NULL, '2021-01-20 16:18:36'),
(277, 'WBS_2SDZN', 'Website_Sistem_Informasi_Perpustakaan-Template41.jpg', NULL, '2021-01-20 16:18:36'),
(278, 'WBS_2SDZN', 'Website_Sistem_Informasi_Perpustakaan-Template42.jpg', NULL, '2021-01-20 16:18:36'),
(279, 'WBS_2SDZN', 'Website_Sistem_Informasi_Perpustakaan-Template43.jpg', NULL, '2021-01-20 16:18:36'),
(280, 'SKR_ZSJKH', 'Skrining_Mandiri_COVID_19-Template16.jpg', NULL, '2021-01-20 16:21:35'),
(281, 'SKR_ZSJKH', 'Skrining_Mandiri_COVID_19-Template17.jpg', NULL, '2021-01-20 16:21:35'),
(282, 'SKR_ZSJKH', 'Skrining_Mandiri_COVID_19-Template18.jpg', NULL, '2021-01-20 16:21:35'),
(283, 'SKR_ZSJKH', 'Skrining_Mandiri_COVID_19-Template19.jpg', NULL, '2021-01-20 16:21:35'),
(284, 'TKB_QV1B7', 'Toko_Buku-Template52.jpg', NULL, '2021-01-20 16:22:35'),
(285, 'TKB_QV1B7', 'Toko_Buku-Template53.jpg', NULL, '2021-01-20 16:22:35'),
(286, 'TKB_QV1B7', 'Toko_Buku-Template54.jpg', NULL, '2021-01-20 16:22:35'),
(287, 'TKB_QV1B7', 'Toko_Buku-Template55.jpg', NULL, '2021-01-20 16:22:35'),
(288, 'WBS_FH4B9', 'Website_Profile_Bina_Taqwa-Template32.jpg', NULL, '2021-01-20 16:27:40'),
(289, 'WBS_FH4B9', 'Website_Profile_Bina_Taqwa-Template33.jpg', NULL, '2021-01-20 16:27:40'),
(290, 'WBS_FH4B9', 'Website_Profile_Bina_Taqwa-Template34.jpg', NULL, '2021-01-20 16:27:40'),
(291, 'WBS_FH4B9', 'Website_Profile_Bina_Taqwa-Template35.jpg', NULL, '2021-01-20 16:27:40'),
(292, 'RPL_ZQ6L7', 'Replica_We_Work_Remotely-Template12.png', NULL, '2021-01-20 16:28:52'),
(293, 'RPL_ZQ6L7', 'Replica_We_Work_Remotely-Template13.png', NULL, '2021-01-20 16:28:52'),
(294, 'RPL_ZQ6L7', 'Replica_We_Work_Remotely-Template14.png', NULL, '2021-01-20 16:28:52'),
(295, 'RPL_ZQ6L7', 'Replica_We_Work_Remotely-Template15.jpg', NULL, '2021-01-20 16:28:52'),
(296, 'WBS_6D98K', 'Website_EARSIP-Template36.jpg', NULL, '2021-01-20 16:58:38'),
(297, 'WBS_6D98K', 'Website_EARSIP-Template37.jpg', NULL, '2021-01-20 16:58:38'),
(298, 'WBS_6D98K', 'Website_EARSIP-Template38.jpg', NULL, '2021-01-20 16:58:38'),
(299, 'WBS_6D98K', 'Website_EARSIP-Template39.jpg', NULL, '2021-01-20 16:58:38'),
(300, 'PLK_FTG92', 'Aplikasi_Kasir-Template1.jpg', NULL, '2021-01-20 17:15:10'),
(301, 'PLK_FTG92', 'Aplikasi_Kasir-Template2.jpg', NULL, '2021-01-20 17:15:10'),
(302, 'PLK_FTG92', 'Aplikasi_Kasir-Template6.jpg', NULL, '2021-01-20 17:15:10'),
(303, 'PLK_FTG92', 'Aplikasi_Kasir-Template7.jpg', NULL, '2021-01-20 17:15:10'),
(304, 'VNT_2457M', 'Event_Stiki-Template1.jpg', NULL, '2021-01-20 17:41:46'),
(305, 'VNT_2457M', 'Event_Stiki-Template2.jpg', NULL, '2021-01-20 17:41:46'),
(306, 'VNT_2457M', 'Event_Stiki-Template6.jpg', NULL, '2021-01-20 17:41:46'),
(307, 'VNT_2457M', 'Event_Stiki-Template7.jpg', NULL, '2021-01-20 17:41:46'),
(308, 'SST_8FAZI', 'Sistem_Pemesanan_Tiket_Travel__Kelana_Indonesia_-Template1.jpg', NULL, '2021-01-20 17:57:00'),
(309, 'SST_8FAZI', 'Sistem_Pemesanan_Tiket_Travel__Kelana_Indonesia_-Template21.jpg', NULL, '2021-01-20 17:57:00'),
(310, 'SST_8FAZI', 'Sistem_Pemesanan_Tiket_Travel__Kelana_Indonesia_-Template6.jpg', NULL, '2021-01-20 17:57:00'),
(311, 'SST_8FAZI', 'Sistem_Pemesanan_Tiket_Travel__Kelana_Indonesia_-Template7.jpg', NULL, '2021-01-20 17:57:00'),
(312, 'PLK_DSLTO', 'Aplikasi_KursusLAnguage-Template1.jpg', NULL, '2021-01-20 18:11:28'),
(313, 'PLK_DSLTO', 'Aplikasi_KursusLAnguage-Template2.jpg', NULL, '2021-01-20 18:11:28'),
(314, 'PLK_DSLTO', 'Aplikasi_KursusLAnguage-Template6.jpg', NULL, '2021-01-20 18:11:28'),
(315, 'PLK_DSLTO', 'Aplikasi_KursusLAnguage-Template7.jpg', NULL, '2021-01-20 18:11:28'),
(316, 'TRC_02PYU', 'Tracer_study-Template1.jpg', NULL, '2021-01-20 18:30:01'),
(317, 'TRC_02PYU', 'Tracer_study-Template2.jpg', NULL, '2021-01-20 18:30:01'),
(318, 'TRC_02PYU', 'Tracer_study-Template6.jpg', NULL, '2021-01-20 18:30:01'),
(319, 'TRC_02PYU', 'Tracer_study-Template7.jpg', NULL, '2021-01-20 18:30:01'),
(320, 'THS_77AQP', 'Thesis_Monitoring-Template73.jpg', NULL, '2021-01-20 18:32:07'),
(321, 'THS_77AQP', 'Thesis_Monitoring-Template75.jpg', NULL, '2021-01-20 18:32:07'),
(322, 'THS_77AQP', 'Thesis_Monitoring-Template76.jpg', NULL, '2021-01-20 18:32:07'),
(323, 'PNG_V02TS', 'PENGEMBANGAN_SISTEM_INFORMASI_MANAJEMEN_RENCANA___-Template36.jpg', NULL, '2021-01-20 18:34:54'),
(324, 'PNG_V02TS', 'PENGEMBANGAN_SISTEM_INFORMASI_MANAJEMEN_RENCANA___-Template37.jpg', NULL, '2021-01-20 18:34:54'),
(325, 'PNG_V02TS', 'PENGEMBANGAN_SISTEM_INFORMASI_MANAJEMEN_RENCANA___-Template38.jpg', NULL, '2021-01-20 18:34:54'),
(326, 'PNG_V02TS', 'PENGEMBANGAN_SISTEM_INFORMASI_MANAJEMEN_RENCANA___-Template39.jpg', NULL, '2021-01-20 18:34:54'),
(327, 'SST_EKLJI', 'Sistem_Informasi_Keuangan_PPTIK_STIKI_Malang-Template36.jpg', NULL, '2021-01-20 18:35:52'),
(328, 'SST_EKLJI', 'Sistem_Informasi_Keuangan_PPTIK_STIKI_Malang-Template37.jpg', NULL, '2021-01-20 18:35:52'),
(329, 'SST_EKLJI', 'Sistem_Informasi_Keuangan_PPTIK_STIKI_Malang-Template38.jpg', NULL, '2021-01-20 18:35:52'),
(330, 'SST_EKLJI', 'Sistem_Informasi_Keuangan_PPTIK_STIKI_Malang-Template39.jpg', NULL, '2021-01-20 18:35:52'),
(331, 'DHR_QFJQB', 'Dhuar_SIGFasUmKaltim-Template363.jpg', NULL, '2021-01-20 18:37:43'),
(332, 'DHR_QFJQB', 'Dhuar_SIGFasUmKaltim-Template373.jpg', NULL, '2021-01-20 18:37:43'),
(333, 'DHR_QFJQB', 'Dhuar_SIGFasUmKaltim-Template383.jpg', NULL, '2021-01-20 18:37:43'),
(334, 'DHR_QFJQB', 'Dhuar_SIGFasUmKaltim-Template394.jpg', NULL, '2021-01-20 18:37:43'),
(335, 'BRT_7VSUD', 'BeritaKu-Template36.jpg', NULL, '2021-01-20 18:39:49'),
(336, 'BRT_7VSUD', 'BeritaKu-Template37.jpg', NULL, '2021-01-20 18:39:49'),
(337, 'BRT_7VSUD', 'BeritaKu-Template38.jpg', NULL, '2021-01-20 18:39:49'),
(338, 'BRT_7VSUD', 'BeritaKu-Template39.jpg', NULL, '2021-01-20 18:39:49'),
(339, 'FLX_UATPG', 'flixRate-Template362.jpg', NULL, '2021-01-20 18:40:46'),
(340, 'FLX_UATPG', 'flixRate-Template372.jpg', NULL, '2021-01-20 18:40:46'),
(341, 'FLX_UATPG', 'flixRate-Template382.jpg', NULL, '2021-01-20 18:40:46'),
(342, 'FLX_UATPG', 'flixRate-Template392.jpg', NULL, '2021-01-20 18:40:46'),
(343, 'WBS_INH31', 'Web_STIKI-Template1.jpg', NULL, '2021-01-20 18:42:49'),
(344, 'WBS_INH31', 'Web_STIKI-Template2.jpg', NULL, '2021-01-20 18:42:49'),
(345, 'WBS_INH31', 'Web_STIKI-Template6.jpg', NULL, '2021-01-20 18:42:50'),
(346, 'WBS_INH31', 'Web_STIKI-Template7.jpg', NULL, '2021-01-20 18:42:50'),
(347, 'WBN_1B3V1', 'Web_Anime-Template1.jpg', NULL, '2021-01-20 18:43:46'),
(348, 'WBN_1B3V1', 'Web_Anime-Template2.jpg', NULL, '2021-01-20 18:43:46'),
(349, 'WBN_1B3V1', 'Web_Anime-Template6.jpg', NULL, '2021-01-20 18:43:46'),
(350, 'WBN_1B3V1', 'Web_Anime-Template7.jpg', NULL, '2021-01-20 18:43:46'),
(351, 'WBD_NRVCJ', 'Web_Dewan_Kesenian_Malang-Template1.jpg', NULL, '2021-01-20 18:44:44'),
(352, 'WBD_NRVCJ', 'Web_Dewan_Kesenian_Malang-Template2.jpg', NULL, '2021-01-20 18:44:44'),
(353, 'WBD_NRVCJ', 'Web_Dewan_Kesenian_Malang-Template6.jpg', NULL, '2021-01-20 18:44:44'),
(354, 'WBD_NRVCJ', 'Web_Dewan_Kesenian_Malang-Template7.jpg', NULL, '2021-01-20 18:44:44'),
(355, 'WBS_LW1G3', 'Web_Serial_Animasi-Template1.jpg', NULL, '2021-01-20 18:46:30'),
(356, 'WBS_LW1G3', 'Web_Serial_Animasi-Template2.jpg', NULL, '2021-01-20 18:46:30'),
(357, 'WBS_LW1G3', 'Web_Serial_Animasi-Template6.jpg', NULL, '2021-01-20 18:46:30'),
(358, 'WBS_LW1G3', 'Web_Serial_Animasi-Template7.jpg', NULL, '2021-01-20 18:46:30'),
(359, 'WBP_9GGRT', 'Web_Perumahan_Citra_Raya-Template1.jpg', NULL, '2021-01-20 18:47:25'),
(360, 'WBP_9GGRT', 'Web_Perumahan_Citra_Raya-Template2.jpg', NULL, '2021-01-20 18:47:25'),
(361, 'WBP_9GGRT', 'Web_Perumahan_Citra_Raya-Template6.jpg', NULL, '2021-01-20 18:47:25'),
(362, 'LPL_RYCBD', 'Lapole-Template1.jpg', NULL, '2021-01-20 18:48:50'),
(363, 'LPL_RYCBD', 'Lapole-Template2.jpg', NULL, '2021-01-20 18:48:50'),
(364, 'LPL_RYCBD', 'Lapole-Template6.jpg', NULL, '2021-01-20 18:48:50'),
(365, 'LPL_RYCBD', 'Lapole-Template7.jpg', NULL, '2021-01-20 18:48:50'),
(366, 'BTT_R00LV', 'Bettabell_Web-Template1.jpg', NULL, '2021-01-20 18:50:52'),
(367, 'BTT_R00LV', 'Bettabell_Web-Template2.jpg', NULL, '2021-01-20 18:50:52'),
(368, 'BTT_R00LV', 'Bettabell_Web-Template6.jpg', NULL, '2021-01-20 18:50:52'),
(369, 'BTT_R00LV', 'Bettabell_Web-Template7.jpg', NULL, '2021-01-20 18:50:52'),
(370, 'WBG_O7GD1', '_Web_Game_Wild_Rift-Template1.jpg', NULL, '2021-01-20 18:53:04'),
(371, 'WBG_O7GD1', '_Web_Game_Wild_Rift-Template2.jpg', NULL, '2021-01-20 18:53:04'),
(372, 'WBG_O7GD1', '_Web_Game_Wild_Rift-Template6.jpg', NULL, '2021-01-20 18:53:04'),
(373, 'WBG_O7GD1', '_Web_Game_Wild_Rift-Template7.jpg', NULL, '2021-01-20 18:53:04'),
(374, 'TMT_COXJH', 'OTOMOTIF_Site-Template73.jpg', NULL, '2021-01-20 18:55:33'),
(375, 'TMT_COXJH', 'OTOMOTIF_Site-Template74.jpg', NULL, '2021-01-20 18:55:33'),
(376, 'TMT_COXJH', 'OTOMOTIF_Site-Template75.jpg', NULL, '2021-01-20 18:55:33'),
(377, 'TMT_COXJH', 'OTOMOTIF_Site-Template76.jpg', NULL, '2021-01-20 18:55:33'),
(378, 'SMP_SS9U2', 'Simple_Theme-Template73.jpg', NULL, '2021-01-20 18:56:50'),
(379, 'SMP_SS9U2', 'Simple_Theme-Template74.jpg', NULL, '2021-01-20 18:56:50'),
(380, 'SMP_SS9U2', 'Simple_Theme-Template75.jpg', NULL, '2021-01-20 18:56:50'),
(381, 'SMP_SS9U2', 'Simple_Theme-Template76.jpg', NULL, '2021-01-20 18:56:50'),
(382, 'WBS_H4QBG', 'Website_informasi_game_MLBB-Template73.jpg', NULL, '2021-01-20 18:58:23'),
(383, 'WBS_H4QBG', 'Website_informasi_game_MLBB-Template74.jpg', NULL, '2021-01-20 18:58:23'),
(384, 'WBS_H4QBG', 'Website_informasi_game_MLBB-Template75.jpg', NULL, '2021-01-20 18:58:23'),
(385, 'WBS_H4QBG', 'Website_informasi_game_MLBB-Template76.jpg', NULL, '2021-01-20 18:58:23'),
(387, 'CRT_PRGZK', 'Creativent_org-watch.png', NULL, '2021-03-05 12:57:19'),
(388, 'DHS_6LLKT', 'idhoster_net-idhoster.png', NULL, '2021-03-18 16:27:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `TB_KARYA`
--

CREATE TABLE `TB_KARYA` (
  `ID_KARYA` varchar(20) NOT NULL,
  `ID_KATEGORI` varchar(10) DEFAULT NULL,
  `ID_SEMESTER` int(10) NOT NULL,
  `JUDUL` varchar(50) DEFAULT NULL,
  `DESKRIPSI` text,
  `PRODI` int(11) DEFAULT NULL,
  `DOSPEM` varchar(50) DEFAULT NULL,
  `LINK_DEMO` varchar(100) DEFAULT NULL,
  `LINK_VIDEO` varchar(100) DEFAULT NULL,
  `FOLDER` varchar(100) NOT NULL,
  `LOG_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `TB_KARYA`
--

INSERT INTO `TB_KARYA` (`ID_KARYA`, `ID_KATEGORI`, `ID_SEMESTER`, `JUDUL`, `DESKRIPSI`, `PRODI`, `DOSPEM`, `LINK_DEMO`, `LINK_VIDEO`, `FOLDER`, `LOG_TIME`) VALUES
('-RM_SM9ZU', 'PLK_B5YAC', 1, 'E-RMS RSUD Dr.Iskak', 'Aplikasi pengolahan data rekam medis rumah sakit Dr. Iskak tulung agung', 2, '-', '', '', 'E_RMS_RSUD_Dr_Iskak', '2021-03-05 13:05:01'),
('BC(_LYAVE', 'PLK_E0KME', 1, 'ABC (Asyiknya Belajar Ceria)', 'Game edukasi anak sebagai sarana belajar mengenal nama hewan, huruf, angka dan suku kata yang dipadukan dengan animasi dan suara yang menarik. Dan pada game ini juga terdapat memori game untuk melatih daya ingat anak.', 2, 'Chaulina Alfianti Oktavia, S.Kom., M.T', '', '', 'ABC__Asyiknya_Belajar_Ceria_', '2021-03-05 13:05:01'),
('BKN_9X23J', 'DSN_B4PFQ', 1, 'Booking Pendakian Gunung Panderman dan Buthak', '- Informasi tentang pendakian gunung khususnya Panderman dan Buthak hanya lewat sosmed (Instagram) yang tidak jelas siapa pemilik akunnya.\r\n- Jumlah pendaki yang kapasitas nya overload.\r\n- Sulit nya pihak yang berwenang dalam manajemen pendaki.', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Booking_Pendakian_Gunung_Panderman_dan_Buthak', '2021-03-05 13:05:01'),
('BRT_7VSUD', 'PLK_B5YAC', 1, 'BeritaKu', 'Web aplikasi untuk editor berita', 2, 'Sugeng Widodo, S.Kom., M.Kom', '', '', 'BeritaKu', '2021-03-05 13:05:01'),
('BTT_R00LV', 'PLK_B5YAC', 1, 'Bettabell Web', 'Sebuah web yang berisi pengetahuan tentang betta fish dan koleksi pribadi saya sendiri.', 1, 'Sugeng Widodo, S.Kom., M.Kom', '', '', 'Bettabell_Web', '2021-03-05 13:05:01'),
('CRT_PRGZK', 'PLK_4H0YU', 2, 'nestivent.org', 'Website untuk penyelenggaraan event baik kompetisi, seminar maupun workshop secara online dimana kalian dapat mengatur 99% kebutuhan kalian secara customize tanpa terhalang aturan tertentu.', 1, '', 'https://nestivent.org', '', 'Creativent_org', '2021-03-05 13:05:01'),
('CST_J3ERA', 'PLK_B5YAC', 1, 'Cost Calculator (Hitung Jarak)', 'Sebuah aplikasi berbasis web yang dibangun dengan Plugin Mapbox (mapbox-gl-directions) + Javascript untuk menghitung jarak dan ongkos kirim per kilometer sesuai jarak.', 1, '-', 'https://yogibagus.github.io/hitung-jarak', '', 'Cost_Calculator__Hitung_Jarak_', '2021-03-05 13:05:01'),
('DHR_I8D8K', 'PLK_B5YAC', 1, 'Dhuar Pesantren', '\"Dhuar Pesantren\" adalah pengembangan website pesantren yang di kembangkan oleh Team Dhuar menggunakan framework Codeigniter serta Bootstrap 4.0, sebagai media informasi pesantren dan juga sebagai media promosi pesantren. ', 2, '-', 'http://istanbul.teamdhuar.com/', '', 'Dhuar_Pesantren', '2021-03-05 13:05:01'),
('DHR_QFJQB', 'PLK_B5YAC', 1, 'Dhuar SIGFasUmKaltim', 'Dhuar Sistem Informasi Geografis Penyebaran Fasilitas Umum Di Kalimantan Timur adalah pengembangan website Sistem Informasi Geografis yang di kembangkan oleh Team Dhuar menggunakan framework Codeigniter serta Bootstrap 4.0.', 2, 'Subari, S.Kom., M.Kom', 'www.sig.teamdhuar.com', '', 'Dhuar_SIGFasUmKaltim', '2021-03-05 13:05:01'),
('DHS_6LLKT', 'PLK_4H0YU', 2, 'idhoster.net', 'IDHoster.Net bergerak pada penyediaan layanan web hosting dan domain sejak tahun 2020.\r\n\r\nDengan adanya IDHoster.Net diharapkan para pelajar, mahasiswa, UMKM dan lainnya dapat memiliki hosting dan domain berkualitas untuk website mereka dengan harga ya', 1, '', 'https://idhoster.net', '', 'idhoster_net', '2021-03-18 16:27:42'),
('FLX_UATPG', 'PLK_B5YAC', 1, 'flixRate', 'Web aplikasi untuk memberikan rating pada sebuah film.', 2, 'Sugeng Widodo, S.Kom., M.Kom', '', '', 'flixRate', '2021-03-05 13:05:01'),
('HTL_YK0QG', 'PLK_B5YAC', 1, 'Hotel edotel SMKN 2', 'Project Website tentang pemesanan dan konfrimasi by admin untuk SMKN 2 malang dan di admin ada Fitur login & CRUD yang dimana admin bisa konfrimasi customer dan update room & stock Room ,Print Data Customer untuk halaman utama di customer bisa login.', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Hotel_edotel_SMKN_2', '2021-03-05 13:05:01'),
('HTN_7OW9Q', 'PLK_B5YAC', 1, 'Hitung Zakat', 'Aplikasi ini bernama aplikasi hitung zakat yaitu kita bisa menghitung jumlah harta dan kewajiban kita bayar yaitu zakat maal dan zakat fitrah. Dengan aplikasi ini mempermudah kita dalam mengetahui kewajiban kita yang harus dibayarkan.', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Hitung_Zakat', '2021-03-05 13:05:01'),
('KTM_DCSHD', 'PLK_B5YAC', 1, 'Ketemu: yet another meeting app', 'Website video conference sederhana berbasis web memanfaatkan api dari jitsi', 2, '-', 'https://ketemu.diwangkara.dev/panjiganteng', '', 'Ketemu:_yet_another_meeting_app', '2021-03-05 13:05:01'),
('LPL_RYCBD', 'PLK_B5YAC', 1, 'Lapole', 'Sebuah website yang berisi tentang travelling', 1, 'Sugeng Widodo, S.Kom., M.Kom', '', '', 'Lapole', '2021-03-05 13:05:01'),
('MR(_L136J', 'DSN_B4PFQ', 1, 'MERO ( MEDIC HERO ) ', 'adanya desain MERO (Medic Hero) ini dapat memudahkan masyarakat dalam aktifitas didunia kesehatan.', 1, 'Febry Eka Purwiantono, S.Kom., M.Kom', '', '', 'MERO___MEDIC_HERO___', '2021-03-05 13:05:01'),
('NVS_4819U', 'PLK_E0KME', 1, 'Invasion Rush', 'Invasion Rush adalah sebuah aplikasi permainan FPS sebagai media hiburan dan pembelajaran pada masa pandemi COVID-19 dengan\r\ntema yang menganalogikan alien virus jahat penginvasi bumi.', 2, 'Arif Tirtana, S.Kom., M.Kom, Mahendra Wibawa, S.Sn', '', '', 'Invasion_Rush', '2021-03-05 13:05:01'),
('PDM_D12FK', 'PLK_LO9C2', 1, 'PDAM CASHLESS ', 'Penyampaian Keluhan Pribadi terhadap pelayanan yang PDAM berikan yang mungkin kurang maksimal atau yang lainnya.\r\nPembayaran cashless agar mempermudah pelanggan yang mungkin tidak dapat pergi ke kantor PDAM karena satu atau berbagai hal, ', 2, 'Hilman Nuril Hadi, S.Kom., M.Kom', '', '', 'PDAM_CASHLESS_', '2021-03-05 13:05:01'),
('PHT_S8BJG', 'PLK_E0KME', 1, 'PhotoMap', 'Aplikasi pengambilan foto beserta lokasi', 2, '-', '', '', 'PhotoMap', '2021-03-05 13:05:01'),
('PLK_0AIKO', 'DSN_B4PFQ', 1, 'Aplikasi M-POINT', 'salah satu hal yang dapat meningkatkan semangat belajar mahasiswa terutama yang memasuki semester tua adalah sebuah reward. Aplikasi ini bertujuan menambah benefit mahasiswa ketika mereka mengerjakan tugas,selain mendapatkan nilai,mendapatkan reward.', 4, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_M_POINT', '2021-03-05 13:05:01'),
('PLK_0D2P0', 'PLK_B5YAC', 1, 'Aplikasi BOKI ', 'Aplikasi berbasis website dengan menggunakan CodeIgniter. Memiliki fitur pengaturan pengeluaran, pemasukan, hutang & piutang, aset, modal, laporan laba rugi, laporan keuangan, dan laporan pajak.', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', 'https://boki.my.id/ (username : admin, pass : admin)', 'https://www.youtube.com/watch?v=2m-WCITdbRQ', 'Aplikasi_BOKI_', '2021-03-05 13:05:01'),
('PLK_3AF5H', 'DSN_B4PFQ', 1, 'Aplikasi Mobile App Malang Explore', 'Mobile aplikasi Malang Explore untuk membantu para pengunjung yang berada di luar kota maupun dalam kota untuk mendapatkan informasi bahkan mem-booking tiket dengan mudah melalui aplikasi ini.', 3, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Mobile_App_Malang_Explore', '2021-03-05 13:05:01'),
('PLK_3QQ7A', 'PLK_B5YAC', 1, 'Aplikasi Pembukuan Kas Pribadi', 'Aplikasi berfungsi sebagai pembukuan pemasukan dan pengeluaran pribadi agar pembukuan mudah dihitung dan dianalisa.', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Pembukuan_Kas_Pribadi', '2021-03-05 13:05:01'),
('PLK_45N70', 'DSN_B4PFQ', 1, 'Aplikasi Kursus Dan Penjualan Buku Indofira', 'aplikasi ini bertujuan untuk merancang sebuahaplikasi mobile yang dapat membantu pengguna untuk mencari buku maupun kursus secara online. Tidak hanya itu, aplikasi yang dirancang juga mampu untuk melakukan transaksi secara online untuk setiap buku.', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Kursus_Dan_Penjualan_Buku_Indofira', '2021-03-05 13:05:01'),
('PLK_8G1TS', 'PLK_LO9C2', 1, 'Aplikasi Pembelajaran GH-LEARNING', 'Membuat aplikasi pembelajaran yang kami harapkan dapat membantu para\r\nsiswa yang kesulitan dalam proses pembelajaran yang diberikan oleh sekolah.', 2, 'Hilman Nuril Hadi, S.Kom., M.Kom', '', '', 'Aplikasi_Pembelajaran_GH_LEARNING', '2021-03-05 13:05:01'),
('PLK_8J6BC', 'DSN_B4PFQ', 1, 'Aplikasi penjualan Jahe', '- Kurangnya platform aplikasi penjualan tanaman herbal (jahe)\r\n- Penjualan meningkat\r\n- Dikenal banyak orang', 3, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_penjualan_Jahe', '2021-03-05 13:05:01'),
('PLK_93103', 'PLK_LO9C2', 1, 'Aplikasi Klinik Rekam Medis', 'Manfaat dari pembuatan aplikasi ini yaitu :\r\n1) Bagi Klinik\r\na)	Mempermudah saat pencarian dan pengolahan data.\r\nb)	Mempermudah dan menghemat waktu saat pembuatan laporan.\r\nc)	Mengurangi terjadinya duplikasi data.\r\nd)	Meningkatkan kualitas pelayanan.\r\n ', 2, 'Hilman Nuril Hadi, S.Kom., M.Kom', '', '', 'Aplikasi_Klinik_Rekam_Medis', '2021-03-05 13:05:01'),
('PLK_95ZWJ', 'DSN_B4PFQ', 1, 'Aplikasi Perpustakaan Online “BukuQT”', 'Aplikasi yang menyediakan layanan ebook secara gratis yang bisa diakses melalui smartphone. Dimana masyarakat nantinya bisa membaca berbagai macam buku yang tersedia kapanpun dan dimananpun.', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Perpustakaan_Online_“BukuQT”', '2021-03-05 13:05:01'),
('PLK_BOW1L', 'DSN_B4PFQ', 1, 'Aplikasi Marketplace Oleh-oleh Khas Daerah', 'Wisatawan tidak tahu oleh-oleh khas daerah yang didatanginya. Terkadang orang ingin membeli oleh-oleh khas daerah lain yang tidak dijual di daerahnya. Sebuah peluang bagi pelaku UMKM untuk melebarkan sayap dengan memasarkan produknya ke daerah lain. ', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Marketplace_Oleh_oleh_Khas_Daerah', '2021-03-05 13:05:01'),
('PLK_CJMNG', 'PLK_LO9C2', 1, 'Aplikasi E-Canteen', 'Aplikasi atau program yang kami buat ini diharapkan dapat memberikan rasa aman bagi customer (pembeli) disaat mereka ingin pergi untuk membeli / memesan sesuatu di kantin,\r\nsehingga customer hanya perlu datang dan langsung duduk di kursi yang tersedia', 2, 'Hilman Nuril Hadi, S.Kom., M.Kom', '', '', 'Aplikasi_E_Canteen', '2021-03-05 13:05:01'),
('PLK_DSLTO', 'PLK_B5YAC', 1, 'Aplikasi KursusLAnguage', 'Web yang dibuat untuk melakukan pendaftaran kursus bahasa di Language.', 2, 'Hilman Nuril Hadi, S.Kom., M.Kom', '', '', 'Aplikasi_KursusLAnguage', '2021-03-05 13:05:01'),
('PLK_E0HFX', 'PLK_LO9C2', 1, 'Aplikasi to do list skripsi', 'Fungsi Utama Program ini digunakan untuk manajemen progress pengerjaan skripsi mahasiswa Aplikasi ini dibuat dengan Java Dekstop', 2, 'Hilman Nuril Hadi, S.Kom., M.Kom', '', '', 'Aplikasi_to_do_list_skripsi', '2021-03-05 13:05:01'),
('PLK_EPJHC', 'DSN_B4PFQ', 1, 'Aplikasi Tour Travel Bali', 'aplikasi android ini merupakan bentuk penawaran kenyaman bagi konsumen jasa transportasi travel yang tidak perlu lagi menanyakan dan mencatat jadwal keberangkatan dari travel tersebut.Sistem ini dirancang sedemikian rupa untuk calon penumpang.', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Tour_Travel_Bali', '2021-03-05 13:05:01'),
('PLK_F0OK1', 'PLK_LO9C2', 1, 'Aplikasi Jasa titip barang', 'Manfaat dari pembuatan aplikasi ini yaitu :\r\na)	Mempermudah saat pencarian dan pengolahan data jasa titip.\r\nb)	Mempermudah dan menghemat waktu saat pembuatan laporan jasa titip.\r\nc)	Mengurangi terjadinya duplikasi data.\r\nd)	Meningkatkan kualitas pelayana', 2, 'Hilman Nuril Hadi, S.Kom., M.Kom', '', '', 'Aplikasi_Jasa_titip_barang', '2021-03-05 13:05:01'),
('PLK_F49AZ', 'DSN_B4PFQ', 1, 'Aplikasi Dhuar Wisata', 'mempermudah pencarian lokasi Destinasi Wisata buat siapa saja yang memerlukan informasi tersebut. Kemudian pencarian lokasi tersebut bisa dijadikan sebagai bahan pertimbangan dalam menentukan rute jalur yang tepat untuk mencapai lokasi fasilitas.', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Dhuar_Wisata', '2021-03-05 13:05:01'),
('PLK_FEYYQ', 'DSN_B4PFQ', 1, 'Aplikasi Pemesanan Tiket Travel Ntap Travel', 'aplikasi yang bertujuan untuk menangani masalah-masalah seperti pemesanan tiket travel dilakukan secara offline dengan menerapkan sistem baru pemesanan secara online dan otomatis.', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Pemesanan_Tiket_Travel_Ntap_Travel', '2021-03-05 13:05:01'),
('PLK_FTG92', 'PLK_B5YAC', 1, 'Aplikasi Kasir', 'Aplikasi kasir ini berfungsi sebagai pencatatan penjualan produk dalam suatu toko.', 2, 'Hilman Nuril Hadi, S.Kom., M.Kom', '', '', 'Aplikasi_Kasir', '2021-03-05 13:05:01'),
('PLK_GF9B8', 'DSN_B4PFQ', 1, 'Aplikasi Sistem Informasi Pertanian Hidroponik', 'Karena banyaknya petani hidroponik yang kesulitan untuk mencari informasi seputar pertanian hidroponik dan marketplace yang menjual produk hidroponik, dibuatlah aplikasi platform ini yang dapat mendukung kegiatan tersebut.', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Sistem_Informasi_Pertanian_Hidroponik', '2021-03-05 13:05:01'),
('PLK_GP31B', 'PLK_LO9C2', 1, 'Aplikasi Rental Mobil', 'a) Memberikan kemudahan dalam proses transaksi penyewaan dan pengembalian mobil.\r\n   b) Memberikan informasi bukti penyewaan dan membantu dalam penyimpanan data.\r\n   c) Mempermudah pembukuan\r\n   d) Data lebih mudah di backup', 2, 'Hilman Nuril Hadi, S.Kom., M.Kom', '', '', 'Aplikasi_Rental_Mobil', '2021-03-05 13:05:01'),
('PLK_IW5VL', 'DSN_B4PFQ', 1, 'Aplikasi Katalog Perpustakaan', '   Aplikasi ini bertujuan sebagai tools atau alat untuk memudahkan orang yang ingin datang ke perpustakaan tersebut untuk melihat denah dan tata letak buku.', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Katalog_Perpustakaan', '2021-03-05 13:05:01'),
('PLK_K7N8C', 'DSN_B4PFQ', 1, 'Aplikasi Panduan Travelling', 'Aplikasi mobile yang mempermudah menampilkan tujuan wisata, kuliner khas dan penginapan arau hotel dari berbagai kota di Indonesia.', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Panduan_Travelling', '2021-03-05 13:05:01'),
('PLK_MTYN2', 'DSN_B4PFQ', 1, 'Aplikasi Mobile E-learning Untuk Siswa SD', 'Pembelajaran yang sebelumnya dilakukan secara manual melalui tatap muka, kini dapat dilakukan di mana, kapan oleh siapa saja dan oleh berapa banyakjumlah orangnya. Penggunaan teknologi dalam pembelajaran biasa disebut dengan E-Learning.', 4, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Mobile_E_learning_Untuk_Siswa_SD', '2021-03-05 13:05:01'),
('PLK_MXWJY', 'DSN_B4PFQ', 1, 'Aplikasi Tapak Tilas', 'Aplikasi ini digunakkan untuk memudahkan pengunjung membaca sejarah artefak atau relief tersebut dengan hanya memindai barcode yang dipajang di depan artefak atau relief tersebut yang sebelum nya berupa papan berisi tulisan sejarah yang cukup panjang', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Tapak_Tilas', '2021-03-05 13:05:01'),
('PLK_N5GX9', 'DSN_B4PFQ', 1, 'Aplikasi Edukasi Anak', 'Aplikasi edukasi anak adalah aplikasi yang memberi pengetahuan terhadap anak mengenai benda” \r\nyang sering kita jumpai seperti sayur, binatang dan buah yang ber basis game. ', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Edukasi_Anak', '2021-03-05 13:05:01'),
('PLK_NH4MZ', 'DSN_B4PFQ', 1, 'Aplikasi Informasi Lingkungan Sekitar (SPHERE)', 'Banyak pekerja yang pekerjaannya diluar ruangan kesulitan dengan cuaca yang tidak menentu. Kondisi sungai yang dangkal dan mudah banjir, dibutuhkan suatu alat untuk memantau ketinggian agar penduduk sekitar bisa bersiap - siap jika banjir akan datang', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Informasi_Lingkungan_Sekitar__SPHERE_', '2021-03-05 13:05:01'),
('PLK_Q3PMC', 'DSN_B4PFQ', 1, 'Aplikasi Travelling Guide & Blog DULIN', 'Aplikasi Dulin hadir sebagai solusi untuk menjembatani masalah dibalik berkembangnya bidang pariwisata dan ekonomi kreatif di Indonesia.', 4, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Travelling_Guide___Blog_DULIN', '2021-03-05 13:05:01'),
('PLK_R849P', 'PLK_LO9C2', 1, 'Aplikasi Manajement Skripsi', 'Manfaat:\r\n• Membantu Dosen dalam memantau dan mengontrol mahasiswa dalam membuat skripsinya.\r\n• Membantu Mahasiswa dalam membuat dan berkonsultasi kepada dosen dalam progress membuat skripsinya.', 2, 'Hilman Nuril Hadi, S.Kom., M.Kom', '', '', 'Aplikasi_Manajement_Skripsi', '2021-03-05 13:05:01'),
('PLK_S5ZQF', 'DSN_B4PFQ', 1, 'Aplikasi Poty Hydro', 'aplikasi yang membantu anda mewujudkan budidaya tanaman secara hidroponik secara praktis dan otomatis. Poty memiliki sistem budidaya hidroponik yang berkualitas dan terintegrasi secara otomatis.', 3, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Poty_Hydro', '2021-03-05 13:05:01'),
('PLK_SMYAT', 'DSN_B4PFQ', 1, 'Aplikasi Pencarian Bengkel (Gobengkel)', 'Aplikasi Gobengkel ini adalah dari permasalah wisatawan yang mana ketika melalukan perjalanan\r\nsecara mandiri dan menggunakan kendaraan pribadi baik itu motor atau mobil sering kali di tengah perjalanan motor atau mobilnya mengalami masalah.', 3, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Pencarian_Bengkel__Gobengkel_', '2021-03-05 13:05:01'),
('PLK_TBXZD', 'DSN_B4PFQ', 1, 'Aplikasi Simple Smart Daring (SSD)', 'Aplikasi ini dibuat se-Simple mungkin guna membantu para peserta pelatihan yang masih banyak/kurang memahami mengenai teknologi komputerisasi terutama bagi peserta yang sudah berusia lanjut, mereka sering kesulitan dengan sistem daring saat ini.', 4, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Simple_Smart_Daring__SSD_', '2021-03-05 13:05:01'),
('PLK_U91D6', 'PLK_B5YAC', 1, 'Aplikasi Web Perpustakaan SMA Shalahuddin', 'Aplikasi untuk mencatat data anggota serta histori peminjaman dan pengembalian yang ada di dalam perpustakaan.', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Web_Perpustakaan_SMA_Shalahuddin', '2021-03-05 13:05:01'),
('PLK_WPOQR', 'DSN_B4PFQ', 1, 'Aplikasi Pencarian Guru Les Privat “EduOne”', 'a. Terdapat kesulitan guru privat dalam mencari dan memasarkan layanannya. b. Pencarian guru les privat yang memakan waktu cukup lama, umumnya pencarian guru lesprivat dilakukan melalui kontak rekan profesi, rekomendasi pengguna jasa les sebelumnya', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Pencarian_Guru_Les_Privat_“EduOne”', '2021-03-05 13:05:01'),
('PLK_XQ7WY', 'DSN_B4PFQ', 1, 'Aplikasi E-learning', 'project yang dirancang ini sebagai e-learning yang dapat membantu memutus penyebaran Covid-19 serta menjaga kesehatan keselamatan jiwa guru dan siswa.', 4, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_E_learning', '2021-03-05 13:05:01'),
('PLK_Y3AOO', 'PLK_LO9C2', 1, 'Aplikasi Penjualan Toko Komputer ', 'membuat Sistem Aplikasi Penjualan pada sebuah toko komputer yang dapat mengatasi ketidakcocokan antara jumlah penjualan dengan uang yang didapat serta penghematan waktu dan tenaga jika dibandingkan dengan harus mengisi buku penjualan secara manual.', 2, 'Hilman Nuril Hadi, S.Kom., M.Kom', '', '', 'Aplikasi_Penjualan_Toko_Komputer_', '2021-03-05 13:05:01'),
('PLK_Z49FM', 'DSN_B4PFQ', 1, 'Aplikasi Pencarian Event Sekolah Annonce.', 'Masih banyak sekali sekolah-sekolah yang mengumumkan kegiatan sekolah baik secara akademik maupun non-akademik melalui surat-menyurat. Bila ada kegiatan yang harus dibayar, masih banyak sekali sekolah-sekolah yang melakukan pembayaran tersebut manual', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Pencarian_Event_Sekolah_Annonce_', '2021-03-05 13:05:01'),
('PLK_ZDIU8', 'DSN_B4PFQ', 1, 'Aplikasi Pendukung Ternak Ayam', 'aplikasi ini bertujuan sebagai pendukung bagi para peternak sekaligus menjadi mitra bisnis dalam bidang peternakan ayam.', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Aplikasi_Pendukung_Ternak_Ayam', '2021-03-05 13:05:01'),
('PLM_BHX33', 'PLK_B5YAC', 1, 'Plamil - Planner makanan selama 1 minggu', 'Aplikasi planner makanan selama 1 minggu ini digunakkan untuk membantu pengguna atau orang-orang untuk merencanakan menu makan selama 1 minggu kedepan yang bisa juga difilter bila pengguna memiliki kebutuhan khusus seperti alergi.', 1, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Plamil___Planner_makanan_selama_1_minggu', '2021-03-05 13:05:01'),
('PML_T7IZU', 'PLK_LO9C2', 1, 'Pemilihan Berbasis E-Voting ', 'Dengan adanya aplikasi e – voting ini, diharapkan proses pemilu dapat terjadi dengan efektif dan efisien. Bertujuan menyelenggarakan pemungutan suara dengan biaya hemat dan penghitungan suara yang cepat dengan menggunakan sistem yang aman dan mudah.', 2, 'Hilman Nuril Hadi, S.Kom., M.Kom', '', '', 'Pemilihan_Berbasis_E_Voting_', '2021-03-05 13:05:01'),
('PNG_V02TS', 'PLK_B5YAC', 1, 'PENGEMBANGAN SISTEM INFORMASI MANAJEMEN RENCANA...', 'Aplikasi Sistem Informasi untuk mendukung manajemen ketercapaian Rencana Operasional yang terintegrasi dengan data yang ada di STIKI Malang serta dengan Google Drive sebagai tempat penyimpanan filenya. ', 1, 'Koko Wahyu Prasetyo, S.Kom, M.TI', '', '', 'PENGEMBANGAN_SISTEM_INFORMASI_MANAJEMEN_RENCANA___', '2021-03-05 13:05:01'),
('PNT_HGBLB', 'PLK_LO9C2', 1, 'Point of Sales at Polopendem', '•	Memberi efisiensi waktu\r\n•	Kemudahan mencatat penjualan\r\n•	Pengoperasian POS yang mudah karena UI nya yang friendly\r\n•	Memberi data penjualan terpisah sehingga data penjualan antara angkringan dan restoran dapat dibedakan. ', 2, 'Hilman Nuril Hadi, S.Kom., M.Kom', '', '', 'Point_of_Sales_at_Polopendem', '2021-03-05 13:05:01'),
('PRP_26YDK', 'PLK_LO9C2', 1, 'Perpustakaan SMA SHALAHUDDIN MALANG', 'aplikasi sistem informasi yang memadai, untuk memproses peminjam, pengembalian, dan laporan dan menghasilkan informasi yang cepat dan tepat. Aplikasi ini membantu proses peminjaman, pengembalian, serta membantu mempercepat proses pembuatan laporan.', 2, 'Hilman Nuril Hadi, S.Kom., M.Kom', '', '', 'Perpustakaan_SMA_SHALAHUDDIN_MALANG', '2021-03-05 13:05:01'),
('PZZ_VFIGS', 'PLK_E0KME', 1, 'Puzzle Game with Unreal Engine', 'Game Puzzle ini adalah aplikasi game Android yang sudah meluncur Alpha Test di Play Store untuk mendapatkan aplikasi dan mencari Bug. ', 2, '-', 'https://youtu.be/evJGIPaNp40', 'https://youtu.be/evJGIPaNp40', 'Puzzle_Game_with_Unreal_Engine', '2021-03-05 13:05:01'),
('RPL_ZQ6L7', 'PLK_B5YAC', 1, 'Replica We Work Remotely', 'Berupa CRUD Web untuk mencari pekerjaan secara remote. Dan untuk pemberi kerja sebagai tempat untuk menawarkan / Post lowongan pekerjaan secara remote.', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Replica_We_Work_Remotely', '2021-03-05 13:05:01'),
('SKR_ZSJKH', 'PLK_B5YAC', 1, 'Skrining Mandiri COVID-19', 'bertujuan untuk melakukan deteksi dini terhadap masyarakat guna mengidentifikasi populasi yang diharuskan untuk menentukan ada atau tidaknya gejala dari COVID-19.', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Skrining_Mandiri_COVID_19', '2021-03-05 13:05:01'),
('SMB_CGI59', 'PLK_B5YAC', 1, 'Sambat Online', 'Website yang saya buat yaitu website pengaduan layanan online yang digunakan untuk pengaduan masyarakat yang penting bagi pemerintah untuk melihat seberapa besar keberhasilan dalam melaksanakan kegiatan.', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Sambat_Online', '2021-03-05 13:05:01'),
('SMP_SS9U2', 'PLK_B5YAC', 1, 'Simple Theme', 'Sebuah website yang berisi konten seputar berita teknologi di Indonesia.', 1, 'Sugeng Widodo, S.Kom., M.Kom', '', '', 'Simple_Theme', '2021-03-05 13:05:01'),
('SST_8FAZI', 'PLK_B5YAC', 1, 'Sistem Pemesanan Tiket Travel (Kelana Indonesia)', 'Aplikasi untuk pemesanan tiket travel dari PT. Kelana Indonesia, Dapat mempermudah admin melakukan pencatatan pemesanan, pembuatan jadwal, Manager untuk mengkonfirmasi pembayaran,Driver melihat detail pemesan tiket travel.', 2, 'Hilman Nuril Hadi, S.Kom., M.Kom', '', '', 'Sistem_Pemesanan_Tiket_Travel__Kelana_Indonesia_', '2021-03-05 13:05:01'),
('SST_8FQ92', 'PLK_B5YAC', 1, 'Sistem Informasi dan Manajemen Hotel The Seminyak', 'memiliki 2 sudut pandang, yaitu user dan admin. user dapat melakukan reservasi kamar, memberikan kritik saran dan melihat isi website. Kemudian untuk beralih kepada sudut admin, harus melakukan login. ', 1, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Sistem_Informasi_dan_Manajemen_Hotel_The_Seminyak', '2021-03-05 13:05:01'),
('SST_EKLJI', 'PLK_B5YAC', 1, 'Sistem Informasi Keuangan PPTIK STIKI Malang', '-', 2, 'Meivi Kartikasari, S.Kom, M.T', '', '', 'Sistem_Informasi_Keuangan_PPTIK_STIKI_Malang', '2021-03-05 13:05:01'),
('STK_UJX35', 'PLK_LO9C2', 1, 'STIKI Cashless Online Canteen', 'Tujuannya :\r\na)	Membantu Pemerintah dalam pencegahan Covid-19 \r\nb)	Mengurangi adanya kontak langsung saat pembelian makanan atau minuman di kantin\r\nc)	Mengurangi adanya kesalahan pembayaran', 2, 'Hilman Nuril Hadi, S.Kom., M.Kom', '', '', 'STIKI_Cashless_Online_Canteen', '2021-03-05 13:05:01'),
('THS_77AQP', 'PLK_B5YAC', 1, 'Thesis Monitoring', 'Fungsi Utama Program ini digunakan untuk memonitoring skripsi mahasiswa, dalam program ini terdapat 2 level User yaitu Mahasiswa dan Dosen User dengan level mahasiswa dapat membuat todolist, jadwal konsultasi, monitoring progress skripsi', 2, 'Hilman Nuril Hadi, S.Kom., M.Kom', '', '', 'Thesis_Monitoring', '2021-03-05 13:05:01'),
('TKB_QV1B7', 'PLK_B5YAC', 1, 'Toko Buku', 'Fitur Member : Register, Login, Deposit, Pembelian, Riwayat transaksi. Fitur Admin : Manajemen Produk(tambah,hapus,dan edit), Manajemen transaksi(terima,tolak,refund), Management user(tambah,hapus,dan edit).', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Toko_Buku', '2021-03-05 13:05:01'),
('TMT_COXJH', 'PLK_B5YAC', 1, 'OTOMOTIF Site', 'pada laman OTOMOTIF Site terdapat berbagai keterangan tentang mobil-mobil sport, berbagai inovasi terobosan baru dari dunia otomotif terkini dan trend-trend yang menjadi minat di kalangan penghobi otomotif.', 1, '-', '', '', 'OTOMOTIF_Site', '2021-03-05 13:05:01'),
('TRC_02PYU', 'PLK_B5YAC', 1, 'Tracer study', 'Sebuah aplikasi yang digunakan untuk mendata alumni perguruan tinggi. Pada aplikasi ini juga terdapat info berita dan lowongan kerja yang diunggah oleh pihak yang berwenang, dalam aplikasi ini dibatasi hanya pihak universitas dan fakultas.', 2, 'Hilman Nuril Hadi, S.Kom., M.Kom', '', '', 'Tracer_study', '2021-03-05 13:05:01'),
('VNT_2457M', 'PLK_B5YAC', 1, 'Event Stiki', 'Event Stiki adalah aplikasi web pengajuan proposal kegiatan yang diajukan oleh mahasiswa saat mengadakan kegiatan di area kampus.', 2, 'Hilman Nuril Hadi, S.Kom., M.Kom', '', '', 'Event_Stiki', '2021-03-05 13:05:01'),
('WBD_NRVCJ', 'PLK_B5YAC', 1, 'Web Dewan Kesenian Malang', 'web Dewan Kesenian Malang yang menampilkan berita acara, informasi kegiatan DKM, dan Kritik dan saran pengguna terhadap Dewan Kesenian Malang.', 1, 'Sugeng Widodo, S.Kom., M.Kom', '', '', 'Web_Dewan_Kesenian_Malang', '2021-03-05 13:05:01'),
('WBG_O7GD1', 'PLK_B5YAC', 1, ' Web Game Wild Rift', 'Sebuah web yang menjelaskan game mobile LOL Wild Rift tentang update terbaru dan event terbaru di game tersebut.', 1, 'Sugeng Widodo, S.Kom., M.Kom', '', '', '_Web_Game_Wild_Rift', '2021-03-05 13:05:01'),
('WBN_1B3V1', 'PLK_B5YAC', 1, 'Web Anime', 'Mengenalkan Anime-anime yang cukup terkenal dimasanya, serta pengumuman mengenai jadwal anime yang akan tayang pada musim selanjutnya.', 1, 'Sugeng Widodo, S.Kom., M.Kom', '', '', 'Web_Anime', '2021-03-05 13:05:01'),
('WBP_9GGRT', 'PLK_B5YAC', 1, 'Web Perumahan Citra Raya', 'website untuk menampilkan berbagai bentuk dan tipe rumah\r\n', 1, 'Sugeng Widodo, S.Kom., M.Kom', '', '', 'Web_Perumahan_Citra_Raya', '2021-03-05 13:05:01'),
('WBS_2SDZN', 'PLK_B5YAC', 1, 'Website Sistem Informasi Perpustakaan', 'Aplikasi web ini memiliki fitur login admin/petugas dan manajemen pengelolaan perpustakaan seperti biasa namun lebih terintegrasi dengan database serta dapat diakses online melalui internet.', 1, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', '', 'Website_Sistem_Informasi_Perpustakaan', '2021-03-05 13:05:01'),
('WBS_6D98K', 'PLK_B5YAC', 1, 'Website EARSIP', 'Website ini menjual produk sistem informasi pengarsipan untuk kantor atau perusahaan-perusahaan yang membutuhkan dengan paket paket yang telah ditentukan.', 2, 'Chaulina Alfianti, S.Kom.,MT', 'www.earsip.xyz', '', 'Website_EARSIP', '2021-03-05 13:05:01'),
('WBS_FH4B9', 'PLK_B5YAC', 1, 'Website Profile Bina Taqwa', 'website yang ditujukan untuk Pondok Pesantren Bina Taqwa yang berisi tentang informasi dari pesantren Bina Taqwa yang berguna untuk meningkatkan kredibilitas dan agar dapat dikenal di tengah gelombang internet.', 2, 'Adnan Zulkarnain, S.Kom., M.M.S.I', '', 'https://www.youtube.com/watch?v=SUwyAUmynsA', 'Website_Profile_Bina_Taqwa', '2021-03-05 13:05:01'),
('WBS_H4QBG', 'PLK_B5YAC', 1, 'Website informasi game MLBB', 'Bentuk permainan terstruktur, biasanya dilakukan untuk hiburan atau kesenangan, bisa juga sebagai alat pendidikan.', 1, 'Sugeng widodo, S Kom, M Kom', '', '', 'Website_informasi_game_MLBB', '2021-03-05 13:05:01'),
('WBS_INH31', 'PLK_B5YAC', 1, 'Web STIKI', 'web STIKI yang menampilkan berita, pengumuman seminar dan informasi-informasi tentang STIKI.', 1, 'Sugeng Widodo, S.Kom., M.Kom', '', '', 'Web_STIKI', '2021-03-05 13:05:01'),
('WBS_LW1G3', 'PLK_B5YAC', 1, 'Web Serial Animasi', 'website untuk menampilkan berbagai macam serial animasi', 1, 'Sugeng Widodo, S.Kom., M.Kom', '', '', 'Web_Serial_Animasi', '2021-03-05 13:05:01'),
('WBS_VWBGC', 'PLK_B5YAC', 1, 'Website Mebel Agam Jaya Furniture ', 'Website yang dapat digunakan untuk melihat katalog produk dan juga memesan produk tersebut melalui Whatsapp. ', 2, '-', 'https://agam-jaya.web.app/', '', 'Website_Mebel_Agam_Jaya_Furniture_', '2021-03-05 13:05:01');

--
-- Trigger `TB_KARYA`
--
DELIMITER $$
CREATE TRIGGER `DEL_AUTHOR` BEFORE DELETE ON `TB_KARYA` FOR EACH ROW BEGIN

DELETE FROM TB_AUTHOR WHERE ID_KARYA = OLD.ID_KARYA;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `DEL_FOTO` BEFORE DELETE ON `TB_KARYA` FOR EACH ROW BEGIN

DELETE FROM TB_FOTO WHERE ID_KARYA = OLD.ID_KARYA;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `DEL_LIKE` BEFORE DELETE ON `TB_KARYA` FOR EACH ROW BEGIN

DELETE FROM TB_LIKE WHERE ID_KARYA = OLD.ID_KARYA;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `TB_KATEGORI`
--

CREATE TABLE `TB_KATEGORI` (
  `ID_KATEGORI` varchar(10) NOT NULL,
  `ID_SEMESTER` int(10) NOT NULL,
  `KATEGORI` varchar(30) DEFAULT NULL,
  `KETERANGAN` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `TB_KATEGORI`
--

INSERT INTO `TB_KATEGORI` (`ID_KATEGORI`, `ID_SEMESTER`, `KATEGORI`, `KETERANGAN`) VALUES
('DSN_B4PFQ', 1, 'Desain Prototype UIUX', ''),
('PLK_4H0YU', 2, 'Aplikasi Website', ''),
('PLK_B5YAC', 1, 'Aplikasi Website', ''),
('PLK_E0KME', 1, 'Aplikasi Mobile', ''),
('PLK_LO9C2', 1, 'Aplikasi Desktop', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `TB_LIKE`
--

CREATE TABLE `TB_LIKE` (
  `ID_LIKE` int(11) NOT NULL,
  `ID_KARYA` varchar(20) DEFAULT NULL,
  `KODE_USER` varchar(20) NOT NULL,
  `LOG_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `TB_LIKE`
--

INSERT INTO `TB_LIKE` (`ID_LIKE`, `ID_KARYA`, `KODE_USER`, `LOG_TIME`) VALUES
(2, 'PDM_D12FK', 'USER_e4d56', '2021-01-19 14:56:08'),
(3, 'STK_UJX35', 'USER_d2d92', '2021-01-19 15:26:13'),
(4, 'BKN_9X23J', 'USER_a8a92', '2021-01-20 03:46:17'),
(5, 'BC(_LYAVE', 'USER_e4d56', '2021-01-20 04:17:33'),
(6, 'PHT_S8BJG', 'USER_e4d56', '2021-01-20 06:32:29'),
(7, 'PLK_3AF5H', 'USER_ff897', '2021-01-20 06:45:58'),
(8, 'CST_J3ERA', 'USER_d2d92', '2021-01-20 12:12:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `TB_PEMBICARA`
--

CREATE TABLE `TB_PEMBICARA` (
  `ID_PEMBICARA` int(10) NOT NULL,
  `FOTO` varchar(50) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `MAJOR` varchar(20) NOT NULL,
  `AGENDA` varchar(20) NOT NULL,
  `KETERANGAN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `TB_PENGATURAN`
--

CREATE TABLE `TB_PENGATURAN` (
  `ID_PENGATURAN` int(10) NOT NULL,
  `NAME` varchar(20) DEFAULT NULL,
  `VALUE` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `TB_PENGATURAN`
--

INSERT INTO `TB_PENGATURAN` (`ID_PENGATURAN`, `NAME`, `VALUE`) VALUES
(1, 'tentang', 'STIKI TECHNOFEST merupakan pameran produk Tugas Akhir, Tugas Akhir Mata Kuliah, Magang, Lomba, Proyek Individu dan Proyek Karya Kelompok Bidang Minat dari Program studi Teknik Informatika, Sistem Informatika dan Manajemen Informatika'),
(2, 'dev_mode', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `TB_PRODI`
--

CREATE TABLE `TB_PRODI` (
  `ID_PRODI` int(10) NOT NULL,
  `PRODI` varchar(30) DEFAULT NULL,
  `KETERANGAN` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `TB_PRODI`
--

INSERT INTO `TB_PRODI` (`ID_PRODI`, `PRODI`, `KETERANGAN`) VALUES
(1, 'Manajemen Informatika', ''),
(2, 'Teknik Informatika', ''),
(3, 'Desain Komunikasi Visual', ''),
(4, 'Sistem Informasi', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `TB_SEMESTER`
--

CREATE TABLE `TB_SEMESTER` (
  `ID_SEMESTER` int(10) NOT NULL,
  `SEMESTER` varchar(30) NOT NULL,
  `STATUS` int(1) NOT NULL DEFAULT '0',
  `KETERANGAN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `TB_SEMESTER`
--

INSERT INTO `TB_SEMESTER` (`ID_SEMESTER`, `SEMESTER`, `STATUS`, `KETERANGAN`) VALUES
(1, 'Ganjil 2020/2021', 0, ''),
(2, 'Genap 2020/2021', 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `TB_TOKEN`
--

CREATE TABLE `TB_TOKEN` (
  `ID_TOKEN` int(10) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `TOKEN` varchar(200) NOT NULL,
  `DATE_CREATED` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `TB_VISITOR`
--

CREATE TABLE `TB_VISITOR` (
  `ID_VISITOR` int(11) NOT NULL,
  `KODE_USER` varchar(20) DEFAULT NULL,
  `PAGE` varchar(11) DEFAULT NULL,
  `LOG_TIME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `TB_VISITOR`
--

INSERT INTO `TB_VISITOR` (`ID_VISITOR`, `KODE_USER`, `PAGE`, `LOG_TIME`) VALUES
(6, 'USER_d2d92', 'home', '1611144666'),
(7, 'USER_d2d92', 'CST_J3ERA', '1611144695'),
(8, 'USER_d2d92', 'CST_J3ERA', '1611144732'),
(13, 'USER_d2d92', 'CST_J3ERA', '1611146763'),
(14, 'USER_d2d92', 'CST_J3ERA', '1611146793'),
(15, 'USER_d2d92', 'CST_J3ERA', '1611146818'),
(16, 'USER_d2d92', 'CST_J3ERA', '1611146846'),
(17, 'USER_d2d92', 'CST_J3ERA', '1611146871'),
(18, 'USER_d2d92', 'CST_J3ERA', '1611146887'),
(19, 'USER_d2d92', 'CST_J3ERA', '1611146898'),
(20, 'USER_d2d92', 'CST_J3ERA', '1611146926'),
(21, 'USER_d2d92', 'CST_J3ERA', '1611146950'),
(22, NULL, 'PLK_MTYN2', '1611146954'),
(23, 'USER_d2d92', 'CST_J3ERA', '1611147006'),
(24, 'USER_d2d92', 'CST_J3ERA', '1611147045'),
(25, 'USER_d2d92', 'CST_J3ERA', '1611147061'),
(26, 'USER_d2d92', 'CST_J3ERA', '1611147080'),
(27, 'USER_d2d92', 'CST_J3ERA', '1611147083'),
(29, 'USER_d2d92', 'CST_J3ERA', '1611147098'),
(41, 'USER_d2d92', 'CST_J3ERA', '1611147111'),
(42, 'USER_d2d92', 'CST_J3ERA', '1611147145'),
(43, 'USER_d2d92', 'CST_J3ERA', '1611147167'),
(44, 'USER_d2d92', 'CST_J3ERA', '1611147180'),
(45, 'USER_d2d92', 'CST_J3ERA', '1611147195'),
(46, 'USER_d2d92', 'home', '1611147200'),
(47, 'USER_d2d92', 'STK_UJX35', '1611147261'),
(48, 'USER_d2d92', 'STK_UJX35', '1611147307'),
(49, 'USER_d2d92', 'STK_UJX35', '1611147319'),
(50, 'USER_d2d92', 'STK_UJX35', '1611147329'),
(51, 'USER_d2d92', 'STK_UJX35', '1611147345'),
(52, 'USER_d2d92', 'STK_UJX35', '1611147385'),
(53, 'USER_d2d92', 'STK_UJX35', '1611147395'),
(54, 'USER_d2d92', 'STK_UJX35', '1611147429'),
(55, 'USER_d2d92', 'STK_UJX35', '1611147446'),
(56, 'USER_d2d92', 'STK_UJX35', '1611147481'),
(57, 'USER_d2d92', 'STK_UJX35', '1611147510'),
(58, 'USER_d2d92', 'STK_UJX35', '1611147537'),
(59, 'USER_d2d92', 'STK_UJX35', '1611147558'),
(60, 'USER_d2d92', 'STK_UJX35', '1611147566'),
(61, 'USER_d2d92', 'home', '1611147570'),
(65, 'USER_d2d92', 'home', '1611151673');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `TB_AGENDA`
--
ALTER TABLE `TB_AGENDA`
  ADD PRIMARY KEY (`ID_AGENDA`);

--
-- Indexes for table `TB_AUTH`
--
ALTER TABLE `TB_AUTH`
  ADD PRIMARY KEY (`KODE_USER`);

--
-- Indexes for table `TB_AUTHOR`
--
ALTER TABLE `TB_AUTHOR`
  ADD PRIMARY KEY (`ID_AUTHOR`),
  ADD KEY `FK_R6` (`ID_KARYA`);

--
-- Indexes for table `TB_FOTO`
--
ALTER TABLE `TB_FOTO`
  ADD PRIMARY KEY (`ID_FOTO`),
  ADD KEY `FK_R2` (`ID_KARYA`);

--
-- Indexes for table `TB_KARYA`
--
ALTER TABLE `TB_KARYA`
  ADD PRIMARY KEY (`ID_KARYA`),
  ADD KEY `FK_R3` (`ID_KATEGORI`);

--
-- Indexes for table `TB_KATEGORI`
--
ALTER TABLE `TB_KATEGORI`
  ADD PRIMARY KEY (`ID_KATEGORI`);

--
-- Indexes for table `TB_LIKE`
--
ALTER TABLE `TB_LIKE`
  ADD PRIMARY KEY (`ID_LIKE`),
  ADD KEY `FK_R4` (`ID_KARYA`);

--
-- Indexes for table `TB_PEMBICARA`
--
ALTER TABLE `TB_PEMBICARA`
  ADD PRIMARY KEY (`ID_PEMBICARA`);

--
-- Indexes for table `TB_PENGATURAN`
--
ALTER TABLE `TB_PENGATURAN`
  ADD PRIMARY KEY (`ID_PENGATURAN`);

--
-- Indexes for table `TB_PRODI`
--
ALTER TABLE `TB_PRODI`
  ADD PRIMARY KEY (`ID_PRODI`);

--
-- Indexes for table `TB_SEMESTER`
--
ALTER TABLE `TB_SEMESTER`
  ADD PRIMARY KEY (`ID_SEMESTER`);

--
-- Indexes for table `TB_TOKEN`
--
ALTER TABLE `TB_TOKEN`
  ADD PRIMARY KEY (`ID_TOKEN`);

--
-- Indexes for table `TB_VISITOR`
--
ALTER TABLE `TB_VISITOR`
  ADD PRIMARY KEY (`ID_VISITOR`),
  ADD KEY `FK_R7` (`KODE_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `TB_AUTHOR`
--
ALTER TABLE `TB_AUTHOR`
  MODIFY `ID_AUTHOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;
--
-- AUTO_INCREMENT for table `TB_FOTO`
--
ALTER TABLE `TB_FOTO`
  MODIFY `ID_FOTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=389;
--
-- AUTO_INCREMENT for table `TB_LIKE`
--
ALTER TABLE `TB_LIKE`
  MODIFY `ID_LIKE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `TB_PEMBICARA`
--
ALTER TABLE `TB_PEMBICARA`
  MODIFY `ID_PEMBICARA` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `TB_PENGATURAN`
--
ALTER TABLE `TB_PENGATURAN`
  MODIFY `ID_PENGATURAN` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `TB_PRODI`
--
ALTER TABLE `TB_PRODI`
  MODIFY `ID_PRODI` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `TB_SEMESTER`
--
ALTER TABLE `TB_SEMESTER`
  MODIFY `ID_SEMESTER` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `TB_TOKEN`
--
ALTER TABLE `TB_TOKEN`
  MODIFY `ID_TOKEN` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `TB_VISITOR`
--
ALTER TABLE `TB_VISITOR`
  MODIFY `ID_VISITOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `TB_AUTHOR`
--
ALTER TABLE `TB_AUTHOR`
  ADD CONSTRAINT `FK_R6` FOREIGN KEY (`ID_KARYA`) REFERENCES `TB_KARYA` (`ID_KARYA`);

--
-- Ketidakleluasaan untuk tabel `TB_FOTO`
--
ALTER TABLE `TB_FOTO`
  ADD CONSTRAINT `FK_R2` FOREIGN KEY (`ID_KARYA`) REFERENCES `TB_KARYA` (`ID_KARYA`);

--
-- Ketidakleluasaan untuk tabel `TB_KARYA`
--
ALTER TABLE `TB_KARYA`
  ADD CONSTRAINT `FK_R3` FOREIGN KEY (`ID_KATEGORI`) REFERENCES `TB_KATEGORI` (`ID_KATEGORI`);

--
-- Ketidakleluasaan untuk tabel `TB_LIKE`
--
ALTER TABLE `TB_LIKE`
  ADD CONSTRAINT `FK_R4` FOREIGN KEY (`ID_KARYA`) REFERENCES `TB_KARYA` (`ID_KARYA`);

--
-- Ketidakleluasaan untuk tabel `TB_VISITOR`
--
ALTER TABLE `TB_VISITOR`
  ADD CONSTRAINT `FK_R7` FOREIGN KEY (`KODE_USER`) REFERENCES `TB_AUTH` (`KODE_USER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
