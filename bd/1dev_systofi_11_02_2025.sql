-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2025 at 07:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1dev_systofi`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('6djloemvnk4s3t74iti1pq1ng4ddo0da', '::1', 1738235980, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733383233353938303b6e6f6d655f61646d696e7c733a31343a22436cc3a17564696f204a6fc3a36f223b656d61696c5f61646d696e7c733a31353a2261646d696e4061646d696e2e636f6d223b75726c5f696d6167655f757365725f61646d696e7c4e3b69645f61646d696e7c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('b4amsoqda534kuaob430q2m2ntajbm7l', '::1', 1738236939, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733383233363933393b6e6f6d655f61646d696e7c733a31343a22436cc3a17564696f204a6fc3a36f223b656d61696c5f61646d696e7c733a31353a2261646d696e4061646d696e2e636f6d223b75726c5f696d6167655f757365725f61646d696e7c4e3b69645f61646d696e7c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('gtv10e2ed5vqi931c9p9qeecgf3djf13', '::1', 1738236996, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733383233363933393b6e6f6d655f61646d696e7c733a31343a22436cc3a17564696f204a6fc3a36f223b656d61696c5f61646d696e7c733a31353a2261646d696e4061646d696e2e636f6d223b75726c5f696d6167655f757365725f61646d696e7c4e3b69645f61646d696e7c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('vd0n3eel1s08e2i1b4iq1iq8aqiion39', '::1', 1738237864, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733383233373836343b6e6f6d655f61646d696e7c733a31343a22436cc3a17564696f204a6fc3a36f223b656d61696c5f61646d696e7c733a31353a2261646d696e4061646d696e2e636f6d223b75726c5f696d6167655f757365725f61646d696e7c4e3b69645f61646d696e7c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('iqr6qqark1lovlataqt6jiq9psclm91j', '::1', 1738238051, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733383233373836343b6e6f6d655f61646d696e7c733a31343a22436cc3a17564696f204a6fc3a36f223b656d61696c5f61646d696e7c733a31353a2261646d696e4061646d696e2e636f6d223b75726c5f696d6167655f757365725f61646d696e7c4e3b69645f61646d696e7c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('627omnnf7lpdq6nsamnq6qfs2a56obu9', '::1', 1738264520, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733383236343532303b6e6f6d655f61646d696e7c733a31343a22436cc3a17564696f204a6fc3a36f223b656d61696c5f61646d696e7c733a31353a2261646d696e4061646d696e2e636f6d223b75726c5f696d6167655f757365725f61646d696e7c4e3b69645f61646d696e7c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('e3qfvbmrl39nni7jfro1spn3n037k5dg', '::1', 1738264540, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733383236343532303b6e6f6d655f61646d696e7c733a31343a22436cc3a17564696f204a6fc3a36f223b656d61696c5f61646d696e7c733a31353a2261646d696e4061646d696e2e636f6d223b75726c5f696d6167655f757365725f61646d696e7c4e3b69645f61646d696e7c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('b7oiq1g31mh4bbbc2115u5djjedueddr', '::1', 1738268197, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733383236383139373b6e6f6d655f61646d696e7c733a31343a22436cc3a17564696f204a6fc3a36f223b656d61696c5f61646d696e7c733a31353a2261646d696e4061646d696e2e636f6d223b75726c5f696d6167655f757365725f61646d696e7c4e3b69645f61646d696e7c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('o4ajq36sg9sl6bj66gs26ed2i5fola94', '::1', 1738268500, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733383236383530303b6e6f6d655f61646d696e7c733a31343a22436cc3a17564696f204a6fc3a36f223b656d61696c5f61646d696e7c733a31353a2261646d696e4061646d696e2e636f6d223b75726c5f696d6167655f757365725f61646d696e7c4e3b69645f61646d696e7c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('j6e7d0unma7n6kgca4j9v8nt28mo5sk9', '::1', 1738269323, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733383236393332333b6e6f6d655f61646d696e7c733a31343a22436cc3a17564696f204a6fc3a36f223b656d61696c5f61646d696e7c733a31353a2261646d696e4061646d696e2e636f6d223b75726c5f696d6167655f757365725f61646d696e7c4e3b69645f61646d696e7c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('oafprbhuib5jc697iq4jp2ehkuput99j', '::1', 1738269346, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733383236393332333b6e6f6d655f61646d696e7c733a31343a22436cc3a17564696f204a6fc3a36f223b656d61696c5f61646d696e7c733a31353a2261646d696e4061646d696e2e636f6d223b75726c5f696d6167655f757365725f61646d696e7c4e3b69645f61646d696e7c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b),
('v47qu97o80kck5d6ols7ba6ojlqmvlgk', '::1', 1738269665, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733383236393631303b6e6f6d655f61646d696e7c733a31343a22436cc3a17564696f204a6fc3a36f223b656d61696c5f61646d696e7c733a31353a2261646d696e4061646d696e2e636f6d223b75726c5f696d6167655f757365725f61646d696e7c4e3b69645f61646d696e7c733a313a2231223b7065726d697373616f7c733a313a2231223b6c6f6761646f7c623a313b);

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `idClientes` int(11) NOT NULL,
  `nomeCliente` varchar(75) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nuit` int(20) UNSIGNED NOT NULL,
  `telefone` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `celular` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `celular2` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `endereco` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cidade` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `contato` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `categoria` varchar(50) NOT NULL,
  `tipo_cliente` tinyint(1) NOT NULL,
  `created_at` date DEFAULT NULL,
  `update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`idClientes`, `nomeCliente`, `nuit`, `telefone`, `celular`, `celular2`, `email`, `endereco`, `cidade`, `contato`, `categoria`, `tipo_cliente`, `created_at`, `update_at`) VALUES
