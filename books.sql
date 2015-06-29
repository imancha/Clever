-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 22, 2015 at 08:31 AM
-- Server version: 5.1.73-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `imanch01_Books`
--

-- --------------------------------------------------------

--
-- Table structure for table `Author`
--

CREATE TABLE IF NOT EXISTS `Author` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The ID of the author',
  `Name` varchar(255) NOT NULL COMMENT 'The name of the author',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `Author`
--

INSERT INTO `Author` (`ID`, `Name`) VALUES
(43, ''),
(16, 'ABDUL AZIZ'),
(2, 'Adam Trachtenberg'),
(13, 'AGUS KURNIAWAN'),
(11, 'AJAHN CHAH'),
(50, 'Alberto Cejas Sanchez'),
(38, 'Allan Brito'),
(19, 'Amiroh'),
(53, 'Armanto Sutedjo'),
(9, 'ASIAPAC BOOKS PTE.LTD'),
(34, 'Ben Simonds'),
(69, 'Bernadette Rita'),
(27, 'Bernardo Iraci'),
(72, 'Bety L'),
(30, 'Bryan WC Chung'),
(66, 'Budiman'),
(55, 'Cho'),
(65, 'Cine Manga'),
(68, 'D Budiman'),
(49, 'David Saltares Marquez'),
(54, 'David Sawyer MCFarland'),
(1, 'David Sklar'),
(33, 'DEWA MADE OKARA'),
(26, 'Didik Wahyu Kurniawan'),
(75, 'Dorothy J. Hopkins'),
(23, 'DR. TOETI HERATY NOERHADI'),
(28, 'Dwi Ninggar'),
(77, 'E. L. James'),
(24, 'Edy'),
(63, 'ELEX'),
(25, 'elydan smitdev'),
(45, 'FUJIKO F.FUJIO'),
(46, 'Hendri Yulius'),
(14, 'HJ AFIN MURTININGSIH'),
(10, 'I Putu Wisnu Saputra'),
(61, 'IDHIE :TITIK TERANG'),
(73, 'Inarovi'),
(79, 'J. K. Rowling'),
(36, 'Jason Van Gumster'),
(44, 'John P.Doran'),
(5, 'JON KABAT ZINN'),
(12, 'JUBILEE ENTERPRISE'),
(17, 'M. HABIBAH'),
(51, 'Martin Varga'),
(42, 'Maureen Maybellee'),
(81, 'Michael Lewis'),
(18, 'Michael Rhodes'),
(62, 'MUHAMMAD YUSDI'),
(29, 'NGAKAN MADE MADRASUTA'),
(52, 'Nurmiadi'),
(59, 'Nyoman'),
(60, 'Oda'),
(39, 'PENGADAAN'),
(31, 'PRAVRAJIKA VRAJAPRANA'),
(8, 'PRIYANTO H'),
(20, 'S.Kom'),
(64, 'Sanders Kleinfeld'),
(22, 'SARTIKA KURNIALI'),
(40, 'Scott Spencer'),
(4, 'SHIN CHENG YEN'),
(67, 'Stefan Kottwiz'),
(76, 'Stephenie Meyer'),
(21, 'Sulaiman Budiman'),
(78, 'Suzanne Collins'),
(41, 'TAMURA YUMI'),
(35, 'Terjemahan'),
(7, 'THICH NHAT HANH'),
(37, 'THOMAS A KEMPIS'),
(47, 'Tjhin'),
(15, 'Tony Parisi'),
(71, 'Usui Yoshito'),
(58, 'Veronica Anindha'),
(80, 'Veronica Roth'),
(57, 'Widodo Budiharto'),
(48, 'YOSHIHIRO TOGASHI'),
(56, 'Young-Sun');

-- --------------------------------------------------------

--
-- Table structure for table `Book`
--

CREATE TABLE IF NOT EXISTS `Book` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The ID of the book',
  `Title` varchar(255) NOT NULL COMMENT 'The title of the book',
  `SubTitle` varchar(255) NOT NULL COMMENT 'The subtitle of the book',
  `Description` text NOT NULL COMMENT 'The description of the book',
  `ISBN` varchar(255) NOT NULL COMMENT 'The International Standard Book Number (ISBN) of the book',
  `Page` int(11) NOT NULL COMMENT 'The number of pages of the book',
  `Year` year(4) NOT NULL COMMENT 'The publication date (year) of the book',
  `Publisher` varchar(255) NOT NULL COMMENT 'The publisher of the book',
  `Language` varchar(255) NOT NULL COMMENT 'The language of the book',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `Book`
--

