<?php

require 'vendor/autoload.php';

use Doctrine\DBAL\DriverManager;

// Configurações do banco de dados
$connectionParams = [
    'dbname' => 'sistemaControleClientes',
    'user' => 'postgres',
    'password' => 'developer001',
    'host' => '35.184.153.207',
    'driver' => 'pdo_pgsql',
];

try {
    // Estabelece a conexão com o banco de dados
    $conn = DriverManager::getConnection($connectionParams);

    // Exibe uma mensagem de conexão bem-sucedida
    echo "Conexão bem-sucedida com o banco de dados!" . "<br>" . PHP_EOL;

    // Exemplo de consulta ao banco de dados
    $sql = "SELECT * FROM clientes";
    $stmt = $conn->executeQuery($sql);
    $results = $stmt->fetchAllAssociative();

    // Exibe os resultados
    //$jsonResults = json_encode($results);

    foreach ($results as $row) {
        echo '<p>' . "ID: " . $row['id'] . ", Nome: " . $row['nome'] . ", Email:" . $row['email']
        . ", Telefone: " . $row['telefone'] . ", Entrada: " . $row['data_entrada'] . '</p>';
    }
} catch (Exception $e) {
    // Exibe uma mensagem de erro caso ocorra uma exceção
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage() . PHP_EOL;
}
?>