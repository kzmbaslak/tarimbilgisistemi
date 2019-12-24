-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 12:12 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tarimbilgisistemi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bicme`
--

CREATE TABLE IF NOT EXISTS `bicme` (
  `bicmeId` int(11) NOT NULL,
  `bicmeTarihi` date DEFAULT NULL,
  `ekmeId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bildirim`
--

CREATE TABLE IF NOT EXISTS `bildirim` (
  `bildirimId` int(11) NOT NULL,
  `bildirimMetni` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `okundu` tinyint(1) DEFAULT NULL,
  `kullaniciId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bitki`
--

CREATE TABLE IF NOT EXISTS `bitki` (
  `bitkiId` int(11) NOT NULL,
  `adi` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sulamaBilgisi` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `bitkiMetni` varchar(10000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `iklimId` int(11) DEFAULT NULL,
  `gubreMiktari` int(11) DEFAULT NULL,
  `ekmeAyi` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `bicmeAyi` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `bitki`
--

INSERT INTO `bitki` (`bitkiId`, `adi`, `sulamaBilgisi`, `bitkiMetni`, `iklimId`, `gubreMiktari`, `ekmeAyi`, `bicmeAyi`) VALUES
(1, 'Nohut', 'yok', 'Toprak Hazırlığı: Derinlere inebilen kök yapısı ve kurağa dayanması nedeniyle, toprak seçiciliği yoktur. Hemen hemen her çeşit toprakta tarımı yapılabilir. Ancak, kumlu-tınlı, drenaj problemi olmayan, geçirgenliği iyi, besin maddelerince zengin, verimli nötr’e yakın (pH 6-8) topraklar nohut tarımı için ideal olarak kabul edilirler. Kısa süreli de olsa, tarla yüzeyinde herhangi bir su göllenmesi, gelişmeyi yavaşlatacağı ve kök-sap çürüklük hastalıklarına yol açacağı için arzu edilmez. Çok tuzlu topraklar, nohut üretimini sınırlandıran önemli faktörlerden biri olduğu için, nohut tarımı için uygun değildir.\r\n\r\nNohut ekilecek topraklar, sonbaharda sürülerek bırakılır. Sürüm, 15-20 cm derinlikte pullukla yapılabilir. Kışı bu şekilde geçiren topraklar, ekimden önce, 2-3 kez kazayağı veya diskaro gibi aletlerle biraz daha sığ olarak işlenir. Bu işlemenin 10-15 cm derinlikte olması yeterlidir. Daha sonra, tırmıkla tarla yüzeyi düzlenebilir. Bu şekilde, tarla ekime hazır hale getirilmiş olur. Daha derinden veya gereğinden fazla sayıda işlenen topraklarda, var olan rutubetin kaybolacağı ve bitkinin gelişmesine olumsuz etkide bulunacağı hiç bir zaman unutulmamalıdır.\r\n-------------------------------\r\nEkim Şekli: Nohut, serpme ekilebildiği gibi (Resim 3), makine ile sıraya da (Resim 4) ekmek mümkündür. Ülkemizde, genellikle serpme ekim yöntemi kullanılmaktadır. Çünkü, nohut tarımı genelde küçük aile işletmelerinde ve küçük alanlarda yapıldığı için, mekanizasyonu ekonomik olmamaktadır. Serpme ekimlerde, daha fazla tohum harcandığı ve tohumların uygun ve eşit derinliğe düşmemesi sonucunda çıkışlarda yeknesaklık sağlanamadığı ve bu nedenle tarla içerisinde düzensiz bitki gelişimi gözlendiği için pek arzu edilmez. Makine ile sıraya ekim yapılması nedeniyle, tohumlar uygun derinliğe eşit olarak bırakıldığı için, çıkışlar eş zamanlı olacak ve tarla içerisindeki bitki gelişimi de yeknesak olacaktır.\r\n\r\n\r\n\r\n\r\n\r\nResim 3. Serpme olarak ekilmiş bir nohut tarlası\r\n\r\n\r\n\r\nÇok zorunlu olmadıkça, makine ile ekim her zaman tercih edilmelidir. Bu amaçla, Trakya-Marmara bölgesinde kullanılan pünomatik (havalı) ayçiçeği ekim makinesi veya diğer bölgelerdeki pamuk, yerfıstığı gibi bitkilerin ekiminde kullanılan ekim makineleri rahatlıkla kullanılabilir.\r\n\r\n\r\n\r\n\r\nResim 4. Sıraya ekilmiş nohutlar (30 cm)\r\n\r\n\r\n\r\nSıra Arası ve Sıra Üzeri Mesafesi: Nohut’un sıraya ekilmesi, yabancı ot kontrolü açısından bir avantaj sağlar. Dünyanın çeşitli bölgelerinde, nohut tarımında değişik sıra aralıkları kullanılmaktadır. Bu sıra aralıkları 15 cm-100 cm arasında değişmektedir. Dekara bitki sayısı sabit tutulduğunda, dar sıra aralığında (15-20 cm) ekilen çeşitler, geniş sıra (90-100 cm) aralığında ekilen çeşitlerden daha fazla verim sağlarlar. Ülkemizde, 20-30 cm’ den 45-70 cm’ e kadar değişen sıra aralıklarında ekim yapılmaktadır. Geniş sıra (45-70 cm) aralığında ekim yapmak, yabancı ot mücadelesinin mekanik olarak yapılmasına imkan tanır ancak verim düşük olur. Dar sıra aralıklarında (20-30 cm) (Resim 4) yapılan ekimlerde, yabancı ot gelişimi engelleneceği için ayrıca bir mücadele gerektirmeyecektir.\r\n\r\nSonuçta, mevcut mekanizasyon imkanları da göz önünde tutularak, 20-70 cm arasında değişen sıra aralıkları kullanılabilir. Ancak, en ideali, 25-35 cm sıra aralığıdır.\r\n\r\nSıra üzeri mesafesi olarak, yine Dünyanın çeşitli ülkelerinde değişik mesafeler kullanılmaktadır. Bu mesafe, 3-5 cm’ den 10-12 cm’ e kadar değişebilmektedir. Ekimde, sıra üzeri mesafesinin ortalama 5-8 cm olarak (Resim 5) ayarlanması en uygunu olacaktır.\r\n----------------------------\r\nTohumluk Miktarı: Dekara atılacak tohumluk miktarı, ekim yöntemine, sıra aralığına, ekilecek çeşidin 1000 Tane ağırlığına ve tohumun çimlenme gücüne göre değişir. Eğer serpme olarak ekilecek ise, dekara 15-25 kg tohumluk hesap edilmelidir. Bu miktar, çok iri taneli çeşitlerde biraz daha artabilir.\r\n\r\nSıraya ekimlerde, eğer sıra arası mesafesi 25-35 cm arasında ve sıra üzeri de 5-8 cm olacaksa, dekara ortalama 35.000-60.000 adet tohum atılması gerekir. Eğer, çeşidin 1000 TA, 400 g ise, dekara yaklaşık 14-24 kg; 1000 TA, 300 g ise dekara 10-18 kg; 1000 TA, 500-550 g ise, dekara 18-30 kg tohum atılması gerekecektir. Çeşidin tohumu ne kadar iri ise (1000 tane ağırlığı yüksek), dekara atılması gereken tohumluk miktarı da o kadar yüksek olacaktır. Daha geniş sıra aralıklarında ekim yapılacaksa, belirtilen bu tohumluk miktarları biraz daha az olabilir.\r\n\r\nSonuç olarak, en ideali olarak kabul edilen 25-35 cm sıra aralığı ve 5-8 cm sıra üzeri mesafesi baz olarak alınırsa, dekara ortalama 15-18 kg tohumluk kullanılması gerekir.\r\n--------------------------\r\nEkim Derinliği: Ekimin 5-8 cm derinliğe yapılması en uygunudur. Daha derine yapılacak ekimlerde, çimlenme ve çıkış zamanı uzayabilir, çiçeklenme oranında bir düşme ve buna bağlı olarak bitkinin oluşturacağı bakla sayısında bir azalma gözlenebilir. Bu ise, sonuçta verim düşüklüğüne neden olur.\r\n\r\nBazı bölgelerimizde, ekim işleminin geciktiği veya toprağın üst kısmının kuru olduğu durumlarda, ekim 10-15 cm derine yapılarak tohumun nemli ortama bırakılması sağlanmakta ve böylece çıkışlar garantiye alınmaktadır.\r\n\r\nGübreleme: Öncelikle bir toprak analizinin yaptırılması gerekir. Analiz sonucuna göre, tavsiye edilecek gübre çeşitlerinin yine uygun miktarlarda toprağa uygulanması en idealidir.\r\n\r\nNohut bir baklagil bitkisi olduğundan, köklerinde oluşan nodüller yardımıyla havanın serbest azotunu bağlayarak kendi azot ihtiyacını karşılamaktadır. Yapılan çalışmalar, bu şekilde bir azot bağlama ile, nohut bitkisinin kendi ihtiyacı olan toplam azotun, % 60’ ı ile % 70’ i arasında bir miktarının karşılanabildiğini ortaya koymuştur. Nodüllerin oluşumu için, ekimden önce tohumların uygun Rhizobium bakteri ırkları ile bulaştırılması gerekir. Ancak, bazı topraklarda, populasyonu düşük de olsa Rhizobium bakterileri mevcuttur. Bu tip topraklara ekim yapıldığında, tohumlar, ekimden önce bulaştırılmamış olsa dahi, nohut bitkisinin köklerinde azot bağlayıcı nodüller oluşacaktır. Bu nedenle, ekimden önce, bakteri aşılamasının yapılması zorunlu olmayıp gerekli de değildir. Uzun yıllar aynı toprakta nohut tarımı yapıldığı halde köklerde herhangi bir nodül oluşumu gözlenmiyorsa, ekimden önce bakteri aşılaması yapılabilir.\r\n\r\nEğer, gerekli toprak analizi yapılamıyorsa, genel bir kural olarak, dekara ortalama 2-4 kg azot ve 5-7 kg fosfor verilmesi uygun olur. Verilecek gübrelerin, tamamının ekimden önce toprağa serpilerek tırmıkla karıştırılması uygun olur. Bu amaçla, 18-46-0 gübresi veya diğer adıyla diamonyum fosfat gübresinden dekara 15 kg uygulanabilir.\r\n\r\nSulama: Nohut yarı-kurak ve kurak bölgelere adapte olmuş, derin köklü bir bitki olduğundan, kurağa dayanıklıdır. Bu nedenle, her hangi bir sulama işlemi söz konusu değildir. Ancak, yapılan bazı çalışmalar, nohut tarımında sulamanın yapılabileceğini ve bakla oluşum döneminde yapılacak bir sulama işleminin verim açısından ekstra fayda sağlayacağını ortaya koymuştur. Burada, eğer sulama yapılacak ise, sulama ile birlikte ortamdaki nem oranında bir artışın olabileceği ve bunun da bazı mantari hastalıkların gelişimini teşvik edeceği unutulmamalıdır.\r\n-----------------------------\r\nHasat: Hasat zamanı gelmiş bitkilerde, yapraklar ve baklalar tamamen sararmıştır (Resim 21). Tanenin nem oranı % 15-18 arasındadır. Bu nem oranı, makine ile hasat için idealdir. Bunun üzerinde veya altındaki nem oranlarında, tane mekanik olarak zarar görür.\r\nMakineli hasada uygun olmayan çok kısa boylu veya gelişmesini tam olarak tamamlayamadığı için kısa kalmış bazı çeşitler, elle yolunarak veya elle biçilerek harman makinelerinde harmanlanarak hasat tamamlanabilir. Diğer bazı bitkilere göre, tane dökme problemi olmadığı veya çok önemsiz olduğu için hasadın geç yapılması sorun yaratmaz. Çok çok sıcak ve kurak dönemlerde, baklalarda çatlamalar olabilir.\r\n\r\nMakineli hasat işleri için, normal biçer-döverler kullanıldığı gibi, yemeklik tane baklagiller için özel olarak tasarlanmış hava emişli hasat-harman makinelerini de kullanmak mümkündür\r\n\r\nHasat edilen ürünün normal şartlarda depolanabilmesi için, tanenin nem oranı en fazla % 13-14 olmalıdır. Bunun üzerindeki nem oranları depolamada sorun yaratırken, bu değerin altındaki nem oranları ise, depolama süresini arttırır.', NULL, 0, 'Mart', 'Temmuz');

-- --------------------------------------------------------

--
-- Table structure for table `ekme`
--

CREATE TABLE IF NOT EXISTS `ekme` (
  `ekmeId` int(11) NOT NULL,
  `ekmeTarihi` date DEFAULT NULL,
  `ekmeAlani` int(11) DEFAULT NULL,
  `sehirId` int(11) DEFAULT NULL,
  `kullaniciId` int(11) DEFAULT NULL,
  `bitkiId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iklim`
--

CREATE TABLE IF NOT EXISTS `iklim` (
  `iklimId` int(11) NOT NULL,
  `adi` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `iklimMetni` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kullanici`
--

CREATE TABLE IF NOT EXISTS `kullanici` (
  `kullaniciId` int(11) NOT NULL,
  `adi` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `soyadi` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mail` varchar(30) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sehirId` int(11) DEFAULT NULL,
  `dogumTarihi` date DEFAULT NULL,
  `sifre` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yetkiId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `kullanici`
--

INSERT INTO `kullanici` (`kullaniciId`, `adi`, `soyadi`, `mail`, `sehirId`, `dogumTarihi`, `sifre`, `yetkiId`) VALUES
(1, 'ali', 'koyuncu', 'alikoyucu@gmail.com', 2, '1984-05-07', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sehir`
--

CREATE TABLE IF NOT EXISTS `sehir` (
  `sehirId` int(11) NOT NULL,
  `adi` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `iklimId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `sehir`
--

INSERT INTO `sehir` (`sehirId`, `adi`, `iklimId`) VALUES
(1, 'Adana', NULL),
(2, 'Adıyaman', NULL),
(3, 'Afyon ', NULL),
(4, 'Ağrı ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `urun`
--

CREATE TABLE IF NOT EXISTS `urun` (
  `bicmeId` int(11) DEFAULT NULL,
  `miktar` int(11) DEFAULT NULL,
  `verim` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yetki`
--

CREATE TABLE IF NOT EXISTS `yetki` (
  `yetkiId` int(11) NOT NULL,
  `adi` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `yetki`
--

INSERT INTO `yetki` (`yetkiId`, `adi`) VALUES
(1, 'root'),
(2, 'standart'),
(3, 'engelli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bicme`
--
ALTER TABLE `bicme`
 ADD PRIMARY KEY (`bicmeId`), ADD KEY `ekmeId` (`ekmeId`);

--
-- Indexes for table `bildirim`
--
ALTER TABLE `bildirim`
 ADD PRIMARY KEY (`bildirimId`), ADD KEY `kullaniciId` (`kullaniciId`);

--
-- Indexes for table `bitki`
--
ALTER TABLE `bitki`
 ADD PRIMARY KEY (`bitkiId`), ADD KEY `iklimId` (`iklimId`);

--
-- Indexes for table `ekme`
--
ALTER TABLE `ekme`
 ADD PRIMARY KEY (`ekmeId`), ADD KEY `sehirId` (`sehirId`), ADD KEY `kullaniciId` (`kullaniciId`), ADD KEY `bitkiId` (`bitkiId`);

--
-- Indexes for table `iklim`
--
ALTER TABLE `iklim`
 ADD PRIMARY KEY (`iklimId`);

--
-- Indexes for table `kullanici`
--
ALTER TABLE `kullanici`
 ADD PRIMARY KEY (`kullaniciId`), ADD KEY `sehirId` (`sehirId`), ADD KEY `yetkiId` (`yetkiId`);

--
-- Indexes for table `sehir`
--
ALTER TABLE `sehir`
 ADD PRIMARY KEY (`sehirId`), ADD KEY `iklimId` (`iklimId`);

--
-- Indexes for table `urun`
--
ALTER TABLE `urun`
 ADD KEY `bicmeId` (`bicmeId`);

--
-- Indexes for table `yetki`
--
ALTER TABLE `yetki`
 ADD PRIMARY KEY (`yetkiId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bicme`
--
ALTER TABLE `bicme`
ADD CONSTRAINT `bicme_ibfk_1` FOREIGN KEY (`ekmeId`) REFERENCES `ekme` (`ekmeId`) ON DELETE CASCADE;

--
-- Constraints for table `bildirim`
--
ALTER TABLE `bildirim`
ADD CONSTRAINT `bildirim_ibfk_1` FOREIGN KEY (`kullaniciId`) REFERENCES `kullanici` (`kullaniciId`) ON DELETE CASCADE;

--
-- Constraints for table `bitki`
--
ALTER TABLE `bitki`
ADD CONSTRAINT `bitki_ibfk_1` FOREIGN KEY (`iklimId`) REFERENCES `iklim` (`IklimId`) ON DELETE CASCADE;

--
-- Constraints for table `ekme`
--
ALTER TABLE `ekme`
ADD CONSTRAINT `ekme_ibfk_1` FOREIGN KEY (`sehirId`) REFERENCES `sehir` (`sehirId`) ON DELETE CASCADE,
ADD CONSTRAINT `ekme_ibfk_2` FOREIGN KEY (`kullaniciId`) REFERENCES `kullanici` (`kullaniciId`) ON DELETE CASCADE,
ADD CONSTRAINT `ekme_ibfk_3` FOREIGN KEY (`bitkiId`) REFERENCES `bitki` (`bitkiId`) ON DELETE CASCADE;

--
-- Constraints for table `kullanici`
--
ALTER TABLE `kullanici`
ADD CONSTRAINT `kullanici_ibfk_1` FOREIGN KEY (`sehirId`) REFERENCES `sehir` (`sehirId`) ON DELETE CASCADE,
ADD CONSTRAINT `kullanici_ibfk_2` FOREIGN KEY (`yetkiId`) REFERENCES `yetki` (`yetkiId`) ON DELETE CASCADE;

--
-- Constraints for table `sehir`
--
ALTER TABLE `sehir`
ADD CONSTRAINT `sehir_ibfk_1` FOREIGN KEY (`iklimId`) REFERENCES `iklim` (`IklimId`) ON DELETE CASCADE;

--
-- Constraints for table `urun`
--
ALTER TABLE `urun`
ADD CONSTRAINT `urun_ibfk_1` FOREIGN KEY (`bicmeId`) REFERENCES `bicme` (`bicmeId`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
