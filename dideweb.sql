-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 04-Jun-2018 às 15:06
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dideweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dw_caixas`
--

DROP TABLE IF EXISTS `dw_caixas`;
CREATE TABLE IF NOT EXISTS `dw_caixas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_loja` int(11) NOT NULL,
  `dinheiro_inicial` int(11) NOT NULL,
  `data` datetime DEFAULT CURRENT_TIMESTAMP,
  `total_dinheiro` decimal(10,2) DEFAULT NULL,
  `total_debito` decimal(10,2) DEFAULT NULL,
  `total_credito` decimal(10,2) DEFAULT NULL,
  `total_cheque` decimal(10,2) DEFAULT NULL,
  `total_ticket` decimal(10,2) DEFAULT NULL,
  `total_vales` decimal(10,2) DEFAULT NULL,
  `total_fiado` decimal(10,2) DEFAULT NULL,
  `fechado_em` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `id_funcionario` int(11) DEFAULT NULL,
  `detalhes` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dw_categorias`
--

DROP TABLE IF EXISTS `dw_categorias`;
CREATE TABLE IF NOT EXISTS `dw_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `imagem` varchar(100) NOT NULL DEFAULT 'sem_imagem.png',
  `detalhes` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dw_categorias`
--

INSERT INTO `dw_categorias` (`id`, `codigo`, `nome`, `imagem`, `detalhes`) VALUES
(1, '000', 'Geral', 'sem_imagem.png', 'Categoria padrão para produtos que não se encaixam nas demais.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dw_clientes`
--

DROP TABLE IF EXISTS `dw_clientes`;
CREATE TABLE IF NOT EXISTS `dw_clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_loja` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `data_nas` date NOT NULL,
  `endereco1` varchar(50) DEFAULT NULL,
  `endereco2` varchar(50) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `trabalho` varchar(50) DEFAULT NULL,
  `celular` varchar(11) NOT NULL,
  `tel_contato` varchar(11) DEFAULT NULL,
  `limite_fiado` decimal(10,2) DEFAULT NULL,
  `data_cad` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `nome` (`nome`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dw_clientes`
--

INSERT INTO `dw_clientes` (`id`, `id_loja`, `nome`, `sobrenome`, `data_nas`, `endereco1`, `endereco2`, `cidade`, `estado`, `cep`, `email`, `trabalho`, `celular`, `tel_contato`, `limite_fiado`, `data_cad`) VALUES
(1, 1, 'Consumidor', 'Geral', '1985-09-25', NULL, NULL, NULL, NULL, NULL, 'consumidor@dideweb.com.br', NULL, '18999999999', '18 33222233', NULL, '2018-05-30 08:58:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dw_despesas`
--

DROP TABLE IF EXISTS `dw_despesas`;
CREATE TABLE IF NOT EXISTS `dw_despesas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_funcionario` int(11) NOT NULL,
  `id_loja` int(11) NOT NULL,
  `data` int(11) NOT NULL,
  `total_despesa` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `data` (`data`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dw_despesas_itens`
--

DROP TABLE IF EXISTS `dw_despesas_itens`;
CREATE TABLE IF NOT EXISTS `dw_despesas_itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_despesa` int(11) NOT NULL,
  `referencia` varchar(50) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_despesa` (`id_despesa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dw_encomendas`
--

DROP TABLE IF EXISTS `dw_encomendas`;
CREATE TABLE IF NOT EXISTS `dw_encomendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_loja` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `paradiahora` datetime NOT NULL,
  `entregar` tinyint(1) NOT NULL,
  `endereco1` varchar(50) DEFAULT NULL,
  `endereco2` varchar(50) DEFAULT NULL,
  `origem` tinyint(1) NOT NULL DEFAULT '0',
  `id_pagamento` int(11) DEFAULT NULL,
  `quando_pegou` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_funcionario` int(11) NOT NULL,
  `detalhes` text,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dw_encomendas_itens`
--

DROP TABLE IF EXISTS `dw_encomendas_itens`;
CREATE TABLE IF NOT EXISTS `dw_encomendas_itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_encomenda` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `qtde` int(11) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_encomenda` (`id_encomenda`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dw_formas_pagamento`
--

DROP TABLE IF EXISTS `dw_formas_pagamento`;
CREATE TABLE IF NOT EXISTS `dw_formas_pagamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  `parcelas_aceitas` int(2) NOT NULL,
  `taxa` int(3) NOT NULL,
  `taxa_parcelado` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dw_fornecedores`
--

DROP TABLE IF EXISTS `dw_fornecedores`;
CREATE TABLE IF NOT EXISTS `dw_fornecedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(11) NOT NULL,
  `endereco1` varchar(50) DEFAULT NULL,
  `endereco2` varchar(50) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL,
  `vendedor` varchar(30) DEFAULT NULL,
  `telefone_vendedor` varchar(11) DEFAULT NULL,
  `dias_visitas` varchar(50) DEFAULT NULL,
  `dias_entregas` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dw_funcionarios`
--

DROP TABLE IF EXISTS `dw_funcionarios`;
CREATE TABLE IF NOT EXISTS `dw_funcionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_loja` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `datanas` int(11) NOT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `endereco1` varchar(50) DEFAULT NULL,
  `endereco2` varchar(50) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'sem_imagem.png',
  `dataadm` int(11) NOT NULL,
  `datadem` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nome` (`nome`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dw_grupos`
--

DROP TABLE IF EXISTS `dw_grupos`;
CREATE TABLE IF NOT EXISTS `dw_grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dw_grupos_permissoes`
--

DROP TABLE IF EXISTS `dw_grupos_permissoes`;
CREATE TABLE IF NOT EXISTS `dw_grupos_permissoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_grupos` int(11) NOT NULL,
  `opcao` varchar(100) NOT NULL,
  `valor` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dw_lojas`
--

DROP TABLE IF EXISTS `dw_lojas`;
CREATE TABLE IF NOT EXISTS `dw_lojas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(20) NOT NULL,
  `razao_social` varchar(100) NOT NULL,
  `nome_fantasia` varchar(50) NOT NULL,
  `cnpj` varchar(14) DEFAULT NULL,
  `ie` varchar(12) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(11) NOT NULL,
  `endereco1` varchar(50) DEFAULT NULL,
  `endereco2` varchar(50) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL,
  `pais` varchar(25) DEFAULT NULL,
  `cabecalho_recibo` text,
  `rodape_recibo` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dw_lojas`
--

INSERT INTO `dw_lojas` (`id`, `codigo`, `razao_social`, `nome_fantasia`, `cnpj`, `ie`, `logo`, `email`, `telefone`, `endereco1`, `endereco2`, `cidade`, `estado`, `cep`, `pais`, `cabecalho_recibo`, `rodape_recibo`) VALUES
(1, 'DW001', 'FELIPPE PALOMARES SILVA DE SENA MARQUES ME', 'DIDE SALGADOS', '07274728000150', '249077755114', NULL, 'didesalgados@outlook.com', '18 33414329', NULL, NULL, NULL, NULL, '19880000', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dw_mercado`
--

DROP TABLE IF EXISTS `dw_mercado`;
CREATE TABLE IF NOT EXISTS `dw_mercado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_loja` int(11) NOT NULL,
  `data` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `lista` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dw_pagamentos`
--

DROP TABLE IF EXISTS `dw_pagamentos`;
CREATE TABLE IF NOT EXISTS `dw_pagamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_loja` int(11) NOT NULL,
  `id_venda` int(11) DEFAULT NULL,
  `id_encomenda` int(11) DEFAULT NULL,
  `id_forma_pagamento` int(11) NOT NULL,
  `parcelas` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dw_produtos`
--

DROP TABLE IF EXISTS `dw_produtos`;
CREATE TABLE IF NOT EXISTS `dw_produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `id_categoria` int(11) NOT NULL DEFAULT '1',
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(100) NOT NULL DEFAULT 'sem_imagem.png',
  `custo` decimal(10,2) DEFAULT NULL,
  `quantidade` decimal(10,2) DEFAULT NULL,
  `tipo` tinyint(1) NOT NULL DEFAULT '0',
  `detalhes` text,
  `alerta_quantidade` decimal(10,2) DEFAULT NULL,
  `encomendavel` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `codigo` (`codigo`),
  KEY `nome` (`nome`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dw_produtos_loja_qtd`
--

DROP TABLE IF EXISTS `dw_produtos_loja_qtd`;
CREATE TABLE IF NOT EXISTS `dw_produtos_loja_qtd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `id_loja` int(11) NOT NULL,
  `qtd` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_produto` (`id_produto`),
  KEY `id_loja` (`id_loja`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dw_vales_presentes`
--

DROP TABLE IF EXISTS `dw_vales_presentes`;
CREATE TABLE IF NOT EXISTS `dw_vales_presentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(20) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_loja` int(11) NOT NULL,
  `criado_em` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `expira_em` datetime NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `detalhes` text,
  PRIMARY KEY (`id`),
  KEY `codigo` (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dw_vendas`
--

DROP TABLE IF EXISTS `dw_vendas`;
CREATE TABLE IF NOT EXISTS `dw_vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_loja` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL DEFAULT '1',
  `referencia` varchar(50) DEFAULT NULL,
  `abertura` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total` decimal(10,2) NOT NULL,
  `id_pagamento` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `fechamento` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dw_vendas_itens`
--

DROP TABLE IF EXISTS `dw_vendas_itens`;
CREATE TABLE IF NOT EXISTS `dw_vendas_itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_venda` int(11) NOT NULL,
  `if_funcionario` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `qtde` int(11) NOT NULL,
  `preço` decimal(10,2) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `hrlancamento` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
