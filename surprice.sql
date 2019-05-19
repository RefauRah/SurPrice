-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 07:20 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surprice`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(10) NOT NULL,
  `nama_produk` varchar(23) NOT NULL,
  `harga` double NOT NULL,
  `link` varchar(200) NOT NULL,
  `asal` varchar(15) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `harga`, `link`, `asal`, `image`) VALUES
(1, 'Sepatu Sekolah Warrior', 95000, 'https://www.tokopedia.com/makmursepatu/sepatu-sekolah-warrior-classic-hc-navy-blue?trkid=f=Ca1759L000P0W0S0Sh00Co0Po0Fr0Cb0_src=universe_page=1_ob=23_q=sepatu+sekolah_po=12_catid=1845&lt=/searchproduc', 'Tokopedia', 'Sepatu_Sekolah_Tokopedia_pic1.jpg'),
(2, 'Sepatu Sekolah Motix ', 135000, 'https://www.tokopedia.com/wiloo/sepatu-sekolah-motix-america-original-slim-high-black-white-orange-hitam-41?trkid=f=Ca1759L000P0W0S0Sh00Co0Po0Fr0Cb0_src=universe_page=2_ob=23_q=sepatu+sekolah_po=13_ca', 'Tokopedia', 'Sepatu_Sekolah_Tokopedia_pic2.jpg'),
(3, 'Sepatu Sekolah Basket', 83900, 'https://www.tokopedia.com/renadasouvenir/sepatu-sekolah-hitam-new-basket-nb-338-lc-full-hitam-full-black?trkid=f=Ca1759L000P0W0S0Sh00Co0Po0Fr0Cb0_src=universe_page=1_ob=23_q=sepatu+sekolah_po=46_catid', 'Tokopedia', 'Sepatu_Sekolah_Tokopedia_pic3.jpg'),
(4, 'Sepatu Sekolah Kets', 214326, 'https://www.tokopedia.com/tokosatupurnama/sepatu-sneakers-kets-sepatu-pria-sepatu-kuliah-sepatu-sekolah?trkid=f=Ca1759L000P0W0S0Sh00Co0Po0Fr0Cb0_src=universe_page=2_ob=23_q=sepatu+sekolah_po=47_catid=', 'Tokopedia', 'Sepatu_Sekolah_Tokopedia_pic4.jpg'),
(5, 'Sepatu Sekolah Casual', 87000, 'https://www.tokopedia.com/galaxygemilang/sepatu-sneakers-casual-kickflip-black-by-ardiles-sepatu-kerja-sekolah-hitam-38?src=topads', 'Tokopedia', 'Sepatu_Sekolah_Tokopedia_pic5.jpg'),
(6, 'Sepatu Sekolah Casual', 174300, 'https://www.bukalapak.com/p/fashion-pria/sepatu-169/sneaker/en386f-jual-sepatu-sekolah-sepatu-sekolah-sepatu-sneakers-pria-sepatu-distro-sepatu-casual-catenzo-1570?dtm_section=top_promoted&dtm_source=', 'Bukalapak', 'Sepatu_Sekolah_Bukalapak_pic1.jpg'),
(7, 'Sepatu Sekolah Sport', 203500, 'https://www.bukalapak.com/p/olahraga/lari/sepatu-lari/7fq392-jual-sepatu-sekolah-sport-olah-raga-bola-futsal-casual-catenzo-099-mr-760?dtm_section=top_promoted&dtm_source=list-product&from=&product_ow', 'Bukalapak', 'Sepatu_Sekolah_Bukalapak_pic2.jpg'),
(8, 'Sepatu Sekolah Boots', 199000, 'https://www.bukalapak.com/p/fashion-pria/sepatu-169/boots/8ab5b6-jual-sepatu-boots-pria-sepatu-casul-steel-safety-sepatu-kerja-kulit-sekolah-gunung-ngantor-mr-joe-caterpilar-crocodile-almost-kickers-d', 'Bukalapak', 'Sepatu_Sekolah_Bukalapak_pic3.jpg'),
(9, 'Sepatu Sekolah CJR', 123300, 'https://www.bukalapak.com/p/fashion-anak/anak-laki-laki/sepatu-1447/6eci15-jual-sepatu-pria-sekolah-anak-laki-laki-cjr-cowok-catenzo-junior-footwear-sport-olah-raga-056-cap-207?dtm_section=bottom_prom', 'Bukalapak', 'Sepatu_Sekolah_Bukalapak_pic4.jpg'),
(10, 'Sepatu Sekolah Anak', 100000, 'https://www.bukalapak.com/p/fashion-anak/anak-unisex/sepatu-1492/kfj5o9-jual-sepatu-sekolah-anak-merah-hitam?from=list-product&product_owner=normal_seller&search%5Bkeywords%5D=sepatu%20sekolah', 'Bukalapak', 'Sepatu_Sekolah_Bukalapak_pic5.jpg'),
(11, 'Tas Ransel Palazzo', 94500, 'https://www.tokopedia.com/riung-consina/tas-ransel-selempang-palazzo-laptop-3-in-1-multi-fungsi-34685-original?trkid=f%3DCa1759L000P0W0S0Sh00Co0Po0Fr0Cb0_src%3Duniverse_page%3D2_ob%3D23_q%3Dtas_po%3D5', 'Tokopedia', 'Tas_Tokopedia_pic1.jpg'),
(12, 'Tas Adidas', 64500, 'https://www.tokopedia.com/gudangjaket/tas-adidas?trkid=f%3DCa1759L000P0W0S0Sh00Co0Po0Fr0Cb0_src%3Duniverse_page%3D2_ob%3D23_q%3Dtas_po%3D16_catid%3D1852&lt=%2Fsearchproduct%20-%20p16%20-%20product', 'Tokopedia', 'Tas_Tokopedia_pic2.jpg'),
(13, 'Tas Ransel Tactical', 109900, 'https://www.tokopedia.com/ukari/tas-ransel-tactical-army-3p-tas-punggung-ukuran-tanggung-ukari?trkid=f%3DCa1759L000P0W0S0Sh00Co0Po0Fr0Cb0_src%3Duniverse_page%3D2_ob%3D23_q%3Dtas_po%3D21_catid%3D1852&l', 'Tokopedia', 'Tas_Tokopedia_pic3.jpg'),
(14, 'Tas Nike Elite Kobe ', 230000, 'https://www.tokopedia.com/korionz/tas-ransel-backpack-sekolah-laptop-nike-elite-kobe-tkb008?src=topads', 'Tokopedia', 'Tas_Tokopedia_pic4.jpg'),
(15, 'Tas Nike Navy', 70000, 'https://www.tokopedia.com/gudangjaket/tas-terbaru-nike-navy-red?trkid=f=Ca1759L000P0W0S0Sh00Co0Po0Fr0Cb0_src=universe_page=2_ob=23_q=tas_po=25_catid=1852&lt=/searchproduct%20-%20p17%20-%20product', 'Tokopedia', 'Tas_Tokopedia_pic5.jpg'),
(16, 'Tas Anti Maling', 126000, 'https://www.bukalapak.com/p/fashion-pria/tas-pria/ransel/c7pgdy-jual-tas-ransel-anti-maling?from=list-product&product_owner=normal_seller&search%5Bkeywords%5D=tas', 'Bukalapak', 'Tas_Bukalapak_pic1.jpg'),
(17, 'Tas Beaucoup', 119000, 'https://www.bukalapak.com/p/fashion-pria/tas-pria/punggung-backpack/jsiqj0-jual-beaucoup-indentity-i-tas-ransel-pria?from=list-product&product_owner=seller_brand&search%5Bkeywords%5D=tas', 'Bukalapak', 'Tas_Bukalapak_pic2.jpg'),
(18, 'Tas Kantor Wpack', 87500, 'https://www.bukalapak.com/p/fashion-pria/tas-pria/punggung-backpack/mcr53d-jual-txw-tas-kampus-tas-kantor-wpack-v-1-0-polyester-navy-blue-orange?from=list-product&product_owner=seller_brand&search%5Bk', 'Bukalapak', 'Tas_Bukalapak_pic3.jpg'),
(19, 'Tas Punggung  Laptop', 250000, 'https://www.bukalapak.com/p/fashion-pria/tas-pria/ransel/34vi0j-jual-tas-pria-tas-punggung-ras-ransel-laptop-dobel-protection-ardani?from=list-product&product_owner=normal_seller&search%5Bkeywords%5D=', 'Bukalapak', 'Tas_Bukalapak_pic4.jpg'),
(20, 'Tas Ransel Laptop', 85000, 'https://www.bukalapak.com/p/fashion-pria/tas-pria/ransel/1bs5k9-jual-tas-ransel-laptop-polo-usa-tas-laptop-tas-kantor-tas-kerja-tas-sekolah-tas-murah?dtm_section=top_promoted&dtm_source=list-product&f', 'Bukalapak', 'Tas_Bukalapak_pic5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
