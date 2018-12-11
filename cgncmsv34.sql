-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Ara 2018, 09:08:58
-- Sunucu sürümü: 10.1.36-MariaDB
-- PHP Sürümü: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cgncmsv34`
--
CREATE DATABASE IF NOT EXISTS `cgncmsv34` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cgncmsv34`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnalbum`
--

CREATE TABLE `35cgnalbum` (
  `id` int(11) NOT NULL,
  `folder` varchar(200) NOT NULL,
  `avatar` varchar(1000) DEFAULT NULL,
  `createdate` datetime NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `35cgnalbum`
--

INSERT INTO `35cgnalbum` (`id`, `folder`, `avatar`, `createdate`, `date`) VALUES
(51, 'CGN Sosyal Medya', './img/CGN (3).jpg', '2018-08-05 00:00:00', '0000-00-00 00:00:00'),
(55, 'CGN Yazılım', './img/rq3.JPG', '2018-08-05 00:00:00', '0000-00-00 00:00:00'),
(57, 'CGN Web Sayfaları', './img/zz7.jpg', '2018-08-05 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgncategory`
--

CREATE TABLE `35cgncategory` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `page` text,
  `url` varchar(200) DEFAULT NULL,
  `is_leaf` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `35cgncategory`
--

INSERT INTO `35cgncategory` (`id`, `name`, `parent_id`, `page`, `url`, `is_leaf`, `type`) VALUES
(0, 'Ana Kategori', 0, NULL, NULL, 0, NULL),
(53, 'Bilgisayar', 0, NULL, 'katresim/53/images.jpg', 0, 1),
(54, 'Masaüstü Bilgisayar', 53, NULL, 'katresim/54/masaüstü pc.jpg', 1, 1),
(55, 'Dizüstü Bilgisayar', 53, NULL, 'katresim/55/laptop.jpg', 1, 1),
(59, 'Ev Eşyaları', 0, NULL, 'katresim/59/evEsya.jpg', 0, 1),
(60, 'Beyaz Eşya', 59, NULL, 'katresim/60/beyaz eşya.png', 1, 1),
(61, 'Kahve Makineleri', 59, NULL, 'katresim/61/pzt sendrom cgn.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnfromportfolio`
--

CREATE TABLE `35cgnfromportfolio` (
  `id` int(11) NOT NULL,
  `link` varchar(300) DEFAULT NULL,
  `tlink` varchar(300) DEFAULT NULL,
  `caption` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `35cgnfromportfolio`
--

INSERT INTO `35cgnfromportfolio` (`id`, `link`, `tlink`, `caption`) VALUES
(416, 'uploads/2.jpg', NULL, ''),
(417, 'uploads/3.jpg', NULL, ''),
(418, 'uploads/4.jpg', NULL, ''),
(419, 'uploads/5.jpg', NULL, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgngallery`
--

CREATE TABLE `35cgngallery` (
  `id` int(11) NOT NULL,
  `link` varchar(300) NOT NULL,
  `tlink` varchar(300) NOT NULL,
  `caption` varchar(200) NOT NULL,
  `album` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `35cgngallery`
--

INSERT INTO `35cgngallery` (`id`, `link`, `tlink`, `caption`, `album`, `type`, `rank`) VALUES
(41, './img/gazlisalamander.jpg', './thb/gazlisalamander.jpg', '', 14, 1, NULL),
(42, './img/22.jpg', './thb/22.jpg', '', 12, 1, NULL),
(83, './img/Buy 1 Take 1 Cappuccinos (1).png', './img/Buy 1 Take 1 Cappuccinos (1).png', '', 51, 1, NULL),
(85, './img/CGN (3).jpg', './img/CGN (3).jpg', '', 51, 1, NULL),
(87, './img/CGN Tekno Çözüm.jpg', './img/CGN Tekno Çözüm.jpg', '', 51, 1, NULL),
(88, './img/CGN.jpg', './img/CGN.jpg', '', 51, 1, NULL),
(89, './img/CGN1.jpg', './img/CGN1.jpg', '', 51, 1, NULL),
(90, './img/CGN-sosyal medya 1.png', './img/CGN-sosyal medya 1.png', '', 51, 1, NULL),
(91, './img/Güvenlik-Medya.png', './img/Güvenlik-Medya.png', '', 51, 1, NULL),
(92, './img/Premium Quality Goods.png', './img/Premium Quality Goods.png', '', 51, 1, NULL),
(93, './img/pzt sendrom cgn.jpg', './img/pzt sendrom cgn.jpg', '', 51, 1, NULL),
(94, './img/Responsive Web tasarım.jpg', './img/Responsive Web tasarım.jpg', '', 51, 1, NULL),
(98, './img/rq1.JPG', './img/rq1.JPG', '', 55, 1, NULL),
(99, './img/rq2.JPG', './img/rq2.JPG', '', 55, 1, NULL),
(100, './img/rq3.JPG', './img/rq3.JPG', '', 55, 1, NULL),
(101, './img/rq4.JPG', './img/rq4.JPG', '', 55, 1, NULL),
(102, './img/rq5.JPG', './img/rq5.JPG', '', 55, 1, NULL),
(103, './img/rq6.JPG', './img/rq6.JPG', '', 55, 1, NULL),
(124, './img/zz1.jpg', './img/zz1.jpg', '', 57, 1, NULL),
(125, './img/zz2.png', './img/zz2.png', '', 57, 1, NULL),
(126, './img/zz3.jpg', './img/zz3.jpg', '', 57, 1, NULL),
(127, './img/zz4.png', './img/zz4.png', '', 57, 1, NULL),
(128, './img/zz5.jpg', './img/zz5.jpg', '', 57, 1, NULL),
(129, './img/zz6.jpg', './img/zz6.jpg', '', 57, 1, NULL),
(130, './img/zz7.jpg', './img/zz7.jpg', '', 57, 1, NULL),
(131, './img/zz8.jpg', './img/zz8.jpg', '', 57, 1, NULL),
(132, './img/zz9.jpg', './img/zz9.jpg', '', 57, 1, NULL),
(133, './img/zz10.png', './img/zz10.png', '', 57, 1, NULL),
(134, './img/zz11.jpg', './img/zz11.jpg', '', 57, 1, NULL),
(135, './img/zz12.jpg', './img/zz12.jpg', '', 57, 1, NULL),
(136, './img/zz13.jpg', './img/zz13.jpg', '', 57, 1, NULL),
(137, './img/zz14.jpg', './img/zz14.jpg', '', 57, 1, NULL),
(138, './img/zz15.jpg', './img/zz15.jpg', '', 57, 1, NULL),
(139, './img/zz16.jpg', './img/zz16.jpg', '', 57, 1, NULL),
(140, './img/zz17.jpg', './img/zz17.jpg', '', 57, 1, NULL),
(141, './img/zz18.jpg', './img/zz18.jpg', '', 57, 1, NULL),
(142, './img/zz19.jpg', './img/zz19.jpg', '', 57, 1, NULL),
(143, './img/zz20.jpg', './img/zz20.jpg', '', 57, 1, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgngalleryb`
--

CREATE TABLE `35cgngalleryb` (
  `id` int(11) NOT NULL,
  `link` varchar(300) DEFAULT NULL,
  `tlink` varchar(300) DEFAULT NULL,
  `caption` varchar(200) NOT NULL,
  `album` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `35cgngalleryb`
--

INSERT INTO `35cgngalleryb` (`id`, `link`, `tlink`, `caption`, `album`, `type`, `rank`) VALUES
(292, 'uploads/slider1.jpg', NULL, 'Polat Mutfağa Hoşgeldiniz', NULL, NULL, NULL),
(295, 'uploads/asdadasd.png', NULL, 'Polat Mutfağa Hoşgeldiniz', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnlang`
--

CREATE TABLE `35cgnlang` (
  `Lang` varchar(11) NOT NULL,
  `Status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `35cgnlang`
--

INSERT INTO `35cgnlang` (`Lang`, `Status`) VALUES
('English', 1),
('French', 0),
('German', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnmenu`
--

CREATE TABLE `35cgnmenu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(40) NOT NULL,
  `menu_show` varchar(40) NOT NULL,
  `menu_rank` int(11) NOT NULL,
  `content` text,
  `menu_title` varchar(100) NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `menu_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `35cgnmenu`
--

INSERT INTO `35cgnmenu` (`menu_id`, `menu_name`, `menu_show`, `menu_rank`, `content`, `menu_title`, `keywords`, `description`, `menu_type`) VALUES
(3, 'Anasayfa', '1', 1, '<p>Anasayfa</p>\r\n', 'Anasayfa', 'Anasayfa', 'Anasayfa', 0),
(9, 'İletişim', '1', 10, '', 'İletişim', '', '', 0),
(17, 'Haberler', '1', 9, '', 'Haberler', '', '', 0),
(20, 'Ürünler', '1', 4, '', 'Ürünler', 'Ürünler', 'Ürünler', 0),
(21, 'Yazılım', '1', 3, '<h1>Firmanızın tam ihtiyacına y&ouml;nelik yazılımlarla, performansınızı arttırıyoruz</h1>\r\n\r\n<p>Her kuruluşun kendine &ouml;zg&uuml; işleyişi ve ihtiya&ccedil;ları vardır. Bu işleyiş, ihtiya&ccedil; firmaların alışkanlıklarından ve hedeflerinden dolayı hepsinde farklılık g&ouml;sterir. Maksimum başarıyı elde etmek i&ccedil;in kuruluşun hedeflerine en uygun y&ouml;ntemi bulmak gerekir. Bundan dolayıdır ki işleyişi kolaylaştırmak ve rutin hale getirmek i&ccedil;in, &ouml;yleyse, firmalara fayda sağlayacak, b&uuml;t&uuml;n bu alışkanlıkları ve hedeflerini karşılayacak kendine &ouml;zg&uuml; &ouml;zel yazılımlara sahip olması gerekir.</p>\r\n\r\n<p>&Ouml;zel uygulama yazılımları yanında sekt&ouml;rde yaptığımız analizler sonucu genel kullanım ama&ccedil;lı fakat &ouml;zelleştirilebilen hazır &ccedil;&ouml;z&uuml;mler ve paket yazılımlarımız da bulunmaktadır.</p>\r\n\r\n<p>M&uuml;hendislerimiz tarafından profesyonel bir şekilde verilecek olan hizmetlerimizden faydalanmak istiyorsanız l&uuml;tfen&nbsp;<a href=\"http://cgnyazilim.com/teklif-formu.html\">teklif formunu</a>&nbsp;doldurun.</p>\r\n', 'Yazılım', 'Yazılım nedir, yazılım yararları, farkındalık, performans, kalite, özgün yazılım', 'Yazılım nedir, yazılım yararları, farkındalık, performans, kalite, özgün yazılım', 0),
(22, 'Kurumsal', '1', 2, '<h1><img alt=\"\" src=\"/cms/std/ckeditor/plugins/kcfinder/uploads/images/cgn-yazilim-tabe22.jpg\" style=\"float:right; height:245px; width:548px\" /></h1>\r\n\r\n<p>Evlerde, iş yerlerinde, hatta okullarda bile teknolojik aletlerin bir&ccedil;oğundan bolca yararlanmaktayız. Evimizde&nbsp;kahve makinesi, bulaşık makinesi, buzdolabı&nbsp;ve&nbsp;bilgisayar&nbsp;gibi elektronik aletler bulunmazsa rahat olamıyoruz.</p>\r\n\r\n<p>G&uuml;nl&uuml;k hayatta ihtiyacınız olabilecek teknolojik &uuml;r&uuml;nlerin tamamı &Uuml;r&uuml;nler kategorimizde beğeninize sunuluyor.&nbsp;</p>\r\n\r\n<h3>PC&#39;ler, Diz&uuml;st&uuml; Bilgisayarlar</h3>\r\n\r\n<p>Ofis &ccedil;alışanlarının b&uuml;y&uuml;k bir kısmının yanında ayırmadığı&nbsp;diz&uuml;st&uuml; bilgisayar&nbsp;&ccedil;eşitleri, &ccedil;alışanlara her an her yerde iş &uuml;zerinde olma ve işleri kontrol etme olanağı tanıyor. Hafifliği ve tasarımı ile kolaylıkla taşınabilir olan laptoplar, g&uuml;nl&uuml;k hayatımızın adeta bir par&ccedil;ası haline gelmiş durumda.</p>\r\n\r\n<p>&Ouml;te yandan PC kullanıcısıysanız ve&nbsp;masa&uuml;st&uuml; bilgisayar&nbsp;kullanmaktan vazge&ccedil;emiyorsanız yine tercihlerinize en uygun PC&#39;yi&nbsp;Masa&uuml;st&uuml; Bilgisayar&nbsp;kategorisinde bulmanız m&uuml;mk&uuml;n.</p>\r\n\r\n<h3>Ev Eşyaları</h3>\r\n\r\n<p>Beyaz eşyalar&nbsp;da en az cep telefonu, televizyon ve bilgisayar kadar hayatımız i&ccedil;in elzem teknolojik &uuml;r&uuml;nler arasında. &Ouml;zellikle hanımlar mutfakta bulunan&nbsp;beyaz eşya&nbsp;&ccedil;eşitlerinin kaliteli ve uzun &ouml;m&uuml;rl&uuml; olmasının ne kadar &ouml;nemli olduğunu &ccedil;ok iyi bilirler.</p>\r\n', 'Hakkımızda', '', '', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnourclients`
--

CREATE TABLE `35cgnourclients` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `35cgnourclients`
--

INSERT INTO `35cgnourclients` (`id`, `filename`, `update`, `link`) VALUES
(8, 'resim/fg5133.png', '2017-10-26 12:16:17', ''),
(9, 'resim/yu7110.png', '2017-10-26 12:16:20', ''),
(10, 'resim/yu5792.png', '2017-10-26 12:16:23', ''),
(11, 'resim/rt2600.png', '2017-10-26 12:16:26', ''),
(12, 'resim/ty1885.png', '2017-10-26 12:16:31', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnpage`
--

CREATE TABLE `35cgnpage` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(40) DEFAULT NULL,
  `page_context` text,
  `page_rank` int(11) DEFAULT NULL,
  `menu_id` int(11) NOT NULL,
  `page_title` varchar(100) NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `35cgnpage`
--

INSERT INTO `35cgnpage` (`page_id`, `page_name`, `page_context`, `page_rank`, `menu_id`, `page_title`, `keywords`, `description`) VALUES
(1, 'Hakkımızda', '<p>1978 yılından g&uuml;n&uuml;m&uuml;ze kadar end&uuml;striyel mutfak piyasasının en &ouml;nemli iş adamlarından biri olan Aybars Şendur tarafından 2004 yılında kurulan Krom Mutfak San. Tic. Ltd. Şti., kurulduğu ilk g&uuml;nden itibaren tecr&uuml;benin &ouml;nderliğinde, gen&ccedil; ve yenilik&ccedil;i &ccedil;izgisiyle ve her zaman kendisini geliştirmekten vazge&ccedil;meyen yapısıyla emin adımlarla ilerlemektedir.</p>\r\n\r\n<p>, ve , Krom Mutfak&#39;ın b&uuml;nyesinde bulunan markalardır. 2004 yılından itibaren markasıyla a&ccedil;ık b&uuml;fe &uuml;retimini devam ettiren Krom Mutfak, 2012 yılından itibaren de markasını end&uuml;striyel mutfak &uuml;r&uuml;nlerinin markası ve markasını da paslanmaz &ccedil;elik medikal &uuml;r&uuml;nlerinin markası olarak tanıtmaya başlamıştır.</p>\r\n\r\n<p>Krom Mutfak, hem y&uuml;ksek teknoloji CNC ( Computer Numerical Control ) makineleriyle ve verimli fabrika hattıyla &uuml;retim yapan, hem de b&uuml;nyesinde bir &ccedil;ok ithal ve yerli markaların distrib&uuml;t&ouml;rl&uuml;ğ&uuml;n&uuml; ve bayiliğini barındıran, proje, satış ve danışmanlık hizmeti veren bir sanayi kuruluşudur.</p>\r\n\r\n<p>End&uuml;striyel mutfak sekt&ouml;r&uuml;nde geniş &uuml;r&uuml;n yelpazesi ile &ccedil;alışmalarını s&uuml;rd&uuml;ren Krom Mutfak otel, motel, sosyal tesis, turistik tesis, tatil k&ouml;y&uuml;, okul, hastane, fabrika, restoran, kafeterya v.b. tesisler i&ccedil;in</p>\r\n\r\n<p>projelendirme ve danışmanlık ile başlayan, anahtar teslimi komple mutfak tesisi kurulum ve işletmeye hazır hale getirilmesi veya m&uuml;nferid mamul bazında &uuml;retim, montaj, doğrudan satış ve satış sonrası servislerle paket olarak hizmet vermektedir.</p>\r\n\r\n<p>Krom Mutfak, uzman ve deneyimli teknik kadrosu aracılığı ile işletmenin ihtiya&ccedil;ları, mekanın yapısı ve mimari k&uuml;lt&uuml;r&uuml; doğrultusunda t&uuml;m detayları i&ccedil;eren bir projelendirme işlemi ger&ccedil;ekleştirir. Kuruluşundan bu yana, verimli mutfaklar ortaya &ccedil;ıkarmak i&ccedil;in vermiş olduğu her hizmette ve &uuml;retmiş olduğu her &uuml;r&uuml;nde m&uuml;kemmele ulaşmaya &ccedil;alışan Krom Mutfak, hem m&uuml;şterilerini hem de onların &ccedil;alışanlarını memnun edecek işler ortaya &ccedil;ıkarmaktadır.</p>\r\n', 1, 2, 'Hakkımızda', 'Firma hakkımızda ', 'hakkımızda sayfa tanıtımı'),
(3, 'Üretim', '<p>1978 yılından g&uuml;n&uuml;m&uuml;ze kadar end&uuml;striyel mutfak piyasasının en &ouml;nemli iş adamlarından biri olan Aybars Şendur tarafından 2004 yılında kurulan Krom Mutfak San. Tic. Ltd. Şti., kurulduğu ilk g&uuml;nden itibaren tecr&uuml;benin &ouml;nderliğinde, gen&ccedil; ve yenilik&ccedil;i &ccedil;izgisiyle ve her zaman kendisini geliştirmekten vazge&ccedil;meyen yapısıyla emin adımlarla ilerlemektedir.</p>\r\n\r\n<p>, ve , Krom Mutfak&#39;ın b&uuml;nyesinde bulunan markalardır. 2004 yılından itibaren markasıyla a&ccedil;ık b&uuml;fe &uuml;retimini devam ettiren Krom Mutfak, 2012 yılından itibaren de markasını end&uuml;striyel mutfak &uuml;r&uuml;nlerinin markası ve markasını da paslanmaz &ccedil;elik medikal &uuml;r&uuml;nlerinin markası olarak tanıtmaya başlamıştır.</p>\r\n\r\n<p>Krom Mutfak, hem y&uuml;ksek teknoloji CNC ( Computer Numerical Control ) makineleriyle ve verimli fabrika hattıyla &uuml;retim yapan, hem de b&uuml;nyesinde bir &ccedil;ok ithal ve yerli markaların distrib&uuml;t&ouml;rl&uuml;ğ&uuml;n&uuml; ve bayiliğini barındıran, proje, satış ve danışmanlık hizmeti veren bir sanayi kuruluşudur.</p>\r\n\r\n<p>End&uuml;striyel mutfak sekt&ouml;r&uuml;nde geniş &uuml;r&uuml;n yelpazesi ile &ccedil;alışmalarını s&uuml;rd&uuml;ren Krom Mutfak otel, motel, sosyal tesis, turistik tesis, tatil k&ouml;y&uuml;, okul, hastane, fabrika, restoran, kafeterya v.b. tesisler i&ccedil;in</p>\r\n\r\n<p>projelendirme ve danışmanlık ile başlayan, anahtar teslimi komple mutfak tesisi kurulum ve işletmeye hazır hale getirilmesi veya m&uuml;nferid mamul bazında &uuml;retim, montaj, doğrudan satış ve satış sonrası servislerle paket olarak hizmet vermektedir.</p>\r\n\r\n<p>Krom Mutfak, uzman ve deneyimli teknik kadrosu aracılığı ile işletmenin ihtiya&ccedil;ları, mekanın yapısı ve mimari k&uuml;lt&uuml;r&uuml; doğrultusunda t&uuml;m detayları i&ccedil;eren bir projelendirme işlemi ger&ccedil;ekleştirir. Kuruluşundan bu yana, verimli mutfaklar ortaya &ccedil;ıkarmak i&ccedil;in vermiş olduğu her hizmette ve &uuml;retmiş olduğu her &uuml;r&uuml;nde m&uuml;kemmele ulaşmaya &ccedil;alışan Krom Mutfak, hem m&uuml;şterilerini hem de onların &ccedil;alışanlarını memnun edecek işler ortaya &ccedil;ıkarmaktadır.</p>\r\n', 2, 2, 'Üretim', 'Üretim', 'Üretim'),
(5, 'Hizmetlerimiz', '<p>Hizmetlerimiz</p>\r\n', 4, 2, 'Hizmetlerimiz', 'Hizmetlerimiz', 'Hizmetlerimiz'),
(40, 'Web Tabanlı Yazılımlar', '<h1><img alt=\"\" src=\"/cms/std/ckeditor/plugins/kcfinder/uploads/images/web.jpg\" style=\"float:right; height:200px; margin:10px; width:300px\" /></h1>\r\n\r\n<p>Web tabanlı yazılımlar, firmaların ihtiya&ccedil;larını gidermek i&ccedil;in gerekli olan yazılımları, web ortamında &ccedil;alışacak şekilde hazırlamak anlamına gelmektedir. Web tabanlı yazılımların avantajı, mekan zaman ve platformdan bağımsız olarak internet erişiminin olduğu yerden, pc, laptop, tablet, smartphone kullanarak yazılıma erişebilmektir. D&uuml;nyanın diğer ucunda dahi olsanız t&uuml;m m&uuml;şteri verilerinize ulaşabilirsiniz. Bilgisayara &ouml;zel bir program kurulmasına veya bilgisayarın size ait olmasına gerek yoktur. Platform esnekliği sağlar. Her işletim sisteminde ve her browserda sorunsuzca &ccedil;alışır.</p>\r\n\r\n<p>Uyumluluk gibi bir sorun yoktur. Masa&uuml;st&uuml; yazılımlarına ve herhangi bir g&uuml;venlik g&uuml;ncelleştirmesine gerek yoktur, bilgisayara y&uuml;k bindirmez. Sunucu tarafı g&uuml;ncellenmesi halinde t&uuml;m kullanıcılar son s&uuml;r&uuml;m kullanırlar. &Ccedil;oklu kullanıcı desteği ile birden fazla kullanıcı farklı yetkilendirme ile sistemi kullanabilirler.</p>\r\n\r\n<p>M&uuml;hendislerimiz tarafından profesyonel bir şekilde verilecek olan hizmetlerimizden faydalanmak istiyorsanız l&uuml;tfen&nbsp;<u><a href=\"http://cgnyazilim.com/teklif-formu.html\">teklif formunu</a></u>&nbsp;doldurun.</p>\r\n', 1, 21, 'Web Tabanlı Yazılımlar', '', ''),
(41, 'E-Ticaret Sistemleri', '<p><img alt=\"\" src=\"/cms/std/ckeditor/plugins/kcfinder/uploads/images/cgn-yazilim-gelistirme.jpg\" style=\"float:right; height:200px; margin:10px; width:326px\" />&nbsp; &nbsp; &nbsp;&nbsp; G&uuml;n&uuml;m&uuml;z&uuml;n en b&uuml;y&uuml;k yatırım alanlarından biri haline gelen e-ticaret siteleri size internette sanal bir mağaza a&ccedil;ma ve &uuml;r&uuml;nlerinizi binlerce kullanıcıya ulaştırmanızı sağlıyor. Kredi kartı ve kargo sistemi ile uzaktan satış imkanı sunan bu sistem alışagelmiş birebir satış mantığının yanında &ccedil;ok fazla avantaj sağlamaktadır. Aynı anda siteniz binlerce kullanıcının satış yapmasına olanak sağlar ve m&uuml;şteri temsilcisi g&ouml;revi g&ouml;r&uuml;r.</p>\r\n\r\n<p>E-ticaret; 1995 yılından sonra t&uuml;m d&uuml;nyada internet kullanımının artmasıyla ortaya &ccedil;ıkan, ticaretin dijital ortamda online olarak yapılması kavramıdır. E-Ticaret, herhangi bir &uuml;r&uuml;n ya da hizmet i&ccedil;in, &ccedil;eşitli &ouml;deme y&ouml;ntemleriyle bir internet sitesi &uuml;zerinden ticaret yapmanızı veya sipariş vermenizi sağlayan bir alışveriş y&ouml;ntemidir.</p>\r\n\r\n<p>T&uuml;rkiye&rsquo;de ve d&uuml;nyada geleneksel pazarlama y&ouml;ntemlerine ve satış faaliyetlerine e-ticaret&rsquo;i de ekleyen kuruluşlar, sadece belirli bir lokasyona ve noktaya satış yapmanın &ouml;tesine ge&ccedil;erek, s&uuml;re&ccedil;lerine e-ticaret&rsquo;i de dahil etmeye başlamıştır.</p>\r\n\r\n<p>E-ticaret &ouml;zellikle k&uuml;&ccedil;&uuml;k ve orta &ouml;l&ccedil;ekli işletmeler (KOBİ) i&ccedil;in &ccedil;ok uygun bir ticaret şeklidir. E-ticaret, belirli bir satış noktasının dışına &ccedil;ıkarak satışların artmasına ve daha hızlı &ouml;demeleri slim alınmasına olanak sağlamaktadır.</p>\r\n\r\n<p>M&uuml;hendislerimiz tarafından profesyonel bir şekilde verilecek olan hizmetlerimizden faydalanmak istiyorsanız l&uuml;tfen<u>&nbsp;<a href=\"http://cgnyazilim.com/teklif-formu.html\">teklif formunu</a>&nbsp;</u>doldurun.</p>\r\n', 2, 21, 'E-Ticaret Sistemleri', '', ''),
(42, 'İçerik Yönetim Sistemleri', '<h3><strong>İ&ccedil;erik Y&ouml;netim Sistemleri</strong></h3>\r\n\r\n<p><img alt=\"\" src=\"/Yavrular/cmsdemo/cms/std/ckeditor/plugins/kcfinder/uploads/images/i%C3%A7erik-y%C3%B6netim-sistemi-1132x670%402x.png\" style=\"float:left; height:196px; margin:10px; width:400px\" />İ&ccedil;erik y&ouml;netim sistemi, sitenizin geri planında &ccedil;alışan bir web sitesi y&ouml;netim programıdır. Sizin i&ccedil;in &ouml;zel olarak hazırlanan bir&nbsp;<a href=\"http://cgnyazilim.com/web-tasarim.html\" title=\"web tasarım\">web tasarım</a>a kolayca entegre edilir. CMS, bir hazır site (template) değildir. Size &ouml;zel konfig&uuml;re edilir. Her an internet olan her ortamdan kontrol edebildiğiniz bir sistemdir. İ&ccedil;erik y&ouml;netim sistemi kullanması olduk&ccedil;a kolay ve kullanıcı dostu bir aray&uuml;z ile tasarlanmıştır. Sitenizi y&ouml;netmek i&ccedil;in karışık kodlar, i&ccedil;inden &ccedil;ıkılmaz tasarım men&uuml;leri ile uğraşmazsınız. Genel olarak interneti kullanabilen herkes kolayca kullanabilir. İ&ccedil;erik y&ouml;netim sistemi ile dilediğiniz an sitenizin herhangi bir sayfasında değişiklik yapabilir, isterseniz site men&uuml;n&uuml;z&uuml; d&uuml;zenleyebilir, g&uuml;ncel bir haberi anında yayınlayabilir ve daha pek &ccedil;ok şey yapabilirsiniz.</p>\r\n\r\n<p>İnternet g&uuml;n&uuml;m&uuml;zde en hızlı değişen medya ortamıdır. İ&ccedil;erik y&ouml;netim sistemi, bu değişimin hızına ayak uydurarak web sitenizi &ouml;zg&uuml;r kılmak i&ccedil;in tasarlanmış, web sitesi ve bir kontrol sisteminden oluşan bir web programı paketidir. Asla kullanmayacağınız gereksiz &ouml;zelliklerden arındırılmış, kullanımı kolay ve sade bir y&ouml;netici ekranı ile tasarlanmıştır.</p>\r\n\r\n<p>M&uuml;hendislerimiz tarafından profesyonel bir şekilde verilecek olan hizmetlerimizden faydalanmak istiyorsanız l&uuml;tfen&nbsp;<u><a href=\"http://cgnyazilim.com/teklif-formu.html\">teklif formunu</a></u>&nbsp;doldurun.</p>\r\n', 3, 21, 'İçerik Yönetim Sistemleri', '', ''),
(43, 'Açık Kaynak Kodlu Yazılımlar', '<p><img alt=\"\" src=\"/cms/std/ckeditor/plugins/kcfinder/uploads/images/cgn-sosyal-medya-danismanligi.jpg\" style=\"float:left; height:141px; margin:10px; width:250px\" />İ&ccedil;erik y&ouml;netim sistemi, sitenizin geri planında &ccedil;alışan bir web sitesi y&ouml;netim programıdır. Sizin i&ccedil;in &ouml;zel olarak hazırlanmış bir tasarıma kolayca entegre edilir. CMS, bir hazır site (template) değildir. Size &ouml;zel konfig&uuml;re edilir. Her an internet olan her ortamdan kontrol edebildiğiniz bir sistemdir. İ&ccedil;erik y&ouml;netim sistemi kullanması olduk&ccedil;a kolay ve kullanıcı dostu bir aray&uuml;z ile tasarlanmıştır. Sitenizi y&ouml;netmek i&ccedil;in karışık kodlar, i&ccedil;inden &ccedil;ıkılmaz tasarım men&uuml;leri ile uğraşmazsınız. Genel olarak interneti kullanabilen herkes kolayca kullanabilir. İ&ccedil;erik y&ouml;netim sistemi ile dilediğiniz an sitenizin herhangi bir sayfasında değişiklik yapabilir, isterseniz site men&uuml;n&uuml;z&uuml; d&uuml;zenleyebilir, g&uuml;ncel bir haberi anında yayınlayabilir ve daha pek &ccedil;ok şey yapabilirsiniz.</p>\r\n\r\n<p>İnternet g&uuml;n&uuml;m&uuml;zde en hızlı değişen medya ortamıdır. İ&ccedil;erik y&ouml;netim sistemi, bu değişimin hızına ayak uydurarak web sitenizi &ouml;zg&uuml;r kılmak i&ccedil;in tasarlanmış, web sitesi ve bir kontrol sisteminden oluşan bir web programı paketidir. Asla kullanmayacağınız gereksiz &ouml;zelliklerden arındırılmış, kullanımı kolay ve sade bir y&ouml;netici ekranı ile tasarlanmıştır.</p>\r\n\r\n<p>M&uuml;hendislerimiz tarafından profesyonel bir şekilde verilecek olan hizmetlerimizden faydalanmak istiyorsanız l&uuml;tfen&nbsp;<u><a href=\"http://cgnyazilim.com/teklif-formu.html\">teklif formunu</a></u>&nbsp;doldurun.</p>\r\n', 4, 21, 'Açık Kaynak Kodlu Yazılımlar', '', ''),
(44, 'Yazılım Danışmanlığı', '<p><img alt=\"\" src=\"/cms/std/ckeditor/plugins/kcfinder/uploads/images/cgn-mobil-gelistirme.jpg\" style=\"float:left; height:200px; margin:10px; width:300px\" />İ&ccedil;erik y&ouml;netim sistemi, sitenizin geri planında &ccedil;alışan bir web sitesi y&ouml;netim programıdır. Sizin i&ccedil;in &ouml;zel olarak hazırlanmış bir tasarıma kolayca entegre edilir. CMS, bir hazır site (template) değildir. Size &ouml;zel konfig&uuml;re edilir. Her an internet olan her ortamdan kontrol edebildiğiniz bir sistemdir. İ&ccedil;erik y&ouml;netim sistemi kullanması olduk&ccedil;a kolay ve kullanıcı dostu bir aray&uuml;z ile tasarlanmıştır. Sitenizi y&ouml;netmek i&ccedil;in karışık kodlar, i&ccedil;inden &ccedil;ıkılmaz tasarım men&uuml;leri ile uğraşmazsınız. Genel olarak interneti kullanabilen herkes kolayca kullanabilir. İ&ccedil;erik y&ouml;netim sistemi ile dilediğiniz an sitenizin herhangi bir sayfasında değişiklik yapabilir, isterseniz site men&uuml;n&uuml;z&uuml; d&uuml;zenleyebilir, g&uuml;ncel bir haberi anında yayınlayabilir ve daha pek &ccedil;ok şey yapabilirsiniz.</p>\r\n\r\n<p>İnternet g&uuml;n&uuml;m&uuml;zde en hızlı değişen medya ortamıdır. İ&ccedil;erik y&ouml;netim sistemi, bu değişimin hızına ayak uydurarak web sitenizi &ouml;zg&uuml;r kılmak i&ccedil;in tasarlanmış, web sitesi ve bir kontrol sisteminden oluşan bir web programı paketidir. Asla kullanmayacağınız gereksiz &ouml;zelliklerden arındırılmış, kullanımı kolay ve sade bir y&ouml;netici ekranı ile tasarlanmıştır.</p>\r\n\r\n<p>M&uuml;hendislerimiz tarafından profesyonel bir şekilde verilecek olan hizmetlerimizden faydalanmak istiyorsanız l&uuml;tfen&nbsp;<u><a href=\"http://cgnyazilim.com/teklif-formu.html\">teklif formunu</a></u>&nbsp;doldurun.</p>\r\n', 5, 21, 'Yazılım Danışmanlığı', '', ''),
(47, 'Galeri', '', 0, 22, 'Galerimiz', 'galeri, test, deneme', ''),
(48, 'Projelerimiz', '', 1, 22, 'Projelerimiz', 'asdasd', 'asdasd'),
(49, 'Referanslar', '', 3, 22, 'Referanslar', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnpopup`
--

CREATE TABLE `35cgnpopup` (
  `showpopup` tinyint(1) NOT NULL,
  `grfx` tinyint(1) NOT NULL DEFAULT '1',
  `grfxlink` varchar(255) DEFAULT NULL,
  `video` tinyint(1) NOT NULL,
  `videolink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `35cgnpopup`
--

INSERT INTO `35cgnpopup` (`showpopup`, `grfx`, `grfxlink`, `video`, `videolink`) VALUES
(0, 0, 'uploads/popup.jpg', 1, 'https://www.youtube.com/embed/LqTnDTH5KY0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnpress`
--

CREATE TABLE `35cgnpress` (
  `id` int(11) NOT NULL,
  `desci` text,
  `date` datetime DEFAULT NULL,
  `link` varchar(300) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `keywords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `35cgnpress`
--

INSERT INTO `35cgnpress` (`id`, `desci`, `date`, `link`, `title`, `keywords`) VALUES
(35, '<p><img alt=\"\" src=\"/cms/std/ckeditor/plugins/kcfinder/uploads/images/responsive-tasar%C4%B1m.png\" style=\"float:left; height:400px; margin:10px; width:400px\" />Responsive tasarım, web sitesinin mobil ve tablet cihazlardan girildiğinde site i&ccedil;indeki resim, yazı gibi elementlerin ekran genişliğine g&ouml;re yeniden şekillenip ekrana tam oturması ile oluşur. Genellikle desktop, tablet ve mobil versiyon olarak 3 kademeli şekilde tasarlanır.</p>\r\n\r\n<p>Arama motorlarında responsive siteleri ciddi şekilde destekliyor. Bir sayfanın arama motorlarında hem kendi alan adı hem de m.alanadi.com gibi farklı subdomain altında bir mobil versiyonunun olmasındansa tek url ile sayfanın responsive yapılması daha uygun buluyor. &Ccedil;&uuml;nk&uuml; mobilden yapılan aramalarda genellikle arama motorları sayfanın mobil uyumluluğuna dikkat etmeksizin sonu&ccedil;ları sıralıyor.</p>\r\n\r\n<p>Mobilden web site ziyaretleri d&uuml;nyada %25 seviyelerine y&uuml;kseldi ve kısa s&uuml;rede daha da artacak. Bu sebeple responsive &ouml;zellikli web sitelerinde ciddi bir artış &ouml;ng&ouml;r&uuml;l&uuml;yor.</p>\r\n\r\n<p><strong>Responsive Web Tasarım Kurgusunu İhmal Etmeyin!</strong></p>\r\n\r\n<p>Responsive&nbsp;web sitesi hazırlayabilmek i&ccedil;in g&uuml;ncel web yazılım dilleri olan HTML5, CSS3 kodlama yapısından faydalıldığı gibi grid tasarım kullanılmasında b&uuml;y&uuml;k &ouml;nem vardır. Grid yapıda hazırlanan tasarımın mobile duyarlı olarak kodlanmasında hazır framework sistemleri kullanılablir. Bootstrap olarak adlandırılan bu g&uuml;ncel framework yapısı, kodlama aşamasında kodlayıcısına kolaylık sağlamasının yanında ziyaret&ccedil;ilere uyumlu ve duyarlı mobil web g&ouml;r&uuml;nt&uuml;lenmesini sağlamaktadır. Bu tasarım ve yazılım bilgilerine hakim olmak, web sitesini oluştururken bunları birlikte harmanlamak, &ccedil;alışmanın bitiminde oluşturduğunuz iş i&ccedil;in en verimli performansı sağlayacak ve hatta iş y&uuml;k&uuml;n&uuml;z&uuml; hafifleterek doğru sonucu elde etmenize olanak sunacaktır. İlk bakışta&nbsp;web sitesinin uygulamasını yapanlar&nbsp;i&ccedil;in ekstra iş y&uuml;k&uuml; getirmesi dezavantaj gibi g&ouml;r&uuml;nsede internet sitenizi ziyaret edebilecek insanların kullandıkları farklı aygıtların &ccedil;eşitli &ccedil;&ouml;z&uuml;n&uuml;rl&uuml;klerinde sağlıklı g&ouml;r&uuml;nt&uuml;lenmesi responsive web sitesinin en dikkat &ccedil;eken tarafıdır. Sağlıklı bir web sayfasına sahip olmak i&ccedil;in responsive tasarım olduk&ccedil;a kullanışlı bir alternatif olarak karşımıza &ccedil;ıkıyor.</p>\r\n', '2018-07-10 00:00:00', 'newsthumb/responsive-tasarım.png ', 'Responsive Tasarım Entegrasyonu', 'responsive, web, tasarım'),
(36, '<p>Her ge&ccedil;en g&uuml;n hayatımızda artan bir yeresahip olan sosyal mecraların<strong> </strong>firmalar&nbsp;a&ccedil;ısından <strong>pazarlama, reklam, tanıtım</strong> gibi&nbsp;etkileşimlerde payı giderek artan bir&nbsp;&ouml;neme sahiptir. Bu y&uuml;zden b&uuml;y&uuml;k&nbsp;firmalar sosyal medya konusunda, son&nbsp;yıllarda b&uuml;nyelerine <strong>sosyal medya&nbsp;uzmanları</strong> eklemektedirler. Sosyal&nbsp;medya y&ouml;neticileri, şirketlerin pazarlama, halkla ilişkiler ve tanıtım konularında &ccedil;alışmalarını&nbsp;organize ediyor, internet &uuml;zerinden firmanın imaj ve kimliğini oluşturuyorlar. Konusunda&nbsp;uzman ve kaliteli &ccedil;alışan ekipler sayesinde, sosyal medya &uuml;zerinden, etkili kampanyalar ve&nbsp;tanıtımlar yapılabilmektedir. Burada &ouml;nemli olan, attığınız adımların dikkatli ve ger&ccedil;ek&ccedil;i&nbsp;olmasıdır.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/Yavrular/cmsdemo/cms/std/ckeditor/plugins/kcfinder/uploads/images/68606089-software-wallpapers.jpg\" style=\"height:666px; width:1000px\" /></p>\r\n', '2016-05-12 00:00:00', 'newsthumb/68606089-software-wallpapers.jpg ', 'Teknolojik Gelişmelerimizin Devamı', 'teknoloji, gelişme, devamlılık'),
(38, '<p>Mobil &uuml;r&uuml;nlerimizi incelediniz mi? &Uuml;r&uuml;nlerimizin kalitesi ve feedbackleri &uuml;zerine değerlendirdiğimiz takdirde aldığımız ratingler bizim rekorlarımızın en parlak ışığı olmuştur.</p><p>Yazılımlarımıza g&uuml;venimiz tam, desteğimiz sizlere en yakın seviyededir ve &ouml;yle de olacaktır.</p><p>Mobil &uuml;r&uuml;nlerimizdeki farkındalık:</p><ul><li>Recursive Tasarımlar</li><li>Optimal &Ccedil;&ouml;z&uuml;mler</li><li>M&uuml;şteri Odaklı Tasarım</li><li>İletişim Kolaylığı</li><li>Sistem Y&ouml;netimi</li><li>Sizlerin İstediği En Uygun &Ccedil;&ouml;z&uuml;mler</li></ul><p>Hepsi bizimle ger&ccedil;ekleşebilir.&nbsp;</p>', '2014-04-01 00:00:00', 'newsthumb/cgn-mobil-gelistirme.jpg ', 'Mobil Satışındaki Rekorumuz', 'mobil, satış, rekor'),
(39, '<p><img alt=\"\" src=\"/cms/std/ckeditor/plugins/kcfinder/uploads/images/rq5.JPG\" style=\"float:left; height:147px; width:400px\" />Piyasanın en uygun &uuml;cretlendirmelerine sahip olduğu iddiası ile piyasaya 2011 yılında giriş yapan CGN Elektronik, kendi keskin iddiası ile en d&uuml;ş&uuml;k &uuml;cretlendirme piyasasını uygular. Sizin isteyeceğiniz &ouml;zellikler ve kriterler arasında her zaman en uygun &uuml;r&uuml;nleri getirebilmek bizim i&ccedil;in bir misyon haline gelmiştir. Misyonumuz yolunda ilerlediğimiz bu gelişimimizde CMS i&ccedil;erik y&ouml;netim sistemine ihtiya&ccedil; duyduk. CMS sayesinde sitemizde &ccedil;ok daha hızlı d&uuml;zenlemeler yapabildik. Hızlıca haberler girebildik, i&ccedil;eriğimizi y&ouml;netebildik. M&uuml;şterilerimize dinamik ve seri olarak &uuml;r&uuml;nlerimizi sunabildik. Artık m&uuml;şterilerimiz ile aramızdaki mesafe &ccedil;ok daha kısa.</p>\r\n', '2011-12-30 00:00:00', 'newsthumb/Kalıcıicerik-768x440.jpg ', 'Piyasanın En Uygun Elektronik Mağazası CGN', 'piyasa, uygun, elektronik, mağaza'),
(40, '<h2>Facebook sayfamız a&ccedil;ıldı.</h2>\r\n\r\n<p><img alt=\"\" src=\"/Yavrular/cmsdemo/cms/std/ckeditor/plugins/kcfinder/uploads/images/facebook-040618.jpg\" style=\"float:left; height:266px; margin:10px; width:400px\" />Sosyal medya denince bir&ccedil;oğumuzun aklına ilk gelen mecradır Facebook. Hatta bir&nbsp;kısmımız sosyal medyayı sadece Facebook olarak g&ouml;r&uuml;yor. Şu doğrudur ki Facebook g&uuml;n&nbsp;ge&ccedil;tik&ccedil;e b&uuml;y&uuml;meye devam ediyor ve sosyal medya i&ccedil;erisindeki yeri de aynı oranda artıyor.&nbsp;Her ge&ccedil;en g&uuml;n yeni yenilikler getirerek kendini vazge&ccedil;ilmez kılıyor.&nbsp;Şirketler i&ccedil;in Facebook i&ccedil;in dikkat edilmesi gereken birka&ccedil; hususu yazımızda&nbsp;bulabilirsiniz.</p>\r\n\r\n<p>Facebook ve diğer sosyal medya hesaplarınızın&nbsp;&ccedil;&ouml;z&uuml;m odaklı yapımız ve profesyonel hizmet anlayışımızla y&ouml;netilmesini istiyorsanız&nbsp;CGN Yazılım ve Bilişim Hizmetleri&nbsp;ile iletişime ge&ccedil;iniz.</p>\r\n', '2017-06-18 00:00:00', 'newsthumb/facebook-040618.jpg', 'Facebook Sayfamız Açıldı', 'facebook,sayfa');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnproduct`
--

CREATE TABLE `35cgnproduct` (
  `id` int(11) NOT NULL,
  `page` text,
  `urls` varchar(1000) DEFAULT NULL,
  `desci` text,
  `files` varchar(1000) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `code` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `video` varchar(1000) DEFAULT NULL,
  `display` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `35cgnproduct`
--

INSERT INTO `35cgnproduct` (`id`, `page`, `urls`, `desci`, `files`, `parent_id`, `code`, `name`, `type`, `url`, `video`, `display`) VALUES
(71, '<ul>\r\n	<li>8 GB</li>\r\n	<li><strong>Ekran Boyutu</strong>15,6 in&ccedil;</li>\r\n	<li><strong>Ekran Kartı</strong>Nvidia GeForce GTX1070</li>\r\n	<li><strong>İşletim Sistemi</strong>Windows 10 Home</li>\r\n	<li><strong>Ram (Sistem Belleği)</strong>16 GB</li>\r\n	<li><strong>Garanti Tipi</strong>Resmi Distrib&uuml;t&ouml;r Garantili</li>\r\n	<li><strong>İşlemci Tipi</strong>Intel Core i7</li>\r\n	<li><strong>Harddisk Kapasitesi</strong>1 TB</li>\r\n</ul>\r\n', 'urunresim/71/51675606_Alt01.jpg;urunresim/71/images.jpg;', '<ul>\r\n	<li>\r\n	<table>\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n				<table>\r\n					<tbody>\r\n						<tr>\r\n							<td>&nbsp;\r\n							<table>\r\n								<tbody>\r\n									<tr>\r\n										<th>10/100 Ethernet</th>\r\n										<td>Var</td>\r\n									</tr>\r\n									<tr>\r\n										<th>Bellek Hızı</th>\r\n										<td>2400 MHz</td>\r\n									</tr>\r\n									<tr>\r\n										<th>Bluetooth &Ouml;zelliği</th>\r\n										<td>Var</td>\r\n									</tr>\r\n									<tr>\r\n										<th>Cihaz Ağırlığı</th>\r\n										<td>2 - 4 kg</td>\r\n									</tr>\r\n									<tr>\r\n										<th>Dokunmatik Ekran</th>\r\n										<td>Yok</td>\r\n									</tr>\r\n									<tr>\r\n										<th>Ekran Boyutu</th>\r\n										<td>15,6 in&ccedil;</td>\r\n									</tr>\r\n									<tr>\r\n										<th>Ekran Kartı Bellek Tipi</th>\r\n										<td>GDDR5</td>\r\n									</tr>\r\n									<tr>\r\n										<th>Ekran Kartı Hafızası</th>\r\n										<td>8 GB</td>\r\n									</tr>\r\n									<tr>\r\n										<th>Ekran Kartı İşlemcisi</th>\r\n										<td>Nvidia GeForce GTX</td>\r\n									</tr>\r\n									<tr>\r\n										<th>Ekran Kartı Tipi</th>\r\n										<td>Y&uuml;ksek Seviye Harici Ekran Kartı</td>\r\n									</tr>\r\n									<tr>\r\n										<th>Ekran Kartı</th>\r\n										<td>Nvidia GeForce GTX1070</td>\r\n									</tr>\r\n									<tr>\r\n										<th>Ekran &Ouml;zelliği</th>\r\n										<td>Full HD</td>\r\n									</tr>\r\n									<tr>\r\n										<th>eMMC Kapasitesi</th>\r\n										<td>Yok</td>\r\n									</tr>\r\n									<tr>\r\n										<th>Garanti Tipi</th>\r\n										<td>Resmi Distrib&uuml;t&ouml;r Garantili</td>\r\n									</tr>\r\n									<tr>\r\n										<th>Harddisk Kapasitesi</th>\r\n										<td>1 TB</td>\r\n									</tr>\r\n									<tr>\r\n										<th>HDMI</th>\r\n										<td>Var</td>\r\n									</tr>\r\n									<tr>\r\n										<th>İşlemci Cache</th>\r\n										<td>8 MB Cache</td>\r\n									</tr>\r\n									<tr>\r\n										<th>İşlemci Hızı</th>\r\n										<td>3,8 GHz</td>\r\n									</tr>\r\n									<tr>\r\n										<th>İşlemci Nesli</th>\r\n										<td>7.Nesil</td>\r\n									</tr>\r\n									<tr>\r\n										<th>İşlemci Tipi</th>\r\n										<td>Intel Core i7</td>\r\n									</tr>\r\n									<tr>\r\n										<th>İşlemci</th>\r\n										<td>7700</td>\r\n									</tr>\r\n									<tr>\r\n										<th>İşletim Sistemi</th>\r\n										<td>Windows 10 Home</td>\r\n									</tr>\r\n									<tr>\r\n										<th>Kart Okuyucu</th>\r\n										<td>Var</td>\r\n									</tr>\r\n									<tr>\r\n									</tr>\r\n								</tbody>\r\n							</table>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	</li>\r\n</ul>\r\n', '       urunfiles/71/katalog.pdf;', 55, '489412748956', 'Exper XCellerator M5X-7070A2 Intel Core i7 77', 1, 'urunthumb/71/51675606_Alt01.jpg', 'https://www.youtube.com/watch?v=d_H054zwCOY', 0),
(73, 'CASPER Nirvana NSH MASAÜSTÜ BİLGİSAYAR 2 EL ÜRÜN', 'urunresim/73/111.jpg;urunresim/73/222.jpg;', 'İşlemci Tipi Intel Core İ5 İşletim Sistemi Windows 8 Ekran Kartı Belleği Paylaşımsız (8 GB) Marka Casper Platform TipiDesktop Sistem Belleği (Gb)4 Gb', ' ', 54, '7856485634', 'CASPER Nirvana NSH MASAÜSTÜ BİLGİSAYAR 2 EL Ü', 1, 'urunthumb/73/111.jpg', '', 0),
(74, 'Turbox TR900026 Intel Core i7 640M 8GB 500GB Freedos 18.5\" Masaüstü Bilgisayar', 'urunresim/74/9801538371634.jpg;', 'Bellek Hızı	1600 MHz\r\nBellek Yuvası	2\r\nBluetooth Özelliği	Yok\r\nEkran Kartı Markası	Intel\r\nEkran Kartı Modeli	Intel HD Graphics\r\nEkran Kartı Tipi	Dahili Ekran Kartı\r\neMMC Kapasitesi	Yok\r\nEthernet	Var\r\nGaranti Tipi	Resmi Distribütör Garantili\r\nHarddisk Kapasitesi	500 GB\r\nHDD Hızı	7200 RPM\r\nHDMI	Var\r\nİşlemci Cache	4 MB Cache\r\nİşlemci Hızı	2,13 GHz\r\nİşlemci Nesli	1.Nesil\r\nİşlemci Numarası	640M\r\nİşlemci Tipi	Intel Core i7\r\nİşletim Sistemi	Yok (Free Dos)\r\nKart Okuyucu	Yok\r\nKlavye ve Mouse	Var\r\nKullanım Amacı	Ofis\r\nMonitör	18,5 inç\r\nOptik Sürücü	Yok\r\nPower Supply	250 W\r\nRam (Sistem Belleği)	8 GB\r\nRam Kapasitesi	8 GB\r\nRam Tipi	DDR3\r\nSSD Kapasitesi	Yok\r\nUSB (Adet)	6 Adet\r\nWebcam	Yok\r\nWireless Özelliği	Yok\r\nDiğer\r\nGaranti Süresi (Ay)	24\r\nYurtdışına Satış	Yok\r\nStok kodu	HBV00000AB9LQ', ' ', 54, 'Turbox TR900026 Intel Core i7 640M 8GB 500GB ', 'Turbox TR900026 Intel Core i7 640M 8GB 500GB ', 1, 'urunthumb/74/9801538371634.jpg', '', 0),
(75, '<p><strong>VESTEL BM-401 X BULAŞIK MAKİNESİ</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Genel &Ouml;zellikler</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>&Uuml;r&uuml;n Tipi : Ekranlı</p>\r\n	</li>\r\n	<li>\r\n	<p>Program Sayısı : 4</p>\r\n	</li>\r\n	<li>\r\n	<p>Ekran Tipi : LED Ekran</p>\r\n	</li>\r\n	<li>\r\n	<p>Paslanmaz &Ccedil;elik İ&ccedil; G&ouml;vde : Var</p>\r\n	</li>\r\n	<li>\r\n	<p>Kalan S&uuml;re G&ouml;stergesi : Var</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Program Sayısı : 4 Programlı</p>\r\n	</li>\r\n	<li>\r\n	<p>Bulaşık Kapasitesi : 12 Kişilik</p>\r\n	</li>\r\n	<li>\r\n	<p>Metal Filtre : Var</p>\r\n	</li>\r\n	<li>\r\n	<p>Program Takip G&ouml;stergesi : Var</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', 'urunresim/75/vestel-beyaz-esya-ceyiz-seti-inox__0985520864084890.png;urunresim/75/vestel-beyaz-esya-seti-inox__1373300707019477.png;', '<p><strong>Fiziksel Bilgiler</strong></p>\n\n<p><strong>&Uuml;r&uuml;n Boyutları (cm) (YxGxD) : 84,5 x 59,6 x 59,8</strong></p>\n\n<p><strong>Renk : Inox</strong></p>\n\n<p><strong>Performans / T&uuml;ketim Bilgileri</strong></p>\n\n<p><strong>Enerji Verimliliği Performansı : A+</strong></p>\n\n<p><strong>Yıllık Enerji T&uuml;ketimi (kWh/Yıl) : 285</strong></p>\n\n<p><strong>Ses Seviyesi (dBA) : 49</strong></p>\n\n<p><strong>Kurutma Performansı : A</strong></p>\n\n<p><strong>Akım (A) : 10</strong></p>\n\n<p><strong>Su T&uuml;ketimi (lt) : 12 lt</strong></p>\n\n<p><strong>Yıllık Su T&uuml;ketimi (lt/yıl) : 3360</strong></p>\n\n<p><strong>Kurutma Sistemi : Aktif Kurutma</strong></p>\n\n<p><strong>G&uuml;&ccedil; (W) : 220-240 / 50</strong></p>\n\n<p><strong>Programlar</strong></p>\n\n<p><strong>Hızlı 30 dk (40 ?C) : Var</strong></p>\n\n<p><strong>Yoğun 70 ?C : Var</strong></p>\n\n<p><strong>Super 50 dk (65 ?C) : Var</strong></p>\n\n<p><strong>Ekonomik 50 ?C : Var</strong></p>\n\n<p><stro', ' ', 60, '864864546464', 'VESTEL BM-401 X BULAŞIK MAKİNESİ', 1, 'urunthumb/75/vestel-beyaz-esya-seti-inox__1373300707019477.png', '', 0),
(76, '<p><strong>Genel &Ouml;zellikler</strong></p><p>&Uuml;r&uuml;n Tipi: Ekransız</p><p>Program Sayısı: 3</p><p>Metal Filtre: Var</p><p>Program Takip G&ouml;stergesi: Var</p><p>Program Sayısı: 3 Programlı</p><p>Bulaşık Kapasitesi: 12 Kişilik</p><p>Paslanmaz &Ccedil;elik İ&ccedil; G&ouml;vde: Var</p><p>&nbsp;</p>', 'urunresim/76/353634774_tn50_0.jpg;', '<p><strong>Genel &Ouml;zellikler</strong></p><p>&Uuml;r&uuml;n Tipi: Ekransız</p><p>Program Sayısı: 3</p><p>Metal Filtre: Var</p><p>Program Takip G&ouml;stergesi: Var</p><p>Program Sayısı: 3 Programlı</p><p>Bulaşık Kapasitesi: 12 Kişilik</p><p>Paslanmaz &Ccedil;elik İ&ccedil; G&ouml;vde: Var</p><p><strong>Fiziksel Bilgiler</strong></p><p>&Uuml;r&uuml;n Boyutları (cm) (YxGxD): 84,5 x 59,6 x 59,8</p><p>Renk: Beyaz</p><p>Renk / Materyal: Beyaz</p><p><strong>Performans / T&uuml;ketim Bilgileri</strong></p><p>Enerji Verimliliği Performansı: A++</p><p>Yıllık Enerji T&uuml;ketimi (kWh/Yıl): 285</p><p>Ses Seviyesi (dBA): 52</p><p>Kurutma Performansı: A</p><p>Akım (A): 10</p><p>Su T&uuml;ketimi (lt): 12 lt</p><p>Yıllık Su T&uuml;ketimi (lt/yıl): 3360</p><p>Kurutma Sistemi: Doğal Kurutma</p><p>G&uuml;&ccedil; (W): 220-240 / 50</p><p><strong>Programlar</strong></p><p>Super 50 dk (65 ?C): Var</p><p>Ekonomik 50 ?C: Var</p><p>Yoğun 70 ?C: Var</p><p><strong>Fonksiyon ve Teknolojiler</strong></p><p>Az', ' ', 60, '5643241653', 'VESTEL BM-301 A++ Bulaşık Makinesi', 1, 'urunthumb/76/353634774_tn50_0.jpg', '', 1),
(77, '<ul>\r\n	<li>\r\n	<p>.Solo Kullanım Tipi</p>\r\n	</li>\r\n	<li>\r\n	<p>.Alttan Donduruculu Buzdolabı Tipi</p>\r\n	</li>\r\n	<li>\r\n	<p>.No-Frost Soğutma Sistemi</p>\r\n	</li>\r\n	<li>\r\n	<p>.457 lt Toplam Net Hacim</p>\r\n	</li>\r\n	<li>\r\n	<p>.347 lt Soğutucu Net Hacmi</p>\r\n	</li>\r\n	<li>\r\n	<p>.110 lt Dondurucu Net Hacmi</p>\r\n	</li>\r\n	<li>\r\n	<p>.Inox Renk</p>\r\n	</li>\r\n	<li>\r\n	<p>.A+ Enerji Sınıfı</p>\r\n	</li>\r\n</ul>\r\n', 'urunresim/77/Ekran Alıntısı.jpg;urunresim/77/337355398_tn50_1.jpg;', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Derinlik (cm)</th>\r\n			<td>75</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Dondurma Kapasitesi Kg/ 24 Saat</th>\r\n			<td>6</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Dondurucu B&ouml;lme Kapasitesi (Lt)</th>\r\n			<td>110</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Dondurucu &Ouml;zelliği</th>\r\n			<td>No Frost</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Enerji Sınıfı</th>\r\n			<td>A+</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Genişlik (cm)</th>\r\n			<td>78</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Hacim (L)</th>\r\n			<td>457</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Kontrol Paneli</th>\r\n			<td>Dijital</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Kullanım Şekli</th>\r\n			<td>Solo</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ses Seviyesi (dB)</th>\r\n			<td>43</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Soğutucu B&ouml;lme Kapasitesi (Lt)</th>\r\n			<td>347</td>\r\n		</tr>\r\n		<tr>\r\n			<th>&Uuml;retici</th>\r\n			<td>Indesit</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', ' ', 60, 'Hotpoint E2BY 19223 X F TK A+ 474 Lt NoFrost ', 'Hotpoint E2BY 19223 X F TK A+ 474 Lt NoFrost ', 1, 'urunthumb/77/Ekran Alıntısı.jpg', '', 0),
(78, '<p>Asus X540ya-xo185d E1-7010 2gb 500gb 15.6 Dos; Ekran Boyutu:15.6&#39;&#39; İn&ccedil; İşletim Sistemi:Linux Marka:Asus İşlemci:AMD E Series Disk Kapasitesi:500 Gb &ouml;zellikleri ve en uygun fiyatlarıyla n11&#39;de Diz&uuml;st&uuml; Bilgisayar kategorisinde. - Diz&uuml;st&uuml; Bilgisayar</p>\r\n', 'urunresim/78/1.jpeg;urunresim/78/2.jpeg;urunresim/78/3.jpeg;urunresim/78/4.jpeg;', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>10/100 Ethernet</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Bellek Hızı</th>\r\n			<td>1600 MHz</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Bellek Yuvası</th>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Bluetooth &Ouml;zelliği</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Boyutlar</th>\r\n			<td>38,1 x 25,2 x 2,72 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Cihaz Ağırlığı</th>\r\n			<td>2 kg ve Altı</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Dokunmatik Ekran</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Boyutu</th>\r\n			<td>15,6 in&ccedil;</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı Bellek Tipi</th>\r\n			<td>Onboard</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı Hafızası</th>\r\n			<td>Paylaşımlı</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı İşlemcisi</th>\r\n			<td>AMD</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı Tipi</th>\r\n			<td>Dahili Ekran Kartı</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı</th>\r\n			<td>Intel HD Graphics</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran &Ouml;zelliği</th>\r\n			<td>HD</td>\r\n		</tr>\r\n		<tr>\r\n			<th>eMMC Kapasitesi</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Garanti Tipi</th>\r\n			<td>Resmi Distrib&uuml;t&ouml;r Garantili</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Harddisk Kapasitesi</th>\r\n			<td>500 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>HDD Hızı</th>\r\n			<td>5400 RPM</td>\r\n		</tr>\r\n		<tr>\r\n			<th>HDMI</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Cache</th>\r\n			<td>1 MB Cache</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Hızı</th>\r\n			<td>1,5 GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Tipi</th>\r\n			<td>AMD</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci</th>\r\n			<td>7010</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşletim Sistemi</th>\r\n			<td>Yok (Free Dos)</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Kart Okuyucu</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Klavye</th>\r\n			<td>Q T&uuml;rk&ccedil;e</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Kullanım Amacı</th>\r\n			<td>Ev Kullanıcıları - &Ouml;ğrenci</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Max Ekran &Ccedil;&ouml;z&uuml;n&uuml;rl&uuml;ğ&uuml;</th>\r\n			<td>1366 x 768</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Optik S&uuml;r&uuml;c&uuml;</th>\r\n			<td>DVD RW</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Parmak İzi Okuyucu</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Pil</th>\r\n			<td>3 H&uuml;creli</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ram (Sistem Belleği)</th>\r\n			<td>2 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ram Tipi</th>\r\n			<td>DDR3</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Renk</th>\r\n			<td>Siyah</td>\r\n		</tr>\r\n		<tr>\r\n			<th>SSD Kapasitesi</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Şarjlı Kullanım S&uuml;resi</th>\r\n			<td>4 - 6 Saat</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Usb 2.0</th>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<th>USB 3.0</th>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<th>USB 3.1</th>\r\n			<td>1 Adet</td>\r\n		</tr>\r\n		<tr>\r\n			<th>&Uuml;r&uuml;n Modeli</th>\r\n			<td>Notebook</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Webcam</th>\r\n			<td>Var</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', ' ', 55, '43243223324423', 'Asus Vivobook X540YA-XO185D AMD E1 7010 2GB 5', 1, 'urunthumb/78/1.jpeg', '', 0),
(79, '<ul>\r\n	<li>16 GB</li>\r\n	<li><strong>Ekran Boyutu</strong>17,3 in&ccedil;</li>\r\n	<li><strong>Ekran Kartı</strong>Nvidia GeForce GTX1080 SLI</li>\r\n	<li><strong>İşletim Sistemi</strong>Windows 10 Home</li>\r\n	<li><strong>Ram (Sistem Belleği)</strong>64 GB</li>\r\n	<li><strong>Garanti Tipi</strong>Resmi Distrib&uuml;t&ouml;r Garantili</li>\r\n	<li><strong>İşlemci Tipi</strong>Intel Core i7</li>\r\n	<li><strong>Harddisk Kapasitesi</strong>Yok</li>\r\n</ul>\r\n', 'urunresim/79/1.jpg;urunresim/79/2.jpg;urunresim/79/3.jpg;', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>10/100 Ethernet</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Bellek Hızı</th>\r\n			<td>3000 MHz</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Bellek Yuvası</th>\r\n			<td>4</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Bluetooth &Ouml;zelliği</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Boyutlar</th>\r\n			<td>428 x 308 x 47,2 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Cihaz Ağırlığı</th>\r\n			<td>4 kg ve &Uuml;st&uuml;</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Dokunmatik Ekran</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Boyutu</th>\r\n			<td>17,3 in&ccedil;</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı Bellek Tipi</th>\r\n			<td>GDDR5</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı Hafızası</th>\r\n			<td>16 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı İşlemcisi</th>\r\n			<td>Nvidia GeForce GTX</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı Tipi</th>\r\n			<td>Y&uuml;ksek Seviye Harici Ekran Kartı</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı</th>\r\n			<td>Nvidia GeForce GTX1080 SLI</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran &Ouml;zelliği</th>\r\n			<td>4K Ultra HD</td>\r\n		</tr>\r\n		<tr>\r\n			<th>eMMC Kapasitesi</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Garanti Tipi</th>\r\n			<td>Resmi Distrib&uuml;t&ouml;r Garantili</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Harddisk Kapasitesi</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>HDD Hızı</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>HDMI</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Cache</th>\r\n			<td>12 MB Cache</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Hızı</th>\r\n			<td>4,7 GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Nesli</th>\r\n			<td>8.Nesil</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Tipi</th>\r\n			<td>Intel Core i7</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci</th>\r\n			<td>8700K</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşletim Sistemi</th>\r\n			<td>Windows 10 Home</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Kart Okuyucu</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Klavye</th>\r\n			<td>Numerik Tuşlu Aydınlatmalı, Q T&uuml;rk&ccedil;e</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Kullanım Amacı</th>\r\n			<td>Ev Kullanıcıları - &Ouml;ğrenci, Oyun ve Eğlence</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Max Ekran &Ccedil;&ouml;z&uuml;n&uuml;rl&uuml;ğ&uuml;</th>\r\n			<td>3840 x 2160</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Optik S&uuml;r&uuml;c&uuml;</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Parmak İzi Okuyucu</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Pil</th>\r\n			<td>8 H&uuml;creli</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ram (Sistem Belleği)</th>\r\n			<td>64 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ram Tipi</th>\r\n			<td>DDR4</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Renk</th>\r\n			<td>Siyah</td>\r\n		</tr>\r\n		<tr>\r\n			<th>SSD Kapasitesi</th>\r\n			<td>11 TB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Şarjlı Kullanım S&uuml;resi</th>\r\n			<td>6 Saat ve &Uuml;st&uuml;</td>\r\n		</tr>\r\n		<tr>\r\n			<th>USB 3.0</th>\r\n			<td>3</td>\r\n		</tr>\r\n		<tr>\r\n			<th>USB 3.1</th>\r\n			<td>1 Adet</td>\r\n		</tr>\r\n		<tr>\r\n			<th>&Uuml;r&uuml;n Modeli</th>\r\n			<td>Oyun Bilgisayarları</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Webcam</th>\r\n			<td>Var</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', ' ', 55, '3653264535463', 'Monster Semruk S7 V6.1.1 Intel Core i7 8700K ', 1, 'urunthumb/79/1.jpg', '', 0),
(80, '<ul>\r\n	<li><strong>Ekran Kartı Hafızası</strong>2 GB</li>\r\n	<li><strong>Ekran Boyutu</strong>14 in&ccedil;</li>\r\n	<li><strong>Ekran Kartı</strong>Nvidia GeForce GT940MX</li>\r\n	<li><strong>İşletim Sistemi</strong>Windows 10 Home</li>\r\n	<li><strong>Ram (Sistem Belleği)</strong>8 GB</li>\r\n	<li><strong>Garanti Tipi</strong>Resmi Distrib&uuml;t&ouml;r Garantili</li>\r\n	<li><strong>İşlemci Tipi</strong>Intel Core i5</li>\r\n	<li><strong>Harddisk Kapasitesi</strong>Yok</li>\r\n</ul>\r\n', 'urunresim/80/9836964544562.jpg;urunresim/80/9836964577330.jpg;urunresim/80/9836964610098.jpg;', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>10/100 Ethernet</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Bellek Hızı</th>\r\n			<td>2133 MHz</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Bellek Yuvası</th>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Bluetooth &Ouml;zelliği</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Boyutlar</th>\r\n			<td>33,58 x 23,48 x 1,99 cm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Cihaz Ağırlığı</th>\r\n			<td>2 kg ve Altı</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Dokunmatik Ekran</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Boyutu</th>\r\n			<td>14 in&ccedil;</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı Bellek Tipi</th>\r\n			<td>GDDR5</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı Hafızası</th>\r\n			<td>2 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı İşlemcisi</th>\r\n			<td>Nvidia GeForce</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı Tipi</th>\r\n			<td>Harici Ekran Kartı</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı</th>\r\n			<td>Nvidia GeForce GT940MX</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran &Ouml;zelliği</th>\r\n			<td>Full HD</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Panel Tipi</th>\r\n			<td>IPS</td>\r\n		</tr>\r\n		<tr>\r\n			<th>eMMC Kapasitesi</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Garanti Tipi</th>\r\n			<td>Resmi Distrib&uuml;t&ouml;r Garantili</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Harddisk Kapasitesi</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>HDMI</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Cache</th>\r\n			<td>3 MB Cache</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Hızı</th>\r\n			<td>3,1 GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Nesli</th>\r\n			<td>7.Nesil</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Tipi</th>\r\n			<td>Intel Core i5</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci</th>\r\n			<td>7200U</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşletim Sistemi</th>\r\n			<td>Windows 10 Home</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Kart Okuyucu</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Klavye</th>\r\n			<td>Q T&uuml;rk&ccedil;e</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Kullanım Amacı</th>\r\n			<td>Ev Kullanıcıları - &Ouml;ğrenci</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Max Ekran &Ccedil;&ouml;z&uuml;n&uuml;rl&uuml;ğ&uuml;</th>\r\n			<td>1920 x 1080</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Optik S&uuml;r&uuml;c&uuml;</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Parmak İzi Okuyucu</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Pil</th>\r\n			<td>3 H&uuml;creli</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ram (Sistem Belleği)</th>\r\n			<td>8 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ram Tipi</th>\r\n			<td>DDR4</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Renk</th>\r\n			<td>Beyaz</td>\r\n		</tr>\r\n		<tr>\r\n			<th>SSD Kapasitesi</th>\r\n			<td>256 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Şarjlı Kullanım S&uuml;resi</th>\r\n			<td>3 Saat ve Altı</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Usb 2.0</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>USB 3.0</th>\r\n			<td>2</td>\r\n		</tr>\r\n		<tr>\r\n			<th>USB 3.1</th>\r\n			<td>1 Adet</td>\r\n		</tr>\r\n		<tr>\r\n			<th>&Uuml;r&uuml;n Modeli</th>\r\n			<td>Ultrabook</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Webcam</th>\r\n			<td>Var</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', ' ', 55, '456645645465465', 'HP Pavilion 14-BK004NT Intel Core i5 7200U 8', 1, 'urunthumb/80/9836964544562.jpg', '', 0),
(81, '<ul>\r\n	<li><strong>Ekran Kartı Hafızası</strong>Paylaşımlı</li>\r\n	<li><strong>Ekran Boyutu</strong>11,6 in&ccedil;</li>\r\n	<li><strong>Ekran Kartı</strong>Intel HD Graphics</li>\r\n	<li><strong>İşletim Sistemi</strong>Windows 10 Home</li>\r\n	<li><strong>Ram (Sistem Belleği)</strong>4 GB</li>\r\n	<li><strong>Garanti Tipi</strong>Resmi Distrib&uuml;t&ouml;r Garantili</li>\r\n	<li><strong>İşlemci Tipi</strong>Intel Celeron</li>\r\n	<li><strong>Harddisk Kapasitesi</strong>Yok</li>\r\n</ul>\r\n', 'urunresim/81/9787956559922.jpg;urunresim/81/9787956592690.jpg;urunresim/81/9787956625458.jpg;urunresim/81/9790964596786.jpg;', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>10/100 Ethernet</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Bellek Hızı</th>\r\n			<td>1600 MHz</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Bluetooth &Ouml;zelliği</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Cihaz Ağırlığı</th>\r\n			<td>2 kg ve Altı</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Dokunmatik Ekran</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Boyutu</th>\r\n			<td>11,6 in&ccedil;</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı Bellek Tipi</th>\r\n			<td>Onboard</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı Hafızası</th>\r\n			<td>Paylaşımlı</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı İşlemcisi</th>\r\n			<td>Intel HD Graphics</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı Tipi</th>\r\n			<td>Dahili Ekran Kartı</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı</th>\r\n			<td>Intel HD Graphics</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran &Ouml;zelliği</th>\r\n			<td>HD</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Panel Tipi</th>\r\n			<td>TN</td>\r\n		</tr>\r\n		<tr>\r\n			<th>eMMC Kapasitesi</th>\r\n			<td>64 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Garanti Tipi</th>\r\n			<td>Resmi Distrib&uuml;t&ouml;r Garantili</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Harddisk Kapasitesi</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>HDD Hızı</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>HDMI</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Cache</th>\r\n			<td>2 MB Cache</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Hızı</th>\r\n			<td>2,4 GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Tipi</th>\r\n			<td>Intel Celeron</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci</th>\r\n			<td>N3350</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşletim Sistemi</th>\r\n			<td>Windows 10 Home</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Kart Okuyucu</th>\r\n			<td>Belirtilmemiş</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Klavye</th>\r\n			<td>Q T&uuml;rk&ccedil;e</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Kullanım Amacı</th>\r\n			<td>Ofis ve İş</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Max Ekran &Ccedil;&ouml;z&uuml;n&uuml;rl&uuml;ğ&uuml;</th>\r\n			<td>1366 x 768</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Optik S&uuml;r&uuml;c&uuml;</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Parmak İzi Okuyucu</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Pil</th>\r\n			<td>2 H&uuml;creli</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ram (Sistem Belleği)</th>\r\n			<td>4 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ram Tipi</th>\r\n			<td>DDR3</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Renk</th>\r\n			<td>Beyaz</td>\r\n		</tr>\r\n		<tr>\r\n			<th>SSD Kapasitesi</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Şarjlı Kullanım S&uuml;resi</th>\r\n			<td>4 - 6 Saat</td>\r\n		</tr>\r\n		<tr>\r\n			<th>&Uuml;r&uuml;n Modeli</th>\r\n			<td>İkisi Bir Arada</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Webcam</th>\r\n			<td>Var</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', ' ', 55, '56654654654645465654', 'Lenovo Yoga 310-11IAP Intel Celeron N3350 4GB', 1, 'urunthumb/81/9787956559922.jpg', '', 0),
(82, '<ul>\r\n	<li><strong>Ekran Kartı Hafızası</strong>8 GB</li>\r\n	<li><strong>Ekran Boyutu</strong>18,4 in&ccedil;</li>\r\n	<li><strong>Ekran Kartı</strong>Nvidia GeForce GTX1080</li>\r\n	<li><strong>İşletim Sistemi</strong>Windows 10 Home</li>\r\n	<li><strong>Ram (Sistem Belleği)</strong>64 GB</li>\r\n	<li><strong>Garanti Tipi</strong>Resmi Distrib&uuml;t&ouml;r Garantili</li>\r\n	<li><strong>İşlemci Tipi</strong>Intel Core i7</li>\r\n	<li><strong>Harddisk Kapasitesi</strong>1 TB</li>\r\n</ul>\r\n', 'urunresim/82/9581637238834.jpg;urunresim/82/9581637271602.jpg;urunresim/82/9581637304370.jpg;urunresim/82/9581637337138.jpg;urunresim/82/9581637369906.jpg;', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>10/100 Ethernet</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Bellek Hızı</th>\r\n			<td>2400 MHz</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Bellek Yuvası</th>\r\n			<td>4</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Bluetooth &Ouml;zelliği</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Boyutlar</th>\r\n			<td>458 x 339 x 69 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Cihaz Ağırlığı</th>\r\n			<td>4 kg ve &Uuml;st&uuml;</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Dokunmatik Ekran</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Boyutu</th>\r\n			<td>18,4 in&ccedil;</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı Bellek Tipi</th>\r\n			<td>GDDR5X</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı Hafızası</th>\r\n			<td>8 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı İşlemcisi</th>\r\n			<td>Nvidia GeForce GTX</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı Tipi</th>\r\n			<td>Y&uuml;ksek Seviye Harici Ekran Kartı</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı</th>\r\n			<td>Nvidia GeForce GTX1080</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran &Ouml;zelliği</th>\r\n			<td>Full HD</td>\r\n		</tr>\r\n		<tr>\r\n			<th>eMMC Kapasitesi</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Garanti Tipi</th>\r\n			<td>Resmi Distrib&uuml;t&ouml;r Garantili</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Harddisk Kapasitesi</th>\r\n			<td>1 TB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>HDD Hızı</th>\r\n			<td>7200 RPM</td>\r\n		</tr>\r\n		<tr>\r\n			<th>HDMI</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Cache</th>\r\n			<td>8 MB Cache</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Hızı</th>\r\n			<td>2,9 GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Nesli</th>\r\n			<td>7.Nesil</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Tipi</th>\r\n			<td>Intel Core i7</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci</th>\r\n			<td>7920HQ</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşletim Sistemi</th>\r\n			<td>Windows 10 Home</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Kart Okuyucu</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Klavye</th>\r\n			<td>Numerik Tuşlu Aydınlatmalı, Q T&uuml;rk&ccedil;e</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Kullanım Amacı</th>\r\n			<td>Ev Kullanıcıları - &Ouml;ğrenci, Oyun ve Eğlence, Tasarım</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Max Ekran &Ccedil;&ouml;z&uuml;n&uuml;rl&uuml;ğ&uuml;</th>\r\n			<td>1920 x 1080</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Optik S&uuml;r&uuml;c&uuml;</th>\r\n			<td>DVD Yazıcı</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Paket İ&ccedil;eriği</th>\r\n			<td>Notebook + Mouse</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Parmak İzi Okuyucu</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Pil</th>\r\n			<td>8 H&uuml;creli</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ram (Sistem Belleği)</th>\r\n			<td>64 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ram Tipi</th>\r\n			<td>DDR4</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Renk</th>\r\n			<td>Siyah</td>\r\n		</tr>\r\n		<tr>\r\n			<th>SSD Kapasitesi</th>\r\n			<td>512 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Usb 2.0</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>USB 3.0</th>\r\n			<td>5</td>\r\n		</tr>\r\n		<tr>\r\n			<th>USB 3.1</th>\r\n			<td>1 Adet</td>\r\n		</tr>\r\n		<tr>\r\n			<th>&Uuml;r&uuml;n Modeli</th>\r\n			<td>Oyun Bilgisayarları</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', ' ', 55, '7999899', 'MSI GT83VR 7RF(Titan SLI)-201TR Intel Core i7', 1, 'urunthumb/82/9581637238834.jpg', '', 1),
(83, '<ul>\r\n	<li><strong>Ekran Kartı Hafızası</strong>2 GB</li>\r\n	<li><strong>Ekran Boyutu</strong>15,6 in&ccedil;</li>\r\n	<li><strong>Ekran Kartı</strong>Nvidia GeForce GTX1050</li>\r\n	<li><strong>İşletim Sistemi</strong>Yok (Free Dos)</li>\r\n	<li><strong>Ram (Sistem Belleği)</strong>8 GB</li>\r\n	<li><strong>Garanti Tipi</strong>Resmi Distrib&uuml;t&ouml;r Garantili</li>\r\n	<li><strong>İşlemci Tipi</strong>Intel Core i7</li>\r\n	<li><strong>Harddisk Kapasitesi</strong>1 TB</li>\r\n</ul>\r\n', 'urunresim/83/9806349434930.jpg;urunresim/83/9806349467698.jpg;urunresim/83/9806349500466.jpg;urunresim/83/9806349533234.jpg;urunresim/83/9809618174002.jpg;', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>10/100 Ethernet</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Bellek Hızı</th>\r\n			<td>2400 MHz</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Bluetooth &Ouml;zelliği</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Boyutlar</th>\r\n			<td>378 x 267 x 26,9 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Cihaz Ağırlığı</th>\r\n			<td>2 - 4 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Dokunmatik Ekran</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Boyut Aralığı</th>\r\n			<td>15 - 15,9 in&ccedil;</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Boyutu</th>\r\n			<td>15,6 in&ccedil;</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı Bellek Tipi</th>\r\n			<td>GDDR5</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı Hafızası</th>\r\n			<td>2 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı İşlemcisi</th>\r\n			<td>Nvidia GeForce GTX</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı Tipi</th>\r\n			<td>Y&uuml;ksek Seviye Harici Ekran Kartı</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Kartı</th>\r\n			<td>Nvidia GeForce GTX1050</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran &Ouml;zelliği</th>\r\n			<td>Full HD</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ekran Panel Tipi</th>\r\n			<td>TN</td>\r\n		</tr>\r\n		<tr>\r\n			<th>eMMC Kapasitesi</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Garanti Tipi</th>\r\n			<td>Resmi Distrib&uuml;t&ouml;r Garantili</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Harddisk Kapasitesi</th>\r\n			<td>1 TB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>HDMI</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Cache</th>\r\n			<td>6 MB Cache</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Hızı</th>\r\n			<td>3,8 GHz</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Nesli</th>\r\n			<td>7.Nesil</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci Tipi</th>\r\n			<td>Intel Core i7</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşlemci</th>\r\n			<td>7700HQ</td>\r\n		</tr>\r\n		<tr>\r\n			<th>İşletim Sistemi</th>\r\n			<td>Yok (Free Dos)</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Kart Okuyucu</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Klavye</th>\r\n			<td>Numerik Tuşlu Aydınlatmalı, Q T&uuml;rk&ccedil;e</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Kullanım Amacı</th>\r\n			<td>Ev Kullanıcıları - &Ouml;ğrenci, Oyun ve Eğlence</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Max Ekran &Ccedil;&ouml;z&uuml;n&uuml;rl&uuml;ğ&uuml;</th>\r\n			<td>1920 x 1080</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Optik S&uuml;r&uuml;c&uuml;</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Parmak İzi Okuyucu</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ram (Sistem Belleği)</th>\r\n			<td>8 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Ram Tipi</th>\r\n			<td>DDR4</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Renk</th>\r\n			<td>Siyah</td>\r\n		</tr>\r\n		<tr>\r\n			<th>SSD Kapasitesi</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Usb 2.0</th>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<th>USB 3.0</th>\r\n			<td>2</td>\r\n		</tr>\r\n		<tr>\r\n			<th>USB 3.1</th>\r\n			<td>1 Adet</td>\r\n		</tr>\r\n		<tr>\r\n			<th>&Uuml;r&uuml;n Modeli</th>\r\n			<td>Oyun Bilgisayarları</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Webcam</th>\r\n			<td>Var</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', ' ', 55, '654546654654456654', 'Casper Nirvana C900.7700-8TG0X Intel Core i7 ', 1, 'urunthumb/83/9809618174002.jpg', '', 0),
(84, '<ul>\r\n	<li><strong>G&uuml;&ccedil; (W)</strong>1200</li>\r\n	<li><strong>Renk</strong>Lal</li>\r\n	<li><strong>Taşma Emniyeti</strong>Var&nbsp;&nbsp;</li>\r\n	<li><strong>Sesli İkaz</strong>Var</li>\r\n	<li><strong>Otomatik Kapanma</strong>Var</li>\r\n	<li><strong>Fincan Kapasitesi</strong>4</li>\r\n	<li><strong>Su Kapasitesi</strong>1000 ml</li>\r\n</ul>\r\n', 'urunresim/84/9793230209074.jpg;', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Aşırı Isınma Emniyeti</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Damlama Emniyeti</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Fincan Kapasitesi</th>\r\n			<td>4</td>\r\n		</tr>\r\n		<tr>\r\n			<th>G&uuml;&ccedil; (W)</th>\r\n			<td>1200</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Otomatik Kapanma</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Renk</th>\r\n			<td>Lal</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Sesli İkaz</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Su Bitme Emniyeti</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Su Kapasitesi</th>\r\n			<td>1000 ml</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Su Seviyesi G&ouml;stergesi</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Taşma Emniyeti</th>\r\n			<td>Var</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', ' ', 61, '4432423423423', 'Arçelik K 3190 P Lal Çiftli Telve', 1, 'urunthumb/84/9793230209074.jpg', '', 0),
(85, '<ul>\r\n	<li><strong>G&uuml;&ccedil; (W)</strong>800</li>\r\n	<li><strong>Renk</strong>Beyaz</li>\r\n	<li><strong>Taşma Emniyeti</strong>Var</li>\r\n	<li><strong>Sesli İkaz</strong>Yok</li>\r\n	<li><strong>Otomatik Kapanma</strong>Var</li>\r\n	<li><strong>Fincan Kapasitesi</strong>4</li>\r\n	<li><strong>Su Kapasitesi</strong>300 ml</li>\r\n</ul>\r\n', 'urunresim/85/9793230209074.jpg;', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Aşırı Isınma Emniyeti</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Damlama Emniyeti</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Fincan Kapasitesi</th>\r\n			<td>4</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Garanti Notu</th>\r\n			<td>Eğer satın aldığınız &uuml;r&uuml;n kurulum gerektiriyorsa, size en yakın yetkili servisi arayın.&Uuml;r&uuml;n kutusunun (ambalajın) a&ccedil;ılması ve kurulum işlemi mutlaka yetkili servis tarafından yapılmalıdır. Aksi takdirde &uuml;r&uuml;n&uuml;n&uuml;z garanti kapsamı dışında kalır..</td>\r\n		</tr>\r\n		<tr>\r\n			<th>G&uuml;&ccedil; (W)</th>\r\n			<td>800</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Otomatik Kapanma</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Renk</th>\r\n			<td>Beyaz</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Sesli İkaz</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Su Bitme Emniyeti</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Su Kapasitesi</th>\r\n			<td>300 ml</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Su Seviyesi G&ouml;stergesi</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Taşma Emniyeti</th>\r\n			<td>Var</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', ' ', 61, '113114411421', 'Fakir Harvest Coffee Türk Kahve Makinası Beya', 1, 'urunthumb/85/9793230209074.jpg', '', 0),
(86, '<p><strong>&Uuml;r&uuml;n &Ouml;zellikleri:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Yıkanabilir filtresi temizlik konusunda b&uuml;y&uuml;k kolaylık sağlar.</p>\r\n	</li>\r\n	<li>\r\n	<p>300 ml kapasitesi ile tek seferde maksimum 2 fincan kahve yapabilirsiniz. Hızlı ve pratik bir &uuml;r&uuml;ne ihtiyacınız varsa Zinde size hitap ediyor. Tek tuşla kolaylıkla &ccedil;alıştırabilirsiniz. 3 dakikada taptaze kahveniz hazır.</p>\r\n	</li>\r\n	<li>\r\n	<p>Orijinal&nbsp; kahve sıcaklığında olması ve damıtma fonksiyonu sayesinde lezzetli bir kahve dneeyimi yaşarsınız.</p>\r\n	</li>\r\n	<li>\r\n	<p>Yanında 2 adet porselen kupa hediye.</p>\r\n	</li>\r\n	<li>\r\n	<p>Filtre kabı ve filtre değişimi gerektirmez.</p>\r\n	</li>\r\n</ul>\r\n', 'urunresim/86/9793230209074.jpg;urunresim/86/9793247215666.jpg;urunresim/86/9793247150130.jpg;', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Aşırı Isınma Emniyeti</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Cam Hazne</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Damlama Emniyeti</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Fincan Kapasitesi</th>\r\n			<td>2</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Garanti Notu</th>\r\n			<td>Eğer satın aldığınız &uuml;r&uuml;n kurulum gerektiriyorsa, size en yakın yetkili servisi arayın.&Uuml;r&uuml;n kutusunun (ambalajın) a&ccedil;ılması ve kurulum işlemi mutlaka yetkili servis tarafından yapılmalıdır. Aksi takdirde &uuml;r&uuml;n&uuml;n&uuml;z garanti kapsamı dışında kalır..</td>\r\n		</tr>\r\n		<tr>\r\n			<th>G&uuml;&ccedil; (W)</th>\r\n			<td>450</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Kahve &Ouml;ğ&uuml;t&uuml;c&uuml;</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Otomatik Kapanma</th>\r\n			<td>Var</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Renk</th>\r\n			<td>Siyah</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Su Isıtıcı Kapasitesi (ml)</th>\r\n			<td>300</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Su Seviyesi G&ouml;stergesi</th>\r\n			<td>Yok</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', ' ', 61, '564648468484', 'Goldmaster Zinde Gm-7331 Filtre Kahve Makines', 1, 'urunthumb/86/9793230209074.jpg', '', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnprojectdetail`
--

CREATE TABLE `35cgnprojectdetail` (
  `id` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `35cgnprojectdetail`
--

INSERT INTO `35cgnprojectdetail` (`id`, `ref_id`, `title`, `link`) VALUES
(184, 252, 'proje 1 görselleri', './img/asıkveysel.png'),
(185, 252, 'proje 1 görselleri', './img/sigmamasa.png'),
(186, 252, 'proje 1 görselleri', './img/tekelement.png'),
(187, 252, 'sss', './img/Untitled.png'),
(190, 252, 'bykler', './img/1.png'),
(191, 252, 'bykler', './img/2.png'),
(192, 252, 'bykler', './img/3.png'),
(193, 0, '', './img/1.png'),
(194, 0, '', './img/2.png'),
(195, 0, '', './img/3.png'),
(196, 0, '', './img/-34220506_456268196.jpg'),
(231, 260, '', './img/rq19540.JPG'),
(232, 260, '', './img/rq24480.JPG'),
(233, 260, '', './img/rq34130.JPG'),
(234, 260, '', './img/rq44397.JPG'),
(235, 260, '', './img/rq56046.JPG'),
(236, 260, '', './img/rq66587.JPG'),
(237, 261, '', './img/zz16140.jpg'),
(238, 261, '', './img/zz29254.png'),
(239, 261, '', './img/zz3432.jpg'),
(240, 261, '', './img/zz49297.png'),
(241, 261, '', './img/zz52855.jpg'),
(242, 261, '', './img/zz61709.jpg'),
(243, 261, '', './img/zz71427.jpg'),
(244, 261, '', './img/zz82311.jpg'),
(245, 261, '', './img/zz92789.jpg'),
(246, 261, '', './img/zz103047.png'),
(247, 261, '', './img/zz119031.jpg'),
(248, 261, '', './img/zz123661.jpg'),
(249, 261, '', './img/zz137157.jpg'),
(250, 261, '', './img/zz145799.jpg'),
(251, 261, '', './img/zz151409.jpg'),
(252, 261, '', './img/zz163423.jpg'),
(253, 261, '', './img/zz177240.jpg'),
(254, 261, '', './img/zz187318.jpg'),
(255, 261, '', './img/zz192636.jpg'),
(256, 261, '', './img/zz208932.jpg'),
(257, 262, '', './img/s15570.JPG'),
(258, 262, '', './img/s23312.JPG'),
(259, 262, '', './img/s35433.JPG'),
(260, 262, '', './img/s41847.JPG'),
(261, 262, '', './img/s51330.JPG'),
(262, 262, '', './img/s64431.JPG'),
(263, 262, '', './img/s7109.JPG'),
(264, 262, '', './img/s88728.JPG'),
(265, 262, '', './img/s95340.JPG'),
(266, 263, '', './img/Buy 1 Take 1 Cappuccinos (1)2114.png'),
(267, 263, '', './img/Buy 1 Take 1 Cappuccinos8513.png'),
(268, 263, '', './img/CGN (3)9504.jpg'),
(269, 263, '', './img/cgn cözüm ortagi4577.jpg'),
(270, 263, '', './img/CGN Tekno Çözüm8796.jpg'),
(271, 263, '', './img/CGN3986.jpg'),
(272, 263, '', './img/CGN11990.jpg'),
(273, 263, '', './img/CGN-sosyal medya 15502.png'),
(274, 263, '', './img/Güvenlik-Medya7160.png'),
(275, 263, '', './img/Premium Quality Goods6674.png'),
(276, 263, '', './img/pzt sendrom cgn8789.jpg'),
(277, 263, '', './img/Responsive Web tasarım9953.jpg'),
(278, 263, '', './img/sosyal medya cgn9252.jpg'),
(279, 263, '', './img/ssl_certificate_blog_srs4457.png'),
(280, 263, '', './img/Web-Reklam3982.png'),
(281, 263, '', './img/yazilim geliştirme9667.jpg'),
(282, 264, '', './img/Buy 1 Take 1 Cappuccinos (1)3523.png'),
(283, 264, '', './img/Buy 1 Take 1 Cappuccinos7310.png'),
(284, 264, '', './img/CGN (3)3119.jpg'),
(286, 264, '', './img/CGN11428.jpg'),
(287, 264, '', './img/pzt sendrom cgn1011.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnprojects`
--

CREATE TABLE `35cgnprojects` (
  `id` int(11) NOT NULL,
  `albumname` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `info` varchar(255) DEFAULT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `35cgnprojects`
--

INSERT INTO `35cgnprojects` (`id`, `albumname`, `filename`, `info`, `update`, `link`) VALUES
(260, 'CGN Yazılım Genel', './img/rq34130.JPG', 'Genel başlık altında hizmetlerimizin bütünü', '2018-08-04 19:39:32', ''),
(261, 'CGN Web Sayfaları', './img/zz52855.jpg', 'Web sayfa tasarım ve bakım hizmetleri', '2018-08-04 19:43:46', ''),
(262, 'Sosyal Medya Paylaşım', './img/s15570.JPG', 'Sosyal medya paylaşım içeriklerinizi tasarlayabilecek engin bilgi ve tecrübeye sahip mühendislerimiz ile', '2018-08-04 19:49:24', ''),
(263, 'Blog Paylaşım', './img/pzt sendrom cgn8789.jpg', 'Blog için hazırladıklarımız', '2018-08-04 19:54:43', ''),
(264, 'Test', './img/CGN11428.jpg', 'test içeriklerimizi içerir', '2018-08-04 19:56:47', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnreference`
--

CREATE TABLE `35cgnreference` (
  `id` int(11) NOT NULL,
  `albumname` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `35cgnreference`
--

INSERT INTO `35cgnreference` (`id`, `albumname`, `filename`, `update`, `link`) VALUES
(208, 'Inoksan', './img/2-2.png', '2017-08-25 10:01:20', ''),
(210, 'Frenox', './img/3-3.png', '2017-08-25 10:02:45', ''),
(211, 'Cromo', './img/4-4.png', '2017-08-25 10:03:09', ''),
(212, 'Empero', './img/5-5.png', '2017-08-25 10:03:31', ''),
(222, 'KafePi', './thb/tegZLjFK.jpg', '2017-09-27 14:34:52', 'http://www.kafepi.com/'),
(223, 'Balıkçı Sait', './img/sait.jpg', '2017-09-27 14:36:31', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnreferencedetay`
--

CREATE TABLE `35cgnreferencedetay` (
  `id` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `35cgnreferencedetay`
--

INSERT INTO `35cgnreferencedetay` (`id`, `ref_id`, `title`, `link`) VALUES
(30, 208, 'Inoksan', './img/2-2.png'),
(32, 210, 'Frenox', './img/3-3.png'),
(33, 211, 'Cromo', './img/4-4.png'),
(34, 212, 'Empero', './img/5-5.png'),
(53, 222, 'KafePi', './img/endustriyel-mutfak4.jpg'),
(54, 222, 'KafePi', './img/endustriyel-mutfak-urunleri-2.jpg'),
(55, 222, 'KafePi', './img/images (1).jpg'),
(56, 222, 'KafePi', './img/images.jpg'),
(57, 222, 'KafePi', './img/tegZLjFK.jpg'),
(58, 223, 'Balıkçı Sait', './img/endustriyel-mutfak4.jpg'),
(59, 223, 'Balıkçı Sait', './img/endustriyel-mutfak-urunleri-2.jpg'),
(60, 223, 'Balıkçı Sait', './img/images (1).jpg'),
(61, 223, 'Balıkçı Sait', './img/images.jpg'),
(62, 223, 'Balıkçı Sait', './img/sait.jpg'),
(63, 208, 'inoksan', './img/endustriyel-mutfak4.jpg'),
(64, 208, 'inoksan', './img/endustriyel-mutfak-urunleri-2.jpg'),
(65, 208, 'inoksan', './img/images (1).jpg'),
(66, 208, 'inoksan', './img/images.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnreferencelink`
--

CREATE TABLE `35cgnreferencelink` (
  `id` int(11) NOT NULL,
  `albumname` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `35cgnreferencelink`
--

INSERT INTO `35cgnreferencelink` (`id`, `albumname`, `filename`, `update`, `link`) VALUES
(5, '', '', '2017-09-28 13:19:12', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnreferencelogo`
--

CREATE TABLE `35cgnreferencelogo` (
  `id` int(11) NOT NULL,
  `albumname` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `35cgnreferencelogo`
--

INSERT INTO `35cgnreferencelogo` (`id`, `albumname`, `filename`, `update`, `link`) VALUES
(257, '', 'resim/fg5824.png', '2017-09-28 14:50:14', ''),
(258, '', 'resim/fg2357.png', '2017-09-28 14:50:17', ''),
(259, '', 'resim/ty7271.png', '2017-09-28 14:50:21', ''),
(262, '', 'resim/fg3128.png', '2017-10-05 11:35:20', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnreferenceslogos`
--

CREATE TABLE `35cgnreferenceslogos` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8 NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `link` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `35cgnreferenceslogos`
--

INSERT INTO `35cgnreferenceslogos` (`id`, `filename`, `update`, `link`) VALUES
(42, 'resim/rt6574.png', '2017-09-29 07:58:03', ''),
(14, 'resim/rt3728.png', '2017-09-27 11:17:42', ''),
(4, 'resim/rt8721.png', '2017-09-27 10:09:45', ''),
(5, 'resim/as5240.png', '2017-09-27 10:09:49', ''),
(6, 'resim/rt7886.png', '2017-09-27 10:09:53', ''),
(7, 'resim/ty376.png', '2017-09-27 10:09:58', ''),
(8, 'resim/rt1159.png', '2017-09-27 10:10:04', ''),
(9, 'resim/ty5471.png', '2017-09-27 10:10:08', ''),
(10, 'resim/yu1804.png', '2017-09-27 10:10:13', ''),
(11, 'resim/ty5840.png', '2017-09-27 10:10:19', ''),
(12, 'resim/as9800.png', '2017-09-27 10:10:26', ''),
(13, 'resim/fg8684.png', '2017-09-27 10:10:30', ''),
(15, 'resim/yu5918.png', '2017-09-27 11:18:13', ''),
(16, 'resim/fg6063.png', '2017-09-27 11:18:26', ''),
(17, 'resim/fg4991.png', '2017-09-27 11:18:39', ''),
(19, 'resim/ty180.png', '2017-09-27 11:19:18', ''),
(20, 'resim/rt920.png', '2017-09-27 11:19:26', ''),
(23, 'resim/as4613.png', '2017-09-27 11:20:42', ''),
(22, 'resim/as4924.png', '2017-09-27 11:20:19', ''),
(24, 'resim/rt2672.png', '2017-09-27 11:20:51', ''),
(25, 'resim/yu645.png', '2017-09-27 11:21:01', ''),
(26, 'resim/fg8004.png', '2017-09-27 11:21:18', ''),
(27, 'resim/yu8222.png', '2017-09-27 11:21:34', ''),
(30, 'resim/ty4868.png', '2017-09-27 11:22:11', ''),
(31, 'resim/rt303.png', '2017-09-27 11:22:28', ''),
(32, 'resim/ty4739.png', '2017-09-27 11:22:36', ''),
(33, 'resim/yu6981.png', '2017-09-27 11:22:44', ''),
(35, 'resim/yu3743.png', '2017-09-27 11:23:13', ''),
(36, 'resim/rt6856.png', '2017-09-27 11:23:26', ''),
(37, 'resim/ty9020.png', '2017-09-27 11:23:44', ''),
(38, 'resim/ty3316.png', '2017-09-27 11:24:04', ''),
(39, 'resim/as5729.png', '2017-09-27 11:24:32', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnslider`
--

CREATE TABLE `35cgnslider` (
  `id` int(11) NOT NULL,
  `link` varchar(300) DEFAULT NULL,
  `tlink` varchar(300) DEFAULT NULL,
  `caption` varchar(200) NOT NULL,
  `album` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `35cgnslider`
--

INSERT INTO `35cgnslider` (`id`, `link`, `tlink`, `caption`, `album`, `type`, `rank`) VALUES
(1, 'uploads/HD_Technologies_Banner5.jpg', NULL, 'CGN Yazılım Hizmetleri', NULL, NULL, NULL),
(2, 'uploads/sayfalogo.png', NULL, ' ', NULL, NULL, NULL),
(3, 'uploads/cgn-yazilim-tabe22.jpg', NULL, ' ', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnsocial`
--

CREATE TABLE `35cgnsocial` (
  `id` int(11) NOT NULL,
  `Skype` varchar(200) DEFAULT NULL,
  `Facebook` varchar(200) DEFAULT NULL,
  `Twitter` varchar(200) DEFAULT NULL,
  `Vimeo` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `instagram` varchar(222) DEFAULT NULL,
  `youtube` varchar(222) DEFAULT NULL,
  `foursquare` varchar(222) DEFAULT NULL,
  `linkedin` varchar(222) DEFAULT NULL,
  `googleplus` varchar(222) DEFAULT NULL,
  `tumblr` varchar(222) DEFAULT NULL,
  `pinterest` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `35cgnsocial`
--

INSERT INTO `35cgnsocial` (`id`, `Skype`, `Facebook`, `Twitter`, `Vimeo`, `Email`, `instagram`, `youtube`, `foursquare`, `linkedin`, `googleplus`, `tumblr`, `pinterest`) VALUES
(0, '', '', 'https://twitter.com/cgnyazilim/', '', '', 'https://instagram.com/cgnyazilim/', 'https://instagram.com/cgnyazilim/', '', 'https://www.tr.linkedin.com/company/cgn-yaz%C4%B1l%C4%B1m-ve-bili%C5%9Fim-hizmetleri', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnsubscribe`
--

CREATE TABLE `35cgnsubscribe` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnuser`
--

CREATE TABLE `35cgnuser` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `35cgnuser`
--

INSERT INTO `35cgnuser` (`id`, `username`, `userpass`) VALUES
(5, 'cgn', '202cb962ac59075b964b07152d234b70'),
(6, 'AS', 'a2c29192484301fa800100e16e494acf');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `35cgnvideoalbum`
--

CREATE TABLE `35cgnvideoalbum` (
  `id` int(11) NOT NULL,
  `videotitle` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `avatar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `35cgnvideoalbum`
--

INSERT INTO `35cgnvideoalbum` (`id`, `videotitle`, `url`, `avatar`) VALUES
(1, 'Endüstriyel Mutfak 3', 'https://www.youtube.com/embed/dmQnqpTCzjU', NULL),
(4, '3D ENDÜSTRİYEL MUTFAK', 'https://www.youtube.com/embed/ExbI8GtB5TA', NULL),
(5, 'Endüstriyel Mutfak', 'https://www.youtube.com/embed/VexPcUUAZoc', NULL),
(10, 'İZMİR FUARI', 'https://www.youtube.com/embed/T0YfB14CXjc', NULL),
(11, 'hh', 'https://www.youtube.com/embed/nn2BVILWRT0', NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `35cgnalbum`
--
ALTER TABLE `35cgnalbum`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `35cgncategory`
--
ALTER TABLE `35cgncategory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Tablo için indeksler `35cgnfromportfolio`
--
ALTER TABLE `35cgnfromportfolio`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `35cgngallery`
--
ALTER TABLE `35cgngallery`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `35cgngalleryb`
--
ALTER TABLE `35cgngalleryb`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `35cgnlang`
--
ALTER TABLE `35cgnlang`
  ADD PRIMARY KEY (`Lang`);

--
-- Tablo için indeksler `35cgnmenu`
--
ALTER TABLE `35cgnmenu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `35cgnourclients`
--
ALTER TABLE `35cgnourclients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `filename` (`filename`);

--
-- Tablo için indeksler `35cgnpage`
--
ALTER TABLE `35cgnpage`
  ADD PRIMARY KEY (`page_id`),
  ADD KEY `FK_35cgnpage` (`menu_id`);

--
-- Tablo için indeksler `35cgnpopup`
--
ALTER TABLE `35cgnpopup`
  ADD UNIQUE KEY `showpopup` (`showpopup`);

--
-- Tablo için indeksler `35cgnpress`
--
ALTER TABLE `35cgnpress`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `35cgnproduct`
--
ALTER TABLE `35cgnproduct`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `35cgnprojectdetail`
--
ALTER TABLE `35cgnprojectdetail`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `35cgnprojects`
--
ALTER TABLE `35cgnprojects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `filename` (`filename`);

--
-- Tablo için indeksler `35cgnreferenceslogos`
--
ALTER TABLE `35cgnreferenceslogos`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `35cgnslider`
--
ALTER TABLE `35cgnslider`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `35cgnsocial`
--
ALTER TABLE `35cgnsocial`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `35cgnuser`
--
ALTER TABLE `35cgnuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NewIndex1` (`username`);

--
-- Tablo için indeksler `35cgnvideoalbum`
--
ALTER TABLE `35cgnvideoalbum`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `35cgnalbum`
--
ALTER TABLE `35cgnalbum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Tablo için AUTO_INCREMENT değeri `35cgncategory`
--
ALTER TABLE `35cgncategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Tablo için AUTO_INCREMENT değeri `35cgnfromportfolio`
--
ALTER TABLE `35cgnfromportfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=420;

--
-- Tablo için AUTO_INCREMENT değeri `35cgngallery`
--
ALTER TABLE `35cgngallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- Tablo için AUTO_INCREMENT değeri `35cgnmenu`
--
ALTER TABLE `35cgnmenu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Tablo için AUTO_INCREMENT değeri `35cgnourclients`
--
ALTER TABLE `35cgnourclients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `35cgnpage`
--
ALTER TABLE `35cgnpage`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Tablo için AUTO_INCREMENT değeri `35cgnpress`
--
ALTER TABLE `35cgnpress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Tablo için AUTO_INCREMENT değeri `35cgnproduct`
--
ALTER TABLE `35cgnproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Tablo için AUTO_INCREMENT değeri `35cgnprojectdetail`
--
ALTER TABLE `35cgnprojectdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;

--
-- Tablo için AUTO_INCREMENT değeri `35cgnprojects`
--
ALTER TABLE `35cgnprojects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- Tablo için AUTO_INCREMENT değeri `35cgnreferenceslogos`
--
ALTER TABLE `35cgnreferenceslogos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Tablo için AUTO_INCREMENT değeri `35cgnslider`
--
ALTER TABLE `35cgnslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `35cgnuser`
--
ALTER TABLE `35cgnuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `35cgnvideoalbum`
--
ALTER TABLE `35cgnvideoalbum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
