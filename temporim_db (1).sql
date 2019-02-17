-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 17-Fev-2019 às 18:06
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temporim_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `autor` varchar(100) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `descrever_imagem` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `data` datetime NOT NULL,
  `sugeridas` tinyint(1) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `blog`
--

INSERT INTO `blog` (`cod`, `autor`, `titulo`, `url`, `descricao`, `descrever_imagem`, `status`, `thumb`, `data`, `sugeridas`) VALUES
(5, 'versions of Lorem Ipsum', 'versions of Lorem Ipsum', 'versions-of-lorem-ipsum', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 'versions of Lorem Ipsum', 1, 'artigo/2019/02/testes-ois.jpg', '2019-02-17 01:26:34', 0),
(7, 'Junio Santos', 'Retorno das aulas de escola no AP que telhado desabou há um mês segue indefinido', 'retorno-das-aulas-de-escola-no-ap-que-telhado-desabou-ha-um-mes-segue-indefinido', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;O telhado de um dos corredores da Escola Estadual Everaldo da Silva Vasconcelos J&uacute;nior&nbsp;desabou h&aacute; exatamente um m&ecirc;s, mesmo per&iacute;odo em que o pr&eacute;dio inteiro est&aacute; interditado. A escola necessita de uma reforma grande e as aulas precisam ser remanejadas, mas, por enquanto, o in&iacute;cio do ano letivo na data prevista est&aacute; amea&ccedil;ado.&lt;/p&gt;\r\n&lt;p&gt;O desabamento ocorreu na noite do dia 12 de janeiro. A escola, que fica em&nbsp;Santana, a 17 quil&ocirc;metros de&nbsp;Macap&aacute;, estava celebrando o pr&oacute;prio anivers&aacute;rio com a celebra&ccedil;&atilde;o de um projeto. No momento da queda havia alunos debaixo da estrutura;&nbsp;sete adolescentes foram atingidos e ficaram feridos.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 'Prédio continua interditado e órgãos estudam possibilidade de aulas serem ministradas na quadra da escola Everaldo Vasconcelos. Dia 12 de janeiro estrutura desabou e deixou 7 feridos.', 1, 'artigo/2019/02/retorno-das-aulas-de-escola-no-ap-que-telhado-desabou-ha-um-mes-segue-indefinido-1550376962.jpg', '2019-02-16 03:00:27', 1),
(6, 'versions of Lorem Ipsum', 'versions of Lorem Ipsum', 'versions-of-lorem-ipsum', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 'versions of Lorem Ipsum', 1, 'artigo/2019/02/este-e-um-titulo-de-teste.jpg', '2019-02-17 01:25:47', 1),
(8, 'versions of Lorem Ipsum', 'versions of Lorem Ipsum', 'versions-of-lorem-ipsum', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 'versions of Lorem Ipsum', 1, 'artigo/2019/02/titulo-quatro-teste.jpg', '2019-02-17 01:24:04', 0),
(9, 'versions of Lorem Ipsum.', 'What is Lorem Ipsum?', 'what-is-lorem-ipsum', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt;&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt;&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 'versions of Lorem Ipsum.', 1, 'artigo/2019/02/what-is-lorem-ipsum.jpg', '2019-02-17 01:23:19', 1),
(10, 'versions of Lorem Ipsum.', 'versions of Lorem Ipsum.', 'versions-of-lorem-ipsum', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 'versions of Lorem Ipsum.', 1, 'artigo/2019/02/residencial-1550377041.jpg', '2019-02-17 01:22:51', 0),
(11, 'Junio Santos', 'versions of Lorem Ipsum', 'versions-of-lorem-ipsum', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 'versions of Lorem Ipsum', 1, 'artigo/2019/02/teste-teste-teste.jpg', '2019-02-17 01:21:51', 0),
(12, 'junio teste', 'Descrição Titulo', 'descricao-titulo', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 'descricao rodape da imagem', 1, 'artigo/2019/02/sete-teste.jpg', '2019-02-17 01:21:28', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`cod`, `titulo`, `url`, `status`, `data`) VALUES
(10, 'Portifólio', 'portifolio', 1, '2019-02-13 22:30:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `portifolio`
--

DROP TABLE IF EXISTS `portifolio`;
CREATE TABLE IF NOT EXISTS `portifolio` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `status` int(11) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `portifolio`
--

INSERT INTO `portifolio` (`cod`, `titulo`, `url`, `descricao`, `status`, `thumb`, `data`) VALUES
(1, 'Residencial Top', 'residencial-top', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;QD 502 Bl. B Asa Norte&nbsp;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'portfolio/2019/02/residencial-top-1550195788.jpg', '2019-02-14 23:56:28'),
(2, 'Condomínio Alamenda', 'condominio-alamenda', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;L2 Norte, QD 412 Bl. A&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'portfolio/2019/02/condominio-alamenda.jpg', '2019-02-14 23:58:34'),
(3, 'Prédio Avelan', 'predio-avelan', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Taguatinga Sul, QD TA 0&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'portfolio/2019/02/predio-avelan.jpg', '2019-02-15 00:00:02'),
(6, 'Residencial ', 'residencial', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Portal das Andorinhas &ndash; &Aacute;guas Claras&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'portfolio/2019/02/residencial-1550285727.jpg', '2019-02-16 00:55:27'),
(5, 'Residencial ', 'residencial', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Portal das Andorinhas &ndash; &Aacute;guas Claras&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'portfolio/2019/02/residencial.jpg', '2019-02-16 00:52:29'),
(7, 'ASA NORTE', 'asa-norte', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;SQN 408 BLOCO &ldquo;N&rdquo;&nbsp;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'portfolio/2019/02/asa-norte.jpg', '2019-02-16 00:56:28'),
(8, 'ASA SUL', 'asa-sul', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;SQS 416 BLOCO F&nbsp;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'portfolio/2019/02/asa-sul.jpg', '2019-02-16 00:57:27'),
(9, ' ASA SUL', 'asa-sul', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;SQS 416 BLOCO A&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'portfolio/2019/02/asa-sul-1550285918.jpg', '2019-02-16 00:58:38'),
(10, 'Condomínio ', 'condominio', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Boulevard das Palmerias &ndash; Samambaia&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'portfolio/2019/02/condominio.jpg', '2019-02-16 00:59:56'),
(11, 'Residencial ', 'residencial', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Maria Clara - Samambaia&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'portfolio/2019/02/residencial-1550286126.jpg', '2019-02-16 01:02:06'),
(12, 'RESIDENCIAL ', 'residencial', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;PAINEIRAS II - SOBRADINHO&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'portfolio/2019/02/residencial-1550286176.jpg', '2019-02-16 01:02:56'),
(13, ' RESIDENCIAL ', 'residencial', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;PARADISO CLUB - TAGUATINGA&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'portfolio/2019/02/residencial-1550286219.jpg', '2019-02-16 01:03:39'),
(14, 'LAUDO ', 'laudo', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;VISTORIA CAUTELAR&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', 1, 'portfolio/2019/02/laudo.jpg', '2019-02-16 01:58:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sliders`
--

DROP TABLE IF EXISTS `tb_sliders`;
CREATE TABLE IF NOT EXISTS `tb_sliders` (
  `slider_cod` int(11) NOT NULL AUTO_INCREMENT,
  `slider_titulo` varchar(255) NOT NULL,
  `slider_status` int(11) NOT NULL,
  `slider_link` varchar(255) NOT NULL,
  `slider_thumb` varchar(255) NOT NULL,
  `slider_tamanho` char(1) NOT NULL,
  PRIMARY KEY (`slider_cod`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_sliders`
--

INSERT INTO `tb_sliders` (`slider_cod`, `slider_titulo`, `slider_status`, `slider_link`, `slider_thumb`, `slider_tamanho`) VALUES
(8, 'Temporim Engenharia', 1, '#', 'sliders/2019/02/temporim-engenharia.jpg', 'h'),
(9, 'Temporim Quem Somos', 1, '#', 'sliders/2019/02/temporim-quem-somos.jpg', 'q');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nivel` int(1) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `bairro` varchar(180) NOT NULL,
  `cidade` varchar(180) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod`, `usuario`, `email`, `status`, `nome`, `senha`, `nivel`, `cep`, `bairro`, `cidade`, `endereco`, `estado`, `data`) VALUES
(2, 'Temporim', 'admin@temporim.com', 1, 'Temporim', '827ccb0eea8a706c4c34a16891f84e7b', 1, '72015-110', 'Taguatinga Sul (Taguatinga)', 'Brasília', 'QSA 11', 'DF', '2019-01-11 15:13:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