(1, 'Wedd DDsds', 121245367, '800000000', '(+258) 82.253.2148', '258874521458', 'admin@admin.com', 'Av. Martires da Machava nr 1580', 'Vladimir Lenine nr 174', 'Jose Manuel', 'Empresa Privada', 0, '2025-01-30', NULL),
(2, 'Berta Magumisse', 123456713, '800000000', '', '', 'admin@admin.com', 'Av. Martires da Machava nr 1580', 'Vladimir Lenine nr 174', '', 'Empresa Pública', 1, '2025-01-30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `idCompra` int(11) NOT NULL,
  `modelo` varchar(40) DEFAULT NULL,
  `pertencente` varchar(40) DEFAULT NULL,
  `dataCompra` date DEFAULT NULL,
  `recibo` varchar(100) DEFAULT NULL,
  `valorTotal` decimal(15,2) DEFAULT NULL,
  `pago` tinyint(1) DEFAULT NULL,
  `margemLucro` int(11) NOT NULL,
  `fornecedores_id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `configuracoes`
--

CREATE TABLE `configuracoes` (
  `idConfig` int(11) NOT NULL,
  `config` varchar(20) NOT NULL,
  `valor` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `configuracoes`
--

INSERT INTO `configuracoes` (`idConfig`, `config`, `valor`) VALUES
(1, 'app_name', 'SYSTOFI'),
(2, 'app_theme', 'white'),
(3, 'per_page', '10'),
(4, 'os_notification', 'cliente'),
(5, 'control_estoque', '1'),
(6, 'notifica_whats', 'Prezado(a), {CLIENTE_NOME} a OS de nº {NUMERO_OS} teve o status alterado para :{STATUS_OS} segue a descrição {DESCRI_PRODUTOS} com valor total de {VALOR_OS}!\r\n Para mais informações entre em contato conosco.\r\n Atenciosamente, {EMITENTE} {TELEFONE_EMITENTE}.'),
(7, 'control_baixa', '0'),
(8, 'control_editos', '1'),
(9, 'control_datatable', '1'),
(10, 'pix_key', ''),
(11, 'os_status_list', '[\"Aberto\",\"Faturado\",\"Negocia\\u00e7\\u00e3o\",\"Em Andamento\",\"Or\\u00e7amento\",\"Finalizado\",\"Cancelado\",\"Aguardando Pe\\u00e7as\",\"Aprovado\"]'),
(12, 'control_edit_vendas', '1'),
(13, 'email_automatico', '1'),
(14, 'control_2vias', '0');

-- --------------------------------------------------------

--
-- Table structure for table `cotacoes`
--

CREATE TABLE `cotacoes` (
  `idCotacoes` int(11) NOT NULL,
  `dataC` date NOT NULL,
  `datAprovacao` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `servicos` tinyint(1) DEFAULT NULL,
  `wSolicitado` text DEFAULT NULL,
  `diagnostico` text DEFAULT NULL,
  `observacoes` text DEFAULT NULL,
  `viaturas_id` varchar(25) DEFAULT NULL,
  `clientes_id` int(11) DEFAULT NULL,
  `usuarios_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_queue`
--

CREATE TABLE `email_queue` (
  `id` int(11) NOT NULL,
  `to` varchar(255) NOT NULL,
  `cc` varchar(255) DEFAULT NULL,
  `bcc` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `status` enum('pending','sending','sent','failed') DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `headers` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `nuit` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `banco1` varchar(50) DEFAULT NULL,
  `conta1` varchar(50) DEFAULT NULL,
  `nib1` varchar(50) DEFAULT NULL,
  `banco2` varchar(50) DEFAULT NULL,
  `conta2` varchar(50) DEFAULT NULL,
  `nib2` varchar(50) DEFAULT NULL,
  `banco3` varchar(50) DEFAULT NULL,
  `conta3` varchar(50) DEFAULT NULL,
  `nib3` varchar(50) DEFAULT NULL,
  `moeda` varchar(15) DEFAULT NULL,
  `url_logo` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fornecedores`
--

CREATE TABLE `fornecedores` (
  `idFornecedores` int(11) NOT NULL,
  `nomeFornecedor` varchar(75) NOT NULL,
  `nuit` int(20) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `celular2` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dataCadastro` date DEFAULT NULL,
  `endereco` varchar(150) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `contato` varchar(45) DEFAULT NULL,
  `lastUpdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `garantias`
--

CREATE TABLE `garantias` (
  `idGarantias` int(11) NOT NULL,
  `dataGarantia` date DEFAULT NULL,
  `refGarantia` varchar(15) DEFAULT NULL,
  `textoGarantia` text DEFAULT NULL,
  `usuarios_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `itens_de_compras`
--

CREATE TABLE `itens_de_compras` (
  `idItens` int(11) NOT NULL,
  `preco` varchar(15) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `subTotal` varchar(45) DEFAULT NULL,
  `compras_id` int(11) NOT NULL,
  `produtos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobcard`
--

CREATE TABLE `jobcard` (
  `idJc` int(11) NOT NULL,
  `km` int(15) DEFAULT NULL,
  `dataInicial` date DEFAULT NULL,
  `dataFinal` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `requisicao` varchar(45) DEFAULT NULL,
  `jobCard` varchar(15) DEFAULT NULL,
  `oficina` varchar(50) DEFAULT NULL,
  `garantia` varchar(45) DEFAULT NULL,
  `wSolicitado` text DEFAULT NULL,
  `dianostico` text DEFAULT NULL,
  `observacoes` text DEFAULT NULL,
  `intervencoes` text DEFAULT NULL,
  `valorTotal` varchar(25) DEFAULT NULL,
  `faturado` tinyint(1) NOT NULL,
  `clientes_id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `lancamento_id` int(11) DEFAULT NULL,
  `garantias_id` int(11) DEFAULT NULL,
  `viaturas_id` int(11) DEFAULT NULL,
  `tecnicos_id` int(11) DEFAULT NULL,
  `viaMatricula` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lancamentos`
--

CREATE TABLE `lancamentos` (
  `idLancamentos` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `valor` decimal(15,2) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `baixado` tinyint(1) DEFAULT 0,
  `data_pagamento` date DEFAULT NULL,
  `pertencente` varchar(100) DEFAULT NULL,
  `recibo` varchar(15) NOT NULL,
  `valorservico` decimal(15,2) NOT NULL,
  `valorproduto` decimal(15,2) DEFAULT NULL,
  `observacao` varchar(255) NOT NULL,
  `data_vencimento` date NOT NULL,
  `cliente_fornecedor` varchar(255) DEFAULT NULL,
  `forma_pgto` varchar(100) DEFAULT NULL,
  `anexo` varchar(250) DEFAULT NULL,
  `clientes_id` int(11) DEFAULT NULL,
  `fornecedores_id` int(11) DEFAULT NULL,
  `categorias_id` int(11) DEFAULT NULL,
  `contas_id` int(11) DEFAULT NULL,
  `vendas_id` int(11) DEFAULT NULL,
  `usuarios_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `idLogs` int(11) NOT NULL,
  `usuario` varchar(80) DEFAULT NULL,
  `tarefa` varchar(100) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`idLogs`, `usuario`, `tarefa`, `data`, `hora`, `ip`) VALUES
(1, NULL, 'Efetuou login no sistema', '2025-01-30', '12:12:36', '::1'),
(2, NULL, 'Efetuou login no sistema', '2025-01-30', '12:43:21', '::1'),
(3, NULL, 'Efetuou login no sistema', '2025-01-30', '20:08:54', '::1'),
(4, NULL, 'Efetuou login no sistema', '2025-01-30', '21:07:29', '::1'),
(5, NULL, 'Alterou uma permissão. ID: 1', '2025-01-30', '21:17:15', '::1'),
(6, NULL, 'Alterou uma permissão. ID: 1', '2025-01-30', '21:18:13', '::1'),
(7, NULL, 'Efetuou login no sistema', '2025-01-30', '21:40:13', '::1'),
(8, NULL, 'Adicionou um cliente.', '2025-01-30', '21:40:26', '::1'),
(9, NULL, 'Adicionou um cliente.', '2025-01-30', '21:40:49', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `permissoes`
--

CREATE TABLE `permissoes` (
  `idPermissao` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `permissoes` text DEFAULT NULL,
  `situacao` tinyint(1) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `permissoes`
--

INSERT INTO `permissoes` (`idPermissao`, `nome`, `permissoes`, `situacao`, `data`) VALUES
(1, 'Administrador', 'a:82:{s:8:\"aCliente\";s:1:\"1\";s:8:\"eCliente\";s:1:\"1\";s:8:\"dCliente\";s:1:\"1\";s:8:\"vCliente\";s:1:\"1\";s:8:\"aProduto\";s:1:\"1\";s:8:\"eProduto\";s:1:\"1\";s:8:\"dProduto\";s:1:\"1\";s:8:\"vProduto\";s:1:\"1\";s:11:\"aFornecedor\";s:1:\"1\";s:11:\"eFornecedor\";s:1:\"1\";s:11:\"dFornecedor\";s:1:\"1\";s:11:\"vFornecedor\";s:1:\"1\";s:8:\"aViatura\";s:1:\"1\";s:8:\"eViatura\";s:1:\"1\";s:8:\"dViatura\";s:1:\"1\";s:8:\"vViatura\";s:1:\"1\";s:8:\"aTecnico\";s:1:\"1\";s:8:\"eTecnico\";s:1:\"1\";s:8:\"dTecnico\";s:1:\"1\";s:8:\"vTecnico\";s:1:\"1\";s:7:\"aCompra\";s:1:\"1\";s:7:\"eCompra\";s:1:\"1\";s:7:\"dCompra\";s:1:\"1\";s:7:\"vCompra\";s:1:\"1\";s:8:\"aCotacao\";s:1:\"1\";s:8:\"eCotacao\";s:1:\"1\";s:8:\"dCotacao\";s:1:\"1\";s:8:\"vCotacao\";s:1:\"1\";s:8:\"aServico\";s:1:\"1\";s:8:\"eServico\";s:1:\"1\";s:8:\"dServico\";s:1:\"1\";s:8:\"vServico\";s:1:\"1\";s:3:\"aJc\";s:1:\"1\";s:3:\"eJc\";s:1:\"1\";s:3:\"dJc\";s:1:\"1\";s:3:\"vJc\";s:1:\"1\";s:6:\"aVenda\";s:1:\"1\";s:6:\"eVenda\";s:1:\"1\";s:6:\"dVenda\";s:1:\"1\";s:6:\"vVenda\";s:1:\"1\";s:9:\"aGarantia\";s:1:\"1\";s:9:\"eGarantia\";s:1:\"1\";s:9:\"dGarantia\";s:1:\"1\";s:9:\"vGarantia\";s:1:\"1\";s:8:\"aArquivo\";s:1:\"1\";s:8:\"eArquivo\";s:1:\"1\";s:8:\"dArquivo\";s:1:\"1\";s:8:\"vArquivo\";s:1:\"1\";s:10:\"aPagamento\";s:1:\"1\";s:10:\"ePagamento\";s:1:\"1\";s:10:\"dPagamento\";s:1:\"1\";s:10:\"vPagamento\";s:1:\"1\";s:11:\"aLancamento\";s:1:\"1\";s:11:\"eLancamento\";s:1:\"1\";s:11:\"dLancamento\";s:1:\"1\";s:11:\"vLancamento\";s:1:\"1\";s:8:\"cUsuario\";s:1:\"1\";s:8:\"cEmpresa\";s:1:\"1\";s:10:\"cPermissao\";s:1:\"1\";s:7:\"cBackup\";s:1:\"1\";s:10:\"cAuditoria\";s:1:\"1\";s:6:\"cEmail\";s:1:\"1\";s:8:\"cSistema\";s:1:\"1\";s:10:\"eRelatorio\";s:1:\"1\";s:14:\"cConfiguracoes\";s:1:\"1\";s:8:\"rCliente\";s:1:\"1\";s:8:\"rProduto\";s:1:\"1\";s:8:\"rServico\";s:1:\"1\";s:3:\"rJc\";s:1:\"1\";s:6:\"rVenda\";s:1:\"1\";s:11:\"rFinanceiro\";s:1:\"1\";s:8:\"rEntrada\";s:1:\"1\";s:6:\"rSaida\";s:1:\"1\";s:7:\"rCompra\";s:1:\"1\";s:8:\"rCotacao\";s:1:\"1\";s:8:\"rViatura\";s:1:\"1\";s:8:\"rTecnico\";s:1:\"1\";s:11:\"rFornecedor\";s:1:\"1\";s:9:\"aCobranca\";s:1:\"1\";s:9:\"eCobranca\";s:1:\"1\";s:9:\"dCobranca\";s:1:\"1\";s:9:\"vCobranca\";s:1:\"1\";}', 1, '2023-04-21'),
(2, 'Permissão demo', 'a:75:{s:8:\"aCliente\";N;s:8:\"eCliente\";s:1:\"1\";s:8:\"dCliente\";s:1:\"1\";s:8:\"vCliente\";s:1:\"1\";s:8:\"aProduto\";s:1:\"1\";s:8:\"eProduto\";N;s:8:\"dProduto\";N;s:8:\"vProduto\";s:1:\"1\";s:11:\"aFornecedor\";N;s:11:\"eFornecedor\";s:1:\"1\";s:11:\"dFornecedor\";N;s:11:\"vFornecedor\";s:1:\"1\";s:8:\"aViatura\";N;s:8:\"eViatura\";N;s:8:\"dViatura\";N;s:8:\"vViatura\";N;s:8:\"aTecnico\";N;s:8:\"eTecnico\";N;s:8:\"dTecnico\";N;s:8:\"vTecnico\";N;s:7:\"aCompra\";N;s:7:\"eCompra\";N;s:7:\"dCompra\";N;s:7:\"vCompra\";N;s:8:\"aCotacao\";N;s:8:\"eCotacao\";N;s:8:\"dCotacao\";N;s:8:\"vCotacao\";N;s:8:\"aServico\";N;s:8:\"eServico\";s:1:\"1\";s:8:\"dServico\";s:1:\"1\";s:8:\"vServico\";s:1:\"1\";s:3:\"aJc\";N;s:3:\"eJc\";N;s:3:\"dJc\";N;s:3:\"vJc\";s:1:\"1\";s:6:\"aVenda\";N;s:6:\"eVenda\";N;s:6:\"dVenda\";N;s:6:\"vVenda\";s:1:\"1\";s:9:\"aGarantia\";N;s:9:\"eGarantia\";N;s:9:\"dGarantia\";N;s:9:\"vGarantia\";s:1:\"1\";s:8:\"aArquivo\";N;s:8:\"eArquivo\";N;s:8:\"dArquivo\";N;s:8:\"vArquivo\";N;s:10:\"aPagamento\";N;s:10:\"ePagamento\";N;s:10:\"dPagamento\";N;s:10:\"vPagamento\";N;s:11:\"aLancamento\";N;s:11:\"eLancamento\";N;s:11:\"dLancamento\";N;s:11:\"vLancamento\";N;s:8:\"cUsuario\";N;s:8:\"cEmpresa\";N;s:10:\"cPermissao\";N;s:7:\"cBackup\";N;s:10:\"cAuditoria\";N;s:6:\"cEmail\";N;s:8:\"cSistema\";N;s:10:\"eRelatorio\";N;s:14:\"cConfiguracoes\";s:1:\"1\";s:8:\"rCliente\";N;s:8:\"rProduto\";N;s:8:\"rServico\";N;s:3:\"rJc\";N;s:6:\"rVenda\";N;s:11:\"rFinanceiro\";N;s:9:\"aCobranca\";N;s:9:\"eCobranca\";N;s:9:\"dCobranca\";N;s:9:\"vCobranca\";N;}', 1, '2023-04-23'),
(3, 'Permissão demo 2', 'a:73:{s:8:\"aCliente\";s:1:\"1\";s:8:\"eCliente\";s:1:\"1\";s:8:\"dCliente\";s:1:\"1\";s:8:\"vCliente\";s:1:\"1\";s:8:\"aProduto\";s:1:\"1\";s:8:\"eProduto\";s:1:\"1\";s:8:\"dProduto\";s:1:\"1\";s:8:\"vProduto\";s:1:\"1\";s:11:\"aFornecedor\";s:1:\"1\";s:11:\"eFornecedor\";s:1:\"1\";s:11:\"dFornecedor\";s:1:\"1\";s:11:\"vFornecedor\";s:1:\"1\";s:8:\"aViatura\";s:1:\"1\";s:8:\"eViatura\";s:1:\"1\";s:8:\"dViatura\";s:1:\"1\";s:8:\"vViatura\";s:1:\"1\";s:8:\"aTecnico\";s:1:\"1\";s:8:\"eTecnico\";s:1:\"1\";s:8:\"dTecnico\";s:1:\"1\";s:8:\"vTecnico\";s:1:\"1\";s:7:\"aCompra\";s:1:\"1\";s:7:\"eCompra\";s:1:\"1\";s:7:\"dCompra\";s:1:\"1\";s:7:\"vCompra\";s:1:\"1\";s:8:\"aCotacao\";s:1:\"1\";s:8:\"eCotacao\";s:1:\"1\";s:8:\"dCotacao\";s:1:\"1\";s:8:\"vCotacao\";s:1:\"1\";s:8:\"aServico\";s:1:\"1\";s:8:\"eServico\";s:1:\"1\";s:8:\"dServico\";s:1:\"1\";s:8:\"vServico\";s:1:\"1\";s:3:\"aJc\";s:1:\"1\";s:3:\"eJc\";s:1:\"1\";s:3:\"dJc\";s:1:\"1\";s:3:\"vJc\";s:1:\"1\";s:6:\"aVenda\";s:1:\"1\";s:6:\"eVenda\";s:1:\"1\";s:6:\"dVenda\";s:1:\"1\";s:6:\"vVenda\";s:1:\"1\";s:9:\"aGarantia\";s:1:\"1\";s:9:\"eGarantia\";s:1:\"1\";s:9:\"dGarantia\";s:1:\"1\";s:9:\"vGarantia\";s:1:\"1\";s:8:\"aArquivo\";s:1:\"1\";s:8:\"eArquivo\";s:1:\"1\";s:8:\"dArquivo\";s:1:\"1\";s:8:\"vArquivo\";s:1:\"1\";s:10:\"aPagamento\";s:1:\"1\";s:10:\"ePagamento\";s:1:\"1\";s:10:\"dPagamento\";s:1:\"1\";s:10:\"vPagamento\";s:1:\"1\";s:11:\"aLancamento\";s:1:\"1\";s:11:\"eLancamento\";s:1:\"1\";s:11:\"dLancamento\";s:1:\"1\";s:11:\"vLancamento\";s:1:\"1\";s:8:\"cUsuario\";s:1:\"1\";s:8:\"cEmpresa\";s:1:\"1\";s:10:\"cPermissao\";s:1:\"1\";s:7:\"cBackup\";s:1:\"1\";s:10:\"cAuditoria\";s:1:\"1\";s:6:\"cEmail\";s:1:\"1\";s:8:\"cSistema\";s:1:\"1\";s:8:\"rCliente\";s:1:\"1\";s:8:\"rProduto\";s:1:\"1\";s:8:\"rServico\";s:1:\"1\";s:3:\"rJc\";s:1:\"1\";s:6:\"rVenda\";s:1:\"1\";s:11:\"rFinanceiro\";s:1:\"1\";s:9:\"aCobranca\";s:1:\"1\";s:9:\"eCobranca\";s:1:\"1\";s:9:\"dCobranca\";s:1:\"1\";s:9:\"vCobranca\";s:1:\"1\";}', 1, '2023-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `idProdutos` int(11) NOT NULL,
  `descricao` varchar(80) NOT NULL,
  `unidade` varchar(10) DEFAULT NULL,
  `precoCompra` decimal(10,2) DEFAULT NULL,
  `precoVenda` decimal(10,2) NOT NULL,
  `estoque` int(11) NOT NULL,
  `estoqueMinimo` int(11) DEFAULT NULL,
  `saida` tinyint(1) DEFAULT NULL,
  `entrada` tinyint(1) DEFAULT NULL,
  `modelo` varchar(35) DEFAULT NULL,
  `localizacao` varchar(35) DEFAULT NULL,
  `estoqueInicial` int(15) DEFAULT NULL,
  `dataCadastro` date DEFAULT NULL,
  `ultimaAtualizacao` date DEFAULT NULL,
  `grupo` varchar(15) DEFAULT NULL,
  `codigo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produtos_cotacoes`
--

CREATE TABLE `produtos_cotacoes` (
  `idProdutos_cotacoes` int(11) NOT NULL,
  `cotacoes_id` int(11) NOT NULL,
  `produtos_id` int(11) NOT NULL,
  `codigoProduto` varchar(50) DEFAULT NULL,
  `descricao` varchar(80) DEFAULT NULL,
  `custo` decimal(15,2) DEFAULT NULL,
  `preco` decimal(15,2) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `subTotal` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produtos_jc`
--

CREATE TABLE `produtos_jc` (
  `idProdutos_jc` int(11) NOT NULL,
  `jc_id` int(11) NOT NULL,
  `produtos_id` int(11) NOT NULL,
  `descricao` varchar(80) DEFAULT NULL,
  `custo` varchar(15) DEFAULT NULL,
  `preco` varchar(15) DEFAULT NULL,
  `quantidade` decimal(11,2) NOT NULL,
  `subTotal` decimal(15,2) NOT NULL,
  `desconto` decimal(12,2) DEFAULT NULL,
  `iva` decimal(12,2) DEFAULT NULL,
  `dataLancamento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicos`
--

CREATE TABLE `servicos` (
  `idServicos` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicos_cotacoes`
--

CREATE TABLE `servicos_cotacoes` (
  `idServicos_Cotacoes` int(11) NOT NULL,
  `quantidade` double DEFAULT NULL,
  `preco` varchar(15) DEFAULT NULL,
  `cotacoes_id` int(11) NOT NULL,
  `servicos_id` int(11) NOT NULL,
  `servico` varchar(80) DEFAULT NULL,
  `subTotal` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicos_jc`
--

CREATE TABLE `servicos_jc` (
  `idServicos_jc` int(11) NOT NULL,
  `servico` varchar(80) DEFAULT NULL,
  `quantidade` double DEFAULT NULL,
  `preco` varchar(15) DEFAULT NULL,
  `jc_id` int(11) NOT NULL,
  `servicos_id` int(11) NOT NULL,
  `desconto` decimal(12,2) DEFAULT NULL,
  `subTotal` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tecnicos`
--

CREATE TABLE `tecnicos` (
  `idTecnicos` int(11) NOT NULL,
  `codigo` varchar(11) DEFAULT NULL,
  `nomeTecnico` varchar(60) DEFAULT NULL,
  `dataAdmissao` date DEFAULT NULL,
  `genero` varchar(1) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `categorias_id` varchar(25) DEFAULT NULL,
  `baseSalarial` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tecnicos_jc`
--

CREATE TABLE `tecnicos_jc` (
  `idTecnicos_jc` int(11) NOT NULL,
  `jc_id` int(11) DEFAULT NULL,
  `tecnicos_id` int(11) DEFAULT NULL,
  `salarioBase` decimal(11,2) DEFAULT NULL,
  `custoPorHora` decimal(11,2) DEFAULT NULL,
  `qtyHoras` decimal(11,2) DEFAULT NULL,
  `subTotal` decimal(11,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `situacao` tinyint(1) NOT NULL,
  `dataCadastro` date NOT NULL,
  `permissoes_id` int(11) NOT NULL,
  `dataExpiracao` date DEFAULT NULL,
  `url_image_user` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `nome`, `email`, `senha`, `telefone`, `celular`, `situacao`, `dataCadastro`, `permissoes_id`, `dataExpiracao`, `url_image_user`) VALUES
(1, 'Cláudio João', 'admin@admin.com', '$2y$10$6loSCbDFc29Y0wXukGZn5OoLSStsjO5s6TiqHdLNqtxlHCHf6.8W.', '846166958', '', 1, '2023-07-29', 1, '3000-01-01', NULL),
(2, 'Usuário Demo', 'admin1@admin.com', '$2y$10$BGfvClBeFxFTisY9/tYvuOPTJZd6MdiiUgDg2n/cr.U0nDUMbPq1.', '', '', 1, '2023-04-26', 2, '2023-05-12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendas`
--

CREATE TABLE `vendas` (
  `idVendas` int(11) NOT NULL,
  `dataVenda` date DEFAULT NULL,
  `valorTotal` decimal(15,2) DEFAULT NULL,
  `desconto` decimal(15,2) DEFAULT NULL,
  `faturado` tinyint(1) DEFAULT NULL,
  `iva` tinyint(1) DEFAULT NULL,
  `clientes_id` int(11) NOT NULL,
  `usuarios_id` int(11) DEFAULT NULL,
  `lancamentos_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `viaturas`
--

CREATE TABLE `viaturas` (
  `idViatura` int(11) NOT NULL,
  `viaMarca` varchar(45) DEFAULT NULL,
  `viaModelo` varchar(45) DEFAULT NULL,
  `viaVin` varchar(45) DEFAULT NULL,
  `viaMatricula` varchar(45) DEFAULT NULL,
  `viaAno` int(11) NOT NULL,
  `viaMotor` varchar(25) NOT NULL,
  `viaCor` varchar(25) NOT NULL,
  `clientes_id` int(11) NOT NULL,
  `dataCadastro` date DEFAULT NULL,
  `lastUpdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idClientes`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idCompra`),
  ADD KEY `fk_compras_fornecedores1` (`fornecedores_id`) USING BTREE,
  ADD KEY `fk_compras_usuarios1` (`usuarios_id`);

--
-- Indexes for table `configuracoes`
--
ALTER TABLE `configuracoes`
  ADD PRIMARY KEY (`idConfig`),
  ADD UNIQUE KEY `config` (`config`);

--
-- Indexes for table `cotacoes`
--
ALTER TABLE `cotacoes`
  ADD PRIMARY KEY (`idCotacoes`),
  ADD KEY `fk_cotacoes_clientes1` (`clientes_id`),
  ADD KEY `fk_cotacoes_usuarios1` (`usuarios_id`);

--
-- Indexes for table `email_queue`
--
ALTER TABLE `email_queue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`idFornecedores`);

--
-- Indexes for table `garantias`
--
ALTER TABLE `garantias`
  ADD PRIMARY KEY (`idGarantias`),
  ADD KEY `fk_garantias_usuarios1` (`usuarios_id`);

--
-- Indexes for table `itens_de_compras`
--
ALTER TABLE `itens_de_compras`
  ADD PRIMARY KEY (`idItens`),
  ADD KEY `fk_itens_de_compras_compras1` (`compras_id`),
  ADD KEY `fk_itens_de_compras_produtos1` (`produtos_id`);

--
-- Indexes for table `jobcard`
--
ALTER TABLE `jobcard`
  ADD PRIMARY KEY (`idJc`),
  ADD KEY `fk_jc_clientes1` (`clientes_id`),
  ADD KEY `fk_jc_lancamentos1` (`lancamento_id`),
  ADD KEY `fk_jc_garantias1` (`garantias_id`),
  ADD KEY `fk_jc_viaturas1` (`viaturas_id`),
  ADD KEY `fk_jc_usuarios1` (`usuarios_id`),
  ADD KEY `fk_jc_tecnicos1` (`tecnicos_id`) USING BTREE;

--
-- Indexes for table `lancamentos`
--
ALTER TABLE `lancamentos`
  ADD PRIMARY KEY (`idLancamentos`),
  ADD KEY `fk_lancamentos_clientes1` (`clientes_id`),
  ADD KEY `fk_lancamentos_categorias1_idx` (`categorias_id`),
  ADD KEY `fk_lancamentos_contas1_idx` (`contas_id`),
  ADD KEY `fk_lancamentos_usuarios1` (`usuarios_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`idLogs`);

--
-- Indexes for table `permissoes`
--
ALTER TABLE `permissoes`
  ADD PRIMARY KEY (`idPermissao`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProdutos`),
  ADD UNIQUE KEY `codigo_produto` (`codigo`);

--
-- Indexes for table `produtos_cotacoes`
--
ALTER TABLE `produtos_cotacoes`
  ADD PRIMARY KEY (`idProdutos_cotacoes`),
  ADD KEY `fk_produtos_cotacoes_cotacoes1` (`cotacoes_id`),
  ADD KEY `fk_produtos_cotacoes_produtos1` (`produtos_id`);

--
-- Indexes for table `produtos_jc`
--
ALTER TABLE `produtos_jc`
  ADD PRIMARY KEY (`idProdutos_jc`),
  ADD KEY `fk_produtos_jc_jc1` (`jc_id`),
  ADD KEY `fk_produtos_jc_produtos1` (`produtos_id`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`idServicos`);

--
-- Indexes for table `servicos_cotacoes`
--
ALTER TABLE `servicos_cotacoes`
  ADD PRIMARY KEY (`idServicos_Cotacoes`),
  ADD KEY `fk_servicos_cotacoes_cotacoes1` (`cotacoes_id`),
  ADD KEY `fk_servicos_cotacoes_servicos1` (`servicos_id`);

--
-- Indexes for table `servicos_jc`
--
ALTER TABLE `servicos_jc`
  ADD PRIMARY KEY (`idServicos_jc`),
  ADD KEY `fk_servicos_jc_jc1` (`jc_id`),
  ADD KEY `fk_servicos_jc_servicos1` (`servicos_id`);

--
-- Indexes for table `tecnicos`
--
ALTER TABLE `tecnicos`
  ADD PRIMARY KEY (`idTecnicos`);

--
-- Indexes for table `tecnicos_jc`
--
ALTER TABLE `tecnicos_jc`
  ADD PRIMARY KEY (`idTecnicos_jc`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`),
  ADD KEY `fk_usuarios_permissoes1_idx` (`permissoes_id`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`idVendas`),
  ADD KEY `fk_vendas_clientes1` (`clientes_id`),
  ADD KEY `fk_vendas_usuarios1` (`usuarios_id`),
  ADD KEY `fk_vendas_lancamentos1` (`lancamentos_id`);

--
-- Indexes for table `viaturas`
--
ALTER TABLE `viaturas`
  ADD PRIMARY KEY (`idViatura`),
  ADD KEY `fk_viaturas_clientes1` (`clientes_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idClientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `idCompra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `configuracoes`
--
ALTER TABLE `configuracoes`
  MODIFY `idConfig` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cotacoes`
--
ALTER TABLE `cotacoes`
  MODIFY `idCotacoes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_queue`
--
ALTER TABLE `email_queue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `idFornecedores` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `garantias`
--
ALTER TABLE `garantias`
  MODIFY `idGarantias` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itens_de_compras`
--
ALTER TABLE `itens_de_compras`
  MODIFY `idItens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=420;

--
-- AUTO_INCREMENT for table `jobcard`
--
ALTER TABLE `jobcard`
  MODIFY `idJc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lancamentos`
--
ALTER TABLE `lancamentos`
  MODIFY `idLancamentos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `idLogs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissoes`
--
ALTER TABLE `permissoes`
  MODIFY `idPermissao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProdutos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos_cotacoes`
--
ALTER TABLE `produtos_cotacoes`
  MODIFY `idProdutos_cotacoes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos_jc`
--
ALTER TABLE `produtos_jc`
  MODIFY `idProdutos_jc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `idServicos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicos_cotacoes`
--
ALTER TABLE `servicos_cotacoes`
  MODIFY `idServicos_Cotacoes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `servicos_jc`
--
ALTER TABLE `servicos_jc`
  MODIFY `idServicos_jc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tecnicos`
--
ALTER TABLE `tecnicos`
  MODIFY `idTecnicos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tecnicos_jc`
--
ALTER TABLE `tecnicos_jc`
  MODIFY `idTecnicos_jc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `idVendas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `viaturas`
--
ALTER TABLE `viaturas`
  MODIFY `idViatura` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `garantias`
--
ALTER TABLE `garantias`
  ADD CONSTRAINT `fk_garantias_usuarios1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lancamentos`
--
ALTER TABLE `lancamentos`
  ADD CONSTRAINT `fk_lancamentos_clientes1` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_permissoes1` FOREIGN KEY (`permissoes_id`) REFERENCES `permissoes` (`idPermissao`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
