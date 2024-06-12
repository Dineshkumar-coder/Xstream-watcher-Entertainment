-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 12, 2024 at 03:53 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xstream`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `MOVIEID` int(100) NOT NULL,
  `MOVIEIMAGE` varchar(200) NOT NULL,
  `MOVIENAME` varchar(50) NOT NULL,
  `MOVIEVIDEO` varchar(500) NOT NULL,
  `MOVIEPARA` varchar(350) NOT NULL,
  `MOVIECATEGARY` varchar(100) NOT NULL,
  `MOVIEBANNER` varchar(200) NOT NULL,
  `DIRECTORIMG` varchar(200) NOT NULL,
  `DIRECTORNAME` varchar(50) NOT NULL,
  `MUSICDIRECTORIMG` varchar(200) NOT NULL,
  `MUSICDIRECTORNAME` varchar(50) NOT NULL,
  `GRADE` varchar(20) NOT NULL,
  `RELEACEDATE` varchar(30) NOT NULL,
  `MOVIETIME` varchar(30) NOT NULL,
  `MOVIETYPE` varchar(30) NOT NULL,
  `LANGUAGE` varchar(30) NOT NULL,
  `CASTS` varchar(900) NOT NULL,
  `TRAILER` varchar(250) NOT NULL,
  `OC1IMG` varchar(200) NOT NULL,
  `OC1NAME` varchar(50) NOT NULL,
  `OC2IMG` varchar(200) NOT NULL,
  `OC3IMG` varchar(200) NOT NULL,
  `OC2NAME` varchar(50) NOT NULL,
  `OC3NAME` varchar(50) NOT NULL,
  `OC4IMG` varchar(200) NOT NULL,
  `OC4NAME` varchar(50) NOT NULL,
  `OC5IMG` varchar(200) NOT NULL,
  `OC5NAME` varchar(50) NOT NULL,
  `FILTER` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`MOVIEID`, `MOVIEIMAGE`, `MOVIENAME`, `MOVIEVIDEO`, `MOVIEPARA`, `MOVIECATEGARY`, `MOVIEBANNER`, `DIRECTORIMG`, `DIRECTORNAME`, `MUSICDIRECTORIMG`, `MUSICDIRECTORNAME`, `GRADE`, `RELEACEDATE`, `MOVIETIME`, `MOVIETYPE`, `LANGUAGE`, `CASTS`, `TRAILER`, `OC1IMG`, `OC1NAME`, `OC2IMG`, `OC3IMG`, `OC2NAME`, `OC3NAME`, `OC4IMG`, `OC4NAME`, `OC5IMG`, `OC5NAME`, `FILTER`) VALUES
(15, '../xstreamimages/manadu p.jpg', 'MANADU     ', '../xstreamvideos/Maanaadu.mp4', 'This is the good movie to watch with your family to enjoy...     ', 'Kolliwood     ', '../xstreamimages/manadu b.jpg', '../xstreamimages/m d.jpg', 'Venkat Prabu     ', '../xstreamimages/m md.jpg', 'Yuvan Shankar Raja     ', 'U/A     ', '2021    ', '2 hours 15 min     ', 'Drama     ', 'Tamil     ', 'Maanadau Conference is a 2021 Indian Tamil-language science fiction action thriller film written and directed by Venkat Prabhu and produced by Suresh Kamatchi. The film stars Silambarasan, S. J. Suryah and Kalyani Priyadarshan alongside S. A. Chandrasekhar, Y. G. Mahendran, Karunakaran, Premgi Amaren, Aravind Akash and Anjena Kirti in supporting roles. The film  ', '../xstreamvideos/manadu t.mp4', '../xstreamimages/m1 silambu.jpg', 'Silambrasan     ', '../xstreamimages/m2.jpg', '../xstreamimages/m3.jpg', 'Kalyani Priyadarshan     ', 'S J Surya     ', '../xstreamimages/m4.jpg', 'S A chandra sagar     ', '../xstreamimages/m5.jpg', 'PrameG     ', 'Trending'),
(16, '../xstreamimages/Sabhaapathy-movie.jpg', 'SABAPATHY   ', '../xstreamvideos/Sabhaapathy.mp4', 'This is the good movie to watch with your family to enjoy...   ', 'Kolliwood   ', '../xstreamimages/sabapathi ban.jpg', '../xstreamimages/Dir.jpg', 'Sam C.S.   ', '../xstreamimages/md.jpg', 'R Srinivasa Rao   ', 'U   ', '2021  ', '2 hours 25 min   ', 'Drama   ', 'Tamil   ', 'Sabhaapathy is a 2021 Indian Tamil-language comedy film directed by debutant R. Srinivasa Rao and produced by R K Entertainment.[1] The film stars Santhanam and Preeti Verma in the lead roles and the music is composed by Sam C. S.[2] The film released theatrically on 19 November 2021 to moderate reviews from critics but positive response from audience and ended up as a moderate failure in the box office. The satellite and streaming rights were sold to Colors Tamil and Amazon Prime Video respectively. ', '../xstreamvideos/Sabhaapathy T.mp4', '../xstreamimages/1 santhanam.jpg', 'Santhanam   ', '../xstreamimages/2 preetiverma.jpg', '../xstreamimages/3 ms bhaskar.jpg', 'Preeti Verma   ', 'M S Bhaskar   ', '../xstreamimages/4 pugal.jpg', 'Pugal   ', '../xstreamimages/5 mayilsamy.jpg', 'Mayil Samy   ', 'movie'),
(17, '../xstreamimages/pushpa p.jfif', 'PUSHPA ', '../xstreamvideos/Pushpa.mkv', 'This is the good movie to watch with your family to enjoy... ', 'Tolliwood ', '../xstreamimages/pushpa b.jpg', '../xstreamimages/D sukumar.jpg', 'Sukumar ', '../xstreamimages/MD dsp.jpg', 'D.S.P ', 'U/A ', '2021 ', '2 hours 15 min ', 'Drama ', 'Tamil ', 'Pushpa: The Rise – Part 01 is a 2021 Indian Telugu-language action drama film[5] written and directed by Sukumar. Produced by Mythri Movie Makers in association with Muttamsetty Media, it stars Allu Arjun as the titular character alongside Fahadh Faasil (in his Telugu debut) and Rashmika Mandanna while Jagadeesh Prathap Bandari, Sunil, Rao Ramesh, Dhananjaya, Anasuya Bharadwaj, Ajay and Ajay Ghosh play supporting roles. The first of two cinematic parts, the film depicts the rise of a coolie in the smuggling syndicate of red sandalwood, a rare wood that grows only in the Seshachalam Hills of Andhra Pradesh state. ', '../xstreamvideos/Pushpa T.mp4', '../xstreamimages/1 allu arjun.jpg', 'Allu Arjun ', '../xstreamimages/2 Rashmika.jpg', '../xstreamimages/3 samantha.jpg', 'Rashmika Mandanna ', 'Samantha Akkineni ', '../xstreamimages/4 fahadh faasil.jpg', 'Fahadh Faasil ', '../xstreamimages/5 prakash raj.jpg', 'Prakash Raj ', 'Trending'),
(18, '../xstreamimages/murungakkai chips p.jpg', 'MURUNGAKKAI CHIPS ', '../xstreamvideos/Mutrungakai Cheaps.mkv', 'This is the good movie to watch with your family to enjoy... ', 'Kolliwood ', '../xstreamimages/murungai b.jpg', '../xstreamimages/d srijar.jpg', 'Srijar ', '../xstreamimages/md dharankumar.jpg', 'Dharan kumar ', 'U/A ', '2021 ', '2 hours 15 min ', 'Drama ', 'Tamil ', 'Arjun (Shanthanu Bhagyaraj) and Shanthi (Athulya Ravi) have an arranged marriage, and their first night is about to happen. Just before that, Arjun', '../xstreamvideos/Murungakkai Chips T.mp4', '../xstreamimages/1shanthanu.jpg', 'Shanthanu ', '../xstreamimages/2athulyaravi.jpg', '../xstreamimages/3bhagyaraj.jpg', 'Athulyaravi ', 'Bhagyaraj ', '../xstreamimages/4urvashi.jpg', 'Urvsai ', '../xstreamimages/5manobala.jpg', 'Manobala ', 'movie'),
(19, '../xstreamimages/antiindianp.jpg', 'ANTI INDIAN ', '../xstreamvideos/Anti Indian.mp4', 'This is the good movie to watch with your family to enjoy... ', 'Kolliwood ', '../xstreamimages/anitindian b.jpg', '../xstreamimages/ai d.jpg', 'Elamaran ', '../xstreamimages/ai md.jpg', 'None ', 'U/A ', '2021 ', '2 hours 20 min ', 'Drama ', 'Tamil ', 'Anti Indian is a 2021 Indian Tamil-language political satire film written and directed by C. Elamaran and produced by Aadham Bava. The film stars Blue Shirt Elamaran, Radha Ravi, Aadukalam Naren,', '../xstreamvideos/ANTI INDIAN T.mp4', '../xstreamimages/ai 1.jpg', 'Maran ', '../xstreamimages/ai2.jpg', '../xstreamimages/ai3.jpg', 'Ratharavi ', 'Aadukalam Naren ', '../xstreamimages/ai4.jpg', 'Pasi Sathya ', '../xstreamimages/ai5.jpg', 'Vijaytv Bala ', 'movie'),
(20, '../xstreamimages/enemy p.jpg', 'ENEMY ', '../xstreamvideos/Enemy.mp4', 'This is the good movie to watch with your family to enjoy... ', 'Kolliwood ', '../xstreamimages/emy.jpg', '../xstreamimages/d anand shank.jpg', 'Anand Shankar ', '../xstreamimages/md thaman.jpg', 'Thamsan ', 'U/A ', '2021 ', '2 hours 20 min ', 'Drama ', 'Tamil ', 'In Ooty, Chozhan Ramalingam and Rajiv Paarirajan are two friends who are trained by Paarirajan, Rajiv', '../xstreamvideos/Enemy T.mp4', '../xstreamimages/1vish.jpg', 'Vishal ', '../xstreamimages/2mirnalniravi.jpg', '../xstreamimages/3arya.jpg', 'Mirnalni Ravi ', 'Araya ', '../xstreamimages/4thambiramia.jpg', 'Thambiramia ', '../xstreamimages/5karunakaran.jpg', 'Karunakaran ', 'movie'),
(21, '../xstreamimages/kalavani mapplai p.jpg', 'KALAVANI MAPPILLAI ', '../xstreamvideos/Kalavani Mappillai.mp4', 'This is the good movie to watch with your family to enjoy... ', 'Kolliwood ', '../xstreamimages/kalavani mapplai b.jpg', '../xstreamimages/d gandhi manivasagam.jpg', 'Gandhi Manivasagam ', '../xstreamimages/md nr raghunanthan.jpg', 'N.R. Raghunanthan ', 'U ', '2021 ', '2 hours 15 min ', 'Drama ', 'Tamil ', 'We get a childhood rivalry between Deva and Villangam, a hastily built romance between Deva and Thulasi, a back story for why Thulasi', '../xstreamvideos/Kalavaani Mappillai T.mp4', '../xstreamimages/1attakathidinesh.jpg', 'Attakathi Dinesh ', '../xstreamimages/2mirna menon.jpg', '../xstreamimages/3devayani.jpg', 'Mirna Menon ', 'Devayani ', '../xstreamimages/4anand raj.jpg', 'Anand raj ', '../xstreamimages/5 mottai rajendran.jpg', 'Motta Rajendran ', 'movie'),
(22, '../xstreamimages/marakkir p.jpg', 'MARAKKIYAR ', '../xstreamvideos/Maraikayar.mp4', 'This is the good movie to watch with your family to enjoy... ', 'Molliwood ', '../xstreamimages/marakkir b.jpg', '../xstreamimages/d priyadarshan.jpg', 'Priyadarshan ', '../xstreamimages/md IERr.jpg', 'Iyell Evans ', 'U/A ', '2021 ', '3 hours 5 min ', 'Hishoric ', 'Tamil ', 'During the late 1500s, the empire of Portugal allies with the kingdom of Kochi in Malabar, Kerala. This is in order to colonize the region by overthrowing the powerful kingdom of Kozhikode, a long time war rival of Kochi. Portuguese military commander Alfonso de Noronho trains Kochi soldiers to use firearms and offers them cannons in exchange for trading crops and spices, however the Malabar natives are displeased with the new Cartaz license system they', '../xstreamvideos/MARAIKKAYAR T.mp4', '../xstreamimages/1mohanlal.jpg', 'Mohanlal ', '../xstreamimages/2kalyanip.jpg', '../xstreamimages/3arjun.jpg', 'Kalyani Priyadarshan ', 'Arjun ', '../xstreamimages/4keerthi.jpg', 'Keerthi Suresh ', '../xstreamimages/5prabhu.jpg', 'Prabhu ', 'showcase'),
(23, '../xstreamimages/bachlor p.jpg', 'BACHELOR ', '../xstreamvideos/Bachelor.mp4', 'This is the good movie to watch with your family to enjoy... ', 'Kolliwood ', '../xstreamimages/bachlor b.jpg', '../xstreamimages/d sathish selvakumar.jpg', 'Sathish Selvakumar ', '../xstreamimages/md gv.jpg', 'GV prakash ', 'U/A ', '2021 ', '2 hours 15 min ', 'Romantic Drama ', 'Tamil ', 'Darling (G.V. Prakash Kumar) is a laid-back youngster who doesn', '../xstreamvideos/Bachelor T.mp4', '../xstreamimages/1gv.jpg', 'GV prakash ', '../xstreamimages/2divyabharathi.jpg', '../xstreamimages/3bagavathiperumal.jpg', 'Divya Bharathi ', 'Bagavathi Perumal ', '../xstreamimages/4myskin.jpg', 'Myskin ', '../xstreamimages/5vijaymurugan.jpg', 'Vijay Murugan ', 'Trending'),
(24, '../xstreamimages/Methaku p.jpg', 'MEATHEAGU ', '../xstreamvideos/Methagu.mp4', 'This is the good movie to watch with your family to enjoy... ', 'Kolliwood ', '../xstreamimages/meathagu b.jpg', '../xstreamimages/d tkittu.jpg', 'T Kittu ', '../xstreamimages/no image.jpg', 'None ', 'U/A ', '2021 ', '2 hours 25 min ', 'Hishoric ', 'Tamil ', 'Methagu is a 2021 Indian Tamil-language political thriller film based on the life of Velupillai Prabhakaran. The release of the film was postponed several times due to legal issues, but finally had the digital release through OTT platform', '../xstreamvideos/methagu T.mp4', '../xstreamimages/1kuttymani.jpg', 'Kutty Mani ', '../xstreamimages/2lizzieantony.jpg', '../xstreamimages/3duraiappah.jpg', 'Lizzie Antony ', 'Duraiappah ', '../xstreamimages/no image.jpg', 'None ', '../xstreamimages/no image.jpg', 'None ', 'showcase'),
(25, '../xstreamimages/83 p.jpg', '83 ', '../xstreamvideos/83.mkv', 'This is the good movie to watch with your family to enjoy... ', 'Bolliwood ', '../xstreamimages/83 b.jpg', '../xstreamimages/d Kabir Khan.jpg', 'Kabir Khan ', '../xstreamimages/md julius packiam.jpg', 'Julius Packiam ', 'U ', '2021 ', '2 hours 15 min ', 'Hishoric ', 'Tamil ', 'A film based on the 1983 Cricket World Cup and India', '../xstreamvideos/83 T.mp4', '../xstreamimages/1ranveersingh.jpg', 'Ranveer Singh ', '../xstreamimages/2deepika.jpg', '../xstreamimages/3jeeva.jpg', 'Deepika Padukkon ', 'Jeeva ', '../xstreamimages/4aditi arya.jpg', 'Aditi Arya ', '../xstreamimages/5saqibsaleem.jpg', 'Saqib Saleem ', 'showcase'),
(26, '../xstreamimages/ppp p.jpg', 'Plane Panni Pandrom ', '../xstreamvideos/plann panni pandrum.mp4', 'This is the good movie to watch with your family to enjoy... ', 'Kolliwood ', '../xstreamimages/plan b.jpg', '../xstreamimages/d badri venk.jpg', 'Badri Venktesh ', '../xstreamimages/m md.jpg', 'Yuvan Shankar Raja ', 'U ', '2021 ', '2 hours 15 min ', 'Comidy ', 'Tamil ', 'Two friends, Sembi (Rio Raj) and Raju (Bala Saravanan), end up kidnapping a girl (Ramya Nambeesan) to know about the whereabouts of one of their sister (Poornima Ravi), who has eloped with her boyfriend Bharath Raj (Siddharth Vipin).A bride-seeing event that spoofs Paasa Malar, a driver (Tiger Garden Thangadurai) who offers to give the protagonists a short ride ending up travelling with them all the way to Kodaikanal, a guy who shoots videos of men in a state of undress and blackmails them, the manager (M. S. Bhaskar) of a glamorous star (Anaika Soti), who is taken for a ride by the friends, who owe him money, a monologue by the sister, which is amusing, even though its representation of a young woman from a supposedly downmarket locality like Royapuram is troubling. ', '../xstreamvideos/Plan Panni Pannanum T.mp4', '../xstreamimages/1rio.jpg', 'Rio ', '../xstreamimages/2rema.jpg', '../xstreamimages/3balasaravanan.jpg', 'Rema ', 'Bala Saravanan ', '../xstreamimages/4robo.jpg', 'Robo Shankar ', '../xstreamimages/5munishkanth.jpg', 'Munish Kanth ', 'movie'),
(27, '../xstreamimages/wp9555121.jpg', 'SARPATA PARAMBARAI ', '../xstreamvideos/Sarpatta Parambarai.mkv', 'This is the good movie to watch with your family to enjoy... ', 'Kolliwood ', '../xstreamimages/sarpata banner.jpg', '../xstreamimages/d paranjith.jpg', 'P.A. Ranjith  ', '../xstreamimages/md santhnar.jpg', 'Santhosh Naranayan ', 'U/A ', '2021 ', '2 hours 15 min ', 'Hishoric ', 'Tamil ', 'In North Madras (Karuppar Nagaram/Perumparacheri) in the early 1970s, Kabilan is a Dalit labourer at the Madras Port who wants to become a prominent boxer like his father Munirathnam. But his mother Bakkiyam refuses to let him do so, as Munirathnam', '../xstreamvideos/Sarpatta Parambarai T.mp4', '../xstreamimages/1arya.jpg', 'Araya ', '../xstreamimages/2dusharavjyan.jpg', '../xstreamimages/3johnkokken.jpg', 'Dushara Vijayan ', 'John Kokken ', '../xstreamimages/4sanchana.jpg', 'Sanchana ', '../xstreamimages/5johnvijay.jpg', 'John Vijay ', 'Trending');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentid` int(100) NOT NULL,
  `payername` varchar(100) NOT NULL,
  `paymenttype` varchar(100) NOT NULL,
  `paymentidno` varchar(300) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `paymentdate` varchar(100) NOT NULL,
  `paymenttime` varchar(100) NOT NULL,
  `expiredate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentid`, `payername`, `paymenttype`, `paymentidno`, `amount`, `paymentdate`, `paymenttime`, `expiredate`) VALUES
