
CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

ALTER TABLE `cliente` CHANGE `cpf` `cpf` BIGINT NOT NULL;