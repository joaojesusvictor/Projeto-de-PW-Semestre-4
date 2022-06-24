-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Jun-2022 às 00:43
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetopw`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cestas`
--

CREATE TABLE `cestas` (
  `session_id` bigint(20) NOT NULL,
  `cesta_cli` bigint(20) NOT NULL,
  `cesta_prod` bigint(20) NOT NULL,
  `qtd` int(11) NOT NULL,
  `val_uni` decimal(7,2) NOT NULL,
  `val_total` decimal(7,2) NOT NULL,
  `cod_cesta` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cd_cliente` bigint(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(30) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `cd_produto` bigint(20) NOT NULL,
  `nm_img` varchar(50) NOT NULL DEFAULT 'default.jpg',
  `titulo` varchar(50) NOT NULL,
  `descritivo` text NOT NULL,
  `valor` decimal(7,2) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `qtd_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`cd_produto`, `nm_img`, `titulo`, `descritivo`, `valor`, `marca`, `qtd_produto`) VALUES
(1, 'img1', 'Samsung Galaxy S21 - Rose', 'O Samsung Galaxy S21 é um smartphone Android com características inovadoras que o tornam uma excelente opção para qualquer tipo de utilização. A tela de 6.2 polegadas coloca esse Samsung no topo de sua categoria. A resolução também é alta: 2400x1080 pixel. As funcionalidades oferecidas pelo Samsung Galaxy S21 são muitas e top de linha. Começando pelo 5G que permite a transferência de dados e excelente navegação na internet, além de conectividade Wi-fi e GPS presente no aparelho. Tem também leitor multimídia, videoconferência, e bluetooth. Enfatizamos a excelente memória interna de 256 GB mas sem a possibilidade de expansão.\r\nCâmera de 12 megapixel. A espessura de apenas 7.9 milímetros torna o Samsung Galaxy S21 um dos telefones mais finos que existem.', '2699.99', 'SAMSUNG', 10),
(2, 'img2', 'Samsung Galaxy S21 FE 5G - Violeta', 'Samsung Galaxy S21 FE 5G - Violeta;\"O Samsung Galaxy S21 FE 5G é um smartphone Android de bom nível, ótimo para fotos, que pode satisfazer até o mais exigente dos usuários. Tem uma enorme tela Touchscreen de 6.4 polegadas com uma resolução de 2340x1080 pixel. Sobre as características deste Samsung Galaxy S21 FE 5G na verdade não falta nada. Começando pelo 5G que permite a transferência de dados e excelente navegação na internet, além de conectividade Wi-fi e GPS. Tem também leitor multimídia, videoconferência e bluetooth. Enfatizamos a boa memória interna de 128 GB mas sem a possibilidade de expansão.\r\nO Samsung Galaxy S21 FE 5G é um produto com poucos concorrentes em termos de multimídia graças à câmera de 12 megapixels que permite ao Samsung Galaxy S21 FE 5G tirar fotos de alta qualidade com uma resolução de 4000x3000 pixels e gravar vídeos em 4K a espantosa resolução de 3840x2160 pixels. Muito fino, 7.9 milímetros, o que torna o Samsung Galaxy S21 FE 5G realmente interessante.', '2799.99', 'SAMSUNG', 20),
(3, 'img3', 'Redmi Note 10S - Sea Blue', 'O Redmi Note 10S é um smartphone Android de bom nível, ótimo para fotos, que pode satisfazer até o mais exigente dos usuários. Tem uma enorme tela Touchscreen de 6.43 polegadas com uma resolução de 2400x1080 pixel. Sobre as características deste Redmi Note 10S na verdade não falta nada. Começando pelo LTE 4G que permite a transferência de dados e excelente navegação na internet, além de conectividade Wi-fi e GPS. Tem também leitor multimídia, videoconferência e bluetooth. Enfatizamos a boa memória interna de 128 GB com a possibilidade de expansão.\r\nO Redmi Note 10S é um produto com poucos concorrentes em termos de multimídia graças à câmera de 64 megapixels que permite ao Redmi Note 10S tirar fotos fantásticas com uma resolução de 9238x6928 pixels e gravar vídeos em 4K a espantosa resolução de 3840x2160 pixels. Muito fino, 8.3 milímetros, o que torna o Redmi Note 10S realmente interessante.', '1198.90', 'XIAOMI', 10),
(4, 'img4', 'Samsung Galaxy S22 Plus 5G - Rose', 'O Samsung Galaxy S22 Plus 5G é um smartphone Android de bom nível, ótimo para fotos, que pode satisfazer até o mais exigente dos usuários. Tem uma enorme tela Touchscreen de 6.6 polegadas com uma resolução de 2340x1080 pixel. Sobre as características deste Samsung Galaxy S22 Plus 5G na verdade não falta nada. Começando pelo 5G que permite a transferência de dados e excelente navegação na internet, além de conectividade Wi-fi e GPS. Tem também leitor multimídia, videoconferência e bluetooth. Enfatizamos a boa memória interna de 256 GB mas sem a possibilidade de expansão.\r\nO Samsung Galaxy S22 Plus 5G é um produto com poucos concorrentes em termos de multimídia graças à câmera de 50 megapixels que permite ao Samsung Galaxy S22 Plus 5G tirar fotos fantásticas com uma resolução de 8165x6124 pixels e gravar vídeos em 8K a espantosa resolução de 7680x4320 pixels. Muito fino, 7.6 milímetros, o que torna o Samsung Galaxy S22 Plus 5G realmente interessante.', '5680.00', 'SAMSUNG', 10),
(5, 'img5', 'Samsung Galaxy M12 - Azul', 'O Samsung Galaxy M12 é um smartphone Android de bom nível, ótimo para fotos, que pode satisfazer até o mais exigente dos usuários. Tem uma enorme tela Touchscreen de 6.5 polegadas com uma resolução de 1600x720 pixel que não é das mais elevadas. Sobre as características deste Samsung Galaxy M12 na verdade não falta nada. Começando pelo LTE 4G que permite a transferência de dados e excelente navegação na internet, além de conectividade Wi-fi e GPS. Tem também leitor multimídia, videoconferência e bluetooth. Enfatizamos a boa memória interna de 64 GB com a possibilidade de expansão.\r\nO Samsung Galaxy M12 é um produto com poucos concorrentes em termos de multimídia graças à câmera de 48 megapixels que permite ao Samsung Galaxy M12 tirar fotos fantásticas com uma resolução de 8000x6000 pixels e gravar vídeos em alta definição (Full HD) com uma resolução de 1920x1080 pixels.', '898.99', 'SAMSUNG', 15),
(6, 'img6', 'Samsung Galaxy A32 - Preto', 'Samsung Galaxy A32 é um smartphone Android de bom nível, ótimo para fotos, que pode satisfazer até o mais exigente dos usuários. Tem uma enorme tela Touchscreen de 6.4 polegadas com uma resolução de 2400x1080 pixel. Sobre as características deste Samsung Galaxy A32 na verdade não falta nada. Começando pelo LTE 4G que permite a transferência de dados e excelente navegação na internet, além de conectividade Wi-fi e GPS. Tem também leitor multimídia, videoconferência e bluetooth. Enfatizamos a boa memória interna de 128 GB com a possibilidade de expansão.\r\nO Samsung Galaxy A32 é um produto com poucos concorrentes em termos de multimídia graças à câmera de 64 megapixels que permite ao Samsung Galaxy A32 tirar fotos fantásticas com uma resolução de 9000x7000 pixels e gravar vídeos em alta definição (Full HD) com uma resolução de 1920x1080 pixels. Muito fino, 8.4 milímetros, o que torna o Samsung Galaxy A32 realmente interessante.', '1338.99', 'SAMSUNG', 50),
(7, 'img7', 'Samsung Galaxy A32 5G - Branco', 'O Samsung Galaxy A32 5G é um smartphone Android de bom nível, ótimo para fotos, que pode satisfazer até o mais exigente dos usuários. Tem uma enorme tela Touchscreen de 6.5 polegadas com uma resolução de 1600x720 pixel que não é das mais elevadas. Sobre as características deste Samsung Galaxy A32 5G na verdade não falta nada. Começando pelo 5G que permite a transferência de dados e excelente navegação na internet, além de conectividade Wi-fi e GPS. Tem também leitor multimídia, videoconferência e bluetooth. Enfatizamos a boa memória interna de 128 GB com a possibilidade de expansão.\r\nO Samsung Galaxy A32 5G é um produto com poucos concorrentes em termos de multimídia graças à câmera de 48 megapixels que permite ao Samsung Galaxy A32 5G tirar fotos fantásticas com uma resolução de 8000x6000 pixels e gravar vídeos em 4K a espantosa resolução de 3840x2160 pixels.', '1799.90', 'SAMSUNG', 10),
(8, 'img8', 'Motorola Moto E7 - Cinza Metálico', 'O Motorola Moto E7 é um smartphone Android completo, que não tem muito a invejar aos mais avançados dispositivos. Surpreendente é sua tela Touchscreen de 6.5 polegadas, que coloca esse Motorola no topo de sua categoria. A resolução também é alta: 1600x720 pixel. Quanto às funções, no Motorola Moto E7 realmente não falta nada. Começando pelo conectividade Wi-fi e GPS. A transferência de dados e navegação web sao fornecidas pela rede UMTS, mas não suporta tecnologias mais recentes, tais como HSDPA. Enfatizamos a boa memória interna de 32 GB com a possibilidade de expansão.\r\nEste Motorola Moto E7 é um produto com poucos concorrentes em termos de multimídia graças à câmera de 48 megapixels que permite ao Motorola Moto E7 tirar fotos fantásticas com uma resolução de 8000x6000 pixels e gravar vídeos em alta definição (Full HD) com uma resolução de 1920x1080 pixels. Muito fino, 8.9 milímetros, o que torna o Motorola Moto E7 realmente interessante.', '856.00', 'MOTOROLA', 20),
(9, 'img9', 'Samsung Galaxy S22 5G - Preto', 'O Samsung Galaxy S22 5G é um smartphone Android de bom nível, ótimo para fotos, que pode satisfazer até o mais exigente dos usuários. Tem uma enorme tela Touchscreen de 6.1 polegadas com uma resolução de 2340x1080 pixel. Sobre as características deste Samsung Galaxy S22 5G na verdade não falta nada. Começando pelo 5G que permite a transferência de dados e excelente navegação na internet, além de conectividade Wi-fi e GPS. Tem também leitor multimídia, videoconferência e bluetooth. Enfatizamos a boa memória interna de 256 GB mas sem a possibilidade de expansão.\r\nO Samsung Galaxy S22 5G é um produto com poucos concorrentes em termos de multimídia graças à câmera de 50 megapixels que permite ao Samsung Galaxy S22 5G tirar fotos fantásticas com uma resolução de 8165x6124 pixels e gravar vídeos em 8K a espantosa resolução de 7680x4320 pixels. Muito fino, 7.6 milímetros, o que torna o Samsung Galaxy S22 5G realmente interessante.', '5098.00', 'SAMSUNG', 10),
(10, 'img10', 'Poco X3 Pro - Preto', 'O Poco X3 Pro é um smartphone Android avançado e abrangente em todos os pontos de vista com algumas características excelentes. Tem uma grande tela de 6.67 polegadas com uma resolução de 2400x1080 pixels. As funcionalidades oferecidas pelo Poco X3 Pro são muitas e inovadoras. Começando pelo LTE 4G que permite a transferência de dados e excelente navegação na internet. Enfatizamos a excelente memória interna de 128 GB com a possibilidade de expansão.\r\nO Poco X3 Pro é um produto com poucos concorrentes em termos de multimídia graças à câmera de 48 megapixels que permite ao Poco X3 Pro tirar fotos fantásticas com uma resolução de 8000x6000 pixels e gravar vídeos em 4K a espantosa resolução de 3840x2160 pixels.', '1980.00', 'XIAOMI', 20),
(11, 'img11', 'Samsung Galaxy Z Flip 3 5G - Violeta', 'O Samsung Galaxy Z Flip 3 5G é um dos smartphones Android mais avançados e completos que existem em circulação. Tem um grande display de 6.7 polegadas com uma resolução de 2640x1080 pixel. As funcionalidades oferecidas pelo Samsung Galaxy Z Flip 3 5G são muitas e inovadoras. Começando pelo 5G que permite a transferência de dados e excelente navegação na internet. Enfatizamos a excelente memória interna de 256 GB mas sem a possibilidade de expansão.\r\nCâmera discreta de 12 megapixel mas que permite ao Samsung Galaxy Z Flip 3 5G tirar fotos de boa qualidade com uma resolução de 4000x3000 pixel e gravar vídeos em 4K a espantosa resolução de 3840x2160 pixels. A espessura de apenas 6.9 milímetros torna o Samsung Galaxy Z Flip 3 5G um dos telefones mais finos que existem.', '4355.00', 'SAMSUNG', 5),
(12, 'img12', 'LG Velvet - Branco', 'O LG Velvet é, sem dúvida, um dos smartphones Android mais avançados e abrangentes disponíveis no mercado, graças ao seu rico equipamento e recursos multimídia avançados. Tem um grande display de 6.8 polegadas com uma resolução de 2460x1080 pixel. As funcionalidades oferecidas pelo LG Velvet são muitas e inovadoras. Começando pelo LTE 4G que permite a transferência de dados e excelente navegação na internet. Enfatizamos a excelente memória interna de 128 GB com a possibilidade de expansão.\r\nO LG Velvet é um produto com poucos concorrentes em termos de multimídia graças à câmera de 48 megapixels que permite ao LG Velvet tirar fotos fantásticas com uma resolução de 8000x6000 pixels e gravar vídeos em 4K a espantosa resolução de 3840x2160 pixels. A espessura de 7.9mm torna o LG Velvet um dos telefones mais completos e finos.', '1999.99', 'LG', 10);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cestas`
--
ALTER TABLE `cestas`
  ADD PRIMARY KEY (`cod_cesta`),
  ADD KEY `FKcesta_cli` (`cesta_cli`),
  ADD KEY `FKcesta_prod` (`cesta_prod`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cd_cliente`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`cd_produto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cestas`
--
ALTER TABLE `cestas`
  MODIFY `cod_cesta` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cd_cliente` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `cd_produto` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cestas`
--
ALTER TABLE `cestas`
  ADD CONSTRAINT `FKcesta_cli` FOREIGN KEY (`cesta_cli`) REFERENCES `clientes` (`cd_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKcesta_prod` FOREIGN KEY (`cesta_prod`) REFERENCES `produtos` (`cd_produto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
