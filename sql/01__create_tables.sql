--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` int NOT NULL,
  `email` varchar(40) NOT NULL,
  `cod_area` int NOT NULL,
  `telefone` int NOT NULL,
  `data_nascimento` date NOT NULL,
  `genero` char(1) NOT NULL,
  `estado_civil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `id_produto` int NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `modelo` varchar(40) NOT NULL,
  `gramatura` int NOT NULL,
  `cor` varchar(255) NOT NULL,
  `preco` decimal(19,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- --------------------------------------------------------
--
-- Table structure for table `venda`
--

CREATE TABLE `venda` (
  `id_venda` int NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `id_cliente` int NOT NULL,
  `id_forma_pagamento` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `venda_produtos`
--

CREATE TABLE `venda_produtos` (
  `id_venda` int NOT NULL,
  `id_produto` int NOT NULL,
  `quantidade` int NOT NULL,
  `preco` decimal(19,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);


--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id_venda`);

--
-- Indexes for table `venda_produtos`
--
ALTER TABLE `venda_produtos`
  ADD KEY `id_venda` (`id_venda`),
  ADD KEY `id_produto` (`id_produto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `id_venda` int NOT NULL AUTO_INCREMENT;

