-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 29, 2018 at 04:23 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imobiliariadb`
--

DROP DATABASE IF EXISTS `imobiliariadb`;
CREATE DATABASE IF NOT EXISTS `imobiliariadb`;
USE `imobiliariadb`;

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `contato` varchar(45) DEFAULT NULL,
  `id_freguesia` int(11) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  KEY `fk_Cliente_Freguesia_idx` (`id_freguesia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `concelho`
--

DROP TABLE IF EXISTS `concelho`;
CREATE TABLE IF NOT EXISTS `concelho` (
  `id_concelho` int(11) NOT NULL AUTO_INCREMENT,
  `id_ilha` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  PRIMARY KEY (`id_concelho`),
  KEY `fk_Concelho_Ilha_idx` (`id_ilha`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `concelho`
--

INSERT INTO `concelho` (`id_concelho`, `id_ilha`, `nome`, `latitude`, `longitude`) VALUES
(1, 1, 'Ponta Delgada', 37.745, -25.696),
(2, 1, 'Ribeira Grande', 37.8187, -25.5414),
(3, 1, 'Lagoa', 37.7493, -25.5933),
(4, 1, 'Vila Franca do Campo', 37.7206, -25.4447),
(5, 1, 'Nordeste', 37.8321, -25.155),
(6, 1, 'Povoação', 37.7487, -25.2478),
(7, 2, 'Vila do Porto', 36.9662, -25.1905),
(8, 3, 'Angra do Heroísmo', 38.6595, -27.2477),
(9, 3, 'Praia da Vitória', 38.7329, -27.0817),
(10, 4, 'Santa da cruz da graciosa', 39.0882, -28.0338),
(11, 5, 'Calheta de São Jorge', 38.6027, -28.0226),
(12, 5, 'Velas', 38.6841, -28.222),
(13, 6, 'Lajes do Pico', 38.3957, -28.245),
(14, 6, 'Madalena', 38.5322, -28.5381),
(15, 6, 'São Roque do Pico', 38.5166, -28.3182),
(16, 7, 'Horta', 38.5347, -28.6543),
(17, 8, 'Lajes das Flores', 39.3804, -31.1864),
(18, 8, 'Santa Cruz das Flores', 39.4557, -31.1418),
(19, 9, 'Vila do Corvo', 36.9662, -25.1905);

-- --------------------------------------------------------

--
-- Table structure for table `destaque`
--

DROP TABLE IF EXISTS `destaque`;
CREATE TABLE IF NOT EXISTS `destaque` (
  `id_imovel` int(11) NOT NULL,
  `estado` ENUM('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_imovel`),
  KEY `fk_Destaque_Imovel1_idx` (`id_imovel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `finalidade`
--

DROP TABLE IF EXISTS `finalidade`;
CREATE TABLE IF NOT EXISTS `finalidade` (
  `id_finalidade` int(11) NOT NULL,
  `finalidade` varchar(45) NOT NULL,
  PRIMARY KEY (`id_finalidade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `finalidade`
--

INSERT INTO `finalidade` (`id_finalidade`, `finalidade`) VALUES
(1, 'Comprar'),
(2, 'Arrendar');

-- --------------------------------------------------------

--
-- Table structure for table `freguesia`
--

DROP TABLE IF EXISTS `freguesia`;
CREATE TABLE IF NOT EXISTS `freguesia` (
  `id_freguesia` int(11) NOT NULL AUTO_INCREMENT,
  `id_concelho` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  PRIMARY KEY (`id_freguesia`),
  KEY `fk_Freguesia_Concelho_idx` (`id_concelho`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `freguesia`
--

INSERT INTO `freguesia` (`id_freguesia`, `id_concelho`, `nome`, `latitude`, `longitude`) VALUES
(1, 1, 'Ajuda da Bretanha', 37.8981, -25.7589),
(2, 1, 'Arrifes', 37.7624, -25.733),
(3, 1, 'Candelária', 37.827, -25.8408),
(4, 1, 'Vila das Capelas', 37.8353, -25.7044),
(5, 1, 'Covoada', 37.7855, -25.7506),
(6, 1, 'Fajã de Baixo', 37.7591, -25.6735),
(7, 1, 'Fajã de Cima', 37.7688, -25.6791),
(8, 1, 'Fenais da Luz', 37.8265, -25.6512),
(9, 1, 'Feteiras', 37.803, -25.8093),
(10, 1, 'Ginetes', 37.8501, -25.8554),
(11, 1, 'Livramento', 37.7648, -25.6211),
(12, 1, 'Mosteiros', 37.8917, -25.8318),
(13, 1, 'Pilar da Bretanha', 37.8981, -25.7639),
(14, 1, 'Relva', 37.7532, -25.7364),
(15, 1, 'Remédios', 37.8862, -25.7443),
(16, 1, 'Santa Bárbara', 37.7987, -25.5519),
(17, 1, 'Santa Clara', 37.7363, -25.6946),
(18, 1, 'Santo António', 37.8573, -25.7209),
(19, 1, 'São José', 37.7399, -25.6808),
(20, 1, 'São Pedro', 37.7453, -25.6571),
(21, 1, 'São Roque', 37.7555, -25.6765),
(22, 1, 'São Sebastião', 37.7401, -25.6704),
(23, 1, 'São Vicente Ferreira', 37.8214, -25.7042),
(24, 1, 'Sete Cidades', 37.8593, -25.8127),
(25, 2, 'Calhetas', 37.8213, -25.6182),
(26, 2, 'Conceição', 37.8186, -25.5414),
(27, 2, 'Fenais da Ajuda', 37.8511, -25.334),
(28, 2, 'Lomba da Maia', 37.8309, -25.3713),
(29, 2, 'Lomba de São Pedro', 37.85, -25.3188),
(30, 2, 'Maia', 37.8315, -25.4008),
(31, 2, 'Pico da Pedra', 37.8027, -25.6299),
(32, 2, 'Porto Formoso', 37.8226, -25.4356),
(33, 2, 'Vila do Rabo de Peixe', 37.8069, -25.6166),
(34, 2, 'Ribeira Seca', 37.8078, -25.5592),
(35, 2, 'Ribeirinha', 37.827, -25.5138),
(36, 2, 'Santa Bárbara', 37.7987, -25.5519),
(37, 2, 'São Brás', 37.8191, -25.4205),
(38, 3, 'Vila de Água de Pau', 37.7212, -25.5151),
(39, 3, 'Cabouco', 37.7628, -25.574),
(40, 3, 'Rosário', 37.7452, -25.578),
(41, 3, 'Ribeira Chã', 37.7213, -25.4925),
(42, 3, 'Santa Cruz', 37.7439, -25.5689),
(43, 4, 'Água De Alto', 37.7204, -25.4667),
(44, 4, 'Ponta Garça', 37.7209, -25.3754),
(45, 4, 'Ribeira das Taínhas', 37.7181, -25.4108),
(46, 4, 'Ribeira Seca', 37.7212, -25.4279),
(47, 4, 'São Pedro', 37.7206, -25.4447),
(48, 4, 'São Miguel', 37.7206, -25.4447),
(49, 5, 'Achada', 37.8533, -25.2746),
(50, 5, 'Achadinha', 37.8497, -25.292),
(51, 5, 'Lomba da Fazenda', 37.8447, -25.1753),
(52, 5, 'Nordeste', 37.8333, -25.1464),
(53, 5, 'Salga', 37.8458, -25.3086),
(54, 5, 'Santo António de Nordestinho', 37.8522, -25.2125),
(55, 5, 'São Pedro Nordestinho', 37.8503, -25.2011),
(56, 6, 'Água Retorta', 37.7623, -25.164),
(57, 6, 'Faial da Terra', 37.7451, -25.207),
(58, 6, 'Furnas', 37.7736, -25.319),
(59, 6, 'Remédios', 37.8863, -25.7399),
(60, 6, 'Povoação', 37.7487, -25.2478),
(61, 6, 'Ribeira Quente', 37.7335, -25.307),
(62, 7, 'Almagreira', 36.9651, -25.113),
(63, 7, 'Santa Bárbara', 36.9825, -25.0789),
(64, 7, 'Santo Espírito', 36.9588, -25.063),
(65, 7, 'São Pedro', 36.9797, -25.1351),
(66, 7, 'Vila do Porto', 36.9662, -25.1905),
(67, 8, 'Altares', 38.7914, -27.3038),
(68, 8, 'Cinco Ribeiras', 38.6875, -27.3172),
(69, 8, 'Doze Ribeiras', 38.7155, -27.368),
(70, 8, 'Feteira', 38.6541, -27.1585),
(71, 8, 'Conceição', 38.6562, -27.2127),
(72, 8, 'Porto Judeu', 38.6492, -27.1274),
(73, 8, 'Posto Santo', 38.6787, -27.2401),
(74, 8, 'Raminho', 38.7884, -27.3337),
(75, 8, 'Ribeirinha', 38.6617, -27.1898),
(76, 8, 'Santa Bárbara', 38.6963, -27.3461),
(77, 8, 'Santa Luzia', 38.6607, -27.2294),
(78, 8, 'São Mateus da Calheta', 38.6641, -27.2863),
(79, 8, 'São Bento', 38.6607, -27.2133),
(80, 8, 'São Pedro', 38.6575, -27.2297),
(81, 8, 'Sé', 38.6556, -27.2211),
(82, 8, 'Serreta', 38.7459, -27.3745),
(83, 8, 'Terra chá', 38.6723, -27.261),
(84, 8, 'Vila de São Sebastião', 38.6677, -27.0953),
(85, 9, 'Agualva', 38.7755, -27.1707),
(86, 9, 'Biscoitos', 38.7919, -27.2601),
(87, 9, 'Cabo da Praia', 38.7053, -27.0593),
(88, 9, 'Fonte do Bastardo', 38.692, -27.0949),
(89, 9, 'Fontinhas', 38.739, -27.1221),
(90, 9, 'Lajes', 38.7614, -27.1134),
(91, 9, 'Porto Martins', 38.6815, -27.082),
(92, 9, 'Santa Cruz', 38.7306, -27.0751),
(93, 9, 'Quatro Ribeiras', 38.788, -27.2314),
(94, 9, 'São Brás', 38.7638, -27.1366),
(95, 9, 'Vila Nova', 38.7801, -27.1589),
(96, 10, 'Santa Cruz da Graciosa', 39.0517, -28.0122),
(97, 10, 'São Mateus', 39.0471, -27.9865),
(98, 10, 'Guadalupe', 39.0614, -28.0378),
(99, 10, 'Luz', 39.0235, -28.0015),
(100, 11, 'Calheta', 38.6027, -28.0226),
(101, 11, 'Norte Pequeno', 38.6489, -28.0014),
(102, 11, 'Ribeira Seca', 38.6022, -28.005),
(103, 11, 'Santo Antão', 38.6022, -28.005),
(104, 11, 'Vila do Topo', 38.5492, -27.7675),
(105, 12, 'Manadas', 38.6342, -28.1062),
(106, 12, 'Norte Grande', 38.6733, -28.0739),
(107, 12, 'Rosais', 38.7187, -28.2609),
(108, 12, 'Santo Amaro', 38.6806, -28.1949),
(109, 12, 'Urzelina', 38.6525, -28.1461),
(110, 12, 'Velas', 38.6841, -28.2307),
(111, 13, 'Calheta de Nesquim', 38.4035, -28.0874),
(112, 13, 'Lajes do Pico', 38.3957, -28.245),
(113, 13, 'Piedade', 38.4273, -28.0625),
(114, 13, 'Ribeiras', 38.4046, -28.1919),
(115, 13, 'Ribeirinha', 37.827, -25.505),
(116, 13, 'São João', 38.4159, -28.3422),
(117, 14, 'Bandeiras', 38.5379, -28.4692),
(118, 14, 'Candelária', 38.4645, -28.5209),
(119, 14, 'Criação Velha', 38.5106, -28.53),
(120, 14, 'Madalena', 38.5322, -28.5381),
(121, 14, 'São Caetano', 38.4276, -28.433),
(122, 14, 'São Mateus', 38.4317, -28.4663),
(123, 15, 'Prainha', 38.4726, -28.2111),
(124, 15, 'Santa Luzia', 38.5472, -28.4003),
(125, 15, 'Santo Amaro', 38.4549, -28.179),
(126, 15, 'Santo António', 38.5352, -28.3455),
(127, 15, 'São Roque do Pico', 38.5166, -28.3182),
(128, 16, 'Angústias', 38.529, -28.6313),
(129, 16, 'Capelo', 38.5858, -28.8066),
(130, 16, 'Castelo Branco', 38.522, -28.7205),
(131, 16, 'Cedros', 38.631, -28.6956),
(132, 16, 'Conceição', 38.5494, -28.632),
(133, 16, 'Feteira', 38.5268, -28.6768),
(134, 16, 'Flamengos', 38.5479, -28.6574),
(135, 16, 'Matriz', 38.539, -28.6318),
(136, 16, 'Pedro Miguel', 38.5743, -28.6325),
(137, 16, 'Praia do Almoxarife', 38.5581, -28.6295),
(138, 16, 'Praia do Norte', 38.6049, -28.7703),
(139, 16, 'Salão', 38.614, -28.6624),
(140, 17, 'Fajã Grande', 39.4547, -31.2664),
(141, 17, 'Fajãzinha', 39.4337, -31.2552),
(142, 17, 'Fazenda', 39.3898, -31.175),
(143, 17, 'Lajedo', 39.3922, -31.2506),
(144, 17, 'Lajes das Flores', 39.3804, -31.1864),
(145, 17, 'Lomba', 39.4024, -31.1615),
(146, 17, 'Mosteiro', 39.4129, -31.2523),
(147, 18, 'Caveira', 39.4302, -31.1524),
(148, 18, 'Cedros', 39.481, -31.1594),
(149, 18, 'Ponta Delgada', 39.5153, -31.2188),
(150, 18, 'Santa Cruz', 39.4557, -31.1418);

-- --------------------------------------------------------

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `id_utilizador` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `contacto` varchar(45) NOT NULL,
  PRIMARY KEY (`id_utilizador`),
  KEY `fk_Agencia_Tipo_Utilizador_idx` (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `funcionario`
--

INSERT INTO `funcionario` (`id_utilizador`, `id_tipo`, `email`, `password`, `nome`, `sobrenome`, `contacto`) VALUES
(1, 1, 'admin@admin.com', '12345678', 'Miguel', 'Pimentel', '961445852');

-- --------------------------------------------------------

--
-- Table structure for table `habitacao`
--

DROP TABLE IF EXISTS `habitacao`;
CREATE TABLE IF NOT EXISTS `habitacao` (
  `id_imovel` int(11) NOT NULL,
  `id_tipologia` int(11) NOT NULL,
  `quartos` int(11) NOT NULL,
  `wc` int(11) NOT NULL,
  `cozinha` int(11) NOT NULL,
  `garagem` tinyint(4) NOT NULL,
  `area_bruta` int(11) NOT NULL,
  PRIMARY KEY (`id_imovel`),
  KEY `fk_tipologia_habitcao_idx` (`id_tipologia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ilha`
--

DROP TABLE IF EXISTS `ilha`;
CREATE TABLE IF NOT EXISTS `ilha` (
  `id_ilha` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  PRIMARY KEY (`id_ilha`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ilha`
--

INSERT INTO `ilha` (`id_ilha`, `nome`, `latitude`, `longitude`) VALUES
(1, 'São Miguel', 37.8073, -25.7752),
(2, 'Santa Maria', 36.9728, -25.1694),
(3, 'Terçeira', 38.7213, -27.3506),
(4, 'Graciosa', 39.0529, -28.0801),
(5, 'São Jorge', 38.6452, -28.1752),
(6, 'Pico', 38.4719, -28.4252),
(7, 'Faial', 38.5797, -28.7866),
(8, 'Flores', 39.4481, -31.2667),
(9, 'Corvo', 39.6982, -31.1406);

-- --------------------------------------------------------

--
-- Table structure for table `imagem`
--

DROP TABLE IF EXISTS `imagem`;
CREATE TABLE IF NOT EXISTS `imagem` (
  `id_imagem` int(11) NOT NULL AUTO_INCREMENT,
  `id_imovel` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `ficheiro` varchar(45) NOT NULL,
  PRIMARY KEY (`id_imagem`),
  KEY `fk_Imagem_Imovel_idx` (`id_imovel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `imovel`
--

DROP TABLE IF EXISTS `imovel`;
CREATE TABLE IF NOT EXISTS `imovel` (
  `id_imovel` int(11) NOT NULL AUTO_INCREMENT,
  `id_gestor` int(11) NOT NULL,
  `id_finalidade` int(11) NOT NULL,
  `id_tipo_imovel` int(11) NOT NULL,
  `id_freguesia` int(11) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `preco` double NOT NULL,
  `area` varchar(45) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `cod_postal` varchar(45) NOT NULL,
  `situacao` enum('0','1') NOT NULL COMMENT 'estado: 0=ativo; 1=concluído',
  `estado` enum('Novo','Usado') NOT NULL,
  PRIMARY KEY (`id_imovel`),
  KEY `fk_Imovel_Freguesia_idx` (`id_freguesia`),
  KEY `fk_Imovel_Agencia_idx` (`id_gestor`),
  KEY `fk_Imovel_Tipo_Imovel_idx` (`id_tipo_imovel`),
  KEY `fk_Imovel_Finalidade_idx` (`id_finalidade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tipologia`
--

DROP TABLE IF EXISTS `tipologia`;
CREATE TABLE IF NOT EXISTS `tipologia` (
  `id_tipologia` int(11) NOT NULL,
  `tipologia` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipologia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipologia`
--

INSERT INTO `tipologia` (`id_tipologia`, `tipologia`) VALUES
(1, 'T1'),
(2, 'T2'),
(3, 'T3'),
(4, 'T4'),
(5, 'T5'),
(6, 'T6');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_imovel`
--

DROP TABLE IF EXISTS `tipo_imovel`;
CREATE TABLE IF NOT EXISTS `tipo_imovel` (
  `id_tipo_imovel` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_imovel` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipo_imovel`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipo_imovel`
--

INSERT INTO `tipo_imovel` (`id_tipo_imovel`, `tipo_imovel`) VALUES
(1, 'Moradia'),
(2, 'Apartamento'),
(3, 'Terreno'),
(4, 'Quinta'),
(5, 'Armazem');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_utilizador`
--

DROP TABLE IF EXISTS `tipo_utilizador`;
CREATE TABLE IF NOT EXISTS `tipo_utilizador` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipo_utilizador`
--

INSERT INTO `tipo_utilizador` (`id_tipo`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Gestor');

-- --------------------------------------------------------

--
-- Table structure for table `visita`
--

DROP TABLE IF EXISTS `visita`;
CREATE TABLE IF NOT EXISTS `visita` (
  `id_visita` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_imovel` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `estado` enum('Em pedido','Aceite','Negado') NOT NULL,
  PRIMARY KEY (`id_visita`),
  KEY `fk_Cliente_has_Imovel_Imovel_idx` (`id_imovel`),
  KEY `fk_Cliente_has_Imovel_Cliente_idx` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_Cliente_Freguesia` FOREIGN KEY (`id_freguesia`) REFERENCES `freguesia` (`id_freguesia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `concelho`
--
ALTER TABLE `concelho`
  ADD CONSTRAINT `fk_Concelho_Ilha` FOREIGN KEY (`id_ilha`) REFERENCES `ilha` (`id_ilha`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `destaque`
--
ALTER TABLE `destaque`
  ADD CONSTRAINT `fk_Destaque_Imovel1` FOREIGN KEY (`id_imovel`) REFERENCES `imovel` (`id_imovel`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `freguesia`
--
ALTER TABLE `freguesia`
  ADD CONSTRAINT `fk_Freguesia_Concelho` FOREIGN KEY (`id_concelho`) REFERENCES `concelho` (`id_concelho`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `fk_Agencia_Tipo_Utilizador` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_utilizador` (`id_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `habitacao`
--
ALTER TABLE `habitacao`
  ADD CONSTRAINT `fk_imovel_habiticao` FOREIGN KEY (`id_imovel`) REFERENCES `imovel` (`id_imovel`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tipologia_habitcao` FOREIGN KEY (`id_tipologia`) REFERENCES `tipologia` (`id_tipologia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `imagem`
--
ALTER TABLE `imagem`
  ADD CONSTRAINT `fk_Imagem_Imovel` FOREIGN KEY (`id_imovel`) REFERENCES `imovel` (`id_imovel`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `imovel`
--
ALTER TABLE `imovel`
  ADD CONSTRAINT `fk_Imovel_Agencia` FOREIGN KEY (`id_gestor`) REFERENCES `funcionario` (`id_utilizador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Imovel_Finalidade` FOREIGN KEY (`id_finalidade`) REFERENCES `finalidade` (`id_finalidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Imovel_Freguesia` FOREIGN KEY (`id_freguesia`) REFERENCES `freguesia` (`id_freguesia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Imovel_Tipo_Imovel` FOREIGN KEY (`id_tipo_imovel`) REFERENCES `tipo_imovel` (`id_tipo_imovel`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `visita`
--
ALTER TABLE `visita`
  ADD CONSTRAINT `fk_Cliente_has_Imovel_Cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Cliente_has_Imovel_Imovel` FOREIGN KEY (`id_imovel`) REFERENCES `imovel` (`id_imovel`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
