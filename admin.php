<?php

require 'security.php';
require 'conecta.php';


?>
<!doctype html>
<html>
<header>
	<title>Login</title>
	<meta lang="pt-br">
    <meta charset="UTF-8">
	<link rel="stylesheet" href="css/estilo.css" >
	<link rel="stylesheet" href="css/menu.css" >
	
</header>
<body>
<header>
	<?php include 'lib/menu.php' ?>
</header>
<main>
    <div>
        <form action="cadastra_produto.php" method="post">
            <h2>Cadastro de Produto</h2>
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" required>
            
            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo">
            
            <label for="gramatura">Gramatura:</label>
            <input type="text" name="gramatura">
            
            <label for="cor">Cor:</label>
            <input type="text" name="cor">
            
            <label for="preco">Preço:</label>
            <input type="number" name="preco" step="0.01" placeholder="0.00">
            
            <input type="submit" value="Salvar Produto">
        </form>
    </div>

    <section>
        <h1 style="text-align: center;">Lista de Produtos</h1>
        <div class="lista-produtos">
            <?php   
                $sql = "SELECT * FROM produto";
                $stmt = $pdo->query($sql);

                while ($row = $stmt->fetch()) {
                    echo "<div class='produto-card'>";
                    echo "<strong>ID:</strong> " . $row['id_produto'] . "<br>";
                    echo "<strong>Descrição:</strong> " . $row['descricao'] . "<br>";
                    echo "<strong>Modelo:</strong> " . $row['modelo'] . "<br>";
                    echo "<strong>Preço:</strong> R$ " . number_format($row['preco'], 2, ',', '.') . "<br>";
                    echo "</div>";
                }
            ?>
        </div>
    </section>
</main>
<?php
	//Com loop usando for
	/*
	$resultados = $stmt->fetchAll(); // Transforma tudo em um array
	$total = count($resultados);    // Conta quantos registros existem
	for ($i = 0; $i < $total; $i++) {
		echo "ID: " . $resultados[$i]['id_produto'] . "<br>";
        echo "Descrição: " . $resultados[$i]['descricao'] . "<br>";
	}
	*/
?>

</body>
</html>