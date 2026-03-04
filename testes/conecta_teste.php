<?php
$host = 'localhost';
$db   = 'sistema_empresa';
$user = 'root';
$pass = '1234'; 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    // Configura o PDO para lançar exceções em caso de erro
	//echo nl2br("conectando \n") ;
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
$email = "admin@empresa.com";
$sql = "SELECT * FROM usuario WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->execute();
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

echo "Nome do usuário " . $usuario['nome'];

?>
