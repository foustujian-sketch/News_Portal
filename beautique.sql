-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2026 at 11:55 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beautique`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int NOT NULL DEFAULT '0',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `user_id`, `title`, `slug`, `thumbnail`, `excerpt`, `content`, `views`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Top 5 Foundation for 2026', 'top-5-foundation-for-2026', 'articles/AeHftp2gVqCemL73rZxDMUMnDZvX5eJB0g5y1MUH.jpg', 'Top 5 Foundation For 2026\r\n\r\nFoundation merupakan salah satu produk makeup yang memiliki peran penting dalam menciptakan tampilan wajah yang lebih hal...', 'Top 5 Foundation For 2026\r\n\r\nFoundation merupakan salah satu produk makeup yang memiliki peran penting dalam menciptakan tampilan wajah yang lebih halus, merata, dan siap untuk diaplikasikan produk makeup lainnya. Seiring berkembangnya industri kecantikan, berbagai brand menghadirkan foundation dengan formula yang lebih ringan, nyaman digunakan, dan tetap mampu memberikan coverage yang optimal. Berikut lima foundation yang diprediksi menjadi favorit para beauty enthusiast pada tahun 2026.\r\n\r\n1. Estée Lauder Double Wear Stay-in-Place Foundation\r\n\r\nFoundation legendaris ini masih menjadi pilihan utama bagi banyak pengguna karena daya tahannya yang luar biasa. Produk ini mampu bertahan hingga lebih dari 12 jam tanpa mudah luntur. Coverage yang diberikan tergolong medium hingga full coverage sehingga efektif menyamarkan noda bekas jerawat, kemerahan, dan warna kulit yang tidak merata. Cocok digunakan untuk acara formal maupun aktivitas seharian.\r\n\r\n2. NARS Light Reflecting Foundation\r\n\r\nNARS menghadirkan foundation dengan hasil akhir natural yang membuat kulit tampak sehat dan bercahaya. Formula ringan yang dimilikinya memberikan kenyamanan saat digunakan dalam waktu lama. Produk ini juga mengandung bahan perawatan kulit yang membantu menjaga kelembapan dan memperbaiki tampilan kulit dari waktu ke waktu.\r\n\r\n3. Dior Forever Skin Glow Foundation\r\n\r\nBagi pecinta makeup dengan hasil glowing, foundation dari Dior menjadi salah satu pilihan terbaik. Produk ini mampu memberikan efek kulit yang sehat dan bercahaya tanpa terlihat berminyak. Coverage medium yang dapat dibangun membuatnya cocok untuk berbagai kebutuhan makeup, mulai dari sehari-hari hingga acara spesial.\r\n\r\n4. Make Over Powerstay Weightless Liquid Foundation\r\n\r\nBrand lokal Indonesia ini berhasil menghadirkan foundation berkualitas tinggi dengan daya tahan yang sangat baik. Formula ringan dan transferproof membuatnya nyaman digunakan dalam iklim tropis. Tersedia dalam berbagai pilihan shade yang sesuai dengan warna kulit masyarakat Indonesia.\r\n\r\n5. Wardah Colorfit Perfect Glow Foundation\r\n\r\nWardah menawarkan foundation dengan harga yang terjangkau namun tetap memiliki performa yang baik. Produk ini memberikan hasil akhir glowing yang natural dan cocok digunakan untuk aktivitas sehari-hari. Teksturnya mudah dibaurkan sehingga ramah bagi pemula yang baru belajar menggunakan foundation.\r\n\r\nTips Memilih Foundation\r\n\r\nSebelum membeli foundation, penting untuk mengetahui jenis kulit yang dimiliki. Pemilik kulit berminyak sebaiknya memilih foundation dengan hasil akhir matte atau semi-matte. Sementara itu, pemilik kulit kering dapat memilih foundation dengan hasil akhir dewy atau glowing agar kulit terlihat lebih sehat.\r\n\r\nSelain itu, pemilihan shade yang sesuai juga sangat penting. Foundation yang terlalu terang atau terlalu gelap dapat membuat hasil makeup terlihat kurang natural. Sebaiknya lakukan swatch pada area rahang untuk menemukan warna yang paling mendekati warna kulit asli.\r\n\r\nKesimpulan\r\n\r\nFoundation yang tepat dapat membantu menciptakan tampilan makeup yang lebih sempurna dan tahan lama. Estée Lauder Double Wear cocok bagi yang menginginkan daya tahan tinggi, NARS Light Reflecting memberikan hasil natural, Dior Forever Skin Glow menawarkan efek bercahaya yang elegan, Make Over Powerstay menjadi pilihan lokal berkualitas, dan Wardah Colorfit Perfect Glow cocok untuk penggunaan sehari-hari. Pilihlah foundation sesuai kebutuhan dan jenis kulit agar hasil makeup terlihat maksimal.', 611, '2026-06-09 20:19:34', '2026-06-09 20:19:34', '2026-06-10 23:04:08'),
(2, 2, 1, 'Top 5 Cushion for 2026', 'top-5-cushion-for-2026', 'articles/QpvDP5Uy7vrPxuBii7waiD1cqnsMLTDc957MUXnJ.jpg', 'Top 5 Cushion For 2026\r\n\r\nCushion telah menjadi salah satu produk makeup favorit karena menawarkan kepraktisan sekaligus hasil yang natural. Produk in...', 'Top 5 Cushion For 2026\r\n\r\nCushion telah menjadi salah satu produk makeup favorit karena menawarkan kepraktisan sekaligus hasil yang natural. Produk ini sangat cocok bagi pengguna yang menginginkan tampilan wajah segar tanpa perlu mengaplikasikan banyak produk. Seiring perkembangan industri kecantikan, berbagai brand menghadirkan cushion dengan formula yang semakin ringan, tahan lama, dan mampu menyesuaikan kebutuhan berbagai jenis kulit.\r\n\r\n1. Laneige Neo Cushion Glow\r\n\r\nLaneige Neo Cushion Glow menjadi salah satu cushion yang banyak diminati karena mampu memberikan hasil akhir glowing yang sehat. Formula yang ringan membuat kulit tetap terasa nyaman sepanjang hari. Cushion ini juga mampu memberikan coverage medium yang dapat menutupi kemerahan dan noda ringan tanpa terlihat berat.\r\n\r\n2. Clio Kill Cover Mesh Glow Cushion\r\n\r\nProduk dari Clio terkenal karena kemampuannya memberikan coverage tinggi dengan hasil yang tetap natural. Teknologi mesh yang digunakan membantu produk keluar secara merata sehingga aplikasi menjadi lebih mudah. Cushion ini cocok untuk pengguna yang menginginkan kulit tampak flawless dalam waktu singkat.\r\n\r\n3. Skintific Cover All Perfect Cushion\r\n\r\nSkintific menghadirkan cushion yang tidak hanya berfungsi sebagai makeup tetapi juga mengandung bahan perawatan kulit. Formula ini membantu menjaga kelembapan kulit sekaligus memberikan coverage yang baik. Produk ini cocok digunakan untuk aktivitas sehari-hari maupun acara khusus.\r\n\r\n4. Somethinc Copy Paste Breathable Cushion\r\n\r\nSomethinc menawarkan cushion dengan teknologi breathable yang membuat kulit tetap nyaman meskipun digunakan dalam waktu lama. Hasil akhirnya terlihat natural dan tidak mudah cakey. Selain itu, pilihan shade yang beragam membuat produk ini cocok untuk berbagai warna kulit.\r\n\r\n5. Wardah Colorfit Cushion\r\n\r\nWardah menghadirkan cushion lokal dengan kualitas yang sangat baik. Produk ini memberikan hasil makeup yang ringan, natural, dan tahan lama. Harganya yang terjangkau menjadikannya salah satu pilihan favorit masyarakat Indonesia.\r\n\r\nTips Memilih Cushion\r\n\r\nPemilik kulit kering sebaiknya memilih cushion dengan hasil akhir glowing atau dewy agar kulit terlihat sehat dan lembap. Sementara itu, pemilik kulit berminyak dapat memilih cushion dengan hasil semi-matte untuk membantu mengontrol kilap berlebih.\r\n\r\nKesimpulan\r\n\r\nLaneige Neo Cushion Glow cocok untuk tampilan glowing yang elegan, Clio Kill Cover Mesh Glow menawarkan coverage tinggi, Skintific Cover All Perfect Cushion memberikan manfaat tambahan untuk kulit, Somethinc Copy Paste Breathable Cushion nyaman digunakan sepanjang hari, dan Wardah Colorfit Cushion menjadi pilihan lokal yang berkualitas. Dengan memilih cushion yang sesuai, pengguna dapat memperoleh hasil makeup yang lebih maksimal dan natural.', 937, '2026-06-09 20:19:34', '2026-06-09 20:19:34', '2026-06-12 01:18:19'),
(3, 3, 1, 'Top 5 Lipstick for 2026', 'top-5-lipstick-for-2026', 'articles/TEfsS87s1OdoNTgy5X5TPM2PtN6ecblC7qilniGc.jpg', 'Top 5 Lipstick For 2026\r\n\r\nLipstick merupakan produk makeup yang mampu memberikan perubahan signifikan pada penampilan seseorang. Pemilihan warna dan...', 'Top 5 Lipstick For 2026\r\n\r\nLipstick merupakan produk makeup yang mampu memberikan perubahan signifikan pada penampilan seseorang. Pemilihan warna dan formula yang tepat dapat membuat wajah terlihat lebih segar, percaya diri, dan menarik. Tahun 2026 menghadirkan berbagai inovasi lipstick yang menawarkan kenyamanan, pigmentasi tinggi, dan daya tahan yang lebih baik.\r\n\r\n1. Maybelline SuperStay Vinyl Ink\r\n\r\nProduk ini menjadi favorit karena mampu memberikan hasil glossy yang tahan lama. Formula transfer-resistant membuat warna tetap bertahan meskipun digunakan untuk makan dan minum.\r\n\r\n2. MAC Matte Lipstick\r\n\r\nMAC tetap menjadi salah satu brand yang paling dipercaya dalam kategori lipstick. Produk ini menawarkan pigmentasi tinggi, tekstur yang nyaman, dan pilihan warna yang sangat beragam.\r\n\r\n3. Hanasui Mattedorable Lip Cream\r\n\r\nBrand lokal ini berhasil menarik perhatian dengan formula ringan dan warna yang cocok digunakan sehari-hari. Produk ini juga memiliki harga yang terjangkau.\r\n\r\n4. Make Over Powerstay Transferproof Lipstick\r\n\r\nLipstick ini dirancang untuk pengguna yang membutuhkan daya tahan tinggi. Hasil akhirnya matte namun tetap nyaman digunakan tanpa membuat bibir terasa kering.\r\n\r\n5. BLP Lip Bullet\r\n\r\nBLP menghadirkan warna-warna yang modern dan elegan. Formula yang digunakan memberikan kenyamanan sepanjang hari dengan hasil yang natural.\r\n\r\nTips Memilih Lipstick\r\n\r\nPilih warna nude atau peach untuk penggunaan sehari-hari. Untuk acara formal, warna merah atau berry dapat menjadi pilihan yang tepat. Selain itu, pastikan lipstick memiliki formula yang sesuai dengan kondisi bibir agar tetap nyaman digunakan.\r\n\r\nKesimpulan\r\n\r\nMaybelline SuperStay Vinyl Ink unggul dalam daya tahan, MAC Matte Lipstick menawarkan kualitas premium, Hanasui Mattedorable cocok bagi pengguna yang mencari produk terjangkau, Make Over Powerstay memberikan performa tinggi, dan BLP Lip Bullet menghadirkan warna-warna modern yang elegan.', 397, '2026-06-09 20:19:34', '2026-06-09 20:19:34', '2026-06-10 23:00:44'),
(4, 4, 1, 'Top 5 Lip Tint for 2026', 'top-5-lip-tint-for-2026', 'articles/4UsZ9hyiUwoEcEJPuWYaKMljzildjh42Kn4LcZb3.jpg', 'Top 5 Lip Tint For 2026\r\n\r\nLip tint semakin populer karena mampu memberikan warna natural yang tahan lama pada bibir. Produk ini sangat cocok untuk pe...', 'Top 5 Lip Tint For 2026\r\n\r\nLip tint semakin populer karena mampu memberikan warna natural yang tahan lama pada bibir. Produk ini sangat cocok untuk pengguna yang menginginkan tampilan segar tanpa terlihat berlebihan. Berbagai brand terus berinovasi menghadirkan formula yang nyaman dan tidak membuat bibir kering.\r\n\r\n1. Peripera Ink Mood Glowy Tint\r\n\r\nPeripera menawarkan hasil akhir glossy yang membuat bibir tampak sehat dan segar. Warna yang dihasilkan juga mampu bertahan cukup lama.\r\n\r\n2. Rom&nd Juicy Lasting Tint\r\n\r\nProduk ini dikenal karena pilihan warnanya yang menarik dan cocok untuk berbagai warna kulit. Formula yang digunakan memberikan efek bibir yang lebih penuh.\r\n\r\n3. Dear Darling Water Tint\r\n\r\nLip tint ini memiliki tekstur ringan seperti air sehingga nyaman digunakan sepanjang hari. Warna yang dihasilkan terlihat natural dan cocok untuk makeup sehari-hari.\r\n\r\n4. Hanasui Lip Tint\r\n\r\nSebagai salah satu brand lokal yang berkembang pesat, Hanasui menawarkan lip tint berkualitas dengan harga yang ramah di kantong.\r\n\r\n5. Implora Juicy Lip Tint\r\n\r\nProduk ini memberikan warna yang segar dan mudah diaplikasikan. Pilihan warnanya juga cukup beragam sehingga dapat disesuaikan dengan preferensi pengguna.\r\n\r\nTips Memilih Lip Tint\r\n\r\nPerhatikan tingkat kelembapan yang diberikan oleh produk. Lip tint yang baik tidak hanya memberikan warna tetapi juga menjaga bibir tetap nyaman sepanjang hari.\r\n\r\nKesimpulan\r\n\r\nPeripera dan Rom&nd menjadi pilihan utama bagi pecinta Korean makeup, sementara Hanasui dan Implora menawarkan alternatif lokal yang tidak kalah menarik. Dengan memilih produk yang sesuai, pengguna dapat memperoleh tampilan bibir yang segar dan natural sepanjang hari.', 651, '2026-06-09 20:19:34', '2026-06-09 20:19:34', '2026-06-10 23:01:04'),
(5, 5, 1, 'Top 5 Blush for 2026', 'top-5-blush-for-2026', 'articles/j7YiRazQoKpTGb861XqroCqHUKrSS5OtLtb8dHnO.jpg', 'Top 5 Blush For 2026\r\n\r\nBlush merupakan salah satu produk makeup yang sering dianggap sederhana, namun memiliki peran besar dalam menciptakan tampilan...', 'Top 5 Blush For 2026\r\n\r\nBlush merupakan salah satu produk makeup yang sering dianggap sederhana, namun memiliki peran besar dalam menciptakan tampilan wajah yang segar dan sehat. Dengan penggunaan blush yang tepat, wajah dapat terlihat lebih hidup, cerah, dan memiliki dimensi yang lebih baik. Seiring berkembangnya tren makeup natural dan clean girl aesthetic, blush menjadi produk yang semakin penting dalam rutinitas makeup sehari-hari.\r\n\r\nTahun 2026 menghadirkan berbagai inovasi blush dengan formula yang lebih ringan, tahan lama, dan mudah dibaurkan. Mulai dari blush cair, cream blush, hingga powder blush, setiap produk menawarkan keunggulan tersendiri sesuai kebutuhan pengguna. Berikut lima blush yang diprediksi menjadi favorit para beauty enthusiast sepanjang tahun 2026.\r\n\r\n1. Rare Beauty Soft Pinch Liquid Blush\r\n\r\nRare Beauty Soft Pinch Liquid Blush menjadi salah satu produk yang paling banyak dibicarakan di dunia kecantikan. Produk ini terkenal karena pigmentasinya yang sangat tinggi sehingga hanya membutuhkan sedikit produk untuk menghasilkan warna yang cantik pada pipi. Meskipun memiliki pigmentasi yang kuat, blush ini tetap mudah dibaurkan menggunakan jari, brush, maupun sponge.\r\n\r\nFormula cair yang ringan membuat produk ini menyatu dengan kulit dan menghasilkan tampilan natural yang terlihat seperti rona alami wajah. Produk ini tersedia dalam berbagai pilihan warna yang dapat digunakan untuk berbagai warna kulit.\r\n\r\n2. NARS Orgasm Blush\r\n\r\nNARS Orgasm merupakan salah satu blush paling ikonik yang pernah ada. Produk ini telah menjadi favorit banyak makeup artist dan beauty enthusiast selama bertahun-tahun. Warna peach pink dengan sentuhan shimmer halus mampu memberikan efek wajah yang lebih segar dan bercahaya.\r\n\r\nTekstur powder yang lembut memudahkan aplikasi dan menghasilkan tampilan yang merata. Produk ini sangat cocok digunakan untuk berbagai kesempatan, mulai dari aktivitas sehari-hari hingga acara formal.\r\n\r\n3. Make Over Powerstay Glazed Lock Blush\r\n\r\nSebagai salah satu brand lokal ternama, Make Over berhasil menghadirkan blush dengan kualitas yang sangat baik. Produk ini menawarkan pigmentasi yang cukup tinggi dengan daya tahan yang mampu bertahan sepanjang hari.\r\n\r\nPilihan warna yang tersedia dirancang khusus agar cocok digunakan oleh berbagai warna kulit masyarakat Indonesia. Selain itu, teksturnya yang halus membuat proses aplikasi menjadi lebih mudah bahkan untuk pemula.\r\n\r\n4. Emina Cheeklit Pressed Blush\r\n\r\nEmina menghadirkan blush yang cocok untuk pelajar dan mahasiswa yang menginginkan produk berkualitas dengan harga terjangkau. Produk ini memiliki warna-warna yang natural sehingga aman digunakan untuk makeup sehari-hari.\r\n\r\nMeskipun harganya lebih ekonomis dibandingkan produk lainnya, kualitas yang diberikan tetap mampu menghasilkan tampilan pipi yang segar dan natural.\r\n\r\n5. Rose All Day The Realest Lightweight Blush\r\n\r\nRose All Day menawarkan blush dengan formula ringan yang nyaman digunakan dalam berbagai aktivitas. Produk ini mampu memberikan warna yang natural tanpa membuat makeup terlihat berlebihan.\r\n\r\nKemasan yang praktis dan pilihan warna yang modern membuat blush ini menjadi salah satu produk yang banyak diminati oleh generasi muda.\r\n\r\nTips Memilih Blush\r\n\r\nPemilihan warna blush sebaiknya disesuaikan dengan warna kulit. Pemilik kulit terang dapat memilih warna soft pink atau peach. Untuk kulit medium hingga sawo matang, warna coral dan warm pink biasanya memberikan hasil yang lebih natural.\r\n\r\nSelain warna, jenis formula juga perlu diperhatikan. Liquid blush dan cream blush cocok untuk tampilan dewy dan natural, sementara powder blush lebih cocok untuk kulit berminyak karena membantu mengontrol kilap berlebih.\r\n\r\nKesimpulan\r\n\r\nRare Beauty Soft Pinch Liquid Blush menjadi pilihan terbaik bagi pengguna yang menginginkan pigmentasi tinggi dan hasil natural. NARS Orgasm tetap menjadi produk ikonik yang cocok untuk berbagai kesempatan. Make Over Powerstay Glazed Lock Blush membuktikan bahwa produk lokal mampu bersaing dengan brand internasional. Emina Cheeklit Pressed Blush menawarkan kualitas baik dengan harga terjangkau, sedangkan Rose All Day The Realest Lightweight Blush cocok untuk pengguna yang mengutamakan kenyamanan dan tampilan natural.\r\n\r\nDengan memilih blush yang sesuai dengan kebutuhan dan jenis kulit, pengguna dapat memperoleh tampilan wajah yang lebih segar, sehat, dan menarik sepanjang hari.', 244, '2026-06-09 20:19:34', '2026-06-09 20:19:34', '2026-06-10 23:02:04'),
(6, 6, 1, 'Top 5 Concealer for 2026', 'top-5-concealer-for-2026', 'articles/mS11W0Nz0ZkuU96yA8wIbPX7Xk9zyIic8xg6YJR5.jpg', 'Top 5 Concealer For 2026\r\n\r\nConcealer merupakan salah satu produk makeup yang memiliki fungsi penting dalam menciptakan tampilan kulit yang lebih mera...', 'Top 5 Concealer For 2026\r\n\r\nConcealer merupakan salah satu produk makeup yang memiliki fungsi penting dalam menciptakan tampilan kulit yang lebih merata dan flawless. Produk ini digunakan untuk menyamarkan lingkaran hitam di bawah mata, bekas jerawat, kemerahan, hingga noda pada wajah yang tidak dapat tertutupi sepenuhnya oleh foundation. Dengan perkembangan industri kecantikan yang semakin pesat, berbagai brand menghadirkan concealer dengan formula yang lebih ringan, tahan lama, dan nyaman digunakan sepanjang hari.\r\n\r\nTahun 2026 menjadi tahun yang menarik bagi dunia makeup karena semakin banyak produk concealer yang menggabungkan manfaat kosmetik dan perawatan kulit dalam satu produk. Berikut lima concealer yang diprediksi menjadi favorit para beauty enthusiast sepanjang tahun 2026.\r\n\r\n1. Tarte Shape Tape Concealer\r\n\r\nTarte Shape Tape telah lama dikenal sebagai salah satu concealer terbaik di dunia kecantikan. Produk ini menawarkan coverage yang sangat tinggi sehingga mampu menutupi lingkaran hitam, bekas jerawat, dan berbagai ketidaksempurnaan kulit dengan sangat baik.\r\n\r\nMeskipun memiliki coverage tinggi, teksturnya tetap nyaman digunakan dan tidak mudah luntur. Produk ini menjadi pilihan favorit bagi mereka yang membutuhkan tampilan makeup tahan lama untuk aktivitas seharian maupun acara formal.\r\n\r\n2. NARS Radiant Creamy Concealer\r\n\r\nNARS menghadirkan concealer dengan tekstur creamy yang mudah dibaurkan dan memberikan hasil yang natural. Produk ini sangat cocok digunakan pada area bawah mata karena tidak mudah crack atau membuat garis halus terlihat lebih jelas.\r\n\r\nFormula yang dimiliki juga membantu memberikan efek kulit yang lebih sehat dan bercahaya sehingga cocok digunakan untuk tampilan makeup natural.\r\n\r\n3. Maybelline Instant Age Rewind Concealer\r\n\r\nProduk ini menjadi salah satu concealer drugstore paling populer di dunia. Aplikator sponge yang unik memudahkan penggunaan dan membuat proses aplikasi menjadi lebih cepat.\r\n\r\nCoverage yang diberikan cukup baik untuk penggunaan sehari-hari dan sangat efektif dalam menyamarkan area bawah mata yang terlihat lelah.\r\n\r\n4. Make Over Powerstay Total Cover Concealer\r\n\r\nBrand lokal Make Over menghadirkan concealer dengan performa yang sangat baik. Produk ini menawarkan coverage tinggi dengan daya tahan yang mampu bertahan dalam berbagai aktivitas.\r\n\r\nPilihan shade yang beragam membuat produk ini cocok digunakan oleh berbagai warna kulit masyarakat Indonesia.\r\n\r\n5. Somethinc The Multitask Water Matte Concealer\r\n\r\nSomethinc menghadirkan concealer modern dengan formula ringan yang nyaman digunakan sepanjang hari. Produk ini mampu memberikan coverage yang baik tanpa membuat kulit terasa berat.\r\n\r\nSelain itu, formula water matte yang digunakan membantu menjaga tampilan makeup tetap rapi dan tidak mudah berminyak.\r\n\r\nTips Memilih Concealer\r\n\r\nUntuk area bawah mata, pilih concealer yang satu tingkat lebih terang dari warna kulit agar wajah terlihat lebih segar. Untuk menutupi bekas jerawat atau noda, gunakan warna yang mendekati warna kulit asli agar hasilnya lebih natural.\r\n\r\nKesimpulan\r\n\r\nTarte Shape Tape menjadi pilihan terbaik untuk coverage tinggi, NARS Radiant Creamy Concealer unggul dalam hasil natural, Maybelline Instant Age Rewind cocok untuk penggunaan sehari-hari, Make Over menawarkan kualitas lokal premium, dan Somethinc menjadi pilihan modern yang nyaman digunakan sepanjang hari.', 494, '2026-06-09 20:19:34', '2026-06-09 20:19:34', '2026-06-12 00:54:55'),
(7, 7, 1, 'Top 5 Eyebrow for 2026', 'top-5-eyebrow-for-2026', 'articles/Z5t66XfGx3f63WbPp6yE3Rr5fLnaxaICJJ4svsn7.jpg', 'Top 5 Eyebrow Products For 2026\r\n\r\nAlis merupakan salah satu bagian wajah yang memiliki peran penting dalam membentuk karakter dan keseimbangan tampil...', 'Top 5 Eyebrow Products For 2026\r\n\r\nAlis merupakan salah satu bagian wajah yang memiliki peran penting dalam membentuk karakter dan keseimbangan tampilan wajah secara keseluruhan. Alis yang rapi dan sesuai bentuk wajah dapat membuat makeup terlihat lebih sempurna. Oleh karena itu, pemilihan produk alis yang tepat menjadi langkah penting dalam rutinitas makeup sehari-hari.\r\n\r\nSaat ini tersedia berbagai jenis produk alis mulai dari pensil alis, brow pomade, brow powder, hingga brow gel. Berikut lima produk alis yang diprediksi menjadi favorit sepanjang tahun 2026.\r\n\r\n1. Anastasia Beverly Hills Brow Wiz\r\n\r\nAnastasia Beverly Hills dikenal sebagai salah satu pelopor produk alis premium. Brow Wiz memiliki ujung pensil yang sangat tipis sehingga memudahkan pengguna untuk menggambar helai alis secara detail dan natural.\r\n\r\nProduk ini sangat cocok digunakan bagi mereka yang menginginkan hasil alis yang rapi dan profesional.\r\n\r\n2. Make Over Brow Styler Eyebrow Definer\r\n\r\nMake Over menawarkan produk alis dengan kualitas yang sangat baik dan harga yang lebih terjangkau dibandingkan brand internasional.\r\n\r\nTekstur yang dimiliki tidak terlalu keras maupun terlalu lunak sehingga mudah digunakan oleh pemula maupun pengguna berpengalaman.\r\n\r\n3. Viva Eyebrow Pencil\r\n\r\nViva merupakan salah satu produk legendaris yang masih banyak digunakan hingga saat ini. Meskipun harganya sangat terjangkau, produk ini tetap mampu menghasilkan alis yang natural dan rapi.\r\n\r\n4. Implora Eyebrow Pencil\r\n\r\nImplora menjadi salah satu brand lokal yang populer karena menawarkan produk berkualitas dengan harga ekonomis. Produk alisnya mudah diaplikasikan dan cocok digunakan untuk aktivitas sehari-hari.\r\n\r\n5. Wardah EyeXpert Eyebrow Pencil\r\n\r\nWardah menghadirkan pensil alis dengan warna yang natural dan tekstur yang nyaman digunakan. Produk ini menjadi pilihan banyak pengguna yang menginginkan tampilan alis sederhana namun tetap rapi.\r\n\r\nTips Memilih Produk Alis\r\n\r\nPilih warna alis yang sedikit lebih terang dari warna rambut untuk menghasilkan tampilan yang natural. Hindari penggunaan warna hitam pekat karena dapat membuat wajah terlihat terlalu tegas.\r\n\r\nKesimpulan\r\n\r\nAnastasia Beverly Hills Brow Wiz menjadi pilihan premium terbaik, Make Over menawarkan kualitas lokal yang sangat kompetitif, sedangkan Viva, Implora, dan Wardah menjadi pilihan ekonomis yang tetap mampu menghasilkan alis yang cantik dan natural.', 916, '2026-06-09 20:19:34', '2026-06-09 20:19:34', '2026-06-10 23:02:40'),
(8, 8, 1, 'Top 5 Mascara for 2026', 'top-5-mascara-for-2026', 'articles/V6RV0Pk3dxmG2ySf2MhiEclHqY96QwdZn0sqLQs0.jpg', 'Top 5 Mascara For 2026\r\n\r\nMascara merupakan salah satu produk makeup yang mampu memberikan perubahan besar pada tampilan mata. Dengan penggunaan masca...', 'Top 5 Mascara For 2026\r\n\r\nMascara merupakan salah satu produk makeup yang mampu memberikan perubahan besar pada tampilan mata. Dengan penggunaan mascara yang tepat, bulu mata dapat terlihat lebih panjang, lebih lentik, dan lebih bervolume sehingga mata tampak lebih hidup dan ekspresif.\r\n\r\nTahun 2026 menghadirkan berbagai inovasi mascara yang tidak hanya fokus pada hasil akhir, tetapi juga kenyamanan dan daya tahan produk. Berikut lima mascara terbaik yang layak masuk ke dalam koleksi makeup Anda.\r\n\r\n1. Maybelline Lash Sensational Sky High Mascara\r\n\r\nProduk ini menjadi salah satu mascara paling populer dalam beberapa tahun terakhir. Formula yang dimiliki mampu memberikan efek bulu mata yang panjang tanpa menggumpal.\r\n\r\nAplikator fleksibel yang digunakan membantu menjangkau setiap helai bulu mata dengan mudah.\r\n\r\n2. L\'Oréal Paris Lash Paradise Mascara\r\n\r\nMascara ini terkenal karena kemampuannya memberikan volume yang dramatis. Formula yang ringan membuat bulu mata tetap terasa nyaman meskipun digunakan sepanjang hari.\r\n\r\n3. Heroine Make Long & Curl Mascara\r\n\r\nBrand asal Jepang ini dikenal karena daya tahannya yang luar biasa. Produk ini tahan terhadap keringat, air, dan kelembapan sehingga sangat cocok digunakan di negara beriklim tropis seperti Indonesia.\r\n\r\n4. Make Over Lash Impulse Mascara\r\n\r\nMake Over menghadirkan mascara lokal dengan kualitas yang tidak kalah dari brand internasional. Produk ini mampu memberikan efek panjang dan volume yang seimbang.\r\n\r\n5. Wardah EyeXpert The Volume Expert Mascara\r\n\r\nWardah menawarkan mascara yang cocok untuk penggunaan sehari-hari dengan harga yang terjangkau. Formula yang digunakan mampu memberikan volume tanpa membuat bulu mata terasa berat.\r\n\r\nTips Memilih Mascara\r\n\r\nUntuk bulu mata pendek, pilih mascara dengan efek lengthening. Untuk bulu mata tipis, pilih mascara volumizing agar hasilnya terlihat lebih penuh dan dramatis.\r\n\r\nKesimpulan\r\n\r\nMaybelline Sky High unggul dalam memberikan efek panjang, L\'Oréal Lash Paradise menawarkan volume yang maksimal, Heroine Make menjadi pilihan terbaik untuk daya tahan, sedangkan Make Over dan Wardah menawarkan kualitas lokal yang sangat baik untuk penggunaan sehari-hari.', 250, '2026-06-09 20:19:34', '2026-06-09 20:19:34', '2026-06-10 23:03:01'),
(9, 9, 1, 'Top 5 Eyeshadow for 2026', 'top-5-eyeshadow-for-2026', 'articles/Bute9vT2peZvjdIQPXPVsImrLO0SaFBFeQZLE2te.jpg', 'Top 5 Eyeshadow Palettes For 2026\r\n\r\nEyeshadow merupakan produk makeup yang memberikan kesempatan bagi pengguna untuk berkreasi dengan berbagai tampil...', 'Top 5 Eyeshadow Palettes For 2026\r\n\r\nEyeshadow merupakan produk makeup yang memberikan kesempatan bagi pengguna untuk berkreasi dengan berbagai tampilan. Mulai dari makeup natural untuk aktivitas sehari-hari hingga glam makeup untuk acara formal, semuanya dapat diciptakan dengan pemilihan eyeshadow yang tepat.\r\n\r\nSaat ini banyak brand menghadirkan palette eyeshadow dengan kombinasi warna yang lengkap, tekstur yang mudah dibaurkan, dan pigmentasi yang semakin baik. Berikut lima eyeshadow palette yang diprediksi menjadi favorit pada tahun 2026.\r\n\r\n1. Huda Beauty Naughty Nude Palette\r\n\r\nPalette ini menawarkan kombinasi warna netral, shimmer, dan warna-warna glamor yang cocok untuk berbagai kebutuhan makeup.\r\n\r\nPigmentasinya yang tinggi membuat warna terlihat jelas hanya dalam satu kali aplikasi.\r\n\r\n2. Anastasia Beverly Hills Soft Glam Palette\r\n\r\nSoft Glam Palette menjadi salah satu palette paling populer karena pilihan warnanya yang mudah digunakan oleh pemula maupun profesional.\r\n\r\nWarna-warna netral yang tersedia memungkinkan pengguna menciptakan berbagai tampilan makeup yang elegan.\r\n\r\n3. Urban Decay Naked Palette\r\n\r\nUrban Decay Naked merupakan salah satu palette ikonik yang masih relevan hingga saat ini. Warna-warna yang tersedia cocok digunakan untuk makeup sehari-hari maupun acara khusus.\r\n\r\n4. Make Over Eye Shadow Palette\r\n\r\nBrand lokal Make Over menghadirkan palette dengan kualitas yang sangat baik dan harga yang lebih terjangkau. Pigmentasi yang dimiliki mampu bersaing dengan berbagai produk internasional.\r\n\r\n5. Luxcrime Ultra Cover Palette\r\n\r\nLuxcrime menawarkan kombinasi warna modern yang cocok mengikuti tren makeup masa kini. Teksturnya mudah dibaurkan dan nyaman digunakan oleh pemula.\r\n\r\nTips Memilih Eyeshadow\r\n\r\nUntuk penggunaan sehari-hari, pilih palette dengan warna netral seperti cokelat, beige, dan peach. Untuk acara malam atau acara formal, gunakan warna shimmer dan warna gelap untuk memberikan dimensi yang lebih dramatis pada mata.\r\n\r\nKesimpulan\r\n\r\nHuda Beauty Naughty Nude Palette menjadi pilihan premium dengan warna yang lengkap, Anastasia Beverly Hills Soft Glam cocok untuk berbagai kesempatan, Urban Decay Naked tetap menjadi produk ikonik, sementara Make Over dan Luxcrime membuktikan bahwa brand lokal mampu menghadirkan kualitas yang sangat kompetitif.', 326, '2026-06-09 20:19:34', '2026-06-09 20:19:34', '2026-06-10 23:03:28'),
(14, 13, 2, 'Top 5 Contour Cream For 2026', 'top-5-contour-cream-for-2026', 'articles/pRFRhixu9uAFw7tepctRauL4PikJfe8flfFgCGC7.jpg', 'Top 5 Contour Products For 2026\r\n\r\nContour menjadi salah satu teknik makeup yang banyak digunakan untuk memberikan dimensi dan definisi pada wajah. De...', 'Top 5 Contour Products For 2026\r\n\r\nContour menjadi salah satu teknik makeup yang banyak digunakan untuk memberikan dimensi dan definisi pada wajah. Dengan penggunaan contour yang tepat, wajah dapat terlihat lebih tegas, proporsional, dan memiliki struktur yang lebih menonjol. Seiring berkembangnya tren makeup natural, produk contour kini hadir dengan formula yang lebih mudah dibaurkan sehingga menghasilkan efek bayangan yang halus dan tidak berlebihan.\r\n\r\nTahun 2026 menghadirkan berbagai produk contour dengan tekstur cream, stick, maupun powder yang dirancang untuk berbagai kebutuhan dan jenis kulit. Berikut lima produk contour yang diprediksi menjadi favorit para beauty enthusiast sepanjang tahun 2026.\r\n\r\n1. Fenty Beauty Match Stix Matte Contour Skinstick\r\n\r\nFenty Beauty menghadirkan contour stick yang praktis dan mudah digunakan. Produk ini memiliki tekstur creamy yang dapat dibaurkan dengan mudah menggunakan brush maupun sponge. Hasil akhirnya matte dan natural sehingga cocok digunakan untuk makeup sehari-hari.\r\n\r\nPilihan warna yang beragam menjadi salah satu keunggulan utama produk ini. Pengguna dapat memilih warna contour yang sesuai dengan warna kulit sehingga hasilnya terlihat lebih alami dan tidak terlalu gelap.\r\n\r\n2. Rare Beauty Warm Wishes Effortless Bronzer Stick\r\n\r\nRare Beauty menawarkan contour stick yang ringan dan nyaman digunakan. Formula yang dimiliki mudah menyatu dengan foundation sehingga menghasilkan efek wajah yang lebih berdimensi tanpa meninggalkan garis yang kasar.\r\n\r\nProduk ini sangat cocok bagi pengguna yang menyukai tampilan natural dan effortless. Selain itu, kemasannya yang praktis membuatnya mudah dibawa untuk touch up selama beraktivitas.\r\n\r\n3. Makeup by Mario SoftSculpt Shaping Stick\r\n\r\nMakeup by Mario dikenal sebagai salah satu brand yang banyak digunakan oleh makeup artist profesional. SoftSculpt Shaping Stick memiliki tekstur yang lembut dan mudah dibaurkan sehingga menghasilkan contour yang terlihat halus.\r\n\r\nProduk ini juga dilengkapi dengan brush pada salah satu sisinya sehingga memudahkan proses aplikasi. Hasil akhirnya mampu memberikan efek wajah yang lebih terstruktur tanpa terlihat berlebihan.\r\n\r\n4. Huda Beauty Tantour Contour & Bronzer Cream\r\n\r\nProduk dari Huda Beauty ini menggabungkan fungsi contour dan bronzer dalam satu kemasan. Formula cream yang dimiliki memberikan pigmentasi yang baik serta daya tahan yang tinggi.\r\n\r\nContour ini cocok digunakan untuk acara formal atau aktivitas yang membutuhkan makeup tahan lama. Hasil akhirnya terlihat natural dan mampu memberikan dimensi yang jelas pada wajah.\r\n\r\n5. e.l.f. Halo Glow Contour Beauty Wand\r\n\r\ne.l.f. menghadirkan contour dengan harga yang lebih terjangkau namun tetap memiliki kualitas yang baik. Aplikator sponge yang digunakan memudahkan pengguna untuk mengaplikasikan produk secara langsung pada area wajah yang diinginkan.\r\n\r\nFormula yang ringan membuat produk ini nyaman digunakan oleh pemula maupun pengguna yang menginginkan tampilan makeup natural.\r\n\r\nTips Memilih Contour\r\n\r\nPemilihan warna contour sangat penting untuk menghasilkan tampilan yang natural. Sebaiknya pilih warna satu hingga dua tingkat lebih gelap dari warna kulit asli. Hindari penggunaan warna yang terlalu gelap karena dapat membuat wajah terlihat kurang natural.\r\n\r\nSelain itu, pilih tekstur contour sesuai jenis kulit. Contour cream atau stick lebih cocok untuk kulit normal hingga kering karena mudah menyatu dengan kulit. Sementara itu, contour powder lebih cocok digunakan oleh pemilik kulit berminyak karena membantu mengontrol produksi minyak berlebih.\r\n\r\nCara Menggunakan Contour\r\n\r\nContour biasanya diaplikasikan pada area bawah tulang pipi, sisi hidung, garis rahang, dan bagian tepi dahi. Setelah diaplikasikan, baurkan produk dengan baik menggunakan brush atau sponge agar tidak terlihat garis yang tegas.\r\n\r\nTeknik blending yang tepat akan menghasilkan efek bayangan yang halus sehingga wajah terlihat lebih proporsional dan berdimensi.\r\n\r\nKesimpulan\r\n\r\nFenty Beauty Match Stix Matte Contour Skinstick menjadi pilihan terbaik untuk hasil contour natural yang mudah digunakan. Rare Beauty Warm Wishes Effortless Bronzer Stick cocok bagi pecinta makeup ringan dan natural. Makeup by Mario SoftSculpt Shaping Stick menawarkan kualitas profesional dengan hasil yang halus. Huda Beauty Tantour Contour & Bronzer Cream unggul dalam daya tahan, sementara e.l.f. Halo Glow Contour Beauty Wand menjadi pilihan ekonomis yang tetap mampu memberikan hasil memuaskan.\r\n\r\nDengan memilih produk contour yang sesuai dan menerapkan teknik aplikasi yang tepat, pengguna dapat menciptakan tampilan wajah yang lebih tegas, proporsional, dan menarik untuk berbagai kesempatan.', 12, '2026-06-10 22:53:38', '2026-06-10 22:53:38', '2026-06-12 01:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Foundation', 'foundation', 'Perfect base for your makeup.', 'categories/vIPnQJprh000UsoWsZNucJ8sOXOuOYZkWvxO9fyH.png', '2026-06-09 20:19:34', '2026-06-12 00:32:44'),
(2, 'Cushion', 'cushion', 'Lightweight and portable base.', 'categories/dedrXOGu9SY4uACGgch21cYeP9yKNlizWmxzQHnX.png', '2026-06-09 20:19:34', '2026-06-12 00:53:12'),
(3, 'Lipstick', 'lipstick', 'Add color to your lips.', 'categories/aZSCVL9bZICfQQE9FIaZxYG1Ejp3PY8ulwKa4mum.png', '2026-06-09 20:19:34', '2026-06-12 00:53:23'),
(4, 'Lip Tint', 'lip-tint', 'Natural and fresh lip color.', 'categories/YeXh3SOAKGPp2e1yQJhe2HH7GtmQakjWm0z0HSyz.png', '2026-06-09 20:19:34', '2026-06-12 00:53:34'),
(5, 'Blush', 'blush', 'Add some color to your cheeks.', 'categories/vBoByvaARXCJE7NzVgUAN2N9FgjnYuAbJ5gy7j6n.png', '2026-06-09 20:19:34', '2026-06-12 00:53:49'),
(6, 'Concealer', 'concealer', 'Hide those imperfections.', 'categories/EqqE1svEsGad3wedgumgSZN6hJqWMlmoqqmIKuTn.png', '2026-06-09 20:19:34', '2026-06-12 00:54:00'),
(7, 'Eyebrow', 'eyebrow', 'Shape and define your brows.', 'categories/p6xfuaKspBZJvlbYgfOFh8w81jx2UqsKYVfk1vwB.png', '2026-06-09 20:19:34', '2026-06-12 00:54:14'),
(8, 'Mascara', 'mascara', 'Longer and fuller lashes.', 'categories/fKAhaMW52Ybc6iP2idhSssdYtEr8wejtUuPeuDfV.png', '2026-06-09 20:19:34', '2026-06-12 00:54:26'),
(9, 'Eyeshadow', 'eyeshadow', 'Enhance your eye makeup.', 'categories/0J9GlHkhHeqcBDyDYNWgL8Eu34gnaPhPupM8rqZH.png', '2026-06-09 20:19:34', '2026-06-12 00:54:39'),
(13, 'Contour', 'contour', 'Sculpt and define your face.', 'categories/LZ1TnVMXDykRT5FAPwA6ATQLGo2OUxmOhjXmG5eB.png', '2026-06-10 21:12:51', '2026-06-12 00:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2026_06_10_040203_create_categories_table', 1),
(6, '2026_06_10_040204_create_articles_table', 1),
(7, '2026_06_12_081549_add_image_to_categories_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Beautique', 'admin@beautique.com', NULL, '$2y$12$y3vOQ.c3U6D0oXsHZh5PIeLS3zwZnJylDoecLm66Syr/P4TuB.bui', 'admin', NULL, '2026-06-09 20:19:34', '2026-06-09 20:19:34'),
(2, 'Author Fauzia', 'author@beautique.com', NULL, '$2y$12$hBy98WBLxCPI0QOC0EVs9.J5LvBEWlWDtyZfd2WTQA/SnzTlB8BaS', 'author', 'WDUgaHq9NEAa7sNENLr1grdDALJdAicQgWO4FLSIxfbmcQIVbGLKejSXMeAP', '2026-06-09 20:19:34', '2026-06-12 00:06:58'),
(4, 'Admin Inanta', 'admin2@beautique.com', NULL, '$2y$12$sgrJ5iF8uU1QKYZvbjz1vu5to.8awVd2tay7nFB/vOx8iBa8UFMIm', 'admin', NULL, '2026-06-12 01:26:15', '2026-06-12 01:26:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`),
  ADD KEY `articles_category_id_foreign` (`category_id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
