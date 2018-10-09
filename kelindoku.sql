-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2016 at 04:14 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelindoku`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `user_admin` varchar(50) NOT NULL,
  `pass_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `nama_admin`, `user_admin`, `pass_admin`) VALUES
(1, 'kompres', 'kompres', 'kompres123');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL,
  `thumbnail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `judul`, `link`, `thumbnail`) VALUES
(10, 'Maroon 5 - Sugar', 'https://www.youtube.com/watch?v=09R8_2nJtjg&list=PLIXR_3Q6owLZlOOIWrHRLgNd9y4KFYjlr', 'Thumb1.jpg'),
(11, 'Maroon 5 - Animals', 'https://www.youtube.com/watch?v=qpgTC9MDx1o&list=PLIXR_3Q6owLZlOOIWrHRLgNd9y4KFYjlr', 'Thumb2.jpg'),
(12, 'Maroon 5 - One More Night', 'https://www.youtube.com/watch?v=fwK7ggA3-bU&list=PLIXR_3Q6owLZlOOIWrHRLgNd9y4KFYjlr', 'Thumb3.jpg'),
(13, 'Maroon 5 - Payphone', 'https://www.youtube.com/watch?v=KRaWnd3LJfs&list=PLIXR_3Q6owLZlOOIWrHRLgNd9y4KFYjlr', 'Thumb4.jpg'),
(14, 'Maroon 5 - Maps', 'https://www.youtube.com/watch?v=NmugSMBh_iI&list=PLIXR_3Q6owLZlOOIWrHRLgNd9y4KFYjlr', 'Thumb5.jpg'),
(15, 'Maroon 5 - Moves Like Jagger', 'https://www.youtube.com/watch?v=iEPTlhBmwRg&list=PLIXR_3Q6owLZlOOIWrHRLgNd9y4KFYjlr', 'Thumb6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `harga` float(10,3) NOT NULL,
  `fasilitas` text NOT NULL,
  `extras` text NOT NULL,
  `perkap` text NOT NULL,
  `rundown` text NOT NULL,
  `gambar1` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `judul`, `isi`, `tanggal`, `harga`, `fasilitas`, `extras`, `perkap`, `rundown`, `gambar1`, `gambar2`, `gambar3`, `link`) VALUES
(6, 'Wonderful Raja Ampat', '<p style="text-align: justify;">Raja Ampat, Bila kita mendengar daerah tujuan wisata tersebut membuat kita ingin merasakan keindahan surge bawah laut di salah satu kepulauan yang terletak di Indonesia bagian timur tersebut. Pulau yang memiliki pesona biota laut dan terumbu karang yang beraneka ragam ini menjadi impian setiap orang untuk bias berkunjung ke Raja Ampat.</p>\r\n\r\n<p style="text-align: justify;">Kami menawarkan paket <strong>&ldquo;Wonderful Raja Ampat&rdquo;</strong> bagi anda yang ingin merayakan liburan ke Raja Ampat. Kini bukan hal yang mustahil lagi dengan paket yang kami tawarkan, anda akan diajak untuk mengunjungi Waisai, Bukit Bintang, Piaynemo Island, Teluk Kabui, Goa Genez, Batu Pinsil dan anda dapat melakukan aktivitas snorkelling untuk melihat keindahan bawah laut yang tidak akan terlupakan di Raja Ampat, sehingga membuat liburan anda menjadi lebih berkesan dan tak terlupakan.</p>\r\n\r\n<p style="text-align: justify;"><strong>Informasi Detail :</strong></p>\r\n\r\n<p style="text-align: justify;">Katagori : Open Trip</p>\r\n\r\n<p style="text-align: justify;">Meeting Point : Bandara Sorong</p>\r\n\r\n<p style="text-align: justify;">Durasi : 4H3M</p>\r\n\r\n<p style="text-align: justify;">Hotel : Humeco Raja Ampat Resort</p>\r\n\r\n<p style="text-align: justify;">Min Pemesanan : 6 orang</p>\r\n\r\n<p style="text-align: justify;">Tiket Pesawat : Belum Termasuk (Mau tiket pesawat murah, hubungi kami)</p>\r\n\r\n<p style="text-align: justify;">Masa Berlaku : 31 Mei 2017</p>\r\n\r\n<p style="text-align: justify;">Pembayaran : Deposit 50% (Pelunasan 7 hari sebelum keberangkatan)</p>\r\n\r\n<p style="text-align: justify;">Keterangan : Harga tidak berlaku untuk periode libur sekolah, lebaran, natal dan tahun baru.</p>\r\n\r\n<p style="text-align: justify;"><strong>Ketentuan Paket :</strong></p>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Harga dapat berubah sewaktu &ndash; waktu dengan dan tanpa pemberitahuan sebelumnya</li>\r\n	<li style="text-align: justify;">Harga tidak berlaku untuk libur sekolah, lebaran, natal dan tahun baru</li>\r\n	<li style="text-align: justify;">Harga berlaku untuk wisatawan domestic atau WNI</li>\r\n</ul>\r\n', '2016-05-26', 4.500, '<p style="text-align: justify;"><em><u>Harga Paket Termasuk :</u></em></p>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Makan sesuai program</li>\r\n	<li style="text-align: justify;">Akomodasi 3 malam di Hamueco Raja Ampat Resort</li>\r\n	<li style="text-align: justify;">Tiket kapal menuju Waisai</li>\r\n	<li style="text-align: justify;">Transportasi darat</li>\r\n	<li style="text-align: justify;">Kapal hopping island sesuai program</li>\r\n	<li style="text-align: justify;">Coffee Break</li>\r\n	<li style="text-align: justify;">Alat Snorkeling (2 hari)</li>\r\n	<li style="text-align: justify;">Retribusi tempat wisata</li>\r\n</ul>\r\n', '<p style="text-align: justify;"><em><u>Harga Paket Tidak Termasuk :</u></em></p>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Tiket pesawat PP</li>\r\n	<li style="text-align: justify;">Airport Tax</li>\r\n	<li style="text-align: justify;">Travel Insurance</li>\r\n	<li style="text-align: justify;">Tipping porter, local guide dan driver</li>\r\n	<li style="text-align: justify;">Pengeluaran pribadi diluar program</li>\r\n	<li style="text-align: justify;">Optional tour</li>\r\n	<li style="text-align: justify;">PPN 1%</li>\r\n</ul>\r\n', '<p>Bebas</p>\r\n', '<p style="text-align: justify;"><strong>HARI KE-1</strong><strong> : BANDARA &ndash; PELABUHAN RAKYAT SORONG &ndash; WAISAI &ndash; YENBUBA HOMESTAY / MM</strong></p>\r\n\r\n<p style="text-align: justify;">Penjemputan di bandara ke pelabuhan rakyat Sorong, Transfer dari Sorong ke Waisai dengan kapal cepat bahari 88 kelas ekonomi (berangkat di jam 2 siang setiap hari, ada keberangkatan jam 9 pagi di hari senin, rabu, jum&rsquo;at). Dari pelabuhan Waisai ke Yenbuba homestay. Tiba di homestay, anda dapat melakukan aktifitas snorkeling atau istirahat di homestay. Sore hari anda melihat keindahan sunset di kepulauan Raja Ampat.</p>\r\n\r\n<p style="text-align: justify;"><strong>HARI KE-2 : MANTA POINT &ndash; ARBOREK &ndash; BUKIT BINTANG &ndash; PIAYNEMO ISLAND &ndash; TELUK KABUI &ndash; GOA GENEZ &ndash; BATU PINSIL &ndash; BATU LIMA (MP/MS/MM)</strong></p>\r\n\r\n<p style="text-align: justify;">Perjalanan hari ini anda akan diajak untuk berwisata Pianemo, Setelah makan pagi di penginapan, anda kami ajak untuk Manta Point, Setelah itu anda kami antar melihat desa Arborek atau desa wisata di Raja Ampat. Setelah itu anda akan diajak untuk mengunjungi Pianemo. Setelah makan siang, anda kami ajak untuk mengunjungi Bukit Danau Bintang dan Pianemo ikon baru Raja Ampat. Setelah itu anda akan diantar menuju pulau Urai untuk aktifitas Snorkeling. Setelah itu dilanjutkan menuju Goa Genes aktifitas snorkeling di dalam goa. Selanjutnya aktifitas snorkeling di Batu Pinsil dan Batu Lima. Kembali ke penginapan untuk beristirahat.</p>\r\n\r\n<p style="text-align: justify;"><strong>HARI KE-3 : URAI SAWUNDAREK &ndash; YENBUBA JETTY &ndash; PASIR TIMBUL &ndash; FRIWEN (MP/MS/MM)</strong></p>\r\n\r\n<p style="text-align: justify;">Setelah makan pagi di penginapan, perjalanan hari ini menuju tempat snorkeling di Sawudarek dan Yenbuba Jetty serta pasir timbul Mansuar.</p>\r\n\r\n<p style="text-align: justify;"><strong>Optional : Friwen</strong></p>\r\n\r\n<p style="text-align: justify;"><strong>HARI KE-4 : WAISAI &ndash; SORONG (MP/MS)</strong></p>\r\n\r\n<p style="text-align: justify;">Hari ke empat, pagi hari anda akan kami ajak untuk melihat keindahan burung Cendrawasih, setelah itu perjalanan dilanjutkan menuju waisai dilanjutkan menuju Sorong dengan menggunakan kapal ferry kelas ekonomi, Tiba di Sorong. Anda akan kami antar ke Bandara, Maka selesai sudah perjalanan anda bersama kami. Sampai bertemu di program kami yang lainnya.</p>\r\n', 'RajaAmpat1.jpg', 'RajaAmpat2.jpg', 'RajaAmpat3.jpg', 'https://www.youtube.com/watch?v=WIMFvGW1_cM'),
(7, 'Exotic Honeymoon at Moluccas', '<p style="text-align: justify;">Pantai ora atau yang lebih dikenal dengan Ora beach merupakan salah satu surge tersembunyi Maluku. Pantai ora yang memiliki pesona tidak kalah menarik dengan Maldives Island ini memiliki biota laut dan terumbu karang yang beraneka ragam.</p>\r\n\r\n<p style="text-align: justify;">Kami menawarkan paket <strong>&ldquo;Exotic Honeymoon at Moluccas&rdquo;</strong> bagi anda yang ingin merayakan bulan madunya ke Ora. Bukan hanya Ora saja, Dengan paket yang kami tawarkan anda akan diajak untuk mengunjungi Mata Air Belanda, Pulau Batu, Tebing Batu dan anda dapat melakukan aktivitas snorkelling untuk melihat keindahan bawah laut di Pulau Ora, sehingga membuat liburan bulan madu anda menjadi lebih berkesan dan tak terlupakan.</p>\r\n\r\n<p style="text-align: justify;"><strong>Informasi Detail :</strong></p>\r\n\r\n<p style="text-align: justify;">Katagori : Open Trip</p>\r\n\r\n<p style="text-align: justify;">Meeting Point : Bandara Ambon</p>\r\n\r\n<p style="text-align: justify;">Durasi : 4H3M</p>\r\n\r\n<p style="text-align: justify;">Hotel : Ora Resort (Kamar Laut)</p>\r\n\r\n<p style="text-align: justify;">Min Pemesanan : 2 orang</p>\r\n\r\n<p style="text-align: justify;">Tiket Pesawat : Belum Termasuk (Mau tiket pesawat murah, hubungi kami)</p>\r\n\r\n<p style="text-align: justify;">Masa Berlaku : 31 Mei 2017</p>\r\n\r\n<p style="text-align: justify;">Pembayaran : Deposit 50% (Pelunasan 7 hari sebelum keberangkatan)</p>\r\n\r\n<p style="text-align: justify;">Keterangan : Harga tidak berlaku untuk periode libur sekolah, lebaran, natal dan tahun baru.</p>\r\n\r\n<p style="text-align: justify;"><strong>Ketentuan Paket :</strong></p>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Harga dapat berubah sewaktu &ndash; waktu dengan dan tanpa pemberitahuan sebelumnya</li>\r\n	<li style="text-align: justify;">Harga tidak berlaku untuk libur sekolah, lebaran, natal dan tahun baru</li>\r\n	<li style="text-align: justify;">Harga berlaku untuk wisatawan domestic atau WNI</li>\r\n</ul>\r\n', '2016-05-26', 9.800, '<p style="text-align: justify;"><em><u>Harga Paket Termasuk :</u></em></p>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Makan sesuai program</li>\r\n	<li style="text-align: justify;">Akomodasi 2 malam di Cottage Laut Pulau Ora</li>\r\n	<li style="text-align: justify;">Akomodasi 1 malam di hotel*** kota Ambon</li>\r\n	<li style="text-align: justify;">Tiket kapal VIP menuju pulau Ora</li>\r\n	<li style="text-align: justify;">Transportasi darat</li>\r\n	<li style="text-align: justify;">Kapal hopping island sesuai program</li>\r\n	<li style="text-align: justify;">Snack selama di ora</li>\r\n	<li style="text-align: justify;">Retribusi tempat wisata</li>\r\n</ul>\r\n', '<p style="text-align: justify;"><em><u>Harga Paket Tidak Termasuk :</u></em></p>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Tiket pesawat PP</li>\r\n	<li style="text-align: justify;">Airport Tax</li>\r\n	<li style="text-align: justify;">Travel Insurance</li>\r\n	<li style="text-align: justify;">Alat Snorkeling</li>\r\n	<li style="text-align: justify;">Tipping porter, local guide dan driver</li>\r\n	<li style="text-align: justify;">Pengeluaran pribadi diluar program</li>\r\n	<li style="text-align: justify;">Optional tour</li>\r\n	<li style="text-align: justify;">PPN 1%</li>\r\n</ul>\r\n', '<p>Bebas</p>\r\n', '<p style="text-align: justify;"><strong><span style="font-family:calibri,sans-serif; font-size:11.0pt">H1 : KEDATANGAN &ndash; CITY TOUR - HOTEL</span></strong></p>\r\n\r\n<p style="margin-left: 0in; margin-right: 0in; text-align: justify;"><span style="font-family:calibri,sans-serif; font-size:11.0pt">Tiba di Bandara Pattimura anda akan di jemput oleh pemandu wisata kami, Kemudian anda akan diantar menuju Gong Perdamaian di Kota Ambon yang merupakan simbolis perdamaian paska kerusuhan agama yang terjadi di Maluku. Setelah itu menuju hotel untuk proses check in dan acara bebas </span></p>\r\n\r\n<p style="text-align: justify;"><strong><span style="font-family:calibri,sans-serif; font-size:11.0pt">H2 : HOTEL &ndash; TULEHU &ndash; PULAU SERAM &ndash; DESA SALEMAN &ndash; PULAU ORA (MP,MM)</span></strong></p>\r\n\r\n<p style="margin-left: 0in; margin-right: 0in; text-align: justify;"><span style="font-family:calibri,sans-serif; font-size:11.0pt">Setelah makan pagi dan proses check out di Hotel, </span><span style="font-family:calibri,sans-serif; font-size:11pt">perjalanan di awali dengan menuju pelabuhan Hurnala di desa Tulehu. Kemudian menuju pelabuhan Amahai (pulau Seram) dengan kapal cepat. Tiba di Amahai perjalanan dengan mobil dilanjutkan menuju desa Saleman. Tiba di desa Saleman anda akan diantar menuju Pantai Ora dengan menggunakan Speedboat. Check-in Ora Eco Resort. Acara bebas. Pukul 20.00 makan malam</span></p>\r\n\r\n<p style="text-align: justify;"><strong><span style="font-family:calibri,sans-serif; font-size:11.0pt">H3 : ORA TOUR - SNORKLING (MP, MS, MM)</span></strong></p>\r\n\r\n<p style="text-align: justify;"><span style="font-family:calibri,sans-serif; font-size:11.0pt">Makan pagi di hotel. </span><span style="font-family:calibri,sans-serif; font-size:11pt">Setelah itu tur Tebing Batu. Anda dapat melakukan aktifitas snorkeling di spot snorkling Tebing Batu. Pukul 11.30 kembali ke Ora Eco Resort untuk makan siang. Setelah makan siang melanjutkan tur Mata Air Belanda. Anda dapat melakukan snorkeling di Mata Air Tebing Belanda. Sore hari kembali ke Ora Eco Resort. Acara bebas sambil menikmati teh/kopi/snack sore. Makan malam</span></p>\r\n\r\n<p style="text-align: justify;"><strong><span style="font-family:calibri,sans-serif; font-size:11.0pt">H4 : PULAU ORA &ndash; TRANSFER OUT</span></strong></p>\r\n\r\n<p style="text-align: justify;"><span style="font-family:calibri,sans-serif; font-size:11pt">Setelah proses check out pukul 04.00 pagi, Perjalanan dilanjutkan menuju Desa Saleman, kemudian dilanjutkan menuju pelabuhan Amahai dan Desa Tulehu. Tiba di Tulehu anda akan kami antar menuju kota Ambon untuk belanja oleh &ndash; oleh khas kota Ambon. Setelah makan siang anda kami antar menuju Bandara Pattimura untuk penerbangan selanjutnya. Maka selesai sudah perjalanan anda bersama kami, sampai bertemu di program kami yang lainnya.</span></p>\r\n', 'Ora4.jpg', 'Ora5.jpg', 'Ora6.jpg', 'https://www.youtube.com/watch?v=WIMFvGW1_cM'),
(8, 'Exotic Komodo Island via Lombok', '<p style="text-align: justify;">Komodo, merupakan hewan terlangka yang hanya ada di Indonesia. Bila kita mendengar Komodo, Maka kita ingat dengan pulau yang ada di Nusa Tenggara Timur &ndash; Indonesia. Komodo memiliki surge bawah laut yang mempesona. biota laut dan terumbu karang dan pulau sekitarnya menjadi daya setiap orang untuk bisa berkunjung ke Pulau Komodo.</p>\r\n\r\n<p style="text-align: justify;">Kami menawarkan paket <strong>&ldquo;Exotic Komodo Island via Lombok&rdquo;</strong> bagi anda yang ingin merayakan liburan ke Pulau Komodo. paket yang kami tawarkan akan membuat liburan anda menjadi berkesan, karena anda diajak untuk mengunjungi Gili Bola, Pulau Satonda, Pulau Moyo, Gili Laba, Pink Beach, Pulau Kelor, Pulau Liang dan Pulau Padar, anda akan diajak untuk berlayar dari Lombok menuju Komodo selain itu anda dapat melakukan aktivitas snorkelling untuk melihat keindahan bawah laut yang tidak akan terlupakan di Pulau yang berbeda, sehingga membuat liburan anda menjadi lebih berkesan dan tak terlupakan.</p>\r\n\r\n<p style="text-align: justify;"><strong>Informasi Detail :</strong></p>\r\n\r\n<p style="text-align: justify;">Katagori : Open Trip</p>\r\n\r\n<p style="text-align: justify;">Meeting Point : Bandara Lombok</p>\r\n\r\n<p style="text-align: justify;">Durasi : 5H4M</p>\r\n\r\n<p style="text-align: justify;">Hotel : Komodo Lodge Hotel</p>\r\n\r\n<p style="text-align: justify;">Min Pemesanan : 6 orang</p>\r\n\r\n<p style="text-align: justify;">Tiket Pesawat : Belum Termasuk (Mau tiket pesawat murah, hubungi kami)</p>\r\n\r\n<p style="text-align: justify;">Masa Berlaku : 31 Mei 2017</p>\r\n\r\n<p style="text-align: justify;">Pembayaran : Deposit 50% (Pelunasan 7 hari sebelum keberangkatan)</p>\r\n\r\n<p style="text-align: justify;">Keterangan : Harga tidak berlaku untuk periode libur sekolah, lebaran, natal dan tahun baru.</p>\r\n\r\n<p style="text-align: justify;"><strong>Ketentuan Paket :</strong></p>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Harga dapat berubah sewaktu &ndash; waktu dengan dan tanpa pemberitahuan sebelumnya</li>\r\n	<li style="text-align: justify;">Harga tidak berlaku untuk libur sekolah, lebaran, natal dan tahun baru</li>\r\n	<li style="text-align: justify;">Harga berlaku untuk wisatawan domestic atau WNI</li>\r\n</ul>\r\n', '2016-05-26', 3.000, '<p style="text-align: justify;"><em><u>Harga Paket Termasuk :</u></em></p>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Penjemputan dari Bandara ke Pelabuhan Bangsal</li>\r\n	<li style="text-align: justify;">Transportasi dengan kapal Cabin Non AC (1 kamar isi 2 orang)</li>\r\n	<li style="text-align: justify;">Transportasi dari hotel menuju bandara di Labuhan Bajo</li>\r\n	<li style="text-align: justify;">1 malam menginap di Komodo Lodge Hotel</li>\r\n	<li style="text-align: justify;">Makan sesuai program</li>\r\n	<li style="text-align: justify;">Alat snorkeling</li>\r\n	<li style="text-align: justify;">Mineral water</li>\r\n	<li style="text-align: justify;">Coffee &amp; Tea</li>\r\n	<li style="text-align: justify;">Souvenir</li>\r\n</ul>\r\n', '<p style="text-align: justify;"><em><u>Harga Paket Tidak Termasuk :</u></em></p>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Tiket pesawat PP</li>\r\n	<li style="text-align: justify;">Airport Tax</li>\r\n	<li style="text-align: justify;">Travel Insurance</li>\r\n	<li style="text-align: justify;">Tipping porter, local guide dan driver</li>\r\n	<li style="text-align: justify;">Pengeluaran pribadi diluar program</li>\r\n	<li style="text-align: justify;">Optional tour</li>\r\n	<li style="text-align: justify;">PPN 1%</li>\r\n</ul>\r\n', '<p>Bebas</p>\r\n', '<p style="text-align: justify;"><strong>HARI KE-1 : BANDARA LOMBOK&nbsp; &ndash; SENGGIGI &ndash; GILI BOLA (MM)</strong></p>\r\n\r\n<p style="text-align: justify;">Tiba di Bandara International Lombok pukul 08:00 wib, perjalanan dilanjutkan menuju Bangsal, tiba anda akan mendapatkan pengarahan tentang program. Dan tur dilanjutkan ke Labuan Lombok. Setelah tiba di Labuan Lombok, tour dilanjutkan dengan kapal. Kita berlayar ke Gili Bola. Kegiatan di Gili Bola adalah melihat kelelawar, sunset dan menghabiskan malam di sana.</p>\r\n\r\n<p style="text-align: justify;"><strong>HARI KE-2 : GILI BOLA &ndash; PULAU MOYO &ndash; PULAU SATONDA &ndash; GILI LABA (MP/MS/MM)</strong></p>\r\n\r\n<p style="text-align: justify;">Di pagi hari dari Gili Bola kita berangkat ke Pulau Moyo. Setelah tiba di Pulau Moyo Anda dapat melakukan aktifitas snorkeling disana untuk melihat keindahan Terumbu Karang Moyo. Setelah snorkeling selama satu jam, kita melanjutkan dengan trekking sejauh 300 meter ke dalam Pulau Moyo untuk mengunjungi air terjun. Setelah selesai mengunjungi air terjun, kita lanjutkan ke Pulau Satonda. Kegiatan di Pulau Satonda adalah snorkeling untuk menikmati keindahan bawah laut dan juga melihat danau air asin di tengah pulau. Setelah selesai mengunjungi Satonda Kita teruskan perjalanan ke Gili Laba dan Kapal akan berlayar di malam hari.</p>\r\n\r\n<p style="text-align: justify;"><strong>HARI KE-3 : GILI LABA &ndash; PINK BEACH &ndash; PULAU KOMODO (MP/MS/MM)</strong></p>\r\n\r\n<p style="text-align: justify;">Setelah tiba di Gili Laba pada pagi hari, kita melanjutkan aktifitas di Pulau ini dengan Trekking ke puncak pulau untuk menikmati panorama Landscape Flores. Setelah itu tour menuju ke Pink Beach, pantai ini adalah tempat terbaik untuk snorkeling. Terumbu karang, ikan, dan pantainya benar-benar indah. Pantai ini disebut Pink Beach karena pasir pantai ini berwarna Pink (merahmuda). Warna pasir berasal dari abrasi terumbu karang di pantai yang terlihat berwarna merah muda. Setelah snorkeling, tour dilanjutkan ke Pulau Komodo. Kita menghabiskan waktu 2 sampai 3 jam untuk melihat kehidupan komodo di habitat aslinya. Setelah dari Pulau Komodo, kita menuju Kalong Island dan bermalam di sana. Setelah matahari terbenam, Anda bisa melihat banyak kelelawar mencari makanan.</p>\r\n\r\n<p style="text-align: justify;"><strong>HARI KE-4 : PULAU RINCA &ndash; LOH LIANG &ndash; PULAU KELOR - HOTEL (MP/MS)</strong></p>\r\n\r\n<p style="text-align: justify;">Di pagi hari, kapal akan berlayar kembali ke Pulau Rinca (Loh Buaya). Kegiatan kita di Loh Buaya adalah Trekking melihat Komodo. Di Pulauini, komodo akan lebih mudah untuk dilihat karena rentang habitat lebih kecil daripada di Pulau Komodo (Loh Liang), komodo di Loh Buaya juga lebih agresif. Selain komodo, di pulau ini kita juga bisa melihat sapi, kerbau, monyet, ayam hutan, dll. Setelah selesai Trekking di Loh Buaya, tur dilanjutkan ke Pulau Kelor. Kita bisa berenang dan snorkeling di sana. Dari Kelor kita melanjutkan ke Labuan Bajo. Selanjutnya anda kami antar menuju hotel untuk beristirahat dan acara bebas.</p>\r\n\r\n<p style="text-align: justify;"><strong>HARI KE-5 : HOTEL - BANDARA (MP)</strong></p>\r\n\r\n<p style="text-align: justify;">Setelah makan pagi di hotel, anda akan kami antar menuju Bandara Labuhan Bajo, Maka selesai sudah perjalanan anda bersama kami. Sampai bertemu di program kami yang lainnya.</p>\r\n', 'KomodoIsland1.jpg', 'KomodoIsland2.jpg', 'KomodoIsland3.jpg', 'https://www.youtube.com/watch?v=WIMFvGW1_cM'),
(9, 'Ora Exotic Plan to Holiday', '<p style="text-align: justify;">Pantai ora atau yang lebih dikenal dengan Ora beach merupakan salah satu surge tersembunyi Maluku. Pantai ora yang memiliki pesona tidak kalah menarik dengan Maldives Island ini memiliki biota laut dan terumbu karang yang beraneka ragam.</p>\r\n\r\n<p style="text-align: justify;">Kami menawarkan paket <strong>&ldquo;Ora Exotic Plan to Holiday&rdquo;</strong> bagi anda yang ingin berlibur ke Ora. Bukan hanya Ora saja, Dengan paket yang kami tawarkan anda akan diajak untuk mengunjungi Mata Air Belanda, Pulau Batu, Tebing Batu dan anda dapat melakukan aktivitas snorkelling untuk melihat keindahan bawah laut di Pulau Ora.</p>\r\n\r\n<p style="text-align: justify;"><strong>Informasi Detail :</strong></p>\r\n\r\n<p style="text-align: justify;">Katagori : Open Trip</p>\r\n\r\n<p style="text-align: justify;">Meeting Point : Bandara Ambon</p>\r\n\r\n<p style="text-align: justify;">Durasi : 3H2M</p>\r\n\r\n<p style="text-align: justify;">Hotel : Ora Resort (Kamar Laut)</p>\r\n\r\n<p style="text-align: justify;">Min Pemesanan : 4 orang</p>\r\n\r\n<p style="text-align: justify;">Tiket Pesawat : Belum Termasuk (Mau tiket pesawat murah, hubungi kami)</p>\r\n\r\n<p style="text-align: justify;">Masa Berlaku : 31 Mei 2017</p>\r\n\r\n<p style="text-align: justify;">Pembayaran : Deposit 50% (Pelunasan 7 hari sebelum keberangkatan)</p>\r\n\r\n<p style="text-align: justify;">Keterangan : Harga tidak berlaku untuk periode libur sekolah, lebaran, natal dan tahun baru.</p>\r\n\r\n<p style="text-align: justify;"><strong>Ketentuan Paket :</strong></p>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Harga dapat berubah sewaktu &ndash; waktu dengan dan tanpa pemberitahuan sebelumnya</li>\r\n	<li style="text-align: justify;">Harga tidak berlaku untuk libur sekolah, lebaran, natal dan tahun baru</li>\r\n	<li style="text-align: justify;">Harga berlaku untuk wisatawan domestic atau WNI</li>\r\n</ul>\r\n', '2016-05-26', 3.500, '<p style="text-align: justify;"><em><u>Harga Paket Termasuk :</u></em></p>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Makan sesuai program</li>\r\n	<li style="text-align: justify;">Akomodasi 2 malam di Cottage Laut Pulau Ora</li>\r\n	<li style="text-align: justify;">Tiket kapal VIP menuju pulau Ora</li>\r\n	<li style="text-align: justify;">Transportasi darat</li>\r\n	<li style="text-align: justify;">Kapal hopping island sesuai program</li>\r\n	<li style="text-align: justify;">Snack selama di ora</li>\r\n	<li style="text-align: justify;">Retribusi tempat wisata</li>\r\n</ul>\r\n', '<p style="text-align: justify;"><em><u>Harga Paket Tidak Termasuk :</u></em></p>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Tiket pesawat PP</li>\r\n	<li style="text-align: justify;">Airport Tax</li>\r\n	<li style="text-align: justify;">Travel Insurance</li>\r\n	<li style="text-align: justify;">Alat Snorkeling</li>\r\n	<li style="text-align: justify;">Tipping porter, local guide dan driver</li>\r\n	<li style="text-align: justify;">Pengeluaran pribadi diluar program</li>\r\n	<li style="text-align: justify;">Optional tour</li>\r\n	<li style="text-align: justify;">PPN 1%</li>\r\n</ul>\r\n', '<p>Bebas</p>\r\n', '<p style="text-align: justify;"><strong><span style="font-family:calibri,sans-serif; font-size:11.0pt">H1 : KEDATANGAN - TULEHU &ndash; PULAU SERAM &ndash; DESA SALEMAN &ndash; PULAU ORA (MM)</span></strong></p>\r\n\r\n<p style="margin-left: 0in; margin-right: 0in; text-align: justify;"><span style="font-family:calibri,sans-serif; font-size:11.0pt">Tiba di Bandara Pattimura anda akan di jemput oleh pemandu wisata kami, Kemudian anda akan diantar menuju </span><span style="font-family:calibri,sans-serif; font-size:11pt">pelabuhan Hurnala di desa Tulehu. Kemudian menuju pelabuhan Amahai (pulau Seram) dengan kapal cepat. Tiba di Amahai perjalanan dengan mobil dilanjutkan menuju desa Saleman. Tiba di desa Saleman anda akan diantar menuju Pantai Ora dengan menggunakan Speedboat. Check-in Ora Eco Resort. Acara bebas. Pukul 20.00 makan malam</span></p>\r\n\r\n<p style="text-align: justify;"><strong><span style="font-family:calibri,sans-serif; font-size:11.0pt">H2 : ORA TOUR - SNORKLING (MP, MS, MM)</span></strong></p>\r\n\r\n<p style="text-align: justify;"><span style="font-family:calibri,sans-serif; font-size:11.0pt">Makan pagi di hotel. </span><span style="font-family:calibri,sans-serif; font-size:11pt">Setelah itu tur Tebing Batu. Anda dapat melakukan aktifitas snorkeling di spot snorkling Tebing Batu. Pukul 11.30 kembali ke Ora Eco Resort untuk makan siang. Setelah makan siang melanjutkan tur Mata Air Belanda. Anda dapat melakukan snorkeling di Mata Air Tebing Belanda. Sore hari kembali ke Ora Eco Resort. Acara bebas sambil menikmati teh/kopi/snack sore. Makan malam</span></p>\r\n\r\n<p style="text-align: justify;"><strong><span style="font-family:calibri,sans-serif; font-size:11.0pt">H3 : PULAU ORA &ndash; TRANSFER OUT</span></strong></p>\r\n\r\n<p style="text-align: justify;"><span style="font-family:calibri,sans-serif; font-size:11pt">Setelah proses check out pukul 04.00 pagi, Perjalanan dilanjutkan menuju Desa Saleman, kemudian dilanjutkan menuju pelabuhan Amahai dan Desa Tulehu. Tiba di Tulehu anda akan kami antar menuju kota Ambon untuk belanja oleh &ndash; oleh khas kota Ambon. Setelah makan siang anda kami antar menuju Bandara Pattimura untuk penerbangan selanjutnya. Maka selesai sudah perjalanan anda bersama kami, sampai bertemu di program kami yang lainnya.</span></p>\r\n', 'Ora1.jpg', 'Ora2.jpg', 'Ora3.jpg', 'https://www.youtube.com/watch?v=WIMFvGW1_cM'),
(10, 'Amazing Komodo Island via Lombok', '<p style="text-align: justify;">Komodo, merupakan hewan terlangka yang hanya ada di Indonesia. Bila kita mendengar Komodo, Maka kita ingat dengan pulau yang ada di Nusa Tenggara Timur &ndash; Indonesia. Komodo memiliki surge bawah laut yang mempesona. biota laut dan terumbu karang dan pulau sekitarnya menjadi daya setiap orang untuk bisa berkunjung ke Pulau Komodo.</p>\r\n\r\n<p style="text-align: justify;">Kami menawarkan paket <strong>&ldquo;Amazing Komodo Island via Lombok&rdquo;</strong> bagi anda yang ingin merayakan liburan ke Pulau Komodo. paket yang kami tawarkan akan membuat liburan anda menjadi berkesan, karena anda diajak untuk mengunjungi Gili Bola, Pulau Satonda, Pulau Moyo, Gili Laba, Pink Beach, Pulau Kelor, Pulau Liang dan Pulau Padar, anda akan diajak untuk berlayar dari Lombok menuju Komodo selain itu anda dapat melakukan aktivitas snorkelling untuk melihat keindahan bawah laut yang tidak akan terlupakan di Pulau yang berbeda, sehingga membuat liburan anda menjadi lebih berkesan dan tak terlupakan.</p>\r\n\r\n<p style="text-align: justify;"><strong>Informasi Detail :</strong></p>\r\n\r\n<p style="text-align: justify;">Katagori : Open Trip</p>\r\n\r\n<p style="text-align: justify;">Meeting Point : Bandara Lombok</p>\r\n\r\n<p style="text-align: justify;">Durasi : 4H3M</p>\r\n\r\n<p style="text-align: justify;">Hotel : Tidak menginap di hotel</p>\r\n\r\n<p style="text-align: justify;">Min Pemesanan : 6 orang</p>\r\n\r\n<p style="text-align: justify;">Tiket Pesawat : Belum Termasuk (Mau tiket pesawat murah, hubungi kami)</p>\r\n\r\n<p style="text-align: justify;">Masa Berlaku : 31 Mei 2017</p>\r\n\r\n<p style="text-align: justify;">Pembayaran : Deposit 50% (Pelunasan 7 hari sebelum keberangkatan)</p>\r\n\r\n<p style="text-align: justify;">Keterangan : Harga tidak berlaku untuk periode libur sekolah, lebaran, natal dan tahun baru.</p>\r\n\r\n<p style="text-align: justify;"><strong>Ketentuan Paket :</strong></p>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Harga dapat berubah sewaktu &ndash; waktu dengan dan tanpa pemberitahuan sebelumnya</li>\r\n	<li style="text-align: justify;">Harga tidak berlaku untuk libur sekolah, lebaran, natal dan tahun baru</li>\r\n	<li style="text-align: justify;">Harga berlaku untuk wisatawan domestic atau WNI</li>\r\n</ul>\r\n', '2016-05-26', 2.500, '<p style="text-align: justify;"><em><u>Harga Paket Termasuk :</u></em></p>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Penjemputan dari Bandara ke Pelabuhan Bangsal</li>\r\n	<li style="text-align: justify;">Transportasi dengan kapal Cabin Non AC (1 kamar isi 2 orang)</li>\r\n	<li style="text-align: justify;">Makan sesuai program</li>\r\n	<li style="text-align: justify;">Alat snorkeling</li>\r\n	<li style="text-align: justify;">Mineral water</li>\r\n	<li style="text-align: justify;">Coffee &amp; Tea</li>\r\n	<li style="text-align: justify;">Souvenir</li>\r\n</ul>\r\n', '<p style="text-align: justify;"><em><u>Harga Paket Tidak Termasuk :</u></em></p>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Tiket pesawat PP</li>\r\n	<li style="text-align: justify;">Airport Tax</li>\r\n	<li style="text-align: justify;">Travel Insurance</li>\r\n	<li style="text-align: justify;">Tipping porter, local guide dan driver</li>\r\n	<li style="text-align: justify;">Pengeluaran pribadi diluar program</li>\r\n	<li style="text-align: justify;">Optional tour</li>\r\n	<li style="text-align: justify;">PPN 1%</li>\r\n</ul>\r\n', '<p>Bebas</p>\r\n', '<p style="text-align: justify;"><strong>HARI KE-1 : BANDARA LOMBOK&nbsp; &ndash; SENGGIGI &ndash; GILI BOLA (MM)</strong></p>\r\n\r\n<p style="text-align: justify;">Tiba di Bandara International Lombok pukul 08:00 wib, perjalanan dilanjutkan menuju Bangsal, tiba anda akan mendapatkan pengarahan tentang program. Dan tur dilanjutkan ke Labuan Lombok. Setelah tiba di Labuan Lombok, tour dilanjutkan dengan kapal. Kita berlayar ke Gili Bola. Kegiatan di Gili Bola adalah melihat kelelawar, sunset dan menghabiskan malam di sana.</p>\r\n\r\n<p style="text-align: justify;"><strong>HARI KE-2 : GILI BOLA &ndash; PULAU MOYO &ndash; PULAU SATONDA &ndash; GILI LABA (MP/MS/MM)</strong></p>\r\n\r\n<p style="text-align: justify;">Di pagi hari dari Gili Bola kita berangkat ke Pulau Moyo. Setelah tiba di Pulau Moyo Anda dapat melakukan aktifitas snorkeling disana untuk melihat keindahan Terumbu Karang Moyo. Setelah snorkeling selama satu jam, kita melanjutkan dengan trekking sejauh 300 meter ke dalam Pulau Moyo untuk mengunjungi air terjun. Setelah selesai mengunjungi air terjun, kita lanjutkan ke Pulau Satonda. Kegiatan di Pulau Satonda adalah snorkeling untuk menikmati keindahan bawah laut dan juga melihat danau air asin di tengah pulau. Setelah selesai mengunjungi Satonda Kita teruskan perjalanan ke Gili Laba dan Kapal akan berlayar di malam hari.</p>\r\n\r\n<p style="text-align: justify;"><strong>HARI KE-3 : GILI LABA &ndash; PINK BEACH &ndash; PULAU KOMODO (MP/MS/MM)</strong></p>\r\n\r\n<p style="text-align: justify;">Setelah tiba di Gili Laba pada pagi hari, kita melanjutkan aktifitas di Pulau ini dengan Trekking ke puncak pulau untuk menikmati panorama Landscape Flores. Setelah itu tour menuju ke Pink Beach, pantai ini adalah tempat terbaik untuk snorkeling. Terumbu karang, ikan, dan pantainya benar-benar indah. Pantai ini disebut Pink Beach karena pasir pantai ini berwarna Pink (merahmuda). Warna pasir berasal dari abrasi terumbu karang di pantai yang terlihat berwarna merah muda. Setelah snorkeling, tour dilanjutkan ke Pulau Komodo. Kita menghabiskan waktu 2 sampai 3 jam untuk melihat kehidupan komodo di habitat aslinya. Setelah dari Pulau Komodo, kita menuju Kalong Island dan bermalam di sana. Setelah matahari terbenam, Anda bisa melihat banyak kelelawar mencari makanan.</p>\r\n\r\n<p style="text-align: justify;"><strong>HARI KE-4 : PULAU RINCA &ndash; LOH LIANG &ndash; PULAU KELOR - HOTEL (MP/MS)</strong></p>\r\n\r\n<p style="text-align: justify;">Di pagi hari, kapal akan berlayar kembali ke Pulau Rinca (Loh Buaya). Kegiatan kita di Loh Buaya adalah Trekking melihat Komodo. Di Pulauini, komodo akan lebih mudah untuk dilihat karena rentang habitat lebih kecil daripada di Pulau Komodo (Loh Liang), komodo di Loh Buaya juga lebih agresif. Selain komodo, di pulau ini kita juga bisa melihat sapi, kerbau, monyet, ayam hutan, dll. Setelah selesai Trekking di Loh Buaya, tur dilanjutkan ke Pulau Kelor. Kita bisa berenang dan snorkeling di sana. Dari Kelor kita melanjutkan ke Labuan Bajo. Tiba di Labuhan Bajo, Maka selesai sudah perjalanan anda bersama kami. Sampai bertemu di program kami yang lainnya.</p>\r\n', 'KomodoIsland4.jpg', 'KomodoIsland5.jpg', 'KomodoIsland6.jpg', 'https://www.youtube.com/watch?v=WIMFvGW1_cM');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `gambar`) VALUES
(2, '1.jpg'),
(3, '2.jpg'),
(4, '3.jpg'),
(5, '4.jpg'),
(6, '5.jpg'),
(7, '6.jpg'),
(8, '7.jpg'),
(9, '8.jpg'),
(10, '9.jpg'),
(11, '10.jpg'),
(12, '10.png'),
(13, '11.jpg'),
(14, '12.jpg'),
(15, '13.png'),
(16, '14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kritik_saran`
--

