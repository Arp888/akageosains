-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Mar 2018 pada 10.36
-- Versi Server: 5.6.17-log
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `akageosains_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `company_info`
--

CREATE TABLE IF NOT EXISTS `company_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo_dark` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo_light` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `overview` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `mission` text COLLATE utf8_unicode_ci NOT NULL,
  `goal` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `company_info`
--

INSERT INTO `company_info` (`id`, `logo_dark`, `logo_light`, `overview`, `description`, `mission`, `goal`, `address`, `phone`, `email`, `facebook_link`, `twitter_link`, `instagram_link`, `youtube_link`) VALUES
(1, '19', '20', 'AKA Geosains Consulting is an Indonesian-based geological and mining consultant. We have expertise and are experienced across all commodities and mining methods. We provide advisory consulting and professional development solutions to the mining industry.', 'AKA Geosains Consulting is an Indonesian-based geological and mining consultant. We have expertise and are experienced across all commodities and mining methods. We provide advisory consulting and professional development solutions to the mining industry. We are proud of our capabilities in providing the best solution for integrated mining services. Our capabilities are including Exploration Services, Geographical Information System, Geological Data Management, Resource Modeling & Evaluation, Quality Assurance Quality Control Services, Geophysical Surveys, Due Diligence, and International Standard Reporting (JORC, NI 43-101, and KCMI).', 'Our consultants work with you to optimize your human, organization and technology systems.', 'Our goal is to provide innovative business and scientific solutions that will lead to the discovery of the next generation of economic mineral deposits at lower cost and within shorter time.', 'Ruko Golden Madrid 2 Blok H No 23 BSD City Serpong<br>\r\nJl. Letnan Sutopo No. 2, Lengkong Gudang Timur,<br>\r\nKota Tangerang Selatan, Banten 15311', '+6221-5056-0068', 'info@akgc.co.id', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `expert`
--

CREATE TABLE IF NOT EXISTS `expert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(3) NOT NULL,
  `publish` int(3) NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `expert`
--

INSERT INTO `expert` (`id`, `name`, `position`, `description`, `picture`, `facebook_link`, `twitter_link`, `instagram_link`, `linkedin_link`, `order`, `publish`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(3, 'Ade Kadarusman, PhD, MAuslMM (Geology)', 'PRINCIPAL CONSULTANT GEOLOGIST/PRESIDENT DIRECTOR', '<p>He graduated from Dept. of Geological Engineering of ITB in 1992, and has a MSc and PhD in Earth Sciences from Tokyo Institute of Technology, Japan with 24 years of experiences as geologist. He started from academic career turn to industrial experiences with mineral exploration expertise. He published more than 40 scientific papers nationally and internationally. Specialization in mineral exploration and geological evaluation, resource estimation, mineral resources reporting under NI 43-101, JORC 2012 and KCMI 2011 codes, project generation and feasibility studies. Experienced in exploration of lateritic Nickel, Iron ores, base metals, epithermal gold, bauxite, diamond and industrial minerals, and also short involvement oil &amp; gas and geothermal exploration. He has a strong knowledge of regional geology/tectonic, geochemistry, assay QAQC and mineralogy including sampling methods and various analytical instruments. AFFILIATIONS: MAuslMM #303680 &amp; CPI #088.</p>', '5', '', '', '', '', 1, 10, 1521732428, 1, 1521733227, 1),
(4, 'Nico F. Sinaga, B.Eng MAuslMM (Geology)', 'PRINCIPAL CONSULTANT GEOLOGIST', '<p>Nico is an experienced geologist who has been working in the nickel exploration over 10 years. He used to work for nickel and other minerals exploration from green field to mining for around 50 project in Sulawesi and Halmahera in more than 5 years. AFFILIATIONS: MAusIMM #314481 &amp; CPI#052</p>', '9', '', '', '', '', 2, 10, 1521732825, 1, 1521733237, 1),
(5, 'Prastowo, B.Eng MAuslMM (Mining)', 'RESOURCES ESTIMATOR/MINING CONSULTANT', '<p>Prastowo graduated in mining engineering of the University of UPN, Yogyakarta. He has more than 6 year experiences in mine planning and involved in resources estimation of nickel laterite and limestone. He has capability in statistical and geostatistical analysis of the drilling data using Surpac software including database validation, geological modeling, grade estimation and resources classification. Pit optimization and mine scheduling for long term and short term planning are also his expertise. He can also perform geotechnical calculations of slope stability analysis to identify potential hazards zones and slope stability of excavation pit. AFFILIATIONS: MAusIMM #320552</p>', '11', '', '', '', '', 3, 10, 1521733085, 1, 1521733217, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `imagemanager`
--

CREATE TABLE IF NOT EXISTS `imagemanager` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fileName` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `fileHash` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `createdBy` int(10) unsigned DEFAULT NULL,
  `modifiedBy` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data untuk tabel `imagemanager`
--

INSERT INTO `imagemanager` (`id`, `fileName`, `fileHash`, `created`, `modified`, `createdBy`, `modifiedBy`) VALUES
(1, '6.jpg', 'suv3pjJ9kkE9hfQCD_VKEhbF66pvjY8S', '2018-03-21 14:48:29', '2018-03-21 14:48:29', NULL, NULL),
(2, '5.jpg', 'ZZJKWc0K_dqn66aMJ6AacbjbVkQtHPmH', '2018-03-21 15:42:06', '2018-03-21 15:42:06', NULL, NULL),
(3, '7.jpg', 'DfAOOC7vfKMnas5MaijDS6wVNwBaaUdk', '2018-03-22 21:42:05', '2018-03-22 21:42:05', NULL, NULL),
(4, 'Ade Kadarusman.jpg', 'cu_TyH0_oY8kHnaoEEe1G5_V5o_odYf8', '2018-03-22 22:26:57', '2018-03-22 22:26:57', NULL, NULL),
(5, 'Ade Kadarusman_crop_513x513.jpg', 'uEv-xIVt_dwxNd-ntVV58sAt2Wex1ogw', '2018-03-22 22:28:58', '2018-03-22 22:28:58', NULL, NULL),
(6, 'Nico F. Sinaga.jpg', 'Z01Iwjxkhalz5IKAKRgyXQmVMZ2c08l8', '2018-03-22 22:33:07', '2018-03-22 22:33:07', NULL, NULL),
(9, 'Nico F. Sinaga_crop_506x506.jpg', 'qgVy2lXljIvBMoEhN6ncBY9vJyAbiLjg', '2018-03-22 22:35:00', '2018-03-22 22:35:00', NULL, NULL),
(10, 'Prastowo.jpg', 'lNgAVSOG_-oB7YMio6U8kSkJWQxVfUHq', '2018-03-22 22:37:49', '2018-03-22 22:37:49', NULL, NULL),
(11, 'Prastowo_crop_511x511.jpg', 'OitLuO0uVKK5BnwpJxwiPAo5ovJ7nf_8', '2018-03-22 22:39:08', '2018-03-22 22:39:08', NULL, NULL),
(14, 'Mining2.jpg', 'MmaoQD65R9bud2WgPpQR-tgY9F0VsncQ', '2018-03-23 01:36:21', '2018-03-23 01:36:21', NULL, NULL),
(15, 'IMG-20180107-WA0005.jpg', 'XCXHIKmUNq7mVkWOK0o6XXnUUED-Qcen', '2018-03-23 01:58:31', '2018-03-23 01:58:31', NULL, NULL),
(19, 'logo-akgc-dark.png', 'RnvhKkCOx5oEdj8ftHUyIICzpMrwm8FL', '2018-03-24 02:13:06', '2018-03-24 02:13:06', NULL, NULL),
(20, 'logo-akgc-light.png', '20Ham927jlVEzPtSj6QEZKvQB9dwfm6U', '2018-03-24 02:13:17', '2018-03-24 02:13:17', NULL, NULL),
(21, 'Banner1.jpg', 'z5z9be-embrwGslJ1RnAV0VE1dMJ3sIf', '2018-03-25 11:24:42', '2018-03-25 11:24:42', NULL, NULL),
(22, 'Banner2.jpg', 'nB9ser2ZQUnfcCwi2pUJzZ8o_D0rjx4_', '2018-03-25 11:26:09', '2018-03-25 11:26:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `study_type` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `commodity` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `location_coordinates` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(3) NOT NULL,
  `publish` int(3) NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id`, `client_name`, `study_type`, `region`, `commodity`, `location_coordinates`, `order`, `publish`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'PT Putra Mekongga Sejahtera', 'KCMI - Resources Statement', 'Pomalaa, Kolaka, Southeast Sulawesi', 'Nickel', ' -4.253273, 121.652116', 1, 10, 1521798558, 1, 1521798558, 1),
(2, 'PT Position', 'KCMI - Resources Statement', 'Maba, East Halmahera, North Maluku', 'Nickel', '0.690677, 128.277077', 2, 10, 1521798754, 1, 1521798754, 1),
(3, 'PT Cita Mineral Investindo Tbk (Harita Group)', 'JORC - Resources & Reserves Statement', 'Ketapang, West Kalimantan', 'Bauxite', '-1.857983, 109.972030', 3, 10, 1521810572, 1, 1521810582, 1),
(4, 'PT BNIS (PT STAR & PT BIP)', 'Mineral Resources, In Pit Resources & Mineral Valuation', 'Banyumas, Central Java', 'Limestone & Claystone', '-7.446809, 109.154140', 5, 10, 1521810703, 1, 1521810703, 1),
(5, 'PT BNIS (PT STAR & PT BIP)', 'Geological Mapping', 'Boyolali, Central Java', 'Limestone', '-7.517623, 110.591963', 6, 10, 1521810755, 1, 1521810755, 1),
(6, 'PT Ifishdeco', 'KCMI - Resources & Reserves Statement', 'Tinanggea, South Konawe, South East Sulawesi', 'Nickel', '-4.444488, 122.197343', 4, 10, 1521810874, 1, 1521810874, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `overview` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag` text COLLATE utf8_unicode_ci NOT NULL,
  `order` int(3) NOT NULL,
  `publish` int(3) NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`id`, `image`, `name`, `overview`, `description`, `slug`, `tag`, `order`, `publish`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, '14', 'Exploration Service', '<p>AKGC specializes in managing exploration project, offering a complete end-to-end exploration service specifically tailored to the client&rsquo;s needs and situation.</p>', '<p>AKGC specializes in managing exploration project, offering a complete end-to-end exploration service specifically tailored to the client&rsquo;s needs and situation. Our geological solutions range from grass-roots exploration to advanced resource definition. This includes data compilations &amp; reviews, target generation, programmed design and planning, budgeting, drill supervision, project management and implementation.</p>\r\n<h5>Mineral Tenement Assessment</h5>\r\n<ul>\r\n<li>Geological analysis based previous works</li>\r\n<li>Slope and GIS analysis</li>\r\n<li>Outlining based on lithology and target area</li>\r\n<li>Review Forestry and Tenement status</li>\r\n</ul>\r\n<h5>Geological Mapping</h5>\r\n<p>We see good geology as one of the most critical ingredients in the success of any exploration and mining project.</p>\r\n<p>Effective mineral exploration requires an in-depth understanding of the lithological and structural controls of mineralisation. These insights must be gained through geological mapping at the early stages of the exploration program.</p>\r\n<p>A good geological map not only provides focus to an exploration program, it also clearly communicates the economic potential of a project to stakeholders.</p>\r\n<h5 class="h5 g-mb-20">Drilling &amp; Supervision Services</h5>\r\n<p>With expertise and experience in mineral exploration Nickel laterite, iron ores, gold, coal and other commodities, AKGC has capability in operating the drilling machines. AKGC operating rigs of Jacro 175 &amp; Jacro 200 series and also supported by the existence of Dozer for drill pad preparation and rig mobilization. We have professional mechanics to check rig engine regularly to ensure the timeframe during drilling production.</p>\r\n<p>AKGC provides the small and easy moving rigs with the Max-Drill Type to support fast track production and low cost. AKGC guarantees quality of samples and maintains core recovery properly in the mineralization zone, and deliver the competitive rates with the good quality of work. We offer various drilling purpose:</p>\r\n<ul>\r\n<li>Regional or Scout Drilling</li>\r\n<li>Drilling spacing: 400x400, 200x200, 100x100, 50x50, 25x25 meter</li>\r\n<li>Twin Hole Drilling for Confirmation Drilling Data</li>\r\n<li>Geostatistic Drilling</li>\r\n</ul>\r\n<p>In addition to drilling contractor services, AKGC provide service of drilling supervision as follow:</p>\r\n<ul>\r\n<li>Managing drilling strategic</li>\r\n<li>Set up comprehensive drilling plan</li>\r\n<li>Daily drilling activity supervision</li>\r\n<li>Set up sample preparation and assaying at drilling site</li>\r\n<li>Manage drilling data base</li>\r\n</ul>\r\n<h5>Data Validation and Geo Evaluation</h5>\r\n<p>Our capabilities not only verify and build a valid database from raw data (assay, collar, survey, geology &amp; mineralogy, density, moisture content, geotechnical, core recovery, etc.) and making it suitable and appropriate for resource estimation, and also we can also provide geological evaluation and ore type classifications.</p>\r\n<p>Our services including:</p>\r\n<ul>\r\n<li>Drilling Data Validation</li>\r\n<li>Technical Report of Exploration, Drilling and Data Validation</li>\r\n</ul>\r\n<h5>Resource and Reserve Estimations</h5>\r\n<p>AKGC has prominent resources modelling and estimation expertise in nickel laterite deposit, however we has capability also for coal and other mineral commodities such as gold, Iron ores, manganese, limestone, tin etc.</p>\r\n<p>Our strength are gotten from the combination of solid exploration and mining based practical experiences, and strong technical qualifications in geostatistic, resource estimation and mining reserve estimation. Our services including:</p>\r\n<ul>\r\n<li>An assessment of the quantity and quality of the data available including database management and verification</li>\r\n<li>The creation of 2D and/or 3D geological and mineralisation models for the deposit</li>\r\n<li>Statistical and geostatistical analyses of the data and the determination of the most appropriate grade and density interpolation methods</li>\r\n<li>Classification and reporting according to accepted and internationally recognised guidelines</li>\r\n</ul>', 'exploration-service', 'AKGC, AKA Geosains, Mining Consulting', 1, 10, 1521743835, 1, 1521961484, 1),
(2, '15', 'Training', '<p>The expertise of AKGC not only provide services to the clients and partners, but also giving knowledge and sharing experiences through training and supervision. Training can instill new vocational skills and improve the capability, productivity and performance of an individual or team in key competencies needed for exploration.</p>', '<p>The expertise of AKGC not only provide services to the clients and partners, but also giving knowledge and sharing experiences through training and supervision. Training can instill new vocational skills and improve the capability, productivity and performance of an individual or team in key competencies needed for exploration.</p>', 'training', 'AKGC, AKA Geosains, Mining Consulting', 2, 10, 1521745132, 1, 1521960700, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(3) NOT NULL,
  `publish` int(3) NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id`, `image`, `title`, `subtitle`, `order`, `publish`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, '21', 'We are Geological<br>and Mining Consultant', 'We provide advisory consulting and professional development solutions to the mining industry', 1, 10, 1521618622, 1, 1521952218, 1),
(2, '22', 'Provide<br>Reliable Solution', 'We have expertise and are experienced across all commodities and mining methods', 2, 10, 1521952054, 1, 1521952144, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(3) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `fullname`, `avatar`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'AKGC Admin', 'idM0MumohgjB3d5VAoWxCT7zU5g0oAyC.jpg', 'UqhuKpITX6bgShyzsD3dTsZQRB-HGO5i', '$2y$13$wr0Cg34IhepYdtn9M/uBPOpGBhCVz7wJOqGJpt5HXXgochcq35.dC', NULL, 'arp888@gmail.com', 20, 10, 1521606921, 1521606921);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
