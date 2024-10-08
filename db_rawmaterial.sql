-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 08:24 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rawmaterial`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gambar`
--

CREATE TABLE `tbl_gambar` (
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gambar`
--

INSERT INTO `tbl_gambar` (`img`) VALUES
('aisoft.png'),
('truck.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master`
--

CREATE TABLE `tbl_master` (
  `rm_code` varchar(25) NOT NULL,
  `type` varchar(255) NOT NULL,
  `weight_rm` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_master`
--

INSERT INTO `tbl_master` (`rm_code`, `type`, `weight_rm`) VALUES
('RM0901', 'SUM24L_DIA8.08mm(+0.02/-0)x0.5M DK', 0.2017),
('RM1001', '1215(HS)DIA6.00mm (+0/-0.02) x2.5M OSD', 0.5563),
('RM1002', '1215(HS)DIA8.05mm(+0/-0.03)x2.8M OSD', 1.1216),
('RM1003', '1215(HS)DIA8.05mm(+0/-0.03)x2.96M OSD', 1.1857),
('RM1004', '1215(HS)DIA10.06mm(+0/-0.02)x2.66M OSD', 1.664),
('RM1005', '1215(HS)DIA13.08mm(+0/-0.03)x2.65M OSD', 2.8024),
('RM1006', '1215(HS)DIA13.08mm(+0/-0.03)x2.75M OSD', 2.9082),
('RM1007', '1215(HS)DIA13.08mm(+0/-0.03)x2.87M OSD', 3.0351),
('RM1008', '1215(HS)DIA14.03mm(+0/-0.03)x2.62M OSD', 3.1861),
('RM1009', '1215(HS)DIA14.03mm(+0/-0.03)x2.79M OSD', 3.3946),
('RM1010', '1215(HS)DIA20.04mm(+0.02/-0.02)x2.95M OSD', 7.3229),
('RM1011', '1215(HS)DIA11.05mm(+0/-0.03)x2.7M OSD', 2.0378),
('RM1012', '1215(HS)DIA12.60Gmm(+0.028/+0.018)x2.5M OSD', 2.4533),
('RM1013', '1215(HS)DIA9.08(+0/-0.03)X2.65M OSD', 1.3505),
('RM1014', '1215(HS)DIA8.00mm(+0/-0.03)x2.8M OSD', 1.1077),
('RM1015', '1215(HS)DIA10.10mm(+0.01/-0.01)x2.2M OSDH', 1.3872),
('RM1016', '1215(HS)DIA10.10mm(+0.01/-0.01)x2.8M OSDH', 1.7655),
('RM1017', '1215(HS)DIA12.60mm(+0.028/+0.018)x2.5~2.87M OSD', 2.4533),
('RM1101', '1215(MS)DIA2.00mm (-0.01 / -0.03)x2M CLI', 0.0495),
('RM1102', '1215(MS)DIA 2.50mm(+0/-0.03) x2M CLI', 0.0772),
('RM1103', '1215(MS)DIA2.99mm (+0/-0.02)x2.5M CLI', 0.1382),
('RM1104', '1215(MS)DIA3.00MMx1250 NST', 0.0695),
('RM1105', '1215(MS)DIA3.05mm (+0/-0.02) x2.5M CLI', 0.1438),
('RM1106', '1215(MS)DIA3.50mm (+0/-0.02)x2.5M CLI', 0.1893),
('RM1107', '1215(MS)DIA3.99mm (+0/-0.02) x2.5M CLI', 0.2461),
('RM1108', '1215(MS)DIA4.00mm(+0/-0.015) x2.5M CLI', 0.2473),
('RM1109', '1215 (MS)DIA4.00MM(+0/-0.03) x 2.5M HGW', 0.2471),
('RM1110', '1215 (MS) DIA4.10mm (+0/-0.03)x2.5M CLI', 0.2598),
('RM1111', '1215(MS)DIA4.985mm (+0/-0.02)x2.5M CLI', 0.3841),
('RM1112', '1215(MS)DIA5.00mm(+0/-0.03) x 2.5M CLI', 0.3864),
('RM1113', '1215 (MS)DIA5.00mm(+0/-0.03)  x 2.5M HGW', 0.3861),
('RM1114', '1215(MS)DIA6.00mm (+0/-0.02) x2.5M CLI', 0.556),
('RM1115', '1215(MS)DIA6.05mm(+0/-0.03) x 2.5M CLI', 0.5657),
('RM1116', '1215(MS)DIA6.05mm(+0/-0.03)x2.8M CLI', 0.6335),
('RM1117', '1215(MS)DIA7.05mm(+0/-0.03)x2.5M CLI', 0.7681),
('RM1118', '1215(MS)DIA8.00mm(+0/-0.03)x2.5M CLI', 0.989),
('RM1119', '1215(MS)DIA8.05mm(+0/-0.03) x 2.5M CLI', 1.0014),
('RM1120', '1215(MS)DIA9.05mm(+0/-0.03) x 2.7M CLI', 1.3669),
('RM1121', '1215(MS)DIA10.00mm(+0/-0.03) x 2.67M CLI', 1.6495),
('RM1122', '1215(MS)DIA10.06mm(+0/-0.02)x2.66M CLI', 1.664),
('RM1123', '1215(MS)DIA11.00mm(+0/-0.03)x2.67M CLI', 1.9959),
('RM1124', '1215(MS)DIA18.05mm(+0/-0.04)x3.0M CLI', 6.0415),
('RM1125', '1215(MS) DIA11.06x2.5M NST', 1.8893),
('RM1126', '1215(MS)DIA5.05mm (+0/-0.03)x 2.5M CLI', 0.3941),
('RM1127', '1215 (MS)DIA20.04mm(+0/-0.03)x1.5M CLI', 3.7216),
('RM1128', '1215 (MS)DIA3.93mm(+0/-0.02)x2.5M CLI', 0.2387),
('RM1129', '1215 (MS)DIA4.94mm(+0/-0.02)x2.5M CLI', 0.3772),
('RM1130', '1215 (MS)DIA5.50mm(+0/-0.03)x2.5M CLI', 0.4675),
('RM1131', '1215 (MS)DIA9.08mm(+0/-0.03)x2.65M CLI', 1.3505),
('RM1132', '1215 (MS)DIA11.00mm(+0/-0.03)x2.7M CLI', 2.0194),
('RM1133', '1215 (MS)DIA12.00mm(+0/-0.03)x2.7M CLI', 2.4033),
('RM1134', '1215 (MS)DIA16.96mm(+0/-0.03)x2.86M CLI', 5.0849),
('RM1135', '1215(MS)DIA4.985mm (+0/-0.02)x2.5M CM', 0.3841),
('RM1136', '1215(MS)DIA6.00mm (+0/-0.02) x2.5M CM', 0.5563),
('RM1137', '1215(MS)DIA5.98mm (+0/-0.02) x2.5M CM', 0.5526),
('RM1138', '1215(MS)DIA6.00mm(+0/-0.02) x2.66M CM', 0.5916),
('RM1139', '1215(MS)DIA6.00mm(+0/-0.02) x2.75M CLI', 0.6116),
('RM1140', '1215(MS)DIA8.00mm(+0/-0.03)x2.8M CLI', 1.1216),
('RM1141', '1215(MS)DIA8.05mm(+0/-0.03) x 2.96M CLI', 1.1857),
('RM1142', '1215(MS)DIA14.03mm(+0/-0.03)x2.79M CLI', 3.3946),
('RM1143', '1215(MS)DIA10.25mm(+0/-0.02)X2.63M CLI', 1.708),
('RM1144', '1215(MS)DIA10.06mm(+0/-0.02)x2.66M CM', 1.664),
('RM1145', '1215(MS)DIA10.06mm(+0/-0.02)x2.66M DWM', 1.664),
('RM1146', '1215(MS) DIA8.0mm(+0/-0.03)x2.5M CM', 0.989),
('RM1147', '1215(MS) DIA8.05mm(+0/-0.03)x2.8M CM', 1.1216),
('RM1148', '1215(MS) DIA8.05mm(+0/-0.03)x2.96M CM', 1.1857),
('RM1149', '1215(MS) DIA9.05mm(+0/-0.03)x2.7M CM', 1.3669),
('RM1201', 'AISI 1215 DIA12.6G (+0.013/+0.023) X 2.5M CLI', 2.4533),
('RM1301', 'A2017BD T4_DIA7.00 X 2.0M SSJ', 0.2053),
('RM1302', 'A2017BD T4_DIA8.00mm(+0/-0.04)x2.0M SSJ', 0.2682),
('RM1303', 'A2017BD T4_DIA9.0mm(+0/-0.04)x2.0M SSJ', 0.3394),
('RM1304', 'A2017BD T4_DIA14.00 x 2.0M SSJ', 0.831),
('RM1305', 'A2017BD T4_DIA16.00mm(+0/-0.04)x2.0M SSJ', 1.0727),
('RM1306', 'A2017BD T4_DIA17.00mm(+0/-0.05)x2.5M SSJ', 1.5316),
('RM1307', 'A2017BD T4_DIA21.00 x 2.0M SSJ', 1.8697),
('RM1308', 'A2017-T4_DIA7.00mm(+0/-0.05)x2.5M SMC', 0.2597),
('RM1309', 'A2017-T4_DIA16.00mm(+0/-0.05)x2.5M SSJ', 1.3567),
('RM1310', '2017BD-T4_DIA8.00mm (+0/-0.05) x 2.5M SMC', 0.3392),
('RM1311', 'A2017BD T4_DIA17.00mm(+0/-0.05)x2.0M SSJ', 1.2253),
('RM1312', 'A2017BD-T4_DIA7.00mm(+0/-0.05)x2.0M SMC', 0.2078),
('RM1313', 'A2017BD-T4_DIA17.00mm(+0/-0.07)x2.0M SMC', 1.2253),
('RM1401', 'A2011-T3 DIA7.00mm(+0/-0.04)x2.5M SMC', 0.2597),
('RM1402', 'A2011-T3 DIA11.00(+0/-0.03)X2.5M SSJ', 0.6338),
('RM1403', 'A2011-T3 DIA16.0mm(+0/-0.05)X2.5M SSJ', 1.3409),
('RM1501', 'A5052-BD_DIA7.00mm(+0/-0.04)x2.0M SSJ', 0.2078),
('RM1601', 'A5056BD_DIA10.0mm(+0.01/-0.04)x2.0M SSJ', 0.424),
('RM1602', 'A5056BD_DIA13.0mm(+0.01/-0.04)x2.0M SSJ', 0.7165),
('RM1603', 'A5056BD_DIA16.0mm(+0/-0.06)x2.0M SSJ', 1.0854),
('RM1701', 'AL KS-21 DIA8.0mm(+0/-0.04) x2.5M SMC', 0.3392),
('RM1702', 'AL KS-21 DIA9.00mm(+0/-0.04)x2.5M SMC', 0.4293),
('RM1703', 'AL KS-21 DIA16.0mm(+0/-0.05) x2.5M SMC', 1.3409),
('RM1801', 'C3602 DIA3.00mm(+0/-0.03)X2.0M SMC', 0.1208),
('RM1802', 'C3602 DIA4.0mm(+0/-0.03)x 2.5M OMSD', 0.2687),
('RM1803', 'C3602 DIA5.0mm (+0/-0.03)x 2.5M SMC', 0.4197),
('RM1804', 'C3602 DIA5.0mm(+0/-0.03) X 2.5M OMSD', 0.4195),
('RM1805', 'C3602 BD RO DIA5.5mm (+0/-0.03) X 2.5M IBI', 0.5079),
('RM1806', 'C3602 DIA6.00mm(+0/-0.03)x2.5M SMC', 0.6044),
('RM1807', 'C3602 DIA6.00mm X 2.5M IBI', 0.6041),
('RM1809', 'C3602 DIA7.00mm(+0/-0.03)X 2.5M SMC', 0.8227),
('RM1811', 'C3602 DIA8.00mm(+0/-0.03)x2.5M SMC', 1.0745),
('RM1812', 'C3602 DIA9.00mm(+0/-0.03)x2.5M SMC', 1.3599),
('RM1813', 'C3602 DIA10.0mm(+0/-0.03)x2.5M SMC', 1.6779),
('RM1814', 'C3602BD DIA5.5mm(+0/-0.03)x2.5M HAN', 0.5079),
('RM1815', 'C3602 BD RO DIA 4.0mm(+0/-0.03) x2.5M IBI', 0.2687),
('RM1816', 'C3602 BD RO DIA 5.00mm(+0/-0.03) x2.5M IBI', 0.4197),
('RM1901', 'C3604 DIA4.00mm(-0.01/-0.03)x2.5M SMC', 0.2661),
('RM1902', 'C3604 DIA4.5mm(+0/-0.03)x2.5M SMC', 0.3398),
('RM1903', 'C3604 DIA5.0mm X 2.5M SSJ', 0.4195),
('RM1904', 'C3604 DIA8.00mm(+0/-0.03)x2.12M SMC', 0.9107),
('RM1905', 'C3604 DIA8.5mm (+0.02/-0.04) X 2.5M  IBI', 1.2016),
('RM1906', 'C3604BD DIA9.00mm X 2.5M HGW', 1.3591),
('RM1907', 'C3604 DIA13.0mm X 2.5M IBI', 2.8357),
('RM1908', 'C3604 DIA13.0mm X 2.5M HGW', 2.8357),
('RM1909', 'C3604 DIA14.0mm X 2.5M IBI', 3.2888),
('RM2001', 'C6782BG DIA10.0mm(-0.036/-0.042) X 2.5M FJS', 1.6779),
('RM2002', 'C6782B DFIA10.05mm (+0/-0.02) X 2.5M FJS', 1.6957),
('RM2003', 'C6782BDF DIA10.05mm (+0/-0.02) X 2.97M SMC', 2.0133),
('RM2101', 'C6801BD-F DIA 8.5mm(-0.01/-0.03) x2.5M SMC', 1.213),
('RM2201', 'C6802 DIA10.00mm x2.5M SMC', 1.6779),
('RM2301', 'DRAIN_DIA5.00mm(+0/-0.03)x2.5M SC', 0.3864),
('RM2302', 'DRAIN_DIA8.00mm(+0/-0.036)x2.7M SC', 1.0681),
('RM2303', 'DRAIN_DIA5.0mm(+0/-0.036)x2.5M SC', 0.3864),
('RM2501', 'K-M62F DIA7.5mm X 2.5M SMC', 0.8688),
('RM2601', 'KS-1_DIA8.08mm (+0.02/-0)x2.66M DK', 1.0735),
('RM2602', 'KS-1 SQ_DIA7.00mm(+0/-0.04)x2.88MDK', 1.1107),
('RM2603', 'KS-1 DIA20.13mm(+0.01/-0.01)x2.65M DK ', 6.6375),
('RM2701', 'S35C DIA12.1mm X 2.0M AIN', 1.809),
('RM2801', 'S45C DIA 4.15mm (+0/-0.03) X 2.5M CLI', 0.2662),
('RM2802', 'S45C DIA4.85mm X 2.5M OKY', 0.3635),
('RM2804', 'S45C DIA 7.05MM(+0/-0.03)X 2.5M OKY', 0.7681),
('RM2805', 'S45C DIA8.06mm(+0/-0.036)x2.5M OKY', 1.0039),
('RM2806', 'S45C DIA8.06mm(+0/-0.03)x2.5M OKY', 1.0034),
('RM2807', 'S45C DIA8.06mm (+0/-0.03)x 2.5m CLI', 1.0039),
('RM2808', 'S45C DIA8.10mm(+0/-0.03)x3.0M CLI', 1.2167),
('RM2809', 'S45C_DIA12.00mm(+0/-0.043)X2.0M SSJ', 1.7802),
('RM2810', 'S45C DIA 12.0mm(+0/-0.03) X 2.5M SSJ', 2.2241),
('RM2811', 'S45C DIA12.0mm( +0/-0.036)x2.5M OKY', 2.2241),
('RM2812', 'S45C DIA 13.05(+0/-0.03) X 3.5M SMC', 3.6824),
('RM2813', 'S45C DIA16.0 X 3M SKM', 4.7447),
('RM2814', 'S45C DIA18.1mmX11.9mm X 3M SKI', 3.449),
('RM2901', 'S55CV DIA18.5mm(+0/-0.03)x3.0M DNS', 6.3432),
('RM3001', 'S50C DIA18.1mm x DIA12.1mm x 3M SKI', 3.36),
('RM3101', 'SCM415_DIA10.10mm(+0.01/-0.04)x2.5MOKY', 1.5764),
('RM3102', 'SCM415_DIA11.05mm (+0/-0.03)x 2.5M OKY', 1.8869),
('RM3103', 'SCM415_DIA12.1mm(+0/-0.043) x 2.5M SSJ', 2.2625),
('RM3104', 'SCM415_DIA12.05mm(+0/-0.01)X3.0M SSJ', 2.6911),
('RM3105', 'SCM415_DIA12.20MM(+0/-0.01)X3.0M SSJ', 2.7585),
('RM3201', 'SDF_DIA2.0mm(-0.005/-0.01)X2.0M OSD', 0.0495),
('RM3202', 'SDF_DIA3.0mm(-0.005/-0.01)X2.0M SSJ', 0.1112),
('RM3203', 'SDF_DIA3.0mm(-0.01/-0.02)x2.5MSSJ', 0.139),
('RM3204', 'SDF_DIA4.1mm(+0/-0.03)x2.5M OSD', 0.2596),
('RM3301', 'SK-4F G_DIA4.0mm(-0.01/-0.02) x 2.0M SSJ', 0.1978),
('RM3302', 'SK-4_DIA4.0mm(+0/-0.03) x 2.5M DK', 0.2473),
('RM3401', 'STKM11A DIA9.9mm X DIA6.8mm X 2.5M SKI', 0.8),
('RM3402', 'STKM11A DIA9.9 X 6.8 X 2.6 SKI', 0.8316),
('RM3403', 'STKM11A DIA10.4 X 6.5 X 2.7M SKI', 1.0994),
('RM3404', 'STKM11A DIA20.15 X 17.05 X 2.5M NSK', 1.7811),
('RM3501', 'STKM11C DIA10.4mm X DIA6.5mm X 3M SKI', 1.2222),
('RM3502', 'STKM11C DIA15.0 X 7.7 X 2.5M SKI', 2.5593),
('RM3601', 'STKM12B DIA14.0mm X DIA9.6mm X 2.7~3.0M SKI', 1.733),
('RM3602', 'STKM12C-EC DIA13.50mm X DIA8.6mm X 2.1~3.0M SKI', 1.4726),
('RM3701', 'SUJ2 DIA2.05mm(+0/-0.025) X 2.5M SMC', 0.0649),
('RM3702', 'SUJ2 DIA3.05mm(+0/-0.025) X 2.5M SMC', 0.1438),
('RM3801', 'SUJ2G DIA 9.1mm(-0.03/-0.05)x2.5M SSJ', 1.2789),
('RM3901', 'SUM22 MTKH DIA8.08mm(+0.02/-0) x2.66M MTK', 1.0735),
('RM3902', 'SUM22 MTKH DIA10.10mm(+0.01/-0.01) x2.95M MTK', 1.8601),
('RM3903', 'SUM22 MTKH DIA 10.10mm(+0.01/-0.01) x2.8 M MTK', 1.7662),
('RM3904', 'SUM22 MTKH DIA 10.10mm(+0.01/-0.01) x2.2 M MTK', 1.3877),
('RM3905', 'SUM22_DIA13.10mm(+0/-0.03)X1.9M MTK', 2.0154),
('RM4001', 'SUM23 DIA3.00mm(-0.01/-0.03) x2.5M NSK', 0.139),
('RM4002', 'SUM23 DIA4.00mm(-0.04/-0.05) x2.5M NSK', 0.2471),
('RM4101', 'SUM 24EZ_DIA8.08mm(+0.02/-0)x2.66M DK', 1.0735),
('RM4102', 'SUM 24EZ DIA10.10mm(+0.01/-0.01)x2.95M DK', 1.8601),
('RM4201', '12L14 DIA2.0mm(-0.01 / -0.03) X 2M CLI', 0.0495),
('RM4202', '12L14 DIA2.50mm(+0/-0.03) X 2.0M CLI', 0.0773),
('RM4203', '12L14_DIA3.50mm (+0/-0.02)X2.5M CLI', 0.1892),
('RM4204', '12L14_DIA3.98mm(+0.03/-0)x2.5M CM', 0.2447),
('RM4205', '12L14_DIA3.99mm(+0.01/-0.01)x2.5M CM', 0.2459),
('RM4206', '12L14_DIA6.05mm(+0/-0.03)x2.5M OKY            ', 0.5653),
('RM4207', '12L14_DIA7.05mm(+0/-0.03)x2.5M SAARSTAHL ONLY OKY', 0.7676),
('RM4208', '12L14_DIA26.0mm(+0/-0.052) X 3.0M  HGW', 12.5289),
('RM4209', '12L14_DIA26.0mm(+0/ -0.052) x 3.0M CLI', 12.5353),
('RM4301', 'SUM24L_DIA2.6mm(+0/-0.03) X 2.0M SSJ', 0.0835),
('RM4302', 'SUM24L_DIA2.990mm(+0/-0.02)x2.5M CLI', 0.1381),
('RM4303', 'SUM24L_DIA2.990mm(+0/-0.02)x2.5M SSJ', 0.1381),
('RM4304', 'SUM24L_DIA3.005mm(+0/-0.02)x2.5M CLI', 0.1396),
('RM4305', 'SUM24L_DIA3.05mm(+0/-0.02)x2.5M CLI', 0.1438),
('RM4306', 'SUM24L_DIA3.05mm(+0/-0.02)x2.5M IRD', 0.1437),
('RM4307', 'SUM24L_DIA3.05mm(+0/-0.02)x2.5M SSJ', 0.1437),
('RM4308', 'SUM24L_DIA3.1mm (+0/-0.02) x2.5M SSJ', 0.1484),
('RM4309', 'SUM24L_DIA3.25mmX2.5M SSJ', 0.1631),
('RM4310', 'SUM24L_DIA3.99mm(+0/-0.02)x2.5M OSD', 0.2461),
('RM4311', 'SUM24L_DIA4.1mm(+0/-0.03) X 2.5M OSD', 0.2596),
('RM4312', 'SUM24L_DIA4.985mm(+0/-0.02)x2.5M OSD', 0.3841),
('RM4313', 'SUM24L_DIA6.00mm(+0/-0.02)x2.5M OSD', 0.5563),
('RM4314', 'SUM24L_DIA6.05mm(+0/-0.03)x2.5M OKY', 0.5657),
('RM4315', 'SUM24L_DIA6.05mm(+0/-0.03)x2.8M OSD', 0.6332),
('RM4316', 'SUM24L_DIA7.0mm X 2.5M SSJ', 0.7568),
('RM4317', 'SUM24L SQ_DIA7.00mm(+0/-0.04)x2.63M DK', 0.7962),
('RM4318', 'SUM24L SQ_DIA7.00mm(+0/-0.04)x2.88M DK', 0.8718),
('RM4319', 'SUM24L_DIA7.05mm(+0/-0.03)x2.5M SAARSTAHL ONLY OKY', 0.7681),
('RM4320', 'SUM24L_DIA7.05mm(+0/-0.03)x2.5M IRD', 0.7676),
('RM4321', 'SUM24L_DIA7.05mm(+0/-0.03)x2.79M OSD', 0.8567),
('RM4322', 'SUM24L_DIA8.05 (+0/-0.02) X 2.5M OSD', 1.0014),
('RM4323', 'SUM24L_DIA8.05mm X 2.5M CLI', 1.0009),
('RM4324', 'SUM24L_DIA8.05mm(+0/-0.03)x2.8M OSD', 1.121),
('RM4325', 'SUM24L_DIA8.05mm(+0/-0.03)x2.96M OSD', 1.185),
('RM4326', 'SUM24L_DIA8.08mm(+0.02/-0)x2.66M DK', 1.0735),
('RM4327', 'SUM24L_DIA8.08mm X 2.66M OKY', 1.0729),
('RM4328', 'SUM24L_DIA9.05mm(+0/-0.03)x2.7M OKY', 1.3662),
('RM4329', 'SUM24L_DIA9.05mm(+0/-0.03)x2.7M OSD', 1.3662),
('RM4330', 'SUM24L_DIA9.05mm(+0/-0.03)x2.7M WZ', 1.3662),
('RM4331', 'SUM24L_DIA10.00mm (-0.01/-0.03) X2.62mm OSD', 1.6186),
('RM4332', 'SUM24L_DIA10.00mm(+0/-0.03)x2.67M CLI', 1.6504),
('RM4333', 'SUM24L_DIA10.00mm(+0/-0.03)x2.67M OSD', 1.6495),
('RM4334', 'SUM24L_DIA10.06mm(+0/-0.02)x2.66M OSD', 1.6631),
('RM4335', 'SUM24L_DIA10.06mm(+0/-0.02)x2.66M CLI', 1.6631),
('RM4336', 'SUM24L_DIA10.06mm(+0/-0.02)x2.66M OSD', 1.6631),
('RM4337', 'SUM24L_DIA10.06mm(+0/-0.02)x2.79M OKY', 1.7444),
('RM4338', 'SUM24L_DIA10.06mm(+0/-0.02)x2.79M OSD', 1.7444),
('RM4339', 'SUM24L_DIA10.10(+0.01/-0.01) X 2.95M DK', 1.8591),
('RM4340', 'SUM24L_DIA11.05mm(+0/-0.03)x2.5M OSD', 1.8869),
('RM4341', 'SUM24L_DIA11.05(+0/-0.03) X 2.5M OSD', 1.8859),
('RM4342', 'SUM24L_DIA12.03mm X 2.5M OSD', 2.2352),
('RM4343', 'SUM24L_DIA13.08mm(+0/-0.03)x2.65M OKY', 2.801),
('RM4344', 'SUM24L_DIA13.08mm(+0/-0.03)x2.65M OSD', 2.801),
('RM4345', 'SUM24L_DIA13.08mm(+0/-0.03)x2.75M OKY', 2.9066),
('RM4346', 'SUM24L_DIA13.08mm(+0/-0.03)x2.75M OSD', 2.9066),
('RM4347', 'SUM24L_DIA13.08mm(+0/-0.03)x2.87M OKY', 3.0335),
('RM4348', 'SUM24L_DIA13.08mm(+0/-0.03)x2.87M OSD', 3.0335),
('RM4349', 'SUM24L_DIA14.03mm(+0/-0.03)x2.62M OSD', 3.1861),
('RM4350', 'SUM24L_DIA14.03mm(+0/-0.03)x2.79M OSD', 3.3928),
('RM4351', 'SUM24L_DIA14.05mm(+0/-0.03)x2.62M OKY', 3.1952),
('RM4352', 'SUM24L_DIA16.96mm(+0/-0.03)x2.86M OKY', 5.0823),
('RM4353', 'SUM24L_DIA16.96mm(+0/-0.03)x2.86M OSD', 5.0823),
('RM4354', 'SUM24L_DIA17mmx2.86M OSD', 5.1063),
('RM4355', 'SUM24L_DIA17mmx2.86M OKY', 5.1063),
('RM4356', 'SUM24L_DIA20.04mmx2.95M(+0/-0.03) OKY', 7.3192),
('RM4357', 'SUM24L_DIA20.04mm(+0.02/-0.02)x2.95M OSD', 7.3229),
('RM4358', 'SUM24L_DIA20.06mm(+0.02/-0.02)X2.95M TRC', 7.3338),
('RM4359', 'SUM24L_DIA25.00mm X 2.5M SSJ', 9.653),
('RM4360', 'SUM24L_DIA26.0 x 3.0M  SKM', 12.5289),
('RM4361', 'SUM24L_DIA8.10mm(+0/-0.03)x2.5M OSD', 1.0139),
('RM4362', 'SUM24L_DIA4.93mm(+0.01/-0.01)x2.5M OSD', 0.3756),
('RM4401', 'AISI1215 DIA3.99mm(+0.01/-0.01)x2.5M SSJ', 0.2459),
('RM4402', 'AISI1215 DIA13.0mm(+0/-0.03) x 2.5M CLI', 2.6102),
('RM4403', 'AISI1215 DIA14.0mm(+0/-0.04) X 2.5M CLI', 3.0288),
('RM4404', 'AISI1215 DIA16.96mm(+0.04/-0.07)x2.86M YFM', 5.0823),
('RM4501', 'SUS303 DIA3.0mm(-0.002/-0.008)X2M SSJ', 0.1112),
('RM4502', 'SUS303 DIA4.0mm(-0.015/-0.03)x2.5M OSD', 0.2471),
('RM4503', 'SUS303 DIA4.0mm(-0.015/-0.03)x2.5M SSJ', 0.2471),
('RM4504', 'SUS303 DIA6.00mm(+0/-0.03)x2.5M OSD', 0.5563),
('RM4505', 'SUS303 DIA7.00mm(+0/-0.03) X 2.5M OSD', 0.7572),
('RM4507', 'SUS303_DIA11.00mm(+0/-0.043) X 2.5M SMC', 1.8698),
('RM4508', 'SUS303_DIA14.00mm(+0/-0.043) X 2.5M SMC', 3.0288),
('RM4509', 'SUS303_DIA6.05mm(+0/-0.03) X 2.5M OSD', 0.5653),
('RM4510', 'SUS303_DIA11.10mm(+0/-0.03)x2.5M OSD', 1.903),
('RM4511', 'SUS303_DIA11.06mm(+0/-0.043)x2.5M SMC', 1.889),
('RM4512', 'SUS303_DIA6.05mm(+0/-0.03)x2.95M OSD', 0.6675),
('RM4601', 'SUS303CU DIA4.0mm(+0/-0.03)x2.5M OSD', 0.2473),
('RM4602', 'SUS303CU DIA5.00mm(+0/-0.03)x2.5M OSD', 0.3864),
('RM4603', 'SUS303CU DIA6.00mm(+0/-0.03)x2.5M OSD', 0.5563),
('RM4605', 'SUS303CU DIA7.00mm(+0/-0.03)X2.5M OSD', 0.7572),
('RM4606', 'SUS303CU DIA9.00mm(+0/-0.03) X2.5M OSD', 1.251),
('RM4607', 'SUS303CU DIA10.00mm(+0/-0.03) X 2.5M OSD', 1.5445),
('RM4608', 'SUS303CU DIA10.00mm(+0/-0.03)  X 2.5M OSD', 1.5453),
('RM4609', 'SUS303CU DIA10.06mm(+0/-0.03)  X 2.5M OSD', 1.5639),
('RM4610', 'SUS303CU G DIA8.00mm(+0/-0.01)  X 2.5M OSD', 0.989),
('RM4611', 'SUS303CU_DIA4.1mm(+0/-0.03)x2.5M SSJ', 0.26),
('RM4612', 'SUS303CU_DIA4.1mm(+0/-0.03)x2.5M OSD', 0.26),
('RM4613', 'SUS303CU_DIA12.0mm(+0/-0.03)x2.5M OSD', 2.2252),
('RM4614', 'SUS303CU DIA10.06mm(+0/-0.03) X 2.72M OSD', 1.7015),
('RM4701', 'SUS303G DIA4.0mm(-0.015/-0.03)x2.5M OSD', 0.2473),
('RM4702', 'SUS303G DIA5.00mm(+0/-0.018)x2.5M OSD', 0.3864),
('RM4703', 'SUS303G DIA8.815mm X 2.5M SSJ', 1.2001),
('RM4704', 'SUS303G DIA9.00 X 1.0M SSC', 0.5004),
('RM4705', 'SUS303G DIA9.00mm(-0.005/-0.014)x2.5M OSD', 1.2517),
('RM4801', 'SUS304 DIA2.2mm(+0.02/-0.01) X2.0M SMC', 0.0598),
('RM4802', 'SUS304 DIA2.44mm(+0/-0.01)X2.0M SSJ', 0.0736),
('RM4803', 'SUS304 DIA2.44mm(+0/-0.01)x2.5M SMC', 0.092),
('RM4804', 'SUS304 DIA3.00mm(+0/-0.03)X2.0M SSJ', 0.1113),
('RM4805', 'SUS304 DIA3.8mm(+0/-0.03) X 2.5M SMC', 0.223),
('RM4806', 'SUS304 DIA4.0mm(+0.08/+0.07) X 2.5M SMC', 0.2473),
('RM4807', 'SUS304 DIA7.5mm(+0/-0.02) X 2.5M SMC', 0.8693),
('RM4808', 'SUS304 DIA8.05mm (+0/-0.036)X 2.5M OSD', 1.0014),
('RM4809', 'SUS304 DIA8.08mm(+0/-0.03) X2.0M SSJ', 0.8067),
('RM4810', 'SUS304 DIA9.0mm(+0/-0.01) X 2.5M SSJ', 1.251),
('RM4811', 'SUS304 DIA4.0mm(+0/-0.03) X 2.5M SMI', 0.2473),
('RM4812', 'SUS304 DIA7.5mm(+0/-0.036) X 2.5M SMI', 0.8693),
('RM4902', 'SUS304G DIA7.5mm (+0/-0.01)x2.5M SMC', 0.8688),
('RM4903', 'SUS304G DIA4.0mm(+0/-0.01) X 2.5M SMC', 0.2473),
('RM4906', 'SUS304 G DIA2.50mm(+0/-0.01) X 2.5M OSD', 0.0966),
('RM5001', 'SUS416F DIA2.5mm(+0/-0.02)X2.0M SSJ', 0.0773),
('RM5002', 'SUS416F DIA4.02mm(+0/-0.02)X2.5M OSD', 0.2498),
('RM5003', 'SUS416F2 DIA5.0mm(+0/-0.036) X 2.5M OSD', 0.3864),
('RM5004', 'SUS416F(DSR16F)DIA6.00mm (+0/-0.03) x 2.5M  CLI', 0.5563),
('RM5005', 'SUS416F DIA9.00 X 2.5 SSJ', 1.251),
('RM5006', 'SUS416F DIA10.0mm(+0/-0.03)X2.5M OSD', 1.5453),
('RM5007', 'SUS416F2 DIA9.00mm(+0/-0.03)X2.5M OSD', 1.2517),
('RM5008', 'SUS416F2 DIA10.05mm(+0/-0.03) X2.52M OSD', 1.5724),
('RM5011', 'SUS416F2 DIA6.05mm(+0/-0.03) X2.5M OSD', 0.5657),
('RM5101', 'SUS416G DIA6.0mm(+0/-0.03)x2.5M SKM', 0.5563),
('RM5201', 'SUS420F DIA3.05mm(+0/-0.02)X2.0M DAIDO/TAIWAN', 0.115),
('RM5202', 'SUS420F DIA3.1 X 2.5M SSJ', 0.1484),
('RM5301', 'SUS420J2 DIA11.00(+0/-0.02)X2.5M SSJ', 1.8688),
('RM5302', 'SUS420J2 G DIA6.05mm(+0/-0.012)X2.5M OSD', 0.5657),
('RM5401', 'SUS440C DIA7.0(+0/-0.03) X 2.5M SMC', 0.7568),
('RM5402', 'SUS440C DIA9.0(+0/-0.03) X 2.5M OSD', 1.251),
('RM5403', 'SUS440C DIA9.0(+0/-0.03) X 2.9M OSD', 1.4512),
('RM5404', 'SUS440C DIA 9.0(+0/-0.02) X 2.9M SMC', 1.4512),
('RM5405', 'SUS440C DIA10.0mm (+0/-0.04) x2.5M SMC', 1.5445),
('RM5406', 'SUS440C DIA12.0G (+0/-0.01) x 2.5M SMC', 2.2241),
('RM5407', 'SUS440C DIA 9.0mm(+0/-0.02) X 2.5M SMI', 1.2517),
('RM5408', 'SUS440C DIA12.0mm(+0/-0.02) x 2.5M SMI', 2.2253),
('RM5501', 'C2700BD-1/2H (B62) DIA 2.5mm (+0.01/-0.01) x 2.5M SMC', 0.0839),
('RM5601', 'SUS303CU G DIA6.00mm(+0/-0.015) X 2.5M OSD', 0.556),
('RM5701', 'TLS DIA8.10mm(+0/-0.036)X2.5M OSD', 1.0139);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rm`
--

CREATE TABLE `tbl_rm` (
  `id` int(50) NOT NULL,
  `kode_sap` varchar(50) NOT NULL,
  `part_no_running` varchar(50) NOT NULL,
  `rm_code` varchar(50) NOT NULL,
  `type` varchar(255) NOT NULL,
  `need_day_bar` int(10) NOT NULL,
  `day_in` varchar(50) NOT NULL,
  `wo_from` varchar(50) NOT NULL,
  `wo_end` varchar(50) NOT NULL,
  `group_machine` varchar(50) NOT NULL,
  `qty_aktual` int(25) DEFAULT NULL,
  `last_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_rm`
--

INSERT INTO `tbl_rm` (`id`, `kode_sap`, `part_no_running`, `rm_code`, `type`, `need_day_bar`, `day_in`, `wo_from`, `wo_end`, `group_machine`, `qty_aktual`, `last_update`) VALUES
(1, 'N018', '1687372-00', 'RM1107', '1215(MS)DIA3.99mm (+0/-0.02) x2.5M CLI', 16, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(2, 'N019', '1687373-00', 'RM1107', '1215(MS)DIA3.99mm (+0/-0.02) x2.5M CLI', 22, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(3, 'N016', '1732780-00', 'RM1107', '1215(MS)DIA3.99mm (+0/-0.02) x2.5M CLI', 33, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(4, 'N046', '1725612-00', 'RM1110', '1215 (MS) DIA4.10mm (+0/-0.03)x2.5M CLI', 108, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(5, 'N022', '1690776-00', 'RM1112', '1215(MS)DIA5.00mm(+0/-0.03) x 2.5M CLI', 26, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(6, 'N044', '1725611-00', 'RM1116', '1215(MS)DIA6.05mm(+0/-0.03)x2.8M CLI', 162, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(7, 'N040', '1732735-00', 'RM1116', '1215(MS)DIA6.05mm(+0/-0.03)x2.8M CLI', 26, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(8, 'N038', '1822646-00', 'RM1118', '1215(MS)DIA8.00mm(+0/-0.03)x2.5M CLI', 17, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(9, 'N042', '1666903-00', 'RM1126', '1215(MS)DIA5.05mm (+0/-0.03)x 2.5M CLI', 84, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(10, 'N31A', '1843729-05', 'RM1126', '1215(MS)DIA5.05mm (+0/-0.03)x 2.5M CLI', 426, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(11, 'N017', '1666988-00', 'RM1135', '1215(MS)DIA4.985mm (+0/-0.02)x2.5M CM', 39, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(12, 'N033', '1677080-00', 'RM1135', '1215(MS)DIA4.985mm (+0/-0.02)x2.5M CM', 24, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(13, 'N021', '1725687-01', 'RM1135', '1215(MS)DIA4.985mm (+0/-0.02)x2.5M CM', 74, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(14, 'N031', '1729819-00', 'RM1135', '1215(MS)DIA4.985mm (+0/-0.02)x2.5M CM', 27, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(15, 'N026', '1706660-01', 'RM1136', '1215(MS)DIA6.00mm (+0/-0.02) x2.5M CM', 18, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(16, 'N035', '1724034-00', 'RM1136', '1215(MS)DIA6.00mm (+0/-0.02) x2.5M CM', 17, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(17, 'N024', '1724055-01', 'RM1136', '1215(MS)DIA6.00mm (+0/-0.02) x2.5M CM', 20, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(18, 'N036', '1666896-01', 'RM1137', '1215(MS)DIA5.98mm (+0/-0.02) x2.5M CM', 65, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(19, 'N047', '2244034-3C', 'RM1805', 'C3602 BD RO DIA5.5mm (+0/-0.03) X 2.5M IBI', 108, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(20, 'N045', '2244035-1 E', 'RM1805', 'C3602 BD RO DIA5.5mm (+0/-0.03) X 2.5M IBI', 168, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(21, 'N049', '2244036-0C', 'RM1805', 'C3602 BD RO DIA5.5mm (+0/-0.03) X 2.5M IBI', 60, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(22, 'N032', 'AE168021-0020', 'RM2808', 'S45C DIA8.10mm(+0/-0.03)x3.0M CLI', 64, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(23, 'N011', 'AE168021-0030', 'RM2808', 'S45C DIA8.10mm(+0/-0.03)x3.0M CLI', 207, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(24, 'N034', 'AE168021-0090', 'RM2808', 'S45C DIA8.10mm(+0/-0.03)x3.0M CLI', 64, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(25, 'N010', '91808-16023', 'RM3501', 'STKM11C DIA10.4mm X DIA6.5mm X 3M SKI', 15, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(26, 'N012', '925-08029-1A', 'RM3602', 'STKM12C-EC DIA13.50mm X DIA8.6mm X 2.1~3.0M SKI', 33, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(27, 'N050', '205-00579-00', 'RM4403', 'AISI1215 DIA14.0mm(+0/-0.04) X 2.5M CLI', 17, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(28, 'N048', '1863169-00', 'RM4701', 'SUS303G DIA4.0mm(-0.015/-0.03)x2.5M OSD', 18, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(29, 'N006', 'A4029-194-02', 'RM4705', 'SUS303G DIA9.00mm(-0.005/-0.014)x2.5M OSD', 40, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(30, 'N004', '3693-KVK1-0000', 'RM4812', 'SUS304 DIA7.5mm(+0/-0.036) X 2.5M SMI', 8, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(31, 'N025', 'D2B-0094', 'RM5007', 'SUS416F2 DIA9.00mm(+0/-0.03)X2.5M OSD', 25, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(32, 'N023', '1732732-01', 'RM5601', 'SUS303CU G DIA6.00mm(+0/-0.015) X 2.5M OSD', 49, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 1', NULL, NULL),
(33, 'N070', '1608919-01', 'RM1101', '1215(MS)DIA2.00mm (-0.01 / -0.03)x2M CLI', 32, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(34, 'N068', '1706661-00', 'RM1103', '1215(MS)DIA2.99mm (+0/-0.02)x2.5M CLI', 23, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(35, 'N066', '1614435-03', 'RM1105', '1215(MS)DIA3.05mm (+0/-0.02) x2.5M CLI', 19, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(36, 'N072', '1677229-00', 'RM1107', '1215(MS)DIA3.99mm (+0/-0.02) x2.5M CLI', 15, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(37, 'N065', '1687372-00', 'RM1107', '1215(MS)DIA3.99mm (+0/-0.02) x2.5M CLI', 32, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(38, 'N064', '1666993-00', 'RM1117', '1215(MS)DIA7.05mm(+0/-0.03)x2.5M CLI', 27, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(39, 'N069', '1682483-02', 'RM1117', '1215(MS)DIA7.05mm(+0/-0.03)x2.5M CLI', 19, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(40, 'N092', '1682485-00', 'RM1136', '1215(MS)DIA6.00mm (+0/-0.02) x2.5M CM', 10, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(41, 'N067', '1706660-01', 'RM1136', '1215(MS)DIA6.00mm (+0/-0.02) x2.5M CM', 9, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(42, 'N056', '1724043-01', 'RM1136', '1215(MS)DIA6.00mm (+0/-0.02) x2.5M CM', 45, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(43, 'N058', '5ER-E5138-00', 'RM1401', 'A2011-T3 DIA7.00mm(+0/-0.04)x2.5M SMC', 10, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(44, 'N061', '2244036-0C', 'RM1805', 'C3602 BD RO DIA5.5mm (+0/-0.03) X 2.5M IBI', 60, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(45, 'N062', '2253973-0 D', 'RM1815', 'C3602 BD RO DIA 4.0mm(+0/-0.03) x2.5M IBI', 7, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(46, 'N057', '2253974-9 D', 'RM1815', 'C3602 BD RO DIA 4.0mm(+0/-0.03) x2.5M IBI', 25, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(47, 'N051', 'N211270-0.7', 'RM1901', 'C3604 DIA4.00mm(-0.01/-0.03)x2.5M SMC', 12, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(48, 'S003', '1676876-00', 'RM2602', 'KS-1 SQ_DIA7.00mm(+0/-0.04)x2.88MDK', 88, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(49, 'N091', '4111-03550-C', 'RM2801', 'S45C DIA 4.15mm (+0/-0.03) X 2.5M CLI', 114, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(50, 'N089', 'AS47/03', 'RM4505', 'SUS303 DIA7.00mm(+0/-0.03) X 2.5M OSD', 47, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(51, 'N074', 'LV44465-002A', 'RM4601', 'SUS303CU DIA4.0mm(+0/-0.03)x2.5M OSD', 12, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(52, 'N054', '1682463-01', 'RM4603', 'SUS303CU DIA6.00mm(+0/-0.03)x2.5M OSD', 142, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(53, 'N090', 'A4029-194-02', 'RM4705', 'SUS303G DIA9.00mm(-0.005/-0.014)x2.5M OSD', 64, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(54, 'N087', '3367-KVK1-0000', 'RM4811', 'SUS304 DIA4.0mm(+0/-0.03) X 2.5M SMI', 40, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 2', NULL, NULL),
(55, 'N114', '1608749-01', 'RM1002', '1215(HS)DIA8.05mm(+0/-0.03)x2.8M OSD', 31, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(56, 'N100', '1677396-00', 'RM1007', '1215(HS)DIA13.08mm(+0/-0.03)x2.87M OSD', 124, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(57, 'N121', 'AS46/04', 'RM1012', '1215(HS)DIA12.60Gmm(+0.028/+0.018)x2.5M OSD', 28, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(58, 'N102', '1614426-02', 'RM1014', '1215(HS)DIA8.00mm(+0/-0.03)x2.8M OSD', 79, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(59, 'N118', '1732737-01', 'RM1014', '1215(HS)DIA8.00mm(+0/-0.03)x2.8M OSD', 176, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(60, 'N126', '1811310-00', 'RM1116', '1215(MS)DIA6.05mm(+0/-0.03)x2.8M CLI', 72, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(61, 'N117', '1278014-00', 'RM1120', '1215(MS)DIA9.05mm(+0/-0.03) x 2.7M CLI', 10, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(62, 'N110', '1677258-00', 'RM1121', '1215(MS)DIA10.00mm(+0/-0.03) x 2.67M CLI', 7, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(63, 'N098', '1677350-00', 'RM1121', '1215(MS)DIA10.00mm(+0/-0.03) x 2.67M CLI', 116, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(64, 'N125', '1687942-00', 'RM1121', '1215(MS)DIA10.00mm(+0/-0.03) x 2.67M CLI', 15, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(65, 'N113', '1713658-00', 'RM1121', '1215(MS)DIA10.00mm(+0/-0.03) x 2.67M CLI', 11, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(66, 'N104', '1666903-00', 'RM1126', '1215(MS)DIA5.05mm (+0/-0.03)x 2.5M CLI', 84, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(67, 'N128', '205-00575-00', 'RM1132', '1215 (MS)DIA11.00mm(+0/-0.03)x2.7M CLI', 11, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(68, 'N130', '205-00576-00', 'RM1132', '1215 (MS)DIA11.00mm(+0/-0.03)x2.7M CLI', 11, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(69, 'N095', '1688330-01', 'RM1133', '1215 (MS)DIA12.00mm(+0/-0.03)x2.7M CLI', 44, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(70, 'N123', '1857431-01', 'RM1133', '1215 (MS)DIA12.00mm(+0/-0.03)x2.7M CLI', 25, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(71, 'N136', '1666977-00', 'RM1135', '1215(MS)DIA4.985mm (+0/-0.02)x2.5M CM', 294, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(72, 'N144', '1850207-01', 'RM1137', '1215(MS)DIA5.98mm (+0/-0.02) x2.5M CM', 60, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(73, 'N115', '703-06009', 'RM2003', 'C6782BDF DIA10.05mm (+0/-0.02) X 2.97M SMC', 26, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(74, 'N124', 'AE168021-0020', 'RM2808', 'S45C DIA8.10mm(+0/-0.03)x3.0M CLI', 128, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(75, 'N142', 'AE168021-0090', 'RM2808', 'S45C DIA8.10mm(+0/-0.03)x3.0M CLI', 120, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(76, 'N127', '925-09044-1C', 'RM3601', 'STKM12B DIA14.0mm X DIA9.6mm X 2.7~3.0M SKI', 27, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(77, 'N096', '0004-00261-90-00-00', 'RM4005', 'SUM23 DIA20.04mm(+0.02/-0.02)X2.8M SMTK', 7, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(78, 'N143', '41NP-NW3N-0000', 'RM4209', '12L14_DIA26.0mm(+0/ -0.052) x 3.0M CLI', 10, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(79, 'N134', 'AS10/55', 'RM4403', 'AISI1215 DIA14.0mm(+0/-0.04) X 2.5M CLI', 51, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(80, 'N099', '1610048-01', 'RM4603', 'SUS303CU DIA6.00mm(+0/-0.03)x2.5M OSD', 147, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(81, 'N094', '1666905-00', 'RM4603', 'SUS303CU DIA6.00mm(+0/-0.03)x2.5M OSD', 135, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(82, 'N093', '1682463-01', 'RM4603', 'SUS303CU DIA6.00mm(+0/-0.03)x2.5M OSD', 71, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(83, 'N129', 'A4029-194-02', 'RM4705', 'SUS303G DIA9.00mm(-0.005/-0.014)x2.5M OSD', 8, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(84, 'N140', '3693-KVK1-0000', 'RM4812', 'SUS304 DIA7.5mm(+0/-0.036) X 2.5M SMI', 56, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(85, 'N119', '2244054-8A', 'RM5007', 'SUS416F2 DIA9.00mm(+0/-0.03)X2.5M OSD', 38, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(86, 'N108', 'D1A-0137-00', 'RM5008', 'SUS416F2 DIA10.05mm(+0/-0.03) X2.52M OSD', 58, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(87, 'N122', '3550-KPN0-00R0-0M00', 'RM5407', 'SUS440C DIA 9.0mm(+0/-0.02) X 2.5M SMI', 16, '17/03/2022', '18/03/2022', '18/03/2022', 'Cnc Line 3', NULL, NULL),
(88, 'C028', '1675219-00', 'RM1103', '1215(MS)DIA2.99mm (+0/-0.02)x2.5M CLI', 13, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(89, 'C048', '1671364-00', 'RM1105', '1215(MS)DIA3.05mm (+0/-0.02) x2.5M CLI', 142, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(90, 'C052', '1671366-00', 'RM1105', '1215(MS)DIA3.05mm (+0/-0.02) x2.5M CLI', 900, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(91, 'C051', '1754391-01', 'RM1105', '1215(MS)DIA3.05mm (+0/-0.02) x2.5M CLI', 432, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(92, 'C013', '1668136-00', 'RM1106', '1215(MS)DIA3.50mm (+0/-0.02)x2.5M CLI', 48, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(93, 'C021', '1749533-00', 'RM1106', '1215(MS)DIA3.50mm (+0/-0.02)x2.5M CLI', 24, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(94, 'C022', '1677085-00', 'RM1112', '1215(MS)DIA5.00mm(+0/-0.03) x 2.5M CLI', 20, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(95, 'C042', '1262664-01', 'RM1135', '1215(MS)DIA4.985mm (+0/-0.02)x2.5M CM', 18, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(96, 'C019', '1262667-01', 'RM1135', '1215(MS)DIA4.985mm (+0/-0.02)x2.5M CM', 19, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(97, 'C026', '1292782-01', 'RM1135', '1215(MS)DIA4.985mm (+0/-0.02)x2.5M CM', 28, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(98, 'C038', '1675539-00', 'RM1135', '1215(MS)DIA4.985mm (+0/-0.02)x2.5M CM', 20, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(99, 'C029', '1677087-00', 'RM1135', '1215(MS)DIA4.985mm (+0/-0.02)x2.5M CM', 31, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(100, 'C041', '1732741-00', 'RM1137', '1215(MS)DIA5.98mm (+0/-0.02) x2.5M CM', 28, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(101, 'C045', '1675221-00', 'RM1139', '1215(MS)DIA6.00mm(+0/-0.02) x2.75M CLI', 138, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(102, 'C035', '90336-06031', 'RM1308', 'A2017-T4_DIA7.00mm(+0/-0.05)x2.5M SMC', 5, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(103, 'C010', '0012000429R0001', 'RM3201', 'SDF_DIA2.0mm(-0.005/-0.01)X2.0M OSD', 510, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(104, 'C025', 'LV45806-002A', 'RM4202', '12L14 DIA2.50mm(+0/-0.03) X 2.0M CLI', 417, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(105, 'C040', '3643-GGZ0-00A0-00M0', 'RM4312', 'SUM24L_DIA4.985mm(+0/-0.02)x2.5M OSD', 233, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(106, 'C036', '703-84041', 'RM4322', 'SUM24L_DIA8.05 (+0/-0.02) X 2.5M OSD', 40, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(107, 'C037', '703-84043-1', 'RM4322', 'SUM24L_DIA8.05 (+0/-0.02) X 2.5M OSD', 134, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(108, 'C015', '93605-06800-00-80', 'RM4702', 'SUS303G DIA5.00mm(+0/-0.018)x2.5M OSD', 5, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL),
(109, 'C002', '1056670-00', 'RM5002', 'SUS416F DIA4.02mm(+0/-0.02)X2.5M OSD', 19, '17/03/2022', '18/03/2022', '18/03/2022', 'Cam', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scan`
--

CREATE TABLE `tbl_scan` (
  `kode_sap` varchar(50) NOT NULL,
  `day_in` varchar(50) NOT NULL,
  `part_no_running` varchar(50) NOT NULL,
  `rm_code` varchar(50) NOT NULL,
  `type` varchar(255) NOT NULL,
  `need_day_bar` int(10) NOT NULL,
  `group_machine` varchar(50) NOT NULL,
  `qty_aktual` int(25) DEFAULT NULL,
  `last_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_master`
--
ALTER TABLE `tbl_master`
  ADD PRIMARY KEY (`rm_code`);

--
-- Indexes for table `tbl_rm`
--
ALTER TABLE `tbl_rm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_scan`
--
ALTER TABLE `tbl_scan`
  ADD PRIMARY KEY (`kode_sap`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