CREATE TABLE `kritik_saran` (
  `isi_id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi` longtext NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `enabled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kritik_saran`
--

INSERT INTO `kritik_saran` (`isi_id`, `nama`, `isi`, `email`, `tanggal`, `enabled`) VALUES
(4, 'Suyanwar', 'Paket Tour yang ditawarkan menarik sekaliiiii... The best deh pokoknya buat kelindoku!!', 'Suyanwar.wawang@gmail.com', '2016-05-19', 1),
(5, 'Wawang', 'Kelindoku terbaik...!', 'Suyanwar.wawang@gmail.com', '2016-05-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_kategori`
--

CREATE TABLE `lokasi_kategori` (
  `id_lk` int(5) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi_kategori`
--

INSERT INTO `lokasi_kategori` (`id_lk`, `gambar`, `lokasi`) VALUES
(1, 'bali.jpg', 'bali'),
(2, 'Bandung.jpg', 'bandung'),
(3, 'jakarta.jpg', 'jakarta'),
(4, 'jogja.jpg', 'jogjakarta'),
(5, 'Surabaya.jpg', 'surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `gambar1` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `nama`, `lokasi`, `gambar1`, `gambar2`, `gambar3`, `detail`) VALUES
(1, 'Avanza', 'Bali', 'avanza.png', 'avanza2.jpg', 'avanza3.jpg', '<p>buakbfjmdsbfaqjbfsdbnmfbkhbfnm</p>\r\n'),
(2, 'Pajero Sport', 'Bandung', 'Pajero1.jpg', 'Pajero2.jpg', 'Pajero3.jpg', '<p>sdafsdafbdskjfmsdnbfk</p>\r\n'),
(3, 'Mini Cooper', 'Bali', 'Mini_Cooper1.jpg', 'Mini_Cooper2.jpg', 'Mini_Cooper3.jpg', '<p>afsdafbjkabfuewgkbfrafnmsd</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `port1`
--

CREATE TABLE `port1` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `port1`
--

INSERT INTO `port1` (`id`, `gambar`) VALUES
(1, 'Port1.jpg'),
(2, 'Port2.jpg'),
(3, 'Port3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `detail` text NOT NULL,
  `gambar1` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `nama`, `detail`, `gambar1`, `gambar2`, `gambar3`) VALUES
(9, 'Graduation', '<p>ansambfmasbnmfsfhkgbsmfnbgds ,ngbabnmgdbsmg,bjhdsfgbnmfdbnmg</p>\r\n', '1-1.jpg', '1-2.jpg', '1-3.jpg'),
(10, 'Book Fair', '<p>adfaksfbmasbm,nsfbgvhjfdbsghkdfbsnvdfnmbvfsdhbguhweohtyoguehd,gbfds,</p>\r\n', '2-1.jpg', '2-2.jpg', '2-3.jpg'),
(11, 'Job Fair', '<p>adsnjkfbsamnbvmd,fsjhdfsbkjghbjkfsdhjlkghfjksalhgkjdhjklghkjdshgjkhfdskj</p>\r\n', '3-1.jpeg', '3-2.jpeg', '3-3.jpg'),
(12, 'Family Gathering', '<p>dabfkasbmn,fdasbjfhkdsbghebfwkhbfvdbsmnvbdfjhbvuasgfwiyrgfnsbm</p>\r\n', '4-1.jpg', '4-2.jpg', '4-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `gambar`, `link`) VALUES
(1, '1.jpg', 'index.php'),
(2, '2.png', 'transport/'),
(3, '3.jpg', 'organizer/');

-- --------------------------------------------------------

--
-- Table structure for table `slider_keli`
--

CREATE TABLE `slider_keli` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_keli`
--

INSERT INTO `slider_keli` (`id`, `gambar`) VALUES
(1, 'Sawarna1.jpg'),
(2, 'toystory.jpg'),
(3, 'up.jpg'),
(4, 'walle.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `story_id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`story_id`, `judul`, `tanggal`, `isi`, `gambar`) VALUES
(1, 'My Trip to Sawarna', '2016-12-12', '<p>avfkhdsvfm,VB,ADKSVBFO.ERKGBASBVFMDSANVBNMFADSKGHF</p>\r\n', '@Ancol 1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(1, 'Suyanwar.wawang@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `testi_t`
--

CREATE TABLE `testi_t` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `enabled` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testi_t`
--

INSERT INTO `testi_t` (`id`, `nama`, `email`, `subject`, `isi`, `tanggal`, `enabled`) VALUES
(1, 'Suyanwar', 'Suyanwar.wawang@gmail.com', 'WOW', 'Web sewa mobil paling wah deh... Pelayanannya cepat, tampilannya simple dan user friendly. Nice...', '2016-05-20', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  ADD PRIMARY KEY (`isi_id`);

--
-- Indexes for table `lokasi_kategori`
--
ALTER TABLE `lokasi_kategori`
  ADD PRIMARY KEY (`id_lk`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `port1`
--
ALTER TABLE `port1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_keli`
--
ALTER TABLE `slider_keli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`story_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testi_t`
--
ALTER TABLE `testi_t`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  MODIFY `isi_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lokasi_kategori`
--
ALTER TABLE `lokasi_kategori`
  MODIFY `id_lk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `port1`
--
ALTER TABLE `port1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `slider_keli`
--
ALTER TABLE `slider_keli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `story_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `testi_t`
--
ALTER TABLE `testi_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