INSERT INTO `Book` (`ID`, `Title`, `SubTitle`, `Description`, `ISBN`, `Page`, `Year`, `Publisher`, `Language`) VALUES
(1, 'PHP Cookbook, 3rd Edition', 'Solutions & Examples for PHP Programmers', '<div class="detail-description-content">\r\n<div>\r\n<div>\r\n<p>Want to understand a certain PHP programming technique? Or learn how to accomplish a particular task? This cookbook is the first place to look. With more than 350 code-rich recipes revised for PHP 5.4 and 5.5, this third edition provides updated solutions for generating dynamic web content&mdash;everything from using basic data types to querying databases, and from calling RESTful APIs to testing and securing your site.</p>\r\n<p>Each recipe includes code solutions that you can freely use, along with a discussion of how and why they work. Whether you&rsquo;re an experienced PHP programmer or coming to PHP from another language, this book is an ideal on-the-job resource.</p>\r\n<p>You&rsquo;ll find recipes to help you with:</p>\r\n<ul>\r\n<li>Basic data types: strings, numbers, arrays, and dates and times</li>\r\n<li>Program building blocks: variables, functions, classes, and objects</li>\r\n<li>Web programming: cookies, forms, sessions, and authentication</li>\r\n<li>Database access using PDO, SQLite, and other extensions</li>\r\n<li>RESTful API clients and servers, including HTTP, XML, and OAuth</li>\r\n<li>Key concepts: email, regular expressions, and graphics creation</li>\r\n<li>Designing robust applications: security and encryption, error handling, debugging and testing, and performance tuning</li>\r\n<li>Files, directories, and PHP&rsquo;s Command Line Interface</li>\r\n<li>Libraries and package managers such as Composer and PECL</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', '9781449363758', 820, 2014, 'O''Reilly Media', 'English'),
(3, 'Ilmu Ekonomi Kehidupan', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;">Dari generasi ke generasi, bencana alam kerap terjadi. Efek rumah kaca yang menyebabkan pemanasan global sungguh mengkhawatirkan.</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;" /><br style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;">Hanya dengan menyucikan hati manusia, barulah krisis ekosistem dapat diredakan; apabila setiap orang bersatu hati dan bekerja sama, orang-orang yang menderita akan dapat tertolong. Oleh karenanya, kita harus memanfaatkan "Waktu, Ruang, dan Antarsesama" dengan secara aktif menciptakan berkah.&nbsp;</span></p>', '9789793817279', 250, 2013, 'JING SI MUSTIKA ABADI INDONESIA', 'Indonesia'),
(4, 'Wherever You Go, There You Are', '(Edisi Revisi)', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">WHEREVER YOU GO.</span></p>', '910768245190', 262, 2013, 'KARANIYA', 'Indonesia'),
(6, 'Ada Damai Di Hatiku', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: small;">Kedamaian sejati itu tidak mustahil. Namun membutuhkan kegigihan dan latihan, apalagi pada&nbsp;</span><span style="font-size: small; font-family: Arial, Helvetica, sans-serif;">masa-masa sulit. Bagi sebagian orang, kedamaian dan semangat ahimsa (tanpa-kekerasan) sama&nbsp;</span><span style="font-size: small; font-family: Arial, Helvetica, sans-serif;">dengan sikap terima saja dan tidak berdaya. Justru, melatih kedamaian dan semangat ahimsa itu&nbsp;</span><span style="font-size: small; font-family: Arial, Helvetica, sans-serif;">sebaliknya. Berlatih menjadi damai, menghadirkan kedamaian di dalam diri sendiri, berarti secara&nbsp;</span><span style="font-size: small; font-family: Arial, Helvetica, sans-serif;">terus menerus memupuk pengertian, cinta dan belas kasih walaupun harus berhadapan dengan&nbsp;</span><span style="font-size: small; font-family: Arial, Helvetica, sans-serif;">kesalahpahaman dan konflik. Menghadirkan kedamaian diri dalam suasana perang membutuhkan&nbsp;</span><span style="font-size: small; font-family: Arial, Helvetica, sans-serif;">keberanian.</span></p>', '901263458966', 280, 2015, 'KARANIYA', 'Indonesia'),
(7, 'Visual Basic Net Membuat Aplikasi Database&Program Kreatif', '', '<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;"><strong>Buku Visual Basic.Net Membuat Aplikasi Database dan Program Kreatif&nbsp;</strong>ini cocok untuk menyelesaikan tugas kuliah dan tugas akhir mahasiswa, siswa SMK, freelance programmer maupun programmer profesional yang berkerja di perusahaan.</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Buku ini juga cocok untuk orang yang awam terhadap dunia pemrograman karena disertai dengan pengenalan Visual Basic .NET dari nol yang dilengkapi tutorial pembuatan aplikasi penjualan dan program kreatif dengan bahasa yang sederhana dan mudah dimengerti.</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;"><br />Tutorial-tutorial di dalam buku ini sudah diuji coba oleh mahasiswa yang awam terhadap Visual Basic .NET dan basis data dan ternyata bisa diikuti dengan baik.</p>', '9789797880637', 390, 2013, 'Gramedia', 'Indonesia'),
(8, 'Paket Buddha Jalan Menuju Pengembangan Spiritual', '(Ujaran Buddha, Sutra Hati, Sutra Dharma)', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Sutra Dharma Ujaran Buddha Sutra Hati Karakter-karakter kartun Tsai Ching Chung yang ekspresif dan kisah-kisahnya yang jenaka adalah penjelasan ideal untuk mendapatkan tempat bagi Ujaran Buddha, Sutra Hati, dan Sutra Dharma di dalam batin pa</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">ra pembaca.</span></p>', '9873023561', 200, 2012, 'ASIAPAC BOOKS PTE.LTD', 'Indonesia'),
(9, 'Cbt Ribbon Hero', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Jika Anda baru beralih dari Microsoft Office 2003 ke 2007 atau 2010, maka Anda akan sedikit merasa bingung dengan tampilan dan fitur - fiturnya yang agak jauh berbeda dengan Microsoft Office 2003. Saat belajar membiasakan diri dan memanfaatkan seluruh fitur baru di Office 2007 dan Office 2010, maka tidak jarang akan terjadi kesulitan, kejenuhan bahkan kebosanan saat mencoba satu per satu fitur Office 2007 dan Office 2010 tersebut. Bila Anda masih diperbolehkan untuk memilih antara belajar atau bermain game, sudah bisa dipastikan anda akan lebih suka memilih bermain game dari pada belajar. Namun terkadang pilihan tersebut mengharuskan anda harus memilih belajar daripada bermain game. Untuk mengatasinya, kini telah tersedia sebuah aplikasi learning game yang akan membuat proses belajar menggunakan Office 2007 ataupun Office 2010 lebih cepat dan menyenangkan. Semuanya akan dipaparkan dalam CD tutorial interaktif ini dalam mengubah pilihan belajar Microsoft Office 2010&nbsp;</span></p>', '9231820933', 160, 2013, 'Gramedia', 'Indonesia'),
(11, 'A Tree In A Forest', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;">"Dharma senantiasa mengungkapkan diri setiap saat, tetapi hanya pada saat pikiran tenang, kita bisa memahami apa yang terungkap itu karena Dharma mengajar tanpa kata-kata.&rdquo;</span></p>', '9789798727764', 270, 2012, 'KARANIYA', 'English'),
(12, 'Rumah Sejatimu', 'Kebijaksanaan Sehari2 Dari Thich Nhat Hanh', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;">Membawa energi kehadiran sejati ke dalam kehidupan kita sesungguhnya memberikan perubahan yang lebih baik dan semua ini hanya membutuhkan latihan sederhana saja. Hasil karya ke 365 permata kebijaksanaan sehari-hari dari salah seorang guru Buddhis yang sangat terkenal di zaman kita, akan membantu dan mendukung bagi setiap orang yang ingin melatih diri untuk sepenuhnya bersentuhan 100% dengan setiap momen dalam kehidupan.</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;" /><br style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;">Thich Nhat Hanh memberikan ajaran tentang latihan sadar-penuh yang mana dapat mentransformasi setiap aspek kehidupan kita dan bagaimana manfaat latihan ini terpancar melalui kita untuk mempengaruhi pihak lain dan seluruh dunia luas.</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;" /><br style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;">"Hal yang sangat saya hargai dari buku kecil ini adalah setiap ajaran memotong tembus ke jantung permasalahan. Ajaran yang sederhana, mendalam, dan penuh makna ini dapat diterapkan ke dalam kehidupan sehari-hari serta sesuai dengan dunia sekarang."</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;" /><br style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;" /><strong style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;">- New Spirit Journal</strong><br style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;" /><br style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;">"365 inti ajaran... di kata pengantar dari editor, Melvin McLeod menyarankan untuk membaca buku ini secara perlahan, satu atau dua saja setiap hari untuk menikmati dan memahami sepenuhnya. Ini saran yang luar biasa, tetapi setiap kali saya bersama buku ini, saya menemukan diri saya membaca &lsquo;satu lagi&rsquo; dan kemudian &lsquo;satu lagi&rsquo;."</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;" /><br style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;" /><strong style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;">- Shambala Sun</strong><br style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;" /><br style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;">"Melvin McLeod telah menghasilkan karya luar biasa untuk meringkas ajaran Hanh yang tak ternilai. Ajaran yang singkat: tidak lebih dari setengah halaman dan sebagian besar lebih singkat tetapi mengandung benih kuat yang dapat mentransformasi kehidupan sehari-hari atau bahkan semasa hidup jika menjadikannya sebagai pedoman dan mendalaminya. Kalau dunia dapat melatih apa yang Hanh anjurkan, saya yakin masalah utama yang dihadapi dunia kita saat ini akan dapat ditangani."</span></p>', '9789798727825', 376, 2013, 'KARANIYA', 'Indonesia'),
(13, 'Chatting Tanpa Batas Menggunakan Whatsapp', '', '<p>KOMPUTER GADGET</p>', '5678654332', 112, 2013, 'gramedia', 'Indonesia'),
(14, 'PANDUAN LENGKAP IPAD 2 UNTUK PEMULA', '', '<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">iPad adalah gadget yang cukup fenomenal. Kemunculannya ditangapi secara antusias. iPad 2 menawarkan kemudahan dan kecepatan dalam melakukan tugas-tugas yang biasa dikerjakan pada PC atau laptop.</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;"><em><strong>Panduan Lengkap iPad 2&nbsp;</strong></em>untuk Pemula dirancang agar Anda dapat memanfaatkan iPad 2 secara optimal dalam melakukan kegiatan sehari-hari. Semua panduan diberikan langkah demi langkah secara sederhana dan praktis.</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">&nbsp;</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Materi yang dibahas dalam buku ini:</p>\r\n<ul style="font-size: 14px; font-family: Arial, Helvetica, sans-serif; line-height: 21px;">\r\n<li style="text-align: left;">Pengenalan iPad 2</li>\r\n<li style="text-align: left;">Sinkronisasi dan Registrasi iPad 2</li>\r\n<li style="text-align: left;">Konfigurasi Umum iPad 2</li>\r\n<li style="text-align: left;">Instalasi dan hapus Aplikasi</li>\r\n<li style="text-align: left;">Kusomisasi layar</li>\r\n<li style="text-align: left;">Bekerja dengan Gambar, Audio, dan Video</li>\r\n<li style="text-align: left;">Menggunakan Notes, Kalender, Daftar Kontak, dan Sistem Pengingat</li>\r\n<li style="text-align: left;">Membuat dokumen dan Presentasi</li>\r\n<li style="text-align: left;">Membaca Berita, Buku, dan Novel</li>\r\n<li style="text-align: left;">konfigurasi Jaringan 3G dan Wifi</li>\r\n<li style="text-align: left;">Internet dan Email</li>\r\n<li style="text-align: left;">Jejaring Sosial dan Chatting</li>\r\n<li style="text-align: left;">Bermain Game dan Eksplorasi Peta</li>\r\n<li></li>\r\n</ul>', '9786020017235', 165, 2011, 'ELEX MEDIA', 'Indonesia'),
(15, 'Kumpulan Doa Dalam Suka & Duka', '', '<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" align="justify">Berdoa :tidak bisa dilepaskan dari kehidupan seharihari umat Muslim. Bahkan, dalam bacaan shalat pun kita melafalkan dan. Hal ini menunjukkan bahwa Allah SWT adalah tempat kita memohon dan memasrahkan segala sesuatu yang tefiadi dalam kehidupan.</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" align="justify">Dengan berdoa, hari akan menjadi tenang, pikiran lebih terbuka, dan tindakan selalu terarah ke jalan yang diridhai oleh-Nya. Berdoa juga membangun keikhlasan yang insya Allah kelalu melingkupi setiap langkah dan keputusan yang kita ambil dalam kehidupan sehari-hari.</p>', '9786022492788', 260, 2013, 'BIP', 'Indonesia'),
(16, 'Programming 3D Applications in HTML5 and WebGL', '3D Animation and Visualization for Web Pages', '<div>\r\n<p>Learn how to create high-performance, visually stunning 3D applications for the Web hands-on, using HTML5 and WebGL. With this interactive video course, you&rsquo;ll learn by using the tools, frameworks, and libraries for building 3D models and animations, mind-blowing visual effects, and advanced user interaction in both desktop and mobile browsers.Led by Tony Parisi, a pioneer of 3D standards for the Web, this course provides a thorough grounding in theory and practice for designing everything from a simple 3D product viewer to immersive games and interactive training systems. This course is divided into two parts:<strong>Part 1&mdash;Foundations</strong></p>\r\n<ul>\r\n<li>Learn what&rsquo;s possible with HTML5 and WebGL in the web browser</li>\r\n<li>Delve into the anatomy of a WebGL application</li>\r\n<li>Work with Three.js and Tween.js, the open source JavaScript 3D rendering and animation libraries</li>\r\n<li>Explore 3D transforms, transitions, and animations with CSS</li>\r\n<li>Use the 2D Canvas API to render 3D</li>\r\n</ul>\r\n<strong>Part 2&mdash;Application Development Techniques</strong>\r\n<ul>\r\n<li>Learn about the 3D content pipeline, including modeling and animation tools, converters, and file formats</li>\r\n<li>Understand game engines and frameworks for building 3D applications, including Tony Parisi&rsquo;s Vizi framework</li>\r\n<li>Design and develop a simple 3D application by creating 3D content, behaviors, and interaction</li>\r\n<li>Create 3D environments with multiple objects and complex interaction</li>\r\n<li>Learn how to develop WebGL-based 3D applications for mobile browsers</li>\r\n</ul>\r\nIdeal for developers with Javascript and HTML experience, this video is based on Parisi&rsquo;s book, <em>Programming 3D Applications with HTML5 and WebGL</em> from O&rsquo;Reilly. Once you&rsquo;ve completed this video course, you can dig even deeper into the subject with the book.</div>\r\n<div id="__if72ru4sdfsdfrkjahiuyi_once" style="display: none;">&nbsp;</div>\r\n<div id="__if72ru4sdfsdfruh7fewui_once" style="display: none;">&nbsp;</div>\r\n<div id="__hggasdgjhsagd_once" style="display: none;">&nbsp;</div>', '9781430250074', 322, 2014, 'O''Reilly Media', 'English'),
(17, 'Puasa Tapi Keliru', '', '<div style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" align="justify"><span style="font-weight: bold;">KESALAHAN-KESALAHAN YANG SERING TERJADI SAAT PUASA RAMADHAN, TAPI ANDA TIDAK MERASA<br /><br /># B</span>olehkah seseorang menyegerakan sahur?<br /># Bolehkah mempercepat gerakan tarawih?<br /># Apakah puasa enam hari dibulan syawwal harus dilakukan secara berurutan?<br /><br />Temukan jawaban dari berbagai pertanyaan di atas dan selainnya di dalam buku ini. Selain menjelaskan tentang kesalahan dalam puasa, buku ini juga dilengkapi dengan penjelasan tentang keistimewaan bulan Ramadhan, pembagian golongan manusia dalam menyikapi ramadhan, dan hadits dhaif yang sering disampaikan ketika Ramadhan.. Selamat Membaca..!!!</div>', '978062512', 210, 2013, 'AQWAM', 'Indonesia'),
(18, '150 Tips & Trik Android & Ipad', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Sekarang ini mobile web sudah mewabah. Tidak lain disebabkan berbagai teknologi yang mendukung mobile web sudah berkembang dengan pesat. Salah satunya adalah merakyatnya piranti mobile, seperti Android, BB, dan iOS based, tak lupa juga Windows Mobile. Berbagai teknologi web, seperti HTML, CSS, dan JQuery Mobile juga sudah berkembang dan mengalami pBuku ini mengupas 150 tip dan trik seputar ponsel/tablet Android dan iPad yang mungkin belum Anda ketahui. Penasaran dengan kedua gadget itu? Bacalah buku ini dari awal hingga akhir.&nbsp;</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Sebagai contoh, buku ini mengupas contoh-contoh kasus seperti di bawah ini:&nbsp;</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">- Bagaimana caranya menghapus virus di ponsel/tablet Android, mengunci aplikasi dengan password, atau men-download file-file langsung dari internet?&nbsp;</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">- Bagaimana caranya membaca ribuan buku gratis dari internet dan membacanya dengan tampilan yang sangat nyaman di mata?&nbsp;</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">- Apakah ada cara untuk memesan tiket pesawat, hotel, atau melihat tempat-tempat seru di sekitar tempat kita berdiri langsung dengan menggunakan gadget?&nbsp;</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">- Bagaimana caranya mencari arti dari kata-kata asing secara gratis dan mudah?&nbsp;</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">- Apakah kita bisa menciptakan efek foto ala Instagram menggunakan aplikasi gratisan yang ada di iPad? Dan bagaimana caranya membuat album foto yang bisa ditayangkan di komputer tanpa bantuan kabel?&nbsp;</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">- Bagaimana caranya men-download musik MP3 langsung dari iPad? Atau, adakah cara untuk mendesain tanda tangan digital?&nbsp;</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">- Apa saja hal-hal baru yang ada di dalam iOS 5 iPad? Dan apakah dengan menggunakan iPad kita bisa berlangganan harian ibu kota secara gratis? Ada banyak tip dan trik lain yang tersimpan di dalam buku ini.&nbsp;</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Apabila Anda memiliki salah satu gadget yang dibahas di buku ini, Android atau iPad, atau justru memiliki keduanya, maka buku ini wajib Anda baca. Ulasan-ulasan yang ada di dalam buku ini akan membuat Anda mampu mendayagunakan ponsel/tablet Android dan iPad dengan lebih optimal lagieningkatan. Untuk itulah buku ini hadir.&nbsp;</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Buku ini menjelaskan tentang berbagai teknologi pembuatan website mobile dengan tool WYSIWYG populer, Adobe Dreamweaver.&nbsp;</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Yang dibahas di buku ini antara lain:&nbsp;</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">- HTML 5&nbsp;</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">- CSS 3&nbsp;</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">- Cara Desain dan Konversi Website ke HTML 5&nbsp;</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">- Penggunaan Berbagai Komponen jQuery Mobile&nbsp;</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">- Praktek Membuat Website Mobile</span></p>', '9786020027227', 208, 2012, 'Elex Media', 'Indonesia'),
(19, 'Seribu Cerita Berjuta Makna Darimu Uje', '', '<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Di dalam buku ini, tersaji kisah pasang-surut pergulatan hidup Ustadz Jeffry al-Buchori yang biasa dipanggil Uje. Berawal sebagai pemadat pada masa remaja sampai perlahan-lahan mendapat hidayah dan menjadi dai terkenal. Turut dipaparkan dalam buku ini kesan orang-orang terdekat, dari istri, anak, sampai sahabat.</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">UstadJefri</p>', '9786027902176', 144, 2013, 'KAMEA PUSTAKA', 'Indonesia'),
(20, 'Manga Studio 5 Beginners Guide', '', '<div class="detail-description-content">\r\n<div>\r\n<div>\r\n<h2>In Detail</h2>\r\n<p>Using Manga Studio 5 to create comics is an enriching experience. Instead of using graphite and ink, we can get creative with digital marking tools. Once you''ve got to grips with the basic use of these tools, creating comics digitally is just as expressive and fun as creating them on paper.</p>\r\n<p>Manga Studio 5 Beginner''s Guide is for beginner and experienced comic artists who are new to Manga Studio. The book delves into the methods of creating a comic, from an idea, character, script, and rough layouts, all the way to the finished art. No matter what character you are creating&mdash;superheroes, sci-fi, fantasy, real world, or Manga&mdash;Manga Studio 5 Beginner''s Guide will be your go-to book for creating comics.</p>\r\n<h2>Approach</h2>\r\n<p>Using a step-by-step approach, this book will lead you through the process of building up complex, multi-page comic/Manga art, along with industry insights along the way.</p>\r\n<h2>Who this book is for</h2>\r\n<p>"Manga Studio Beginner''s Guide" is for beginners in comic creation. The more you know about how comics are made, the better you will be, but it''s not essential to get the most out of this book. Even if you''re a professional comic artist, this book will get you up to speed on using Manga Studio 5.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div id="__if72ru4sdfsdfrkjahiuyi_once" style="display: none;">&nbsp;</div>\r\n<div id="__if72ru4sdfsdfruh7fewui_once" style="display: none;">&nbsp;</div>\r\n<div id="__hggasdgjhsagd_once" style="display: none;">&nbsp;</div>', '9781849697675', 400, 2014, 'Packt Publishing', 'English'),
(21, 'Membangun E-learning Dgn Learning Management System Moodle', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Buku ini disertai dengan gambar-gambar yang akan memudahkan pembaca dalam memahami topik yang sedang dibahas.</span></p>', '9786021949740', 108, 2012, 'Elex Media', 'Indonesia'),
(22, 'Berani Teriak Berani Bertindak', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: small;">Seperti halnya buku terdahulu, Ubah Slogan Jadi Tindakan, buku ini hadir untuk menyajikan kisah-kisah inspiratif yang menekankan pada dua kata penting dalam kehidupan yaitu: TINDAKAN dan PERUBAHAN.</span></p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">&nbsp;</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;"><span style="font-size: small;">Banyak tulisan dalam buku ini yang menggambarkan bahwa sekeras apa pun prinsip atau pandangan hidup yang negatif dari seseorang bisa diubah, seperti yang terjadi pada tokoh Carl Allen dalam film Yes Man, selama ia berada bersama orang-orang dan lingkungan yang positif, sebagaimana yang ditegaskan oleh Jim Rohn, &ldquo;Masa depanmu ditentukan oleh orang-orang yang paling sering bergaul denganmu.&rdquo;</span></p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">&nbsp;</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;"><span style="font-size: small;">Dan, yang terpenting, penulis buku ini ingin berbagi kisah tentang pentingnya keberanian untuk bertindak. Apa pun yang menjadi keyakinan atau slogan dalam hidup Anda, dan sekeras apa pun Anda meneriakkan kata-kata itu, semua itu belum berarti apa-apa jika tidak dibarengi dengan tindakan nyata, seperti sebuah ungkapan emas yang menyatakan, &ldquo;Action speaks louder than words (Tindakan bersuara lebih nyaring daripada sekedar kata-kata)&rdquo;.</span></p>', '890654310', 267, 2012, 'BIP', 'Indonesia'),
(23, 'Mengingat Segalanya Dengan Evernote', '', '<p class="MsoNormal" style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" align="justify">Evernote adalah platform memori yang membantu Anda mengingat segalanya. Sangatlah mudah untuk menyimpan memori berbentuk apa saja (teks, foto, halaman web, dokumen, audio, video, tulisan tangan, dan lainnya). Sinkronisasikan dan Anda bisa mengaksesnya dari mana saja (komputer, tablet, seluler) karena Evernote tersedia di hampir semua platform. Anda lalu dengan mudah bisa menemukannya kembali, kapan pun Anda memerlukannya. Sehingga tepat jika Evernote ingin memposisikan diri sebagai otak kedua eksternal Anda.</p>\r\n<p class="MsoNormal" style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" align="justify">Evernote cenderung cocok bagi yang sangat menghargai nilai pengetahuan. Namun, Evernote juga bisa membantu Anda mengingat hal-hal biasa seperti lirik lagu favorit. Terlepas dari bagaimana awalnya seseorang menggunakan Evernote, kebanyakan orang menikmati manfaat emosional dan produktivitas yang meningkat secara dramatis seiring waktu. Kenyataan bahwa kekuatan memori alami kita akan melemah, juga harusnya menjadi alasan kuat bagi Anda untuk bergabung bersama 40 juta orang lain di seluruh dunia yang menggunakan Evernote sebagai otak kedua eksternalnya.</p>\r\n<p class="MsoNormal" style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" align="justify">Dan buku ini membekali Anda dengan cepat untuk melakukan hal itu. Jadi, tidak perlu menghabiskan waktu melakukan uji coba sendiri karena sudah disajikan untuk Anda. Buku ini 90% ditulis menggunakan keluarga produk Evernote dan menyajikan:</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" align="justify">1. Hidangan Pembuka: Lebih Dekat dengan Evernote<br />Kenali Evernote lewat orang-orang, model bisnis, dan teknologi di baliknya. Sembari kita intip langsung serunya markas dan budaya kerja di Evernote.</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" align="justify">2. Hidangan Utama: Ini Lho Keluarga Produknya&nbsp;<br />Kuasai penggunaan Evernote. Kenali anggota keluarga Evernote lainnya dan beberapa aplikasi lain yang tidak kalah menarik. Plus, Anda bisa membaca dan belajar dari kisah di balik dapur Evernote lewat wawancara dengan Phil Libin (CEO), Phil Constantinou (VP of Product), Seth Hitchings (VP of Platform), dan Troy Malone (General Manager, APAC).</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" align="justify">3. Hidangan Penutup: Mengenal dan Belajar dari Sesama Pengguna&nbsp;<br />Dapatkan inspirasi lewat cerita praktis tentang bagaimana mengintegrasikan Evernote dalam keseharian oleh pengguna antusias yang memiliki beragam latar belakang dan berada di berbagai negara. Simak juga bagaimana supaya tetap up to date tentang Evernote.</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" align="justify">Dan masih ada lagi:</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" align="justify">Bonus 1: Cheat sheet berupa referensi cepat penggunaan.<br />Bonus 2: Kode layanan premium selama satu bulan senilai US$5 ini adalah hadiah khusus dari Evernote. Anda bisa menggunakan Evernote dengan gratis, tetapi dapatkan lebih banyak manfaat lewat layanan premiumnya.</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" align="justify">Temukan juga fakta-fakta unik seputar Evernote, seperti kenapa gajah dipilih sebagai logonya.</p>', '92224892338', 192, 2013, 'GPU', 'Indonesia'),
(24, 'Aku Dalam Budaya', 'Telaah Metodologi Filsafat', '<div style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" align="justify">Alam dan budaya kerap dipandang sebagai dua hal yang berlawanan. Toeti Heraty mengelindan keduanya di atas panggung bernama subjektivitas&mdash;sang aku yang bertegangan dengan bukan-aku dalam dunia bersama. Sang aku ternyata mengandung banyak matra dengan pelbagai eksesnya, namun tetap memiliki peluang untuk terbuka terhadap keragaman realitas. Melalui buku ini, kita pelan-pelan belajar bagaimana menemukan orientasi budaya yang jernih di tengah-tengah simpang siur gejala kehidupan.<br /><br /><span style="font-size: small;"><em><strong><span style="color: #ff6666;">&mdash;Dr. Karlina Supelli;&nbsp;</span>Pengajar Filsafat, Sekolah Tinggi Filsafat Driyarkara</strong></em></span><br /><br /><br />Penerbitan kembali Aku dan Budaya karya Dr. Toeti Heraty Noerhadi layak disambut dengan gembira oleh mereka yang berkecimpung di bidang filsafat dan budaya. Buku ini sangat kaya dengan informasi mutakhir, yang membuka wawasan kita mengenai manusia yang mencipta, mentransformir dan menafsirkan budaya di satu pihak dan di pihak lain manusia yang dipengaruhi dan bahkan dibentuk oleh budaya.<br /><br /><span style="font-size: small;"><em><strong><span style="color: #ff6666;">&mdash;Prof. Dr. M. Sastrapratedja, SJ;&nbsp;</span>Pengajar Filsafat, Sekolah Tinggi Filsafat Driyarkara</strong></em></span><br /><br /><br />Hal yang amat penting diutarakan ibu Toeti Heraty dalam buku ini adalah perlunya dekonstruksi terhadap paradigma ilmu pengetahuan sosial-budaya yang ada, dan perlunya keterbukaan berpikir yang bersifat membebaskan. Tujuannya tiada lain agar ilmu pengetahuan memberikan solusi konkret bagi berbagai problem sosial kontemporer yang dihadapi manusia masa kini. Pemikiran ibu Toeti memberi inspirasi bagi lahirnya kajian sosial-budaya yang lebih kritis dalam banyak isu, seperti gender, feminisme, multikulturalisme, dan pluralisme. Kajian kritis amat dibutuhkan demi menemukan cara yang efektif dalam mewujudkan kemaslahatan umat manusia.<br /><br /><span style="font-size: small;"><em><strong><span style="color: #ff6666;">&mdash;Prof. Dr. Musdah Mulia;</span>&nbsp;Ketua Lembaga Kajian Agama dan Jender (LKAJ)</strong></em></span><br /><br /><br />Karya ini harus dihargai tinggi, belum banyak penulis-pemikir Indonesia yang telah menjelajahi pemikiran filsafat, khususnya Eropa, yang memengaruhi pola pikir umat manusia sejagat. Buku ini mengingatkan saya kepada karya Bung Hatta &ldquo;Alam Fikiran Yunani&rdquo; puluhan tahun yang silam.<br /><br /><span style="font-size: small;"><em><strong><span style="color: #ff6666;">&mdash;Prof. Dr. Syafi&rsquo;i Ma&rsquo;arif;&nbsp;</span>Anggota Akademi Jakarta</strong></em></span></div>\r\n<p><span style="font-size: small;"><em><strong>&nbsp;</strong></em></span></p>', '9789792294965', 344, 2013, 'Gramedia Pustaka Utama', 'Indonesia'),
(25, 'Windows Forensic + Cd', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Windows Forensic memungkinkan seorang penyelidik dan hacker mengetahui apa yang tidak dapat diketahui oleh orang awam dari sebuah PC.</span></p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Forensik sendiri adalah kegiatan proses investigasi peranti komputer atau peranti simpannya, untuk menentukan apakah peranti ini digunakan untuk keperluan yang ilegal, tidak sah, atau tidak biasa.</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Dengan menggunakan berbagai tool yang dijelaskan di buku ini, diharapkan Anda juga bisa menjadi mahir melakukan pengumpulan informasi, analisis data, dan tahapan lain dari kegiatan forensik.</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Anda akan diajari agar mahir melakukan:</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">- Pengumpulan data volatil</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">- Analisis data</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">- Penggunaan software The Sleuth Kit (TSK)</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">- Penggunaan software EnCase untuk keperluan forensik</p>', '9786020031453', 128, 2012, 'lex media', 'Indonesia'),
(26, 'Sarjana Masbuk', 'Bertemu Kanjeng Nabi Hingga Menjadi Pawang Hati', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: small;">Buku ini merupakan kumpulan dari 32 kisah pilihan yang dialami oleh penulis sebagai seorang sarjana masbuk, sarjana yang telat lulusnya.</span></p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;"><span style="font-size: small;">Kisah-kisah yang terkandung di dalam buku ini unik, lucu, konyol, dan sekaligus menyentil, memotivasi, dan membuat setiap pembacanya merenungkan kejadian-kejadian sederhana yang sebenarnya memiliki maksud yang lebih mendalam</span></p>', '9786020032399', 244, 2012, 'Elex Media', 'Indonesia'),
(27, 'Blender Cycles: Lighting and Rendering Cookbook', '', '<h2>In Detail</h2>\r\n<p>&nbsp;</p>\r\n<p>Blender provides a broad spectrum of modeling, texturing, lighting, animation and video post-processing functionality in one package. It provides cross-platform interoperability, extensibility and a tightly integrated workflow. Blender is one of the most popular Open Source 3D graphics applications in the world.</p>\r\n<p>Modern GPUs (Graphics Processing Unit) have some limitations for rendering complex scenes. This is mainly because of limited memory, and interactivity issues when the same graphics card is also used for displaying and rendering frames. This is where Cycles rendering engine comes into play. Cycles is bundled as an add-on with Blender. Some of the features of Cycles is its quality, speed and having integrated industry standard libraries.</p>\r\n<p>This book will show you how to carry out your first steps in Cycles - a brand new rendering engine for Blender. In a gradual and logical way, you will learn how to create complex shaders and lighting setups to face any kind of situation that you may find in Computer Graphics.</p>\r\n<p>This book provides information on how to setup your first application in Cycles. You will start by adding lights, materials, and textures to your scene. When it&rsquo;s time for the final render, you will see how to setup Cycles in the best way. You will learn about a wide variety of materials, lighting, techniques, tips, and tricks to get the best out of Cycles. Further on in the book, you will get to know about animation and still shots, and learn how to create advanced materials for realistic rendering, as well cartoon style shaders.</p>\r\n<p>This cookbook contains a wide range of different scenes, proposed in a structured and progressive order. During this journey, you will get involved in the concepts behind every step you take in order to really master what you learn.</p>\r\n<h2>Approach</h2>\r\n<p>An in-depth guide full of step-by-step recipes to explore the concepts behind the usage of Cycles. Packed with illustrations, and lots of tips and tricks; the easy-to-understand nature of the book will help the reader understand even the most complex concepts with ease.</p>\r\n<h2>Who this book is for</h2>\r\n<p>If you are a digital artist who already knows your way around Blender, and you want to learn about the new Cycles&rsquo; rendering engine, this is the book for you. Even experts will be able to pick up new tips and tricks to make the most of the rendering capabilities of Cycles.</p>', '1782164608', 258, 1985, 'Packt Publishing', 'English'),
(28, '7 Jam Belajar Interaktif Excel 2010 Untuk Profesional+cd', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Membantu dengan tanggap untuk belajar excel</span></p>', '9786027680210', 224, 2012, 'Maxikom', 'Indonesia'),
(29, 'Akhir Dunia', 'Armageddon, Qiyamah&Pralaya', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Akhir dunia berkaitan langsung dengan nasib manusia setelah kematiannya. Menurut kayakinan kedua agama ini, setelah kematiannya di dunia ini, manusia menunggu di alam kubur datangnya hari kiamat. Pada hari itu semua orang mati akan dibangkitkan dari kuburnya, untuk di adili dan dari sana dikirim ke surga atau neraka dimana mereka hidup dengan kenikmatan dan penderitaannya masing-masing, secara abadi. Oleh karena itu walaupun merupakan bencana hebat hari kiamat ditunggu-tunggu oleh pengikut kedua agama ini.</span></p>', '98824747820', 77, 2015, 'MEDIA HINDU', 'Indonesia'),
(30, 'Multimedia Programming with Pure Data', '', '<div class="detail-description-content">\r\n<div>\r\n<div>\r\n<h2>In Detail</h2>\r\n<p>Preparing interactive displays, creating computer games, and conducting audio-visual performance are now achievable without typing lines of code. With Pure Data, a graphical programming environment, creating interactive multimedia applications is just visually connecting graphical icons together. It is straightforward, intuitive, and effective.</p>\r\n<p>"Multimedia Programming with Pure Data" will show you how to create interactive multimedia applications. You will learn how to author various digital media, such as images, animations, audio, and videos together to form a coherent title. From simple to sophisticated interaction techniques, you will learn to apply these techniques in your practical multimedia projects.</p>\r\n<p>You start from making 2D and 3D computer graphics and proceed to animation, multimedia presentation, interface design, and more sophisticated computer vision applications with interactivity. With Pure Data and GEM, you will learn to produce animations with 2D digital imagery, 3D modelling, and particle systems. You can also design graphical interfaces, and use live video for motion tracking applications. Furthermore, you will learn Audio signal processing, which forms the key aspect to multimedia content creation. Last but not least, Network programming using Pure Data extension libraries explores applications to other portable devices.</p>\r\n<h2>Approach</h2>\r\n<p>A quick and comprehensive tutorial book for media designers to jump-start interactive multimedia production with computer graphics, digital audio, digital video, and interactivity, using the Pure Data graphical programming environment.</p>\r\n<h2>Who this book is for</h2>\r\n<p>An introductory book on multimedia programming for media artists/designers who like to work on interactivity in their projects, digital art/design students who like to learn the first multimedia programming technique, and audio-visual performers who like to customize their performance sets.</p>\r\n</div>\r\n</div>\r\n</div>', '1782164619', 350, 2013, 'Packt Publishing', 'English'),
(31, 'Vedanta', 'Sebuah Pengantar Sederhana', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: small;">"Vedanta adalah penyulingan dari segala sesuatu yang paling jelas, paling bijak dan paling menarik&nbsp;</span><span style="font-size: small; font-family: Arial, Helvetica, sans-serif;">dalam tradisi Hindu Dharma. Dan karena salah satu inti keyakinan Hindu Dharma adalah validitas semua jalan untuk Tuhan,&nbsp;</span><span style="font-size: small; font-family: Arial, Helvetica, sans-serif;">Vedanta sendiri memegang semacam cermin bagi setiap agama lain, memungkinkan kita untuk&nbsp;</span><span style="font-size: small; font-family: Arial, Helvetica, sans-serif;">melihat apa yang paling jelas, paling bijak dan paling manarik di sana.&nbsp;</span><span style="font-size: small; font-family: Arial, Helvetica, sans-serif;">Carol Lee Flinders, penulis Buku At the Root of this Longing dan Enduring Grace.</span></p>', '9786027521155', 100, 2015, 'MEDIA HINDU', 'Indonesia'),
(33, 'Gaguritan Sirna Kertaning Bumi', '(Uwug Banjar)', '', '9786022044222', 50, 2014, 'PARAMITA SURABAYA', 'Indonesia'),
(34, 'Blender Master Class', 'A Hands-On Guide to Modeling, Sculpting, Materials, and Rendering', '<p>Blender is a powerful and free 3D graphics tool used by artists and designers worldwide. But even experienced designers can find it challenging to turn an idea into a polished piece.<br /> <br />For those who have struggled to create professional quality projects in Blender, author Ben Simonds offers this peek inside his studio. You''ll learn how to create 3D models as you explore the creative process that he uses to model three example projects: a muscular bat creature, a futuristic robotic spider, and ancient temple ruins. Along the way, you''ll master the Blender interface and learn how to create and refine your own models.<br /> <br />You''ll also learn how to:</p>\r\n<ul>\r\n<li>Work with reference and concept art in Blender and GIMP to make starting projects easier</li>\r\n<li>Block in models with simple geometry and build up more complex forms</li>\r\n<li>Use Blender''s powerful sculpting brushes to create detailed organic models</li>\r\n<li>Paint textures with Blender and GIMP and map them onto your 3D artwork</li>\r\n<li>Design textures in GIMP and map them onto your 3D artwork</li>\r\n<li>Light, render, and composite your models to create striking images</li>\r\n</ul>\r\n<p>Each chapter walks you through a piece of the modeling process and offers detailed explanations of the tools and concepts used. Filled with full-color artwork and real-world tips, <em>Blender Master Class</em> gives you the foundation you need to create your own stunning masterpieces.<br /> <br />Supplementary download includes files for each project in the book, as wellas extra textures, brushes, and other resources.<br /> <br />Covers Blender 2.6x</p>', '1593275079', 288, 2013, 'No Starch Press', 'English'),
(35, 'Vatikan', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;">Vatikan | Menyingkap rahasia kota suci :&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;">Sebuah potret sejarah, perayaan, khazanah tak ternilai, serta arsitektur yang mengagumkan.</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;" /><em style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;">&ldquo;Buku ini sangat berharga karena membuka dunia Vatikan&nbsp;secara amat kaya, mulai dari aspek sejarah, seni dan iman.<br />Dalam buku ini pembaca dapat meresapi masa-masa indah&nbsp;yang setiap tahun berkembang di Vatikan</em></p>', '9789790338012', 320, 2009, 'Erlangga', 'Indonesia'),
(36, 'Blender For Dummies, 2nd Edition', '', '<p><strong>Here''s something to get animated about &mdash; free 3D animation software and this fun and easy guide!</strong></p>\r\n<p>So you really want to explore 3D animation, but you can''t afford one of the high-end 3D graphics programs? Blender was made for you, and it''s free! And this book is even friendlier than the open source Blender community. It shows you just what you need to know to turn your ideas into cool movies or games, even if you''ve never used 3D software before.</p>\r\n<ul>\r\n<li>\r\n<p>Think like Blender &mdash; get familiar with Blender''s novel way of doing things, especially the unique interface</p>\r\n</li>\r\n<li>\r\n<p>The basics &mdash; start creating 3D objects with meshes, curves, and surfaces, and use the Extrude tool</p>\r\n</li>\r\n<li>\r\n<p>Lights, colors, and scenes &mdash; learn to build detailed 3D models, create characters and props, and light your scenes</p>\r\n</li>\r\n<li>\r\n<p>Get moving &mdash; understand animation curves, rig characters for motion, use particles, and make objects bounce and jiggle</p>\r\n</li>\r\n<li>\r\n<p>From Blender to something bigger &mdash; see how to render your files and move them into a movie file format such as QuickTime</p>\r\n</li>\r\n</ul>\r\n<p><strong>Open the book and find:</strong></p>\r\n<ul>\r\n<li>\r\n<p>Updates and new Blender features</p>\r\n</li>\r\n<li>\r\n<p>How to save time with hotkeys</p>\r\n</li>\r\n<li>\r\n<p>Ways to use Modifiers</p>\r\n</li>\r\n<li>\r\n<p>Tips on adding color and adjusting shader values</p>\r\n</li>\r\n<li>\r\n<p>All the options for adding texture</p>\r\n</li>\r\n<li>\r\n<p>How to build a character from skeleton to skin</p>\r\n</li>\r\n<li>\r\n<p>Basic animation principles</p>\r\n</li>\r\n<li>\r\n<p>Ten solutions to common problems that new users face<strong>Learn to</strong></p>\r\n</li>\r\n<li>\r\n<ul>\r\n<li>\r\n<p>Create realistic animations with this free, open source software</p>\r\n</li>\r\n<li>\r\n<p>Build 3D objects with meshes, curves, and surfaces</p>\r\n</li>\r\n<li>\r\n<p>Take advantage of the new interface and other features of Blender 2.56</p>\r\n</li>\r\n<li>\r\n<p>Install Blender 2.56a from the bonus DVD</p>\r\n</li>\r\n</ul>\r\n<p><strong>Bonus DVD Includes</strong></p>\r\n<ul>\r\n<li>Blender v 2.56a with installation instructions</li>\r\n<li>A sample Blender movie to illustrate what you can achieve</li>\r\n<li>Other helpful materials to get you going with Blender</li>\r\n</ul>\r\n<p>Please see the About the DVD Appendix for complete system requirements.</p>\r\n<p>Visit the companion Web site at www.dummies.com/go/blenderfd2e for examples, a link to download Blender, and more!</p>\r\n</li>\r\n</ul>', '1457131389', 456, 2011, 'Wiley / For Dummies', 'English'),
(37, 'Mengikuti Jejak Maria', '', '', '9005674232', 300, 2014, 'Orbit Media', 'Indonesia');
INSERT INTO `Book` (`ID`, `Title`, `SubTitle`, `Description`, `ISBN`, `Page`, `Year`, `Publisher`, `Language`) VALUES
(38, 'Blender 3D 2.49 Architecture, Buidlings, and Scenery', '', '<h2>In Detail</h2>\r\n<p>Every type of construction-such as building a house, a movie set, or a virtual set-needs a project. These projects are made of a lot of documents and technical drawings, which help in the construction of those buildings. These technical drawings and documents are just fine, but when you need to make a presentation of these projects for people who can''t read technical drawings, things can get a little difficult.</p>\r\n<p>To make presentations for people who can''t read technical drawings, we use tools like Blender. With Blender we can create, texture, and generate photo-real images of a project. These images are helpful to architects or companies to explain their projects in a better way. This book will show you how to generate real-looking architectural models quickly using Blender. You can also create natural scenery, landscapes, plants, various weather conditions, environmental factors, building materials such as wood, metal, brick, and more using Blender.</p>\r\n<p>As you walk through the chapters you will see that Blender is a tool, designed to give you high productivity and fast access to tools and menus helping you to create 3D models quickly for 3D visualization. You will learn how to add people to different scenes as well as other objects to an already existing photograph or a video making it easier to increase its realism.</p>\r\n<p>The process begins by learning how Blender user interface works then moves on and starts to deal with 3D modeling. In the 3D modeling chapters you will learn how to work with polygon-based modeling for architecture, creating walls and other architectural elements. But, a project is not only made of large scale models and this is the reason why you also learn to create 3D furniture.</p>\r\n<p>In the section about advanced lighting for architecture, you learn how to work with YafaRay to use global illumination techniques such as Photon Mapping and Path Tracing, and create photo-real renderings.</p>\r\n<p>In the last section of the book, dedicated to animation, we will create linear animation based on keyframes and interactive 3D applications.</p>\r\n<p>Create realistic models of building exteriors and interiors, the surrounding environment, and scenery.</p>\r\n<h2>Approach</h2>\r\n<p>The book consists of a lot of exciting examples, which are shaped using the various features of Blender. It provides step-by-step instructions leading you to realistic models of buildings, landscapes, and more. A collection of amazing screenshots will add excitement to your learning experience. You can build realistic 3D models that can be used while creating different animation projects.The printed version of the book is in black and white, but a full color version of the images is available for download here. The eBook version, available from Packt, is in full color.</p>\r\n<h2>Who this book is for</h2>\r\n<p>This book is for architects, game designers, artists, or movie makers who want to create realistic buildings, interiors, and scenery using Blender 3D, a free, open-source graphics tool. This book is not a general introduction to Blender, but focuses on developing expertise on the architectural aspects of the tool. You need not have prior knowledge of Blender.</p>', '1849510490', 376, 2010, 'Packt Publishing', 'English'),
(39, 'KRISTIANI - AL KITAB 034 (1) TI IMITASI BARU', '(BLUE JEANS)', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Alkitab</span></p>', '912754700', 400, 0000, 'PENGADAAN', 'Indonesia'),
(40, 'ZBrush Character Creation', 'Advanced Digital Sculptin', '<div class="detail-description-content">\r\n<div>\r\n<div>\r\n<p>Break Free from the 3D Mold</p>\r\n<p>ZBrush is taking the world of 3D modeling by storm, allowing CG artists to create spectacular organic models in a way that feels like traditional sculpting and painting. Like the software itself, this beautiful four-color guide perfectly blends technology with artistry to give you a thorough, hands-on tutorial in creating 3D characters with this revolutionary software.</p>\r\n<p>Digital sculptor Scott Spencer guides you through the full array of ZBrush tools, including brushes, textures, and detailing. You''ll learn how to sculpt in ZBrush, design a character bust, and dazzle viewers with your creations. Above all, you''ll discover how to apply time-honored methods of traditional sculpting and painting to a digital formatÂ—and emerge a better artist, no matter what the medium.</p>\r\n<ul>\r\n<li>\r\n<p>Bridge the transition from traditional sculpting to digital</p>\r\n</li>\r\n<li>\r\n<p>Explore the ZBrush interface and toolsets</p>\r\n</li>\r\n<li>\r\n<p>Learn valuable techniques for texturing, posing, and rendering in ZBrush</p>\r\n</li>\r\n<li>\r\n<p>Master ZScripts, macros, and other methods for customizing the interface</p>\r\n</li>\r\n<li>\r\n<p>Transfer your ZBrush creations into Maya&reg; and prepare for use in film, game, or other formats</p>\r\n</li>\r\n<li>\r\n<p>Gain valuable insights and tips from guest artists throughout the book</p>\r\n</li>\r\n</ul>\r\n<p>VALUABLE COMPANION DVD</p>\r\n<p>Support files for the book''s tutorials are included on the DVD, so you can try out the techniques as you go. It also includes ZBrush movies to further illustrate the step-by-step sculpting process, as well as a trial version of ZBrush 3.1 for the Microsoft Windows operating system.</p>\r\n</div>\r\n</div>\r\n</div>', '1457108690', 384, 2008, 'Wiley / Sybex', 'English'),
(41, '7 Seeds 20', '', '<div style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" align="justify">Kapal raksasa yang dimasuki Tim Musim Panas A sedang bersiap memuntahkan seluruh misil yang dibawanya ke seluruh Kepulauan Jepang. Ada yang berusaha menghentikan peluncuran misil tersebut, ada juga yang berhadapan dengan luka masa lalu.<br />Akankah mereka menemukan cahaya di ujung perjalanan mereka?</div>', '9786020214740', 200, 2013, 'SHONGAKUKAN', 'Indonesia'),
(42, 'Aktivitas Meningkatkan Iq Anak: Dino Si Raksasa', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Fan dan Fin tidak sengaja masuk ke dunia zaman dinosaurus. Sesampainya di dunia dinosaurus, mereka harus menyelamatkan anak alomosaurus. Wah, wah, bisakah Fan dan Fin menyelamatkan anak-anak alomosuarus dari ancaman T-Rex? Yuks, kita bantu Fan dan Fin sambil menjawab soal-soal berikut ini. Kalian pasti bisa menjawab soal matematika, soal cerita dan soal-soal yang lain. Bersama Fin dan Fan, kita bisa menjadi anak yang cerdas!</span></p>', '9786020254418', 45, 2014, '', 'Indonesia'),
(43, 'FASIH PERCAKAPAN SEHARI2 BAHASA ARAB INDONESIA INGGRIS', '', '', '9789798781018', 124, 0000, 'Mutiara Media', 'Indonesia'),
(44, 'Unity Game Development', '', '<div class="detail-description-content">\r\n<div>\r\n<div>\r\n<p>Unity 3D is a powerful and popular game development tool that has taken game developers by storm. It is a cross-platform game engine, enabling you to write your game once and then port it to PCs, consoles, and even the Web, making it a great choice for both indie and AAA developers. Unity combines serious power with a friendly, easy-to-use interface.</p>\r\n<p>Unity Game Development Blueprints takes you on an exciting journey where you''ll learn how to use Unity to its best by building a project in 2D, then a 3D game with 2D gameplay, and finally a 3D title.</p>\r\n<p>An easy-to-follow guide with each project containing step-by-step explanations, diagrams, screenshots, and downloadable materials. Concepts in Unity and C# are explained.</p>\r\n</div>\r\n</div>\r\n</div>', '1783553635', 318, 0000, 'Packt Publishing', 'English'),
(45, 'Doraemon 23 (Terbit Ulang)', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; text-align: justify;">Doraemon yang jarang dipuji, tiba-tiba dipuji! Waaah, momen seindah ini memang harus diabadikan dan diputar berulang-ulang, tapi Doraemon punya nggak, yaaa? Video yang bisa memutar momen terbaik di hidup kita</span></p>', '9786020216805', 192, 2013, 'Shongakukan', 'Indonesia'),
(46, 'Annyeonghaseyo Mudahnya Belajar Bahasa Korea', '', '', '789797992248', 200, 2012, 'Transmedia', 'Indonesia'),
(48, 'Bahasa Gaul Jepang Indonesia +cd', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px;">Buku ini berisi kalimat-kalimat gaul yang banyak digunakan dalam buku-buku komik maupun dalam percakapan sehari-hari di antara sesama teman. Terdapat juga kalimat bahasa Jepang formil sebagai kalimat perbandingannya. Tanda &acirc;&trade;&euro; pada akhir kalimat menunjukkan kalimat ucapan wanita dan tanda &acirc;&trade;&sbquo; adalah kalimat ucapan pria, dilengkapi dengan cara baca dalam huruf romaji, hiragana maupun katakana.</span></p>', '9789798372513', 122, 2008, 'Gakhusudo', 'Indonesia'),
(49, 'Hunter X Hunter 01', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Gon, seorang bocah yang bercita-cita menjadi hunter, suatu hari mengetahui kalau ayahnya yang dikiranya sudah mati ternyata masih hidup!</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Ayah Gon adalah seorang hunter berlisensi yang berburu harta, makhluk gaib, dan sebagainya ke berbagai tempat di seluruh penjuru dunia. Gon bertekad untuk mengikuti jejaknya dan memutuskan untuk mengikuti ujian menjadi hunter agar bisa menjadi hunter terhebat sedunia! Tapi tantangan yang harus dihadapinya sangat amat berat!</span></p>', '9786020217901', 192, 2013, 'Shueisha', 'Indonesia'),
(50, 'Libgdx Cross-platform Game Development Cookbook', '', '<div class="detail-description-content">\r\n<div>\r\n<div>\r\n<p>Libgdx is a very popular open source, cross-platform, Java-based game development framework that enables you to write your code once and deploy it to Windows, Mac, Linux, Android, iOS, and browsers.</p>\r\n<p>Supported by code samples for each topic, this book will take you through the features of Libgdx, from the very basic aspects to the most advanced ones. Beginning with an overview of the framework and project creation, the book moves on to the 2D graphics API that enables you to create efficient and visually rich games. You will then explore input detection and audio and file handling, followed by details of how to make use of amazing features such as Box2D rigid body physics, lighting, and artifical intelligence techniques to name a few. You will also discover how to modify Libgdx to suit your needs and share your creation with the world.</p>\r\n</div>\r\n</div>\r\n</div>', '1783287306', 516, 2014, 'Packt Publishing', 'English'),
(52, 'Learning AndEngine', '', '<div class="detail-description-content">\r\n<div>\r\n<div>\r\n<p>AndEngine is a very popular open source OpenGL (open graphics library) Android game engine, used to create mobile games quickly while maintaining the ability to fully customize them.</p>\r\n<p>This book will guide you through the whole development process of creating a mobile game for the Android platform using one of the most popular and easy-to-use game engines available today.</p>\r\n<p>Beginning with the very basics, you will learn how to install AndEngine, gather graphics, add sound and music assets, and design game rules. You will first design an example game and enhance it by adding various features over the course of the book. Each chapter adds more colors, enhances the game, and takes it to the next level. You will also learn how to work with Box2D, a popular 2D physics engine that forms an integral part of some of the most successful mobile games.</p>\r\n<p>By the end of the book, you will be able to create a complete, interactive, and fully featured mobile game for Android and publish it to Google Play.</p>\r\n</div>\r\n</div>\r\n</div>', '1783554089', 286, 2014, 'Packt Publishing', 'English'),
(53, 'Std 83: Asoka', '', '', '9786020035291', 290, 2012, 'elex media', 'Indonesia'),
(55, 'Seri Kuark-level 1 Tubuh Manusia-rahasia Tubuh Kita', '', '', '9786020035130', 129, 2012, 'elex media', 'Indonesia'),
(56, 'Dreamweaver CS5.5: The Missing Manual', '', '<div class="detail-description-content">\r\n<div>\r\n<div>\r\n<p>Dreamweaver is the tool most widely used for designing and managing professional-looking websites, but it''s a complex program. That''s where <em>Dreamweaver CS5.5: The Missing Manual</em> comes in. With its jargon-free explanations, 13 hands-on tutorials, and savvy advice from Dreamweaver expert Dave McFarland, you''ll master this versatile program with ease.</p>\r\n<ul>\r\n<li><strong>Get A to Z guidance.</strong> Go from building your first web page to creating interactive, database-driven sites.</li>\r\n<li><strong>Build skills as you learn.</strong> Apply your knowledge through tutorials and downloadable practice files.</li>\r\n<li><strong>Create a state-of-the-art website.</strong> Use powerful, easy-to-use tools such as CSS3 and Spry effects to build visually rich, fast-loading pages.</li>\r\n<li><strong>Add instant interactivity.</strong> Choose from pre-packaged JavaScript programs to add drop-down menus, tabbed panels, forms, and other features.</li>\r\n<li><strong>Tap into databases.</strong> Connect your site to a database and build pages that dynamically sort and display stored information.</li>\r\n<li><strong>Go mobile.</strong> Build and preview websites for smartphones and tablets.</li>\r\n<li><strong>Discover hidden tips and tricks.</strong> Get undocumented workarounds and shortcuts.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', '1449398882', 1216, 2011, 'O''Reilly Media', 'English'),
(57, 'Pedoman Umum Ejaan Bahasa Indonesia Yang Disempurnakan', '', '<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Jika kita menggunakan bahasa tulisan, mau tidak mau kita harus memahami terlebih dahulu seluk beluk ejaan yang berlaku saat ini. Tanpa pemahaman itu tulisan kita akan akcau dan sulit di pahami orang.</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">&nbsp;</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Siapapun yang ingin mahir menulis dalam bahasa Indonesia dapat memanfaatkan buku pedoman ini.</p>', '9789790258952', 100, 2009, 'Grassindo', 'Indonesia'),
(58, 'Seri Kuark-level 2 Tubuh Manusia-rahasia Tubuh Kita', '', '', '9786020035147', 129, 2012, 'elex media', 'Indonesia'),
(59, 'SEMANTIK LEKSIKAL', '', '<p><span class="SectionTitle" style="font-size: 16px; color: #b12919; font-family: Arial, Helvetica, sans-serif; font-weight: bold;">Table of Contents</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: 13px;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px;">DAFTAR ISI</span></p>\r\n<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px;">Bab 1 : Pendahuluan...................................................................1</span></p>\r\n<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px;">Bab 2 : Kedudukan Semantik dalam Semiotik......................25</span></p>\r\n<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px;">Bab 3 : Aspek-Aspek Semantik...............................................35</span></p>\r\n<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px;">Bab 4 : Makna............................................................................78</span></p>\r\n<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px;">Bab 5 : Makna dalam Kata.....................................................133</span></p>\r\n<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px;">Bab 6 : Perubahan Makna......................................................158</span></p>\r\n<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px;">Bab 7 : Sekitar Makna.............................................................200</span></p>\r\n<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px;">Bab 8 : Komponen Makna......................................................259</span></p>', '9789795188414', 300, 0000, 'RINEKA CIA', 'Indonesia'),
(60, 'Why? Fosil', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px;">Kalian semua tahu dinosaurus kan? Reptil raksasa yang ada di bumi ribuan tahun sebelum manusia ada. Apa kalian tahu bagaimana caranya kita dapat mengetahui makhluk seperti itu pernah hidup? Itu semua berkat fosil. Kalian pernah mengamati jejak kaki pada waktu hujan di tanah liat basah, lalu kering di bawah sinar matahari? Sama seperti jejak kai dan tulang yang tidak sengaja tercetak di batu, inilah yang disebut fosil. Sama seperti jejak kaki dan tulang yang tidak sengaja tercetak di batu, inilah yang disebut fosil. Sama seperti time capsule ya? Di dalam buku why? Fosil ini, melalui fosil didapat informasi tentang makhluk apa yang pernah hidup di bumi, bagaimana mereka berevolusi, dan kondisi alam saat itu di bumi yang mengagumkan ini.</span></p>', '9789792759259', 159, 2009, 'elex media', 'Indonesia'),
(61, 'ROBOT TANK DAN NAVIGASI CERDAS', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Di sini diberikan gambaran lengkap mulai dari dasar perakitan dan pemrograman robot sampai pembuatan robot tank dengan sensor jarak, accelerometer, sensor gas, navigasi robot, robot soccer, fire fighter, kendali bluetooth, maze solver, dan lain- lain.</span></p>', '9789792770346', 350, 2012, 'elex media', 'Indonesia'),
(62, 'SOPAN SANTUN DI MEJA MAKAN', '', '', '9789791984454', 18, 2013, 'supreme supra', 'Indonesia'),
(63, 'Sastra & Cultural Studies', '', '<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;"><strong>Sesuai dengan judulnya, sastra dan cultural studies:representasi fiksi dan fakta maka masalah2 pokok yang dibicarakan dalam buku ini meliputi eksistensi sastra, baik dalam bentuk fiksi maupun kritik, baik dalam kaitannya dengan masyarakat maupun kebudayaan. Sesuai dengan lahirnya teori2 kontemporer, yaitu postrukturalisme, maka intensitas pembicaraan diberikan pada model hubungan yang kedua, yaiut antra sastra dan kebudayaan. Model hubungan inilah, dengan menampilkan cara2 pemahaman yang baru, sebagai paradigma postrukturalisme, dengan melibatkan berbagai disimpiln yang lain, kemudian melahirkan cultural studies.</strong></p>\r\n<p><strong>&nbsp;</strong></p>', '9789793721810', 631, 2010, 'Dinamika Natura,ud', 'Indonesia'),
(64, 'One Piece 31', '', '', '9789792075649', 120, 2005, 'Elex Media', 'Indonesia'),
(65, 'DAILY TALKS:Percakapan Inggris-Indonesia', '', '', '9789791382366', 281, 2011, 'TITIK TERANG', 'English'),
(66, 'BANK SOAL & SIMULASI TOEFL COMPLETE LISTENING, STRUCTURE', '', '', '98722220183', 250, 0000, 'INSPIRITA PUBLISHING', 'English'),
(67, 'DETEKTIF CONAN SPESIAL 01', '', '<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Siapa tak kenal conan? Detektif cilik jelmaan shinici kudo yang tubuhnya menciut karena racun dari kawanan berjubah hitam. Kali ini, dalam penyamarannya sebagai anak sd , dia masih bisaa membagi waktu antara memecahkan kasus dan bermain dengan kelompok detektif ciliknya. Kali ini conan beraksi dalam kasus pendek yang cukup menegangkan.</p>', '9789792021257', 167, 2001, 'elex media', 'Indonesia'),
(68, 'ACTIVE ENGLISH FOR NURSES', '', '', '979519089', 0, 0000, 'EGC', 'Indonesia'),
(69, 'HTML5 for Publishers', '', '<div class="detail-description-content">\r\n<div>\r\n<div>\r\n<p>HTML5 is revolutionizing the Web, and now it''s coming to your ebook reader! With the release of the EPUB 3 specification, HTML5 support is officially a part of the EPUB standard, and publishers are able to take full advantage of HTML5''s rich feature set to add rich media and interactivity to their ebook content.<br /> <br /> <em>HTML5 for Publishers</em> gives an overview of some of the most exciting features HTML5 provides to ebook content creators--audio/video, geolocation, and the Canvas--and shows how to put them in action. Learn how to:</p>\r\n<ul>\r\n<li>Intersperse audio/video with textual content</li>\r\n<li>Create a graphing calculator to display algebraic equations on the Canvas</li>\r\n<li>Use geolocation to customize a work of fiction with details from the reader''s locale</li>\r\n<li>Employ MathML to create an interactive equation solver</li>\r\n<li>Make a coloring book using SVG and JavaScript</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', '1449314600', 56, 2011, 'O''Reilly Media', 'English'),
(70, 'Barbie Fairytopia', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Membaca cine-manga (komik) ini kalian seperti menonton filmnya. Kalian bisa bertemu Elina "peri tak bersayap yang selalu diejek teman-temannya", Enchantress "sang ratu peri", dan Laverna, "kembaran Enchantress yang jahat". Laverna ingin menjadi ratu dan merebut kekuasaan dari tangan saudaranya. Ia menyebarkan racun yang membuat tanaman-tanaman sakit dan peri-peri tak bisa terbang. Saksikan bagaimana Elina menghadapi Laverna dan berjuang mati-matian untuk menyelamatkan Fairytopia!</span></p>', '9789792223538', 96, 2006, 'Gramedia Pustaka', 'Indonesia'),
(71, 'Belajar Sendiri Bahasa Mandarin 2 + Cd', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Bagi yang ingin belajar Mandarin tanpa harus menghadiri kelas. - Bagi yang ingin belajar percakapan saja. - Bagi yang ingin sekaligus belajar percakapan dan penulisan aksara Mandarin. - Berisikan kata-kata dasar, pola-pola kalimat, dan latihan-latihan. - Dibagi dalam 3 tingkatan dasar, buku dasar 1, dasar 2, dasar 3.</span></p>', '9789791573047', 76, 2010, 'PUSTAKA SINAR TERANG', 'Indonesia'),
(72, 'LaTeX', 'Beginners Guide', '<h2>In Detail</h2>\r\n<p>LaTeX is high-quality Open Source typesetting software that produces professional prints and PDF files. However, as LaTeX is a powerful and complex tool, getting started can be intimidating. There is no official support and certain aspects such as layout modifications can seem rather complicated. It may seem more straightforward to use Word or other WYSIWG programs, but once you''ve become acquainted, LaTeX''s capabilities far outweigh any initial difficulties. This book guides you through these challenges and makes beginning with LaTeX easy. If you are writing Mathematical, Scientific, or Business papers, or have a thesis to write, then this is the perfect book for you.</p>\r\n<p><em>LaTeX Beginner''s Guide</em> offers you a practical introduction to LaTeX with plenty of step-by-step examples. Beginning with the installation and basic usage, you will learn to typeset documents containing tables, figures, formulas, and common book elements like bibliographies, glossaries, and indexes and go on to managing complex documents and using modern PDF features. It''s easy to use LaTeX, when you have LaTeX Beginner''s Guide to hand.</p>\r\n<p>This practical book will guide you through the essential steps of LaTeX, from installing LaTeX, formatting, and justification to page design. Right from the beginning, you will learn to use macros and styles to maintain a consistent document structure while saving typing work. You will learn to fine-tune text and page layout, create professional looking tables as well as include figures and write complex mathematical formulas. You will see how to generate bibliographies and indexes with ease. Finally you will learn how to manage complex documents and how to benefit from modern PDF features. Detailed information about online resources like software archives, web forums, and online compilers completes this introductory guide. It''s easy to use LaTeX, when you have <em>LaTeX Beginner''s Guide</em> to hand.</p>\r\n<p>Create professional-looking texts, articles, and books for Business and Science</p>\r\n<h2>Approach</h2>\r\n<p>Packed with fully explained examples, <em>LaTeX Beginner''s Guide</em> is a hands-on introduction quickly leading a novice user to professional-quality results.</p>\r\n<h2>Who this book is for</h2>\r\n<p>If you are about to write mathematical or scientific papers, seminar handouts, or even plan to write a thesis, then this book offers you a fast-paced and practical introduction. Particularly during studying in school and university you will benefit much, as a mathematician or physicist as well as an engineer or a humanist. Everybody with high expectations who plans to write a paper or a book will be delighted by this stable software.</p>', '1847199879', 336, 2011, 'Packt Publishing', 'English'),
(73, 'Percakapan Mandarin Jl 4 :spp', '', '<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Jilid IV dengan 20 topik percakapan yang sangat beragam, mudah dipelajari dan sering dijumpai dalam percakapan pergaulan umum.</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">&nbsp;</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Juga diberikan latihan percakapan dengan pemakaian kosa kata yang beragam, dengan pola kalimat yang agak panjang namun tetap praktis dan mudah.</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">&nbsp;</p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Buku seri penuntun praktis percakapan ini disusun dalam 5 jilid.<br />Setiap jilidnya dilengkapi dengan KASET untuk membantu dalam pengucapan yang benar dan tepat.</p>', '9789799376237', 189, 2006, 'Pustaka Sinar Terang', 'Indonesia'),
(74, 'Metode Cepat Baca Tulis Mandarin Buku 4', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: small;">Buku ini mencoboa memahami murid agar mudah mengerti dan mempelajari bahasa Mandarin.</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><span style="font-size: small;"><strong style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">(Valentinus Xavier, SLTP 3 Tarsisius 1, Jakarta)</strong></span></p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;"><span style="font-size: small;">Lao Shi menghadirkan buku ini untuk membangkitkan semangat murid dalam mempelajaribahasa Mandarin. Xie xie Lao Shi.</span><br /><span style="font-size: small;"><strong>(Jefri Suciokto dan Lilian Hadibrata, St. Caroline School)</strong></span></p>\r\n<p><span style="font-size: small;"><strong>&nbsp;</strong></span></p>', '9789797956110', 52, 2012, 'Wahyu Media', 'Indonesia'),
(76, 'Crayon Shinchan 13', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Shinchan dapat peran penting dalam tiga dongeng klasik; Putri Kaguya, Si Tudung Merah, dan Cinderella.&nbsp;</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Dengan kehadiran Shinchan, ketiga hikayat itu pun menjadi lebih seru!! Sementara itu, mama lagi-lagi frustasi dengan berat badannya.&nbsp;</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><br style="font-family: Arial, Helvetica, sans-serif; font-size: medium;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Tampaknya kali ini mama serius mau melangsingkan diri, tapi godaannya sungguh berat. Ayo mama, berjuanglah!</span></p>', '9786020034874', 120, 2012, 'elex media', 'Indonesia'),
(77, 'Hijabers Fashion Guide', '', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: small;">Bety dan Widya adalah dua alumnus Arva School of Fashion yang segera memulai usaha modenya setelah lulus. Pilihan untuk masuk ke area niaga busana muslimah menurut saya adalah baik, mengingat pasar untuk jenis busana tersebut amat luas di Indonesia. Ide mereka untuk menulis buku ini tentang berbagai style busana muslimah adalah langkah awal yang sangat jitu dan memang belum banyak dikerjakan para desainer muda. Temukan ide-ide kreatif mereka dalam buku ini. Maju terus Bety dan Widya! Aryani Widagdo, Founder of Arva School of Fashion</span></p>\r\n<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p style="font-size: 13px; color: #000000; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;"><span style="font-size: small;">Bety dan Widya adalah generasi baru yang mempopulerkan hijab dengan model yang lebih modern sehingga anak-anak muda sudah tidak lagi merasa kaku menggunakan hijab. Satu langkah maju untuk busana muslimah sehingga tampak lebih menarik dengan padu padan yang unik. Alben Ayub Andal, Fashion Designer pemilik AA 18</span></p>\r\n<p><span style="font-size: small;">&nbsp;</span></p>', '9786028388733', 62, 2012, 'Lingua Kata', ''),
(78, 'Optimize Your Hijab Style', 'Modifikasi Gaya Berhijab U/ Tampil Memesona', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: medium;">Penulis: @inaroviUkuran: 18 x 24 cmTebal: 72 hlmPenerbit: Qultum MediaISBN: 979-017-247-8Harga: Rp45.000,- Inovatif! Buku ini sangat berbeda dengan buku hijab yang ada. Apalagi semua jenis hijab dan teknik modifikasinya disajikan dengan jelas. Two thumbs up juga untuk fashion style-nya. Dijamin nggak akan bosan membaca buku ini!Ria Miranda-Desainer, Komite Hijabers Community Inspiring in calmness, creative, and high fashion.Ghaida Tsurayya-Desainer, Komite Hijabers Community Siapa bilang untuk tampil cantik dan menarik bagi seorang muslimah harus mahal dan royal? Tren gaya hijab yang semakin berkembang saat ini sering memunculkan kesan konsumtif pada pemakainya. Padahal dengan kreativitas yang jeli, kita tetap bisa bergaya dengan koleksi hijab yang kita punya tanpa harus membeli yang baru.</span></p>', '9789790172470', 72, 2012, 'Qultumedia', ''),
(80, 'XML Publishing with Adobe InDesign', '', '<p>From Adobe InDesign CS2 to InDesign CS5, the ability to work with XML content has been built into every version of InDesign. Some of the useful applications are importing database content into InDesign to create catalog pages, exporting XML that will be useful for subsequent publishing processes, and building chunks of content that can be reused in multiple publications.<br /> <br />In this Short Cut, we&rsquo;ll play with the contents of a college course catalog and see how we can use XML for course descriptions, tables, and other content. Underlying principles of XML structure, DTDs, and the InDesign namespace will help you develop your own XML processes. We&rsquo;ll touch briefly on using InDesign to &ldquo;skin&rdquo; XML content, exporting as XHTML, InCopy, and the IDML package. The Advanced Topics section gives tips on using XSLT to manipulate XML in conjunction with InDesign.</p>', '123120849', 111, 2010, 'O''Reilly Media', 'English'),
(81, 'Breaking Dawn', '(The Twilight Saga, Book 4)', '<p><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;">When you loved the one who was killing you, it left you no options. How could you run, how could you fight, when doing so would hurt that beloved one? If your life was all you had to give, how could you not give it? If it was someone you truly loved?</span><strong style="color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;"><em><br /><br /></em></strong><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;">To be irrevocably in love with a vampire is both fantasy and nightmare woven into a dangerously heightened reality for Bella Swan. Pulled in one direction by her intense passion for Edward Cullen, and in another by her profound connection to werewolf Jacob Black, a tumultuous year of temptation, loss, and strife have led her to the ultimate turning point. Her imminent choice to either join the dark but seductive world of immortals or to pursue a fully human life has become the thread from which the fates of two tribes hangs.</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;" /><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;">Now that Bella has made her decision, a startling chain of unprecedented events is about to unfold with potentially devastating, and unfathomable, consequences. Just when the frayed strands of Bella''s life-first discovered in&nbsp;</span><em style="color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;">Twilight</em><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;">, then scattered and torn in&nbsp;</span><em style="color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;">New Moon</em><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;">&nbsp;and&nbsp;</span><em style="color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;">Eclipse</em><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;">-seem ready to heal and knit together, could they be destroyed... forever?</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;" /><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;">The astonishing, breathlessly anticipated conclusion to the Twilight Saga,&nbsp;</span><em style="color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;">Breaking Dawn</em><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;">&nbsp;illuminates the secrets and mysteries of this spellbinding romantic epic that has entranced millions.</span></p>', '0316067929', 756, 2008, 'Little, Brown and Company', 'English'),
(82, 'Fifty Shades of Grey', '', '', '9781612130286', 514, 2011, 'Vintage Books', 'English'),
(83, 'The Fault in Our Stars', '', '', '0525478817', 313, 2012, 'Dutton Books', 'English'),
(84, 'The Hunger Games', '', '', '9780439023528', 374, 2008, 'Scholastic Press', 'English'),
(85, 'Harry Potter and the Deathly Hallows', '', '', '0545010225', 759, 2007, 'Scholastic', 'English'),
(86, 'Divergent', '', '<p style="margin: 0px 0px 14px; padding: 0px; color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;">This first book in Veronica Roth''s #1&nbsp;<em>New York Times</em>&nbsp;bestselling Divergent trilogy is the novel that inspired the major motion picture starring Shailene Woodley, Theo James, and Kate Winslet. This dystopian series set in a futuristic Chicago has captured the hearts of millions of teen and adult readers.</p>\r\n<p style="margin: -4px 0px 14px; padding: 0px; color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;">Perfect for fans of the Hunger Games and Maze Runner series,&nbsp;<em>Divergent</em>&nbsp;and its sequels,&nbsp;<em>Insurgent</em>&nbsp;and&nbsp;<em>Allegiant</em>&mdash;plus&nbsp;<em>Four: A Divergent Collection</em>, four stories told from the perspective of the character Tobias&mdash;are the gripping story of a dystopian world transformed by courage, self-sacrifice, and love. Fans of the&nbsp;<em>Divergent</em>&nbsp;movie will find the book packed with just as much emotional depth and exhilarating action as the film, all told in beautiful, rich language.</p>\r\n<p style="margin: -4px 0px 14px; padding: 0px; color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;">The paperback edition includes bonus materials created by Veronica Roth, including her essays on Utopian worlds and how she named the factions, writing tips, a Q&amp;A, a&nbsp;<em>Divergent</em>&nbsp;playlist, faction manifestos, and an excerpt from&nbsp;<em>Insurgent</em>.&nbsp;</p>\r\n<p style="margin: -4px 0px 14px; padding: 0px; color: #333333; font-family: Arial, sans-serif; font-size: 14px; line-height: 22.3999996185303px;"><em>One choice can transform you.</em>&nbsp;Beatrice Prior''s society is divided into five factions&mdash;Candor (the honest), Abnegation (the selfless), Dauntless (the brave), Amity (the peaceful), and Erudite (the intelligent). Beatrice must choose between staying with her Abnegation family and transferring factions. Her choice will shock her community and herself. But the newly christened Tris also has a secret, one she''s determined to keep hidden, because in this world,&nbsp;<em>what makes you different makes you dangerous.</em></p>', '0062024027', 487, 2011, 'Katherine Tegen Books', 'English'),
(87, 'Moneyball', 'The Art of Winning an Unfair Game', '', '9780393057652', 288, 2003, 'W. W. Norton & Company', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `Book Author`
--

CREATE TABLE IF NOT EXISTS `Book Author` (
  `ID Book` int(11) NOT NULL COMMENT 'The ID of the book',
  `ID Author` int(11) NOT NULL COMMENT 'The ID of the author',
  KEY `ID Book` (`ID Book`,`ID Author`),
  KEY `ID Author` (`ID Author`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Book Author`
--

INSERT INTO `Book Author` (`ID Book`, `ID Author`) VALUES
(1, 1),
(1, 2),
(3, 4),
(4, 5),
(6, 7),
(7, 8),
(8, 9),
(9, 10),
(11, 11),
(12, 7),
(13, 12),
(14, 13),
(15, 14),
(16, 15),
(17, 16),
(18, 12),
(19, 17),
(20, 18),
(21, 19),
(21, 20),
(22, 21),
(23, 22),
(24, 23),
(25, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(33, 33),
(34, 34),
(35, 35),
(36, 36),
(37, 37),
(38, 38),
(39, 39),
(40, 40),
(41, 41),
(42, 42),
(43, 43),
(44, 44),
(45, 45),
(46, 46),
(48, 47),
(49, 48),
(50, 49),
(50, 50),
(52, 51),
(53, 52),
(55, 53),
(56, 54),
(57, 43),
(58, 53),
(59, 43),
(60, 55),
(60, 56),
(61, 57),
(62, 58),
(63, 59),
(64, 60),
(65, 61),
(66, 62),
(67, 63),
(68, 43),
(69, 64),
(70, 65),
(71, 66),
(72, 67),
(73, 68),
(74, 69),
(76, 71),
(77, 72),
(78, 73),
(80, 75),
(81, 76),
(82, 77),
(83, 43),
(84, 78),
(85, 79),
(86, 80),
(87, 81);

-- --------------------------------------------------------

--
-- Table structure for table `Book Category`
--

CREATE TABLE IF NOT EXISTS `Book Category` (
  `ID Book` int(11) NOT NULL COMMENT 'The ID of the book',
  `ID Category Detail` int(11) NOT NULL COMMENT 'The id category detail of the book',
  KEY `ID Book` (`ID Book`),
  KEY `ID Category` (`ID Category Detail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Book Category`
--

INSERT INTO `Book Category` (`ID Book`, `ID Category Detail`) VALUES
(1, 1),
(6, 3),
(3, 3),
(4, 3),
(7, 8),
(8, 3),
(9, 8),
(12, 3),
(13, 9),
(14, 9),
(15, 2),
(16, 13),
(16, 14),
(16, 15),
(16, 16),
(16, 10),
(17, 2),
(18, 9),
(19, 2),
(22, 4),
(23, 10),
(24, 4),
(25, 10),
(26, 4),
(21, 10),
(27, 13),
(27, 14),
(27, 15),
(27, 16),
(27, 10),
(20, 13),
(20, 15),
(20, 17),
(28, 11),
(29, 5),
(30, 13),
(30, 8),
(30, 14),
(30, 15),
(30, 16),
(30, 10),
(31, 5),
(33, 5),
(34, 13),
(34, 15),
(34, 16),
(35, 7),
(36, 13),
(36, 14),
(36, 15),
(36, 16),
(37, 7),
(38, 13),
(38, 14),
(38, 16),
(39, 7),
(40, 13),
(41, 18),
(42, 18),
(43, 23),
(44, 13),
(44, 16),
(45, 18),
(46, 23),
(48, 23),
(49, 18),
(50, 13),
(50, 16),
(52, 13),
(52, 16),
(53, 19),
(55, 19),
(57, 25),
(59, 25),
(60, 20),
(61, 20),
(62, 20),
(63, 25),
(64, 21),
(66, 24),
(67, 21),
(68, 24),
(70, 21),
(71, 26),
(72, 15),
(72, 17),
(73, 26),
(74, 26),
(76, 21),
(77, 27),
(56, 13),
(56, 14),
(78, 27),
(80, 15),
(80, 10),
(11, 3),
(82, 31),
(81, 31),
(83, 31),
(84, 33),
(85, 33),
(86, 33),
(69, 15),
(69, 17),
(69, 10),
(87, 32);

-- --------------------------------------------------------

--
-- Table structure for table `Book Review`
--

CREATE TABLE IF NOT EXISTS `Book Review` (
  `ID Book` int(11) NOT NULL COMMENT 'The ID of the book',
  `Reviewer` varchar(255) NOT NULL COMMENT 'The reviewer of the book',
  `Email` varchar(255) NOT NULL COMMENT 'The email of the reviewer',
  `Review` text NOT NULL COMMENT 'The review of the book',
  `Rate` int(11) NOT NULL COMMENT 'The rate of the review',
  `Date` datetime NOT NULL COMMENT 'The date of the review',
  KEY `ID Book` (`ID Book`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Book Review`
--

INSERT INTO `Book Review` (`ID Book`, `Reviewer`, `Email`, `Review`, `Rate`, `Date`) VALUES
(40, 'Adi Suripiyanto', 'adian.4vr@gmail.com', 'Soo much a new think for me to learn about image editing.\r\nit''s looks like from the Hollywood.', 5, '2015-01-21 16:37:38'),
(67, 'Dinar Priskawati', 'narpris@gmail.com', 'Komik Detektif Conan Edisi Spesial menceritakan tentang Conan yang menyelesaikan kasus-kasus yang spesial. Kasus spesial yang ditangani oleh Conan lebih unik dan menegangkan. Jadi jangan untuk membelinya.', 5, '2015-01-21 16:58:47'),
(64, 'Wisnu Bima P', 'wisnubimaprasetyo@yahoo.co.id', 'Ini komik menceritakan tentang semangat seseorang yang tidak pernah menyerah dalam mewujudkan cita citanya, buat sobat gausah ragu banyak kisah yang memiliki makna dan arti yang sangat menyentuh\r\n\r\nSooo..... BELI LANGSUNG', 5, '2015-01-21 17:00:50'),
(48, 'Dinar Priskawati', 'narpris@gmail.com', 'Dalam buku ini belajar bahasa jepang lebih menarik dan tidak membosankan. Dan yang dipelajari bukanlah bahasa formal melainkan bahasa gaul yang digunakan orang jepang. Jika anda ingin mudah mempelajari bahasa jepang belilah buku ini :D', 5, '2015-01-21 17:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `Cart`
--

CREATE TABLE IF NOT EXISTS `Cart` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The ID of the shopping cart',
  `ID Visitor` int(11) NOT NULL COMMENT 'The id visitor of the cart',
  PRIMARY KEY (`ID`),
  KEY `ID Book` (`ID Visitor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Cart`
--

INSERT INTO `Cart` (`ID`, `ID Visitor`) VALUES
(1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `Cart Item`
--

CREATE TABLE IF NOT EXISTS `Cart Item` (
  `ID Cart` int(11) NOT NULL COMMENT 'The ID of the cart',
  `ID Book` int(11) NOT NULL COMMENT 'The ID of the book',
  `Quantity` int(11) NOT NULL,
  KEY `ID Cart` (`ID Cart`,`ID Book`),
  KEY `ID Book` (`ID Book`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Cart Item`
--

INSERT INTO `Cart Item` (`ID Cart`, `ID Book`, `Quantity`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE IF NOT EXISTS `Category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The ID of the category',
  `Name` varchar(255) NOT NULL COMMENT 'The name of the category',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`ID`, `Name`) VALUES
(2, 'Agama & Filsafat'),
(6, 'Bahasa'),
(5, 'Buku Anak & Remaja'),
(4, 'Design'),
(7, 'Kewanitaan'),
(3, 'Komputer'),
(8, 'Novel'),
(1, 'Programming');

-- --------------------------------------------------------

--
-- Table structure for table `Category Detail`
--

CREATE TABLE IF NOT EXISTS `Category Detail` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The id of the subject of the category',
  `ID Category` int(11) NOT NULL COMMENT 'The ID of the category',
  `Name` varchar(255) NOT NULL COMMENT 'The name of the subject of the category',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`),
  KEY `ID Category` (`ID Category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `Category Detail`
--

INSERT INTO `Category Detail` (`ID`, `ID Category`, `Name`) VALUES
(1, 1, 'PHP'),
(2, 2, 'Islam'),
(3, 2, 'Budha'),
(4, 2, 'Filsafat'),
(5, 2, 'Hindu'),
(7, 2, 'Kristen & Katolik'),
(8, 3, 'Database'),
(9, 3, 'Hardware'),
(10, 3, 'Internet & Web'),
(11, 3, 'Microsoft Office'),
(12, 3, 'Sistem Informasi'),
(13, 4, 'Animation'),
(14, 4, 'Design Apps'),
(15, 4, 'Digital Publishing'),
(16, 4, 'Game Design & Development'),
(17, 4, 'Information Architecture'),
(18, 5, 'Cerita Anak'),
(19, 5, 'Cerita Serial'),
(20, 5, 'Dunia Pengetahuan'),
(21, 5, 'Komik'),
(22, 5, 'Novel Remaja'),
(23, 6, 'Bahasa Asing'),
(24, 6, 'Bahasa Inggris'),
(25, 6, 'Bahasa Indonesia'),
(26, 6, 'Bahasa Mandarin'),
(27, 7, 'Busana'),
(28, 7, 'Kecantikan'),
(29, 7, 'Keterampilan'),
(30, 7, 'Resep Makanan & Minuman'),
(31, 8, 'Romance'),
(32, 8, 'Non-Fiction'),
(33, 8, 'Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE IF NOT EXISTS `Customer` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The ID of the customer',
  `First Name` varchar(255) NOT NULL COMMENT 'The name of the customer',
  `Last Name` varchar(255) NOT NULL COMMENT 'The last name of the customer',
  `Email` varchar(255) NOT NULL COMMENT 'The email of the customer',
  `Phone` varchar(255) NOT NULL COMMENT 'The phone number of the customer',
  `Company` varchar(255) NOT NULL COMMENT 'The company name of the customer',
  `Address` varchar(255) NOT NULL COMMENT 'The address of the customer',
  `City` varchar(255) NOT NULL COMMENT 'The city of the customer',
  `Post Code` varchar(255) NOT NULL COMMENT 'The post code of the customer',
  `State` varchar(255) NOT NULL COMMENT 'The state of the customer',
  `Country` varchar(255) NOT NULL COMMENT 'The country of the customer',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`ID`, `First Name`, `Last Name`, `Email`, `Phone`, `Company`, `Address`, `City`, `Post Code`, `State`, `Country`) VALUES
(1, 'Mohammad Abdul', 'Iman Syah', 'imancha_266@ymail.com', '085224057100', 'ImanchaOS', 'Panguragan', 'Cirebon', '45163', 'Jawa Barat', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `Dispatch`
--

CREATE TABLE IF NOT EXISTS `Dispatch` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID Order` int(11) NOT NULL COMMENT 'The ID of the order',
  `ID Warehouse` int(11) NOT NULL COMMENT 'The ID of the warehouse',
  `ID Shipping Method` int(11) NOT NULL COMMENT 'The ID of the shipping method',
  `ID Payment Method` int(11) NOT NULL COMMENT 'The ID of the payment method',
  `Status` enum('Packing','Shipping','Delivered') NOT NULL DEFAULT 'Packing' COMMENT 'The satus of the dispatch',
  PRIMARY KEY (`ID`),
  KEY `ID Order` (`ID Order`,`ID Shipping Method`,`ID Payment Method`),
  KEY `ID Shipping` (`ID Shipping Method`),
  KEY `ID Payment` (`ID Payment Method`),
  KEY `ID Shipping Method` (`ID Shipping Method`),
  KEY `ID Payment Method` (`ID Payment Method`),
  KEY `ID Warehouse` (`ID Warehouse`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Dispatch`
--

INSERT INTO `Dispatch` (`ID`, `ID Order`, `ID Warehouse`, `ID Shipping Method`, `ID Payment Method`, `Status`) VALUES
(1, 1, 2, 3, 1, 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `Order`
--

CREATE TABLE IF NOT EXISTS `Order` (
  `ID Order` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The ID of the order',
  `ID Customer` int(11) NOT NULL COMMENT 'The ID of the customer',
  `Date` datetime NOT NULL COMMENT 'The date of the order',
  `Message` text NOT NULL COMMENT 'The message of the order',
  `ID Cart` int(11) NOT NULL COMMENT 'The ID of the cart',
  `Total` double NOT NULL,
  PRIMARY KEY (`ID Order`),
  KEY `ID Customer` (`ID Customer`),
  KEY `ID Cart` (`ID Cart`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Order`
--

INSERT INTO `Order` (`ID Order`, `ID Customer`, `Date`, `Message`, `ID Cart`, `Total`) VALUES
(1, 1, '2015-01-21 12:56:30', '', 1, 59.99);

-- --------------------------------------------------------

--
-- Table structure for table `Payment Method`
--

CREATE TABLE IF NOT EXISTS `Payment Method` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The ID of the payment method',
  `ID Warehouse` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL COMMENT 'The description of the payment method',
  `Account` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID Warehouse` (`ID Warehouse`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `Payment Method`
--

INSERT INTO `Payment Method` (`ID`, `ID Warehouse`, `Name`, `Description`, `Account`) VALUES
(1, 2, 'Direct Bank Transfer', 'Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account.', '0203278738'),
(2, 2, 'Monybookers', 'Moneybookers(Skrill) makes it easy for developers to accept credit cards on the web.', 'imancha_266@ymail.com'),
(3, 2, 'Paypal', 'Appropriately seize value-added quality vectors via fully researched process improvements. ', 'imancha_266@ymail.com'),
(4, 1, 'BNI', 'Transfer melalui Bank BNI', '0203278738'),
(5, 1, 'BRI', 'Transfer melalui Bank BRI', '085224057100'),
(6, 1, 'BCA', 'Transfer melalui Bank BCA', '085795525434');

-- --------------------------------------------------------

--
-- Table structure for table `Shipping Method`
--

CREATE TABLE IF NOT EXISTS `Shipping Method` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The ID of the shipping method',
  `ID Warehouse` int(11) NOT NULL COMMENT 'The id warehouse of the shipping method',
  `Name` varchar(255) NOT NULL COMMENT 'The name of the shipping method',
  `Description` varchar(255) NOT NULL COMMENT 'The description of the shipping method',
  `Cost` double NOT NULL COMMENT 'The cost of the shipping method',
  `Estimate` varchar(255) NOT NULL COMMENT 'The estimate day of the shipping method',
  PRIMARY KEY (`ID`),
  KEY `ID Warehouse` (`ID Warehouse`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `Shipping Method`
--

INSERT INTO `Shipping Method` (`ID`, `ID Warehouse`, `Name`, `Description`, `Cost`, `Estimate`) VALUES
(1, 2, 'Standard International Postage', 'Delivered to your letterbox within', 0, '7-14 working days'),
(2, 2, 'DHL Standard Postage', 'Delivered to your letterbox within', 2.99, '2-5 working days'),
(3, 2, 'Fedex Quick Delivery', 'Delivered to your letterbox within', 6.4, '1-3 working days'),
(4, 1, 'Kantor Pos', '', 10000, '7-14 hari kerja'),
(5, 1, 'TIKI', '', 20000, '2-5 hari kerja'),
(6, 1, 'JNE', '', 40000, '1-3 hari kerja');

-- --------------------------------------------------------

--
-- Table structure for table `Stock`
--

CREATE TABLE IF NOT EXISTS `Stock` (
  `ID Warehouse` int(11) NOT NULL COMMENT 'The ID of the warehouse',
  `ID Book` int(11) NOT NULL COMMENT 'The ID of the book',
  `Stock` int(11) NOT NULL DEFAULT '0' COMMENT 'The stock of the book at the warehouse',
  `Price` double NOT NULL DEFAULT '0' COMMENT 'The price of the book',
  KEY `ID Warehouse` (`ID Warehouse`,`ID Book`),
  KEY `ID Book` (`ID Book`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Stock`
--

INSERT INTO `Stock` (`ID Warehouse`, `ID Book`, `Stock`, `Price`) VALUES
(2, 1, 10, 59.99),
(1, 6, 120, 59500),
(1, 3, 100, 72250),
(1, 4, 160, 55250),
(1, 8, 120, 75650),
(1, 9, 150, 55000),
(1, 12, 123, 59500),
(1, 13, 100, 22780),
(1, 14, 59, 34800),
(1, 15, 123, 21250),
(2, 16, 5, 129.99),
(1, 17, 145, 23800),
(1, 18, 50, 32900),
(1, 19, 30, 29750),
(1, 22, 113, 44200),
(1, 23, 30, 32130),
(1, 24, 200, 66300),
(1, 25, 12, 29500),
(1, 26, 200, 32980),
(1, 21, 40, 35000),
(2, 27, 5, 29.99),
(2, 20, 2, 23.399),
(1, 28, 50, 42075),
(1, 29, 100, 23800),
(2, 30, 9, 26.99),
(1, 31, 100, 23800),
(1, 33, 100, 14450),
(2, 34, 10, 39.95),
(1, 35, 30, 650250),
(2, 36, 10, 34.99),
(1, 37, 150, 27200),
(2, 38, 0, 29.99),
(1, 39, 300, 85000),
(2, 40, 20, 49.99),
(1, 41, 150, 20000),
(1, 42, 200, 17000),
(1, 43, 100, 17000),
(2, 44, 10, 26.99),
(1, 45, 200, 20000),
(1, 46, 200, 25500),
(1, 48, 100, 29750),
(1, 49, 89, 20000),
(2, 50, 7, 29.99),
(2, 52, 10, 23.99),
(1, 53, 50, 24000),
(1, 55, 60, 32800),
(1, 57, 100, 10625),
(1, 58, 60, 38800),
(1, 59, 200, 52700),
(1, 60, 40, 75000),
(1, 61, 89, 29800),
(1, 62, 20, 15300),
(1, 63, 200, 59500),
(1, 64, 56, 17500),
(1, 65, 100, 12750),
(1, 66, 200, 84150),
(1, 67, 100, 17000),
(1, 68, 150, 34850),
(1, 71, 50, 36125),
(2, 72, 0, 26.99),
(1, 73, 100, 14875),
(1, 74, 100, 24650),
(1, 76, 50, 19550),
(1, 77, 100, 34000),
(2, 56, 20, 39.99),
(1, 78, 100, 38250),
(1, 80, 20, 126500),
(2, 80, 20, 9.99),
(1, 11, 210, 34000),
(2, 11, 123, 53.99),
(2, 82, 200, 8.97),
(2, 81, 100, 12.03),
(2, 83, 200, 12.99),
(2, 84, 200, 10.99),
(2, 85, 0, 14.99),
(2, 86, 200, 12.99),
(1, 69, 99, 25000),
(2, 69, 99, 12.5),
(2, 87, 100, 15.95);

-- --------------------------------------------------------

--
-- Table structure for table `Visitor`
--

CREATE TABLE IF NOT EXISTS `Visitor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The id of the visitor',
  `ID Warehouse` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL COMMENT 'The name of the visitor',
  `Datetime` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID Warehouse` (`ID Warehouse`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `Visitor`
--

INSERT INTO `Visitor` (`ID`, `ID Warehouse`, `Name`, `Datetime`) VALUES
(1, 1, '36.72.186.214', '2015-01-21 12:30:38'),
(2, 2, '36.72.186.214', '2015-01-21 12:32:31'),
(3, 1, '36.72.186.214', '2015-01-21 12:53:01'),
(4, 2, '36.72.186.214', '2015-01-21 12:55:03'),
(5, 1, '36.72.186.214', '2015-01-21 12:55:13'),
(6, 2, '36.72.186.214', '2015-01-21 12:55:17'),
(7, 1, '36.72.186.214', '2015-01-21 13:18:34'),
(8, 1, '36.72.186.214', '2015-01-21 13:19:52'),
(9, 1, '36.72.186.214', '2015-01-21 13:45:47'),
(10, 1, '36.72.186.214', '2015-01-21 13:50:50'),
(11, 2, '36.72.186.214', '2015-01-21 13:56:40'),
(12, 1, '36.72.186.214', '2015-01-21 13:56:47'),
(13, 2, '36.72.186.214', '2015-01-21 14:00:11'),
(14, 1, '36.72.186.214', '2015-01-21 14:00:39'),
(15, 2, '36.72.186.214', '2015-01-21 14:28:05'),
(16, 1, '36.72.186.214', '2015-01-21 14:36:45'),
(17, 2, '36.72.186.214', '2015-01-21 14:37:01'),
(18, 1, '36.72.186.214', '2015-01-21 14:37:31'),
(19, 1, '36.72.186.214', '2015-01-21 14:39:59'),
(20, 2, '36.72.186.214', '2015-01-21 14:40:12'),
(21, 2, '36.72.186.214', '2015-01-21 14:48:34'),
(22, 1, '36.72.186.214', '2015-01-21 15:07:05'),
(23, 2, '36.72.186.214', '2015-01-21 15:21:54'),
(24, 1, '36.72.186.214', '2015-01-21 15:22:44'),
(25, 1, '36.72.186.214', '2015-01-21 15:23:10'),
(26, 2, '36.72.186.214', '2015-01-21 15:24:15'),
(27, 1, '36.72.186.214', '2015-01-21 15:24:43'),
(28, 2, '36.72.186.214', '2015-01-21 15:24:52'),
(29, 2, '36.80.1.166', '2015-01-21 15:28:55'),
(30, 1, '36.80.1.166', '2015-01-21 15:29:23'),
(31, 1, '36.80.1.166', '2015-01-21 15:29:43'),
(32, 2, '36.80.1.166', '2015-01-21 15:37:33'),
(33, 1, '36.80.1.166', '2015-01-21 15:38:35'),
(34, 2, '36.80.1.166', '2015-01-21 15:38:39'),
(35, 2, '36.80.1.166', '2015-01-21 15:38:44'),
(36, 2, '36.72.191.168', '2015-01-21 15:50:14'),
(37, 1, '36.72.191.168', '2015-01-21 15:50:17'),
(38, 2, '36.72.191.168', '2015-01-21 15:50:21'),
(39, 2, '36.72.191.168', '2015-01-21 15:50:50'),
(40, 1, '36.72.191.168', '2015-01-21 15:50:53'),
(41, 2, '36.72.191.168', '2015-01-21 15:52:32'),
(42, 2, '36.72.191.168', '2015-01-21 15:52:53'),
(43, 1, '36.72.191.168', '2015-01-21 15:52:56'),
(44, 2, '36.72.191.168', '2015-01-21 16:02:29'),
(45, 1, '36.72.191.168', '2015-01-21 16:02:37'),
(46, 2, '36.72.191.168', '2015-01-21 16:03:07'),
(47, 1, '36.72.191.168', '2015-01-21 16:03:10'),
(48, 1, '36.72.191.168', '2015-01-21 16:07:12'),
(49, 2, '36.72.191.168', '2015-01-21 16:10:18'),
(50, 2, '36.72.191.168', '2015-01-21 16:10:23'),
(51, 1, '36.72.191.168', '2015-01-21 16:10:26'),
(52, 2, '36.72.191.168', '2015-01-21 16:11:44'),
(53, 1, '36.72.191.168', '2015-01-21 16:11:55'),
(54, 2, '36.72.191.168', '2015-01-21 16:16:56'),
(55, 1, '36.72.191.168', '2015-01-21 16:19:28'),
(56, 2, '36.72.191.168', '2015-01-21 16:28:51'),
(57, 1, '36.72.191.168', '2015-01-21 16:29:19'),
(58, 2, '36.72.191.168', '2015-01-21 16:31:31'),
(59, 1, '36.72.191.168', '2015-01-21 16:35:24'),
(60, 2, '36.72.191.168', '2015-01-21 16:35:58'),
(61, 2, '36.72.191.168', '2015-01-21 16:39:10'),
(62, 1, '36.72.191.168', '2015-01-21 16:41:08'),
(63, 1, '36.72.191.168', '2015-01-21 16:44:05'),
(64, 2, '36.72.191.168', '2015-01-21 16:49:43'),
(65, 2, '36.72.191.168', '2015-01-21 16:49:56'),
(66, 1, '36.72.191.168', '2015-01-21 16:51:09'),
(67, 1, '36.72.191.168', '2015-01-21 16:53:01'),
(68, 2, '36.72.191.168', '2015-01-21 16:56:48'),
(69, 1, '36.72.191.168', '2015-01-21 16:56:55'),
(70, 1, '36.72.191.168', '2015-01-21 16:57:28'),
(71, 2, '36.72.191.168', '2015-01-21 17:08:54'),
(72, 1, '36.72.191.168', '2015-01-21 17:36:38'),
(73, 2, '36.72.191.168', '2015-01-21 17:42:50'),
(74, 2, '66.249.71.92', '2015-01-22 02:09:49'),
(75, 1, '136.243.14.165', '2015-01-22 04:11:53'),
(76, 2, '136.243.14.165', '2015-01-22 04:11:58'),
(77, 2, '180.214.232.65', '2015-01-22 07:20:28'),
(78, 2, '202.93.35.97', '2015-01-22 08:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `Warehouse`
--

CREATE TABLE IF NOT EXISTS `Warehouse` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The ID of the warehouse',
  `Name` varchar(255) NOT NULL COMMENT 'The name of the warehouse',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Warehouse`
--

INSERT INTO `Warehouse` (`ID`, `Name`) VALUES
(1, 'Indonesia'),
(2, 'United States');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Book Author`
--
ALTER TABLE `Book Author`
  ADD CONSTRAINT `Book Author_ibfk_1` FOREIGN KEY (`ID Book`) REFERENCES `Book` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Book Author_ibfk_2` FOREIGN KEY (`ID Author`) REFERENCES `Author` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Book Category`
--
ALTER TABLE `Book Category`
  ADD CONSTRAINT `Book Category_ibfk_1` FOREIGN KEY (`ID Book`) REFERENCES `Book` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Book Category_ibfk_2` FOREIGN KEY (`ID Category Detail`) REFERENCES `Category Detail` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Book Review`
--
ALTER TABLE `Book Review`
  ADD CONSTRAINT `Book Review_ibfk_1` FOREIGN KEY (`ID Book`) REFERENCES `Book` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Cart`
--
ALTER TABLE `Cart`
  ADD CONSTRAINT `Cart_ibfk_1` FOREIGN KEY (`ID Visitor`) REFERENCES `Visitor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Cart Item`
--
ALTER TABLE `Cart Item`
  ADD CONSTRAINT `Cart Item_ibfk_1` FOREIGN KEY (`ID Cart`) REFERENCES `Cart` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Cart Item_ibfk_2` FOREIGN KEY (`ID Book`) REFERENCES `Stock` (`ID Book`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Category Detail`
--
ALTER TABLE `Category Detail`
  ADD CONSTRAINT `Category Detail_ibfk_1` FOREIGN KEY (`ID Category`) REFERENCES `Category` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Dispatch`
--
ALTER TABLE `Dispatch`
  ADD CONSTRAINT `Dispatch_ibfk_1` FOREIGN KEY (`ID Order`) REFERENCES `Order` (`ID Order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Dispatch_ibfk_2` FOREIGN KEY (`ID Warehouse`) REFERENCES `Warehouse` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Dispatch_ibfk_3` FOREIGN KEY (`ID Shipping Method`) REFERENCES `Shipping Method` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Dispatch_ibfk_4` FOREIGN KEY (`ID Payment Method`) REFERENCES `Payment Method` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Order`
--
ALTER TABLE `Order`
  ADD CONSTRAINT `Order_ibfk_1` FOREIGN KEY (`ID Customer`) REFERENCES `Customer` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Order_ibfk_2` FOREIGN KEY (`ID Cart`) REFERENCES `Cart` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Payment Method`
--
ALTER TABLE `Payment Method`
  ADD CONSTRAINT `Payment Method_ibfk_1` FOREIGN KEY (`ID Warehouse`) REFERENCES `Warehouse` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Shipping Method`
--
ALTER TABLE `Shipping Method`
  ADD CONSTRAINT `Shipping Method_ibfk_1` FOREIGN KEY (`ID Warehouse`) REFERENCES `Warehouse` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Stock`
--
ALTER TABLE `Stock`
  ADD CONSTRAINT `Stock_ibfk_1` FOREIGN KEY (`ID Warehouse`) REFERENCES `Warehouse` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Stock_ibfk_2` FOREIGN KEY (`ID Book`) REFERENCES `Book` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Visitor`
--
ALTER TABLE `Visitor`
  ADD CONSTRAINT `Visitor_ibfk_1` FOREIGN KEY (`ID Warehouse`) REFERENCES `Warehouse` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