(1, 'prasanth@gmail.com', 'UPI', 'kiare@gmail.com', '399', '16/03/2021', '11:59:26 AM', '16-03-2022'),
(33, 'ramiya@gmail.com', 'Debit or Credit', '76776655544444', '399', '16/03/2022', '03:13:37 PM', '16-03-2023'),
(34, 'sai@gmail.com', 'Debit or Credit', '98989899889889', '399', '18/03/2022', '12:51:08 PM', '18-03-2023'),
(35, 'kishore@gmail.com', 'UPI', 'kishore@gmail.com', '399', '23/03/2022', '08:49:45 PM', '23-03-2023'),
(36, 'kishore@gmail.com', 'Debit or Credit', '89754552222221', '399', '23/03/2022', '08:50:24 PM', '23-03-2023'),
(37, 'vera@gmail.com', 'UPI', 'kiare@gmail.com', '399', '20/04/2022', '09:39:28 PM', '20-04-2023'),
(38, 'vera@gmail.com', 'Debit or Credit', '45444545545', '399', '20/04/2022', '09:39:46 PM', '20-04-2023'),
(39, 'hariharan@gmail.com', 'UPI', 'hari@gmail.com', '399', '04/05/2022', '08:51:31 AM', '04-05-2023'),
(40, 'hariharan@gmail.com', 'UPI', 'hari@gmail.com', '399', '04/05/2022', '08:52:28 AM', '04-05-2023'),
(41, 'hariharan@gmail.com', 'UPI', 'hari@gmail.com', '399', '04/05/2022', '08:53:26 AM', '04-05-2023'),
(42, 'hariharan@gmail.com', 'UPI', 'hari@gmail.com', '399', '04/05/2022', '08:54:13 AM', '04-05-2023'),
(43, 'hariharan@gmail.com', 'UPI', 'hari@gmail.com', '399', '04/05/2022', '08:54:17 AM', '04-05-2023'),
(44, 'hariharan@gmail.com', 'UPI', 'hari@gmail.com', '399', '04/05/2022', '08:55:29 AM', '04-05-2023'),
(45, 'hariharan@gmail.com', 'UPI', 'hari@gmail.com', '399', '04/05/2022', '08:55:53 AM', '04-05-2023'),
(46, 'hariharan@gmail.com', 'UPI', 'hari@gmail.com', '399', '04/05/2022', '08:56:21 AM', '04-05-2023'),
(47, 'hariharan@gmail.com', 'UPI', 'hari@gmail.com', '399', '04/05/2022', '08:57:40 AM', '04-05-2023'),
(48, 'nkk@gmail.com', 'UPI', 'dinesh@gmial.com', '399', '30/08/2022', '09:38:28 PM', '30-08-2023'),
(49, 'haven@gmail.com', 'Debit or Credit', '454545455', '399', '26/09/2022', '06:10:36 PM', '26-09-2023'),
(50, 'kishore@gmail.com', 'Debit or Credit', '55665656546', '399', '30/09/2022', '10:33:23 PM', '30-09-2023');

