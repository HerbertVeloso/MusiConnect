-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Abr-2017 às 04:58
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musiconnect`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artista`
--

CREATE TABLE `artista` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `artista`
--

INSERT INTO `artista` (`id`, `nome`, `foto`, `idUser`) VALUES
(1, 'Prismo', 'imagens/artista/prismo.jpg', 1),
(2, 'Geoxor', 'imagens/artista/geoxor.png', 4),
(3, 'Paul Flint', 'imagens/artista/paul_flint.jpg', 5),
(4, 'Valence', 'imagens/artista/valence.jpg', 6),
(5, 'Rob Gasser', 'imagens/artista/rob_gasser.jpg', 7),
(6, 'Dap Pan', 'imagens/artista/dap_pan.jpg', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `favorito`
--

CREATE TABLE `favorito` (
  `idUser` int(11) NOT NULL,
  `idMusic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `favorito`
--

INSERT INTO `favorito` (`idUser`, `idMusic`) VALUES
(1, 1),
(1, 3),
(1, 9),
(1, 12),
(2, 1),
(3, 1),
(3, 3),
(3, 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `musica`
--

CREATE TABLE `musica` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `genero` varchar(24) DEFAULT NULL,
  `artista` varchar(50) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `musica` varchar(255) DEFAULT NULL,
  `idArtista` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `musica`
--

INSERT INTO `musica` (`id`, `nome`, `genero`, `artista`, `ano`, `musica`, `idArtista`) VALUES
(1, 'Heathens', 'Dance & EDM', 'Prismo', 2016, 'musicas/Prismo_-_Heathens_(Twenty_One_Pilots_Cover).mp3', 1),
(3, 'Senses', 'Dance & EDM', 'Prismo', 2016, 'musicas/Prismo_-_Senses.mp3', 1),
(5, 'Higher', 'Eletronica', 'Geoxor', 2017, 'musicas/higher.mp3', 2),
(6, 'Somebody That I Used To Know', 'Indie POP', 'Gotye', 2012, 'musicas/Somebody_That_I_Used_To_Know.mp3', NULL),
(7, 'Savage', 'Dubstep', 'Paul Flint', 2016, 'musicas/savage.mp3', 3),
(8, 'Sock It To Them', 'Trap Dubstep', 'Paul Flint', 2017, 'musicas/sock_it_to_them.mp3', 3),
(9, 'Infinite', 'Eletronic', 'Valence', 2017, 'musicas/infinite.mp3', 4),
(10, 'Weakness', 'Dance & EDM', 'Prismo', 2017, 'musicas/weakness.mp3', 1),
(11, 'Careless Whisper', 'Dance & EDM', 'Prismo', 2017, 'musicas/careless_whisper.mp3', 1),
(12, 'Supersonic', 'Dance & EDM', 'Rob Gasser', 2017, 'musicas/supersonic.mp3', 5),
(13, 'Echoes', 'Dance & EDM', 'LFZ', 2017, 'musicas/LFZ_-_Echoes_[NCS_Release].mp3', NULL),
(14, 'Future', 'Dance & EDM', 'JJD', 2017, 'musicas/JJD_-_Future_[NCS_Release].mp3', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(24) DEFAULT NULL,
  `sobrenome` varchar(24) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `dt_nasc` date DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `nivel` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `sobrenome`, `email`, `dt_nasc`, `sexo`, `senha`, `nivel`) VALUES
(1, 'Herbert', 'Veloso', 'herbert@gmail.com', '1998-12-10', 'Masculino', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2),
(2, 'Cyntia', 'Oliveira', 'cyntia@gmail.com', '1979-03-20', 'Feminino', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
(3, 'Herbert', 'Veloso', 'admin@gmail.com', '1998-12-10', 'Masculino', '801d5938ab48ced1022db04feb0fe2da06b53f85', 3),
(4, 'Marcus', 'Onofre', 'marcus@gmail.com', '2001-01-01', 'Masculino', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2),
(5, 'Renan', 'Fragaio', 'renan@gmail.com', '2001-01-01', 'Masculino', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2),
(6, 'Ruan', 'Fragaio', 'ruan@gmail.com', '2001-01-01', 'Masculino', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2),
(7, 'Marcelo', 'Tardivo', 'marcelo@gmail.com', '2001-01-01', 'Masculino', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2),
(8, 'Matheus', 'Moreira', 'matheus@gmail.com', '2001-01-01', 'Masculino', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `favorito`
--
ALTER TABLE `favorito`
  ADD PRIMARY KEY (`idUser`,`idMusic`),
  ADD KEY `idMusic` (`idMusic`);

--
-- Indexes for table `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idArtista` (`idArtista`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artista`
--
ALTER TABLE `artista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `musica`
--
ALTER TABLE `musica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `artista`
--
ALTER TABLE `artista`
  ADD CONSTRAINT `artista_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `favorito`
--
ALTER TABLE `favorito`
  ADD CONSTRAINT `favorito_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `favorito_ibfk_2` FOREIGN KEY (`idMusic`) REFERENCES `musica` (`id`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `musica`
--
ALTER TABLE `musica`
  ADD CONSTRAINT `musica_ibfk_1` FOREIGN KEY (`idArtista`) REFERENCES `artista` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
