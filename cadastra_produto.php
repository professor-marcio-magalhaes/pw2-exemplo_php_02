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
<?php

$descricao =  $_POST['descricao'];
$modelo= $_POST['modelo'];
$gramatura = $_POST['gramatura'];
$cor = $_POST['cor'];
$preco = $_POST['preco'];

if(trim($gramatura) == ""){
    die("Gramatura não pode ser nula");
    //header("Location: admin.php?erro=123");
}

$sql = "INSERT INTO produto (descricao, modelo, gramatura, cor, preco) 
        VALUES (:descricao, :modelo, :gramatura, :cor, :preco)";
$stmt = $pdo->prepare($sql);


try {
    $stmt->execute([
        ':descricao'   => $descricao,
        ':modelo'      => $modelo,
        ':gramatura'   => $gramatura,
        ':cor'         => $cor,
        ':preco'       => $preco

    ]);
    echo "Produto inserido com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao inserir: " . $e->getMessage();
}


?>
</main>
</body>
</html>