-- --------------------------------------------------------

--
-- Table structure for table `watchlater`
--

CREATE TABLE `watchlater` (
  `WLID` int(100) NOT NULL,
  `USNAME` varchar(100) NOT NULL,
  `MID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `watchlater`
--

INSERT INTO `watchlater` (`WLID`, `USNAME`, `MID`) VALUES
(34, ' stilldinesh02@gmail.com', '20'),
(36, 'stilldinesh02@gmail.com', '23'),
(37, 'prathip@gmail.com', '17'),
(38, 'prathip@gmail.com', '21'),
(39, 'prathip@gmail.com', '24'),
(40, 'prathip@gmail.com', '18'),
(41, 'ramiya@gmail.com', '18'),
(42, 'prathip@gmail.com', '22'),
(43, 'sai@gmail.com', '24'),
(44, 'jenistan@gmail.com', '17'),
(45, 'kishore@gmail.com', '25'),
(46, 'prathip@gmail.com', '22'),
(47, 'prathip@gmail.com', '22'),
(48, 'prathip@gmail.com', '22'),
(49, 'prathip@gmail.com', '22'),
(50, '', '15'),
(51, 'vera@gmail.com', '25');

-- --------------------------------------------------------

--
-- Table structure for table `xstreamsignintable`
--

CREATE TABLE `xstreamsignintable` (
  `ID` int(100) NOT NULL,
  `FULLNAME` varchar(100) NOT NULL,
  `EMAILID` varchar(100) NOT NULL,
  `MOBILENUMBER` int(200) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xstreamsignintable`
--

INSERT INTO `xstreamsignintable` (`ID`, `FULLNAME`, `EMAILID`, `MOBILENUMBER`, `PASSWORD`) VALUES
(7, 'dineshkumar', 'stilldinesh02@gmail.com', 989759455, 'password'),
(8, 'jenistan', 'jenistan@gmail.com', 98759425, 'password'),
(9, 'prathip', 'prathip@gmail.com', 945612865, 'password'),
(10, 'rambmo', 'rambo@gmail.com', 945624755, 'password'),
(11, 'karvin', 'karvin@gmail.com', 454545454, 'password'),
(12, 'prasanth', 'prasanth@gmail.com', 598785454, 'password'),
(13, 'ramiya', 'ramiya@gmail.com', 899844452, 'password'),
(14, 'saisandeep', 'sai@gmail.com', 86556565, 'password'),
(15, 'Kishore', 'kishore@gmail.com', 97898988, 'password'),
(16, 'vera', 'vera@gmail.com', 856565665, 'password'),
(17, 'hariharan', 'hariharan@gmail.com', 79888854, 'password'),
(18, 'knjkjk', 'nkk@gmail.com', 5656556, 'password'),
(19, 'haven', 'haven@gmail.com', 975554554, 'password'),
(20, 'kishore', 'kishore@gmail.com', 545645566, 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`MOVIEID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `watchlater`
--
ALTER TABLE `watchlater`
  ADD PRIMARY KEY (`WLID`);

--
-- Indexes for table `xstreamsignintable`
--
ALTER TABLE `xstreamsignintable`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `MOVIEID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `watchlater`
--
ALTER TABLE `watchlater`
  MODIFY `WLID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `xstreamsignintable`
--
ALTER TABLE `xstreamsignintable`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
