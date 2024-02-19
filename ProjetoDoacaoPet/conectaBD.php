<?php
// endereco
// nome do BD
// usuario
// senha
$endereco = 'localhost';
$banco = 'postgres';
$usuario = 'postgres';
$senha = 'postgres';
try {
// sgbd:host;port;dbname
// usuario
// senha
// errmode
$pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco", $usuario, $senha,
[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
echo "Conectado no banco de dados!!!";
$sql = "CREATE TABLE IF NOT EXISTS USUARIO (NOME VARCHAR(255),EMAIL VARCHAR(255) PRIMARY KEY,TELEFONE VARCHAR(255),DATA_NASCIMENTO VARCHAR(255),SENHA VARCHAR(255))";
$pdo->exec($sql);

} catch (PDOException $e) {
echo "Falha ao conectar ao banco de dados. <br/>";
die($e->getMessage());
}
?>